#ECTouchThemes

该版本库用于存放ECTouch模板主题文件，模板主题安装文档应包含需要修改的控制器，增加的文件，执行的sql。

其他内容陆续补充。

1.目录：include\apps\default\controller\IndexController.class.php
  位置：$this->assign('navigator', $navigator['middle']); 
  下面添加代码：
   //首页推荐分类
   $cat_rec = model('Common')->get_recommend_res();
   $this->assign('cat_rec', $cat_rec[1]); 


3.目录：include\apps\default\controller\CategoryController.class.php
  位置：$arr[$row['goods_id']]['promotion'] = model('GoodsBase')->get_promotion_show($row['goods_id']);
  下面添加代码：
  $arr[$row['goods_id']]['comment_count']  = model('Comment')->get_goods_comment( $row['goods_id'] , 0);  //商品总评论数量 
  $arr[$row['goods_id']]['good_commnet_count']  = model('Comment')->favorable_comment( $row['goods_id'], 0);  //获得商品好评数量  


4.目录：include\apps\default\controller\FlowController.class.php
  位置：$result ['total_number'] = $cart_goods ['total'] ['total_number'];
  下面添加代码：
  $result['market_total'] =  $cart_goods['total']['market_price'];//市场价格

6.目录：include\apps\default\controller\UserController.class.php
  位置：最后一个方法下面
  添加代码：
     /**
     * 收藏 
     */
    public function collection_list() {
        $this->display('user_collection_list.dwt');
    }
    /**
     * 异步加载收藏
     */
    public function async_collection_list() {
        if (IS_AJAX) {
            $start = $_POST['last'];
            $limit = $_POST['amount'];
            $goods_list = model('ClipsBase')->get_collection_goods($this->user_id, $limit, $start);
            foreach ($goods_list as $key => $good) {
                $this->assign('collection_good', $good);
                $sayList[] = array(
                    'single_item' => ECTouch::view()->fetch('library/asynclist_info.lbi')
                );
            }
            die(json_encode($sayList));
        } else {
            $this->redirect(url('index'));
        }
    }

7.目录：include\apps\default\model\BrandModel.class.php
  位置：$arr[$row['goods_id']]['promotion'] = model('GoodsBase')->get_promotion_show($row['goods_id']);
  添加代码：
 $arr[$row['goods_id']]['comment_count']  = model('Comment')->get_goods_comment( $row['goods_id'] , 0);  //商品总评论数量
 $arr[$row['goods_id']]['good_commnet_count']  = model('Comment')->favorable_comment( $row['goods_id'], 0);  //获得商品好评数量

9.目录：include\apps\default\model\CommonModel.class.php
  位置：最后一个funciton 结束位置后
  添加代码:
    /**
     * 首页推荐分类
     * @return type
     *  by Leah
     */
    function get_recommend_res() {
        $cat_recommend_res = $this->query("SELECT c.cat_id, c.cat_name, cr.recommend_type FROM " . $this->pre . "cat_recommend AS cr INNER JOIN " . $this->pre . "category AS c ON cr.cat_id=c.cat_id");
        if (!empty($cat_recommend_res)) {
            $cat_rec_array = array();
            foreach ($cat_recommend_res as $cat_recommend_data) {
                $cat_rec[$cat_recommend_data['recommend_type']][] = array('cat_id' => $cat_recommend_data['cat_id'], 'cat_name' => $cat_recommend_data['cat_name']);
            }
            return $cat_rec;
        }
    } 


15.目录：include\apps\default\controller\CommentController.class.php
   位置:$page = I('get.page');
   下面添加：$rank = I('get.rank');

   位置：if ($result ['error'] == 0)  
   里面替换为：
   if ($rank == 1) {
                $comment_good = model('Comment')->assign_comment($cmt->id, $cmt->type, '1', $cmt->page);
                $this->assign('comment_good', $comment_good['comments']);
                $this->assign('pager_good', $comment_good['pager']);
            }
            if ($rank == 2) {
                $comment_medium = model('Comment')->assign_comment($cmt->id, $cmt->type, '2', $cmt->page);
                $this->assign('comment_medium', $comment_medium['comments']);
                $this->assign('pager_medium', $comment_medium['pager']);
            }
            if ($rank == 3) {
                $comment_poor = model('Comment')->assign_comment($cmt->id, $cmt->type, '3', $cmt->page);
                $this->assign('comment_poor', $comment_poor['comments']);
                $this->assign('pager_poor', $comment_poor['pager']);
            }
            $this->assign('comment_info', model('Comment')->get_comment_info($cmt->id, $cmt->type));
            $this->assign('comment_type', $cmt->type);
            $this->assign('id', $cmt->id);
            $this->assign('username', $_SESSION['user_name']);
            $this->assign('email', $_SESSION['email']);

            /* 验证码相关设置 */
            if ((intval(C('captcha')) & CAPTCHA_COMMENT) && gd_version() > 0) {
                $this->assign('enabled_captcha', 1);
                $this->assign('rand', mt_rand());
            }
            $result['rank'] = $rank;
            $result['message'] = C('comment_check') ? L('cmt_submit_wait') : L('cmt_submit_done');
            $result['content'] = ECTouch::$view->fetch("library/comments_list.lbi");
  
11.目录：include\apps\default\language\zh_cn\common.php
   位置：任意
   添加代码：
    //by Leah
    $_LANG['after_sales'] = '售后服务';
    $_LANG['continue_buy'] = '继续购物';
    $_LANG['my_cart'] = '我的购物车';
    $_LANG['total_price'] = '合计金额';
    $_LANG['view_collect'] = '查看收藏夹';
    $_LANG['is_invoice'] = '是否开发票';
    $_LANG['no_select'] = '未选择';
    $_LANG['add_success'] = '添加成功!';
    $_LANG['add_cart_success'] = '商品已成功加入购物车';
    $_LANG['think_like_goods'] = '也许您还喜欢';
  

13.目录：D:\wamp\www\ectouch\ectouch\data\common\js\shopping_flow.js
   位置：function changeNeedInv(need)
   整段方法替换为：
    /* *
    * 改变发票的方式
    */
    function changeNeedInv(need)
    {
      var objType    = document.getElementById('ECS_INVTYPE');
      var objPayee   = document.getElementById('ECS_INVPAYEE');
      var objContent = document.getElementById('ECS_INVCONTENT');
      var invType    = need ? (objType != undefined ? objType.value : '') : '';
      var invPayee   = need ? objPayee.value : '';
      var invContent = need ? objContent.value : '';
      objType.disabled = objPayee.disabled = objContent.disabled = ! need;
      if(objType != null)
      {
        objType.disabled = ! need;
      }
    $.get('index.php?m=default&c=flow&a=change_needinv', {need_inv:need, inv_type:encodeURIComponent(invType), inv_payee:encodeURIComponent(invPayee), inv_content:encodeURIComponent(invContent)}, function(data){
        orderSelectedResponse(data);
      }); 
    }

14.目录：data\common\js\common.js
   位置：document.getElementById('carId').innerHTML = result.cart_number;
         document.getElementById('globalId').innerHTML = result.cart_number;
   注释掉以上代码
   添加：
   showDiv(); 

   位置：function collectResponse(result) 
   替换掉整段方法为： 
    /* *
     * 处理收藏商品的反馈信息
     */
    function collectResponse(result) {
        if (result.error == 0) {
              alert(result.message);
        }
        if (result.error == 2) {
            var returnVal = window.confirm("未登录不能使用收藏功能 \n是否登录");
            if (returnVal) {
                window.location.href = 'index.php?m=default&c=user&a=login';
            }
        }
    }

  位置：function gotoPageResponse(result)
  替换函数：  
    function gotoPageResponse(result) {
    document.getElementById("ECS_COMMENT").innerHTML = result.content;
    tab( result.rank);
    }
