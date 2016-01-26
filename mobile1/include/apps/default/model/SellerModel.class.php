<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：SellerModel.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTOUCH 品牌模型
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class SellerModel extends BaseModel {

    /**
     * 店铺街列表
     * @param type $size
     * @param type $page
     * @return type
     */
    function get_Seller($size, $page) {
        //根据用户所在地获取该地区范围的商家
        $SellerIdArray = session('SellerIdArray');
        if(count($SellerIdArray) > 0){
            $count = count($SellerIdArray);
            $start = ($page - 1) * $size;
            $end  = $size*$page;
            
            if($count >= $end){
                // 地区店铺满足查询条件
                $start = ($page - 1) * $size;
                $sql = "select * from " . $this->pre . "seller_shopinfo WHERE 1 and ".db_create_in($SellerIdArray,' seller_id ')."    LIMIT $start , $size";
            }elseif ($count > $start  && $count <= $end){
                // 地区店铺满足部分条件
                $sql = "select * from " . $this->pre . "seller_shopinfo WHERE 1 and ".db_create_in($SellerIdArray,' seller_id ')."    LIMIT $start , $size";
                $res1 = $this->query($sql);
                $size  = $end - $count;
                $sql = "select * from " . $this->pre . "seller_shopinfo WHERE 1 and ".db_create_in($SellerIdArray,' seller_id NOT ')."    LIMIT 0 , $size";
            }elseif ($count <= $start ){
                // 地区店铺完全不满足条件
                $start  = $start - $count;
                $sql = "select * from " . $this->pre . "seller_shopinfo WHERE 1 and ".db_create_in($SellerIdArray,' seller_id NOT ')."    LIMIT $start , $size";
            }
        }else {
            $start = ($page - 1) * $size;
            $sql = "select * from " . $this->pre . "seller_shopinfo WHERE 1  LIMIT $start , $size";
        }
        $res = $this->query($sql);
        $arr = array();
        $key = 0;
        if($res1){
            foreach ($res1 as $row) {
                $arr[$key]['id'] = $row['id'];
                $arr[$key]['img_url'] = model('Seller')->get_store_slide_info($row['seller_id']);
                $arr[$key]['seller_id'] = $row['seller_id'];
                $arr[$key]['store_name'] = model('Seller')->get_seller_store_name($row['seller_id']);
                $arr[$key]['url'] = build_uri('Sellerstore/index', array('sid' => $row['id']));
                $key++;
            }
        }
        foreach ($res as $row) {
            $arr[$key]['id'] = $row['id'];
            $arr[$key]['img_url'] = model('Seller')->get_store_slide_info($row['seller_id']);
            $arr[$key]['seller_id'] = $row['seller_id'];
            $arr[$key]['store_name'] = model('Seller')->get_seller_store_name($row['seller_id']);
            $arr[$key]['url'] = build_uri('Sellerstore/index', array('sid' => $row['id']));
            $key++;
        }
        return $arr;
    }

    //获得店铺信息
    function get_seller_store($id) {
        $sql = "select * from " . $this->pre . "seller_shopinfo where id='$id'";
        $store = $this->row($sql);
        if ($store) {
            $sql = 'SELECT region_name FROM ' . $this->pre . "region WHERE region_id in(" . $store['province'] . "," . $store['city'] . ") order by region_id ASC";

            $res = $this->query($sql);
            $arr = array();
            foreach ($res as $key => $value) {
                $arr[] = $value['region_name'];
            }
            $store['address'] = $address[0] . $address[1];
        }
        return $store;
    }

    //获得店铺幻灯片
    function get_store_slide($seller_id) {
        $sql = "select * from " . $this->pre . "seller_shopslide where seller_id='$seller_id' order by img_order ASC";
        $slide = $this->query($sql);
        return $slide;
    }

    //获取店铺橱窗和橱窗对应的商品
    function get_store_window($seller_id) {
        $sql = "select * from " . $this->pre . "seller_shopwindow where seller_id='$seller_id' order by win_order ASC";
        $window = $this->query($sql);
        foreach ($window as $key => $win) {
            if ($win['win_type'] == 0 && !empty($win['win_goods'])) {
                $sql = "select goods_id,goods_sn,goods_name,goods_name_style,goods_thumb,market_price,shop_price,promote_price,is_promote,promote_start_date,promote_end_date from " . $this->pre . "goods where is_display=1 and seller_id='$seller_id' and goods_id in(" . $win['win_goods'] . ") order by sort_order ASC";
                $goods_list = $this->query($sql);
                foreach ($goods_list as $key2 => $val) {
                    $goods_list[$key2]['is_promote'] = $val['is_promote'] ? (($val['promote_start_date'] <= gmtime()) && (gmtime() <= $val['promote_end_date']) ? 1 : 0) : 0;
                    $goods_list[$key2]['goods_thumb'] = '../' . $val['goods_thumb'];
                }
                $window[$key]['goods_list'] = $goods_list;
            }
        }
        return $window;
    }

    //获得店铺导航栏
    function get_store_nav($seller_id) {
        $sql = "select * from " . $this->pre . "seller_nav where seller_id='$seller_id' order by nav_order ASC";
        $nav = $this->query($sql);
        foreach ($nav as $key => $val) {
            $nav[$key]['nav_img'] = get_banner_path($val['nav_img']);
        }

        return $nav;
    }

//获得店铺的分类
    function get_store_cat($cat_id, $seller_id, $store_id) {
        $child_arr = array();
        $sql = 'SELECT count(*) as count FROM ' . $this->pre . "seller_category WHERE parent_id = '$cat_id' AND is_show = 1 and seller_id='$seller_id'";
        $result = $this->row($sql);

        if ($result['count'] || $cat_id == 0) {
            $child_sql = 'SELECT seller_cat_id, cat_name, parent_id, is_show,is_text ' .
                    'FROM ' . $this->pre .
                    "seller_category WHERE parent_id = '$cat_id' AND is_show = 1 and seller_id='$seller_id' ORDER BY sort_order ASC, seller_cat_id ASC";
            $res = $this->query($child_sql);
            foreach ($res AS $row) {
                if ($row['is_show']) {
                    $child_arr[$row['seller_cat_id']]['id'] = $row['seller_cat_id'];
                    $child_arr[$row['seller_cat_id']]['name'] = $row['cat_name'];
                    $child_arr[$row['seller_cat_id']]['is_text'] = $row['is_text'];
                    $child_arr[$row['seller_cat_id']]['url'] = build_uri('seller_goods', array('cid' => $row['seller_cat_id'], 'sid' => $store_id), $row['cat_name']);

                    if (isset($row['seller_cat_id']) != NULL) {
                        $child_arr[$row['seller_cat_id']]['child_cat'] = model('Seller')->get_store_cat($row['seller_cat_id'], $seller_id, $store_id);
                    }
                }
            }
        }

        return $child_arr;
    }

    /**
     * 调用入驻商店铺当前分类的销售排行榜
     *
     * @access  public
     * @param   string  $cats   查询的分类
     * @param   int  $seller_id   入驻商ID
     * @return  array
     */
    function get_seller_top10($seller_id = 0, $cats = '', $top_time = '', $top_number = 10) {

        $where = !empty($cats) ? " AND g.seller_cat_id= '$cats' " : '';

        /* 排行统计的时间 */
        switch ($top_time) {
            case 1: // 一年
                $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 365 * 86400) . "'";
                break;
            case 2: // 半年
                $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 180 * 86400) . "'";
                break;
            case 3: // 三个月
                $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 90 * 86400) . "'";
                break;
            case 4: // 一个月
                $top10_time = "AND o.order_sn >= '" . date('Ymd', gmtime() - 30 * 86400) . "'";
                break;
            default:
                $top10_time = '';
        }

        $sql = 'SELECT g.goods_id, g.goods_name,g.market_price, g.promote_price, g.shop_price, g.goods_thumb, SUM(og.goods_number) as goods_number ' .
                'FROM ' . $this->pre . 'goods AS g, ' .
                $this->pre . 'order_info AS o, ' .
                $this->pre . 'order_goods AS og ' .
                "WHERE g.is_on_sale = 1 and g.is_display=1 and g.seller_id='$seller_id' AND g.is_delete = 0 $where $top10_time ";
        //判断是否启用库存，库存数量是否大于0
        if (C('use_storage') == 1) {
            $sql .= " AND g.goods_number > 0 ";
        }
        $sql .= ' AND og.order_id = o.order_id AND og.goods_id = g.goods_id ' .
                "AND (o.order_status = '" . OS_CONFIRMED . "' OR o.order_status = '" . OS_SPLITED . "') " .
                "AND (o.pay_status = '" . PS_PAYED . "' OR o.pay_status = '" . PS_PAYING . "') " .
                "AND (o.shipping_status = '" . SS_SHIPPED . "' OR o.shipping_status = '" . SS_RECEIVED . "') " .
                'GROUP BY g.goods_id ORDER BY goods_number DESC, g.goods_id DESC LIMIT ' . $top_number;

        $arr = $this->query($sql);

        for ($i = 0, $count = count($arr); $i < $count; $i++) {
            $arr[$i]['short_name'] = C('goods_name_length') > 0 ? sub_str($arr[$i]['goods_name'], C('goods_name_length')) : $arr[$i]['goods_name'];
            $arr[$i]['url'] = build_uri('goods', array('gid' => $arr[$i]['goods_id']), $arr[$i]['goods_name']);
            $arr[$i]['thumb'] = get_image_path($arr[$i]['goods_id'], $arr[$i]['goods_thumb'], true);
            if ($arr[$i]['promote_price'] > 0) {
                $arr[$i]['price'] = price_format($arr[$i]['promote_price']);
            } else {
                $arr[$i]['price'] = price_format($arr[$i]['shop_price']);
            }

            $arr[$i]['market_price'] = price_format($arr[$i]['market_price']);
        }

        return $arr;
    }

    /**
     * 获得店铺指定分类的所有商品ID
     *
     * @access  public
     * @param   string $cat_id     分类查询字符串
     * @return  string
     */
    function get_seller_cat_goods($cat_id) {
        $extension_goods_array = '';
        $sql = 'SELECT goods_id FROM ' . $this->pre . "goods AS g WHERE g.seller_cat_id='$cat_id'";
        $res = $this->query($sql);
        $extension_goods_array = array();
        foreach ($res as $key => $value) {
            $extension_goods_array[] = $value['goods_id'];
        }
        return db_create_in($extension_goods_array, 'g.goods_id');
    }

    /**
     * 获得店铺名称
     * @param type $id
     * @return type
     */
    function get_seller_store_name($id) {
        $sql = "select shop_name from " . $this->pre . "seller_shopinfo where seller_id='$id'";
        $store = $this->row($sql);
        return $store['shop_name'];
    }

    //获得店铺幻灯片
    function get_store_slide_info($seller_id) {
        $sql = "select * from " . $this->pre . "seller_shopslide where seller_id='$seller_id' order by seller_id ASC";
        $slide = $this->row($sql);
        return $slide['img_url'];
    }

}
