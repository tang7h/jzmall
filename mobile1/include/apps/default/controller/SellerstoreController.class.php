<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：SellerstoreController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：商家店铺控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class SellerstoreController extends CommonController {

    private $brand = 0;
    private $size = 10;
    private $page = 1;
    private $sort = 'last_update';
    private $order = 'ASC';

    // 构造函数
    public function __construct() {
        parent::__construct();

        $this->action = ACTION_NAME;
        /* 如果是显示页面，对页面进行相应赋值 */
        assign_template();
        $this->assign('action', $this->action);
    }

    /**
     * 所有店铺街
     */
    public function all() {
        $this->parameter();
        $this->assign('brand_id', $this->brand);
        $this->assign('page', $this->page);
        $this->assign('size', $this->size);
        $this->assign('sort', $this->sort);
        $this->assign('order', $this->order);
        $list = model('Seller')->get_Seller(10, 1);
        $this->display('seller.dwt');
    }

    /* ------------------------------------------------------ */

    // -- 所有店铺街 - 异步加载
    /* ------------------------------------------------------ */
    public function asynclist() {
        // 开始工作
        $this->parameter();
        $asyn_last = intval(I('post.last')) + 1;
        $this->size =I('post.amount');
        $this->page = ($asyn_last > 0) ? ceil($asyn_last / $this->size) : 1;
        $list = model('Seller')->get_Seller($this->size, $this->page);
        foreach ($list as $key => $value) {
            $this->assign('seller', $value);
            $sayList [] = array(
                'single_item' => ECTouch::view()->fetch('library/asynclist_info.lbi')
            );
        }
        die(json_encode($sayList));
        exit();
    }

    /**
     *  店铺
     */
    public function index() {
        $store_id = intval(I('get.sid'));
        $store = model('Seller')->get_seller_store($store_id);
        if (!$store) {
            /* 如果店铺不存在，则返回首页 */
            ecs_header("Location: ./\n");
            exit;
        } elseif (!$store['status']) {
            show_message(L('此店铺正在核查中'));
        }
        $this->assign('store', $store); //店铺信息
        $this->assign('store_slide', model('Seller')->get_store_slide($store['seller_id']));  //获得店铺幻灯片
        $this->assign('store_windows', model('Seller')->get_store_window($store['seller_id'])); //获取店铺橱窗和橱窗对应的商品
        $this->assign('store_nav', model('Seller')->get_store_nav($store['seller_id']));   //获得店铺导航栏
        $this->assign('store_cate', model('Seller')->get_store_cat(0, $store['seller_id'], $store_id)); //获得店铺的分类
        //店铺热销排行
        $top_goods = model('Seller')->get_seller_top10($store['seller_id']);

        $this->assign('top_goods', $top_goods);
        $this->display('seller_store.dwt');
    }

    /**
     * 处理参数便于搜索商品信息
     */
    public function parameter() {
        // 初始化分页信息
        $page_size = C('page_size');
        $brand = I('request.brand');
        $this->size = intval($page_size) > 0 ? intval($page_size) : 10;
        $this->brand = $brand > 0 ? $brand : 0;
        /* 排序、显示方式以及类型 */
        $default_display_type = C('show_order_type') == '0' ? 'list' : (C('show_order_type') == '1' ? 'grid' : 'album');
        $default_sort_order_method = C('sort_order_method') == '0' ? 'DESC' : 'ASC';
        $default_sort_order_type = C('sort_order_type') == '0' ? 'goods_id' : (C('sort_order_type') == '1' ? 'shop_price' : 'last_update');

        $this->sort = (isset($_REQUEST['sort']) && in_array(trim(strtolower($_REQUEST['sort'])), array(
                    'goods_id',
                    'shop_price',
                    'last_update',
                    'click_count',
                    'sales_volume'
                ))) ? trim($_REQUEST['sort']) : $default_sort_order_type; // 增加按人气、按销量排序 by wang
        $this->order = (isset($_REQUEST['order']) && in_array(trim(strtoupper($_REQUEST['order'])), array(
                    'ASC',
                    'DESC'
                ))) ? trim($_REQUEST['order']) : $default_sort_order_method;
        $display = (isset($_REQUEST['display']) && in_array(trim(strtolower($_REQUEST['display'])), array(
                    'list',
                    'grid',
                    'album'
                ))) ? trim($_REQUEST['display']) : (isset($_COOKIE['ECS']['display']) ? $_COOKIE['ECS']['display'] : $default_display_type);
        $display = in_array($display, array(
                    'list',
                    'grid',
                    'album'
                )) ? $display : 'album';
        setcookie('ECS[display]', $display, gmtime() + 86400 * 7);
    }

}