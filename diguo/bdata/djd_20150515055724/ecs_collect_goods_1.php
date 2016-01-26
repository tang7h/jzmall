<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_collect_goods`;");
E_C("CREATE TABLE `ecs_collect_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `add_time` int(11) unsigned NOT NULL default '0',
  `is_attention` tinyint(1) NOT NULL default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `user_id` (`user_id`),
  KEY `goods_id` (`goods_id`),
  KEY `is_attention` (`is_attention`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_collect_goods` values('1','6','6','1403127360','0');");
E_D("replace into `ecs_collect_goods` values('2','12','145','1409764958','0');");
E_D("replace into `ecs_collect_goods` values('3','12','106','1409769563','0');");
E_D("replace into `ecs_collect_goods` values('4','12','120','1413316308','0');");
E_D("replace into `ecs_collect_goods` values('5','12','147','1413316714','0');");
E_D("replace into `ecs_collect_goods` values('6','28','106','1416655535','0');");
E_D("replace into `ecs_collect_goods` values('7','46','162','1419381955','1');");
E_D("replace into `ecs_collect_goods` values('8','49','162','1419383148','0');");

require("../../inc/footer.php");
?>