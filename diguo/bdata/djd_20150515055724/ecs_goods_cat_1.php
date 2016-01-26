<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_cat`;");
E_C("CREATE TABLE `ecs_goods_cat` (
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `cat_id` smallint(5) unsigned NOT NULL default '0',
  `seller_cat_id` smallint(6) NOT NULL COMMENT '商品对应的入驻商家分类',
  PRIMARY KEY  (`goods_id`,`cat_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_cat` values('157','996','0');");
E_D("replace into `ecs_goods_cat` values('157','997','0');");

require("../../inc/footer.php");
?>