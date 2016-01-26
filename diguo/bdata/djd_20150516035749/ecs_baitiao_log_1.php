<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_baitiao_log`;");
E_C("CREATE TABLE `ecs_baitiao_log` (
  `log_id` int(11) NOT NULL auto_increment,
  `baitiao_id` int(11) NOT NULL COMMENT '??id',
  `user_id` mediumint(8) NOT NULL COMMENT '??id',
  `use_date` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `repay_date` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `order_id` mediumint(8) NOT NULL COMMENT '??id',
  `repayed_date` varchar(50) character set utf8 default NULL COMMENT '??????',
  `is_repay` tinyint(1) NOT NULL default '0' COMMENT '????',
  PRIMARY KEY  (`log_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1 COMMENT='?????????'");
E_D("replace into `ecs_baitiao_log` values('5','10','12','1408753605','1411345605','10','','0');");
E_D("replace into `ecs_baitiao_log` values('6','10','12','1410203085','1412795085','42','','0');");
E_D("replace into `ecs_baitiao_log` values('7','10','12','1410203085','1412795085','43','','0');");
E_D("replace into `ecs_baitiao_log` values('8','10','12','1410825159','1413417159','44','','0');");
E_D("replace into `ecs_baitiao_log` values('9','10','12','1410825159','1413417159','45','','0');");

require("../../inc/footer.php");
?>