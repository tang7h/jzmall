<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_return_cause`;");
E_C("CREATE TABLE `ecs_return_cause` (
  `cause_id` int(11) NOT NULL auto_increment COMMENT '自增id',
  `cause_name` varchar(50) NOT NULL COMMENT '退换货原因',
  `parent_id` int(11) NOT NULL COMMENT '父级id',
  `sort_order` int(10) NOT NULL COMMENT '排序',
  `is_show` tinyint(3) NOT NULL COMMENT '是否显示',
  PRIMARY KEY  (`cause_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='退换货原因说明'");
E_D("replace into `ecs_return_cause` values('3','款式不喜欢','0','5','1');");
E_D("replace into `ecs_return_cause` values('7','款式不好看','3','50','1');");
E_D("replace into `ecs_return_cause` values('13','颜色问题','0','50','1');");
E_D("replace into `ecs_return_cause` values('14','有色差','13','50','1');");
E_D("replace into `ecs_return_cause` values('15','掉色','13','50','1');");
E_D("replace into `ecs_return_cause` values('16','款式太老','3','50','1');");

require("../../inc/footer.php");
?>