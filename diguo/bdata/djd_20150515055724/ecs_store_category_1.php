<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_store_category`;");
E_C("CREATE TABLE `ecs_store_category` (
  `id` int(11) NOT NULL auto_increment,
  `cate_name` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `cate_order` smallint(6) NOT NULL default '0' COMMENT '????',
  `is_show` tinyint(4) NOT NULL default '1' COMMENT '????',
  `is_recom` tinyint(4) NOT NULL default '0' COMMENT '???????',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1");
E_D("replace into `ecs_store_category` values('2','??','0','1','1');");
E_D("replace into `ecs_store_category` values('4','??','0','1','1');");
E_D("replace into `ecs_store_category` values('5','??','0','1','1');");
E_D("replace into `ecs_store_category` values('6','ACE','0','1','1');");

require("../../inc/footer.php");
?>