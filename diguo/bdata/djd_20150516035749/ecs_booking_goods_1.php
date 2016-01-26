<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_booking_goods`;");
E_C("CREATE TABLE `ecs_booking_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `link_man` varchar(60) NOT NULL default '',
  `tel` varchar(60) NOT NULL default '',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_desc` varchar(255) NOT NULL default '',
  `goods_number` smallint(5) unsigned NOT NULL default '0',
  `booking_time` int(10) unsigned NOT NULL default '0',
  `is_dispose` tinyint(1) unsigned NOT NULL default '0',
  `dispose_user` varchar(30) NOT NULL default '',
  `dispose_time` int(10) unsigned NOT NULL default '0',
  `dispose_note` varchar(255) NOT NULL default '',
  `seller_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_booking_goods` values('1','1','ecshop@ecshop.com','刘先生','13986765412','19','可以补货吗？\n我想要一个','1','1242142762','0','','0','','0');");
E_D("replace into `ecs_booking_goods` values('2','3','text@ecshop.com','叶先生','13588104710','17','什么时候有货','1','1242143592','0','','0','','0');");
E_D("replace into `ecs_booking_goods` values('3','12','984265135@qq.com','小王','15516359816','145','想买很多，但是没货了','1','1409523013','0','','0','','2');");

require("../../inc/footer.php");
?>