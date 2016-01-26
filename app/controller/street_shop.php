<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 7/17/2015
 * Time: 22:58
 *
 * 店铺街
 *
 */

define('INIT_NO_USERS', true);
require(EC_PATH . '/includes/init.php');
//GZ_Api::authSession();
include_once(EC_PATH . '/includes/lib_order.php');

if (empty($tmp[0])) {
    GZ_Api::outPut(101);
}

switch ($tmp[0]) {
    case 'list':
        $pager = GZ_Api::$pagination;

        $cat_id = _POST('cat_id', 0);
        $tempD = GZ_get_street_stores($cat_id,$pager['page'],$pager['count']);

        $data = array();

        if(!empty($tempD['result'])){
            foreach($tempD['result'] as $temp){
                $data[] = $temp;
            }
        }
        GZ_Api::outPut($data, array(
            "total"  => $tempD['pager']['record_count'],
            "count"  => count($tempD['result']),
            "more"   => intval($tempD['pager']['page_count'] > $pager['page'])
        ));
        break;
}
////获得店铺街店铺
//function get_street_stores($cate_id=0,$page=1,$size=15)
//{
//    if($cate_id)
//    {
//        $sql="select id from ".$GLOBALS['ecs']->table('store_category')." where id='$cate_id'";
//        $cate_id=$GLOBALS['db']->getOne($sql);
//        if($cate_id)
//        {
//            $where=" and sh.street_cate='$cate_id' ";
//        }
//    }
//    /* 获得符合条件的店铺总数 */
//    $sql="select count(sh.id) from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh left join ".$GLOBALS['ecs']->table('store_category')." as c on sh.street_cate=c.id left join ".$GLOBALS['ecs']->table('street_tags')." as st on sh.street_tags=st.id where sh.status=1 and sh.apply=1 and sh.is_street=1 and c.is_show=1 ".$where;
//    $count = $GLOBALS['db']->getOne($sql);
//
//    $max_page = ($count> 0) ? ceil($count / $size) : 1;
//
//    if ($page > $max_page)
//    {
//        $page = $max_page;
//    }
//
//    $sql="select sh.id,sh.shop_name,sh.street_logo,sh.street_spjpg,sh.shop_title,st.tag_name from ".$GLOBALS['ecs']->table('seller_shopinfo')." as sh left join ".$GLOBALS['ecs']->table('store_category')." as c on sh.street_cate=c.id left join ".$GLOBALS['ecs']->table('street_tags')." as st on sh.street_tags=st.id where sh.status=1 and sh.apply=1 and sh.is_street=1 and c.is_show=1 ".$where." order by sh.street_order desc";
//
//    $res = $GLOBALS['db']->SelectLimit($sql, $size, ($page-1) * $size);
//    $arr = array();
//    while ($row = $GLOBALS['db']->FetchRow($res))
//    {
//        $arr[$row['id']]['id']=$row['id'];
//        $arr[$row['id']]['shop_name']=$row['shop_name'];
//        $arr[$row['id']]['street_logo']=str_replace('../','./',$row['street_logo']);
//        $arr[$row['id']]['street_spjpg']=str_replace('../','./',$row['street_spjpg']);
//        $arr[$row['id']]['shop_title']=$row['shop_title'];
//        $arr[$row['id']]['tag_name']=$row['tag_name'];
//    }
//
//    $pager['search'] = array('cat'   => $cate_id);
//
//    $pager = get_pager('store_street.php', $pager['search'], $count, $page, $size);
//
//    $street_stores=array('pager'=>$pager,'result'=>$arr);
//
//    return $street_stores;
//}

?>