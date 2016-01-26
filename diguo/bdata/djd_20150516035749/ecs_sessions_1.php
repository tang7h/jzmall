<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions`;");
E_C("CREATE TABLE `ecs_sessions` (
  `sesskey` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `userid` mediumint(8) unsigned NOT NULL default '0',
  `adminid` mediumint(8) unsigned NOT NULL default '0',
  `ip` char(15) NOT NULL default '',
  `user_name` varchar(60) NOT NULL,
  `user_rank` tinyint(3) NOT NULL,
  `discount` decimal(3,2) NOT NULL,
  `email` varchar(60) NOT NULL,
  `data` char(255) NOT NULL default '',
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MEMORY DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions` values('9854fca444a8e8d5820964b98f5b04cb','1431747746','60','0','127.0.0.1','chenyan','1','1.00','45988127@qq.com','a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1431718920\";s:7:\"last_ip\";s:9:\"127.0.0.1\";s:12:\"shipping_fee\";i:0;s:5:\"total\";s:0:\"\";s:12:\"seller_total\";s:0:\"\";s:9:\"flow_type\";i:0;}');");
E_D("replace into `ecs_sessions` values('11da3eef2d3aaac2a815d938211bf7fe','1431747899','0','1','127.0.0.1','0','0','0.00','0','');");
E_D("replace into `ecs_sessions` values('b3fe8ee43b76ed665a505b9dd197cbbb','1431747405','0','0','127.0.0.1','0','0','1.00','0','a:3:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;}');");

require("../../inc/footer.php");
?>