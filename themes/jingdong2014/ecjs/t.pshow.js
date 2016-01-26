/*getCommentSummary*/
(function(){var skuid=$("#name").attr("PshowSkuid"),getCommentUrl="http://club.jd.com/ProductPageService.aspx?method=GetCommentSummaryBySkuId&referenceId={0}&callback=?".format(skuid);$.getJSON(getCommentUrl,function(result){if(!result)return;var domobj=$("#summary");if(!domobj.html()){domobj=$("#summary")}domobj.html("商品评分:<b class=\"star sa"+result.AverageScore+"\"></b><a href=\"#comment\">(已有"+result.CommentCount+"人评价)</a>")})})();
/*20110303*/
function refreshComments(referenceType,parameter){
	var referenceId=$("#name").attr("PshowSkuid");
    if(referenceId!=""){
        var url="http://club.jd.com/clubservice/productcomment-{0}-{1}-{2}.html";
        if(referenceType=="Product"){
            switch (parameter){
			    case "0":
                url=url.format(referenceId,parameter,$.fn.pagination.options0.current_page);
                break;
			    case "1":
                url=url.format(referenceId,parameter,$.fn.pagination.options1.current_page);
                break;
			    case "3":
                url=url.format(referenceId,parameter,$.fn.pagination.options3.current_page);
                break;
			    case "5":
                url=url.format(referenceId,parameter,$.fn.pagination.options5.current_page);
                break;
			    default:
                url=url.format(referenceId,parameter,$.fn.pagination.options0.current_page);
                break
            }
			$.getJSONP(url,getProductComments);  
        }else if(referenceType=="Club"||referenceType=="User"||referenceType=="Question"||referenceType=="Order"||referenceType=="Friend"){
            url="http://club.jd.com/clubservice/comment-{0}-{1}.html".format(referenceType,referenceId);
        	$.getJSONP(url,getCommentSummaryWithComments);
		}		
	}
}
/*usefulComment#20101029*/
$.extend(jdModelCallCenter,{
	usefulComment:function(object){
		$.login({
			modal:true,
			complete: function(result) {
				if (result.IsAuthenticated) {
					var commentId = object.parent().attr("id");
					var isUseful = object.attr("name") == "agree";
					if(object.attr("enabled")!="true"){
					$.ajax({
                    				type: "GET",
                    				url: "http://comm.jd.com/index.php",
                    				data: {
                        				mod: "ProductComment",
                        				action: "saveCommentUserfulVote",
                        				commentId: commentId,
                        				isUseful: isUseful
                    				},
                    				dataType: "jsonp",
                    				success: function(data) {
                        				object.attr("enabled", "true");

                        				if (1 == data.status) {
                            				var count = parseInt(object.attr("title")) + 1;
                            				object.attr("title", count);

                            				if (isUseful) {
                                				object.html("有用(" + count + ")");
                            				} else {
                                				object.html("没用(" + count + ")");
                            				}
                        				}
                    				}
                			});
					}
				}
			}
		});
		mark($("#name").attr("PshowSkuid"), 5);
	}
});
$(".btn-agree,.btn-oppose").livequery("click",function() {
	var current = $(this);
	$.extend(jdModelCallCenter.settings,{
		object:current,
		fn:function(){
			jdModelCallCenter.usefulComment(this.object);
		}
	});
	jdModelCallCenter.settings.fn();
});
/*20110530*/
function GetSnsAvatar(){
	var strPin = "";
	var pins = $("#comment").children("div:visible").find("div.u-icon img");
	if (pins.length > 0)
	{
		for (var i = 0; i < pins.length; i++) {
			strPin += pins[i].attributes["upin"].nodeValue + ",";
		}
		strPin = strPin.substring(0,strPin.lastIndexOf(','));
		$.getJSONP(
			"http://i.jd.com/user/upload/img/show/" + encodeURI(escape(strPin)) + ".html?callback=GetAvatarCallback",
			GetAvatarCallback);
	}
}
function GetAvatarCallback(data) {
	if (data) {
		for (var j = 0; j < data.info.length; j++) {
			if (data.info[j].imgurl.indexOf('no-img') <= 0)
				$("#comment div:visible a:contains('" + data.info[j].pin + "')").parent().prev().find('img').attr('src', data.info[j].imgurl + "_sma_.jpg");
		}
	}
}

/*20100908 产品评论分页*/
$.fn.pagination.options0 =
	{
	    items_per_page: 5,
	    num_display_entries: 5,
	    current_page: 0,
	    num_edge_entries: 2,
	    link_to: "#comment",
	    prev_text: "上一页",
	    next_text: "下一页",
	    ellipse_text: "...",
	    prev_show_always: false,
	    next_show_always: false,
	    callback: pageproductSelected0
	};	
function pageproductSelected0(page_id, jq) {
    $.fn.pagination.options0.current_page = page_id;
    refreshComments("Product","0");
}
$.fn.pagination.options1 =
	{
	    items_per_page: 5,
	    num_display_entries: 5,
	    current_page: 0,
	    num_edge_entries: 2,
	    link_to: "#comment",
	    prev_text: "上一页",
	    next_text: "下一页",
	    ellipse_text: "...",
	    prev_show_always: false,
	    next_show_always: false,
	    callback: pageproductSelected1
	};	
function pageproductSelected1(page_id, jq) {
    $.fn.pagination.options1.current_page = page_id;
    refreshComments("Product","1");
}
$.fn.pagination.options3 =
	{
	    items_per_page: 5,
	    num_display_entries: 5,
	    current_page: 0,
	    num_edge_entries: 2,
	    link_to: "#comment",
	    prev_text: "上一页",
	    next_text: "下一页",
	    ellipse_text: "...",
	    prev_show_always: false,
	    next_show_always: false,
	    callback: pageproductSelected3
	};	
function pageproductSelected3(page_id, jq) {
    $.fn.pagination.options3.current_page = page_id;
    refreshComments("Product","3");
}
$.fn.pagination.options5 =
	{
	    items_per_page: 5,
	    num_display_entries: 5,
	    current_page: 0,
	    num_edge_entries: 2,
	    link_to: "#comment",
	    prev_text: "上一页",
	    next_text: "下一页",
	    ellipse_text: "...",
	    prev_show_always: false,
	    next_show_always: false,
	    callback: pageproductSelected5
	};	
function pageproductSelected5(page_id, jq) {
    $.fn.pagination.options5.current_page = page_id;
    refreshComments("Product","5");
}
function getProductComments(result) {  
    if (!result.CommentSummary)
	    result.CommentSummary = 0;
    $("#cnum0").text("("+result.CommentSummary.CommentCount+")");
        $("#cnum1").text("("+result.CommentSummary.GoodCount+")");
        $("#cnum2").text("("+result.CommentSummary.GeneralCount+")");
        $("#cnum3").text("("+result.CommentSummary.PoorCount+")");
		switch (result.Score)
		{
			case 0:
                $("#comment-0").html(result.GetProductComments.process(result));
                $("#commentsPage"+result.Score).pagination(result.CommentSummary.CommentCount,$.fn.pagination.options0);
				break;
			case 5:
				$("#comment-1").html(result.GetProductComments.process(result));
                $("#commentsPage"+result.Score).pagination(result.CommentSummary.GoodCount,$.fn.pagination.options5);
				break;
			case 3:
				$("#comment-2").html(result.GetProductComments.process(result));
                $("#commentsPage"+result.Score).pagination(result.CommentSummary.GeneralCount,$.fn.pagination.options3);
				break;
			case 1:
				$("#comment-3").html(result.GetProductComments.process(result));
                $("#commentsPage"+result.Score).pagination(result.CommentSummary.PoorCount,$.fn.pagination.options1);
				break;
			default:
				$("#comment-0").html(result.GetProductComments.process(result));
                $("#commentsPage"+result.Score).pagination(result.CommentSummary.CommentCount,$.fn.pagination.options0);
		}
		GetSnsAvatar();
}
/*20110324*/
function getCommentSummaryWithComments(result){
    if(result.ReferenceType==0){			
		$("#discuss-0").html(result.Result);
	}else if(result.ReferenceType==1){
		$("#discuss-2").html(result.Result);
	}else if(result.ReferenceType==2){
		$("#discuss-3").html(result.Result);
	}else if(result.ReferenceType==3){
		$("#discuss-4").html(result.Result);
	}else if(result.ReferenceType==4){
		$("#discuss-1").html(result.Result);
	}
}
/*consultation 0603*/
var consultationServiceUrl="http://club.jd.com/consultationservice.aspx?callback=?";
var referServiceUrl="http://search.jd.com/sayword?callback=?";
$("#consult-0").before("<div class='search'><div class='i-search1'><strong>咨询前请先搜索，方便又快捷：</strong><input type='text' class='text' id='txbReferSearch' value='请输入咨询关键词' onblur=\"if (this.value==''){this.value=this.defaultValue;}\" onfocus=\"if (this.value==this.defaultValue){this.value=''}\" /><input type='button' class='btn-search' id='btnReferSearch' value='搜索' /></div><div class='i-search2'><strong>温馨提示:</strong>因厂家更改产品包装、产地或者更换随机附件等没有任何提前通知，且每位咨询者购买情况、提问时间等不同，为此以下回复仅对提问者3天内有效，其他网友仅供参考！若由此给您带来不便请多多谅解，谢谢！</div></div><div class='result clearfix' id='consult-result' style='display:none'></div><div id='consult-resultlist' style='display:none;'></div>");
$.fn.pagination.options={
	items_per_page:8,
	num_display_entries:5,
	current_page:0,
	num_edge_entries:0,
	link_to:"#consult",
	prev_text:"上一页",
	next_text:"下一页",
	ellipse_text:"...",
	prev_show_always:false,
	next_show_always:false,
	callback:pageSelected
};
function pageSelected(page_id,jq){
	$.fn.pagination.options.current_page=page_id;
	refreshReferList();
}
function refreshReferList(){
	var productId=parseInt($.query.get("id"));
	if(isNaN(productId)||productId==0){
		var result=location.href.match(/(\d+)(.html)/);
		if(result!=null){
			productId=parseInt(result[1]);
		}
	}
	if(productId>0){
		$.getJSON(referServiceUrl,{
			wid:productId,
			keyword:encodeURI($("#txbReferSearch").val()),
			page:$.fn.pagination.options.current_page+1,
			ps:$.fn.pagination.options.items_per_page
		},function(result){
			$("#consult .mc").hide();
			var list=result[0].list;
			var count=result[0].total>=40?40:result[0].total;
			$("#consult-result").css("display","block").html("<div class='fl'>共搜索到<strong>"+count+"</strong>条相关咨询<span id='noneRefer' style='display:none;'>，试试更简短的关键词或更换关键词</span>&nbsp;&nbsp;&nbsp;&nbsp;<a href='#none' id='backConsultations'>返回</a></div><div class='fr'><em>声明：以下回复仅对提问者3天内有效，其他网友仅供参考！</em></div>");
			if(list.length==0){
				$("#noneRefer").show();
				$("#consult-resultlist").empty().hide();
			}else{
				$("#consult-resultlist").empty().show();
				for(var element in list){
				var d1=list[element].sindate.substring(0,list[element].sindate.lastIndexOf(":"));
				var d2=list[element].sindate2.substring(0,list[element].sindate2.lastIndexOf(":"));
				var s2=list[element].sword2?list[element].sword2:"";
				$("#consult-resultlist").append("<div class='item'><div class='user'><spanc lass='u-name'>网友："+list[element].nickname+"</span><span class='date-ask'>"+d1+"</span></div><dl class='ask'><dt><b></b>资讯内容：</dt><dd>"+list[element].sword+"</dd></dl><dl class='answer'><dt><b></b>京东回复：</dt><dd>"+s2+"</dd></dl><div class='useful' id='"+list[element].sid+"'>您对我们的回复：<a class='btn-pleased' href='#none' name='2'>满意</a>(<span>"+list[element].zantong+"</span>)&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a class='btn-unpleased' href='#none' name='2'>不满意</a>(<span>"+list[element].fd+"</span>)</div></div>");}
				$("#consult-resultlist .item:odd").addClass("odd");
				$("#consult-resultlist").append("<div class='clearfix'><div id='ReferPagenation' class='pagin fr' style='margin-top:10px;'></div></div>");
				$("#ReferPagenation").pagination(count,$.fn.pagination.options);
			}
		});
	}
}
$("#btnReferSearch").livequery("click",function(){
	$.fn.pagination.options.current_page=0;
	refreshReferList();
});
$("#txbReferSearch").livequery("keydown",function(event){
	if(event.keyCode==13){
		$("#btnReferSearch").click();
	}
});
$("#txbReferSearch").livequery("click",function(){
	this.value="";
});
$("#backConsultations").livequery("click",function(){
	$("#consult .result").hide();
	$("#consult-resultlist").hide();
	$("#txbReferSearch").val("请输入咨询关键词");
	var index=$("#consult .tab").eq(0).find("li").index($("#consult .tab").eq(0).find("li[class=curr]"));
	$("#consult .tabcon").eq(index).show();
});
$("#consultation").livequery("click",function(){
	$.login({
		returnUrl:$(this).attr("name"),
		complete:function(result){
			if(result.IsAuthenticated){
				location.href=this.returnUrl;
			}
		}
	});
});
$("#login").livequery("click",function(){
	$.login();
});

/*20100527*/
function refreshConsultations(pType){
    var productId=parseInt($.query.get("id"));
    if(isNaN(productId)||productId==0){
        var productId=parseInt($.query.get("wid"));
        if(isNaN(productId)||productId==0){
            var result=location.href.match(/(\d+)(.html)/);
            if(result!=null){
                productId=parseInt(result[1]);
            }
        }
    }
    if(productId>0){
        $.getJSONP("http://club.jd.com/consultationservice.aspx?callback=getConsultations&method=GetConsultations&productId="+productId+"&pType="+pType,getConsultations);
    }
}
/*20100601*/
$(".btn-pleased,.btn-unpleased").livequery("click",function(){var current=$(this);$.login({complete:function(result){if(result.IsAuthenticated!=null&&result.IsAuthenticated){var productId=parseInt($.query.get("id"));if(isNaN(productId)||productId==0){var result=location.href.match(/(\d+)(.html)/);if(result!=null){productId=parseInt(result[1])}}var consultationId=$(current).parent().attr("id");var score=parseInt($(current).attr("name"));if(productId>0){$.getJSON(consultationServiceUrl,{method:"VoteForConsultation",productId:productId,consultationId:consultationId,score:score},function(result){if(result.Result){$(current).text("已投票");$(current).next("span").text(parseInt($(current).next("span").text())+1)}else{$(current).text("已投票")}})}}}});mark(location.href.match(/(\d+).html/)[1],5)});
/*btn-comment*/
$(".btn-comment").livequery("click",function(){var url=$(this).attr("href");$.extend(jdModelCallCenter.settings,{clstag1:0,clstag2:0,fn:function(){jdModelCallCenter.autoLocation(url)}});jdModelCallCenter.settings.fn();return false});
/*20110117*/
function getConsultations(result){if(result.GetConsultations!=null){switch(result.SearchParameter.PType){case 0:$("#consult-0").html(result.GetConsultations.process(result));break;case 2:$("#consult-1").html(result.GetConsultations.process(result));break;case 3:$("#consult-2").html(result.GetConsultations.process(result));break;case 4:$("#consult-3").html(result.GetConsultations.process(result));break;case 5:$("#consult-4").html(result.GetConsultations.process(result));break;default:$("#consult-0").html(result.GetConsultations.process(result));break}}}
/*jqzoom*/
$(function(){$(".jqzoom").jqueryzoom({xzoom:400,yzoom:400,offset:10,position:"right",preload:1,lens:1});$("#spec-list").jdMarquee({deriction:"left",width:300,height:56,step:2,speed:4,delay:10,control:true,_front:"#spec-right",_back:"#spec-left"});$("#spec-list img").bind("mouseover",function(){var src=$(this).attr("src");$("#spec-n1 img").eq(0).attr({src:src.replace("\/n5\/","\/n1\/"),jqimg:src.replace("\/n5\/","\/n0\/")});$(this).css({"border":"2px solid #ff6600","padding":"1px"});}).bind("mouseout",function(){$(this).css({"border":"1px solid #ccc","padding":"2px"});});});
/*jqueryzoom*/
(function($){$.fn.jqueryzoom=function(options){var settings={xzoom:200,yzoom:200,offset:10,position:"right",lens:1,preload:1};if(options){$.extend(settings,options);};var noalt='';$(this).hover(function(){var imageLeft=$(this).offset().left;var imageTop=$(this).offset().top;var imageWidth=$(this).children('img').get(0).offsetWidth;var imageHeight=$(this).children('img').get(0).offsetHeight;noalt=$(this).children("img").attr("alt");var bigimage=$(this).children("img").attr("jqimg");$(this).children("img").attr("alt",'');if($("div.zoomdiv").get().length==0){$(this).after("<div class='zoomdiv'><img class='bigimg' src='"+bigimage+"'/></div>");$(this).append("<div class='jqZoomPup'>&nbsp;</div>");};if(settings.position=="right"){if(imageLeft+imageWidth+settings.offset+settings.xzoom>screen.width){leftpos=imageLeft-settings.offset-settings.xzoom;}else{leftpos=imageLeft+imageWidth+settings.offset;}}else{leftpos=imageLeft-settings.xzoom-settings.offset;if(leftpos<0){leftpos=imageLeft+imageWidth+settings.offset;}};$("div.zoomdiv").css({top:imageTop,left:leftpos});$("div.zoomdiv").width(settings.xzoom);$("div.zoomdiv").height(settings.yzoom);$("div.zoomdiv").show();if(!settings.lens){$(this).css('cursor','crosshair');};$(document.body).mousemove(function(e){mouse=new MouseEvent(e);var bigwidth=$(".bigimg").get(0).offsetWidth;var bigheight=$(".bigimg").get(0).offsetHeight;var scaley='x';var scalex='y';if(isNaN(scalex)|isNaN(scaley)){var scalex=(bigwidth/imageWidth);var scaley=(bigheight/imageHeight);$("div.jqZoomPup").width((settings.xzoom)/(scalex*1));$("div.jqZoomPup").height((settings.yzoom)/(scaley*1));if(settings.lens){$("div.jqZoomPup").css('visibility','visible');}};xpos=mouse.x-$("div.jqZoomPup").width()/2-imageLeft;ypos=mouse.y-$("div.jqZoomPup").height()/2-imageTop;if(settings.lens){xpos=(mouse.x-$("div.jqZoomPup").width()/2 < imageLeft ) ? 0 : (mouse.x + $("div.jqZoomPup").width()/2>imageWidth+imageLeft)?(imageWidth-$("div.jqZoomPup").width()-2):xpos;ypos=(mouse.y-$("div.jqZoomPup").height()/2 < imageTop ) ? 0 : (mouse.y + $("div.jqZoomPup").height()/2>imageHeight+imageTop)?(imageHeight-$("div.jqZoomPup").height()-2):ypos;};if(settings.lens){$("div.jqZoomPup").css({top:ypos,left:xpos});};scrolly=ypos;$("div.zoomdiv").get(0).scrollTop=scrolly*scaley;scrollx=xpos;$("div.zoomdiv").get(0).scrollLeft=(scrollx)*scalex;});},function(){$(this).children("img").attr("alt",noalt);$(document.body).unbind("mousemove");if(settings.lens){$("div.jqZoomPup").remove();};$("div.zoomdiv").remove();});count=0;if(settings.preload){$('body').append("<div style='display:none;' class='jqPreload"+count+"'>360buy</div>");$(this).each(function(){var imagetopreload=$(this).children("img").attr("jqimg");var content=jQuery('div.jqPreload'+count+'').html();jQuery('div.jqPreload'+count+'').html(content+'<img src=\"'+imagetopreload+'\">');});}}})(jQuery);function MouseEvent(e){this.x=e.pageX;this.y=e.pageY;}
/*comment*/
mlazyload({defObj:"#comment",defHeight:-50,fn:function(){$("#comment").jdTab({event:"click",type:"dynamic",source:"data"},function(url,object,n){if (!url){return}refreshComments("Product",url)});}});mlazyload({defObj:"#consult",defHeight:-50,fn:function(){$("#consult").jdTab({type:"dynamic",event:"click",source:"data"},function(url,object,n){switch(url){case"0":refreshConsultations(1);break;case"2":refreshConsultations(2);break;case"3":refreshConsultations(3);break;case"4":refreshConsultations(4);break;case"5":refreshConsultations(5);break;case"7":getDaservice("A-product-02",object);break;case"8":getDaservice("A-product-03",object);break;case"9":getDaservice("A-product-04",object);break}})}});mlazyload({defObj:"#discuss",defHeight:-50,fn:function(){$("#discuss").jdTab({type:"dynamic",event:"click",source:"data"},function(url,object,n){if(!url){return}var referenceType="Club";switch(url){case"4":referenceType="Order";break;case"1":referenceType="User";break;case"2":referenceType="Question";break;case"3":referenceType="Friend";break;default:break;}refreshComments(referenceType,0)})}});function getDaservice(id,object){$.jmsajax({url:"http://www.jd.com/newsserver.asmx",method:"PayExplain",data:{id:id},success:function(data){if(data!=null){object.html(data)}}})};
/*rollWidgets*/
//pannel.gotop.init({element:"#float-bar"},function(){$(document.body).append("<div id='float-bar'><div class='return'><a href='#'>回顶部</a></div></div>");});

/*ie6图片缩放*/
function checkimg(obj,wid){
	var objcon=document.getElementById(obj);
	var imgcell=objcon.getElementsByTagName("img");
	for(var i=0; i<imgcell.length; i++){
 		var imgwid=imgcell[i].width;
		if(imgwid>wid){
			imgcell[i].width=wid;
			}
	}
}
function doResize(){
	if($.browser.version==6&&$.browser.msie){
		checkimg("detail",725);
	}}

doResize();

$(function(){
	$("#hott .tcon:gt(0)").removeClass("online");
	$("#recommend .recommend_cont").eq(2).addClass("no");
})
$.curpid=$("#name").attr("PshowSkuid");
if($.curpid>1000000000){
var showPopTemplete=function(r){
if(r&&r.wareTemplateContent)$("<div>"+r.wareTemplateContent+"</div>").insertBefore("#detail .tabcon .content:first");
if(r&&r.wareTemplateBottomContent)$("<div>"+r.wareTemplateBottomContent+"</div>").insertAfter("#detail .tabcon .content:last");
};
$.getJSONP("http://rms.shop.jd.com/json/wareTemplate/queryWareTemplateContent.action?skuId="+$.curpid+"&jsoncallback=showPopTemplete",showPopTemplete)};

/*$(function(){
		   $(".deal-discount").css("margin-top","70px")
		   })*/