<?php

if (!defined('IN_ECS'))
{
	die('Hacking attempt');
}

function get_file_get_contents($url){

	$content = @file_get_contents($url); //获取地址内容
	$content = iconv( 'GBK','UTF-8', $content) ;

	if(!$content){
		echo " 抓取为空 请在试一次 ";
		exit;
	}

	if(preg_match('/tmall/' , $url)){
		//大图
		preg_match_all('/id=\"J_ImgBooth[\s\S]+?src=\"(.*?)\"/' , $content , $match);
		$big_pic = $match[1][0];
		if($big_pic){
			preg_match_all('/(?:png|jpg)_\d+x\d+q\d+\.jpg/', $big_pic, $matches_arr);
			$ext = $matches_arr[0][0] ;
		}
		//获取缩略图片
		preg_match_all('/li class=\"(?:tb-selected|)\"[\s\S]+?src=\"(.*?)\"/' , $content , $matches);

		//修改图片尺寸大小
		foreach($matches[1] AS $k=>$v){
			$substring=substr($v, 0, strlen($v)-16);
			$photo[$k]=$substring.$ext;
		}
		if(count($photo) == 2 && $photo[0] == array()){
			$photo = array() ;
		}
		//获取商品描述信息
		preg_match_all('/\"descUrl\"\:\"(.*?)\"/', $content, $commodity);
		if(empty($commodity[1])){
			$commodity[1] = array();
		}else{
			$desc = @file_get_contents($commodity[1][0]);
			$desc = iconv( 'GBK','UTF-8', $desc) ;
			$desc = substr($desc , 10 ,-2);
		}

		$list['taobao'] = 1;
		$list['photo'] = $photo;
		$list['commodity'] = $desc;

	}else{

		//获取图片
		preg_match_all('/tb-pic tb[\s\S]+?src=\"(.*?)\"/' , $content , $match);

		//大图
		$big_pic = $match[1][0];
		if($big_pic){
			preg_match_all('/(?:png|jpg)_\d+x\d+\.jpg/', $big_pic, $matches);
			$ext = $matches[0][0] ;
		}
		array_shift($match[1]) ;

		//修改图片尺寸大小
		foreach($match[1] AS $k=>$v){
			$substring=substr($v, 0, strlen($v)-13);
			$photo[$k]=$substring.$ext;
		}

		if(count($photo) == 2 && $photo[0] == array()){
			$photo = array() ;
		}
		//获取商品描述信息
		preg_match_all('/\"apiItemDesc\"\:\"(.*?)\"/', $content, $commodity);
		if(empty($commodity[1])){
			$commodity[1] = array();
		}else{
			$desc = @file_get_contents($commodity[1][0]);
			$desc = iconv( 'GBK','UTF-8', $desc) ;
			$desc = substr($desc , 10 ,-2);
		}

		$list['taobao'] = 1;
		$list['photo'] = $photo;
		$list['commodity'] = $desc;
	}
	header("Content-type: text/html; charset=utf8");
	return $list;
}


?>