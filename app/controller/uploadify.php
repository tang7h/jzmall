<?php
/*
Uploadify 后台处理 Demo
Author:POOY
Date:2012-12-26
uploadify 后台处理 ：http://www.pooy.net/uploadify-houtai.html
*/

require(EC_PATH . '/includes/init.php');
require_once(EC_PATH . '/'. ADMIN_PATH. '/includes/lib_goods.php');
require(EC_PATH . '/includes/cls_image.php');
$image = new cls_image($_CFG['bgcolor']);

// handle_gallery_image(0, $_FILES['img_url'], $_POST['img_desc'], $_POST['img_file'], $single_id);
// 设置上传目录
$path = "/upimgs/" . local_date('Ym', gmtime()) . "/";
$path_to = "/uploads/images/" . local_date('Ym', gmtime()) . "/single_img_temp/";

if(!(file_exists($path_to)))
{
   createFolder($path_to);
   mkdir($path, 0777);
}

if (!empty($_FILES)) {

	require_once (EC_PATH . '/includes/cls_json.php');
	$json = new JSON();
	//得到上传的临时文件流
	$tempFile = $_FILES['Filedata']['tmp_name'];

	//允许的文件后缀
	$fileTypes = array('jpg','jpeg','gif','png'); 
	
	//得到文件原名
	$fileName = iconv("UTF-8","GB2312",$_FILES["Filedata"]["name"]);
	
	
	$fileParts = pathinfo($_FILES['Filedata']['name']);

	//接受动态传值
	$files=@$_POST['typeCode'];

    $path = EC_PATH.$path;
	//最后保存服务器地址
	if(!is_dir($path)){
	   mkdir($path);
	}
	
	if(!is_dir($path_to)){
		mkdir($path_to);
	}

    //需要全路径
	if (move_uploaded_file($tempFile, $path.$fileName)){
		$fileNameArr = explode(',', $fileName);
		$result = array('msg');
		foreach($fileNameArr as $key => $val)
		{
			$to_img = $path_to . 'y_' . rand(10, 1000000) . '_' . gmtime() . '.' . getExt($val);
			$new_img = rename($path . $val, EC_PATH.$to_img);

// 			unlink($path . $val);
		}

        GZ_Api::outPut(array('file'=>$to_img),null,'');

    }else{
//		echo $fileName."！";
        GZ_Api::outPut(0,null,'上传失败');
	}

}


// 获取文件扩展名
// @param $fileName 上传文件的原文件名
function getExt($fileName){
	$ext = explode(".", $fileName);
	$ext = $ext[count($ext) - 1];
	return strtolower($ext);
}


function createFolder($path)
 {
  if (!file_exists($path))
  {
   createFolder(dirname($path));
   mkdir($path, 0777);
  }
 }
?>