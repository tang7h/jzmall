
<link href="themes/<?php echo $GLOBALS['_CFG']['template']; ?>/suggest.css" rel="stylesheet" type="text/css" />

<?php echo $this->smarty_insert_scripts(array('files'=>'jquery-1.9.1.min.js,jquery.json.js,jd_common.js,easydialog.min.js,jquery.SuperSlide.js')); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js,jquery.SuperSlide.js,suggest.js')); ?>
<link rel="stylesheet" type="text/css" href="themes/jingdong2014/css/new-style.css">
    <div class="new_top">
        <div class="new_logo">
            <a href="index.php"><img src="themes/jingdong2014/images/logo.gif" alt="logo"></a>
        </div>
        <div class="new_main">
            <div class="shoucang">
                <a href="javascript:addToFavorite()" rel="nofollow"> <img src="themes/jingdong2014/images/shoucang.png"/>收藏本站</a>
            </div>
            <div class="shoucang">
                <a href="javascript:addToFavorite()" rel="nofollow"><img src="themes/jingdong2014/images/xihuan.png"/ > 关注我们</a>
            </div>
    
    <script type="text/javascript" >
        function omover() {
            var divlist = document.getElementById("app_phone");
            divlist.style.display = "block";
        }
        function omout() {
            var divlist = document.getElementById("app_phone");
            divlist.style.display = "none";
        }
         
    </script>
    
            <div class="shoucang"  onmouseover ="omover();" onmouseout ="omout();">
                <a href="javascript:addToFavorite()" rel="nofollow"><img src="themes/jingdong2014/images/phone.png"/ > 手机今知</a>
                <div class="dd" id="app_phone">
                    <div><a href="#" target="_blank"><img src="themes/jingdong2014/images/538557daNd249a428.png"></a></div>
                </div>
            </div>
            
        </div>
        <div class="new_search">
            <form id="searchForm" name="searchForm" method="get" action="search.php" onSubmit="return checkSearchForm()">
          
                <input style="width:520px;height:25px;margin:8px 0 0 0;" autocomplete="off" name="keywords" onKeyUp="lookup(this.value);" class="text" accesskey="s"  type="text" id="keyword" value="<?php echo htmlspecialchars($this->_var['search_keywords']); ?>"/>        

                <input style="width:73px;height:30px;position:absolute;margin-top:8px; background-color:#c40000;color:#FFF;" type="submit" value="搜索" class="button">
            </form>
            <ul class="hot-query">
            <script type="text/javascript">
              
              <!--
              function checkSearchForm()
              {   
                  if(document.getElementById('keyword').value)
                 
                  {
                      return true;
                  }
                  else
                  {
                      alert("<?php echo $this->_var['lang']['no_keywords']; ?>");
                      return false;
                  }
              }
              -->
              
            </script> 
            </ul>
        </div>
        
            <div class="suggestions_box" id="suggestions" style="display:none;">
                <div class="suggestions_list" id="auto_suggestions_list">
                &nbsp;
                </div>
            </div>
         
    
    
            <div class="new_login">
                <ul>
                    <li style="float:right;margin-top: 5px;"><?php echo $this->smarty_insert_scripts(array('files'=>'transport_jquery.js,utils.js')); ?>
   <font id="ECS_MEMBERZONE"><?php 
$k = array (
  'name' => 'member_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </font></li>
                </ul>
            </div>
            
    </div>
<div style="width:100%;height:45px;"></div>
    <div class="new_blank">
        
        <div class="w">
    <div id="nav-2013">
      <div id="categorys-2013" class="categorys-2014 <?php if ($this->_var['script_name'] != 'index'): ?>no_index<?php endif; ?>">
        <div class="mt ld">
          <h2><a href="javascript:;">全部商品分类<b></b></a></h2>
        </div>
        <div id="_JD_ALLSORT" class="mc">
             <?php $_from = $this->_var['categories']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['foo']['iteration']++;
?>
          <div class="item fore<?php echo $this->_foreach['foo']['iteration']; ?>"> <span>
            <h3><a href="<?php echo $this->_var['cat']['url']; ?>"><?php echo htmlspecialchars($this->_var['cat']['name']); ?></a></h3>
            <s></s></span>
            <div class="i-mc" style="top: 3px; ">
              <div onclick="$(this).parent().parent().removeClass('hover')" class="close">×</div>
              <div class="subitem">
              
                <?php $_from = $this->_var['cat']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'child');$this->_foreach['foo2'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo2']['total'] > 0):
    foreach ($_from AS $this->_var['child']):
        $this->_foreach['foo2']['iteration']++;
?>
                <dl class="fore<?php echo $this->_foreach['foo2']['iteration']; ?>">
                  <dt><a href="<?php echo $this->_var['child']['url']; ?>"><?php echo htmlspecialchars($this->_var['child']['name']); ?></a></dt>
                  <dd> <?php $_from = $this->_var['child']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'childer');if (count($_from)):
    foreach ($_from AS $this->_var['childer']):
?> <em><a href="<?php echo $this->_var['childer']['url']; ?>"><?php echo htmlspecialchars($this->_var['childer']['name']); ?></a></em><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </dd>
                </dl>
                
                  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
    
              </div>
              <div class="cat-right-con fr" id="JD_sort_a">
                <dl class="categorys-promotions">
                  <dd>
                    <ul>
                      <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '左侧导航广告1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
                      <li> <?php 
$k = array (
  'name' => 'ads_pro',
  'cat_name' => $this->_var['cat']['name'],
  'type' => '左侧导航广告2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?> </li>
                    </ul>
                  </dd>
                </dl>
                <dl class="categorys-brands">
                  <dt>推荐品牌</dt>
                  <dd>
                    <ul>
                      <?php $_from = $this->_var['cat']['brands']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'brands');$this->_foreach['brands_no'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['brands_no']['total'] > 0):
    foreach ($_from AS $this->_var['brands']):
        $this->_foreach['brands_no']['iteration']++;
?>
                       <?php if ($this->_foreach['brands_no']['iteration'] < 19): ?>
                      <li><a href="<?php echo $this->_var['brands']['url']; ?>" target="_blank"><?php echo $this->_var['brands']['brand_name']; ?></a></li>
                      <?php endif; ?>
                     <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
                    </ul>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
          
        </div>
      </div>
      <ul id="navitems-2013">
      
            <li class="fore1 <?php if ($this->_var['navigator_list']['config']['index'] == 1): ?>curr<?php endif; ?>"><a href="./index.php"><?php echo $this->_var['lang']['home']; ?></a></li>
  <?php $_from = $this->_var['navigator_list']['middle']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['foo']['iteration']++;
?>
  <li class="fore<?php echo $this->_foreach['foo']['iteration']; ?> <?php if ($this->_var['nav']['active'] == 1): ?>curr<?php endif; ?>"><a href="<?php echo $this->_var['nav']['url']; ?>" <?php if ($this->_var['nav']['opennew'] == 1): ?>target="_blank" <?php endif; ?>><?php echo $this->_var['nav']['name']; ?></a></li>

 <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
 
      
     
      </ul>
      <div class="banner_ad">
          <div class="banner_ad1">
                <a href="" > <img src="themes/jingdong2014/images/a1.jpg"alt="商家入驻" width="100%"></a>
          </div>
          <div class="banner_ad2">
                <a href="" > <img src="themes/jingdong2014/images/a2.jpg"alt="商家入驻" width="100%"></a>
          </div>
          </div>
      </div>
    </div>
  </div>
    </div>



   <div class="new_top-nav">
          <span class="new_menu"></span>
          <ul>
            <li>
            <div id="my360buy-2013">
      <dl>
        <dt class="ld"><s></s><a class="hvr-sweep-to-bottom color" href="user.php">我的</a></dt>
        <dd>
          <div class="prompt"> <span class="fl"><strong></strong></span> <span class="fr"><a href="user.php">去知了首页&nbsp;&gt;</a></span> </div>
          <div id="jduc-orderlist">
            <div class="orderlist">
              <div class="smt">
                <h4>订单状态：</h4>
                <div class="extra"><a href="user.php?act=order_list" target="_blank">所有订单&nbsp;&gt;</a></div>
              </div>
              <div class="smc">
                <ul>
                </ul>
              </div>
            </div>
          </div>

          <div class="uclist">
            <ul class="fore1 fl">
              <li><a target="_blank" href="user.php?act=address_list">收货地址&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=booking_list">缺货登记&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=profile">用户信息&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=collection_list">我的收藏&nbsp;&gt;</a></li>
            </ul>
            <ul class="fore2 fl">
              <li><a target="_blank" href="user.php?act=message_list">我的留言&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=comment_list">我的评论&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=bonus">我的红包&nbsp;&gt;</a></li>
              <li><a target="_blank" href="user.php?act=bonus">资金管理&nbsp;&gt;</a></li>
            </ul>
          </div>
          
          <div class="viewlist" id="history_div">
            <div class="smt">
              <h4>最近浏览：</h4>
            </div>
            <div class="smc" id="jduc-viewlist">
              <ul class="lh hide" style="display: block;" id="history_list">
                     <?php 
$k = array (
  'name' => 'history2',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
              </ul>
            </div>
          </div>
            <script type="text/javascript">
            if (document.getElementById('history_list').innerHTML.replace(/\s/g,'').length<1)
            {
                document.getElementById('history_div').style.display='none';
            }
            else
            {
                document.getElementById('history_div').style.display='block';
            }
            function clear_history()
            {
            Ajax.call('user.php', 'act=clear_history',clear_history_Response, 'GET', 'TEXT',1,1);
            }
            function clear_history_Response(res)
            {
            document.getElementById('history_list').innerHTML = '<center><?php echo $this->_var['lang']['no_history']; ?></center>';
            }
            </script>
          
        </dd>
      </dl>
    </div>
    
            </li>
            <li >
    <div id="ECS_CARTINFO" class="settleup-2013">
       <?php 
$k = array (
  'name' => 'cart_info',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
    </li>
    <script language="javascript" type="text/javascript">  
function showDiv(){  
document.getElementById('popDiv').style.display='block';  
document.getElementById('popIframe').style.display='block';  
document.getElementById('bg').style.display='block';  
}  
function closeDiv(){  
document.getElementById('popDiv').style.display='none';  
document.getElementById('bg').style.display='none';  
document.getElementById('popIframe').style.display='none';  
}  
</script>
            <li><a  href="javascript:showDiv()" class="hvr-sweep-to-bottom color2"><p>Blog</p></a>

            <div id="popDiv" class="mydiv" style="display:none;">
              

              <div class="box" style="height: 520px;width: 1200px;">
    <h5 style=" padding-bottom: 0px; margin-bottom: 0px; border-bottom-width: 0px; background-color: #A5A5A5;">我附近的商家</h5>
  <div class="boxCenterList" style="padding-left: 0px; padding-right: 0px;padding-bottom: 0px;">
    <div id="allmap"></div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=BLuLBrTfuMSF85592olt80FC"></script>
    <script type="text/javascript">
  // 百度地图API功能
  var map = new BMap.Map("allmap");
  var point = new BMap.Point(116.331398,39.897445);
  map.centerAndZoom(point,11);//地图默认放大倍数
  function myFun(result){
    var cityName = result.name;
    map.setCenter(cityName);
/*******************弹窗显示地理位置**************************/
   /* alert("当前定位城市:"+cityName);*/
  }
/*******************结束**************************/
  var myCity = new BMap.LocalCity();
  myCity.get(myFun);
  
  var pointArray = new Array();
  map.enableScrollWheelZoom();   //启用滚轮放大缩小，默认禁用
      map.enableContinuousZoom();    //启用地图惯性拖拽，默认禁用
      //设置需要在地图上显示的点
 var json_data =  <?php echo $this->_var['map_api']; ?>;
  for(var i=0;i<json_data.length;i++){
    
    //在百度地图上添加想要显示的点的经纬度
    var marker = new BMap.Marker(new BMap.Point(json_data[i][0], json_data[i][1])); // 创建点
    map.addOverlay(marker);    //增加点
    pointArray[i] = new BMap.Point(json_data[i][0], json_data[i][1]);
/*****************增加点击弹窗*********************/
    marker.addEventListener("click",attribute);
    
    /*****************点击弹窗结束*********************/
}
//让所有点在视野范围内
 /* map.setViewport(pointArray);*/
  
   //获取覆盖物位置
  function attribute(e){
    var p = e.target;
      var pointArray =  <?php echo $this->_var['map_api']; ?>;
      for(var i=0;i<pointArray.length;i++){
        if(pointArray[i][0]==p.getPosition().lng&&p.getPosition().lat==pointArray[i][1]){
              var sContent ="<div>"+
                "<h4 style='margin:0 0 5px 0;padding:0.2em 0'>"+json_data[i][2]+"</h4>" + 
                    "<a href='"+json_data[i][6]+"' target='_blank'>点击进入店铺</a>"+
                "<img style='float:right;margin:4px' id='imgDemo' src='"+json_data[i][3]+"' width='139' height='104' title='"+json_data[i][4]+"'/>" + 
                "<p style='margin:0;line-height:1.5;font-size:13px;text-indent:2em'>"+json_data[i][5]+"</p>" + 
                "</div>";
              var infoWindow = new BMap.InfoWindow(sContent,{enableMessage:false});  // 创建信息窗口对象
              this.openInfoWindow(infoWindow); 
        }
    }

       
     
  
  }
  

    </script>
  </div>
</div>

              <a href="javascript:closeDiv()">关闭窗口</a>  
            </div>  
<div id="bg" class="bg" style="display:none;">  
</div>   
<iframe id='popIframe' class='popIframe' frameborder='0' ></iframe></li>
            <li><a href="typo.html" class="hvr-sweep-to-bottom color3"><p>Events</p></a></li>
            <li><a href="mail.html" class="hvr-sweep-to-bottom color4"><p>Mail</p></a></li>
          </ul>
          
        <script>
          $("span.new_menu").click(function(){
            $(".new_top-nav ul").slideToggle(500, function(){
            });
          });
      </script>       
    </div>




