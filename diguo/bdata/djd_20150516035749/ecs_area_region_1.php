<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_area_region`;");
E_C("CREATE TABLE `ecs_area_region` (
  `shipping_area_id` smallint(5) unsigned NOT NULL default '0',
  `region_id` smallint(5) unsigned NOT NULL default '0',
  `seller_id` smallint(5) unsigned NOT NULL default '0',
  PRIMARY KEY  (`shipping_area_id`,`region_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_area_region` values('1','1','0');");
E_D("replace into `ecs_area_region` values('2','1','0');");
E_D("replace into `ecs_area_region` values('3','1','0');");
E_D("replace into `ecs_area_region` values('4','3','0');");
E_D("replace into `ecs_area_region` values('4','4','0');");
E_D("replace into `ecs_area_region` values('4','6','0');");
E_D("replace into `ecs_area_region` values('4','9','0');");
E_D("replace into `ecs_area_region` values('4','30','0');");
E_D("replace into `ecs_area_region` values('4','32','0');");
E_D("replace into `ecs_area_region` values('5','1','0');");
E_D("replace into `ecs_area_region` values('6','693','0');");
E_D("replace into `ecs_area_region` values('7','500','0');");
E_D("replace into `ecs_area_region` values('7','501','0');");
E_D("replace into `ecs_area_region` values('7','502','0');");
E_D("replace into `ecs_area_region` values('7','503','0');");

require("../../inc/footer.php");
?>