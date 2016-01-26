<?php

/*
 *
 * 店铺收藏
 *
 */

define('INIT_NO_USERS', true);

require(EC_PATH . '/includes/init.php');

GZ_Api::authSession();

if (empty($tmp[0])) {
	GZ_Api::outPut(101);
}

switch ($tmp[0]) {
	case 'create':
	    $seller_id = _POST('seller_id', 0);

        if($seller_id===0){
            GZ_Api::outPut(101,null,'自营商品无需收藏');
        }

		if (!$seller_id) {
			GZ_Api::outPut(101);
		}
		$sellers = get_seller_info($seller_id);
	    if (!$sellers) {
			GZ_Api::outPut(13);
	    }
        /* 检查是否已经存在于用户的收藏夹 */
        $sql = "SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('collect_seller') .
            " WHERE user_id='$_SESSION[user_id]' AND seller_id = '$seller_id'";
        if ($GLOBALS['db']->GetOne($sql) > 0)
        {
			GZ_Api::outPut(10007);
        } else {
            $time = gmtime();
            $sql = "INSERT INTO " .$GLOBALS['ecs']->table('collect_seller'). " (user_id, seller_id, add_time)" .
                    "VALUES ('$_SESSION[user_id]', '$seller_id', '$time')";

            if ($GLOBALS['db']->query($sql) === false)
            {
                GZ_Api::outPut(8);
            } else {
                GZ_Api::outPut(array());
            }
        }
		break;
	case 'delete':
		include_once(EC_PATH . '/includes/lib_clips.php');

	    $collection_id = _POST('rec_id', 0);
		if (!$collection_id) {
			GZ_Api::outPut(101);
		}
	    if ($collection_id > 0)
	    {
	        $db->query('DELETE FROM ' .$ecs->table('collect_seller'). " WHERE rec_id='$collection_id' AND user_id =".$_SESSION['user_id'] );
	    }
	    GZ_Api::outPut(array());
		break;
	case 'list':
		include_once(EC_PATH . '/includes/lib_clips.php');
		$page = GZ_Api::$pagination;
		$user_id = $_SESSION['user_id'];
	    $rec_id = _POST('rec_id', 0);

        $add = '';
        if ($rec_id) {
            $add = " AND rec_id < $rec_id ";
        }

	    $record_count = $db->getOne("SELECT COUNT(*) FROM " .$ecs->table('collect_seller').
	                                " WHERE user_id='$user_id' $add");


        $start = $page['count']*($page['page']-1);
        $sellerList = GZ_get_collection_sellers($user_id, $page['count'], $start, $rec_id);

		$data = array();
		foreach ($sellerList as $key => $temp) {
			$temp['rec_id'] = $temp['rec_id'];
            $data[] = $temp;
		}

	    $pager = get_pager('collection', array(), $record_count, $page['page'], $page['count']);

  		GZ_Api::outPut($data, array(
			"total"  => $record_count,	 
			"count"  => count($data),
			"more"   => intval($pager['page_count'] > $pager['page'])
  		));
		break;
	default:
		GZ_Api::outPut(101);
		break;
}

function get_seller_info($id)
{
    $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('seller_shopinfo') . " WHERE seller_id = '$id'";

    return $GLOBALS['db']->getRow($sql);
}

/**
 *  获取指定用户的收藏店铺列表
 *
 * @access  public
 * @param   int     $user_id        用户ID
 * @param   int     $num            列表最大数量
 * @param   int     $start          列表其实位置
 *
 * @return  array   $arr
 */
function GZ_get_collection_sellers($user_id, $num = 10, $start = 1, $rec_id = 0)
{
    $add = '';
    if ($rec_id) {
        $add = " AND c.rec_id < $rec_id ";
    }
    $sql = 'SELECT c.rec_id,s.*  FROM ' . $GLOBALS['ecs']->table('collect_seller') . ' AS c' .
        " INNER JOIN " . $GLOBALS['ecs']->table('seller_shopinfo') . " AS s ".
        "ON c.seller_id = s.seller_id ".
        " WHERE c.user_id = '$user_id' ".$add."ORDER BY c.rec_id DESC";
    $res = $GLOBALS['db'] -> selectLimit($sql, $num, $start);

    $seller_list = array();
    while ($row = $GLOBALS['db']->fetchRow($res))
    {
        $seller_list[$row['id']]['rec_id']    = $row['rec_id'];
        $seller_list[$row['id']]['seller_id']    = $row['seller_id'];
        $seller_list[$row['id']]['shop_title']    = $row['shop_title'];
        $seller_list[$row['id']]['shop_address']    = $row['shop_address'];
        $seller_list[$row['id']]['shop_tel']    = $row['kf_tel'];
        $seller_list[$row['id']]['shop_logo']    = getImage($row['shop_logo']);
    }

    return $seller_list;
}

