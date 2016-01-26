<?php

/*
 *                                                                          
 *       _/_/_/                      _/        _/_/_/_/_/                     
 *    _/          _/_/      _/_/    _/  _/          _/      _/_/      _/_/    
 *   _/  _/_/  _/_/_/_/  _/_/_/_/  _/_/          _/      _/    _/  _/    _/   
 *  _/    _/  _/        _/        _/  _/      _/        _/    _/  _/    _/    
 *   _/_/_/    _/_/_/    _/_/_/  _/    _/  _/_/_/_/_/    _/_/      _/_/       
 *                                                                          
 *
 *  Copyright 2013-2014, Geek Zoo Studio
 *  http://www.ecmobile.cn/license.html
 *
 *  HQ China:
 *    2319 Est.Tower Van Palace 
 *    No.2 Guandongdian South Street 
 *    Beijing , China
 *
 *  U.S. Office:
 *    One Park Place, Elmira College, NY, 14901, USA
 *
 *  QQ Group:   329673575
 *  BBS:        bbs.ecmobile.cn
 *  Fax:        +86-10-6561-5510
 *  Mail:       info@geek-zoo.com
 */

function GZ_user_info($user_id)
{
	global $db,$ecs;

	$user_info = user_info($user_id);

	$collection_goods_num = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('collect_goods')." WHERE user_id='$user_id'");
    $collection_shop_num = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('collect_seller')." WHERE user_id='$user_id'");
    $bonus_num = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('user_bonus')." WHERE user_id='$user_id'");
	$await_pay = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('order_info'). " WHERE user_id = '$user_id'". GZ_order_query_sql('await_pay'));
	$await_ship = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('order_info'). " WHERE user_id = '$user_id'". GZ_order_query_sql('await_ship'));
	$shipped = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('order_info'). " WHERE user_id = '$user_id'". GZ_order_query_sql('shipped'));
	$finished = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('order_info'). " WHERE user_id = '$user_id'". GZ_order_query_sql('finished'));
	
	// include_once(ROOT_PATH .'includes/lib_clips.php');
	// $rank = get_rank_info();
	// print_r($rank);exit;

	/* 取得用户等级 */
	if ($user_info['user_rank'] == 0) {
		// 非特殊等级，根据等级积分计算用户等级（注意：不包括特殊等级）
		$sql = 'SELECT rank_id, rank_name FROM ' . $GLOBALS['ecs']->table('user_rank') . " WHERE special_rank = '0' AND min_points <= " . intval($user_info['rank_points']) . ' AND max_points > ' . intval($user_info['rank_points']);
	} else {
		// 特殊等级
		$sql = 'SELECT rank_id, rank_name FROM ' . $GLOBALS['ecs']->table('user_rank') . " WHERE rank_id = '$user_info[user_rank]'";
	}

	if ($row = $db->getRow($sql)) {
        $user_info['user_rank_name']=$row['rank_name'];
    } else {
        $user_info['user_rank_name']='非特殊等级';
    } 

    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('user_rank') . " WHERE special_rank = '0' AND min_points = '0'";
    $row = $db->getRow($sql);

    if ($user_info['user_rank_name'] == $row['rank_name']) {
    	$level = 0;
    } else {
    	$level = 1;
    }

    if(empty($user_info['birthday'])||strtotime($user_info['birthday'])==0){
        $user_info['birthday'] = '1878-01-01';
    }

	return array(
		'id' => $user_info['user_id'],
		'name'=>$user_info['user_name'],
		'nick_name'=>$user_info['nick_name'],
		'birthday'=>$user_info['birthday'],
		'sex'=>$user_info['sex'],
		'rank_name'=>$user_info['user_rank_name'],
		'user_money'=>$user_info['user_money'],
		'pay_points'=>$user_info['pay_points'],
		'rank_level' => $level,
		'collection_goods_num' => $collection_goods_num,
		'collection_shop_num' => $collection_shop_num,
		'bonus_num' => $bonus_num,//红包个数
        'email' => $user_info['email'],
		"order_num" => array(
			'await_pay' => $await_pay,
			'await_ship' => $await_ship,
			'shipped' => $shipped,
			'finished' =>$finished
		)
	);
}

/**
 * 生成查询订单的sql
 * @param   string  $type   类型
 * @param   string  $alias  order表的别名（包括.例如 o.）
 * @return  string
 */
function GZ_order_query_sql($type = 'finished', $alias = '')
{
    /* 已完成订单 */
    if ($type == 'finished')
    {
        return " AND {$alias}order_status " . db_create_in(array(OS_CONFIRMED, OS_SPLITED)) .
               " AND {$alias}shipping_status " . db_create_in(array(SS_SHIPPED, SS_RECEIVED)) .
               " AND {$alias}pay_status " . db_create_in(array(PS_PAYED, PS_PAYING)) . " ";
    }
    /* 待发货订单 */
    elseif ($type == 'await_ship')
    {
        return " AND   {$alias}order_status " .
                 db_create_in(array(OS_CONFIRMED, OS_SPLITED, OS_SPLITING_PART)) .
               " AND   {$alias}shipping_status " .
                 db_create_in(array(SS_UNSHIPPED, SS_PREPARING, SS_SHIPPED_ING)) .
               " AND ( {$alias}pay_status " . db_create_in(array(PS_PAYED, PS_PAYING)) . " OR {$alias}pay_id " . db_create_in(payment_id_list(true)) . ") ";
    }
    /* 待付款订单 */
    elseif ($type == 'await_pay')
    {
        return " AND   {$alias}order_status " . db_create_in(array(OS_CONFIRMED, OS_SPLITED, OS_UNCONFIRMED)) .
               " AND   {$alias}pay_status = '" . PS_UNPAYED . "'" .
               " AND ( {$alias}shipping_status " . db_create_in(array(SS_SHIPPED, SS_RECEIVED)) . " OR {$alias}pay_id " . db_create_in(payment_id_list(false)) . ") ";
    }
    /* 未确认订单 */
    elseif ($type == 'unconfirmed')
    {
        return " AND {$alias}order_status = '" . OS_UNCONFIRMED . "' ";
    }
    /* 未处理订单：用户可操作 */
    elseif ($type == 'unprocessed')
    {
        return " AND {$alias}order_status " . db_create_in(array(OS_UNCONFIRMED, OS_CONFIRMED)) .
               " AND {$alias}shipping_status = '" . SS_UNSHIPPED . "'" .
               " AND {$alias}pay_status = '" . PS_UNPAYED . "' ";
    }
    /* 未付款未发货订单：管理员可操作 */
    elseif ($type == 'unpay_unship')
    {
        return " AND {$alias}order_status " . db_create_in(array(OS_UNCONFIRMED, OS_CONFIRMED)) .
               " AND {$alias}shipping_status " . db_create_in(array(SS_UNSHIPPED, SS_PREPARING)) .
               " AND {$alias}pay_status = '" . PS_UNPAYED . "' ";
    }
    /* 已发货订单：不论是否付款 */
    elseif ($type == 'shipped')
    {
        return " AND {$alias}shipping_status " . db_create_in(array(SS_SHIPPED)) . " ";

    /* 已完成，未评论的订单 */
    }elseif($type == 'await_comment'){
        $w =  " AND {$alias}order_status " . db_create_in(array(OS_CONFIRMED, OS_SPLITED)) .
        " AND {$alias}shipping_status " . db_create_in(array(SS_SHIPPED, SS_RECEIVED)) .
        " AND {$alias}pay_status " . db_create_in(array(PS_PAYED, PS_PAYING)) . " ";

        $w .=' and not exists(select user_id,order_id from '.$GLOBALS['ecs']->table('comment')." as b where {$alias}user_id=b.user_id and {$alias}order_id=b.order_id)";
        return $w;
    }
    else
    {
        die('函数 order_query_sql 参数错误');
    }
}

function gz_autoload($className) {
    $file = GZ_PATH . '/library/' . $className . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

function getValueByDefault($value, $default) {
    if (!is_array($value)) {
        $whiteList = array();
        if (is_array($default)) {
            $whiteList = $default;
            $default = isset($default[0]) ? $default[0] : $default;
        } elseif ($value == '') {
            return $default;
        }

        if (is_string($default)) {
            $value = trim($value);
        } elseif (is_int($default)) {
            $value = intval($value);
        } elseif (is_array($default)) {
            if ($value == '') {
                return $default;
            }
            $value = (array)$value;
        } else {
            $value = floatval($value);
        }

        if ($whiteList && !in_array($value, $whiteList)) {
            $value = $default;
        }

    } else {
        foreach ($value as $key => $val) {
            $t = isset($default[$key]) ? $default[$key] : '';
            $value[$key] = getValueByDefault($value[$key], $t);
        }
        if (is_array($default)) {
            $value += $default;
        }
    }

    return $value;
}

function _GET($key = '', $default = '') {
    if (empty($key)) {
        return $_GET;
    }

    if (!isset($_GET[$key])) {
        $_GET[$key] = '';
    }
    $value = getValueByDefault($_GET[$key], $default);

    return $value;
}

function _POST($key = '', $default = '') {
    if (empty($key)) {
        return $_POST;
    }

    if (!isset($_POST[$key])) {
        $_POST[$key] = '';
    }
    $value = getValueByDefault($_POST[$key], $default);

    return $value;
}


function getImage($img)
{
    if (substr($img, 0, 4) == 'http') {
        return $img;
    }

    return dirname($GLOBALS['ecs']->url()).'/'.ltrim($img, '/');
}

function formatTime($Time)
{	
	if (strlen($Time) == strlen(intval($Time))) {
		if ($Time == 0) {
			return '';
		}
		$unixTime = $Time;
	} else {
		$unixTime = strtotime($Time);
	}
	return date('Y/m/d H:i:s O', $unixTime);
}

function bjTime($Time)
{
	// $unixTime = $Time + 8*3600;
	// return date('Y/m/d H:i:s O', $unixTime);
	
	return local_date('Y/m/d H:i:s O', $Time);
}

function API_DATA($type, $readData)
{
	$outData = array();
	if (empty($readData)) {
		return $outData;
	}
	if (is_array($readData)) {
		$first = current($readData);
		if ($first && is_array($first)) {
			foreach ($readData as $key => $value) {
				$outData[] = API_DATA($type, $value);
			}
			return array_filter($outData);
		}
	}

	switch ($type) {
		case 'PHOTO':
            $outData = getImage($readData);
			break;
		case 'SIMPLEGOODS':
			$outData = array(
			  "goods_id" => $readData['goods_id'],
			  "seller_id" => isset($readData['seller_id'])?$readData['seller_id']:0,
			  "name" => $readData['goods_name'],
			  "market_price" => $readData['market_price'],
			  "shop_price" => $readData['shop_price'],
			  "promote_price" => $readData['promote_price'],
			  "img" => array(
				'thumb'=>API_DATA('PHOTO', $readData['goods_img']),
				'url' => API_DATA('PHOTO', $readData['original_img']),
                'small' => API_DATA('PHOTO', $readData['goods_thumb'])
				)
			);
            if(isset($readData['goods_brief'])){
                $outData['goods_brief'] = $readData['goods_brief'];
            }
            if(isset($readData['collected'])){
                $outData['collected'] = $readData['collected']>0?1:0;
            }
			break;
		case 'ADDRESS':
			$outData = array(
				"id"       => 15,
				"consignee"  => "联系人姓名",
				"email"    => "联系人email",
				"country"  => "国家id",
				"province" => "省id",
				"city"     => "城市id",
				"district" => "地区id",
				"address"  => "详细地址",
				"zipcode"  => "邮政编码",
				"tel"      => "联系电话",
				"mobile"   => "手机",
				"sign_building" => "标志建筑",
				"best_time" => "最佳送货时间"	
			);
			break;
		case 'SIGNUPFIELDS':
			$outData = array(
				"id"  => 12,
			  	"name"  => "说明",
			  	"need"  => 0
			);
			break;
		case 'CONFIG':
			$outData = array(
				"shop_closed" => 0,
			  	"close_comment" => "关闭原因"
			);
			break;
		case 'CATEGORY':
			$outData = array(
				"id"    => 12,
			  	"name"  => "分类名称",
			  	"children"  => array(
			  		'id'   =>  13,
					'name' => 'ssss'
			  	)
			);
			break;
		case 'SIMPLEORDER':
			$outData = array(
			  "id" => $readData['order_id'],
			  "order_sn" => $readData['order_sn'],
			  "order_time" => $readData['order_time'],
			  "order_status" => $readData['order_status'],
			  "total_fee" => $readData['total_fee'],
			);
			break;
		case 'GOODS':
            $readData['original_img'] || $readData['original_img'] = $readData['goods_thumb'];
			$outData = array(
				"id"  =>  $readData['goods_id'],
				"cat_id" => $readData['cat_id'],
				"goods_sn" => $readData['goods_sn'],
				"goods_name" => $readData['goods_name'],
				"goods_brief"=>!empty($readData['goods_brief'])?$readData['goods_brief']:"",
                "goods_collected" => $readData['goods_collected'],
                "collected" => $readData['goods_collected'],
				"market_price" => $readData['market_price'],
				"shop_price" => price_format($readData['shop_price'], false),
				"integral" => $readData['integral'],
				"click_count" => $readData['click_count'],
				"brand_id" => $readData['brand_id'],
                // fix 没有goods_number值
				"goods_number" => is_numeric($readData['goods_number']) ? $readData['goods_number'] : 65535,
				"goods_weight" =>  $readData['goods_weight'],
				"promote_price" => $readData['promote_price_org'],
				"formated_promote_price" => price_format($readData['promote_price_org'], false),//$readData['promote_price'],
				"promote_start_date" => bjTime($readData['promote_start_date']),
				"promote_end_date"  => bjTime($readData['promote_end_date']),
				"is_shipping" => $readData['is_shipping'],
				"img" => array(
					'thumb'=>API_DATA('PHOTO', $readData['goods_img']),
					'url' => API_DATA('PHOTO', $readData['original_img']),
					'small'=>API_DATA('PHOTO', $readData['goods_thumb'])
				 ),
				"goods_brand" => !empty($readData['goods_brand'])?$readData['goods_brand']:'',
				"rank_prices" => array(),
				"pictures" => array(),
				"properties" => array(),
				"specification" => array()
			);
			foreach ($readData['rank_prices'] as $key => $value) {
				$outData['rank_prices'][] = array(
					"id"   =>  $key,
					"rank_name" => $value['rank_name'],
					"price" => $value['price']
				);

                if($key==1){
                    $outData['register_price'] =  $value['price'];
                }
                else if($key==2){
                    $outData['vip_price'] =  $value['price'];
                }

			}

			foreach ($readData['pictures'] as $key => $value) {
				$outData['pictures'][] = array(
					"small"=>API_DATA('PHOTO', $value['thumb_url']),
					"thumb"=>API_DATA('PHOTO', $value['thumb_url']),
					"url"=>API_DATA('PHOTO', $value['img_url'])
				);
			}

            if (!empty($readData['properties'])) {
                // $readData['properties'] = current($readData['properties']);
    			foreach ($readData['properties'] as $key => $value) {
                    // 处理分组
                    foreach ($value as $k => $v) {
                        $v['value'] = strip_tags($v['value']);
        				$outData['properties'][] = $v;
                    }
    			}
            }

			foreach ($readData['specification'] as $key => $value) {
				if (!empty($value['values'])) {
					$value['value'] = $value['values'];
					unset($value['values']);	
				}
				$outData['specification'][] = $value;
			}
			break;
        default:
            break;
    }
    return $outData;
}

function app_url() {
    /* 协议 */
    $protocol = (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) != 'off')) ? 'https://' : 'http://';
    /* 域名或IP地址 */
    if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
    {
        $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
    }
    elseif (isset($_SERVER['HTTP_HOST']))
    {
        $host = $_SERVER['HTTP_HOST'];
    }
    else
    {
        /* 端口 */
        if (isset($_SERVER['SERVER_PORT']))
        {
            $port = ':' . $_SERVER['SERVER_PORT'];

            if ((':80' == $port && 'http://' == $protocol) || (':443' == $port && 'https://' == $protocol))
            {
                $port = '';
            }
        }
        else
        {
            $port = '';
        }

        if (isset($_SERVER['SERVER_NAME']))
        {
            $host = $_SERVER['SERVER_NAME'] . $port;
        }
        elseif (isset($_SERVER['SERVER_ADDR']))
        {
            $host = $_SERVER['SERVER_ADDR'] . $port;
        }
    }

    return $protocol . $host . dirname(PHP_SELF);
}

function getShopPosition(){
    /*------------------------------------------------------*/
//地图经纬度调用
    /*-------------------------------------------------------*/
    $sql = "select id,map_api_x,map_api_y,shop_name,shop_logo,shop_title,notice from ecs_seller_shopinfo where map_api_x!='' and map_api_y!=''";
    $data = $GLOBALS['db']->getAll($sql);
    foreach ($data as $key => $value) {
        $array[]=array(
            'map_api_x'=>$value['map_api_x'],
            'map_api_y'=>$value['map_api_y'],'shop_name'=>$value['shop_name'],'shop_logo'=>getImage($value['shop_logo']),
            'shop_title'=>$value['shop_title'],'notice'=>$value['notice'],'seller_id'=>$value['id']);
    }

    return $array;
}



/**
 * 获得分类的信息
 *
 * @param   integer $cat_id
 *
 * @return  void
 */
function GZ_get_cat_info($cat_id)
{
    return $GLOBALS['db']->getRow('SELECT cat_name, keywords, cat_desc, style, grade, filter_attr, parent_id FROM ' . $GLOBALS['ecs']->table('category') .
        " WHERE cat_id = '$cat_id'");
}

function GZ_get_category_search($cat_id,$brand,$price_min,$price_max,$filter_attr){
    $cat =  GZ_get_cat_info($cat_id);
    $children = get_children($cat_id);

    /* 赋值固定内容 */
    if ($brand > 0)
    {
        $sql = "SELECT brand_name FROM " .$GLOBALS['ecs']->table('brand'). " WHERE brand_id = '$brand'";
        $brand_name = $GLOBALS['db']->getOne($sql);
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

    if ($cat['grade'] > 1)
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

        $sql = "SELECT min(g.shop_price) AS min, max(g.shop_price) as max ".
            " FROM " . $GLOBALS['ecs']->table('goods'). " AS g ".
            " WHERE ($children OR " . get_extension_goods($children) . ') AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1  ';
        //获得当前分类下商品价格的最大值、最小值
        $row = $GLOBALS['db']->getRow($sql);

        // 取得价格分级最小单位级数，比如，千元商品最小以100为级数
        $price_grade = 0.0001;
        for($i=-2; $i<= log10($row['max']); $i++)
        {
            $price_grade *= 10;
        }

        //跨度
        $dx = ceil(($row['max'] - $row['min']) / ($cat['grade']) / $price_grade) * $price_grade;
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
            " FROM " . $GLOBALS['ecs']->table('goods') . " AS g ".
            " WHERE ($children OR " . get_extension_goods($children) . ') AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 '.
            " GROUP BY sn ";

        $price_grade = $GLOBALS['db']->getAll($sql);

        foreach ($price_grade as $key=>$val)
        {
            $temp_key = $key + 1;
            $price_grade[$temp_key]['goods_num'] = $val['goods_num'];
            $price_grade[$temp_key]['start'] = $row['min'] + round($dx * $val['sn']);
            $price_grade[$temp_key]['end'] = $row['min'] + round($dx * ($val['sn'] + 1));
            $price_grade[$temp_key]['price_range'] = $price_grade[$temp_key]['start'] . '-' . $price_grade[$temp_key]['end'];
//            $price_grade[$temp_key]['formated_start'] = price_format($price_grade[$temp_key]['start']);
//            $price_grade[$temp_key]['formated_end'] = price_format($price_grade[$temp_key]['end']);
//            $price_grade[$temp_key]['url'] = build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand,
//                'price_min'=>$price_grade[$temp_key]['start'], 'price_max'=> $price_grade[$temp_key]['end'], 'filter_attr'=>$filter_attr), $cat['cat_name']);

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
        $price_grade[0]['price_range'] = $GLOBALS['_CFG']['all_attribute'];
//        $price_grade[0]['url'] = build_uri('category', array('cid'=>$cat_id, 'bid'=>$brand, 'price_min'=>0, 'price_max'=> 0, 'filter_attr'=>$filter_attr), $cat['cat_name']);
        $price_grade[0]['selected'] = empty($price_max) ? 1 : 0;

//        $smarty->assign('price_grade',     $price_grade);
    }

    /* 品牌筛选 */

    $sql = "SELECT b.brand_id, b.brand_name, COUNT(*) AS goods_num ".
        "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
        $GLOBALS['ecs']->table('goods') . " AS g LEFT JOIN ". $GLOBALS['ecs']->table('goods_cat') . " AS gc ON g.goods_id = gc.goods_id " .
        "WHERE g.brand_id = b.brand_id AND ($children OR " . 'gc.cat_id ' . db_create_in(array_unique(array_merge(array($cat_id), array_keys(cat_list($cat_id, 0, false))))) . ") AND b.is_show = 1 " .
        " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0 ".
        "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY b.sort_order, b.brand_id ASC";

    $brands = $GLOBALS['db']->getAll($sql);

    foreach ($brands AS $key => $val)
    {
        $temp_key = $key + 1;
        $brands[$temp_key]['brand_name'] = $val['brand_name'];
        $brands[$temp_key]['brand_id'] = $val['brand_id'];    //by Leah
        $brands[$temp_key]['goods_num'] = $val['goods_num'];  //by Leah
//        $brands[$temp_key]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => $val['brand_id'], 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr), $cat['cat_name']);

        /* 判断品牌是否被选中 */
        if ($brand == $brands[$key]['brand_id'])
        {
            $brands[$temp_key]['selected'] = 1;
        }
        else
        {
            $brands[$temp_key]['selected'] = 0;
        }
    }
    $brands[0]['brand_id'] = 0;  //by Leah
    $brands[0]['brand_name'] = $GLOBALS['_LANG']['all_attribute'];
//    $brands[0]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => 0, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr), $cat['cat_name']);
    $brands[0]['selected'] = empty($brand) ? 1 : 0;

    /* 属性筛选 */
    $ext = ''; //商品查询条件扩展
    if ($cat['filter_attr'] > 0) {
        $cat_filter_attr = explode(',', $cat['filter_attr']);       //提取出此分类的筛选属性
        $all_attr_list = array();

        foreach ($cat_filter_attr AS $key => $value) {
            $sql = "SELECT a.attr_name FROM " . $GLOBALS['ecs']->table('attribute') .
                " AS a, " . $GLOBALS['ecs']->table('goods_attr') .
                " AS ga, " . $GLOBALS['ecs']->table('goods') . " AS g WHERE ($children OR " .
                get_extension_goods($children) . ") AND a.attr_id = ga.attr_id AND g.goods_id = ga.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND a.attr_id='$value'";

            if ($temp_name = $GLOBALS['db']->getOne($sql)) {
                $all_attr_list[$key]['filter_attr_name'] = $temp_name;
                $sql = "SELECT a.attr_id, MIN(a.goods_attr_id ) AS goods_id, a.attr_value AS attr_value FROM " . $GLOBALS['ecs']->table('goods_attr') . " AS a, " . $GLOBALS['ecs']->table('goods') .
                    " AS g" .
                    " WHERE ($children OR " . get_extension_goods($children) . ') AND g.goods_id = a.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1 AND g.is_alone_sale = 1 ' .
                    " AND a.attr_id='$value' " .
                    " GROUP BY a.attr_value";

                $attr_list = $GLOBALS['db']->getAll($sql);

                $temp_arrt_url_arr = array();

                for ($i = 0; $i < count($cat_filter_attr); $i++)        //获取当前url中已选择属性的值，并保留在数组中
                {
                    $temp_arrt_url_arr[$i] = !empty($filter_attr[$i]) ? $filter_attr[$i] : 0;
                }

                $temp_arrt_url_arr[$key] = 0;                           //“全部”的信息生成
                $temp_arrt_url = implode('.', $temp_arrt_url_arr);
                $all_attr_list[$key]['attr_list'][0]['attr_value'] = $GLOBALS['_LANG']['all_attribute'];
//                $all_attr_list[$key]['attr_list'][0]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => $brand,
//                    'price_min' => $price_min, 'price_max' => $price_max, 'filter_attr' => $temp_arrt_url), $cat['cat_name']);
                $all_attr_list[$key]['attr_list'][0]['selected'] = empty($filter_attr[$key]) ? 1 : 0;
                $all_attr_list[$key]['attr_list'][0]['goods_attr_id'] = 0;

                foreach ($attr_list as $k => $v) {
                    $temp_key = $k + 1;
                    $temp_arrt_url_arr[$key] = $v['goods_id'];       //为url中代表当前筛选属性的位置变量赋值,并生成以‘.’分隔的筛选属性字符串
                    $temp_arrt_url = implode('.', $temp_arrt_url_arr);

                    $all_attr_list[$key]['attr_list'][$temp_key]['attr_value'] = $v['attr_value'];
                    $all_attr_list[$key]['attr_list'][$temp_key]['goods_attr_id'] = $v['goods_id'];
//                    $all_attr_list[$key]['attr_list'][$temp_key]['url'] = build_uri('category', array('cid' => $cat_id,
//                        'bid' => $brand, 'price_min' => $price_min, 'price_max' => $price_max, 'filter_attr' => $temp_arrt_url), $cat['cat_name']);

                    if (!empty($filter_attr[$key]) AND $filter_attr[$key] == $v['goods_id']) {
                        $all_attr_list[$key]['attr_list'][$temp_key]['selected'] = 1;
                    } else {
                        $all_attr_list[$key]['attr_list'][$temp_key]['selected'] = 0;
                    }
                }
            }

        }
    }

    return array('brands'=>$brands,'price'=>$price_grade,'ext_attrs'=>$all_attr_list);
}

//获得店铺街店铺
function GZ_get_street_stores($cate_id=0,$page=1,$size=15)
{
    if($cate_id)
    {
        $sql="select id from ".$GLOBALS['ecs']->table('store_category')." where id='$cate_id'";
        $cate_id=$GLOBALS['db']->getOne($sql);
        if($cate_id)
        {
            $where=" and sh.street_cate='$cate_id' ";
        }
    }
    /* 获得符合条件的店铺总数 */
    $sql="select count(sh.id) from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh left join ".$GLOBALS['ecs']->table('store_category')." as c on sh.street_cate=c.id left join ".$GLOBALS['ecs']->table('street_tags')." as st on sh.street_tags=st.id where sh.status=1 and sh.apply=1 and sh.is_street=1 and c.is_show=1 ".$where;
    $count = $GLOBALS['db']->getOne($sql);

    $max_page = ($count> 0) ? ceil($count / $size) : 1;

    if ($page > $max_page)
    {
        $page = $max_page;
    }

    $sql="select sh.id,sh.seller_id,sh.shop_name,sh.street_logo,sh.street_spjpg,sh.shop_title,st.tag_name from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh left join ".$GLOBALS['ecs']->table('store_category')." as c on sh.street_cate=c.id left join ".$GLOBALS['ecs']->table('street_tags')." as st on sh.street_tags=st.id where sh.status=1 and sh.apply=1 and sh.is_street=1 and c.is_show=1 ".$where." order by sh.street_order desc";

    $res = $GLOBALS['db']->SelectLimit($sql, $size, ($page-1) * $size);
    $arr = array();
    while ($row = $GLOBALS['db']->FetchRow($res))
    {
        $arr[$row['id']]['id']=$row['seller_id'];
        $arr[$row['id']]['seller_id']=$row['seller_id'];
        $arr[$row['id']]['shop_name']=$row['shop_name'];
        $arr[$row['id']]['street_logo']=str_replace('../','./',$row['street_logo']);
        $arr[$row['id']]['street_spjpg']=str_replace('../','./',$row['street_spjpg']);
        $arr[$row['id']]['shop_title']=$row['shop_title'];
        $arr[$row['id']]['tag_name']=$row['tag_name'];
    }

    $pager['search'] = array('cat'   => $cate_id);

    $pager = get_pager('store_street.php', $pager['search'], $count, $page, $size);

    $street_stores=array('pager'=>$pager,'result'=>$arr);

    return $street_stores;
}