<?php 

/**
 * php 的网络请求类
 * 
 * curl在php里使用要打开php.ini的curl选项
 * 
 * @author Chen Qiang
 *
 */
class CurlHelper{
	
	/**
	 * 请求http请求 Get
	 * @param unknown $url
	 * @param unknown $headers 
	 *  = {
	 *      'User-Agent'=>'android',
	 *      'Head'=>'xx'
	 *  }
	 * @return mixed
	 */
	public static function getUrlOut($url,$headers=array()) {

		//ob_start();
		$ch = curl_init ();

		// 设置选项，包括URL
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
		curl_setopt ( $ch, CURLOPT_HEADER,false );//是否输出头

        if(strpos($url,'https://')==0){
            curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false);//这个是重点。
        }

		if(!empty($headers)){
			$headerArr = array();
			foreach ( $headers as $key => $value ) {
				$headerArr[] = $key . ':' . $value;
			}
			curl_setopt ( $ch,  CURLOPT_HTTPHEADER, $headerArr );
		}

		// 执行并获取HTML文档内容
		$output = curl_exec ( $ch );
		// 释放curl句柄
		curl_close ( $ch );
		// 		$out = ob_get_contents();
		// 		ob_clean();
		// 		print_r($out);exit;
		// 打印获得的数据

		return json_decode($output,true);//转成json
	}
	
	/**
	 * 请求http请求 Post
	 * @param String $url
	 * @param array $data 
	 *  ={
	 *  	key=>value
	 * }
	 * @param array $headers
	 *  = {
	 *      'User-Agent'=>'android',
	 *      'Head'=>'xx'
	 *  }
	 * @return mixed
	 */
	public static function postUrlOut($url,$data=array(),$headers=array()){
		
		$ch = curl_init ();
		// print_r($ch);
		curl_setopt ( $ch, CURLOPT_URL, $url );
		curl_setopt ( $ch, CURLOPT_POST, 1 );
		curl_setopt ( $ch, CURLOPT_HEADER, false );
		curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );

        if(!empty($data) && is_array($data)){
            $temp = '';
            foreach($data as $key=>$value){
                if(empty($temp)){
                    $temp = $key .'='.$value;
                }else{
                    $temp .= '&'.$key .'='.$value;
                }
            }
            $data = $temp;
        }

		if(!empty($data)){
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
		}
		
		if(!empty($headers)){
			$headerArr = array();
			foreach ( $headers as $key => $value ) {
				$headerArr[] = $key . ':' . $value;
			}
			curl_setopt ( $ch,  CURLOPT_HTTPHEADER, $headerArr );
		}

		$output = curl_exec ( $ch );
		curl_close ( $ch );
		return $output;
	}
}