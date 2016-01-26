<?php

/**
 * ECSHOP app_manage管理文件
 */


define('IN_ECS', true);

require(dirname(__FILE__) . '/includes/init.php');
include_once(ROOT_PATH . 'includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);
$exc   = new exchange($ecs->table("app_ad"), $db, 'ad_id', 'ad_name');

/* act操作项的初始化 */
if (empty($_REQUEST['act']))
{
    $_REQUEST['act'] = 'list';
}
else
{
    $_REQUEST['act'] = trim($_REQUEST['act']);
}

$_TYPE_TODAY_LIST = 1;
$_TYPE_ADVERT_LIST = 2;

/* 创建 ECSHOP 对象 */

if ($_REQUEST['act'] == 'advert_list')
{

    $ad_type = $_TYPE_TODAY_LIST;
    if($_REQUEST['act'] == 'today_list'){
        $ad_type = $_TYPE_TODAY_LIST;
    }else if($_REQUEST['act'] == 'advert_list'){
        $ad_type = $_TYPE_ADVERT_LIST;
    }

    $pid = !empty($_REQUEST['pid']) ? intval($_REQUEST['pid']) : 0;

    $smarty->assign('ur_here',     $_LANG['ad_list']);
    $smarty->assign('action_link', array('text' => '添加', 'href' => 'app_manage.php?act=ad_add'));
    $smarty->assign('pid',         $pid);
    $smarty->assign('full_page',  1);

    $ads_list = get_adslist();

    $smarty->assign('ads_list',     $ads_list['ads']);
    $smarty->assign('filter',       $ads_list['filter']);
    $smarty->assign('record_count', $ads_list['record_count']);
    $smarty->assign('page_count',   $ads_list['page_count']);
    $smarty->assign('ad_type_list',   getAddTypes());

    $sort_flag  = sort_flag($ads_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    assign_query_info();
    $smarty->display('app_ads_list.htm');
}else if($_REQUEST['act'] == 'ad_add'){
    admin_priv('ad_manage');

    $ad_link = empty($_GET['ad_link']) ? '' : trim($_GET['ad_link']);
    $ad_name = empty($_GET['ad_name']) ? '' : trim($_GET['ad_name']);

    $start_time = local_date('Y-m-d');
    $end_time   = local_date('Y-m-d', gmtime() + 3600 * 24 * 30);  // 默认结束时间为1个月以后

    $smarty->assign('ads',
        array('ad_link' => $ad_link, 'ad_name' => $ad_name, 'start_time' => $start_time,
            'end_time' => $end_time, 'enabled' => 1));

    $ad_type_list = getAddTypes();
    $smarty->assign('ur_here',       $_LANG['ads_add']);
    $smarty->assign('action_link',   array('href' => 'app_manage.php?act=advert_list', 'text' => $_LANG['ad_list']));
    $smarty->assign('position_list', get_position_list());

    $smarty->assign('form_act', 'ad_insert');
    $smarty->assign('action',   'ad_add');
    $smarty->assign('cfg_lang', $_CFG['lang']);
    $smarty->assign('ad_type_list', $ad_type_list);

    assign_query_info();
    $smarty->display('app_ads_info.htm');
}



else if($_REQUEST['act']=='ad_insert'){
    admin_priv('app_manage');

    /* 初始化变量 */
    $id      = !empty($_POST['id'])      ? intval($_POST['id'])    : 0;
    $type    = !empty($_POST['ad_type'])    ? intval($_POST['ad_type'])  : 0;
    $ad_name = !empty($_POST['ad_name']) ? trim($_POST['ad_name']) : '';
    $ad_link = !empty($_POST['ad_link']) ? trim($_POST['ad_link']) : '';
    $enabled = !empty($_POST['enabled']) ? trim($_POST['enabled']) : '';

    $createTime = time();

//    /* 查看广告名称是否有重复 */
//    $sql = "SELECT COUNT(*) FROM " .$ecs->table('app_ad'). " WHERE ad_name = '$ad_name'";
//    if ($db->getOne($sql) > 0)
//    {
//        $link[] = array('text' => $_LANG['go_back'], 'href' => 'javascript:history.back(-1)');
//        sys_msg($_LANG['ad_name_exist'], 0, $link);
//    }

    $ad_img = '';
    /* 添加图片类型的广告 */
    if ((isset($_FILES['ad_img']['error']) && $_FILES['ad_img']['error'] == 0) || (!isset($_FILES['ad_img']['error']) && isset($_FILES['ad_img']['tmp_name'] ) &&$_FILES['ad_img']['tmp_name'] != 'none'))
    {
        $ad_img = basename($image->upload_image($_FILES['ad_img'], 'app'));
        $ad_img = $ad_img;
    }

    if (((isset($_FILES['ad_img']['error']) && $_FILES['ad_img']['error'] > 0) || (!isset($_FILES['ad_img']['error']) && isset($_FILES['ad_img']['tmp_name']) && $_FILES['ad_img']['tmp_name'] == 'none')) && empty($_POST['img_url']))
    {
        $link[] = array('text' => $_LANG['go_back'], 'href' => 'javascript:history.back(-1)');
        sys_msg($_LANG['js_languages']['ad_photo_empty'], 0, $link);
    }


    /* 插入数据 */
    $sql = "INSERT INTO ".$ecs->table('app_ad'). " (ad_type,ad_name,ad_link,ad_img,create_time,enabled)
    VALUES (
            '$_POST[ad_type]',
            '$ad_name',
            '$ad_link',
            '$ad_img',
            '$createTime',
            $enabled)";

    $db->query($sql);
    /* 记录管理员操作 */
    admin_log($_POST['ad_name'], 'add', 'ads');

    /* 提示信息 */

    $link[0]['text'] = $_LANG['back_ads_list'];
    $link[0]['href'] = 'app_manage.php?act=advert_list';

    $link[1]['text'] = $_LANG['back_ads_list'];
    $link[1]['href'] = 'app_manage.php?act=advert_list';

    $link[2]['text'] = $_LANG['continue_add_ad'];
    $link[2]['href'] = 'app_manage.php?act=ad_add';

    sys_msg($_LANG['add'] . "&nbsp;" .$_POST['ad_name'] . "&nbsp;" . $_LANG['attradd_succed'],0, $link);
}

elseif ($_REQUEST['act'] == 'ad_edit')
{
    admin_priv('app_manage');

    /* 获取广告数据 */
    $sql = "SELECT * FROM " .$ecs->table('app_ad'). " WHERE ad_id='".intval($_REQUEST['id'])."'";
    $ads_arr = $db->getRow($sql);

    $ads_arr['ad_name'] = htmlspecialchars($ads_arr['ad_name']);

    if (strpos($ads_arr['ad_code'], 'http://') === false && strpos($ads_arr['ad_code'], 'https://') === false)
    {
        $src = '../' . DATA_DIR . '/app/'. $ads_arr['ad_code'];
        $smarty->assign('img_src', $src);
    }

    $smarty->assign('ur_here',       $_LANG['ads_edit']);
    $smarty->assign('action_link',   array('href' => 'app_manage.php', 'text' => 'app广告列表'));
    $smarty->assign('form_act',      'ad_update');
    $smarty->assign('action',        'ad_edit');
    $smarty->assign('position_list', get_position_list());
    $smarty->assign('ads',           $ads_arr);

    assign_query_info();
    $smarty->display('app_ads_info.htm');
}

/*------------------------------------------------------ */
//-- 广告编辑的处理
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'ad_update')
{
    admin_priv('app_manage');

    /* 初始化变量 */
    $id   = !empty($_POST['id'])   ? intval($_POST['id'])   : 0;
    $type = !empty($_POST['ad_type']) ? intval($_POST['ad_type']) : 0;

    $ad_link = !empty($_POST['ad_link']) ? trim($_POST['ad_link']) : '';

    $ad_img = '';
    /* 编辑图片类型的广告 */
    if ((isset($_FILES['ad_img']['error']) && $_FILES['ad_img']['error'] == 0) || (!isset($_FILES['ad_img']['error']) && isset($_FILES['ad_img']['tmp_name']) && $_FILES['ad_img']['tmp_name'] != 'none'))
    {
        $img_up_info = basename($image->upload_image($_FILES['ad_img'], 'app'));
        $ad_img = "ad_img = '".$img_up_info."'".',';
    }
    else
    {
        $ad_img = '';
    }
    if (!empty($_POST['img_url']))
    {
        $ad_img = "ad_img = '$_POST[img_url]', ";
    }


    $ad_img = str_replace('../' . DATA_DIR . '/app/', '', $ad_img);

    /* 更新信息 */
    $sql = "UPDATE " .$ecs->table('app_ad'). " SET ".
        (empty($_POST['ad_name'])?"":("ad_name     = '{$_POST['ad_name']}', ")).
        "ad_type     = '$_POST[ad_type]', ".
        "ad_link     = '$ad_link', ".
        $ad_img.
        "enabled     = '$_POST[enabled]' ".
        "WHERE ad_id = '$id'";

//    print_r($sql);exit;
    $db->query($sql);

    /* 记录管理员操作 */
    admin_log($_POST['ad_name'], 'edit', 'ads');

    clear_cache_files(); // 清除模版缓存

    /* 提示信息 */
    $href[] = array('text' => $_LANG['back_ads_list'], 'href' => 'app_manage.php?act=advert_list');
    sys_msg($_LANG['edit'] .' '.$_POST['ad_name'].' '. $_LANG['attradd_succed'], 0, $href);

}

/*------------------------------------------------------ */
//-- 删除广告位置
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'ad_remove')
{
    check_authz_json('app_manage');

    $id = intval($_GET['id']);
    $img = $exc->get_name($id, 'ad_img');

    $exc->drop($id);

    if ((strpos($img, 'http://') === false) && (strpos($img, 'https://') === false))
    {
        $img_name = basename($img);
        @unlink(ROOT_PATH. DATA_DIR . '/app/'.$img_name);
    }

    admin_log('', 'remove', 'ads');

    $url = 'app_manage.php?act=query&' . str_replace('act=ad_remove', '', $_SERVER['QUERY_STRING']);

    ecs_header("Location: $url\n");
    exit;
}


/*------------------------------------------------------ */
//-- 排序、分页、查询
/*------------------------------------------------------ */
elseif ($_REQUEST['act'] == 'query')
{
    $ads_list = get_adslist();

    $smarty->assign('ads_list',     $ads_list['ads']);
    $smarty->assign('filter',       $ads_list['filter']);
    $smarty->assign('record_count', $ads_list['record_count']);
    $smarty->assign('page_count',   $ads_list['page_count']);

    $sort_flag  = sort_flag($ads_list['filter']);
    $smarty->assign($sort_flag['tag'], $sort_flag['img']);

    make_json_result($smarty->fetch('app_ads_list.htm'), '',
        array('filter' => $ads_list['filter'], 'page_count' => $ads_list['page_count']));
}

/* 获取广告数据列表 */
function get_adslist()
{
    /* 过滤查询 */
    $adType = !empty($_REQUEST['ad_type']) ? intval($_REQUEST['ad_type']) : 0;

    $filter = array();
//    $filter['sort_by']    = empty($_REQUEST['sort_by']) ? 'ad.ad_name' : trim($_REQUEST['sort_by']);
    $filter['sort_order'] = empty($_REQUEST['sort_order']) ? 'DESC' : trim($_REQUEST['sort_order']);

    $where = 'WHERE 1 ';
    if ($adType > 0)
    {
        $where .= " AND ad.ad_type = '$adType' ";
    }

    /* 获得总记录数据 */
    $sql = 'SELECT COUNT(*) FROM ' .$GLOBALS['ecs']->table('app_ad'). ' AS ad ' . $where;
    $filter['record_count'] = $GLOBALS['db']->getOne($sql);
    $filter = page_and_size($filter);

    /* 获得广告数据 */
    $arr = array();
//    $sql = 'SELECT ad.*, COUNT(o.order_id) AS ad_stats, p.position_name '.
//        'FROM ' .$GLOBALS['ecs']->table('ad'). 'AS ad ' .
//        'LEFT JOIN ' . $GLOBALS['ecs']->table('ad_position'). ' AS p ON p.position_id = ad.position_id '.
//        'LEFT JOIN ' . $GLOBALS['ecs']->table('order_info'). " AS o ON o.from_ad = ad.ad_id $where " .
//        'GROUP BY ad.ad_id '.
//        'ORDER by '.$filter['sort_by'].' '.$filter['sort_order'];

    $sql = 'select ad.* from '.$GLOBALS['ecs']->table('app_ad').' AS ad '. $where.' order by ad_type asc';
//             . 'GROUP BY ad.ad_id '.
//            'ORDER by '.$filter['sort_by'].' '.$filter['sort_order'];

    $res = $GLOBALS['db']->selectLimit($sql, $filter['page_size'], $filter['start']);

    while ($rows = $GLOBALS['db']->fetchRow($res))
    {
        /* 格式化日期 */
        $rows['create_time']      = date('Y-m-d H:i:s', $rows['create_time']);
        if($rows['enabled']==1){
            $rows['enabled']   = '开启';
        }else{
           $rows['enabled'] = '关闭';
        }


        $typeArr = getAddTypes();

        if(array_key_exists($rows['ad_type'],$typeArr))
             $rows['ad_type'] = $typeArr[$rows['ad_type']];
//        if($rows['ad_type'] == 1){
//            $rows['ad_type']  = '今日生活';
//        }else if($rows['ad_type'] == 2){
//            $rows['ad_type'] ='分类轮播图';
//        }

        $arr[] = $rows;
    }

    return array('ads' => $arr, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

function getAddTypes(){
    return array(
        1=>'今日生活',
        2=>'分类轮播图',
        3=>'新品特惠图',
        4=>'热卖商品图',
        5=>'首页顶部轮播图',
        6=>'发现顶部轮播图',
        7=>'发现广告位',
        8=>'店铺街图位',
        9=>'APP开机广告图',
        10=>'店铺底部广告图',
    );
}

?>