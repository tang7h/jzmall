<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js')); ?>
<!--视情况加载-->
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

<form method="POST" action="photoinfo_collect.php?act=photoinfo_batch_import&goods_id=<?php echo $this->_var['goods_id']; ?>" name="listForm" onsubmit="return subConfirm()">

<!-- start comment list -->
<div>商品描述<div>
<div id="desc" style="margin:5px;height:150px;overflow:auto;"><?php echo $this->_var['data']['commodity']; ?></div>
<div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th>
      <input onclick='listTable.selectAll(this, "checkboxes")' type="checkbox">
      编号</th>
	<th>商品</th>
    <th>图片</th>
    <th>描述</th>
	<th>图片路径</th>
    <th></th>
  </tr>
  <?php $_from = $this->_var['data']['photo']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'photo');$this->_foreach['notaobao'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['notaobao']['total'] > 0):
    foreach ($_from AS $this->_var['key'] => $this->_var['photo']):
        $this->_foreach['notaobao']['iteration']++;
?>
  <tr align="center">
    <td><input value="<?php echo $this->_var['key']; ?>" name="checkboxes[]" type="checkbox"><?php echo $this->_foreach['notaobao']['iteration']; ?></td>
    <td><a href="../goods.php?id=<?php echo $this->_var['goods_id']; ?>" target="_blank" ><?php echo $this->_var['data']['goods_name']; ?></a><input type="hidden" name="goods_id" value="<?php echo $this->_var['goods_id']; ?>" /></td>
    <td><img src="<?php echo $this->_var['photo']; ?>"  style="height:120px; width:120px;"/></td>
    <td><input name="img_desc[]" type="text" ></td>
	<td><input value="<?php echo $this->_var['photo']; ?>" name="photo_url[]" type="text" size="110"></td>

  </tr>
    <?php endforeach; else: ?>
    <tr><td class="no-records" colspan="10"><?php echo $this->_var['lang']['no_records']; ?></td></tr>
    <?php endif; unset($_from); ?><?php $this->pop_vars();; ?>
  </table>

  <table cellpadding="4" cellspacing="0">
    <tr>
      <td>
		<input type="submit" name="drop" id="btnSubmit" value="批量导入" class="button" disabled="true" />
      </td>
    </tr>


  </table>

	<table cellpadding="3" cellspacing="1">
		<tr>
			<td width="80%">搜索到图片<strong><font color="#FF0000"><?php echo $this->_var['num']; ?></font></strong>条</td>
			<td>&nbsp;</td>
		</tr>
		<tr>
			<td>&nbsp;</td>
		</tr>
	</table>
	<textarea style="display:none" id="t_desc" name="goods_desc">
	<?php echo $this->_var['data']['commodity']; ?>
    </textarea>

</div>
<!-- end comment list -->
</form>

<script type="text/javascript" language="JavaScript">
<!--
	function subConfirm(){
		if(confirm("确定将所选数据导入数据库？")){

		}else{
			return false;
		}
	}
//-->
</script>
<?php echo $this->fetch('pagefooter.htm'); ?>
