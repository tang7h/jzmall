<!-- $Id: brand_info.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('seller_pageheader.htm'); ?>
<div class="main-div">
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.bigcolorpicker.js"></script>
<link type="text/css" rel="stylesheet" href="styles/jquery.bigcolorpicker.css">
<form method="post" action="index.php" name="theForm" enctype="multipart/form-data">
<table cellspacing="1" cellpadding="3" width="100%">
  <tr>
    <td class="label" style="width:5%;">店铺色调</td>
    <td><input type="text" name="shop_color" maxlength="40" size="15" value="<?php echo $this->_var['shop_info']['shop_color']; ?>" id="shop_color" /><input id="selectcolor" type="button" value="选色" /></td>
  </tr>
  <tr>
    <td class="label" style="width:5%;">头部内容</td>
    <td>
    <?php echo $this->_var['FCKeditor']; ?>
    </td>
  </tr>
  <tr>
    <td colspan="2" align="center"><br />
      <input type="submit" class="button" value="<?php echo $this->_var['lang']['button_submit']; ?>" />
      <input type="hidden" name="act" value="<?php echo $this->_var['form_action']; ?>" />
      <input type="hidden" name="id" value="<?php echo $this->_var['shop_info']['id']; ?>" />
    </td>
  </tr>
</table>
</form>
</div>

<script type="text/javascript">
		$(function(){
			//2、用法
			$("#selectcolor").bigColorpicker("shop_color");

		});
	</script>
<?php echo $this->fetch('pagefooter.htm'); ?>