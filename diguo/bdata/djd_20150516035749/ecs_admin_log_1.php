<?php
require("../../inc/header.php");

/*
		SoftName : EmpireBak Version 2010
		Author   : wm_chief
		Copyright: Powered by www.phome.net
*/

DoSetDbChar('utf8');
E_D("DROP TABLE IF EXISTS `ecs_admin_log`;");
E_C("CREATE TABLE `ecs_admin_log` (
  `log_id` int(10) unsigned NOT NULL auto_increment,
  `log_time` int(10) unsigned NOT NULL default '0',
  `user_id` tinyint(3) unsigned NOT NULL default '0',
  `log_info` varchar(255) NOT NULL default '',
  `ip_address` varchar(15) NOT NULL default '',
  PRIMARY KEY  (`log_id`),
  KEY `log_time` (`log_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3359 DEFAULT CHARSET=utf8");
E_D("replace into `ecs_admin_log` values('1','1240294375','1','添加品牌管理: 诺基亚','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('2','1240295621','1','添加属性: 网络类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('3','1240295930','1','添加属性: 扩展卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('4','1240295980','1','添加属性: 操作系统','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('5','1240296082','1','添加属性: 通话时间（分）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('6','1240296102','1','添加属性: 待机时间（小时）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('7','1240296379','1','添加属性: 上市时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('8','1240296403','1','编辑属性: 网络类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('9','1240296415','1','编辑属性: 扩展卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('10','1240298784','1','添加属性: 手机颜色','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('11','1240300896','1','添加属性: 基本配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('12','1240301110','1','添加属性: 附加配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('13','1240301295','1','添加属性: 和铉铃声','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('14','1240301371','1','添加属性: 相机像数','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('15','1240301487','1','添加属性: 感光元件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('16','1240301508','1','编辑属性: 和铉铃声','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('17','1240301518','1','编辑属性: 基本配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('18','1240301570','1','添加属性: 移动qq','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('19','1240301611','1','添加属性: gps','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('20','1240301650','1','添加属性: FM收音机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('21','1240301665','1','编辑属性: GPS','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('22','1240301679','1','编辑属性: FM收音机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('23','1240301705','1','添加属性: 话机电话薄（条）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('24','1240301715','1','添加属性: K-JAVA','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('25','1240301788','1','添加属性: 价格档位','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('26','1240305032','1','添加属性: 手机样式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('27','1240380338','1','添加属性: 图形菜单','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('28','1240380399','1','添加属性: 中文短消息','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('29','1240380444','1','添加属性: 内置游戏','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('30','1240380507','1','添加属性: Wap 上网','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('31','1240380533','1','添加属性: Wap 上网','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('32','1240380552','1','编辑属性: Wap 上网','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('33','1240380574','1','编辑属性: Wap 上网','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('34','1240380587','1','编辑属性: Wap 上网','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('35','1240380646','1','添加属性: 数据功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('36','1240380743','1','添加属性: 移动QQ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('37','1240380759','1','添加属性: 视频格式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('38','1240380831','1','添加属性: 扩张卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('39','1240380875','1','添加属性: 手机颜色','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('40','1240380920','1','添加属性: 来电防火墙','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('41','1240380945','1','添加属性: 英汉词典','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('42','1240380957','1','添加属性: 多语言显示','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('43','1240381002','1','添加属性: 电子书','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('44','1240381052','1','添加属性: 移动 MSN','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('45','1240381088','1','添加属性: 音频格式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('46','1240381143','1','添加属性: 上市时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('47','1240381206','1','添加属性: 语音拨号','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('48','1240381229','1','添加属性: 语音菜单','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('49','1240381356','1','添加属性: 外观样式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('50','1240381382','1','添加属性: 天线位置','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('51','1240381425','1','编辑属性: K-JAVA','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('52','1240381430','1','添加属性: K-JAVA','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('53','1240381464','1','添加属性: PDA 功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('54','1240381480','1','添加属性: 操作系统','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('55','1240381512','1','添加属性: 外壳材质','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('56','1240381561','1','编辑属性: 基本配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('57','1240381572','1','添加属性: 基本配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('58','1240381580','1','编辑属性: 附加配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('59','1240381602','1','添加属性: 附加配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('60','1240381627','1','编辑属性: 附加配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('61','1240381694','1','添加属性: 自动开关机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('62','1240381717','1','添加属性: 视频分辨率','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('63','1240381731','1','添加属性: 影音编辑器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('64','1240381741','1','添加属性: 图像编辑器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('65','1240381759','1','添加属性: 可用内存','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('66','1240381775','1','添加属性: 主屏幕像素','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('67','1240381786','1','添加属性: 副屏幕像素','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('68','1240382037','1','添加属性: 更换外壳','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('69','1240382801','1','添加属性: 办公功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('70','1240382823','1','添加属性: 传感器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('71','1240382844','1','添加属性: CPU频率','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('72','1240382866','1','添加属性: 理论待机时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('73','1240382875','1','添加属性: 理论通话时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('74','1240383267','1','编辑商品类型: 3g手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('75','1240383268','1','编辑商品类型: 手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('76','1240383269','1','编辑商品类型: 3g手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('77','1240383397','1','删除商品类型: 图形菜单','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('78','1240383432','1','添加属性: 图形菜单','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('79','1240383491','1','添加属性: EFR 服务','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('80','1240383509','1','添加属性: STK 服务','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('81','1240383528','1','添加属性: 通话录音','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('82','1240383554','1','添加属性: 语音菜单','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('83','1240383575','1','添加属性: 中文输入法','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('84','1240383594','1','编辑属性: 中文输入法','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('85','1240383613','1','编辑属性: 语音菜单','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('86','1240383635','1','添加属性: 和弦铃声','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('87','1240383651','1','添加属性: 主屏幕色彩','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('88','1240383658','1','添加属性: 副屏幕色彩','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('89','1240383682','1','添加属性: 天线位置','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('90','1240383700','1','添加属性: 数据功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('91','1240392733','1','安装配送方式: 邮政快递包裹','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('92','1240392748','1','安装配送方式: 圆通速递','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('93','1240392761','1','安装配送方式: 城际快递','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('94','1240392769','1','安装配送方式: 市内快递','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('95','1240463689','1','添加属性: 连拍','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('96','1240463709','1','添加属性: 定时拍摄','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('97','1240463729','1','添加属性: 照片打印','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('98','1240463748','1','添加属性: 照片特效','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('99','1240463766','1','添加属性: 电子书','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('100','1240463777','1','添加属性: 外壳材质','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('101','1240463793','1','添加属性: 名片扫描','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('102','1240463803','1','添加属性: GPU','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('103','1240463814','1','添加属性: CPU频率','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('104','1240463830','1','添加属性: TV-OUT电视输出','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('105','1240463843','1','添加属性: 来电图片识别','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('106','1240463855','1','添加属性: 来电防火墙','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('107','1240463865','1','添加属性: 背光自动调节','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('108','1240463873','1','添加属性: 照片分辨率','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('109','1240463880','1','添加属性: 变焦模式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('110','1240463903','1','添加属性: 英汉词典','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('111','1240463925','1','添加属性: 多语言显示','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('112','1240463974','1','添加属性: 数据线功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('113','1240463992','1','添加属性: 留言应答','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('114','1240464004','1','添加属性: 可用内存(MB)','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('115','1240464015','1','添加属性: GPS','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('116','1240464022','1','添加属性: 相机闪光灯','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('117','1240464030','1','添加属性: 移动 MSN','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('118','1240464038','1','添加属性: 移动QQ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('119','1240464050','1','添加属性: 内置媒体播放器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('120','1240464066','1','添加属性: 电子邮件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('121','1240464220','1','编辑属性: 待机时间（小时）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('122','1240464272','1','编辑属性: 网络类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('123','1240464277','1','编辑属性: 网络类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('124','1240464331','1','编辑属性: 网络类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('125','1240464631','1','编辑属性: 网络类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('126','1240464639','1','编辑属性: 扩展卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('127','1240464650','1','编辑属性: 操作系统','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('128','1240464709','1','编辑属性: 通话时间（分）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('129','1240464720','1','编辑属性: 待机时间（小时）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('130','1240464737','1','编辑属性: 上市时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('131','1240464748','1','编辑属性: 手机颜色','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('132','1240464758','1','编辑属性: 基本配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('133','1240464770','1','编辑属性: 和铉铃声','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('134','1240464783','1','编辑属性: 相机像数','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('135','1240464794','1','编辑属性: 移动qq','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('136','1240464806','1','编辑属性: 感光元件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('137','1240464816','1','编辑属性: GPS','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('138','1240464827','1','编辑属性: FM收音机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('139','1240464853','1','编辑属性: FM收音机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('140','1240464869','1','编辑属性: 话机电话薄（条）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('141','1240464880','1','编辑属性: 扩展卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('142','1240464896','1','编辑属性: 扩展卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('143','1240464917','1','编辑属性: K-JAVA','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('144','1240464931','1','编辑属性: 价格档位','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('145','1240464945','1','编辑属性: 手机样式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('146','1240464959','1','编辑属性: Wap 上网','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('147','1240800622','1','添加商品分类: 手机类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('148','1240800687','1','添加商品分类: GSM手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('149','1240800745','1','添加商品分类: GSM手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('150','1240800791','1','添加商品分类: 3G手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('151','1240800845','1','添加商品分类: 双模手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('152','1240800877','1','编辑商品分类: GSM手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('153','1240802922','1','添加品牌管理: 摩托罗拉','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('154','1240803062','1','编辑品牌管理: 诺基亚','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('155','1240803144','1','添加品牌管理: 多普达','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('156','1240803248','1','添加品牌管理: 飞利浦','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('157','1240803352','1','添加品牌管理: 夏新','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('158','1240803412','1','添加品牌管理: 三星','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('159','1240803482','1','添加品牌管理: 索爱','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('160','1240803526','1','添加品牌管理: LG','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('161','1240803578','1','添加品牌管理: 联想','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('162','1240803689','1','添加品牌管理: 金立','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('163','1240803736','1','添加品牌管理: 恒基伟业','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('164','1240803750','1','编辑品牌管理: 恒基伟业','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('165','1240804593','1','编辑商品分类: CDMA手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('166','1240902890','1','添加商品: KD876','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('167','1240904370','1','编辑商品: KD876','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('168','1240904461','1','编辑商品: KD876','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('169','1240912338','1','删除商品类型: 手机配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('170','1240912361','1','添加商品分类: 手机配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('171','1240912385','1','添加商品分类: 充电器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('172','1240912477','1','添加商品分类: 耳机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('173','1240912489','1','添加商品分类: 电池','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('174','1241420935','1','添加商品分类: 111','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('175','1241420966','1','添加商品: 斤','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('176','1241421093','1','回收商品: 斤','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('177','1241421104','1','删除商品: 斤','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('178','1241421110','1','删除商品分类: 111','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('179','1241421127','1','编辑商品分类: GSM手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('180','1241422082','1','添加商品: 诺基亚原装5800耳机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('181','1241422137','1','添加属性: 卡的类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('182','1241422163','1','添加属性: 卡的大小','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('183','1241422236','1','添加属性: 颜色','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('184','1241422272','1','编辑属性: 卡的容量','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('185','1241422289','1','添加属性: 电池容量','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('186','1241422347','1','编辑商品: 诺基亚原装5800耳机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('187','1241422402','1','添加商品: 诺基亚N85原装充电器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('188','1241422416','1','编辑商品: KD876','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('189','1241422518','1','添加商品: 索爱原装M2卡读卡器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('190','1241422573','1','添加商品: 胜创KINGMAX内存卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('191','1241422615','1','编辑商品: 胜创KINGMAX内存卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('192','1241422626','1','编辑商品: 诺基亚N85原装充电器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('193','1241422785','1','添加商品: 诺基亚N85原装立体声耳机HS-82 查看商品相册 诺基亚N85原装立体声耳机HS-82','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('194','1241425512','1','添加商品: 飞利浦9@9v ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('195','1241425836','1','编辑商品: 飞利浦9@9v ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('196','1241425891','1','编辑商品: 飞利浦9@9v ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('197','1241426819','1','添加文章分类: 3G手机资讯','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('198','1241426864','1','添加文章: 三星电子宣布将在中国发布15款3G手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('199','1241426898','1','编辑文章: 三星电子宣布将在中国发布15款3G手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('200','1241427051','1','添加文章: 薄锐极限 电信3G定制摩托罗拉V10发布','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('201','1241427449','1','编辑文章: 薄锐极限 电信3G定制摩托罗拉V10发布','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('202','1241427779','1','编辑文章: 诺基亚牵手移动 5款热门TD手机机型推荐','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('203','1241427850','1','编辑文章: 诺基亚牵手移动 5款热门TD手机机型推荐','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('204','1241511486','1','编辑商品: 飞利浦9@9v','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('205','1241511514','1','编辑属性: FM收音机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('206','1241511871','1','添加商品: 诺基亚E66','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('207','1241512315','1','编辑商品: 诺基亚E66','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('208','1241512443','1','删除商品类型: 手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('209','1241512563','1','添加属性: 手机制式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('210','1241512693','1','添加属性: 外观样式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('211','1241512704','1','添加属性: 上市时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('212','1241512712','1','添加属性: 屏幕参数','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('213','1241512720','1','添加属性: 摄像功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('214','1241512728','1','添加属性: 其它功能','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('215','1241512737','1','添加属性: 产品配置','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('216','1241512762','1','添加属性: 理论通话时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('217','1241512772','1','添加属性: 理论待机时间','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('218','1241512804','1','添加属性: 中文短消息','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('219','1241512813','1','添加属性: 存储卡格式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('220','1241512842','1','添加属性: 外壳材质','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('221','1241512868','1','添加属性: # 情景模式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('222','1241512907','1','添加属性: 蓝牙接口','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('223','1241512939','1','添加属性: GPS','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('224','1241512966','1','添加属性: MP3播放器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('225','1241512977','1','添加属性: 视频播放','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('226','1241513003','1','添加属性: 内置游戏','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('227','1241513036','1','编辑属性: 情景模式','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('228','1241513132','1','添加属性: 价位','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('229','1241513210','1','添加属性: 颜色','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('230','1241513508','1','编辑商品: 飞利浦9@9v','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('231','1241513571','1','编辑属性: MP3播放器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('232','1241513596','1','编辑属性: 外壳材质','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('233','1241513630','1','编辑商品: 飞利浦9@9v','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('234','1241513750','1','编辑属性: MP3播放器','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('235','1241513771','1','添加属性: 附加配件','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('236','1241513918','1','编辑属性: 像数（万）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('237','1241513939','1','编辑商品: 飞利浦9@9v','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('238','1241513959','1','编辑属性: 像数（万）','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('239','1241518314','1','编辑属性: 外壳材质','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('240','1241518329','1','编辑属性: 价位','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('241','1241946343','1','还原数据库备份: 备份时间2009-05-05 10:36:29','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('242','1241965622','1','添加商品: 索爱C702c','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('243','1241965816','1','添加商品: 索爱C702c','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('244','1241965859','1','编辑品牌管理: 摩托罗拉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('245','1241965978','1','添加商品: 摩托罗拉A810','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('246','1241966023','1','编辑商品: 摩托罗拉A810','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('247','1241966218','1','编辑商品: 摩托罗拉A810','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('248','1241966408','1','编辑商品: 摩托罗拉A810','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('249','1241966536','1','编辑品牌管理: 诺基亚','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('250','1241966874','1','编辑商品: 摩托罗拉A810','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('251','1241966922','1','回收商品: 索爱C702c','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('252','1241966951','1','还原商品: 索爱C702c','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('253','1241966963','1','回收商品: 索爱C702c','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('254','1241967340','1','编辑商品: 诺基亚E66','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('255','1241967424','1','编辑商品: 诺基亚N85原装立体声耳机HS-82','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('256','1241967465','1','编辑商品: 索爱原装M2卡读卡器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('257','1241967487','1','编辑商品: 诺基亚N85原装充电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('258','1241967556','1','编辑商品: KD876','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('259','1241967667','1','编辑商品: 飞利浦9@9v','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('260','1241967762','1','添加商品: 诺基亚5320 XpressMusic','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('261','1241968002','1','编辑商品: 诺基亚5320 XpressMusic','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('262','1241968058','1','编辑商品: 诺基亚5320 XpressMusic','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('263','1241968492','1','添加商品: 诺基亚5800XM','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('264','1241968703','1','添加商品: 摩托罗拉A810','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('265','1241968949','1','添加商品: 恒基伟业G101','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('266','1241969394','1','添加商品: 夏新N7','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('267','1241969533','1','添加商品: 夏新T5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('268','1241969541','1','回收商品: 夏新T5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('269','1241970139','1','添加商品: 三星SGH-F258','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('270','1241970175','1','编辑商品: 三星SGH-F258','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('271','1241970417','1','添加商品: 三星BC01','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('272','1241970634','1','添加商品: 金立 A30','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('273','1241970743','1','编辑商品: 飞利浦9@9v','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('274','1241971076','1','添加商品: 多普达Touch HD','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('275','1241971488','1','添加商品: 诺基亚N96','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('276','1241971556','1','编辑商品: 诺基亚N96','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('277','1241971981','1','添加商品: P806','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('278','1241972305','1','编辑商品: 飞利浦9@9v','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('279','1241972339','1','编辑商品: 恒基伟业G101','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('280','1241972512','1','添加商品分类: 充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('281','1241972554','1','添加商品分类: 小灵通/固话充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('282','1241972598','1','添加商品分类: 移动手机充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('283','1241972634','1','添加商品分类: 联通手机充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('284','1241972709','1','添加商品: 小灵通/固话50元充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('285','1241972789','1','添加商品: 小灵通/固话20元充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('286','1241972894','1','添加商品: 联通100元充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('287','1241972976','1','添加商品: 联通50元充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('288','1241973022','1','添加商品: 移动100元充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('289','1241973114','1','添加商品: 移动20元充值卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('290','1242105946','1','还原数据库备份: 备份时间2009-05-10 16:33:51','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('291','1242106383','1','编辑商品: 三星BC01','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('292','1242106490','1','编辑商品: 三星BC01','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('293','1242106594','1','添加会员账号: ecshop','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('294','1242106663','1','添加会员等级: vip','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('295','1242106727','1','添加会员等级: 钻石用户','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('296','1242106771','1','编辑商品: 诺基亚N96','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('297','1242106836','1','编辑商品: 诺基亚5320 XpressMusic','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('298','1242106894','1','添加会员账号: vip','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('299','1242106928','1','添加会员账号: text','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('300','1242106997','1','添加会员账号: zhuangshi','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('301','1242107017','1','删除会员账号: zhuangshi','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('302','1242107045','1','添加会员账号: zuanshi','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('303','1242107052','1','编辑会员账号: vip','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('304','1242107224','1','编辑操作日志: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('305','1242107360','1','添加: 音乐手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('306','1242107418','1','添加: 音乐手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('307','1242107466','1','添加: 音乐手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('308','1242107517','1','添加: 智能手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('309','1242107557','1','添加: 智能手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('310','1242107611','1','添加: 智能手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('311','1242107825','1','添加夺宝奇兵: 夺宝奇兵之诺基亚N96','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('312','1242107987','1','添加夺宝奇兵: 夺宝奇兵之夏新N7','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('313','1242108026','1','添加红包类型: 用户红包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('314','1242108084','1','添加红包类型: 商品红包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('315','1242108124','1','添加红包类型: 订单红包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('316','1242108159','1','添加红包类型: 线下红包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('317','1242108754','1','添加商品贺卡: 祝福贺卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('318','1242109088','1','添加团购商品: P806','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('319','1242109198','1','编辑商品: 金立 A30','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('320','1242109298','1','编辑商品: 金立 A30','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('321','1242109354','1','添加批发活动: 金立 A30','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('322','1242109644','1','编辑会员等级: 钻石用户','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('323','1242109964','1','添加优惠活动: 5.1诺基亚优惠活动','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('324','1242110117','1','添加拍卖活动: 拍卖活动——索爱C702c','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('325','1242110412','1','添加商品: 摩托罗拉E8 ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('326','1242110451','1','添加: 音乐手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('327','1242110566','1','添加超值礼包: 摩托罗拉E8 大礼包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('328','1242110760','1','添加商品: 诺基亚N85','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('329','1242110880','1','添加超值礼包: 诺基亚N85大礼包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('330','1242140620','1','还原数据库备份: 备份时间2009-05-12 06:48:22','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('331','1242140683','1','添加积分可兑换的商品: 24','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('332','1242141551','1','安装支付方式: 余额支付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('333','1242141813','1','安装配送方式: 申通快递','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('334','1242141841','1','添加配送区域: 申通','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('335','1242141890','1','添加配送区域: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('336','1242141897','1','安装配送方式: 邮局平邮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('337','1242141914','1','添加配送区域: 邮局','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('338','1242141958','1','安装配送方式: 运费到付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('339','1242142014','1','添加配送区域: 运费到付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('340','1242142081','1','安装支付方式: 银行汇款/转帐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('341','1242142190','1','编辑配送区域: 1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('342','1242142210','1','编辑配送区域: 运费到付','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('343','1242142227','1','编辑配送区域: 邮局','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('344','1242142503','1','编辑红包类型: 商品红包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('345','1242143005','1','编辑团购商品: P806[3]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('346','1242143557','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('347','1242144250','1','添加订单: 2009051264945','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('348','1242144268','1','编辑订单: 2009051264945,订单总金额由 0.00 变为 3800.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('349','1242144348','1','编辑订单: 2009051264945','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('350','1242144353','1','编辑订单: 2009051264945,订单总金额由 3800.00 变为 3810.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('351','1242144356','1','编辑订单: 2009051264945','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('352','1242144359','1','编辑订单: 2009051264945','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('353','1242144363','1','编辑订单: 2009051264945','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('354','1242576182','1','安装支付方式: 货到付款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('355','1242576584','1','添加文章分类: 新手上路 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('356','1242576615','1','添加文章分类: 手机常识 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('357','1242576627','1','添加文章分类: 配送与支付 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('358','1242576634','1','添加文章分类: 服务保证 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('359','1242576641','1','添加文章分类: 联系我们 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('360','1242576650','1','添加文章分类: 会员 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('361','1242576700','1','添加文章: 售后流程','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('362','1242576717','1','添加文章: 购物流程','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('363','1242576727','1','添加文章: 订购方式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('364','1242576826','1','添加文章: 如何分辨原装电池','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('365','1242576911','1','添加文章: 如何分辨水货手机 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('366','1242576927','1','添加文章: 如何享受全国联保','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('367','1242576971','1','编辑文章: 如何分辨原装电池','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('368','1242577023','1','添加文章: 货到付款区域','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('369','1242577032','1','添加文章: 配送支付智能查询 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('370','1242577041','1','添加文章: 支付方式说明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('371','1242577080','1','编辑文章分类: 会员中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('372','1242577127','1','添加文章: 资金管理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('373','1242577178','1','添加文章: 我的收藏','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('374','1242577199','1','添加文章: 我的订单','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('375','1242577230','1','编辑文章: 资金管理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('376','1242577293','1','添加文章: 退换货原则','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('377','1242577308','1','添加文章: 售后服务保证 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('378','1242577326','1','添加文章: 产品质量保证 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('379','1242577409','1','编辑文章分类: 联系我们 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('380','1242577432','1','添加文章: 网站故障报告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('381','1242577448','1','添加文章: 选机咨询 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('382','1242577459','1','添加文章: 投诉与建议 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('383','1242577702','1','添加文章: 800万像素超强拍照机 LG Viewty Smart再曝光','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('384','1242577731','1','编辑商品: KD876','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('385','1242577749','1','编辑商品: 三星BC01','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('386','1242577768','1','编辑商品: 三星SGH-F258','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('387','1242577791','1','编辑商品: 诺基亚N85','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('388','1242577813','1','编辑商品: 诺基亚N96','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('389','1242577838','1','编辑商品: 诺基亚N96','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('390','1242577864','1','编辑商品: 诺基亚E66','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('391','1242578018','1','添加文章分类: 本站手机促销','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('392','1242578199','1','添加文章: 飞利浦9@9促销','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('393','1242578365','1','编辑文章: 飞利浦9@9促销','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('394','1242578676','1','添加文章: 诺基亚5320 促销','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('395','1242578826','1','添加文章: 促销诺基亚N96','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('396','1242578885','1','添加文章分类: 站内快讯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('397','1242579069','1','添加文章: 诺基亚6681手机广告欣赏','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('398','1242579189','1','添加文章: 手机游戏下载','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('399','1242579559','1','添加文章: 三星SGHU308说明书下载','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('400','1242579587','1','编辑文章: 三星SGHU308说明书下载','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('401','1242579622','1','编辑文章: 手机游戏下载','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('402','1242580013','1','添加文章: 3G知识普及','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('403','1242973211','1','还原数据库备份: 备份时间2009-05-17 17:10:28','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('404','1242973252','1','编辑商品分类: 联通手机充值卡','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('405','1242973362','1','编辑商品: 摩托罗拉A810','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('406','1242973436','1','编辑商品: 索爱C702c','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('407','1242973501','1','编辑文章分类: 3G资讯','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('408','1242974080','1','添加拍卖活动: 拍卖活动——索爱C702c(第2期)','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('409','1242974159','1','编辑拍卖活动: 拍卖活动——索爱C702c(第2期)','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('410','1242974327','1','添加团购商品: P806','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('411','1242974380','1','编辑团购商品: P806[8]','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('412','1242974613','1','添加文章: “沃”的世界我做主','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('413','1242976639','1','添加用户红包: 1000091405','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('414','1244189181','1','编辑商品: 索爱C702c','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('415','1244189344','1','编辑文章分类: 手机促销','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('416','1244190576','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('417','1244190791','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('418','1244190825','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('419','1244190882','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('420','1244190952','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('421','1244191015','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('422','1244191031','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('423','1244773301','1','添加在线调查: 您从哪里知道我们的网站','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('424','1244773315','1','添加在线调查: 论坛','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('425','1244773328','1','添加在线调查: 朋友','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('426','1244773345','1','添加在线调查: 友情链接','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('427','1245042408','1','还原数据库备份: 备份时间2009-06-12 02:23:14','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('428','1245042659','1','编辑商品分类: 手机类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('429','1245042742','1','编辑商品分类: GSM手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('430','1245042772','1','编辑商品分类: 手机类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('431','1245043251','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('432','1245043292','1','编辑文章: 三星SGHU308说明书下载','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('433','1245044142','1','编辑权限管理: bjgonghuo1','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('434','1245044234','1','添加供货商管理: 北京供货商','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('435','1245044248','1','添加供货商管理: 上海供货商','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('436','1245044469','1','编辑红包类型: 订单红包','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('437','1245044698','1','编辑供货商管理: 北京供货商','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('438','1245044706','1','编辑供货商管理: 上海供货商','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('439','1245136915','1','还原数据库备份: 备份时间2009-06-15 06:54:05','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('440','1245138481','1','还原数据库备份: 备份时间2009-06-16 07:47:15','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('441','1245220014','1','编辑商品: 诺基亚N85','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('442','1245220040','1','编辑商品: 诺基亚N85','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('443','1245220295','1','编辑商品: P806','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('444','1245220617','1','编辑商品: 诺基亚N96','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('445','1245220821','1','编辑商品: 多普达Touch HD','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('446','1245221079','1','编辑商品: 金立 A30','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('447','1245221279','1','编辑商品: 三星BC01','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('448','1245221460','1','编辑商品: 三星SGH-F258','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('449','1245221658','1','编辑商品: 夏新N7','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('450','1245221889','1','编辑商品: 摩托罗拉A810','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('451','1245222018','1','编辑商品: 诺基亚5800XM','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('452','1245222169','1','编辑商品: 诺基亚5320 XpressMusic','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('453','1245222267','1','回收商品: 摩托罗拉A810','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('454','1245222409','1','编辑商品: 索爱C702c','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('455','1245222545','1','编辑商品: 诺基亚E66','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('456','1245222658','1','编辑商品: 飞利浦9@9v','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('457','1245222832','1','编辑商品: KD876','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('458','1245222978','1','编辑商店设置: ','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('459','1245223043','1','编辑商品分类: 手机类型','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('460','1245223128','1','编辑商品分类: GSM手机','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('461','1245223340','1','编辑文章: 诺基亚牵手移动 5款热门TD手机机型推荐','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('462','1245223387','1','编辑文章: 诺基亚牵手移动 5款热门TD手机机型推荐','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('463','1245223611','1','还原数据库备份: 备份时间2009-06-17 07:23:51','0.0.0.0');");
E_D("replace into `ecs_admin_log` values('464','1398274518','1','添加商品分类: 女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('465','1398274526','1','添加商品分类: 男装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('466','1398274531','1','添加商品分类: 女鞋/男鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('467','1398274536','1','添加商品分类: 运动/户外','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('468','1398274541','1','添加商品分类: 内衣/配饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('469','1398274547','1','添加商品分类: 童装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('470','1398274552','1','添加商品分类: 箱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('471','1398274565','1','添加商品分类: 家居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('472','1398274629','1','添加商品分类: 当季热卖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('473','1398274637','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('474','1398274644','1','添加商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('475','1398274649','1','添加商品分类: 衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('476','1398274669','1','编辑商品分类: 衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('477','1398274678','1','添加商品分类: 打底衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('478','1398274684','1','添加商品分类: 羽绒服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('479','1398274690','1','添加商品分类: 裤装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('480','1398274707','1','添加商品分类: 裙装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('481','1398274714','1','添加商品分类: 更多款式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('482','1398274731','1','添加商品分类: T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('483','1398274737','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('484','1398274746','1','添加商品分类: POLO衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('485','1398274752','1','添加商品分类: 时尚款毛衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('486','1398274761','1','添加商品分类: 时尚女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('487','1398274766','1','添加商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('488','1398274771','1','添加商品分类: 牛仔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('489','1398274789','1','添加商品分类: 摇粒绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('490','1398274795','1','添加商品分类: 双层绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('491','1398274801','1','添加商品分类: 连帽款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('492','1398274808','1','添加商品分类: 圆领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('493','1398274814','1','添加商品分类: 套头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('494','1398274821','1','添加商品分类: 开衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('495','1398274839','1','添加商品分类: 开衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('496','1398274844','1','添加商品分类: 套衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('497','1398274849','1','添加商品分类: 纯羊毛','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('498','1398274860','1','添加商品分类: 莫代尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('499','1398274865','1','添加商品分类: 纯棉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('500','1398274871','1','添加商品分类: 打底裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('501','1398274877','1','添加商品分类: 时尚款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('502','1398274905','1','添加商品分类: 雪纺衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('503','1398274910','1','添加商品分类: 休闲衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('504','1398274917','1','添加商品分类: 法兰绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('505','1398274924','1','添加商品分类: 牛津纺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('506','1398274929','1','添加商品分类: 灯芯绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('507','1398275120','1','添加商品分类: 素色款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('508','1398275125','1','添加商品分类: 时尚款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('509','1398275131','1','添加商品分类: 印花款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('510','1398275138','1','添加商品分类: V领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('511','1398275142','1','添加商品分类: 高领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('512','1398275147','1','添加商品分类: 圆领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('513','1398275152','1','添加商品分类: 开襟款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('514','1398275160','1','添加商品分类: 短款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('515','1398275183','1','添加商品分类: 中长款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('516','1398275188','1','添加商品分类: 长款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('517','1398276784','1','添加商品分类: 连帽款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('518','1398276794','1','添加商品分类: 立领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('519','1398276799','1','添加商品分类: 羽绒背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('520','1398276808','1','添加商品分类: 条绒裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('521','1398276816','1','添加商品分类: 卡其裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('522','1398276823','1','添加商品分类: 运动裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('523','1398276832','1','添加商品分类: 铅笔裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('524','1398276840','1','添加商品分类: 牛仔裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('525','1398276848','1','添加商品分类: 打底裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('526','1398276857','1','添加商品分类: 哈伦裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('527','1398276863','1','添加商品分类: 通勤裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('528','1398276872','1','添加商品分类: 连衣裙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('529','1398276877','1','添加商品分类: 半裙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('530','1398276882','1','添加商品分类: 长裙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('531','1398276892','1','添加商品分类: 时尚女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('532','1398276897','1','添加商品分类: 短外套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('533','1398276905','1','添加商品分类: 大衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('534','1398276910','1','添加商品分类: 风衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('535','1398276916','1','添加商品分类: 西服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('536','1398276924','1','添加商品分类: 牛仔上衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('537','1398276966','1','添加商品分类: 当季热卖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('538','1398276974','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('539','1398276994','1','添加商品分类: 衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('540','1398277007','1','添加商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('541','1398277013','1','添加商品分类: 打底衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('542','1398277021','1','添加商品分类: 羽绒服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('543','1398277028','1','添加商品分类: 裤装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('544','1398277033','1','添加商品分类: 更多款式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('545','1398277040','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('546','1398277048','1','添加商品分类: T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('547','1398277055','1','添加商品分类: POLO衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('548','1398277061','1','添加商品分类: 运动裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('549','1398277067','1','添加商品分类: 牛仔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('550','1398277079','1','添加商品分类: 素色款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('551','1398277087','1','添加商品分类: 摇粒绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('552','1398277100','1','添加商品分类: 双层绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('553','1398277106','1','添加商品分类: 印花款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('554','1398277115','1','添加商品分类: 圆领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('555','1398277121','1','添加商品分类: 连帽套头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('556','1398277128','1','添加商品分类: 连帽开衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('557','1399233155','1','添加商品分类: 商务衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('558','1399233172','1','添加商品分类: 休闲衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('559','1399233179','1','添加商品分类: 法兰绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('560','1399233187','1','添加商品分类: 牛津纺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('561','1399233194','1','添加商品分类: 灯芯绒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('562','1399233202','1','添加商品分类: 长绒棉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('563','1399233209','1','添加商品分类: 全棉精纺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('564','1399233215','1','添加商品分类: 莫代尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('565','1399233222','1','添加商品分类: 易打理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('566','1399233234','1','添加商品分类: 开衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('567','1399233241','1','添加商品分类: 套衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('568','1399233247','1','添加商品分类: 纯羊毛','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('569','1399233256','1','添加商品分类: 莫代尔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('570','1399233262','1','添加商品分类: 纯棉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('571','1399233270','1','添加商品分类: 背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('572','1399233308','1','添加商品分类: 素色款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('573','1399233314','1','添加商品分类: 时尚款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('574','1399233321','1','添加商品分类: 印花款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('575','1399233326','1','添加商品分类: 高领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('576','1399233332','1','添加商品分类: V领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('577','1399233337','1','添加商品分类: 圆领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('578','1399233342','1','添加商品分类: 开襟款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('579','1399233356','1','添加商品分类: 短款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('580','1399233391','1','添加商品分类: 中长款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('581','1399233400','1','添加商品分类: 羽绒背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('582','1399233409','1','添加商品分类: 连帽款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('583','1399233419','1','添加商品分类: 立领款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('584','1399233428','1','添加商品分类: 条绒裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('585','1399233435','1','添加商品分类: 抓绒运动裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('586','1399233443','1','添加商品分类: 卡其裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('587','1399233449','1','添加商品分类: 牛仔裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('588','1399233462','1','添加商品分类: 西裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('589','1399233472','1','添加商品分类: 工装裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('590','1399233481','1','添加商品分类: 夹克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('591','1399233488','1','添加商品分类: 毛呢外套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('592','1399233494','1','添加商品分类: 风衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('593','1399233500','1','添加商品分类: 牛仔上衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('594','1399233529','1','添加商品分类: 马甲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('595','1399233538','1','添加商品分类: 西装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('596','1399233615','1','添加商品分类: 帆布','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('597','1399233622','1','添加商品分类: 运动休闲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('598','1399233630','1','添加商品分类: 单鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('599','1399233637','1','添加商品分类: 女靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('600','1399233648','1','添加商品分类: 休闲鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('601','1399233655','1','添加商品分类: 运动鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('602','1399233663','1','添加商品分类: 男皮鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('603','1399233678','1','添加商品分类: 高帮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('604','1399233684','1','添加商品分类: 低帮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('605','1399233689','1','添加商品分类: 经典款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('606','1399233695','1','添加商品分类: 加厚款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('607','1399233705','1','添加商品分类: 复古跑鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('608','1399233766','1','添加商品分类: 板鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('609','1399233773','1','添加商品分类: 帆船鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('610','1399233783','1','添加商品分类: 帆船鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('611','1399233864','1','添加商品分类: 加厚款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('612','1399233873','1','添加商品分类: 唐卡鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('613','1399233880','1','添加商品分类: 牛津鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('614','1399233886','1','添加商品分类: 船鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('615','1399233891','1','添加商品分类: 松糕鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('616','1399233900','1','添加商品分类: 雪地靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('617','1399233906','1','添加商品分类: 时尚女靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('618','1399233914','1','添加商品分类: 马丁靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('619','1399233939','1','添加商品分类: 休闲板鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('620','1399233947','1','添加商品分类: 帆船鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('621','1399233959','1','添加商品分类: 简约生活鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('622','1399233969','1','添加商品分类: 沙漠靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('623','1399233990','1','添加商品分类: 正装皮鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('624','1399233997','1','添加商品分类: 休闲皮鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('625','1399248414','1','添加商品分类: 复古篮球鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('626','1399248428','1','添加商品分类: 都市户外鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('627','1399248480','1','添加商品分类: 复古跑鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('628','1399248510','1','添加商品分类: 冬季热卖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('629','1399248521','1','添加商品分类: 冲锋衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('630','1399248529','1','添加商品分类: 运动上装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('631','1399248539','1','添加商品分类: 运动下装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('632','1399248612','1','添加商品分类: 防风款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('633','1399248623','1','添加商品分类: 防水款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('634','1399248632','1','添加商品分类: 保暖款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('635','1399248647','1','添加商品分类: 双层绒卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('636','1399248665','1','添加商品分类: 抓绒运动裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('637','1399248702','1','添加商品分类: 男款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('638','1399248711','1','添加商品分类: 女款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('639','1399248727','1','添加商品分类: 三合一','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('640','1399248778','1','添加商品分类: 运动夹克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('641','1399248785','1','添加商品分类: 运动卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('642','1399248793','1','添加商品分类: 情侣款卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('643','1399248811','1','添加商品分类: 连帽卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('644','1399248824','1','添加商品分类: 运动T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('645','1399248876','1','添加商品分类: 套头运动衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('646','1399248886','1','添加商品分类: 运动开衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('647','1399248894','1','添加商品分类: 双层绒运动衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('648','1399248900','1','添加商品分类: 摇粒绒运动衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('649','1399248910','1','添加商品分类: 运动男裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('650','1399248920','1','添加商品分类: 运动女裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('651','1399248927','1','添加商品分类: 户外裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('652','1399249034','1','添加商品分类: 女士内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('653','1399249039','1','添加商品分类: 男士内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('654','1399249047','1','添加商品分类: 服饰配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('655','1399249054','1','添加商品分类: 饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('656','1399249087','1','添加商品分类: 袜品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('657','1399249094','1','添加商品分类: 保暖内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('658','1399249105','1','添加商品分类: 内衣文胸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('659','1399249111','1','添加商品分类: 内裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('660','1399249116','1','添加商品分类: BRA-T','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('661','1399249121','1','添加商品分类: 保暖内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('662','1399249127','1','添加商品分类: 生理裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('663','1399249132','1','添加商品分类: 安全裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('664','1399249139','1','添加商品分类: 内衣内裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('665','1399249144','1','添加商品分类: 打底T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('666','1399249150','1','添加商品分类: 背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('667','1399249155','1','添加商品分类: 保暖内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('668','1399249174','1','添加商品分类: 帽子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('669','1399249187','1','添加商品分类: 围巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('670','1399249248','1','添加商品分类: 手套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('671','1399249261','1','添加商品分类: 腰带','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('672','1399249279','1','添加商品分类: 太阳镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('673','1399249289','1','添加商品分类: 口罩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('674','1399249297','1','添加商品分类: 手表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('675','1399249302','1','添加商品分类: 项链','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('676','1399249307','1','添加商品分类: 戒指','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('677','1399249312','1','添加商品分类: 腕饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('678','1399310988','1','添加商品分类: 男棉袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('679','1399310997','1','添加商品分类: 女棉袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('680','1399311005','1','添加商品分类: 纯色棉袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('681','1399311014','1','添加商品分类: 条纹袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('682','1399311024','1','添加商品分类: 连裤袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('683','1399311445','1','添加商品分类: 男款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('684','1399311454','1','添加商品分类: 女款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('685','1399311462','1','添加商品分类: 薄款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('686','1399311477','1','添加商品分类: 厚款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('687','1399311511','1','添加商品分类: 发热款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('688','1399311531','1','添加商品分类: 秋裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('689','1399311568','1','添加商品分类: 上装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('690','1399311575','1','添加商品分类: 下装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('691','1399311581','1','添加商品分类: 内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('692','1399311587','1','添加商品分类: 母婴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('693','1399311594','1','添加商品分类: 年龄','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('694','1399311604','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('695','1399311614','1','添加商品分类: 长T','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('696','1399311620','1','添加商品分类: 长袖衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('697','1399311625','1','添加商品分类: 短T','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('698','1399311631','1','添加商品分类: 短POLO','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('699','1399311637','1','添加商品分类: 超轻羽绒服148元起','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('700','1399311643','1','添加商品分类: 长裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('701','1399311648','1','添加商品分类: 短裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('702','1399311657','1','添加商品分类: 秋衣裤/家居服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('703','1399311663','1','添加商品分类: 打底衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('704','1399311668','1','添加商品分类: 内裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('705','1399311674','1','添加商品分类: 婴儿装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('706','1399311681','1','添加商品分类: 孕妇装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('707','1399311689','1','添加商品分类: 0-1岁(59-80cm)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('708','1399311696','1','添加商品分类: 1-6岁(80-120cm)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('709','1399311701','1','添加商品分类: 7-15岁(130-170cm)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('710','1399311773','1','添加商品分类: 热销品类','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('711','1399311785','1','添加商品分类: 款式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('712','1399311796','1','添加商品分类: 拉杆箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('713','1399311804','1','添加商品分类: 材质','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('714','1399311814','1','添加商品分类: 价格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('715','1399311821','1','添加商品分类: 风格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('716','1399311836','1','添加商品分类: 拉杆箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('717','1399311844','1','添加商品分类: 双肩包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('718','1399311851','1','添加商品分类: 单肩包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('719','1399311859','1','添加商品分类: 斜挎包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('720','1399311872','1','添加商品分类: 钱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('721','1399311879','1','添加商品分类: 邮差包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('722','1399311905','1','添加商品分类: 男包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('723','1399311914','1','添加商品分类: 女包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('724','1399311930','1','添加商品分类: 中性款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('725','1399311938','1','添加商品分类: 软箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('726','1399311948','1','添加商品分类: 硬箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('727','1399311959','1','添加商品分类: 真皮包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('728','1399311965','1','添加商品分类: PU','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('729','1399311975','1','添加商品分类: 帆布包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('730','1399311983','1','添加商品分类: 尼龙/涤纶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('731','1399311989','1','添加商品分类: 其他','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('732','1399312002','1','添加商品分类: 0-49','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('733','1399312010','1','添加商品分类: 50-99','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('734','1399312017','1','添加商品分类: 100-159','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('735','1399312026','1','添加商品分类: 160-199','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('736','1399312035','1','添加商品分类: 200-299','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('737','1399312053','1','添加商品分类: 300以上','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('738','1399312067','1','添加商品分类: 时尚百搭','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('739','1399312077','1','添加商品分类: 潮流复古','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('740','1399312088','1','添加商品分类: 休闲运动','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('741','1399312097','1','添加商品分类: 甜美可爱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('742','1399312112','1','添加商品分类: 经典商务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('743','1399312169','1','添加商品分类: 冬季热卖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('744','1399312182','1','添加商品分类: 家纺床品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('745','1399315370','1','添加商品分类: 家居服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('746','1399315383','1','添加商品分类: 家居鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('747','1399315392','1','添加商品分类: 收纳用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('748','1399315402','1','添加商品分类: 卫浴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('749','1399315412','1','添加商品分类: 生活日用','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('750','1399315430','1','添加商品分类: 家居鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('751','1399315445','1','添加商品分类: 热水袋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('752','1399315457','1','添加商品分类: 毯子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('753','1399315467','1','添加商品分类: 浴袍','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('754','1399315498','1','添加商品分类: 床品套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('755','1399315568','1','添加商品分类: 枕套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('756','1399315582','1','添加商品分类: 床单','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('757','1399315592','1','添加商品分类: 枕芯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('758','1399315602','1','添加商品分类: 家居毯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('759','1399315615','1','添加商品分类: 男款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('760','1399315628','1','添加商品分类: 女款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('761','1399315658','1','添加商品分类: 收纳箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('762','1399315758','1','添加商品分类: 真空收纳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('763','1399315769','1','添加商品分类: 收纳柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('764','1399315782','1','添加商品分类: 衣架','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('765','1399315794','1','添加商品分类: 毛巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('766','1399315805','1','添加商品分类: 浴巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('767','1399315818','1','添加商品分类: 手工皂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('768','1399315828','1','添加商品分类: 浴袍','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('769','1399315845','1','添加商品分类: 热水袋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('770','1399315888','1','添加商品分类: 保温杯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('771','1399315899','1','添加商品分类: 墙贴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('772','1399315909','1','添加商品分类: 十字绣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('773','1399315918','1','添加商品分类: 餐厨用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('774','1399315926','1','添加商品分类: 室内装饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('775','1399315939','1','添加商品分类: 男款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('776','1399315952','1','添加商品分类: 女款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('777','1399316146','1','添加广告位置: 首页幻灯片广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('778','1399316214','1','添加广告: 首页幻灯片1（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('779','1399316234','1','添加广告: 首页幻灯片2（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('780','1399316251','1','添加广告: 首页幻灯片3（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('781','1399316269','1','添加广告: 首页幻灯片4（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('782','1399316283','1','添加广告: 首页幻灯片5（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('783','1399316463','1','编辑广告位置: 首页幻灯片广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('784','1399316479','1','添加广告位置: 首页幻灯片广告位（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('785','1399316488','1','编辑广告: 首页幻灯片5（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('786','1399316519','1','添加广告: 首页幻灯片1（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('787','1399316540','1','添加广告: 首页幻灯片2（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('788','1399316583','1','添加广告: 首页幻灯片3（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('789','1399316598','1','添加广告: 首页幻灯片4（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('790','1399316611','1','添加广告: 首页幻灯片5（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('791','1399316812','1','添加广告位置: 首页幻灯片下广告位1（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('792','1399316837','1','编辑广告位置: 首页幻灯片下广告位1（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('793','1399316851','1','添加广告: 首页幻灯片下广告1（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('794','1399316857','1','编辑广告位置: 首页幻灯片下广告位1（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('795','1399316989','1','添加广告位置: 首页幻灯片下广告位1（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('796','1399316994','1','编辑广告位置: 首页幻灯片下广告位1（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('797','1399316997','1','编辑广告: 首页幻灯片下广告1（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('798','1399317016','1','添加广告: 首页幻灯片下广告1（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('799','1399317120','1','添加广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('800','1399317143','1','添加广告: 首页幻灯片下广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('801','1399317157','1','添加广告: 首页幻灯片下广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('802','1399317174','1','添加广告: 首页幻灯片下广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('803','1399317186','1','添加广告: 首页幻灯片下广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('804','1399317240','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('805','1399317361','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('806','1399317386','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('807','1399317471','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('808','1399317480','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('809','1399317680','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('810','1399317740','1','编辑广告位置: 首页幻灯片下广告位2、3、4、5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('811','1399318242','1','添加广告位置: 标题广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('812','1399318266','1','添加广告: 女装标题广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('813','1399318282','1','添加广告: 男装标题广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('814','1399318316','1','添加广告: 女鞋/男鞋标题广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('815','1399318340','1','添加广告: 童装标题广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('816','1399318363','1','添加广告: 运动/户外标题广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('817','1399318578','1','添加广告位置: 首页分类左侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('818','1399318605','1','添加广告: 女装分类左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('819','1399318622','1','添加广告: 女装分类左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('820','1399318638','1','编辑广告位置: 首页分类左侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('821','1399318673','1','添加广告位置: 首页分类右侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('822','1399318684','1','编辑广告: 女装分类左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('823','1399318702','1','添加广告: 女装分类右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('824','1399318719','1','添加广告: 女装分类右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('825','1399318734','1','添加广告: 女装分类右侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('826','1399318749','1','添加广告: 女装分类右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('827','1399318761','1','添加广告: 女装分类右侧广告7','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('828','1399318790','1','编辑广告: 女装分类右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('829','1399318810','1','编辑广告: 女装分类右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('830','1399318828','1','添加广告: 女装分类右侧广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('831','1399318902','1','添加广告: 男装分类左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('832','1399318922','1','添加广告: 男装分类左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('833','1399318957','1','添加广告: 男装分类右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('834','1399318971','1','添加广告: 男装分类右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('835','1399318988','1','添加广告: 男装分类右侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('836','1399319000','1','添加广告: 男装分类右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('837','1399319013','1','添加广告: 男装分类右侧广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('838','1399319069','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('839','1399319134','1','添加广告: 童装分类左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('840','1399319146','1','添加广告: 童装分类左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('841','1399319210','1','添加广告: 童装分类右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('842','1399319223','1','添加广告: 童装分类右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('843','1399319236','1','添加广告: 童装分类右侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('844','1399319251','1','添加广告: 童装分类右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('845','1399319264','1','添加广告: 童装分类右侧广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('846','1399319342','1','添加广告: 运动/户外分类左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('847','1399319353','1','添加广告: 运动/户外分类左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('848','1399319373','1','添加广告: 运动/户外分类右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('849','1399319385','1','添加广告: 运动/户外分类右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('850','1399319396','1','添加广告: 运动/户外分类右侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('851','1399319409','1','添加广告: 运动/户外分类右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('852','1399319419','1','添加广告: 运动/户外分类右侧广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('853','1399319537','1','添加广告位置: 抢购活动广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('854','1399319555','1','添加广告: 女装抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('855','1399319568','1','添加广告: 男装抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('856','1399319586','1','添加广告: 女鞋/男鞋抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('857','1399319604','1','添加广告: 运动/户外抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('858','1399319643','1','添加广告: 内衣/配饰抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('859','1399319667','1','添加广告: 童装抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('860','1399319682','1','添加广告: 箱包抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('861','1399319697','1','添加广告: 家居抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('862','1399319835','1','编辑商品分类: 女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('863','1399320043','1','添加广告位置: 顶级分类页幻灯片广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('864','1399320061','1','添加广告: 女装顶级分类页幻灯片1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('865','1399320070','1','添加广告: 女装顶级分类页幻灯片2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('866','1399320079','1','添加广告: 女装顶级分类页幻灯片3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('867','1399320088','1','添加广告: 女装顶级分类页幻灯片4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('868','1399320097','1','添加广告: 女装顶级分类页幻灯片5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('869','1399320121','1','编辑广告位置: 顶级分类页幻灯片广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('870','1399320156','1','添加广告位置: 顶级分类页右侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('871','1399320171','1','添加广告: 女装顶级分类页右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('872','1399320181','1','添加广告: 女装顶级分类页右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('873','1399324783','1','添加广告位置: 顶级分类页新品推荐右侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('874','1399324803','1','添加广告: 女装顶级分类页新品推荐右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('875','1399324935','1','添加商品: [VT]印花T恤 SWEET SMILE(女款) 玛瑙红色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('876','1399324968','1','添加商品: [VT]印花T恤 可爱斗牛犬（女款） 白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('877','1399324996','1','添加商品: [VT]印花T恤 部落纹样（女款） 黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('878','1399325041','1','添加商品: 全棉色织格子腰带舒适女式长袖衬衫 绿色小方格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('879','1399325075','1','添加商品: 全棉色织格子花边舒适女式长袖衬衫 蕾丝深灰格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('880','1399325116','1','添加商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('881','1399325193','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('882','1399325272','1','添加商品: 超轻薄便携式女开衫连帽卫衣 女 浅黄','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('883','1399325303','1','添加商品: 超轻薄便携式女开衫连帽卫衣 女 藏蓝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('884','1399325332','1','添加商品: 超轻薄便携式女开衫连帽卫衣 女 浅粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('885','1399325364','1','添加商品: 超轻薄便携式女开衫连帽卫衣 女 纯净蓝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('886','1399325397','1','添加商品: 超轻薄便携式女开衫连帽卫衣 女 浅麻灰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('887','1399325511','1','添加商品: 日系提花宽松针织套头衫 卡其色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('888','1399325538','1','添加商品: 韩版细绞花V领套头衫 深蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('889','1399325574','1','添加商品: 韩版细绞花V领套头衫 浅杏色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('890','1399325604','1','添加商品: 女装开叉领基础款 中杏色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('891','1399325636','1','添加商品: 韩版细绞花圆领套头衫 浅杏色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('892','1399326708','1','添加商品: 清新甜美糖果色短袖雪纺衬衫 粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('893','1399326798','1','添加商品: 浪漫优雅小立领撞色边短袖雪纺衬衫 裸色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('894','1399326871','1','添加商品: 清新甜美棉质花边短袖雪纺衬衫 浅茶色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('895','1399326954','1','添加商品: 飘带领浪漫优雅雪纺中袖衬衫 胭脂红','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('896','1399327092','1','添加商品: Sweety甜美提花拼接雪纺上衣 裸粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('897','1399327121','1','添加商品: 时尚撞色大翻领落肩袖雪纺衬衫 宝蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('898','1399327272','1','添加商品: [VT]时尚黑白系列(3)(女款) 白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('899','1399327329','1','添加商品: [VT]时尚黑白系列(2)(女款) 白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('900','1399327342','1','编辑商品: [VT]时尚黑白系列(3)(女款) 白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('901','1399327381','1','添加商品: [VT]印花T恤 音乐符号(女款) 白色/姜黄色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('902','1399327421','1','添加商品: [VT]甜美蕾丝领长袖T恤(女款) 白色/黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('903','1399327455','1','添加商品: [VT]时尚蕾丝领长袖T恤(女款) 米白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('904','1399327506','1','添加商品: [VT]森女织花裙摆长袖T恤(女款) 米白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('905','1399327601','1','添加商品: 加厚欧美范连帽中长款羽绒服 藕粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('906','1399327647','1','添加商品: 卖萌毛球连帽短款羽绒服 香槟金','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('907','1399327687','1','添加商品: 大毛领丝带短款羽绒服 亮黄色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('908','1399327726','1','添加商品: 甜美珍珠领短款羽绒服 水蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('909','1399327759','1','添加商品: 可爱圆点连帽短款羽绒服 黑色/米色波点','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('910','1399327876','1','添加商品: 基础百搭修身窄脚牛仔长裤女款VJ295 中蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('911','1399327908','1','添加商品: 百搭多色修身窄脚牛仔长裤女款VJ1305 怀旧中蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('912','1399327941','1','添加商品: 针织牛仔短裤W028 牛仔蓝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('913','1399327982','1','添加商品: 百搭水洗翻边合体牛仔短裤女款VJ243 中蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('914','1399328023','1','添加商品: 五袋水洗毛边合体牛仔短裤女款VJ247 中蓝色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('915','1399328097','1','添加商品: Sweety甜美系带雪纺连衣裙 浅粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('916','1399328133','1','添加商品: JX假两件套蕾丝拼接连衣裙 白色/黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('917','1399328174','1','添加商品: Sweety甜美蕾丝花苞裙 橙/白','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('918','1399328223','1','添加商品: skyeisle 天空岛 韩国夏装新款女波西米亚糖果色半身长裙Q2120507壹 支持货到付款 杏色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('919','1399328269','1','添加商品: Street 压褶无袖连衣裙 糖果粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('920','1399328316','1','编辑商品分类: 中长款','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('921','1399328343','1','编辑商品分类: 套衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('922','1399328416','1','编辑商品分类: 套衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('923','1399328429','1','编辑商品分类: 羽绒服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('924','1399328440','1','编辑商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('925','1399328459','1','编辑商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('926','1399399780','1','安装支付方式: 网银在线','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('927','1399399784','1','安装支付方式: 快钱人民币网关','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('928','1399417614','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('929','1399419796','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('930','1399420047','1','编辑前台语言项: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('931','1399425263','1','编辑商品分类: 更多款式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('932','1399584545','1','添加属性: 款型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('933','1399584552','1','添加属性: 样式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('934','1399584560','1','添加属性: 裙长','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('935','1399584566','1','添加属性: 风格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('936','1399584572','1','添加属性: 价格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('937','1399584883','1','编辑属性: 款型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('938','1399584891','1','编辑属性: 样式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('939','1399584897','1','编辑属性: 裙长','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('940','1399584903','1','编辑属性: 风格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('941','1399584908','1','编辑属性: 价格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('942','1399585011','1','编辑商品: Street 压褶无袖连衣裙 糖果粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('943','1399585139','1','编辑商品分类: 裙装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('944','1399843505','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('945','1399844399','1','添加广告位置: 分类页左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('946','1399844425','1','添加广告: 分类页左侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('947','1399850952','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('948','1399851320','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('949','1399921253','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('950','1400003356','1','添加属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('951','1400021795','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('952','1400028110','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('953','1400029643','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('954','1400029676','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('955','1400029707','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('956','1400029723','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('957','1400029804','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('958','1400029818','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('959','1400030908','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','192.168.1.208');");
E_D("replace into `ecs_admin_log` values('960','1400093587','1','添加属性: 测试复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('961','1400093616','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('962','1400094577','1','编辑属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('963','1400094842','1','编辑属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('964','1400094851','1','编辑属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('965','1400095036','1','添加属性: 尺寸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('966','1400095062','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('967','1400095524','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('968','1400095577','1','添加属性: 复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('969','1400095602','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('970','1400095611','1','编辑属性: 复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('971','1400095613','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('972','1400110206','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('973','1400112197','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('974','1400114422','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('975','1400114454','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('976','1400114475','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('977','1400114515','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('978','1400114538','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('979','1400115873','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('980','1400116160','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('981','1400116172','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('982','1400116223','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('983','1400116265','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('984','1400116325','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('985','1400116380','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('986','1400116409','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('987','1400116434','1','编辑属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('988','1400116452','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('989','1400116551','1','编辑属性: 复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('990','1400116553','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('991','1400116555','1','编辑属性: 复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('992','1400116593','1','编辑属性: 复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('993','1400116608','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('994','1400116616','1','编辑属性: 复选','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('995','1400116618','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('996','1400116720','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('997','1400116986','1','编辑商品: 全棉色织格子花边舒适女式长袖衬衫 蕾丝深灰格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('998','1400116996','1','编辑商品: 全棉色织格子花边舒适女式长袖衬衫 蕾丝深灰格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('999','1400117025','1','编辑商品: 全棉色织格子花边舒适女式长袖衬衫 蕾丝深灰格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1000','1400117052','1','编辑商品: 全棉色织格子花边舒适女式长袖衬衫 蕾丝深灰格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1001','1400117076','1','编辑商品: 全棉色织格子花边舒适女式长袖衬衫 蕾丝深灰格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1002','1400174771','1','添加优惠活动: 测试优惠活动1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1003','1400183484','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1004','1400694520','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1005','1400697253','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1006','1401149384','1','添加在线调查: 1111','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1007','1401149393','1','编辑在线调查: 1111','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1008','1401212205','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1009','1401214577','1','添加属性: 人群','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1010','1401214583','1','添加属性: 风格','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1011','1401214589','1','添加属性: 季节','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1012','1401214593','1','添加属性: 厚度','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1013','1401214599','1','添加属性: 口袋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1014','1401214603','1','添加属性: 版型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1015','1401214608','1','添加属性: 袖长','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1016','1401214614','1','添加属性: 袖型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1017','1401214619','1','添加属性: 领型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1018','1401214628','1','添加属性: 衣长','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1019','1401214635','1','添加属性: 花色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1020','1401214642','1','添加属性: 面料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1021','1401214650','1','编辑商品类型: 衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1022','1401214688','1','添加属性: 颜色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1023','1401214697','1','添加属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1024','1401214823','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1025','1401229972','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1026','1401229980','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1027','1401230024','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1028','1401230427','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1029','1401237569','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1030','1401237763','1','编辑用户评论: 回复','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1031','1402270548','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1032','1402270562','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1033','1402335803','1','编辑商品: Street 压褶无袖连衣裙 糖果粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1034','1402335819','1','编辑商品: skyeisle 天空岛 韩国夏装新款女波西米亚糖果色半身长裙Q2120507壹 支持货到付款 杏色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1035','1402335826','1','编辑商品: Sweety甜美蕾丝花苞裙 橙/白','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1036','1402335837','1','编辑商品: 针织牛仔短裤W028 牛仔蓝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1037','1402422365','1','添加夺宝奇兵: adsadas','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1038','1402422770','1','添加拍卖活动: 222','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1039','1402438226','1','添加积分可兑换的商品: 15','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1040','1402438235','1','添加积分可兑换的商品: 17','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1041','1402438241','1','添加积分可兑换的商品: 16','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1042','1402438734','1','添加积分可兑换的商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1043','1402439099','1','商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1044','1402439099','1','商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1045','1402439099','1','商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1046','1402439099','1','商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1047','1402439099','1','商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1048','1402439099','1','商品: 6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1049','1403031295','1','添加团购商品: [VT]印花T恤 SWEET SMILE(女款) 玛瑙红色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1050','1403031307','1','添加团购商品: [VT]印花T恤 可爱斗牛犬（女款） 白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1051','1403031318','1','添加团购商品: [VT]印花T恤 部落纹样（女款） 黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1052','1403031334','1','添加团购商品: 超轻薄便携式女开衫连帽卫衣 女 浅黄','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1053','1403031347','1','添加团购商品: 超轻薄便携式女开衫连帽卫衣 女 纯净蓝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1054','1403031355','1','编辑团购商品: 超轻薄便携式女开衫连帽卫衣 女 浅黄[6]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1055','1403031361','1','编辑团购商品: [VT]印花T恤 部落纹样（女款） 黑色[5]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1056','1403031367','1','编辑团购商品: [VT]印花T恤 可爱斗牛犬（女款） 白色[4]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1057','1403031372','1','编辑团购商品: [VT]印花T恤 SWEET SMILE(女款) 玛瑙红色[3]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1058','1403031396','1','添加团购商品: Sweety甜美系带雪纺连衣裙 浅粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1059','1403049731','1','编辑商品: Sweety甜美系带雪纺连衣裙 浅粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1060','1403049900','1','编辑商品: Sweety甜美系带雪纺连衣裙 浅粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1061','1403052327','1','编辑商品: Sweety甜美系带雪纺连衣裙 浅粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1062','1403052366','1','编辑商品: Sweety甜美系带雪纺连衣裙 浅粉色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1063','1403054689','1','商品: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1064','1403054689','1','商品: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1065','1403054689','1','商品: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1066','1403054689','1','商品: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1067','1403054689','1','商品: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1068','1403054689','1','商品: 39','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1069','1403114142','1','添加广告位置: 团购左侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1070','1403114175','1','添加广告: 团购列表页左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1071','1403114185','1','添加广告: 团购列表页左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1072','1403114195','1','添加广告: 团购列表页左侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1073','1403114223','1','编辑广告位置: 团购列表左侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1074','1403114225','1','编辑广告位置: 团购列表左侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1075','1403114249','1','添加广告位置: 团购详情左侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1076','1403114271','1','添加广告: 团购详情左侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1077','1403114282','1','添加广告: 团购详情左侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1078','1403114295','1','添加广告: 团购详情左侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1079','1403114496','1','添加广告位置: 团购列表右侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1080','1403114518','1','添加广告位置: 团购详情右侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1081','1403114546','1','添加广告: 团购列表页右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1082','1403114563','1','添加广告: 团购列表页右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1083','1403114575','1','添加广告: 团购列表页右侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1084','1403114586','1','添加广告: 团购列表页右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1085','1403114599','1','添加广告: 团购列表页右侧广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1086','1403114622','1','添加广告: 团购详情页右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1087','1403114632','1','添加广告: 团购详情页右侧广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1088','1403114643','1','添加广告: 团购详情页右侧广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1089','1403114657','1','添加广告: 团购详情页右侧广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1090','1403114667','1','添加广告: 团购详情页右侧广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1091','1403114921','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1092','1403114956','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1093','1403115456','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1094','1403115489','1','编辑属性: 尺码','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1095','1403116654','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1096','1403116690','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1097','1403117592','1','编辑商品: 女装开叉领基础款 中杏色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1098','1403128357','1','编辑团购商品: Sweety甜美系带雪纺连衣裙 浅粉色[8]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1099','1403128366','1','编辑团购商品: Sweety甜美系带雪纺连衣裙 浅粉色[8]','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1100','1403214036','1','删除广告: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1101','1403216200','1','编辑广告: 女装顶级分类页右侧广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1102','1403459153','1','添加广告位置: 首页弹出层广告（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1103','1403459196','1','添加广告位置: 首页弹出层广告（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1104','1403459429','1','添加广告: 首页弹出层广告（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1105','1403459446','1','添加广告: 首页弹出层广告（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1106','1403459704','1','编辑广告: 运动/户外标题广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1107','1403459706','1','编辑广告: 运动/户外抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1108','1403459706','1','编辑广告: 运动/户外抢购活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1109','1403483862','1','编辑商品分类: 女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1110','1403483899','1','编辑商品分类: 女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1111','1403484026','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1112','1403724201','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','192.168.1.140');");
E_D("replace into `ecs_admin_log` values('1113','1403724242','1','编辑属性: 尺码','192.168.1.140');");
E_D("replace into `ecs_admin_log` values('1114','1403724263','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','192.168.1.140');");
E_D("replace into `ecs_admin_log` values('1115','1403724280','1','编辑属性: 尺码','192.168.1.140');");
E_D("replace into `ecs_admin_log` values('1116','1403724300','1','编辑商品: 全棉色织格子格调拼接女式长袖衬衫 蓝绿格子','192.168.1.140');");
E_D("replace into `ecs_admin_log` values('1117','1406058553','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1118','1406069374','1','添加广告位置: 首页幻灯片右侧广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1119','1406069395','1','添加广告: 首页幻灯片右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1120','1406074024','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1121','1406074910','1','添加文章: 母婴4周年最高200减100','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1122','1406074918','1','添加文章: 充话费抢美菱对开门冰箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1123','1406074925','1','添加文章: 京东大篷车百城行','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1124','1406074932','1','添加文章: 七夕表白珠宝专场','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1125','1406074938','1','添加文章: 出游装备1-5折还满减','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1126','1406074946','1','添加文章: 小家电专场满500减100','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1127','1406074952','1','添加文章: 手机7周年特惠盛典','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1128','1406074958','1','添加文章: 海尔品牌团 特价一天！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1129','1406075262','1','添加广告位置: 首页幻灯片下方广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1130','1406075296','1','添加广告: 首页幻灯片下方广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1131','1406075320','1','编辑广告: 首页幻灯片下方广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1132','1406075324','1','编辑广告: 首页幻灯片下方广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1133','1406075333','1','添加广告: 首页幻灯片下方广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1134','1406075478','1','编辑广告: 首页幻灯片下方广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1135','1406075488','1','添加广告: 首页幻灯片下方广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1136','1406075518','1','添加广告: 首页幻灯片下方广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1137','1406075539','1','添加广告: 首页幻灯片下方广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1138','1406075561','1','添加广告: 首页幻灯片下方广告6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1139','1406075576','1','添加广告: 首页幻灯片下方广告7','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1140','1406075586','1','添加广告: 首页幻灯片下方广告8','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1141','1406075607','1','添加广告: 首页幻灯片下方广告9','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1142','1406076695','1','编辑广告位置: 首页幻灯片下方广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1143','1406137147','1','添加广告位置: 活动广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1144','1406137160','1','添加广告: 活动广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1145','1406140880','1','删除广告位置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1146','1406140886','1','编辑在线调查: 您从哪里知道我们的网站','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1147','1406143895','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1148','1406144161','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1149','1406150844','1','添加广告位置: 生活橱窗广告位1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1150','1406150873','1','添加广告: 生活橱窗广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1151','1406151481','1','编辑广告位置: 生活橱窗广告位1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1152','1406151489','1','编辑广告位置: 生活橱窗广告位1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1153','1406151693','1','编辑广告: 首页幻灯片右侧广告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1154','1406151695','1','编辑广告: 生活橱窗广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1155','1406151695','1','编辑广告: 生活橱窗广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1156','1406151817','1','编辑广告: 生活橱窗广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1157','1406152012','1','编辑广告: 生活橱窗广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1158','1406152156','1','编辑广告: 生活橱窗广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1159','1406152220','1','添加广告位置: 生活橱窗广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1160','1406152275','1','编辑广告位置: 生活橱窗广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1161','1406152280','1','删除广告位置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1162','1406152314','1','添加广告: 生活橱窗广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1163','1406152342','1','编辑广告: 生活橱窗广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1164','1406152353','1','编辑广告: 生活橱窗广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1165','1406152418','1','添加广告: 生活橱窗广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1166','1406152464','1','编辑广告: 生活橱窗广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1167','1406152481','1','编辑广告: 生活橱窗广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1168','1406152505','1','添加广告: 生活橱窗广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1169','1406152515','1','编辑广告: 生活橱窗广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1170','1406152550','1','添加广告: 生活橱窗广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1171','1406152554','1','编辑广告: 生活橱窗广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1172','1406152580','1','添加广告: 生活橱窗广告6','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1173','1406152606','1','添加广告: 生活橱窗广告7','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1174','1406152655','1','添加广告: 生活橱窗广告8','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1175','1406159560','1','编辑广告位置: 首页幻灯片下方广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1176','1406159991','1','编辑广告位置: 首页幻灯片下方广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1177','1406159995','1','编辑广告位置: 首页幻灯片下方广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1178','1406160686','1','编辑广告位置: 首页幻灯片下方广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1179','1406161046','1','编辑广告位置: 首页幻灯片下方广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1180','1406163739','1','编辑广告位置: 308','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1181','1406163920','1','编辑广告位置: 活动广告位(宽)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1182','1406163925','1','编辑广告位置: 活动广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1183','1406163927','1','编辑广告位置: 活动广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1184','1406163940','1','编辑广告位置: 308','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1185','1406163943','1','编辑广告位置: 活动广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1186','1406163950','1','编辑广告位置: 活动广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1187','1406163956','1','编辑广告位置: 活动广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1188','1406163972','1','添加广告位置: 活动广告位（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1189','1406164198','1','添加广告: 活动广告（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1190','1406164205','1','编辑广告: 活动广告（窄）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1191','1406164212','1','编辑广告: 活动广告（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1192','1406165318','1','添加广告位置: 生活橱窗下方通栏广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1193','1406228485','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1194','1406228503','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1195','1406311557','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1196','1406311574','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1197','1406311705','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1198','1406311725','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1199','1406312046','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1200','1406312065','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1201','1406312079','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1202','1406313036','1','编辑商品分类: 图书、音像、数字商品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1203','1406313051','1','编辑商品分类: 家用电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1204','1406313062','1','编辑商品分类: 手机、数码、京东通信','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1205','1406313071','1','编辑商品分类: 电脑、办公','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1206','1406313080','1','编辑商品分类: 家居、家具、家装、厨具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1207','1406313263','1','添加商品分类: 图书、音像、数字商品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1208','1406313278','1','添加商品分类: 家用电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1209','1406313282','1','添加商品分类: 手机、数码、京东通信','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1210','1406313288','1','添加商品分类: 电脑、办公','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1211','1406313315','1','添加商品分类: 家居、家具、家装、厨具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1212','1406313324','1','添加商品分类: 服饰内衣、珠宝首饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1213','1406313330','1','添加商品分类: 个护化妆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1214','1406313335','1','添加商品分类: 鞋靴、箱包、钟表、奢侈品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1215','1406313340','1','添加商品分类: 运动户外','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1216','1406313344','1','添加商品分类: 汽车用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1217','1406313349','1','添加商品分类: 母婴、玩具乐器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1218','1406313355','1','添加商品分类: 食品饮料、酒类、生鲜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1219','1406313360','1','添加商品分类: 营养保健','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1220','1406313366','1','添加商品分类: 彩票、旅行、充值、票务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1221','1406313616','1','编辑商品分类: 电子书','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1222','1406313624','1','添加商品分类: 数字音乐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1223','1406313655','1','添加商品分类: 音像','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1224','1406313661','1','添加商品分类: 文艺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1225','1406313667','1','添加商品分类: 人文社科','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1226','1406313671','1','添加商品分类: 经管励志','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1227','1406313676','1','添加商品分类: 生活','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1228','1406313681','1','添加商品分类: 科技','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1229','1406313686','1','添加商品分类: 少儿','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1230','1406313690','1','添加商品分类: 教育','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1231','1406313694','1','添加商品分类: 其它','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1232','1406313726','1','添加商品分类: 免费小说','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1233','1406313740','1','编辑商品分类: 免费','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1234','1406313744','1','添加商品分类: 小说','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1235','1406313815','1','添加商品分类: 励志与成功','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1236','1406313826','1','添加商品分类: 婚恋/两性','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1237','1406313834','1','添加商品分类: 文学','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1238','1406313847','1','添加商品分类: 经管','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1239','1406313853','1','添加商品分类: 畅读VIP','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1240','1406313869','1','添加商品分类: 通俗流行','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1241','1406313876','1','添加商品分类: 古典音乐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1242','1406313885','1','添加商品分类: 摇滚说唱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1243','1406313892','1','添加商品分类: 爵士蓝调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1244','1406313897','1','添加商品分类: 乡村民谣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1245','1406313901','1','添加商品分类: 有声读物','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1246','1406313919','1','添加商品分类: 音乐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1247','1406313925','1','添加商品分类: 影视教育','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1248','1406313933','1','添加商品分类: 音像','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1249','1406313939','1','添加商品分类: 游戏','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1250','1406314556','1','添加商品分类: 小说','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1251','1406314566','1','添加商品分类: 文学','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1252','1406314578','1','添加商品分类: 青春文学','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1253','1406314584','1','添加商品分类: 传记','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1254','1406314589','1','添加商品分类: 艺术','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1255','1406314604','1','添加商品分类: 历史','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1256','1406314615','1','添加商品分类: 心理学','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1257','1406314620','1','添加商品分类: 政治/军事','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1258','1406314626','1','添加商品分类: 国学/古籍','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1259','1406314634','1','添加商品分类: 哲学/宗教','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1260','1406314638','1','添加商品分类: 社会科学','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1261','1406314658','1','添加商品分类: 经济','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1262','1406314665','1','添加商品分类: 金融与投资','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1263','1406314678','1','添加商品分类: 管理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1264','1406314685','1','添加商品分类: 励志与成功','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1265','1406314712','1','添加商品分类: 家教与育儿','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1266','1406314719','1','添加商品分类: 旅游/地图','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1267','1406314725','1','添加商品分类: 烹饪/美食','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1268','1406314735','1','添加商品分类: 时尚/美妆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1269','1406314755','1','添加商品分类: 家居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1270','1406314764','1','添加商品分类: 婚恋与两性','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1271','1406314772','1','添加商品分类: 娱乐/休闲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1272','1406314781','1','添加商品分类: 健身与保健','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1273','1406314794','1','添加商品分类: 动漫/幽默','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1274','1406314833','1','添加商品分类: 体育/运动','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1275','1406315044','1','添加商品分类: 科普','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1276','1406315050','1','添加商品分类: IT','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1277','1406315061','1','添加商品分类: 建筑','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1278','1406315067','1','添加商品分类: 医学','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1279','1406315089','1','添加商品分类: 工业技术','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1280','1406315094','1','添加商品分类: 电子/通信','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1281','1406315103','1','添加商品分类: 农林','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1282','1406315110','1','添加商品分类: 科学与自然','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1283','1406315268','1','添加商品分类: 少儿','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1284','1406315274','1','添加商品分类: 0-2岁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1285','1406315279','1','添加商品分类: 3-6岁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1286','1406315285','1','添加商品分类: 7-10岁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1287','1406315290','1','添加商品分类: 11-14岁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1288','1406315371','1','添加商品分类: 教材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1289','1406315379','1','添加商品分类: 中小学教辅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1290','1406315388','1','添加商品分类: 考试','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1291','1406315393','1','添加商品分类: 外语学习','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1292','1406315406','1','添加商品分类: 英文原版书','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1293','1406315419','1','添加商品分类: 港台图书','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1294','1406315425','1','添加商品分类: 工具书','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1295','1406315431','1','添加商品分类: 套装书','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1296','1406315435','1','添加商品分类: 杂志/期刊','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1297','1406315523','1','添加商品分类: 大 家 电','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1298','1406315530','1','添加商品分类: 生活电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1299','1406315537','1','添加商品分类: 厨房电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1300','1406315543','1','添加商品分类: 个护健康','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1301','1406315550','1','添加商品分类: 五金家装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1302','1406315614','1','添加商品分类: 平板电视','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1303','1406315630','1','添加商品分类: 空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1304','1406315638','1','添加商品分类: 冰箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1305','1406315644','1','添加商品分类: 洗衣机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1306','1406315651','1','添加商品分类: 家庭影院','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1307','1406316995','1','添加商品分类: DVD','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1308','1406317006','1','添加商品分类: 迷你音响','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1309','1406317012','1','添加商品分类: 烟机/灶具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1310','1406317021','1','添加商品分类: 热水器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1311','1406317027','1','添加商品分类: 消毒柜/洗碗机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1312','1406317034','1','添加商品分类: 酒柜/冷柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1313','1406317041','1','添加商品分类: 家电配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1314','1406317054','1','添加商品分类: 电风扇','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1315','1406317064','1','添加商品分类: 冷风扇','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1316','1406317072','1','添加商品分类: 净化器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1317','1406317081','1','添加商品分类: 饮水机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1318','1406317089','1','添加商品分类: 净水设备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1319','1406317098','1','添加商品分类: 挂烫机/熨斗','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1320','1406317104','1','添加商品分类: 吸尘器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1321','1406317115','1','添加商品分类: 电话机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1322','1406317122','1','添加商品分类: 插座','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1323','1406317129','1','添加商品分类: 收录/音机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1324','1406317141','1','添加商品分类: 清洁机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1325','1406317148','1','添加商品分类: 加湿器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1326','1406317158','1','添加商品分类: 除湿/干衣机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1327','1406317165','1','添加商品分类: 取暖电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1328','1406317172','1','添加商品分类: 其它生活电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1329','1406317371','1','添加商品分类: 电压力锅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1330','1406317378','1','添加商品分类: 电饭煲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1331','1406317387','1','添加商品分类: 豆浆机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1332','1406317394','1','添加商品分类: 面包机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1333','1406317403','1','添加商品分类: 咖啡机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1334','1406317411','1','添加商品分类: 微波炉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1335','1406317420','1','添加商品分类: 料理/榨汁机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1336','1406317477','1','添加商品分类: 电烤箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1337','1406317499','1','添加商品分类: 电磁炉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1338','1406317509','1','添加商品分类: 电饼铛/烧烤盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1339','1406317521','1','添加商品分类: 煮蛋器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1340','1406317531','1','添加商品分类: 酸奶机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1341','1406317541','1','添加商品分类: 电水壶/热水瓶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1342','1406317550','1','添加商品分类: 电炖锅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1343','1406317559','1','添加商品分类: 多用途锅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1344','1406317566','1','添加商品分类: 果蔬解毒机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1345','1406317574','1','添加商品分类: 其它厨房电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1346','1406317586','1','添加商品分类: 剃须刀剃/脱毛器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1347','1406317597','1','添加商品分类: 口腔护理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1348','1406317609','1','添加商品分类: 剃/脱毛器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1349','1406317619','1','编辑商品分类: 剃须刀','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1350','1406317629','1','添加商品分类: 电吹风','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1351','1406317640','1','添加商品分类: 美容','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1352','1406317648','1','添加商品分类: 美发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1353','1406317655','1','添加商品分类: 按摩器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1354','1406317663','1','添加商品分类: 按摩椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1355','1406317670','1','添加商品分类: 足浴盆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1356','1406317678','1','添加商品分类: 血压计','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1357','1406317686','1','添加商品分类: 健康秤/厨房秤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1358','1406317695','1','添加商品分类: 血糖仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1359','1406317704','1','添加商品分类: 体温计','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1360','1406317715','1','添加商品分类: 计步器/脂肪检测仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1361','1406317723','1','添加商品分类: 其它健康电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1362','1406317734','1','添加商品分类: 电动工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1363','1406317740','1','添加商品分类: 手动工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1364','1406317748','1','添加商品分类: 仪器仪表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1365','1406317755','1','添加商品分类: 浴霸/排气扇','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1366','1406317766','1','添加商品分类: 灯具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1367','1406317778','1','添加商品分类: LED灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1368','1406317789','1','添加商品分类: 洁身器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1369','1406317800','1','添加商品分类: 水槽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1370','1406317808','1','添加商品分类: 龙头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1371','1406317816','1','添加商品分类: 淋浴花洒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1372','1406317824','1','添加商品分类: 厨卫五金','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1373','1406317834','1','添加商品分类: 家具五金','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1374','1406317846','1','添加商品分类: 门铃','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1375','1406317869','1','添加商品分类: 电气开关','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1376','1406317880','1','添加商品分类: 插座','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1377','1406317888','1','添加商品分类: 电工电料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1378','1406317895','1','添加商品分类: 监控安防','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1379','1406317901','1','添加商品分类: 电线/线缆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1380','1406323432','1','添加商品分类: 手机通讯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1381','1406323446','1','添加商品分类: 京东通信','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1382','1406323454','1','添加商品分类: 运营商','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1383','1406323462','1','添加商品分类: 手机配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1384','1406323469','1','添加商品分类: 摄影摄像','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1385','1406323476','1','添加商品分类: 数码配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1386','1406323483','1','添加商品分类: 时尚影音','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1387','1406323490','1','添加商品分类: 智能设备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1388','1406323497','1','添加商品分类: 电子教育','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1389','1406323512','1','添加商品分类: 手机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1390','1406323520','1','添加商品分类: 对讲机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1391','1406323540','1','添加商品分类: 选号中心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1392','1406323547','1','添加商品分类: 自助服务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1393','1406323570','1','添加商品分类: 购机送费','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1394','1406323578','1','添加商品分类: 0元购机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1395','1406323586','1','添加商品分类: 选号入网','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1396','1406323605','1','添加商品分类: 电池','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1397','1406323612','1','添加商品分类: 蓝牙耳机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1398','1406323620','1','添加商品分类: 充电器/数据线','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1399','1406323630','1','添加商品分类: 手机耳机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1400','1406323642','1','添加商品分类: 贴膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1401','1406323651','1','添加商品分类: 存储卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1402','1406323669','1','添加商品分类: 保护套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1403','1406323677','1','添加商品分类: 车载','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1404','1406323684','1','添加商品分类: iPhone配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1405','1406323692','1','添加商品分类: 创意配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1406','1406323700','1','添加商品分类: 便携/无线音箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1407','1406323708','1','添加商品分类: 手机饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1408','1406323723','1','添加商品分类: 数码相机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1409','1406323733','1','添加商品分类: 单电/微单相机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1410','1406323740','1','添加商品分类: 单反相机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1411','1406323750','1','添加商品分类: 拍立得','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1412','1406323758','1','添加商品分类: 运动相机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1413','1406323766','1','添加商品分类: 摄像机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1414','1406323773','1','添加商品分类: 镜头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1415','1406323781','1','添加商品分类: 户外器材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1416','1406323788','1','添加商品分类: 摄影器材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1417','1406323934','1','添加商品分类: 存储卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1418','1406323944','1','添加商品分类: 读卡器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1419','1406323958','1','添加商品分类: 滤镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1420','1406323967','1','添加商品分类: 闪光灯/手柄','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1421','1406323974','1','添加商品分类: 相机包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1422','1406323983','1','添加商品分类: 三脚架/云台','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1423','1406323994','1','添加商品分类: 相机清洁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1424','1406324004','1','添加商品分类: 相机贴膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1425','1406324013','1','添加商品分类: 机身附件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1426','1406324021','1','添加商品分类: 镜头附件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1427','1406324028','1','添加商品分类: 电池/充电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1428','1406324035','1','添加商品分类: 移动电源','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1429','1406324053','1','添加商品分类: 耳机/耳麦','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1430','1406324061','1','添加商品分类: 音箱/音响','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1431','1406324068','1','添加商品分类: 麦克风','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1432','1406324078','1','添加商品分类: MP3/MP4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1433','1406324088','1','添加商品分类: 数码相框','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1434','1406324098','1','添加商品分类: 专业音频','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1435','1406324107','1','添加商品分类: 苹果周边','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1436','1406324122','1','添加商品分类: 智能手环','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1437','1406324129','1','添加商品分类: 智能手表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1438','1406324136','1','添加商品分类: 智能眼镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1439','1406324144','1','添加商品分类: 运动跟踪器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1440','1406324154','1','添加商品分类: 健康监测','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1441','1406324162','1','添加商品分类: 智能配饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1442','1406324172','1','添加商品分类: 智能家居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1443','1406324181','1','添加商品分类: 体感车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1444','1406324192','1','添加商品分类: 其他配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1445','1406324200','1','添加商品分类: 电子词典','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1446','1406324207','1','添加商品分类: 电纸书','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1447','1406324216','1','添加商品分类: 录音笔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1448','1406324225','1','添加商品分类: 复读机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1449','1406324234','1','添加商品分类: 点读机/笔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1450','1406324241','1','添加商品分类: 学生平板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1451','1406324250','1','添加商品分类: 早教机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1452','1406332606','1','添加商品分类: 电脑整机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1453','1406332620','1','添加商品分类: 电脑配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1454','1406332627','1','添加商品分类: 外设产品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1455','1406332634','1','添加商品分类: 网络产品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1456','1406332639','1','添加商品分类: 办公打印','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1457','1406332645','1','添加商品分类: 办公文仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1458','1406332650','1','添加商品分类: 服务产品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1459','1406332668','1','添加商品分类: 笔记本','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1460','1406332674','1','添加商品分类: 超极本','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1461','1406332680','1','添加商品分类: 游戏本','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1462','1406332685','1','添加商品分类: 平板电脑','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1463','1406332694','1','添加商品分类: 平板电脑配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1464','1406332699','1','添加商品分类: 台式机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1465','1406332705','1','添加商品分类: 服务器/工作站','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1466','1406332711','1','添加商品分类: 笔记本配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1467','1406332720','1','添加商品分类: CPU','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1468','1406332727','1','添加商品分类: 主板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1469','1406332732','1','添加商品分类: 显卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1470','1406332738','1','添加商品分类: 硬盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1471','1406332747','1','添加商品分类: SSD固态硬盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1472','1406332757','1','添加商品分类: 内存','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1473','1406332762','1','添加商品分类: 机箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1474','1406332768','1','添加商品分类: 电源','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1475','1406332774','1','添加商品分类: 显示器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1476','1406332779','1','添加商品分类: 刻录机/光驱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1477','1406332785','1','添加商品分类: 声卡/扩展卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1478','1406332792','1','添加商品分类: 散热器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1479','1406332799','1','添加商品分类: 装机配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1480','1406332805','1','添加商品分类: 组装电脑','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1481','1406332818','1','添加商品分类: 鼠标','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1482','1406332826','1','添加商品分类: 键盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1483','1406332832','1','添加商品分类: 游戏设备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1484','1406332843','1','添加商品分类: U盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1485','1406332850','1','添加商品分类: 移动硬盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1486','1406332859','1','添加商品分类: 鼠标垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1487','1406332866','1','添加商品分类: 摄像头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1488','1406332873','1','添加商品分类: 线缆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1489','1406332884','1','添加商品分类: 电玩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1490','1406332890','1','添加商品分类: 手写板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1491','1406332896','1','添加商品分类: 外置盒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1492','1406332902','1','添加商品分类: 电脑工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1493','1406332909','1','添加商品分类: 电脑清洁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1494','1406332915','1','添加商品分类: UPS','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1495','1406332922','1','添加商品分类: 插座','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1496','1406332954','1','添加商品分类: 路由器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1497','1406332960','1','添加商品分类: 网卡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1498','1406332965','1','添加商品分类: 交换机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1499','1406332972','1','添加商品分类: 网络存储','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1500','1406332978','1','添加商品分类: 4G/3G','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1501','1406332994','1','编辑商品分类: 4G/3G上网','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1502','1406333000','1','添加商品分类: 网络盒子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1503','1406333006','1','添加商品分类: 网络配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1504','1406333014','1','添加商品分类: 打印机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1505','1406333025','1','添加商品分类: 一体机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1506','1406333032','1','添加商品分类: 投影机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1507','1406333038','1','添加商品分类: 投影配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1508','1406333044','1','添加商品分类: 传真机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1509','1406333050','1','添加商品分类: 复合机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1510','1406333057','1','添加商品分类: 碎纸机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1511','1406333065','1','添加商品分类: 扫描仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1512','1406333072','1','添加商品分类: 墨盒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1513','1406333078','1','添加商品分类: 硒鼓','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1514','1406333084','1','添加商品分类: 墨粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1515','1406333090','1','添加商品分类: 色带','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1516','1406333102','1','添加商品分类: 办公文具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1517','1406333109','1','添加商品分类: 文件管理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1518','1406333115','1','添加商品分类: 笔类','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1519','1406333122','1','添加商品分类: 纸类','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1520','1406333129','1','添加商品分类: 本册/便签','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1521','1406333140','1','添加商品分类: 学生文具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1522','1406333148','1','添加商品分类: 财务用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1523','1406333155','1','添加商品分类: 计算器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1524','1406333164','1','添加商品分类: 激光笔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1525','1406333172','1','添加商品分类: 白板/封装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1526','1406333178','1','添加商品分类: 考勤机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1527','1406333186','1','添加商品分类: 刻录碟片/附件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1528','1406333194','1','添加商品分类: 点钞机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1529','1406333202','1','添加商品分类: 支付设备/POS机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1530','1406333209','1','添加商品分类: 安防监控','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1531','1406333218','1','添加商品分类: 呼叫/会议设备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1532','1406333226','1','添加商品分类: 保险柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1533','1406333233','1','添加商品分类: 办公家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1534','1406333242','1','添加商品分类: 上门服务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1535','1406333248','1','添加商品分类: 远程服务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1536','1406333254','1','添加商品分类: 电脑软件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1537','1406333322','1','添加商品分类: 厨具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1538','1406333330','1','添加商品分类: 家装建材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1539','1406333339','1','添加商品分类: 家纺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1540','1406333349','1','添加商品分类: 家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1541','1406333358','1','添加商品分类: 灯具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1542','1406333367','1','添加商品分类: 生活日用','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1543','1406333396','1','添加商品分类: 家装软饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1544','1406333412','1','添加商品分类: 烹饪锅具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1545','1406333419','1','添加商品分类: 刀剪菜板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1546','1406333429','1','添加商品分类: 厨房配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1547','1406333437','1','添加商品分类: 水具酒具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1548','1406333445','1','添加商品分类: 餐具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1549','1406333452','1','添加商品分类: 茶具/咖啡具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1550','1406333470','1','添加商品分类: 灯饰照明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1551','1406333479','1','添加商品分类: 厨房卫浴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1552','1406333492','1','添加商品分类: 五金工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1553','1406333506','1','添加商品分类: 电工电料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1554','1406333530','1','添加商品分类: 墙地面材料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1555','1406333540','1','添加商品分类: 装饰材料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1556','1406333547','1','添加商品分类: 装修服务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1557','1406333595','1','添加商品分类: 吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1558','1406333603','1','添加商品分类: 淋浴花洒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1559','1406333617','1','添加商品分类: 开关插座','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1560','1406333627','1','添加商品分类: 油漆涂料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1561','1406333645','1','添加商品分类: 龙头','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1562','1406333667','1','添加商品分类: 床品套件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1563','1406333676','1','添加商品分类: 被子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1564','1406333693','1','添加商品分类: 蚊帐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1565','1406333702','1','添加商品分类: 凉席','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1566','1406333735','1','添加商品分类: 床单被罩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1567','1406333744','1','添加商品分类: 枕芯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1568','1406333755','1','添加商品分类: 毛巾浴巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1569','1406333765','1','添加商品分类: 布艺软饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1570','1406333777','1','添加商品分类: 毯子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1571','1406333787','1','添加商品分类: 抱枕靠垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1572','1406333796','1','添加商品分类: 床垫/床褥','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1573','1406333811','1','添加商品分类: 窗帘/窗纱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1574','1406333821','1','添加商品分类: 电热毯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1575','1406333833','1','添加商品分类: 卧室家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1576','1406333840','1','添加商品分类: 客厅家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1577','1406333847','1','添加商品分类: 餐厅家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1578','1406333854','1','添加商品分类: 书房家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1579','1406333861','1','添加商品分类: 储物家具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1580','1406333875','1','添加商品分类: 阳台/户外','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1581','1406333892','1','添加商品分类: 商业办公','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1582','1406333907','1','添加商品分类: 床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1583','1406333923','1','添加商品分类: 床垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1584','1406333940','1','添加商品分类: 沙发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1585','1406333949','1','添加商品分类: 电脑椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1586','1406333957','1','添加商品分类: 衣柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1587','1406333970','1','添加商品分类: 茶几','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1588','1406333979','1','添加商品分类: 电视柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1589','1406333988','1','添加商品分类: 餐桌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1590','1406333998','1','添加商品分类: 电脑桌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1591','1406334007','1','添加商品分类: 鞋架/衣帽架','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1592','1406334027','1','添加商品分类: 台灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1593','1406334037','1','添加商品分类: 吸顶灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1594','1406334051','1','添加商品分类: 筒灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1595','1406334111','1','编辑商品分类: 鞋靴、箱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1596','1406334258','1','编辑商品分类: 筒灯射灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1597','1406334306','1','添加商品分类: LED灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1598','1406334318','1','添加商品分类: 节能灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1599','1406334336','1','添加商品分类: 落地灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1600','1406334349','1','添加商品分类: 五金电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1601','1406334386','1','添加商品分类: 应急灯/手电','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1602','1406334406','1','添加商品分类: 装饰灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1603','1406334418','1','添加商品分类: 吊灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1604','1406334436','1','添加商品分类: 氛围照明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1605','1406334463','1','添加商品分类: 收纳用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1606','1406334474','1','添加商品分类: 雨伞雨具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1607','1406334483','1','添加商品分类: 浴室用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1608','1406334502','1','添加商品分类: 缝纫/针织用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1609','1406334516','1','添加商品分类: 洗晒/熨烫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1610','1406334528','1','添加商品分类: 净化除味','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1611','1406334539','1','添加商品分类: 桌布/罩件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1612','1406334549','1','添加商品分类: 地毯地垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1613','1406334560','1','添加商品分类: 沙发垫套/椅垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1614','1406334573','1','添加商品分类: 帘艺隔断','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1615','1406334597','1','添加商品分类: 相框/照片墙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1616','1406334614','1','添加商品分类: 装饰字画','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1617','1406334624','1','添加商品分类: 墙贴/装饰贴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1618','1406334641','1','添加商品分类: 节庆饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1619','1406334650','1','添加商品分类: 手工/十字绣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1620','1406334665','1','添加商品分类: 钟饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1621','1406334682','1','添加商品分类: 装饰摆件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1622','1406334695','1','添加商品分类: 花瓶花艺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1623','1406334703','1','添加商品分类: 创意家居','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1624','1406334714','1','添加商品分类: 保暖防护','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1625','1406334723','1','添加商品分类: 香薰蜡烛','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1626','1406334784','1','编辑商品分类: 鞋靴、箱包、钟表、奢侈品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1627','1406334806','1','添加商品分类: 面部护肤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1628','1406334812','1','添加商品分类: 洗发护发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1629','1406334819','1','添加商品分类: 身体护肤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1630','1406334826','1','添加商品分类: 口腔护理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1631','1406334834','1','添加商品分类: 女性护理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1632','1406334841','1','添加商品分类: 香水彩妆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1633','1406334861','1','添加商品分类: 清洁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1634','1406334875','1','添加商品分类: 护肤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1635','1406334882','1','添加商品分类: 面膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1636','1406334889','1','添加商品分类: 剃须','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1637','1406334895','1','添加商品分类: 套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1638','1406334915','1','添加商品分类: 洗发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1639','1406334923','1','添加商品分类: 护发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1640','1406334929','1','添加商品分类: 染发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1641','1406334937','1','添加商品分类: 造型','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1642','1406334944','1','添加商品分类: 假发','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1643','1406334954','1','添加商品分类: 套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1644','1406334968','1','添加商品分类: 沐浴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1645','1406334976','1','添加商品分类: 润肤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1646','1406334987','1','添加商品分类: 颈部','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1647','1406335000','1','添加商品分类: 手足','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1648','1406335006','1','添加商品分类: 纤体塑形','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1649','1406335013','1','添加商品分类: 美胸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1650','1406335020','1','添加商品分类: 套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1651','1406335030','1','添加商品分类: 牙膏/牙粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1652','1406335037','1','添加商品分类: 牙刷/牙线','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1653','1406335045','1','添加商品分类: 漱口水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1654','1406335053','1','添加商品分类: 套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1655','1406335061','1','添加商品分类: 卫生巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1656','1406335068','1','添加商品分类: 卫生护垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1657','1406335076','1','添加商品分类: 私密护理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1658','1406335084','1','添加商品分类: 脱毛膏','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1659','1406335093','1','添加商品分类: 香水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1660','1406335101','1','添加商品分类: 底妆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1661','1406335115','1','添加商品分类: 腮红','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1662','1406335123','1','添加商品分类: 眼部','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1663','1406335132','1','添加商品分类: 唇部','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1664','1406335139','1','添加商品分类: 美甲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1665','1406335147','1','添加商品分类: 美容工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1666','1406335158','1','添加商品分类: 套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1667','1406335243','1','添加商品分类: 时尚女鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1668','1406335261','1','添加商品分类: 流行男鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1669','1406335271','1','添加商品分类: 潮流女包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1670','1406335281','1','添加商品分类: 精品男包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1671','1406335301','1','添加商品分类: 功能箱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1672','1406335310','1','添加商品分类: 奢侈品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1673','1406335320','1','添加商品分类: 钟表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1674','1406335329','1','添加商品分类: 礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1675','1406335363','1','添加商品分类: 凉鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1676','1406335388','1','添加商品分类: 单鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1677','1406335401','1','编辑商品分类: 凉鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1678','1406335411','1','添加商品分类: 高跟鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1679','1406335420','1','添加商品分类: 坡跟鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1680','1406335430','1','添加商品分类: 松糕鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1681','1406335440','1','添加商品分类: 鱼嘴鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1682','1406335451','1','添加商品分类: 休闲鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1683','1406335460','1','添加商品分类: 帆布鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1684','1406335474','1','添加商品分类: 拖鞋/人字拖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1685','1406335486','1','添加商品分类: 妈妈鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1686','1406335499','1','添加商品分类: 防水台','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1687','1406335519','1','添加商品分类: 雨鞋/雨靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1688','1406335531','1','添加商品分类: 内增高','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1689','1406335538','1','添加商品分类: 布鞋/绣花','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1690','1406335554','1','编辑商品分类: 布鞋/绣花鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1691','1406335570','1','添加商品分类: 女靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1692','1406335578','1','添加商品分类: 雪地靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1693','1406335586','1','添加商品分类: 踝靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1694','1406335594','1','添加商品分类: 马丁靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1695','1406335605','1','添加商品分类: 鞋配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1696','1406335627','1','添加商品分类: 休闲鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1697','1406335637','1','添加商品分类: 凉鞋/沙滩鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1698','1406335653','1','添加商品分类: 帆布鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1699','1406335670','1','添加商品分类: 商务休闲鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1700','1406335680','1','添加商品分类: 正装鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1701','1406335693','1','添加商品分类: 增高鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1702','1406335702','1','添加商品分类: 拖鞋/人字拖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1703','1406335712','1','添加商品分类: 工装鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1704','1406335728','1','添加商品分类: 男靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1705','1406335739','1','添加商品分类: 传统布鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1706','1406335748','1','添加商品分类: 功能鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1707','1406335760','1','添加商品分类: 鞋配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1708','1406335773','1','添加商品分类: 定制鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1709','1406335791','1','添加商品分类: 单肩包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1710','1406335803','1','添加商品分类: 手提包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1711','1406335814','1','添加商品分类: 斜挎包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1712','1406335823','1','添加商品分类: 双肩包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1713','1406335835','1','添加商品分类: 钱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1714','1406335847','1','添加商品分类: 手拿包/晚宴包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1715','1406335859','1','添加商品分类: 卡包/零钱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1716','1406335868','1','添加商品分类: 钥匙包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1717','1406335895','1','添加商品分类: 商务公文包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1718','1406335910','1','添加商品分类: 单肩/斜挎包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1719','1406335917','1','添加商品分类: 男士手包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1720','1406335926','1','添加商品分类: 双肩包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1721','1406335944','1','添加商品分类: 钱包/卡包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1722','1406335954','1','添加商品分类: 钥匙包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1723','1406335973','1','添加商品分类: 拉杆箱/拉杆包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1724','1406335993','1','添加商品分类: 旅行包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1725','1406336073','1','编辑商品分类: 拉杆箱/拉杆包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1726','1406336089','1','编辑商品分类: 旅行包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1727','1406336104','1','添加商品分类: 电脑包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1728','1406336114','1','添加商品分类: 休闲运动包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1729','1406336127','1','添加商品分类: 相机包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1730','1406336145','1','添加商品分类: 腰包/胸包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1731','1406336157','1','添加商品分类: 登山包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1732','1406336172','1','添加商品分类: 旅行配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1733','1406336183','1','添加商品分类: 书包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1734','1406336194','1','添加商品分类: 妈咪包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1735','1406336231','1','添加商品分类: 箱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1736','1406336241','1','添加商品分类: 钱包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1737','1406336253','1','添加商品分类: 服饰腰带','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1738','1406336278','1','添加商品分类: 鞋靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1739','1406336294','1','添加商品分类: 太阳镜/眼镜框','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1740','1406336304','1','添加商品分类: 饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1741','1406336314','1','添加商品分类: 配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1742','1406336324','1','添加商品分类: 男表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1743','1406336339','1','添加商品分类: 女表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1744','1406336348','1','添加商品分类: 儿童表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1745','1406336361','1','添加商品分类: 座钟挂钟','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1746','1406336373','1','添加商品分类: 火机烟具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1747','1406336383','1','添加商品分类: 军刀军具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1748','1406336392','1','添加商品分类: 美妆礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1749','1406336401','1','添加商品分类: 工艺礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1750','1406336410','1','添加商品分类: 礼盒礼券','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1751','1406336420','1','添加商品分类: 礼品文具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1752','1406336431','1','添加商品分类: 收藏品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1753','1406336441','1','添加商品分类: 古董把玩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1754','1406336452','1','添加商品分类: 地方礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1755','1406336467','1','添加商品分类: 创意礼品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1756','1406336476','1','添加商品分类: 婚庆用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1757','1406336491','1','添加商品分类: 鲜花绿植','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1758','1406336611','1','添加商品分类: 运动服饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1759','1406336617','1','添加商品分类: 健身训练','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1760','1406336622','1','添加商品分类: 骑行运动','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1761','1406336628','1','添加商品分类: 体育用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1762','1406336633','1','添加商品分类: 户外鞋服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1763','1406336639','1','添加商品分类: 户外装备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1764','1406336654','1','添加商品分类: 休闲鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1765','1406336660','1','添加商品分类: 跑步鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1766','1406336666','1','添加商品分类: 板鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1767','1406336672','1','添加商品分类: 帆布鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1768','1406336681','1','添加商品分类: 篮球鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1769','1406336687','1','添加商品分类: 足球鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1770','1406336699','1','添加商品分类: 乒羽网鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1771','1406336707','1','添加商品分类: 专项运动鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1772','1406336712','1','添加商品分类: 训练鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1773','1406336719','1','添加商品分类: 拖鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1774','1406336725','1','添加商品分类: 运动包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1775','1406336746','1','添加商品分类: 卫衣/套头衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1776','1406336751','1','添加商品分类: 毛衫/线衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1777','1406336758','1','添加商品分类: 夹克/风衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1778','1406336772','1','添加商品分类: 棉服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1779','1406336778','1','添加商品分类: 羽绒服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1780','1406336785','1','添加商品分类: T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1781','1406336792','1','添加商品分类: 乒羽网服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1782','1406336798','1','添加商品分类: 训练服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1783','1406336805','1','添加商品分类: 运动背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1784','1406336812','1','添加商品分类: 运动裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1785','1406336818','1','添加商品分类: 运动套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1786','1406336824','1','添加商品分类: 运动配饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1787','1406336837','1','添加商品分类: 跑步机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1788','1406336843','1','添加商品分类: 健身车/动感单车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1789','1406336849','1','添加商品分类: 综合训练器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1790','1406336860','1','添加商品分类: 其他大型器械','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1791','1406336867','1','添加商品分类: 哑铃','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1792','1406336873','1','添加商品分类: 仰卧板/收腹机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1793','1406336881','1','添加商品分类: 其他中小型器材','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1794','1406336886','1','添加商品分类: 武术搏击','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1795','1406336892','1','添加商品分类: 运动护具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1796','1406336898','1','添加商品分类: 瑜伽舞蹈','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1797','1406336906','1','添加商品分类: 山地车/公路车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1798','1406336912','1','添加商品分类: 折叠车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1799','1406336917','1','添加商品分类: 电动车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1800','1406336922','1','添加商品分类: 其他整车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1801','1406336928','1','添加商品分类: 骑行装备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1802','1406336935','1','添加商品分类: 骑行服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1803','1406336946','1','添加商品分类: 乒乓球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1804','1406336953','1','添加商品分类: 羽毛球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1805','1406336960','1','添加商品分类: 网球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1806','1406336970','1','添加商品分类: 篮球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1807','1406337046','1','编辑商品分类: 运动鞋包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1808','1406337087','1','编辑商品分类: 运动服饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1809','1406337125','1','编辑商品分类: 健身训练','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1810','1406337144','1','编辑商品分类: 骑行运动','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1811','1406337162','1','编辑商品分类: 体育用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1812','1406337180','1','添加商品分类: 户外鞋服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1813','1406337204','1','添加商品分类: 足球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1814','1406337213','1','添加商品分类: 高尔夫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1815','1406337219','1','添加商品分类: 台球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1816','1406337228','1','添加商品分类: 轮滑滑板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1817','1406337239','1','添加商品分类: 排球','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1818','1406337246','1','添加商品分类: 棋牌麻将','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1819','1406337253','1','添加商品分类: 其它','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1820','1406337263','1','添加商品分类: 冲锋衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1821','1406337282','1','编辑商品分类: 冲锋衣裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1822','1406337293','1','添加商品分类: 速干衣裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1823','1406337302','1','添加商品分类: 滑雪服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1824','1406337309','1','添加商品分类: 羽绒服/棉服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1825','1406337317','1','添加商品分类: 休闲衣裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1826','1406337323','1','添加商品分类: 抓绒衣裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1827','1406337329','1','添加商品分类: 软壳衣裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1828','1406337342','1','添加商品分类: T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1829','1406337349','1','添加商品分类: 户外风衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1830','1406337356','1','添加商品分类: 功能内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1831','1406337364','1','添加商品分类: 军迷服饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1832','1406337372','1','添加商品分类: 登山鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1833','1406337381','1','添加商品分类: 徒步鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1834','1406337389','1','添加商品分类: 越野跑鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1835','1406337396','1','添加商品分类: 休闲鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1836','1406337403','1','添加商品分类: 雪地靴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1837','1406337411','1','添加商品分类: 工装鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1838','1406337419','1','添加商品分类: 溯溪鞋','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1839','1406337428','1','添加商品分类: 沙滩/凉拖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1840','1406337435','1','添加商品分类: 户外袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1841','1406337442','1','添加商品分类: 背包','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1842','1406337447','1','添加商品分类: 帐篷/垫子','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1843','1406337454','1','添加商品分类: 睡袋/吊床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1844','1406337461','1','添加商品分类: 登山攀岩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1845','1406337467','1','添加商品分类: 户外照明','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1846','1406337473','1','添加商品分类: 野餐烧烤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1847','1406337479','1','添加商品分类: 便携桌椅床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1848','1406337511','1','添加商品分类: 户外工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1849','1406337517','1','添加商品分类: 望远镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1850','1406337522','1','添加商品分类: 户外仪表','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1851','1406337528','1','添加商品分类: 旅游用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1852','1406337533','1','添加商品分类: 军迷用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1853','1406337619','1','添加商品分类: 维修保养','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1854','1406337628','1','添加商品分类: 车载电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1855','1406337635','1','添加商品分类: 美容清洗','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1856','1406337644','1','添加商品分类: 汽车装饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1857','1406337651','1','添加商品分类: 安全自驾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1858','1406337662','1','添加商品分类: 润滑油','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1859','1406337671','1','添加商品分类: 添加剂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1860','1406337680','1','添加商品分类: 防冻液','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1861','1406337690','1','添加商品分类: 滤清器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1862','1406337698','1','添加商品分类: 火花塞','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1863','1406337705','1','添加商品分类: 雨刷','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1864','1406337714','1','添加商品分类: 车灯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1865','1406337721','1','添加商品分类: 后视镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1866','1406337731','1','添加商品分类: 轮胎','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1867','1406337739','1','添加商品分类: 轮毂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1868','1406337750','1','添加商品分类: 刹车片/盘','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1869','1406337764','1','添加商品分类: 喇叭/皮带','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1870','1406337772','1','添加商品分类: 蓄电池','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1871','1406337783','1','添加商品分类: 底盘装甲/护板','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1872','1406337792','1','添加商品分类: 贴膜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1873','1406337803','1','添加商品分类: 汽修工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1874','1406337815','1','添加商品分类: 导航仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1875','1406337830','1','添加商品分类: 安全预警仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1876','1406337838','1','添加商品分类: 行车记录仪','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1877','1406337849','1','添加商品分类: 倒车雷达','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1878','1406337859','1','添加商品分类: 蓝牙设备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1879','1406337903','1','添加商品分类: 时尚影音','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1880','1406337911','1','添加商品分类: 净化器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1881','1406337923','1','添加商品分类: 电源','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1882','1406337933','1','添加商品分类: 冰箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1883','1406337942','1','添加商品分类: 吸尘器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1884','1406337961','1','添加商品分类: 车蜡','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1885','1406337970','1','添加商品分类: 补漆笔','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1886','1406337979','1','添加商品分类: 玻璃水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1887','1406337988','1','添加商品分类: 清洁剂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1888','1406337997','1','添加商品分类: 洗车工具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1889','1406338012','1','添加商品分类: 洗车配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1890','1406338024','1','添加商品分类: 脚垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1891','1406338032','1','添加商品分类: 座垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1892','1406338042','1','添加商品分类: 座套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1893','1406338054','1','添加商品分类: 后备箱垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1894','1406338066','1','添加商品分类: 头枕','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1895','1406338076','1','添加商品分类: 腰靠','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1896','1406338084','1','添加商品分类: 香水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1897','1406338094','1','添加商品分类: 空气净化','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1898','1406338103','1','添加商品分类: 车内饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1899','1406338114','1','添加商品分类: 功能小件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1900','1406338124','1','添加商品分类: 车身装饰件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1901','1406338132','1','添加商品分类: 车衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1902','1406338144','1','添加商品分类: 安全座椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1903','1406338157','1','添加商品分类: 胎压充气','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1904','1406338166','1','添加商品分类: 防盗设备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1905','1406338175','1','添加商品分类: 应急救援','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1906','1406338185','1','添加商品分类: 保温箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1907','1406338195','1','添加商品分类: 储物箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1908','1406338209','1','添加商品分类: 自驾野营','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1909','1406338220','1','添加商品分类: 摩托车装备','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1910','1406338359','1','添加商品分类: 奶粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1911','1406338393','1','添加商品分类: 营养辅食','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1912','1406338409','1','添加商品分类: 尿裤湿巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1913','1406338420','1','添加商品分类: 洗护用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1914','1406338431','1','添加商品分类: 喂养用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1915','1406338442','1','添加商品分类: 童车童床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1916','1406338453','1','添加商品分类: 安全座椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1917','1406338464','1','添加商品分类: 寝居服饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1918','1406338499','1','添加商品分类: 中外名酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1919','1406338508','1','添加商品分类: 进口食品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1920','1406338514','1','添加商品分类: 休闲食品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1921','1406338521','1','添加商品分类: 地方特产','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1922','1406338528','1','添加商品分类: 茗茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1923','1406338534','1','添加商品分类: 饮料冲调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1924','1406338541','1','添加商品分类: 粮油调味','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1925','1406338547','1','添加商品分类: 生鲜食品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1926','1406338553','1','添加商品分类: 食品礼券','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1927','1406338585','1','添加商品分类: 营养健康','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1928','1406338601','1','添加商品分类: 营养成分','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1929','1406338634','1','添加商品分类: 传统滋补','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1930','1406338642','1','添加商品分类: 成人用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1931','1406338650','1','添加商品分类: 保健器械','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1932','1406338658','1','添加商品分类: 急救卫生','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1933','1406338727','1','添加商品分类: 女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1934','1406338734','1','添加商品分类: 男装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1935','1406338740','1','添加商品分类: 内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1936','1406338747','1','添加商品分类: 服饰配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1937','1406338755','1','添加商品分类: 珠宝首饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1938','1406338765','1','添加商品分类: 连衣裙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1939','1406338773','1','添加商品分类: 蕾丝/雪纺衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1940','1406338781','1','添加商品分类: 衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1941','1406338788','1','添加商品分类: T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1942','1406338794','1','添加商品分类: 半身裙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1943','1406338802','1','添加商品分类: 休闲裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1944','1406338808','1','添加商品分类: 短裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1945','1406338814','1','添加商品分类: 牛仔裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1946','1406338821','1','添加商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1947','1406338827','1','添加商品分类: 吊带/背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1948','1406338834','1','添加商品分类: 打底衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1949','1406338840','1','添加商品分类: 打底裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1950','1406338847','1','添加商品分类: 正装裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1951','1406338855','1','添加商品分类: 小西服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1952','1406338863','1','添加商品分类: 马甲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1953','1406338869','1','添加商品分类: 风衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1954','1406338876','1','添加商品分类: 羊毛衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1955','1406338883','1','添加商品分类: 羊绒衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1956','1406338889','1','添加商品分类: 短外套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1957','1406338896','1','添加商品分类: 棉服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1958','1406338905','1','添加商品分类: 毛呢大衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1959','1406338912','1','添加商品分类: 加绒裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1960','1406338918','1','添加商品分类: 羽绒服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1961','1406338927','1','添加商品分类: 皮草','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1962','1406338933','1','添加商品分类: 真皮皮衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1963','1406338939','1','添加商品分类: 仿皮皮衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1964','1406338945','1','添加商品分类: 旗袍/唐装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1965','1406338952','1','添加商品分类: 礼服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1966','1406338958','1','添加商品分类: 婚纱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1967','1406338966','1','添加商品分类: 中老年女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1968','1406338973','1','添加商品分类: 大码女装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1969','1406338982','1','添加商品分类: 设计师/潮牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1970','1406338992','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1971','1406339000','1','添加商品分类: 衬衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1972','1406339008','1','添加商品分类: T恤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1973','1406339015','1','添加商品分类: POLO','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1974','1406339038','1','编辑商品分类: POLO衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1975','1406339048','1','添加商品分类: 针织衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1976','1406339059','1','添加商品分类: 夹克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1977','1406339067','1','添加商品分类: 卫衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1978','1406339075','1','添加商品分类: 风衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1979','1406339083','1','添加商品分类: 马甲/背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1980','1406339091','1','添加商品分类: 短裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1981','1406339099','1','添加商品分类: 休闲裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1982','1406339108','1','添加商品分类: 牛仔裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1983','1406339136','1','添加商品分类: 西服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1984','1406339143','1','添加商品分类: 西裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1985','1406339151','1','添加商品分类: 西服套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1986','1406339160','1','添加商品分类: 真皮皮衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1987','1406339167','1','添加商品分类: 仿皮皮衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1988','1406339175','1','添加商品分类: 羽绒服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1989','1406339183','1','添加商品分类: 毛呢大衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1990','1406339192','1','添加商品分类: 棉服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1991','1406339201','1','添加商品分类: 羊绒衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1992','1406339208','1','添加商品分类: 羊毛衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1993','1406339215','1','添加商品分类: 卫裤/运动裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1994','1406339228','1','添加商品分类: 加绒裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1995','1406339236','1','添加商品分类: 设计师/潮牌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1996','1406339243','1','添加商品分类: 唐装/中山装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1997','1406339253','1','添加商品分类: 工装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1998','1406339260','1','添加商品分类: 中老年男装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('1999','1406339267','1','添加商品分类: 大码男装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2000','1406339281','1','添加商品分类: 文胸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2001','1406339288','1','添加商品分类: 睡衣/家居服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2002','1406339295','1','添加商品分类: 情侣睡衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2003','1406339304','1','添加商品分类: 文胸套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2004','1406339311','1','添加商品分类: 少女文胸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2005','1406339318','1','添加商品分类: 女式内裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2006','1406339324','1','添加商品分类: 男式内裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2007','1406339332','1','添加商品分类: 商务男袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2008','1406339339','1','添加商品分类: 休闲棉袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2009','1406339347','1','添加商品分类: 吊带/背心','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2010','1406339356','1','添加商品分类: 打底衫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2011','1406339363','1','添加商品分类: 抹胸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2012','1406339371','1','添加商品分类: 连裤袜/丝袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2013','1406339377','1','添加商品分类: 美腿袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2014','1406339390','1','添加商品分类: 打底裤袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2015','1406339399','1','添加商品分类: 塑身美体','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2016','1406339407','1','添加商品分类: 大码内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2017','1406339414','1','添加商品分类: 内衣配件','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2018','1406339422','1','添加商品分类: 泳衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2019','1406339432','1','添加商品分类: 秋衣秋裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2020','1406339438','1','添加商品分类: 保暖内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2021','1406339456','1','添加商品分类: 太阳镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2022','1406339464','1','添加商品分类: 光学镜架/镜片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2023','1406339472','1','添加商品分类: 防辐射眼镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2024','1406339479','1','添加商品分类: 女士丝巾/围巾/披肩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2025','1406339487','1','添加商品分类: 棒球帽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2026','1406339497','1','添加商品分类: 遮阳伞/雨伞','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2027','1406339510','1','添加商品分类: 遮阳帽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2028','1406339518','1','添加商品分类: 领带/领结/领带夹','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2029','1406339527','1','添加商品分类: 男士腰带/礼盒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2030','1406339535','1','添加商品分类: 防晒手套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2031','1406339543','1','添加商品分类: 老花镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2032','1406339550','1','添加商品分类: 袖扣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2033','1406339558','1','添加商品分类: 鸭舌帽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2034','1406339565','1','添加商品分类: 装饰眼镜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2035','1406339575','1','添加商品分类: 时尚饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2036','1406339587','1','添加商品分类: 钻石','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2037','1406339596','1','添加商品分类: 翡翠玉石','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2038','1406339607','1','添加商品分类: 纯金K金饰品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2039','1406339616','1','添加商品分类: 金银投资','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2040','1406339626','1','添加商品分类: 银饰','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2041','1406339636','1','添加商品分类: 水晶玛瑙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2042','1406339644','1','添加商品分类: 彩宝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2043','1406339655','1','添加商品分类: 铂金','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2044','1406339693','1','添加商品分类: 婴幼奶粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2045','1406339705','1','添加商品分类: 成人奶粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2046','1406339751','1','添加商品分类: 彩票','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2047','1406339765','1','添加商品分类: 通讯充值','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2048','1406339779','1','添加商品分类: 游戏','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2049','1406339792','1','添加商品分类: 便利生活','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2050','1406339804','1','添加商品分类: 演出票务','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2051','1406339819','1','添加商品分类: 保险','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2052','1406339829','1','添加商品分类: 教育培训','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2053','1406483188','1','添加商品分类: DHA','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2054','1406483203','1','添加商品分类: 钙铁锌/维生素','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2055','1406483230','1','添加商品分类: 益生菌/初乳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2056','1406483240','1','添加商品分类: 清火/开胃','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2057','1406483248','1','添加商品分类: 米粉/菜粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2058','1406483258','1','添加商品分类: 果泥/果汁','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2059','1406483269','1','添加商品分类: 面条/粥','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2060','1406483275','1','添加商品分类: 宝宝零食','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2061','1406483288','1','添加商品分类: 婴儿尿裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2062','1406483297','1','添加商品分类: 拉拉裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2063','1406483306','1','添加商品分类: 成人尿裤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2064','1406483314','1','添加商品分类: 湿巾','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2065','1406483325','1','添加商品分类: 宝宝护肤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2066','1406483332','1','添加商品分类: 宝宝洗浴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2067','1406483342','1','添加商品分类: 理发器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2068','1406483351','1','添加商品分类: 洗衣液/皂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2069','1406483359','1','添加商品分类: 奶瓶清洗','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2070','1406483367','1','添加商品分类: 日常护理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2071','1406483376','1','添加商品分类: 座便器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2072','1406483384','1','添加商品分类: 驱蚊防蚊','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2073','1406483398','1','添加商品分类: 奶瓶奶嘴','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2074','1406483410','1','添加商品分类: 吸奶器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2075','1406483424','1','添加商品分类: 牙胶安抚','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2076','1406483441','1','添加商品分类: 暖奶消毒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2077','1406483458','1','添加商品分类: 辅食料理机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2078','1406483543','1','添加商品分类: 碗盘叉勺','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2079','1406483551','1','添加商品分类: 水壶/水杯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2080','1406483566','1','添加商品分类: 婴儿床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2081','1406483573','1','添加商品分类: 婴儿推车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2082','1406483583','1','添加商品分类: 餐椅摇椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2083','1406483592','1','添加商品分类: 学步车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2084','1406483601','1','添加商品分类: 三轮车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2085','1406483612','1','添加商品分类: 自行车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2086','1406483621','1','添加商品分类: 扭扭车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2087','1406483636','1','添加商品分类: 滑板车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2088','1406483647','1','添加商品分类: 电动车','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2089','1406483659','1','添加商品分类: 提篮式','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2090','1406483669','1','添加商品分类: 安全座椅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2091','1406483678','1','添加商品分类: 增高垫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2092','1406483735','1','添加商品分类: 婴儿外出服','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2093','1406483744','1','添加商品分类: 婴儿内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2094','1406483751','1','添加商品分类: 婴儿礼盒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2095','1406483759','1','添加商品分类: 婴儿鞋帽袜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2096','1406483767','1','添加商品分类: 家居床品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2097','1406483775','1','添加商品分类: 安全防护','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2098','1406483946','1','添加商品分类: 白酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2099','1406483988','1','添加商品分类: 葡萄酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2100','1406484007','1','添加商品分类: 洋酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2101','1406484024','1','添加商品分类: 啤酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2102','1406484044','1','添加商品分类: 黄酒/养生酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2103','1406484071','1','添加商品分类: 收藏酒/陈年老酒','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2104','1406484092','1','添加商品分类: 牛奶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2105','1406484474','1','添加商品分类: 饼干蛋糕','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2106','1406484485','1','添加商品分类: 糖果/巧克力','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2107','1406484507','1','添加商品分类: 休闲零食','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2108','1406484520','1','添加商品分类: 冲调饮品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2109','1406484543','1','添加商品分类: 粮油调味','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2110','1406484570','1','添加商品分类: 休闲零食','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2111','1406484609','1','添加商品分类: 坚果炒货','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2112','1406484619','1','添加商品分类: 肉干肉脯','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2113','1406484630','1','添加商品分类: 蜜饯果干','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2114','1406484642','1','添加商品分类: 糖果/巧克力','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2115','1406484655','1','添加商品分类: 饼干蛋糕','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2116','1406484665','1','添加商品分类: 无糖食品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2117','1406484675','1','添加商品分类: 新疆','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2118','1406484687','1','添加商品分类: 四川','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2119','1406484697','1','添加商品分类: 云南','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2120','1406484707','1','添加商品分类: 湖南','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2121','1406484717','1','添加商品分类: 内蒙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2122','1406484727','1','添加商品分类: 北京','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2123','1406484735','1','添加商品分类: 山西','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2124','1406484746','1','添加商品分类: 福建','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2125','1406484757','1','添加商品分类: 东北','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2126','1406484770','1','添加商品分类: 其他','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2127','1406484782','1','添加商品分类: 铁观音','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2128','1406484928','1','添加商品分类: 普洱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2129','1406484938','1','添加商品分类: 龙井','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2130','1406484948','1','添加商品分类: 绿茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2131','1406484981','1','添加商品分类: 红茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2132','1406485013','1','添加商品分类: 乌龙茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2133','1406485027','1','添加商品分类: 花草茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2134','1406485049','1','添加商品分类: 花果茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2135','1406485063','1','添加商品分类: 黑茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2136','1406485082','1','添加商品分类: 白茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2137','1406485093','1','添加商品分类: 养生茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2138','1406485104','1','添加商品分类: 其他茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2139','1406485131','1','添加商品分类: 牛奶乳品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2140','1406485158','1','添加商品分类: 饮料','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2141','1406485168','1','添加商品分类: 饮用水','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2142','1406485180','1','添加商品分类: 咖啡/奶茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2143','1406485192','1','添加商品分类: 蜂蜜/柚子茶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2144','1406485209','1','添加商品分类: 冲饮谷物','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2145','1406485222','1','添加商品分类: 成人奶粉','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2146','1406485235','1','添加商品分类: 米面杂粮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2147','1406485246','1','添加商品分类: 食用油','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2148','1406485258','1','添加商品分类: 调味品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2149','1406485267','1','添加商品分类: 南北干货','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2150','1406485277','1','添加商品分类: 方便食品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2151','1406485286','1','添加商品分类: 有机食品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2152','1406485299','1','添加商品分类: 水果蔬菜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2153','1406485310','1','添加商品分类: 海鲜水产','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2154','1406485324','1','添加商品分类: 海参','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2155','1406485334','1','添加商品分类: 牛排','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2156','1406485349','1','添加商品分类: 肉禽蛋奶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2157','1406485361','1','添加商品分类: 熟食腊味','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2158','1406485380','1','添加商品分类: 环球美食','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2159','1406485394','1','添加商品分类: 产地直供','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2160','1406485448','1','添加商品分类: 调节免疫','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2161','1406485478','1','添加商品分类: 调节三高','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2162','1406485526','1','添加商品分类: 缓解疲劳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2163','1406485537','1','添加商品分类: 美体塑身','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2164','1406485561','1','添加商品分类: 美容养颜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2165','1406487977','1','添加商品分类: 肝肾养护','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2166','1406488012','1','添加商品分类: 肠胃养护','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2167','1406488027','1','添加商品分类: 明目益智','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2168','1406488038','1','添加商品分类: 骨骼健康','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2169','1406488052','1','添加商品分类: 改善睡眠','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2170','1406488068','1','添加商品分类: 抗氧化','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2171','1406488084','1','添加商品分类: 耐缺氧','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2172','1406488193','1','添加商品分类: 维生素/矿物质','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2173','1406488286','1','添加商品分类: 蛋白质','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2174','1406488299','1','添加商品分类: 鱼油/磷脂','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2175','1406488347','1','添加商品分类: 螺旋藻','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2176','1406488401','1','添加商品分类: 番茄红素','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2177','1406488410','1','添加商品分类: 叶酸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2178','1406488419','1','添加商品分类: 葡萄籽','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2179','1406488433','1','添加商品分类: 左旋肉碱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2180','1406488442','1','添加商品分类: 辅酶Q10','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2181','1406488481','1','添加商品分类: 益生菌','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2182','1406488546','1','添加商品分类: 玛咖','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2183','1406488557','1','添加商品分类: 膳食纤维','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2184','1406488572','1','添加商品分类: 牛初乳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2185','1406488609','1','添加商品分类: 胶原蛋白','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2186','1406488619','1','添加商品分类: 大豆异黄酮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2187','1406488627','1','添加商品分类: 芦荟提取','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2188','1406488636','1','添加商品分类: 酵素','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2189','1406488654','1','添加商品分类: 蜂产品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2190','1406488670','1','添加商品分类: 阿胶','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2191','1406488692','1','添加商品分类: 参类','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2192','1406488710','1','添加商品分类: 冬虫夏草','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2193','1406488721','1','添加商品分类: 燕窝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2194','1406488734','1','添加商品分类: 海参','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2195','1406488745','1','添加商品分类: 养生茶饮','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2196','1406488784','1','添加商品分类: 鹿茸','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2197','1406488876','1','添加商品分类: 灵芝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2198','1406488884','1','添加商品分类: 药食同源','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2199','1406488937','1','添加商品分类: 安全避孕','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2200','1406488945','1','添加商品分类: 验孕测孕','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2201','1406488952','1','添加商品分类: 人体润滑','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2202','1406488962','1','添加商品分类: 情爱玩具','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2203','1406488981','1','添加商品分类: 情趣内衣','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2204','1406489002','1','添加商品分类: 血压仪器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2205','1406489013','1','添加商品分类: 血糖用品','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2206','1406489021','1','添加商品分类: 养生器械','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2207','1406489030','1','添加商品分类: 康复辅助','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2208','1406489041','1','添加商品分类: 中医保健','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2209','1406489050','1','添加商品分类: 家庭护理','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2210','1406489061','1','添加商品分类: 呼吸制氧','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2211','1406489076','1','添加商品分类: 口罩','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2212','1406489087','1','添加商品分类: 跌打损伤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2213','1406489112','1','添加商品分类: 防裂抗冻','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2214','1406489120','1','添加商品分类: 眼部保健','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2215','1406489130','1','添加商品分类: 鼻炎健康','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2216','1406490380','1','添加商品: 创维（Skyworth） 40E5CHR 40英寸 LED液晶电视（银色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2217','1406490449','1','添加商品: 海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2218','1406490512','1','添加商品: 科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2219','1406490523','1','编辑商品: 科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2220','1406490572','1','添加商品: 志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2221','1406490593','1','编辑商品: 科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2222','1406490603','1','编辑商品: 海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2223','1406490659','1','添加商品: 海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2224','1406490676','1','编辑商品: 海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2225','1406490721','1','添加商品: 海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2226','1406490726','1','编辑品牌管理: 统帅','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2227','1406490843','1','编辑品牌管理: 科龙','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2228','1406490933','1','添加商品: 赛亿（Shinee）BC-50 50升单门冷藏迷你小电冰箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2229','1406490956','1','编辑商品: 赛亿（Shinee）BC-50 50升单门冷藏迷你小电冰箱','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2230','1406491010','1','添加商品: 海尔（Haier） EC6003-G 60升 分层加热 遥控 电热水器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2231','1406491053','1','添加商品: 海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2232','1406491106','1','添加商品: 美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2233','1406491121','1','编辑商品: 美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2234','1406491128','1','编辑商品: 海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2235','1406491292','1','添加商品: 飞利浦（PHILIPS） HQ909/15 电动剃须刀','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2236','1406491310','1','编辑商品: 飞利浦（PHILIPS） HQ909/15 电动剃须刀','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2237','1406496321','1','添加商品: GESS 德国GESS682 电动深层防水洁面仪 洗脸美容仪家用毛孔清洁器去黑头仪 清新绿','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2238','1406496329','1','编辑商品: GESS 德国GESS682 电动深层防水洁面仪 洗脸美容仪家用毛孔清洁器去黑头仪 清新绿','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2239','1406496383','1','添加商品: 雷瓦（Riwa）RB-807S 两用陶瓷卷发棒 卷发器/直发器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2240','1406496440','1','添加商品: 松下（Panasonic） EH-SA31QP405 温冷美容护肤套装 深层清洁补水 瞬间紧致肌肤','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2241','1406496491','1','添加商品: 松下（Panasonic） EH-SQ10-W405 冷敷美容器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2242','1406496553','1','编辑品牌管理: 力博得','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2243','1406496556','1','添加商品: 力博得（Lebond）ilife家庭系列升级版 I3声波电动牙刷（和谐蓝）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2244','1406496601','1','添加商品: 雷瓦（RIWA） RC-643A 专业静音1800W大功率恒温负离子电吹风吹风机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2245','1406496660','1','添加商品: 华盛昌（CEM）DT-8806S 红外线人体测温仪 体温计（精致版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2246','1406496678','1','编辑商品: 华盛昌（CEM）DT-8806S 红外线人体测温仪 体温计（精致版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2247','1406496704','1','添加商品: 九安/Andon 家用全自动智能 上臂式 电子血压计 血压仪 血压计KD-5910','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2248','1406496738','1','编辑商品: 九安/Andon 家用全自动智能 上臂式 电子血压计 血压仪 血压计KD-5910','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2249','1406496819','1','添加商品: 香山（CAMRY） EB9005L 圆形电子秤 体重秤 透明玻璃','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2250','1406496923','1','添加商品: 韩国惠人（HUROM） HU-400WN-PLUS 原汁机 “小红2014全新升级版”','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2251','1406496982','1','添加商品: 美的（Midea ）17S18K2c+ 电水壶(不锈钢色)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2252','1406497003','1','编辑商品: 美的（Midea ）17S18K2c+ 电水壶(不锈钢色)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2253','1406497060','1','添加商品: 美的(midea) W12PCS505E 电压力锅 5L多功能电脑版','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2254','1406497130','1','添加商品: 美的（Midea） FS406C 4L 电脑版电饭煲','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2255','1406497202','1','添加商品: 美的（Midea） EM7KCGW3-NR 微波炉 微电脑 平板 薄膜按键','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2256','1406497331','1','添加商品: 利仁（Liven）LRT-310A 电饼铛 香槟金','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2257','1406497395','1','添加商品: 松下（Panasonic） SD-PM105 面包机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2258','1406497460','1','添加商品: 意大利德龙(DeLonghi) ESAM2200 EX:1 全自动咖啡机（银色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2259','1406498350','1','添加商品: 雷士照明（NVC） NLL-S3528 暖白光贴片灯带（一米）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2260','1406498470','1','添加商品: 雷士照明（NVC） NUD1895-3 餐吊吸顶灯(不带光源)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2261','1406498476','1','编辑商品: 雷士照明（NVC） NLL-S3528 暖白光贴片灯带（一米）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2262','1406498550','1','添加商品: TCL 浴霸NH-21Y4A/01 风暖灯暖照明换气四合一','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2263','1406498608','1','添加商品: 华帝（VATTI） H-CS0003-T3C.W 可升降 豪华 花洒套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2264','1406498664','1','添加商品: 佳德（GORLDE）99173T 304不锈钢拉丝面双槽水槽套餐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2265','1406498686','1','编辑商品: 华帝（VATTI） H-CS0003-T3C.W 可升降 豪华 花洒套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2266','1406498733','1','添加商品: 贝乐卫浴（ballee) G17-4 毛巾架浴巾架多功能套装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2267','1406499137','1','添加商品: 博深（Bosun） 7803 26双功能电锤 800W功率','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2268','1406499228','1','添加商品: 史丹利（Stanley）家用工具箱套装多用组套工具LT-802A-23','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2269','1406499266','1','添加商品: 宝工（Pro''skit) SS-989H 2合1SMD吹焊台 700W 热风焊接两用','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2270','1406499322','1','删除商品分类: 九阳','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2271','1406499360','1','添加商品: 九阳（Joyoung）JYZS-K423 紫砂电炖锅 4L','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2272','1406499390','1','添加商品: 小熊（Bear) ZDQ-2191 多功能双层煎烙煮蛋器 14个蛋 （橙黄色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2273','1406499458','1','添加商品: Coway AP-1009CH 空气净化器 除甲醛臭氧净化机pm2.5 韩国进口','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2274','1406499507','1','添加商品: 德尔玛（Deerma） DEM-F300 超声波加湿器（深蓝）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2275','1406499686','1','添加商品: 艾美特(Airmate) FSW52R 电风扇/遥控落地扇','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2276','1406499764','1','添加商品: 春花（CHUNHUA ） JC621-160J 旋风锥尘杯 真空吸尘器（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2277','1406499903','1','添加商品: 科沃斯（Ecovacs）WRN60WI 擦窗机器人窗宝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2278','1406499940','1','添加商品: 沁园（QINYUAN） QR-RU-05B(灰) 快接式 双膜纯水机','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2279','1406500062','1','添加商品: 美的（midea）单热型饮水机 MYR718S-X','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2280','1406500119','1','添加商品: 海尔（Haier） HGS-2032 蒸汽挂烫机（橙+黑）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2281','1406500169','1','添加商品: 美菱（Meiling）SJ-262E除湿机/抽湿机/除湿器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2282','1406500221','1','添加商品: 飞利浦（PHILIPS） CORD118大屏幕，免电池工作 来电显示电话机 黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2283','1406500264','1','添加商品: 飞利浦（PHILIPS）AZ5740/93 DVD 唱机 USB 磁带CD 唱机收录机 银黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2284','1406500301','1','添加商品: 公牛（BULL) GN-110 3米 插座','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2285','1406500347','1','编辑商品: 科沃斯（Ecovacs）WRN60WI 擦窗机器人窗宝','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2286','1406500407','1','添加商品: 海燕（HAIYAN） ZD-BV4 阻燃 塑铜线100米 双色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2287','1406501874','1','添加商品: 联想（Lenovo） Y400N 14.0英寸笔记本电脑（i5-3230M 4G 1T 2G独显 摄像头 DVD刻 Win8）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2288','1406501940','1','添加商品: 雷神（ThundeRobot）911-E1 15.6英寸游戏本（i7-4710HQ 4G 500G GTX850M 2G DDR5 背光键盘 全高清屏）黑','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2289','1406502043','1','添加商品: 宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G 500G GT840M 2G独显 win8.1 料号59TB）银色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2290','1406502138','1','添加商品: 惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4G 750GB GT820M 2G独显 DOS）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2291','1406502251','1','添加商品: 华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 750G GT750M 2G独显 1920x1080 Win8 黑色)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2292','1406502297','1','添加商品: 机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702MQ 4G 64G SSD+1T机械 GTX850M 游戏键盘)黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2293','1406502346','1','添加商品: 微软（Microsoft） Surface2 64G（Tegra 4四核 2G内存 64G硬盘 1080P高清屏 USB3.0）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2294','1406502361','1','编辑商品: 机械革命（MECHREVO） MR X3 升级版 14英寸游戏本(i7-4702MQ 4G 64G SSD+1T机械 GTX850M 游戏键盘)黑色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2295','1406502369','1','编辑商品: 华硕（ASUS） N550JV 15.6英寸笔记本(i5-4200H 4G 750G GT750M 2G独显 1920x1080 Win8 黑色)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2296','1406502377','1','编辑商品: 惠普（HP） CQ14-a104TX 14英寸笔记本电脑 （i5-4200M 4G 750GB GT820M 2G独显 DOS）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2297','1406502424','1','添加商品: 联想（Lenovo） C245 18.5英寸一体电脑（E1-1200 2G 500G DVD刻录 Dos）白色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2298','1406502466','1','编辑商品: 宏碁（acer） V3-572G 15.6英寸超薄本 （i5-4210U 4G 500G GT840M 2G独显 win8.1 料号59TB）银色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2299','1406502691','1','添加商品: 刊菲(kanfei) 2014夏季新款修身中袖韩国金线蕾丝连衣裙9068 金色 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2300','1406502731','1','添加商品: HARMARYCIAGA2014女装夏新款修身气质甜美糖果色假两件无袖连衣裙QZ109 水蓝 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2301','1406502822','1','添加商品: 丝露怡语 2014夏雪纺撞色青花瓷修身连衣裙女 661 9919蓝色 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2302','1406502869','1','添加商品: 俏妮妃 2014夏装新款时尚韩版女装 雪纺连衣裙圆领气质修身显瘦休闲OL淑女短袖打底连衣裙 白色 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2303','1406502906','1','添加商品: 琼瑛女装2014夏季新款 韩版修身圆领雪纺连衣裙短袖纯色提花裙子3368 黄色 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2304','1406502944','1','添加商品: 时竟 2014夏季女装新款时尚气质OL显瘦一字领套装两件套套裙 修身连衣裙D8618 白配大红 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2305','1406502995','1','添加商品: 誉彩 2014夏季新款无袖碎花长裙 大码女装裙子 韩版修身大摆连衣裙 兰花 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2306','1406503025','1','添加商品: 莱雪曼2014夏装上新蕾丝镂空拼接修身连衣裙两件套8272 黑色 M','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2307','1406503184','1','添加商品: 洗颜专科 柔澈泡沫 洁面乳 120g（资生堂授权正品）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2308','1406503216','1','添加商品: 欧莱雅（LOREAL）男士火山岩控油清痘洁面膏 买一赠一装（100ml+50ml）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2309','1406503239','1','添加商品: 妮维雅 男士净油精华亮肤洁面炭泥 150ml+150ml （提亮肤色 控油美白洗面奶 深层洁面 温和去角质）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2310','1406503279','1','添加商品: DHC蝶翠诗橄榄卸妆油200ml','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2311','1406503302','1','添加商品: 欧莱雅（LOREAL）男士 控油炭爽抗黑头洁面膏100ml','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2312','1406503337','1','添加商品: Neutrogena露得清深层净化洗面乳两支套装100g*2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2313','1406503362','1','添加商品: 欧莱雅（LOREAL）男士劲能深层净化洁面膏（100ml+50ml）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2314','1406503516','1','添加商品: 胜伟 高支棉斜纹四件套裸婚时代100%棉1.5/1.8米床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2315','1406503551','1','添加商品: 富安娜家纺 圣之花床品套件 全棉清新田园 纯棉印花双人四件套 淑姿丰盈 蓝色 1.8m(6英尺)床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2316','1406503591','1','添加商品: 巧布万棉家纺 床品件套 贡缎提花绣花1.5/1.8米婚庆四件套 舞动时尚-米白 1.8m床四件套','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2317','1406503627','1','添加商品: 九洲鹿 100%全棉斜纹印花套件纯棉四件套 1.5米1.8米床 北京遇上西雅图 1.5米床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2318','1406503667','1','添加商品: 绿野仙踪床上用品 全棉斜纹印花套件纯棉四件套 1.5/1.8米床 醉花樱-玫红 1.5-1.8米床适用','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2319','1406503698','1','添加商品: 爱斯基摩人 四件套 纯棉床上用品 斜纹家纺 双人 丽人风尚 1.5米/1.8米','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2320','1406503733','1','添加商品: 么小毛家纺 床上用品欧式经典 莫代尔全棉大提花 床单式婚庆四件套 加州记忆 1.8米床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2321','1406503766','1','添加商品: 九洲鹿全工艺100%全棉超耐磨转移印花四件套 北京遇上西雅图 1.8米床','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2322','1406503888','1','添加商品: 美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适用） 900克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2323','1406503933','1','添加商品: 雅培 Similac 美国雅培Similac Go&Grow 较大婴儿和幼儿配方奶粉 2段（9-24个月以上婴儿适用）624克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2324','1406503951','1','编辑商品: 美素力 Frisolac 荷兰原装进口 金装婴儿配方奶粉 1段（0-6个月婴儿适用） 900克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2325','1406503960','1','删除商品分类: 雅培','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2326','1406503965','1','删除商品分类: 美素力','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2327','1406504012','1','添加商品: 美赞臣 MeadJohnson 进口奶源 安儿宝A+ 幼儿配方奶粉 3段（1-3岁幼儿适用） 1200克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2328','1406504046','1','添加商品: Nestle 雀巢 能恩 幼儿配方奶粉 3段（1-3岁幼儿适用） 900克（新老包装随机发货）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2329','1406504077','1','添加商品: Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2330','1406504107','1','添加商品: Karicare 可瑞康 新西兰原装进口 金装幼儿配方奶粉 3段（1-3岁幼儿适用）900克*6罐','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2331','1406504148','1','添加商品: 雅培 Abbott 金装喜康宝 婴儿配方奶粉 1段（0-12个月婴儿适用）900克 购雅培亲体新品，Mini Pad、万元大奖等你赢！点此查看！','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2332','1406504177','1','添加商品: 惠氏 Wyeth 启赋 illuma 亲和人体配方 幼儿配方奶粉 3段(1-3岁幼儿适用) 900克','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2333','1406506137','1','添加商品: 太太静心助眠口服液15ml*60支','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2334','1406506178','1','添加商品: 养生堂天然维生素E.C祛斑焕白套装（维生素C90片+维生素E160粒）（赠养生堂5片面膜）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2335','1406506263','1','添加商品: 养生堂维生素E软胶囊160粒装（送80gVE保湿修护睡眠面膜）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2336','1406506314','1','添加商品: 养生堂 红六月焕白亲情特供装 90粒维生素C+160粒维生素E+60粒维生素C+多种维生素矿物质片25片','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2337','1406506353','1','添加商品: GNC 健安喜 葡萄籽精华胶囊 100粒（美国原装进口）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2338','1406506387','1','添加商品: 京东自营 东阿阿胶 桃花姬阿胶糕60g*4 （东阿阿胶)','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2339','1406506427','1','添加商品: 中华老字号 东阿阿胶桃花姬阿胶糕300g','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2340','1406506629','1','添加商品: C语言入门经典（第5版） ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2341','1406506666','1','添加商品: 算法竞赛入门经典（第2版） ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2342','1406506724','1','添加商品: WebKit技术内幕 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2343','1406506756','1','添加商品: 算法谜题 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2344','1406506781','1','添加商品: 数据化管理：洞悉零售及电子商务运营 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2345','1406506814','1','添加商品: 机器学习系统设计 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2346','1406506846','1','添加商品: JavaScript框架设计 ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2347','1406506885','1','添加商品: Android开发秘籍进阶篇：Android 4编程入门经典+Android 4高级编程（第3版　套装共2册） ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2348','1406507383','1','添加广告位置: 左侧导航广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2349','1406507487','1','添加广告: 图书、音像、数字商品左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2350','1406507549','1','添加广告: 图书、音像、数字商品左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2351','1406507607','1','编辑广告: 图书、音像、数字商品左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2352','1406507607','1','编辑广告: 图书、音像、数字商品左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2353','1406507798','1','添加广告: 家用电器左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2354','1406507807','1','添加广告: 家用电器左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2355','1406507881','1','编辑广告: 图书、音像、数字商品左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2356','1406507883','1','编辑广告: 图书、音像、数字商品左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2357','1406507911','1','添加广告: 手机、数码、京东通信左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2358','1406507921','1','添加广告: 手机、数码、京东通信左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2359','1406507957','1','编辑广告: 手机、数码、京东通信左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2360','1406507977','1','添加广告: 电脑、办公左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2361','1406507987','1','添加广告: 电脑、办公左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2362','1406508027','1','添加广告: 家居、家具、家装、厨具左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2363','1406508036','1','添加广告: 家居、家具、家装、厨具左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2364','1406508067','1','添加广告: 服饰内衣、珠宝首饰左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2365','1406508077','1','添加广告: 服饰内衣、珠宝首饰左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2366','1406508112','1','添加广告: 个护化妆左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2367','1406508130','1','添加广告: 个护化妆左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2368','1406508162','1','添加广告: 鞋靴、箱包、钟表、奢侈品左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2369','1406508171','1','添加广告: 鞋靴、箱包、钟表、奢侈品左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2370','1406508199','1','添加广告: 运动户外左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2371','1406508207','1','添加广告: 运动户外左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2372','1406508240','1','添加广告: 汽车用品左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2373','1406508248','1','添加广告: 汽车用品左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2374','1406508286','1','添加广告: 母婴、玩具乐器左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2375','1406508301','1','添加广告: 母婴、玩具乐器左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2376','1406508342','1','添加广告: 食品饮料、酒类、生鲜左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2377','1406508351','1','添加广告: 食品饮料、酒类、生鲜左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2378','1406508378','1','添加广告: 营养保健左侧导航广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2379','1406508387','1','添加广告: 营养保健左侧导航广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2380','1406508487','1','添加广告位置: 分类下商品大广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2381','1406508508','1','添加广告位置: 分类下商品小广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2382','1406508589','1','添加广告: 家用电器分类下商品打广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2383','1406508603','1','添加广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2384','1406508612','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2385','1406508614','1','编辑广告: 家用电器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2386','1406508616','1','编辑广告: 家用电器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2387','1406508625','1','添加广告: 家用电器分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2388','1406508634','1','添加广告: 家用电器分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2389','1406508663','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2390','1406508665','1','编辑广告: 家用电器分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2391','1406508666','1','编辑广告: 家用电器分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2392','1406508800','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2393','1406508806','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2394','1406508808','1','编辑广告: 家用电器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2395','1406508810','1','编辑广告: 家用电器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2396','1406508811','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2397','1406508813','1','编辑广告: 家用电器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2398','1406508814','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2399','1406508816','1','编辑广告: 家用电器分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2400','1406508818','1','编辑广告: 家用电器分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2401','1406508837','1','编辑广告位置: 分类下商品大广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2402','1406509505','1','编辑广告: 家用电器分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2403','1406509558','1','编辑广告: 家用电器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2404','1406509566','1','编辑广告: 家用电器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2405','1406509668','1','添加广告: 家用电器分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2406','1406509678','1','添加广告: 家用电器分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2407','1406509752','1','添加广告: 电脑、办公分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2408','1406509768','1','添加广告: 电脑、办公分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2409','1406509776','1','添加广告: 电脑、办公分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2410','1406509791','1','添加广告: 电脑、办公分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2411','1406509806','1','添加广告: 电脑、办公分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2412','1406509815','1','添加广告: 电脑、办公分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2413','1406509932','1','添加广告: 服饰内衣、珠宝首饰分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2414','1406509941','1','添加广告: 服饰内衣、珠宝首饰分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2415','1406509949','1','添加广告: 服饰内衣、珠宝首饰分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2416','1406509957','1','添加广告: 服饰内衣、珠宝首饰分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2417','1406509972','1','添加广告: 服饰内衣、珠宝首饰分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2418','1406509982','1','添加广告: 服饰内衣、珠宝首饰分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2419','1406510397','1','添加广告: 个护化妆分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2420','1406510406','1','添加广告: 个护化妆分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2421','1406510415','1','添加广告: 个护化妆分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2422','1406510432','1','添加广告: 个护化妆分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2423','1406510447','1','添加广告: 个护化妆分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2424','1406510461','1','添加广告: 个护化妆分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2425','1406510492','1','编辑广告: 个护化妆分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2426','1406510504','1','编辑广告: 个护化妆分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2427','1406510632','1','添加广告: 家居、家具、家装、厨具分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2428','1406510642','1','添加广告: 家居、家具、家装、厨具分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2429','1406510651','1','添加广告: 家居、家具、家装、厨具分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2430','1406510659','1','添加广告: 家居、家具、家装、厨具分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2431','1406510671','1','添加广告: 家居、家具、家装、厨具分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2432','1406510680','1','添加广告: 家居、家具、家装、厨具分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2433','1406510812','1','添加广告: 母婴、玩具乐器分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2434','1406510821','1','添加广告: 母婴、玩具乐器分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2435','1406510829','1','添加广告: 母婴、玩具乐器分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2436','1406510839','1','添加广告: 母婴、玩具乐器分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2437','1406510896','1','添加广告: 母婴、玩具乐器分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2438','1406510906','1','添加广告: 母婴、玩具乐器分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2439','1406510985','1','添加广告: 营养保健分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2440','1406510995','1','添加广告: 营养保健分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2441','1406511006','1','添加广告: 营养保健分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2442','1406511017','1','添加广告: 营养保健分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2443','1406511032','1','添加广告: 营养保健分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2444','1406511041','1','添加广告: 营养保健分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2445','1406511088','1','添加广告: 图书、音像、数字商品分类下商品大广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2446','1406511098','1','添加广告: 图书、音像、数字商品分类下商品大广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2447','1406511106','1','添加广告: 图书、音像、数字商品分类下商品大广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2448','1406511114','1','添加广告: 图书、音像、数字商品分类下商品大广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2449','1406511125','1','添加广告: 图书、音像、数字商品分类下商品小广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2450','1406511133','1','添加广告: 图书、音像、数字商品分类下商品小广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2451','1406584977','1','编辑商品分类: 家用电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2452','1406662270','1','编辑文章分类: 公告','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2453','1406662523','1','编辑商品: 海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2454','1406662557','1','编辑商品: 志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2455','1406663613','1','编辑商品: 志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2456','1406663622','1','编辑商品: 海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2457','1406663647','1','编辑商品: 海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2458','1406741713','1','编辑商品: 志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2459','1406741722','1','编辑商品: 海尔统帅（Leader） D48MF7000 48英寸 安卓智能LED平板电视（黑色）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2460','1406756598','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2461','1406757521','1','编辑文章分类: 促销活动','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2462','1406757621','1','编辑商品分类: 大 家 电','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2463','1406757635','1','编辑商品分类: 个护健康','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2464','1406757666','1','编辑商品分类: 厨房电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2465','1406757681','1','编辑商品分类: 生活电器','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2466','1406757695','1','编辑商品分类: 五金家装','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2467','1406763568','1','添加商品: 康宝(Canbo) ZTP80A-25(H) 立式 消毒柜','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2468','1406763595','1','添加订单: 2014073126550','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2469','1406763607','1','编辑订单: 2014073126550,订单总金额由 0.00 变为 488.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2470','1406763613','1','编辑订单: 2014073126550','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2471','1406763617','1','编辑订单: 2014073126550,订单总金额由 488.00 变为 503.00','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2472','1406763621','1','编辑订单: 2014073126550','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2473','1406763623','1','编辑订单: 2014073126550','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2474','1406763625','1','编辑订单: 2014073126550','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2475','1406765816','1','添加广告位置: 顶级分类页幻灯片广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2476','1406765822','1','编辑广告位置: 顶级分类页幻灯片广告位（宽）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2477','1406765996','1','编辑广告位置: 顶级分类页幻灯片广告位','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2478','1406766071','1','添加广告: 家用电器顶级分类页幻灯片广告1','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2479','1406766079','1','添加广告: 家用电器顶级分类页幻灯片广告2','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2480','1406766088','1','添加广告: 家用电器顶级分类页幻灯片广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2481','1406766098','1','添加广告: 家用电器顶级分类页幻灯片广告4','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2482','1406766106','1','添加广告: 家用电器顶级分类页幻灯片广告5','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2483','1406766445','1','编辑广告: 家用电器顶级分类页幻灯片广告3','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2484','1407198363','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2485','1407198377','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2486','1407202461','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2487','1407260242','1','编辑商店设置: ','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2488','1407261472','1','编辑商品分类: 大 家 电','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2489','1407261511','1','编辑商品分类: 大 家 电','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2490','1407261654','1','添加属性: 商品匹数','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2491','1407261726','1','编辑商品: 美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2492','1407261740','1','编辑属性: 商品匹数','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2493','1407261755','1','编辑商品: 美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2494','1407261775','1','编辑商品类型: 空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2495','1407261784','1','编辑属性: 商品匹数','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2496','1407261784','1','编辑属性: 商品匹数','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2497','1407261794','1','编辑商品: 美的（Midea） KFR-26GW/WJCA3 大1匹 除甲醛冷暖变频挂机（京东专供梦想版）','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2498','1407261824','1','编辑商品: 海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2499','1407261846','1','编辑商品: 海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2500','1407261861','1','编辑商品: 科龙（Kelon） KFR-72LW/EFVDN2 3匹 立柜式定速家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2501','1407261885','1','编辑商品分类: 大 家 电','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2502','1407261948','1','编辑商品分类: 空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2503','1407262034','1','添加属性: 产品特色','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2504','1407262060','1','编辑商品: 海信（Hisense） KFR-35GW/20FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2505','1407262077','1','编辑商品: 海信（Hisense） KFR-35GW/10FZBpD-3a 1.5匹 壁挂式直流变频家用冷暖空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2506','1407262106','1','编辑商品: 海尔（Haier） KFR-35GW/05GDC23A 1.5匹壁挂式冷暖变频空调','127.0.0.1');");
E_D("replace into `ecs_admin_log` values('2507','1407262133','1','编辑商品: 志高（chigo）KFR-51LW/N33+N3 大2匹 柜式家用冷暖空调（白色 白5）','127.0.0.1');");

require("../../inc/footer.php");
?>