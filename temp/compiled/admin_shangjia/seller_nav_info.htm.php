<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">
<form method="post" action="seller_nav.php" name="theForm" enctype="multipart/form-data" onsubmit="return validate()">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label">导航名称</td>
    <td><input type="text" name="navname" maxlength="60" value="<?php echo $this->_var['nav']['nav_name']; ?>" /><?php echo $this->_var['lang']['require_field']; ?></td>
  </tr>
  <tr>
    <td class="label">导航链接</td>
    <td><input type="text" name="navlink"  size="40" value="<?php echo $this->_var['nav']['nav_link']; ?>" />
    <span style="display:block" class="notice-span">
     (注意格式:'category.php?id=1')
    </span>
    </td>
  </tr>
  <tr>
    <td class="label"><a href="javascript:showNotice('warn_brandlogo');" title="<?php echo $this->_var['lang']['form_notice']; ?>">
        <img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a>导航图标</td>
    <td><input type="file" name="navimg" id="logo" size="45"><?php if ($this->_var['nav']['nav_img'] != ""): ?><img src="<?php echo $this->_var['nav']['nav_img']; ?>" width="100" height="40"/><?php endif; ?>
    <br /><span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="warn_brandlogo">
     导航图标可代替文字显示在导航上
    </span>
    </td>
  </tr>
  <tr>
    <td class="label"><?php echo $this->_var['lang']['sort_order']; ?></td>
    <td><input type="text" name="navorder" maxlength="40" size="15" value="<?php echo $this->_var['nav']['nav_order']; ?>" /></td>
  </tr>
  <tr>
    <td class="label">是否显示</td>
    <td><input type="radio" name="isshow" value="1" <?php if ($this->_var['nav']['is_show'] == 1): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        <input type="radio" name="isshow" value="0" <?php if ($this->_var['nav']['is_show'] == 0): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        (决定是否在导航上显示)
    </td>
  </tr>
  <tr>
    <td class="label">是否新窗口打开</td>
    <td><input type="radio" name="isblank" value="1" <?php if ($this->_var['nav']['is_blank'] == 1): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        <input type="radio" name="isblank" value="0" <?php if ($this->_var['nav']['is_blank'] == 0): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        (决定是否在新窗口打开链接)
   </td>
  </tr>
  <tr>
    <td class="label">只显示文字</td>
    <td>
    <input type="radio" name="istext" value="1" <?php if ($this->_var['nav']['is_text'] == 1): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['yes']; ?>
        <input type="radio" name="istext" value="0" <?php if ($this->_var['nav']['is_text'] == 0): ?>checked="checked"<?php endif; ?> /> <?php echo $this->_var['lang']['no']; ?>
        (决定导航是以文字显示还是图片显示，选择否将以图片显示)
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="reset" class="button" value="<?php echo $this->_var['lang']['button_reset']; ?>" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['nav']['id']; ?>" />
      <input type="hidden" name="old_navimg" value="<?php echo $this->_var['nav']['nav_img']; ?>">
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
    validator.required("navname",'导航名称不能为空');
    return validator.passed();
}
//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>