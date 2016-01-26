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

require(EC_PATH . '/includes/init.php');
$goods_id = _POST('goods_id', 0);
if (!$goods_id) {
	GZ_Api::outPut(101);
}

if (empty($tmp[0])) {
    GZ_Api::outPut(101);
}

switch ($tmp[0]) {
    case 'list'://评论列表

        $page_size = GZ_Api::$pagination['count'];
        $page = GZ_Api::$pagination['page'];
//0评论的是商品,1评论的是文章
        $out = GZ_assign_comment($goods_id, 0, $page, $page_size);
        GZ_Api::outPut($out['comments'], $out['pager']);

        break;
    case 'post':// 提交评论
        $type = _POST('type', false);
        $email = _POST('email', '');
        $captcha = _POST('captcha', '');
        $content = _POST('content', '');
        $rank = _POST('rank', 0);

        GZ_post_comment($goods_id,$type,$email,$captcha,$content,$rank);

        break;
}

function GZ_post_comment($goods_id,$type,$email,$captcha,$content,$rank){

    if (empty($goods_id) || $type===false || empty($email)||empty($content))
    {
        GZ_Api::outPut(101);
    }
    elseif (!is_email($email))
    {
        GZ_Api::outPut(10012);
    }
    else
    {
        $result = array();

        if ((intval($GLOBALS['_CFG']['captcha']) & CAPTCHA_COMMENT) && gd_version() > 0)
        {
            /* 检查验证码 */
            include_once(GZ_PATH.'/library/app_captcha.php');
            $validator = new AppCaptcha();
            $cacheKey = GZ_Api::getIP();

            if (!$validator->check_word($captcha,$cacheKey))
            {
                $result['error']   = 1;
                $result['message'] = $GLOBALS['_LANG']['invalid_captcha'];
            }
            else
            {
                $factor = intval($GLOBALS['_CFG']['comment_factor']);
                if ($type == 0 && $factor > 0)
                {
                    /* 只有商品才检查评论条件 */
                    switch ($factor)
                    {
                        case COMMENT_LOGIN :
                            if ($_SESSION['user_id'] == 0)
                            {
                                $result['error']   = 1;
                                $result['message'] = $GLOBALS['_LANG']['comment_login'];
                            }
                            break;

                        case COMMENT_CUSTOM :
                            if ($_SESSION['user_id'] > 0)
                            {
                                $sql = "SELECT o.order_id FROM " . $GLOBALS['ecs']->table('order_info') . " AS o ".
                                    " WHERE user_id = '" . $_SESSION['user_id'] . "'".
                                    " AND (o.order_status = '" . OS_CONFIRMED . "' or o.order_status = '" . OS_SPLITED . "') ".
                                    " AND (o.pay_status = '" . PS_PAYED . "' OR o.pay_status = '" . PS_PAYING . "') ".
                                    " AND (o.shipping_status = '" . SS_SHIPPED . "' OR o.shipping_status = '" . SS_RECEIVED . "') ".
                                    " LIMIT 1";


                                $tmp = $GLOBALS['db']->getOne($sql);
                                if (empty($tmp))
                                {
                                    $result['error']   = 1;
                                    $result['message'] = $GLOBALS['_LANG']['comment_custom'];
                                }
                            }
                            else
                            {
                                $result['error'] = 1;
                                $result['message'] = $GLOBALS['_LANG']['comment_custom'];
                            }
                            break;
                        case COMMENT_BOUGHT :
                            if ($_SESSION['user_id'] > 0)
                            {
                                $sql = "SELECT o.order_id".
                                    " FROM " . $GLOBALS['ecs']->table('order_info'). " AS o, ".
                                    $GLOBALS['ecs']->table('order_goods') . " AS og ".
                                    " WHERE o.order_id = og.order_id".
                                    " AND o.user_id = '" . $_SESSION['user_id'] . "'".
                                    " AND og.goods_id = '" . $goods_id . "'".
                                    " AND (o.order_status = '" . OS_CONFIRMED . "' or o.order_status = '" . OS_SPLITED . "') ".
                                    " AND (o.pay_status = '" . PS_PAYED . "' OR o.pay_status = '" . PS_PAYING . "') ".
                                    " AND (o.shipping_status = '" . SS_SHIPPED . "' OR o.shipping_status = '" . SS_RECEIVED . "') ".
                                    " LIMIT 1";
                                $tmp = $GLOBALS['db']->getOne($sql);
                                if (empty($tmp))
                                {
                                    $result['error']   = 1;
                                    $result['message'] = $GLOBALS['_LANG']['comment_brought'];
                                }
                            }
                            else
                            {
                                $result['error']   = 1;
                                $result['message'] = $GLOBALS['_LANG']['comment_brought'];
                            }
                    }
                }

                /* 无错误就保存留言 */
                if (empty($result['error']))
                {
                    $isOk = add_comment($email,$goods_id,$type,$content,$rank);
                    $isOk && $result['error']=0;
                }
            }

        }
        else
        {
            /* 没有验证码时，用时间来限制机器人发帖或恶意发评论 */
            if (!isset($_SESSION['send_time']))
            {
                $_SESSION['send_time'] = 0;
            }

            $cur_time = gmtime();
            if (($cur_time - $_SESSION['send_time']) < 30) // 小于30秒禁止发评论
            {
                $result['error']   = 1;
                $result['message'] = $GLOBALS['_LANG']['cmt_spam_warning'];
            }
            else
            {
                $factor = intval($GLOBALS['_CFG']['comment_factor']);
                if ($type == 0 && $factor > 0)
                {
                    /* 只有商品才检查评论条件 */
                    switch ($factor)
                    {
                        case COMMENT_LOGIN :
                            if ($_SESSION['user_id'] == 0)
                            {
                                $result['error']   = 1;
                                $result['message'] = $GLOBALS['_LANG']['comment_login'];
                            }
                            break;

                        case COMMENT_CUSTOM :
                            if ($_SESSION['user_id'] > 0)
                            {
                                $sql = "SELECT o.order_id FROM " . $GLOBALS['ecs']->table('order_info') . " AS o ".
                                    " WHERE user_id = '" . $_SESSION['user_id'] . "'".
                                    " AND (o.order_status = '" . OS_CONFIRMED . "' or o.order_status = '" . OS_SPLITED . "') ".
                                    " AND (o.pay_status = '" . PS_PAYED . "' OR o.pay_status = '" . PS_PAYING . "') ".
                                    " AND (o.shipping_status = '" . SS_SHIPPED . "' OR o.shipping_status = '" . SS_RECEIVED . "') ".
                                    " LIMIT 1";


                                $tmp = $GLOBALS['db']->getOne($sql);
                                if (empty($tmp))
                                {
                                    $result['error']   = 1;
                                    $result['message'] = $GLOBALS['_LANG']['comment_custom'];
                                }
                            }
                            else
                            {
                                $result['error'] = 1;
                                $result['message'] = $GLOBALS['_LANG']['comment_custom'];
                            }
                            break;

                        case COMMENT_BOUGHT :
                            if ($_SESSION['user_id'] > 0)
                            {
                                $sql = "SELECT o.order_id".
                                    " FROM " . $GLOBALS['ecs']->table('order_info'). " AS o, ".
                                    $GLOBALS['ecs']->table('order_goods') . " AS og ".
                                    " WHERE o.order_id = og.order_id".
                                    " AND o.user_id = '" . $_SESSION['user_id'] . "'".
                                    " AND og.goods_id = '" . $goods_id . "'".
                                    " AND (o.order_status = '" . OS_CONFIRMED . "' or o.order_status = '" . OS_SPLITED . "') ".
                                    " AND (o.pay_status = '" . PS_PAYED . "' OR o.pay_status = '" . PS_PAYING . "') ".
                                    " AND (o.shipping_status = '" . SS_SHIPPED . "' OR o.shipping_status = '" . SS_RECEIVED . "') ".
                                    " LIMIT 1";
                                $tmp = $GLOBALS['db']->getOne($sql);
                                if (empty($tmp))
                                {
                                    $result['error']   = 1;
                                    $result['message'] = $GLOBALS['_LANG']['comment_brought'];
                                }
                            }
                            else
                            {
                                $result['error']   = 1;
                                $result['message'] = $GLOBALS['_LANG']['comment_brought'];
                            }
                    }
                }
                /* 无错误就保存留言 */
                if (empty($result['error']))
                {
                    $isOk = add_comment($email,$goods_id,$type,$content,$rank);
                    $isOk && $result['error']=0;
                    $_SESSION['send_time'] = $cur_time;
                }
            }
        }

        $_SESSION['captcha_word'] ='';
        if(!empty($result) && $result['error']==0){
            $result['message'] = $GLOBALS['_CFG']['comment_check'] ? $GLOBALS['_LANG']['cmt_submit_wait'] : $GLOBALS['_LANG']['cmt_submit_done'];
            GZ_Api::outPut(array(),null,$result['message']);
        }else if(!empty($result)){
            GZ_Api::outPut($result['error'],null,$result['message']);
        }else{
            GZ_Api::outPut(1,null,"发表评论失败");
        }

    }




}

/*------------------------------------------------------ */
//-- PRIVATE FUNCTION
/*------------------------------------------------------ */

/**
 * 添加评论内容
 *
 * @access  public
 * @param   object  $cmt
 * @return  void
 */
function add_comment($p_email,$goods_id,$type,$content,$rank,$p_username='')
{
    /* 评论是否需要审核 */
    $status = 1 - $GLOBALS['_CFG']['comment_check'];

    $user_id = empty($_SESSION['user_id']) ? 0 : $_SESSION['user_id'];
    $email = empty($p_email) ? $_SESSION['email'] : trim($p_email);
    $user_name = empty($p_username) ? $_SESSION['user_name'] : '';
    $email = htmlspecialchars($email);
    $user_name = htmlspecialchars($user_name);

    if($status)
    {
        $sql = "UPDATE ".$GLOBALS['ecs']->table('goods'). " SET comments_number = (comments_number + 1) WHERE goods_id = '".$goods_id."'";

        $GLOBALS['db']->query($sql);
    }

    //wang 商家入驻 获取商品商家id
    $seller_id=$GLOBALS['db']->getOne("select seller_id from ".$GLOBALS['ecs']->table('goods')." where goods_id='".$goods_id."'");

    /* 保存评论内容 */
    $sql = "INSERT INTO " .$GLOBALS['ecs']->table('comment') .
        "(comment_type, id_value, email, user_name, content, comment_rank, add_time, ip_address, status, parent_id, user_id,seller_id) VALUES " .
        "('" .$type. "', '" .$goods_id. "', '$email', '$user_name', '" .$content."', '".$rank."', ".gmtime().", '".real_ip()."', '$status', '0', '$user_id','$seller_id')";

    $result = $GLOBALS['db']->query($sql);
    clear_cache_files('comments_list.lbi');
    /*if ($status > 0)
    {
        add_feed($GLOBALS['db']->insert_id(), COMMENT_GOODS);
    }*/

    return $result;
}

/**
 * 查询评论内容
 *
 * @access  public
 * @params  integer     $id
 * @params  integer     $type
 * @params  integer     $page
 * @return  array
 */
function GZ_assign_comment($id, $type, $page = 1, $page_size = 10)
{
    /* 取得评论列表 */
    $count = $GLOBALS['db']->getOne('SELECT COUNT(*) FROM ' .$GLOBALS['ecs']->table('comment').
           " WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0");

    $page_count = ($count > 0) ? intval(ceil($count / $page_size)) : 1;

    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('comment') .
            " WHERE id_value = '$id' AND comment_type = '$type' AND status = 1 AND parent_id = 0".
            ' ORDER BY comment_id DESC';
    $res = $GLOBALS['db']->selectLimit($sql, $page_size, ($page-1) * $page_size);

    $arr = array();
    $ids = '';
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $ids .= $ids ? ",$row[comment_id]" : $row['comment_id'];
        $arr[$row['comment_id']]['id']       = $row['comment_id'];
        // $arr[$row['comment_id']]['email']    = $row['email'];
        $arr[$row['comment_id']]['author'] = empty($row['user_name']) ? '匿名用户' : $row['user_name'] ;
        $arr[$row['comment_id']]['content']  = str_replace('\r\n', '<br />', htmlspecialchars($row['content']));
        $arr[$row['comment_id']]['content']  = nl2br(str_replace('\n', '<br />', $arr[$row['comment_id']]['content']));
        // $arr[$row['comment_id']]['rank']     = $row['comment_rank'];
        $arr[$row['comment_id']]['create'] = formatTime($row['add_time']);
        $arr[$row['comment_id']]['re_content'] = '';
    }
    /* 取得已有回复的评论 */
    if ($ids)
    {
        $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('comment') .
                " WHERE parent_id IN( $ids )";
        $res = $GLOBALS['db']->query($sql);
        while ($row = $GLOBALS['db']->fetch_array($res))
        {
            $arr[$row['parent_id']]['re_content']  = nl2br(str_replace('\n', '<br />', htmlspecialchars($row['content'])));
            // $arr[$row['parent_id']]['re_add_time'] = local_date($GLOBALS['_CFG']['time_format'], $row['add_time']);
            // $arr[$row['parent_id']]['re_email']    = $row['email'];
            // $arr[$row['parent_id']]['re_username'] = $row['user_name'];
        }
    }

	
	$pager = array(
			"total"  => $count,	 
			"count"  => count($arr),
			"more"   => $page < $page_count ? 1 : 0
	);

    $cmt = array('comments' => array_values($arr), 'pager' => $pager);

    return $cmt;
}

