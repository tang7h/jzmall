<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_commission`;");
E_C("CREATE TABLE `ecs_commission` (
  `id` int(11) NOT NULL auto_increment,
  `seller_id` int(11) NOT NULL default '0',
  `prev_date` int(11) NOT NULL COMMENT '上次佣金结算时间',
  `curr_date` int(11) NOT NULL COMMENT '当前时间',
  `total_turnover` decimal(10,2) NOT NULL COMMENT '总营业额',
  `commission` decimal(10,2) NOT NULL COMMENT '佣金',
  `check_mony` decimal(10,2) NOT NULL COMMENT '结算',
  `status` int(11) NOT NULL default '1' COMMENT '返佣状态1未处理，2已结算',
  `check_date` int(11) NOT NULL COMMENT '结算日期',
  `remark` varchar(255) NOT NULL COMMENT '备注',
  `operator` varchar(50) NOT NULL COMMENT '转账人',
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='商家入驻佣金表'");
E_D("replace into `ecs_commission` values('3','2','1410833148','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('4','3','1418236936','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('5','4','1418239248','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('6','5','1419191875','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('7','6','1419369198','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('8','7','1419371461','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('9','8','1419373791','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('10','9','1419375146','0','0.00','0.00','0.00','1','0','','');");
E_D("replace into `ecs_commission` values('11','10','1419380833','0','0.00','0.00','0.00','1','0','','');");

require("../../inc/footer.php");
?>