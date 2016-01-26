<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sale_notice`;");
E_C("CREATE TABLE `ecs_sale_notice` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL,
  `goods_id` int(10) unsigned NOT NULL,
  `cellphone` varchar(16) default NULL,
  `email` varchar(30) NOT NULL,
  `hopeDiscount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL default '2',
  `send_type` tinyint(1) NOT NULL default '0',
  `add_time` int(10) NOT NULL,
  `mark` varchar(255) default NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sale_notice` values('10','12','120','13524289154','1007915129@qq.com','1500.00','1','1','1408669160','hhh');");
E_D("replace into `ecs_sale_notice` values('11','12','119','15513246789','98784544@qq.com','120.00','2','0','1411518387','');");
E_D("replace into `ecs_sale_notice` values('12','60','157','18707307876','45988127@qq.com','150.00','2','0','1431711981',NULL);");

require("../../inc/footer.php");
?>