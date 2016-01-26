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
