<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_category`;");
E_C("CREATE TABLE `ecs_touch_category` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `cat_id` int(10) unsigned default NULL COMMENT '外键',
  `cat_image` varchar(255) default NULL COMMENT '分类ICO图标',
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=736 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_category` values('735','996','');");

require("../../inc/footer.php");
?>