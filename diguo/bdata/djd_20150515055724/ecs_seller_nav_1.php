<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_nav`;");
E_C("CREATE TABLE `ecs_seller_nav` (
  `id` int(11) NOT NULL auto_increment,
  `nav_name` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `nav_link` varchar(100) character set utf8 NOT NULL COMMENT '????',
  `nav_order` smallint(5) NOT NULL default '0' COMMENT '????',
  `is_show` tinyint(1) NOT NULL default '0' COMMENT '????',
  `is_blank` tinyint(1) NOT NULL default '0' COMMENT '???????',
  `nav_img` varchar(100) character set utf8 NOT NULL COMMENT '????',
  `is_text` tinyint(2) NOT NULL default '1' COMMENT '??????????????',
  `seller_id` int(11) NOT NULL,
  `s_cid` int(11) NOT NULL default '0',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 COMMENT='?????????'");
E_D("replace into `ecs_seller_nav` values('1','??','#','0','1','0','../seller_imgs/seller_nav_img/seller_2/nav_1409182435.png','1','2','0');");
E_D("replace into `ecs_seller_nav` values('2','dsadsddsdddsdsd','#','0','1','0','../seller_imgs/seller_nav_img/seller_2/nav_1409182455.png','1','2','0');");
E_D("replace into `ecs_seller_nav` values('4','dfdfdfdfdfdffffff','category.php?id=318','2','1','0','','1','2','318');");
E_D("replace into `ecs_seller_nav` values('5','????','category.php?id=321','4','1','0','','1','2','321');");
E_D("replace into `ecs_seller_nav` values('6','???','category.php?id=320&amp;price_min=&amp;price_max=','6','1','0','','1','2','320');");
E_D("replace into `ecs_seller_nav` values('10','22','#','0','1','1','','1','0','0');");
E_D("replace into `ecs_seller_nav` values('11','??','#','0','1','0','','1','6','0');");
E_D("replace into `ecs_seller_nav` values('12','??','#','1','1','0','','1','6','0');");
E_D("replace into `ecs_seller_nav` values('13','??','#','2','1','0','','1','6','0');");
E_D("replace into `ecs_seller_nav` values('14','??','#','3','1','0','','1','6','0');");
E_D("replace into `ecs_seller_nav` values('15','????','#','4','1','0','','1','6','0');");
E_D("replace into `ecs_seller_nav` values('16','????','#','4','1','0','','1','6','0');");
E_D("replace into `ecs_seller_nav` values('17','??1','http://www.xq5u.com','1','1','1','../seller_imgs/seller_nav_img/seller_7/nav_1419374007.jpg','1','7','0');");
E_D("replace into `ecs_seller_nav` values('19','??2','http://www.51job.com','2','1','1','','1','7','0');");
E_D("replace into `ecs_seller_nav` values('20','??','http://test.ecmoban.com/newbigjd/seller_store.php?sid=6','1','1','0','','1','8','0');");
E_D("replace into `ecs_seller_nav` values('21','???','#','2','1','0','','1','8','0');");
E_D("replace into `ecs_seller_nav` values('22','???','#','3','1','0','','1','8','0');");
E_D("replace into `ecs_seller_nav` values('23','???','#','4','1','0','','1','8','0');");

require("../../inc/footer.php");
?>