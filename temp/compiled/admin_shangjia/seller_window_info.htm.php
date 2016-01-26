<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('seller_pageheader.htm'); ?>
<div class="main-div">
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.bigcolorpicker.js"></script>
<link type="text/css" rel="stylesheet" href="styles/jquery.bigcolorpicker.css">
<form method="post" action="seller_window.php" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label">橱窗名称</td>
    <td><input type="text" name="winname" maxlength="60" value="<?php echo $this->_var['seller_win']['win_name']; ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label">橱窗类型</td>
    <td><input type="radio" name="wintype" value="1" <?php if ($this->_var['seller_win']['win_type'] == 1): ?>checked="checked"<?php endif; ?> onFocus="changecutom(1);" />自定义内容
        <input type="radio" name="wintype" value="0" <?php if ($this->_var['seller_win']['win_type'] == 0): ?>checked="checked"<?php endif; ?> onFocus="changecutom(0);" />商品柜
   </td>
  </tr>
  <tr>
    <td class="label" style="width:5%;">橱窗色调</td>
    <td><input type="text" name="wincolor" maxlength="40" size="15" value="<?php echo $this->_var['seller_win']['win_color']; ?>" id="wincolor" /><input id="selectcolor" type="button" value="选色" /></td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['sort_order']; ?></td>
    <td><input type="text" name="winorder" maxlength="40" size="15" value="<?php echo $this->_var['seller_win']['win_order']; ?>" /></td>
  </tr>
  <tr>
    <td class="label">是否显示</td>
    <td><input type="radio" name="isshow" value="1" <?php if ($this->_var['seller_win']['is_show'] == 1): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        <input type="radio" name="isshow" value="0" <?php if ($this->_var['seller_win']['is_show'] == 0): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        <br/><span class="notice-span">决定是否在店铺首页显示该橱窗</span>
    </td>
  </tr>
  <tr id="cutmedit" >
    <td class="label">自定义内容</td>
    <td><div style="width:70%;"><?php echo $this->_var['FCKeditor']; ?></div></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['seller_win']['id']; ?>" />
      <input type="hidden" name="old_navimg" value="<?php echo $this->_var['seller_win']['win_img']; ?>">
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
$(function(){
	$("#selectcolor").bigColorpicker("wincolor");
});
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
    validator.required("winname",'橱窗名称不能为空');
    return validator.passed();
}

function changecutom(type)
{
	var typeradio=document.getElementById('cutmedit');
	if(type)
	{
		typeradio.style.display='';	
	}
	else
	{
		typeradio.style.display='none';	
	}
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>