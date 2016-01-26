<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_sessions_data`;");
E_C("CREATE TABLE `ecs_sessions_data` (
  `sesskey` varchar(32) character set utf8 collate utf8_bin NOT NULL default '',
  `expiry` int(10) unsigned NOT NULL default '0',
  `data` longtext NOT NULL,
  PRIMARY KEY  (`sesskey`),
  KEY `expiry` (`expiry`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8");
E_D("replace into `ecs_sessions_data` values('9854fca444a8e8d5820964b98f5b04cb','4294967295','a:9:{s:7:\"from_ad\";i:0;s:7:\"referer\";s:6:\"本站\";s:10:\"login_fail\";i:0;s:9:\"last_time\";s:10:\"1431718128\";s:7:\"last_ip\";s:9:\"127.0.0.1\";s:12:\"shipping_fee\";i:0;s:5:\"total\";a:40:{s:16:\"real_goods_count\";i:1;s:11:\"gift_amount\";i:0;s:11:\"goods_price\";d:373;s:12:\"market_price\";d:403;s:8:\"discount\";N;s:8:\"pack_fee\";i:0;s:8:\"card_fee\";i:0;s:12:\"shipping_fee\";i:0;s:15:\"shipping_insure\";i:0;s:14:\"integral_money\";i:0;s:5:\"bonus\";i:0;s:7:\"surplus\";i:0;s:7:\"cod_fee\";i:0;s:7:\"pay_fee\";d:0;s:3:\"tax\";i:0;s:6:\"saving\";d:30;s:9:\"save_rate\";s:2:\"7%\";s:20:\"goods_price_formated\";s:9:\"￥373.00\";s:21:\"market_price_formated\";s:9:\"￥403.00\";s:15:\"saving_formated\";s:8:\"￥30.00\";s:17:\"discount_formated\";s:7:\"￥0.00\";s:12:\"tax_formated\";s:7:\"￥0.00\";s:17:\"pack_fee_formated\";s:7:\"￥0.00\";s:17:\"card_fee_formated\";s:7:\"￥0.00\";s:14:\"bonus_formated\";s:7:\"￥0.00\";s:21:\"shipping_fee_formated\";s:7:\"￥0.00\";s:26:\"shipping_totelfee_formated\";s:7:\"￥0.00\";s:24:\"shipping_insure_formated\";s:7:\"￥0.00\";s:6:\"amount\";d:373;s:16:\"surplus_formated\";s:7:\"￥0.00\";s:8:\"integral\";i:0;s:17:\"integral_formated\";s:7:\"￥0.00\";s:16:\"pay_fee_formated\";s:7:\"￥0.00\";s:15:\"amount_formated\";s:9:\"￥373.00\";s:17:\"will_get_integral\";i:373;s:14:\"will_get_bonus\";s:7:\"￥0.00\";s:20:\"formated_goods_price\";s:9:\"￥373.00\";s:21:\"formated_market_price\";s:9:\"￥403.00\";s:15:\"formated_saving\";s:8:\"￥30.00\";s:10:\"all_amount\";d:373;}s:12:\"seller_total\";a:1:{i:0;a:40:{s:16:\"real_goods_count\";i:1;s:11:\"gift_amount\";i:0;s:11:\"goods_price\";d:373;s:12:\"market_price\";d:403;s:8:\"discount\";N;s:8:\"pack_fee\";i:0;s:8:\"card_fee\";i:0;s:12:\"shipping_fee\";i:0;s:15:\"shipping_insure\";i:0;s:14:\"integral_money\";i:0;s:5:\"bonus\";i:0;s:7:\"surplus\";i:0;s:7:\"cod_fee\";i:0;s:7:\"pay_fee\";i:0;s:3:\"tax\";i:0;s:6:\"saving\";d:30;s:9:\"save_rate\";s:2:\"7%\";s:20:\"goods_price_formated\";s:9:\"￥373.00\";s:21:\"market_price_formated\";s:9:\"￥403.00\";s:15:\"saving_formated\";s:8:\"￥30.00\";s:17:\"discount_formated\";s:7:\"￥0.00\";s:12:\"tax_formated\";s:7:\"￥0.00\";s:17:\"pack_fee_formated\";s:7:\"￥0.00\";s:17:\"card_fee_formated\";s:7:\"￥0.00\";s:14:\"bonus_formated\";s:7:\"￥0.00\";s:21:\"shipping_fee_formated\";s:7:\"￥0.00\";s:24:\"shipping_insure_formated\";s:7:\"￥0.00\";s:6:\"amount\";d:373;s:16:\"surplus_formated\";s:7:\"￥0.00\";s:8:\"integral\";i:0;s:17:\"integral_formated\";s:7:\"￥0.00\";s:16:\"pay_fee_formated\";s:7:\"￥0.00\";s:15:\"amount_formated\";s:9:\"￥373.00\";s:17:\"will_get_integral\";i:373;s:14:\"will_get_bonus\";s:7:\"￥0.00\";s:20:\"formated_goods_price\";s:9:\"￥373.00\";s:21:\"formated_market_price\";s:9:\"￥403.00\";s:15:\"formated_saving\";s:8:\"￥30.00\";s:8:\"sub_coin\";N;s:11:\"shipping_id\";i:3;}}s:9:\"flow_type\";i:0;}');");
E_D("replace into `ecs_sessions_data` values('11da3eef2d3aaac2a815d938211bf7fe','4294967295','a:7:{s:10:\"last_check\";i:1431719080;s:10:\"admin_name\";s:5:\"admin\";s:11:\"action_list\";s:3:\"all\";s:6:\"orders\";a:15:{i:0;a:21:{s:8:\"order_id\";s:3:\"105\";s:8:\"order_sn\";s:13:\"2015051694400\";s:8:\"add_time\";s:10:\"1431716172\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"2\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:6:\"373.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:6:\"陈炎\";s:7:\"address\";s:20:\"中南市场E区9栋\";s:5:\"email\";s:15:\"45988127@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:6:\"373.00\";s:5:\"buyer\";s:7:\"chenyan\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:9:\"￥373.00\";s:18:\"formated_total_fee\";s:9:\"￥373.00\";s:16:\"short_order_time\";s:11:\"05-16 10:56\";s:10:\"can_remove\";i:0;}i:1;a:21:{s:8:\"order_id\";s:3:\"103\";s:8:\"order_sn\";s:13:\"2015051609238\";s:8:\"add_time\";s:10:\"1431715876\";s:12:\"order_status\";s:1:\"0\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:6:\"373.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"0\";s:9:\"consignee\";s:6:\"陈炎\";s:7:\"address\";s:20:\"中南市场E区9栋\";s:5:\"email\";s:15:\"45988127@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:6:\"373.00\";s:5:\"buyer\";s:7:\"chenyan\";s:21:\"formated_order_amount\";s:9:\"￥373.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:9:\"￥373.00\";s:16:\"short_order_time\";s:11:\"05-16 10:51\";s:10:\"can_remove\";i:0;}i:2;a:21:{s:8:\"order_id\";s:3:\"101\";s:8:\"order_sn\";s:13:\"2014122532669\";s:8:\"add_time\";s:10:\"1419460320\";s:12:\"order_status\";s:1:\"1\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:3:\"777\";s:7:\"address\";s:6:\"777777\";s:5:\"email\";s:13:\"777777@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1015.00\";s:5:\"buyer\";s:3:\"777\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:10:\"￥1015.00\";s:16:\"short_order_time\";s:11:\"12-25 14:32\";s:10:\"can_remove\";i:0;}i:3;a:21:{s:8:\"order_id\";s:2:\"99\";s:8:\"order_sn\";s:13:\"2014122519538\";s:8:\"add_time\";s:10:\"1419459916\";s:12:\"order_status\";s:1:\"1\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:3:\"777\";s:7:\"address\";s:6:\"777777\";s:5:\"email\";s:13:\"777777@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"2010.00\";s:5:\"buyer\";s:3:\"777\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:10:\"￥2010.00\";s:16:\"short_order_time\";s:11:\"12-25 14:25\";s:10:\"can_remove\";i:0;}i:4;a:21:{s:8:\"order_id\";s:2:\"91\";s:8:\"order_sn\";s:13:\"2014122435849\";s:8:\"add_time\";s:10:\"1419373479\";s:12:\"order_status\";s:1:\"2\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:6:\"414.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"0\";s:9:\"consignee\";s:3:\"qqq\";s:7:\"address\";s:9:\"qqqqqqqqq\";s:5:\"email\";s:17:\"2991152301@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:6:\"414.00\";s:5:\"buyer\";s:9:\"无梧桐\";s:21:\"formated_order_amount\";s:9:\"￥414.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:9:\"￥414.00\";s:16:\"short_order_time\";s:11:\"12-24 14:24\";s:10:\"can_remove\";i:1;}i:5;a:21:{s:8:\"order_id\";s:2:\"90\";s:8:\"order_sn\";s:13:\"2014122238484\";s:8:\"add_time\";s:10:\"1419206344\";s:12:\"order_status\";s:1:\"1\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:4:\"Hgjj\";s:7:\"address\";s:9:\"Dhjgghjjg\";s:5:\"email\";s:0:\"\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:5:\"10.00\";s:5:\"buyer\";s:5:\"Jiayi\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:8:\"￥10.00\";s:16:\"short_order_time\";s:11:\"12-22 15:59\";s:10:\"can_remove\";i:0;}i:6;a:21:{s:8:\"order_id\";s:2:\"88\";s:8:\"order_sn\";s:13:\"2014120399486\";s:8:\"add_time\";s:10:\"1417568354\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"4\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:7:\"4923.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:2:\"11\";s:7:\"address\";s:4:\"1111\";s:5:\"email\";s:9:\"11@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"4923.00\";s:5:\"buyer\";s:3:\"111\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:10:\"￥4923.00\";s:18:\"formated_total_fee\";s:10:\"￥4923.00\";s:16:\"short_order_time\";s:11:\"12-03 16:59\";s:10:\"can_remove\";i:0;}i:7;a:21:{s:8:\"order_id\";s:2:\"84\";s:8:\"order_sn\";s:13:\"2014120302208\";s:8:\"add_time\";s:10:\"1417559967\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"2\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:7:\"1025.25\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:2:\"11\";s:7:\"address\";s:4:\"1111\";s:5:\"email\";s:9:\"11@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1025.25\";s:5:\"buyer\";s:3:\"111\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:10:\"￥1025.25\";s:18:\"formated_total_fee\";s:10:\"￥1025.25\";s:16:\"short_order_time\";s:11:\"12-03 14:39\";s:10:\"can_remove\";i:0;}i:8;a:21:{s:8:\"order_id\";s:2:\"82\";s:8:\"order_sn\";s:13:\"2014120331701\";s:8:\"add_time\";s:10:\"1417555341\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"2\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:6:\"101.01\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:2:\"11\";s:7:\"address\";s:4:\"1111\";s:5:\"email\";s:9:\"11@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:6:\"101.01\";s:5:\"buyer\";s:3:\"111\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:9:\"￥101.01\";s:18:\"formated_total_fee\";s:9:\"￥101.01\";s:16:\"short_order_time\";s:11:\"12-03 13:22\";s:10:\"can_remove\";i:0;}i:9;a:21:{s:8:\"order_id\";s:2:\"81\";s:8:\"order_sn\";s:13:\"2014120394551\";s:8:\"add_time\";s:10:\"1417550020\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"1\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:7:\"2659.05\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:6:\"小王\";s:7:\"address\";s:9:\"西柏涧\";s:5:\"email\";s:16:\"984265135@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"2674.05\";s:5:\"buyer\";s:8:\"xiaowang\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:10:\"￥2659.05\";s:18:\"formated_total_fee\";s:10:\"￥2674.05\";s:16:\"short_order_time\";s:11:\"12-03 11:53\";s:10:\"can_remove\";i:0;}i:10;a:21:{s:8:\"order_id\";s:2:\"79\";s:8:\"order_sn\";s:13:\"2014120354107\";s:8:\"add_time\";s:10:\"1417544641\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"5\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:7:\"5398.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:7:\"1111111\";s:7:\"address\";s:8:\"qqqqqqqq\";s:5:\"email\";s:0:\"\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"5398.00\";s:5:\"buyer\";s:8:\"11111111\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:10:\"￥5398.00\";s:18:\"formated_total_fee\";s:10:\"￥5398.00\";s:16:\"short_order_time\";s:11:\"12-03 10:24\";s:10:\"can_remove\";i:0;}i:11;a:21:{s:8:\"order_id\";s:2:\"76\";s:8:\"order_sn\";s:13:\"2014120158859\";s:8:\"add_time\";s:10:\"1417394698\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"2\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:6:\"111.01\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:2:\"11\";s:7:\"address\";s:4:\"1111\";s:5:\"email\";s:9:\"11@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:6:\"111.01\";s:5:\"buyer\";s:3:\"111\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:9:\"￥111.01\";s:18:\"formated_total_fee\";s:9:\"￥111.01\";s:16:\"short_order_time\";s:11:\"12-01 16:44\";s:10:\"can_remove\";i:0;}i:12;a:21:{s:8:\"order_id\";s:2:\"73\";s:8:\"order_sn\";s:13:\"2014120193022\";s:8:\"add_time\";s:10:\"1417386873\";s:12:\"order_status\";s:1:\"5\";s:15:\"shipping_status\";s:1:\"2\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:7:\"1010.10\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:2:\"11\";s:7:\"address\";s:4:\"1111\";s:5:\"email\";s:9:\"11@qq.com\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:7:\"1010.10\";s:5:\"buyer\";s:3:\"111\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:10:\"￥1010.10\";s:18:\"formated_total_fee\";s:10:\"￥1010.10\";s:16:\"short_order_time\";s:11:\"12-01 14:34\";s:10:\"can_remove\";i:0;}i:13;a:21:{s:8:\"order_id\";s:2:\"72\";s:8:\"order_sn\";s:13:\"2014111412185\";s:8:\"add_time\";s:10:\"1415934915\";s:12:\"order_status\";s:1:\"0\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:7:\"1000.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"0\";s:9:\"consignee\";s:11:\"54555255585\";s:7:\"address\";s:10:\"ffxggcfgvv\";s:5:\"email\";s:0:\"\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:9:\"group_buy\";s:12:\"extension_id\";s:1:\"2\";s:9:\"total_fee\";s:7:\"1000.00\";s:5:\"buyer\";s:7:\"test868\";s:21:\"formated_order_amount\";s:10:\"￥1000.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:10:\"￥1000.00\";s:16:\"short_order_time\";s:11:\"11-14 19:15\";s:10:\"can_remove\";i:0;}i:14;a:21:{s:8:\"order_id\";s:2:\"71\";s:8:\"order_sn\";s:13:\"2014111306214\";s:8:\"add_time\";s:10:\"1415813390\";s:12:\"order_status\";s:1:\"1\";s:15:\"shipping_status\";s:1:\"0\";s:12:\"order_amount\";s:4:\"0.00\";s:10:\"money_paid\";s:4:\"0.00\";s:10:\"pay_status\";s:1:\"2\";s:9:\"consignee\";s:9:\"郑忠州\";s:7:\"address\";s:24:\"铜盘路丞相坊10#802\";s:5:\"email\";s:0:\"\";s:3:\"tel\";s:0:\"\";s:14:\"extension_code\";s:0:\"\";s:12:\"extension_id\";s:1:\"0\";s:9:\"total_fee\";s:4:\"0.00\";s:5:\"buyer\";s:8:\"15936909\";s:21:\"formated_order_amount\";s:7:\"￥0.00\";s:19:\"formated_money_paid\";s:7:\"￥0.00\";s:18:\"formated_total_fee\";s:7:\"￥0.00\";s:16:\"short_order_time\";s:11:\"11-13 09:29\";s:10:\"can_remove\";i:0;}}s:10:\"commission\";a:9:{i:0;a:13:{s:2:\"id\";s:1:\"3\";s:9:\"seller_id\";s:1:\"2\";s:9:\"prev_date\";s:16:\"2014-09-16 18:05\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:1100;s:10:\"commission\";d:11;s:10:\"check_mony\";d:1089;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1409179712\";s:9:\"user_name\";s:8:\"xiaowang\";}i:1;a:13:{s:2:\"id\";s:1:\"4\";s:9:\"seller_id\";s:1:\"3\";s:9:\"prev_date\";s:16:\"2014-12-11 10:42\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1418236921\";s:9:\"user_name\";s:6:\"测试\";}i:2;a:13:{s:2:\"id\";s:1:\"5\";s:9:\"seller_id\";s:1:\"4\";s:9:\"prev_date\";s:16:\"2014-12-11 11:20\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1418239248\";s:9:\"user_name\";s:7:\"wwwbbbb\";}i:3;a:13:{s:2:\"id\";s:1:\"6\";s:9:\"seller_id\";s:1:\"5\";s:9:\"prev_date\";s:16:\"2014-12-22 11:57\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1419191875\";s:9:\"user_name\";s:11:\"admin123456\";}i:4;a:13:{s:2:\"id\";s:1:\"7\";s:9:\"seller_id\";s:1:\"6\";s:9:\"prev_date\";s:16:\"2014-12-24 13:13\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1419369198\";s:9:\"user_name\";s:3:\"ACE\";}i:5;a:13:{s:2:\"id\";s:1:\"8\";s:9:\"seller_id\";s:1:\"7\";s:9:\"prev_date\";s:16:\"2014-12-24 13:51\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1419371456\";s:9:\"user_name\";s:13:\"liushengzhong\";}i:6;a:13:{s:2:\"id\";s:1:\"9\";s:9:\"seller_id\";s:1:\"8\";s:9:\"prev_date\";s:16:\"2014-12-24 14:29\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1419373791\";s:9:\"user_name\";s:9:\"无梧桐\";}i:7;a:13:{s:2:\"id\";s:2:\"10\";s:9:\"seller_id\";s:1:\"9\";s:9:\"prev_date\";s:16:\"2014-12-24 14:52\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1419375146\";s:9:\"user_name\";s:3:\"888\";}i:8;a:13:{s:2:\"id\";s:2:\"11\";s:9:\"seller_id\";s:2:\"10\";s:9:\"prev_date\";s:16:\"2014-12-24 16:27\";s:9:\"curr_date\";s:16:\"2015-05-16 11:29\";s:14:\"total_turnover\";d:0;s:10:\"commission\";d:0;s:10:\"check_mony\";d:0;s:6:\"status\";s:9:\"未处理\";s:10:\"check_date\";s:0:\"\";s:6:\"remark\";s:0:\"\";s:8:\"operator\";s:0:\"\";s:8:\"add_time\";s:10:\"1419380833\";s:9:\"user_name\";s:3:\"777\";}}s:10:\"mony_count\";a:3:{s:5:\"total\";d:1100;s:4:\"comm\";d:11;s:4:\"mony\";d:1089;}s:10:\"count_fail\";i:1;}');");

require("../../inc/footer.php");
?>