<!-- $Id: setting_first.htm 16339 2009-06-24 08:01:25Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,../js/region.js')); ?>
<div class="main-div">
<div class="step1">1111</div>
<form action="index.php?act=second" name="theForm" method="post" onsubmit="return validator()" enctype="multipart/form-data" >
  <table cellspacing="1" cellpadding="3" width="100%">
    <tr>
      <td class="micro-label">然并卵:</td>
      <td><input type="text" name="shop_name" value="<?php echo $this->_var['shop_info']['shop_name']; ?>" /></td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_title']; ?>:</td>
      <td><input type="text" name="shop_title" value="<?php echo $this->_var['shop_info']['shop_title']; ?>" /></td>
    </tr>
    <tr>
      <td class="micro-label">搴楅摵鍏抽敭瀛?</td>
      <td><input type="text" name="shop_keyword" value="<?php echo $this->_var['shop_info']['shop_keyword']; ?>" />
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_country']; ?>:</td>
      <td>
         <select name="shop_country" id="selCountries" onchange="region.changed(this, 1, 'selProvinces')">
           <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
           <?php $_from = $this->_var['countries']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
             <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['shop_info']['country']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </select>                
       </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_province']; ?>:</td>
      <td>
         <select name="shop_province" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
           <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
             <?php $_from = $this->_var['provinces']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
               <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['shop_info']['province']): ?>selected<?php endif; ?>> <?php echo $this->_var['region']['region_name']; ?></option>
             <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
         </select>
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_city']; ?>:</td>
      <td>
        <select name="shop_city" id="selCities">
          <option value=''><?php echo $this->_var['lang']['select_please']; ?></option>
            <?php $_from = $this->_var['cities']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'region');if (count($_from)):
    foreach ($_from AS $this->_var['region']):
?>
              <option value="<?php echo $this->_var['region']['region_id']; ?>" <?php if ($this->_var['region']['region_id'] == $this->_var['shop_info']['city']): ?>selected<?php endif; ?>><?php echo $this->_var['region']['region_name']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select>
      </td>
    </tr>
    <tr>
      <td class="micro-label"><?php echo $this->_var['lang']['shop_address']; ?>:</td>
      <td><input type="text" name="shop_address" value="<?php echo $this->_var['shop_info']['shop_address']; ?>" /></td>
    </tr>
    <tr>
      <td class="micro-label">瀹㈡湇QQ鍙风爜:</td>
      <td><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_qq']; ?>" name="kf_qq">
		  <br>
          <!--<span id="noticeqq" class="notice-span">濡傛灉鎮ㄦ湁澶氫釜瀹㈡湇鐨凲Q鍙风爜锛岃鍦ㄦ瘡涓彿鐮佷箣闂翠娇鐢ㄥ崐瑙掗€楀彿锛?锛夊垎闅斻€?/span>-->
      </td>
    </tr>
    <tr>
      <td class="micro-label">瀹㈡湇娣樺疂鏃烘椇:</td>
      <td><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_ww']; ?>" name="kf_ww">
		  <br>
          <!--<span id="noticeqq" class="notice-span">濡傛灉鎮ㄦ湁澶氫釜瀹㈡湇鐨勬椇鏃哄彿鐮侊紝璇峰湪姣忎釜鍙风爜涔嬮棿浣跨敤鍗婅閫楀彿锛?锛夊垎闅斻€?/span>-->
      </td>
    </tr>
    <tr>
      <td class="micro-label">瀹㈡湇鐢佃瘽:</td>
      <td><input type="text" size="40" value="<?php echo $this->_var['shop_info']['kf_tel']; ?>" name="kf_tel">
      </td>
    </tr>
    <tr>
        <td class="micro-label">鍟嗗簵 Logo: </td>
        <td>
             <input type="file" name="shop_logo"/>
             <?php if ($this->_var['shop_info']['shop_logo']): ?>
             <img src="<?php echo $this->_var['shop_info']['shop_logo']; ?>" width="150" /> 
             <?php endif; ?>   
                     
        </td>
    </tr>
    <tr>
      <td class="micro-label">棣栭〉鏍峰紡:</td>
      <td><input type="radio" name="shop_style" value="1" <?php if ($this->_var['shop_info']['shop_style']): ?>checked="true"<?php endif; ?>/>鏄剧ず宸︿晶&nbsp;&nbsp;<input type="radio" name="shop_style" value="0" <?php if ($this->_var['shop_info']['shop_style'] == 0): ?>checked="true"<?php endif; ?>/>鍘绘帀宸︿晶
      <br/>(閫夋嫨鈥樺幓鎺夊乏渚р€欏皢涓嶆樉绀哄簵閾洪椤靛乏渚т俊鎭紝棣栭〉鎴愬崟椤电姸鎬?
      </td>
    </tr>
    <tr>
      <td class="micro-label">鏄惁鐢宠鍔犲叆搴楅摵琛?</td>
      <td><input type="radio" name="apply" value="1" <?php if ($this->_var['shop_info']['apply']): ?>checked="true"<?php endif; ?>/>鏄?nbsp;&nbsp;<input type="radio" name="apply" value="0" <?php if ($this->_var['shop_info']['apply'] == 0): ?>checked="true"<?php endif; ?>/>鍚?
      <br/>(閫夋嫨鈥樻槸鈥?缃戠珯绠＄悊鍛樺皢瀹℃牳淇℃伅,閫氳繃鍚庢墠鍙樉绀哄湪缃戠珯搴楅摵琛?
      </td>
    </tr>
    <tr>
        <td class="micro-label">搴楅摵琛楀皬鍥炬爣: </td>
        <td>
             <input type="file" name="street_logo"/>
             <?php if ($this->_var['shop_info']['street_logo']): ?>
             <img src="<?php echo $this->_var['shop_info']['street_logo']; ?>" width="90" height="45" /> 
             <?php endif; ?>   
             <br/>(鍥炬爣灏哄:90x45px)
        </td>
    </tr>
    <tr>
        <td class="micro-label">搴楅摵琛楀晢鍝佸ぇ鍥? </td>
        <td>
             <input type="file" name="street_spjpg"/>
             <?php if ($this->_var['shop_info']['street_spjpg']): ?>
             <img src="<?php echo $this->_var['shop_info']['street_spjpg']; ?>" width="220" /> 
             <?php endif; ?>   
             <br/>(鍥剧墖灏哄:500x500px)   
        </td>
    </tr>
      <td class="micro-label">搴楅摵鍏憡:</td>
      <td>
      <textarea name="notice" style="max-height:130px; min-height:130px; max-width:293px; min-width:293px;"><?php echo $this->_var['shop_info']['notice']; ?></textarea>
      </td>
    </tr>
    <!-- 添加百度地图 -->
    <tr width=100>
      <td class="micro-label"></td>
      <td><div style="background:#434343;width: 100px;">
      <a href="http://www.zhiliaogou.cn/map" target="_blank"><span style="font-family:寰蒋闆呴粦; color:#FFF; ">鐐瑰嚮杩涜鍦板浘閫夊潃</span></a>
      </div>
      </td>
    </tr>
    <tr>
        <td class="micro-label">鍦板浘缁忕含:</td>
        <td style="line-height: 30px; line-width: 20px;width: 50px;">缁忓害:<input type="text" name="map_api_x" value="<?php echo $this->_var['shop_info']['map_api_x']; ?>" /></td>
        <td>绾害:<input type="text" name="map_api_y" value="<?php echo $this->_var['shop_info']['map_api_y']; ?>" /></td>  
        
    </tr>
      <!--代码结束-->
    <tr>
      <td>
      <input type="hidden" name="data_op" value="<?php echo $this->_var['data_op']; ?>"/>
      </td>
      <td>
        <input type="submit" value="鎻愪氦淇℃伅" class="button" />
      </td>
    </tr>
  </table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'validator.js')); ?>
<script type="Text/Javascript" language="JavaScript">
<!--

region.isAdmin = true;

onload = function()
{
   document.getElementById('paynon').style.display = 'none';
}

function validator()
{
  var validator = new Validator('theForm');
  validator.required('shop_name', shop_name_not_null);
  
  return validator.passed();
}

function show_shipping_area()
{
  Ajax.call('shipping.php?act=shipping_priv', '', shippingResponse, 'GET', 'JSON');
}

function shippingResponse(result)
{
  var shipping_name = document.getElementById('shipping_type');
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    shipping_name.options[0].selected = true;
    return;
  }
  
  var area = document.getElementById('shipping_area');
  if(shipping_name.value == '')
  {
    area.style.display = 'none';
  }
  else
  {
    area.style.display = "block";
  }
}

function loadConfig()
{
  var payment = document.forms['theForm'].elements['payment'];
  var paymentConfig = document.getElementById('paymentConfig');
  if(payment.value == '')
  {
    paymentConfig.style.display = 'none';
    return;
  }
  else
  {
    paymentConfig.style.display = 'block';
  }
	if(payment.value == 'alipay')
  {
	  document.getElementById('paynon').style.display = 'block';
	}
	else
	{
	  document.getElementById('paynon').style.display = 'none';
	}
  var params = 'code=' + payment.value;

  Ajax.call('payment.php?is_ajax=1&act=get_config', params, showConfig, 'GET', 'JSON');
}

function showConfig(result)
{
  var payment = document.forms['theForm'].elements['payment'];
  if (result.error == '1' && result.message != '')
  {
    alert(result.message);
    payment.options[0].selected = true;
    return;
  }
  var paymentConfig = document.getElementById('paymentConfig');
  var config = result.content;

  paymentConfig.innerHTML = config;
}


//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
