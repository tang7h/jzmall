<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('latin1');
E_D("DROP TABLE IF EXISTS `ecs_street_tags`;");
E_C("CREATE TABLE `ecs_street_tags` (
  `id` int(11) NOT NULL auto_increment,
  `tag_name` varchar(10) character set utf8 NOT NULL COMMENT '???????',
  `tags_order` tinyint(4) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1");
E_D("replace into `ecs_street_tags` values('2','??','0');");
E_D("replace into `ecs_street_tags` values('3','??','0');");
E_D("replace into `ecs_street_tags` values('4','??','0');");

require("../../inc/footer.php");
?>