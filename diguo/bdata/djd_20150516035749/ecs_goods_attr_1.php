<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_goods_attr`;");
E_C("CREATE TABLE `ecs_goods_attr` (
  `goods_attr_id` int(10) unsigned NOT NULL auto_increment,
  `goods_id` mediumint(8) unsigned NOT NULL default '0',
  `attr_id` smallint(5) unsigned NOT NULL default '0',
  `attr_value` text NOT NULL,
  `attr_price` varchar(255) NOT NULL default '',
  `img_id` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`goods_attr_id`),
  KEY `goods_id` (`goods_id`),
  KEY `attr_id` (`attr_id`)
) ENGINE=MyISAM AUTO_INCREMENT=50 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_goods_attr` values('1','10','1','1.5 P（约12-23㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('2','9','1','1P（约8-14㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('3','6','1','2P（约21-34㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('4','3','1','2.5P（约27-42㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('5','9','2','超长质保','','0');");
E_D("replace into `ecs_goods_attr` values('6','9','2','强力除湿','','0');");
E_D("replace into `ecs_goods_attr` values('7','6','2','WIFI操控','','0');");
E_D("replace into `ecs_goods_attr` values('8','6','2','电辅加热','','0');");
E_D("replace into `ecs_goods_attr` values('9','5','1','3P（约32-50㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('10','5','2','超静音','','0');");
E_D("replace into `ecs_goods_attr` values('11','5','2','圆柱型柜机','','0');");
E_D("replace into `ecs_goods_attr` values('12','4','1','1.5 P（约12-23㎡）','0','0');");
E_D("replace into `ecs_goods_attr` values('13','4','2','祛PM2.5','','0');");
E_D("replace into `ecs_goods_attr` values('14','4','2','除甲醛','','0');");
E_D("replace into `ecs_goods_attr` values('15','2','3','32英寸智能','0','0');");
E_D("replace into `ecs_goods_attr` values('16','2','3','40英寸智能','800','0');");
E_D("replace into `ecs_goods_attr` values('17','2','3','50英寸智能','1500','0');");
E_D("replace into `ecs_goods_attr` values('18','2','4','智能电视','0','0');");
E_D("replace into `ecs_goods_attr` values('19','2','5','全高清（1920.1080）','0','0');");
E_D("replace into `ecs_goods_attr` values('20','2','6','LED电视','0','0');");
E_D("replace into `ecs_goods_attr` values('21','2','7','客厅电视','0','0');");
E_D("replace into `ecs_goods_attr` values('24','2','4','普通电视','0','0');");
E_D("replace into `ecs_goods_attr` values('25','2','4','网络电视','0','0');");
E_D("replace into `ecs_goods_attr` values('29','106','2','特色商品one','1000','0');");
E_D("replace into `ecs_goods_attr` values('30','106','2','特色商品two','1200','0');");
E_D("replace into `ecs_goods_attr` values('38','145','5','fdsaf','0','0');");
E_D("replace into `ecs_goods_attr` values('39','145','6','fdsaf','0','0');");
E_D("replace into `ecs_goods_attr` values('40','145','7','fds','0','0');");
E_D("replace into `ecs_goods_attr` values('41','145','3','juj','','0');");
E_D("replace into `ecs_goods_attr` values('42','145','4','jhjhy','','0');");
E_D("replace into `ecs_goods_attr` values('43','157','5','1231','0','0');");
E_D("replace into `ecs_goods_attr` values('44','157','6','幅度高达','0','0');");
E_D("replace into `ecs_goods_attr` values('45','157','7','斯蒂芬','0','0');");
E_D("replace into `ecs_goods_attr` values('46','157','3','12','100','0');");
E_D("replace into `ecs_goods_attr` values('47','157','3','19','200','0');");
E_D("replace into `ecs_goods_attr` values('48','157','4','1213','120','0');");
E_D("replace into `ecs_goods_attr` values('49','157','4','12312','220','0');");

require("../../inc/footer.php");
?>