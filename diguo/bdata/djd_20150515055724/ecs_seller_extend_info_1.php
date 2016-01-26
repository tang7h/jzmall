<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_seller_extend_info`;");
E_C("CREATE TABLE `ecs_seller_extend_info` (
  `Id` int(10) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `reg_field_id` int(10) unsigned NOT NULL,
  `content` text NOT NULL,
  PRIMARY KEY  (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=159 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_seller_extend_info` values('79','12','28','data/seller_12/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('78','12','27','622202164563123456 工商 王先生');");
E_D("replace into `ecs_seller_extend_info` values('77','12','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('76','12','25','020-05454356');");
E_D("replace into `ecs_seller_extend_info` values('75','12','24','98978752@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('74','12','23','上海普陀区曹杨路');");
E_D("replace into `ecs_seller_extend_info` values('73','12','22','商创电子商务');");
E_D("replace into `ecs_seller_extend_info` values('72','12','21','上海商创');");
E_D("replace into `ecs_seller_extend_info` values('80','12','29','data/seller_12/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('81','12','30','网站负责 王先生 155165326434');");
E_D("replace into `ecs_seller_extend_info` values('82','37','21','测试');");
E_D("replace into `ecs_seller_extend_info` values('83','37','22','测试123');");
E_D("replace into `ecs_seller_extend_info` values('84','37','23','测试123');");
E_D("replace into `ecs_seller_extend_info` values('85','37','24','1038422306@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('86','37','25','020-888888');");
E_D("replace into `ecs_seller_extend_info` values('87','37','26','国企');");
E_D("replace into `ecs_seller_extend_info` values('88','37','27','55555');");
E_D("replace into `ecs_seller_extend_info` values('89','37','28','data/seller_37/reg_28.png');");
E_D("replace into `ecs_seller_extend_info` values('90','37','29','data/seller_37/reg_29.png');");
E_D("replace into `ecs_seller_extend_info` values('91','37','30','测试');");
E_D("replace into `ecs_seller_extend_info` values('92','38','21','123456');");
E_D("replace into `ecs_seller_extend_info` values('93','38','22','123456');");
E_D("replace into `ecs_seller_extend_info` values('94','38','23','123456');");
E_D("replace into `ecs_seller_extend_info` values('95','38','24','www_bbbb@163.com');");
E_D("replace into `ecs_seller_extend_info` values('96','38','25','88888888');");
E_D("replace into `ecs_seller_extend_info` values('97','38','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('98','38','27','12335545556688');");
E_D("replace into `ecs_seller_extend_info` values('99','38','28','data/seller_38/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('100','38','29','data/seller_38/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('101','38','30','123');");
E_D("replace into `ecs_seller_extend_info` values('102','41','21','大忽悠');");
E_D("replace into `ecs_seller_extend_info` values('103','41','22','大忽悠');");
E_D("replace into `ecs_seller_extend_info` values('104','41','23','123456');");
E_D("replace into `ecs_seller_extend_info` values('105','41','24','www_bbbb@163.com');");
E_D("replace into `ecs_seller_extend_info` values('106','41','25','88888888');");
E_D("replace into `ecs_seller_extend_info` values('107','41','26','个体');");
E_D("replace into `ecs_seller_extend_info` values('108','41','27','123456789123456789');");
E_D("replace into `ecs_seller_extend_info` values('109','41','28','data/seller_41/reg_28.png');");
E_D("replace into `ecs_seller_extend_info` values('110','41','29','data/seller_41/reg_29.png');");
E_D("replace into `ecs_seller_extend_info` values('111','41','30','123456');");
E_D("replace into `ecs_seller_extend_info` values('112','45','21','ACE');");
E_D("replace into `ecs_seller_extend_info` values('113','45','22','广州市欣心贸易有限公司');");
E_D("replace into `ecs_seller_extend_info` values('114','45','23','广东省广州市天河区马场路29号');");
E_D("replace into `ecs_seller_extend_info` values('115','45','24','985372616@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('116','45','25','020-12345678');");
E_D("replace into `ecs_seller_extend_info` values('117','45','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('118','45','27','6558485569853512668');");
E_D("replace into `ecs_seller_extend_info` values('119','45','28','data/seller_45/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('120','45','29','data/seller_45/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('121','45','30','6558485569853512668');");
E_D("replace into `ecs_seller_extend_info` values('122','44','21','杰德森集团');");
E_D("replace into `ecs_seller_extend_info` values('123','44','22','杰德森集团');");
E_D("replace into `ecs_seller_extend_info` values('124','44','23','广州市天河区马场路28号');");
E_D("replace into `ecs_seller_extend_info` values('125','44','24','931510304@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('126','44','25','020-85617777');");
E_D("replace into `ecs_seller_extend_info` values('127','44','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('128','44','27','283039292');");
E_D("replace into `ecs_seller_extend_info` values('129','44','28','data/seller_44/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('130','44','29','data/seller_44/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('131','44','30','刘胜忠');");
E_D("replace into `ecs_seller_extend_info` values('132','46','21','买加');");
E_D("replace into `ecs_seller_extend_info` values('133','46','22','卖家');");
E_D("replace into `ecs_seller_extend_info` values('134','46','23','21212');");
E_D("replace into `ecs_seller_extend_info` values('135','46','24','1035844230@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('136','46','25','54545454545');");
E_D("replace into `ecs_seller_extend_info` values('137','46','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('138','46','28','data/seller_46/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('139','46','29','data/seller_46/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('140','47','21','888');");
E_D("replace into `ecs_seller_extend_info` values('141','47','22','888');");
E_D("replace into `ecs_seller_extend_info` values('142','47','23','888888');");
E_D("replace into `ecs_seller_extend_info` values('143','47','24','888888@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('144','47','25','12345678912');");
E_D("replace into `ecs_seller_extend_info` values('145','47','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('146','47','27','545678678027887003703');");
E_D("replace into `ecs_seller_extend_info` values('147','47','28','data/seller_47/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('148','47','29','data/seller_47/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('149','49','21','777');");
E_D("replace into `ecs_seller_extend_info` values('150','49','22','777777');");
E_D("replace into `ecs_seller_extend_info` values('151','49','23','777777');");
E_D("replace into `ecs_seller_extend_info` values('152','49','24','777777@qq.com');");
E_D("replace into `ecs_seller_extend_info` values('153','49','25','777777');");
E_D("replace into `ecs_seller_extend_info` values('154','49','26','私企');");
E_D("replace into `ecs_seller_extend_info` values('155','49','27','777777');");
E_D("replace into `ecs_seller_extend_info` values('156','49','28','data/seller_49/reg_28.jpg');");
E_D("replace into `ecs_seller_extend_info` values('157','49','29','data/seller_49/reg_29.jpg');");
E_D("replace into `ecs_seller_extend_info` values('158','49','30','777777');");

require("../../inc/footer.php");
?>