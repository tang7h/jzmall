<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 7/16/2015
 * Time: 00:48
 */

define('INIT_NO_USERS', true);
require(EC_PATH . '/includes/init.php');
//GZ_Api::authSession();
include_once(EC_PATH . '/includes/lib_order.php');

if (empty($tmp[0])) {
    GZ_Api::outPut(101);
}

switch ($tmp[0]) {
    case 'ad_list':

        $type = _POST('type', 1);

        $limit ='';
        if($type ==9){
            //获取广告就一张
            $limit = ' limit 0,1';
        }
        $sql = 'select * from '.$GLOBALS['ecs']->table('app_ad').' where enabled=1 and ad_type='.$type.' order by ad_id asc'.$limit;

        $data = $GLOBALS['db']->getAll($sql);

        foreach($data as &$info){
            $info['ad_img'] = getImage('/data/app/'.$info['ad_img']);
        }

        GZ_Api::outPut($data);

        break;
    case 'ad_list_all':

        $sql = 'select * from '.$GLOBALS['ecs']->table('app_ad').' where enabled=1 order by ad_type asc,ad_id asc';

        $tempData = $GLOBALS['db']->getAll($sql);

        $data = array(
            'today_life' => array(),
//          'ad_category'=>array(),
            'ad_new_goods' => array(),
            'ad_hot_goods' => array(),
            'ad_home' => array(),
            'ad_street' => array()
        );

        if(!empty($tempData))
        foreach($tempData as $info){
            $info['ad_img'] = getImage('/data/app/'.$info['ad_img']);

            switch($info['ad_type']){
                case 1:
                    $data['today_life'][] = $info;
                    break;
                case 2:
//                    $data['ad_category'][] = $info;
                    break;
                case 3:
                    $data['ad_new_goods'][] = $info;
                    break;
                case 4:
                    $data['ad_hot_goods'][] = $info;
                    break;
                case 5:
                    $data['ad_home'][] = $info;
                    break;
                case 8:
                    $data['ad_street'] = $info;
                    break;
            }
        }

        $tempStreets = GZ_get_street_stores(0,1,10);

        $tempStreetArr = array();
        if(!empty($tempStreets['result'])){
            foreach($tempStreets['result'] as $temp){
                $temp['street_logo'] = getImage( $temp['street_logo']);
                $temp['street_spjpg'] = getImage( $temp['street_spjpg']);
                $tempStreetArr[] = $temp;
            }
        }

        $data['street_list'] = $tempStreetArr;

        $brandData = getAllBrand(0);
        $data['brand_list'] = $brandData;

        GZ_Api::outPut($data);

        break;
    case 'shop_position':
        $shopPosition = getShopPosition();
        GZ_Api::outPut($shopPosition);
        break;
}

function getAllBrand($cat_id){

    $totalNum = 0;
    if (!empty($cat_id)) {
        $children = get_children($cat_id);
        $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, COUNT(*) AS goods_num ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ". $GLOBALS['ecs']->table('goods') . " AS g LEFT JOIN ". $GLOBALS['ecs']->table('goods_cat') . " AS gc ON g.goods_id = gc.goods_id " .
            "WHERE g.brand_id = b.brand_id AND ($children OR " . 'gc.cat_id ' . db_create_in(array_unique(array_merge(array($cat_id), array_keys(cat_list($cat_id, 0, false))))) . ") AND b.is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY b.sort_order, b.brand_id ASC";

//    $brand_list = $GLOBALS['db']->selectLimit($sql, $num, ($start - 1) * $num);
//    $totalNum =  $GLOBALS['db']->getOne("SELECT COUNT(*) as total_num,COUNT(*) AS goods_num  FROM " .
//        $GLOBALS['ecs']->table('brand') . "AS b, ". $GLOBALS['ecs']->table('goods') .
//        " AS g LEFT JOIN ". $GLOBALS['ecs']->table('goods_cat') . " AS gc ON g.goods_id = gc.goods_id " .
//        "WHERE g.brand_id = b.brand_id AND ($children OR " . 'gc.cat_id ' . db_create_in(array_unique(array_merge(array($cat_id), array_keys(cat_list($cat_id, 0, false))))) . ") AND b.is_show = 1 " .
//        " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
//        "GROUP BY b.brand_id HAVING goods_num > 0");

        $brand_list = $GLOBALS['db']->getAll($sql);
        $totalNum = count($brand_list);
    } else {
        $brand_list = get_brands($cat = 0, $app = 'brand',$start=-1,$num=-1,$totalNum);
    }

    $data = array();
    foreach ($brand_list as $key => $val) {
        $data[] = array(
            'brand_logo' => getImage('/data/brandlogo/'.$val['brand_logo']),
            'brand_name' => $val['brand_name'],
            'brand_id' => $val['brand_id']
        );
    }

    return $data;
}

