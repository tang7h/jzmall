<?php

/**
 * ECSHOP 程序说明
 * ===========================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ==========================================================
 * $Author: wangleisvn $
 * $Id: flashplay.php 16131 2009-05-31 08:21:41Z wangleisvn $
 */

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
if(empty($_REQUEST['act']))
{
	$_REQUEST['act']='list_edit';
}

/*------------------------------------------------------ */
//-- 证书编辑页
/*------------------------------------------------------ */
if ($_REQUEST['act']== 'list_edit')
{
    /* 检查权限 */
   // admin_priv('shop_authorized');
    include_once(ROOT_PATH . 'includes/lib_license.php');

    $license = get_shop_license();

    $smarty->assign('ur_here', $_LANG['license_here']);
    $smarty->assign('is_download', '0');
    if ($license['certificate_id'] != '' && $license['token'] != '')
    {
        $smarty->assign('is_download', '1');
    }

	$smarty->assign('site_url', $ecs->url());
    $smarty->assign('certificate_id', $license['certificate_id']);
    $smarty->assign('token', $license['token']);

    $cert_license = license_check();
    $smarty->assign('cert_license', $cert_license); 
	if($cert_license['flag']=='login_succ' && $cert_license['request']['res']=='succ' &&  $cert_license['request']['info']['service']['ecshop_b2c']['cert_auth']['service_time']['etime']>0)
    {
    	$_SESSION['cert_login']='succ';
     	$_SESSION['etime']=$cert_license['request']['info']['service']['ecshop_b2c']['cert_auth']['service_time']['etime'];    	   	
    }
    else
    {
     	$_SESSION['count_fail']++;   	
    } 




    $smarty->display('license.htm');
}

/*------------------------------------------------------ */
//-- 证书下载
/*------------------------------------------------------ */

elseif ($_REQUEST['act']== 'download')
{
    /* 检查权限 */
    //admin_priv('shop_authorized');

    include_once(ROOT_PATH . 'includes/lib_license.php');

    $license = get_shop_license();

    if ($license['certificate_id'] == '' || $license['token'] == '')
    {
        $links[] = array('text' => $_LANG['back'], 'href' => 'license.php?act=list_edit');
        sys_msg($_LANG['no_license_down'], 0, $links);
    }
    /* 文件下载 */
    ecs_header("Content-Type:text/plain");
    ecs_header("Accept-Ranges:bytes");
    ecs_header("Content-Disposition: attachment; filename=CERTIFICATE.CER");
    echo $license['certificate_id'] . '|' . $license['token'];
    exit;
}
elseif($_REQUEST['act']== 'activation')
{
	$links[] = array('text' => $_LANG['back'], 'href' => 'license.php?act=list_edit');
	if(empty($_POST['activation_code']))
    {
        sys_msg($_LANG['no_activation_code'], 0, $links);       	
    }
    $license = get_shop_license();

    if(empty($license['certificate_id']) )
    {
    	 sys_msg($_LANG['no_certificate'], 0, $links);    
    }
    elseif(empty($license['certi']))
    {
     	 sys_msg($_LANG['no_certi'], 0, $links);       	
    }
 	$license_t = license_check();

	if($license_t['flag']=='login_succ' && $license_t['request']['res']=='succ' )
	{
       	$_SESSION['cert_login']='succ';
       	$_SESSION['etime']=$license_t['request']['info']['service']['ecshop_b2c']['cert_auth']['service_time']['etime'];    	   	
	}
	else
    {
        sys_msg($_LANG['activation_error0'], 0, $links);   	
    }   
    
    
    
    $result=license_activation($_POST['activation_code'],$license['certificate_id']);
    if($result['res']=='succ')
    {
        sys_msg($_LANG['activation_succ'], 0, $links);    	
    }
    elseif($result['res']=='fail')
    {
    	if($result['msg']=='key_false_ac')
    	{
            sys_msg($_LANG['activation_error1'], 0, $links);     		
    	}
    	elseif($result['msg']=='key_false_times')
        {
            sys_msg($_LANG['activation_error2'], 0, $links);         	
        }
        elseif($result['msg']=='key_false_key')
        {
            sys_msg($_LANG['activation_error3'], 0, $links);            	
        }
        elseif($result['msg']=='key_false_actived')
        {
            sys_msg($_LANG['activation_error4'], 0, $links);            	
        }
        elseif($result['msg']=='certificate_id_is_false')
        {
            sys_msg($_LANG['activation_error5'], 0, $links);            	
        }
        elseif($result['msg']=='key_false_expire')
        {
            sys_msg($_LANG['activation_error6'], 0, $links);            	
        }         
        else
        {
            sys_msg($_LANG['activation_error7'], 0, $links);          	
        }               
    }
    else
    {
        sys_msg($_LANG['activation_error8'], 0, $links);    	
    }

}

/*------------------------------------------------------ */
//-- 证书删除
/*------------------------------------------------------ */

elseif ($_REQUEST['act']== 'del')
{
    /* 检查权限 */
    admin_priv('shop_authorized');
    $license=license_reg();
    $links[] = array('text' => $_LANG['back'], 'href' => 'license.php?act=list_edit');
    if($license['flag']=='reg_succ')
    {
      sys_msg($_LANG['delete_license'], 0, $links);   	
    }
    else
    {
       sys_msg($_LANG['fail_delete_license'], 0, $links);    	
    }
    

}


/**
 * license check
 * @return  bool
 */
function license_check()
{
    // return 返回数组
    $return_array = array();

    // 取出网店 license
    $license = get_shop_license();

    // 检测网店 license
    if (!empty($license['certificate_id']) && !empty($license['token']) && !empty($license['certi']))
    {
        // license（登录）
        $return_array = license_login();
    }
    else
    {
        // license（注册）
        $return_array = license_reg();
    }

    return $return_array;
}




?>