<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_seller_category`;");
E_C("CREATE TABLE `ecs_seller_category` (
  `seller_cat_id` smallint(5) unsigned NOT NULL auto_increment,
  `cat_name` varchar(90) NOT NULL default '',
  `keywords` varchar(255) NOT NULL default '',
  `cat_desc` varchar(255) NOT NULL default '',
  `parent_id` smallint(5) unsigned NOT NULL default '0',
  `sort_order` tinyint(1) unsigned NOT NULL default '50',
  `template_file` varchar(50) NOT NULL default '',
  `measure_unit` varchar(15) NOT NULL default '',
  `show_in_nav` tinyint(1) NOT NULL default '0',
  `style` varchar(150) NOT NULL,
  `is_show` tinyint(1) unsigned NOT NULL default '1',
  `grade` tinyint(4) NOT NULL default '0',
  `filter_attr` varchar(255) NOT NULL default '0',
  `is_top_style` tinyint(1) unsigned NOT NULL default '0',
  `is_on_top` tinyint(1) unsigned NOT NULL default '0',
  `cat_img` varchar(100) NOT NULL COMMENT '分类图片',
  `seller_id` int(11) NOT NULL COMMENT '入驻商家id',
  `is_text` tinyint(1) NOT NULL default '1' COMMENT '显示文字还是图片默认显示文字文字',
  PRIMARY KEY  (`seller_cat_id`),
  KEY `parent_id` (`parent_id`)
) ENGINE=MyISAM AUTO_INCREMENT=334 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_seller_category` values('318','家庭电器','','','0','50','','','1','','1','0','','0','0','../seller_imgs/seller_cat_img/seller_2/cat_1409180150.png','2','1');");
E_D("replace into `ecs_seller_category` values('319','手电筒','','','318','50','','','0','','1','0','8','0','0','','2','1');");
E_D("replace into `ecs_seller_category` values('320','小电视','','','318','50','','','1','','1','0','','0','0','','2','1');");
E_D("replace into `ecs_seller_category` values('321','生活用品','','','0','50','','','1','','1','0','8','0','0','','2','1');");
E_D("replace into `ecs_seller_category` values('322','洗衣粉','','','321','50','','','0','','1','0','','0','0','','2','1');");
E_D("replace into `ecs_seller_category` values('323','洗洁精','','','321','50','','','0','','1','0','','0','0','','2','1');");
E_D("replace into `ecs_seller_category` values('324','非官方个非官方','','','0','50','','法规法规法规法规','0','','1','0','','0','0','','0','1');");
E_D("replace into `ecs_seller_category` values('325','地方地方地方地方的大幅度','','','324','50','','广告法规法规法规','0','','1','0','','0','0','','0','1');");
E_D("replace into `ecs_seller_category` values('326','如题如题如题人托人','','','325','50','','如同仁堂b','0','','1','0','','0','0','','0','1');");
E_D("replace into `ecs_seller_category` values('327','让他如同仁堂','','','326','50','','','0','','1','0','','0','0','','0','1');");
E_D("replace into `ecs_seller_category` values('328','123','','','0','1','','10','0','','1','0','','0','0','../seller_imgs/seller_cat_img/seller_3/cat_1418240184.jpg','3','1');");
E_D("replace into `ecs_seller_category` values('329','女装','','','0','0','','100','1','','1','0','','0','1','','6','1');");
E_D("replace into `ecs_seller_category` values('330','男装','','','0','1','','100','1','','1','0','','0','1','','6','1');");
E_D("replace into `ecs_seller_category` values('331','童装','','','0','2','','100','1','','1','0','','0','1','','6','1');");
E_D("replace into `ecs_seller_category` values('332','户外装备','户外装备','适合户外运动','0','50','','10','0','','1','10','','0','0','','7','1');");
E_D("replace into `ecs_seller_category` values('333','产品1','','','0','50','','50','0','','1','10','','0','0','','8','1');");

require("../../inc/footer.php");
?>