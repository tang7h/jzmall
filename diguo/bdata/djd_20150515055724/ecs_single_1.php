<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_single`;");
E_C("CREATE TABLE `ecs_single` (
  `single_id` mediumint(8) NOT NULL auto_increment,
  `order_id` mediumint(8) NOT NULL,
  `single_name` varchar(100) NOT NULL,
  `single_description` text NOT NULL,
  `single_like` char(8) default NULL,
  `user_name` varchar(100) default NULL,
  `is_audit` tinyint(1) NOT NULL,
  `order_sn` varchar(20) NOT NULL,
  `addtime` varchar(20) NOT NULL,
  `goods_name` varchar(120) NOT NULL,
  `goods_id` mediumint(8) NOT NULL,
  `user_id` mediumint(8) NOT NULL,
  `order_time` varchar(20) NOT NULL,
  `comment_id` mediumint(8) default NULL,
  `single_ip` varchar(15) default '',
  `cat_id` mediumint(8) default NULL,
  `integ` varchar(8) default NULL,
  `single_browse_num` int(10) unsigned default '0',
  PRIMARY KEY  (`single_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_single` values('1','51','额外企鹅','恶趣味','0','xiaowang','1','2014092238517','1411506430','ELLE(她）特推系列真皮单肩斜挎女包JD141P29527BU蓝色','144','12','1411343724','0','','998','0','12');");
E_D("replace into `ecs_single` values('2','44','的撒的','的撒的的的的','0','xiaowang','1','2014091675618','1411506876','入驻商家测试商品','145','12','1410825159','0','','96','0','2');");

require("../../inc/footer.php");
?>