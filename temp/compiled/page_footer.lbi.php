<div class="new_footer">
<p>© 2005-2016 今知购 版权所有，并保留所有权利。 ICP备案证书号:京ICP证ace070359号</p>   
</div>

<script>
$(function(){
	isIe6 = false;
	
	if ('undefined' == typeof(document.body.style.maxHeight)) {
		isIe6 = true;
	}

	var offset = $("#topcontrol").offset();		
	var bottom = $("#topcontrol").css("bottom");		
	$(window).scroll(function(){
		if ($(window).scrollTop() > 500){
			$("#topcontrol").fadeIn(800);
			
			if(isIe6)
			{			
				$("#topcontrol").css("position","absolute")	
				$("#topcontrol").css("bottom",bottom)
			}
		}
		else
		{
			$("#topcontrol").fadeOut(500);
		}
		
	});
	
	$("#topcontrol #sider_returntop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});
	
	
	(function(){
		$(".mui-lift-nav").click(function(){
			$(".mui-lift-nav").removeClass("active");
			$(this).addClass("active");
			var index=$(".mui-lift-nav").index(this);
			var top=$(".floor-title").eq(index).offset().top;
			$("body,html").stop().animate({scrollTop:top});
		});
		
		
		var arr=[];
		$(".floor-title").each(function(i){
			arr[i]=$(this).offset().top;
		});
		//alert(arr);
		$(window).scroll(function(){
			
			var top=$(document).scrollTop();
			for(var i=0;i<arr.length;i++){
				if(top>=arr[i] && top<arr[i]+100){
					$(".mui-lift-nav").removeClass("active");
					$(".mui-lift-nav").eq(i).addClass("active");
				}
			}
		});
		
		
		
		
		
	})();
	

})
</script> 


<div id="cart_show" class="m">
	<div class="cart_show_wrap">
			<div class="success">
                <div class="success-b">
                    <h3>商品已成功加入购物车！</h3>
                 
                </div>
                	<div class="clr"></div>
            <div id="initCart_next_go"><a class="btn-pay " href="./flow.php" id="GotoShoppingCart">去结算</a><a class="btn-continue " href="javascript:void(0)" onclick="easyDialog.close();">继续购物</a>
            	<div class="clr"></div>
            </div></div>
			</div>
		</div>
<script>
$(function(){
	$(window).scroll(function(){
		if ($(window).scrollTop() > 300){
			$(".backpanel").fadeIn(500);
		}
		else
		{
			$(".backpanel").fadeOut(500);
		}
		
	});
	
	$(".backtop").click(function(){
		$('body,html').animate({scrollTop:0},500);
		return false;
	});

})

</script>




        
<div id="Floatright_nav">
  <div class="Floatright_box">

     <ul class="mui-tab">
      
        <li class="mui-mbar-tab-logo"><a href="user.php"><div class="left_conts">个人中心<span class="mui-mbar-arr">◆</span></div> </a></li>
        <li class="mui-mbar-tab-cart"><a href="flow.php"><i class="i_sbar_cat"></i><p class="sbar_cart_text">购物袋</p><i class="i_sbar_nub" id="ECS_CARTINFO3">1</i></a></li>
        <li class="logo-qrcode"><div class="mui-mbarp-qrcode-tip"><div class="mui-mbarp-qrcode-hd"><img src="themes/jingdong2014/images/weixin.png"></div><span class="mui-mbarp-qrcode-arr">◆</span></div></li>
        <li class="mui-mbar-tab-logo-asset"><a href="#"><div class="left_conts">我的资产<span class="mui-mbar-arr">◆</span></div> </a></li>
        <li class="tab-logo-brand"><a href="brand.php"><div class="left_conts">我关注的品牌<span class="mui-mbar-arr">◆</span></div> </a></li>
        <li class="mui-mbar-favor"><a href="user.php?act=collection_list"><div class="left_conts">我的收藏<span class="mui-mbar-arr">◆</span></div> </a></li>
        
        
        <li class="tab-logo-top"  id="topcontrol2" style="display:none; overflow: visible;"><a href="javascript:void(0);" id="sider_returntop2" style="display:block"><div class="left_conts">返回顶部<span class="mui-mbar-arr">◆</span></div></a></li>
     </ul>
     
</div>

</div>


<script type="text/javascript">
  $(function(){
    
    $(".mui-tab li").hover(function(){
      $(this).addClass("on");
      $(this).find(".left_conts").css("display","block").stop(true,false).animate({"right":0,"opacity":1},200);
    },function(){
      
      $(this).removeClass("on");
      $(this).find(".left_conts").stop(true,false).animate({"right":70,"opacity":0},200,function(){
        $(this).hide();
      });
        
      
    });
    
    $(".logo-qrcode").hover(function(){
      $(this).children(".mui-mbarp-qrcode-tip").css("visibility","visible");
    },function(){
      $(this).children(".mui-mbarp-qrcode-tip").css("visibility","hidden");
    });
  
  });
  //
  var h=$(".Floatright_box").height();
  $(".Floatright_box").css({"margin-top":-h/2});        
</script>

<script>
$(function(){
  isIe6 = false;
  
  if ('undefined' == typeof(document.body.style.maxHeight)) {
    isIe6 = true;
  }

  var offset = $("#topcontrol2").offset();    
  var bottom = $("#topcontrol2").css("bottom");   
  $(window).scroll(function(){
    if ($(window).scrollTop() > 500){
      $("#topcontrol2").fadeIn(800);
      
      if(isIe6)
      {     
        $("#topcontrol2").css("position","absolute")  
        $("#topcontrol2").css("bottom",bottom)
      }
    }
    else
    {
      $("#topcontrol2").fadeOut(500);
    }
    
  });
  
  $("#topcontrol2,#sider_returntop2").click(function(){
    $('body,html').animate({scrollTop:0},500);
    return false;
  });

})
</script> 

