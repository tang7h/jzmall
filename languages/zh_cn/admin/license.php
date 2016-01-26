<?php

/**
 * ECSHOP 授权证书管理语言文件
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: testyang $
 * $Id: agency.php 15013 2008-10-23 09:31:42Z testyang $
 */

/* 菜单 */
$_LANG['upload_license'] = '上传证书';
$_LANG['download_license'] = '下载证书';
$_LANG['back'] = '返回';

/* 列表页 */
$_LANG['license_here'] = 'license证书';
$_LANG['delete'] = '重新获取证书';
/* 标签 */
$_LANG['label_certificate_download'] = 'ECshop证书下载备份';
$_LANG['label_license_key'] = '授权码：';
$_LANG['label_certificate_reset'] = 'ECshop证书上传恢复';
$_LANG['label_delete_license'] = '错误证书删除';
$_LANG['label_select_license'] = '选择上传证书：';

/* 系统提示 */
$_LANG['license_notice'] = 'ECShop证书（License）是您享受ECShop软件服务的唯一标识，它记录了您的网店的授权信息、购买官方服务记录、短信帐户等重要信息。您需要通过“证书下载备份”功能备份证书，并妥善保管。在您商店系统首次安装或者重新安装时，ECShop软件会自动从ShopEx服务中心获取License证书（前提是您所安装软件的网络环境是正常的情况下），无需手动操作。';
$_LANG['delete_license'] = "证书已经重新获取";
$_LANG['fail_delete_license'] = "证书获取失败";
$_LANG['fail_license'] = "证书内容不全。请先确定证书是否正确然后重新上传！";
$_LANG['recover_license'] = "证书恢复成功。";
$_LANG['no_license_down'] = "失败。暂无证书可下载！";
$_LANG['fail_license_login'] = "证书登录失败。上传证书不正确！";
$_LANG['commercial_license'] = "<font color=\"red\">您目前是&nbsp&nbsp 商业授权用户</font>";
$_LANG['commonly_license'] = "<font color=\"red\">您目前是&nbsp&nbsp 非商业授权用户</font>";
$_LANG['if_fail_license'] = "当您发现证书号有问题时，可重新获取，点击";

/* JS提示 */
$_LANG['js_languages']['del_confirm'] = '确认重新获取证书吗？';


/* 授权激活 */
$_LANG['label_certificate_activation'] = 'ECshop授权激活';
$_LANG['activation_license'] = '激活';

$_LANG['site_url'] = '您当前域名';
$_LANG['activation_code'] = '激活码';
$_LANG['activation_code_remind'] = '请正确输入激活码，获取软件商业授权。<font color="red">强烈建议绑定正式域名后激活授权，一旦激活成功就无法修改 </font>';
$_LANG['no_activation_code'] = '您未输入激活码';
$_LANG['no_certificate'] = '您没有授权证书号，请先点获取证书';
$_LANG['no_certi'] = '无激活地址';
$_LANG['activation_succ'] = '授权激活成功';


$_LANG['now_activation'] = '您是否确认要激活？';

$_LANG['activation_error0'] = '登录失败，请先重新获取证书';
$_LANG['activation_error1'] = '签名错误';
$_LANG['activation_error2'] = '激活失败次数过多';
$_LANG['activation_error3'] = '激活码无效';
$_LANG['activation_error4'] = '激活码已失效';
$_LANG['activation_error5'] = '证书信息不存在';
$_LANG['activation_error6'] = '大于最大有效期限制';
$_LANG['activation_error7'] = '激活失败';
$_LANG['activation_error8'] = '您激活失败';


?>