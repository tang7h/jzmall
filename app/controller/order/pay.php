<?php
/*
 *
 *       _/_/_/                      _/        _/_/_/_/_/                     
 *    _/          _/_/      _/_/    _/  _/          _/      _/_/      _/_/    
 *   _/  _/_/  _/_/_/_/  _/_/_/_/  _/_/          _/      _/    _/  _/    _/   
 *  _/    _/  _/        _/        _/  _/      _/        _/    _/  _/    _/    
 *   _/_/_/    _/_/_/    _/_/_/  _/    _/  _/_/_/_/_/    _/_/      _/_/       
 *                                                                          
 *
 *  Copyright 2013-2014, Geek Zoo Studio
 *  http://www.ecmobile.cn/license.html
 *
 *  HQ China:
 *    2319 Est.Tower Van Palace 
 *    No.2 Guandongdian South Street 
 *    Beijing , China
 *
 *  U.S. Office:
 *    One Park Place, Elmira College, NY, 14901, USA
 *
 *  QQ Group:   329673575
 *  BBS:        bbs.ecmobile.cn
 *  Fax:        +86-10-6561-5510
 *  Mail:       info@geek-zoo.com
 */


define('INIT_NO_USERS', true);
require(EC_PATH . '/includes/init.php');
GZ_Api::authSession();

include_once(EC_PATH . '/includes/lib_transaction.php');
include_once(EC_PATH . '/includes/lib_payment.php');
include_once(EC_PATH . '/includes/lib_order.php');
include_once(EC_PATH . '/includes/lib_clips.php');
define('GZ_PATH', dirname(__FILE__));
$order_id = _POST('order_id', 0);
if (!$order_id) {
	GZ_Api::outPut(101);
}
$user_id = $_SESSION['user_id'];


/* 订单详情 */
$order = get_order_detail($order_id, $user_id);
$orderGoods = getOrderGood($order_id,1);

if ($order['pay_id'] > 0)
{
  $payment = payment_info($order['pay_id']);
}

if ($order === false)
{
	GZ_Api::outPut(8);
}	

$base = sprintf('<base href="%s/" />', dirname($GLOBALS['ecs']->url()));
$html = '';//'<!DOCTYPE html><html><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0">'.$base.'</head><body>%s</body></html>';

$payment['pay_code'] = 'weixin';

if ($payment['pay_code'] == "upop")
{
	include_once(GZ_PATH . '/payment/UPMP/upop_mobile.php');
	$upop = new UPOP_MOBILE();
	$pay_result = $upop->get_code($order,$payment); 
	$out =array('pay_online' => sprintf($html, $order['pay_online']));	

	if ($pay_result['upop_tn']) 
	{
		$out['upop_tn'] = $pay_result['upop_tn'];
		$out['pay_wap'] = $pay_result['pay_url'];
	}	

	GZ_Api::outPut($out);
}
else if ($payment['pay_code'] == "alipay")//支付宝支付wap
{		
	include_once(GZ_PATH . '/payment/alipay/wap/alipay_mobile.php');
	require_once(GZ_PATH . "/payment/alipay/wap/alipay.config.php");
	$alipay_mobile = new ALIPAY_MOBILE($alipay_config);
	$wappay_url = $alipay_mobile->get_wappay_url($order,$payment);
	if ($wappay_url) 
	{
		GZ_Api::outPut(array('pay_online' => sprintf($html, $order['pay_online']),							
							'pay_wap' => $wappay_url
							));
	}
	else
	{		
		GZ_Api::outPut(array('pay_online' => sprintf($html, $order['pay_online'])								
								));
	}	
}
else if($payment['pay_code'] =='weixin'){//微信支付
    require_once(GZ_PATH . '/payment/weixin/app/lib/WxPay.Data.php');
    require_once(GZ_PATH . '/payment/weixin/app/lib/WxPay.Api.php');

    $input = new WxPayUnifiedOrder();
    $input->SetBody($orderGoods['goods_name']);
    $input->SetAttach($order['order_sn']); //订单序列号
    $input->SetOut_trade_no(WxPayConfig::MCHID.date("YmdHis"));
    $input->SetTotal_fee($order['order_amount']*100);
    $input->SetTime_start(date("YmdHis"));
    $input->SetTime_expire(date("YmdHis", time() + 600));
    $input->SetGoods_tag($order['pay_desc']);
    $input->SetNotify_url("http://zlshop.qmyxi.com/app/payment/weixin/app/notify.php");
    $input->SetTrade_type("APP");
    $input->SetProduct_id($order_id);

    $result = WxPayApi::unifiedOrder($input);

    if(!empty($result) && array_key_exists('prepay_id',$result)){

        $prepayId = $result['prepay_id'];

        $appData = WxPayApi::appOrderData($prepayId);

        GZ_Api::outPut($appData);
    }else{
        GZ_Api::outPut(111,null,'支付失败');
    }
}
else
{
    GZ_Api::outPut(111,'支付方式不存在');
}


function getOrderGood($orderId,$num=-1){

    $sql = 'select * from '.$GLOBALS['ecs']->table('order_goods').' where order_id='.$orderId.' limit 0,'.$num;
    $sqlNum = 'select count(*) from '.$GLOBALS['ecs']->table('order_goods').' where order_id='.$orderId;
    $num = $GLOBALS['db']->getOne($sqlNum);
    $info = $GLOBALS['db']->getAll($sql);

    if(!empty($info) && count($info)>=1){

        $data = $info[0];
        $data['order_goods_num'] = $num;

        return $data;

    }else{
    }

    return array();
}

?>