<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_activity`;");
E_C("CREATE TABLE `ecs_goods_activity` (
  `act_id` mediumint(8) unsigned NOT NULL auto_increment,
  `act_name` varchar(255) NOT NULL,
  `act_desc` text NOT NULL,
  `act_type` tinyint(3) unsigned NOT NULL,
  `goods_id` mediumint(8) unsigned NOT NULL,
  `product_id` mediumint(8) unsigned NOT NULL default '0',
  `goods_name` varchar(255) NOT NULL,
  `start_time` int(10) unsigned NOT NULL,
  `end_time` int(10) unsigned NOT NULL,
  `is_finished` tinyint(3) unsigned NOT NULL,
  `ext_info` text NOT NULL,
  PRIMARY KEY  (`act_id`),
  KEY `act_name` (`act_name`,`act_type`,`goods_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_activity` values('1','科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','','1','3','0','科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','1407744000','1502784000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:1;s:5:\"price\";d:1500;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('2','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','','1','10','0','美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','1407744000','1502784000','0','a:4:{s:12:\"price_ladder\";a:1:{i:0;a:2:{s:6:\"amount\";i:2;s:5:\"price\";d:1000;}}s:15:\"restrict_amount\";i:0;s:13:\"gift_integral\";i:0;s:7:\"deposit\";d:0;}');");
E_D("replace into `ecs_goods_activity` values('3','测试拍卖活动1','','2','5','0','海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','1407744000','1534320000','0','a:5:{s:7:\"deposit\";d:0;s:11:\"start_price\";d:1;s:9:\"end_price\";d:2000;s:9:\"amplitude\";d:0;s:6:\"no_top\";i:0;}');");
E_D("replace into `ecs_goods_activity` values('4','测试夺宝奇兵','测试夺宝奇兵测试夺宝奇兵测试夺宝奇兵测试夺宝奇兵','0','15','0','松下（Panasonic） EH-SQ10-W405 冷敷美容器','1407777840','1566177840','0','a:4:{s:11:\"start_price\";s:4:\"1.00\";s:9:\"end_price\";s:6:\"800.00\";s:9:\"max_price\";i:0;s:11:\"cost_points\";s:1:\"1\";}');");
E_D("replace into `ecs_goods_activity` values('5','圣诞大餐','圣诞大餐、圣诞大餐、圣诞大餐、圣诞大餐、圣诞大餐！','4','0','0','','1419359820','1419494340','0','a:1:{s:13:\"package_price\";s:3:\"100\";}');");

require("../../inc/footer.php");
?>