<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 8/29/2015
 * Time: 23:14
 */
require(EC_PATH . '/includes/init.php');

$deliverUrl = 'http://m.kuaidi100.com/index_all.html';

if(isset($_REQUEST['order_sn']) && isset($_REQUEST['uid'])){

    $sql = 'select shipping_name,invoice_no from '.$GLOBALS['ecs']->table('delivery_order')." where order_sn='{$_REQUEST['order_sn']}' and  user_id='{$_REQUEST['uid']}'";
    $data = $GLOBALS['db']->getRow($sql);
    if(!empty($data)){

        $deliverUrl = $deliverUrl."?type={$data[shipping_name]}&postid={$data[invoice_no]}";

    }

}

header("Location:$deliverUrl");