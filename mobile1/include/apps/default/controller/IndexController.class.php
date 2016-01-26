<?php

/**
 * ECTouch Open Source Project
 * ============================================================================
 * Copyright (c) 2012-2014 http://ectouch.cn All rights reserved.
 * ----------------------------------------------------------------------------
 * 文件名称：IndexController.class.php
 * ----------------------------------------------------------------------------
 * 功能描述：ECTouch首页控制器
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.ectouch.cn/docs/license.txt )
 * ----------------------------------------------------------------------------
 */
/* 访问控制 */
defined('IN_ECTOUCH') or die('Deny Access');

class IndexController extends CommonController {

    /**
     * 首页信息
     */
    public function index() {
        // 自定义导航栏
        $navigator = model('Common')->get_navigator();
        $this->assign('navigator', $navigator['middle']);
        $this->assign('best_goods', model('Index')->goods_list('best', C('page_size')));
        $this->assign('new_goods', model('Index')->goods_list('new', C('page_size')));
        $this->assign('hot_goods', model('Index')->goods_list('hot', C('page_size')));
        //首页推荐分类
        $cat_rec = model('Common')->get_recommend_res();
        $this->assign('cat_rec', $cat_rec[1]);
        $this->display('index.dwt');
    }

    /**
     * ajax获取商品
     */
    public function ajax_goods() {
        if (IS_AJAX) {
            $type = I('get.type');
            $start = $_POST['last'];
            $limit = $_POST['amount'];
            $hot_goods = model('Index')->goods_list($type, $limit, $start);
            $list = array();
            // 热卖商品
            if ($hot_goods) {
                foreach ($hot_goods as $key => $value) {
                    $this->assign('hot_goods', $value);
                    $list [] = array(
                        'single_item' => ECTouch::view()->fetch('library/asynclist_index.lbi')
                    );
                }
            }
            echo json_encode($list);
            exit();
        } else {
            $this->redirect(url('index'));
        }
    }
    
    function fixed(){
        $Latitude = I('get.Latitude');
        $Longitude = I('get.Longitude');
        if ($Latitude && $Longitude){
            get_location($Longitude,$Latitude);
        }else{
            $address = array();
            $address['province'] = '北京市';
            $address['city'] = '北京市';
            $address['district'] = '东城区';
            default_location($address);
        }
    }
    
    public function location(){
        if (IS_POST){
            $address['province']   =   I('post.province');
            $address['city']       =   I('post.city');
            $address['district']   = I('post.district');
            if ($address['province'] && $address['city'] && $address['district']){
                $address['province']   =  model('RegionBase')->get_region_name($address['province']);
                $address['city'] =  model('RegionBase')->get_region_name($address['city']);
                $address['district'] =  model('RegionBase')->get_region_name($address['district']);
                default_location($address);
                $this->redirect(url('index'));
            }else {
                show_message('地址信息不全');
            }
        }else {
            $province_list = model('RegionBase')->get_regions(1, 1);
            $city_list = model('RegionBase')->get_regions(2);
            $district_list = model('RegionBase')->get_regions(3);
    
            $this->assign('province_list', $province_list);
            $this->assign('city_list', $city_list);
            $this->assign('district_list', $district_list);
            if ($_SESSION['address']){
                $this->assign('address',$_SESSION['address']);
            }else {
                $address = array();
                $address['province'] = '北京市';
                $address['city'] = '北京市';
                $address['district'] = '东城区';
                $this->assign('address',$address);
            }
            $this->assign('title','定位');
            $this->display('location.dwt');
        } 
    }

}
