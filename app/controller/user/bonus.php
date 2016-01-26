<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 7/22/2015
 * Time: 23:08
 *
 * 红包
 */



define('INIT_NO_USERS', true);

require(EC_PATH . '/includes/init.php');

GZ_Api::authSession();

if (empty($tmp[0])) {
    GZ_Api::outPut(101);
}

switch ($tmp[0]) {
    case 'create':
        break;
    case 'list':
        $user_id = $_SESSION['user_id'] ;
        $page = GZ_Api::$pagination;

//        include_once(EC_PATH . '/includes/lib_transaction.php');

        $start = $page['count']*($page['page']-1);

        $record_count = 0;
        $data = get_user_bouns_list($user_id, $page['count'], $start,$record_count);

        GZ_Api::outPut($data, array(
            "total"  => $record_count,
            "count"  => count($data),
            "more"   => intval($pager['page_count'] > $pager['page'])
        ));
        break;
    default:
        break;
}

/**
 *
 * @access  public
 * @param   int         $user_id         用户ID
 * @param   int         $num             列表显示条数
 * @param   int         $start           显示起始位置
 *
 * @return  array       $arr             红保列表
 */
function get_user_bouns_list($user_id, $num = 10, $start = 0,&$record_num)
{
    $sql = "SELECT u.bonus_sn, u.order_id, b.type_name, b.type_money, b.min_goods_amount, b.use_start_date, b.use_end_date ".
        " FROM " .$GLOBALS['ecs']->table('user_bonus'). " AS u ,".
        $GLOBALS['ecs']->table('bonus_type'). " AS b".
        " WHERE u.bonus_type_id = b.type_id AND u.user_id = '" .$user_id. "'";
    $res = $GLOBALS['db']->selectLimit($sql, $num, $start);
    $arr = array();
    $record_num =   $GLOBALS['db']->getOne("SELECT COUNT(*) FROM "  .$GLOBALS['ecs']->table('user_bonus'). " AS u ,".
        $GLOBALS['ecs']->table('bonus_type'). " AS b".
        " WHERE u.bonus_type_id = b.type_id AND u.user_id = '" .$user_id. "'");
    $day = getdate();
    $cur_date = local_mktime(23, 59, 59, $day['mon'], $day['mday'], $day['year']);

    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        /* 先判断是否被使用，然后判断是否开始或过期 */
        if (empty($row['order_id']))
        {
            /* 没有被使用 */
            if ($row['use_start_date'] > $cur_date)
            {
                $row['status'] = '未开始';//$GLOBALS['_LANG']['not_start'];
            }
            else if ($row['use_end_date'] < $cur_date)
            {
                $row['status'] = '已过期';//$GLOBALS['_LANG']['overdue'];
            }
            else
            {
                $row['status'] = '未使用';//$GLOBALS['_LANG']['not_use'];
            }
        }
        else
        {
            $row['status'] = '已使用';//$GLOBALS['_LANG']['had_use'];
        }

        $row['use_startdate']   = local_date($GLOBALS['_CFG']['date_format'], $row['use_start_date']);
        $row['use_enddate']     = local_date($GLOBALS['_CFG']['date_format'], $row['use_end_date']);

        $arr[] = $row;
    }
    return $arr;

}

