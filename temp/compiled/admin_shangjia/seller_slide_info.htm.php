<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<form method="post" action="seller_shop_slide.php" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  
  <tr>
    <td class="label"><a href="javascript:showNotice('warn_brandlogo');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a>广告图片</td>
    <td><input type="file" name="img_url" id="logo" size="45"><?php if ($this->_var['slide']['img_url'] != ""): ?><img src="<?php echo $this->_var['slide']['img_url']; ?>" width="100" height="60"/><?php endif; ?>
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="warn_brandlogo">
     (建议图片尺寸1900x500)
    </span>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['sort_order']; ?></td>
    <td><input type="text" name="img_order" maxlength="40" size="15" value="<?php echo $this->_var['slide']['img_order']; ?>" /></td>
  </tr>
  <tr>
    <td class="label">广告链接</td>
    <td><input type="text" name="img_link" size="50" value="<?php echo $this->_var['slide']['img_link']; ?>" /><?php echo $this->_var['lang']['require_field']; ?>
    <br/>链接地址格式如:http://ecmoban.com
    </td>
  </tr>
  <tr>
    <td class="label">是否显示</td>
    <td><input type="radio" name="is_show" value="1" <?php if ($this->_var['slide']['is_show'] == 1): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        <input type="radio" name="is_show" value="0" <?php if ($this->_var['slide']['is_show'] == 0): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        <br/>(决定是否在导航上显示)
    </td>
  </tr>
  <tr>
    <td class="label">图片变换方式</td>
    <td><input type="radio" name="slide_type" value="shade" <?php if ($this->_var['slide']['slide_type'] == 'shade'): ?>checked="checked"<?php endif; ?> /> 渐变
        <input type="radio" name="slide_type" value="roll" <?php if ($this->_var['slide']['slide_type'] == 'roll'): ?>checked="checked"<?php endif; ?> /> 滚动
        <br/>(多张图片设置的效果不一样时,将以排在首张的图片效果变化)
    </td>
  </tr>
  <tr>
    <td class="label">图片说明</td>
    <td><textarea name="img_desc" style="max-width: 366px; max-height: 85px;min-width: 366px; min-height: 85px;" ><?php echo $this->_var['slide']['img_desc']; ?></textarea>
   </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['slide']['id']; ?>" />
      <input type="hidden" name="old_img" value="<?php echo $this->_var['slide']['img_url']; ?>">
    </td>
  </tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>

<script language="JavaScript">
<!--
document.forms['theForm'].elements['navname'].focus();
onload = function()
{
    // 开始检查订单
    startCheckOrder();
}
/**
 * 检查表单输入的数据
 */
function validate()
{
    validator = new Validator("theForm");
//    validator.required("img_url",'必须上传图片');
//    return validator.passed();
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>