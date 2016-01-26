<div id="page">
  <header id="header">
    <div class="header_l header_return"> <a onClick="javascript:history.go(-1);"><span></span></a></div>
    <h1><?php echo $this->_var['lang']['shopping_cart']; ?></h1>
    <div class="header_r header_search"> <a class="new-a-jd" onClick="showSearch()"><span></span></a></div>
    <div id="search_box">
      <?php echo $this->fetch('library/page_menu.lbi'); ?></div>
  </header>
</div>
 
<?php if ($this->_var['goods_list']): ?>
<div class="my-cart"> 
  <!--<span class="red">
    <a id="checkAll" class="chk-type on" href="javascript:checkAllHandler();">check</a>
    </span>--> 
  <span class="red"><?php echo $this->_var['lang']['total']; ?><span id="total_number"><?php echo $this->_var['total']['total_number']; ?></span><?php echo $this->_var['lang']['total_number']; ?></span>
  <div class="btn-area-rt"> <a href="<?php echo url('category/index');?>" class="link"><?php echo $this->_var['lang']['continue_buy']; ?> |</a> <a href="<?php echo url('flow/checkout');?>" class="btn-type radius5"><?php echo $this->_var['lang']['check_out']; ?></a> </div>
</div>
<?php else: ?>
<div class="my-cart"> <span class="red">
  <h2><?php echo $this->_var['lang']['my_cart']; ?></h2>
  </span> </div>
<?php endif; ?> 

<script type="text/javascript">
  <?php $_from = $this->_var['lang']['password_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
    var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </script>
<?php if ($this->_var['seller_cart']): ?>
<section class="wrap" style="border-bottom:0;">
  <form id="formCart" name="formCart" method="post" action="<?php echo url('flow/update_cart');?>">
    <ul class="radius10 itemlist">
      <?php $_from = $this->_var['seller_cart']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cart');if (count($_from)):
    foreach ($_from AS $this->_var['cart']):
?>
         <?php $_from = $this->_var['cart']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
      <li class="new-tbl-type">
        <div class="itemlist_l new-tbl-cell"> 
        <p><?php if ($this->_var['cart']['seller']): ?><a style="color:#F00" href="<?php echo url('seller_store/index',array('sid'=>$this->_val['goods']['seller_id']));?>"><?php echo $this->_var['cart']['seller']['shop_name']; ?></a><?php else: ?>网店自营<?php endif; ?></p>
          <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?> 
          
          <a  href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" target="_blank"> <img class="lazy" src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['goods']['goods_thumb']; ?>" border="0" title="<?php echo htmlspecialchars($this->_var['goods']['goods_name']); ?>" width="50" height="50" /> </a> 
          <?php if ($this->_var['goods']['parent_id'] > 0): ?> 
          <span style="color:#FF0000">（<?php echo $this->_var['lang']['accessories']; ?>）</span> 
          <?php endif; ?> 
          <?php if ($this->_var['goods']['is_gift'] > 0): ?> 
          <span style="color:#FF0000">（<?php echo $this->_var['lang']['largess']; ?>）</span> 
          <?php endif; ?> 
          <?php elseif ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] == 'package_buy'): ?> 
          <a href="javascript:void(0)" onClick="setSuitShow(<?php echo $this->_var['goods']['goods_id']; ?>)" class="f6"><?php echo $this->_var['goods']['goods_name']; ?><span style="color:#FF0000;">（<?php echo $this->_var['lang']['remark_package']; ?>）</span></a>
          <div id="suit_<?php echo $this->_var['goods']['goods_id']; ?>" style="display:none"> 
            <?php $_from = $this->_var['goods']['package_goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'package_goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['package_goods_list']):
?> 
            <a href="<?php echo url('goods/index');?>" target="_blank" class="f6"><?php echo $this->_var['package_goods_list']['goods_name']; ?></a><br />
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          </div>
          <?php else: ?> 
          <?php echo $this->_var['goods']['goods_name']; ?> 
          <?php endif; ?> 
        </div>
        <div class="desc new-tbl-cell"> <a style="color:#333" href="<?php echo url('goods/index',array('id'=>$this->_var['goods']['goods_id']));?>" target="_blank" class="fragment">
          <h4><?php echo $this->_var['goods']['goods_name']; ?></h4>
          </a>
          <div style="clear:both"> </div>
          <?php if ($this->_var['show_goods_attribute'] == 1): ?>
          <p> <?php echo $this->_var['goods']['goods_attr']; ?></p>
          <?php endif; ?>
          <div class="b"> <em class="price"><?php echo $this->_var['goods']['goods_price']; ?></em> <span style="jianju">x </span> <span class="txt"> 
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
            <input class="inputBg radius5" type="number" min="1" max="1000" name="goods_number[<?php echo $this->_var['goods']['rec_id']; ?>]" id="goods_number_<?php echo $this->_var['goods']['rec_id']; ?>" value="<?php echo $this->_var['goods']['goods_number']; ?>" size="4"   onkeyup="changenum(<?php echo $this->_var['goods']['rec_id']; ?>)"/>
            <script>
			function changenum(rec_id){
			var goods_number = parseInt(document.getElementById('goods_number_'+rec_id).value);				  	   
			change_goods_number(rec_id,goods_number);
			}
			
			function change_goods_number(rec_id, goods_number)
			{   
			$.post('<?php echo url("flow/ajax_update_cart");?>', {
				rec_id : rec_id,goods_number : goods_number
			}, function(data) {
				change_goods_number_response(data);
			}, 'json')
			} 
			
			function change_goods_number_response(result)
			{    
				if (result.error == 0)
				{
				var rec_id = result.rec_id;
					document.getElementById('total_number').innerHTML = result.total_number;//更新数量
					document.getElementById('market_subtotal').innerHTML = result.market_total;//更新市场价格
					document.getElementById('goods_subtotal').innerHTML = result.total_desc;//更新小计
					if (document.getElementById('ECS_CARTINFO'))
						{//更新购物车数量
						document.getElementById('ECS_CARTINFO').innerHTML = result.cart_info;
						}
			}
			else if (result.message != '')
				{
				alert(result.message);
				}                
			}
		</script> 
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_number']; ?> 
            <?php endif; ?> 
            <br>
            </span> <a href="javascript:if (confirm('<?php echo $this->_var['lang']['drop_goods_confirm']; ?>')) location.href='<?php echo url('flow/drop_goods',array('id'=>$this->_var['goods']['rec_id']));?>'; "   class="ico_08 cha radius5"><?php echo $this->_var['lang']['drop']; ?></a> </div>
        </div>
      </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </form>
</section>
<footer class="toolbar">
  <p class="radius5"><?php echo $this->_var['lang']['market_price']; ?><em class="price" id="market_subtotal"><?php echo $this->_var['total']['market_price']; ?></em></p>
  <p class="radius5"><?php echo $this->_var['lang']['total_price']; ?>：<em class="price" id="goods_subtotal"><?php echo $this->_var['total']['goods_price']; ?></em></p>
  <a class="jiezhang radius5" href="<?php echo url('flow/checkout');?>"><?php echo $this->_var['lang']['check_out']; ?></a> <a href="<?php echo url('index/index');?>" class="back"><span></span><?php echo $this->_var['lang']['continue_buy']; ?></a> </footer>

<?php else: ?>
<section class="wrap" style=" border-bottom:0;">
  <div class="empty-cart">
    <div class="ico_13 cart-logo"></div>
    <p class="message"><?php echo $this->_var['lang']['empty_shopping']; ?></p>
    <div class="flex"> <a class="c-btn2  flex_in radius5" href="<?php echo url('index/index');?>" style=" background:#6bd0a2"> <i class="ico_04_b"></i> <?php echo $this->_var['lang']['go_shopping']; ?> </a> <a class="c-btn2  flex_in radius5" href="<?php echo url('user/collection_list');?>" style=" margin-left:0.5rem"> <?php echo $this->_var['lang']['view_collect']; ?></a> </div>
  </div>
</section>
<?php endif; ?> 