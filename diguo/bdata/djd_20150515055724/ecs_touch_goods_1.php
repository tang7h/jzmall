<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_goods`;");
E_C("CREATE TABLE `ecs_touch_goods` (
  `goods_id` int(10) unsigned default NULL COMMENT '外键',
  `sales_volume` int(10) unsigned default NULL COMMENT '销量统计'
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_goods` values('9','0');");
E_D("replace into `ecs_touch_goods` values('147','0');");
E_D("replace into `ecs_touch_goods` values('10','0');");
E_D("replace into `ecs_touch_goods` values('101','3');");

require("../../inc/footer.php");
?>