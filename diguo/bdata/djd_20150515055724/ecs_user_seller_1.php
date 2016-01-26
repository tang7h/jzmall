<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_user_seller`;");
E_C("CREATE TABLE `ecs_user_seller` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) unsigned NOT NULL COMMENT '??id',
  `is_check` tinyint(1) NOT NULL default '0' COMMENT '????,0????1?????2?????',
  `checkout_type` tinyint(4) NOT NULL default '0' COMMENT '????0??1??2???3?',
  `use_fee` decimal(10,0) NOT NULL COMMENT '?????',
  `deposit` decimal(10,0) NOT NULL COMMENT '?????',
  `fencheng` float NOT NULL COMMENT '??????????',
  `remark` varchar(100) character set utf8 NOT NULL COMMENT '???????',
  `add_time` varchar(20) character set utf8 NOT NULL COMMENT '????????',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COMMENT='????????'");
E_D("replace into `ecs_user_seller` values('2','12','1','0','10000','2000','1','dsad ','1415149905');");
E_D("replace into `ecs_user_seller` values('3','37','1','0','100','1000','0','','1418236894');");
E_D("replace into `ecs_user_seller` values('4','38','1','3','1000','0','0','1233','1418239122');");
E_D("replace into `ecs_user_seller` values('5','41','1','0','1000','10000','2','','1419191599');");
E_D("replace into `ecs_user_seller` values('6','45','1','3','0','0','0','','1419369163');");
E_D("replace into `ecs_user_seller` values('7','44','1','0','0','0','0','','1419371215');");
E_D("replace into `ecs_user_seller` values('8','46','1','3','5000','10000','2','2222','1419373730');");
E_D("replace into `ecs_user_seller` values('9','47','1','0','0','0','0','','1419374996');");
E_D("replace into `ecs_user_seller` values('10','49','1','3','0','0','0','','1419380436');");

require("../../inc/footer.php");
?>