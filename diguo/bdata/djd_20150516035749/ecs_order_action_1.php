<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_order_action`;");
E_C("CREATE TABLE `ecs_order_action` (
  `action_id` mediumint(8) unsigned NOT NULL auto_increment,
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `action_user` varchar(30) NOT NULL default '',
  `order_status` tinyint(1) unsigned NOT NULL default '0',
  `shipping_status` tinyint(1) unsigned NOT NULL default '0',
  `pay_status` tinyint(1) unsigned NOT NULL default '0',
  `action_place` tinyint(1) unsigned NOT NULL default '0',
  `action_note` varchar(255) NOT NULL default '',
  `log_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`action_id`),
  KEY `order_id` (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=110 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_order_action` values('1','1','xiaowang','1','0','0','0','','1409519602');");
E_D("replace into `ecs_order_action` values('2','1','xiaowang','1','0','2','0','f','1409519608');");
E_D("replace into `ecs_order_action` values('3','1','xiaowang','5','5','2','0','','1409519614');");
E_D("replace into `ecs_order_action` values('4','1','xiaowang','1','0','0','0','','1409519737');");
E_D("replace into `ecs_order_action` values('5','1','xiaowang','1','0','2','0','f','1409519743');");
E_D("replace into `ecs_order_action` values('6','1','xiaowang','1','0','0','0','','1409521072');");
E_D("replace into `ecs_order_action` values('7','1','xiaowang','1','0','2','0','d','1409521103');");
E_D("replace into `ecs_order_action` values('8','1','xiaowang','5','5','2','0','','1409521109');");
E_D("replace into `ecs_order_action` values('9','1','xiaowang','1','1','2','1','','1409521125');");
E_D("replace into `ecs_order_action` values('10','1','xiaowang','4','0','0','0','d','1409521813');");
E_D("replace into `ecs_order_action` values('11','1','xiaowang','1','0','0','0','','1409522286');");
E_D("replace into `ecs_order_action` values('12','1','xiaowang','1','0','2','0','d','1409522292');");
E_D("replace into `ecs_order_action` values('13','1','xiaowang','5','5','2','0','','1409522298');");
E_D("replace into `ecs_order_action` values('14','1','xiaowang','1','1','2','1','','1409522340');");
E_D("replace into `ecs_order_action` values('15','1','买家','5','2','2','0','','1409522351');");
E_D("replace into `ecs_order_action` values('16','1','xiaowang','5','0','2','0','d','1409522447');");
E_D("replace into `ecs_order_action` values('17','1','xiaowang','2','0','0','0','d','1409522457');");
E_D("replace into `ecs_order_action` values('18','1','xiaowang','1','0','0','0','','1409524238');");
E_D("replace into `ecs_order_action` values('19','1','xiaowang','1','0','2','0','da','1409524245');");
E_D("replace into `ecs_order_action` values('20','1','xiaowang','1','0','0','0','','1409524283');");
E_D("replace into `ecs_order_action` values('21','1','xiaowang','5','5','2','0','','1409524477');");
E_D("replace into `ecs_order_action` values('22','1','xiaowang','1','1','2','1','','1409524487');");
E_D("replace into `ecs_order_action` values('23','1','买家','5','2','2','0','','1409524496');");
E_D("replace into `ecs_order_action` values('24','26','buyer','2','0','0','0','用户取消','1409783411');");
E_D("replace into `ecs_order_action` values('25','25','admin','1','0','0','0','','1409783431');");
E_D("replace into `ecs_order_action` values('26','25','admin','1','0','2','0','d','1409783437');");
E_D("replace into `ecs_order_action` values('27','25','admin','5','5','2','0','','1409783444');");
E_D("replace into `ecs_order_action` values('28','25','admin','1','1','2','1','','1409783454');");
E_D("replace into `ecs_order_action` values('29','25','买家','5','2','2','0','','1409783508');");
E_D("replace into `ecs_order_action` values('30','44','admin','5','5','2','0','','1410826404');");
E_D("replace into `ecs_order_action` values('31','44','admin','1','1','2','1','','1410826410');");
E_D("replace into `ecs_order_action` values('32','44','买家','5','2','2','0','','1410826426');");
E_D("replace into `ecs_order_action` values('33','51','admin','1','0','0','0','','1411343759');");
E_D("replace into `ecs_order_action` values('34','51','admin','1','0','2','0','fdg','1411343765');");
E_D("replace into `ecs_order_action` values('35','51','admin','1','3','2','0','','1411343769');");
E_D("replace into `ecs_order_action` values('36','51','admin','5','5','2','0','','1411343797');");
E_D("replace into `ecs_order_action` values('37','51','admin','1','1','2','1','','1411343804');");
E_D("replace into `ecs_order_action` values('38','51','买家','5','2','2','0','','1411343812');");
E_D("replace into `ecs_order_action` values('39','67','xiaowang','1','0','0','0','','1413421688');");
E_D("replace into `ecs_order_action` values('40','68','admin','1','0','0','0','','1413423318');");
E_D("replace into `ecs_order_action` values('41','68','admin','1','0','2','0','辅导费','1413423326');");
E_D("replace into `ecs_order_action` values('42','68','admin','5','5','2','0','','1413423334');");
E_D("replace into `ecs_order_action` values('43','68','admin','1','1','2','1','','1413423340');");
E_D("replace into `ecs_order_action` values('44','69','admin','1','0','0','0','','1413423888');");
E_D("replace into `ecs_order_action` values('45','69','admin','1','0','2','0','d','1413423894');");
E_D("replace into `ecs_order_action` values('46','69','admin','1','3','2','0','','1413423975');");
E_D("replace into `ecs_order_action` values('47','69','admin','6','5','2','0','','1413424011');");
E_D("replace into `ecs_order_action` values('48','69','admin','5','5','2','0','','1413424029');");
E_D("replace into `ecs_order_action` values('49','69','admin','5','5','2','0','[售后] f','1413424178');");
E_D("replace into `ecs_order_action` values('50','69','admin','1','4','2','1','','1413424206');");
E_D("replace into `ecs_order_action` values('51','60','admin','1','0','0','0','','1413424417');");
E_D("replace into `ecs_order_action` values('52','60','admin','1','0','2','0','D','1413424422');");
E_D("replace into `ecs_order_action` values('53','60','admin','6','5','2','0','','1413424432');");
E_D("replace into `ecs_order_action` values('54','60','admin','1','4','2','1','','1413424444');");
E_D("replace into `ecs_order_action` values('55','68','买家','5','2','2','0','','1413424732');");
E_D("replace into `ecs_order_action` values('56','69','admin','1','1','2','1','','1416867135');");
E_D("replace into `ecs_order_action` values('57','47','admin','3','0','0','0','1','1417112039');");
E_D("replace into `ecs_order_action` values('58','73','admin','1','0','2','0','111','1417386901');");
E_D("replace into `ecs_order_action` values('59','73','admin','5','5','2','0','','1417386927');");
E_D("replace into `ecs_order_action` values('60','73','admin','1','1','2','1','','1417386937');");
E_D("replace into `ecs_order_action` values('61','73','买家','5','2','2','0','','1417386956');");
E_D("replace into `ecs_order_action` values('62','76','admin','1','0','2','0','11','1417395345');");
E_D("replace into `ecs_order_action` values('63','76','admin','1','3','2','0','','1417395349');");
E_D("replace into `ecs_order_action` values('64','76','admin','5','5','2','0','','1417395362');");
E_D("replace into `ecs_order_action` values('65','76','admin','1','1','2','1','11111','1417395387');");
E_D("replace into `ecs_order_action` values('66','80','xiaowang','1','0','2','0','搜索','1417550081');");
E_D("replace into `ecs_order_action` values('67','80','xiaowang','1','3','2','0','','1417550087');");
E_D("replace into `ecs_order_action` values('68','80','xiaowang','5','5','2','0','','1417550091');");
E_D("replace into `ecs_order_action` values('69','80','xiaowang','1','1','2','1','多带点','1417550100');");
E_D("replace into `ecs_order_action` values('70','81','admin','1','0','2','0','订单','1417550149');");
E_D("replace into `ecs_order_action` values('71','81','admin','5','5','2','0','','1417550156');");
E_D("replace into `ecs_order_action` values('72','81','admin','1','1','2','1','','1417550162');");
E_D("replace into `ecs_order_action` values('73','82','admin','1','0','2','0','11','1417555358');");
E_D("replace into `ecs_order_action` values('74','82','admin','1','3','2','0','','1417555362');");
E_D("replace into `ecs_order_action` values('75','82','admin','5','5','2','0','','1417555367');");
E_D("replace into `ecs_order_action` values('76','82','admin','1','1','2','1','','1417555374');");
E_D("replace into `ecs_order_action` values('77','82','买家','5','2','2','0','','1417555391');");
E_D("replace into `ecs_order_action` values('78','84','admin','1','0','2','0','11','1417559985');");
E_D("replace into `ecs_order_action` values('79','84','admin','1','3','2','0','','1417559992');");
E_D("replace into `ecs_order_action` values('80','84','admin','5','5','2','0','','1417559999');");
E_D("replace into `ecs_order_action` values('81','84','admin','1','1','2','1','','1417560049');");
E_D("replace into `ecs_order_action` values('82','84','admin','5','2','2','0','11','1417560521');");
E_D("replace into `ecs_order_action` values('83','86','admin','1','0','2','0','11','1417560964');");
E_D("replace into `ecs_order_action` values('84','86','admin','1','3','2','0','','1417560969');");
E_D("replace into `ecs_order_action` values('85','86','admin','5','5','2','0','','1417560978');");
E_D("replace into `ecs_order_action` values('86','86','admin','1','1','2','1','','1417561060');");
E_D("replace into `ecs_order_action` values('87','86','买家','5','2','2','0','','1417562733');");
E_D("replace into `ecs_order_action` values('88','76','买家','5','2','2','0','','1417562738');");
E_D("replace into `ecs_order_action` values('89','74','buyer','2','0','0','0','用户取消','1417562743');");
E_D("replace into `ecs_order_action` values('90','88','admin','1','0','0','0','','1417568385');");
E_D("replace into `ecs_order_action` values('91','88','admin','1','0','2','0','111','1417568392');");
E_D("replace into `ecs_order_action` values('92','88','admin','1','3','2','0','','1417568396');");
E_D("replace into `ecs_order_action` values('93','88','admin','6','5','2','0','','1417568423');");
E_D("replace into `ecs_order_action` values('94','88','admin','5','5','2','0','','1417568448');");
E_D("replace into `ecs_order_action` values('95','88','admin','1','4','2','1','','1417568465');");
E_D("replace into `ecs_order_action` values('96','88','admin','5','5','2','1','','1417568639');");
E_D("replace into `ecs_order_action` values('97','88','admin','1','4','2','1','','1417568646');");
E_D("replace into `ecs_order_action` values('98','88','admin','1','1','2','1','','1417568689');");
E_D("replace into `ecs_order_action` values('99','88','admin','5','4','2','1','','1417568718');");
E_D("replace into `ecs_order_action` values('100','79','admin','1','0','0','0','','1417721923');");
E_D("replace into `ecs_order_action` values('101','79','admin','1','0','2','0','435','1417721930');");
E_D("replace into `ecs_order_action` values('102','79','admin','1','3','2','0','345345','1417721941');");
E_D("replace into `ecs_order_action` values('103','79','admin','5','5','2','0','345435','1417721956');");
E_D("replace into `ecs_order_action` values('104','91','buyer','2','0','0','0','用户取消','1419461243');");
E_D("replace into `ecs_order_action` values('105','105','admin','1','0','2','0','123','1431718394');");
E_D("replace into `ecs_order_action` values('106','105','admin','1','3','2','0','','1431718399');");
E_D("replace into `ecs_order_action` values('107','105','admin','5','5','2','0','','1431718415');");
E_D("replace into `ecs_order_action` values('108','105','admin','1','1','2','1','','1431718426');");
E_D("replace into `ecs_order_action` values('109','105','买家','5','2','2','0','','1431718503');");

require("../../inc/footer.php");
?>