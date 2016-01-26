<!-- $Id: order_info.htm 15544 2009-01-09 01:54:28Z zblikai $ -->

<?php echo $this->fetch('pageheader.htm'); ?>
<?php echo $this->smarty_insert_scripts(array('files'=>'topbar.js,../js/utils.js,listtable.js,selectzone.js,../js/common.js')); ?>
<form action="order.php?act=operate" method="post" name="theForm">
<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="4"><?php echo $this->_var['lang']['base_info']; ?></th>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['return_time']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['apply_time']; ?></td>
    <td><div align="right"><strong></strong></div></td>
    <td></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['delivery_sn_number']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['delivery_sn']; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_time']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['formated_update_time']; ?></td>
  </tr>
  <tr>
    <td width="18%"><div align="right"><strong><?php echo $this->_var['lang']['label_order_sn']; ?></strong></div></td>
   <td width="34%"><?php echo $this->_var['back_order']['order_sn']; ?><?php if ($this->_var['back_order']['extension_code'] == "group_buy"): ?><a href="group_buy.php?act=edit&id=<?php echo $this->_var['back_order']['extension_id']; ?>"><?php echo $this->_var['lang']['group_buy']; ?></a><?php elseif ($this->_var['back_order']['extension_code'] == "exchange_goods"): ?><a href="exchange_goods.php?act=edit&id=<?php echo $this->_var['back_order']['extension_id']; ?>"><?php echo $this->_var['lang']['exchange_goods']; ?></a><?php endif; ?>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_order_time']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['formated_add_time']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_user_name']; ?></strong></div></td>
    <td><?php echo empty($this->_var['back_order']['user_name']) ? $this->_var['lang']['anonymous'] : $this->_var['back_order']['user_name']; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_how_oos']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['how_oos']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping']; ?></strong></div></td>
    <td><?php if ($this->_var['exist_real_goods']): ?><?php if ($this->_var['back_order']['shipping_id'] > 0): ?><?php echo $this->_var['back_order']['shipping_name']; ?><?php else: ?><?php echo $this->_var['lang']['require_field']; ?><?php endif; ?> <?php if ($this->_var['back_order']['insure_fee'] > 0): ?>（<?php echo $this->_var['lang']['label_insure_fee']; ?><?php echo $this->_var['back_order']['formated_insure_fee']; ?>）<?php endif; ?><?php endif; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_shipping_fee']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['shipping_fee']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_insure_yn']; ?></strong></div></td>
    <td><?php if ($this->_var['insure_yn']): ?><?php echo $this->_var['lang']['yes']; ?><?php else: ?><?php echo $this->_var['lang']['no']; ?><?php endif; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_insure_fee']; ?></strong></div></td>
    <td><?php echo empty($this->_var['back_order']['insure_fee']) ? '0.00' : $this->_var['back_order']['insure_fee']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_invoice_no']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['invoice_no']; ?></td>
    <td><div align="right"><strong>订单状态</strong></div></td>
    <td>由用户寄回</td>
  </tr>
  <tr>
    <th colspan="4"><?php echo $this->_var['lang']['consignee_info']; ?></th>
    </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_consignee']; ?></strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['addressee']); ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_email']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['email']; ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_address']; ?></strong></div></td>
    <td>[<?php echo $this->_var['back_order']['region']; ?>] <?php echo htmlspecialchars($this->_var['back_order']['address']); ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_zipcode']; ?></strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['zipcode']); ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_tel']; ?></strong></div></td>
    <td><?php echo $this->_var['back_order']['tel']; ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_mobile']; ?></strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['phone']); ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_sign_building']; ?></strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['sign_building']); ?></td>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_best_time']; ?></strong></div></td>
    <td><?php echo htmlspecialchars($this->_var['back_order']['best_time']); ?></td>
  </tr>
  <tr>
    <td><div align="right"><strong><?php echo $this->_var['lang']['label_postscript']; ?></strong></div></td>
    <td colspan="3"><?php echo $this->_var['back_order']['remark']; ?></td>
  </tr>
</table>
</div>

<div class="list-div" style="margin-bottom: 5px ; ">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="7" scope="col"><?php echo $this->_var['lang']['goods_info']; ?></th>
    </tr>
  <tr>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_name_brand']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['product_sn']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['goods_attr']; ?></strong></div></td>
    <td scope="col"><div align="center"><strong><?php echo $this->_var['lang']['label_send_number']; ?></strong></div></td>
  </tr>
  <?php $_from = $this->_var['goods_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  <tr>
    <td>
    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
    <a href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> <?php if ($this->_var['goods']['brand_name']): ?>[ <?php echo $this->_var['goods']['brand_name']; ?> ]<?php endif; ?>
    <?php endif; ?>
    </td>
    <td><div align="left"><?php echo $this->_var['goods']['goods_sn']; ?></div></td>
    <td><div align="left"><?php echo $this->_var['goods']['product_sn']; ?></div></td>
    <td><div align="left"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></div></td>
    <td><div align="left"><?php echo $this->_var['goods']['send_number']; ?></div></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
</div>
<div class="list-div" style="margin-bottom: 5px">
<table width="100%" cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="7" scope="col"><?php echo $this->_var['lang']['return_goods_info']; ?></th>
  </tr>
  <tr>
    <td scope="col" width="45%"><div align="center"><strong><?php echo $this->_var['lang']['goods_name_brand']; ?></strong></div></td>
    <td scope="col" width="6%"><div align="center"><strong><?php echo $this->_var['lang']['business']; ?></strong></div></td>
    <td scope="col" width="12%"><div align="center"><strong><?php echo $this->_var['lang']['goods_sn']; ?></strong></div></td>
    <td scope="col" width="6%"><div align="center"><strong><?php echo $this->_var['lang']['product_sn']; ?></strong></div></td>
    <td scope="col" width="15%"><div align="center"><strong><?php echo $this->_var['lang']['goods_attr']; ?></strong></div></td>
    <td scope="col" width="6%"><div align="center"><strong><?php echo $this->_var['lang']['label_should_refund']; ?></strong></div></td>
    <td scope="col" width="6%"><div align="center"><strong><?php echo $this->_var['lang']['goods_number']; ?></strong></div></td>
  </tr>
  <?php $_from = $this->_var['return_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods');if (count($_from)):
    foreach ($_from AS $this->_var['goods']):
?>
  <tr>
    <td>
    <?php if ($this->_var['goods']['goods_id'] > 0 && $this->_var['goods']['extension_code'] != 'package_buy'): ?>
    <a href="../goods.php?id=<?php echo $this->_var['goods']['goods_id']; ?>" target="_blank"><?php echo $this->_var['goods']['goods_name']; ?> <?php if ($this->_var['goods']['brand_name']): ?>[ <?php echo $this->_var['goods']['brand_name']; ?> ]<?php endif; ?>
    <?php endif; ?>
    </td>
    <td><div align="left"><?php if ($this->_var['goods']['return_type'] == 1): ?>退货-退回<?php elseif ($this->_var['goods']['return_type'] == 2): ?>换货-换出<?php endif; ?></div></td>
    <td><div align="left"><?php echo $this->_var['goods']['goods_sn']; ?></div></td>
    <td><div align="left"><?php echo $this->_var['goods']['product_sn']; ?></div></td>
    <td><div align="left"><?php echo nl2br($this->_var['goods']['goods_attr']); ?></div></td>
    <td><div align="left"><?php if ($this->_var['goods']['return_type'] == 2): ?>-<?php endif; ?><?php echo $this->_var['goods']['refound']; ?></div></td>
    <td><div align="left"><?php if ($this->_var['goods']['return_type'] == 1): ?><?php echo $this->_var['goods']['back_num']; ?><?php elseif ($this->_var['goods']['return_type'] == 2): ?><?php echo $this->_var['goods']['out_num']; ?><?php endif; ?></div></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
  
  <tr>
     <?php if ($this->_var['back_order']['exchange'] > 0): ?>
      <td colspan="5">
        换出操作公司 ：
        <?php if ($this->_var['back_order']['out_shipping_name']): ?>
        <span style="font-weight: bolder"><?php echo $this->_var['back_order']['out_shipp_shipping']; ?></span>
         快递单号：
        <span style="font-weight: bolder"><?php echo $this->_var['back_order']['out_invoice_no']; ?></span>
        <a class="special" href="order.php?act=return_edit&ret_id=<?php echo $this->_var['back_order']['ret_id']; ?>&order_id=<?php echo $this->_var['back_order']['order_id']; ?>&step=back_shipping">编辑</a>
        <?php else: ?>
        <select name="shipping_name">
            <option value="0">请选择快递公司</option>
            <?php $_from = $this->_var['shipping_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'shipping');if (count($_from)):
    foreach ($_from AS $this->_var['shipping']):
?>
            <option value="<?php echo $this->_var['shipping']['shipping_id']; ?>"><?php echo $this->_var['shipping']['shipping_name']; ?></option>
            <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </select> 
        快递单号
        <input type="text"  name="invoice_no"/><input type="submit" value="确定"  onclick="check_shipping()"  name="send_submit" />
        <?php endif; ?>
      </td>
      <?php else: ?>
      <td colspan="5">&nbsp;</td>
      <?php endif; ?>
      <td colspan="5"> 
          小计：<span style="color: red"><?php echo $this->_var['back_order']['should_return']; ?><input type="hidden" name="refound_amount" value="<?php echo $this->_var['back_order']['should_return1']; ?>"/></span>
      </td>
  </tr>
  <script>
      function check_shipping(){
          var frm =  document.forms['theForm'] ;
          var shipping_name = frm['shipping_name'].value;
            if( shipping_name <= 0 ){

                alert('请选择快递公司');
                return false;
            }
            var invoice_no = frm['invoice_no'].value ;
            if(invoice_no == ''|| invoice_no ==NULL ){
                
                alert('请填写快递单号');
                return false;
            
            }
          
      
      }
      
  </script>
  <tr>
      <td>退换货原因：<?php echo $this->_var['back_order']['return_cause']; ?><td>
  </tr>
  
</table>
</div>
<div class="list-div" style="margin-bottom: 5px">
<table cellpadding="3" cellspacing="1">
  <tr>
    <th colspan="6"><?php echo $this->_var['lang']['action_info']; ?></th>
  </tr>
  <tr>
     <td>
        <div align="right">
        <strong>操作备注：</strong>
        </div>
    </td>
    <td colspan="3">
        <textarea rows="3" cols="60" name="action_note"></textarea>
    </td>
    <td>
        <div align="right">
        <strong>订单注释-用户前台可见：</strong>
        </div>
    </td>
    <td colspan="3">
        <textarea rows="3" cols="60" name="action_note1"></textarea>
        <input class="button" type="submit" value="确定" name="zhushi">
    </td>
  </tr>
  <tr>
      <td>
        <div align="right"></div>
        <div align="right">
        <strong>当前可执行操作：</strong>
        </div>
        </td>
        <td colspan="5">
        <?php if ($this->_var['back_order']['return_status1'] < 1): ?>
          <input class="button" type="submit" value="收到退回商品" name="receive_goods">
        <?php endif; ?>
        <?php if ($this->_var['back_order']['refound_status1'] == 0): ?>
        <input class="button" type="submit" value="去退款" name="refound">
        <?php endif; ?>
        <?php if ($this->_var['back_order']['return_status1'] < 2): ?>
        <input class="button" type="submit" value="换出商品寄出【分单】" name="swapped_out_single">
        <input class="button" type="submit" value="换出商品寄出" name="swapped_out">
        <?php endif; ?>
        <?php if ($this->_var['back_order']['return_status1'] < 4): ?>
        <input class="button" type="submit" value="完成退换货" name="complete">
        <?php endif; ?>
        <input class="button" type="submit" value="售后" name="after_service">
        <input type="hidden" value="<?php echo $this->_var['back_order']['order_id']; ?>" name="order_id">
        <input type="hidden" value="<?php echo $this->_var['back_order']['rec_id']; ?>" name="rec_id" />
        <input type="hidden" value="<?php echo $this->_var['back_order']['ret_id']; ?>" name="ret_id" />
        </td>
  </tr>
  <tr>
    <th><?php echo $this->_var['lang']['action_user']; ?></th>
    <th><?php echo $this->_var['lang']['action_time']; ?></th>
    <th><?php echo $this->_var['lang']['return_status']; ?></th>
    <th><?php echo $this->_var['lang']['refound_status']; ?></th>
    <th colspan="2"><?php echo $this->_var['lang']['action_note']; ?></th>
  </tr>
  <?php $_from = $this->_var['action_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'action');if (count($_from)):
    foreach ($_from AS $this->_var['action']):
?>
  <tr>
    <td><div align="center"><?php echo $this->_var['action']['action_user']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action']['action_time']; ?></div></td>
    <td><div align="center"><?php echo $this->_var['action']['return_status']; ?></div></td>
    <td colspan="2"><div align="center"><?php echo $this->_var['action']['refound_status']; ?></div></td>
    
    <td><?php echo nl2br($this->_var['action']['action_note']); ?></td>
  </tr>
  <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</table>
</div>
</form>

<script language="JavaScript">

  var oldAgencyId = <?php echo empty($this->_var['back_order']['agency_id']) ? '0' : $this->_var['back_order']['agency_id']; ?>;

  onload = function()
  {
    // 开始检查订单
    startCheckOrder();
  }

</script>


<?php echo $this->fetch('pagefooter.htm'); ?>