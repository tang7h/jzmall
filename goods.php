<?php

/**
 * ECSHOP 商品详情
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: goods.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);



require(dirname(__FILE__) . '/includes/init.php');
//@author guan start
require(ADMIN_PATH . '/includes/lib_main.php');
//@author guan end

//生产二维码类库
require(dirname(__FILE__) . '/includes/phpqrcode/phpqrcode.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = true;
}

$affiliate = unserialize($GLOBALS['_CFG']['affiliate']);
$smarty->assign('affiliate', $affiliate);

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */

$goods_id = isset($_REQUEST['id'])  ? intval($_REQUEST['id']) : 0;

/*------------------------------------------------------ */
//-- 改变属性、数量时重新计算商品价格
/*------------------------------------------------------ */

if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'price')
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('err_msg' => '', 'result' => '', 'qty' => 1);

    $attr_id    = isset($_REQUEST['attr']) ? explode(',', $_REQUEST['attr']) : array();
    $number     = (isset($_REQUEST['number'])) ? intval($_REQUEST['number']) : 1;

    if ($goods_id == 0)
    {
        $res['err_msg'] = $_LANG['err_change_attr'];
        $res['err_no']  = 1;
    }
    else
    {
        if ($number == 0)
        {
            $res['qty'] = $number = 1;
        }
        else
        {
            $res['qty'] = $number;
        }

        //ecmoban模板堂 --zhuo start
		if($_GET['type'] == 'group'){
			$result  = get_final_price_group($goods_id, $number, true, $attr_id);	
			$shop_price = $result['final_price'];
			$res['attr_val'] =  $result['attr_val'];
		}
		else{
			 $shop_price  = get_final_price($goods_id, $number, true, $attr_id);
			 
		}
		
		$promote = get_is_promote_checked($goods_id);
		$is_group = get_proup_show($promote['cat_id']); 
		
		if($is_group == 1){
			$res['result'] = str_replace(array('￥','元'),'',price_format($shop_price * $number));
			
		}else{
			$res['result'] = price_format($shop_price * $number);  //原始
		}
		//ecmoban模板堂 --zhuo end
    }

    die($json->encode($res));
}
//@author guan start
/*------------------------------------------------------ */
//-- 评论有用+1
/*------------------------------------------------------ */
elseif($_REQUEST['act'] == 'add_useful')
{
	require_once (dirname(__FILE__) . '/includes/cls_json.php');
	$json = new JSON();
	$id = empty($_REQUEST['id']) ? 0 : intval($_REQUEST['id']);
	$type = empty($_REQUEST['type']) ? 'comm' : $_REQUEST['type'];
	$ip     = real_ip();
	if(!empty($id))
	{

		$sql = 'SELECT COUNT(*) FROM '.$ecs->table('comment')." WHERE use_ip='$ip' AND comment_id='$id' ";
		$count = $db->getOne($sql);
		if($count < 1)
		{
			$sql = "UPDATE " . $ecs->table('comment') . " SET useful=useful+1, use_ip='$ip' WHERE comment_id=" . $id;
			if($db->query($sql))
			{
				$res = array('option' => 'true', 'id' => trim($id), 'type' => $type);
				die($json->encode($res));
			}
			else
			{
				$res = array('error' => '', 'id' => $id, 'type' => $type);
				die($json->encode($res));
			}
		}
		else
		{
			$res = array('option' => '', 'id' => $id, 'type' => $type);
			die($json->encode($res));
		}
	}

}

/**
 * 获取商品属性列表 by Leah
 */
elseif( $_REQUEST['act'] == 'ajax_get_spec'){
    
    require_once(ROOT_PATH .'includes/cls_json.php');
     
    $json = new JSON();
    
    $result = array('error' => 0, 'message'=> '');
     
    $rec_id = $_REQUEST['rec_id'];
    $g_id = $_REQUEST['g_id'];
    
    
    if( $rec_id == 0 || $g_id == 0 ){
        
        $result['err_msg'] = '获取不到属性值';
        $result['err_no']  = 1;
        
    }
    else{
        
        $properties = get_goods_properties($g_id);  // 获得商品的规格和属性
    
        $spec = $properties['spe']; 
        $result['spec'] = '<form name="goodsAttr" id="form_'.$rec_id.'">';
        foreach( $spec  as $key => $value){
            
           $result['spec'] .= '<div class="catt"><span>'.$value['name'].':</span>';
           
           $result['spec'] .= '<input type="hidden"  value="" id="attr_'.$key.'" name="attr_val"/>';
           
            foreach( $value['values'] as $k => $v){
                 if($value['name'] == '颜色'){
                     
                     $result['spec'] .= '<a  class="catcolor" title="'.$v['label'].'['.$v['format_price'].']" onclick="setChange('.$v['id'].' , this , '.$key.')" ><img src="'.$v['attr_thumb'].'"><i class="selected"></i></a>';

                 }
                 else{
                     
                     $result['spec'] .= '<a  class="catcolor" title="'.$v['label'].'['.$v['format_price'].']" onclick="setChange('.$v['id'].',this , '.$key.')" >'.$v['label'].'<i class="selected"></i></a>';
                 }    
            }
           $result['spec'] .='</div>';
            
        }
        
        $result['spec'] .= '</form>';
        $result['rec_id'] = $rec_id;

    
    }
    die($json->encode($result));
    
}
/**
 * by Leah
 */
 
/**
 * 商品评论
 */
elseif($_REQUEST['act'] == 'reply_comment')
{
	require_once (dirname(__FILE__) . '/includes/cls_json.php');
	$json = new JSON();
	$content = empty($_REQUEST['comment_content']) ? '' : htmlspecialchars($_REQUEST['comment_content']);//评论内容
	$user_name = $_SESSION['user_name'];//当前评论人名称
	$cid = empty($_REQUEST['comment_id']) ? 1 : $_REQUEST['comment_id'];//评论ID
	$addtime = gmtime();
	$ip     = real_ip();
	$is_ajax = empty($_REQUEST['is_ajax']) ? 0 : htmlspecialchars($_REQUEST['is_ajax']);


	if(empty($cid))
	{
		$err_msg = '此条评论可能已经被删除';
		$res = array('error' => $err_msg, 'option' => false);
		die($json->encode($res));
	}


	/* 判断用户是否登录 */
	if(empty($_SESSION['user_id']))
	{
		if($is_ajax == 1)
		{
			$res['is_user'] = '';
			die($json->encode($res));
		}
	}

	if($content == "")
	{
		$err_msg = '回复内容不能为空';
		$res = array('error' => $err_msg, 'option' => false);
		die($json->encode($res));
	}

	$com_user = $db->getRow("SELECT user_name, id_value FROM " . $ecs->table('comment') . " WHERE comment_id=" . $cid);
	if($com_user['user_name'] == $user_name)
	{
		if($is_ajax == 1)
		{
			$err_msg = '不能对自己评论';
			$res = array('error' => $err_msg, 'option' => false);
			die($json->encode($res));
		}
	}

	$sql = "INSERT INTO " . $ecs->table('comment') . "(comment_type, id_value, email, user_name, content, comment_rank, add_time, ip_address, status, parent_id, user_id, single_id)
	VALUES('0', '$com_user[id_value]', '$_SESSION[email]', '$user_name', '$content', 5, '$addtime', '$ip', '1', '$cid', '$_SESSION[user_id]', '0')";

	if($db->query($sql))
	{
		$res = array('error' => 0, 'option' => true);
		die($json->encode($res));
	}
	else
	{
		$res = array('error' => '评论未成功，请检查网络。', 'option' => false);
		die($json->encode($res));
	}
}




if(!empty($_REQUEST['act']) && $_REQUEST['act'] == 'reply_comment_query')
{
	include('includes/cls_json.php');

	$json   = new JSON;
	$res    = array('err_msg' => '', 'result' => '', 'type_comm' => 'comm', 'comment_id' => '0');

	$goods_id   = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$comment_id = isset($_REQUEST['comment_id']) ? intval($_REQUEST['comment_id']) : 0;
	$type_comm = isset($_REQUEST['type_comm']) ? trim($_REQUEST['type_comm']) : 'comm';
	$page    = (isset($_REQUEST['page'])) ? intval($_REQUEST['page']) : 1;

	if (!empty($comment_id))
	{	
		$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$comment_id' AND status=1");
			
		$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, 1);
			
		$reply_comment = get_reply_comment($comment_id, $pager['size'], $pager['start']);


		//* 记录分页样式 */
		$pager['page']         = $page;
		$pager['size']         = $size = 1;
		$pager['record_count'] = $record_count;
		$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
		$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $comment_id, 'comm')";
		$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $comment_id, 'comm')" : 'javascript:;';
		$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $comment_id, 'comm')" : 'javascript:;';
		$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $comment_id, 'comm')"  : 'javascript:;';
	
		foreach($pager['page_number'] as $p => $num)
		{
			$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $comment_id,'comm')";
		}

		//拼接数据评论数据
		$rep_str = '';
		foreach($reply_comment as $r => $rep)
		{
			$rep_str .= '<div class="reply-lz_list">';
			$rep_str .= '<p><a href="#">' . $rep['user_name'] . '</a> <span>' . $rep['content'] . '</span></p>';
			$rep_str .= '<p class="time">' . $rep['add_time'] . '</p>';
			$rep_str .= '</div>';
		}
		
		//拼接分页数据
		$str = '<div class="page"><a href="' . $pager['page_prev'] . '"> << </a>';
	      foreach($pager['page_number_comm'] as $c => $comm)
	      {
	      	if($pager['page'] == $c)
	      	{
	      		$str .= '<span class="page_now"> ' . $c .'</span>';
	      	}
	      	else
	      	{
	      		$str .= '<a href="' . $comm . '"> ' . $c .'</a>';
	      	}
	      }	
	      
	     $str .= '<a href="' . $pager['page_next'] . '"> >></a></div>';
		 $res['result'] = $rep_str . $str;
		 $res['type_comm'] = $type_comm;
		 $res['comment_id'] = $comment_id;
	}

	die($json->encode($res));
}


//by guan 商品分页 start
if(!empty($_REQUEST['act']) && $_REQUEST['act'] == 'goods_comment_query')
{
	include('includes/cls_json.php');

	$json   = new JSON;
	$res    = array('err_msg' => '', 'result' => '', 'type_comm' => $_REQUEST['type_comm'],);

	$goods_id   = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
	$type_comm = isset($_REQUEST['type_comm']) ? trim($_REQUEST['type_comm']) : 'all';
	$page    = (isset($_REQUEST['page'])) ? intval($_REQUEST['page']) : 1;


	if (!empty($goods_id))
	{	
		$where_type = '';
		if($type_comm == 'single')
		{
			$where_type = '';
		}
		else if($type_comm == 'good')
		{
			$where_type = ' AND comment_rank >= 4';
		}
		else if($type_comm == 'med')
		{
			$where_type = ' AND comment_rank >= 2 AND comment_rank <= 3';
		}
		else if($type_comm == 'dif')
		{
			$where_type = ' AND comment_rank <= 1';
		}
		else
		{
			$where_type = '';
		}
		
		$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE id_value='$goods_id' AND status=1 $where_type");
		$pagers  = get_pager('goods.php', array('act' => 'goods_comment_query'), $record_count, $page, $_CFG['comments_number']);
		$comments_list = get_goods_comment($goods_id, $pagers['size'], $pagers['start'], $type_comm);

		
		/* 记录分页样式 */
		$pagers['page']         = $page;
		$pagers['size']         = $size = $_CFG['comments_number'];
		$count = ceil($record_count / $size);
		$pagers['record_count'] = $record_count;
		$pagers['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;
		$pagers['page_first']   = "javascript:gotoGoodsCommentPage(1,$goods_id, '$type_comm')";
		$pagers['page_prev']    = $page > 1 ? "javascript:gotoGoodsCommentPage(" .($page-1). ",$goods_id, '$type_comm')" : 'javascript:;';
		$pagers['page_next']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .($page + 1) . ",$goods_id, '$type_comm')" : 'javascript:;';
		$pagers['page_last']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .$count. ",$goods_id, '$type_comm')"  : 'javascript:;';
		
		foreach($pagers['page_number'] as $p => $num)
		{
			$pagers['page_number_comm'][$p] = "javascript:gotoGoodsCommentPage($p, $goods_id, '$type_comm')";
		}

		foreach($comments_list as $k => $v)
		{
			$p = 0;
			//商品标签
			if(!empty($v['goods_tag']))
			{
				$goods_tag = array_merge_recursive($goods_tag,explode(',', $v['goods_tag']));
				$comments_list[$k]['goods_tag'] = array_merge_recursive($goods_tag,explode(',', $v['goods_tag']));
			}
			
			//全部评价
			if($v['comment_rank'] >= 4)
			{
				if(!empty($v['goods_tag']))
				{
					$comments_list[$k]['goods_tag'] = explode(',', $v['goods_tag']);
				}
				
				if($v['id_value'] && $v['order_id'])
				{
					$comments_list[$k]['single'] = get_single($v['id_value'], $v['order_id']);
					$comments_list[$k]['img_nums'] = count($comments_list[$k]['single']);
					$comments_list[$k]['single_id'] = $comments_list[$k]['single'][0]['single_id'];
				}
				
				//查询回复
				if(!empty($v['comment_id']))
				{
					$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
					$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
				
					$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, $_CFG['comments_number']);
				
					/* 记录分页样式 */
					$pager['page']         = $page;
					$pager['size']         = $size = 1;
					$pager['record_count'] = $record_count;
					$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
					$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'comm')";
					$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'comm')" : 'javascript:;';
					$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'comm')" : 'javascript:;';
					$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'comm')"  : 'javascript:;';
				
					foreach($pager['page_number'] as $p => $num)
					{
						$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'comm')";
					}
				
					$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
					$comments_list[$k]['reply_comment'] = $reply_comment;
					$comments_list[$k]['pager'][$p] = $pager;
					$comments_list[$k]['reply_comment_nums'] = count($reply_comment);
				}
			}
			
			if(!empty($comments_list[$k]['add_time']))
			{
				$comments_list[$k]['add_time'] = local_date('Y-m-d', $comments_list[$k]['add_time']);
			}
			
			//好评
			if($v['comment_rank'] >= 4)
			{
				$goods_comms_count++;
				$good_comments[$k] = $comments_list[$k];
				if($v['id_value'] && $v['order_id'])
				{
					$good_comments[$k]['single'] = get_single($v['id_value'], $v['order_id']);
					$good_comments[$k]['img_nums'] = count($good_comments[$k]['single']);
					$good_comments[$k]['single_id'] = $good_comments[$k]['single'][0]['single_id'];
				}
				
				//查询回复
				if(!empty($v['comment_id']))
				{
					$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
					$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
				
					$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, $_CFG['comments_number']);
				
					/* 记录分页样式 */
					$pager['page']         = $page;
					$pager['size']         = $size = 1;
					$pager['record_count'] = $record_count;
					$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;
					$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'good')";
					$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'good')" : 'javascript:;';
					$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'good')" : 'javascript:;';
					$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'good')"  : 'javascript:;';
				
					foreach($pager['page_number'] as $p => $num)
					{
						$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'good')";
					}
				
					$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
					$good_comments[$k]['reply_comment'] = $reply_comment;
					$good_comments[$k]['pager'][$p] = $pager;
					$good_comments[$k]['reply_comment_nums'] = count($reply_comment);
				}
			}
			
			//中评
			if($v['comment_rank'] >= 2 && $v['comment_rank'] <= 3)
			{
				$med_comms_count++;
				$medium_comments[$k] = $comments_list[$k];
				//查询回复
				if(!empty($v['comment_id']))
				{
					$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
					$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
				
					$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, $_CFG['comments_number']);
				
					/* 记录分页样式 */
					$pager['page']         = $page;
					$pager['size']         = $size = 1;
					$pager['record_count'] = $record_count;
					$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
					$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'medium')";
					$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'medium')" : 'javascript:;';
					$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'medium')" : 'javascript:;';
					$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'medium')"  : 'javascript:;';
				
					foreach($pager['page_number'] as $p => $num)
					{
						$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'medium')";
					}
				
					$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
					$medium_comments[$k]['reply_comment'] = $reply_comment;
					$medium_comments[$k]['pager'][$p] = $pager;
					$medium_comments[$k]['reply_comment_nums'] = count($reply_comment);
				}
			}
			
			//差评
			if($v['comment_rank'] == 1)
			{
				$diff_comms_count++;
				$difference_comments[$k] = $comments_list[$k];
				
				//查询回复
				if(!empty($v['comment_id']))
				{
					$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
					$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
				
					$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, $_CFG['comments_number']);
				
					/* 记录分页样式 */
					$pager['page']         = $page;
					$pager['size']         = $size = 1;
					$pager['record_count'] = $record_count;
					$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
					$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'difference')";
					$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'difference')" : 'javascript:;';
					$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'difference')" : 'javascript:;';
					$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'difference')"  : 'javascript:;';
				
					foreach($pager['page_number'] as $p => $num)
					{
						$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'difference')";
					}
				
					$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
					$difference_comments[$k]['reply_comment'] = $reply_comment;
					$difference_comments[$k]['pager'][$p] = $pager;
					$difference_comments[$k]['reply_comment_nums'] = count($reply_comment);
				}
			}
			
			//晒单
			if($v['id_value'] && $v['order_id'])
			{
				$single_comments = get_single($v['id_value'], $v['order_id']);
				if($single_comments[0]['single_id'])
				{
					$single_comms_count++;
					$goods_single[$k]['comment_id'] = $comments_list[$k]['comment_id'];
					$goods_single[$k]['id_value'] = $comments_list[$k]['id_value'];
					$goods_single[$k]['email'] = $comments_list[$k]['email'];
					$goods_single[$k]['user_name'] = $comments_list[$k]['user_name'];
					$goods_single[$k]['content'] = $comments_list[$k]['content'];
					$goods_single[$k]['comment_rank'] = $comments_list[$k]['comment_rank'];
					$goods_single[$k]['add_time'] = $comments_list[$k]['add_time'];
					$goods_single[$k]['ip_address'] = $comments_list[$k]['ip_address'];
					$goods_single[$k]['status'] = $comments_list[$k]['status'];
					$goods_single[$k]['user_id'] = $comments_list[$k]['user_id'];
					$goods_single[$k]['order_id'] = $comments_list[$k]['order_id'];
					$goods_single[$k]['goods_tag'] = $comments_list[$k]['goods_tag'];
					$goods_single[$k]['useful'] = $comments_list[$k]['useful'];
					$goods_single[$k]['use_ip'] = $comments_list[$k]['use_ip'];
					$goods_single[$k]['single'] = get_single($v['id_value'], $v['order_id']);
					$goods_single[$k]['img_nums'] = count($goods_single[$k]['single']);
					$goods_single[$k]['single_id'] = $goods_single[$k]['single'][0]['single_id'];
					if(count($goods_single_discuss) < 5)
					{
						$goods_single_arr = get_single_detaile($v['id_value'], $v['order_id']);
						if($goods_single_arr['single_id'])
						{
							$goods_single_discuss[] = $goods_single_arr;
						}
					}
					if($goods_single[$k]['single_id'])
					{
						$single_nums++;
					}
					
					//查询回复
					if(!empty($v['comment_id']))
					{
						$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
						$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
					
						$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, $_CFG['comments_number']);
					
						/* 记录分页样式 */
						$pager['page']         = $page;
						$pager['size']         = $size = 1;
						$pager['record_count'] = $record_count;
						$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
						$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'single')";
						$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'single')" : 'javascript:;';
						$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'single')" : 'javascript:;';
						$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'single')"  : 'javascript:;';
					
						foreach($pager['page_number'] as $p => $num)
						{
							$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'single')";
						}
					
						$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
						$goods_single[$k]['reply_comment'] = $reply_comment;
						$goods_single[$k]['pager'][$p] = $pager;
						$goods_single[$k]['reply_comment_nums'] = count($reply_comment);
					}
				}
			}
		}
		
		
		//数据处理
		 
		 if($type_comm == 'all')
		 {
			$comments_list['comment_page']['comment_pager'][$p] = $pagers;
			$smarty->assign('comments_list', $comments_list);
		 }
		 else if($type_comm == 'good')
		 {
			$good_comments['comment_page']['comment_pager'][$p] = $pagers;
			$smarty->assign('good_comments', $good_comments);
		 }
		 else if($type_comm == 'med')
		 {
			$medium_comments['comment_page']['comment_pager'][$p] = $pagers;
			$smarty->assign('medium_comments', $medium_comments);
		 }
		 else if($type_comm == 'diff')
		 {
			$difference_comments['comment_page']['comment_pager'][$p] = $pagers;
			$smarty->assign('difference_comments', $difference_comments);
		 }
		 else if($type_comm == 'single')
		 {
//			$goods_single['comment_page']['comment_pager'][$p] = $pagers;
			/* 记录分页样式 */
			$page    = (isset($_REQUEST['page'])) ? intval($_REQUEST['page']) : 1;
			$pagers['page']         = $page;
			$pagers['size']         = $size = $_CFG['comments_number'];
			$count = ceil($single_nums / $size);
			$pagers['record_count'] = $single_nums;
			$pagers['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;
			$pagers['page_first']   = "javascript:gotoGoodsCommentPage(1,$goods_id, '$type_comm')";
			$pagers['page_prev']    = $page > 1 ? "javascript:gotoGoodsCommentPage(" .($page-1). ",$goods_id, '$type_comm')" : 'javascript:;';
			$pagers['page_next']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .($page + 1) . ",$goods_id, '$type_comm')" : 'javascript:;';
			$pagers['page_last']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .$count. ",$goods_id, '$type_comm')"  : 'javascript:;';
			
			foreach($pagers['page_number'] as $p => $num)
			{
				$pagers['page_number_comm'][$p] = "javascript:gotoGoodsCommentPage($p, $goods_id, '$type_comm')";
			}

			$goods_single['comment_page']['comment_pager'][$p] = $pagers;
			$smarty->assign('goods_single', $goods_single);
		 }
		 else
		 {}
		 
		 $res['type_comm'] = $type_comm;
		 $res['goods_id'] = $goods_id;
		 $fetch_file = "library/comments_list_" . $type_comm . ".lbi";
		 $res['result'] = $GLOBALS['smarty']->fetch($fetch_file);

	}

	die($json->encode($res));
}
/**
 * by Leah
 */
elseif( $_REQUEST['act'] == 'ajax_set_attr'){
    
    require_once(ROOT_PATH .'includes/cls_json.php');
    
    $json = new JSON();
    
    $result = array('error' => 0, 'message'=> '');
    
    
    $attr =$_POST['attr_id']; 
    $rec_id = $_POST['rec_id'];
    $goods_id = $_POST['goods_id'];
    if( isset( $attr)){
        
        $arr = explode( ',' , $attr);
       
        $attr_list = get_attr_info( $arr , $goods_id , $rec_doi);
        
 
        $result['spec'] = $attr_list;
        $result['rec_id'] = $rec_id; 
        
    }
    else{
        
        $result['err_msg'] = '获取不到属性值';
        $result['err_no']  = 1;
        
    }
    die($json->encode($result));
    
}
/**
 * echop 模板堂 by Leah
 */
elseif($_REQUEST['act'] == 'getInfo'){
    
    require_once(ROOT_PATH .'includes/cls_json.php');
     
    $json = new JSON();
    
    $result = array('error' => 0, 'message'=> '');
    
    $attr_id = $_POST['attr_id'];
    
    $sql = "SELECT attr_img  FROM " .$GLOBALS['ecs']->table('goods_attr')." WHERE goods_attr_id = '$attr_id'";
    
    $attr_img = $GLOBALS['db']->getOne( $sql );
    
    
    $reusult['img'] = $attr_img;
  
    die($json->encode($reusult));
}
/**
 * leah end 
 */
//by guan 商品分页 end
//@author guan end
/*------------------------------------------------------ */
//-- 商品购买记录ajax处理
/*------------------------------------------------------ */

if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'gotopage')
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('err_msg' => '', 'result' => '');

    $goods_id   = isset($_REQUEST['id']) ? intval($_REQUEST['id']) : 0;
    $page    = (isset($_REQUEST['page'])) ? intval($_REQUEST['page']) : 1;

    if (!empty($goods_id))
    {
        $need_cache = $GLOBALS['smarty']->caching;
        $need_compile = $GLOBALS['smarty']->force_compile;

        $GLOBALS['smarty']->caching = false;
        $GLOBALS['smarty']->force_compile = true;

        /* 商品购买记录 */
        $sql = 'SELECT u.user_name, og.goods_number, oi.add_time, IF(oi.order_status IN (2, 3, 4), 0, 1) AS order_status ' .
               'FROM ' . $ecs->table('order_info') . ' AS oi LEFT JOIN ' . $ecs->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $ecs->table('order_goods') . ' AS og ' .
               'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $goods_id . ' ORDER BY oi.add_time DESC LIMIT ' . (($page > 1) ? ($page-1) : 0) * 5 . ',5';
        $bought_notes = $db->getAll($sql);

        foreach ($bought_notes as $key => $val)
        {
            $bought_notes[$key]['add_time'] = local_date("Y-m-d G:i:s", $val['add_time']);
        }

        $sql = 'SELECT count(*) ' .
               'FROM ' . $ecs->table('order_info') . ' AS oi LEFT JOIN ' . $ecs->table('users') . ' AS u ON oi.user_id = u.user_id, ' . $ecs->table('order_goods') . ' AS og ' .
               'WHERE oi.order_id = og.order_id AND ' . time() . ' - oi.add_time < 2592000 AND og.goods_id = ' . $goods_id;
        $count = $db->getOne($sql);


        /* 商品购买记录分页样式 */
        $pager = array();
        $pager['page']         = $page;
        $pager['size']         = $size = 5;
        $pager['record_count'] = $count;
        $pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
        $pager['page_first']   = "javascript:gotoBuyPage(1,$goods_id)";
        $pager['page_prev']    = $page > 1 ? "javascript:gotoBuyPage(" .($page-1). ",$goods_id)" : 'javascript:;';
        $pager['page_next']    = $page < $page_count ? 'javascript:gotoBuyPage(' .($page + 1) . ",$goods_id)" : 'javascript:;';
        $pager['page_last']    = $page < $page_count ? 'javascript:gotoBuyPage(' .$page_count. ",$goods_id)"  : 'javascript:;';

        $smarty->assign('notes', $bought_notes);
        $smarty->assign('pager', $pager);


        $res['result'] = $GLOBALS['smarty']->fetch('library/bought_notes.lbi');

        $GLOBALS['smarty']->caching = $need_cache;
        $GLOBALS['smarty']->force_compile = $need_compile;
    }

    die($json->encode($res));
}

/*------------------------------------------------------ */
//-- 商品降价通知
/*------------------------------------------------------ */
if (!empty($_REQUEST['act']) && $_REQUEST['act'] == 'price_notice')
{
    include('includes/cls_json.php');

    $json   = new JSON;
    $res    = array('msg' => '', 'status' => '');

    $goods_id   = isset($_REQUEST['goods_id']) ? intval($_REQUEST['goods_id']) : 0;
    $user_id   = isset($_REQUEST['user_id']) ? intval($_SESSION['user_id']) : 0;
    $email   = isset($_REQUEST['email']) ? trim($_REQUEST['email']) : '';
    $cellphone   = isset($_REQUEST['cellphone']) ? trim($_REQUEST['cellphone']) : '';
    $hopeDiscount   = isset($_REQUEST['hopeDiscount']) ? trim($_REQUEST['hopeDiscount']) : 0;
	$add_time = gmtime();

	if($user_id && $email){
		$sql = "SELECT count(*) FROM ". $ecs->table('sale_notice')." WHERE goods_id='$goods_id' AND user_id='$user_id'";
		$one = $db->getOne($sql);
		if($one){
			$sql = "UPDATE ". $ecs->table('sale_notice')." SET cellphone='$cellphone',email='$email',hopeDiscount='$hopeDiscount',add_time='$add_time' WHERE goods_id='$goods_id' AND user_id='$user_id'";
		}else{
			$sql = "INSERT INTO ". $ecs->table('sale_notice')." (id,user_id,goods_id,cellphone,email,hopeDiscount,add_time)".
			" VALUES (NULL,'$user_id','$goods_id','$cellphone','$email','$hopeDiscount','$add_time')";
		}
		$db->query($sql);

		$res['msg'] = '提交成功';
		$res['status'] = 0;
	}else{
		$res['msg'] = '提交失败，稍后在提交一次';
		$res['status'] = 1;
	}

	die($json->encode($res));

}

/*------------------------------------------------------ */
//-- PROCESSOR
/*------------------------------------------------------ */

$cache_id = $goods_id . '-' . $_SESSION['user_rank'].'-'.$_CFG['lang'];
$cache_id = sprintf('%X', crc32($cache_id));
//ecmoban模板堂 --zhuo start
$get_promote = get_is_promote_checked($goods_id);
$is_promote = $get_promote['is_promote'];
$is_promote_group = $get_promote['is_promote_group'];
$cat_id = $get_promote['cat_id']; 

if($is_promote == 1 && $is_promote_group ==1){
	$promote = !$smarty->is_cached('group_goods.dwt', $cache_id);
	$_SESSION['cmt_is_group'] = 1;
}else{
	$promote = !$smarty->is_cached('goods.dwt', $cache_id);
	unset($_SESSION['cmt_is_group']);
}
//ecmoban模板堂 --zhuo end
if ($promote) //ecmoban模板堂 --zhuo
{
	
    $smarty->assign('image_width',  $_CFG['image_width']);
    $smarty->assign('image_height', $_CFG['image_height']);
    $smarty->assign('helps',        get_shop_help()); // 网店帮助
    $smarty->assign('id',           $goods_id);
    $smarty->assign('type',         0);
    $smarty->assign('cfg',          $_CFG);
    $smarty->assign('promotion',       get_promotion_info($goods_id));//促销信息
	$smarty->assign('comment_percent',     comment_percent($goods_id));  //获取评分
    $smarty->assign('promotion_info', get_promotion_info());
	
	//ecmoban模板堂 --zhuo start
	$smarty->assign('get_nav_group',       get_nav_group(996));   //团购指定导航  ecmoban模板堂 --zhuo	
	$get_parent = get_arrayOne(get_proup_class_nav($cat_id));	
	$arr = count($get_parent);
	$smarty->assign('id_nav',       $get_parent[$arr - 4]);   //获得团购导航位置  ecmoban模板堂 --zhuo

	$len=strlen(get_fine_parent($cat_id,2));
	$smarty->assign('userHere',get_fine_parent($cat_id,2,$len,$get_promote['goods_name']));
	
	$children = get_children($cat_id);
	$smarty->assign('group_buy', get_group_buy_pay($children));  //同类团购商品人气排行 
	$smarty->assign('group_is', get_group_buy_pay($children,'is_hot',$goods_id));  //同类团购商品销量排行
	
	//ecmoban模板堂 --zhuo 2013-12-3 start
	$file = ROOT_PATH . 'virtual_goods/' . $goods_id . '.txt'; 
	if(file_exists($file)){
		$virtual_gmunber = file_get_contents($file);  //获取文本虚拟商品销量
	}else{
		$virtual_gmunber = 0;
	}
	//ecmoban模板堂 --zhuo 2013-12-3 end
	$smarty->assign('goods_count', get_group_cat_goods_count($goods_id,$virtual_gmunber));  //团购单个商品销量
	$smarty->assign('user_id', $_SESSION['user_id']);  //用户ID
	$smarty->assign('group_goods_id', $goods_id);  //商品ID
	
	$get_parent = get_arrayOne(get_proup_class_nav($cat_id));		
	$arr = count($get_parent);
	$smarty->assign('id_nav',       $get_parent[$arr - 7]);   //获得团购导航位置  ecmoban模板堂 --zhuo
	
	/* 验证码相关设置 */
    if ((intval($_CFG['captcha']) & CAPTCHA_COMMENT) && gd_version() > 0)
    {
        $smarty->assign('enabled_captcha', 1);
        $smarty->assign('rand', mt_rand());
    }
	//ecmoban模板堂 --zhuo end

    /* 获得商品的信息 */
    $goods = get_goods_info($goods_id);

    if ($goods === false)
    {
        /* 如果没有找到任何记录则跳回到首页 */
        ecs_header("Location: ./\n");
        exit;
    }
    else
    {
        if ($goods['brand_id'] > 0)
        {
            $goods['goods_brand_url'] = build_uri('brand', array('bid'=>$goods['brand_id']), $goods['goods_brand']);
        }

        $shop_price   = $goods['shop_price'];
        $linked_goods = get_linked_goods($goods_id);

        $goods['goods_style_name'] = add_style($goods['goods_name'], $goods['goods_name_style']);

        /* 购买该商品可以得到多少钱的红包 */
        if ($goods['bonus_type_id'] > 0)
        {
            $time = gmtime();
            $sql = "SELECT type_money FROM " . $ecs->table('bonus_type') .
                    " WHERE type_id = '$goods[bonus_type_id]' " .
                    " AND send_type = '" . SEND_BY_GOODS . "' " .
                    " AND send_start_date <= '$time'" .
                    " AND send_end_date >= '$time'";
            $goods['bonus_money'] = floatval($db->getOne($sql));
            if ($goods['bonus_money'] > 0)
            {
                $goods['bonus_money'] = price_format($goods['bonus_money']);
            }
        }
			

		//@author guan start
        if($_CFG['two_code'])
        {
        	$logo = empty($_CFG['two_code_logo']) ? $goods['goods_img'] : str_replace('../','',$_CFG['two_code_logo']);

        	$size = '200x200';
//         	$data = isset($_GET['data']) ? $_GET['data'] : 'http://www.baidu.com';
        	$data = trim($_CFG['two_code_links']) . '/goods.php?id=' . $goods['goods_id'];
        	$errorCorrectionLevel = 'M'; // 纠错级别：L、M、Q、H
			$matrixPointSize = 3; // 点的大小：1到10
			$filename = "images/weixin_img/weixin_code_" . $goods['goods_id'] . ".png";
			
			QRcode::png($data, $filename, $errorCorrectionLevel, $matrixPointSize);
		  
		  $QR = imagecreatefrompng($filename);//Warning: imagecreatefrompng() [function.imagecreatefrompng]: Unable to find the wrapper "https" - did you forget to enable it when you configured PHP? =
		  //$QR = imagecreatefrompng('./chart.png');//外面那QR图
		  if($logo !== FALSE){
			   $logo = imagecreatefromstring(file_get_contents($logo));
			  
			   $QR_width = imagesx($QR);
			   $QR_height = imagesy($QR);
				   
			   $logo_width = imagesx($logo);
			   $logo_height = imagesy($logo);
					  
			   // Scale logo to fit in the QR Code
			   $logo_qr_width = $QR_width/5;
			   $scale = $logo_width/$logo_qr_width;
			   $logo_qr_height = $logo_height/$scale;
			   $from_width = ($QR_width-$logo_qr_width)/2;
			   //echo $from_width;exit;
			   imagecopyresampled($QR, $logo, $from_width, $from_width, 0, 0, $logo_qr_width, $logo_qr_height, $logo_width, $logo_height);
				
        	}
      	
        	imagepng($QR, $filename);
        	imagedestroy($QR);
        	$smarty->assign('weixin_img_url', $filename);
        	$smarty->assign('weixin_img_text', trim($_CFG['two_code_mouse']));
        	$smarty->assign('two_code', trim($_CFG['two_code']));
        }
        //@author guan end
		//wang 商家入驻获取商品的店家信息
		if($goods)
		{
			$store_info=$db->getRow("select * from ".$ecs->table('seller_shopinfo')." where seller_id='".$goods['seller_id']."'");
			if($store_info)
			{
				$sql = 'SELECT region_name FROM ' . $GLOBALS['ecs']->table('region') ." WHERE region_id in(".$store_info['province'].",".$store_info['city'].") order by region_id Asc";
				$address=$GLOBALS['db']->getCol($sql);
				$store_info['address']=$address[0].$address[1];
				$store_info['shop_logo']=str_replace('../','./',$store['shop_logo']);
				//网站QQ信息
				$sql="select value from ".$GLOBALS['ecs']->table('shop_config')." where id=109 and code='qq'";
			
				$qq_info=$GLOBALS['db']->getOne($sql);
				if($qq_info)
				{
					$store['web_config_qq']=explode(",",$qq_info);	
				}
			}
			
			$smarty->assign('store',$store_info);
		}
		

        $smarty->assign('goods',              $goods);
        $smarty->assign('goods_id',           $goods['goods_id']);
        $smarty->assign('promote_end_time',   $goods['gmt_end_time']);
        $smarty->assign('categories',         get_categories_tree());  // 分类树

        /* meta */
        $smarty->assign('keywords',           htmlspecialchars($goods['keywords']));
        $smarty->assign('description',        htmlspecialchars($goods['goods_brief']));


        $catlist = array();
        foreach(get_parent_cats($goods['cat_id']) as $k=>$v)
        {
            $catlist[] = $v['cat_id'];
        }

        assign_template('c', $catlist);

         /* 上一个商品下一个商品 */
        $prev_gid = $db->getOne("SELECT goods_id FROM " .$ecs->table('goods'). " WHERE cat_id=" . $goods['cat_id'] . " AND goods_id > " . $goods['goods_id'] . " AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0 and is_display=1  LIMIT 1");
        if (!empty($prev_gid))
        {
            $prev_good['url'] = build_uri('goods', array('gid' => $prev_gid), $goods['goods_name']);
            $smarty->assign('prev_good', $prev_good);//上一个商品
        }

        $next_gid = $db->getOne("SELECT max(goods_id) FROM " . $ecs->table('goods') . " WHERE cat_id=".$goods['cat_id']." AND goods_id < ".$goods['goods_id'] . " AND is_on_sale = 1 AND is_alone_sale = 1 AND is_delete = 0 and is_display=1 ");
        if (!empty($next_gid))
        {
            $next_good['url'] = build_uri('goods', array('gid' => $next_gid), $goods['goods_name']);
            $smarty->assign('next_good', $next_good);//下一个商品
        }

        $position = assign_ur_here($goods['cat_id'], $goods['goods_name']);

        /* current position */
        $smarty->assign('page_title',          $position['title']);                    // 页面标题
        $smarty->assign('ur_here',             $position['ur_here']);                  // 当前位置

        $properties = get_goods_properties($goods_id);  // 获得商品的规格和属性

        $smarty->assign('properties',          $properties['pro']);                              // 商品属性
        $smarty->assign('specification',       $properties['spe']);                              // 商品规格
		
		//print_r($properties['spe']);
        $smarty->assign('attribute_linked',    get_same_attribute_goods($properties));           // 相同属性的关联商品
        $smarty->assign('related_goods',       $linked_goods);                                   // 关联商品
        $smarty->assign('goods_article_list',  get_linked_articles($goods_id));                  // 关联文章
        $smarty->assign('fittings',            get_goods_fittings(array($goods_id)));                   // 配件
        $smarty->assign('rank_prices',         get_user_rank_prices($goods_id, $shop_price));    // 会员等级价格
        $smarty->assign('pictures',            get_goods_gallery($goods_id));                    // 商品相册
        $smarty->assign('bought_goods',        get_also_bought($goods_id));                      // 购买了该商品的用户还购买了哪些商品
        $smarty->assign('goods_rank',          get_goods_rank($goods_id));                       // 商品的销售排名
		$smarty->assign('related_cat',         get_related_cat($goods['cat_id'])); 
		
		$smarty->assign('related_brand',         get_related_brand($goods['cat_id'])); 
		
		$smarty->assign('top10_brand',          get_top10_brand($goods['brand_id'])); 
		
		$smarty->assign('top10_category',       get_top10($goods['cat_id'])); 
		
		$smarty->assign('top10_price',       get_top10_price($goods['shop_price'])); 
		

	

		//by mike start
        //组合套餐名
        $comboTabIndex = array(' ','一', '二', '三','四','五','六','七','八','九','十');
        $smarty->assign('comboTab',$comboTabIndex);
        //组合套餐组
        $fittings_list = get_goods_fittings(array($goods_id));
        if(is_array($fittings_list)){
                foreach($fittings_list as $vo){
                        $fittings_index[$vo['group_id']] = 1;//关联数组
                }
        }
        ksort($fittings_index);//重新排序
        $smarty->assign('fittings_tab_index', $fittings_index);//套餐数量
        //by mike end
		
        //获取tag
        $tag_array = get_tags($goods_id);
        $smarty->assign('tags',                $tag_array);                                       // 商品的标记

        //获取关联礼包
        $package_goods_list = get_package_goods_list($goods['goods_id']);
        $smarty->assign('package_goods_list',$package_goods_list);    // 获取关联礼包

        assign_dynamic('goods');
        $volume_price_list = get_volume_price_list($goods['goods_id'], '1');
        $smarty->assign('volume_price_list',$volume_price_list);    // 商品优惠价格区间
    }
}

//by guan start
$mc_all = ments_count_all($goods_id);       //总条数
$mc_one = ments_count_rank_num($goods_id,1);		//一颗星
$mc_two = ments_count_rank_num($goods_id,2);	    //两颗星
$mc_three = ments_count_rank_num($goods_id,3);   	//三颗星
$mc_four = ments_count_rank_num($goods_id,4);		//四颗星
$mc_five = ments_count_rank_num($goods_id,5);		//五颗星
$smarty->assign('zconments', get_conments_stars($mc_all,$mc_one,$mc_two,$mc_three,$mc_four,$mc_five));  //等级评论分数、星星、百分比显示

//商品评论标签 by guan start
$sql = 'SELECT * FROM ' .$ecs->table('comment'). " WHERE id_value = '$goods_id' AND status = 1 AND parent_id = 0 ORDER BY add_time DESC";
$comments_list = $db->getAll($sql); 


//标签
$goods_tag = array();
//好评
$good_comments = array();
//中评
$medium_comments = array();
//差评
$difference_comments = array();
//晒单
$goods_single = array();
//讨论圈前五条晒单
$goods_single_discuss = array();
$single_nums = 0;

$comms_count = 0;
$goods_comms_count = 0;
$med_comms_count = 0;
$diff_comms_count = 0;
$single_comms_count = 0;
foreach($comments_list as $k => $v)
{
	$p = 0;
	//商品标签
	if(!empty($v['goods_tag']))
	{
		$goods_tag = array_merge_recursive($goods_tag,explode(',', $v['goods_tag']));
		$comments_list[$k]['goods_tag'] = explode(',', $v['goods_tag']);
	}
	
	//全部评价
	if($v['comment_rank'] >= 4)
	{
		if(!empty($v['goods_tag']))
		{
			$comments_list[$k]['goods_tag'] = explode(',', $v['goods_tag']);
		}
		
		if($v['id_value'] && $v['order_id'])
		{
			$comments_list[$k]['single'] = get_single($v['id_value'], $v['order_id']);
			$comments_list[$k]['img_nums'] = count($comments_list[$k]['single']);
			$comments_list[$k]['single_id'] = $comments_list[$k]['single'][0]['single_id'];
		}
		
		//查询回复
		if(!empty($v['comment_id']))
		{
			$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
			$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
		
			$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, 10);
		
			/* 记录分页样式 */
			$pager['page']         = $page;
			$pager['size']         = $size = 10;
			$pager['record_count'] = $record_count;
			$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
			$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'comm')";
			$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'comm')" : 'javascript:;';
			$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'comm')" : 'javascript:;';
			$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'comm')"  : 'javascript:;';
		
			foreach($pager['page_number'] as $p => $num)
			{
				$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'comm')";
			}
		
			$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
			$comments_list[$k]['reply_comment'] = $reply_comment;
			$comments_list[$k]['pager'][$p] = $pager;
			$comments_list[$k]['reply_comment_nums'] = count($reply_comment);
		}
	}
	if(!empty($comments_list[$k]['add_time']))
	{
		$comments_list[$k]['add_time'] = local_date('Y-m-d', $comments_list[$k]['add_time']);
	}
	
	//好评
	if($v['comment_rank'] >= 4)
	{
		$goods_comms_count++;
		$good_comments[$k] = $comments_list[$k];
		if($v['id_value'] && $v['order_id'])
		{
			$good_comments[$k]['single'] = get_single($v['id_value'], $v['order_id']);
			$good_comments[$k]['img_nums'] = count($good_comments[$k]['single']);
			$good_comments[$k]['single_id'] = $good_comments[$k]['single'][0]['single_id'];
		}
		
		//查询回复
		if(!empty($v['comment_id']))
		{
			$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
			$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
		
			$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, 10);
		
			/* 记录分页样式 */
			$pager['page']         = $page;
			$pager['size']         = $size = 10;
			$pager['record_count'] = $record_count;
			$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;
			$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'good')";
			$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'good')" : 'javascript:;';
			$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'good')" : 'javascript:;';
			$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'good')"  : 'javascript:;';
		
			foreach($pager['page_number'] as $p => $num)
			{
				$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'good')";
			}
		
			$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
			$good_comments[$k]['reply_comment'] = $reply_comment;
			$good_comments[$k]['pager'][$p] = $pager;
			$good_comments[$k]['reply_comment_nums'] = count($reply_comment);
		}
	}
	
	//中评
	if($v['comment_rank'] >= 2 && $v['comment_rank'] <= 3)
	{
		$med_comms_count++;
		$medium_comments[$k] = $comments_list[$k];
		//查询回复
		if(!empty($v['comment_id']))
		{
			$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
			$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
		
			$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, 10);
		
			/* 记录分页样式 */
			$pager['page']         = $page;
			$pager['size']         = $size = 10;
			$pager['record_count'] = $record_count;
			$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
			$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'medium')";
			$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'medium')" : 'javascript:;';
			$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'medium')" : 'javascript:;';
			$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'medium')"  : 'javascript:;';
		
			foreach($pager['page_number'] as $p => $num)
			{
				$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'medium')";
			}
		
			$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
			$medium_comments[$k]['reply_comment'] = $reply_comment;
			$medium_comments[$k]['pager'][$p] = $pager;
			$medium_comments[$k]['reply_comment_nums'] = count($reply_comment);
		}
	}
	
	//差评
	if($v['comment_rank'] == 1)
	{
		$diff_comms_count++;
		$difference_comments[$k] = $comments_list[$k];
		
		//查询回复
		if(!empty($v['comment_id']))
		{
			$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
			$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
		
			$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, 10);
		
			/* 记录分页样式 */
			$pager['page']         = $page;
			$pager['size']         = $size = 10;
			$pager['record_count'] = $record_count;
			$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
			$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'difference')";
			$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'difference')" : 'javascript:;';
			$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'difference')" : 'javascript:;';
			$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'difference')"  : 'javascript:;';
		
			foreach($pager['page_number'] as $p => $num)
			{
				$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'difference')";
			}
		
			$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
			$difference_comments[$k]['reply_comment'] = $reply_comment;
			$difference_comments[$k]['pager'][$p] = $pager;
			$difference_comments[$k]['reply_comment_nums'] = count($reply_comment);
		}
	}
	
	//晒单
	if($v['id_value'] && $v['order_id'])
	{
		$single_comments = get_single($v['id_value'], $v['order_id']);
		
		if($single_comments[0]['single_id'])
		{
			$single_comms_count++;
			$goods_single[$k]['comment_id'] = $comments_list[$k]['comment_id'];
			$goods_single[$k]['id_value'] = $comments_list[$k]['id_value'];
			$goods_single[$k]['email'] = $comments_list[$k]['email'];
			$goods_single[$k]['user_name'] = $comments_list[$k]['user_name'];
			$goods_single[$k]['content'] = $comments_list[$k]['content'];
			$goods_single[$k]['comment_rank'] = $comments_list[$k]['comment_rank'];
			$goods_single[$k]['add_time'] = $comments_list[$k]['add_time'];
			$goods_single[$k]['ip_address'] = $comments_list[$k]['ip_address'];
			$goods_single[$k]['status'] = $comments_list[$k]['status'];
			$goods_single[$k]['user_id'] = $comments_list[$k]['user_id'];
			$goods_single[$k]['order_id'] = $comments_list[$k]['order_id'];
			$goods_single[$k]['goods_tag'] = $comments_list[$k]['goods_tag'];
			$goods_single[$k]['useful'] = $comments_list[$k]['useful'];
			$goods_single[$k]['use_ip'] = $comments_list[$k]['use_ip'];
			$goods_single[$k]['single'] = get_single($v['id_value'], $v['order_id']);
			$goods_single[$k]['img_nums'] = count($goods_single[$k]['single']);
			$goods_single[$k]['single_id'] = $goods_single[$k]['single'][0]['single_id'];
			if(count($goods_single_discuss) < 5)
			{
				$goods_single_arr = get_single_detaile($v['id_value'], $v['order_id']);
				
				if($goods_single_arr['single_id'])
				{
					$goods_single_discuss[] = $goods_single_arr;
				}
			}
			if($goods_single[$k]['single_id'])
			{
				$single_nums++;
			}
			
			//查询回复
			if(!empty($v['comment_id']))
			{
				$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
				$record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('comment'). " WHERE parent_id='$v[comment_id]' AND status=1");
			
				$pager  = get_pager('goods.php', array('act' => 'reply_comment_query'), $record_count, $page, 10);
			
				/* 记录分页样式 */
				$pager['page']         = $page;
				$pager['size']         = $size = 10;
				$pager['record_count'] = $record_count;
				$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
				$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, $v[comment_id], 'single')";
				$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, $v[comment_id], 'single')" : 'javascript:;';
				$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, $v[comment_id], 'single')" : 'javascript:;';
				$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, $v[comment_id], 'single')"  : 'javascript:;';
			
				foreach($pager['page_number'] as $p => $num)
				{
					$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id, $v[comment_id],'single')";
				}
			
				$reply_comment = get_reply_comment($v['comment_id'], $pager['size'], $pager['start']);
				$goods_single[$k]['reply_comment'] = $reply_comment;
				$goods_single[$k]['pager'][$p] = $pager;
				$goods_single[$k]['reply_comment_nums'] = count($reply_comment);
			}
		}
	}
}

$smarty->assign('comment_nums',count($comments_list));
$smarty->assign('good_nums',count($good_comments));
$smarty->assign('medium_nums',count($medium_comments));
$smarty->assign('difference_nums',count($difference_comments));
//by guan 分页 start


//商品分页 start guan
/*全部评价*/
$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$record_count = count($comments_list);
$pager  = get_pager('goods.php', array('act' => 'goods_comment_query'), $record_count, $page, $_CFG['comments_number']);

/* 记录分页样式 */
$pager['page']         = $page;
$pager['size']         = $size = $_CFG['comments_number'];
$pager['record_count'] = $record_count;
$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
$pager['page_first']   = "javascript:gotoGoodsCommentPage(1,$goods_id, 'all')";
$pager['page_prev']    = $page > 1 ? "javascript:gotoGoodsCommentPage(" .($page-1). ",$goods_id, 'all')" : 'javascript:;';
$pager['page_next']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .($page + 1) . ",$goods_id, 'all')" : 'javascript:;';
$pager['page_last']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .$page_count. ",$goods_id, 'all')"  : 'javascript:;';

foreach($pager['page_number'] as $p => $num)
{
	$pager['page_number_comm'][$p] = "javascript:gotoGoodsCommentPage($p, $goods_id, 'all')";
}

$comments_list_k = 1;
$for_list_k = 0;
$comments_list_new_arr = array();
foreach($comments_list as $comment_key => $comment_val)
{
	if($for_list_k >  ($_CFG['comments_number']-1))
	{
//		unset($comments_list[$comment_key]);
	}
	else
	{
		$comments_list_new_arr[$comments_list_k] = $comment_val;
		$comments_list_k++;
	}
	$for_list_k++;
}
$comments_list = array();
$comments_list = $comments_list_new_arr;
$comments_list['comment_page']['comment_pager'][$p] = $pager;

/*好评*/
$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$record_count = count($good_comments);

$pager  = get_pager('goods.php', array('act' => 'goods_comment_query'), $record_count, $page,  $_CFG['comments_number']);

/* 记录分页样式 */
$pager['page']         = $page;
$pager['size']         = $size =  $_CFG['comments_number'];
$pager['record_count'] = $record_count;
$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
$pager['page_first']   = "javascript:gotoGoodsCommentPage(1,$goods_id, 'good')";
$pager['page_prev']    = $page > 1 ? "javascript:gotoGoodsCommentPage(" .($page-1). ",$goods_id, 'good')" : 'javascript:;';
$pager['page_next']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .($page + 1) . ",$goods_id, 'good')" : 'javascript:;';
$pager['page_last']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .$page_count. ",$goods_id, 'good')"  : 'javascript:;';

foreach($pager['page_number'] as $p => $num)
{
	$pager['page_number_comm'][$p] = "javascript:gotoGoodsCommentPage($p, $goods_id, 'good')";
}


$good_comments_k = 1;
$for_good_k = 0;
$good_comments_new_arr = array();
foreach($good_comments as $good_comment_key => $good_comment_val)
{
	if($for_good_k >  ($_CFG['comments_number']-1))
	{
//		unset($good_comments[$good_comment_key]);
	}
	else
	{
		$good_comments_new_arr[$good_comments_k] = $good_comment_val;
		$good_comments_k++;
	}
	$for_good_k++;
}
$good_comments = $good_comments_new_arr;
$good_comments['comment_page']['comment_pager'][$p] = $pager;


/*中评*/
$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$record_count = count($medium_comments);

$pager  = get_pager('goods.php', array('act' => 'goods_comment_query'), $record_count, $page,  $_CFG['comments_number']);

/* 记录分页样式 */
$pager['page']         = $page;
$pager['size']         = $size =  $_CFG['comments_number'];
$pager['record_count'] = $record_count;
$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
$pager['page_first']   = "javascript:gotoGoodsCommentPage(1,$goods_id, 'med')";
$pager['page_prev']    = $page > 1 ? "javascript:gotoGoodsCommentPage(" .($page-1). ",$goods_id, 'med')" : 'javascript:;';
$pager['page_next']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .($page + 1) . ",$goods_id, 'med')" : 'javascript:;';
$pager['page_last']    = $page < $record_count ? 'javascript:gotoGoodsCommentPage(' .$page_count. ",$goods_id, 'med')"  : 'javascript:;';

foreach($pager['page_number'] as $p => $num)
{
	$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id,'med')";
}

$medium_comments_k = 1;
$for_med_k = 0;
$medium_comments_new_arr = array();
foreach($medium_comments as $med_comment_key => $med_comment_val)
{
	if($for_med_k >  ($_CFG['comments_number']-1))
	{
	}
	else
	{
		$medium_comments_new_arr[$medium_comments_k] = $med_comment_val;
		$medium_comments_k++;
	}
	$for_med_k++;
}
$medium_comments = $medium_comments_new_arr;
$medium_comments['comment_page']['comment_pager'][$p] = $pager;



/*差评*/
$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$record_count = count($difference_comments);

$pager  = get_pager('goods.php', array('act' => 'goods_comment_query'), $record_count, $page,  $_CFG['comments_number']);

/* 记录分页样式 */
$pager['page']         = $page;
$pager['size']         = $size =  $_CFG['comments_number'];
$pager['record_count'] = $record_count;
$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, 'diff')";
$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, 'diff')" : 'javascript:;';
$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, 'diff')" : 'javascript:;';
$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, 'diff')"  : 'javascript:;';

foreach($pager['page_number'] as $p => $num)
{
	$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id,'diff')";
}


$diff_comments_k = 1;
$for_diff_k = 0;
$diff_comments_new_arr = array();
foreach($difference_comments as $diff_comment_key => $diff_comment_val)
{
	if($for_diff_k >  ($_CFG['comments_number']-1))
	{
	}
	else
	{
		$diff_comments_new_arr[$diff_comments_k] = $diff_comment_val;
		$diff_comments_k++;
	}
	$for_diff_k++;
}

$difference_comments = $diff_comments_new_arr;

$difference_comments['comment_page']['comment_pager'][$p] = $pager;


/*晒单*/
$page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;
$record_count = count($goods_single);

$pager  = get_pager('goods.php', array('act' => 'goods_comment_query'), $record_count, $page,  $_CFG['comments_number']);

/* 记录分页样式 */
$pager['page']         = $page;
$pager['size']         = $size =  $_CFG['comments_number'];
$pager['record_count'] = $record_count;
$pager['page_count']   = $page_count = ($count > 0) ? intval(ceil($count / $size)) : 1;;
$pager['page_first']   = "javascript:gotoReplyCommentPage(1,$goods_id, 'single')";
$pager['page_prev']    = $page > 1 ? "javascript:gotoReplyCommentPage(" .($page-1). ",$goods_id, 'single')" : 'javascript:;';
$pager['page_next']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .($page + 1) . ",$goods_id, 'single')" : 'javascript:;';
$pager['page_last']    = $page < $record_count ? 'javascript:gotoReplyCommentPage(' .$page_count. ",$goods_id, 'single')"  : 'javascript:;';

foreach($pager['page_number'] as $p => $num)
{
	$pager['page_number_comm'][$p] = "javascript:gotoReplyCommentPage($p, $goods_id,'single')";
}


$single_comments_k = 1;
$for_single_k = 0;
$single_comments_new_arr = array();
foreach($goods_single as $single_comment_key => $single_comment_val)
{
	if($for_single_k >  ($_CFG['comments_number']-1))
	{
	}
	else
	{
		$single_comments_new_arr[$single_comments_k] = $single_comment_val;
		$single_comments_k++;
	}
	$for_single_k++;
}

$goods_single = $single_comments_new_arr;

$goods_single['comment_page']['comment_pager'][$p] = $pager;

//by guan 分页 end.

$smarty->assign('goods_single',$goods_single);
$smarty->assign('difference_comments',$difference_comments);
$smarty->assign('medium_comments',$medium_comments);

$smarty->assign('good_comments',$good_comments);
$smarty->assign('comments_list',$comments_list);
$smarty->assign('single_nums',$single_nums);
$smarty->assign('goods_tag', array_count_values($goods_tag));

/* 记录浏览历史 */
if (!empty($_COOKIE['ECS']['history']))
{
    $history = explode(',', $_COOKIE['ECS']['history']);

    array_unshift($history, $goods_id);
    $history = array_unique($history);

    while (count($history) > $_CFG['history_number'])
    {
        array_pop($history);
    }

    setcookie('ECS[history]', implode(',', $history), gmtime() + 3600 * 24 * 30);
}
else
{
    setcookie('ECS[history]', $goods_id, gmtime() + 3600 * 24 * 30);
}


/* 更新点击次数 */
$db->query('UPDATE ' . $ecs->table('goods') . " SET click_count = click_count + 1 WHERE goods_id = '$_REQUEST[id]'");

$smarty->assign('user_id',  $_SESSION['user_id']);

$smarty->assign('now_time',  gmtime());           // 当前系统时间
//ecmoban模板堂 --zhuo start
if($is_promote == 1 && $is_promote_group ==1){
	
	$mc_all = ments_count_all($goods_id);       //总条数
	$mc_one = ments_count_rank_num($goods_id,1);		//一颗星
	$mc_two = ments_count_rank_num($goods_id,2);	    //两颗星	
	$mc_three = ments_count_rank_num($goods_id,3);   	//三颗星
	$mc_four = ments_count_rank_num($goods_id,4);		//四颗星
	$mc_five = ments_count_rank_num($goods_id,5);		//五颗星
	
	$zconments = get_conments_stars($mc_all,$mc_one,$mc_two,$mc_three,$mc_four,$mc_five);
	$smarty->assign('zconments',$zconments);  //等级评论分数、星星、百分比显示
	$smarty->assign('integral_num',get_fine_comment_integral_num($goods_id));  //获得前几位评论人数
	$smarty->assign('five_user',get_five_before_cmt($goods_id));  //评论前几位获的积分

	$smarty->assign('allmen',      $zconments['allmen']);
	$smarty->assign('goodmen',      $zconments['goodmen']);
	$smarty->assign('middlemen',      $zconments['middlemen']);
	$smarty->assign('badmen',      $zconments['badmen']);
	$smarty->display('group_goods.dwt',      $cache_id);
}else{
	$smarty->display('goods.dwt',      $cache_id);
}
//ecmoban模板堂 --zhuo end

/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */

/**
 * 获得指定商品的关联商品
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  array
 */
function get_linked_goods($goods_id)
{
    $sql = 'SELECT g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price AS org_price, ' .
                "IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS shop_price, ".
                'g.market_price, g.promote_price, g.promote_start_date, g.promote_end_date ' .
            'FROM ' . $GLOBALS['ecs']->table('link_goods') . ' lg ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = lg.link_goods_id ' .
            "LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                    "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
            "WHERE lg.goods_id = '$goods_id' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0  and g.is_display=1 ".
            "LIMIT " . $GLOBALS['_CFG']['related_goods_number'];
    $res = $GLOBALS['db']->query($sql);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $arr[$row['goods_id']]['goods_id']     = $row['goods_id'];
        $arr[$row['goods_id']]['goods_name']   = $row['goods_name'];
        $arr[$row['goods_id']]['short_name']   = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
            sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $arr[$row['goods_id']]['goods_thumb']  = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$row['goods_id']]['goods_img']    = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$row['goods_id']]['market_price'] = price_format($row['market_price']);
        $arr[$row['goods_id']]['shop_price']   = price_format($row['shop_price']);
        $arr[$row['goods_id']]['url']          = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);

        if ($row['promote_price'] > 0)
        {
            $arr[$row['goods_id']]['promote_price'] = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $arr[$row['goods_id']]['formated_promote_price'] = price_format($arr[$row['goods_id']]['promote_price']);
        }
        else
        {
            $arr[$row['goods_id']]['promote_price'] = 0;
        }
    }

    return $arr;
}

/**
 * 获得指定商品的关联文章
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  void
 */
function get_linked_articles($goods_id)
{
    $sql = 'SELECT a.article_id, a.title, a.file_url, a.open_type, a.add_time ' .
            'FROM ' . $GLOBALS['ecs']->table('goods_article') . ' AS g, ' .
                $GLOBALS['ecs']->table('article') . ' AS a ' .
            "WHERE g.article_id = a.article_id AND g.goods_id = '$goods_id' AND a.is_open = 1 " .
            'ORDER BY a.add_time DESC';
    $res = $GLOBALS['db']->query($sql);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $row['url']         = $row['open_type'] != 1 ?
            build_uri('article', array('aid'=>$row['article_id']), $row['title']) : trim($row['file_url']);
        $row['add_time']    = local_date($GLOBALS['_CFG']['date_format'], $row['add_time']);
        $row['short_title'] = $GLOBALS['_CFG']['article_title_length'] > 0 ?
            sub_str($row['title'], $GLOBALS['_CFG']['article_title_length']) : $row['title'];

        $arr[] = $row;
    }

    return $arr;
}

/**
 * 获得指定商品的各会员等级对应的价格
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  array
 */
function get_user_rank_prices($goods_id, $shop_price)
{
    $sql = "SELECT rank_id, IFNULL(mp.user_price, r.discount * $shop_price / 100) AS price, r.rank_name, r.discount " .
            'FROM ' . $GLOBALS['ecs']->table('user_rank') . ' AS r ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                "ON mp.goods_id = '$goods_id' AND mp.user_rank = r.rank_id " .
            "WHERE r.show_price = 1 OR r.rank_id = '$_SESSION[user_rank]'";
    $res = $GLOBALS['db']->query($sql);

    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {

        $arr[$row['rank_id']] = array(
                        'rank_name' => htmlspecialchars($row['rank_name']),
                        'price'     => price_format($row['price']));
    }

    return $arr;
}

/**
 * 获得购买过该商品的人还买过的商品
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  array
 */
function get_also_bought($goods_id)
{
    $sql = 'SELECT COUNT(b.goods_id ) AS num, g.goods_id, g.goods_name, g.goods_thumb, g.goods_img, g.shop_price, g.promote_price, g.promote_start_date, g.promote_end_date ' .
            'FROM ' . $GLOBALS['ecs']->table('order_goods') . ' AS a ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('order_goods') . ' AS b ON b.order_id = a.order_id ' .
            'LEFT JOIN ' . $GLOBALS['ecs']->table('goods') . ' AS g ON g.goods_id = b.goods_id ' .
            "WHERE a.goods_id = '$goods_id' AND b.goods_id <> '$goods_id' AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0  and g.is_display=1 " .
            'GROUP BY b.goods_id ' .
            'ORDER BY num DESC ' .
            'LIMIT ' . $GLOBALS['_CFG']['bought_goods'];
    $res = $GLOBALS['db']->query($sql);

    $key = 0;
    $arr = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $arr[$key]['goods_id']    = $row['goods_id'];
        $arr[$key]['goods_name']  = $row['goods_name'];
        $arr[$key]['short_name']  = $GLOBALS['_CFG']['goods_name_length'] > 0 ?
            sub_str($row['goods_name'], $GLOBALS['_CFG']['goods_name_length']) : $row['goods_name'];
        $arr[$key]['goods_thumb'] = get_image_path($row['goods_id'], $row['goods_thumb'], true);
        $arr[$key]['goods_img']   = get_image_path($row['goods_id'], $row['goods_img']);
        $arr[$key]['shop_price']  = price_format($row['shop_price']);
        $arr[$key]['url']         = build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);

        if ($row['promote_price'] > 0)
        {
            $arr[$key]['promote_price'] = bargain_price($row['promote_price'], $row['promote_start_date'], $row['promote_end_date']);
            $arr[$key]['formated_promote_price'] = price_format($arr[$key]['promote_price']);
        }
        else
        {
            $arr[$key]['promote_price'] = 0;
        }

        $key++;
    }

    return $arr;
}

/**
 * 获得指定商品的销售排名
 *
 * @access  public
 * @param   integer     $goods_id
 * @return  integer
 */
function get_goods_rank($goods_id)
{
    /* 统计时间段 */
    $period = intval($GLOBALS['_CFG']['top10_time']);
    if ($period == 1) // 一年
    {
        $ext = " AND o.add_time > '" . local_strtotime('-1 years') . "'";
    }
    elseif ($period == 2) // 半年
    {
        $ext = " AND o.add_time > '" . local_strtotime('-6 months') . "'";
    }
    elseif ($period == 3) // 三个月
    {
        $ext = " AND o.add_time > '" . local_strtotime('-3 months') . "'";
    }
    elseif ($period == 4) // 一个月
    {
        $ext = " AND o.add_time > '" . local_strtotime('-1 months') . "'";
    }
    else
    {
        $ext = '';
    }

    /* 查询该商品销量 */
    $sql = 'SELECT IFNULL(SUM(g.goods_number), 0) ' .
        'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS o, ' .
            $GLOBALS['ecs']->table('order_goods') . ' AS g ' .
        "WHERE o.order_id = g.order_id " .
        "AND o.order_status = '" . OS_CONFIRMED . "' " .
        "AND o.shipping_status " . db_create_in(array(SS_SHIPPED, SS_RECEIVED)) .
        " AND o.pay_status " . db_create_in(array(PS_PAYED, PS_PAYING)) .
        " AND g.goods_id = '$goods_id'" . $ext;
    $sales_count = $GLOBALS['db']->getOne($sql);

    if ($sales_count > 0)
    {
        /* 只有在商品销售量大于0时才去计算该商品的排行 */
        $sql = 'SELECT DISTINCT SUM(goods_number) AS num ' .
                'FROM ' . $GLOBALS['ecs']->table('order_info') . ' AS o, ' .
                    $GLOBALS['ecs']->table('order_goods') . ' AS g ' .
                "WHERE o.order_id = g.order_id " .
                "AND o.order_status = '" . OS_CONFIRMED . "' " .
                "AND o.shipping_status " . db_create_in(array(SS_SHIPPED, SS_RECEIVED)) .
                " AND o.pay_status " . db_create_in(array(PS_PAYED, PS_PAYING)) . $ext .
                " GROUP BY g.goods_id HAVING num > $sales_count";
        $res = $GLOBALS['db']->query($sql);

        $rank = $GLOBALS['db']->num_rows($res) + 1;

        if ($rank > 10)
        {
            $rank = 0;
        }
    }
    else
    {
        $rank = 0;
    }

    return $rank;
}

/**
 * 获得商品选定的属性的附加总价格
 *
 * @param   integer     $goods_id
 * @param   array       $attr
 *
 * @return  void
 */
function get_attr_amount($goods_id, $attr)
{
    $sql = "SELECT SUM(attr_price) FROM " . $GLOBALS['ecs']->table('goods_attr') .
        " WHERE goods_id='$goods_id' AND " . db_create_in($attr, 'goods_attr_id');

    return $GLOBALS['db']->getOne($sql);
}

/**
 * 取得跟商品关联的礼包列表
 *
 * @param   string  $goods_id    商品编号
 *
 * @return  礼包列表
 */
function get_package_goods_list($goods_id)
{
    $now = gmtime();
    $sql = "SELECT pg.goods_id, ga.act_id, ga.act_name, ga.act_desc, ga.goods_name, ga.start_time,
                   ga.end_time, ga.is_finished, ga.ext_info
            FROM " . $GLOBALS['ecs']->table('goods_activity') . " AS ga, " . $GLOBALS['ecs']->table('package_goods') . " AS pg
            WHERE pg.package_id = ga.act_id
            AND ga.start_time <= '" . $now . "'
            AND ga.end_time >= '" . $now . "'
            AND pg.goods_id = " . $goods_id . "
            GROUP BY ga.act_id
            ORDER BY ga.act_id ";
    $res = $GLOBALS['db']->getAll($sql);

    foreach ($res as $tempkey => $value)
    {
        $subtotal = 0;
        $row = unserialize($value['ext_info']);
        unset($value['ext_info']);
        if ($row)
        {
            foreach ($row as $key=>$val)
            {
                $res[$tempkey][$key] = $val;
            }
        }

        $sql = "SELECT pg.package_id, pg.goods_id, pg.goods_number, pg.admin_id, p.goods_attr, g.goods_sn, g.goods_name, g.market_price, g.goods_thumb, IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS rank_price
                FROM " . $GLOBALS['ecs']->table('package_goods') . " AS pg
                    LEFT JOIN ". $GLOBALS['ecs']->table('goods') . " AS g
                        ON g.goods_id = pg.goods_id
                    LEFT JOIN ". $GLOBALS['ecs']->table('products') . " AS p
                        ON p.product_id = pg.product_id
                    LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp
                        ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]'
                WHERE pg.package_id = " . $value['act_id']. "
                ORDER BY pg.package_id, pg.goods_id";

        $goods_res = $GLOBALS['db']->getAll($sql);

        foreach($goods_res as $key => $val)
        {
            $goods_id_array[] = $val['goods_id'];
            $goods_res[$key]['goods_thumb']  = get_image_path($val['goods_id'], $val['goods_thumb'], true);
            $goods_res[$key]['market_price'] = price_format($val['market_price']);
            $goods_res[$key]['rank_price']   = price_format($val['rank_price']);
            $subtotal += $val['rank_price'] * $val['goods_number'];
        }

        /* 取商品属性 */
        $sql = "SELECT ga.goods_attr_id, ga.attr_value
                FROM " .$GLOBALS['ecs']->table('goods_attr'). " AS ga, " .$GLOBALS['ecs']->table('attribute'). " AS a
                WHERE a.attr_id = ga.attr_id
                AND a.attr_type = 1
                AND " . db_create_in($goods_id_array, 'goods_id');
        $result_goods_attr = $GLOBALS['db']->getAll($sql);

        $_goods_attr = array();
        foreach ($result_goods_attr as $value)
        {
            $_goods_attr[$value['goods_attr_id']] = $value['attr_value'];
        }

        /* 处理货品 */
        $format = '[%s]';
        foreach($goods_res as $key => $val)
        {
            if ($val['goods_attr'] != '')
            {
                $goods_attr_array = explode('|', $val['goods_attr']);

                $goods_attr = array();
                foreach ($goods_attr_array as $_attr)
                {
                    $goods_attr[] = $_goods_attr[$_attr];
                }

                $goods_res[$key]['goods_attr_str'] = sprintf($format, implode('，', $goods_attr));
            }
        }

        $res[$tempkey]['goods_list']    = $goods_res;
        $res[$tempkey]['subtotal']      = price_format($subtotal);
        $res[$tempkey]['saving']        = price_format(($subtotal - $res[$tempkey]['package_price']));
        $res[$tempkey]['package_price'] = price_format($res[$tempkey]['package_price']);
    }

    return $res;
}

/**
 * 查询评论回复
 * 
 * @param $parent_id int
 * @return $arr array()
 * 
 * @author guan 
 */

function get_reply_comment($parent_id, $size, $start)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('comment') . " WHERE parent_id='$parent_id' AND status = 1";
	
	$reply_comment = $GLOBALS['db']->selectLimit($sql, $size, $start);
	
	while($row = $GLOBALS['db']->fetchRow($reply_comment))
	{
		if(!empty($row['add_time']))
		{
			$row['add_time'] = local_date('Y-m-d H:i:s', $row['add_time']);
		}
		
		$arr[] = $row;
	}
	
	foreach($reply_comment as $k => $v)
	{
		if(!empty($v['add_time']))
		{
			$reply_comment[$k]['add_time'] = local_date('Y-m-d H:i:s', $v['add_time']);
		}
	}

	return $arr;
}
function get_reply_comment_nums($parent_id)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('comment') . " WHERE parent_id='$parent_id' AND status = 1";
	return $GLOBALS['db']->getOne($sql);
}
?>