<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_order`;");
E_C("CREATE TABLE `ecs_delivery_order` (
  `delivery_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_sn` varchar(20) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `invoice_no` varchar(50) default NULL,
  `add_time` int(10) unsigned default '0',
  `shipping_id` tinyint(3) unsigned default '0',
  `shipping_name` varchar(120) default NULL,
  `user_id` mediumint(8) unsigned default '0',
  `action_user` varchar(30) default NULL,
  `consignee` varchar(60) default NULL,
  `address` varchar(250) default NULL,
  `country` smallint(5) unsigned default '0',
  `province` smallint(5) unsigned default '0',
  `city` smallint(5) unsigned default '0',
  `district` smallint(5) unsigned default '0',
  `sign_building` varchar(120) default NULL,
  `email` varchar(60) default NULL,
  `zipcode` varchar(60) default NULL,
  `tel` varchar(60) default NULL,
  `mobile` varchar(60) default NULL,
  `best_time` varchar(120) default NULL,
  `postscript` varchar(255) default NULL,
  `how_oos` varchar(120) default NULL,
  `insure_fee` decimal(10,2) unsigned default '0.00',
  `shipping_fee` decimal(10,2) unsigned default '0.00',
  `update_time` int(10) unsigned default '0',
  `suppliers_id` smallint(5) default '0',
  `status` tinyint(1) unsigned NOT NULL default '0',
  `agency_id` smallint(5) unsigned default '0',
  `seller_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`delivery_id`),
  KEY `user_id` (`user_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_order` values('1','20140901143423580','2014090104124','1','','1409520289','6','邮局平邮','12','xiaowang','小王','西柏涧','1','3','36','398','','984265135@qq.com','','15516359816','','','','等待所有商品备齐后再发','0.00','3.50','1409524477','0','0','0','2');");
E_D("replace into `ecs_delivery_order` values('2','20140904143049052','2014090147285','25','','1409537648','6','邮局平邮','12','admin','小王','西柏涧','1','3','36','398','','984265135@qq.com','','15516359816','','','','等待所有商品备齐后再发','0.00','3.50','1409783444','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('3','20140916161391755','2014091675618','44','','1410825159','6','邮局平邮','12','admin','小王','西柏涧','1','0','0','0','','984265135@qq.com','','','15513626539','','','等待所有商品备齐后再发','0.00','3.50','1410826404','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('4','20140922155660588','2014092238517','51','','1411343724','6','邮局平邮','12','admin','小王','西柏涧','1','0','0','0','','984265135@qq.com','','','15513626539','','','等待所有商品备齐后再发','0.00','3.50','1411343797','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('5','20141016173566064','2014101491274','68','','1413245074','3','城际快递','12','admin','小王','西柏涧','1','0','0','0','','984265135@qq.com','','','15513626539','','','等待所有商品备齐后再发','0.00','10.00','1413423333','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('6','20141016174615966','2014101610050','69','','1413423859','3','城际快递','12','admin','1','ewqe','1','3','37','411','','213213@qq.com','2323','21333213','','','','等待所有商品备齐后再发','0.00','10.00','1413424011','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('7','20141016174712150','2014101610050','69','','1413423859','3','城际快递','12','admin','1','ewqe','1','3','37','411','','213213@qq.com','2323','21333213','','','','等待所有商品备齐后再发','0.00','10.00','1413424029','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('8','20141016175315702','2014101331939','60','','1413159689','6','邮局平邮','12','admin','小王','西柏涧','1','0','0','0','','984265135@qq.com','','','15513626539','','','等待所有商品备齐后再发','0.00','3.50','1413424432','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('9','20141201143541258','2014120193022','73','','1417386873','7','运费到付','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','0.00','1417386927','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('10','20141201165656977','2014120158859','76','11111111111','1417394698','9','中通速递','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','10.00','1417395362','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('11','20141203115442743','2014120353029','80','','1417550020','5','申通快递','12','xiaowang','小王','西柏涧','1','6','78','712','','984265135@qq.com','','','15513626539','','','等待所有商品备齐后再发','0.00','15.00','1417550091','0','0','0','2');");
E_D("replace into `ecs_delivery_order` values('12','20141203115536076','2014120394551','81','','1417550020','5','申通快递','12','admin','小王','西柏涧','1','6','78','712','','984265135@qq.com','','','15513626539','','','等待所有商品备齐后再发','0.00','15.00','1417550156','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('13','20141203132299196','2014120331701','82','','1417555341','9','中通速递','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','0.00','1417555367','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('14','20141203143983217','2014120302208','84','768970412846','1417559967','5','申通快递','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','15.00','1417559999','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('15','20141203145644545','2014120314257','86','123456789','1417560741','5','申通快递','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','15.00','1417560978','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('16','20141203170015691','2014120399486','88','','1417568354','5','申通快递','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','15.00','1417568423','0','2','0','0');");
E_D("replace into `ecs_delivery_order` values('17','20141203170083835','2014120399486','88','11233333','1417568354','5','申通快递','30','admin','11','1111','1','3','38','418','','11@qq.com','1111','','1111','','','等待所有商品备齐后再发','0.00','15.00','1417568448','0','0','0','0');");
E_D("replace into `ecs_delivery_order` values('18','20141205113907529','2014120354107','79','','1417544641','7','运费到付','36','admin','1111111','qqqqqqqq','1','6','80','746','','','','','11111111111','','','等待所有商品备齐后再发','0.00','0.00','1417721956','0','2','0','0');");
E_D("replace into `ecs_delivery_order` values('19','20150516113344972','2015051694400','105','','1431716172','3','城际快递','60','admin','陈炎','中南市场E区9栋','1','14','209','1752','','45988127@qq.com','414000','','18707307876','','','等待所有商品备齐后再发','0.00','0.00','1431718415','0','0','0','0');");

require("../../inc/footer.php");
?>