<?php

/**
 * ECSHOP 微信支付插件语言文件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: tenpay.php 17217 2011-01-19 06:29:08Z liubo $
 */

global $_LANG;
/*
    * APPID：绑定支付的APPID（必须配置，开户邮件中可查看）
    *
    * MCHID：商户号（必须配置，开户邮件中可查看）
    *
    * KEY：商户支付密钥，参考开户邮件设置（必须配置，登录商户平台自行设置）
    * 设置地址：https://pay.weixin.qq.com/index.php/account/api_cert
    *
    * APPSECRET：公众帐号secert（仅JSAPI支付的时候需要配置， 登录公众平台，进入开发者中心可设置），
    */
$_LANG['weixin']            = '<font color="#FF0000">微信</font>';
$_LANG['weixin_desc']       = '<b>微信</b>';
$_LANG['weixin_appid']    = '绑定支付的APPID';
$_LANG['weixin_mchid']        = '商户号';
$_LANG['weixin_key']      = '商户支付密钥';
$_LANG['weixin_appsecret']      = '公众帐号secert';
$_LANG['weixin_button']        = '立即使用微信支付';
$_LANG['weixin_account_voucher']   = '会员帐户充值';
$_LANG['weixin_shop_order_sn']     = '商城订单号';
$_LANG['weixin_register']     = "";


?>