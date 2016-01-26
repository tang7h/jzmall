<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_return`;");
E_C("CREATE TABLE `ecs_order_return` (
  `ret_id` int(10) NOT NULL auto_increment COMMENT '退换货id',
  `goods_id` int(13) NOT NULL COMMENT '商品唯一id',
  `user_id` int(10) NOT NULL COMMENT '用户id',
  `rec_id` int(10) NOT NULL COMMENT '订单商品唯一id',
  `order_id` mediumint(8) NOT NULL COMMENT '所属订单号',
  `order_sn` varchar(20) NOT NULL,
  `back` tinyint(3) NOT NULL COMMENT '退货标识',
  `goods_attr` varchar(30) NOT NULL COMMENT '退货颜色属性',
  `exchange` tinyint(3) NOT NULL COMMENT '换货标识',
  `attr_val` varchar(200) NOT NULL COMMENT '换货属性',
  `cause_id` int(10) NOT NULL COMMENT '退换货原因',
  `apply_time` varchar(120) NOT NULL COMMENT '退换货申请时间',
  `should_return` decimal(10,2) NOT NULL COMMENT '应退金额',
  `actual_return` decimal(10,2) NOT NULL COMMENT '实退金额',
  `remark` text NOT NULL COMMENT '备注',
  `country` smallint(5) NOT NULL COMMENT '国家',
  `province` smallint(5) NOT NULL COMMENT '省份',
  `city` smallint(5) NOT NULL COMMENT '城市',
  `district` smallint(5) NOT NULL COMMENT '区',
  `addressee` varchar(30) NOT NULL COMMENT '收件人',
  `phone` int(11) NOT NULL COMMENT '联系电话',
  `address` varchar(100) NOT NULL COMMENT '详细地址',
  `zipcode` int(6) default NULL COMMENT '邮编',
  `is_check` tinyint(3) NOT NULL COMMENT '是否审核0：未审核1：已审核',
  `return_status` tinyint(3) NOT NULL COMMENT '退换货状态',
  `refound_status` tinyint(3) NOT NULL COMMENT '退款状态',
  `back_shipping_name` varchar(30) NOT NULL COMMENT '退回快递名称',
  `back_other_shipping` varchar(30) NOT NULL COMMENT '其他快递名称',
  `back_invoice_no` varchar(50) NOT NULL COMMENT '退回快递单号',
  `out_shipping_name` varchar(30) NOT NULL COMMENT '换出快递名称',
  `out_invoice_no` varchar(50) NOT NULL COMMENT '换出快递单号',
  `seller_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`ret_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='商品退货表'");
E_D("replace into `ecs_order_return` values('1','145','12','1','1','ECS000145','1','0','0','','16','1409526751','1000.00','1000.00','ewqe e ','1','3','36','398','小王','0','西柏涧','323','0','1','0','','','','','','0');");
E_D("replace into `ecs_order_return` values('2','145','30','81','86','ECS000145','1','尺寸:juj \r\n功能:jhjhy \r\n','0','','16','1417630798','1000.00','0.00','','1','3','38','418','','0','111','0','0','2','0','','','','','','0');");

require("../../inc/footer.php");
?>