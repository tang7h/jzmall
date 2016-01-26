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

switch ($tmp[0]) {
    case 'info':

        $id = _POST('article_id', 0);
        if (empty($id)) {
            GZ_Api::outPut(101);
        }
        if (!$article = get_article_info($id)) {
            GZ_Api::outPut(13);
        }

        $base = sprintf('<base href="%s/" />', dirname($GLOBALS['ecs']->url()));
        $html = '<!DOCTYPE html><html><head><title>'.$article['title'].'</title><meta http-equiv="Content-Type" content="text/html; charset=utf-8" /><meta name="viewport" content="width=device-width, initial-scale=1.0"><style>img {width: auto\9;height: auto;vertical-align: middle;border: 0;-ms-interpolation-mode: bicubic;max-width: 100%; }html { font-size:100%; } </style>'.$base.'</head><body>'.$article['content'].'</body></html>';

        GZ_Api::outPut(array('data' => $html));

        break;
    case 'list':

        //12是快讯
        $cat_id = _POST('cat_id',12);
        $tempData = get_articleslist($cat_id);
        $data = array();

        if(!empty($tempData['arr'])){
            foreach($tempData['arr'] as $temp){
                $data[] = $temp;
            }
        }

        GZ_Api::outPut(array('data' => $data));

        break;
}


function get_article_info($article_id)
{
    /* 获得文章的信息 */
    $sql = "SELECT a.article_id as id, a.title, a.content ".
        "FROM " .$GLOBALS['ecs']->table('article'). " AS a ".
        "WHERE a.is_open = 1 AND a.article_id = '$article_id'";
    $row = $GLOBALS['db']->getRow($sql);

    return $row;
}

/**
 * 获得分类下所有文章分类
 * ecmoban by Leah
 * @param type $cat_id
 * @return boolean
 */
function get_art_child( $cat_id ){

    if ($cat_id > 0)
    {
        $sql = 'SELECT * FROM ' . $GLOBALS['ecs']->table('article_cat') . " WHERE parent_id = '$cat_id'";
        $res = $GLOBALS['db']->getAll($sql);
    }
    else
    {
        return false;
    }
    return $res;

}


/* 获得文章列表 */
function get_articleslist($cat_id,$page=1,$page_size=5)
{

    $where = '';
    if ($cat_id)
    {
        $where .= " AND a." . get_article_children($cat_id);
    }

    /* 文章总数 */
    $sql = 'SELECT COUNT(*) FROM ' .$GLOBALS['ecs']->table('article'). ' AS a '.
        'LEFT JOIN ' .$GLOBALS['ecs']->table('article_cat'). ' AS ac ON ac.cat_id = a.cat_id '.
        'WHERE 1 ' .$where;
    $filter['record_count'] = $GLOBALS['db']->getOne($sql);

    $filter = page_and_size($filter);

    $filter['start'] = $page;
    $filter['page_size'] = $page_size;

    /* 获取文章数据 */
    $sql = 'SELECT a.* , ac.cat_name '.
        'FROM ' .$GLOBALS['ecs']->table('article'). ' AS a '.
        'LEFT JOIN ' .$GLOBALS['ecs']->table('article_cat'). ' AS ac ON ac.cat_id = a.cat_id '.
        'WHERE 1 ' .$where.' '.$filter['sort_order'];

    $filter['keyword'] = stripslashes($filter['keyword']);

    $arr = array();
    $res = $GLOBALS['db']->selectLimit($sql, $filter['page_size'], $filter['start']);

    while ($rows = $GLOBALS['db']->fetchRow($res))
    {
        $rows['date'] = local_date($GLOBALS['_CFG']['time_format'], $rows['add_time']);

        $arr[] = $rows;
    }
    return array('arr' => $arr, 'filter' => $filter, 'page_count' => $filter['page_count'], 'record_count' => $filter['record_count']);
}

/**
 * 分页的信息加入条件的数组
 *
 * @access  public
 * @return  array
 */
function page_and_size($filter)
{
    if (isset($_REQUEST['page_size']) && intval($_REQUEST['page_size']) > 0)
    {
        $filter['page_size'] = intval($_REQUEST['page_size']);
    }
    elseif (isset($_COOKIE['ECSCP']['page_size']) && intval($_COOKIE['ECSCP']['page_size']) > 0)
    {
        $filter['page_size'] = intval($_COOKIE['ECSCP']['page_size']);
    }
    else
    {
        $filter['page_size'] = 15;
    }

    /* 每页显示 */
    $filter['page'] = (empty($_REQUEST['page']) || intval($_REQUEST['page']) <= 0) ? 1 : intval($_REQUEST['page']);

    /* page 总数 */
    $filter['page_count'] = (!empty($filter['record_count']) && $filter['record_count'] > 0) ? ceil($filter['record_count'] / $filter['page_size']) : 1;

    /* 边界处理 */
    if ($filter['page'] > $filter['page_count'])
    {
        $filter['page'] = $filter['page_count'];
    }

    $filter['start'] = ($filter['page'] - 1) * $filter['page_size'];

    return $filter;
}