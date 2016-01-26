<?php echo $this->fetch('library/page_header.lbi'); ?>
<div id="page">
  <header id="header">
    <div class="header_l header_return"> <a href="javascript:history.go(-1);"><span></span></a></div>
    <h1><?php echo $this->_var['title']; ?></h1>
    <div class="header_r header_search"> <a class="new-a-jd" onClick="showSearch()"><span></span></a></div>
    <div id="search_box"> <?php echo $this->fetch('library/page_menu.lbi'); ?> </div>
  </header>
</div>
<section class="wrap InfoBox" style="border-bottom:0;margin-top:20px;">
  <p style="width: 100%;text-align: center;background-color: rgb(167, 167, 167);margin:0 auto;line-height: 30px;height: 30px;font-size: 15px;">选择城市</p>
  <div class="list_box" style="padding-top:0;padding-bottom:0; border:1px solid #999; border-top:0;"> <a href="javascript:void(0)" class="clearfix" style="display:none">
  <form action="<?php echo url('index/location');?>" method="post" name="theForm" >
    <select name="country" onchange="region.changed(this, 1, 'selProvinces')" >
      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['0']; ?></option>
      <?php $_from = $this->_var['country_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'country');if (count($_from)):
    foreach ($_from AS $this->_var['country']):
?>
      <option value="<?php echo $this->_var['country']['region_id']; ?>" <?php if ($this->_var['consignee']['country'] == $this->_var['country']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['country']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
    </a> <a href="javascript:void(0)" class="clearfix">
	<span class="add">
    <select name="province"  class="form-control" id="selProvinces" onchange="region.changed(this, 2, 'selCities')">
      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['1']; ?></option>
      <?php $_from = $this->_var['province_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'province');if (count($_from)):
    foreach ($_from AS $this->_var['province']):
?>
      <option value="<?php echo $this->_var['province']['region_id']; ?>" <?php if ($this->_var['consignee']['province'] == $this->_var['province']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['province']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
	</span>
	<span class="add">
    <select name="city" class="form-control" id="selCities" onchange="region.changed(this, 3, 'selDistricts')" >
      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['2']; ?></option>
      <?php $_from = $this->_var['city_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'city_0_58794700_1433931662');if (count($_from)):
    foreach ($_from AS $this->_var['city_0_58794700_1433931662']):
?>
      <option value="<?php echo $this->_var['city_0_58794700_1433931662']['region_id']; ?>" <?php if ($this->_var['consignee']['city'] == $this->_var['city_0_58794700_1433931662']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['city_0_58794700_1433931662']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
	</span>
	<span class="add_district">
    <select name="district" class="form-control" id="selDistricts"  style=" margin-bottom:20px;display:none" >
      <option value="0"><?php echo $this->_var['lang']['please_select']; ?><?php echo $this->_var['name_of_region']['3']; ?></option>
      <?php $_from = $this->_var['district_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'district');if (count($_from)):
    foreach ($_from AS $this->_var['district']):
?>
      <option value="<?php echo $this->_var['district']['region_id']; ?>" <?php if ($this->_var['consignee']['district'] == $this->_var['district']['region_id']): ?>selected<?php endif; ?>><?php echo $this->_var['district']['region_name']; ?></option>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </select>
	</span>
	<span class="add" style="text-align:center">
		<button type="submit" class="btn">确定</button>
	</span>
    </a> </form></div>
  <div class="blank3"></div>
</section>
<div class="blank3"></div>
<section class="wrap InfoBox" style="border-bottom:0;">
  <p style="width: 100%;text-align: center;background-color: rgb(167, 167, 167);margin:0 auto;line-height: 30px;height: 30px;font-size: 15px;">定位城市</p>
  	<div class="list_box" style="padding-top:0;padding-bottom:0; border:1px solid #999;">
   	<a href="javascript:void(0)" class="clearfix"><?php echo $this->_var['address']['province']; ?>　<?php echo $this->_var['address']['city']; ?>　<?php echo $this->_var['address']['district']; ?></a>
   	</div>
  <div class="blank3"></div>
</section>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
<style>
	.form-control {
display: block;
width: 100%;
height: 34px;
padding: 6px 12px;
font-size: 14px;
line-height: 1.42857143;
color: #555;
background-color: #fff;
background-image: none;
border: 1px solid #ccc;
border-radius: 4px;
-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
box-shadow: inset 0 1px 1px rgba(0,0,0,.075);
-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;
-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;
transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.add{
width:100%;
height:50px;
}
.add_district{
width:100%;
}
.btn {
display: inline-block;
padding: 6px 12px;
margin-bottom: 0;
font-size: 14px;
font-weight: 400;
line-height: 1.42857143;
text-align: center;
white-space: nowrap;
vertical-align: middle;
-ms-touch-action: manipulation;
touch-action: manipulation;
cursor: pointer;
-webkit-user-select: none;
-moz-user-select: none;
-ms-user-select: none;
user-select: none;
background-image: none;
border: 1px solid transparent;
border-radius: 4px;
color: #333;
background-color: #fff;
border-color: #ccc;
width:60%;
margin:0 auto;
}
</style>
</body><script type="text/javascript" src="__PUBLIC__/js/region.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script>
<script type="text/javascript">
	region.isAdmin = false;
	<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</script>
</html>