<?php echo $this->fetch('library/page_header.lbi'); ?>
<header id="header">
  <div class="header_l header_return"> <a onClick="javascript:history.go(-1);"><span></span></a></div>
  <h1><?php echo $this->_var['title']; ?></h1>
  <div class="header_r header_search"> <a class="new-a-jd" onClick="showSearch()"><span></span></a></div>
  <div id="search_box">
    <?php echo $this->fetch('library/page_menu.lbi'); ?></div>
</header>

 
<section class="goods_slider">
  <div id="focus" class="slideBox">
    <div class="bd"> 
      <ul>
        <li><a href="javascript:showPic()"><img alt="<?php echo $this->_var['goods']['goods_name']; ?>" src="<?php echo $this->_var['goods']['goods_img']; ?>"/></a></li>
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <?php if ($this->_foreach['no']['iteration'] > 1): ?>
        <li><a href="javascript:showPic()"><img alt="<?php echo $this->_var['picture']['img_desc']; ?>" src="<?php echo $this->_var['picture']['img_url']; ?>"/></a></li>
        <?php endif; ?> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
    <div class="hd">
      <ul>
        <i class="current"></i> 
        <?php if ($this->_var['pictures']): ?> 
        <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
        <i class="current"></i> 
        <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <div class="detail-price"> 
    <?php if ($this->_var['goods']['is_promote'] && $this->_var['goods']['gmt_end_time']): ?> 
    <span class="Text"><?php echo $this->_var['goods']['promote_price']; ?></span> 
    <?php else: ?> 
    <span class="Text" id="ECS_GOODS_AMOUNT"><?php echo $this->_var['goods']['shop_price_formated']; ?></span> 
    <?php endif; ?> 
    <?php if ($this->_var['goods']['is_collect'] == '1'): ?> 
    <a class="btn-sc Yishoucang" id="collect_box" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><span></span></a> 
    <?php else: ?> 
    <a class="btn-sc" id="collect_box" href="javascript:collect(<?php echo $this->_var['goods']['goods_id']; ?>)"><span></span></a> 
    <?php endif; ?> 
  </div>
</section>
<section class="s-slider ui-slider" style="display:none;">
  <div class="slideBox"> 
    <div  id="Ggallery" class="ui-gallery ui-slider" >
      <div class="bd" style="transition-property: transform; transition-timing-function: cubic-bezier(0, 0, 0.25, 1); transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">
        <ul style="width:100%;">
          <?php if ($this->_var['pictures']): ?> 
          <?php $_from = $this->_var['pictures']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'picture');$this->_foreach['no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['no']['total'] > 0):
    foreach ($_from AS $this->_var['picture']):
        $this->_foreach['no']['iteration']++;
?> 
          <?php if ($this->_foreach['no']['iteration'] > 1): ?>
          <li style="width:100%;"><a href="javascript:showPic()"><img alt="" src="<?php echo $this->_var['picture']['img_url']; ?>"/></a></li>
          <?php endif; ?> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <?php endif; ?>
        </ul>
      </div>
      <div class="icons" style="display:none">
        <ul>
        </ul>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
/*头部搜索点击关闭或者弹出搜索框*/  
function showSearch( ){
	document.getElementById("search_box").style.display="block";
}
function closeSearch(){
	document.getElementById("search_box").style.display="none";
}
function showPic(){
	var data = document.getElementById("slideBox").className;
	var reCat = /ui-gallery/;
	//str1.indexOf(str2);
	if( reCat.test(data) ){
		document.getElementById("slideBox").className = 'slideBox';
	}else{
		document.getElementById("slideBox").className = 'slideBox ui-gallery';
		//document.getElementById("slideBox").style.position = 'fixed';
	}
}
</script> 
 

<div class="Secton10">
  <div class="Info"> <a href="<?php echo url('goods/info',array('id'=>$this->_var['id']));?>"><span class="Text"><?php echo $this->_var['lang']['goods_brief']; ?></span></a> <span class="icon-arr"></span> </div>
  <p class="detail-title"><?php echo $this->_var['goods']['goods_name']; ?><font class="red"><?php echo $this->_var['goods']['goods_brief']; ?></font></p>
  <p class="text-title"> 
    <?php $_from = $this->_var['promotion']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?> 
    <?php echo $this->_var['lang']['activity']; ?> 
    <?php if ($this->_var['item']['type'] == "group_buy"): ?> 
    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['group_buy']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['group_buy']; ?>]</a> 
    <?php elseif ($this->_var['item']['type'] == "favourable"): ?> 
    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang']['favourable']; ?>" style="font-weight:100; color:#006bcd; text-decoration:none;">[<?php echo $this->_var['lang']['favourable']; ?>]</a> 
    <?php endif; ?> 
    <a href="<?php echo $this->_var['item']['url']; ?>" title="<?php echo $this->_var['lang'][$this->_var['item']['type']]; ?> <?php echo $this->_var['item']['act_name']; ?><?php echo $this->_var['item']['time']; ?>" style="font-weight:100; color:#006bcd;"><?php echo $this->_var['item']['act_name']; ?></a><br />
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </p>
  <p class="text2" style="padding-bottom:5px;"><?php echo $this->_var['lang']['after_sales']; ?>:由<?php if ($this->_var['store']['shop_name']): ?><?php echo $this->_var['store']['shop_name']; ?><?php else: ?><?php echo $this->_var['shop_name']; ?><?php endif; ?></p>
</div>
<div class="bg-h15"></div>
<div class="Secton10 Secton10-v1">
  <div class="Info" style="border:0;"> 
  <a href="<?php echo url('goods/comment_list',array('id'=>$this->_var['id']));?>"><span class="Text"><?php echo $this->_var['lang']['user_comment']; ?></span> 
  <span id="ECS_COMMENTS" class="text-fr"><em><?php echo $this->_var['comments']['count']; ?></em><?php echo $this->_var['lang']['comment_num']; ?><em><?php echo $this->_var['comments']['favorable']; ?>%</em><?php echo $this->_var['lang']['favorable_comment']; ?></span>
    <span class="icon-arr"></span> </a>
    </div>
</div>
<div class="bg-h15"></div>
<div class="Secton10 Secton10-v1">
  <section class="goodsBuy radius5" style="margin-bottom:0; padding-left:0;">
    <input id="goodsBuy-open" type="checkbox">
    <label class="info Info" for="goodsBuy-open">
    <div class="ProProperty"> 
      <?php if ($this->_var['goods']['goods_number'] != "" && $this->_var['cfg']['SHOW_GOODSNUMBER']): ?> 
      <?php if ($this->_var['goods']['goods_number'] == 0): ?> 
      <?php echo $this->_var['lang']['goods_number']; ?><span><?php echo $this->_var['lang']['stock_up']; ?> </span><i class="icon-arr"></i> 
      <?php else: ?> 
      <?php echo $this->_var['lang']['goods_number']; ?><span><?php echo $this->_var['goods']['goods_number']; ?> <?php echo $this->_var['goods']['measure_unit']; ?> </span><i class="icon-arr"></i> 
      <?php endif; ?> 
      <?php endif; ?> 
    </div>
    </label>
    <label class="info Info" for="goodsBuy-open">
    <div class="ProProperty"><?php echo $this->_var['lang']['please_select']; ?>：<span><?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');$this->_foreach['spec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['spec']['total'] > 0):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
        $this->_foreach['spec']['iteration']++;
?><?php if ($this->_foreach['spec']['iteration'] > 1): ?> / <?php endif; ?><?php echo $this->_var['spec']['name']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></span><i class="icon-arr"></i></div>
    <div class="selected"> </div>
    </label>
    <form action="javascript:addToCart(<?php echo $this->_var['goods']['goods_id']; ?>)" method="post" name="ECS_FORMBUY" id="ECS_FORMBUY" >
      <div class="fields">
        <ul class="ul2">
           
          <?php $_from = $this->_var['specification']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('spec_key', 'spec');if (count($_from)):
    foreach ($_from AS $this->_var['spec_key'] => $this->_var['spec']):
?>
          <li>
            <h2><?php echo $this->_var['spec']['name']; ?>：</h2>
            <div class="items"> 
               
              <?php if ($this->_var['spec']['attr_type'] == 1): ?> 
              <?php if ($this->_var['cfg']['GOODSATTR_STYLE'] == 1): ?> 
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <input type="radio" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" <?php if ($this->_var['key'] == 0): ?>checked<?php endif; ?> onclick="changePrice()" />
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?></label>
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php else: ?>
              <select name="spec_<?php echo $this->_var['spec_key']; ?>" onchange="changePrice()">
                <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
                <option label="<?php echo $this->_var['value']['label']; ?>" value="<?php echo $this->_var['value']['id']; ?>"><?php echo $this->_var['value']['label']; ?> <?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?><?php if ($this->_var['value']['price'] != 0): ?><?php echo $this->_var['value']['format_price']; ?><?php endif; ?></option>
                <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              </select>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?> 
              <?php else: ?> 
              <?php $_from = $this->_var['spec']['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'value');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['value']):
?>
              <input type="checkbox" name="spec_<?php echo $this->_var['spec_key']; ?>" value="<?php echo $this->_var['value']['id']; ?>" id="spec_value_<?php echo $this->_var['value']['id']; ?>" onclick="changePrice()" />
              <label for="spec_value_<?php echo $this->_var['value']['id']; ?>"> <?php echo $this->_var['value']['label']; ?> [<?php if ($this->_var['value']['price'] > 0): ?><?php echo $this->_var['lang']['plus']; ?><?php elseif ($this->_var['value']['price'] < 0): ?><?php echo $this->_var['lang']['minus']; ?><?php endif; ?> <?php echo $this->_var['value']['format_price']; ?>] </label>
              <br />
              <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
              <input type="hidden" name="spec_list" value="<?php echo $this->_var['key']; ?>" />
              <?php endif; ?> 
            </div>
          </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          
        </ul>
        <ul class="quantity">
          <h2><?php echo $this->_var['lang']['number']; ?>:</h2>
          <div class="items"> <span class="ui-number radius5"> 
            <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['is_gift'] == 0 && $this->_var['goods']['parent_id'] == 0): ?>
            <button type="button" class="decrease" onclick="changenum(- 1)">-</button>
            <input class="num" name="number" id="goods_number" autocomplete="off" value="1" min="1" max="<?php echo $this->_var['goods']['goods_number']; ?>" type="number" />
            <button type="button" class="increase" onclick="changenum(1)">+</button>
            <?php else: ?> 
            <?php echo $this->_var['goods']['goods_number']; ?> 
            <?php endif; ?> 
            </span> </div>
        </ul>
      </div>
    </form>
  </section>
</div>
<div class="bg-h15"></div>
<?php if ($this->_var['store']): ?>
<div id="jshopAndIm" class="tbl-type detail-tbn detail-tbn-v1"> 
<span class="tbl-cell"> <a class="btn-shop" href="<?php echo url('Sellerstore/index',array('sid'=>$this->_var['store']['id']));?>"><span></span>进入店铺</a> </span> 
<span style="transform-origin: 0px 0px 0px; opacity: 1; transform: scale(1, 1);" id="kefu" class="tbl-cell">
<?php if ($this->_var['store']['kf_qq']): ?>
<a class="btn-call btn-call-def" id="im" href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo $this->_var['store']['kf_qq']; ?>&site=qq&menu=yes"><span></span>联系客服</a>
<?php else: ?>
<a class="btn-call btn-call-def" id="im" href="http://www.taobao.com/webww/ww.php?ver=3&touid=<?php echo $this->_var['store']['kf_ww']; ?>&siteid=cntaobao&status=1&charset=utf-8"><span></span>联系客服</a>
<?php endif; ?>
  </span> 
</div>
<?php endif; ?>
<div class="bg-h15"></div>
<div class="Secton10 Secton10-v1">
  <div class="img-list">
    <p><?php echo $this->_var['lang']['releate_goods']; ?>：</p>
    <?php if ($this->_var['related_goods']): ?>
    <div class="img-sild" style="position:relative;height:150px;">
      <div ontouchstart="touchStart(event)" ontouchmove="touchMove(event);" ontouchend="touchEnd(event);">
        <div class="tbl-type" id="slide"> 
          <?php $_from = $this->_var['related_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'releated_goods_data');$this->_foreach['related_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['related_goods']['total'] > 0):
    foreach ($_from AS $this->_var['releated_goods_data']):
        $this->_foreach['related_goods']['iteration']++;
?> 
          <a class="tbl-cell" href="<?php echo $this->_var['releated_goods_data']['url']; ?>">
          <div class="pro-img"> <span class="img"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['releated_goods_data']['goods_thumb']; ?>" alt=""/></span> <span class="pro-title"><?php echo $this->_var['releated_goods_data']['short_name']; ?></span> <span class="pro-price"> 
            <?php if ($this->_var['releated_goods_data']['promote_price'] != 0): ?> 
            <?php echo $this->_var['releated_goods_data']['formated_promote_price']; ?> 
            <?php else: ?> 
            <?php echo $this->_var['releated_goods_data']['shop_price']; ?> 
            <?php endif; ?> 
            </span> </div>
          </a> 
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
          <script type="text/javascript">
                    	$("a.tbl-cell .pro-img:last").css("margin-right", "0");
                    </script> 
        </div>
      </div>
    </div>
    <?php endif; ?>
  </div>
</div>
<div class="bg-h15"></div>
<div class="tbl-type detail-tbn2">
  <div class="tbl-cell"> <a onClick="addToCart_quick(<?php echo $this->_var['goods']['goods_id']; ?>)" class="btn-buy"><span></span><?php echo $this->_var['lang']['buy_now']; ?></a> </div>
  <div class="tbl-cell"> <a onclick="addToCart(<?php echo $this->_var['goods']['goods_id']; ?>);" class="btn-cart"><span></span><?php echo $this->_var['lang']['btn_add_to_cart']; ?></a> 
    
    <div class="tipMask" id="hidDiv" style="display:none" ></div>
    <div class="popGeneral" id="popDiv" >
      <div id="main">
        <p class="att-succ"><?php echo $this->_var['lang']['add_success']; ?></p>
        <p class="cart-succ"><?php echo $this->_var['lang']['add_cart_success']; ?></p>
      </div>
      <div class="popbtn"> <a class="bnt1 flex_in radius5" onclick="closeDiv()" href="javascript:void(0);"><?php echo $this->_var['lang']['continue_buy']; ?></a> <a class="bnt2 flex_in radius5" href="<?php echo url('flow/index');?>"><?php echo $this->_var['lang']['check_out']; ?></a> </div>
    </div>
     
    <script type="text/javascript">
            function showDiv(){
				var allWidth=document.documentElement.clientWidth;
				var div=document.getElementById("popDiv");
				var w=allWidth-div.offsetWidth;
				div.style["left"]=(w-228)/2+"px";
                document.getElementById('popDiv').style.display = 'block';
				document.getElementById('hidDiv').style.display = 'block';
				//document.getElementById('cartNum').innerHTML = document.getElementById('goods_number').value;
				//document.getElementById('cartPrice').innerHTML = document.getElementById('ECS_GOODS_AMOUNT').innerHTML;
            }
            function closeDiv(){
                document.getElementById('popDiv').style.display = 'none';
				document.getElementById('hidDiv').style.display = 'none';
            }
     </script> 
  </div>
</div>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
var goods_id = <?php echo $this->_var['goods_id']; ?>;
var goodsattr_style = <?php echo empty($this->_var['cfg']['GOODSATTR_STYLE']) ? '1' : $this->_var['cfg']['GOODSATTR_STYLE']; ?>;
var gmt_end_time = <?php echo empty($this->_var['promote_end_time']) ? '0' : $this->_var['promote_end_time']; ?>;
<?php $_from = $this->_var['lang']['goods_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var goodsId = <?php echo $this->_var['goods_id']; ?>;
var now_time = <?php echo $this->_var['now_time']; ?>;


onload = function(){
  changePrice();
  fixpng();
  try {onload_leftTime();}
  catch (e) {}
}

/**
 * 点选可选属性或改变数量时修改商品价格的函数
 */
function changePrice()
{
  var attr = getSelectedAttributes(document.forms['ECS_FORMBUY']);
  var qty = document.forms['ECS_FORMBUY'].elements['number'].value;
  $.get('<?php echo url("goods/price");?>', {'id':goodsId,'attr':attr,'number':qty}, function(data){
    changePriceResponse(data);
  }, 'json');
}

/**
 * 接收返回的信息
 */
function changePriceResponse(res)
{
  if (res.err_msg.length > 0)
  {
    alert(res.err_msg);
  }
  else
  {
    document.forms['ECS_FORMBUY'].elements['number'].value = res.qty;

    if (document.getElementById('ECS_GOODS_AMOUNT'))
	
      document.getElementById('ECS_GOODS_AMOUNT').innerHTML = res.result;
  }
}
// 筛选商品属性
jQuery(function($) {
	$(".info").click(function(){
		$('.goodsBuy .fields').slideToggle("fast");
	});
})
function changenum(diff) {
	var num = parseInt(document.getElementById('goods_number').value);
	var goods_number = num + Number(diff);
	if( goods_number >= 1){
		document.getElementById('goods_number').value = goods_number;//更新数量
		changePrice();
	}
}

</script> 
</body>
</html>