<?php

/**
 * ECSHOP 公用函数库
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: lib_common.php 17217 2011-01-19 06:29:08Z liubo $
*/

if (!defined('IN_ECS'))
{
    die('Hacking attempt');
}
/*评论百分比*/
function comment_percent($goods_id)
{
	$sql = 'SELECT COUNT(*) AS haoping FROM '.$GLOBALS['ecs']->table('comment')." WHERE id_value = '$goods_id' AND comment_type=0 AND status = 1 AND parent_id = 0 AND (comment_rank = 4 OR comment_rank = 5)";
	$haoping_count = $GLOBALS['db']->getOne($sql);

	$sql = 'SELECT COUNT(*) AS zhongping FROM '.$GLOBALS['ecs']->table('comment')." WHERE id_value = '$goods_id' AND comment_type=0 AND status = 1 AND parent_id = 0 AND (comment_rank = 2 OR comment_rank = 3)";
	$zhongping_count = $GLOBALS['db']->getOne($sql);

	$sql = 'SELECT COUNT(*) AS chaping FROM '.$GLOBALS['ecs']->table('comment')." WHERE id_value = '$goods_id' AND comment_type=0 AND status = 1 AND parent_id = 0 AND comment_rank = 1";
	$chaping_count = $GLOBALS['db']->getOne($sql);

	$sql = 'SELECT COUNT(*) AS comment_count FROM '.$GLOBALS['ecs']->table('comment')." WHERE id_value = '$goods_id' AND comment_type=0 AND status = 1 AND parent_id = 0";
	$comment_count = $GLOBALS['db']->getOne($sql);

	$arr['haoping_percent']   = @substr(number_format(($haoping_count/$comment_count)*100, 2, '.', ''), 0, -1);
	$arr['zhongping_percent'] = @substr(number_format(($zhongping_count/$comment_count)*100, 2, '.', ''), 0, -1);
	$arr['chaping_percent']   = @substr(number_format(($chaping_count/$comment_count)*100, 2, '.', ''), 0, -1);
	$arr['comment_count']     = $comment_count ? $comment_count : 0;
	if($comment_count == 0)
	{
		$arr['haoping_percent'] = 100;
	}

	foreach($arr as $key => $val)
	{
		if($val == 0.0)
		{
			$arr[$key] = 0;
		}
	}
	return $arr;
}
function get_related_cat($cat_id)
{
	$sql = 'SELECT parent_id FROM '.$GLOBALS['ecs']->table('category')." WHERE cat_id = '$cat_id' ";
	$parent_id = $GLOBALS['db']->getOne($sql);
	$sql = 'SELECT cat_id,cat_name FROM '.$GLOBALS['ecs']->table('category')." WHERE parent_id = '$parent_id' AND cat_id != '$cat_id'";

	$res = $GLOBALS['db']->getAll($sql);
	$arr = array();
	if($res != '')
	{
		foreach($res as $idx=>$row)
		{
			 $arr[$idx]['cat_name'] =  $row['cat_name'];
			 $arr[$idx]['url'] = build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
		}
	}

	return $arr;
}

function get_related_brand($cat_id)
{
	$children = get_children($cat_id);

	/* 品牌筛选 */

    $sql = "SELECT b.brand_id, b.brand_name,b.brand_logo, COUNT(*) AS goods_num ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g LEFT JOIN ". $GLOBALS['ecs']->table('goods_cat') . " AS gc ON g.goods_id = gc.goods_id " .
            "WHERE g.brand_id = b.brand_id AND ($children OR " . 'gc.cat_id ' . db_create_in(array_unique(array_merge(array($cat_id), array_keys(cat_list($cat_id, 0, false))))) . ") AND b.is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0  and g.is_display=1 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY b.sort_order, b.brand_id ASC";

    $brands = $GLOBALS['db']->getAll($sql);

    foreach ($brands AS $key => $val)
    {
        $temp_key = $key + 1;
        $brands[$temp_key]['brand_name'] = $val['brand_name'];
        $brands[$temp_key]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => $val['brand_id'], 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr_str), $cat['cat_name']);

        /* 判断品牌是否被选中 */
        if ($brand == $brands[$key]['brand_id'])
        {
            $brands[$temp_key]['selected'] = 1;
        }
        else
        {
            $brands[$temp_key]['selected'] = 0;
        }
		$brands[$temp_key]['logo'] = !empty($val['brand_logo']) ? 'data/brandlogo/'.$val['brand_logo'] : '';
    }

    $brands[0]['brand_name'] = $_LANG['all_attribute'];
    $brands[0]['url'] = build_uri('category', array('cid' => $cat_id, 'bid' => 0, 'price_min'=>$price_min, 'price_max'=> $price_max, 'filter_attr'=>$filter_attr_str), $cat['cat_name']);
    $brands[0]['selected'] = empty($brand) ? 1 : 0;

	unset($brands[0]);
	return $brands;

}
/**
 * 创建像这样的查询: "IN('a','b')";
 *
 * @access   public
 * @param    mix      $item_list      列表数组或字符串
 * @param    string   $field_name     字段名称
 *
 * @return   void
 */
function db_create_in($item_list, $field_name = '')
{
    if (empty($item_list))
    {
        return $field_name . " IN ('') ";
    }
    else
    {
        if (!is_array($item_list))
        {
            $item_list = explode(',', $item_list);
        }
        $item_list = array_unique($item_list);
        $item_list_tmp = '';
        foreach ($item_list AS $item)
        {
            if ($item !== '')
            {
                $item_list_tmp .= $item_list_tmp ? ",'$item'" : "'$item'";
            }
        }
        if (empty($item_list_tmp))
        {
            return $field_name . " IN ('') ";
        }
        else
        {
            return $field_name . ' IN (' . $item_list_tmp . ') ';
        }
    }
}

/**
 * 验证输入的邮件地址是否合法
 *
 * @access  public
 * @param   string      $email      需要验证的邮件地址
 *
 * @return bool
 */
function is_email($user_email)
{
    $chars = "/^([a-z0-9+_]|\\-|\\.)+@(([a-z0-9_]|\\-)+\\.)+[a-z]{2,6}\$/i";
    if (strpos($user_email, '@') !== false && strpos($user_email, '.') !== false)
    {
        if (preg_match($chars, $user_email))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}

/**
 * 检查是否为一个合法的时间格式
 *
 * @access  public
 * @param   string  $time
 * @return  void
 */
function is_time($time)
{
    $pattern = '/[\d]{4}-[\d]{1,2}-[\d]{1,2}\s[\d]{1,2}:[\d]{1,2}:[\d]{1,2}/';

    return preg_match($pattern, $time);
}

/**
 * 获得查询时间和次数，并赋值给smarty
 *
 * @access  public
 * @return  void
 */
function assign_query_info()
{
    if ($GLOBALS['db']->queryTime == '')
    {
        $query_time = 0;
    }
    else
    {
        if (PHP_VERSION >= '5.0.0')
        {
            $query_time = number_format(microtime(true) - $GLOBALS['db']->queryTime, 6);
        }
        else
        {
            list($now_usec, $now_sec)     = explode(' ', microtime());
            list($start_usec, $start_sec) = explode(' ', $GLOBALS['db']->queryTime);
            $query_time = number_format(($now_sec - $start_sec) + ($now_usec - $start_usec), 6);
        }
    }
    $GLOBALS['smarty']->assign('query_info', sprintf($GLOBALS['_LANG']['query_info'], $GLOBALS['db']->queryCount, $query_time));

    /* 内存占用情况 */
    if ($GLOBALS['_LANG']['memory_info'] && function_exists('memory_get_usage'))
    {
        $GLOBALS['smarty']->assign('memory_info', sprintf($GLOBALS['_LANG']['memory_info'], memory_get_usage() / 1048576));
    }

    /* 是否启用了 gzip */
    $gzip_enabled = gzip_enabled() ? $GLOBALS['_LANG']['gzip_enabled'] : $GLOBALS['_LANG']['gzip_disabled'];
    $GLOBALS['smarty']->assign('gzip_enabled', $gzip_enabled);
}

/**
 * 创建地区的返回信息
 *
 * @access  public
 * @param   array   $arr    地区数组 *
 * @return  void
 */
function region_result($parent, $sel_name, $type)
{
    global $cp;

    $arr = get_regions($type, $parent);
    foreach ($arr AS $v)
    {
        $region      =& $cp->add_node('region');
        $region_id   =& $region->add_node('id');
        $region_name =& $region->add_node('name');

        $region_id->set_data($v['region_id']);
        $region_name->set_data($v['region_name']);
    }
    $select_obj =& $cp->add_node('select');
    $select_obj->set_data($sel_name);
}

/**
 * 获得指定国家的所有省份
 *
 * @access      public
 * @param       int     country    国家的编号
 * @return      array
 */
function get_regions($type = 0, $parent = 0)
{
    $sql = 'SELECT region_id, region_name FROM ' . $GLOBALS['ecs']->table('region') .
            " WHERE region_type = '$type' AND parent_id = '$parent'";

    return $GLOBALS['db']->GetAll($sql);
}

/**
 * 获得配送区域中指定的配送方式的配送费用的计算参数
 *
 * @access  public
 * @param   int     $area_id        配送区域ID
 *
 * @return array;
 */
function get_shipping_config($area_id)
{
    /* 获得配置信息 */
    $sql = 'SELECT configure FROM ' . $GLOBALS['ecs']->table('shipping_area') . " WHERE shipping_area_id = '$area_id'";
    $cfg = $GLOBALS['db']->GetOne($sql);

    if ($cfg)
    {
        /* 拆分成配置信息的数组 */
        $arr = unserialize($cfg);
    }
    else
    {
        $arr = array();
    }

    return $arr;
}

/**
 * 初始化会员数据整合类
 *
 * @access  public
 * @return  object
 */
function &init_users()
{
    $set_modules = false;
    static $cls = null;
    if ($cls != null)
    {
        return $cls;
    }
    include_once(ROOT_PATH . 'includes/modules/integrates/' . $GLOBALS['_CFG']['integrate_code'] . '.php');
    $cfg = unserialize($GLOBALS['_CFG']['integrate_config']);
    $cls = new $GLOBALS['_CFG']['integrate_code']($cfg);

    return $cls;
}

/**
 * 获得指定分类下的子分类的数组
 *
 * @access  public
 * @param   int     $cat_id     分类的ID
 * @param   int     $selected   当前选中分类的ID
 * @param   boolean $re_type    返回的类型: 值为真时返回下拉列表,否则返回数组
 * @param   int     $level      限定返回的级数。为0时返回所有级数
 * @param   int     $is_show_all 如果为true显示所有分类，如果为false隐藏不可见分类。
 * @return  mix
 */
function cat_list($cat_id = 0, $selected = 0, $re_type = true, $level = 0, $is_show_all = true)
{
    static $res = NULL;

    if ($res === NULL)
    {
        $data = read_static_cache('cat_pid_releate');
        if ($data === false)
        {
            $sql = "SELECT c.cat_id, c.cat_name, c.measure_unit, c.parent_id, c.is_show, c.show_in_nav, c.grade, c.sort_order, COUNT(s.cat_id) AS has_children ".
                'FROM ' . $GLOBALS['ecs']->table('category') . " AS c ".
                "LEFT JOIN " . $GLOBALS['ecs']->table('category') . " AS s ON s.parent_id=c.cat_id ".
                "GROUP BY c.cat_id ".
                'ORDER BY c.parent_id, c.sort_order ASC';
            $res = $GLOBALS['db']->getAll($sql);

            $sql = "SELECT cat_id, COUNT(*) AS goods_num " .
                    " FROM " . $GLOBALS['ecs']->table('goods') .
                    " WHERE is_delete = 0 AND is_on_sale = 1  and is_display=1 " .
                    " GROUP BY cat_id";
            $res2 = $GLOBALS['db']->getAll($sql);

            $sql = "SELECT gc.cat_id, COUNT(*) AS goods_num " .
                    " FROM " . $GLOBALS['ecs']->table('goods_cat') . " AS gc , " . $GLOBALS['ecs']->table('goods') . " AS g " .
                    " WHERE g.goods_id = gc.goods_id AND g.is_delete = 0 AND g.is_on_sale = 1  and g.is_display=1 " .
                    " GROUP BY gc.cat_id";
            $res3 = $GLOBALS['db']->getAll($sql);

            $newres = array();
            foreach($res2 as $k=>$v)
            {
                $newres[$v['cat_id']] = $v['goods_num'];
                foreach($res3 as $ks=>$vs)
                {
                    if($v['cat_id'] == $vs['cat_id'])
                    {
                    $newres[$v['cat_id']] = $v['goods_num'] + $vs['goods_num'];
                    }
                }
            }

            foreach($res as $k=>$v)
            {
                $res[$k]['goods_num'] = !empty($newres[$v['cat_id']]) ? $newres[$v['cat_id']] : 0;
            }
            //如果数组过大，不采用静态缓存方式
            if (count($res) <= 1000)
            {
                write_static_cache('cat_pid_releate', $res);
            }
        }
        else
        {
            $res = $data;
        }
    }

    if (empty($res) == true)
    {
        return $re_type ? '' : array();
    }

    $options = cat_options($cat_id, $res); // 获得指定分类下的子分类的数组

    $children_level = 99999; //大于这个分类的将被删除
    if ($is_show_all == false)
    {
        foreach ($options as $key => $val)
        {
            if ($val['level'] > $children_level)
            {
                unset($options[$key]);
            }
            else
            {
                if ($val['is_show'] == 0)
                {
                    unset($options[$key]);
                    if ($children_level > $val['level'])
                    {
                        $children_level = $val['level']; //标记一下，这样子分类也能删除
                    }
                }
                else
                {
                    $children_level = 99999; //恢复初始值
                }
            }
        }
    }

    /* 截取到指定的缩减级别 */
    if ($level > 0)
    {
        if ($cat_id == 0)
        {
            $end_level = $level;
        }
        else
        {
            $first_item = reset($options); // 获取第一个元素
            $end_level  = $first_item['level'] + $level;
        }

        /* 保留level小于end_level的部分 */
        foreach ($options AS $key => $val)
        {
            if ($val['level'] >= $end_level)
            {
                unset($options[$key]);
            }
        }
    }

    if ($re_type == true)
    {
        $select = '';
        foreach ($options AS $var)
        {
            $select .= '<option value="' . $var['cat_id'] . '" ';
            $select .= ($selected == $var['cat_id']) ? "selected='ture'" : '';
            $select .= '>';
            if ($var['level'] > 0)
            {
                $select .= str_repeat('&nbsp;', $var['level'] * 4);
            }
            $select .= htmlspecialchars(addslashes($var['cat_name']), ENT_QUOTES) . '</option>';
        }

        return $select;
    }
    else
    {
        foreach ($options AS $key => $value)
        {
            $options[$key]['url'] = build_uri('category', array('cid' => $value['cat_id']), $value['cat_name']);
        }

        return $options;
    }
}
/**
 * 
 * 退货原因列表
 * @staticvar null $res     by  Leah
 * @param type $cause_id     自增id
 * @param type $re_type      返回的类型: 值为真时返回下拉列表,否则返回数组
 * @param type $level        限定返回的级数。为0时返回所有级数
 * @param type $is_show_all  如果为true显示所有分类，如果为false隐藏不可见分类。
 * @return string 
 */
function cause_list($cause_id = 0, $selected = 0, $re_type = true, $level = 0, $is_show_all = true)
{
    
    static $res = NULL;

    if ($res === NULL)
    {
       // $data = array();
        //$data = read_static_cache('cause_pid_releate');
      
            $sql = "SELECT c.cause_id, c.cause_name, c.sort_order, c.is_show ,c.parent_id , COUNT(s.cause_id) AS has_children ".
                'FROM ' . $GLOBALS['ecs']->table('return_cause') . " AS c ".
                "LEFT JOIN " . $GLOBALS['ecs']->table('return_cause') . " AS s ON s.parent_id=c.cause_id ".
                "GROUP BY c.cause_id ".
                'ORDER BY c.parent_id, c.sort_order ASC';
            $res = $GLOBALS['db']->getAll($sql);
            //如果数组过大，不采用静态缓存方式
            if (count($res) <= 1000)
            {
                write_static_cache('cause_pid_releate', $res);
            }
        
       
    }

    if (empty($res) == true)
    {
        return $re_type ? '' : array();
    }

    $options = cause_options($cause_id, $res); // 获得指定分类下的子分类的数组

    $children_level = 99999; //大于这个分类的将被删除
    if ($is_show_all == false)
    {
        foreach ($options as $key => $val)
        {
            if ($val['level'] > $children_level)
            {
                unset($options[$key]);
            }
            else
            {
                if ($val['is_show'] == 0)
                {
                    unset($options[$key]);
                    if ($children_level > $val['level'])
                    {
                        $children_level = $val['level']; //标记一下，这样子分类也能删除
                    }
                }
                else
                {
                    $children_level = 99999; //恢复初始值
                }
            }
        }
    }
    /* 截取到指定的缩减级别 */
    if ($level > 0)
    {
        if ($cause_id == 0)
        {
            $end_level = $level;
        }
        else
        {
            $first_item = reset($options); // 获取第一个元素
            $end_level  = $first_item['level'] + $level;
        }

        /* 保留level小于end_level的部分 */
        foreach ($options AS $key => $val)
        {
            if ($val['level'] >= $end_level)
            {
                unset($options[$key]);
            }
        }
    }

    if ($re_type == true)
    {
        $select = '';
        foreach ($options AS $var)
        {
            $select .= '<option value="' . $var['cause_id'] . '" ';
            $select .= ($selected == $var['cause_id']) ? "selected='ture'" : '';
            $select .= '>';
            if ($var['level'] > 0)
            {
                $select .= str_repeat('&nbsp;', $var['level'] * 4);
            }
            $select .= htmlspecialchars(addslashes($var['cause_name']), ENT_QUOTES) . '</option>';
        }

        return $select;
    }
    else
    {
        foreach ($options AS $key => $value)
        {
            $options[$key]['url'] = build_uri('reutrn_cause', array('cid' => $value['cause_id']), $value['cause_name']);
        }

        return $options;
    }
}

/**
 * 获取顶部退换货原因 by Leah
 */
function get_parent_cause(){
    
   $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('return_cause') . " WHERE parent_id = 0  AND is_show = 1  ORDER BY sort_order";
   $result = $GLOBALS['db'] -> getAll( $sql );
   if(is_array($result)){
       
       $select = '';
        foreach ($result AS $var)
        {                                                                                    
            $select .= '<option value="' . $var['cause_id'] . '" ';
            $select .= ($selected == $var['cause_id']) ? "selected='ture'" : '';
            $select .= '>';
            if ($var['level'] > 0)
            {
                $select .= str_repeat('&nbsp;', $var['level'] * 4);
            }
            $select .= htmlspecialchars(addslashes($var['cause_name']), ENT_QUOTES) . '</option>';
        }

        return $select;
   }
    
   else {
       return array();
   }
    
}
/**
 * 过滤和排序所有分类，返回一个带有缩进级别的数组
 *
 * @access  private
 * @param   int     $cat_id     上级分类ID
 * @param   array   $arr        含有所有分类的数组
 * @param   int     $level      级别
 * @return  void
 */
function cat_options($spec_cat_id, $arr)
{
    static $cat_options = array();

    if (isset($cat_options[$spec_cat_id]))
    {
        return $cat_options[$spec_cat_id];
    }

    if (!isset($cat_options[0]))
    {
        $level = $last_cat_id = 0;
        $options = $cat_id_array = $level_array = array();
        $data = read_static_cache('cat_option_static');
        if ($data === false)
        {
            while (!empty($arr))
            {
                foreach ($arr AS $key => $value)
                {
                    $cat_id = $value['cat_id'];
                    if ($level == 0 && $last_cat_id == 0)
                    {
                        if ($value['parent_id'] > 0)
                        {
                            break;
                        }

                        $options[$cat_id]          = $value;
                        $options[$cat_id]['level'] = $level;
                        $options[$cat_id]['id']    = $cat_id;
                        $options[$cat_id]['name']  = $value['cat_name'];
                        unset($arr[$key]);

                        if ($value['has_children'] == 0)
                        {
                            continue;
                        }
                        $last_cat_id  = $cat_id;
                        $cat_id_array = array($cat_id);
                        $level_array[$last_cat_id] = ++$level;
                        continue;
                    }

                    if ($value['parent_id'] == $last_cat_id)
                    {
                        $options[$cat_id]          = $value;
                        $options[$cat_id]['level'] = $level;
                        $options[$cat_id]['id']    = $cat_id;
                        $options[$cat_id]['name']  = $value['cat_name'];
                        unset($arr[$key]);

                        if ($value['has_children'] > 0)
                        {
                            if (end($cat_id_array) != $last_cat_id)
                            {
                                $cat_id_array[] = $last_cat_id;
                            }
                            $last_cat_id    = $cat_id;
                            $cat_id_array[] = $cat_id;
                            $level_array[$last_cat_id] = ++$level;
                        }
                    }
                    elseif ($value['parent_id'] > $last_cat_id)
                    {
                        break;
                    }
                }

                $count = count($cat_id_array);
                if ($count > 1)
                {
                    $last_cat_id = array_pop($cat_id_array);
                }
                elseif ($count == 1)
                {
                    if ($last_cat_id != end($cat_id_array))
                    {
                        $last_cat_id = end($cat_id_array);
                    }
                    else
                    {
                        $level = 0;
                        $last_cat_id = 0;
                        $cat_id_array = array();
                        continue;
                    }
                }

                if ($last_cat_id && isset($level_array[$last_cat_id]))
                {
                    $level = $level_array[$last_cat_id];
                }
                else
                {
                    $level = 0;
                }
            }
            //如果数组过大，不采用静态缓存方式
            if (count($options) <= 2000)
            {
                write_static_cache('cat_option_static', $options);
            }
        }
        else
        {
            $options = $data;
        }
        $cat_options[0] = $options;
    }
    else
    {
        $options = $cat_options[0];
    }

    if (!$spec_cat_id)
    {
        return $options;
    }
    else
    {
        if (empty($options[$spec_cat_id]))
        {
            return array();
        }

        $spec_cat_id_level = $options[$spec_cat_id]['level'];

        foreach ($options AS $key => $value)
        {
            if ($key != $spec_cat_id)
            {
                unset($options[$key]);
            }
            else
            {
                break;
            }
        }

        $spec_cat_id_array = array();
        foreach ($options AS $key => $value)
        {
            if (($spec_cat_id_level == $value['level'] && $value['cat_id'] != $spec_cat_id) ||
                ($spec_cat_id_level > $value['level']))
            {
                break;
            }
            else
            {
                $spec_cat_id_array[$key] = $value;
            }
        }
        $cat_options[$spec_cat_id] = $spec_cat_id_array;

        return $spec_cat_id_array;
    }
}
/**
 * by Leah
 * @staticvar array $cat_options
 * @param type $spec_cat_id
 * @param type $arr
 * @return array
 */
function cause_options($spec_cat_id, $arr)
{
    static $cat_options = array();

    if (isset($cat_options[$spec_cat_id]))
    {
        return $cat_options[$spec_cat_id];
    }

    if (!isset($cat_options[0]))
    {
        $level = $last_cat_id = 0;
        $options = $cat_id_array = $level_array = array();
        //$data = read_static_cache('cause_option_static');
        //$data = array();
//        if ($data === false)
//        {
            while (!empty($arr))
            {
                
                foreach ($arr AS $key => $value)
                {
                    $cat_id = $value['cause_id'];
                    if ($level == 0 && $last_cat_id == 0)
                    {
                        if ($value['parent_id'] > 0)
                        {
                            break;
                        }

                        $options[$cat_id]          = $value;
                        $options[$cat_id]['level'] = $level;
                        $options[$cat_id]['id']    = $cat_id;
                        $options[$cat_id]['name']  = $value['cause_name'];
                        unset($arr[$key]);

                        if ($value['has_children'] == 0)
                        {
                            continue;
                        }
                        $last_cat_id  = $cat_id;
                        $cat_id_array = array($cat_id);
                        $level_array[$last_cat_id] = ++$level;
                        continue;
                    }

                    if ($value['parent_id'] == $last_cat_id)
                    {
                        $options[$cat_id]          = $value;
                        $options[$cat_id]['level'] = $level;
                        $options[$cat_id]['id']    = $cat_id;
                        $options[$cat_id]['name']  = $value['cause_name'];
                        unset($arr[$key]);

                        if ($value['has_children'] > 0)
                        {
                            if (end($cat_id_array) != $last_cat_id)
                            {
                                $cat_id_array[] = $last_cat_id;
                            }
                            $last_cat_id    = $cat_id;
                            $cat_id_array[] = $cat_id;
                            $level_array[$last_cat_id] = ++$level;
                        }
                    }
                    elseif ($value['parent_id'] > $last_cat_id)
                    {
                        break;
                    }
                }

                $count = count($cat_id_array);
                if ($count > 1)
                {
                    $last_cat_id = array_pop($cat_id_array);
                }
                elseif ($count == 1)
                {
                    if ($last_cat_id != end($cat_id_array))
                    {
                        $last_cat_id = end($cat_id_array);
                    }
                    else
                    {
                        $level = 0;
                        $last_cat_id = 0;
                        $cat_id_array = array();
                        continue;
                    }
                }

                if ($last_cat_id && isset($level_array[$last_cat_id]))
                {
                    $level = $level_array[$last_cat_id];
                }
                else
                {
                    $level = 0;
                }
            }
            //如果数组过大，不采用静态缓存方式
            if (count($options) <= 2000)
            {
               // write_static_cache('cause_option_static', $options);
            }
//        }
//        else
//        {
//            $options = $data;
//        }
        $cat_options[0] = $options;
    }
    else
    {
        $options = $cat_options[0];
    }

    if (!$spec_cat_id)
    {
        return $options;
    }
    else
    {
        if (empty($options[$spec_cat_id]))
        {
            return array();
        }

        $spec_cat_id_level = $options[$spec_cat_id]['level'];

        foreach ($options AS $key => $value)
        {
            if ($key != $spec_cat_id)
            {
                unset($options[$key]);
            }
            else
            {
                break;
            }
        }

        $spec_cat_id_array = array();
        foreach ($options AS $key => $value)
        {
            if (($spec_cat_id_level == $value['level'] && $value['cause_id'] != $spec_cat_id) ||
                ($spec_cat_id_level > $value['level']))
            {
                break;
            }
            else
            {
                $spec_cat_id_array[$key] = $value;
            }
        }
        $cat_options[$spec_cat_id] = $spec_cat_id_array;

        return $spec_cat_id_array;
    }
}
/**
 * 载入配置信息
 *
 * @access  public
 * @return  array
 */
function load_config()
{
    $arr = array();

    $data = read_static_cache('shop_config');
    if ($data === false)
    {
        $sql = 'SELECT code, value FROM ' . $GLOBALS['ecs']->table('shop_config') . ' WHERE parent_id > 0';
        $res = $GLOBALS['db']->getAll($sql);

        foreach ($res AS $row)
        {
            $arr[$row['code']] = $row['value'];
        }

        /* 对数值型设置处理 */
        $arr['watermark_alpha']      = intval($arr['watermark_alpha']);
        $arr['market_price_rate']    = floatval($arr['market_price_rate']);
		$arr['wheat_coin']    = floatval($arr['wheat_coin']);
        $arr['integral_scale']       = floatval($arr['integral_scale']);
        //$arr['integral_percent']     = floatval($arr['integral_percent']);
        $arr['cache_time']           = intval($arr['cache_time']);
        $arr['thumb_width']          = intval($arr['thumb_width']);
        $arr['thumb_height']         = intval($arr['thumb_height']);
        $arr['image_width']          = intval($arr['image_width']);
        $arr['image_height']         = intval($arr['image_height']);
        $arr['best_number']          = !empty($arr['best_number']) && intval($arr['best_number']) > 0 ? intval($arr['best_number'])     : 3;
        $arr['new_number']           = !empty($arr['new_number']) && intval($arr['new_number']) > 0 ? intval($arr['new_number'])      : 3;
        $arr['hot_number']           = !empty($arr['hot_number']) && intval($arr['hot_number']) > 0 ? intval($arr['hot_number'])      : 3;
        $arr['promote_number']       = !empty($arr['promote_number']) && intval($arr['promote_number']) > 0 ? intval($arr['promote_number'])  : 3;
        $arr['top_number']           = intval($arr['top_number'])      > 0 ? intval($arr['top_number'])      : 10;
        $arr['history_number']       = intval($arr['history_number'])  > 0 ? intval($arr['history_number'])  : 5;
        $arr['comments_number']      = intval($arr['comments_number']) > 0 ? intval($arr['comments_number']) : 5;
        $arr['article_number']       = intval($arr['article_number'])  > 0 ? intval($arr['article_number'])  : 5;
        $arr['page_size']            = intval($arr['page_size'])       > 0 ? intval($arr['page_size'])       : 10;
        $arr['bought_goods']         = intval($arr['bought_goods']);
        $arr['goods_name_length']    = intval($arr['goods_name_length']);
        $arr['top10_time']           = intval($arr['top10_time']);
        $arr['goods_gallery_number'] = intval($arr['goods_gallery_number']) ? intval($arr['goods_gallery_number']) : 5;
        $arr['no_picture']           = !empty($arr['no_picture']) ? str_replace('../', './', $arr['no_picture']) : 'images/no_picture.gif'; // 修改默认商品图片的路径
        $arr['qq']                   = !empty($arr['qq']) ? $arr['qq'] : '';
        $arr['ww']                   = !empty($arr['ww']) ? $arr['ww'] : '';
        $arr['default_storage']      = isset($arr['default_storage']) ? intval($arr['default_storage']) : 1;
        $arr['min_goods_amount']     = isset($arr['min_goods_amount']) ? floatval($arr['min_goods_amount']) : 0;
        $arr['one_step_buy']         = empty($arr['one_step_buy']) ? 0 : 1;
        $arr['invoice_type']         = empty($arr['invoice_type']) ? array('type' => array(), 'rate' => array()) : unserialize($arr['invoice_type']);
        $arr['show_order_type']      = isset($arr['show_order_type']) ? $arr['show_order_type'] : 0;    // 显示方式默认为列表方式
        $arr['help_open']            = isset($arr['help_open']) ? $arr['help_open'] : 1;    // 显示方式默认为列表方式

        if (!isset($GLOBALS['_CFG']['ecs_version']))
        {
            /* 如果没有版本号则默认为2.0.5 */
            $GLOBALS['_CFG']['ecs_version'] = 'v2.0.5';
        }

        //限定语言项
        $lang_array = array('zh_cn', 'zh_tw', 'en_us');
        if (empty($arr['lang']) || !in_array($arr['lang'], $lang_array))
        {
            $arr['lang'] = 'zh_cn'; // 默认语言为简体中文
        }

        if (empty($arr['integrate_code']))
        {
            $arr['integrate_code'] = 'ecshop'; // 默认的会员整合插件为 ecshop
        }
        write_static_cache('shop_config', $arr);
    }
    else
    {
        $arr = $data;
    }

    return $arr;
}

/**
 * 取得品牌列表
 * @return array 品牌列表 id => name
 */
function get_brand_list()
{
    $sql = 'SELECT brand_id, brand_name FROM ' . $GLOBALS['ecs']->table('brand') . ' ORDER BY sort_order';
    $res = $GLOBALS['db']->getAll($sql);

    $brand_list = array();
    foreach ($res AS $row)
    {
        $brand_list[$row['brand_id']] = addslashes($row['brand_name']);
    }

    return $brand_list;
}

/**
 * 获得某个分类下
 *
 * @access  public
 * @param   int     $cat
 * @return  array
 */
function get_brands($cat = 0, $app = 'brand',$start=-1,$num=0,&$totalCount)
{
    global $page_libs;
    $template = basename(PHP_SELF);
    $template = substr($template, 0, strrpos($template, '.'));
    include_once(ROOT_PATH . ADMIN_PATH . '/includes/lib_template.php');
    static $static_page_libs = null;
    if ($static_page_libs == null)
    {
            $static_page_libs = $page_libs;
    }

    $children = ($cat > 0) ? ' AND ' . get_children($cat) : '';

    $sql = "SELECT b.brand_id, b.brand_name, b.brand_logo, b.brand_desc, COUNT(*) AS goods_num, IF(b.brand_logo > '', '1', '0') AS tag ".
            "FROM " . $GLOBALS['ecs']->table('brand') . "AS b, ".
                $GLOBALS['ecs']->table('goods') . " AS g ".
            "WHERE g.brand_id = b.brand_id $children AND is_show = 1 " .
            " AND g.is_on_sale = 1 AND g.is_alone_sale = 1 AND g.is_delete = 0  and g.is_display=1 ".
            "GROUP BY b.brand_id HAVING goods_num > 0 ORDER BY tag DESC, b.sort_order ASC";
    if (empty($num) && isset($static_page_libs[$template]['/library/brands.lbi']))
    {
        $num = get_library_number("brands");
        $sql .= " LIMIT $num ";
    }else if($start>=1){
        $brand_list = $GLOBALS['db']->selectLimit($sql, $num, ($start - 1) * $num);
    }else{
        $row = $GLOBALS['db']->getAll($sql);
        $totalCount = count($row);
    }

    foreach ($row AS $key => $val)
    {
        $row[$key]['url'] = build_uri($app, array('cid' => $cat, 'bid' => $val['brand_id']), $val['brand_name']);
        $row[$key]['brand_desc'] = htmlspecialchars($val['brand_desc'],ENT_QUOTES);
    }

    return $row;
}

/**
 *  所有的促销活动信息
 *
 * @access  public
 * @return  array
 */
function get_promotion_info($goods_id = '')
{
    $snatch = array();
    $group = array();
    $auction = array();
    $package = array();
    $favourable = array();

    $gmtime = gmtime();
    $sql = 'SELECT act_id, act_name, act_type, start_time, end_time FROM ' . $GLOBALS['ecs']->table('goods_activity') . " WHERE is_finished=0 AND start_time <= '$gmtime' AND end_time >= '$gmtime'";
    if(!empty($goods_id))
    {
        $sql .= " AND goods_id = '$goods_id'";
    }
    $res = $GLOBALS['db']->getAll($sql);
    foreach ($res as $data)
    {
        switch ($data['act_type'])
        {
            case GAT_SNATCH: //夺宝奇兵
                $snatch[$data['act_id']]['act_name'] = $data['act_name'];
                $snatch[$data['act_id']]['url'] = build_uri('snatch', array('sid' => $data['act_id']));
                $snatch[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $snatch[$data['act_id']]['sort'] = $data['start_time'];
                $snatch[$data['act_id']]['type'] = 'snatch';
                break;

            case GAT_GROUP_BUY: //团购
                $group[$data['act_id']]['act_name'] = $data['act_name'];
                $group[$data['act_id']]['url'] = build_uri('group_buy', array('gbid' => $data['act_id']));
                $group[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $group[$data['act_id']]['sort'] = $data['start_time'];
                $group[$data['act_id']]['type'] = 'group_buy';
                break;

            case GAT_AUCTION: //拍卖
                $auction[$data['act_id']]['act_name'] = $data['act_name'];
                $auction[$data['act_id']]['url'] = build_uri('auction', array('auid' => $data['act_id']));
                $auction[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $auction[$data['act_id']]['sort'] = $data['start_time'];
                $auction[$data['act_id']]['type'] = 'auction';
                break;

            case GAT_PACKAGE: //礼包
                $package[$data['act_id']]['act_name'] = $data['act_name'];
                $package[$data['act_id']]['url'] = 'package.php#' . $data['act_id'];
                $package[$data['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $data['start_time']), local_date('Y-m-d', $data['end_time']));
                $package[$data['act_id']]['sort'] = $data['start_time'];
                $package[$data['act_id']]['type'] = 'package';
                break;
        }
    }

    $user_rank = ',' . $_SESSION['user_rank'] . ',';
    $favourable = array();
    $sql = 'SELECT act_id, act_range, act_range_ext, act_name, start_time, end_time FROM ' . $GLOBALS['ecs']->table('favourable_activity') . " WHERE start_time <= '$gmtime' AND end_time >= '$gmtime'";
    if(!empty($goods_id))
    {
        $sql .= " AND CONCAT(',', user_rank, ',') LIKE '%" . $user_rank . "%'";
    }
    $res = $GLOBALS['db']->getAll($sql);

    if(empty($goods_id))
    {
        foreach ($res as $rows)
        {
            $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
            $favourable[$rows['act_id']]['url'] = 'activity.php';
            $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
            $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
            $favourable[$rows['act_id']]['type'] = 'favourable';
        }
    }
    else
    {
        $sql = "SELECT cat_id, brand_id FROM " . $GLOBALS['ecs']->table('goods') .
           "WHERE goods_id = '$goods_id'";
        $row = $GLOBALS['db']->getRow($sql);
        $category_id = $row['cat_id'];
        $brand_id = $row['brand_id'];

        foreach ($res as $rows)
        {
            if ($rows['act_range'] == FAR_ALL)
            {
                $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                $favourable[$rows['act_id']]['url'] = 'activity.php';
                $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                $favourable[$rows['act_id']]['type'] = 'favourable';
            }
            elseif ($rows['act_range'] == FAR_CATEGORY)
            {
                /* 找出分类id的子分类id */
                $id_list = array();
                $raw_id_list = explode(',', $rows['act_range_ext']);
                foreach ($raw_id_list as $id)
                {
                    $id_list = array_merge($id_list, array_keys(cat_list($id, 0, false)));
                }
                $ids = join(',', array_unique($id_list));

                if (strpos(',' . $ids . ',', ',' . $category_id . ',') !== false)
                {
                    $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                    $favourable[$rows['act_id']]['url'] = 'activity.php';
                    $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                    $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                    $favourable[$rows['act_id']]['type'] = 'favourable';
                }
            }
            elseif ($rows['act_range'] == FAR_BRAND)
            {
                if (strpos(',' . $rows['act_range_ext'] . ',', ',' . $brand_id . ',') !== false)
                {
                    $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                    $favourable[$rows['act_id']]['url'] = 'activity.php';
                    $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                    $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                    $favourable[$rows['act_id']]['type'] = 'favourable';
                }
            }
            elseif ($rows['act_range'] == FAR_GOODS)
            {
                if (strpos(',' . $rows['act_range_ext'] . ',', ',' . $goods_id . ',') !== false)
                {
                    $favourable[$rows['act_id']]['act_name'] = $rows['act_name'];
                    $favourable[$rows['act_id']]['url'] = 'activity.php';
                    $favourable[$rows['act_id']]['time'] = sprintf($GLOBALS['_LANG']['promotion_time'], local_date('Y-m-d', $rows['start_time']), local_date('Y-m-d', $rows['end_time']));
                    $favourable[$rows['act_id']]['sort'] = $rows['start_time'];
                    $favourable[$rows['act_id']]['type'] = 'favourable';
                }
            }
        }
    }

//    if(!empty($goods_id))
//    {
//        return array('snatch'=>$snatch, 'group_buy'=>$group, 'auction'=>$auction, 'favourable'=>$favourable);
//    }

    $sort_time = array();
    $arr = array_merge($snatch, $group, $auction, $package, $favourable);
    foreach($arr as $key => $value)
    {
        $sort_time[] = $value['sort'];
    }
    array_multisort($sort_time, SORT_NUMERIC, SORT_DESC, $arr);

    return $arr;
}

/**
 * 获得指定分类下所有底层分类的ID
 *
 * @access  public
 * @param   integer     $cat        指定的分类ID
 * @return  string
 */
function get_children($cat = 0)
{
    return 'g.cat_id ' . db_create_in(array_unique(array_merge(array($cat), array_keys(cat_list($cat, 0, false)))));
}


/**
 * 获得入驻商家指定分类下所有底层分类的ID
 *
 * @access  public
 * @param   integer     $cat        指定的分类ID
 * @return  string
 */
function get_seller_children($cat = 0)
{
    return 'g.seller_cat_id ' . db_create_in(array_unique(array_merge(array($cat), array_keys(seller_cat_list($cat, 0, false)))));
}

/**
 * 获得指定文章分类下所有底层分类的ID
 *
 * @access  public
 * @param   integer     $cat        指定的分类ID
 *
 * @return void
 */
function get_article_children ($cat = 0)
{
    return db_create_in(array_unique(array_merge(array($cat), array_keys(article_cat_list($cat, 0, false)))), 'cat_id');
}

/**
 * 获取邮件模板
 *
 * @access  public
 * @param:  $tpl_name[string]       模板代码
 *
 * @return array
 */
function get_mail_template($tpl_name)
{
    $sql = 'SELECT template_subject, is_html, template_content FROM ' . $GLOBALS['ecs']->table('mail_templates') . " WHERE template_code = '$tpl_name'";

    return $GLOBALS['db']->GetRow($sql);

}

/**
 * 记录订单操作记录
 *
 * @access  public
 * @param   string  $order_sn           订单编号
 * @param   integer $order_status       订单状态
 * @param   integer $shipping_status    配送状态
 * @param   integer $pay_status         付款状态
 * @param   string  $note               备注
 * @param   string  $username           用户名，用户自己的操作则为 buyer
 * @return  void
 */
function order_action($order_sn, $order_status, $shipping_status, $pay_status, $note = '', $username = null, $place = 0)
{
    if (is_null($username))
    {
        $username = $_SESSION['admin_name'];
    }

    $sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('order_action') .
                ' (order_id, action_user, order_status, shipping_status, pay_status, action_place, action_note, log_time) ' .
            'SELECT ' .
                "order_id, '$username', '$order_status', '$shipping_status', '$pay_status', '$place', '$note', '" .gmtime() . "' " .
            'FROM ' . $GLOBALS['ecs']->table('order_info') . " WHERE order_sn = '$order_sn'";
    $GLOBALS['db']->query($sql);
}
/**
 * 记录订单操作记录 by　　Leah
 *
 * @access  public
 * @param   string  $order_sn           订单编号
 * @param   integer $order_status       订单状态
 * @param   integer $shipping_status    配送状态
 * @param   integer $pay_status         付款状态
 * @param   string  $note               备注
 * @param   string  $username           用户名，用户自己的操作则为 buyer
 * @return  void
 */
function return_action($ret_id, $return_status, $refound_status, $note = '', $username = null, $place = 0)
{
    if (is_null($username))
    {
        $username = $_SESSION['admin_name'];
    }

    $sql = 'INSERT INTO ' . $GLOBALS['ecs']->table('return_action') .
                ' (ret_id, action_user, return_status, refound_status, action_place, action_note, log_time) ' .
            'SELECT ' .
                "ret_id, '$username', '$return_status', '$refound_status', '$place', '$note', '" .gmtime() . "' " .
            'FROM ' . $GLOBALS['ecs']->table('order_return') . " WHERE ret_id = '$ret_id'";  
    $GLOBALS['db']->query($sql);
}
/**
 * 格式化商品价格
 *
 * @access  public
 * @param   float   $price  商品价格
 * @return  string
 */
function price_format($price, $change_price = true)
{
    if($price==='')
    {
     $price=0;
    }
    if ($change_price && defined('ECS_ADMIN') === false)
    {
        switch ($GLOBALS['_CFG']['price_format'])
        {
            case 0:
                $price = number_format($price, 2, '.', '');
                break;
            case 1: // 保留不为 0 的尾数
                $price = preg_replace('/(.*)(\\.)([0-9]*?)0+$/', '\1\2\3', number_format($price, 2, '.', ''));

                if (substr($price, -1) == '.')
                {
                    $price = substr($price, 0, -1);
                }
                break;
            case 2: // 不四舍五入，保留1位
                $price = substr(number_format($price, 2, '.', ''), 0, -1);
                break;
            case 3: // 直接取整
                $price = intval($price);
                break;
            case 4: // 四舍五入，保留 1 位
                $price = number_format($price, 1, '.', '');
                break;
            case 5: // 先四舍五入，不保留小数
                $price = round($price);
                break;
        }
    }
    else
    {
        $price = number_format($price, 2, '.', '');
    }

    return  $price;
//    return sprintf($GLOBALS['_CFG']['currency_format'], $price);
}

/**
 * 返回订单中的虚拟商品
 *
 * @access  public
 * @param   int   $order_id   订单id值
 * @param   bool  $shipping   是否已经发货
 *
 * @return array()
 */
function get_virtual_goods($order_id, $shipping = false)
{
    if ($shipping)
    {
        $sql = 'SELECT goods_id, goods_name, send_number AS num, extension_code FROM '.
           $GLOBALS['ecs']->table('order_goods') .
           " WHERE order_id = '$order_id' AND extension_code > ''";
    }
    else
    {
        $sql = 'SELECT goods_id, goods_name, (goods_number - send_number) AS num, extension_code FROM '.
           $GLOBALS['ecs']->table('order_goods') .
           " WHERE order_id = '$order_id' AND is_real = 0 AND (goods_number - send_number) > 0 AND extension_code > '' ";
    }
    $res = $GLOBALS['db']->getAll($sql);

    $virtual_goods = array();
    foreach ($res AS $row)
    {
        $virtual_goods[$row['extension_code']][] = array('goods_id' => $row['goods_id'], 'goods_name' => $row['goods_name'], 'num' => $row['num']);
    }

    return $virtual_goods;
}

/**
 *  虚拟商品发货
 *
 * @access  public
 * @param   array  $virtual_goods   虚拟商品数组
 * @param   string $msg             错误信息
 * @param   string $order_sn        订单号。
 * @param   string $process         设定当前流程：split，发货分单流程；other，其他，默认。
 *
 * @return bool
 */
function virtual_goods_ship(&$virtual_goods, &$msg, $order_sn, $return_result = false, $process = 'other')
{
    $virtual_card = array();
    foreach ($virtual_goods AS $code => $goods_list)
    {
        /* 只处理虚拟卡 */
        if ($code == 'virtual_card')
        {
            foreach ($goods_list as $goods)
            {
                if (virtual_card_shipping($goods, $order_sn, $msg, $process))
                {
                    if ($return_result)
                    {
                        $virtual_card[] = array('goods_id'=>$goods['goods_id'], 'goods_name'=>$goods['goods_name'], 'info'=>virtual_card_result($order_sn, $goods));
                    }
                }
                else
                {
                    return false;
                }
            }
            $GLOBALS['smarty']->assign('virtual_card',      $virtual_card);
        }
    }

    return true;
}

/**
 *  虚拟卡发货
 *
 * @access  public
 * @param   string      $goods      商品详情数组
 * @param   string      $order_sn   本次操作的订单
 * @param   string      $msg        返回信息
 * @param   string      $process    设定当前流程：split，发货分单流程；other，其他，默认。
 *
 * @return  boolen
 */
function virtual_card_shipping ($goods, $order_sn, &$msg, $process = 'other')
{
    /* 包含加密解密函数所在文件 */
    include_once(ROOT_PATH . 'includes/lib_code.php');

    /* 检查有没有缺货 */
    $sql = "SELECT COUNT(*) FROM ".$GLOBALS['ecs']->table('virtual_card')." WHERE goods_id = '$goods[goods_id]' AND is_saled = 0 ";
    $num = $GLOBALS['db']->GetOne($sql);

    if ($num < $goods['num'])
    {
        $msg .= sprintf($GLOBALS['_LANG']['virtual_card_oos'], $goods['goods_name']);

        return false;
    }

     /* 取出卡片信息 */
     $sql = "SELECT card_id, card_sn, card_password, end_date, crc32 FROM ".$GLOBALS['ecs']->table('virtual_card')." WHERE goods_id = '$goods[goods_id]' AND is_saled = 0  LIMIT " . $goods['num'];
     $arr = $GLOBALS['db']->getAll($sql);

     $card_ids = array();
     $cards = array();

     foreach ($arr as $virtual_card)
     {
        $card_info = array();

        /* 卡号和密码解密 */
        if ($virtual_card['crc32'] == 0 || $virtual_card['crc32'] == crc32(AUTH_KEY))
        {
            $card_info['card_sn'] = decrypt($virtual_card['card_sn']);
            $card_info['card_password'] = decrypt($virtual_card['card_password']);
        }
        elseif ($virtual_card['crc32'] == crc32(OLD_AUTH_KEY))
        {
            $card_info['card_sn'] = decrypt($virtual_card['card_sn'], OLD_AUTH_KEY);
            $card_info['card_password'] = decrypt($virtual_card['card_password'], OLD_AUTH_KEY);
        }
        else
        {
            $msg .= 'error key';

            return false;
        }
        $card_info['end_date'] = date($GLOBALS['_CFG']['date_format'], $virtual_card['end_date']);
        $card_ids[] = $virtual_card['card_id'];
        $cards[] = $card_info;
     }

     /* 标记已经取出的卡片 */
    $sql = "UPDATE ".$GLOBALS['ecs']->table('virtual_card')." SET ".
           "is_saled = 1 ,".
           "order_sn = '$order_sn' ".
           "WHERE " . db_create_in($card_ids, 'card_id');
    if (!$GLOBALS['db']->query($sql, 'SILENT'))
    {
        $msg .= $GLOBALS['db']->error();

        return false;
    }

    /* 更新库存 */
    $sql = "UPDATE ".$GLOBALS['ecs']->table('goods'). " SET goods_number = goods_number - '$goods[num]' WHERE goods_id = '$goods[goods_id]'";
    $GLOBALS['db']->query($sql);

    if (true)
    {
        /* 获取订单信息 */
        $sql = "SELECT order_id, order_sn, consignee, email FROM ".$GLOBALS['ecs']->table('order_info'). " WHERE order_sn = '$order_sn'";
        $order = $GLOBALS['db']->GetRow($sql);

        /* 更新订单信息 */
        if ($process == 'split')
        {
            $sql = "UPDATE ".$GLOBALS['ecs']->table('order_goods'). "
                    SET send_number = send_number + '" . $goods['num'] . "'
                    WHERE order_id = '" . $order['order_id'] . "'
                    AND goods_id = '" . $goods['goods_id'] . "' ";
        }
        else
        {
            $sql = "UPDATE ".$GLOBALS['ecs']->table('order_goods'). "
                    SET send_number = '" . $goods['num'] . "'
                    WHERE order_id = '" . $order['order_id'] . "'
                    AND goods_id = '" . $goods['goods_id'] . "' ";
        }

        if (!$GLOBALS['db']->query($sql, 'SILENT'))
        {
            $msg .= $GLOBALS['db']->error();

            return false;
        }
    }

    /* 发送邮件 */
    $GLOBALS['smarty']->assign('virtual_card',                   $cards);
    $GLOBALS['smarty']->assign('order',                          $order);
    $GLOBALS['smarty']->assign('goods',                          $goods);

    $GLOBALS['smarty']->assign('send_time', date('Y-m-d H:i:s'));
    $GLOBALS['smarty']->assign('shop_name', $GLOBALS['_CFG']['shop_name']);
    $GLOBALS['smarty']->assign('send_date', date('Y-m-d'));
    $GLOBALS['smarty']->assign('sent_date', date('Y-m-d'));

    $tpl = get_mail_template('virtual_card');
    $content = $GLOBALS['smarty']->fetch('str:' . $tpl['template_content']);
    send_mail($order['consignee'], $order['email'], $tpl['template_subject'], $content, $tpl['is_html']);

    return true;
}

/**
 *  返回虚拟卡信息
 *
 * @access  public
 * @param
 *
 * @return void
 */
function virtual_card_result($order_sn, $goods)
{
    /* 包含加密解密函数所在文件 */
    include_once(ROOT_PATH . 'includes/lib_code.php');

    /* 获取已经发送的卡片数据 */
    $sql = "SELECT card_sn, card_password, end_date, crc32 FROM ".$GLOBALS['ecs']->table('virtual_card')." WHERE goods_id= '$goods[goods_id]' AND order_sn = '$order_sn' ";
    $res= $GLOBALS['db']->query($sql);

    $cards = array();

    while ($row = $GLOBALS['db']->FetchRow($res))
    {
        /* 卡号和密码解密 */
        if ($row['crc32'] == 0 || $row['crc32'] == crc32(AUTH_KEY))
        {
            $row['card_sn'] = decrypt($row['card_sn']);
            $row['card_password'] = decrypt($row['card_password']);
        }
        elseif ($row['crc32'] == crc32(OLD_AUTH_KEY))
        {
            $row['card_sn'] = decrypt($row['card_sn'], OLD_AUTH_KEY);
            $row['card_password'] = decrypt($row['card_password'], OLD_AUTH_KEY);
        }
        else
        {
            $row['card_sn'] = '***';
            $row['card_password'] = '***';
        }

        $cards[] = array('card_sn'=>$row['card_sn'], 'card_password'=>$row['card_password'], 'end_date'=>date($GLOBALS['_CFG']['date_format'], $row['end_date']));
    }

    return $cards;
}

/**
 * 获取指定 id snatch 活动的结果
 *
 * @access  public
 * @param   int   $id       snatch_id
 *
 * @return  array           array(user_name, bie_price, bid_time, num)
 *                          num通常为1，如果为2表示有2个用户取到最小值，但结果只返回最早出价用户。
 */
function get_snatch_result($id)
{
    $sql = 'SELECT u.user_id, u.user_name, u.email, lg.bid_price, lg.bid_time, count(*) as num' .
            ' FROM ' . $GLOBALS['ecs']->table('snatch_log') . ' AS lg '.
            ' LEFT JOIN ' . $GLOBALS['ecs']->table('users') . ' AS u ON lg.user_id = u.user_id'.
            " WHERE lg.snatch_id = '$id'".
            ' GROUP BY lg.bid_price' .
            ' ORDER BY num ASC, lg.bid_price ASC, lg.bid_time ASC LIMIT 1';
    $rec = $GLOBALS['db']->GetRow($sql);

    if ($rec)
    {
        $rec['bid_time']  = local_date($GLOBALS['_CFG']['time_format'], $rec['bid_time']);
        $rec['formated_bid_price'] = price_format($rec['bid_price'], false);

        /* 活动信息 */
        $sql = 'SELECT ext_info " .
               " FROM ' . $GLOBALS['ecs']->table('goods_activity') .
               " WHERE act_id= '$id' AND act_type=" . GAT_SNATCH.
               " LIMIT 1";
        $row = $GLOBALS['db']->getOne($sql);
        $info = unserialize($row);

        if (!empty($info['max_price']))
        {
            $rec['buy_price'] = ($rec['bid_price'] > $info['max_price']) ? $info['max_price'] : $rec['bid_price'];
        }
        else
        {
            $rec['buy_price'] = $rec['bid_price'];
        }



        /* 检查订单 */
        $sql = "SELECT COUNT(*)" .
                " FROM " . $GLOBALS['ecs']->table('order_info') .
                " WHERE extension_code = 'snatch'" .
                " AND extension_id = '$id'" .
                " AND order_status " . db_create_in(array(OS_CONFIRMED, OS_UNCONFIRMED));

        $rec['order_count'] = $GLOBALS['db']->getOne($sql);
    }

    return $rec;
}

/**
 *  清除指定后缀的模板缓存或编译文件
 *
 * @access  public
 * @param  bool       $is_cache  是否清除缓存还是清出编译文件
 * @param  string     $ext       需要删除的文件名，不包含后缀
 *
 * @return int        返回清除的文件个数
 */
function clear_tpl_files($is_cache = true, $ext = '')
{
    $dirs = array();

    if (isset($GLOBALS['shop_id']) && $GLOBALS['shop_id'] > 0)
    {
        $tmp_dir = DATA_DIR ;
    }
    else
    {
        $tmp_dir = 'temp';
    }
    if ($is_cache)
    {
        $cache_dir = ROOT_PATH . $tmp_dir . '/caches/';
        $dirs[] = ROOT_PATH . $tmp_dir . '/query_caches/';
        $dirs[] = ROOT_PATH . $tmp_dir . '/static_caches/';
        for($i = 0; $i < 16; $i++)
        {
            $hash_dir = $cache_dir . dechex($i);
            $dirs[] = $hash_dir . '/';
        }
    }
    else
    {
        $dirs[] = ROOT_PATH . $tmp_dir . '/compiled/';
        $dirs[] = ROOT_PATH . $tmp_dir . '/compiled/admin/';
    }

    $str_len = strlen($ext);
    $count   = 0;

    foreach ($dirs AS $dir)
    {
        $folder = @opendir($dir);

        if ($folder === false)
        {
            continue;
        }

        while ($file = readdir($folder))
        {
            if ($file == '.' || $file == '..' || $file == 'index.htm' || $file == 'index.html')
            {
                continue;
            }
            if (is_file($dir . $file))
            {
                /* 如果有文件名则判断是否匹配 */
                $pos = ($is_cache) ? strrpos($file, '_') : strrpos($file, '.');

                if ($str_len > 0 && $pos !== false)
                {
                    $ext_str = substr($file, 0, $pos);

                    if ($ext_str == $ext)
                    {
                        if (@unlink($dir . $file))
                        {
                            $count++;
                        }
                    }
                }
                else
                {
                    if (@unlink($dir . $file))
                    {
                        $count++;
                    }
                }
            }
        }
        closedir($folder);
    }

    return $count;
}

/**
 * 清除模版编译文件
 *
 * @access  public
 * @param   mix     $ext    模版文件名， 不包含后缀
 * @return  void
 */
function clear_compiled_files($ext = '')
{
    return clear_tpl_files(false, $ext);
}

/**
 * 清除缓存文件
 *
 * @access  public
 * @param   mix     $ext    模版文件名， 不包含后缀
 * @return  void
 */
function clear_cache_files($ext = '')
{
    return clear_tpl_files(true, $ext);
}

/**
 * 清除模版编译和缓存文件
 *
 * @access  public
 * @param   mix     $ext    模版文件名后缀
 * @return  void
 */
function clear_all_files($ext = '')
{
    return clear_tpl_files(false, $ext) + clear_tpl_files(true,  $ext);
}

/**
 * 页面上调用的js文件
 *
 * @access  public
 * @param   string      $files
 * @return  void
 */
function smarty_insert_scripts($args)
{
    static $scripts = array();

    $arr = explode(',', str_replace(' ','',$args['files']));

    $str = '';
    foreach ($arr AS $val)
    {
        if (in_array($val, $scripts) == false)
        {
            $scripts[] = $val;
            if ($val{0} == '.')
            {
                $str .= '<script type="text/javascript" src="' . $val . '"></script>';
            }
            else
            {
                $str .= '<script type="text/javascript" src="js/' . $val . '"></script>';
            }
        }
    }

    return $str;
}

/**
 * 创建分页的列表
 *
 * @access  public
 * @param   integer $count
 * @return  string
 */
function smarty_create_pages($params)
{
    extract($params);

    $str = '';
    $len = 10;

    if (empty($page))
    {
        $page = 1;
    }

    if (!empty($count))
    {
        $step = 1;
        $str .= "<option value='1'>1</option>";

        for ($i = 2; $i < $count; $i += $step)
        {
            $step = ($i >= $page + $len - 1 || $i <= $page - $len + 1) ? $len : 1;
            $str .= "<option value='$i'";
            $str .= $page == $i ? " selected='true'" : '';
            $str .= ">$i</option>";
        }

        if ($count > 1)
        {
            $str .= "<option value='$count'";
            $str .= $page == $count ? " selected='true'" : '';
            $str .= ">$count</option>";
        }
    }

    return $str;
}

/**
 * 重写 URL 地址
 *
 * @access  public
 * @param   string  $app        执行程序
 * @param   array   $params     参数数组
 * @param   string  $append     附加字串
 * @param   integer $page       页数
 * @param   string  $keywords   搜索关键词字符串
 * @return  void
 */
function build_uri($app, $params, $append = '', $page = 0, $keywords = '', $size = 0)
{
    static $rewrite = NULL;

    if ($rewrite === NULL)
    {
        $rewrite = intval($GLOBALS['_CFG']['rewrite']);
    }

    $args = array('cid'   => 0,
                  'gid'   => 0,
                  'bid'   => 0,
                  'acid'  => 0,
                  'aid'   => 0,
                  'sid'   => 0,
                  'gbid'  => 0,
                  'auid'  => 0,
                  'sort'  => '',
                  'order' => '',
				  'price_min'=>'',
				  'price_max'=>'',
				  'filter_attr'=>''
                );
	
    extract(array_merge($args, $params));
	
    $uri = '';
    switch ($app)
    {
		//wang 商家入驻 start
		case 'seller_goods':

            if (empty($sid))
            {
                return false;
            }
            else
            {
                if ($rewrite)
                {
                    $uri = 'seller_goods-' . $sid;
                    if (isset($cid))
                    {
                        $uri .= '-c' . $cid;
                    }
                    if (isset($price_min))
                    {
                        $uri .= '-min'.$price_min;
                    }
                    if (isset($price_max))
                    {
                        $uri .= '-max'.$price_max;
                    }
                    if (isset($filter_attr))
                    {
                        $uri .= '-attr' . $filter_attr;
                    }
                    if (!empty($page))
                    {
                        $uri .= '-' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '-' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '-' . $order;
                    }
                }
                else
                {
                    $uri = 'seller_goods.php?sid=' . $sid;
                    if (!empty($cid))
                    {
                        $uri .= '&amp;cid=' . $cid;
                    }
                    if (isset($price_min))
                    {
                        $uri .= '&amp;price_min=' . $price_min;
                    }
                    if (isset($price_max))
                    {
                        $uri .= '&amp;price_max=' . $price_max;
                    }
                    if (!empty($filter_attr))
                    {
                        $uri .='&amp;filter_attr=' . $filter_attr;
                    }

                    if (!empty($page))
                    {
                        $uri .= '&amp;page=' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '&amp;sort=' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '&amp;order=' . $order;
                    }
                }
            }
            break;//wang 商家入驻 end
        case 'category':
            if (empty($cid))
            {
                return false;
            }
            else
            {
                if ($rewrite)
                {
                    $uri = 'category-' . $cid;
                    if (isset($bid))
                    {
                        $uri .= '-b' . $bid;
                    }
                    if (isset($price_min))
                    {
                        $uri .= '-min'.$price_min;
                    }
                    if (isset($price_max))
                    {
                        $uri .= '-max'.$price_max;
                    }
                    if (isset($filter_attr))
                    {
                        $uri .= '-attr' . $filter_attr;
                    }
                    if (!empty($page))
                    {
                        $uri .= '-' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '-' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '-' . $order;
                    }
                }
                else
                {
                    $uri = 'category.php?id=' . $cid;
                    if (!empty($bid))
                    {
                        $uri .= '&amp;brand=' . $bid;
                    }
                    if (isset($price_min))
                    {
                        $uri .= '&amp;price_min=' . $price_min;
                    }
                    if (isset($price_max))
                    {
                        $uri .= '&amp;price_max=' . $price_max;
                    }
                    if (!empty($filter_attr))
                    {
                        $uri .='&amp;filter_attr=' . $filter_attr;
                    }

                    if (!empty($page))
                    {
                        $uri .= '&amp;page=' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '&amp;sort=' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '&amp;order=' . $order;
                    }
                }
            }

            break;
        case 'goods':
            if (empty($gid))
            {
                return false;
            }
            else
            {
                $uri = $rewrite ? 'goods-' . $gid : 'goods.php?id=' . $gid;
            }

            break;
        case 'brand':
            if (empty($bid))
            {
                return false;
            }
            else
            {
                if ($rewrite)
                {
                    $uri = 'brand-' . $bid;
                    if (isset($cid))
                    {
                        $uri .= '-c' . $cid;
                    }
                    if (!empty($page))
                    {
                        $uri .= '-' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '-' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '-' . $order;
                    }
                }
                else
                {
                    $uri = 'brand.php?id=' . $bid;
                    if (!empty($cid))
                    {
                        $uri .= '&amp;cat=' . $cid;
                    }
                    if (!empty($page))
                    {
                        $uri .= '&amp;page=' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '&amp;sort=' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '&amp;order=' . $order;
                    }
                }
            }

            break;
        case 'article_cat':
            if (empty($acid))
            {
                return false;
            }
            else
            {
                if ($rewrite)
                {
                    $uri = 'article_cat-' . $acid;
                    if (!empty($page))
                    {
                        $uri .= '-' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '-' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '-' . $order;
                    }
                    if (!empty($keywords))
                    {
                        $uri .= '-' . $keywords;
                    }
                }
                else
                {
                    $uri = 'article_cat.php?id=' . $acid;
                    if (!empty($page))
                    {
                        $uri .= '&amp;page=' . $page;
                    }
                    if (!empty($sort))
                    {
                        $uri .= '&amp;sort=' . $sort;
                    }
                    if (!empty($order))
                    {
                        $uri .= '&amp;order=' . $order;
                    }
                    if (!empty($keywords))
                    {
                        $uri .= '&amp;keywords=' . $keywords;
                    }
                }
            }

            break;
        case 'article':
            if (empty($aid))
            {
                return false;
            }
            else
            {
                $uri = $rewrite ? 'article-' . $aid : 'article.php?id=' . $aid;
            }

            break;
        case 'group_buy':
            if (empty($gbid))
            {
                return false;
            }
            else
            {
                $uri = $rewrite ? 'group_buy-' . $gbid : 'group_buy.php?act=view&amp;id=' . $gbid;
            }

            break;
        case 'auction':
            if (empty($auid))
            {
                return false;
            }
            else
            {
                $uri = $rewrite ? 'auction-' . $auid : 'auction.php?act=view&amp;id=' . $auid;
            }

            break;
        case 'snatch':
            if (empty($sid))
            {
                return false;
            }
            else
            {
                $uri = $rewrite ? 'snatch-' . $sid : 'snatch.php?id=' . $sid;
            }

            break;
        case 'search':
            break;
        case 'exchange':
            if ($rewrite)
            {
                $uri = 'exchange-' . $cid;
                if (isset($price_min))
                {
                    $uri .= '-min'.$price_min;
                }
                if (isset($price_max))
                {
                    $uri .= '-max'.$price_max;
                }
                if (!empty($page))
                {
                    $uri .= '-' . $page;
                }
                if (!empty($sort))
                {
                    $uri .= '-' . $sort;
                }
                if (!empty($order))
                {
                    $uri .= '-' . $order;
                }
            }
            else
            {
                $uri = 'exchange.php?cat_id=' . $cid;
                if (isset($price_min))
                {
                    $uri .= '&amp;integral_min=' . $price_min;
                }
                if (isset($price_max))
                {
                    $uri .= '&amp;integral_max=' . $price_max;
                }

                if (!empty($page))
                {
                    $uri .= '&amp;page=' . $page;
                }
                if (!empty($sort))
                {
                    $uri .= '&amp;sort=' . $sort;
                }
                if (!empty($order))
                {
                    $uri .= '&amp;order=' . $order;
                }
            }

            break;
        case 'exchange_goods':
            if (empty($gid))
            {
                return false;
            }
            else
            {
                $uri = $rewrite ? 'exchange-id' . $gid : 'exchange.php?id=' . $gid . '&amp;act=view';
            }

            break;
        default:
            return false;
            break;
    }

    if ($rewrite)
    {
        if ($rewrite == 2 && !empty($append))
        {
            $uri .= '-' . urlencode(preg_replace('/[\.|\/|\?|&|\+|\\\|\'|"|,]+/', '', $append));
        }

        $uri .= '.html';
    }
    if (($rewrite == 2) && (strpos(strtolower(EC_CHARSET), 'utf') !== 0))
    {
        $uri = urlencode($uri);
    }
    return $uri;
}

/**
 * 格式化重量：小于1千克用克表示，否则用千克表示
 * @param   float   $weight     重量
 * @return  string  格式化后的重量
 */
function formated_weight($weight)
{
    $weight = round(floatval($weight), 3);
    if ($weight > 0)
    {
        if ($weight < 1)
        {
            /* 小于1千克，用克表示 */
            return intval($weight * 1000) . $GLOBALS['_LANG']['gram'];
        }
        else
        {
            /* 大于1千克，用千克表示 */
            return $weight . $GLOBALS['_LANG']['kilogram'];
        }
    }
    else
    {
        return 0;
    }
}

/**
 * 记录帐户变动
 * @param   int     $user_id        用户id
 * @param   float   $user_money     可用余额变动
 * @param   float   $frozen_money   冻结余额变动
 * @param   int     $rank_points    等级积分变动
 * @param   int     $pay_points     消费积分变动
 * @param   string  $change_desc    变动说明
 * @param   int     $change_type    变动类型：参见常量文件
 * @return  void
 */
function log_account_change($user_id, $user_money = 0, $frozen_money = 0, $rank_points = 0, $pay_points = 0, $change_desc = '', $change_type = ACT_OTHER)
{
    /* 插入帐户变动记录 */
    $account_log = array(
        'user_id'       => $user_id,
        'user_money'    => $user_money,
        'frozen_money'  => $frozen_money,
        'rank_points'   => $rank_points,
        'pay_points'    => $pay_points,
        'change_time'   => gmtime(),
        'change_desc'   => $change_desc,
        'change_type'   => $change_type
    );
    $GLOBALS['db']->autoExecute($GLOBALS['ecs']->table('account_log'), $account_log, 'INSERT');

    /* 更新用户信息 */
    $sql = "UPDATE " . $GLOBALS['ecs']->table('users') .
            " SET user_money = user_money + ('$user_money')," .
            " frozen_money = frozen_money + ('$frozen_money')," .
            " rank_points = rank_points + ('$rank_points')," .
            " pay_points = pay_points + ('$pay_points')" .
            " WHERE user_id = '$user_id' LIMIT 1";
    $GLOBALS['db']->query($sql);
}


/**
 * 获得指定分类下的子分类的数组
 *
 * @access  public
 * @param   int     $cat_id     分类的ID
 * @param   int     $selected   当前选中分类的ID
 * @param   boolean $re_type    返回的类型: 值为真时返回下拉列表,否则返回数组
 * @param   int     $level      限定返回的级数。为0时返回所有级数
 * @return  mix
 */
function article_cat_list($cat_id = 0, $selected = 0, $re_type = true, $level = 0)
{
    static $res = NULL;

    if ($res === NULL)
    {
        $data = read_static_cache('art_cat_pid_releate');
        if ($data === false)
        {
            $sql = "SELECT c.*, COUNT(s.cat_id) AS has_children, COUNT(a.article_id) AS aricle_num ".
               ' FROM ' . $GLOBALS['ecs']->table('article_cat') . " AS c".
               " LEFT JOIN " . $GLOBALS['ecs']->table('article_cat') . " AS s ON s.parent_id=c.cat_id".
               " LEFT JOIN " . $GLOBALS['ecs']->table('article') . " AS a ON a.cat_id=c.cat_id".
               " GROUP BY c.cat_id ".
               " ORDER BY parent_id, sort_order ASC";
            $res = $GLOBALS['db']->getAll($sql);
            write_static_cache('art_cat_pid_releate', $res);
        }
        else
        {
            $res = $data;
        }
    }

    if (empty($res) == true)
    {
        return $re_type ? '' : array();
    }

    $options = article_cat_options($cat_id, $res); // 获得指定分类下的子分类的数组

    /* 截取到指定的缩减级别 */
    if ($level > 0)
    {
        if ($cat_id == 0)
        {
            $end_level = $level;
        }
        else
        {
            $first_item = reset($options); // 获取第一个元素
            $end_level  = $first_item['level'] + $level;
        }

        /* 保留level小于end_level的部分 */
        foreach ($options AS $key => $val)
        {
            if ($val['level'] >= $end_level)
            {
                unset($options[$key]);
            }
        }
    }

    $pre_key = 0;
    foreach ($options AS $key => $value)
    {
        $options[$key]['has_children'] = 1;
        if ($pre_key > 0)
        {
            if ($options[$pre_key]['cat_id'] == $options[$key]['parent_id'])
            {
                $options[$pre_key]['has_children'] = 1;
            }
        }
        $pre_key = $key;
    }

    if ($re_type == true)
    {
        $select = '';
        foreach ($options AS $var)
        {
            $select .= '<option value="' . $var['cat_id'] . '" ';
            $select .= ' cat_type="' . $var['cat_type'] . '" ';
            $select .= ($selected == $var['cat_id']) ? "selected='ture'" : '';
            $select .= '>';
            if ($var['level'] > 0)
            {
                $select .= str_repeat('&nbsp;', $var['level'] * 4);
            }
            $select .= htmlspecialchars(addslashes($var['cat_name'])) . '</option>';
        }

        return $select;
    }
    else
    {
        foreach ($options AS $key => $value)
        {
            $options[$key]['url'] = build_uri('article_cat', array('acid' => $value['cat_id']), $value['cat_name']);
        }
        return $options;
    }
}

/**
 * 过滤和排序所有文章分类，返回一个带有缩进级别的数组
 *
 * @access  private
 * @param   int     $cat_id     上级分类ID
 * @param   array   $arr        含有所有分类的数组
 * @param   int     $level      级别
 * @return  void
 */
function article_cat_options($spec_cat_id, $arr)
{
    static $cat_options = array();

    if (isset($cat_options[$spec_cat_id]))
    {
        return $cat_options[$spec_cat_id];
    }

    if (!isset($cat_options[0]))
    {
        $level = $last_cat_id = 0;
        $options = $cat_id_array = $level_array = array();
        while (!empty($arr))
        {
            foreach ($arr AS $key => $value)
            {
                $cat_id = $value['cat_id'];
                if ($level == 0 && $last_cat_id == 0)
                {
                    if ($value['parent_id'] > 0)
                    {
                        break;
                    }

                    $options[$cat_id]          = $value;
                    $options[$cat_id]['level'] = $level;
                    $options[$cat_id]['id']    = $cat_id;
                    $options[$cat_id]['name']  = $value['cat_name'];
                    unset($arr[$key]);

                    if ($value['has_children'] == 0)
                    {
                        continue;
                    }
                    $last_cat_id  = $cat_id;
                    $cat_id_array = array($cat_id);
                    $level_array[$last_cat_id] = ++$level;
                    continue;
                }

                if ($value['parent_id'] == $last_cat_id)
                {
                    $options[$cat_id]          = $value;
                    $options[$cat_id]['level'] = $level;
                    $options[$cat_id]['id']    = $cat_id;
                    $options[$cat_id]['name']  = $value['cat_name'];
                    unset($arr[$key]);

                    if ($value['has_children'] > 0)
                    {
                        if (end($cat_id_array) != $last_cat_id)
                        {
                            $cat_id_array[] = $last_cat_id;
                        }
                        $last_cat_id    = $cat_id;
                        $cat_id_array[] = $cat_id;
                        $level_array[$last_cat_id] = ++$level;
                    }
                }
                elseif ($value['parent_id'] > $last_cat_id)
                {
                    break;
                }
            }

            $count = count($cat_id_array);
            if ($count > 1)
            {
                $last_cat_id = array_pop($cat_id_array);
            }
            elseif ($count == 1)
            {
                if ($last_cat_id != end($cat_id_array))
                {
                    $last_cat_id = end($cat_id_array);
                }
                else
                {
                    $level = 0;
                    $last_cat_id = 0;
                    $cat_id_array = array();
                    continue;
                }
            }

            if ($last_cat_id && isset($level_array[$last_cat_id]))
            {
                $level = $level_array[$last_cat_id];
            }
            else
            {
                $level = 0;
            }
        }
        $cat_options[0] = $options;
    }
    else
    {
        $options = $cat_options[0];
    }

    if (!$spec_cat_id)
    {
        return $options;
    }
    else
    {
        if (empty($options[$spec_cat_id]))
        {
            return array();
        }

        $spec_cat_id_level = $options[$spec_cat_id]['level'];

        foreach ($options AS $key => $value)
        {
            if ($key != $spec_cat_id)
            {
                unset($options[$key]);
            }
            else
            {
                break;
            }
        }

        $spec_cat_id_array = array();
        foreach ($options AS $key => $value)
        {
            if (($spec_cat_id_level == $value['level'] && $value['cat_id'] != $spec_cat_id) ||
                ($spec_cat_id_level > $value['level']))
            {
                break;
            }
            else
            {
                $spec_cat_id_array[$key] = $value;
            }
        }
        $cat_options[$spec_cat_id] = $spec_cat_id_array;

        return $spec_cat_id_array;
    }
}

/**
 * 调用UCenter的函数
 *
 * @param   string  $func
 * @param   array   $params
 *
 * @return  mixed
 */
function uc_call($func, $params=null)
{
    restore_error_handler();
    if (!function_exists($func))
    {
        include_once(ROOT_PATH . 'uc_client/client.php');
    }

    $res = call_user_func_array($func, $params);

    set_error_handler('exception_handler');

    return $res;
}

/**
 * error_handle回调函数
 *
 * @return
 */
function exception_handler($errno, $errstr, $errfile, $errline)
{
    return;
}

/**
 * 重新获得商品图片与商品相册的地址
 *
 * @param int $goods_id 商品ID
 * @param string $image 原商品相册图片地址
 * @param boolean $thumb 是否为缩略图
 * @param string $call 调用方法(商品图片还是商品相册)
 * @param boolean $del 是否删除图片
 *
 * @return string   $url
 */
function get_image_path($goods_id, $image='', $thumb=false, $call='goods', $del=false)
{
    $url = empty($image) ? $GLOBALS['_CFG']['no_picture'] : $image;
    return $url;
}

/**
 * 调用使用UCenter插件时的函数
 *
 * @param   string  $func
 * @param   array   $params
 *
 * @return  mixed
 */
function user_uc_call($func, $params = null)
{
    if (isset($GLOBALS['_CFG']['integrate_code']) && $GLOBALS['_CFG']['integrate_code'] == 'ucenter')
    {
        restore_error_handler();
        if (!function_exists($func))
        {
            include_once(ROOT_PATH . 'includes/lib_uc.php');
        }

        $res = call_user_func_array($func, $params);

        set_error_handler('exception_handler');

        return $res;
    }
    else
    {
        return;
    }

}

/**
 * 取得商品优惠价格列表
 *
 * @param   string  $goods_id    商品编号
 * @param   string  $price_type  价格类别(0为全店优惠比率，1为商品优惠价格，2为分类优惠比率)
 *
 * @return  优惠价格列表
 */
function get_volume_price_list($goods_id, $price_type = '1')
{
    $volume_price = array();
    $temp_index   = '0';

    $sql = "SELECT `volume_number` , `volume_price`".
           " FROM " .$GLOBALS['ecs']->table('volume_price'). "".
           " WHERE `goods_id` = '" . $goods_id . "' AND `price_type` = '" . $price_type . "'".
           " ORDER BY `volume_number`";

    $res = $GLOBALS['db']->getAll($sql);

    foreach ($res as $k => $v)
    {
        $volume_price[$temp_index]                 = array();
        $volume_price[$temp_index]['number']       = $v['volume_number'];
        $volume_price[$temp_index]['price']        = $v['volume_price'];
        $volume_price[$temp_index]['format_price'] = price_format($v['volume_price']);
        $temp_index ++;
    }
    return $volume_price;
}

/**
 * 取得商品最终使用价格
 *
 * @param   string  $goods_id      商品编号
 * @param   string  $goods_num     购买数量
 * @param   boolean $is_spec_price 是否加入规格价格
 * @param   mix     $spec          规格ID的数组或者逗号分隔的字符串
 *
 * @return  商品最终购买价格
 */
function get_final_price($goods_id, $goods_num = '1', $is_spec_price = false, $spec = array())
{
    $final_price   = '0'; //商品最终购买价格
    $volume_price  = '0'; //商品优惠价格
    $promote_price = '0'; //商品促销价格
    $user_price    = '0'; //商品会员价格

    //取得商品优惠价格列表
    $price_list   = get_volume_price_list($goods_id, '1');

    if (!empty($price_list))
    {
        foreach ($price_list as $value)
        {
            if ($goods_num >= $value['number'])
            {
                $volume_price = $value['price'];
            }
        }
    }

    //取得商品促销价格列表
    /* 取得商品信息 */
    $sql = "SELECT g.promote_price, g.promote_start_date, g.promote_end_date, ".
                "IFNULL(mp.user_price, g.shop_price * '" . $_SESSION['discount'] . "') AS shop_price ".
           " FROM " .$GLOBALS['ecs']->table('goods'). " AS g ".
           " LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                   "ON mp.goods_id = g.goods_id AND mp.user_rank = '" . $_SESSION['user_rank']. "' ".
           " WHERE g.goods_id = '" . $goods_id . "'" .
           " AND g.is_delete = 0 and g.is_display=1 ";
    $goods = $GLOBALS['db']->getRow($sql);

    /* 计算商品的促销价格 */
    if ($goods['promote_price'] > 0)
    {
        $promote_price = bargain_price($goods['promote_price'], $goods['promote_start_date'], $goods['promote_end_date']);
    }
    else
    {
        $promote_price = 0;
    }

    //取得商品会员价格列表
    $user_price    = $goods['shop_price'];

    //比较商品的促销价格，会员价格，优惠价格
    if (empty($volume_price) && empty($promote_price))
    {
        //如果优惠价格，促销价格都为空则取会员价格
        $final_price = $user_price;
    }
    elseif (!empty($volume_price) && empty($promote_price))
    {
        //如果优惠价格为空时不参加这个比较。
        $final_price = min($volume_price, $user_price);
    }
    elseif (empty($volume_price) && !empty($promote_price))
    {
        //如果促销价格为空时不参加这个比较。
        $final_price = min($promote_price, $user_price);
    }
    elseif (!empty($volume_price) && !empty($promote_price))
    {
        //取促销价格，会员价格，优惠价格最小值
        $final_price = min($volume_price, $promote_price, $user_price);
    }
    else
    {
        $final_price = $user_price;
    }

    //如果需要加入规格价格
    if ($is_spec_price)
    {
        if (!empty($spec))
        {
            $spec_price   = spec_price($spec);
            $final_price += $spec_price;
        }
    }

    //返回商品最终购买价格
    return $final_price;
}
/**
 * 取得商品最终使用价格
 *
 * @param   string  $goods_id      商品编号
 * @param   string  $goods_num     购买数量
 * @param   boolean $is_spec_price 是否加入规格价格
 * @param   mix     $spec          规格ID的数组或者逗号分隔的字符串
 *
 * @return  商品最终购买价格  //ecmoban模板堂 --zhuo
 */
function get_final_price_group($goods_id, $goods_num = '1', $is_spec_price = false, $spec = array())
{
    $final_price   = '0'; //商品最终购买价格
    $volume_price  = '0'; //商品优惠价格
    $promote_price = '0'; //商品促销价格
    $user_price    = '0'; //商品会员价格

    //取得商品优惠价格列表
    $price_list   = get_volume_price_list($goods_id, '1');

    if (!empty($price_list))
    {
        foreach ($price_list as $value)
        {
            if ($goods_num >= $value['number'])
            {
                $volume_price = $value['price'];
            }
        }
    }

    //取得商品促销价格列表
    /* 取得商品信息 */
    $sql = "SELECT g.promote_price, g.promote_start_date, g.promote_end_date, ".
                "IFNULL(mp.user_price, g.shop_price * '" . $_SESSION['discount'] . "') AS shop_price ".
           " FROM " .$GLOBALS['ecs']->table('goods'). " AS g ".
           " LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                   "ON mp.goods_id = g.goods_id AND mp.user_rank = '" . $_SESSION['user_rank']. "' ".
           " WHERE g.goods_id = '" . $goods_id . "'" .
           " AND g.is_delete = 0 and g.is_display=1 ";
    $goods = $GLOBALS['db']->getRow($sql);

    /* 计算商品的促销价格 */
    if ($goods['promote_price'] > 0)
    {
        $promote_price = bargain_price($goods['promote_price'], $goods['promote_start_date'], $goods['promote_end_date']);
    }
    else
    {
        $promote_price = 0;
    }

    //取得商品会员价格列表
    $user_price    = $goods['shop_price'];
	
    //比较商品的促销价格，会员价格，优惠价格
    if (empty($volume_price) && empty($promote_price))
    {
        //如果优惠价格，促销价格都为空则取会员价格
        $arr['final_price'] = $user_price;
    }
    elseif (!empty($volume_price) && empty($promote_price))
    {
        //如果优惠价格为空时不参加这个比较。
        $arr['final_price'] = min($volume_price, $user_price);
    }
    elseif (empty($volume_price) && !empty($promote_price))
    {
        //如果促销价格为空时不参加这个比较。
        $arr['final_price'] = min($promote_price, $user_price);
    }
    elseif (!empty($volume_price) && !empty($promote_price))
    {
        //取促销价格，会员价格，优惠价格最小值
        $arr['final_price'] = min($volume_price, $promote_price, $user_price);
    }
    else
    {
        $arr['final_price'] = $user_price;
    }
	
    //如果需要加入规格价格
    if ($is_spec_price)
    {
        if (!empty($spec))
        {
			//ecmoban模板堂 --zhuo
            $attr  = spec_price_group($spec);
			$spec_price = floatval($attr['attr_price']);
			$arr['final_price'] += $spec_price;
			$attr_val = $attr['attr_value'];
			$arr['attr_val'] = $attr_val;
			
        }
    }

    //返回商品最终购买价格
    return $arr;
}
/**
 * 将 goods_attr_id 的序列按照 attr_id 重新排序
 *
 * 注意：非规格属性的id会被排除
 *
 * @access      public
 * @param       array       $goods_attr_id_array        一维数组
 * @param       string      $sort                       序号：asc|desc，默认为：asc
 *
 * @return      string
 */
function sort_goods_attr_id_array($goods_attr_id_array, $sort = 'asc')
{
    if (empty($goods_attr_id_array))
    {
        return $goods_attr_id_array;
    }

    //重新排序
    $sql = "SELECT a.attr_type, v.attr_value, v.goods_attr_id
            FROM " .$GLOBALS['ecs']->table('attribute'). " AS a
            LEFT JOIN " .$GLOBALS['ecs']->table('goods_attr'). " AS v
                ON v.attr_id = a.attr_id
                AND a.attr_type = 1
            WHERE v.goods_attr_id " . db_create_in($goods_attr_id_array) . "
            ORDER BY a.attr_id $sort";
    $row = $GLOBALS['db']->GetAll($sql);

    $return_arr = array();
    foreach ($row as $value)
    {
        $return_arr['sort'][]   = $value['goods_attr_id'];

        $return_arr['row'][$value['goods_attr_id']]    = $value;
    }

    return $return_arr;
}

/**
 *
 * 是否存在规格
 *
 * @access      public
 * @param       array       $goods_attr_id_array        一维数组
 *
 * @return      string
 */
function is_spec($goods_attr_id_array, $sort = 'asc')
{
    if (empty($goods_attr_id_array))
    {
        return $goods_attr_id_array;
    }

    //重新排序
    $sql = "SELECT a.attr_type, v.attr_value, v.goods_attr_id
            FROM " .$GLOBALS['ecs']->table('attribute'). " AS a
            LEFT JOIN " .$GLOBALS['ecs']->table('goods_attr'). " AS v
                ON v.attr_id = a.attr_id
                AND a.attr_type = 1
            WHERE v.goods_attr_id " . db_create_in($goods_attr_id_array) . "
            ORDER BY a.attr_id $sort";
    $row = $GLOBALS['db']->GetAll($sql);

    $return_arr = array();
    foreach ($row as $value)
    {
        $return_arr['sort'][]   = $value['goods_attr_id'];

        $return_arr['row'][$value['goods_attr_id']]    = $value;
    }

    if(!empty($return_arr))
    {
        return true;
    }
    else
    {
        return false;
    }
}

/**
 * 获取指定id package 的信息
 *
 * @access  public
 * @param   int         $id         package_id
 *
 * @return array       array(package_id, package_name, goods_id,start_time, end_time, min_price, integral)
 */
function get_package_info($id)
{
    global $ecs, $db,$_CFG;
    $id = is_numeric($id)?intval($id):0;
    $now = gmtime();

    $sql = "SELECT act_id AS id,  act_name AS package_name, goods_id , goods_name, start_time, end_time, act_desc, ext_info".
           " FROM " . $GLOBALS['ecs']->table('goods_activity') .
           " WHERE act_id='$id' AND act_type = " . GAT_PACKAGE;

    $package = $db->GetRow($sql);

    /* 将时间转成可阅读格式 */
    if ($package['start_time'] <= $now && $package['end_time'] >= $now)
    {
        $package['is_on_sale'] = "1";
    }
    else
    {
        $package['is_on_sale'] = "0";
    }
    $package['start_time'] = local_date('Y-m-d H:i', $package['start_time']);
    $package['end_time']   = local_date('Y-m-d H:i', $package['end_time']);
    $row = unserialize($package['ext_info']);
    unset($package['ext_info']);
    if ($row)
    {
        foreach ($row as $key=>$val)
        {
            $package[$key] = $val;
        }
    }

    $sql = "SELECT pg.package_id, pg.goods_id, pg.goods_number, pg.admin_id, ".
           " g.goods_sn, g.goods_name, g.market_price, g.goods_thumb, g.is_real, ".
           " IFNULL(mp.user_price, g.shop_price * '$_SESSION[discount]') AS rank_price " .
           " FROM " . $GLOBALS['ecs']->table('package_goods') . " AS pg ".
           "   LEFT JOIN ". $GLOBALS['ecs']->table('goods') . " AS g ".
           "   ON g.goods_id = pg.goods_id ".
           " LEFT JOIN " . $GLOBALS['ecs']->table('member_price') . " AS mp ".
                "ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' ".
           " WHERE pg.package_id = " . $id. " ".
           " ORDER BY pg.package_id, pg.goods_id";

    $goods_res = $GLOBALS['db']->getAll($sql);

    $market_price        = 0;
    $real_goods_count    = 0;
    $virtual_goods_count = 0;

    foreach($goods_res as $key => $val)
    {
        $goods_res[$key]['goods_thumb']         = get_image_path($val['goods_id'], $val['goods_thumb'], true);
        $goods_res[$key]['market_price_format'] = price_format($val['market_price']);
        $goods_res[$key]['rank_price_format']   = price_format($val['rank_price']);
        $market_price += $val['market_price'] * $val['goods_number'];
        /* 统计实体商品和虚拟商品的个数 */
        if ($val['is_real'])
        {
            $real_goods_count++;
        }
        else
        {
            $virtual_goods_count++;
        }
    }

    if ($real_goods_count > 0)
    {
        $package['is_real']            = 1;
    }
    else
    {
        $package['is_real']            = 0;
    }

    $package['goods_list']            = $goods_res;
    $package['market_package']        = $market_price;
    $package['market_package_format'] = price_format($market_price);
    $package['package_price_format']  = price_format($package['package_price']);

    return $package;
}

/**
 * 获得指定礼包的商品
 *
 * @access  public
 * @param   integer $package_id
 * @return  array
 */
function get_package_goods($package_id)
{
    $sql = "SELECT pg.goods_id, g.goods_name, pg.goods_number, p.goods_attr, p.product_number, p.product_id
            FROM " . $GLOBALS['ecs']->table('package_goods') . " AS pg
                LEFT JOIN " .$GLOBALS['ecs']->table('goods') . " AS g ON pg.goods_id = g.goods_id
                LEFT JOIN " . $GLOBALS['ecs']->table('products') . " AS p ON pg.product_id = p.product_id
            WHERE pg.package_id = '$package_id'";
    if ($package_id == 0)
    {
        $sql .= " AND pg.admin_id = '$_SESSION[admin_id]'";
    }
    $resource = $GLOBALS['db']->query($sql);
    if (!$resource)
    {
        return array();
    }

    $row = array();

    /* 生成结果数组 取存在货品的商品id 组合商品id与货品id */
    $good_product_str = '';
    while ($_row = $GLOBALS['db']->fetch_array($resource))
    {
        if ($_row['product_id'] > 0)
        {
            /* 取存商品id */
            $good_product_str .= ',' . $_row['goods_id'];

            /* 组合商品id与货品id */
            $_row['g_p'] = $_row['goods_id'] . '_' . $_row['product_id'];
        }
        else
        {
            /* 组合商品id与货品id */
            $_row['g_p'] = $_row['goods_id'];
        }

        //生成结果数组
        $row[] = $_row;
    }
    $good_product_str = trim($good_product_str, ',');

    /* 释放空间 */
    unset($resource, $_row, $sql);

    /* 取商品属性 */
    if ($good_product_str != '')
    {
        $sql = "SELECT goods_attr_id, attr_value FROM " .$GLOBALS['ecs']->table('goods_attr'). " WHERE goods_id IN ($good_product_str)";
        $result_goods_attr = $GLOBALS['db']->getAll($sql);

        $_goods_attr = array();
        foreach ($result_goods_attr as $value)
        {
            $_goods_attr[$value['goods_attr_id']] = $value['attr_value'];
        }
    }

    /* 过滤货品 */
    $format[0] = '%s[%s]--[%d]';
    $format[1] = '%s--[%d]';
    foreach ($row as $key => $value)
    {
        if ($value['goods_attr'] != '')
        {
            $goods_attr_array = explode('|', $value['goods_attr']);

            $goods_attr = array();
            foreach ($goods_attr_array as $_attr)
            {
                $goods_attr[] = $_goods_attr[$_attr];
            }

            $row[$key]['goods_name'] = sprintf($format[0], $value['goods_name'], implode('，', $goods_attr), $value['goods_number']);
        }
        else
        {
            $row[$key]['goods_name'] = sprintf($format[1], $value['goods_name'], $value['goods_number']);
        }
    }

    return $row;
}

/**
 * 取商品的货品列表
 *
 * @param       mixed       $goods_id       单个商品id；多个商品id数组；以逗号分隔商品id字符串
 * @param       string      $conditions     sql条件
 *
 * @return  array
 */
function get_good_products($goods_id, $conditions = '')
{
    if (empty($goods_id))
    {
        return array();
    }

    switch (gettype($goods_id))
    {
        case 'integer':

            $_goods_id = "goods_id = '" . intval($goods_id) . "'";

        break;

        case 'string':
        case 'array':

            $_goods_id = db_create_in($goods_id, 'goods_id');

        break;
    }

    /* 取货品 */
    $sql = "SELECT * FROM " .$GLOBALS['ecs']->table('products'). " WHERE $_goods_id $conditions";
    $result_products = $GLOBALS['db']->getAll($sql);

    /* 取商品属性 */
    $sql = "SELECT goods_attr_id, attr_value FROM " .$GLOBALS['ecs']->table('goods_attr'). " WHERE $_goods_id";
    $result_goods_attr = $GLOBALS['db']->getAll($sql);

    $_goods_attr = array();
    foreach ($result_goods_attr as $value)
    {
        $_goods_attr[$value['goods_attr_id']] = $value['attr_value'];
    }

    /* 过滤货品 */
    foreach ($result_products as $key => $value)
    {
        $goods_attr_array = explode('|', $value['goods_attr']);
        if (is_array($goods_attr_array))
        {
            $goods_attr = array();
            foreach ($goods_attr_array as $_attr)
            {
                $goods_attr[] = $_goods_attr[$_attr];
            }

            $goods_attr_str = implode('，', $goods_attr);
        }

        $result_products[$key]['goods_attr_str'] = $goods_attr_str;
    }

    return $result_products;
}

/**
 * 取商品的下拉框Select列表
 *
 * @param       int      $goods_id    商品id
 *
 * @return  array
 */
function get_good_products_select($goods_id)
{
    $return_array = array();
    $products = get_good_products($goods_id);

    if (empty($products))
    {
        return $return_array;
    }

    foreach ($products as $value)
    {
        $return_array[$value['product_id']] = $value['goods_attr_str'];
    }

    return $return_array;
}

/**
 * 取商品的规格列表
 *
 * @param       int      $goods_id    商品id
 * @param       string   $conditions  sql条件
 *
 * @return  array
 */
function get_specifications_list($goods_id, $conditions = '')
{
    /* 取商品属性 */
    $sql = "SELECT ga.goods_attr_id, ga.attr_id, ga.attr_value, a.attr_name
            FROM " .$GLOBALS['ecs']->table('goods_attr'). " AS ga, " .$GLOBALS['ecs']->table('attribute'). " AS a
            WHERE ga.attr_id = a.attr_id
            AND ga.goods_id = '$goods_id'
            $conditions";
    $result = $GLOBALS['db']->getAll($sql);

    $return_array = array();
    foreach ($result as $value)
    {
        $return_array[$value['goods_attr_id']] = $value;
    }

    return $return_array;
}

/**
 * 调用array_combine函数
 *
 * @param   array  $keys
 * @param   array  $values
 *
 * @return  $combined
 */
if (!function_exists('array_combine')) {
    function array_combine($keys, $values)
    {
        if (!is_array($keys)) {
            user_error('array_combine() expects parameter 1 to be array, ' .
                gettype($keys) . ' given', E_USER_WARNING);
            return;
        }

        if (!is_array($values)) {
            user_error('array_combine() expects parameter 2 to be array, ' .
                gettype($values) . ' given', E_USER_WARNING);
            return;
        }

        $key_count = count($keys);
        $value_count = count($values);
        if ($key_count !== $value_count) {
            user_error('array_combine() Both parameters should have equal number of elements', E_USER_WARNING);
            return false;
        }

        if ($key_count === 0 || $value_count === 0) {
            user_error('array_combine() Both parameters should have number of elements at least 0', E_USER_WARNING);
            return false;
        }

        $keys    = array_values($keys);
        $values  = array_values($values);

        $combined = array();
        for ($i = 0; $i < $key_count; $i++) {
            $combined[$keys[$i]] = $values[$i];
        }

        return $combined;
    }
}
/**
 * 取出单个晒单图片
 * 
 * @param $goods_id int
 * @param $order_id int
 * 
 * return $single array()
 * 
 * @author guan 
 */

function get_single($goods_id, $order_id)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('single') . "WHERE goods_id='$goods_id' AND order_id='$order_id' AND is_audit=1";
	$singles = $GLOBALS['db']->getRow($sql);
	$imaegs = array();
	foreach($singles as $k => $v)
	{
		$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('goods_gallery') . " WHERE single_id='$singles[single_id]'";
		$images = $GLOBALS['db']->getAll($sql);
	}
	
	return $images;
}

/**
 * 取出单个晒单信息
 * 
 * @param int $goods_id
 * @param int $order_id
 * @return array()
 */
function get_single_detaile($goods_id, $order_id=0)
{
	if(empty($order_id))
	{
		$order_where = '';
	}
	else
	{
		$order_where = " AND order_id='$order_id' ";
	}
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('single') . "WHERE goods_id='$goods_id'$order_where AND is_audit=1 ORDER BY addtime";
	$singles = $GLOBALS['db']->getRow($sql);
	
	$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('comment') . " WHERE single_id='$singles[single_id]' ORDER BY add_time";
	$singles['comment_nums'] = $GLOBALS['db']->getOne($sql);
	$singles['addtime'] = local_date('Y-m-d H:i:s', $singles['addtime']);

	return $singles;
}

/**
 * 取出指定商品的所有晒单信息
 *
 * @param int $goods_id
 * @return array()
 */
function get_single_all($goods_id)
{
	$sql = "SELECT * FROM " . $GLOBALS['ecs']->table('single') . "WHERE goods_id='$goods_id' AND is_audit=1";
	$singles = $GLOBALS['db']->getAll($sql);

	foreach($singles as $key => $val)
	{
		$sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('comment') . " WHERE single_id='$val[single_id]'";
		$singles[$key]['comment_single_num'] = $GLOBALS['db']->getOne($sql);
		$singles[$key]['addtime'] = local_date('Y-m-d H:i:s', $val['addtime']);
	}

	return $singles;
}


/**
 * 对二维数组排序
 * 
 * @param array(array()) $arr
 * @param key $keys
 * @param ASC | DESC  $type
 * @return $new_array array(array())
 * 
 * @author guan
 */
function dimensional_array_sort($arr,$keys,$type='DESC'){
	$keysvalue = $new_array = array();
	foreach ($arr as $k=>$v){
		$keysvalue[$k] = $v[$keys];
	}
	if($type == 'ASC'){
		asort($keysvalue);
	}else{
		arsort($keysvalue);
	}
	reset($keysvalue);
	foreach ($keysvalue as $k=>$v){
		$new_array[$k] = $arr[$k];
	}
	return $new_array;
}

//ecmoban模板堂 --zhuo start

//查询团购商品类别--是否团购 --1代表团购
function get_proup_show($cat_id){
	$sql = "select is_group_show from " . $GLOBALS['ecs']->table('category') ." where cat_id = '$cat_id'";
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}

//查询当前团购分类名称
function get_proup_class_nav($cat_id){
	$sql = "select cat_id,cat_name,parent_id,is_search_show_layout from " . $GLOBALS['ecs']->table('category') ." where cat_id='$cat_id'";
	$res = $GLOBALS['db']->getAll($sql);
	
	foreach($res as $key => $row){
		$arr[$key]['cat_id'] 	= $row['cat_id'];
		$arr[$key]['cat_name'] 	= $row['cat_name'];
		$arr[$key]['parent_id'] = $row['parent_id'];
		$arr[$key]['is_layout'] = $row['is_search_show_layout'];
		
		if($row['parent_id'] != 0){
			$arr[$key]['parent'] = get_proup_class_nav($row['parent_id']);
		}
	}
	
	return $arr;
}

//查找团购导航--分类
function get_nav_group($parent_id){
	$sql = "select cat_id,cat_name,parent_id,is_search_show,is_search_show_layout from " . $GLOBALS['ecs']->table('category') ." where parent_id = '$parent_id' order by sort_order desc";
	$res = $GLOBALS['db']->getAll($sql);
	
	foreach($res as $key => $row){
		$arr[$key]['cat_id'] = $row['cat_id'];
		$arr[$key]['cat_name'] = $row['cat_name'];
		$arr[$key]['parent_id'] = $row['parent_id'];
		$arr[$key]['is_search_show'] = $row['is_search_show'];
		$arr[$key]['is_search_show_layout'] = $row['is_search_show_layout'];
		$arr[$key]['url']              = build_uri('category', array('cid'=>$row['cat_id']), $row['cat_name']);
		if($row['cat_id'] != 0){
			$arr[$key]['child'] = get_nav_group($row['cat_id']);
		}
	}
	
	return $arr;
}

//多维数组转为一位数组
function get_arrayOne($array)
{
    static $result_array=array();
    foreach($array as $value)
    {
        if(is_array($value))
        {
            get_arrayOne($value);
        }
        else  
            $result_array[]=$value;
    }
    return $result_array;
}

//****查询当前位置***************************************************
function get_fine_parent($cat_id='',$open,$len,$goods_name){
	$sql="select cat_id,cat_name,parent_id from " . $GLOBALS['ecs']->table('category') ." where cat_id='$cat_id'";
	$res=$GLOBALS['db']->getAll($sql);
	
	if($len>77){
		$inHere="&nbsp;&gt;&nbsp;";	
	}
	
	if($open!=3){
		$uh.="<a href='.'>" . $GLOBALS['_LANG']['home'] . "</a>".$inHere;
	}
	
	if($cat_id==0){
			$uh.=$GLOBALS['_LANG']['helpcenter'];
	}
	
	foreach($res as $key=>$row){
		$arr[$key]['cat_id']=$row['cat_id'];
		$arr[$key]['cat_name']=$row['cat_name'];
		$arr[$key]['parent_id']=$row['parent_id'];
		$uh_url= build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
		
		if($open==2){
			$userHere="&nbsp;&gt;&nbsp;";
			$a_left="<a href=".$uh_url.">";
			$a_right="</a>";
		}else{
			$userHere=" ";
			$a_left='';
			$a_right='';
		}
		if(!empty($row['cat_id'])){
			$uh.=$a_left.get_fine_parent_cat($row['parent_id'],$open).$a_right.$userHere;
		}
		if($open==1 || $open==3){
			$uh.=$row['cat_id'];
		}else{
			$uh.=$a_left.$row['cat_name'].$a_right.$userHere.$goods_name;
		}
		
	}
	
	return $uh;
}
function get_fine_parent_cat($parent_id='',$open){
	$sql="select cat_id,cat_name,parent_id from " . $GLOBALS['ecs']->table('category') ." where cat_id='$parent_id'";
	$res=$GLOBALS['db']->getAll($sql);
	
	$uh.='';
	foreach($res as $key=>$row){
		$arr[$key]['cat_id']=$row['cat_id'];
		$arr[$key]['cat_name']=$row['cat_name'];
		$arr[$key]['parent_id']=$row['parent_id'];
		$uh_url= build_uri('category', array('cid' => $row['cat_id']), $row['cat_name']);
		
		if($open==2){
			$userHere="&nbsp;&gt;&nbsp;";
			$a_left="<a href=".$uh_url.">";
			$a_right="</a>";
		}else{
			$userHere=" ";
			$a_left='';
			$a_right='';
		}
		if($row['parent_id']!=0){
			$uh.=get_fine_parent_cat($row['parent_id'],$open).$userHere;
		}
		if($open==1 || $open==3){
			$uh.=$row['cat_id'];
		}else{
			$uh.=$a_left.$row['cat_name'].$a_right;
		}
	}
	
	return $uh;
}
//获取团购商品销量总数
function category_group_count($children,$new_order){
	$time = gmtime();
    $where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND ".
            "g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';
	if($new_order == 1){
		$firstSecToday = local_mktime(0, 0, 0, date("m"), date("d"), date("Y")); //当天开始返回时间戳 比如1369814400 2013-05-30 00:00:00
		$lastSecToday = local_mktime(0, 0, 0, date("m"), date("d")+1, date("Y"))-1; //当天结束返回时间戳 比如1369900799  2013-05-30 00:00:00
		$new_order = 'and oi.pay_time >= ' . $firstSecToday .' and oi.pay_time <= ' . $lastSecToday;
	}else{
		$new_order = '';
	}

			$sql = 'SELECT g.goods_name ' . 'FROM ' . $GLOBALS['ecs']->table('goods') . ' AS g ' .
				'LEFT JOIN ' . $GLOBALS['ecs']->table('member_price') . ' AS mp ' .
					"ON mp.goods_id = g.goods_id AND mp.user_rank = '$_SESSION[user_rank]' " .	
				
				'LEFT JOIN ' . $GLOBALS['ecs']->table('order_goods') . ' AS og ' .
					"ON og.goods_id = g.goods_id " .	
				'LEFT JOIN ' . $GLOBALS['ecs']->table('order_info') . ' AS oi ' .
					"ON oi.order_id = og.order_id " ."WHERE g.is_promote = 1 AND g.promote_end_date >= ".$time." and og.order_id = oi.order_id and oi.pay_status =2 ".$new_order." and $where group by g.goods_name";

	$res = $GLOBALS['db']->getAll($sql);
	
	return count($res);
}
//获取团购单个商品的数据
function get_is_promote_checked($goods_id){
	$sql = "select cat_id,is_promote,goods_name,is_promote_group from ". $GLOBALS['ecs']->table('goods') . " where goods_id = '$goods_id' and  is_display=1 ";
	$res = $GLOBALS['db']->getAll($sql);
	
	foreach($res as $row){
		$arr['cat_id'] = $row['cat_id'];
		$arr['is_promote'] = $row['is_promote'];
		$arr['goods_name'] = $row['goods_name'];
		$arr['is_promote_group'] = $row['is_promote_group'];
	}
	
	return $arr;
}

//获取同类团购商品的销量排行或者推荐 -- 已购买（已付款）
function get_group_buy_pay($children,$is,$goods_id,$virtual_gmunber = 0){
	$where = "g.is_on_sale = 1 AND g.is_alone_sale = 1 AND ".
            "g.is_delete = 0 AND ($children OR " . get_extension_goods($children) . ')';
	
	if($is == 'is_best'){
		$best = ' g.is_best = 1 ';
		$host = $new = $sales = $group_by = '';
	}elseif($is == 'is_new'){
		$new = ' g.is_new = 1 ';
		$host = $best = $sales = $group_by = '';
	}elseif($is == 'is_hot'){
		$host = ' g.is_hot = 1 ';
		$new = $best = $sales = $group_by = '';
	}else{
		$sales = ' og.order_id = oi.order_id and oi.pay_status = 2 ';
		$group_by = ' group by g.goods_id ';
		$host = $new = $best = '';
	}
	
	if(isset($is)){
		$sql = "select g.goods_id,g.goods_name,g.goods_thumb,g.promote_price,g.is_promote,g.goods_brief from ". $GLOBALS['ecs']->table('goods') . " as g,". $GLOBALS['ecs']->table('category') . " as c"." where " .$best. $new. $host. "and g.is_promote = 1 and c.cat_id = g.cat_id and c.is_group_show = 1 and g.goods_id not in(". $goods_id .") and $where order by g.sort_order desc limit 0,10";
	}else{
		$sql = "select c.cat_id,c.is_group_show,sum(og.goods_number) as goods_number,g.goods_id,g.goods_name,g.goods_thumb,g.promote_price,g.is_promote,g.goods_brief from ". $GLOBALS['ecs']->table('goods') . " as g,". $GLOBALS['ecs']->table('order_goods') . " as og,". $GLOBALS['ecs']->table('category') . " as c,". $GLOBALS['ecs']->table('order_info') . " as oi"." where og.goods_id = g.goods_id and g.is_display=1 and ". $sales ."and g.is_promote = 1 and c.cat_id = g.cat_id and c.is_group_show = 1 and $where" .$group_by. "order by goods_number desc limit 0,10";
	}		
	
	$res = $GLOBALS['db']->getAll($sql);
	
	$arr = array();
	foreach($res as $row){
		$arr[$row['goods_id']]['goods_id'] 				= $row['goods_id'];
		$arr[$row['goods_id']]['goods_name'] 			= $row['goods_name'];
		$arr[$row['goods_id']]['goods_thumb'] 			= $row['goods_thumb'];
		$arr[$row['goods_id']]['goods_number'] 			= $row['goods_number'];
		$arr[$row['goods_id']]['is_promote'] 			= $row['is_promote'];
		$arr[$row['goods_id']]['cat_id']			 	= $row['cat_id'];
		$arr[$row['goods_id']]['is_group_show'] 		= $row['is_group_show'];
		$arr[$row['goods_id']]['goods_brief'] 			= $row['goods_brief'];
		$arr[$row['goods_id']]['url'] 					= build_uri('goods', array('gid'=>$row['goods_id']), $row['goods_name']);
		
		//ecmoban模板堂 --zhuo 2013-12-3 start
		$file = ROOT_PATH . 'virtual_goods/' . $row['goods_id'] . '.txt'; 
		if(file_exists($file)){
			$virtual_gmunber = file_get_contents($file);  //获取文本虚拟商品销量
		}else{
			$virtual_gmunber = 0;
		}
		//ecmoban模板堂 --zhuo 2013-12-3 end
		
		$arr[$row['goods_id']]['total']					= get_group_cat_goods_count($row['goods_id'],$virtual_gmunber);  //购买人数
		
		if($row['is_promote'] == 1){
			$arr[$row['goods_id']]['promote_price'] = str_replace(array('￥','元'),'',price_format($row['promote_price']));
		}
	}
	
	return $arr;
}

//查询会员身份  start 
function get_group_rank_name($rank_points){
	$sql = "select rank_name from " . $GLOBALS['ecs']->table('user_rank') . " where min_points <= '$rank_points' and max_points >= '$rank_points'";
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}
function get_group_rank_points($user_name){
	$sql = "select rank_points from " . $GLOBALS['ecs']->table('users') . " where user_name = '$user_name'";
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}
//查询会员身份  end

//查询用户购买此商品的时间 start
function get_group_order_time($user_id,$id){
	$sql = "select oi.pay_time from " . $GLOBALS['ecs']->table('users')." as u," . $GLOBALS['ecs']->table('goods')." as g," . $GLOBALS['ecs']->table('order_goods')." as og," . $GLOBALS['ecs']->table('comment')." as cmt," . $GLOBALS['ecs']->table('order_info')." as oi" . " where oi.pay_status = 2 and oi.order_id = og.order_id and cmt.id_value = '$id' and oi.user_id = '$user_id' group by oi.order_id";
	
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}
function get_fine_user_id($user_name){
	$sql = "select user_id from " . $GLOBALS['ecs']->table('users') . " where user_name = '$user_name'";
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}
//查询用户购买此商品的时间 end

//查询团购单个商品订单总条数
function get_group_cat_goods_count($goods_id,$virtual_gmunber){ //2013-12-4 $virtual_gmunber

	$sql = "select count(og.goods_name) + g.virtual_num from " . $GLOBALS['ecs']->table('goods') . " as g," . $GLOBALS['ecs']->table('order_goods') . " as og," . $GLOBALS['ecs']->table('order_info') . " as oi"." where g.goods_id = og.goods_id and og.order_id = oi.order_id and oi.pay_status = 2 and g.is_promote = 1 and og.goods_id = '$goods_id'";
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}

/*
*zhuo
*获得商品评论总条数
*@param $goods_id
*return count;
*/
function ments_count_all($goods_id){
	$count = 'SELECT COUNT(*) FROM ' .$GLOBALS['ecs']->table('comment'). " WHERE id_value = '$goods_id' AND status = 1 AND parent_id = 0";
	$res=$GLOBALS['db']->getOne($count);
	
	if($res==0){
	 	return $res=1;
	}else{
		return $res;
	}
	
}
/*
*zhuo
*获得商品评论-$num-颗星总条数
*@param $goods_id
*return count;
*/
function ments_count_rank_num($goods_id,$num){
	$count = 'SELECT COUNT(*) FROM ' .$GLOBALS['ecs']->table('comment'). " WHERE id_value = '$goods_id' AND status = 1 AND parent_id = 0 and comment_rank='$num'";
	$res=$GLOBALS['db']->getOne($count);
	
	return $res;
}
/*
*zhuo
*获得商品评论显示星星
*@param $goods_id
*return count;
*/
function get_conments_stars($all=NULL,$one=NULL,$two=NULL,$three=NULL,$four=NULL,$five=NULL){
	$num=5;$one_num=1;$two_num=2;$three_num=3;$four_num=4;$five_num=5;
	
	$allNmu=$all*5;                  							//总星星数
	$oneAll=$one*$one_num;			 							//1颗总星星数
	$twoAll=$two*$two_num;			 							//2颗总星星数
	$threeAll=$three*$three_num;     							//3颗总星星数
	$fourAll=$four*$four_num;		 							//4颗总星星数
 	$fiveAll=$five*$five_num;									//5颗总星星数	
	$allStars=$oneAll+$twoAll+$threeAll+$fourAll+$fiveAll;		//显示总星星数
	
	$badReview=$one/$all;										//差评条数
	$middleReview=($two+$three)/$all;							//中评条数
	$goodReview=($four+$five)/$all;								//好评条数
	
	$badmen=$one;												//差评人数
	$middlemen=$two+$three;										//中评人数
	$goodmen=$four+$five;										//好评人数
	$allmen=$one+$two+$three+$four+$five;						//全部评分人数
	
	$percentage=ceil($allStars/$allNmu*100);					//等级评论百分比,求平均数
	
	$arr=array(
		'score'=>round($percentage/20,1),					//分数
		'badReview'=>round($badReview,2)*100,				//差评百分比
		'middlReview'=>round($middleReview,2)*100,			//中评百分比
		'goodReview'=>round($goodReview,2)*100,				//好评百分比
		'badmen'=>$badmen,									//差评人数
		'middlemen'=>$middlemen,								//中评人数
		'goodmen'=>$goodmen,									//好评人数
		'allmen'=>$allmen,									//全部评论人数
		);
	if($percentage >= 1 && $percentage < 40){               //1颗星
		$arr['stars']=1;										
		return $arr;
	}else if($percentage >= 40 && $percentage < 60){		//2颗星
		$arr['stars']=2;
		return $arr;
	}else if($percentage >= 60 && $percentage < 80){		//3颗星
		$arr['stars']=3;
		return $arr;
	}else if($percentage >= 80 && $percentage < 100){		//4颗星
		$arr['stars']=4;
		return $arr;
	}else if($percentage == 100){
		$arr['score']=5;
		$arr['stars']=5;
		$arr['badReview']=0;								//差评百分比
		$arr['middlReview']=0;								//中评百分比
		$arr['goodReview']=100;								//好评百分比
		return $arr;										//5颗星
	}else{ //默认状态 --没有评论时
		$arr=array(
		'score'=>5,											//分数
		'stars'=>5,
		'badReview'=>0,										//差评百分比
		'middlReview'=>0,									//中评百分比
		'goodReview'=>100,									//好评百分比
		'allmen'=>0,										//全部评论人数
		'badmen'=>0,										//差评人数
		'middlemen'=>0,										//中评人数
		'goodmen'=>0,										//好评人数
		);
		return $arr;
	}
	
}

//获取前五位用户 start
function get_five_before_cmt($id,$off = NULL,$user_id = NULL, $comment_id = NULL,$arr_cmt=NULL){
	
	if(count($arr_cmt) != 0){
		$commets = " c.comment_id in($comment_id) and";	
		$before_cmtId = get_fine_new_comment_id($id);
		$cmt_bf="and c.comment_id in($before_cmtId)";
	}else{
		$commets = '';
	}
	
	$integral_num = get_fine_comment_integral_num($id);
	
	$sql = 'SELECT c.*,u.user_name,u.rank_points,g.goods_id,g.group_integral FROM ' . $GLOBALS['ecs']->table('comment') . " as c," . $GLOBALS['ecs']->table('goods') . " as g," . $GLOBALS['ecs']->table('users') . " as u" . 
            	" WHERE c.id_value = '$id' AND c.status = 1 AND c.parent_id = 0 and c.user_id > 0 and c.id_value = g.goods_id and ". $commets ." c.user_id = u.user_id " .$cmt_bf. ' group by c.user_id ORDER BY c.comment_id DESC limit 0,'.$integral_num;
	$res = $GLOBALS['db']->getAll($sql);
	
	$cuser_num = get_fine_comment_user_num($id,$user_id);
	
	$arr = array();
	foreach($res as $row){
		$arr[$row['comment_id']]['user_id']   = $row['user_id'];
		$arr[$row['comment_id']]['user_name'] = $row['user_name'];
		if($off == 1){
			if($cuser_num == 1){
				if($user_id == $row['user_id']){
					$sqlUp = "update ". $GLOBALS['ecs']->table('users') . " set rank_points = (".$row['rank_points']." + ".$row['group_integral'].") where user_id = ".$row['user_id'];
					$GLOBALS['db']->query($sqlUp);
				}
			}
		}
	}			
	
	return $arr;
}
function get_fine_new_comment_id($id){
	$sql = 'SELECT c.*,u.user_name,u.rank_points,g.goods_id,g.group_integral FROM ' . $GLOBALS['ecs']->table('comment') . " as c," . $GLOBALS['ecs']->table('goods') . " as g," . $GLOBALS['ecs']->table('users') . " as u" . 
            	" WHERE c.id_value = '$id' AND c.status = 1 AND c.parent_id = 0 and c.user_id > 0 and c.id_value = g.goods_id and c.user_id = u.user_id".' ORDER BY c.comment_id DESC limit 0,5';
	$res = $GLOBALS['db']->getAll($sql);		
				
	$arr = array();
	foreach($res as $key => $row){
		$arr[$key]  = $row['comment_id'];
	}					
	
	return implode(",",$arr);
}
//获取会员评论该商品的评论条数
function get_fine_comment_user_num($id,$user_id){
	$sql = 'SELECT count(c.user_id) FROM ' . $GLOBALS['ecs']->table('comment') . " as c,"  . $GLOBALS['ecs']->table('users') . " as u" . " WHERE c.user_id = u.user_id and c.id_value = '$id' and c.user_id = '$user_id'";
	$res = $GLOBALS['db']->getOne($sql);		
				
	return $res;
}
//获取商品控制评论人数
function get_fine_comment_integral_num($id){
	$sql = 'SELECT group_integral_num FROM ' . $GLOBALS['ecs']->table('goods') . " WHERE goods_id = '$id'";
	$res = $GLOBALS['db']->getOne($sql);		
				
	return $res;
}
//获取前五位用户 end

//赠送评论前五的积分 ecmoban模板堂 --zhuo start
function get_update_user_commets($comment_id,$off = NULL,$arr_cmt = NULL){
	
	if(count($arr_cmt) != 0){
		$commets = " in($comment_id) ";
	}else{
		$commets = " = $comment_id ";
	}
	
	$sql = "select c.comment_id,c.user_id as c_user,u.user_id as u_user,u.rank_points,g.goods_id,g.group_integral from " . $GLOBALS['ecs']->table('comment') . " as c," . $GLOBALS['ecs']->table('goods') . " as g," . $GLOBALS['ecs']->table('users') . " as u" . " where c.user_id = u.user_id and c.comment_id " .$commets ." and c.id_value = g.goods_id";
	$res = $GLOBALS['db']->getAll($sql);
	
	$arr = array();
	foreach($res as $key => $row){
		$arr[$row['comment_id']]['rank_points']    = $row['rank_points'];
		$arr[$row['comment_id']]['group_integral'] = $row['group_integral'];
		$arr[$row['comment_id']]['c_user'] 		   = $row['c_user'];
		if($off == 1){
			$arr[$row['comment_id']]['commets_user_five'] = get_five_before_cmt($row['goods_id'],$off,$row['c_user'],$comment_id,$arr_cmt);
		}
	}	
	
	return $arr;
}

//查找顶级栏目的cat_id
function get_fine_group_cat($parent_id){
	$sql = "select cat_id from " . $GLOBALS['ecs']->table('category') . " where is_group_show = 1 and parent_id = '$parent_id'";
	$res = $GLOBALS['db']->getOne($sql);
	
	return $res;
}

//ecmoban模板堂 --zhuo end


/**
 * 获得指定分类下的子分类的数组
 *
 * @access  public
 * @param   int     $cat_id     分类的ID
 * @param   int     $selected   当前选中分类的ID
 * @param   boolean $re_type    返回的类型: 值为真时返回下拉列表,否则返回数组
 * @param   int     $level      限定返回的级数。为0时返回所有级数
 * @param   int     $is_show_all 如果为true显示所有分类，如果为false隐藏不可见分类。
 * @return  mix
 */
function seller_cat_list($cat_id = 0, $selected = 0, $re_type = true, $level = 0, $is_show_all = true)
{
    static $res = NULL;

    if ($res === NULL)
    {
        $data = read_static_cache('seller_cat_pid_releate_'.$_SESSION['seller_id']);
        if ($data === false)
        {
            $sql = "SELECT c.seller_cat_id, c.cat_name, c.measure_unit, c.parent_id, c.is_show, c.show_in_nav, c.grade, c.sort_order, COUNT(s.seller_cat_id) AS has_children ".
                'FROM ' . $GLOBALS['ecs']->table('seller_category') . " AS c ".
                "LEFT JOIN " . $GLOBALS['ecs']->table('seller_category') . " AS s ON s.parent_id=c.seller_cat_id  where c.seller_id='".$_SESSION['seller_id']."' ".
                "GROUP BY c.seller_cat_id ".
                'ORDER BY c.parent_id, c.sort_order ASC';
			
            $res = $GLOBALS['db']->getAll($sql);

            $sql = "SELECT seller_cat_id, COUNT(*) AS goods_num " .
                    " FROM " . $GLOBALS['ecs']->table('goods') .
                    " WHERE is_delete = 0 AND is_on_sale = 1 and is_display=1  and seller_cat_id<>0 " .
                    " GROUP BY seller_cat_id";
            $res2 = $GLOBALS['db']->getAll($sql);
			
            $sql = "SELECT gc.seller_cat_id, COUNT(*) AS goods_num FROM " . $GLOBALS['ecs']->table('goods_cat') . " AS gc , " . $GLOBALS['ecs']->table('goods') . " AS g " .
                    " WHERE g.goods_id = gc.goods_id AND g.is_delete = 0 and g.is_display=1  AND g.is_on_sale = 1 and g.seller_id='".$SESSION['seller_id'].
                    "' GROUP BY gc.seller_cat_id";
            $res3 = $GLOBALS['db']->getAll($sql);

            $newres = array();
            foreach($res2 as $k=>$v)
            {
                $newres[$v['seller_cat_id']] = $v['goods_num'];
                foreach($res3 as $ks=>$vs)
                {
                    if($v['seller_cat_id'] == $vs['seller_cat_id'])
                    {
                    $newres[$v['seller_cat_id']] = $v['goods_num'] + $vs['goods_num'];
                    }
                }
            }

            foreach($res as $k=>$v)
            {
                $res[$k]['goods_num'] = !empty($newres[$v['seller_cat_id']]) ? $newres[$v['seller_cat_id']] : 0;
            }
			
            //如果数组过大，不采用静态缓存方式
            if (count($res) <= 1000)
            {
                write_static_cache('seller_cat_pid_releate_'.$_SESSION['seller_id'], $res);
            }
        }
        else
        {
            $res = $data;
        }
    }
	
    if (empty($res) == true)
    {
        return $re_type ? '' : array();
    }
	
    $options = seller_cat_options($cat_id, $res); // 获得指定分类下的子分类的数组

    $children_level = 99999; //大于这个分类的将被删除
    if ($is_show_all == false)
    {
        foreach ($options as $key => $val)
        {
            if ($val['level'] > $children_level)
            {
                unset($options[$key]);
            }
            else
            {
                if ($val['is_show'] == 0)
                {
                    unset($options[$key]);
                    if ($children_level > $val['level'])
                    {
                        $children_level = $val['level']; //标记一下，这样子分类也能删除
                    }
                }
                else
                {
                    $children_level = 99999; //恢复初始值
                }
            }
        }
    }

    /* 截取到指定的缩减级别 */
    if ($level > 0)
    {
        if ($cat_id == 0)
        {
            $end_level = $level;
        }
        else
        {
            $first_item = reset($options); // 获取第一个元素
            $end_level  = $first_item['level'] + $level;
        }

        /* 保留level小于end_level的部分 */
        foreach ($options AS $key => $val)
        {
            if ($val['level'] >= $end_level)
            {
                unset($options[$key]);
            }
        }
    }

    if ($re_type == true)
    {
        $select = '';
        foreach ($options AS $var)
        {
            $select .= '<option value="' . $var['seller_cat_id'] . '" ';
            $select .= ($selected == $var['seller_cat_id']) ? "selected='ture'" : '';
            $select .= '>';
            if ($var['level'] > 0)
            {
                $select .= str_repeat('&nbsp;', $var['level'] * 4);
            }
            $select .= htmlspecialchars(addslashes($var['cat_name']), ENT_QUOTES) . '</option>';
        }

        return $select;
    }
    else
    {
        foreach ($options AS $key => $value)
        {
            $options[$key]['url'] = build_uri('category', array('cid' => $value['seller_cat_id']), $value['cat_name']);
        }
		
        return $options;
    }
}

/**
 * 过滤和排序所有分类，返回一个带有缩进级别的数组
 *
 * @access  private
 * @param   int     $cat_id     上级分类ID
 * @param   array   $arr        含有所有分类的数组
 * @param   int     $level      级别
 * @return  void
 */
function seller_cat_options($spec_cat_id, $arr)
{
    static $cat_options = array();

    if (isset($cat_options[$spec_cat_id]))
    {
        return $cat_options[$spec_cat_id];
    }

    if (!isset($cat_options[0]))
    {
        $level = $last_cat_id = 0;
        $options = $cat_id_array = $level_array = array();
        $data = read_static_cache('seller_cat_option_static'.$_SESSION['seller_id']);
        if ($data === false)
        {
            while (!empty($arr))
            {
                foreach ($arr AS $key => $value)
                {
                    $cat_id = $value['seller_cat_id'];
                    if ($level == 0 && $last_cat_id == 0)
                    {
                        if ($value['parent_id'] > 0)
                        {
                            break;
                        }

                        $options[$cat_id]          = $value;
                        $options[$cat_id]['level'] = $level;
                        $options[$cat_id]['id']    = $cat_id;
                        $options[$cat_id]['name']  = $value['cat_name'];
                        unset($arr[$key]);

                        if ($value['has_children'] == 0)
                        {
                            continue;
                        }
                        $last_cat_id  = $cat_id;
                        $cat_id_array = array($cat_id);
                        $level_array[$last_cat_id] = ++$level;
                        continue;
                    }

                    if ($value['parent_id'] == $last_cat_id)
                    {
                        $options[$cat_id]          = $value;
                        $options[$cat_id]['level'] = $level;
                        $options[$cat_id]['id']    = $cat_id;
                        $options[$cat_id]['name']  = $value['cat_name'];
                        unset($arr[$key]);

                        if ($value['has_children'] > 0)
                        {
                            if (end($cat_id_array) != $last_cat_id)
                            {
                                $cat_id_array[] = $last_cat_id;
                            }
                            $last_cat_id    = $cat_id;
                            $cat_id_array[] = $cat_id;
                            $level_array[$last_cat_id] = ++$level;
                        }
                    }
                    elseif ($value['parent_id'] > $last_cat_id)
                    {
                        break;
                    }
                }

                $count = count($cat_id_array);
                if ($count > 1)
                {
                    $last_cat_id = array_pop($cat_id_array);
                }
                elseif ($count == 1)
                {
                    if ($last_cat_id != end($cat_id_array))
                    {
                        $last_cat_id = end($cat_id_array);
                    }
                    else
                    {
                        $level = 0;
                        $last_cat_id = 0;
                        $cat_id_array = array();
                        continue;
                    }
                }

                if ($last_cat_id && isset($level_array[$last_cat_id]))
                {
                    $level = $level_array[$last_cat_id];
                }
                else
                {
                    $level = 0;
                }
            }
            //如果数组过大，不采用静态缓存方式
            if (count($options) <= 2000)
            {
                write_static_cache('seller_cat_option_static'.$_SESSION['seller_id'], $options);
            }
        }
        else
        {
            $options = $data;
        }
        $cat_options[0] = $options;
    }
    else
    {
        $options = $cat_options[0];
    }

    if (!$spec_cat_id)
    {
        return $options;
    }
    else
    {
        if (empty($options[$spec_cat_id]))
        {
            return array();
        }

        $spec_cat_id_level = $options[$spec_cat_id]['level'];

        foreach ($options AS $key => $value)
        {
            if ($key != $spec_cat_id)
            {
                unset($options[$key]);
            }
            else
            {
                break;
            }
        }

        $spec_cat_id_array = array();
        foreach ($options AS $key => $value)
        {
            if (($spec_cat_id_level == $value['level'] && $value['seller_cat_id'] != $spec_cat_id) ||
                ($spec_cat_id_level > $value['level']))
            {
                break;
            }
            else
            {
                $spec_cat_id_array[$key] = $value;
            }
        }
        $cat_options[$spec_cat_id] = $spec_cat_id_array;

        return $spec_cat_id_array;
    }
}

//获得商家信息 wang 商家入驻
function get_sellers()
{
	$sql="select us.id as seller_id,s.shop_name from ".$GLOBALS['ecs']->table('user_seller')." as us left join ".$GLOBALS['ecs']->table('seller_shopinfo')." as s on us.id=s.seller_id where s.id>0";
	$sellers=$GLOBALS['db']->getAll($sql);
	return $sellers;	
}

?>