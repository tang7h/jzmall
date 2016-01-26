#ECTouchThemes   安装商家入驻功能

该版本库用于存放ECTouch模板主题文件，模板主题安装文档应包含需要修改的控制器，增加的文件，执行的sql。

其他内容陆续补充。

商家入驻需要安装的文件和功能概括：

1.店铺街，用来展示商家店铺的一个列表，类似与品牌街
2.店铺首页，商家单独的一个展示自家商品的主页
3.商家所有商品页，商家店铺首页无法展示所有店铺内的商品，需要一个本商家的所有商品列表页面展示商家所有
4.分单，即有几家商家（包含店铺自营）就产生几个订单，运费的计算，根据运费乘以订单数量来计算,
5.购物车或者订单确认的页面也显示商家的信息，如果是本店商品则显示本网店名称
6.商品详细页面显示商家信息，可以通过详细页进入该店铺首页，并且可以通过在线咨询联系卖家
7.用户中心需要显示分单信息，每个订单都是同属于一个商家，如出现一个订单多个商家的情况，说明安装分单失败，需重新检查安装步骤调试



1.目录：include\apps\default\controller
  添加文件: SellergoodsController.class.php
  备注：商家商品列表


2.目录：include\apps\default\controller
  添加文件: SellerstoreController.class.php
  备注：商家店铺街和商家店铺首页


3.目录：include\apps\default\model
  添加文件: SellerModel.class.php
  备注：商家相关model类


4.目录：themes\jingdong
  添加模版文件：seller_store.dwt,seller.dwt,seller_store_goods.dwt
  备注：三个文件分别表示商家店铺首页，店铺街，商家店铺所有商品


5.目录：themes\jingdong\library\
  添加模版文件：goods_list_seller.lbi
  备注：商家店铺所有商品列表

6.目录：模版文件/css
  添加文件：seller.css
           cubebase-min.css
   

7.目录：D:\wamp\www\newbigjd\ectouch\themes\jingdong\library\asynclist_info.lbi
    添加代码：
    <!-- 店铺街 start--> 
    <!--{if $seller}--> 
    <a href="{$seller.url}"> <img class="cover" alt="{$seller.dsadsadsadsd}"  src="{$seller.img_url}">
    <p class="fn"><strong class="info">{$seller.brand_name}</strong> <em class="discount">{$seller.store_name}</em> </p>
    <p class="man" style="display:none">满500元,减50元</p>
    </a> 
    <!-- {/if}--> 
    <!-- 店铺街end--> 


    <!-- 商家商品列表 start-->
    <!--{if $seller_goods}-->
    <div class="pro-inner">
    <div class="proImg-wrap"> <a href="{$seller_goods.url}" > <img src="{$site_url}{$seller_goods.goods_thumb}" alt="{$seller_goods.goods_name}" width="100" height="100"> </a> </div>
    <div class="proInfo-wrap">
      <div class="proTitle"> <a href="{$seller_goods.url}" >{$seller_goods.goods_name}</a> </div>
      <div class="new-elps">{$seller_goods.goods_brief}</div>
      <div class="proPrice"> 
        <!--{if $seller_goods.promote_price neq "" } --> 
        <em>{$seller_goods.promote_price}</em> 
        <!--{else}--> 
        <em>{$seller_goods.shop_price}</em> 
        <!--{/if}--> 
      </div>
      <div class="proService" style="display:none"><del>{$seller_goods.market_price}</del></div>
      <div class="proSales" style="display:none">{$lang.sort_sales}：<em>{$seller_goods.sales_count}</em></div>
      <div class="proComment"> <span>{$seller_goods.comment_count}人评价，{$seller_goods.good_commnet_count}%好评</span> 
        <!--{if $seller_goods.promotion} --> 
        <span class="new-sale-icon"> 
        <!-- {foreach from=$seller_goods.promotion item=promotion} --> 
        <!--{if $promotion.type == 'group_buy'}--><span class="label tuan">{$lang.group_buy_act}</span> 
        <!--{elseif $promotion.act_type == 0}--> <span class="label mz"> {$lang.favourable_mz}</span> 
        <!--{elseif $promotion.act_type == 1}--> <span class="label mj"> {$lang.favourable_mj}</span> 
        <!--{elseif $promotion.act_type == 2}--> <span class="label zk"> {$lang.favourable_zk}</span> 
        <!--{/if}--> 
        <!--{/foreach}--> 
        </span> 
        <!--{/if}--> 
      </div>
    </div>
    <!--{/if}--> 
    <!-- 商家商品列表 end--> 
    

/********************************************************/

商家店铺首页，店铺街，商家店铺所有商品，安装完毕

/********************************************************/


7.目录：include\apps\default\controller\GoodsController.class.php
  位置：// 更新点击次数
        $data = 'click_count = click_count + 1';
  前面添加代码：
  $store_info = $this->model->table('seller_shopinfo')->field('*')->where('seller_id=' . $goods['seller_id'])->order($order)->find();
    if ($store_info) {
        $condition = "region_id in(" . $store_info['province'] . "," . $store_info['city'] . ")";
        $address = $this->model->table('region')->field('region_name')->where($condition)->getCol();
        $store_info['address'] = $address[0] . $address[1];
        $store_info['shop_logo'] = str_replace('../', './', $store['shop_logo']);
    }
    $this->assign('store', $store_info);
 

8.目录：themes\jingdong\goods.dwt
  位置：任意合适（jd就在<p class="text2" style="padding-bottom:5px;"> </p>内）
  添加代码：{$lang.after_sales}:由{if $store.shop_name}{$store.shop_name}{else}{$shop_name}{/if}
  备注：显示商家信息

  位置：任意合适
  备注：生成商家店铺连接和咨询商家连接
  添加代码：
    <!--{if $store}-->
    <div id="jshopAndIm" class="tbl-type detail-tbn detail-tbn-v1"> 
    <span class="tbl-cell"> <a class="btn-shop" href="{:url('Sellerstore/index',array('sid'=>$this->_var['store']['id']))}"><span></span>进入店铺</a> </span> 
    <span style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);" id="kefu" class="tbl-cell">
    <!--{if $store.kf_qq}-->
    <a class="btn-call btn-call-def" id="im" href="http://wpa.qq.com/msgrd?v=3&uin={$store.kf_qq}&site=qq&menu=yes"><span></span>联系客服</a>
    <!--{else $store.kf_qq}-->
    <a class="btn-call btn-call-def" id="im" href="http://www.taobao.com/webww/ww.php?ver=3&touid={$store.kf_ww}&siteid=cntaobao&status=1&charset=utf-8"><span></span>联系客服</a>
    <!--{/if}-->
      </span> 
    </div>
    <!--{/if}-->


/********************************************************/

商品详细页显示商家信息 安装完毕

/********************************************************/

 9.目录：OrderModel.class.php
 备注：添加到购物车
 位置: $sql = "SELECT g.goods_name, g.goods_sn, g.is_on_sale, g.is_real,
 后面添加：g.seller_id, 

 位置：'rec_type' => CART_GENERAL_GOODS
 上面添加：'seller_id'     =>$goods['seller_id'],


 11.目录：include\apps\default\controller\FlowController.class.php
    搜索：$cart_goods = model('Order')->get_cart_goods();
          $this->assign('goods_list', $cart_goods ['goods_list']);
          $this->assign('total', $cart_goods ['total']);
   注释掉上面三行代码，添加代码：
          /* 对商品信息赋值 */
          $cart_goods = model('Users')->cart_sup_goods(); // 取得商品列表，计算合计
           //商家入驻
           $seller_cart = array();
           foreach ($cart_goods as $key => $val) {
               $seller_cart[$key]['seller'] = $this->model->table('seller_shopinfo')->field('id,shop_name')->where('seller_id=' . $key)->find();
               $seller_cart[$key]['goods_list'] = $val;
           }
           $this->assign('seller_cart', $seller_cart);

    搜索：$linked_goods = model('Goods')->get_linked_goods($cart_goods ['goods_list']);
    改为：$linked_goods = model('Goods')->get_linked_goods($cart_goods);

    搜索： $this->assign('shopping_money', sprintf(L('shopping_money'), $cart_goods ['total'] ['goods_price']));
           $this->assign('market_price_desc', sprintf(L('than_market_price'), $cart_goods ['total'] ['market_price'], $cart_goods ['total'] ['saving'], $cart_goods ['total'] ['save_rate']));
    注释掉

    添加代码：
    $order_counts = count($cart_goods);
    $cart_goods = model('Order')->cart_goods();
    $total = model('Users')->order_fee($order, $cart_goods, $consignee, $order_counts);
    $this->assign('total', $total);


    位置：checkout 方法中
    搜索：   /* 对商品信息赋值 */
             $cart_goods = model('Order')->cart_goods($flow_type); // 取得商品列表，计算合计
             $this->assign('goods_list', $cart_goods);
   注释，添加代码：
           /* 对商品信息赋值 */
           $cart_goods = model('Users')->cart_sup_goods($flow_type); // 取得商品列表，计算合计
           //商家入驻
           $seller_cart = array();
           foreach ($cart_goods as $key => $val) {
               $seller_cart[$key]['seller'] = $this->model->find("select id,shop_name from " . $this->model->pre . "seller_shopinfo where seller_id='$key'");
               $seller_cart[$key]['goods_list'] = $val;
           }

           $this->assign('seller_cart', $seller_cart);

    位置：checkout 方法中
    搜索：
          $total = model('Users')->order_fee($order, $cart_goods, $consignee);
    注释，添加代码：
           $order_counts = count($cart_goods);
           $cart_goods = model('Order')->cart_goods($flow_type);
           $total = model('Users')->order_fee($order, $cart_goods, $consignee, $order_counts);


    位置：select_shipping 方法中
    搜索：$total = model('Users')->order_fee($order, $cart_goods, $consignee);
    注释,添加代码：
          $cart_sup_goods = model('Users')->cart_sup_goods($flow_type);
          $total = model('Users')->order_fee($order, $cart_goods, $consignee, count($cart_sup_goods));

    位置：done 方法中
    最好全部替换 
    

 12.目录：include\apps\default\model\UsersModel.class.php
    位置：最后一个方法结束后
    添加代码：
    /**

     * 取得购物车不同商家的商品

     * @param   int     $type   类型：默认普通商品

     * @return  array   购物车商品数组

     */
    function cart_sup_goods($type = CART_GENERAL_GOODS) {
        //获取购物车不同的商家
        $sql = "select distinct seller_id from " . $this->pre . "cart WHERE session_id = '" . SESS_ID . "' " .
                "AND rec_type = '$type'";
        $sellers = $this->query($sql);
        $cart_sup_goods = array();
        foreach ($sellers as $seller) {

            $sql = "SELECT c.rec_id, c.user_id, c.goods_id, c.goods_name, c.goods_sn, c.goods_number,g.goods_thumb, " .
                    "c.market_price, c.goods_price, c.goods_attr, c.is_real, c.extension_code, c.parent_id, c.is_gift, c.is_shipping, " .
                    "c.goods_price * c.goods_number AS subtotal " .
                    "FROM " . $this->pre . "cart as c left join " . $this->pre .
                    "goods as g on c.goods_id=g.goods_id WHERE c.session_id = '" . SESS_ID . "' " .
                    "AND c.rec_type = '$type' and c.seller_id='" . $seller['seller_id'] . "'";

            $arr = $this->query($sql);
            /* 格式化价格及礼包商品 */

            foreach ($arr as $key => $value) {

                $arr[$key]['formated_market_price'] = price_format($value['market_price'], false);

                $arr[$key]['formated_goods_price'] = price_format($value['goods_price'], false);
                
                $arr[$key]['formated_subtotal'] = price_format($value['subtotal'], false);
                
                $arr[$key]['goods_thumb'] = get_image_path($value['goods_id'], $value['goods_thumb'], true);
                if ($value['extension_code'] == 'package_buy') {
                    //$arr[$key]['package_goods_list'] = get_package_goods($value['goods_id']);
                }
            }
            $cart_sup_goods[$seller['seller_id']] = $arr;
        }
        return $cart_sup_goods;
    }

    位置：function order_fee($order, $goods, $consignee)
    改成：function order_fee($order, $goods, $consignee, $order_counts = 0)

    位置：$total['shipping_insure_formated'] = price_format($total['shipping_insure'], false);
    下面添加代码：$total['shipping_totelfee_formated'] = price_format($total['shipping_fee'] * $order_counts, false);

    位置： $total['amount'] = $total['goods_price'] - $total['discount'] + $total['tax'] + $total['pack_fee'] + $total['card_fee'] +
                       $total['shipping_fee'] + $total['shipping_insure'] + $total['cod_fee'];
    改成：$total['amount'] = $total['goods_price'] - $total['discount'] + $total['tax'] + $total['pack_fee'] + $total['card_fee'] +
                       $total['shipping_fee'] * $order_counts + $total['shipping_insure'] + $total['cod_fee'];

    位置：$sql = "SELECT order_id, order_sn, shipping_id, order_status, shipping_status, pay_status, add_time,
    后面添加：seller_id,

    位置： 'total_fee' => price_format($value['total_fee'], false),
    后面添加代码：
           'shipping_status'=> $row['shipping_status'],
           'consignee'=>$row['consignee'],
           'seller_id'=>$row['seller_id'],


 13.目录：themes\jingdong\flow_cart.dwt
    搜索：<!-- {if $goods_list } -->
    替换：<!-- {if $seller_cart } -->

    搜索：<!-- {foreach from=$goods_list item=goods} -->
    替换：<!--{foreach from=$seller_cart item=cart}-->
         <!-- {foreach from=$cart.goods_list item=goods} -->
    备注：<!-- {/foreach} --> 的结束标签


    位置：任意合适位置
    添加代码：
    <p>{if $cart.seller}<a style="color:#F00" href="{:url('seller_store/index',array('sid'=>$this->_val['goods']['seller_id']))}">{$cart.seller.shop_name}</a>{else}网店自营{/if}</p>
    备注：购物车显示商家信息


 14.目录：themes\jingdong\user_order_detail.dwt
    位置：任意合适位置
    添加代码：
    <p>商家店铺：{if $store.shop_name}<a href="{:url('seller_store/index', array('id'=>$this->_var['store']['id']))}">{$store.shop_name}</a>{else}{$shop_name}{/if}</p>
    备注：订单详细页面调用商家信息


 15.目录：themes\jingdong\library\order_total.lbi
    搜索：{$total.shipping_fee_formated}
    替换：{$total.shipping_totelfee_formated}


/********************************************************/

购物流程 安装完毕

/********************************************************/

17.目录：include\apps\default\controller\UserController.class.php
   位置：$goods_list = model('Order')->order_goods($order_id);
   上面添加代码：
   //商家入驻
   $store = $this->model->table('seller_shopinfo')->field('id ,shop_name')->where('seller_id = '.$order['seller_id'])->find();
   $this->assign('store', $store);  //商家入驻 




















