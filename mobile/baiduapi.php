<?php

/**
 * ECSHOP 首页文件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: index.php 17217 2011-01-19 06:29:08Z liubo $
*/
define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

//require(ROOT_PATH . 'mobile/includes/lib_wxch.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

/*------------------------------------------------------*/
//地图经纬度调用
/*-------------------------------------------------------*/
$sql = "select id,map_api_x,map_api_y,shop_name,shop_logo,shop_title,notice from ecs_seller_shopinfo ";
        $data = $GLOBALS['db']->getAll($sql);
        foreach ($data as $key => $value) {
            $array[]=array($value['map_api_x'],$value['map_api_y'],$value['shop_name'],$value['shop_logo'],
                $value['shop_title'],$value['notice'],'seller.php?id='.$value['id']);
        }
        $map_api = json_encode($array);//$map_api就是需要的值
        $smarty->assign('map_api',$map_api);
        /*print_r($map_api);*/


$smarty->display('baiduapi.dwt');




?>