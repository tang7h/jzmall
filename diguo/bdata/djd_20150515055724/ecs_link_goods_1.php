<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_link_goods`;");
E_C("CREATE TABLE `ecs_link_goods` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `link_goods_id` mediumint(8) unsigned NOT NULL default '0',
  `is_double` tinyint(1) unsigned NOT NULL default '0',
  `admin_id` tinyint(3) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_id`,`link_goods_id`,`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_link_goods` values('149','84','0','1');");
E_D("replace into `ecs_link_goods` values('149','85','0','1');");
E_D("replace into `ecs_link_goods` values('149','86','0','1');");
E_D("replace into `ecs_link_goods` values('149','87','0','1');");
E_D("replace into `ecs_link_goods` values('149','88','0','1');");
E_D("replace into `ecs_link_goods` values('149','89','0','1');");
E_D("replace into `ecs_link_goods` values('149','90','0','1');");
E_D("replace into `ecs_link_goods` values('149','91','0','1');");
E_D("replace into `ecs_link_goods` values('157','4','0','1');");
E_D("replace into `ecs_link_goods` values('157','5','0','1');");
E_D("replace into `ecs_link_goods` values('157','7','0','1');");
E_D("replace into `ecs_link_goods` values('157','12','0','1');");
E_D("replace into `ecs_link_goods` values('157','6','0','1');");

require("../../inc/footer.php");
?>