<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_cart`;");
E_C("CREATE TABLE `ecs_cart` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `session_id` char(32) character set utf8 collate utf8_bin NOT NULL default '',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_sn` varchar(60) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `group_id` varchar(255) NOT NULL,
  `goods_name` varchar(120) NOT NULL default '',
  `market_price` decimal(10,2) unsigned NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_number` smallint(5) unsigned NOT NULL default '0',
  `goods_attr` text NOT NULL,
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `rec_type` tinyint(1) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `is_shipping` tinyint(1) unsigned NOT NULL default '0',
  `can_handsel` tinyint(3) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  `seller_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `session_id` (`session_id`)
) ENGINE=MyISAM AUTO_INCREMENT=602 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_cart` values('600','0','e11399d1b5a9f93f78f1005066dec16c','5','ECS000005','0','','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','3298.79','0.00','1','产品特色:超静音 \n','1','','0','0','0','0','0','10','0');");
E_D("replace into `ecs_cart` values('599','0','e11399d1b5a9f93f78f1005066dec16c','157','123456789','0','','123456','183.00','125.00','3','','1','','0','0','0','0','0','','0');");
E_D("replace into `ecs_cart` values('601','0','e11399d1b5a9f93f78f1005066dec16c','65','ECS000065','0','','琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 M','165.60','138.00','1','','1','','0','0','0','0','0','','0');");

require("../../inc/footer.php");
?>