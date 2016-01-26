<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_keywords`;");
E_C("CREATE TABLE `ecs_keywords` (
  `date` date NOT NULL default '0000-00-00',
  `searchengine` varchar(20) NOT NULL default '',
  `keyword` varchar(90) NOT NULL default '',
  `count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`date`,`searchengine`,`keyword`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_keywords` values('2009-04-21','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-04-27','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-04','ecshop','斤','1');");
E_D("replace into `ecs_keywords` values('2009-05-10','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-11','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','三星','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','智能手机','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','p806','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','诺基亚','1');");
E_D("replace into `ecs_keywords` values('2009-05-12','ecshop','夏新','1');");
E_D("replace into `ecs_keywords` values('2009-05-18','ecshop','52','2');");
E_D("replace into `ecs_keywords` values('2009-05-22','ecshop','p','1');");
E_D("replace into `ecs_keywords` values('2014-05-15','ecshop','棉色织格子花边舒适女式长袖衬衫','1');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','衣','55');");
E_D("replace into `ecs_keywords` values('2014-06-11','ecshop','1','26');");
E_D("replace into `ecs_keywords` values('2014-06-12','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','1','1');");
E_D("replace into `ecs_keywords` values('2014-07-23','ecshop','天空','1');");
E_D("replace into `ecs_keywords` values('2014-08-07','ecshop','D48','2');");
E_D("replace into `ecs_keywords` values('2014-08-08','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-09','ecshop','D48','1');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','1','40');");
E_D("replace into `ecs_keywords` values('2014-08-11','ecshop','D48MF','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','1','3');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','的（Midea）','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','FS406C','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','4L','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','电脑版电饭煲','1');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','D48MF','2');");
E_D("replace into `ecs_keywords` values('2014-08-13','ecshop','防晒隔离','1');");
E_D("replace into `ecs_keywords` values('2014-08-14','ecshop','1','6');");
E_D("replace into `ecs_keywords` values('2014-08-15','ecshop','1','5');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','d','1');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','哈哈','2');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','s的撒的','2');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','ELL','2');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','创维','4');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','液晶电视','4');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','银色','4');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','英寸','4');");
E_D("replace into `ecs_keywords` values('2014-08-21','ecshop','Skyworth','4');");
E_D("replace into `ecs_keywords` values('2014-08-27','ecshop','杆箱','2');");
E_D("replace into `ecs_keywords` values('2014-08-27','ecshop','请输入团购商品名称','9');");
E_D("replace into `ecs_keywords` values('2014-08-27','ecshop','dsd','1');");
E_D("replace into `ecs_keywords` values('2014-08-27','ecshop','elle','7');");
E_D("replace into `ecs_keywords` values('2014-09-22','ecshop','dsds','1');");
E_D("replace into `ecs_keywords` values('2014-09-22','ecshop','商家','1');");
E_D("replace into `ecs_keywords` values('2014-09-24','ecshop','大苏打','2');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','电风扇','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','Airmate','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','艾美特','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','FTW','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','36','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','商家','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','测试','1');");
E_D("replace into `ecs_keywords` values('2014-10-08','ecshop','商品','1');");
E_D("replace into `ecs_keywords` values('2014-10-17','ecshop','女包','1');");
E_D("replace into `ecs_keywords` values('2014-10-17','ecshop','真皮','1');");
E_D("replace into `ecs_keywords` values('2014-10-17','ecshop','JD141P29527BU','1');");
E_D("replace into `ecs_keywords` values('2014-10-17','ecshop','蓝色','1');");
E_D("replace into `ecs_keywords` values('2014-10-17','ecshop','系列','1');");
E_D("replace into `ecs_keywords` values('2014-11-10','ecshop','重新','1');");
E_D("replace into `ecs_keywords` values('2014-11-10','ecshop','111111','1');");
E_D("replace into `ecs_keywords` values('2014-11-10','ecshop','户外出游','3');");
E_D("replace into `ecs_keywords` values('2014-11-12','ecshop','办公文具','1');");
E_D("replace into `ecs_keywords` values('2014-11-13','ecshop','小王','1');");
E_D("replace into `ecs_keywords` values('2014-11-13','ecshop','测试','1');");
E_D("replace into `ecs_keywords` values('2014-11-13','ecshop','商家','1');");
E_D("replace into `ecs_keywords` values('2014-11-14','ecshop','商家','1');");
E_D("replace into `ecs_keywords` values('2014-11-15','ecshop','商家','1');");
E_D("replace into `ecs_keywords` values('2014-11-17','ecshop','水泵','2');");
E_D("replace into `ecs_keywords` values('2014-11-17','ecshop','泵','1');");
E_D("replace into `ecs_keywords` values('2014-11-17','ecshop','华弟','1');");
E_D("replace into `ecs_keywords` values('2014-11-17','ecshop','华低','1');");
E_D("replace into `ecs_keywords` values('2014-11-17','ecshop','商家','1');");
E_D("replace into `ecs_keywords` values('2014-11-17','ECTouch','2','13');");
E_D("replace into `ecs_keywords` values('2014-11-18','ecshop','xiaowang','1');");
E_D("replace into `ecs_keywords` values('2014-11-21','ecshop','2612','1');");
E_D("replace into `ecs_keywords` values('2014-11-22','ECTouch','机器','2');");
E_D("replace into `ecs_keywords` values('2014-11-23','ECTouch','女','2');");
E_D("replace into `ecs_keywords` values('2014-11-27','ecshop','设计','3');");
E_D("replace into `ecs_keywords` values('2014-11-29','ecshop','本','3');");
E_D("replace into `ecs_keywords` values('2014-12-01','ecshop','111111','2');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','111111','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','好看','1');");
E_D("replace into `ecs_keywords` values('2014-12-03','ecshop','商品','1');");
E_D("replace into `ecs_keywords` values('2014-12-06','ECTouch','1','6');");
E_D("replace into `ecs_keywords` values('2014-12-08','ECTouch','女装','2');");
E_D("replace into `ecs_keywords` values('2014-12-09','ECTouch','2','4');");
E_D("replace into `ecs_keywords` values('2014-12-09','ECTouch','1','4');");
E_D("replace into `ecs_keywords` values('2014-12-11','ecshop','电器','1');");
E_D("replace into `ecs_keywords` values('2014-12-13','ECTouch','内存','11');");
E_D("replace into `ecs_keywords` values('2014-12-13','ECTouch','苹果','2');");
E_D("replace into `ecs_keywords` values('2014-12-13','ECTouch','1','10');");
E_D("replace into `ecs_keywords` values('2014-12-22','ecshop','户外','1');");
E_D("replace into `ecs_keywords` values('2014-12-22','ecshop','123456','7');");
E_D("replace into `ecs_keywords` values('2014-12-24','ecshop','美','1');");
E_D("replace into `ecs_keywords` values('2014-12-24','ecshop','艾','1');");
E_D("replace into `ecs_keywords` values('2014-12-25','ecshop','123456','2');");
E_D("replace into `ecs_keywords` values('2014-12-31','ECTouch','dd','4');");
E_D("replace into `ecs_keywords` values('2015-01-07','ECTouch','衣服','2');");
E_D("replace into `ecs_keywords` values('2015-01-14','ECTouch','new','6');");
E_D("replace into `ecs_keywords` values('2015-01-20','ECTouch','777','8');");
E_D("replace into `ecs_keywords` values('2015-01-22','ecshop','办公文具','1');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','夏装','1');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','123456','1');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','琼瑛','2');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','圆领','2');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','夏季','2');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','女装','2');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','新款','2');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','理财','1');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','办公文具','1');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','户外','1');");
E_D("replace into `ecs_keywords` values('2015-05-15','ecshop','小牛','1');");

require("../../inc/footer.php");
?>