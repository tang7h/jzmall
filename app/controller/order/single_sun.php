<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 8/9/2015
 * Time: 10:21
 */

include_once(EC_PATH . '/includes/cls_image.php');

class other {



//    /**
//     * 评论订单
//     */
//    public function postComment($rank,$status,$content,$order_id,$goods_id,$goods_tag){
//        {
//            $rank = empty($_POST['comment_rank']) ? '5' : $_POST['comment_rank'];
//            $status = 1 - $GLOBALS['_CFG']['comment_check'];
//            $content = empty($_POST['content']) ? '' : htmlspecialchars($_POST['content']);
//            $order_id = empty($_POST['order_id']) ? '' : $_POST['order_id'];
//            $goods_id = empty($_POST['goods_id']) ? '' : $_POST['goods_id'];
//            $goods_tag = empty($_POST['goods_tag_box']) ? '' : $_POST['goods_tag_box'];
//        }
//
//        if(empty($content)||empty($order_id)||empty($goods_id)||empty($rank)){
//            GZ_Api::outPut(101);
//        }
//
//        $isExist = $other->isOrderExist($user_id,$order_id,'finished');
//        if($isExist){
//            $result = $other->postComment($rank,$status,$content,$order_id,$goods_id,$goods_tag);
//            GZ_Api::outPut(array());
//        }else{
//            GZ_Api::outPut(13);
//        }
//
//
//        $tag = implode(',', $goods_tag);
//        $addtime = gmtime();
//        $ip = real_ip();
//        //wang 商家入驻 获取商品商家id
//        $seller_id=$GLOBALS['db']->getOne("select seller_id from ".$GLOBALS['ecs']->table('goods')." where goods_id='$goods_id'");
//
//        $sql = "INSERT INTO " . $GLOBALS['ecs']->table('comment') . "(comment_type, id_value, email, user_name, content, comment_rank, add_time, ip_address
//			, status, parent_id, user_id, single_id, order_id, goods_tag,seller_id)VALUES('0', '$goods_id', ' $_SESSION[email]', '$_SESSION[user_name]', '$content', '$rank',
//	    '$addtime', '$ip', '$status', '0', '$_SESSION[user_id]', '0', '$order_id', '$tag','$seller_id')";
//
//        if($GLOBALS['db']->query($sql))
//        {
//            if($status)
//            {
//                $sql = "UPDATE ".$GLOBALS['ecs']->table('goods'). " SET comments_number = (comments_number + 1) WHERE goods_id = '$goods_id'";
//
//                $GLOBALS['db']->query($sql);
//                return true;
////                show_message('评论成功', $GLOBALS['_LANG']['back_page_up'], "user.php?act=single_list", 'success');
//            }
//            else
//            {
//                return true;
////                show_message('评论成功，请等待管理员审核', $GLOBALS['_LANG']['back_page_up'], "user.php?act=single_list", 'success');
//            }
//
//// 		esc_header("location: user.php?act=login\n");
//
//            exit;
//        }
//    }

    /* 插入晒单提交信息 */

    public function postSingleInsert($user_id,$order_id,$title_sn,$desc_sn,$goods_id,$singleRank,$single_img_url=array(),$cont_desc='',$cover=''){
        include_once(EC_PATH . '/includes/lib_transaction.php');

        if(empty($order_id)||!is_numeric($order_id))
        {
            GZ_Api::outPut(101,null,'请选择晒单订单');
        }

        if(empty($desc_sn))
        {
            GZ_Api::outPut(101,null,'请填写晒单描述');
        }

        if(empty($title_sn))
        {
            $title_sn = $this->substr_cut($desc_sn,12);
//            GZ_Api::outPut(101,null,'请填写晒单标题');
        }

        if(empty($goods_id)||!is_numeric($goods_id))
        {
            GZ_Api::outPut(101,null,'选择商品');
        }

        if($singleRank<0||$singleRank>5)
        {
            GZ_Api::outPut(101,null,'请选择正确的分数');
        }

        if(empty($single_img_url) || !is_array($single_img_url) || count($single_img_url) < 1 || count($single_img_url) > 10)
        {
            GZ_Api::outPut(101,null,'您还没有选择要晒单的图片哦');
        }

        $db = $GLOBALS['db'];
        $ecs = $GLOBALS['ecs'];

        $sql = "SELECT * FROM " . $ecs->table('single') . " WHERE order_id='$order_id' AND goods_id = $goods_id";

        if(($db->getOne($sql)))
        {
            GZ_Api::outPut(101,null,'-_-这个订单商品已经晒单了，重新选择一个吧');
        }

        $title_sn =  htmlspecialchars($title_sn);
        $desc_sn =   htmlspecialchars($desc_sn);
        $image = new cls_image($GLOBALS['_CFG']['bgcolor']);  // 相册图片

        $dir = 'images';
        if (defined('IMAGE_DIR'))
        {
            $dir = IMAGE_DIR;
        }

        $path = "/upimgs/" . local_date('Ym', gmtime()) . "/";
        $sub_dir = date('Ym', gmtime());

        $user_name = $_SESSION['user_name'];
        $time = gmtime();
        $orders = get_user_orders_goods($user_id, 10, 0, $order_id);
        $goods_name = $orders[0]['goods_name'];
        $order_sn = $orders[0]['order_sn'];
        $cat_arr = $db->getRow("SELECT cat_id FROM " . $ecs->table('goods') . " WHERE goods_id=" . $orders[0]['goods_id']);
        $cat_id = $cat_arr['cat_id'];
        $order_time = $orders[0]['single_order_time'];
        $sql = "INSERT INTO " . $ecs->table('single') . "(order_id, single_name, single_description, single_like, user_name, is_audit, order_sn, addtime, goods_id, goods_name, user_id, order_time, cat_id)VALUES(
        '$order_id', '$title_sn', '$desc_sn', $singleRank, '$user_name', 0, '$order_sn', '$time', '$goods_id', '$goods_name', '$user_id', '$order_time', $cat_id)";

        $db->query($sql);
        /* 商品编号 */
        $single_id = $db->insert_id();

        /* 处理相册图片 */
        if(!empty($single_id))
        {
            $i = 0;
            foreach($single_img_url as $k => $v)
            {
                $front_cover = 0;
                if($k == $cover)
                {
                    $front_cover = 1;
                }
                $rand_name = gmtime() . sprintf("%03d", mt_rand(1,999));
                $img_ext = substr($v, strrpos($v, '.'));
                $img_name = $goods_id . '_S_' . $rand_name;
                $img_path = $dir.'/'.$sub_dir.'/single_img/'.$img_name.$img_ext;

                $dir = EC_PATH.'/'.$dir;
                if(!(file_exists($dir.'/'.$sub_dir.'/single_img/')))
                {
                    $this->createFolder($dir.'/'.$sub_dir.'/single_img/');
                    mkdir($path, 0777);
                }

                if($this->move_image_file_single(EC_PATH.$v,$dir.'/'.$sub_dir.'/single_img/'.$img_name.$img_ext))
                {
                    $thumb_url = $image->make_thumb($img_path, $GLOBALS['_CFG']['thumb_width'],  $GLOBALS['_CFG']['thumb_height']);
                    $thumb_url = is_string($thumb_url) ? $thumb_url : '';
                    $sql = "INSERT INTO " . $ecs->table('goods_gallery') . " (goods_id, img_url, img_desc, thumb_url, img_original, single_id, dis_id, front_cover) " .
                        "VALUES ('0', '$img_path', '$cont_desc[$i]', '$thumb_url', '', '$single_id','0', '$front_cover')";
                    $db->query($sql);
                    $i++;
                    // 				unlink(EC_PATH.$v);
                }
                else
                {
                    GZ_Api::outPut(101,null,'-_-提交失败，请检查网络');
                }
            }

            $sql = "UPDATE " . $ecs->table('order_goods') . " SET is_single = '1' WHERE order_id='$order_id' AND goods_id='$goods_id'";
            if($db->query($sql))
            {
                GZ_Api::outPut(array());
            }
            else
            {
                GZ_Api::outPut(101,null,$GLOBALS['_LANG']['single_error']);
            }
        }
        else
        {
            GZ_Api::outPut(101,null,$GLOBALS['_LANG']['single_error']);
        }
    }

    function substr_cut($str_cut,$length)
    {
        if (mb_strlen($str_cut) > $length)
        {
            for($i=0; $i < $length; $i++)
                if (ord($str_cut[$i]) > 128)    $i++;
            $str_cut = mb_substr($str_cut,0,$i)."..";
        }
        return $str_cut;
    }

    /**
     *
     * @param unknown_type $source
     * @param unknown_type $dest
     * @return boolean
     *
     * @author guan
     */
    function move_image_file_single($source, $dest)
    {

        if (@copy($source, $dest))
        {
            @unlink($source);
            return true;
        }
        return false;
    }

    function createFolder($path)
    {
        if (!file_exists($path))
        {
            $this->createFolder(dirname($path));
            mkdir($path, 0777);
        }
    }

    public function commentList($user_id){
        include_once(EC_PATH . 'includes/lib_transaction.php');

        $page = isset($_REQUEST['page']) ? intval($_REQUEST['page']) : 1;

        $order_id_arr = $GLOBALS['db']->getAll("SELECT order_id FROM " . $GLOBALS['ecs']->table('order_info') . "WHERE user_id = '$user_id' AND shipping_status = " . SS_RECEIVED);

        $orders = array();

        if(!empty($order_id_arr))
        {
            $order_id = '';
            foreach($order_id_arr as $val)
            {
                $order_id .= $val['order_id'] . ',';
            }
            $order_id = substr($order_id, 0, -1);

            $record_count = $GLOBALS['db']->getOne("SELECT COUNT(*) FROM " .$GLOBALS['ecs']->table('order_goods'). " WHERE order_id IN($order_id)");

            $action = 'single_list';
            $pager  = get_pager('user.php', array('act' => $action), $record_count, $page);
            $orders = get_user_orders_goods($user_id, $pager['size'], $pager['start']);
        }

        return $orders;
    }

    /**
     * @param $user_id
     * @param $order_id
     * @return bool
     *
     * 订单是否存在
     */
    public function isOrderExist($user_id,$order_id,$type='all'){

        $typeSql =  GZ_order_query_sql($type);
        $sql = "SELECT COUNT(*) FROM " . $GLOBALS['ecs']->table('order_info') .
            " WHERE order_id = '$order_id' AND user_id = $user_id ".$typeSql;

        return $GLOBALS['db']->getOne($sql) > 0;
    }

}

define('INIT_NO_USERS', true);
require(EC_PATH . '/includes/init.php');
GZ_Api::authSession();

$user_id = $_SESSION['user_id'];
$other = new Other();

$order_id = _POST('order_id', ''); //订单号
$title_sn =_POST('title', '');
$desc_sn =_POST('desc', '');
$goods_id =_POST('goods_id', 0);
$singleRank =_POST('rank', 0);
$single_img_url =_POST('single_img_url', array());

$other->postSingleInsert($user_id,$order_id,$title_sn,$desc_sn,$goods_id,$singleRank,$single_img_url);

