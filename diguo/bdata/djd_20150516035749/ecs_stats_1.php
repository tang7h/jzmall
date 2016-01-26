<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_stats`;");
E_C("CREATE TABLE `ecs_stats` (
  `access_time` int(10) unsigned NOT NULL default '0',
  `ip_address` varchar(15) NOT NULL default '',
  `visit_times` smallint(5) unsigned NOT NULL default '1',
  `browser` varchar(60) NOT NULL default '',
  `system` varchar(20) NOT NULL default '',
  `language` varchar(20) NOT NULL default '',
  `area` varchar(30) NOT NULL default '',
  `referer_domain` varchar(100) NOT NULL default '',
  `referer_path` varchar(200) NOT NULL default '',
  `access_url` varchar(255) NOT NULL default '',
  KEY `access_time` (`access_time`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_stats` values('1240294063','0.0.0.0','196','FireFox 3.0.8','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1240298833','0.0.0.0','198','FireFox 3.0.8','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1240380013','0.0.0.0','204','FireFox 3.0.8','Windows XP','zh-cn','IANA','http://localhost:8080','/','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1240463462','0.0.0.0','208','FireFox 3.0.9','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1240800901','0.0.0.0','222','FireFox 3.0.9','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1240803254','0.0.0.0','227','FireFox 3.0.9','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1240904381','0.0.0.0','237','FireFox 3.0.9','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241419322','0.0.0.0','250','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/goods.php?act=list','/shoujitiyan/goods.php');");
E_D("replace into `ecs_stats` values('1241420999','0.0.0.0','252','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241424831','0.0.0.0','253','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/goods.php?act=list','/shoujitiyan/goods.php');");
E_D("replace into `ecs_stats` values('1241498580','0.0.0.0','257','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241511324','0.0.0.0','262','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/goods.php?act=list','/shoujitiyan/goods.php');");
E_D("replace into `ecs_stats` values('1241514671','0.0.0.0','263','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241517726','0.0.0.0','265','FireFox 3.0.10','Windows XP','zh-cn','IANA','','','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241946350','127.0.0.1','39','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241965138','127.0.0.1','41','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241966751','127.0.0.1','43','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1241970153','127.0.0.1','45','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/goods.php?act=list','/shoujitiyan/goods.php');");
E_D("replace into `ecs_stats` values('1241970640','127.0.0.1','47','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1242105962','0.0.0.0','310','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/goods.php?act=list','/shoujitiyan/goods.php');");
E_D("replace into `ecs_stats` values('1242140915','127.0.0.1','52','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1242141002','127.0.0.1','54','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/user.php','/shoujitiyan/user.php');");
E_D("replace into `ecs_stats` values('1242141352','127.0.0.1','57','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/user.php?act=address_list','/shoujitiyan/user.php');");
E_D("replace into `ecs_stats` values('1242141605','127.0.0.1','59','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/user.php','/shoujitiyan/user.php');");
E_D("replace into `ecs_stats` values('1242576210','127.0.0.1','72','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1242576982','127.0.0.1','74','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/article.php?act=list&uselastfilter=1','/shoujitiyan/article.php');");
E_D("replace into `ecs_stats` values('1242577205','127.0.0.1','76','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/article.php?act=list','/shoujitiyan/article.php');");
E_D("replace into `ecs_stats` values('1242579230','127.0.0.1','78','FireFox 2.0.0.20','Windows XP','zh-cn','LAN','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1242973907','0.0.0.0','375','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1242974337','0.0.0.0','377','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/','/shoujitiyan/search.php');");
E_D("replace into `ecs_stats` values('1242976474','0.0.0.0','379','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1244189098','0.0.0.0','418','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1244191271','0.0.0.0','420','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/index.php','/shoujitiyan/article.php');");
E_D("replace into `ecs_stats` values('1244191479','0.0.0.0','422','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1244193068','0.0.0.0','426','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/article.php?id=33','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1244772987','0.0.0.0','466','FireFox 3.0.10','Windows XP','zh-cn','IANA','http://localhost:8080','/shoujitiyan/admin/index.php?act=top','/shoujitiyan/index.php');");
E_D("replace into `ecs_stats` values('1245042503','0.0.0.0','472','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/privilege.php?act=login','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245042507','0.0.0.0','472','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/index.php?act=top','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245046089','0.0.0.0','474','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/index.php?act=top','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245047906','0.0.0.0','476','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/goods.php?id=24','/shouji/user.php');");
E_D("replace into `ecs_stats` values('1245047951','0.0.0.0','478','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/group_buy.php?act=view&id=8','/shouji/goods.php');");
E_D("replace into `ecs_stats` values('1245048514','0.0.0.0','480','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/flow.php?step=checkout','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245139613','0.0.0.0','488','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/index.php?act=top','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245140082','0.0.0.0','490','FireFox 3.0.11','Windows XP','zh-cn','IANA','','','/shouji/article.php');");
E_D("replace into `ecs_stats` values('1245145064','0.0.0.0','493','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/index.php?act=top','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245217308','0.0.0.0','498','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245219380','0.0.0.0','499','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/index.php?act=top','/shouji/index.php');");
E_D("replace into `ecs_stats` values('1245222219','0.0.0.0','500','FireFox 3.0.11','Windows XP','zh-cn','IANA','http://localhost:8080','/shouji/admin/goods.php?act=list','/shouji/goods.php');");
E_D("replace into `ecs_stats` values('1398215605','127.0.0.1','4','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/ecshop/admin/index.php?act=top','/ecshop/index.php');");
E_D("replace into `ecs_stats` values('1398215734','127.0.0.1','5','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1398274231','127.0.0.1','6','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1398278802','127.0.0.1','7','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1398280936','127.0.0.1','8','Internet Explorer 9.0','Windows NT','zh-CN','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399223044','127.0.0.1','17','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399233552','127.0.0.1','19','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399248305','127.0.0.1','22','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399252606','127.0.0.1','7','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399310802','127.0.0.1','8','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399315955','127.0.0.1','9','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399324531','127.0.0.1','24','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399324805','127.0.0.1','10','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399326359','127.0.0.1','26','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399328526','127.0.0.1','27','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399399741','127.0.0.1','36','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399401750','127.0.0.1','13','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399411023','127.0.0.1','14','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399421928','127.0.0.1','16','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399483057','127.0.0.1','39','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399483078','127.0.0.1','17','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399485888','127.0.0.1','40','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399489863','127.0.0.1','41','Internet Explorer 9.0','Windows NT','zh-CN','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399490047','127.0.0.1','18','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399495197','127.0.0.1','19','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399499654','127.0.0.1','21','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399499654','127.0.0.1','21','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399503521','127.0.0.1','22','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399570118','127.0.0.1','46','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399570148','127.0.0.1','26','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399571012','127.0.0.1','48','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399573273','127.0.0.1','27','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399579888','127.0.0.1','49','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399583299','127.0.0.1','28','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399591040','127.0.0.1','30','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=16&brand=12&price_min=0&price_max=0&filter_attr=0.0.0.0','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399595157','127.0.0.1','31','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=16&brand=12&price_min=0&price_max=0&filter_attr=0.0.0.0','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399842183','127.0.0.1','1','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399842571','127.0.0.1','1','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399843986','127.0.0.1','2','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399845369','127.0.0.1','3','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399845866','127.0.0.1','3','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399850885','127.0.0.1','5','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?category=9&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=ASC','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399850962','127.0.0.1','7','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?category=9&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=shop_price&order=DESC','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1399915061','127.0.0.1','8','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399918860','127.0.0.1','9','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399927599','127.0.0.1','10','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399930905','127.0.0.1','11','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1399937991','127.0.0.1','7','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1399942766','127.0.0.1','12','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1400001189','127.0.0.1','9','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400014779','127.0.0.1','13','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400015854','127.0.0.1','13','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400023218','127.0.0.1','14','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/admin/goods.php?act=list','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400027447','127.0.0.1','15','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400030014','192.168.1.230','1','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://192.168.1.208','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400030021','192.168.1.208','1','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://192.168.1.208','/vancl/admin/goods.php?act=list','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400031163','127.0.0.1','16','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400090175','127.0.0.1','17','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400090179','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400090182','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400090378','127.0.0.1','15','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400091793','127.0.0.1','19','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400092563','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400092944','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400092985','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400092987','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400093525','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400093731','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400094857','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400094862','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400096419','127.0.0.1','16','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400101744','127.0.0.1','20','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400101750','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400101753','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400101755','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400101756','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400102542','127.0.0.1','22','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400108910','127.0.0.1','26','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400109497','127.0.0.1','18','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400112986','127.0.0.1','28','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400113232','127.0.0.1','30','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400113852','127.0.0.1','19','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400114519','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400114523','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400116140','127.0.0.1','20','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400116743','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400116882','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400116887','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400116898','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/search.php?encode=YTozOntzOjg6ImtleXdvcmRzIjtzOjQ1OiLmo4noibLnu4fmoLzlrZDoirHovrnoiJLpgILlpbPlvI/plb/oopbooazooasiO3M6MTA6ImltYWdlRmllbGQiO3M6MDoiIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMDE','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400174359','127.0.0.1','21','Internet Explorer 9.0','Windows NT','zh-CN','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400181380','127.0.0.1','22','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/admin/index.php','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400448455','127.0.0.1','23','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400448479','127.0.0.1','31','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400449021','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400449024','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400457450','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400457451','127.0.0.1','32','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400457454','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400462980','127.0.0.1','34','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400462981','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400519827','127.0.0.1','25','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400527695','127.0.0.1','26','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400532047','127.0.0.1','27','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/affiche.php');");
E_D("replace into `ecs_stats` values('1400534745','127.0.0.1','28','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400537338','127.0.0.1','29','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400608991','127.0.0.1','36','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400610034','127.0.0.1','31','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400610314','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400610317','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400610468','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1400610471','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400613077','127.0.0.1','37','FireFox 28.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1400635952','127.0.0.1','1','FireFox 28.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400692369','127.0.0.1','32','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400697210','127.0.0.1','34','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400804092','127.0.0.1','42','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1400804640','127.0.0.1','43','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1400807371','127.0.0.1','45','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401129192','127.0.0.1','48','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401130025','127.0.0.1','8','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401130226','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401133053','127.0.0.1','9','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401138722','127.0.0.1','10','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401147071','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401147072','127.0.0.1','11','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401147075','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401147819','127.0.0.1','13','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401149438','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401210816','127.0.0.1','50','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401214479','127.0.0.1','51','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401217421','127.0.0.1','14','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401217731','127.0.0.1','16','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/user.php?act=register','/vancl/captcha.php');");
E_D("replace into `ecs_stats` values('1401217811','127.0.0.1','18','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401217970','127.0.0.1','20','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/user.php?act=register','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401218011','127.0.0.1','22','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401218247','127.0.0.1','24','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401218852','127.0.0.1','52','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/user.php?act=logout','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401218976','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=register','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401219965','127.0.0.1','26','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401219967','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401219970','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401224216','127.0.0.1','53','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401224511','127.0.0.1','28','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401228399','127.0.0.1','29','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401229043','127.0.0.1','31','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401237554','127.0.0.1','34','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401238082','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401238085','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401317064','127.0.0.1','5','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401317239','127.0.0.1','7','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401317259','127.0.0.1','38','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321259','127.0.0.1','40','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401321262','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401321291','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401321355','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321574','127.0.0.1','42','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401321595','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321634','127.0.0.1','44','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321636','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321741','127.0.0.1','46','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321743','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321843','127.0.0.1','48','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401321847','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321852','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321855','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321858','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321908','127.0.0.1','50','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401321932','127.0.0.1','52','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401322019','127.0.0.1','54','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401322023','127.0.0.1','56','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401322863','127.0.0.1','58','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401324472','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401326424','127.0.0.1','59','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401326675','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401326678','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401326701','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/pick_out.php','/vancl/pick_out.php');");
E_D("replace into `ecs_stats` values('1401326703','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/pick_out.php?cat_id=1&attr[3]=%E4%B8%AD%E9%95%BF%E8%A3%99','/vancl/pick_out.php');");
E_D("replace into `ecs_stats` values('1401382888','127.0.0.1','9','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401383045','127.0.0.1','60','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401383049','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401383052','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383055','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401383070','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383091','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383094','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383097','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383188','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383277','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401383809','127.0.0.1','62','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401384181','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401388810','127.0.0.1','63','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401388812','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401388815','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401391998','127.0.0.1','64','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/captcha.php');");
E_D("replace into `ecs_stats` values('1401398655','127.0.0.1','66','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401398752','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401398821','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401398833','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401398851','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401398863','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401398887','127.0.0.1','68','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/captcha.php');");
E_D("replace into `ecs_stats` values('1401402753','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6#','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401403142','127.0.0.1','69','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401403543','127.0.0.1','10','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401406008','127.0.0.1','11','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401406529','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401407016','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401407020','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=register','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401407201','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=register','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401408037','127.0.0.1','71','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401408139','127.0.0.1','12','Internet Explorer 9.0','Windows NT','zh-CN','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401408211','127.0.0.1','1','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1401409981','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401410007','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401410050','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401410053','127.0.0.1','2','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/user.php?act=logout','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401410062','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401410066','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401412215','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401412215','127.0.0.1','3','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401412217','127.0.0.1','4','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/user.php?act=logout','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401412222','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401412243','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1401412877','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=10','/vancl/article.php');");
E_D("replace into `ecs_stats` values('1401816190','127.0.0.1','13','Internet Explorer 9.0','Windows NT','zh-CN','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401816879','127.0.0.1','14','Internet Explorer 9.0','Windows NT','zh-CN','LAN','http://localhost','/vancl/user.php?act=logout','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1401824535','127.0.0.1','9','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401830979','127.0.0.1','17','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/index.php','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1401831763','127.0.0.1','18','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401839273','127.0.0.1','19','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1401841180','127.0.0.1','21','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1401844218','127.0.0.1','23','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1401902093','127.0.0.1','24','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401988911','127.0.0.1','4','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1401992676','127.0.0.1','5','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402248192','127.0.0.1','9','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402249412','127.0.0.1','10','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402249416','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402249421','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402249487','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402249547','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402249554','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402249557','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402249565','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php?step=cart','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402252527','127.0.0.1','11','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/flow.php?step=login','/vancl/captcha.php');");
E_D("replace into `ecs_stats` values('1402254965','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402256301','127.0.0.1','13','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/flow.php?step=cart','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402257133','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402257136','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402257141','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php?step=cart','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402265231','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402265232','127.0.0.1','15','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402265234','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402265240','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php?step=cart','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402265271','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402265293','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php','/vancl/article.php');");
E_D("replace into `ecs_stats` values('1402265296','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php','/vancl/article.php');");
E_D("replace into `ecs_stats` values('1402265299','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php','/vancl/article.php');");
E_D("replace into `ecs_stats` values('1402269736','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402269736','127.0.0.1','16','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/flow.php','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402269741','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402269745','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/flow.php?step=cart','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402269857','127.0.0.1','13','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402270521','127.0.0.1','15','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/goods.php?id=6','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402270765','127.0.0.1','18','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402270768','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402270774','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402273545','127.0.0.1','16','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/flow.php?step=cart','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402273969','127.0.0.1','19','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/flow.php');");
E_D("replace into `ecs_stats` values('1402276068','127.0.0.1','20','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402276735','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=22','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402276788','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=22','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402276798','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402276813','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/article.php');");
E_D("replace into `ecs_stats` values('1402334172','127.0.0.1','17','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402334850','127.0.0.1','21','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/brand.php');");
E_D("replace into `ecs_stats` values('1402336926','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/brand.php','/vancl/brand.php');");
E_D("replace into `ecs_stats` values('1402337776','127.0.0.1','19','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/activity.php');");
E_D("replace into `ecs_stats` values('1402337816','127.0.0.1','21','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/activity.php');");
E_D("replace into `ecs_stats` values('1402337833','127.0.0.1','23','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/snatch.php');");
E_D("replace into `ecs_stats` values('1402337864','127.0.0.1','25','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/snatch.php');");
E_D("replace into `ecs_stats` values('1402337876','127.0.0.1','27','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/auction.php');");
E_D("replace into `ecs_stats` values('1402337945','127.0.0.1','29','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/message.php');");
E_D("replace into `ecs_stats` values('1402337993','127.0.0.1','31','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402351374','127.0.0.1','32','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402421754','127.0.0.1','33','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402421892','127.0.0.1','35','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/snatch.php');");
E_D("replace into `ecs_stats` values('1402421952','127.0.0.1','37','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/activity.php');");
E_D("replace into `ecs_stats` values('1402422273','127.0.0.1','39','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/activity.php');");
E_D("replace into `ecs_stats` values('1402422369','127.0.0.1','41','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402422389','127.0.0.1','43','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/snatch.php');");
E_D("replace into `ecs_stats` values('1402422701','127.0.0.1','45','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/snatch.php?id=1','/vancl/snatch.php');");
E_D("replace into `ecs_stats` values('1402423971','127.0.0.1','47','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402433596','127.0.0.1','23','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402434205','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402435297','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/search.php?encode=YTozOntzOjg6ImtleXdvcmRzIjtzOjE6IjEiO3M6MTA6ImltYWdlRmllbGQiO3M6MDoiIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjQ2MzAxODt9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402435604','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/search.php?encode=YTozOntzOjg6ImtleXdvcmRzIjtzOjE6IjEiO3M6MTA6ImltYWdlRmllbGQiO3M6MDoiIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjQ2MzAxODt9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402435866','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/search.php?encode=YTozOntzOjg6ImtleXdvcmRzIjtzOjE6IjEiO3M6MTA6ImltYWdlRmllbGQiO3M6MDoiIjtzOjE4OiJzZWFyY2hfZW5jb2RlX3RpbWUiO2k6MTQwMjQ2MzAxODt9','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402436848','127.0.0.1','25','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402436931','127.0.0.1','27','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402437215','127.0.0.1','29','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/exchange.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402437218','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402438193','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438196','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438201','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438203','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438279','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438607','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402438610','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1402438736','127.0.0.1','31','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438738','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402438819','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439042','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439048','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php?act=buy','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439105','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439123','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439148','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439160','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439172','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439757','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439768','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/exchange.php','/vancl/exchange.php');");
E_D("replace into `ecs_stats` values('1402439993','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/index.php','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402441131','127.0.0.1','32','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/exchange.php?id=6&act=view','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402441329','127.0.0.1','48','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402443110','127.0.0.1','50','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402443616','127.0.0.1','51','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402443630','127.0.0.1','33','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402444838','127.0.0.1','35','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402444885','127.0.0.1','37','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402506714','127.0.0.1','52','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402507945','127.0.0.1','38','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402508439','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402508441','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=collection_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402510990','127.0.0.1','39','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511037','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=collection_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511044','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511345','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511346','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=tag_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511347','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=message_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511349','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=affiliate','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511350','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=comment_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511351','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=profile','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511352','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=bonus','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511353','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=track_packages','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511354','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=track_packages','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511356','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=address_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511358','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=collection_list','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511359','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/user.php?act=profile','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402511944','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402512038','127.0.0.1','42','FireFox 29.0','Windows NT','zh-cn,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402521830','127.0.0.1','53','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402535148','127.0.0.1','59','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402591895','127.0.0.1','60','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402592963','127.0.0.1','62','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402598494','127.0.0.1','63','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/user.php','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402598951','127.0.0.1','64','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/user.php?act=logout','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402598984','127.0.0.1','66','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1402599564','127.0.0.1','68','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/user.php?act=logout','/vancl/user.php');");
E_D("replace into `ecs_stats` values('1402938374','127.0.0.1','43','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402938377','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1402938893','127.0.0.1','45','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1402940844','127.0.0.1','71','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402942981','127.0.0.1','46','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1402943584','127.0.0.1','73','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1402945649','127.0.0.1','47','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1402965501','127.0.0.1','48','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1402967207','127.0.0.1','50','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403029595','127.0.0.1','75','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1403030188','127.0.0.1','77','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403032118','127.0.0.1','79','Safari 537.1','Windows NT','zh-CN,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403038340','127.0.0.1','80','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1403042470','127.0.0.1','51','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403046676','127.0.0.1','52','FireFox 29.0','Windows NT','zh-cn,zh','LAN','','','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1403046679','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/','/vancl/category.php');");
E_D("replace into `ecs_stats` values('1403046682','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/category.php?id=1','/vancl/goods.php');");
E_D("replace into `ecs_stats` values('1403046774','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403047785','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403050512','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403052775','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403053746','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403053830','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403054652','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403054710','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403054950','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403054964','127.0.0.1','1','Unknow browser','Windows 32','','LAN','http://localhost','/vancl/group_buy.php','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403111695','127.0.0.1','82','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1403113936','127.0.0.1','83','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/admin/index.php?act=top','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1403114050','127.0.0.1','1','Internet Explorer 9.0','Windows NT','','LAN','','','/vancl/group_buy.php');");
E_D("replace into `ecs_stats` values('1403114927','127.0.0.1','85','Safari 537.1','Windows NT','zh-CN,zh','LAN','http://localhost','/vancl/group_buy.php','/vancl/index.php');");
E_D("replace into `ecs_stats` values('1417542376','180.175.180.236','2','FireFox 33.0','Windows NT','zh-cn,zh','[δ֪IP0801]','','','/newbigjd/mobile1/index.php');");
E_D("replace into `ecs_stats` values('1419188010','14.145.50.112','1','Internet Explorer 9.0','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419188024','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419189121','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419190294','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419190798','14.145.50.112','3','Internet Explorer 9.0','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/captcha_manage.php?act=main','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419191280','14.145.50.112','2','Safari 537.31','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419195331','14.145.50.112','3','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/sellers.php','/newbigjd/sellers.php');");
E_D("replace into `ecs_stats` values('1419201301','119.129.116.13','7','Safari 537.36','Windows NT','zh-CN,zh','APNIC','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419201316','119.129.116.13','8','Safari 537.36','Windows NT','zh-CN,zh','APNIC','http://test.ecmoban.com','/newbigjd/seller_store.php?sid=1','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419201319','119.129.116.13','9','Safari 537.36','Windows NT','zh-CN,zh','APNIC','http://test.ecmoban.com','/newbigjd/seller_store.php?sid=1','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419201690','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419201907','14.145.50.112','3','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/sellers.php','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419203496','124.207.242.18','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419207172','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419207629','219.146.85.102','35','Safari 537.36','Windows NT','zh-CN,zh','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419209678','219.146.85.102','36','Safari 537.36','Windows NT','zh-CN,zh','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419209769','183.60.35.94','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419269777','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419271567','112.64.235.252','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419283077','14.145.50.112','4','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419283490','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419287497','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419288472','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419288476','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419288603','14.150.200.179','2','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419288635','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419288715','14.150.200.179','3','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419288941','14.150.200.179','4','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/exchange_goods.php?act=list','/newbigjd/exchange.php');");
E_D("replace into `ecs_stats` values('1419288941','14.150.200.179','5','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/exchange_goods.php?act=list','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419288999','14.150.200.179','6','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419289027','14.150.200.179','7','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/category.php?id=264&price_min=&price_max=','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289039','14.150.200.179','8','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289051','14.150.200.179','9','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289051','14.150.200.179','9','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289055','14.150.200.179','10','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289055','14.150.200.179','10','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289055','14.150.200.179','11','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289055','14.150.200.179','11','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289055','14.150.200.179','11','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289055','14.150.200.179','11','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289056','14.150.200.179','12','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289056','14.150.200.179','12','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289056','14.150.200.179','12','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289056','14.150.200.179','12','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/suggestions.php');");
E_D("replace into `ecs_stats` values('1419289153','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419289195','14.150.200.179','13','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289229','14.150.200.179','5','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289253','14.150.200.179','14','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289376','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419289699','14.150.200.179','15','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289723','14.150.200.179','16','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289735','14.150.200.179','17','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289753','14.150.200.179','18','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419289779','14.150.200.179','19','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419290007','14.150.200.179','20','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419290072','14.150.200.179','21','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/article.php');");
E_D("replace into `ecs_stats` values('1419290092','14.150.200.179','22','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/article.php?id=33','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419290099','14.150.200.179','23','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/category.php?id=264&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419290106','14.150.200.179','24','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/category.php?id=262&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419290110','14.150.200.179','25','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/category.php?category=262&display=grid&brand=0&price_min=0&price_max=0&filter_attr=0&page=1&sort=comments_number&order=ASC','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419290125','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419290132','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419290280','14.150.200.179','26','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/goods.php?act=list','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419290290','14.150.200.179','27','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/goods.php?id=147','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419290301','14.150.200.179','28','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/goods.php?act=list','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419290302','14.150.200.179','29','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/goods.php?id=147','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419290327','14.150.200.179','30','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419290331','14.150.200.179','31','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419290571','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419291072','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419291195','14.150.200.179','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419292165','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419293898','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419293954','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419295007','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419296594','14.150.200.179','6','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419296998','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419297523','14.150.200.179','1','Internet Explorer 9.0','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419353396','115.231.107.5','9','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419357338','14.145.48.246','7','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/comment_manage.php?act=list','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419357502','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419358106','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419358840','14.145.48.246','4','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419359635','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419359727','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419359732','14.145.48.246','8','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419359790','14.145.48.246','8','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/order.php?act=delivery_info&delivery_id=18','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419364393','180.175.173.27','1','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419364757','115.29.255.18','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419364788','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419365019','115.29.255.1','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419366357','14.145.48.246','1','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419366925','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419367076','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419368650','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419368863','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=third','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419369035','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419370110','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419370178','14.145.48.246','2','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419370202','14.145.48.246','2','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419370453','180.175.173.27','19','Internet Explorer 7.0','Windows NT','','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370454','180.175.173.27','11','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370471','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419370497','180.175.173.27','12','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370510','180.175.173.27','13','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419370510','180.175.173.27','14','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370515','180.175.173.27','15','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419370515','180.175.173.27','16','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370519','180.175.173.27','17','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419370519','180.175.173.27','18','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370522','180.175.173.27','19','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/article.php');");
E_D("replace into `ecs_stats` values('1419370531','180.175.173.27','20','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370535','180.175.173.27','21','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=68&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370536','180.175.173.27','21','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=68&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370541','180.175.173.27','22','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=73&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370545','101.226.89.119','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419370546','180.175.173.27','23','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=181&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370547','180.175.173.27','23','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=181&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370549','180.175.173.27','23','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=181&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370553','180.175.173.27','24','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=3','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370557','112.64.235.251','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=68&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370559','180.175.173.27','25','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419370559','112.64.235.254','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=181&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370567','180.175.173.27','26','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/goods.php?id=106','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419370572','180.153.205.253','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419370604','180.175.173.27','27','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370606','180.175.173.27','28','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370611','101.226.89.116','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=68&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370613','180.175.173.27','29','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=2','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419370622','180.175.173.27','30','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=2','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370656','101.226.51.227','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419370668','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370713','180.153.211.190','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419370724','163.177.69.37','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370756','180.175.173.27','31','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370763','14.145.48.246','9','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370795','180.175.173.27','32','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370804','112.64.235.252','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=181&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370809','101.226.33.206','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/article.php');");
E_D("replace into `ecs_stats` values('1419370825','101.226.51.229','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=2','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370849','101.226.33.216','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=106','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419370876','14.145.48.246','3','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419370909','180.153.206.34','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=3','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370912','101.226.33.223','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=73&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419370961','14.145.48.246','5','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419370988','101.226.66.180','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419371105','222.73.77.54','1','Unknow browser','Unknown','zh-cn, zh','','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419371114','115.29.255.18','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419371119','115.29.255.18','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/article.php');");
E_D("replace into `ecs_stats` values('1419371214','115.29.255.18','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419371373','115.29.255.18','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/article.php');");
E_D("replace into `ecs_stats` values('1419371374','115.29.255.1','1','FireFox 3.5.16','Windows XP','','IANA','','','/newbigjd/article.php');");
E_D("replace into `ecs_stats` values('1419371512','180.153.206.36','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/category.php?id=2','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419371673','101.226.66.178','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419372098','112.65.193.13','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419372313','180.175.173.27','33','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419372435','14.145.48.246','4','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419373552','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419373931','180.175.173.27','2','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419374162','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419374164','14.145.48.246','3','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419374258','180.175.173.27','3','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419374478','222.73.77.54','1','Unknow browser','Unknown','zh-cn, zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419375043','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419375735','14.145.48.246','2','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419377581','14.145.48.246','4','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/user.php?act=affiliate','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419377980','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419378328','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419378444','14.145.48.246','1','Internet Explorer 10.0','Windows NT','','','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419378445','14.145.48.246','1','FireFox 34.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419378766','101.226.66.193','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419379467','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419379599','14.145.48.246','3','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419379935','14.145.48.246','4','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=logout','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419379936','14.145.48.246','5','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419379936','14.145.48.246','3','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419379960','14.145.48.246','6','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380003','14.145.48.246','7','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380069','14.145.48.246','8','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380070','14.145.48.246','9','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380083','14.145.48.246','10','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380087','14.145.48.246','11','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380088','14.145.48.246','11','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380088','14.145.48.246','12','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380104','14.145.48.246','13','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380108','14.145.48.246','14','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380111','14.145.48.246','15','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380112','14.145.48.246','16','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380113','14.145.48.246','17','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380114','14.145.48.246','18','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419380118','14.145.48.246','18','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419380123','14.145.48.246','19','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380124','14.145.48.246','20','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380135','14.145.48.246','21','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380140','14.145.48.246','22','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380141','14.145.48.246','23','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380159','14.145.48.246','24','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380163','14.145.48.246','25','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380164','14.145.48.246','26','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380165','14.145.48.246','27','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380180','14.145.48.246','28','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=get_password','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380184','14.145.48.246','29','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419380185','14.145.48.246','29','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419380188','14.145.48.246','30','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380188','14.145.48.246','31','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380204','14.145.48.246','32','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380207','14.145.48.246','33','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380208','14.145.48.246','34','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380213','14.145.48.246','35','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380218','14.145.48.246','36','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380238','14.145.48.246','37','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380253','14.145.48.246','38','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380257','14.145.48.246','39','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380259','14.145.48.246','39','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380264','14.145.48.246','40','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380265','14.145.48.246','41','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419380280','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=register','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419380349','14.145.48.246','2','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=logout','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419380677','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419380691','14.145.48.246','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419381537','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419382003','123.125.106.81','1','Unknow browser','Unknown','','','','','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419382004','180.149.134.10','1','Unknow browser','Unknown','','[δ֪IP0801]','','','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419382318','180.175.173.27','3','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','http://test.ecmoban.com','/newbigjd/admin/order.php?act=info&order_id=91','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419382362','112.90.78.22','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419382362','183.60.15.14','1','Internet Explorer 9.0','Windows NT','zh-cn','[δ֪IP0801]','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419382854','101.226.65.106','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://test.ecmoban.com','/newbigjd/admin/order.php?act=info&order_id=91','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419383586','14.145.48.246','3','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/user.php?act=logout','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419383902','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419433034','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433038','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433271','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433273','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433293','221.204.197.11','1','Unknow browser','Unknown','','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433296','221.204.197.11','1','Unknow browser','Unknown','','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433639','123.183.216.13','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433641','123.183.216.13','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433666','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433668','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419433998','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419434000','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419434391','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419434394','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419435225','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419435228','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419436245','61.160.224.36','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419436248','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419436669','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419436672','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419437155','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419437158','61.160.224.36','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419437545','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419437547','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419438003','61.160.224.36','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419438006','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419438436','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419438439','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419438842','61.160.224.36','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419438845','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419439529','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419439546','61.160.224.35','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419439962','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419439964','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419440334','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419440337','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419440815','61.160.224.36','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419440818','61.160.224.33','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419442980','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419443360','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419443642','14.145.48.246','5','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419446344','180.175.173.27','7','FireFox 34.0','Windows NT','zh-cn,zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419446357','14.17.18.144','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419446361','121.12.111.141','1','Safari 537.36','Windows XP','en,*','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419446365','218.14.23.192','6','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419446927','14.145.48.246','6','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419447339','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419448570','218.14.23.192','9','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419449241','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419449322','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419449693','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419449730','14.145.48.246','1','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419450634','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419450679','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419450731','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419450733','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419450735','218.14.23.192','7','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419450752','14.145.48.246','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419450768','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419451134','218.14.23.192','10','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419451138','218.14.23.192','10','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419451196','14.145.48.246','10','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419451295','14.145.48.246','7','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/goods.php?act=list&extension_code=virtual_card','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419455263','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419456016','211.147.235.213','2','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419456085','14.145.48.246','11','Unknow browser','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419456171','14.145.48.246','2','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419459646','14.145.48.246','3','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/flow.php?step=cart','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1419460730','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419461048','211.147.235.213','3','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1419461097','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419461595','218.14.23.192','8','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419462545','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419463142','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419463234','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419463506','14.145.48.246','1','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419463676','211.147.235.213','4','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419463722','218.14.23.192','9','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1419464280','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419464417','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419465896','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419466191','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419480326','180.153.201.79','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/store_street.php');");
E_D("replace into `ecs_stats` values('1419519390','123.183.216.13','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419519391','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419519641','61.160.224.34','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419519641','61.160.224.36','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419519648','221.204.197.11','1','Unknow browser','Unknown','','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419519648','221.204.197.11','1','Unknow browser','Unknown','','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419520029','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419520029','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419520482','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419520482','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419521011','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419521011','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419521454','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419521455','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419521922','123.183.216.13','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419521923','123.183.216.14','1','Unknow browser','Unknown','','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419532939','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419532965','14.119.113.94','8','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/comment_manage.php?act=list','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1419533211','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419534523','125.92.232.70','10','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419535995','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419537116','14.119.113.94','9','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/captcha_manage.php?act=main','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1419539826','125.92.232.70','11','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419543081','180.153.214.191','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419543791','14.119.113.94','10','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419543825','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419544126','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419544247','101.226.33.226','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419545343','125.92.232.70','12','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419546922','101.254.17.142','2','Safari 533.1','Linux','zh-CN','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419553072','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419553086','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419558159','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419559613','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419559614','14.119.113.94','1','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419559631','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419559631','112.90.78.25','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419559641','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419559696','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419559740','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419559747','14.119.113.94','4','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419559829','14.119.113.94','2','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/privilege.php?act=login','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419561086','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419561340','14.119.113.94','2','Safari 537.36','Windows XP','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419561341','14.119.113.94','3','Safari 537.36','Windows XP','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419612377','61.164.47.62','10','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419613134','61.164.47.62','11','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419615743','61.164.47.62','12','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419615930','14.150.200.188','11','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419615962','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419616424','125.92.232.70','13','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419616634','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419616704','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419617228','211.147.235.213','1','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419617273','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419618944','61.164.47.62','13','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419619592','61.164.47.62','14','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419621766','61.164.47.62','15','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419625618','61.164.47.62','16','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419626557','61.164.47.62','17','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419627840','211.147.235.213','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/privilege.php?act=login','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419627845','211.147.235.213','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419627989','14.150.200.188','5','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419627989','14.150.200.188','6','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419627994','14.150.200.188','7','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419628127','14.150.200.188','4','Safari 537.36','Windows XP','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419628587','61.164.47.62','18','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419628661','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419628759','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419628794','61.164.47.62','19','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419629595','61.164.47.62','20','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419630468','61.164.47.62','21','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419632386','61.164.47.62','22','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419635250','61.164.47.62','23','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419637975','61.164.47.62','24','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419638029','61.164.47.62','25','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419638596','61.164.47.62','26','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419639861','14.150.200.188','8','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419639862','14.150.200.188','9','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640493','183.31.50.212','3','Internet Explorer 8.0','Windows NT','zh-cn','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640510','183.31.50.212','4','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640511','183.31.50.212','4','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640530','183.31.50.212','5','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640531','183.31.50.212','6','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640531','183.31.50.212','6','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640532','183.31.50.212','6','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640532','183.31.50.212','6','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419640533','183.31.50.212','6','Internet Explorer 8.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419650727','114.111.166.29','27','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419665750','111.196.64.106','2','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419754008','183.131.11.99','16','Safari 537.36','Windows NT','zh-CN,zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419785049','61.164.47.62','28','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419785168','61.164.47.62','29','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419785916','61.164.47.62','30','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419786709','61.164.47.62','31','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419788952','59.33.217.116','50','Safari 537.36','Windows XP','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419788991','211.147.235.213','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/brand.php');");
E_D("replace into `ecs_stats` values('1419788992','211.147.235.213','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/brand.php');");
E_D("replace into `ecs_stats` values('1419789001','211.147.235.213','3','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/brand.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419789001','211.147.235.213','4','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/brand.php','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419789086','110.75.105.16','1','Internet Explorer 8.0','Windows NT','en-US,*','IANA','','','/newbigjd/brand.php');");
E_D("replace into `ecs_stats` values('1419789130','110.75.105.59','1','Unknow browser','Unknown','en-US,*','IANA','','','/newbigjd/brand.php');");
E_D("replace into `ecs_stats` values('1419789230','14.17.34.189','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419789245','59.33.217.116','13','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419791495','61.164.47.62','32','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419797584','61.164.47.62','33','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419800444','218.11.178.29','34','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419801237','61.164.47.62','35','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419802369','14.150.200.188','12','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin_shangjia/index.php?act=top','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419802392','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419805753','14.150.200.188','13','Safari 537.31','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419806224','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419808813','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419808995','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1419810309','61.164.47.62','36','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419817735','61.164.47.62','37','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419871032','61.164.47.62','38','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419874593','14.17.34.191','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419878690','61.164.47.62','39','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419886569','61.164.47.62','40','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419894158','61.164.47.62','41','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419924660','114.241.17.126','320','FireFox 31.0','Windows NT','zh-cn,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419971787','183.60.35.93','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419974535','101.226.89.122','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1419974618','180.153.201.215','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1419974966','218.83.2.129','12','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1419978855','59.33.31.140','14','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095941','125.76.165.46','2','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095954','125.76.165.46','3','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095958','125.76.165.46','4','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095960','125.76.165.46','5','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095963','125.76.165.46','6','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095968','125.76.165.46','7','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095972','125.76.165.46','8','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095981','125.76.165.46','9','(Internet Explorer ) Maxthon ','Windows 2003','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420095995','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1420098035','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1420098090','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1420098190','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1420098283','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1420338355','219.128.56.250','15','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420348254','61.148.243.253','3','Safari 537.36','Linux','zh-CN,en-US','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420389448','61.164.47.62','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420397193','61.164.47.62','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420405240','61.164.47.62','3','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420414108','61.164.47.62','4','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420477830','60.191.30.22','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420488936','60.191.30.22','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420496618','60.191.30.22','3','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420504652','60.191.30.22','4','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420505341','14.17.18.143','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420529969','222.88.85.83','76','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420540081','222.88.85.83','77','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/mobile1/index.php');");
E_D("replace into `ecs_stats` values('1420562796','60.191.30.22','5','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420569887','116.231.89.154','5','FireFox 33.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420573517','218.83.2.129','21','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420573517','218.83.2.129','22','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420573525','218.83.2.129','23','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420573533','218.83.2.129','24','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420578403','60.191.30.22','6','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420585760','60.191.30.22','7','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420593030','60.191.30.22','8','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420648187','60.191.30.22','9','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420655461','60.191.30.22','10','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420665639','60.191.30.22','11','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420672872','60.191.30.22','12','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420734876','60.191.30.22','13','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420748199','60.191.30.22','14','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420754011','112.64.235.252','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420754222','112.64.235.252','1','Unknow browser','Unknown','zh-cn, zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420759791','60.191.30.22','15','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420787835','222.134.102.246','7','Safari 537.36','Windows XP','zh-CN,zh','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420787875','222.134.102.246','8','Safari 537.36','Windows XP','zh-CN,zh','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420821453','60.191.30.22','16','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420828998','60.191.30.22','17','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420841161','60.191.30.22','18','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420851855','60.191.30.22','19','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1420993916','60.191.30.22','20','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421001172','60.191.30.22','21','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421008643','60.191.30.22','22','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421080362','114.111.166.29','23','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421087877','114.111.166.29','24','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421097883','114.111.166.29','25','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421105898','114.111.166.29','26','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421167000','115.231.239.22','27','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421175717','115.231.239.22','28','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183111','116.231.89.154','9','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183120','183.62.115.226','1','Internet Explorer 9.0','Windows NT','zh-cn','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183121','183.62.115.226','1','Internet Explorer 9.0','Windows NT','zh-cn','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183121','183.62.115.226','1','Internet Explorer 9.0','Windows NT','zh-cn','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183122','183.62.115.226','1','Internet Explorer 9.0','Windows NT','zh-cn','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183133','116.231.89.154','10','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183179','60.55.40.77','19','Internet Explorer 9.0','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421183406','60.55.40.77','20','Internet Explorer 9.0','Windows NT','zh-CN','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421194971','117.114.192.83','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421198830','117.114.192.83','3','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421205841','123.122.212.54','7','Safari 537.36','Linux','zh-CN,en-US','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421218435','123.122.212.54','98','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421220789','218.95.134.35','1','Safari 537.36','Windows XP','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421255991','119.147.207.150','1','Safari 537.36','Windows XP','en,*','APNIC','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421269261','114.242.250.146','9','Safari 537.36','Linux','zh-CN,en-US','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421276621','116.231.89.154','6','FireFox 34.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421277001','116.231.89.154','8','FireFox 34.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353740','42.243.35.25','2','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353785','42.243.35.25','3','Safari 537.36','Windows XP','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353811','42.243.35.25','4','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353833','42.243.35.25','5','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421353834','42.243.35.25','6','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353856','42.243.35.25','7','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421353856','42.243.35.25','8','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353876','42.243.35.25','9','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421353876','42.243.35.25','10','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353919','42.243.35.25','11','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421353923','42.243.35.25','12','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421353931','42.243.35.25','13','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=106','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1421353936','42.243.35.25','14','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=106','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421353944','42.243.35.25','15','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=2','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421353947','42.243.35.25','16','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=116','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1421353960','113.108.21.33','1','Internet Explorer 9.0','Windows NT','zh-cn','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353960','14.17.34.191','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353970','42.243.35.25','1','Internet Explorer 10.0','Windows NT','zh-CN','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353975','42.243.35.25','17','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421353975','42.243.35.25','18','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421353993','42.243.35.25','19','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421353993','42.243.35.25','20','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421354045','42.243.35.25','21','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=2','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421354049','42.243.35.25','22','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=125','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421354051','42.243.35.25','23','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=125','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421354055','42.243.35.25','24','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/flow.php','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421354061','42.243.35.25','25','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/flow.php?step=checkout','/newbigjd/store_street.php');");
E_D("replace into `ecs_stats` values('1421354067','42.243.35.25','26','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/store_street.php','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1421354070','42.243.35.25','27','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/store_street.php','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1421354075','42.243.35.25','28','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/store_street.php','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421354092','42.243.35.25','29','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=3&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421354097','42.243.35.25','30','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/category.php?id=4','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421354100','42.243.35.25','31','Safari 537.36','Windows XP','zh-CN,zh','IANA','http://test.ecmoban.com','/newbigjd/goods.php?id=142','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1421354129','180.153.114.200','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421357815','42.243.35.25','2','Internet Explorer 10.0','Windows NT','zh-CN','IANA','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421361432','116.231.89.154','1','FireFox 34.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421365652','115.231.239.22','29','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421538395','218.83.0.189','121','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421538699','218.83.0.189','122','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421538707','14.17.34.190','1','Unknow browser','Unknown','zh-cn, zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421538729','171.217.40.150','8','Safari 537.36','Windows XP','zh-CN,zh','ARIN','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421538796','180.153.214.191','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/newbigjd/store_street.php');");
E_D("replace into `ecs_stats` values('1421538868','180.153.114.199','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421539044','101.226.33.225','1','Unknow browser','Unknown','zh-cn, zh','IANA','http://www.sogou.com','/','/newbigjd/seller_store.php');");
E_D("replace into `ecs_stats` values('1421539144','180.153.206.19','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421539587','180.153.163.206','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','http://www.sogou.com','/','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421544570','184.105.206.94','1','Safari 537.36','Windows XP','en-US,*','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421599217','115.231.239.22','30','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421621232','112.94.158.90','26','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421648086','113.107.210.38','66','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421648150','220.202.128.40','67','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/sellers.php');");
E_D("replace into `ecs_stats` values('1421651042','220.202.128.40','68','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421730795','123.115.39.222','92','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421772315','115.231.239.22','31','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421772813','115.231.239.22','32','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421773141','115.231.239.22','33','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421776867','116.231.89.154','1','FireFox 34.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421788096','14.145.48.51','1','Unknow browser','Windows NT','zh-CN','','http://test.ecmoban.com','/newbigjd/admin/privilege.php?act=login','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421796873','116.231.89.154','26','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421796886','60.165.93.22','5','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421798273','180.153.206.23','1','Unknow browser','Unknown','zh-cn, zh','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421799581','175.149.16.209','1','Internet Explorer 10.0','Windows NT','zh-CN','[δ֪IP0801]','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421799812','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1421799974','60.165.93.22','1','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421802047','60.165.93.22','6','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421802073','121.196.43.130','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1421810680','60.165.93.22','8','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/admin/index.php?act=top','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421863163','42.91.9.147','9','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421863227','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1421867439','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421867457','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1421867641','116.231.89.154','30','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421867645','116.231.89.154','31','Safari 537.36','Windows NT','zh-CN,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421867775','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421867777','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867778','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867790','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867793','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867793','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867806','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867809','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867809','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867817','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867817','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867822','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867826','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867827','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867840','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867844','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421867844','116.231.89.154','2','FireFox 35.0','Windows NT','zh-cn,zh','','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421867863','116.231.89.154','2','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421869595','42.91.9.147','10','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421875068','116.231.89.154','32','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421875308','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1421875381','42.91.9.147','10','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421875420','42.91.9.147','11','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421875689','42.91.9.147','12','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421879927','42.91.9.147','13','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421880021','42.91.9.147','14','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421880196','42.91.9.147','1','FireFox 3.0.0.1','Windows XP','','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421881002','121.196.43.131','1','Unknow browser','Unknown','','','','','/newbigjd/certi.php');");
E_D("replace into `ecs_stats` values('1421881077','42.94.7.114','15','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421881134','42.94.7.114','16','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421881342','124.90.48.217','14','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881439','58.57.131.147','14','Safari 537.36','Windows NT','zh-CN,zh','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881492','58.57.131.147','15','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421881492','58.57.131.147','16','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881505','58.57.131.147','17','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881511','58.57.131.147','18','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=185&price_min=&price_max=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881519','58.57.131.147','19','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421881520','58.57.131.147','20','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881522','58.57.131.147','21','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421881522','58.57.131.147','22','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881525','58.57.131.147','23','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421881525','58.57.131.147','24','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881528','58.57.131.147','25','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421881528','58.57.131.147','26','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881530','58.57.131.147','27','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/affiche.php');");
E_D("replace into `ecs_stats` values('1421881530','58.57.131.147','28','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421881533','58.57.131.147','29','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881539','58.57.131.147','30','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=3','/newbigjd/search.php');");
E_D("replace into `ecs_stats` values('1421881541','58.57.131.147','31','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/search.php?encode=YToyOntzOjg6ImtleXdvcmRzIjtzOjEyOiLlip7lhazmloflhbciO3M6MTg6InNlYXJjaF9lbmNvZGVfdGltZSI7aToxNDIxOTEwMzM4O30=','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881543','58.57.131.147','32','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421881551','58.57.131.147','33','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=106','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421881552','58.57.131.147','34','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421881561','58.57.131.147','35','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881571','58.57.131.147','36','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881576','58.57.131.147','37','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=1','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881604','58.57.131.147','38','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881605','58.57.131.147','38','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881606','58.57.131.147','38','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881613','58.57.131.147','39','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=996','/newbigjd/user.php');");
E_D("replace into `ecs_stats` values('1421881614','58.57.131.147','40','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/user.php','/newbigjd/captcha.php');");
E_D("replace into `ecs_stats` values('1421881619','58.57.131.147','41','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881620','58.57.131.147','41','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/','/newbigjd/category.php');");
E_D("replace into `ecs_stats` values('1421881628','58.57.131.147','42','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/category.php?id=4','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421881644','58.57.131.147','43','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=60','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421881648','58.57.131.147','44','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=99','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881653','58.57.131.147','45','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=99','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881657','58.57.131.147','46','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=60','/newbigjd/goods.php');");
E_D("replace into `ecs_stats` values('1421881660','58.57.131.147','47','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=105','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881662','58.57.131.147','48','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=105','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881664','58.57.131.147','49','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/goods.php?id=105','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421881675','58.57.131.147','50','Safari 537.36','Windows NT','zh-CN,zh','ɽ','http://test.ecmoban.com','/newbigjd/flow.php','/newbigjd/flow.php');");
E_D("replace into `ecs_stats` values('1421882761','58.57.131.147','51','Safari 537.36','Windows NT','zh-CN,zh','ɽ','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421883920','116.231.89.154','32','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/index.php');");
E_D("replace into `ecs_stats` values('1421884576','42.94.7.114','11','Safari 537.36','Windows NT','zh-CN,zh','IANA','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421885210','125.74.85.6','12','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421885298','125.74.85.6','13','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421885518','125.74.85.6','14','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421885523','125.74.85.6','15','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421885547','125.74.85.6','16','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421885582','125.74.85.6','17','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1421889557','125.74.85.6','17','Safari 537.36','Windows NT','zh-CN,zh','','','','/newbigjd/mobile_1/index.php');");
E_D("replace into `ecs_stats` values('1421891414','125.74.81.81','2','FireFox 3.0.0.1','Windows XP','','','','','/newbigjd/myship.php');");
E_D("replace into `ecs_stats` values('1431709155','127.0.0.1','14','Safari 537.36','Windows NT','zh-CN,zh','LAN','','','/djd/index.php');");
E_D("replace into `ecs_stats` values('1431711760','127.0.0.1','15','Safari 537.36','Windows NT','zh-CN,zh','LAN','http://localhost','/djd/admin/goods.php?act=list','/djd/goods.php');");
E_D("replace into `ecs_stats` values('1431713013','127.0.0.1','16','Safari 537.36','Windows NT','zh-CN,zh','LAN','http://localhost','/djd/flow.php?step=consignee','/djd/flow.php');");
E_D("replace into `ecs_stats` values('1431718605','127.0.0.1','1','Unknow browser','Unknown','','LAN','','','/djd/uploadify.php');");

require("../../inc/footer.php");
?>