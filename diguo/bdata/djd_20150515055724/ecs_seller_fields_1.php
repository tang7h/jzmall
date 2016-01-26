<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_seller_fields`;");
E_C("CREATE TABLE `ecs_seller_fields` (
  `id` tinyint(3) unsigned NOT NULL auto_increment,
  `reg_field_name` varchar(60) NOT NULL,
  `dis_order` tinyint(3) unsigned NOT NULL default '100',
  `display` tinyint(1) unsigned NOT NULL default '1',
  `type` varchar(20) NOT NULL COMMENT '表单类型',
  `is_need` tinyint(1) unsigned NOT NULL default '1',
  `select_options` varchar(30) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_seller_fields` values('21','商家名称','0','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('22','公司名称','1','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('23','公司详细地址','2','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('24','联系邮箱','10','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('25','公司电话','4','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('26','公司类型','3','1','select','1','私营\r\n国企\r\n个体','0','0');");
E_D("replace into `ecs_seller_fields` values('27','公司银行账号','5','1','text','1','','250','90');");
E_D("replace into `ecs_seller_fields` values('28','营业执照','6','1','file','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('29','身份证照片','9','1','file','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('30','联系人姓名','7','1','text','1','','250','90');");
E_D("replace into `ecs_seller_fields` values('31','联系人电话','8','1','text','1','','0','0');");
E_D("replace into `ecs_seller_fields` values('32','111','1','1','file','1','','200','200');");

require("../../inc/footer.php");
?>