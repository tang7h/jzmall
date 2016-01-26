<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_user_address`;");
E_C("CREATE TABLE `ecs_user_address` (
  `address_id` mediumint(8) unsigned NOT NULL auto_increment,
  `address_name` varchar(50) NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `consignee` varchar(60) NOT NULL default '',
  `email` varchar(60) NOT NULL default '',
  `country` smallint(5) NOT NULL default '0',
  `province` smallint(5) NOT NULL default '0',
  `city` smallint(5) NOT NULL default '0',
  `district` smallint(5) NOT NULL default '0',
  `address` varchar(120) NOT NULL default '',
  `zipcode` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `mobile` varchar(60) NOT NULL default '',
  `sign_building` varchar(120) NOT NULL default '',
  `best_time` varchar(120) NOT NULL default '',
  PRIMARY KEY  (`address_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_user_address` values('1','','1','刘先生','ecshop@ecshop.com','1','2','52','502','海兴大厦','','010-25851234','13986765412','','');");
E_D("replace into `ecs_user_address` values('2','','3','叶先生','text@ecshop.com','1','2','52','510','通州区旗舰凯旋小区','','13588104710','','','');");
E_D("replace into `ecs_user_address` values('3','','6','q111','admin123@qq.com','1','4','55','540','22','','333','','','');");
E_D("replace into `ecs_user_address` values('4','','8','111','444@qq.com','1','7','102','907','22','','333','','','');");
E_D("replace into `ecs_user_address` values('5','','12','小王','984265135@qq.com','1','6','78','712','西柏涧','','','15513626539','','');");
E_D("replace into `ecs_user_address` values('6','','12','1','213213@qq.com','1','3','37','411','ewqe','2323','21333213','','','');");
E_D("replace into `ecs_user_address` values('7','','16','郑忠州','','1','4','53','518','铜盘路丞相坊10#802','','','13459192170','','');");
E_D("replace into `ecs_user_address` values('8','','19','54555255585','','1','6','79','718','ffxggcfgvv','','','13800138000','','');");
E_D("replace into `ecs_user_address` values('9','','26','乙','','1','6','83','0','三','','','13800138000','','');");
E_D("replace into `ecs_user_address` values('10','','27','111','','1','6','79','0','扔顶起二楼夺遥远','','','13800139000','','');");
E_D("replace into `ecs_user_address` values('11','','28','张敏','','0','2','52','500','18号','','','13888888888','','');");
E_D("replace into `ecs_user_address` values('12','','30','11','11@qq.com','1','3','38','418','1111','1111','','1111','','');");
E_D("replace into `ecs_user_address` values('13','','31','fdsa','','1','3','37','410','fdsafdsafds','','','23424','','');");
E_D("replace into `ecs_user_address` values('14','','32','feng','','1','2','52','503','Dada 2023','','','13816317305','','');");
E_D("replace into `ecs_user_address` values('15','','35','9你家里','','1','2','52','500','南通','','','13338095836','','');");
E_D("replace into `ecs_user_address` values('16','','36','1111111','','1','6','80','746','qqqqqqqq','','','11111111111','','');");
E_D("replace into `ecs_user_address` values('17','','43','Hgjj','','1','24','311','2602','Dhjgghjjg','','','1555685566','','');");
E_D("replace into `ecs_user_address` values('18','','46','qqq','2991152301@qq.com','1','6','76','695','qqqqqqqqq','525144','','13695321258','','');");
E_D("replace into `ecs_user_address` values('19','','49','777','777777@qq.com','1','6','76','693','777777','777777','','777777','','');");
E_D("replace into `ecs_user_address` values('20','','46','dsddd','2991152301@qq.com','1','4','53','519','ssss','525144','','13692321395','','');");
E_D("replace into `ecs_user_address` values('21','','52','李玟','','1','6','87','0','佛冈','','','13535991630','','');");

require("../../inc/footer.php");
?>