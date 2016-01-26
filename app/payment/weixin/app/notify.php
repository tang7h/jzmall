<?php
ini_set('date.timezone','Asia/Shanghai');
error_reporting(E_ERROR);

require_once "lib/WxPay.Api.php";
require_once 'lib/WxPay.Notify.php';
require_once 'log.php';

define('IN_ECS', true);

require($_SERVER ['DOCUMENT_ROOT'] . '/includes/init.php');
require($_SERVER ['DOCUMENT_ROOT'] . '/includes/lib_payment.php');
require($_SERVER ['DOCUMENT_ROOT'] . '/includes/lib_order.php');
require($_SERVER ['DOCUMENT_ROOT'] . '/includes/lib_clips.php');

//初始化日志
$logHandler= new CLogFileHandler("logs/".date('Y-m-d').'.log');
$log = Log::Init($logHandler, 15);

class PayNotifyCallBack extends WxPayNotify
{
	//查询订单
	public function Queryorder($transaction_id)
	{
		$input = new WxPayOrderQuery();
		$input->SetTransaction_id($transaction_id);
		$result = WxPayApi::orderQuery($input);
		Log::DEBUG("query:" . json_encode($result));
		if(array_key_exists("return_code", $result)
			&& array_key_exists("result_code", $result)
			&& $result["return_code"] == "SUCCESS"
			&& $result["result_code"] == "SUCCESS")
		{
			return true;
		}
		return false;
	}
	
	//重写回调处理函数
	public function NotifyProcess($data, &$msg)
	{
        Log::DEBUG("call back:" . json_encode($data));
		$notfiyOutput = array();
		
		if(!array_key_exists("transaction_id", $data)){
			$msg = "输入参数不正确";
			return false;
		}
		//查询订单，判断订单真实性
		if(!$this->Queryorder($data["transaction_id"])){
			$msg = "订单查询失败";
			return false;
		}

        //处理订单
        if(!array_key_exists("attach", $data) || !is_numeric($data['attach'])) {
            return false;
        }

        //走订单支付流程
        $this->order($data['attach']);

        return true;
	}

    public function order($tradeId){
        $order = order_info(0, $tradeId);

        if ($order) {
            Log::DEBUG('order_id:'.$order['order_id']);

            $log_id = insert_pay_log($order['order_id'], $order['order_amount'], PAY_ORDER);

            Log::DEBUG('log_id:'.$log_id);

            order_paid($log_id, 2);
        }
    }
}

Log::DEBUG("n ***********************begin notify");
Log::DEBUG("\n DATA:".json_encode($_REQUEST));

$notify = new PayNotifyCallBack();
$notify->Handle(false);

Log::DEBUG("\n **********************end notify");

