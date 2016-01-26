<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_search_keyword`;");
E_C("CREATE TABLE `ecs_search_keyword` (
  `keyword_id` int(32) unsigned NOT NULL auto_increment,
  `keyword` varchar(500) NOT NULL,
  `pinyin` varchar(1000) default NULL,
  `is_on` tinyint(1) unsigned default NULL,
  `count` int(32) NOT NULL,
  `addtime` varchar(20) default NULL,
  `pinyin_keyword` varchar(2000) default '',
  PRIMARY KEY  (`keyword_id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_search_keyword` values('19','s的撒的','','0','1','2014-08-21','sdesade');");
E_D("replace into `ecs_search_keyword` values('20','s的撒的','','0','1','2014-08-21','sdesade');");
E_D("replace into `ecs_search_keyword` values('21','ELL','','0','1','2014-08-21','ELL');");
E_D("replace into `ecs_search_keyword` values('22','ELL','','0','1','2014-08-21','ELL');");
E_D("replace into `ecs_search_keyword` values('23','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','','0','1','2014-08-21','chuangweiSkyworth 40E5CHR 40yingcun LEDyejingdianshiyinse');");
E_D("replace into `ecs_search_keyword` values('24','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','','0','1','2014-08-21','chuangweiSkyworth 40E5CHR 40yingcun LEDyejingdianshiyinse');");
E_D("replace into `ecs_search_keyword` values('25','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','','0','1','2014-08-21','chuangweiSkyworth 40E5CHR 40yingcun LEDyejingdianshiyinse');");
E_D("replace into `ecs_search_keyword` values('26','创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','','0','1','2014-08-21','chuangweiSkyworth 40E5CHR 40yingcun LEDyejingdianshiyinse');");
E_D("replace into `ecs_search_keyword` values('27','dsds','','0','1','2014-09-22','dsds');");
E_D("replace into `ecs_search_keyword` values('28','入驻商家','','0','1','2014-09-22','ruzhushangjia');");
E_D("replace into `ecs_search_keyword` values('29','艾美特(Airmate) FTW36T2-A 电风扇/塔扇','','0','1','2014-10-08','aimeite(Airmate) FTW36T2-A dianfengshan/tashan');");
E_D("replace into `ecs_search_keyword` values('30','入驻商家测试商品2','','0','1','2014-10-08','ruzhushangjiaceshishangpin2');");
E_D("replace into `ecs_search_keyword` values('31','ELLE(她）特推系列真皮单肩斜挎女包JD141P29527BU蓝色','','0','1','2014-10-17','ELLE(tatetuixiliezhenpidanjianxiekuanvbaoJD141P29527BUlanse');");
E_D("replace into `ecs_search_keyword` values('32','想重新出现','','0','1','2014-11-10','xiangzhongxinchuxian');");
E_D("replace into `ecs_search_keyword` values('33','111111','','0','1','2014-11-10','');");
E_D("replace into `ecs_search_keyword` values('34','办公文具','','0','1','2014-11-12','bangongwenju');");
E_D("replace into `ecs_search_keyword` values('35','小王测试','','0','1','2014-11-13','xiaowangceshi');");
E_D("replace into `ecs_search_keyword` values('36','商家','','0','1','2014-11-13','shangjia');");
E_D("replace into `ecs_search_keyword` values('37','入驻商家','','0','1','2014-11-14','ruzhushangjia');");
E_D("replace into `ecs_search_keyword` values('38','入驻商家','','0','1','2014-11-15','ruzhushangjia');");
E_D("replace into `ecs_search_keyword` values('39','水泵','','0','1','2014-11-17','shuibeng');");
E_D("replace into `ecs_search_keyword` values('40','水泵','','0','1','2014-11-17','shuibeng');");
E_D("replace into `ecs_search_keyword` values('41','泵','','0','1','2014-11-17','beng');");
E_D("replace into `ecs_search_keyword` values('42','华弟','','0','1','2014-11-17','huadi');");
E_D("replace into `ecs_search_keyword` values('43','华低','','0','1','2014-11-17','huadi');");
E_D("replace into `ecs_search_keyword` values('44','入驻商家','','0','1','2014-11-17','ruzhushangjia');");
E_D("replace into `ecs_search_keyword` values('45','xiaowang','','0','1','2014-11-18','xiaowang');");
E_D("replace into `ecs_search_keyword` values('46','2612','','0','1','2014-11-21','');");
E_D("replace into `ecs_search_keyword` values('47','设计','','0','1','2014-11-27','sheji');");
E_D("replace into `ecs_search_keyword` values('48','设计','','0','1','2014-11-27','sheji');");
E_D("replace into `ecs_search_keyword` values('49','设计','','0','1','2014-11-27','sheji');");
E_D("replace into `ecs_search_keyword` values('50','本','','0','1','2014-11-29','ben');");
E_D("replace into `ecs_search_keyword` values('51','本','','0','1','2014-11-29','ben');");
E_D("replace into `ecs_search_keyword` values('52','本','','0','1','2014-11-29','ben');");
E_D("replace into `ecs_search_keyword` values('53','111111','','0','1','2014-12-01','');");
E_D("replace into `ecs_search_keyword` values('54','111111','','0','1','2014-12-01','');");
E_D("replace into `ecs_search_keyword` values('55','111111','','0','1','2014-12-03','');");
E_D("replace into `ecs_search_keyword` values('56','商品好看','','0','1','2014-12-03','shangpinhaokan');");
E_D("replace into `ecs_search_keyword` values('57','电器','','0','1','2014-12-11','dianqi');");
E_D("replace into `ecs_search_keyword` values('58','户外出游','','0','1','2014-12-22','huwaichuyou');");
E_D("replace into `ecs_search_keyword` values('59','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('60','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('61','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('62','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('63','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('64','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('65','123456','','0','1','2014-12-22','');");
E_D("replace into `ecs_search_keyword` values('66','美','','0','1','2014-12-24','mei');");
E_D("replace into `ecs_search_keyword` values('67','艾','','0','1','2014-12-24','ai');");
E_D("replace into `ecs_search_keyword` values('68','123456','','0','1','2014-12-25','');");
E_D("replace into `ecs_search_keyword` values('69','123456','','0','1','2014-12-25','');");
E_D("replace into `ecs_search_keyword` values('70','办公文具','','0','1','2015-01-22','bangongwenju');");
E_D("replace into `ecs_search_keyword` values('71','夏装1折','','0','1','2015-05-15','xiazhuang1zhe');");
E_D("replace into `ecs_search_keyword` values('72','123456','','0','1','2015-05-15','');");
E_D("replace into `ecs_search_keyword` values('73','琼瑛女装2014夏季新款 韩版修身圆领雪�','','0','1','2015-05-15','qiongnvzhuang2014xiajixinkuan hanbanxiushenyuanlingxue');");
E_D("replace into `ecs_search_keyword` values('74','琼瑛女装2014夏季新款 韩版修身圆领雪�','','0','1','2015-05-15','qiongnvzhuang2014xiajixinkuan hanbanxiushenyuanlingxue');");
E_D("replace into `ecs_search_keyword` values('75','理财','','0','1','2015-05-15','licai');");
E_D("replace into `ecs_search_keyword` values('76','办公文具','','0','1','2015-05-15','bangongwenju');");
E_D("replace into `ecs_search_keyword` values('77','户外出游','','0','1','2015-05-15','huwaichuyou');");
E_D("replace into `ecs_search_keyword` values('78','小牛3','','0','1','2015-05-15','xiaoniu3');");

require("../../inc/footer.php");
?>