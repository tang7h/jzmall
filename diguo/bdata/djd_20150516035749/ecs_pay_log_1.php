<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_pay_log`;");
E_C("CREATE TABLE `ecs_pay_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `parent_log_id` int(11) NOT NULL default '0',
  `order_id` mediumint(8) unsigned NOT NULL default '0',
  `order_amount` decimal(10,2) unsigned NOT NULL,
  `order_type` tinyint(1) unsigned NOT NULL default '0',
  `is_paid` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=154 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_pay_log` values('1','0','1','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('2','0','2','503.00','0','0');");
E_D("replace into `ecs_pay_log` values('3','0','3','8097.00','0','0');");
E_D("replace into `ecs_pay_log` values('4','0','4','4998.00','0','0');");
E_D("replace into `ecs_pay_log` values('5','0','5','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('6','0','6','35.00','0','0');");
E_D("replace into `ecs_pay_log` values('7','0','7','2198.10','0','0');");
E_D("replace into `ecs_pay_log` values('8','0','8','638.00','0','0');");
E_D("replace into `ecs_pay_log` values('9','0','9','2015.00','0','0');");
E_D("replace into `ecs_pay_log` values('10','0','10','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('11','0','11','3810.00','0','0');");
E_D("replace into `ecs_pay_log` values('12','0','12','253.00','0','0');");
E_D("replace into `ecs_pay_log` values('13','0','13','975.00','0','0');");
E_D("replace into `ecs_pay_log` values('14','0','14','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('15','0','15','17054.00','0','0');");
E_D("replace into `ecs_pay_log` values('16','0','16','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('17','0','17','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('18','0','18','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('19','0','20','1401.00','0','0');");
E_D("replace into `ecs_pay_log` values('20','0','21','327.00','0','0');");
E_D("replace into `ecs_pay_log` values('21','0','22','124.00','0','0');");
E_D("replace into `ecs_pay_log` values('22','0','1','2214.00','0','0');");
E_D("replace into `ecs_pay_log` values('23','0','2','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('24','0','3','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('25','0','4','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('26','0','5','88249.00','0','0');");
E_D("replace into `ecs_pay_log` values('27','0','6','26488.70','0','0');");
E_D("replace into `ecs_pay_log` values('28','0','7','1814.00','0','0');");
E_D("replace into `ecs_pay_log` values('29','0','8','15.00','0','0');");
E_D("replace into `ecs_pay_log` values('30','0','9','1809.00','0','0');");
E_D("replace into `ecs_pay_log` values('31','0','10','10.00','0','0');");
E_D("replace into `ecs_pay_log` values('32','0','11','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('33','0','12','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('34','0','13','139.39','0','0');");
E_D("replace into `ecs_pay_log` values('35','0','14','111.11','0','0');");
E_D("replace into `ecs_pay_log` values('36','0','15','10.10','0','0');");
E_D("replace into `ecs_pay_log` values('37','0','16','10.10','0','0');");
E_D("replace into `ecs_pay_log` values('38','0','17','10.10','0','0');");
E_D("replace into `ecs_pay_log` values('39','0','19','10.10','0','0');");
E_D("replace into `ecs_pay_log` values('40','0','20','10.10','0','0');");
E_D("replace into `ecs_pay_log` values('41','0','21','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('42','0','1','1010.00','0','0');");
E_D("replace into `ecs_pay_log` values('43','0','2','10.00','0','0');");
E_D("replace into `ecs_pay_log` values('44','0','1','1010.00','0','0');");
E_D("replace into `ecs_pay_log` values('45','0','2','10.00','0','0');");
E_D("replace into `ecs_pay_log` values('46','0','1','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('47','0','2','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('48','0','3','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('49','0','4','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('50','0','5','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('51','0','6','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('52','0','7','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('53','0','8','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('54','0','9','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('55','0','10','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('56','0','11','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('57','0','12','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('58','0','13','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('59','0','14','3.50','0','0');");
E_D("replace into `ecs_pay_log` values('60','0','15','132.50','0','0');");
E_D("replace into `ecs_pay_log` values('61','0','16','1602.50','0','0');");
E_D("replace into `ecs_pay_log` values('62','0','17','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('63','0','18','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('64','0','19','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('65','0','20','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('66','0','21','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('67','0','22','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('68','0','23','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('69','0','24','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('70','0','25','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('71','0','26','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('72','0','27','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('73','0','28','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('74','0','29','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('75','0','30','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('76','0','31','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('77','0','32','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('78','0','33','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('79','0','34','1013.64','0','0');");
E_D("replace into `ecs_pay_log` values('80','0','35','1214.65','0','0');");
E_D("replace into `ecs_pay_log` values('81','0','36','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('82','0','37','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('83','0','38','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('84','0','39','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('85','0','40','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('86','0','41','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('87','0','42','1202.50','0','0');");
E_D("replace into `ecs_pay_log` values('88','0','43','1003.50','0','0');");
E_D("replace into `ecs_pay_log` values('89','0','44','1000.00','0','0');");
E_D("replace into `ecs_pay_log` values('90','0','45','1199.00','0','0');");
E_D("replace into `ecs_pay_log` values('91','0','46','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('92','0','47','1211.11','0','0');");
E_D("replace into `ecs_pay_log` values('93','0','48','1199.00','0','0');");
E_D("replace into `ecs_pay_log` values('94','0','49','1199.00','0','0');");
E_D("replace into `ecs_pay_log` values('95','0','50','1199.00','0','0');");
E_D("replace into `ecs_pay_log` values('96','0','51','100.00','0','0');");
E_D("replace into `ecs_pay_log` values('97','0','52','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('98','0','53','1211.11','0','0');");
E_D("replace into `ecs_pay_log` values('99','0','54','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('100','0','55','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('101','0','56','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('102','0','57','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('103','0','58','1013.64','0','0');");
E_D("replace into `ecs_pay_log` values('104','0','59','1013.64','0','0');");
E_D("replace into `ecs_pay_log` values('105','0','60','4212.64','0','0');");
E_D("replace into `ecs_pay_log` values('106','0','61','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('107','0','62','3040.40','0','0');");
E_D("replace into `ecs_pay_log` values('108','0','63','4060.60','0','0');");
E_D("replace into `ecs_pay_log` values('109','111','64','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('110','111','65','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('111','0','66','2040.40','0','0');");
E_D("replace into `ecs_pay_log` values('112','0','67','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('113','0','68','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('114','115','69','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('115','0','70','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('116','0','71','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('117','0','72','1000.00','0','0');");
E_D("replace into `ecs_pay_log` values('118','120','73','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('119','120','74','1010.10','0','0');");
E_D("replace into `ecs_pay_log` values('120','0','75','2020.20','0','0');");
E_D("replace into `ecs_pay_log` values('121','122','76','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('122','0','77','101.01','0','0');");
E_D("replace into `ecs_pay_log` values('123','0','78','950.00','0','0');");
E_D("replace into `ecs_pay_log` values('124','0','79','5398.00','0','0');");
E_D("replace into `ecs_pay_log` values('125','0','81','2659.05','0','0');");
E_D("replace into `ecs_pay_log` values('126','127','82','101.01','0','0');");
E_D("replace into `ecs_pay_log` values('127','0','83','101.01','0','0');");
E_D("replace into `ecs_pay_log` values('128','129','84','1025.25','0','0');");
E_D("replace into `ecs_pay_log` values('129','0','85','1025.25','0','0');");
E_D("replace into `ecs_pay_log` values('130','131','86','1025.20','0','0');");
E_D("replace into `ecs_pay_log` values('131','0','87','1020.20','0','0');");
E_D("replace into `ecs_pay_log` values('132','133','88','4923.00','0','0');");
E_D("replace into `ecs_pay_log` values('133','0','89','4923.00','0','0');");
E_D("replace into `ecs_pay_log` values('134','0','1','0.10','1','0');");
E_D("replace into `ecs_pay_log` values('135','0','90','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('136','0','2','20000.00','1','0');");
E_D("replace into `ecs_pay_log` values('137','138','91','414.00','0','0');");
E_D("replace into `ecs_pay_log` values('138','0','92','414.00','0','0');");
E_D("replace into `ecs_pay_log` values('139','140','93','20.20','0','0');");
E_D("replace into `ecs_pay_log` values('140','0','94','20.20','0','0');");
E_D("replace into `ecs_pay_log` values('141','142','95','20.00','0','0');");
E_D("replace into `ecs_pay_log` values('142','0','96','20.00','0','0');");
E_D("replace into `ecs_pay_log` values('143','0','3','10000.00','1','0');");
E_D("replace into `ecs_pay_log` values('144','145','97','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('145','0','98','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('146','147','99','2030.30','0','0');");
E_D("replace into `ecs_pay_log` values('147','0','100','2030.30','0','0');");
E_D("replace into `ecs_pay_log` values('148','149','101','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('149','0','102','0.00','0','0');");
E_D("replace into `ecs_pay_log` values('150','151','103','373.00','0','0');");
E_D("replace into `ecs_pay_log` values('151','0','104','373.00','0','0');");
E_D("replace into `ecs_pay_log` values('152','153','105','373.00','0','0');");
E_D("replace into `ecs_pay_log` values('153','0','106','373.00','0','0');");

require("../../inc/footer.php");
?>