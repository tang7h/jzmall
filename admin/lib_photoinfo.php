<?php

if (!defined('IN_ECS'))
{
	die('Hacking attempt');
}

function get_file_get_contents($url){
	//(int)$domain = stripos($url, 'tmall.com');
	if(preg_match('/tmall/' , $url)){

		$content = @file_get_contents($url); //获取地址内容
		if(!$content){
			echo " 抓取为空 请在试一次 ";
			exit;
		}
		$content = iconv( 'GBK','UTF-8', $content) ;
		//获取图片
		//preg_match_all('/<a href="#"><img src=[\"](.*?)[\"] /', $content, $photo);
		preg_match_all('/tb-pic tb-s60[\s\S]+?src=\"(.*?)\"/' , $content , $photo);
		//获取商品信息
		preg_match_all('/<li title=[\"](.*?)[\"].*?>(.*?)<\/li>/', $content , $commodity);

		if(empty($commodity[2])){
			$commodity[2] = '';
		}
		//修改图片尺寸大小
		foreach($photo[1] AS $k=>$v){
			$substring=substr($v, 0, strlen($v)-12);  
			$photo[$k]=$substring."360x360q90.jpg";
		}
		if(count($photo) == 2 && $photo[0] == array()){
			$photo = array() ;
		}
		$list['taobao'] = 1;
		$list['photo'] = $photo;
		$list['commodity'] = $commodity[2];
			
	}else{
		$content = @file_get_contents($url); //获取地址内容
		if(!$content){
			die('采集内容为空,数据受到保护');	
		}
		$content = iconv( 'GBK','UTF-8', $content) ; 
		//获取展示大图
		preg_match_all('/tb-gallery[\s\S]+?src="([^"]+)"/', $content, $matches);
		$img_str = $matches[1][0] ;
		if($img_str){
			//preg_match_all('/(?:png|jpg)_\d+x\d+\.jpg/', $img_str, $matches);
			preg_match_all('/\d+x\d+\.jpg/', $img_str, $matches);
			$short_name = $matches[0][0];
		}
		//获取图片
		//preg_match_all('/<img data-src=[\"](.*?)[\"].*? /', $content, $photo);
		preg_match_all('/<div class=\"tb-pic tb-s60\">[\s]+<a href=\"#\"><img src=\"(.*)?\"[\s\S]+\/><\/a>[\s]+<\/div>/imU' , $content , $photo);
		//获取商品信息
		//preg_match_all('/id="attributes"[\s\S]+?(<ul[\s\S]+?<\/ul>)/', $content, $commodity);
		preg_match_all('/<li title=[\"](.*?)[\"].*?>(.*?)<\/li>/', $content, $commodity);

		//修改编码
		//foreach ($commodity[2] AS $k=>$v){
			//$commodity[2][$k]= strip_tags($v);
		//}
		if(empty($commodity[2])){
			$commodity[2] = '';
		}


		//修改图片尺寸大小
		foreach($photo[1] AS $k=>$v){
			$substring=substr($v, 0, strlen($v)-9);  
			if($short_name){
				$photo[$k]=$substring.$short_name;
			}else{
				$photo[$k]=$substring."310x310.jpg";
			}
		}
		if(count($photo) == 2 && $photo[0] == array()){
			$photo = array() ;
		}

		$list['taobao'] = 1;
		$list['photo'] = $photo;
		$list['commodity'] = $commodity[2];		
	}
	header("Content-type: text/html; charset=utf8");
	return $list;
}


?>