<?php

/**
 * ECSHOP 商品分类
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: chenq $
 */

if (!empty(GZ_Api::$session['uid'])) {
    define('INIT_NO_USERS', true);
    require(EC_PATH . '/includes/init.php');
    GZ_Api::authSession();
} else {
    require_once(EC_PATH . '/includes/init.php');
}

$seller_id = _POST('seller_id', 0);

if($seller_id<=0){
    GZ_Api::outPut(101);
}

$sort = _POST('sort', 0);
$order = _POST('order', 0);

/* 排序、显示方式以及类型 */
$default_sort_order_method = $_CFG['sort_order_method'] == '0' ? 'DESC' : 'ASC';
$default_sort_order_type   = $_CFG['sort_order_type'] == '0' ? 'last_update' : ($_CFG['sort_order_type'] == '1' ? 'shop_price' : 'last_update');

$sort  = (empty($sort)  && in_array(trim(strtolower($sort)), array('goods_id', 'shop_price', 'last_update' , 'click_count', 'sales_count', 'comments_number',))) ? trim($sort)  : $default_sort_order_type;//by Leah
$order = (empty($order) && in_array(trim(strtoupper($order)), array('ASC', 'DESC')))? trim($order) : $default_sort_order_method;
$size = GZ_Api::$pagination['count'];
$page = GZ_Api::$pagination['page'];
{
    $page = !empty($page) ? intval($page) : 0;
    $size = !empty($size) ? intval($size) : 10;

    $shopInfo = get_shop($seller_id);

    $goodsCount = 0;
    $sqlWhere = ' and g.seller_id='.$seller_id;
    $goods_list = get_shop_goods($size, $page, $sort, $order,$goodsCount,$sqlWhere);
    $pager['page'] = GZ_Api::$pagination['page'];
    $pager['page_count'] = ceil($goodsCount/GZ_Api::$pagination['count']);
    $pager = array(
        "total" => $goodsCount,
        "count" => count($goods_list),
        "more" => intval($pager['page_count'] > $pager['page'])
    );

    $sellerAdvert = get_shop_advert();

    GZ_Api::outPut(array('seller_id'=>$seller_id,'shop_name'=>$shopInfo['shop_name'],
        'shop_map_x'=>$shopInfo['map_api_x'],'shop_map_y'=>$shopInfo['map_api_y'],
        'shop_advert'=>$sellerAdvert,
        'goods_list'=>$goods_list), $pager);
}

function get_shop_advert(){
    $type = 10;//广告的id

    //获取广告就一张
    $limit = ' limit 0,1';
    $sql = 'select * from '.$GLOBALS['ecs']->table('app_ad').' where enabled=1 and ad_type='.$type.' order by ad_id asc'.$limit;

    $data = $GLOBALS['db']->getRow($sql);

    $data['ad_img'] = !empty($data['ad_img'])?getImage('/data/app/'.$data['ad_img']):"";

    return $data;
}

/**
 * @param $seller_id
 * @return mixed
 *
 * 获取 商品 详情
 */
function get_shop($seller_id){

    $sql="select sh.id,sh.shop_name,sh.street_logo,sh.street_spjpg,sh.shop_title,sh.map_api_x,sh.map_api_y from "
        .$GLOBALS['ecs']->table('seller_shopinfo')." as sh where sh.status=1 and sh.apply=1 and sh.is_street=1 and sh.seller_id={$seller_id}";
    $shopInfo = $GLOBALS['db']->getRow($sql);

    return $shopInfo;
}


function get_shop_goods($size,$page, $sort, $order,&$goodsCount,$otherSql='')
{
    $sqlChildren = '';

    $where = "g.is_display=1 and g.is_on_sale = 1 AND g.is_alone_sale = 1 ".$otherSql.
        " AND g.is_delete = 0 ".$sqlChildren;

    $sql= 'SELECT count(*) as goodsCount ' .
        'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
        'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
        "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
        "WHERE $where  ORDER BY $sort $order";

    $goodsCount = $GLOBALS['db']->getOne($sql);

    $isCollectSql = '';
    $isCollectSql_2 = '';
    if (GZ_Api::$session['uid']) {
        $isCollectSql = 'left join ' .$GLOBALS['ecs']->table('collect_goods') ."as cg on cg.goods_id=g.goods_id and user_id='$_SESSION[user_id]' ";
        $isCollectSql_2 = 'cg.rec_id as goods_collected, ';
    }

    /* 获得商品列表 */
    $sql = 'SELECT g.goods_id, g.goods_name,g.cat_id, g.goods_name_style, g.market_price,g.goods_number, g.is_new, g.is_best, g.is_hot, g.shop_price AS org_price, ' .
        $isCollectSql_2.
        "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
        'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img ,g.seller_id ' .
        'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
        'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
        "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
        $isCollectSql.
        "WHERE $where $otherSql and 1 ORDER BY $sort $order";

    $res = $GLOBALS['db']->SelectLimit($sql, $size, ($page - 1) * $size);
    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
//        if ($row['promote_price'] > 0)
//        {
//            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
//        }
//        else
//        {
//            $promote_price = 0;
//        }
        $promote_price = $row['promote_price'];
        $tempGoods['goods_id']         = $row['goods_id'];
        $tempGoods['cat_id']       = $row['cat_id'];
        $tempGoods['goods_name']       = $row['goods_name'];
        $tempGoods['seller_id']        = $row['seller_id'];
        $tempGoods['goods_number']     = $row['goods_number'];
        $tempGoods['goods_brief']      = $row['goods_brief'];
        $tempGoods['goods_style_name'] = add_style($row['goods_name'],$row['goods_name_style']);
        $tempGoods['market_price']     = price_format($row['market_price']);
        $tempGoods['shop_price']       = price_format($row['shop_price']);
        $tempGoods['vip_price']        = 0;
        $tempGoods['type']             = $row['goods_type'];
        $tempGoods['promote_price']    = ($promote_price > 0) ? price_format($promote_price) : '0';
        $tempGoods['goods_thumb']      = API_DATA('PHOTO', get_image_path($row['goods_id'], $row['goods_thumb'], true));
        $tempGoods['goods_img']        = API_DATA('PHOTO', get_image_path($row['goods_id'], $row['goods_img']));
        $tempGoods['goods_collected']  = empty($row['goods_collected'])?0:$row['goods_collected'];

        $tempGoods['sales_count']      = get_goods_sales_count($row['goods_id']);
        $tempGoods['price_str']    =  ($promote_price > 0) ? price_format($promote_price) : price_format($row['shop_price']);
        $arr[] = $tempGoods;
    }

    return $arr;
}
?>
