<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_nav`;");
E_C("CREATE TABLE `ecs_touch_nav` (
  `id` mediumint(8) NOT NULL auto_increment,
  `ctype` varchar(10) default NULL,
  `cid` smallint(5) unsigned default NULL,
  `name` varchar(255) NOT NULL,
  `ifshow` tinyint(1) NOT NULL,
  `vieworder` tinyint(1) NOT NULL,
  `opennew` tinyint(1) NOT NULL,
  `url` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `type` varchar(10) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `type` (`type`),
  KEY `ifshow` (`ifshow`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_nav` values('1','','0','全部分类','1','0','0','index.php?c=category&amp;a=top_all','data/attached/nav/ea401e38532f40fe1add45ce9a840778.png','middle');");
E_D("replace into `ecs_touch_nav` values('2','','0','我的订单','0','0','0','index.php?m=default&amp;c=user&amp;a=order_list','data/attached/nav/fa2f3f5df8dfa7ca5740515d47d2381d.png','middle');");
E_D("replace into `ecs_touch_nav` values('3','','0','最新团购','0','0','0','index.php?m=default&amp;c=groupbuy','data/attached/nav/0c71ca825682cad7222266a7e7cd052a.png','middle');");
E_D("replace into `ecs_touch_nav` values('4','','0','促销活动','0','0','0','index.php?m=default&amp;c=activity','data/attached/nav/ca0a1b9798403546b2b3b9ccdc7a3fcc.png','middle');");
E_D("replace into `ecs_touch_nav` values('5','','0','热门搜索','1','0','0','#','data/attached/nav/3adb4445bef4711a42c8436cdfcf6028.png','middle');");
E_D("replace into `ecs_touch_nav` values('6','','0','店铺街','1','0','0','index.php?m=default&amp;c=sellerstore&amp;a=all','data/attached/nav/72f616595e51f2d4021928fa78de1a6d.png','middle');");
E_D("replace into `ecs_touch_nav` values('7','','0','个人中心','1','0','0','index.php?m=default&amp;c=user','data/attached/nav/c213fa9cc7f8ce9502f8b570969e20b3.png','middle');");
E_D("replace into `ecs_touch_nav` values('8','','0','购物车','1','0','0','index.php?m=default&amp;c=flow&amp;a=cart','data/attached/nav/7d55a866bb35398f46d1cd50e89e4ace.png','middle');");

require("../../inc/footer.php");
?>