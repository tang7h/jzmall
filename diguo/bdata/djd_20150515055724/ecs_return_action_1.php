<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_return_action`;");
E_C("CREATE TABLE `ecs_return_action` (
  `action_id` mediumint(8) unsigned NOT NULL auto_increment,
  `ret_id` mediumint(8) unsigned NOT NULL default '0',
  `action_user` varchar(30) NOT NULL default '',
  `return_status` tinyint(1) unsigned NOT NULL default '0',
  `refound_status` tinyint(1) unsigned NOT NULL default '0',
  `action_place` tinyint(1) unsigned NOT NULL default '0',
  `action_note` varchar(255) NOT NULL default '',
  `log_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`action_id`),
  KEY `order_id` (`ret_id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_return_action` values('30','1','买家','0','0','0','老板退货','1408933288');");
E_D("replace into `ecs_return_action` values('31','2','买家','0','0','0','dsadas','1408991286');");
E_D("replace into `ecs_return_action` values('32','1','admin','1','0','0','','1408991391');");
E_D("replace into `ecs_return_action` values('33','1','admin','0','1','0','dsd','1408993514');");
E_D("replace into `ecs_return_action` values('34','2','admin','1','0','0','','1408993669');");
E_D("replace into `ecs_return_action` values('35','1','买家','0','0','0','ewqe e ','1409526751');");
E_D("replace into `ecs_return_action` values('36','1','xiaowang','1','0','0','','1409532756');");
E_D("replace into `ecs_return_action` values('37','1','xiaowang','0','1','0','we','1409532814');");
E_D("replace into `ecs_return_action` values('38','1','xiaowang','3','0','0','','1409532830');");
E_D("replace into `ecs_return_action` values('39','1','xiaowang','4','0','0','','1409532843');");
E_D("replace into `ecs_return_action` values('40','1','xiaowang','1','0','0','','1409533306');");
E_D("replace into `ecs_return_action` values('41','1','xiaowang','1','0','0','','1409533363');");
E_D("replace into `ecs_return_action` values('42','2','买家','0','0','0','','1417630798');");
E_D("replace into `ecs_return_action` values('43','2','admin','2','0','0','','1417630937');");

require("../../inc/footer.php");
?>