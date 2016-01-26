<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_return_goods`;");
E_C("CREATE TABLE `ecs_return_goods` (
  `rg_id` int(10) NOT NULL auto_increment,
  `rec_id` mediumint(8) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `product_sn` varchar(60) default NULL,
  `goods_name` varchar(120) default NULL,
  `brand_name` varchar(60) default NULL,
  `goods_sn` varchar(60) default NULL,
  `is_real` tinyint(1) unsigned default '0',
  `goods_attr` text,
  `return_type` tinyint(3) NOT NULL,
  `back_num` smallint(6) NOT NULL,
  `out_num` smallint(6) NOT NULL,
  `out_attr` varchar(100) NOT NULL,
  `refound` decimal(10,2) NOT NULL,
  PRIMARY KEY  (`rg_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=116 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_return_goods` values('111','139','144','0','','ELLE(她）特推系列真皮单肩斜挎女包JD141P29527BU蓝色','','ECS000144','1','','1','1','0','0','100.00');");
E_D("replace into `ecs_return_goods` values('112','138','106','0','','Android开发秘籍进阶篇：Android 4编程入门经典+Android 4高级编程（第3版　套装共2册） ','','ECS000106','1','','1','0','1','0','128.00');");
E_D("replace into `ecs_return_goods` values('113','138','106','0','','Android开发秘籍进阶篇：Android 4编程入门经典+Android 4高级编程（第3版　套装共2册） ','','ECS000106','1','','2','0','1','产品特色:特色商品one[1000] \r\n','128.00');");
E_D("replace into `ecs_return_goods` values('114','1','145','0','','入驻商家测试商品','','ECS000145','1','','1','1','0','0','1000.00');");
E_D("replace into `ecs_return_goods` values('115','81','145','0','','入驻商家测试商品','','ECS000145','1','尺寸:juj \r\n功能:jhjhy \r\n','1','1','0','0','1000.00');");

require("../../inc/footer.php");
?>