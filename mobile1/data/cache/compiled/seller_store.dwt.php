<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECTOUCH 1.0Beta2" />
<meta charset="utf-8" />
<title><?php echo $this->_var['page_title']; ?> 触屏版</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="<?php echo $this->_var['ectouch_themes']; ?>/images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo $this->_var['ectouch_css_path']; ?>">
<link rel="stylesheet" href="__TPL__/css/cubebase-min.css" type="text/css" />
<link rel="stylesheet" href="__TPL__/css/seller.css"  type="text/css" />
<link rel="stylesheet" href="__TPL__/css/photoswipe.css">
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header">
    <div class="header_l header_return"><a onclick="javascript:history.go(-1);"><span>返回</span></a></div>
    <div id="search_box2">
      <div class="search_box" id="searchBox">JDPhone</div>
    </div>
    <div class="header_r header_search"> <a class="new-a-jd" onClick="showSearch()"><span></span></a></div>
    <div id="search_box">
      <div class="new-jd-tab">
        <div class="new-tbl-type"> <a href="<?php echo url('index/index');?>" class="new-tbl-cell"><span class="icon">首页</span>
          <p style="color:#6e6e6e;">首页</p>
          </a> <a href="<?php echo url('category/all');?>" class="new-tbl-cell"><span class="icon icon2">分类搜索</span>
          <p style="color:#6e6e6e;">分类搜索</p>
          </a> <a href="<?php echo url('flow/cart');?>" class="new-tbl-cell"><span class="icon icon3">购物车</span>
          <p style="color:#6e6e6e;">购物车</p>
          </a> <a href="<?php echo url('user/index');?>" class="new-tbl-cell"><span class="icon icon4">我的京东</span>
          <p style="color:#6e6e6e;">我的京东</p>
          </a> </div>
      </div>
      <a class="Touming" onClick="closeSearch()"></a> </div>
    <div class="search_box search_2" >
      <div class="search_2Box">
        <form method="get" action="<?php echo url('Sellergoods/index');?>" name="searchForm" id="searchForm_id">
          <a href="#" class="new-a-cancel">取消</a>
          <div class="search_2BoxCon">
            <input placeholder="JDPhone" name="keyword" type="text" id="keywordBox" style="color:#c3c2c2;" />
            <a href="javascript:void(0);" target="_self" class="new-s-close new-s-close-v1"></a>
             <input type="hidden" value="<?php echo $this->_var['store']['id']; ?>" name="sid" />
             <input type="hidden" value="<?php echo $this->_var['category']; ?>" name="cid"/>
            <button class="new-s-srch" type="submit" onclick="return check('keywordBox')"><span></span></button>
          </div>
        </form>
      </div>
    </div>
  </header>
  <?php if ($this->_var['store_slide']['0']['slide_type'] == 'shade'): ?>
  <div class="row c-rollimage-activity">
    <div class="small-12">
      <div id="jdSlider" class="rollimage">
        <div class="rollimage-img">
          <ul class="clearfix">
            <?php $_from = $this->_var['store_slide']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'slide');if (count($_from)):
    foreach ($_from AS $this->_var['slide']):
?>
            <li data-productid=""> <a href="<?php echo $this->_var['slide']['img_link']; ?>"><img alt="欢迎光临" src="<?php echo $this->_var['slide']['img_url']; ?>"></a> </li>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          </ul>
        </div>
        
        <div class="rollimage-position">
          <ul>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php endif; ?>
  <div class="row c-logo-opts" style="height: 3rem;">
    <div class="small-6 left">
      <div class="store-logo" style="top: -0.75rem;"> <a href="javascript:;"> <img alt="" src="<?php echo $this->_var['store']['shop_logo']; ?>"> </a>
        <div shop="68011" class="name"><?php echo $this->_var['store']['shop_name']; ?></div>
      </div>
    </div>
    <div class="small-6 left">
      <div class="row collapse">
        <div class="small-5 columns right j-m-im" title="点击我向商家咨询相关问题！"> 
           
          <a class="" href="javascript:;"> <i class="icon-connect"></i> <span>联系卖家</span> </a> </div>
        <!--<div class="small-4 columns right hide">
                <a href="javascript:;">
                    <i class="icon-share"></i>
                    <span>分享</span>
                </a>
            </div>-->
        <div class="small-3 columns right"> 
           
          <a href="javascript:;"> <i class="icon-follow"></i> <span>关注</span> </a> </div>
      </div>
    </div>
  </div>
  <div class="row base c-product-value">
    <div class="small-12">
     <div class="header clearfix"> <span>商品列表</span> </div>
    <?php $_from = $this->_var['store_windows']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'wind');if (count($_from)):
    foreach ($_from AS $this->_var['wind']):
?>
      <ul class="small-block-grid-2">
      <?php $_from = $this->_var['wind']['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('k', 'goods_list');if (count($_from)):
    foreach ($_from AS $this->_var['k'] => $this->_var['goods_list']):
?>
        <li data-productid="1151984234"> <a href="<?php echo url('goods/index',array('id' => $this->_var['goods_list']['goods_id']));?>">
          <div class="p-img"> <img  src="<?php echo $this->_var['goods_list']['goods_thumb']; ?>" loaded="no"> </div>
          <div class="p-info"><?php echo $this->_var['goods_list']['goods_name']; ?></div>
          <div class="flag"> <span jskuprice="1151984234" jdprice="1151984234" jshop="price" class="price">
          <?php if ($this->_var['goods_list']['is_promote']): ?>
          <?php echo $this->_var['goods_list']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_list']['shop_price']; ?>
          <?php endif; ?>
          </span> </div>
          </a> </li>
          <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      </ul>
       <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
      <a class="more"  href="<?php echo url('Sellergoods/index', array('sid' => $this->_var['store']['id']));?>">更多<span class="icon-more"></span></a> </div>
  </div>
</div>
<div class="row base c-product-all">
    <div class="small-12">
        <a href="<?php echo url('Sellergoods/index', array('sid' => $this->_var['store']['id']));?>">
            <i class="icon-all"></i>
            <span>全部商品</span>
        </a>
    </div>
</div>

<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
		$(function(){
			$("#searchBox").click(function(){
				$(".search_2").css("display","block");
				$("#keywordBox").focus();
			});
			
			$(".new-s-close").click(function(){
				$("#keywordBox").attr("placeholder","").val("").focus();
			});
			
			$(".new-a-cancel").click(function(){
				$(".search_2").css("display","none");
			});
		});
    </script> 
<script language="javascript">


	function selectExpandSort(a)
	{
		$(a).parent().parent().find(".on").removeClass("on");
		$(a).addClass("on");
		b = $(a).attr("data");

		if(b.split('|').length == 2){
			var val_array = b.split('|');
			$(a).parents(".new-ul-li").find("input[name=price_min]").val(val_array[0]);
			$(a).parents(".new-ul-li").find("input[name=price_max]").val(val_array[1]);
		}else{
			$(a).parents(".new-ul-li").find("input:hidden").val(b);
			//属性
			var i = 0;
			var new_attr = new Array();
			$('.filter_attr').each(function() {
				if($(this).hasClass('on')){
					new_attr[i] = $(this).attr('data');
					i = i+1;
				}
			});
			var new_attr_str = new_attr.join('.');
			//属性参数具体值
			$('input[name=filter_attr]').val(new_attr_str);
		}
		
		$("#filter_from").submit();
	}

	function showHideFilter(obj){
		var hasClass = $(obj).hasClass('on');
		$(obj).parent().siblings().children('div').hide();
		$(obj).siblings().hide();
		$(obj).addClass('on');
		$(obj).parent().siblings().children('a').addClass('on');
		if(hasClass){
			$(obj).removeClass('on');
			$(obj).siblings().show();
		}
	}
	function closeFilter(){
		(document.body||document.documentElement).removeChild(document.getElementById('_mask'));
		(document.body||document.documentElement).removeChild(document.getElementById('_maskArrow'));
		//$('a[f="1"]').removeClass('on');
		document.getElementById('slidebar').setAttribute('style','-webkit-transition: -webkit-transform 0.4s;-webkit-transform-origin: 0px 0px; -webkit-transform-style: preserve-3d;-webkit-transform: translate(190px, 0);');
		setTimeout(function(){
			$('#filterbar').hide();
		},400);
	}
	$(function(){
		$('a[f="1"]').click(function(e){
    		var cobj = e.srcElement || e.target;
    		var id = $(cobj).attr('id');
    		if(!id)id=$(cobj).parent('a').attr('id')||$(cobj).parent('span').parent('a').attr('id');
			if($('#'+id).hasClass('on')){return;}
			if($('#'+id).hasClass('on')){
				//$('a[f="1"]').removeClass('on');
			}else{
				var tagSort = !$('#btn_sort').hasClass('on');
				var tagStock = !$('#btn_stock').hasClass('on');
				var tagDelivery = !$('#btn_delivery').hasClass('on');
        		if(id=='btn_sort'){
					if(tagStock && tagDelivery){
					}
        		}else if(id=='btn_filter'){
					$('#filterbar').show();
					var height = ((document.body||document.documentElement).clientHeight+20)+'px';
					if(parseInt($('#slidebar').css('height').replace('px',''))>parseInt(height.replace('px',''))-20){
						height = (parseInt($('#slidebar').css('height').replace('px',''))+50)+'px';
					}
					$('#filterbar').css('height',(parseInt(height.replace('px',''))-50)+"px");
					var width = '100%';
					var maskArrow = document.createElement("a");
					maskArrow.setAttribute('class','new-abtn-slid');
					maskArrow.setAttribute('style','z-index:8889;left:auto;right:185px;');
					maskArrow.setAttribute('id','_maskArrow');
        			var mask = document.createElement("div");
					mask.setAttribute('id','_mask');
					mask.setAttribute('style','position:absolute;left:0px;top:0px;background-color:rgb(13, 13, 13);filter:alpha(opacity=60);opacity: 0.6;width:'+width+';height:'+height+';z-index:8888;');
					(document.body||document.documentElement).appendChild(mask);
					(document.body||document.documentElement).appendChild(maskArrow);
					var scrolltop = (document.body||document.documentElement).scrollTop;
					$('#filterbar').css("top",(scrolltop-28)+"px");
					document.getElementById('slidebar').setAttribute('style',' -webkit-transform-style: preserve-3d; -webkit-transition: -webkit-transform 0.4s; -webkit-transform-origin: 0px 0px; -webkit-transform: translate(0px, 0); ');
					$('#_maskArrow').click(function(){
            			closeFilter();
            		});
					$('#_mask').click(function(){
            			closeFilter();
            		});
        		}
			}
    	});
	})
</script> 
 
</body>
</html>