<!-- $Id: goods_batch_add.htm 16544 2009-08-13 07:55:57Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<div class="main-div">




<form id="form1" name="form1" method="post" action="photoinfo_collect.php?act=photoinfo_preview&goods_id=<?php echo $this->_var['goods']['goods_id']; ?>">
<table cellspacing="1" cellpadding="3" width="100%">

  <tr>
    <td class="label" style="width:20%"> 淘宝商品URL：</td>
    <td> <input type="text" name="taoUrl" id="taoUrl"   size="50" value=""/>
    <font style="font-size:12px; color:#F00">例如：http://item.taobao.com/item.htm?spm=a230r.1.14.148.uUSDK0&id=35105934139&on_comment=1 </font></td>
  </tr>
  <tr>
    <td class="label" style="width:20%"> 商品名称：</td>
    <!--<td> <input type="text" name="goods_name" id="goods_name"   size="30" value="<?php echo $this->_var['goods']['goods_name']; ?>"/> <input type="hidden" name="id_value" value="<?php echo $this->_var['goods_id']; ?>" /></td>-->
	<td><?php echo $this->_var['goods']['goods_name']; ?><td>
  </tr>
  <tr align="center">
    <td colspan="2"> 
    <input type="submit" name="button" id="button" value="提交"></td>
  </tr>
</table>
</form>

<?php if ($this->_var['result']): ?>
<table width="100%"  style="border-top:1px solid #BBDDE5; padding:5px;">
  <tr>
    <td>&nbsp;</td>
    <td width="80%">搜索到评论<strong><font color="#FF0000"><?php echo $this->_var['c_count']; ?></font></strong>条，已经成功插入数据库！</td>
    <td>&nbsp;</td>
     </tr>
     <tr>
      
        <td>&nbsp;</td>
    <td width="80%"><?php echo $this->_var['c_goods']; ?></td>
    <td>&nbsp;</td>
      </tr>
     <tr> 
    
        <td>&nbsp;</td>
    <td width="80%"><?php echo $this->_var['c_manage']; ?></td>
    <td>&nbsp;</td>  </tr>
    
      <tr>
        <td>&nbsp;</td>
    <td width="80%">
    
      <?php $_from = $this->_var['source_url']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'source');$this->_foreach['source'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['source']['total'] > 0):
    foreach ($_from AS $this->_var['source']):
        $this->_foreach['source']['iteration']++;
?>

   评论来源<?php echo $this->_foreach['source']['iteration']; ?>：<a href="<?php echo $this->_var['source']; ?>"  target="_blank"><?php echo $this->_var['source']; ?></a><br>
 
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
    </td>
    <td>&nbsp;</td>
    
  </tr>
</table>

<?php endif; ?>
</div>

<?php echo $this->fetch('pagefooter.htm'); ?>