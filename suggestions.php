<?php

/*
 * 搜索框提示功能
 * 
 * =============================================================================
 * 
 * $Author guan $
 * 
 * $Id suggestions.php 2013-10-08 14:14:40
 * =============================================================================
 */

define('IN_ECS', true);

if (!function_exists("htmlspecialchars_decode"))
{
    function htmlspecialchars_decode($string, $quote_style = ENT_COMPAT)
    {
        return strtr($string, array_flip(get_html_translation_table(HTML_SPECIALCHARS, $quote_style)));
    }
}
require(dirname(__FILE__) . '/includes/init.php');
require_once (dirname(__FILE__) . '/includes/cls_json.php');
$json = new JSON();
//$keyword = str_replace(" ", "", trim($_POST['keyword']));
$keyword = empty($_POST['keyword']) ? '' : trim($_POST['keyword']);
$category = empty($_POST['category']) ? 0 : trim($_POST['category']);

if($category == '全部')
{
	$children = "";
	$parent = "";
}
elseif($category == '模板')
{
	$children = get_children(9);
	$children = str_replace('g.', ' AND ', $children);
	$parent = " AND parent_id = 9";
}
elseif($category == '插件')
{
	$children = get_children(23);
	$children = str_replace('g.', ' AND ', $children);
	$parent = " AND parent_id = 23";
}
else
{
	$children = "";
	$parent = "";
}

if(empty($keyword))
{
	echo '';
	exit;
}
else
{
	//$keyword = iconv("UTF-8","GB2312",$keyword);
	$sql = "SELECT distinct keyword FROM " . $ecs->table('search_keyword') . "WHERE keyword LIKE '%" . mysql_like_quote($keyword) . "%' OR pinyin_keyword LIKE '%" . mysql_like_quote($keyword) . "%' ORDER BY count DESC";
	$result = $db->selectLimit($sql, 10);	
	
    //查询分类
	$sql = "SELECT cat_id, cat_name, parent_id FROM " . $ecs->table('category') . " WHERE cat_name LIKE '%" . mysql_like_quote($keyword) . "%' $children";
	$cate_res = $db->getRow($sql);
	$cat_html = '';
    if($cate_res['parent_id']  > 0)
    {
        $sql_1 = "SELECT cat_name FROM " . $ecs->table('category') . "WHERE cat_id=" . $cate_res['parent_id'];
        $parent_res = $db->getRow($sql_1);
        $url = build_uri('category', array('cid' => $cate_res['cat_id']));
        if($url == "")
        {
            $url = '#';
        }
        $cat_html = '<li onmouseover="_over(this);" onmouseout="_out(this);">' . "&nbsp;&nbsp;&nbsp;在<a href=" . $url . " style='color:red; font-weight:bold;'>" . $parent_res['cat_name'] . ">" . $cate_res['cat_name'] . "</a>" . '分类下搜索</li>';
    }
    
    $html = '<ul id="suggestions_list_id"><input type="hidden" value="1" name="selectKeyOne" id="keyOne" />';
    $res_num = 0;
    $exist_keyword = array();
    while ($row = $db->FetchRow($result))
    {
    	//$keyword_val = scws($row['keyword']);
    	//$arr = explode(' ', $row['keyword']);
        //foreach ($arr AS $key => $val)
        //{
        	//$val        = mysql_like_quote(trim($val));
        //}
		$scws_res = scws($row['keyword']);//这里可以把关键词分词：诺基亚，耳机
		$arr        = explode(',', $scws_res);
		$operator   = " AND ";
		//@author guan end

        $keywords = 'AND (';
        $goods_ids = array();
        foreach ($arr AS $key => $val)
        {
			
            if ($key > 0 && $key < count($arr) && count($arr) > 1)
            {
                $keywords .= $operator;
            }
            $val        = mysql_like_quote(trim($val));
            //$sc_dsad    = $_REQUEST['sc_ds'] ? " OR goods_desc LIKE '%$val%'" : '';
            $keywords  .= "(goods_name LIKE '%$val%' OR goods_sn LIKE '%$val%' OR keywords LIKE '%$val%' $sc_dsad)";

            $sql = 'SELECT DISTINCT goods_id FROM ' . $ecs->table('tag') . " WHERE tag_words LIKE '%$val%' ";
            $res = $db->query($sql);
            while ($rows = $db->FetchRow($res))
            {
                $goods_ids[] = $rows['goods_id'];
            }
			
        }
        $keywords .= ')';
        $count = $db->getOne("SELECT count(*) FROM " . $ecs->table('goods') . " WHERE is_delete=0 AND is_on_sale=1 AND is_alone_sale=1  $keywords");
//         如果查询的数量为空则不显示此关键词
       if($count <= 0)
       {
           continue;
       }

		$keyword = preg_quote($keyword);//特殊字符自动添加转义符\
		//$keyword_style = preg_replace("/($keyword_style)/","<font style='color:red; font-weight:blod;'>$1</font>",$row['keyword']);
		$keyword_style = preg_replace("/($keyword)/i","<font style='font-weight:normal;color:#999999;'>$1</font>", $row['keyword']);
		$keyword_string = "<font style='font-weight:;'>" . $keyword . "</font>";
        $keyword_name = str_replace($keyword, $keyword_string, $weight_keyword);
        $html .= '<li onmouseover="_over(this);" title="' . $row['keyword'] . '" onmouseout="_out(this);" onClick="javascript:fill(\''.$row['keyword'].'\');">&nbsp;' . $keyword_style . '<span class="suggest_span">约' . $count . '个商品</span></li>';
		$res_num++;
		$exist_keyword[] = $row['keyword'];
		if(isset($cat_html) && $cat_html != "")
		{
			$html .= $cat_html;
			unset($cat_html);
		}
    }
	
	//查询商品关键字
	if($res_num < 10)
	{
		$sql = "SELECT distinct goods_name FROM " . $ecs->table('goods') . " WHERE goods_name like '%$keyword%' OR pinyin_keyword LIKE '%$keyword%' AND is_delete=0 AND is_on_sale=1 AND is_alone_sale=1";
		$keyword_res = $db->getAll($sql);

		$res_count = count($keyword_res);
		if($res_count <= 0)
		{
			$html .= '</ul>';
			exit;
		}
		$len = 10 - $res_num;
		for($i=0; $i<$len; $i++)
		{
			if($res_count == $i)
			{
				break;
			}
			$scws_res = scws($keyword_res[$i]['goods_name']);//这里可以把关键词分词：诺基亚，耳机
			$arr        = explode(',', $scws_res);
			$operator   = " AND ";
			//@author guan end
	
	        $keywords = 'AND (';
	        $goods_ids = array();
	        foreach ($arr AS $key => $val)
	        {
				
	            if ($key > 0 && $key < count($arr) && count($arr) > 1)
	            {
	                $keywords .= $operator;
	            }
	            $val        = mysql_like_quote(trim($val));
	            //$sc_dsad    = $_REQUEST['sc_ds'] ? " OR goods_desc LIKE '%$val%'" : '';
	            $keywords  .= "(goods_name LIKE '%$val%' OR goods_sn LIKE '%$val%' OR keywords LIKE '%$val%' $sc_dsad)";
	
	            $sql = 'SELECT DISTINCT goods_id FROM ' . $ecs->table('tag') . " WHERE tag_words LIKE '%$val%' ";
	            $res = $db->query($sql);
	            while ($rows = $db->FetchRow($res))
	            {
	                $goods_ids[] = $rows['goods_id'];
	            }
				
	        }
        	$keywords .= ')';
			$count = $db->getOne("SELECT count(*) FROM " . $ecs->table('goods') . " WHERE is_delete=0 AND is_on_sale=1 AND is_alone_sale=1 $keywords");
			
			if($count <= 0)
		    {
			  continue;
		    }
		    
		    if(in_array($keyword_res[$i]['goods_name'], $exist_keyword))
		    {
		    	continue;
		    }
		    
			$keyword_new_name = $keyword_res[$i]['goods_name'];
			$keyword_new_name=cut_str($keyword_new_name, 25);
			$keyword_style = preg_replace("/($keyword)/i","<font style='font-weight:normal;color:#999999;'>$1</font>", $keyword_new_name);
			$html .= '<li onmouseover="_over(this);" onmouseout="_out(this);" title="' . $keyword_new_name . '" onClick="javascript:fill(\''.$keyword_new_name . '\');">&nbsp;' . $keyword_style . '&nbsp;<b>' . '</b>' . '<span class="suggest_span">约' . $count . '个商品</span></li>';
		}
	}

    $html .= '</ul>';
    
    echo $html;
	exit;

}




/**
 *  author : lihui870920@163.com
 *  date  : 2012-05-12
 *  截取指定的中英文字符的长度
 *
 *	指定字符串

 *	保留长度

 *	开始位置

 *	编码
 */

function cut_str($string, $sublen, $start = 0, $code = 'gbk')
{
	if($code == 'utf-8')
	{
		$pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/";
		preg_match_all($pa, $string, $t_string);
		if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."...";
		return join('', array_slice($t_string[0], $start, $sublen));
	}
	else
	{
		$start = $start*2;
		$sublen = $sublen*2;
		$strlen = strlen($string);
		$tmpstr = '';

		for($i=0; $i< $strlen; $i++)
		{
		if($i>=$start && $i< ($start+$sublen))
		{
		if(ord(substr($string, $i, 1))>129)
			{
			$tmpstr.= substr($string, $i, 2);
		}
		else
		{
		$tmpstr.= substr($string, $i, 1);
		}
		}

		if(ord(substr($string, $i, 1))>129) $i++;
		}
			//超出多余的字段就显示...

			if(strlen($tmpstr)< $strlen ) $tmpstr.= "";

			return $tmpstr;
	}
}
?>
