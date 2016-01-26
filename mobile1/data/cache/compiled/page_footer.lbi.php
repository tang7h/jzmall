<div id="content" class="login-area">
  <div class="login" style="text-align:center">
  	<font id="ECS_MEMBERZONE" style="float:left"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font>
	<span><span style="font-size: 1.2em">地址：</span><a href="<?php echo url('index/location');?>" style="color:#009933"><?php echo $this->_var['city']; ?></a></span>
    <span><span class="new-fr"><a href="#top">回到顶部</a></span></span>
  </div>
  <p class="version"> <a href="#"> 电脑版 </a> <a href="#"> 触屏版 </a> <a href="#"> 苹果客户端 </a> <a class="#"> Android客户端 </a> </p>
  <p class="region"> 
    <?php if ($this->_var['icp_number']): ?> 
    <?php echo $this->_var['lang']['icp_number']; ?>: <a href="#" target="_blank"> <?php echo $this->_var['icp_number']; ?> </a> 
    <?php endif; ?> 
    <?php echo $this->_var['copyright']; ?> </p>
  <div class="favLink region"> <a href="#"> powered by ecmoban </a> </div>
</div>
<input type="hidden" value="<?php echo $this->_var['fixed']; ?>" id="fixed" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.json.js" ></script> 
<script type="text/javascript" src="__PUBLIC__/js/common.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/jquery.more.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/utils.js" ></script> 
<script src="__TPL__/js/TouchSlide.1.1.js"></script> 
<script src="__TPL__/js/ectouch.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/location.js" ></script>
<!--<script src="__TPL__/js/simple-inheritance.min.js"></script> -->
<!--<script src="__TPL__/js/code-photoswipe-1.0.11.min.js"></script> -->
<script src="__PUBLIC__/bootstrap/js/bootstrap.min.js"></script> 
<!--<script src="__TPL__/js/jquery.scrollUp.min.js"></script> -->
<script type="text/javascript" src="__PUBLIC__/js/validform.js" ></script> 
<script language="javascript">
	/*banner滚动图片*/
		TouchSlide({
			slideCell : "#focus",
			titCell : ".hd ul", // 开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
			mainCell : ".bd ul",
			effect : "left",
			autoPlay : true, // 自动播放
			autoPage : true, // 自动分页
			switchLoad : "_src" // 切换加载，真实图片路径为"_src"
		});
	/*弹出评论层并隐藏其他层*/
	function openSearch(){
		 //document.getElementById("search_box").style.display = "none";
			$("#search_box").show();
	}
	function closeSearch(){
			$("#search_box").hide();
	}
</script> 

