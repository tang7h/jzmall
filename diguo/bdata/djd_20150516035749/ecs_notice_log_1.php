<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_notice_log`;");
E_C("CREATE TABLE `ecs_notice_log` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `goods_name` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `send_ok` tinyint(1) NOT NULL,
  `send_type` tinyint(1) NOT NULL default '1',
  `send_time` int(10) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>