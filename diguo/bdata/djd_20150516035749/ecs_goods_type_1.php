<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_type`;");
E_C("CREATE TABLE `ecs_goods_type` (
  `cat_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_name` varchar(60) NOT NULL default '',
  `enabled` tinyint(1) unsigned NOT NULL default '1',
  `attr_group` varchar(255) NOT NULL,
  `seller_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_type` values('1','空调','1','','0');");
E_D("replace into `ecs_goods_type` values('2','电视','1','','0');");
E_D("replace into `ecs_goods_type` values('4','夜光键盘','1','主体\r\n显示','2');");
E_D("replace into `ecs_goods_type` values('5','123456','1','123456','0');");
E_D("replace into `ecs_goods_type` values('6','产品1','1','好','8');");

require("../../inc/footer.php");
?>