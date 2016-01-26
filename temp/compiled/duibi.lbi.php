



<style type="text/css">
/* 本例子css */
.duibi_box{  
position: fixed;
bottom: 0px; height:133px;
right: 50%;
margin-right: -495px;
z-index: 100;
width: 990px;
height: 139px;
background: #fff;
-moz-box-shadow: 0 0 15px rgba(221,221,221,.8);
-webkit-box-shadow: 0 0 15px rgba(221,221,221,.8);
box-shadow: 0 0 15px rgba(221,221,221,.8);
}
.root61 .duibi_box{
margin-right: -606px;
}
.duibi_box .parHd{position: relative;}
.duibi_box .parHd ul{ height: 32px;
border: 1px solid #ddd;
border-bottom: 2px solid #7abd54;  }
.duibi_box .parHd ul li{float: left;
position: relative;
width: 80px;
height: 30px;
line-height: 30px;
text-align: center;
font: 14px/30px 'microsoft yahei'; cursor:pointer  }
.duibi_box .parHd ul li.on{ position: relative;
left: -1px;
margin-top: -4px;
height: 36px;
background: #fff;
border: 2px solid #7abd54;
border-bottom: 0; color: #7abd54;}
.duibi_box .parHd .operate {
width: 190px;
text-align: right;
position: absolute;
right: 0;
top: 0;
padding-right: 22px;
height: 30px;
line-height: 30px;
clear: both;
}
.duibi_box .parHd .operate  a{color: #005aa0;}

.duibi_box .parBd {border: 2px solid #7abd54;
border-top: 0; position:relative}
.duibi_box .parBd div.diff-items {
padding: 6px;
color: #ccc;
height: 90px;
overflow: hidden;
}
.duibi_box .parBd div.diff-items dl{
float: left;
overflow: hidden;
margin-right: 10px;
padding: 17px 10px 12px 0;
border-right: 1px dotted #7abd54;
}
.duibi_box .parBd div.diff-items dl dt{

float: left;
margin-right: 5px;
width: 48px;
height: 48px;
text-align: center;
color: #ccc;
border: 1px solid #fff;
font: 36px/48px arial;
overflow: hidden;}
.duibi_box .parBd div.diff-items dl dd{
float: left;
width: 140px;}
.duibi_box .parBd  a.diff-item-name {
height: 3em;
line-height: 1.5em;
overflow: hidden;
display: block;
color: #333;
}
.duibi_box .parBd  .del-comp-item{
visibility: hidden;
color: #005aa0;
}

.hide-me,.diff-operate a,.del-items{color: #005aa0;}

.del-items:hover, .btn-compare:hover, .del-comp-item:hover {
cursor: pointer;
}
.hide-me, .diff-operate a {
color: #005aa0;
}




.duibi_box .parBd .diff-operate {
position: absolute;
right: 22px;
top: 22px;
width: 85px;
text-align: center; 

}
 
.compare-active {
 
}
.compare-active input{border: 0;
color: #fff;
background-color: #E74649;
background-image: -ms-linear-gradient(top,#E74649 0,#DF3033 100%);
background-image: -moz-linear-gradient(top,#E74649 0,#DF3033 100%);
background-image: -o-linear-gradient(top,#E74649 0,#DF3033 100%);
background-image: -webkit-gradient(linear,left top,left bottom,color-stop(0,#E74649),color-stop(1,#DF3033));
background-image: -webkit-linear-gradient(top,#E74649 0,#DF3033 100%);
background-image: linear-gradient(to bottom,#E74649 0,#DF3033 100%);
cursor: pointer;}
#goto-contrast:hover {
text-decoration: none;
}
.compare-active input{
display: block;
width: 59px;
height: 30px;
font: 700 14px/30px verdana;
margin-left: 13px;
margin-bottom: 11px;
border-radius: 3px;
color: #fff;
}
.duibi_box  span.no-prev, .duibi_box  #sc-prev.disabled {
background-position: 0 -100px;
cursor: default;
}

.duibi_box .scroll-item {
position: relative;
height: 90px;
}
 
.duibi_box .scroll-item {
padding: 6px 10px;
_padding: 10px;
}

.duibi_box .sb-prev {
float: left;
background-position: 0 0;
}
 
.duibi_box  .sb-next {
float: right;
background-position: -16px 0;
}


.duibi_box  .sb-next li {
float: left;
height: 84px;
overflow: hidden;  
}

.duibi_box .sNext{
position:absolute; right:12px; top:36px;
background-position: -16px 0;
}
.duibi_box .sPrev{
position:absolute; left:12px; top:36px;
background-position: 0 0;
}
.duibi_box .scroll-btn {
z-index: 10;
width: 14px;
height: 50px;
text-indent: -9999px;
overflow: hidden;
cursor: pointer;
background-image: url(themes/jingdong2014/images/duibi-arr.png);
background-repeat: no-repeat;
}

.duibi_box .btn-compare-s{
float: left;
width: 58px;
height: 21px;
background: url(themes/jingdong2014/images/duibi-btns.png) 0 0px no-repeat;
overflow: hidden;
line-height: 100px;
margin-right: 10px;
}

.duibi_box .btn-compare-s_red{
float: left;
width: 58px;
height: 21px;
background: url(themes/jingdong2014/images/duibi-btns.png) 0 -23px no-repeat;
_background: url(themes/jingdong2014/images/duibi-btns.png) 0 -24px no-repeat;
overflow: hidden;
line-height: 100px;
margin-right: 10px;
}




#compareLink{ border:1px #ddd solid; background:#f5f5f5; color:#333; display: inline-block; cursor:pointer; padding:0 3px; text-decoration:none;-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;}
 #compareLink *{vertical-align:middle; cursor:pointer}

#compareLink_on{ border:1px #ddd solid; background:#E53C3F; color:#FFFFFF; display: inline-block; cursor:pointer; padding:0 3px; text-decoration:none;-moz-border-radius: 2px;
-webkit-border-radius: 2px;
border-radius: 2px;}
 #compareLink_on *{vertical-align:middle; cursor:pointer}
 
 
 
 #compare_button
</style>


 
		<div class="duibi_box"  id="slideTxtBox">
			<div class="parHd">
				<ul>
				<li id="duibilan_text" class="on" onClick="dis_duibilan();">对比栏</li>
				<li id="cat_history_text" onClick="dis_history();">最新浏览</li> 
				</ul>
				<div class="operate"><a href="javascript:hide_dis();" class="hide-me">隐藏</a></div>
			</div>
			<div class="parBd">
					<div class="slideBox5" id="duibilan">
					<ul> 
					<div id="diff-items" class="diff-items clearfix">
						<dl class="hasItem" id="compare_goods1">  
							<dt>      
								
								1
							</dt>
							<dd>
								您还可以继续添加
							</dd>
						</dl>


						<dl class="hasItem"  id="compare_goods2">  
							<dt>      
								2
							</dt>
							<dd>
								您还可以继续添加
							</dd>
						</dl>


						<dl class="hasItem"  id="compare_goods3">  
							<dt>      
								3 
							</dt>
							<dd>
								您还可以继续添加 
							</dd>
						</dl>



						<dl class="hasItem"  id="compare_goods4">  
							<dt>      
								4 
							</dt>
							<dd>
								您还可以继续添加 
							</dd>
						</dl>
					</div>
					<div class="diff-operate"><a id="compare_button" class="compare-active" style="color:#FFF"></a><a id="qingkong" class="del-items">清空对比栏</a></div>
					</ul>
					 
					</div>

					<div class="slideBox5" id="cat_history">
					<div id="diff-items" class="diff-items clearfix">
						 
						<ul> 
							<?php 
$k = array (
  'name' => 'history_arr',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
							
						</ul>
						<a class="scroll-btn sPrev" id="left_btn_duibi" href="javascript:void(0)"><span><</span></a>
						<a class="scroll-btn sNext" id="right_btn_duibi" href="javascript:void(0)"><span>></span></a>
						
						
						
					</div>	
					</div>

					

			</div>
		</div>
  
		<script type="text/javascript">
			jQuery(".duibi_box .slideBox5").slide({mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});

			jQuery(".duibi_box").slide({titCell:".parHd li",mainCell:".parBd",trigger:"click"});

		</script>


		<script type="text/javascript">
			//jQuery(".duibi_box .slideBox5").slide({mainCell:"ul",vis:4,prevCell:".sPrev",nextCell:".sNext",effect:"leftLoop"});

			//jQuery(".duibi_box").slide({titCell:".parHd li",mainCell:".parBd",trigger:"click"});
			document.getElementById('left_btn_duibi').style.display = 'none';
			document.getElementById('right_btn_duibi').style.display = 'none';
			document.getElementById('slideTxtBox').style.display = 'none';
			function duibi_submit(obj,id)
			{
				if(id)
				{
					var goods_name = document.getElementById('history_name' + id).value;
					var goods_img = document.getElementById('history_img' + id).value;
					var market_price = document.getElementById('history_market' + id).value;
					var shop_price = document.getElementById('history_shop' + id).value;
					var goods_type = document.getElementById('history_type' + id).value;
					Compare.add(obj, id, goods_name, goods_type, goods_img, market_price, shop_price, 0, 1, 0);
					//document.getElementById('history_select' + id).value = 0;
					//obj.className = 'btn-compare-s';
				}
			}
			
			/*
			function onchangeBtnClass(obj, id)
			{
				obj.className = 'btn-compare-s_red';
			}
			*/

			function RemoveBtnClass(obj, id)
			{
				if(document.getElementById('history_select' + id).value == 1)
				{
					obj.className = 'btn-compare-s_red';
				}
				else
				{
					obj.className = 'btn-compare-s';
				}
			}

			function hide_dis()
			{
				if(document.getElementById('slideTxtBox'))
				{
					document.getElementById('slideTxtBox').style.display = 'none';
				}
			}

			function dis_duibilan()
			{
			
				document.getElementById('left_btn_duibi').style.display = 'none';
				document.getElementById('right_btn_duibi').style.display = 'none';
				document.getElementById('duibilan_text').className = 'on';
				document.getElementById('cat_history_text').className = '';
				document.getElementById('duibilan').style.display = 'block';
				document.getElementById('cat_history').style.display = 'none';
			}

			function dis_history()
			{
			
				document.getElementById('left_btn_duibi').style.display = 'block';
				document.getElementById('right_btn_duibi').style.display = 'block';
				document.getElementById('duibilan_text').className = '';
				document.getElementById('cat_history_text').className = 'on';
				document.getElementById('duibilan').style.display = 'none';
				document.getElementById('cat_history').style.display = 'block';
			}
		</script>


