<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_seller_shopslide`;");
E_C("CREATE TABLE `ecs_seller_shopslide` (
  `id` int(11) NOT NULL auto_increment COMMENT '??id',
  `seller_id` int(11) NOT NULL default '0' COMMENT '????id',
  `img_url` varchar(100) character set utf8 NOT NULL COMMENT '????',
  `img_link` varchar(100) character set utf8 NOT NULL COMMENT '?????',
  `img_desc` varchar(50) character set utf8 NOT NULL COMMENT '????',
  `img_order` smallint(6) NOT NULL default '0' COMMENT '??',
  `slide_type` varchar(50) character set utf8 NOT NULL default 'roll' COMMENT '??????''roll'',''shade'',???''roll''',
  `is_show` tinyint(1) NOT NULL default '0' COMMENT '????',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1");
E_D("replace into `ecs_seller_shopslide` values('1','2','../seller_imgs/seller_slide_img/seller_2/slide_1409260405.jpg','#','','0','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('2','2','../seller_imgs/seller_slide_img/seller_2/slide_1409260439.jpg','#','','1','roll','1');");
E_D("replace into `ecs_seller_shopslide` values('3','2','../seller_imgs/seller_slide_img/seller_2/slide_1409260454.jpg','#','','4','roll','1');");
E_D("replace into `ecs_seller_shopslide` values('4','0','../seller_imgs/seller_slide_img/seller_0/slide_1419366639.jpg','#','','0','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('5','0','../seller_imgs/seller_slide_img/seller_0/slide_1419366658.jpg','#','','2','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('6','0','../seller_imgs/seller_slide_img/seller_0/slide_1419366662.jpg','#','','2','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('7','0','../seller_imgs/seller_slide_img/seller_0/slide_1419366677.jpg','#','','2','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('13','6','../seller_imgs/seller_slide_img/seller_6/slide_1419370376.jpg','#','','0','roll','1');");
E_D("replace into `ecs_seller_shopslide` values('14','6','../seller_imgs/seller_slide_img/seller_6/slide_1419370395.jpg','#','','1','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('15','6','../seller_imgs/seller_slide_img/seller_6/slide_1419370411.jpg','#','','2','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('16','6','../seller_imgs/seller_slide_img/seller_6/slide_1419370432.jpg','#','','3','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('17','6','../seller_imgs/seller_slide_img/seller_6/slide_1419370449.jpg','#','','4','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('21','7','../seller_imgs/seller_slide_img/seller_7/slide_1419376018.jpg','http://www.51job.com','','1','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('22','7','../seller_imgs/seller_slide_img/seller_7/slide_1419376040.jpg','http://www.51job.com','','2','shade','1');");
E_D("replace into `ecs_seller_shopslide` values('23','8','../seller_imgs/seller_slide_img/seller_8/slide_1419380641.jpg','#','','2','shade','1');");

require("../../inc/footer.php");
?>