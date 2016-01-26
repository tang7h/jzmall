<?php exit;?>a:3:{s:8:"template";a:9:{i:0;s:63:"/data/home/hyu1472460001/htdocs/mobile/themes/default/index.dwt";i:1;s:74:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/index_ad.lbi";i:2;s:78:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/index_search.lbi";i:3;s:76:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/jrsh_index.lbi";i:4;s:79:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/recommend_new.lbi";i:5;s:80:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/recommend_best.lbi";i:6;s:75:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/cat_goods.lbi";i:7;s:77:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/page_footer.lbi";i:8;s:75:"/data/home/hyu1472460001/htdocs/mobile/themes/default/library/index_cat.lbi";}s:7:"expires";i:1435029691;s:8:"maketime";i:1435026091;}<!DOCTYPE html>
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
<nav id="menu" style="display:none">
  <ul>
  	<li><a href="javascript:void(0)" class="mm-subclose1">所有分类</a></li>
        <li> <a href="category.php?id=1">图书、音像、数字商品</a>
      <ul>
                <li> <a href="category.php?id=22">科技</a>
          <ul>
                        <li><a href="category.php?id=68">科普</a></li>
                        <li><a href="category.php?id=69">IT</a></li>
                        <li><a href="category.php?id=70">建筑</a></li>
                        <li><a href="category.php?id=71">医学</a></li>
                        <li><a href="category.php?id=72">工业技术</a></li>
                        <li><a href="category.php?id=73">电子/通信</a></li>
                        <li><a href="category.php?id=74">农林</a></li>
                        <li><a href="category.php?id=75">科学与自然</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=15">电子书</a>
          <ul>
                        <li><a href="category.php?id=26">免费</a></li>
                        <li><a href="category.php?id=27">小说</a></li>
                        <li><a href="category.php?id=28">励志与成功</a></li>
                        <li><a href="category.php?id=29">婚恋/两性</a></li>
                        <li><a href="category.php?id=30">文学</a></li>
                        <li><a href="category.php?id=31">经管</a></li>
                        <li><a href="category.php?id=32">畅读VIP</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=16">数字音乐</a>
          <ul>
                        <li><a href="category.php?id=33">通俗流行</a></li>
                        <li><a href="category.php?id=34">古典音乐</a></li>
                        <li><a href="category.php?id=35">摇滚说唱</a></li>
                        <li><a href="category.php?id=36">爵士蓝调</a></li>
                        <li><a href="category.php?id=37">乡村民谣</a></li>
                        <li><a href="category.php?id=38">有声读物</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=17">音像</a>
          <ul>
                        <li><a href="category.php?id=39">音乐</a></li>
                        <li><a href="category.php?id=40">影视教育</a></li>
                        <li><a href="category.php?id=41">音像</a></li>
                        <li><a href="category.php?id=42">游戏</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=18">文艺</a>
          <ul>
                        <li><a href="category.php?id=43">小说</a></li>
                        <li><a href="category.php?id=44">文学</a></li>
                        <li><a href="category.php?id=45">青春文学</a></li>
                        <li><a href="category.php?id=46">传记</a></li>
                        <li><a href="category.php?id=47">艺术</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=19">人文社科</a>
          <ul>
                        <li><a href="category.php?id=48">历史</a></li>
                        <li><a href="category.php?id=49">心理学</a></li>
                        <li><a href="category.php?id=50">政治/军事</a></li>
                        <li><a href="category.php?id=51">国学/古籍</a></li>
                        <li><a href="category.php?id=52">哲学/宗教</a></li>
                        <li><a href="category.php?id=53">社会科学</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=20">经管励志</a>
          <ul>
                        <li><a href="category.php?id=54">经济</a></li>
                        <li><a href="category.php?id=55">金融与投资</a></li>
                        <li><a href="category.php?id=56">管理</a></li>
                        <li><a href="category.php?id=57">励志与成功</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=21">生活</a>
          <ul>
                        <li><a href="category.php?id=58">家教与育儿</a></li>
                        <li><a href="category.php?id=59">旅游/地图</a></li>
                        <li><a href="category.php?id=60">烹饪/美食</a></li>
                        <li><a href="category.php?id=61">时尚/美妆</a></li>
                        <li><a href="category.php?id=62">家居</a></li>
                        <li><a href="category.php?id=63">婚恋与两性</a></li>
                        <li><a href="category.php?id=64">娱乐/休闲</a></li>
                        <li><a href="category.php?id=65">健身与保健</a></li>
                        <li><a href="category.php?id=66">动漫/幽默</a></li>
                        <li><a href="category.php?id=67">体育/运动</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=23">少儿</a>
          <ul>
                        <li><a href="category.php?id=76">少儿</a></li>
                        <li><a href="category.php?id=77">0-2岁</a></li>
                        <li><a href="category.php?id=78">3-6岁</a></li>
                        <li><a href="category.php?id=79">7-10岁</a></li>
                        <li><a href="category.php?id=80">11-14岁</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=24">教育</a>
          <ul>
                        <li><a href="category.php?id=81">教材</a></li>
                        <li><a href="category.php?id=82">中小学教辅</a></li>
                        <li><a href="category.php?id=83">考试</a></li>
                        <li><a href="category.php?id=84">外语学习</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=25">其它</a>
          <ul>
                        <li><a href="category.php?id=85">英文原版书</a></li>
                        <li><a href="category.php?id=86">港台图书</a></li>
                        <li><a href="category.php?id=87">工具书</a></li>
                        <li><a href="category.php?id=88">套装书</a></li>
                        <li><a href="category.php?id=89">杂志/期刊</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=2">家用电器</a>
      <ul>
                <li> <a href="category.php?id=90">大 家 电</a>
          <ul>
                        <li><a href="category.php?id=95">平板电视</a></li>
                        <li><a href="category.php?id=96">空调</a></li>
                        <li><a href="category.php?id=97">冰箱</a></li>
                        <li><a href="category.php?id=98">洗衣机</a></li>
                        <li><a href="category.php?id=99">家庭影院</a></li>
                        <li><a href="category.php?id=100">DVD</a></li>
                        <li><a href="category.php?id=101">迷你音响</a></li>
                        <li><a href="category.php?id=102">烟机/灶具</a></li>
                        <li><a href="category.php?id=103">热水器</a></li>
                        <li><a href="category.php?id=104">消毒柜/洗碗机</a></li>
                        <li><a href="category.php?id=105">酒柜/冷柜</a></li>
                        <li><a href="category.php?id=106">家电配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=93">个护健康</a>
          <ul>
                        <li><a href="category.php?id=139">剃须刀</a></li>
                        <li><a href="category.php?id=140">口腔护理</a></li>
                        <li><a href="category.php?id=141">剃/脱毛器</a></li>
                        <li><a href="category.php?id=142">电吹风</a></li>
                        <li><a href="category.php?id=143">美容</a></li>
                        <li><a href="category.php?id=144">美发</a></li>
                        <li><a href="category.php?id=145">按摩器</a></li>
                        <li><a href="category.php?id=146">按摩椅</a></li>
                        <li><a href="category.php?id=147">足浴盆</a></li>
                        <li><a href="category.php?id=148">血压计</a></li>
                        <li><a href="category.php?id=149">健康秤/厨房秤</a></li>
                        <li><a href="category.php?id=150">血糖仪</a></li>
                        <li><a href="category.php?id=151">体温计</a></li>
                        <li><a href="category.php?id=152">计步器/脂肪检测仪</a></li>
                        <li><a href="category.php?id=153">其它健康电器</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=92">厨房电器</a>
          <ul>
                        <li><a href="category.php?id=122">电压力锅</a></li>
                        <li><a href="category.php?id=123">电饭煲</a></li>
                        <li><a href="category.php?id=124">豆浆机</a></li>
                        <li><a href="category.php?id=125">面包机</a></li>
                        <li><a href="category.php?id=126">咖啡机</a></li>
                        <li><a href="category.php?id=127">微波炉</a></li>
                        <li><a href="category.php?id=128">料理/榨汁机</a></li>
                        <li><a href="category.php?id=129">电烤箱</a></li>
                        <li><a href="category.php?id=130">电磁炉</a></li>
                        <li><a href="category.php?id=131">电饼铛/烧烤盘</a></li>
                        <li><a href="category.php?id=132">煮蛋器</a></li>
                        <li><a href="category.php?id=133">酸奶机</a></li>
                        <li><a href="category.php?id=134">电水壶/热水瓶</a></li>
                        <li><a href="category.php?id=135">电炖锅</a></li>
                        <li><a href="category.php?id=136">多用途锅</a></li>
                        <li><a href="category.php?id=137">果蔬解毒机</a></li>
                        <li><a href="category.php?id=138">其它厨房电器</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=91">生活电器</a>
          <ul>
                        <li><a href="category.php?id=107">电风扇</a></li>
                        <li><a href="category.php?id=108">冷风扇</a></li>
                        <li><a href="category.php?id=109">净化器</a></li>
                        <li><a href="category.php?id=110">饮水机</a></li>
                        <li><a href="category.php?id=111">净水设备</a></li>
                        <li><a href="category.php?id=112">挂烫机/熨斗</a></li>
                        <li><a href="category.php?id=113">吸尘器</a></li>
                        <li><a href="category.php?id=114">电话机</a></li>
                        <li><a href="category.php?id=115">插座</a></li>
                        <li><a href="category.php?id=116">收录/音机</a></li>
                        <li><a href="category.php?id=117">清洁机</a></li>
                        <li><a href="category.php?id=118">加湿器</a></li>
                        <li><a href="category.php?id=119">除湿/干衣机</a></li>
                        <li><a href="category.php?id=120">取暖电器</a></li>
                        <li><a href="category.php?id=121">其它生活电器</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=94">五金家装</a>
          <ul>
                        <li><a href="category.php?id=154">电动工具</a></li>
                        <li><a href="category.php?id=155">手动工具</a></li>
                        <li><a href="category.php?id=156">仪器仪表</a></li>
                        <li><a href="category.php?id=157">浴霸/排气扇</a></li>
                        <li><a href="category.php?id=158">灯具</a></li>
                        <li><a href="category.php?id=159">LED灯</a></li>
                        <li><a href="category.php?id=160">洁身器</a></li>
                        <li><a href="category.php?id=161">水槽</a></li>
                        <li><a href="category.php?id=162">龙头</a></li>
                        <li><a href="category.php?id=163">淋浴花洒</a></li>
                        <li><a href="category.php?id=164">厨卫五金</a></li>
                        <li><a href="category.php?id=165">家具五金</a></li>
                        <li><a href="category.php?id=166">门铃</a></li>
                        <li><a href="category.php?id=167">电气开关</a></li>
                        <li><a href="category.php?id=168">插座</a></li>
                        <li><a href="category.php?id=169">电工电料</a></li>
                        <li><a href="category.php?id=170">监控安防</a></li>
                        <li><a href="category.php?id=171">电线/线缆</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=3">手机、数码、京东通信</a>
      <ul>
                <li> <a href="category.php?id=172">手机通讯</a>
          <ul>
                        <li><a href="category.php?id=181">手机</a></li>
                        <li><a href="category.php?id=182">对讲机</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=173">京东通信</a>
          <ul>
                        <li><a href="category.php?id=183">选号中心</a></li>
                        <li><a href="category.php?id=184">自助服务</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=174">运营商</a>
          <ul>
                        <li><a href="category.php?id=185">购机送费</a></li>
                        <li><a href="category.php?id=186">0元购机</a></li>
                        <li><a href="category.php?id=187">选号入网</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=175">手机配件</a>
          <ul>
                        <li><a href="category.php?id=188">电池</a></li>
                        <li><a href="category.php?id=189">蓝牙耳机</a></li>
                        <li><a href="category.php?id=190">充电器/数据线</a></li>
                        <li><a href="category.php?id=191">手机耳机</a></li>
                        <li><a href="category.php?id=192">贴膜</a></li>
                        <li><a href="category.php?id=193">存储卡</a></li>
                        <li><a href="category.php?id=194">保护套</a></li>
                        <li><a href="category.php?id=195">车载</a></li>
                        <li><a href="category.php?id=196">iPhone配件</a></li>
                        <li><a href="category.php?id=197">创意配件</a></li>
                        <li><a href="category.php?id=198">便携/无线音箱</a></li>
                        <li><a href="category.php?id=199">手机饰品</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=176">摄影摄像</a>
          <ul>
                        <li><a href="category.php?id=200">数码相机</a></li>
                        <li><a href="category.php?id=201">单电/微单相机</a></li>
                        <li><a href="category.php?id=202">单反相机</a></li>
                        <li><a href="category.php?id=203">拍立得</a></li>
                        <li><a href="category.php?id=204">运动相机</a></li>
                        <li><a href="category.php?id=205">摄像机</a></li>
                        <li><a href="category.php?id=206">镜头</a></li>
                        <li><a href="category.php?id=207">户外器材</a></li>
                        <li><a href="category.php?id=208">摄影器材</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=177">数码配件</a>
          <ul>
                        <li><a href="category.php?id=209">存储卡</a></li>
                        <li><a href="category.php?id=210">读卡器</a></li>
                        <li><a href="category.php?id=211">滤镜</a></li>
                        <li><a href="category.php?id=212">闪光灯/手柄</a></li>
                        <li><a href="category.php?id=213">相机包</a></li>
                        <li><a href="category.php?id=214">三脚架/云台</a></li>
                        <li><a href="category.php?id=215">相机清洁</a></li>
                        <li><a href="category.php?id=216">相机贴膜</a></li>
                        <li><a href="category.php?id=217">机身附件</a></li>
                        <li><a href="category.php?id=218">镜头附件</a></li>
                        <li><a href="category.php?id=219">电池/充电器</a></li>
                        <li><a href="category.php?id=220">移动电源</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=178">时尚影音</a>
          <ul>
                        <li><a href="category.php?id=221">耳机/耳麦</a></li>
                        <li><a href="category.php?id=222">音箱/音响</a></li>
                        <li><a href="category.php?id=223">麦克风</a></li>
                        <li><a href="category.php?id=224">MP3/MP4</a></li>
                        <li><a href="category.php?id=225">数码相框</a></li>
                        <li><a href="category.php?id=226">专业音频</a></li>
                        <li><a href="category.php?id=227">苹果周边</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=179">智能设备</a>
          <ul>
                        <li><a href="category.php?id=228">智能手环</a></li>
                        <li><a href="category.php?id=229">智能手表</a></li>
                        <li><a href="category.php?id=230">智能眼镜</a></li>
                        <li><a href="category.php?id=231">运动跟踪器</a></li>
                        <li><a href="category.php?id=232">健康监测</a></li>
                        <li><a href="category.php?id=233">智能配饰</a></li>
                        <li><a href="category.php?id=234">智能家居</a></li>
                        <li><a href="category.php?id=235">体感车</a></li>
                        <li><a href="category.php?id=236">其他配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=180">电子教育</a>
          <ul>
                        <li><a href="category.php?id=237">电子词典</a></li>
                        <li><a href="category.php?id=238">电纸书</a></li>
                        <li><a href="category.php?id=239">录音笔</a></li>
                        <li><a href="category.php?id=240">复读机</a></li>
                        <li><a href="category.php?id=241">点读机/笔</a></li>
                        <li><a href="category.php?id=242">学生平板</a></li>
                        <li><a href="category.php?id=243">早教机</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=4">电脑、办公</a>
      <ul>
                <li> <a href="category.php?id=244">电脑整机</a>
          <ul>
                        <li><a href="category.php?id=251">笔记本</a></li>
                        <li><a href="category.php?id=252">超极本</a></li>
                        <li><a href="category.php?id=253">游戏本</a></li>
                        <li><a href="category.php?id=254">平板电脑</a></li>
                        <li><a href="category.php?id=255">平板电脑配件</a></li>
                        <li><a href="category.php?id=256">台式机</a></li>
                        <li><a href="category.php?id=257">服务器/工作站</a></li>
                        <li><a href="category.php?id=258">笔记本配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=245">电脑配件</a>
          <ul>
                        <li><a href="category.php?id=259">CPU</a></li>
                        <li><a href="category.php?id=260">主板</a></li>
                        <li><a href="category.php?id=261">显卡</a></li>
                        <li><a href="category.php?id=262">硬盘</a></li>
                        <li><a href="category.php?id=263">SSD固态硬盘</a></li>
                        <li><a href="category.php?id=264">内存</a></li>
                        <li><a href="category.php?id=265">机箱</a></li>
                        <li><a href="category.php?id=266">电源</a></li>
                        <li><a href="category.php?id=267">显示器</a></li>
                        <li><a href="category.php?id=268">刻录机/光驱</a></li>
                        <li><a href="category.php?id=269">声卡/扩展卡</a></li>
                        <li><a href="category.php?id=270">散热器</a></li>
                        <li><a href="category.php?id=271">装机配件</a></li>
                        <li><a href="category.php?id=272">组装电脑</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=246">外设产品</a>
          <ul>
                        <li><a href="category.php?id=273">鼠标</a></li>
                        <li><a href="category.php?id=274">键盘</a></li>
                        <li><a href="category.php?id=275">游戏设备</a></li>
                        <li><a href="category.php?id=276">U盘</a></li>
                        <li><a href="category.php?id=277">移动硬盘</a></li>
                        <li><a href="category.php?id=278">鼠标垫</a></li>
                        <li><a href="category.php?id=279">摄像头</a></li>
                        <li><a href="category.php?id=280">线缆</a></li>
                        <li><a href="category.php?id=281">电玩</a></li>
                        <li><a href="category.php?id=282">手写板</a></li>
                        <li><a href="category.php?id=283">外置盒</a></li>
                        <li><a href="category.php?id=284">电脑工具</a></li>
                        <li><a href="category.php?id=285">电脑清洁</a></li>
                        <li><a href="category.php?id=286">UPS</a></li>
                        <li><a href="category.php?id=287">插座</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=247">网络产品</a>
          <ul>
                        <li><a href="category.php?id=288">路由器</a></li>
                        <li><a href="category.php?id=289">网卡</a></li>
                        <li><a href="category.php?id=290">交换机</a></li>
                        <li><a href="category.php?id=291">网络存储</a></li>
                        <li><a href="category.php?id=292">4G/3G上网</a></li>
                        <li><a href="category.php?id=293">网络盒子</a></li>
                        <li><a href="category.php?id=294">网络配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=248">办公打印</a>
          <ul>
                        <li><a href="category.php?id=295">打印机</a></li>
                        <li><a href="category.php?id=296">一体机</a></li>
                        <li><a href="category.php?id=297">投影机</a></li>
                        <li><a href="category.php?id=298">投影配件</a></li>
                        <li><a href="category.php?id=299">传真机</a></li>
                        <li><a href="category.php?id=300">复合机</a></li>
                        <li><a href="category.php?id=301">碎纸机</a></li>
                        <li><a href="category.php?id=302">扫描仪</a></li>
                        <li><a href="category.php?id=303">墨盒</a></li>
                        <li><a href="category.php?id=304">硒鼓</a></li>
                        <li><a href="category.php?id=305">墨粉</a></li>
                        <li><a href="category.php?id=306">色带</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=249">办公文仪</a>
          <ul>
                        <li><a href="category.php?id=307">办公文具</a></li>
                        <li><a href="category.php?id=308">文件管理</a></li>
                        <li><a href="category.php?id=309">笔类</a></li>
                        <li><a href="category.php?id=310">纸类</a></li>
                        <li><a href="category.php?id=311">本册/便签</a></li>
                        <li><a href="category.php?id=312">学生文具</a></li>
                        <li><a href="category.php?id=313">财务用品</a></li>
                        <li><a href="category.php?id=314">计算器</a></li>
                        <li><a href="category.php?id=315">激光笔</a></li>
                        <li><a href="category.php?id=316">白板/封装</a></li>
                        <li><a href="category.php?id=317">考勤机</a></li>
                        <li><a href="category.php?id=318">刻录碟片/附件</a></li>
                        <li><a href="category.php?id=319">点钞机</a></li>
                        <li><a href="category.php?id=320">支付设备/POS机</a></li>
                        <li><a href="category.php?id=321">安防监控</a></li>
                        <li><a href="category.php?id=322">呼叫/会议设备</a></li>
                        <li><a href="category.php?id=323">保险柜</a></li>
                        <li><a href="category.php?id=324">办公家具</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=250">服务产品</a>
          <ul>
                        <li><a href="category.php?id=325">上门服务</a></li>
                        <li><a href="category.php?id=326">远程服务</a></li>
                        <li><a href="category.php?id=327">电脑软件</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=5">家居、家具、家装、厨具</a>
      <ul>
                <li> <a href="category.php?id=330">家纺</a>
          <ul>
                        <li><a href="category.php?id=353">床品套件</a></li>
                        <li><a href="category.php?id=354">被子</a></li>
                        <li><a href="category.php?id=355">蚊帐</a></li>
                        <li><a href="category.php?id=356">凉席</a></li>
                        <li><a href="category.php?id=357">床单被罩</a></li>
                        <li><a href="category.php?id=358">枕芯</a></li>
                        <li><a href="category.php?id=359">毛巾浴巾</a></li>
                        <li><a href="category.php?id=360">布艺软饰</a></li>
                        <li><a href="category.php?id=361">毯子</a></li>
                        <li><a href="category.php?id=362">抱枕靠垫</a></li>
                        <li><a href="category.php?id=363">床垫/床褥</a></li>
                        <li><a href="category.php?id=364">窗帘/窗纱</a></li>
                        <li><a href="category.php?id=365">电热毯</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=328">厨具</a>
          <ul>
                        <li><a href="category.php?id=335">烹饪锅具</a></li>
                        <li><a href="category.php?id=336">刀剪菜板</a></li>
                        <li><a href="category.php?id=337">厨房配件</a></li>
                        <li><a href="category.php?id=338">水具酒具</a></li>
                        <li><a href="category.php?id=339">餐具</a></li>
                        <li><a href="category.php?id=340">茶具/咖啡具</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=329">家装建材</a>
          <ul>
                        <li><a href="category.php?id=341">灯饰照明</a></li>
                        <li><a href="category.php?id=342">厨房卫浴</a></li>
                        <li><a href="category.php?id=343">五金工具</a></li>
                        <li><a href="category.php?id=344">电工电料</a></li>
                        <li><a href="category.php?id=345">墙地面材料</a></li>
                        <li><a href="category.php?id=346">装饰材料</a></li>
                        <li><a href="category.php?id=347">装修服务</a></li>
                        <li><a href="category.php?id=348">吸顶灯</a></li>
                        <li><a href="category.php?id=349">淋浴花洒</a></li>
                        <li><a href="category.php?id=350">开关插座</a></li>
                        <li><a href="category.php?id=351">油漆涂料</a></li>
                        <li><a href="category.php?id=352">龙头</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=331">家具</a>
          <ul>
                        <li><a href="category.php?id=366">卧室家具</a></li>
                        <li><a href="category.php?id=367">客厅家具</a></li>
                        <li><a href="category.php?id=368">餐厅家具</a></li>
                        <li><a href="category.php?id=369">书房家具</a></li>
                        <li><a href="category.php?id=370">储物家具</a></li>
                        <li><a href="category.php?id=371">阳台/户外</a></li>
                        <li><a href="category.php?id=372">商业办公</a></li>
                        <li><a href="category.php?id=373">床</a></li>
                        <li><a href="category.php?id=374">床垫</a></li>
                        <li><a href="category.php?id=375">沙发</a></li>
                        <li><a href="category.php?id=376">电脑椅</a></li>
                        <li><a href="category.php?id=377">衣柜</a></li>
                        <li><a href="category.php?id=378">茶几</a></li>
                        <li><a href="category.php?id=379">电视柜</a></li>
                        <li><a href="category.php?id=380">餐桌</a></li>
                        <li><a href="category.php?id=381">电脑桌</a></li>
                        <li><a href="category.php?id=382">鞋架/衣帽架</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=332">灯具</a>
          <ul>
                        <li><a href="category.php?id=383">台灯</a></li>
                        <li><a href="category.php?id=384">吸顶灯</a></li>
                        <li><a href="category.php?id=385">筒灯射灯</a></li>
                        <li><a href="category.php?id=386">LED灯</a></li>
                        <li><a href="category.php?id=387">节能灯</a></li>
                        <li><a href="category.php?id=388">落地灯</a></li>
                        <li><a href="category.php?id=389">五金电器</a></li>
                        <li><a href="category.php?id=390">应急灯/手电</a></li>
                        <li><a href="category.php?id=391">装饰灯</a></li>
                        <li><a href="category.php?id=392">吊灯</a></li>
                        <li><a href="category.php?id=393">氛围照明</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=333">生活日用</a>
          <ul>
                        <li><a href="category.php?id=394">收纳用品</a></li>
                        <li><a href="category.php?id=395">雨伞雨具</a></li>
                        <li><a href="category.php?id=396">浴室用品</a></li>
                        <li><a href="category.php?id=397">缝纫/针织用品</a></li>
                        <li><a href="category.php?id=398">洗晒/熨烫</a></li>
                        <li><a href="category.php?id=399">净化除味</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=334">家装软饰</a>
          <ul>
                        <li><a href="category.php?id=400">桌布/罩件</a></li>
                        <li><a href="category.php?id=401">地毯地垫</a></li>
                        <li><a href="category.php?id=402">沙发垫套/椅垫</a></li>
                        <li><a href="category.php?id=403">帘艺隔断</a></li>
                        <li><a href="category.php?id=404">相框/照片墙</a></li>
                        <li><a href="category.php?id=405">装饰字画</a></li>
                        <li><a href="category.php?id=406">墙贴/装饰贴</a></li>
                        <li><a href="category.php?id=407">节庆饰品</a></li>
                        <li><a href="category.php?id=408">手工/十字绣</a></li>
                        <li><a href="category.php?id=409">钟饰</a></li>
                        <li><a href="category.php?id=410">装饰摆件</a></li>
                        <li><a href="category.php?id=411">花瓶花艺</a></li>
                        <li><a href="category.php?id=412">创意家居</a></li>
                        <li><a href="category.php?id=413">保暖防护</a></li>
                        <li><a href="category.php?id=414">香薰蜡烛</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=6">服饰内衣、珠宝首饰</a>
      <ul>
                <li> <a href="category.php?id=711">女装</a>
          <ul>
                        <li><a href="category.php?id=716">连衣裙</a></li>
                        <li><a href="category.php?id=717">蕾丝/雪纺衫</a></li>
                        <li><a href="category.php?id=718">衬衫</a></li>
                        <li><a href="category.php?id=719">T恤</a></li>
                        <li><a href="category.php?id=720">半身裙</a></li>
                        <li><a href="category.php?id=721">休闲裤</a></li>
                        <li><a href="category.php?id=722">短裤</a></li>
                        <li><a href="category.php?id=723">牛仔裤</a></li>
                        <li><a href="category.php?id=724">针织衫</a></li>
                        <li><a href="category.php?id=725">吊带/背心</a></li>
                        <li><a href="category.php?id=726">打底衫</a></li>
                        <li><a href="category.php?id=727">打底裤</a></li>
                        <li><a href="category.php?id=728">正装裤</a></li>
                        <li><a href="category.php?id=729">小西服</a></li>
                        <li><a href="category.php?id=730">马甲</a></li>
                        <li><a href="category.php?id=731">风衣</a></li>
                        <li><a href="category.php?id=732">羊毛衫</a></li>
                        <li><a href="category.php?id=733">羊绒衫</a></li>
                        <li><a href="category.php?id=734">短外套</a></li>
                        <li><a href="category.php?id=735">棉服</a></li>
                        <li><a href="category.php?id=736">毛呢大衣</a></li>
                        <li><a href="category.php?id=737">加绒裤</a></li>
                        <li><a href="category.php?id=738">羽绒服</a></li>
                        <li><a href="category.php?id=739">皮草</a></li>
                        <li><a href="category.php?id=740">真皮皮衣</a></li>
                        <li><a href="category.php?id=741">仿皮皮衣</a></li>
                        <li><a href="category.php?id=742">旗袍/唐装</a></li>
                        <li><a href="category.php?id=743">礼服</a></li>
                        <li><a href="category.php?id=744">婚纱</a></li>
                        <li><a href="category.php?id=745">中老年女装</a></li>
                        <li><a href="category.php?id=746">大码女装</a></li>
                        <li><a href="category.php?id=747">设计师/潮牌</a></li>
                        <li><a href="category.php?id=748">卫衣</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=712">男装</a>
          <ul>
                        <li><a href="category.php?id=749">衬衫</a></li>
                        <li><a href="category.php?id=750">T恤</a></li>
                        <li><a href="category.php?id=751">POLO衫</a></li>
                        <li><a href="category.php?id=752">针织衫</a></li>
                        <li><a href="category.php?id=753">夹克</a></li>
                        <li><a href="category.php?id=754">卫衣</a></li>
                        <li><a href="category.php?id=755">风衣</a></li>
                        <li><a href="category.php?id=756">马甲/背心</a></li>
                        <li><a href="category.php?id=757">短裤</a></li>
                        <li><a href="category.php?id=758">休闲裤</a></li>
                        <li><a href="category.php?id=759">牛仔裤</a></li>
                        <li><a href="category.php?id=760">西服</a></li>
                        <li><a href="category.php?id=761">西裤</a></li>
                        <li><a href="category.php?id=762">西服套装</a></li>
                        <li><a href="category.php?id=763">真皮皮衣</a></li>
                        <li><a href="category.php?id=764">仿皮皮衣</a></li>
                        <li><a href="category.php?id=765">羽绒服</a></li>
                        <li><a href="category.php?id=766">毛呢大衣</a></li>
                        <li><a href="category.php?id=767">棉服</a></li>
                        <li><a href="category.php?id=768">羊绒衫</a></li>
                        <li><a href="category.php?id=769">羊毛衫</a></li>
                        <li><a href="category.php?id=770">卫裤/运动裤</a></li>
                        <li><a href="category.php?id=771">加绒裤</a></li>
                        <li><a href="category.php?id=772">设计师/潮牌</a></li>
                        <li><a href="category.php?id=773">唐装/中山装</a></li>
                        <li><a href="category.php?id=774">工装</a></li>
                        <li><a href="category.php?id=775">中老年男装</a></li>
                        <li><a href="category.php?id=776">大码男装</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=713">内衣</a>
          <ul>
                        <li><a href="category.php?id=777">文胸</a></li>
                        <li><a href="category.php?id=778">睡衣/家居服</a></li>
                        <li><a href="category.php?id=779">情侣睡衣</a></li>
                        <li><a href="category.php?id=780">文胸套装</a></li>
                        <li><a href="category.php?id=781">少女文胸</a></li>
                        <li><a href="category.php?id=782">女式内裤</a></li>
                        <li><a href="category.php?id=783">男式内裤</a></li>
                        <li><a href="category.php?id=784">商务男袜</a></li>
                        <li><a href="category.php?id=785">休闲棉袜</a></li>
                        <li><a href="category.php?id=786">吊带/背心</a></li>
                        <li><a href="category.php?id=787">打底衫</a></li>
                        <li><a href="category.php?id=788">抹胸</a></li>
                        <li><a href="category.php?id=789">连裤袜/丝袜</a></li>
                        <li><a href="category.php?id=790">美腿袜</a></li>
                        <li><a href="category.php?id=791">打底裤袜</a></li>
                        <li><a href="category.php?id=792">塑身美体</a></li>
                        <li><a href="category.php?id=793">大码内衣</a></li>
                        <li><a href="category.php?id=794">内衣配件</a></li>
                        <li><a href="category.php?id=795">泳衣</a></li>
                        <li><a href="category.php?id=796">秋衣秋裤</a></li>
                        <li><a href="category.php?id=797">保暖内衣</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=714">服饰配件</a>
          <ul>
                        <li><a href="category.php?id=798">太阳镜</a></li>
                        <li><a href="category.php?id=799">光学镜架/镜片</a></li>
                        <li><a href="category.php?id=800">防辐射眼镜</a></li>
                        <li><a href="category.php?id=801">女士丝巾/围巾/披肩</a></li>
                        <li><a href="category.php?id=802">棒球帽</a></li>
                        <li><a href="category.php?id=803">遮阳伞/雨伞</a></li>
                        <li><a href="category.php?id=804">遮阳帽</a></li>
                        <li><a href="category.php?id=805">领带/领结/领带夹</a></li>
                        <li><a href="category.php?id=806">男士腰带/礼盒</a></li>
                        <li><a href="category.php?id=807">防晒手套</a></li>
                        <li><a href="category.php?id=808">老花镜</a></li>
                        <li><a href="category.php?id=809">袖扣</a></li>
                        <li><a href="category.php?id=810">鸭舌帽</a></li>
                        <li><a href="category.php?id=811">装饰眼镜</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=715">珠宝首饰</a>
          <ul>
                        <li><a href="category.php?id=812">时尚饰品</a></li>
                        <li><a href="category.php?id=813">钻石</a></li>
                        <li><a href="category.php?id=814">翡翠玉石</a></li>
                        <li><a href="category.php?id=815">纯金K金饰品</a></li>
                        <li><a href="category.php?id=816">金银投资</a></li>
                        <li><a href="category.php?id=817">银饰</a></li>
                        <li><a href="category.php?id=818">水晶玛瑙</a></li>
                        <li><a href="category.php?id=819">彩宝</a></li>
                        <li><a href="category.php?id=820">铂金</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=7">个护化妆</a>
      <ul>
                <li> <a href="category.php?id=415">面部护肤</a>
          <ul>
                        <li><a href="category.php?id=421">清洁</a></li>
                        <li><a href="category.php?id=422">护肤</a></li>
                        <li><a href="category.php?id=423">面膜</a></li>
                        <li><a href="category.php?id=424">剃须</a></li>
                        <li><a href="category.php?id=425">套装</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=416">洗发护发</a>
          <ul>
                        <li><a href="category.php?id=426">洗发</a></li>
                        <li><a href="category.php?id=427">护发</a></li>
                        <li><a href="category.php?id=428">染发</a></li>
                        <li><a href="category.php?id=429">造型</a></li>
                        <li><a href="category.php?id=430">假发</a></li>
                        <li><a href="category.php?id=431">套装</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=417">身体护肤</a>
          <ul>
                        <li><a href="category.php?id=432">沐浴</a></li>
                        <li><a href="category.php?id=433">润肤</a></li>
                        <li><a href="category.php?id=434">颈部</a></li>
                        <li><a href="category.php?id=435">手足</a></li>
                        <li><a href="category.php?id=436">纤体塑形</a></li>
                        <li><a href="category.php?id=437">美胸</a></li>
                        <li><a href="category.php?id=438">套装</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=418">口腔护理</a>
          <ul>
                        <li><a href="category.php?id=439">牙膏/牙粉</a></li>
                        <li><a href="category.php?id=440">牙刷/牙线</a></li>
                        <li><a href="category.php?id=441">漱口水</a></li>
                        <li><a href="category.php?id=442">套装</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=419">女性护理</a>
          <ul>
                        <li><a href="category.php?id=443">卫生巾</a></li>
                        <li><a href="category.php?id=444">卫生护垫</a></li>
                        <li><a href="category.php?id=445">私密护理</a></li>
                        <li><a href="category.php?id=446">脱毛膏</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=420">香水彩妆</a>
          <ul>
                        <li><a href="category.php?id=447">香水</a></li>
                        <li><a href="category.php?id=448">底妆</a></li>
                        <li><a href="category.php?id=449">腮红</a></li>
                        <li><a href="category.php?id=450">眼部</a></li>
                        <li><a href="category.php?id=451">唇部</a></li>
                        <li><a href="category.php?id=452">美甲</a></li>
                        <li><a href="category.php?id=453">美容工具</a></li>
                        <li><a href="category.php?id=454">套装</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=8">鞋靴、箱包、钟表、奢侈品</a>
      <ul>
                <li> <a href="category.php?id=455">时尚女鞋</a>
          <ul>
                        <li><a href="category.php?id=463">凉鞋</a></li>
                        <li><a href="category.php?id=464">单鞋</a></li>
                        <li><a href="category.php?id=465">高跟鞋</a></li>
                        <li><a href="category.php?id=466">坡跟鞋</a></li>
                        <li><a href="category.php?id=467">松糕鞋</a></li>
                        <li><a href="category.php?id=468">鱼嘴鞋</a></li>
                        <li><a href="category.php?id=469">休闲鞋</a></li>
                        <li><a href="category.php?id=470">帆布鞋</a></li>
                        <li><a href="category.php?id=471">拖鞋/人字拖</a></li>
                        <li><a href="category.php?id=472">妈妈鞋</a></li>
                        <li><a href="category.php?id=473">防水台</a></li>
                        <li><a href="category.php?id=474">雨鞋/雨靴</a></li>
                        <li><a href="category.php?id=475">内增高</a></li>
                        <li><a href="category.php?id=476">布鞋/绣花鞋</a></li>
                        <li><a href="category.php?id=477">女靴</a></li>
                        <li><a href="category.php?id=478">雪地靴</a></li>
                        <li><a href="category.php?id=479">踝靴</a></li>
                        <li><a href="category.php?id=480">马丁靴</a></li>
                        <li><a href="category.php?id=481">鞋配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=456">流行男鞋</a>
          <ul>
                        <li><a href="category.php?id=482">休闲鞋</a></li>
                        <li><a href="category.php?id=483">凉鞋/沙滩鞋</a></li>
                        <li><a href="category.php?id=484">帆布鞋</a></li>
                        <li><a href="category.php?id=485">商务休闲鞋</a></li>
                        <li><a href="category.php?id=486">正装鞋</a></li>
                        <li><a href="category.php?id=487">增高鞋</a></li>
                        <li><a href="category.php?id=488">拖鞋/人字拖</a></li>
                        <li><a href="category.php?id=489">工装鞋</a></li>
                        <li><a href="category.php?id=490">男靴</a></li>
                        <li><a href="category.php?id=491">传统布鞋</a></li>
                        <li><a href="category.php?id=492">功能鞋</a></li>
                        <li><a href="category.php?id=493">鞋配件</a></li>
                        <li><a href="category.php?id=494">定制鞋</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=457">潮流女包</a>
          <ul>
                        <li><a href="category.php?id=495">单肩包</a></li>
                        <li><a href="category.php?id=496">手提包</a></li>
                        <li><a href="category.php?id=497">斜挎包</a></li>
                        <li><a href="category.php?id=498">双肩包</a></li>
                        <li><a href="category.php?id=499">钱包</a></li>
                        <li><a href="category.php?id=500">手拿包/晚宴包</a></li>
                        <li><a href="category.php?id=501">卡包/零钱包</a></li>
                        <li><a href="category.php?id=502">钥匙包</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=458">精品男包</a>
          <ul>
                        <li><a href="category.php?id=503">商务公文包</a></li>
                        <li><a href="category.php?id=504">单肩/斜挎包</a></li>
                        <li><a href="category.php?id=505">男士手包</a></li>
                        <li><a href="category.php?id=506">双肩包</a></li>
                        <li><a href="category.php?id=507">钱包/卡包</a></li>
                        <li><a href="category.php?id=508">钥匙包</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=459">功能箱包</a>
          <ul>
                        <li><a href="category.php?id=509">拉杆箱/拉杆包</a></li>
                        <li><a href="category.php?id=510">旅行包</a></li>
                        <li><a href="category.php?id=511">电脑包</a></li>
                        <li><a href="category.php?id=512">休闲运动包</a></li>
                        <li><a href="category.php?id=513">相机包</a></li>
                        <li><a href="category.php?id=514">腰包/胸包</a></li>
                        <li><a href="category.php?id=515">登山包</a></li>
                        <li><a href="category.php?id=516">旅行配件</a></li>
                        <li><a href="category.php?id=517">书包</a></li>
                        <li><a href="category.php?id=518">妈咪包</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=460">奢侈品</a>
          <ul>
                        <li><a href="category.php?id=519">箱包</a></li>
                        <li><a href="category.php?id=520">钱包</a></li>
                        <li><a href="category.php?id=521">服饰腰带</a></li>
                        <li><a href="category.php?id=522">鞋靴</a></li>
                        <li><a href="category.php?id=523">太阳镜/眼镜框</a></li>
                        <li><a href="category.php?id=524">饰品</a></li>
                        <li><a href="category.php?id=525">配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=461">钟表</a>
          <ul>
                        <li><a href="category.php?id=526">男表</a></li>
                        <li><a href="category.php?id=527">女表</a></li>
                        <li><a href="category.php?id=528">儿童表</a></li>
                        <li><a href="category.php?id=529">座钟挂钟</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=462">礼品</a>
          <ul>
                        <li><a href="category.php?id=530">火机烟具</a></li>
                        <li><a href="category.php?id=531">军刀军具</a></li>
                        <li><a href="category.php?id=532">美妆礼品</a></li>
                        <li><a href="category.php?id=533">工艺礼品</a></li>
                        <li><a href="category.php?id=534">礼盒礼券</a></li>
                        <li><a href="category.php?id=535">礼品文具</a></li>
                        <li><a href="category.php?id=536">收藏品</a></li>
                        <li><a href="category.php?id=537">古董把玩</a></li>
                        <li><a href="category.php?id=538">地方礼品</a></li>
                        <li><a href="category.php?id=539">创意礼品</a></li>
                        <li><a href="category.php?id=540">婚庆用品</a></li>
                        <li><a href="category.php?id=541">鲜花绿植</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=9">运动户外</a>
      <ul>
                <li> <a href="category.php?id=542">运动鞋包</a>
          <ul>
                        <li><a href="category.php?id=548">休闲鞋</a></li>
                        <li><a href="category.php?id=549">跑步鞋</a></li>
                        <li><a href="category.php?id=550">板鞋</a></li>
                        <li><a href="category.php?id=551">帆布鞋</a></li>
                        <li><a href="category.php?id=552">篮球鞋</a></li>
                        <li><a href="category.php?id=553">足球鞋</a></li>
                        <li><a href="category.php?id=554">乒羽网鞋</a></li>
                        <li><a href="category.php?id=555">专项运动鞋</a></li>
                        <li><a href="category.php?id=556">训练鞋</a></li>
                        <li><a href="category.php?id=557">拖鞋</a></li>
                        <li><a href="category.php?id=558">运动包</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=543">运动服饰</a>
          <ul>
                        <li><a href="category.php?id=559">卫衣/套头衫</a></li>
                        <li><a href="category.php?id=560">毛衫/线衫</a></li>
                        <li><a href="category.php?id=561">夹克/风衣</a></li>
                        <li><a href="category.php?id=562">棉服</a></li>
                        <li><a href="category.php?id=563">羽绒服</a></li>
                        <li><a href="category.php?id=564">T恤</a></li>
                        <li><a href="category.php?id=565">乒羽网服</a></li>
                        <li><a href="category.php?id=566">训练服</a></li>
                        <li><a href="category.php?id=567">运动背心</a></li>
                        <li><a href="category.php?id=568">运动裤</a></li>
                        <li><a href="category.php?id=569">运动套装</a></li>
                        <li><a href="category.php?id=570">运动配饰</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=544">健身训练</a>
          <ul>
                        <li><a href="category.php?id=571">跑步机</a></li>
                        <li><a href="category.php?id=572">健身车/动感单车</a></li>
                        <li><a href="category.php?id=573">综合训练器</a></li>
                        <li><a href="category.php?id=574">其他大型器械</a></li>
                        <li><a href="category.php?id=575">哑铃</a></li>
                        <li><a href="category.php?id=576">仰卧板/收腹机</a></li>
                        <li><a href="category.php?id=577">其他中小型器材</a></li>
                        <li><a href="category.php?id=578">武术搏击</a></li>
                        <li><a href="category.php?id=579">运动护具</a></li>
                        <li><a href="category.php?id=580">瑜伽舞蹈</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=545">骑行运动</a>
          <ul>
                        <li><a href="category.php?id=581">山地车/公路车</a></li>
                        <li><a href="category.php?id=582">折叠车</a></li>
                        <li><a href="category.php?id=583">电动车</a></li>
                        <li><a href="category.php?id=584">其他整车</a></li>
                        <li><a href="category.php?id=585">骑行装备</a></li>
                        <li><a href="category.php?id=586">骑行服</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=546">体育用品</a>
          <ul>
                        <li><a href="category.php?id=587">乒乓球</a></li>
                        <li><a href="category.php?id=588">羽毛球</a></li>
                        <li><a href="category.php?id=589">网球</a></li>
                        <li><a href="category.php?id=590">篮球</a></li>
                        <li><a href="category.php?id=592">足球</a></li>
                        <li><a href="category.php?id=593">高尔夫</a></li>
                        <li><a href="category.php?id=594">台球</a></li>
                        <li><a href="category.php?id=595">轮滑滑板</a></li>
                        <li><a href="category.php?id=596">排球</a></li>
                        <li><a href="category.php?id=597">棋牌麻将</a></li>
                        <li><a href="category.php?id=598">其它</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=547">户外装备</a>
          <ul>
                        <li><a href="category.php?id=619">背包</a></li>
                        <li><a href="category.php?id=620">帐篷/垫子</a></li>
                        <li><a href="category.php?id=621">睡袋/吊床</a></li>
                        <li><a href="category.php?id=622">登山攀岩</a></li>
                        <li><a href="category.php?id=623">户外照明</a></li>
                        <li><a href="category.php?id=624">野餐烧烤</a></li>
                        <li><a href="category.php?id=625">便携桌椅床</a></li>
                        <li><a href="category.php?id=626">户外工具</a></li>
                        <li><a href="category.php?id=627">望远镜</a></li>
                        <li><a href="category.php?id=628">户外仪表</a></li>
                        <li><a href="category.php?id=629">旅游用品</a></li>
                        <li><a href="category.php?id=630">军迷用品</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=591">户外鞋服</a>
          <ul>
                        <li><a href="category.php?id=599">冲锋衣裤</a></li>
                        <li><a href="category.php?id=600">速干衣裤</a></li>
                        <li><a href="category.php?id=601">滑雪服</a></li>
                        <li><a href="category.php?id=602">羽绒服/棉服</a></li>
                        <li><a href="category.php?id=603">休闲衣裤</a></li>
                        <li><a href="category.php?id=604">抓绒衣裤</a></li>
                        <li><a href="category.php?id=605">软壳衣裤</a></li>
                        <li><a href="category.php?id=606">T恤</a></li>
                        <li><a href="category.php?id=607">户外风衣</a></li>
                        <li><a href="category.php?id=608">功能内衣</a></li>
                        <li><a href="category.php?id=609">军迷服饰</a></li>
                        <li><a href="category.php?id=610">登山鞋</a></li>
                        <li><a href="category.php?id=611">徒步鞋</a></li>
                        <li><a href="category.php?id=612">越野跑鞋</a></li>
                        <li><a href="category.php?id=613">休闲鞋</a></li>
                        <li><a href="category.php?id=614">雪地靴</a></li>
                        <li><a href="category.php?id=615">工装鞋</a></li>
                        <li><a href="category.php?id=616">溯溪鞋</a></li>
                        <li><a href="category.php?id=617">沙滩/凉拖</a></li>
                        <li><a href="category.php?id=618">户外袜</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=999">123456</a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=10">汽车用品</a>
      <ul>
                <li> <a href="category.php?id=631">维修保养</a>
          <ul>
                        <li><a href="category.php?id=636">润滑油</a></li>
                        <li><a href="category.php?id=637">添加剂</a></li>
                        <li><a href="category.php?id=638">防冻液</a></li>
                        <li><a href="category.php?id=639">滤清器</a></li>
                        <li><a href="category.php?id=640">火花塞</a></li>
                        <li><a href="category.php?id=641">雨刷</a></li>
                        <li><a href="category.php?id=642">车灯</a></li>
                        <li><a href="category.php?id=643">后视镜</a></li>
                        <li><a href="category.php?id=644">轮胎</a></li>
                        <li><a href="category.php?id=645">轮毂</a></li>
                        <li><a href="category.php?id=646">刹车片/盘</a></li>
                        <li><a href="category.php?id=647">喇叭/皮带</a></li>
                        <li><a href="category.php?id=648">蓄电池</a></li>
                        <li><a href="category.php?id=649">底盘装甲/护板</a></li>
                        <li><a href="category.php?id=650">贴膜</a></li>
                        <li><a href="category.php?id=651">汽修工具</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=632">车载电器</a>
          <ul>
                        <li><a href="category.php?id=652">导航仪</a></li>
                        <li><a href="category.php?id=653">安全预警仪</a></li>
                        <li><a href="category.php?id=654">行车记录仪</a></li>
                        <li><a href="category.php?id=655">倒车雷达</a></li>
                        <li><a href="category.php?id=656">蓝牙设备</a></li>
                        <li><a href="category.php?id=657">时尚影音</a></li>
                        <li><a href="category.php?id=658">净化器</a></li>
                        <li><a href="category.php?id=659">电源</a></li>
                        <li><a href="category.php?id=660">冰箱</a></li>
                        <li><a href="category.php?id=661">吸尘器</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=633">美容清洗</a>
          <ul>
                        <li><a href="category.php?id=662">车蜡</a></li>
                        <li><a href="category.php?id=663">补漆笔</a></li>
                        <li><a href="category.php?id=664">玻璃水</a></li>
                        <li><a href="category.php?id=665">清洁剂</a></li>
                        <li><a href="category.php?id=666">洗车工具</a></li>
                        <li><a href="category.php?id=667">洗车配件</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=634">汽车装饰</a>
          <ul>
                        <li><a href="category.php?id=668">脚垫</a></li>
                        <li><a href="category.php?id=669">座垫</a></li>
                        <li><a href="category.php?id=670">座套</a></li>
                        <li><a href="category.php?id=671">后备箱垫</a></li>
                        <li><a href="category.php?id=672">头枕</a></li>
                        <li><a href="category.php?id=673">腰靠</a></li>
                        <li><a href="category.php?id=674">香水</a></li>
                        <li><a href="category.php?id=675">空气净化</a></li>
                        <li><a href="category.php?id=676">车内饰品</a></li>
                        <li><a href="category.php?id=677">功能小件</a></li>
                        <li><a href="category.php?id=678">车身装饰件</a></li>
                        <li><a href="category.php?id=679">车衣</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=635">安全自驾</a>
          <ul>
                        <li><a href="category.php?id=680">安全座椅</a></li>
                        <li><a href="category.php?id=681">胎压充气</a></li>
                        <li><a href="category.php?id=682">防盗设备</a></li>
                        <li><a href="category.php?id=683">应急救援</a></li>
                        <li><a href="category.php?id=684">保温箱</a></li>
                        <li><a href="category.php?id=685">储物箱</a></li>
                        <li><a href="category.php?id=686">自驾野营</a></li>
                        <li><a href="category.php?id=687">摩托车装备</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=11">母婴、玩具乐器</a>
      <ul>
                <li> <a href="category.php?id=688">奶粉</a>
          <ul>
                        <li><a href="category.php?id=821">婴幼奶粉</a></li>
                        <li><a href="category.php?id=822">成人奶粉</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=689">营养辅食</a>
          <ul>
                        <li><a href="category.php?id=830">DHA</a></li>
                        <li><a href="category.php?id=831">钙铁锌/维生素</a></li>
                        <li><a href="category.php?id=832">益生菌/初乳</a></li>
                        <li><a href="category.php?id=833">清火/开胃</a></li>
                        <li><a href="category.php?id=834">米粉/菜粉</a></li>
                        <li><a href="category.php?id=835">果泥/果汁</a></li>
                        <li><a href="category.php?id=836">面条/粥</a></li>
                        <li><a href="category.php?id=837">宝宝零食</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=690">尿裤湿巾</a>
          <ul>
                        <li><a href="category.php?id=838">婴儿尿裤</a></li>
                        <li><a href="category.php?id=839">拉拉裤</a></li>
                        <li><a href="category.php?id=840">成人尿裤</a></li>
                        <li><a href="category.php?id=841">湿巾</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=691">洗护用品</a>
          <ul>
                        <li><a href="category.php?id=842">宝宝护肤</a></li>
                        <li><a href="category.php?id=843">宝宝洗浴</a></li>
                        <li><a href="category.php?id=844">理发器</a></li>
                        <li><a href="category.php?id=845">洗衣液/皂</a></li>
                        <li><a href="category.php?id=846">奶瓶清洗</a></li>
                        <li><a href="category.php?id=847">日常护理</a></li>
                        <li><a href="category.php?id=848">座便器</a></li>
                        <li><a href="category.php?id=849">驱蚊防蚊</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=692">喂养用品</a>
          <ul>
                        <li><a href="category.php?id=850">奶瓶奶嘴</a></li>
                        <li><a href="category.php?id=851">吸奶器</a></li>
                        <li><a href="category.php?id=852">牙胶安抚</a></li>
                        <li><a href="category.php?id=853">暖奶消毒</a></li>
                        <li><a href="category.php?id=854">辅食料理机</a></li>
                        <li><a href="category.php?id=855">碗盘叉勺</a></li>
                        <li><a href="category.php?id=856">水壶/水杯</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=693">童车童床</a>
          <ul>
                        <li><a href="category.php?id=857">婴儿床</a></li>
                        <li><a href="category.php?id=858">婴儿推车</a></li>
                        <li><a href="category.php?id=859">餐椅摇椅</a></li>
                        <li><a href="category.php?id=860">学步车</a></li>
                        <li><a href="category.php?id=861">三轮车</a></li>
                        <li><a href="category.php?id=862">自行车</a></li>
                        <li><a href="category.php?id=863">扭扭车</a></li>
                        <li><a href="category.php?id=864">滑板车</a></li>
                        <li><a href="category.php?id=865">电动车</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=694">安全座椅</a>
          <ul>
                        <li><a href="category.php?id=866">提篮式</a></li>
                        <li><a href="category.php?id=867">安全座椅</a></li>
                        <li><a href="category.php?id=868">增高垫</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=695">寝居服饰</a>
          <ul>
                        <li><a href="category.php?id=869">婴儿外出服</a></li>
                        <li><a href="category.php?id=870">婴儿内衣</a></li>
                        <li><a href="category.php?id=871">婴儿礼盒</a></li>
                        <li><a href="category.php?id=872">婴儿鞋帽袜</a></li>
                        <li><a href="category.php?id=873">家居床品</a></li>
                        <li><a href="category.php?id=874">安全防护</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=12">食品饮料、酒类、生鲜</a>
      <ul>
                <li> <a href="category.php?id=696">中外名酒</a>
          <ul>
                        <li><a href="category.php?id=875">白酒</a></li>
                        <li><a href="category.php?id=876">葡萄酒</a></li>
                        <li><a href="category.php?id=877">洋酒</a></li>
                        <li><a href="category.php?id=878">啤酒</a></li>
                        <li><a href="category.php?id=879">黄酒/养生酒</a></li>
                        <li><a href="category.php?id=880">收藏酒/陈年老酒</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=697">进口食品</a>
          <ul>
                        <li><a href="category.php?id=881">牛奶</a></li>
                        <li><a href="category.php?id=882">饼干蛋糕</a></li>
                        <li><a href="category.php?id=883">糖果/巧克力</a></li>
                        <li><a href="category.php?id=884">休闲零食</a></li>
                        <li><a href="category.php?id=885">冲调饮品</a></li>
                        <li><a href="category.php?id=886">粮油调味</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=698">休闲食品</a>
          <ul>
                        <li><a href="category.php?id=887">休闲零食</a></li>
                        <li><a href="category.php?id=888">坚果炒货</a></li>
                        <li><a href="category.php?id=889">肉干肉脯</a></li>
                        <li><a href="category.php?id=890">蜜饯果干</a></li>
                        <li><a href="category.php?id=891">糖果/巧克力</a></li>
                        <li><a href="category.php?id=892">饼干蛋糕</a></li>
                        <li><a href="category.php?id=893">无糖食品</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=699">地方特产</a>
          <ul>
                        <li><a href="category.php?id=894">新疆</a></li>
                        <li><a href="category.php?id=895">四川</a></li>
                        <li><a href="category.php?id=896">云南</a></li>
                        <li><a href="category.php?id=897">湖南</a></li>
                        <li><a href="category.php?id=898">内蒙</a></li>
                        <li><a href="category.php?id=899">北京</a></li>
                        <li><a href="category.php?id=900">山西</a></li>
                        <li><a href="category.php?id=901">福建</a></li>
                        <li><a href="category.php?id=902">东北</a></li>
                        <li><a href="category.php?id=903">其他</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=700">茗茶</a>
          <ul>
                        <li><a href="category.php?id=904">铁观音</a></li>
                        <li><a href="category.php?id=905">普洱</a></li>
                        <li><a href="category.php?id=906">龙井</a></li>
                        <li><a href="category.php?id=907">绿茶</a></li>
                        <li><a href="category.php?id=908">红茶</a></li>
                        <li><a href="category.php?id=909">乌龙茶</a></li>
                        <li><a href="category.php?id=910">花草茶</a></li>
                        <li><a href="category.php?id=911">花果茶</a></li>
                        <li><a href="category.php?id=912">黑茶</a></li>
                        <li><a href="category.php?id=913">白茶</a></li>
                        <li><a href="category.php?id=914">养生茶</a></li>
                        <li><a href="category.php?id=915">其他茶</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=701">饮料冲调</a>
          <ul>
                        <li><a href="category.php?id=916">牛奶乳品</a></li>
                        <li><a href="category.php?id=917">饮料</a></li>
                        <li><a href="category.php?id=918">饮用水</a></li>
                        <li><a href="category.php?id=919">咖啡/奶茶</a></li>
                        <li><a href="category.php?id=920">蜂蜜/柚子茶</a></li>
                        <li><a href="category.php?id=921">冲饮谷物</a></li>
                        <li><a href="category.php?id=922">成人奶粉</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=702">粮油调味</a>
          <ul>
                        <li><a href="category.php?id=923">米面杂粮</a></li>
                        <li><a href="category.php?id=924">食用油</a></li>
                        <li><a href="category.php?id=925">调味品</a></li>
                        <li><a href="category.php?id=926">南北干货</a></li>
                        <li><a href="category.php?id=927">方便食品</a></li>
                        <li><a href="category.php?id=928">有机食品</a></li>
                        <li><a href="category.php?id=935">环球美食</a></li>
                        <li><a href="category.php?id=936">产地直供</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=703">生鲜食品</a>
          <ul>
                        <li><a href="category.php?id=929">水果蔬菜</a></li>
                        <li><a href="category.php?id=930">海鲜水产</a></li>
                        <li><a href="category.php?id=931">海参</a></li>
                        <li><a href="category.php?id=932">牛排</a></li>
                        <li><a href="category.php?id=933">肉禽蛋奶</a></li>
                        <li><a href="category.php?id=934">熟食腊味</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=704">食品礼券</a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=13">营养保健</a>
      <ul>
                <li> <a href="category.php?id=705">营养健康</a>
          <ul>
                        <li><a href="category.php?id=937">调节免疫</a></li>
                        <li><a href="category.php?id=938">调节三高</a></li>
                        <li><a href="category.php?id=939">缓解疲劳</a></li>
                        <li><a href="category.php?id=940">美体塑身</a></li>
                        <li><a href="category.php?id=941">美容养颜</a></li>
                        <li><a href="category.php?id=942">肝肾养护</a></li>
                        <li><a href="category.php?id=943">肠胃养护</a></li>
                        <li><a href="category.php?id=944">明目益智</a></li>
                        <li><a href="category.php?id=945">骨骼健康</a></li>
                        <li><a href="category.php?id=946">改善睡眠</a></li>
                        <li><a href="category.php?id=947">抗氧化</a></li>
                        <li><a href="category.php?id=948">耐缺氧</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=706">营养成分</a>
          <ul>
                        <li><a href="category.php?id=949">维生素/矿物质</a></li>
                        <li><a href="category.php?id=950">蛋白质</a></li>
                        <li><a href="category.php?id=951">鱼油/磷脂</a></li>
                        <li><a href="category.php?id=952">螺旋藻</a></li>
                        <li><a href="category.php?id=953">番茄红素</a></li>
                        <li><a href="category.php?id=954">叶酸</a></li>
                        <li><a href="category.php?id=955">葡萄籽</a></li>
                        <li><a href="category.php?id=956">左旋肉碱</a></li>
                        <li><a href="category.php?id=957">辅酶Q10</a></li>
                        <li><a href="category.php?id=958">益生菌</a></li>
                        <li><a href="category.php?id=959">玛咖</a></li>
                        <li><a href="category.php?id=960">膳食纤维</a></li>
                        <li><a href="category.php?id=961">牛初乳</a></li>
                        <li><a href="category.php?id=962">胶原蛋白</a></li>
                        <li><a href="category.php?id=963">大豆异黄酮</a></li>
                        <li><a href="category.php?id=964">芦荟提取</a></li>
                        <li><a href="category.php?id=965">酵素</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=707">传统滋补</a>
          <ul>
                        <li><a href="category.php?id=966">蜂产品</a></li>
                        <li><a href="category.php?id=967">阿胶</a></li>
                        <li><a href="category.php?id=968">参类</a></li>
                        <li><a href="category.php?id=969">冬虫夏草</a></li>
                        <li><a href="category.php?id=970">燕窝</a></li>
                        <li><a href="category.php?id=971">海参</a></li>
                        <li><a href="category.php?id=972">养生茶饮</a></li>
                        <li><a href="category.php?id=973">鹿茸</a></li>
                        <li><a href="category.php?id=974">灵芝</a></li>
                        <li><a href="category.php?id=975">药食同源</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=708">成人用品</a>
          <ul>
                        <li><a href="category.php?id=976">安全避孕</a></li>
                        <li><a href="category.php?id=977">验孕测孕</a></li>
                        <li><a href="category.php?id=978">人体润滑</a></li>
                        <li><a href="category.php?id=979">情爱玩具</a></li>
                        <li><a href="category.php?id=980">情趣内衣</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=709">保健器械</a>
          <ul>
                        <li><a href="category.php?id=981">血压仪器</a></li>
                        <li><a href="category.php?id=982">血糖用品</a></li>
                        <li><a href="category.php?id=983">养生器械</a></li>
                        <li><a href="category.php?id=984">康复辅助</a></li>
                        <li><a href="category.php?id=985">中医保健</a></li>
                        <li><a href="category.php?id=986">家庭护理</a></li>
                        <li><a href="category.php?id=987">呼吸制氧</a></li>
                      </ul>
        </li>
                <li> <a href="category.php?id=710">急救卫生</a>
          <ul>
                        <li><a href="category.php?id=988">口罩</a></li>
                        <li><a href="category.php?id=989">跌打损伤</a></li>
                        <li><a href="category.php?id=990">防裂抗冻</a></li>
                        <li><a href="category.php?id=991">眼部保健</a></li>
                        <li><a href="category.php?id=992">鼻炎健康</a></li>
                      </ul>
        </li>
              </ul>
    </li>
        <li> <a href="category.php?id=14">彩票、旅行、充值、票务</a>
      <ul>
                <li> <a href="category.php?id=823">彩票</a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=824">通讯充值</a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=825">游戏</a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=826">便利生活</a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=827">演出票务</a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=828">保险</a>
          <ul>
                      </ul>
        </li>
                <li> <a href="category.php?id=829">教育培训</a>
          <ul>
                      </ul>
        </li>
              </ul>
    </li>
      </ul>
</nav><script type="text/javascript" src="themes/default/js/jquery.min.js"></script>
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
