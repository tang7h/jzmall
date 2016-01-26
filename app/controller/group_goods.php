<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 7/15/2015
 * Time: 21:49
 *
 * 团购中心
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

        $totalNum = 0;
        $data = group_buy_list($pager['count'],$pager['page'],$totalNum);

        $pager['page_count'] = ceil($totalNum/$pager['count']);

        GZ_Api::outPut($data, array(
            "total"  => $totalNum,
            "count"  => count($data),
            "more"   => intval($pager['page_count'] > $pager['page'])
        ));

        break;
}

/**
 * 取得某页的所有团购活动
 * @param   int     $size   每页记录数
 * @param   int     $page   当前页
 * @return  array
 */
function group_buy_list($size, $page,&$totalNum)
{
    /* 取得团购活动 */
    $gb_list = array();
    $now = gmtime();
    $sql = "SELECT b.*, IFNULL(g.goods_thumb, '') AS goods_thumb,g.goods_img,g.shop_price, b.act_id AS group_buy_id, ".
        "b.start_time AS start_date, b.end_time AS end_date " .
        "FROM " . $GLOBALS['ecs']->table('goods_activity') . " AS b " .
        "LEFT JOIN " . $GLOBALS['ecs']->table('goods') . " AS g ON b.goods_id = g.goods_id " .
        "WHERE b.act_type = '" . GAT_GROUP_BUY . "' " .
        "AND b.start_time <= '$now' AND b.is_finished < 3 ORDER BY b.act_id DESC";

    $totalNum = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('goods_activity').' '
            . "WHERE act_type = '" . GAT_GROUP_BUY . "' " .
        "AND start_time <= '$now' AND is_finished < 3 ORDER BY act_id DESC");

    $res = $GLOBALS['db']->selectLimit($sql, $size, ($page - 1) * $size);
    while ($group_buy = $GLOBALS['db']->fetchRow($res))
    {
        $ext_info = unserialize($group_buy['ext_info']);
        $group_buy = array_merge($group_buy, $ext_info);

        /* 格式化时间 */
        $group_buy['formated_start_date']   = local_date($GLOBALS['_CFG']['time_format'], $group_buy['start_date']);
        $group_buy['formated_end_date']     = local_date($GLOBALS['_CFG']['time_format'], $group_buy['end_date']);

        /* 格式化保证金 */
        $group_buy['formated_deposit'] = price_format($group_buy['deposit'], false);

        /* 处理价格阶梯 */
        $price_ladder = $group_buy['price_ladder'];

        $stat = group_buy_stat($group_buy['act_id'], $ext_info['deposit']);
        $group_buy['cur_amount'] = $stat['valid_goods'];         // 当前数量
        $group_buy['jiesheng'] = price_format($group_buy['shop_price'] - $price_ladder[0]['price']);	//by ecmoban修改 zhouH

        if (!is_array($price_ladder) || empty($price_ladder))
        {
            $price_ladder = array(array('amount' => 0, 'price' => 0));
        }
        else
        {
            foreach ($price_ladder as $key => $amount_price)
            {
                $price_ladder[$key]['formated_price'] = price_format($amount_price['price']);
            }
        }
        $group_buy['price_ladder'] = $price_ladder;

        /* 处理图片 */
        if (empty($group_buy['goods_thumb']))
        {
            $group_buy['goods_thumb'] = get_image_path($group_buy['goods_id'], $group_buy['goods_thumb'], true);
        }else{
            $group_buy['goods_thumb'] = getImage($group_buy['goods_thumb'] );
        }

        if(!empty($group_buy['goods_img'])){
            $group_buy['goods_img'] = getImage($group_buy['goods_img'] );
        }

        /* 处理链接 */
        $group_buy['url'] = build_uri('group_buy', array('gbid'=>$group_buy['group_buy_id']));
        /* 加入数组 */
        $gb_list[] = $group_buy;
    }

    return $gb_list;
}