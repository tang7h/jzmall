<?php

/**
 * ECSHOP 批量为商品添加拼音
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
$pin = new pin();
set_time_limit(0);
$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('goods')." where is_display=1 ";
$goods = $GLOBALS['db']->getAll($sql);
foreach($goods as $key => $val)
{

	if(!empty($val['goods_name']))
	{
		$pinyin = addslashes($pin->Pinyin($val['goods_name'],'UTF8'));
		
		$sql = "UPDATE " . $GLOBALS['ecs']->table('goods') . " SET pinyin_keyword='$pinyin' WHERE goods_id='$val[goods_id]'";
		if(!$GLOBALS['db']->query($sql))
		{
			exit('程序执行错误，请检查') . mysql_error();
		}
	}
}
echo '执行陈功，请删除此文件';
exit;
?>