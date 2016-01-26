
	
			//楼层中标签切换样式
			if($("body").attr("class")!="full"){
				$(".channel_logo").each(function() {
					$(this).find("li").slice(6).remove();
				});
				$(".activityCenter").each(function() {
					$(this).find("li").slice(4).remove();
				});
				$(".floor8 ul").each(function() {
					$(this).find("li").slice(4).remove();
				});
				$(".channel_main_r").remove();
				$(".channel_title").each(function() {
					if($(this).find("ul").attr("class")!="channel_t"){
						$(this).find("li:eq(0)").mouseover(function(){
							channeltabHot($(this).attr("ID"),'185px','186px');
							return false; 
						});
						$(this).find("li:gt(0)").mouseover(function(){
							channelTab($(this).attr("ID"),'443px','100px','100px');
							return false; 
						});
					}else{
						$(this).find("li:eq(0)").mouseover(function(){
							channeltabHot($(this).attr("ID"),'249px','248px');
							return false; 
						});
						$(this).find("li:gt(0)").mouseover(function(){
							channelTab($(this).attr("ID"),'516px','110px','120px');
							return false; 
						});
					};
				});
			}else{
				$(".channel_title").each(function() {
					if($(this).find("ul").attr("class")!="channel_t"){
						$(this).find("li:eq(0)").mouseover(function(){
							channeltabHot($(this).attr("ID"),'244px','243px');
							return false; 
						});
						$(this).find("li:gt(0)").mouseover(function(){
							channelTab($(this).attr("ID"),'649px','108px','108px');
							return false; 
						});
					}else{
						$(this).find("li:eq(0)").mouseover(function(){
							channeltabHot($(this).attr("ID"),'244px','366px');
							return false; 
						});
						$(this).find("li:gt(0)").mouseover(function(){
							channelTab($(this).attr("ID"),'649px','108px','219px');
							return false; 
						});
					};
				});
		};
		//-----楼层8其它频道链接鼠标效果
		$(".floor8 ul li a").hover(function() {
			$(this).append("<b></b>");
			var othFimgW = $(this).find("img").width()-4;
			var othFimgH = $(this).find("img").height()-4;
			$(this).find("b").css({"width":othFimgW+"px","height":othFimgH+"px"})
		},function(){
			$(this).find("b").remove();
		});
		
	
	








//焦点图插件

