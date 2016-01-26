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

// 如果用户登陆，处理收藏状态
$filter = _POST('filter', array());

$brand_id = $filter['brand_id'];

$price_range['price_min'] = !empty($filter['price_range']['price_min']) ? $filter['price_range']['price_min'] : 0;
$price_range['price_max'] = !empty($filter['price_range']['price_max']) ? $filter['price_range']['price_max'] : 0;

// $price_range = $filter['price_range'];

// $price_range['price_min'] = 300;
// $price_range['price_max'] = 5000;

$keyword = $filter['keyword'];
$category = $filter['category_id'];
$seller_id = $filter['seller_id'];//店铺街id
$is_new = $filter['is_new'];//是否是新品
$is_hot = $filter['is_hot'];//是否是新品
$outstock = $filter['outstock'];//是否是新品

$sort = $filter['sort_by'];
$order = $filter['order'];
$attrFilter = empty($filter['attr'])?'':$filter['attr'];

///////////////
$_REQUEST = array();

$_REQUEST['filter_attr'] = $attrFilter;
$_REQUEST['category'] = $category;
$_REQUEST['seller_id'] = $seller_id;
$_REQUEST['is_new'] = $is_new;

$_REQUEST['brand'] = $brand_id;
$_REQUEST['price_min'] = $price_range['price_min'];
$_REQUEST['price_max'] = $price_range['price_max'];
$_REQUEST['goods_type'] = 0;
$_REQUEST['intro'] = $intro;

$_REQUEST['order'] = $order;
$_REQUEST['sort'] = $sort;
$_REQUEST['amount'] = GZ_Api::$pagination['count'];
$_REQUEST['last'] = GZ_Api::$pagination['page'];

$_REQUEST['keywords']   = !empty($keyword)   ? htmlspecialchars(trim($keyword))     : '';
$_REQUEST['brand']      = !empty($_REQUEST['brand'])      ? intval($_REQUEST['brand'])      : 0;
$_REQUEST['category']   = !empty($_REQUEST['category'])   ? intval($_REQUEST['category'])   : 0;
$_REQUEST['goods_type'] = !empty($_REQUEST['goods_type']) ? intval($_REQUEST['goods_type']) : 0;
$_REQUEST['sc_ds']      = !empty($_REQUEST['sc_ds']) ? intval($_REQUEST['sc_ds']) : 0;

$_REQUEST['act'] = 'asynclist';


/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

/* 获得请求的分类 ID */
if(isset($_REQUEST['category']))
{
    $cat_id = intval($_REQUEST['category']);
}
else
{
    /* 如果分类ID为0，则返回首页 */
//    GZ_Api::outPut(101);
//    exit;
    $cat_id = 0;
}

/* 初始化分页信息 */
$page = isset($_REQUEST['page'])   && intval($_REQUEST['page'])  > 0 ? intval($_REQUEST['page'])  : 1;
$size = isset($_CFG['page_size'])  && intval($_CFG['page_size']) > 0 ? intval($_CFG['page_size']) : 10;
$brand = isset($_REQUEST['brand']) && intval($_REQUEST['brand']) > 0 ? intval($_REQUEST['brand']) : 0;
$price_max = isset($_REQUEST['price_max']) && intval($_REQUEST['price_max']) > 0 ? intval($_REQUEST['price_max']) : 0;
$price_min = isset($_REQUEST['price_min']) && intval($_REQUEST['price_min']) > 0 ? intval($_REQUEST['price_min']) : 0;
$filter_attr_str = isset($_REQUEST['filter_attr']) ? htmlspecialchars(trim($_REQUEST['filter_attr'])) : '0';

$filter_attr_str = trim(urldecode($filter_attr_str));
$filter_attr_str = preg_match('/^[\d\.]+$/',$filter_attr_str) ? $filter_attr_str : '';
$filter_attr = empty($filter_attr_str) ? '' : explode('.', $filter_attr_str);

/* 排序、显示方式以及类型 */
$default_display_type =  'list';//$_CFG['show_order_type'] == '0' ? 'list' : ($_CFG['show_order_type'] == '1' ? 'grid' : 'text');
$default_sort_order_method = $_CFG['sort_order_method'] == '0' ? 'DESC' : 'ASC';
$default_sort_order_type   = $_CFG['sort_order_type'] == '0' ? 'last_update' : ($_CFG['sort_order_type'] == '1' ? 'shop_price' : 'last_update');

$sort  = (isset($_REQUEST['sort'])  && in_array(trim(strtolower($_REQUEST['sort'])), array('goods_id', 'shop_price', 'last_update' , 'click_count', 'sales_count', 'comments_number',))) ? trim($_REQUEST['sort'])  : $default_sort_order_type;//by Leah
$order = (isset($_REQUEST['order']) && in_array(trim(strtoupper($_REQUEST['order'])), array('ASC', 'DESC')))? trim($_REQUEST['order']) : $default_sort_order_method;
$display  = (isset($_REQUEST['display']) && in_array(trim(strtolower($_REQUEST['display'])), array('list', 'grid', 'text'))) ? trim($_REQUEST['display'])  : (isset($_COOKIE['ECS']['display']) ? $_COOKIE['ECS']['display'] : $default_display_type);
$display  = in_array($display, array('list', 'grid', 'text')) ? $display : 'list';

if($sort=='sales_count'){
    $sort ='sales_volume';
}

if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'asynclist')
{
    include('includes/cls_json.php');
    $json   = new JSON;

    $last = isset($_REQUEST['last']) ? intval($_REQUEST['last']) : 0;
    $amount = isset($_REQUEST['amount']) ? intval($_REQUEST['amount']) : 10;

    $sqlKeyword = '';
    $sqlIsNew = '';
    $sqlIsHot = '';
    $sqlOutStock = '';
    $sqlSeller ='';
    $sqlPrice = '';

    if(!empty($keyword)){
        $sqlKeyword =  ' and goods_name like "%'.$keyword.'%" ';
    }

    if($is_new>0){
        $sqlIsNew =  ' and g.is_new=1 ';
    }

    if($is_hot>0){
        $sqlIsNew =  ' and g.is_hot=1 ';
    }

    if($outstock>0){
        $sqlOutStock =  ' and g.goods_number > 0 ';
    }

    if($seller_id>0){
        $sqlSeller = " AND g.seller_id=$seller_id ";
    }

    if($price_min>0){
        $sqlPrice = " AND g.shop_price>=$price_min ";
    }
    if($price_max>0){
        $sqlPrice .= " AND g.shop_price<=$price_max ";
    }

    $sqlWhere = $sqlKeyword.$sqlIsNew.$sqlIsHot.$sqlOutStock.$sqlSeller.$sqlPrice;

    if($cat_id>0){
        $cat = get_cat_info($cat_id);   // 获得分类的相关信息
        if (empty($cat))
        {
            /* 如果分类不存在则返回首页 */
            GZ_Api::outPut(101);
            exit;
        }

        $children = get_children($cat_id);
    }

    /* 赋值固定内容 */
    if ($brand > 0)
    {
        $sql = "SELECT brand_name FROM " .$GLOBALS['ecs']->table('brand'). " WHERE brand_id = '$brand'";
        $brand_name = $db->getOne($sql);
    }
    else
    {
        $brand_name = '';
    }
    /* 获取价格分级 */
    if ($cat['grade'] == 0  && $cat['parent_id'] != 0)
    {
        $cat['grade'] = get_parent_grade($cat_id); //如果当前分类级别为空，取最近的上级分类
    }

    $catGrade = empty($cat['grade'])?1:$cat['grade'];

    if ($catGrade)
    {
        /* 需要价格分级 */

        /*
            算法思路：
                1、当分级大于1时，进行价格分级
                2、取出该类下商品价格的最大值、最小值
                3、根据商品价格的最大值来计算商品价格的分级数量级：
                        价格范围(不含最大值)    分级数量级
                        0-0.1                   0.001
                        0.1-1                   0.01
                        1-10                    0.1
                        10-100                  1
                        100-1000                10
                        1000-10000              100
                4、计算价格跨度：
                        取整((最大值-最小值) / (价格分级数) / 数量级) * 数量级
                5、根据价格跨度计算价格范围区间
                6、查询数据库

            可能存在问题：
                1、
                由于价格跨度是由最大值、最小值计算出来的
                然后再通过价格跨度来确定显示时的价格范围区间
                所以可能会存在价格分级数量不正确的问题
                该问题没有证明
                2、
                当价格=最大值时，分级会多出来，已被证明存在
        */
        $childrenSql1 = ' 1 ';

        if(!empty($children)){
            $childrenSql1 = "($children OR " . get_extension_goods($children) . ')';
        }

        $sql = "SELECT min(g.shop_price) AS min, max(g.shop_price) as max ".
            " FROM " . $ecs->table('goods'). " AS g ".
            " WHERE 1 ".' AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1  ';
//            " WHERE ".$childrenSql1.$sqlWhere.' AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1  ';
        //获得当前分类下商品价格的最大值、最小值
        $row = $db->getRow($sql);

        // 取得价格分级最小单位级数，比如，千元商品最小以100为级数
        $price_grade = 0.0001;
        for($i=-2; $i<= log10($row['max']); $i++)
        {
            $price_grade *= 10;
        }

        //跨度
        $dx = ceil(($row['max'] - $row['min']) / ($catGrade) / $price_grade) * $price_grade;
        if($dx == 0)
        {
            $dx = $price_grade;
        }

        for($i = 1; $row['min'] > $dx * $i; $i ++);

        for($j = 1; $row['min'] > $dx * ($i-1) + $price_grade * $j; $j++);
        $row['min'] = $dx * ($i-1) + $price_grade * ($j - 1);

        for(; $row['max'] >= $dx * $i; $i ++);
        $row['max'] = $dx * ($i) + $price_grade * ($j - 1);

        $sql = "SELECT (FLOOR((g.shop_price - $row[min]) / $dx)) AS sn, COUNT(*) AS goods_num  ".
            " FROM " . $ecs->table('goods') . " AS g ".
            " WHERE 1 ".' AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 '.
//            " WHERE 1 and ".$childrenSql1.$sqlWhere.' AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 '.
            " GROUP BY sn ";

        $price_grade = $db->getAll($sql);

        if(!empty($price_grade))
        foreach ($price_grade as $key=>$val)
        {
            $temp_key = $key + 1;
            $price_grade[$temp_key]['goods_num'] = $val['goods_num'];
            $price_grade[$temp_key]['start'] = $row['min'] + round($dx * $val['sn']);
            $price_grade[$temp_key]['end'] = $row['min'] + round($dx * ($val['sn'] + 1));
            $price_grade[$temp_key]['price_range'] = $price_grade[$temp_key]['start'] . ' - ' . $price_grade[$temp_key]['end'];

            /* 判断价格区间是否被选中 */
            if (isset($_REQUEST['price_min']) && $price_grade[$temp_key]['start'] == $price_min && $price_grade[$temp_key]['end'] == $price_max)
            {
                $price_grade[$temp_key]['selected'] = 1;
            }
            else
            {
                $price_grade[$temp_key]['selected'] = 0;
            }
        }

        $price_grade[0]['start'] = 0;
        $price_grade[0]['end'] = 0;
        $price_grade[0]['price_range'] = $_LANG['all_attribute'];
        $price_grade[0]['selected'] = empty($price_max) ? 1 : 0;
    }

    $brandCatSql = '';

    /* 品牌筛选 */
    if(!empty($cat_id)){
        $brandCatSql = "and ($children OR " . 'gc.cat_id ' . db_create_in(array_unique(array_merge(array($cat_id), array_keys(cat_list($cat_id, 0, false))))) . ")";
    }

    $sql = "SELECT b.brand_id, b.brand_name, COUNT(*) AS goods_num ".
        "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
        $GLOBALS['ecs']->table('goods') . " AS g LEFT JOIN ". $GLOBALS['ecs']->table('goods_cat') . " AS gc ON g.goods_id = gc.goods_id " .
        "WHERE g.brand_id = b.brand_id $brandCatSql AND b.is_show = 1 " .
//        "WHERE g.brand_id = b.brand_id $brandCatSql AND b.is_show = 1 " .$sqlWhere.
        " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
        "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY b.sort_order, b.brand_id ASC";

    $brands = $GLOBALS['db']->getAll($sql);

    foreach ($brands AS $key => $val)
    {
        $temp_key = $key + 1;
        $brands[$temp_key]['brand_name'] = $val['brand_name'];
        $brands[$temp_key]['brand_id'] = $val['brand_id'];    //by Leah
        $brands[$temp_key]['goods_num'] = $val['goods_num'];  //by Leah

        /* 判断品牌是否被选中 */
        if ($brand == $brands[$temp_key]['brand_id'])
        {
            $brands[$temp_key]['selected'] = 1;
        }
        else
        {
            $brands[$temp_key]['selected'] = 0;
        }
    }
    $brands[0]['brand_id'] = 0;  //by Leah
    $brands[0]['brand_name'] = $_LANG['all_attribute'];
    $brands[0]['selected'] = empty($brand) ? 1 : 0;

    /* 属性筛选 */
    $ext = ''; //商品查询条件扩展
    if ($cat['filter_attr'] > 0)
    {
        $cat_filter_attr = explode(',', $cat['filter_attr']);       //提取出此分类的筛选属性
        $all_attr_list = array();

        foreach ($cat_filter_attr AS $key => $value)
        {
            $sql = "SELECT a.attr_name FROM " . $ecs->table('attribute') . " AS a, " . $ecs->table('goods_attr') .
                " AS ga, " . $ecs->table('goods') . " AS g WHERE 1 ".
//                $sqlWhere.
                " and ($children OR " .
                get_extension_goods($children) .
                ") AND a.attr_id = ga.attr_id AND g.goods_id = ga.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND a.attr_id='$value'";
            if($temp_name = $db->getOne($sql))
            {
                $all_attr_list[$key]['filter_attr_name'] = $temp_name;

                $sql = "SELECT a.attr_id, MIN(a.goods_attr_id ) AS goods_id, a.attr_value AS attr_value FROM " . $ecs->table('goods_attr') . " AS a, " . $ecs->table('goods') .
                    " AS g" .
                    " WHERE ($children OR " . get_extension_goods($children) . ') AND g.goods_id = a.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 '.
                    " AND a.attr_id='$value' ".
                    " GROUP BY a.attr_value";

                $attr_list = $db->getAll($sql);

                $temp_arrt_url_arr = array();

                for ($i = 0; $i < count($cat_filter_attr); $i++)        //获取当前url中已选择属性的值，并保留在数组中
                {
                    $temp_arrt_url_arr[$i] = !empty($filter_attr[$i]) ? $filter_attr[$i] : 0;
                }

                $temp_arrt_url_arr[$key] = 0;                           //“全部”的信息生成
                $temp_arrt_url = implode('.', $temp_arrt_url_arr);
                $all_attr_list[$key]['attr_list'][0]['attr_value'] = $_LANG['all_attribute'];
                $all_attr_list[$key]['attr_list'][0]['selected'] = empty($filter_attr[$key]) ? 1 : 0;
                $all_attr_list[$key]['attr_list'][0]['goods_attr_id']  = 0;

                foreach ($attr_list as $k => $v)
                {
                    $temp_key = $k + 1;
                    $temp_arrt_url_arr[$key] = $v['goods_id'];       //为url中代表当前筛选属性的位置变量赋值,并生成以‘.’分隔的筛选属性字符串
                    $temp_arrt_url = implode('.', $temp_arrt_url_arr);

                    $all_attr_list[$key]['attr_list'][$temp_key]['attr_value'] = $v['attr_value'];
                    $all_attr_list[$key]['attr_list'][$temp_key]['goods_attr_id'] = $v['goods_id'];

                    if (!empty($filter_attr[$key]) AND $filter_attr[$key] == $v['goods_id'])
                    {
                        $all_attr_list[$key]['attr_list'][$temp_key]['selected'] = 1;
                    }
                    else
                    {
                        $all_attr_list[$key]['attr_list'][$temp_key]['selected'] = 0;
                    }
                }
            }
        }


        /* 扩展商品查询条件 */
        if (!empty($filter_attr))
        {
            $ext_sql = "SELECT DISTINCT(b.goods_id) FROM " . $ecs->table('goods_attr') . " AS a, " . $ecs->table('goods_attr') . " AS b " .  "WHERE ";
            $ext_group_goods = array();

            foreach ($filter_attr AS $k => $v)                      // 查出符合所有筛选属性条件的商品id */
            {
                if (is_numeric($v) && $v !=0 &&isset($cat_filter_attr[$k]))
                {
                    $sql = $ext_sql . "b.attr_value = a.attr_value AND b.attr_id = " . $cat_filter_attr[$k] ." AND a.goods_attr_id = " . $v;
                    $ext_group_goods = $db->getColCached($sql);
                    $ext .= ' AND ' . db_create_in($ext_group_goods, 'g.goods_id');
                }
            }
        }

    }

    if(empty($all_attr_list)){
        $all_attr_list = array();
    }

    $goodsCount = 0;
    $goods_list = category_get_goods2($children, $brand, $price_min, $price_max, $ext, $amount, $last, $sort, $order,$goodsCount,$sqlWhere);


    $pager['page'] = GZ_Api::$pagination['page'];
    $pager['page_count'] = ceil($goodsCount/GZ_Api::$pagination['count']);
    $pager = array(
        "total" => $goodsCount,
        "count" => count($goods_list),
        "more" => intval($pager['page_count'] > $pager['page'])
    );

    GZ_Api::outPut(array('goods_list'=>$goods_list,'filter_brands'=>$brands,'filter_price'=>$price_grade,'filter_ext'=>$all_attr_list), $pager);
//
//    die($json->encode($goods_list));
}


/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */

/**
 * 获得分类的信息
 *
 * @param   integer $cat_id
 *
 * @return  void
 */
function get_cat_info($cat_id)
{
    return $GLOBALS['db']->getRow('SELECT cat_name, keywords, cat_desc, style, grade, filter_attr, parent_id FROM ' . $GLOBALS['ecs']->table('category') .
        " WHERE cat_id = '$cat_id'");
}

/**
 * 获得分类下的商品
 *
 * @access  public
 * @param   string  $children
 * @return  array
 */
function category_get_goods($children, $brand, $min, $max, $ext, $size, $page, $sort, $order)
{
    $display = $GLOBALS['display'];
    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND ".
        "g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';

    if ($brand > 0)
    {
        $where .=  "AND g.brand_id=$brand ";
    }

    if ($min > 0)
    {
        $where .= " AND g.shop_price >= $min ";
    }

    if ($max > 0)
    {
        $where .= " AND g.shop_price <= $max ";
    }

    /* 获得商品列表 */
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_name_style, g.market_price, g.is_new, g.is_best, g.is_hot, g.shop_price AS org_price, ' .
        "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, g.promote_price, g.goods_type, " .
        'g.promote_start_date, g.promote_end_date, g.goods_brief, g.goods_thumb , g.goods_img ' .
        'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
        'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
        "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
        "WHERE $where $ext ORDER BY $sort $order";
    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);
    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        //$sqlc = "Update " . $GLOBALS['ecs']->table('goods') . " Set sales_count=".get_goods_sales_count($row['goods_id'])." Where goods_id=".$row['goods_id'];
        //$GLOBALS['db']->query($sqlc);
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }

        /* 处理商品水印图片 */
        $watermark_img = '';

        if ($promote_price != 0)
        {
            $watermark_img = "watermark_promote_small";
        }
        elseif ($row['is_new'] != 0)
        {
            $watermark_img = "watermark_new_small";
        }
        elseif ($row['is_best'] != 0)
        {
            $watermark_img = "watermark_best_small";
        }
        elseif ($row['is_hot'] != 0)
        {
            $watermark_img = 'watermark_hot_small';
        }

        if ($watermark_img != '')
        {
            $arr[$row['goods_id']]['watermark_img'] =  $watermark_img;
        }

        $arr[$row['goods_id']]['goods_id']         = $row['goods_id'];
        if($display == 'grid')
        {
            $arr[$row['goods_id']]['goods_name']       = $GLOBALS['_CFG']['goods_name_length'] > 0 ? sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        }
        else
        {
            $arr[$row['goods_id']]['goods_name']       = $row['goods_name'];
        }
        $arr[$row['goods_id']]['name']             = $row['goods_name'];
        $arr[$row['goods_id']]['goods_brief']      = $row['goods_brief'];
        $arr[$row['goods_id']]['goods_style_name'] = add_style($row['goods_name'],$row['goods_name_style']);
        $arr[$row['goods_id']]['market_price']     = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']       = price_format($row['shop_price']);
        $arr[$row['goods_id']]['type']             = $row['goods_type'];
        $arr[$row['goods_id']]['promote_price']    = ($promote_price > 0) ? price_format($promote_price) : '';
        $arr[$row['goods_id']]['goods_thumb']      = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['goods_img']        = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['url']              = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);

        $arr[$row['goods_id']]['sales_count']      = get_goods_sales_count($row['goods_id']);
    }

    return $arr;
}

function category_get_goods2($children, $brand, $min, $max, $ext, $size, $page, $sort, $order,&$goodsCount,$otherSql='')
{
    $sqlChildren = '';

    if(!empty($children)){
        $sqlChildren ="AND ($children OR " . get_extension_goods($children) . ')';
    }

    $where = "g.is_display=1 and g.is_on_sale = 1 AND g.is_alone_sale = 1 ".$otherSql.
        " AND g.is_delete = 0 ".$sqlChildren;

    if ($brand > 0)
    {
        $where .=  "AND g.brand_id=$brand ";
    }

    if ($min > 0)
    {
        $where .= " AND g.shop_price >= $min ";
    }

    if ($max > 0)
    {
        $where .= " AND g.shop_price <= $max ";
    }

    if($sort =='goods_id'){
        $sort = 'g.goods_id';
    }

    $sql= 'SELECT count(*) as goodsCount ' .
        'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
        'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
        "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .
        "WHERE $where $ext  ORDER BY $sort $order";

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
        "WHERE $where $ext  and 1 ORDER BY $sort $order";

    $res = $GLOBALS['db']->SelectLimit($sql, $size, ($page - 1) * $size);
    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        if ($row['promote_price'] > 0)
        {
            $promote_price = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
        }
        else
        {
            $promote_price = 0;
        }

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
        $tempGoods['promote_price']    = ($promote_price > 0) ? price_format($promote_price) : '';
        $tempGoods['goods_thumb']      = API_DATA('PHOTO', get_image_path($row['goods_id'], $row['goods_thumb'], true));
        $tempGoods['goods_img']        = API_DATA('PHOTO', get_image_path($row['goods_id'], $row['goods_img']));
        $tempGoods['goods_collected']  = empty($row['goods_collected'])?0:$row['goods_collected'];

        $tempGoods['sales_count']      = get_goods_sales_count($row['goods_id']);
        $tempGoods['price_str']    =  ($promote_price > 0) ? price_format($promote_price) : price_format($row['shop_price']);
        $arr[] = $tempGoods;
    }

    return $arr;
}
/**
 * 获得分类下的商品总数
 *
 * @access  public
 * @param   string     $cat_id
 * @return  integer
 */
function get_cagtegory_goods_count($children, $brand = 0, $min = 0, $max = 0, $ext='')
{
    $where  = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';

    if ($brand > 0)
    {
        $where .=  " AND g.brand_id = $brand ";
    }

    if ($min > 0)
    {
        $where .= " AND g.shop_price >= $min ";
    }

    if ($max > 0)
    {
        $where .= " AND g.shop_price <= $max ";
    }

    /* 返回商品总数 */
    return $GLOBALS['db']->getOne('SELECT COUNT(*) FROM ' . $GLOBALS['ecs']->table('goods') . " AS g WHERE $where $ext");
}

/**
 * 取得最近的上级分类的grade值
 *
 * @access  public
 * @param   int     $cat_id    //当前的cat_id
 *
 * @return int
 */
function get_parent_grade($cat_id)
{
    static $res = NULL;

    if ($res === NULL)
    {
        $data = read_static_cache('cat_parent_grade');
        if ($data === false)
        {
            $sql = "SELECT parent_id, cat_id, grade ".
                " FROM " . $GLOBALS['ecs']->table('category');
            $res = $GLOBALS['db']->getAll($sql);
            write_static_cache('cat_parent_grade', $res);
        }
        else
        {
            $res = $data;
        }
    }

    if (!$res)
    {
        return 0;
    }

    $parent_arr = array();
    $grade_arr = array();

    foreach ($res as $val)
    {
        $parent_arr[$val['cat_id']] = $val['parent_id'];
        $grade_arr[$val['cat_id']] = $val['grade'];
    }

    while ($parent_arr[$cat_id] >0 && $grade_arr[$cat_id] == 0)
    {
        $cat_id = $parent_arr[$cat_id];
    }

    return $grade_arr[$cat_id];

}


?>
