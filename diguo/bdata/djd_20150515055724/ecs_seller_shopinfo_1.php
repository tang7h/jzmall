<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_shopinfo`;");
E_C("CREATE TABLE `ecs_seller_shopinfo` (
  `id` int(11) NOT NULL auto_increment COMMENT '??id',
  `seller_id` int(11) NOT NULL COMMENT '????id',
  `shop_name` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `shop_title` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `shop_keyword` varchar(50) character set utf8 NOT NULL COMMENT '?????',
  `country` int(10) NOT NULL COMMENT '????',
  `province` int(10) NOT NULL COMMENT '????',
  `city` int(10) NOT NULL COMMENT '????',
  `shop_address` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `kf_qq` varchar(50) character set utf8 NOT NULL COMMENT '??qq',
  `kf_ww` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `kf_tel` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `shop_logo` varchar(100) character set utf8 NOT NULL COMMENT '??logo',
  `street_logo` varchar(100) character set utf8 NOT NULL COMMENT '????logo',
  `street_spjpg` varchar(100) character set utf8 NOT NULL COMMENT '???????',
  `notice` varchar(100) character set utf8 NOT NULL COMMENT '????',
  `shop_header` text character set utf8 COMMENT '????',
  `shop_color` varchar(20) character set utf8 default NULL COMMENT '??????',
  `shop_style` tinyint(1) NOT NULL default '1' COMMENT '????1??????????0??????????',
  `status` tinyint(1) NOT NULL default '1' COMMENT '????0??,1??',
  `apply` tinyint(1) NOT NULL default '0' COMMENT '??????????0??1?',
  `is_street` tinyint(1) NOT NULL default '0' COMMENT '?????????0??1?',
  `remark` varchar(100) character set utf8 NOT NULL COMMENT '?????????',
  `street_cate` int(11) NOT NULL,
  `street_tags` varchar(10) character set utf8 NOT NULL,
  `street_order` tinyint(4) NOT NULL COMMENT '?????????',
  `seller_theme` varchar(20) character set utf8 NOT NULL,
  `store_style` varchar(20) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `shop_name` (`shop_name`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COMMENT='???????'");
E_D("replace into `ecs_seller_shopinfo` values('1','2','????','??????','???????????','1','6','77','?????','2147483647','4545454555','15513265632','../seller_imgs/seller_logo/seller_logo2.gif','../seller_imgs/street_logo/street_logo2.jpg','../seller_imgs/street_spjpg/street_spjpg2.jpg','???','<div style=\" width:1000px; margin:0 auto;position: relative;overflow: hidden;\"><div class=\"banner_left\"><div class=\"texted\">&nbsp;<br/></div></div><div class=\"banner_right\"><a href=\"#\"><img title=\"sc.jpg\" src=\"/newbigjd/images/upload/20140829/14092821916931.jpg\" style=\"width: 871px; height: 342px;\"/></a>\r\n &nbsp; &nbsp;</div></div>','','1','1','1','1','','4','3','10','store_tpl_1','');");
E_D("replace into `ecs_seller_shopinfo` values('2','0','????????','??????','??????','1','23','300','?????','2114392403','','','../seller_imgs/seller_logo/seller_logo0.gif','','','','<div class=\"topshop\"><div class=\"t_img\" style=\"text-align: center;\">&nbsp; &nbsp;	<img src=\"/newbigjd/images/upload/20141224/14193951229181.png\" width=\"1199\" height=\"161\" title=\"header.png\"/></div></div>','','0','1','0','1','','2','3','0','store_tpl_1','');");
E_D("replace into `ecs_seller_shopinfo` values('3','3','123','123456','123456','1','6','76','123456','48846973','','','../seller_imgs/seller_logo/seller_logo3.jpg','../seller_imgs/street_logo/street_logo3.jpg','../seller_imgs/street_spjpg/street_spjpg3.jpg','','','','0','1','0','1','','2','3','0','store_tpl_1','');");
E_D("replace into `ecs_seller_shopinfo` values('4','6','AINI','AINI????','AI,NI,??,??','1','6','76','??????29?','985372616','','','../seller_imgs/seller_logo/seller_logo6.png','../seller_imgs/street_logo/street_logo6.png','../seller_imgs/street_spjpg/street_spjpg6.jpg','??????????','<p>&nbsp;<img src=\"http://img.baidu.com/hi/ldw/w_0003.gif\"/></p>','#6600FF','1','1','1','1','','6','2','0','store_tpl_1','');");
E_D("replace into `ecs_seller_shopinfo` values('5','7','lsz?????','????????','??','1','6','76','?????????28?','931510304@qq.com','','020-89561937','../seller_imgs/seller_logo/seller_logo7.jpg','../seller_imgs/street_logo/street_logo7.jpg','../seller_imgs/street_spjpg/street_spjpg7.jpg','????????','<p>&nbsp;<img width=\"2000\" height=\"1501\" title=\"Photo_1222_20a.jpg\" style=\"width: 1060px; height: 198px;\" src=\"/newbigjd/images/upload/20141224/14194035752511.jpg\"/></p>','#33ACFF','0','1','0','1','','0','','0','store_tpl_1','');");
E_D("replace into `ecs_seller_shopinfo` values('6','8','???????','?????','?????','1','6','76','???28?','1038422306','','020-888888','../seller_imgs/seller_logo/seller_logo8.jpg','../seller_imgs/street_logo/street_logo8.jpg','../seller_imgs/street_spjpg/street_spjpg8.jpg','????~~~','<p><img src=\"/newbigjd/images/upload/20141224/14194093485249.png\" title=\"??????12.24-12.26 - ??.png\"/></p>','#FF0000','1','1','1','1','','2','3','1','store_tpl_1','');");
E_D("replace into `ecs_seller_shopinfo` values('7','10','777','777777','777','1','6','76','777777','777777','777777','777777','../seller_imgs/seller_logo/seller_logo10.jpg','../seller_imgs/street_logo/street_logo10.jpg','../seller_imgs/street_spjpg/street_spjpg10.jpg','777777','','','0','1','1','0','','0','','0','','');");

require("../../inc/footer.php");
?>