<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_feedback`;");
E_C("CREATE TABLE `ecs_touch_feedback` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `msg_id` mediumint(8) unsigned NOT NULL,
  `msg_read` int(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8");

require("../../inc/footer.php");
?>