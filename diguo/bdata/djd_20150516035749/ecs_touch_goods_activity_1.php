<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_touch_goods_activity`;");
E_C("CREATE TABLE `ecs_touch_goods_activity` (
  `act_id` int(10) default NULL,
  `act_banner` varchar(255) default NULL,
  `sales_count` int(10) default NULL,
  `click_num` int(10) NOT NULL default '0',
  `cur_price` decimal(10,2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_touch_goods_activity` values('2','','0','2','0.00');");

require("../../inc/footer.php");
?>