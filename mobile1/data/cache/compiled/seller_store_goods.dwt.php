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
<link rel="stylesheet" href="<?php echo $this->_var['ectouch_css_path']; ?>">
</head>
<body>
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header">
    <div class="header_l header_return"><a onclick="javascript:history.go(-1);"><span>返回</span></a></div>
    <div id="search_box2">
      <div class="search_box" id="searchBox">JDPhone</div>
    </div>
    <div class="header_r header_search"> <a class="new-a-jd" onClick="showSearch()"><span>京东键</span></a></div>
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
  <?php echo $this->fetch('library/goods_list_seller.lbi'); ?> </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript">
$(".filter-inner span.new-bar:first").css("display", "none");
get_asynclist('<?php echo url('sellergoods/asynclist', array('id'=>$this->_var['id'],'sid'=>$this->_var['sid'],'brand'=>$this->_var['brand_id'], 'price_min'=>$this->_var['price_min'], 'price_max'=>$this->_var['price_max'], 'filter_attr'=>$this->_var['filter_attr'], 'page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order'], 'keywords'=>$this->_var['keywords']));?>' , '__TPL__/images/loader.gif');
</script> 


<script language="javascript">
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
		$(".cid").val(b);
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