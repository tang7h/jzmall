<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_comment`;");
E_C("CREATE TABLE `ecs_comment` (
  `comment_id` int(10) unsigned NOT NULL auto_increment,
  `comment_type` tinyint(3) unsigned NOT NULL default '0',
  `id_value` mediumint(8) unsigned NOT NULL default '0',
  `email` varchar(60) NOT NULL default '',
  `user_name` varchar(60) NOT NULL default '',
  `content` text NOT NULL,
  `advantages` varchar(225) NOT NULL,
  `defect` varchar(225) NOT NULL,
  `comment_rank` tinyint(1) unsigned NOT NULL default '0',
  `add_time` int(10) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `status` tinyint(3) unsigned NOT NULL default '0',
  `parent_id` int(10) unsigned NOT NULL default '0',
  `user_id` int(10) unsigned NOT NULL default '0',
  `single_id` mediumint(8) default NULL,
  `order_id` mediumint(8) default NULL,
  `goods_tag` varchar(500) default NULL,
  `useful` int(10) default '0',
  `use_ip` varchar(15) default NULL,
  `dis_id` mediumint(8) default NULL,
  `seller_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`comment_id`),
  KEY `parent_id` (`parent_id`),
  KEY `id_value` (`id_value`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_comment` values('1','0','145',' 984265135@qq.com','xiaowang','商家商品评论','','','5','1409525254','127.0.0.1','1','0','12','0','1','','0','','0','2');");
E_D("replace into `ecs_comment` values('2','0','145','984265135@qq.com','xiaowang','谢谢惠顾','','','0','1409525546','127.0.0.1','0','1','0','0','0','','0','','0','2');");
E_D("replace into `ecs_comment` values('5','0','144',' 984265135@qq.com','xiaowang','的撒的','','','5','1411494020','127.0.0.1','1','0','12','0','51','真皮','1','127.0.0.1','0','0');");
E_D("replace into `ecs_comment` values('8','0','144','','admin','谢谢惠顾','','','0','1411506959','127.0.0.1','0','5','0','0','0','','0','','0','0');");
E_D("replace into `ecs_comment` values('7','0','145',' 984265135@qq.com','xiaowang','的撒','','','5','1411506917','127.0.0.1','1','0','12','0','44','','0','','0','2');");
E_D("replace into `ecs_comment` values('9','0','145','','admin','欢迎下次再来','','','0','1411506981','127.0.0.1','0','7','0','0','0','','0','','0','0');");
E_D("replace into `ecs_comment` values('10','0','3','q@q.com','','cchgdd','','','1','1416188841','110.180.178.153','0','0','0','0','0','','0','','0','0');");
E_D("replace into `ecs_comment` values('12','0','162','7656336@qq.com','','bucuo','','','5','1421083880','101.36.76.125','0','0','0','0','0','','0','','0','0');");
E_D("replace into `ecs_comment` values('13','0','157',' 45988127@qq.com','chenyan','好啊，没让我失望','','','5','1431718563','127.0.0.1','1','0','60','0','105','有机奶粉最高标准','1','127.0.0.1',NULL,'0');");
E_D("replace into `ecs_comment` values('14','0','157','admin@admin.com','admin','感谢您的支持，祝您生活愉快，宝宝健康成长','','','0','1431718705','127.0.0.1','1','13','0',NULL,NULL,NULL,'0',NULL,NULL,'0');");
E_D("replace into `ecs_comment` values('15','0','0','45988127@qq.com','chenyan','阿里贷款','','','5','1431718905','127.0.0.1','1','0','60','3',NULL,NULL,'0',NULL,'0','0');");

require("../../inc/footer.php");
?>