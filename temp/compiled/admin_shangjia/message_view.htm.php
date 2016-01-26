<!-- $Id: message_view.htm 14216 2008-03-10 02:27:21Z testyang $ -->
<?php echo $this->fetch('pageheader.htm'); ?>

<div class="main-div">
<table width="100%">
  <tr>
    <td>
    <?php echo $this->_var['lang']['sender_id']; ?>:<?php echo $this->_var['msg_arr']['user_name']; ?>&nbsp;&nbsp;|&nbsp;&nbsp; <?php echo $this->_var['lang']['send_date']; ?>:<?php echo $this->_var['msg_arr']['send_date']; ?>&nbsp;&nbsp;| &nbsp;&nbsp;<?php echo $this->_var['lang']['read_date']; ?>:<?php echo $this->_var['msg_arr']['read_date']; ?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php echo $this->_var['lang']['title']; ?>:<?php echo $this->_var['msg_arr']['title']; ?></td>
  </tr>
   <tr>
    <td> <hr /></td>
  </tr>
  <tr>
    <td><p><?php echo $this->_var['msg_arr']['message']; ?> </p></td>
  </tr>
  <tr>
    <td align="right">
      | <a href="message.php?act=reply&id=<?php echo $this->_var['msg_arr']['message_id']; ?>"><?php echo $this->_var['lang']['reply_msg']; ?></a> | <input type="hidden" name="id" value="<?php echo $this->_var['msg_arr']['message_id']; ?>">
    </td>
  </tr>
</table>
</div>

<script type="Text/Javascript" language="JavaScript">
<!--

onload = function()
{
    // 开始检查订单
    startCheckOrder();
}

//-->
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>