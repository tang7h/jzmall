
<?php if ($this->_var['goods']): ?>
<div class="pro-inner">
<div class="proImg-wrap"> <a href="<?php echo $this->_var['goods']['url']; ?>" > <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['goods']['goods_name']; ?>" width="100" height="100"> </a> </div>
<div class="proInfo-wrap">
  <div class="proTitle"> <a href="<?php echo $this->_var['goods']['url']; ?>" ><?php echo $this->_var['goods']['goods_name']; ?></a> </div>
  <div class="new-elps"><?php echo $this->_var['goods']['goods_brief']; ?></div>
  <div class="proPrice"> 
    <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
    <em><?php echo $this->_var['goods']['promote_price']; ?></em> 
    <?php else: ?> 
    <em><?php echo $this->_var['goods']['shop_price']; ?></em> 
    <?php endif; ?> 
  </div>
  <div class="proService" style="display:none"><del><?php echo $this->_var['goods']['market_price']; ?></del></div>
  <div class="proSales" style="display:none"><?php echo $this->_var['lang']['sort_sales']; ?>：<em><?php echo $this->_var['goods']['sales_count']; ?></em></div>
  <div class="proComment"> <span><?php echo $this->_var['goods']['comment_count']; ?>人评价，<?php echo $this->_var['goods']['good_commnet_count']; ?>%好评</span> 
    <?php if ($this->_var['goods']['promotion']): ?> 
    <span class="new-sale-icon"> 
    <?php $_from = $this->_var['goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
    <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><span class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <span class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <span class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <span class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></span> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </span> 
    <?php endif; ?> 
  </div>
</div>
<?php endif; ?> 
 

 
<?php if ($this->_var['brand']): ?> 
<a href="<?php echo $this->_var['brand']['url']; ?>"> <img class="cover" alt="<?php echo $this->_var['brand']['brand_name']; ?>"  src="<?php echo $this->_var['brand']['brand_banner']; ?>">
<p class="fn"> <img class="logo" alt="<?php echo $this->_var['brand']['brand_name']; ?>" src="<?php echo $this->_var['brand']['brand_logo']; ?>"> <strong class="info"><?php echo $this->_var['brand']['brand_name']; ?></strong> <em class="discount" style="display:none">3折起</em> </p>
<p class="man" style="display:none">满500元,减50元</p>
</a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['brand_goods']): ?>
<div class="pro-inner">
<div class="proImg-wrap"> <a href="<?php echo $this->_var['brand_goods']['url']; ?>" > <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['brand_goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['brand_goods']['goods_name']; ?>" width="100" height="100"> </a> </div>
<div class="proInfo-wrap">
  <div class="proTitle"> <a href="<?php echo $this->_var['brand_goods']['url']; ?>" ><?php echo $this->_var['brand_goods']['goods_name']; ?></a> </div>
  <div class="new-elps"><?php echo $this->_var['brand_goods']['goods_brief']; ?></div>
  <div class="proPrice"> 
    <?php if ($this->_var['brand_goods']['promote_price'] != ""): ?> 
    <em><?php echo $this->_var['brand_goods']['promote_price']; ?></em> 
    <?php else: ?> 
    <em><?php echo $this->_var['brand_goods']['shop_price']; ?></em> 
    <?php endif; ?> 
  </div>
  <div class="proService" style="display:none"><del><?php echo $this->_var['brand_goods']['market_price']; ?></del></div>
  <div class="proSales" style="display:none"><?php echo $this->_var['lang']['sort_sales']; ?>：<em><?php echo $this->_var['brand_goods']['sales_count']; ?></em></div>
  <div class="proComment"> <span><?php echo $this->_var['brand_goods']['comment_count']; ?>人评价，<?php echo $this->_var['brand_goods']['good_commnet_count']; ?>%好评</span> 
    <?php if ($this->_var['brand_goods']['promotion']): ?> 
    <span class="new-sale-icon"> 
    <?php $_from = $this->_var['brand_goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
    <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><span class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <span class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <span class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <span class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></span> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </span> 
    <?php endif; ?> 
  </div>
</div>
<?php endif; ?>  

 
<?php if ($this->_var['activity']): ?> 
<a href="<?php echo $this->_var['activity']['url']; ?>"> <img class="cover" alt="<?php echo $this->_var['activity']['activity_name']; ?>"  src="<?php echo $this->_var['activity']['act_banner']; ?>">
<p class="fn"> <em class="discount"><?php echo $this->_var['activity']['act_name']; ?></em> </p>
<p class="man"><?php echo $this->_var['activity']['start_time']; ?>-<?php echo $this->_var['activity']['end_time']; ?></p>
</a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['act_goods']): ?>
<div class="pro-inner">
  <div class="proImg-wrap"> <a href="<?php echo $this->_var['act_goods']['url']; ?>" > <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['act_goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['act_goods']['goods_name']; ?>" width="100" height="100"> </a> </div>
  <div class="proInfo-wrap">
    <div class="proTitle"> <a href="<?php echo $this->_var['act_goods']['url']; ?>" ><?php echo $this->_var['act_goods']['goods_name']; ?></a> </div>
    <div class="new-elps"><?php echo $this->_var['act_goods']['goods_brief']; ?></div>
    <div class="proPrice"> 
      <?php if ($this->_var['act_goods']['promote_price'] != ""): ?> 
      <em><?php echo $this->_var['act_goods']['promote_price']; ?></em> 
      <?php else: ?> 
      <em><?php echo $this->_var['act_goods']['shop_price']; ?></em> 
      <?php endif; ?> 
    </div>
    <div class="proService" style="display:none"><del><?php echo $this->_var['act_goods']['market_price']; ?></del></div>
    <div class="proSales" style="display:none"><?php echo $this->_var['lang']['sort_sales']; ?>：<em><?php echo $this->_var['act_goods']['sales_count']; ?></em></div>
    <div class="proComment"> <span><?php echo $this->_var['act_goods']['comment_count']; ?>人评价，<?php echo $this->_var['act_goods']['good_commnet_count']; ?>%好评</span> 
      <?php if ($this->_var['act_goods']['promotion']): ?> 
      <span class="new-sale-icon"> 
      <?php $_from = $this->_var['act_goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
      <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><span class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></span> 
      <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <span class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></span> 
      <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <span class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></span> 
      <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <span class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></span> 
      <?php endif; ?> 
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
      </span> 
      <?php endif; ?> 
    </div>
  </div>
  <?php endif; ?> 
   
  
   
  <?php if ($this->_var['groupbuy']): ?>
  <div class="pro-inner">
    <div class="proImg-wrap"> <a href="<?php echo $this->_var['groupbuy']['url']; ?>" alt="<?php echo $this->_var['groupbuy']['goods_name']; ?>"> <img alt="<?php echo $this->_var['groupbuy']['goods_name']; ?>" src="<?php echo $this->_var['groupbuy']['goods_thumb']; ?>"> </a> </div>
    <div class="proInfo-wrap">
      <div class="proTitle"> <a href="<?php echo $this->_var['groupbuy']['url']; ?>"><?php echo htmlspecialchars($this->_var['groupbuy']['goods_name']); ?></a> </div>
      <div class="zkhw"> <span class="price"><?php echo $this->_var['groupbuy']['cur_price']; ?></span> <span class="originalprice"><?php echo $this->_var['groupbuy']['market_price']; ?></span><span class="zk1"><?php echo $this->_var['groupbuy']['spare_discount']; ?><?php echo $this->_var['lang']['favourable_zk']; ?></span> </div>
      <div class="jingdou"> <span><?php echo $this->_var['groupbuy']['click_num']; ?><?php echo $this->_var['lang']['scan_num']; ?></span> <span><?php echo $this->_var['lang']['sort_sales']; ?>：<?php echo $this->_var['groupbuy']['sales_count']; ?><?php echo $this->_var['lang']['piece']; ?></span> </div>
    </div>
  </div>
</div>
<?php endif; ?> 
 

 
<?php if ($this->_var['exchange']): ?>
<div class="pro-inner">
  <div class="proImg-wrap"> <a href="<?php echo $this->_var['exchange']['url']; ?>"> <img alt="<?php echo $this->_var['exchange']['goods_name']; ?>" src="<?php echo $this->_var['exchange']['goods_thumb']; ?>"> </a> </div>
  <div class="proInfo-wrap">
    <div class="proTitle"> <a href="<?php echo $this->_var['exchange']['url']; ?>"><?php echo $this->_var['exchange']['goods_name']; ?></a> </div>
    <div class="proSKU"></div>
    <div class="proPrice"> <em><?php echo $this->_var['exchange']['exchange_integral']; ?>积分</em> </div>
    <span class="like"><i class="fa fa-heart-o"></i> <?php echo $this->_var['exchange']['sc']; ?><?php echo $this->_var['lang']['like_num']; ?></span> </div>
</div>
<?php endif; ?> 
 

 
<?php if ($this->_var['article']): ?> 
<a href="<?php echo $this->_var['article']['url']; ?>" class="clearfix"> <span><?php echo $this->_var['article']['short_title']; ?></span><i></i> </a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['orders']): ?>
<div class="InfoBox">
  <table cellspacing="0" cellpadding="5" width="100%" border="0" class="ectouch_table">
    <tbody>
      <tr>
        <td style="border-bottom:1px #CCCCCC dashed" class="order_status"><?php echo $this->_var['lang']['order_status']; ?>：<?php echo $this->_var['orders']['order_status']; ?></td>
      </tr>
      <tr>
        <td class="order_content"><a href="<?php echo url('user/order_detail',array('order_id'=>$this->_var['orders']['order_id']));?>">
          <table cellspacing="0" cellpadding="5" width="100%" border="0" class="ectouch_table_no_border">
            <tbody>
              <tr>
                <td><img width="50" height="50" src="<?php echo $this->_var['orders']['img']; ?>"></td>
                <td><?php echo $this->_var['lang']['order_number']; ?>：<?php echo $this->_var['orders']['order_sn']; ?><br>
                  <?php echo $this->_var['lang']['order_total_fee']; ?>：<?php echo $this->_var['orders']['order_status']; ?><br>
                  <?php echo $this->_var['lang']['order_addtime']; ?>：<?php echo $this->_var['orders']['order_time']; ?></td>
                <td style="position:relative"><span class="new-arr"></span></td>
              </tr>
            </tbody>
          </table>
          </a></td>
      </tr>
      <tr>
        <td class="order_tracking"><a class="c-btn3" href="<?php echo url('user/order_tracking',array('order_id'=>$this->_var['orders']['order_id']));?>">订单跟踪</a></td>
      </tr>
    </tbody>
  </table>
</div>
<?php endif; ?> 
 

 
<?php if ($this->_var['consignee']): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table">
  <tr>
    <td width="32%" align="right"><?php echo $this->_var['lang']['consignee_name']; ?>：</td>
    <td width="68%" align="left"><?php echo htmlspecialchars($this->_var['consignee']['consignee']); ?></td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_var['lang']['phone']; ?>：</td>
    <td align="left"><?php echo $this->_var['consignee']['mobile']; ?> </td>
  </tr>
  <tr>
    <td align="right"><?php echo $this->_var['lang']['detailed_address']; ?>：</td>
    <td align="left"><?php echo htmlspecialchars($this->_var['consignee']['address']); ?> 
      <?php if ($this->_var['consignee']['zipcode']): ?> 
      [<?php echo $this->_var['lang']['postalcode']; ?>: <?php echo htmlspecialchars($this->_var['consignee']['zipcode']); ?>] 
      <?php endif; ?></td>
  </tr>
  <tr>
    <td colspan="2" align="right"><a href="<?php echo $this->_var['consignee']['url']; ?>">编辑</a> | <a href="<?php echo url('user/del_address_list',array('consignee'=>$this->_var['consignee']['address_id']));?>" onClick="return confirm('您真的要删除该地址吗？');">删除</a></td>
  </tr>
</table>
<?php endif; ?> 
 

 
<?php if ($this->_var['collection_good']): ?>
<table cellspacing="0" cellpadding="5" width="100%" border="0" style="border-bottom:1px solid #e2e2e2;" class="ectouch_table">
  <tbody>
    <tr>
      <td class="collection"><table cellspacing="0" cellpadding="5" width="100%" border="0" class="ectouch_table_no_border">
          <tbody>
            <tr>
              <td><img width="50" height="50" src="<?php echo $this->_var['collection_good']['goods_thumb']; ?>"></td>
              <td><?php echo $this->_var['collection_good']['goods_name']; ?><br>
                本店售价:<?php echo $this->_var['collection_good']['shop_price']; ?></td>
              <td align="right"><a style="color:#1CA2E1" href="<?php echo $this->_var['collection_good']['url']; ?>">加入购物车</a><br>
                <a style="color:#1CA2E1" href="javascript:if (confirm('您确定要从收藏夹中删除选定的商品吗？')) location.href='<?php echo url('user/delete_collection',array('collection_id'=>$this->_var['collection_good']['rec_id']));?>'">删除</a></td>
            </tr>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<?php endif; ?> 
 

 
<?php if ($this->_var['fittings']): ?> 
<a href="<?php echo $this->_var['fittings']['url']; ?>"  class="pull-left"><img src="<?php echo $this->_var['fittings']['goods_thumb']; ?>"></a>
<dl>
  <dt>
    <h4 class="title"><a href="<?php echo $this->_var['fittings']['url']; ?>"><?php echo $this->_var['fittings']['goods_name']; ?></a></h4>
  </dt>
  <dd><?php echo $this->_var['lang']['fittings_price']; ?><font class="ect-colory"><?php echo $this->_var['fittings']['fittings_price']; ?></font></dd>
  <dd>
    <div class="flow-del text-center"><a onclick="addToCart_quick(<?php echo $this->_var['fittings']['goods_id']; ?>)" href="javascript:;"><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a></div>
  </dd>
</dl>
</a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['msg']): ?>
<table cellspacing="0" cellpadding="5" width="100%" border="0" class="ectouch_table">
  <tbody>
    <tr>
      <td class="message"><table cellspacing="0" cellpadding="5" width="100%" border="0" class="ectouch_table_no_border">
          <tbody>
            <tr>
              <td><span style="float:right"><a style="color:#1CA2E1" onclick="if (!confirm('<?php echo $this->_var['lang']['confirm_remove_msg']; ?>？')) return false;" href="<?php echo $this->_var['msg']['url']; ?>"><?php echo $this->_var['lang']['drop']; ?></a></span><?php echo $this->_var['msg']['msg_type']; ?>:<?php echo $this->_var['msg']['msg_title']; ?> - <?php echo $this->_var['msg']['msg_time']; ?> </td>
            </tr>
            <?php if ($this->_var['msg']['re_msg_content']): ?>
            <tr>
              <td><?php echo $this->_var['lang']['shopman_reply']; ?>(<?php echo $this->_var['msg']['re_msg_time']; ?>)<br/>
                <?php echo $this->_var['msg']['re_msg_content']; ?></td>
            </tr>
            <?php endif; ?>
          </tbody>
        </table></td>
    </tr>
  </tbody>
</table>
<?php endif; ?> 
 

 
<?php if ($this->_var['seller']): ?> 
<a href="<?php echo $this->_var['seller']['url']; ?>"> <img class="cover" alt="<?php echo $this->_var['seller']['dsadsadsadsd']; ?>" style="height:150px;" src="<?php echo $this->_var['seller']['img_url']; ?>">
<p class="fn"><strong class="info"><?php echo $this->_var['seller']['brand_name']; ?></strong> <em class="discount"><?php echo $this->_var['seller']['store_name']; ?></em> </p>
<p class="man" style="display:none">满500元,减50元</p>
</a> 
<?php endif; ?> 
 

 
<?php if ($this->_var['seller_goods']): ?>
<div class="pro-inner">
<div class="proImg-wrap"> <a href="<?php echo $this->_var['seller_goods']['url']; ?>" > <img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['seller_goods']['goods_thumb']; ?>" alt="<?php echo $this->_var['seller_goods']['goods_name']; ?>" width="100" height="100"> </a> </div>
<div class="proInfo-wrap">
  <div class="proTitle"> <a href="<?php echo $this->_var['seller_goods']['url']; ?>" ><?php echo $this->_var['seller_goods']['goods_name']; ?></a> </div>
  <div class="new-elps"><?php echo $this->_var['seller_goods']['goods_brief']; ?></div>
  <div class="proPrice"> 
    <?php if ($this->_var['seller_goods']['promote_price'] != ""): ?> 
    <em><?php echo $this->_var['seller_goods']['promote_price']; ?></em> 
    <?php else: ?> 
    <em><?php echo $this->_var['seller_goods']['shop_price']; ?></em> 
    <?php endif; ?> 
  </div>
  <div class="proService" style="display:none"><del><?php echo $this->_var['seller_goods']['market_price']; ?></del></div>
  <div class="proSales" style="display:none"><?php echo $this->_var['lang']['sort_sales']; ?>：<em><?php echo $this->_var['seller_goods']['sales_count']; ?></em></div>
  <div class="proComment"> <span><?php echo $this->_var['seller_goods']['comment_count']; ?>人评价，<?php echo $this->_var['seller_goods']['good_commnet_count']; ?>%好评</span> 
    <?php if ($this->_var['seller_goods']['promotion']): ?> 
    <span class="new-sale-icon"> 
    <?php $_from = $this->_var['seller_goods']['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'promotion');if (count($_from)):
    foreach ($_from AS $this->_var['promotion']):
?> 
    <?php if ($this->_var['promotion']['type'] == 'group_buy'): ?><span class="label tuan"><?php echo $this->_var['lang']['group_buy_act']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 0): ?> <span class="label mz"> <?php echo $this->_var['lang']['favourable_mz']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 1): ?> <span class="label mj"> <?php echo $this->_var['lang']['favourable_mj']; ?></span> 
    <?php elseif ($this->_var['promotion']['act_type'] == 2): ?> <span class="label zk"> <?php echo $this->_var['lang']['favourable_zk']; ?></span> 
    <?php endif; ?> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    </span> 
    <?php endif; ?> 
  </div>
</div>
<?php endif; ?> 
 

 
<?php if ($this->_var['comment']): ?>
<table width="100%" border="0" cellpadding="5" cellspacing="0" class="ectouch_table" style="border-bottom:1px solid #e2e2e2">
  <tr>
    <td class="comment"><table cellspacing="0" cellpadding="5" border="0" width="100%" class="ectouch_table_no_border">
        <tbody>
          <tr>
            <td><span style="float:right"><a style="color:#1CA2E1" href="javascript:if(confirm('<?php echo $this->_var['lang']['confirm_remove_account']; ?>')){window.location.href='<?php echo url('user/delete_comment', array('id'=>$this->_var['comment']['comment_id']));?>'};"><?php echo $this->_var['lang']['drop']; ?></a></span><?php if ($this->_var['val']['comment_type'] == 0): ?> <?php echo $this->_var['lang']['goods_comment']; ?><?php else: ?><?php echo $this->_var['lang']['article_comment']; ?><?php endif; ?>：<?php echo $this->_var['comment']['cmt_name']; ?> - <?php echo $this->_var['comment']['formated_add_time']; ?></td>
          </tr>
          <tr>
            <td><?php echo $this->_var['val']['content']; ?></td>
          </tr>
          <?php if ($this->_var['comment']['reply_content']): ?>
          <tr>
            <td><?php echo $this->_var['lang']['reply_comment']; ?>：<?php echo $this->_var['comment']['reply_content']; ?></td>
          </tr>
          <?php endif; ?>
        </tbody>
      </table></td>
  </tr>
</table>
<?php endif; ?> 
