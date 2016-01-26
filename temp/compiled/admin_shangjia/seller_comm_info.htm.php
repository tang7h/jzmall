<!-- $Id: seller_comm_info.htm 17060 2010-03-25 03:44:42Z liuhui $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<script type="text/javascript" src="../js/calendar.php?lang=<?php echo $this->_var['cfg_lang']; ?>"></script>
<link href="../js/calendar/calendar.css" rel="stylesheet" type="text/css" />
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,listtable.js,selectzone.js,../js/common.js')); ?>
<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <td colspan="4">
      <div align="center">
        <input name="prev" type="button" class="button" onClick="location.href='seller_commission.php?act=info&id=<?php echo $this->_var['prev_id']; ?>';" value="前一笔佣金" <?php if (! $this->_var['prev_id']): ?>disabled<?php endif; ?> />
        <input name="next" type="button" class="button" onClick="location.href='seller_commission.php?act=info&id=<?php echo $this->_var['next_id']; ?>';" value="后一笔佣金" <?php if (! $this->_var['next_id']): ?>disabled<?php endif; ?> />
    </div></td>
  </tr>
  <tr>
    <th colspan="4">时间段:<?php echo $this->_var['comm_info']['prev_date']; ?>&nbsp;&nbsp;——&nbsp;&nbsp;<?php echo $this->_var['comm_info']['curr_date']; ?></th>
  </tr>
  <tr>
    <td width="18%"><div align="right"><strong>商家账号:</strong></div></td>
    <td width="34%"><?php echo $this->_var['comm_info']['user_name']; ?></td>
    <td width="15%"><div align="right"><strong>总营业额:</strong></div></td>
    <td>￥<?php echo $this->_var['comm_info']['total_turnover']; ?>元</td>
  </tr>
  <tr>
    <td><div align="right"><strong>佣金:</strong></div></td>
    <td>￥<?php echo $this->_var['comm_info']['commission']; ?>元</td>
    <td><div align="right"><strong>转账金额:</strong></div></td>
    <td>￥<?php echo $this->_var['comm_info']['check_mony']; ?>元</td>
  </tr>
  <tr>
    <td><div align="right"><strong>转账日期:</strong></div></td>
    <td><?php echo $this->_var['comm_info']['check_date']; ?></td>
    <td><div align="right"></div></td>
    <td></td>
  </tr>
  <tr>
    <td><div align="right"><strong>备注信息</strong></div></td>
  <td colspan="5"><?php echo $this->_var['comm_info']['remark']; ?></td>
    </tr>
   <tr>
   	<td>  </td>
    <td></td>
    <td><div align="right"></div></td>
    <td></td>
   </tr>
</table>
</div>
<?php echo $this->fetch('pagefooter.htm'); ?>