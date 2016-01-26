<?php

/**
 * ECSHOP 白条管理程序
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: users.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');

/*------------------------------------------------------ */
//-- 用户帐号列表
/*------------------------------------------------------ */
//白条信息
if ($_REQUEST['act'] == 'list')
{
    /* 检查权限 */
    admin_priv('baitiao_manage');
    
	$baitiao_list = baitiao_list();

    $smarty->assign('baitiao_list',    $baitiao_list['baitiao_list']);
    $smarty->assign('filter',       $baitiao_list['filter']);
    $smarty->assign('record_count', $baitiao_list['record_count']);
    $smarty->assign('page_count',   $baitiao_list['page_count']);
    $smarty->assign('full_page',    1);

    assign_query_info();
    $smarty->display('baitiao_list.htm');
}
//白条消费记录
elseif($_REQUEST['act']=='log_list')
{
	/* 检查权限 */
    admin_priv('baitiao_manage');
	
	$baitiao_id=isset($_REQUEST['bt_id'])?intval($_REQUEST['bt_id']):0;
	$user_id=isset($_REQUEST['user_id'])?intval($_REQUEST['user_id']):0;
	//会员白条信息
	$bt="select * from ".$ecs->table('baitiao')." where user_id='$user_id'";

	$bt_info=$db->getRow($bt);
	//近七天待付款总额
	$bt_sun="select sum(o.order_amount) from ".$ecs->table('baitiao_log')." as b left join ".$ecs->table('order_info')."  as o on b.order_id=o.order_id where b.user_id='$user_id' and b.is_repay=0 and b.use_date>=".(gmtime()-(7*24*3600));
	$repay_sun_amount=$db->getOne($bt_sun);
	//所有待付款白条的总额和条数
	$bt_repay="select sum(o.order_amount) as total_amount,count(log_id) as numbers from ".$ecs->table('baitiao_log')." as b left join ".$ecs->table('order_info')."  as o on b.order_id=o.order_id where b.user_id='$user_id' and b.is_repay=0";
	$repay_bt=$db->getRow($bt_repay);

	//白条记录
	$bt_sql="select b.*,o.order_sn,o.order_amount from ".$ecs->table('baitiao_log')." as b left join ".$ecs->table('order_info')."  as o on b.order_id=o.order_id where b.user_id='$user_id' order by b.log_id desc";
	$bt_log=$db->getAll($bt_sql);
	if($bt_log)
	{
		foreach($bt_log as $key=>$val)
		{
			$bt_log[$key]['use_date']=local_date($GLOBALS['_CFG']['date_format'],$bt_log[$key]['use_date']);	
			$bt_log[$key]['repay_date']=local_date($GLOBALS['_CFG']['date_format'],$bt_log[$key]['repay_date']);
			if($bt_log[$key]['repayed_date'])
			{
				$bt_log[$key]['repayed_date']=local_date($GLOBALS['_CFG']['date_format'],$bt_log[$key]['repayed_date']);
			}
		}	
	}
	$remain_amount=floatval($bt_info['amount'])-floatval($repay_bt['total_amount']);
	$smarty->assign('remain_amount',$remain_amount);
	$smarty->assign('bt_info',$bt_info);
	$smarty->assign('repay_sun_amount',$repay_sun_amount);
	$smarty->assign('repay_bt',$repay_bt);
	$smarty->assign('bt_amount',$bt_amount);
	$smarty->assign('bt_logs',$bt_log);
	$smarty->assign('full_page',    1);
	$smarty->display('baitiao_log_list.htm');
}
/*--------wang 白条----------*/
elseif($_REQUEST['act'] == 'bt_add_tp')
{
	
	/* 检查权限 */
    admin_priv('baitiao_manage');
	
	$user_id = empty($_REQUEST['user_id']) ? '' : trim($_REQUEST['user_id']);
	if($user_id>0){
		//会员信息
		$user_sql="select user_name,user_id from ".$ecs->table('users')." where user_id='$user_id'";
		$user_info=$db->getRow($user_sql);
		$bt_sql="select b.*,u.user_name,u.user_id from ".$ecs->table('baitiao')." as b left join ".$ecs->table('users')." as u on u.user_id=b.user_id where b.user_id='$user_id'";
		$bt_info=$db->getRow($bt_sql);
	}
	$smarty->assign('user_info',$user_info);
	$smarty->assign('bt_info',$bt_info);
	$smarty->display('baitiao_info.htm');
}
elseif($_REQUEST['act'] == 'bt_edit')
{
	/* 检查权限 */
    admin_priv('baitiao_manage');
	
	$user_id = empty($_POST['user_id']) ? 0 : trim($_POST['user_id']);
	$amount = empty($_POST['amount']) ? 0 : floatval(trim($_POST['amount']));
	$repay_term = empty($_POST['repay_term']) ? 0 : intval($_POST['repay_term']);
	$over_repay_trem = empty($_POST['over_repay_trem']) ? 0 : intval($_POST['over_repay_trem']);
	if($user_id>0){
		$bt_sql="select baitiao_id from ".$ecs->table('baitiao')." where user_id='$user_id'";
		$bt_info=$db->getOne($bt_sql);
		if($bt_info)
		{
			$bt_up_sql="update ".$ecs->table('baitiao')." set amount='$amount',repay_term='$repay_term',over_repay_trem='$over_repay_trem',add_time=".gmtime()." where baitiao_id='$bt_info.baitiao_id'";
			$up_ok=$db->query($bt_up_sql);
			if($up_ok)
			{
				$link[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');
          		sys_msg('会员白条跟新成功！', 0, $links);
			}
		}
		else
		{
			$bt_insert_sql="insert into ".$ecs->table('baitiao')." (user_id,amount,repay_term,over_repay_trem,add_time) values ('$user_id','$amount','$repay_term','$over_repay_trem',".gmtime().")";
			$in_ok=$db->query($bt_insert_sql);
			if($in_ok)
			{
				$link[] = array('text' => $_LANG['go_back'], 'href'=>'users.php?act=list');
          		sys_msg('会员白条设置成功！', 0, $links);
			}
		}	
	}
}
/*--------wang 白条----------*/

/*------------------------------------------------------ */
//-- ajax返回用户列表
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
	//检查权限
	check_authz_json('baitiao_manage');
	
    $baitiao_list = baitiao_list();

    $smarty->assign('baitiao_list', $baitiao_list['baitiao_list']);
    $smarty->assign('filter',       $baitiao_list['filter']);
    $smarty->assign('record_count', $baitiao_list['record_count']);
    $smarty->assign('page_count',   $baitiao_list['page_count']);

    $sort_flag  = sort_flag($baitiao_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('baitiao_list.htm'), '', array('filter' => $baitiao_list['filter'], 'page_count' => $baitiao_list['page_count']));
}
/*------------------------------------------------------ */
//-- 批量删除白条
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'batch_remove')
{
    /* 检查权限 */
    admin_priv('baitiao_manage');
	
	if (!isset($_POST['checkboxes']) || !is_array($_POST['checkboxes']))
    {
        sys_msg("没有选择任何数据", 1);
    }

    $sql = "DELETE FROM " . $ecs->table('baitiao') .
            " WHERE baitiao_id " . db_create_in(join(',', $_POST['checkboxes']));
    $del_ok=$db->query($sql);
	if($del_ok){
		$lnk[] = array('text' => $_LANG['back_list'], 'href' => 'user_baitiao_log.php?act=list');
    	sys_msg("删除白条成功", 0, $lnk);
	}
    
}
/*------------------------------------------------------ */
//-- 批量删除白条消费记录
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'batch_remove_log')
{
    /* 检查权限 */
    admin_priv('baitiao_manage');
	
	if (!isset($_POST['checkboxes']) || !is_array($_POST['checkboxes']))
    {
        sys_msg("没有选择任何数据", 1);
    }
	$sql = "SELECT log_id,is_repay,baitiao_id,user_id FROM " . $ecs->table('baitiao_log') . " WHERE log_id ". db_create_in(join(',', $_POST['checkboxes']));
    $bt_log = $db->getAll($sql);
	
	if($bt_log)
	{
		$no_del_num=0;
		foreach($bt_log as $key=>$val){
			if($val['is_repay'])
			{
				$del_sql = "DELETE FROM " . $ecs->table('baitiao_log') .
				" WHERE is_repay=1 and log_id =" .$val['log_id'];
				
				$del_ok=$db->query($del_sql);
			}
			else
			{
				$no_del_num++;	
			}
		}
		
		if($no_del_num>0)
		{
			$lnk[] = array('text' => $_LANG['back_list'], 'href' => 'user_baitiao_log.php?act=log_list&bt_id='.$bt_log[0]['baitiao_id'].'&user_id='.$bt_log[0]['user_id']);
    		sys_msg("有".$no_del_num."条待付款记录不可删除", 0, $lnk);	
		}
		else
		{
			$lnk[] = array('text' => $_LANG['back_list'], 'href' => 'user_baitiao_log.php?act=log_list&bt_id='.$bt_log[0]['baitiao_id'].'&user_id='.$bt_log[0]['user_id']);
    		sys_msg("删除消费记录成功", 0, $lnk);	
		}
	}
	else
	{
		 sys_msg("没有选择任何数据", 1);
	}
   
}
/*------------------------------------------------------ */
//-- 删除会员白条
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'remove')
{
    /* 检查权限 */
    admin_priv('baitiao_manage');

    $sql = "SELECT baitiao_id FROM " . $ecs->table('baitiao') . " WHERE baitiao_id = '" . $_GET['baitiao_id'] . "'";
    $baitiao_id = $db->getOne($sql);
    if($baitiao_id>0){
		$sql = "delete from " .$ecs->table('baitiao'). " where baitiao_id = '" . $baitiao_id . "'";
		$del_ok=$db->query($sql);
		if($del_ok)
		{
			/* 记录管理员操作 */
			admin_log(addslashes($baitiao_id), 'remove', 'baitiao');
		
			/* 提示信息 */
			$link[] = array('text' => $_LANG['go_back'], 'href'=>'user_baitiao_log.php?act=list');
			sys_msg("删除白条成功", 0, $link);	
		}
	}
}
/*------------------------------------------------------ */
//-- 删除会员白条消费记录
/*------------------------------------------------------ */

elseif ($_REQUEST['act'] == 'remove_log')
{
    /* 检查权限 */
    admin_priv('baitiao_manage');

    $sql = "SELECT log_id,is_repay,baitiao_id,user_id FROM " . $ecs->table('baitiao_log') . " WHERE log_id = '" . $_GET['log_id'] . "'";
    $bt_log = $db->getRow($sql);
    if($bt_log['log_id']>0){
		if($bt_log['is_repay'])
		{
			$sql = "delete from " .$ecs->table('baitiao_log'). " where is_repay=1 and log_id = '" . $bt_log['log_id'] . "'";
			$del_ok=$db->query($sql);
			if($del_ok)
			{
				/* 记录管理员操作 */
				admin_log(addslashes($log_id), 'remove', 'baitiao_log');
			
				/* 提示信息 */
				$link[] = array('text' => $_LANG['go_back'], 'href'=>'user_baitiao_log.php?act=log_list&bt_id='.$bt_log['baitiao_id'].'&user_id='.$bt_log['user_id']);
				sys_msg("删除白条记录成功", 0, $link);	
			}
			
		}
		else
		{
			/* 提示信息 */
			$link[] = array('text' => $_LANG['go_back'], 'href'=>'user_baitiao_log.php?act=log_list&bt_id='.$bt_log['baitiao_id'].'&user_id='.$bt_log['user_id']);
			sys_msg("待付款的记录不可删除", 0, $link);		
		}
		
	}
}
/**
 *  返回会员白条列表数据
 *
 * @access  public
 * @param
 *
 * @return void
 */
function baitiao_list()
{
    $result = get_filter();
    if ($result === false)
    {
        /* 过滤条件 */
        $filter['keywords'] = empty($_REQUEST['keywords']) ? '' : trim($_REQUEST['keywords']);
        if (isset($_REQUEST['is_ajax']) && $_REQUEST['is_ajax'] == 1)
        {
            $filter['keywords'] = json_str_iconv($filter['keywords']);
        }

        $filter['sort_by']    = empty($_REQUEST['sort_by'])    ? 'baitiao_id' : trim($_REQUEST['sort_by']);
        $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC'     : trim($_REQUEST['sort_order']);

        $ex_where = ' WHERE 1 ';
        if ($filter['keywords'])
        {
            $ex_where .= " AND u.user_name LIKE '%" . mysql_like_quote($filter['keywords']) ."%'";
        }
        $filter['record_count'] = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('baitiao') ."as b left join ". $GLOBALS['ecs']->table('users') ." as u on b.user_id=u.user_id ". $ex_where);

        /* 分页大小 */
        $filter = page_and_size($filter);
        $sql = "SELECT b.*,u.user_name ".
                " FROM ". $GLOBALS['ecs']->table('baitiao') ."as b left join ". $GLOBALS['ecs']->table('users') ." as u on b.user_id=u.user_id ". $ex_where .
                " ORDER by " . $filter['sort_by'] . ' ' . $filter['sort_order'] .
                " LIMIT " . $filter['start'] . ',' . $filter['page_size'];

        $filter['keywords'] = stripslashes($filter['keywords']);
        set_filter($filter, $sql);
    }
    else
    {
        $sql    = $result['sql'];
        $filter = $result['filter'];
    }

    $baitiao_list = $GLOBALS['db']->getAll($sql);

    $arr = array('baitiao_list' => $baitiao_list, 'filter' => $filter,
        'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);

    return $arr;
}

?>