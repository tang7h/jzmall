<?php exit;?>a:3:{s:8:"template";a:8:{i:0;s:63:"/data/home/hyu1472460001/htdocs/mobile/themes/default/index.dwt";i:1;s:74:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/index_ad.lbi";i:2;s:78:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/index_search.lbi";i:3;s:76:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/jrsh_index.lbi";i:4;s:79:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/recommend_new.lbi";i:5;s:80:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/recommend_best.lbi";i:6;s:75:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/cat_goods.lbi";i:7;s:77:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/page_footer.lbi";}s:7:"expires";i:1435374890;s:8:"maketime";i:1435371290;}<!DOCTYPE html>
<html>
<head>
<meta name="Generator" content="ECSHOP v2.7.3" />
<meta charset="utf-8" />
<title>知了购——购我所爱——知了mall</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />
<link href="images/touch-icon.png" rel="apple-touch-icon-precomposed" />
<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
<link href="themes/default/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="themes/default/js/TouchSlide.js"></script>
<script type="text/javascript" src="themes/default/js/jd_index.js"></script>
</head>
<body>
<div id="page">
  <header id="header" >
    <div class="header_l"> <a class="ico_02" href="#menu"> 菜单栏 </a> </div>
    <h1> 知了购 </h1>
    <div class="header_r"> <a class="ico_01" href="flow.php"> 购物车 </a> </div>
  </header>
</div>
<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
    <ul>
    	      <li><a href='http://' target='_blank'><img src='data/afficheimg/20150527zphymj.jpg' width='360' height='168' border='0' /></a></li>
            <li><a href='http://' target='_blank'><img src='data/afficheimg/20150601ngdxxz.jpg' width='360' height='168' border='0' /></a></li>
          </ul>
  </div>
</div>
<script type="text/javascript">
TouchSlide({ 
	slideCell:"#focus",
	titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
	mainCell:".bd ul", 
	effect:"leftLoop", 
	autoPlay:true,//自动播放
	autoPage:true //自动分页
});
</script>
<div class="blank2"> </div>
<div class="blank2"> </div>
<div>
  <div align="center"><img src='themes/default/images/logo.png' width='209' height='85'/></div>
</div>
<div class="blank2"> </div>
<div id="content" class="wrap">
	<header class="region">
<div class="content">
  <div id="fake-search" >
    <form id="searchForm" name="searchForm" method="get" action="search.php">
      <div class="fakeInput">
        <input name="keywords" id="keyword" type="text" class="search_text" onFocus="if(this.value=='请输入关键词'){this.value=''}" onBlur="if(this.value==''){this.value='请输入关键词'}" value="请输入关键词"/>
        <input type="submit" id="submit" class="search_submit" value=""/>
      </div>
    </form>
  </div>
</div>
</header>
 
   
   <div id="showcase" class="w advanced">
       <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="JS代码,图片特效,JS广告代码,JS特效代码" />
<meta name="description" content="此代码内容为手机移动端图片横向滚动效果，属于站长常用代码，更多图片特效代码请访问懒人图库JS代码频道。" />
    
    <link rel="stylesheet" type="text/css" href="themes/default/css/reset.css" />
    
    
    <link rel="stylesheet" type="text/css" href="themes/default/css/widget/slider/slider.css" />
    <link rel="stylesheet" type="text/css" href="themes/default/css/widget/slider/slider.default.css" /> 
    
    
    <script type="text/javascript" src="themes/default/js/zepto.js"></script>
	<script type="text/javascript" src="http://gmu.baidu.com/demo/mobileevent2pc.js"></script>      
    <script type="text/javascript" src="themes/default/js/touch.js"></script>      
    <script type="text/javascript" src="themes/default/js/zepto.extend.js"></script>
    <script type="text/javascript" src="themes/default/js/zepto.ui.js"></script>
    <script type="text/javascript" src="themes/default/js/widget/slider.js"></script>
    
<div id="slider"></div>
<script>
    //创建slider组件
    var slider = $.ui.slider('#slider', {
        autoPlay:false,
        showArr:false,
        viewNum:3,
        content:[
            {
                href: "#",
                pic: "themes/default/images/pic_1.jpg",
                title:''
            }, {
                href: "#",
                pic: "themes/default/images/pic_2.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_3.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_4.jpg",
                title: ""
            },
            {
                href: "#",
                pic: "themes/default/images/pic_5.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_6.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_7.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_8.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_9.jpg",
                title: ""
            }, {
                href: "#",
                pic: "themes/default/images/pic_10.jpg",
                title: ""
            }
        ]
    });
</script>
<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<script type="text/javascript">
$(window).load(function(){
	img_height = $('.ui-slider-item').children().children('img').height();
	$('#slider').css('height',img_height + 'px');
})
</script>
   </div>
   <div style="clear:both;"></div>
   
  
  
<style type="text/css">
.picScroll{margin:10px auto; text-align:center;}
.picScroll .bd ul{width:100%;  float:left; padding-top:10px;}
.picScroll .bd li{width:33%; float:left; font-size:14px; text-align:center;}
.picScroll .bd li a{-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */}
.picScroll .bd li img{width:100px; height:100px;}
.picScroll .hd{display:None}
</style>
<div class="item_show_box2 box1 region" style="overflow:hidden">
    <div id="picScroll" class="picScroll">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                                <li><a href="goods.php?id=162"><img src="../images/201412/thumb_img/162_thumb_G_1419381239139.jpg" /></a>
                <br/>
                 
                <span class="price_s"> ￥20元 </span> 
                                <br>测试                </li>
                                                <li><a href="goods.php?id=163"><img src="../images/201412/thumb_img/163_thumb_G_1419451159314.jpg" /></a>
                <br/>
                 
                <span class="price_s"> ￥100元 </span> 
                                <br>123456                </li>
                                                <li><a href="goods.php?id=156"><img src="../images/201412/thumb_img/156_thumb_G_1418952353372.jpg" /></a>
                <br/>
                 
                <span class="price_s"> ￥100元 </span> 
                                <br>教育                </li>
                                        </div>
    </div>
    <div class="position_a_lt">
      <div> </div>
      <a href="search.php?intro=new">
      <p> 新品 </p>
      <p class="ico_04"> </p>
      </a> </div>
    <div class="position_a_rb">
      <div> </div>
      <a href="search.php?intro=new">
      <p class="ico_04_b"> </p>
      <p> 更多 </p>
      </a> </div>
  </div>
<div class="blank2"></div>
<script type="text/javascript">
TouchSlide({
    slideCell:"#picScroll",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    autoPage:true, //自动分页
    pnLoop:"false", // 前后按钮不循环
    //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script>
<style type="text/css">
.picScroll3{margin:10px auto; text-align:center;}
.picScroll3 .bd ul{width:100%;  float:left; padding-top:10px;}
.picScroll3 .bd li{width:33%; float:left; font-size:14px; text-align:center;}
.picScroll3 .bd li a{-webkit-tap-highlight-color:rgba(0, 0, 0, 0); /* 取消链接高亮 */}
.picScroll3 .bd li img{width:100px; height:100px;}
.picScroll3 .hd{display:None}
</style>
<div class="item_show_box2 box1 region" style="overflow:hidden">
    <div id="picScroll3" class="picScroll3">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd">
            <ul>
                                <li><a href="goods.php?id=162"><img src="../images/201412/thumb_img/162_thumb_G_1419381239139.jpg" /></a>
                <br/>
                 
                <span class="price_s"> ￥20元 </span> 
                                <br>测试                </li>
                                                <li><a href="goods.php?id=163"><img src="../images/201412/thumb_img/163_thumb_G_1419451159314.jpg" /></a>
                <br/>
                 
                <span class="price_s"> ￥100元 </span> 
                                <br>123456                </li>
                                                <li><a href="goods.php?id=156"><img src="../images/201412/thumb_img/156_thumb_G_1418952353372.jpg" /></a>
                <br/>
                 
                <span class="price_s"> ￥100元 </span> 
                                <br>教育                </li>
                                        </div>
    </div>
    <div class="position_a_lt">
      <div> </div>
      <a href="search.php?intro=best">
      <p> 精品 </p>
      <p class="ico_04"> </p>
      </a> </div>
    <div class="position_a_rb">
      <div> </div>
      <a href="search.php?intro=best">
      <p class="ico_04_b"> </p>
      <p> 更多 </p>
      </a> </div>
  </div>
<div class="blank2"></div>
<script type="text/javascript">
TouchSlide({
    slideCell:"#picScroll3",
    titCell:".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
    autoPage:true, //自动分页
    pnLoop:"false", // 前后按钮不循环
    //switchLoad:"_src" //切换加载，真实图片路径为"_src" 
});
</script>
  
<div class="block">
  <div class="indexTitle">
    <h3 class="title">母婴、玩具乐器</h3>
    <div class="dots"> <i></i> <i></i> <i></i> <i></i> </div>
  </div>
  <div class="listProduct">
    <ul>
            <li> <a href="goods.php?id=161">
        <div style="background-image:url('../images/201412/thumb_img/161_thumb_G_1419376928734.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">超级睡袋</div>
        <div class="price_box"> <span>
                    ￥110元                    </span><del>￥132元</del> </div>
        </a> </li>
            <li> <a href="goods.php?id=149">
        <div style="background-image:url('../images/no_picture.gif');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">ewqewqe</div>
        <div class="price_box"> <span>
                    ￥110元                    </span><del>￥132元</del> </div>
        </a> </li>
            <li> <a href="goods.php?id=144">
        <div style="background-image:url('../images/201408/thumb_img/144_thumb_G_1409268171644.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">ELLE(她）...</div>
        <div class="price_box"> <span>
                    ￥1000元                    </span><del>￥1200元</del> </div>
        </a> </li>
            <li> <a href="goods.php?id=91">
        <div style="background-image:url('../images/201407/thumb_img/91_thumb_G_1406504177983.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">惠氏 Wyet...</div>
        <div class="price_box"> <span>
                    ￥368元                    </span><del>￥442元</del> </div>
        </a> </li>
          </ul>
  </div>
  <div class="global_btn_box"><a href="category.php?id=11">更多母婴、玩具乐器&gt;&gt;</a></div>
</div>
<div class="block">
  <div class="indexTitle">
    <h3 class="title">图书、音像、数字商品</h3>
    <div class="dots"> <i></i> <i></i> <i></i> <i></i> </div>
  </div>
  <div class="listProduct">
    <ul>
            <li> <a href="goods.php?id=106">
        <div style="background-image:url('../images/201407/thumb_img/106_thumb_G_1406506885979.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">Android...</div>
        <div class="price_box"> <span>
                    ￥128元                    </span><del>￥154元</del> </div>
        </a> </li>
            <li> <a href="goods.php?id=105">
        <div style="background-image:url('../images/201407/thumb_img/105_thumb_G_1406506846285.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">JavaScr...</div>
        <div class="price_box"> <span>
                    ￥73元                    </span><del>￥88元</del> </div>
        </a> </li>
            <li> <a href="goods.php?id=104">
        <div style="background-image:url('../images/201407/thumb_img/104_thumb_G_1406506814300.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">机器学习系统设...</div>
        <div class="price_box"> <span>
                    ￥42元                    </span><del>￥50元</del> </div>
        </a> </li>
            <li> <a href="goods.php?id=103">
        <div style="background-image:url('../images/201407/thumb_img/103_thumb_G_1406506781572.jpg');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box">数据化管理：洞...</div>
        <div class="price_box"> <span>
                    ￥46元                    </span><del>￥55元</del> </div>
        </a> </li>
          </ul>
  </div>
  <div class="global_btn_box"><a href="category.php?id=1">更多图书、音像、数字商品&gt;&gt;</a></div>
</div>
<div class="block">
  <div class="indexTitle">
    <h3 class="title">食品饮料、酒类、生鲜</h3>
    <div class="dots"> <i></i> <i></i> <i></i> <i></i> </div>
  </div>
  <div class="listProduct">
    <ul>
          </ul>
  </div>
  <div class="global_btn_box"><a href="category.php?id=12">更多食品饮料、酒类、生鲜&gt;&gt;</a></div>
</div>
  
  
</div>
<div class="mr-t20">
  <div class="footer1">
    <div class="in">
      <div class="footSearch">
        <form id="searchFormfoot" name="searchForm" method="get" action="search.php">
          <input name="keywords" type="text" id="keywordfoot">
          <button type="submit" id="submitfoot"></button>
        </form>
      </div>
      <a href="index.php" class="homeBtn"><span></span></a> <a href="javascript:scroll(0,0)" class="gotop"> <span></span>
      <p>回顶部</p>
      </a> </div>
    <ul class="mf_o2">
            <li><a href="#" >触屏版</a></li>
            <li><a href="#" >电脑版</a></li>
            <li><a href="article.php?id=3" >客户端</a></li>
          </ul>
    <p class="mf_o4">&copy; 2005-2015 知了购 版权所有，并保留所有权利。</p>
  </div>
</div>
<link href="themes/default/css/global_nav.css?v=20140408" type="text/css" rel="stylesheet"/>
<div class="global-nav global-nav--current">
  <div class="global-nav__nav-wrap">
    <div class="global-nav__nav-item"> <a href="./" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-index">&#xf0001;</i> <span class="global-nav__nav-tit">首页</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="catalog.php" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-category">&#xf0002;</i> <span class="global-nav__nav-tit">分类</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="javascript:get_search_box();" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-search">&#xf0003;</i> <span class="global-nav__nav-tit">搜索</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="flow.php?step=cart" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-shop-cart">&#xf0004;</i> <span class="global-nav__nav-tit">购物车</span> <span class="global-nav__nav-shop-cart-num" id="carId">554fcae493e564ee0dc75bdf2ebf94cacart_info_new|a:1:{s:4:"name";s:13:"cart_info_new";}554fcae493e564ee0dc75bdf2ebf94ca</span> </a> </div>
    <div class="global-nav__nav-item"> <a href="user.php" class="global-nav__nav-link"> <i class="global-nav__iconfont global-nav__icon-my-yhd">&#xf0005;</i> <span class="global-nav__nav-tit">会员中心</span> </a> </div>
  </div>
  <div class="global-nav__operate-wrap"> <span class="global-nav__yhd-logo"></span> <span class="global-nav__operate-cart-num" id="globalId">554fcae493e564ee0dc75bdf2ebf94cacart_info_new|a:1:{s:4:"name";s:13:"cart_info_new";}554fcae493e564ee0dc75bdf2ebf94ca</span> </div>
</div>
<script type="text/javascript" src="themes/default/js/zepto.min.js?v=20140408"></script>
<script type="text/javascript">
$(function() {
	$("#submitfoot").click(function() {
	if($("#keywordfoot").val()){
		$("#searchFormfoot").submit();
	} else {
		alert("请输入关键词！");
		return false;
	}
	})
});
Zepto(function($){
   var $nav = $('.global-nav'), $btnLogo = $('.global-nav__operate-wrap');
   //点击箭头，显示隐藏导航
   $btnLogo.on('click',function(){
     if($btnLogo.parent().hasClass('global-nav--current')){
       navHide();
     }else{
       navShow();
     }
   });
   var navShow = function(){
     $nav.addClass('global-nav--current');
   }
   var navHide = function(){          
     $nav.removeClass('global-nav--current');
   }
   
   $(window).on("scroll", function() {           
		if($nav.hasClass('global-nav--current')){
			navHide();
		}
	});
})
function get_search_box(){
	try{
		document.getElementById('get_search_box').click();
	}catch(err){
		document.getElementById('keywordfoot').focus();
 	}
}
</script>
<script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
<script type="text/javascript" src="themes/default/js/jquery.mmenu.js"></script>
<script type="text/javascript" src="themes/default/js/supertouch.js"></script>
<script type="text/javascript">
window.onload = function(){
  $('#menu').css('display','');
}
$(function() {
	$('nav#menu').mmenu();
	$('#get_search_box').click(function(){
		$(".mm-page").children('div').hide();
		$("#main-search").css('position','fixed').css('top','0px').css('width','100%').css('z-index','999').show();
		//$('#keywordBox').focus();
	})
	$("#main-search .close").click(function(){
		$(".mm-page").children('div').show();
		$("#main-search").hide();
	})	
	$("#submit").click(function() {
	if($("#keyword").val() && $("#keyword").val()!="请输入关键词"){
		$("#searchForm").submit();
	} else {
		alert("请输入关键词！");
		$("#keyword").focus();
		return false;
	}
	})
});
</script>
</body>
</html>
