<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_goods`;");
E_C("CREATE TABLE `ecs_order_goods` (
  `rec_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(120) NOT NULL default '',
  `goods_sn` varchar(60) NOT NULL default '',
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_number` smallint(5) unsigned NOT NULL default '1',
  `market_price` decimal(10,2) NOT NULL default '0.00',
  `goods_price` decimal(10,2) NOT NULL default '0.00',
  `goods_attr` text NOT NULL,
  `send_number` smallint(5) unsigned NOT NULL default '0',
  `is_real` tinyint(1) unsigned NOT NULL default '0',
  `extension_code` varchar(30) NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `is_gift` smallint(5) unsigned NOT NULL default '0',
  `goods_attr_id` varchar(255) NOT NULL default '',
  `is_single` tinyint(1) default '0',
  PRIMARY KEY  (`rec_id`),
  KEY `order_id` (`order_id`),
  KEY `goods_id` (`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=96 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_goods` values('1','1','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('2','2','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('3','3','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('4','4','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('5','5','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('6','6','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('7','7','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('8','8','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('9','9','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('10','10','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('11','11','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('12','12','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('13','13','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('14','14','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('15','15','135','飞科（FLYCO）FS358全身水洗充电式三刀头电动剃须刀（银色）','ECS000135','0','1','154.79','129.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('16','16','27','松下（Panasonic） SD-PM105 面包机','ECS000027','0','1','1918.80','1599.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('17','17','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('18','18','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('19','19','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('20','20','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('21','21','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('22','22','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('23','23','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('24','24','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('25','25','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('26','26','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('27','27','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('28','28','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('29','29','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('30','30','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('31','31','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('32','32','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('33','33','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('34','34','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('35','35','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('36','36','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('37','37','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('38','38','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('39','39','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('40','40','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('41','41','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('42','42','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('43','43','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('44','44','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','1','1','','0','0','41,42','2');");
E_D("replace into `ecs_order_goods` values('45','45','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('46','46','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('47','47','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('48','48','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('49','49','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('50','50','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('51','51','144','ELLE(她）特推系列真皮单肩斜挎女包JD141P29527BU蓝色','ECS000144','0','1','120.00','100.00','','1','1','','0','0','','2');");
E_D("replace into `ecs_order_goods` values('52','52','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('53','53','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1438.80','1199.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('54','54','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('55','55','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('56','56','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('57','57','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('58','58','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('59','59','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('60','60','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('61','61','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('62','62','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','3','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('63','64','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('64','65','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('65','67','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('66','68','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('67','69','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('68','69','142','清华同方（THTF） 锋锐K560 15.6英寸笔记本(i7-4702MQ 8G 1T GT840M 2G独显 25.3mm超薄机身)咖啡金','ECS000142','0','1','0.00','0.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('69','60','4','志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','ECS000004','0','1','4198.80','3199.00','祛PM2.5','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('70','71','101','WebKit技术内幕 ','ECS000101','0','1','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('71','72','10','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','ECS000010','0','1','0.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('72','73','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('73','74','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('74','76','154','111111','1111','0','1','120.00','100.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('75','78','145','入驻商家测试商品','ECS000145','0','1','1200.00','950.00','尺寸:juj \n功能:jhjhy \n','0','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('76','79','9','海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','ECS000009','0','2','3238.79','2699.00','产品特色:强力除湿 \n','2','1','','0','0','6','0');");
E_D("replace into `ecs_order_goods` values('77','80','147','入驻商家测试商品3','ECS000147','0','1','360.00','100.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('78','81','10','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','ECS000010','0','1','3358.79','2659.05','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('79','82','154','111111','1111','0','1','120.00','100.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('80','84','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('81','86','145','入驻商家测试商品','ECS000145','0','1','1200.00','1000.00','尺寸:juj \n功能:jhjhy \n','1','1','','0','0','41,42','0');");
E_D("replace into `ecs_order_goods` values('82','88','116','康宝(Canbo) ZTP80A-3 立式 消毒柜','ECS000116','0','1','598.80','499.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('83','88','83','九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床','ECS000083','0','1','190.79','159.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('84','88','120','华帝(VATTI) ZTD110-i13001 嵌入式 消毒柜','ECS000120','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('85','88','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('86','88','115','志高(Chigo)JC-270L 压缩机恒温红酒柜 底层自由摆放/8月新款8层100瓶','ECS000115','0','1','2700.00','2250.00','','1','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('87','90','101','WebKit技术内幕 ','ECS000101','0','2','0.00','0.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('88','91','136','博世(Bosch)GSB600RE set 13毫米冲击钻套装','ECS000136','0','1','478.79','399.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('89','93','162','测试','ECS000162','0','1','24.00','20.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('90','95','162','测试','ECS000162','0','1','24.00','20.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('91','97','162','测试','ECS000162','0','2','24.00','20.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('92','99','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','2','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('93','101','119','美的(Midea) MXV-ZLP90Q05 嵌入式 消毒柜','ECS000119','0','1','1200.00','1000.00','','0','1','','0','0','','0');");
E_D("replace into `ecs_order_goods` values('94','103','157','123456','123456789','0','1','403.00','373.00','尺寸:12[100] \n功能:1213[120] \n','0','1','','0','0','46,48','0');");
E_D("replace into `ecs_order_goods` values('95','105','157','123456','123456789','0','1','403.00','373.00','尺寸:12[100] \n功能:1213[120] \n','1','1','','0','0','46,48','2');");

require("../../inc/footer.php");
?>