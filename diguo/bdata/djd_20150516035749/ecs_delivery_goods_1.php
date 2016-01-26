<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_delivery_goods`;");
E_C("CREATE TABLE `ecs_delivery_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `delivery_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `product_id` mediumint(8) unsigned default '0',
  `product_sn` varchar(60) default NULL,
  `goods_name` varchar(120) default NULL,
  `brand_name` varchar(60) default NULL,
  `goods_sn` varchar(60) default NULL,
  `is_real` tinyint(1) unsigned default '0',
  `extension_code` varchar(30) default NULL,
  `parent_id` mediumint(8) unsigned default '0',
  `send_number` smallint(5) unsigned default '0',
  `goods_attr` text,
  PRIMARY KEY  (`rec_id`),
  KEY `delivery_id` (`delivery_id`,`goods_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_delivery_goods` values('1','1','145','0','','入驻商家测试商品','ELLE','ECS000145','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('2','2','145','0','','入驻商家测试商品','ELLE','ECS000145','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('3','3','145','0','','入驻商家测试商品','ELLE','ECS000145','1','','0','1','尺寸:juj \n功能:jhjhy \n');");
E_D("replace into `ecs_delivery_goods` values('4','4','144','0','','ELLE(她）特推系列真皮单肩斜挎女包JD141P29527BU蓝色','ELLE','ECS000144','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('5','5','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('6','6','142','0','','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','清华同方','ECS000142','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('7','7','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('8','8','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('9','9','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('10','10','154','0','','111111','雀巢','1111','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('11','11','147','0','','入驻商家测试商品3','ELLE','ECS000147','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('12','12','10','0','','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','美的','ECS000010','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('13','13','154','0','','111111','雀巢','1111','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('14','14','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('15','15','145','0','','入驻商家测试商品','ELLE','ECS000145','1','','0','1','尺寸:juj \n功能:jhjhy \n');");
E_D("replace into `ecs_delivery_goods` values('16','16','116','0','','康宝(Canbo) ZTP80A-3 立式 消毒柜','康宝','ECS000116','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('17','16','83','0','','九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床','九洲鹿','ECS000083','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('18','16','120','0','','华帝(VATTI) ZTD110-i13001 嵌入式 消毒柜','美的','ECS000120','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('19','17','119','0','','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','美的','ECS000119','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('20','17','115','0','','志高(Chigo)JC-270L 压缩机恒温红酒柜 底层自由摆放/8月新款8层100瓶','志高','ECS000115','1','','0','1','');");
E_D("replace into `ecs_delivery_goods` values('21','18','9','0','','海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','海信','ECS000009','1','','0','2','产品特色:强力除湿 \n');");
E_D("replace into `ecs_delivery_goods` values('22','19','157','0','','123456','','123456789','1',NULL,'0','1','尺寸:12[100] \n功能:1213[120] \n');");

require("../../inc/footer.php");
?>