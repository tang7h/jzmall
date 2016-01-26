<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_baitiao`;");
E_C("CREATE TABLE `ecs_baitiao` (
  `baitiao_id` int(11) NOT NULL auto_increment,
  `user_id` mediumint(8) NOT NULL COMMENT '??id',
  `amount` decimal(10,0) NOT NULL default '0' COMMENT '??????',
  `repay_term` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `over_repay_trem` int(11) NOT NULL default '0' COMMENT '?????????',
  `add_time` varchar(50) character set utf8 NOT NULL,
  PRIMARY KEY  (`baitiao_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COMMENT='?????'");
E_D("replace into `ecs_baitiao` values('10','12','10000','100','100','1411933344');");
E_D("replace into `ecs_baitiao` values('11','30','10000','45','15','1417562102');");
E_D("replace into `ecs_baitiao` values('12','46','100000','30','3','1419461383');");

require("../../inc/footer.php");
?>