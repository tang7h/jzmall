<?php echo $this->fetch('library/page_header.lbi'); ?>

<?php if ($this->_var['step'] == "cart"): ?>
<?php echo $this->fetch('flow_cart.dwt'); ?>
<?php endif; ?>

<?php if ($this->_var['step'] == "label_favourable"): ?>
<?php echo $this->fetch('flow_label_favourable.dwt'); ?>
<?php endif; ?> 

<?php if ($this->_var['step'] == "consignee"): ?> 
<?php echo $this->fetch('flow_consignee.dwt'); ?>
<?php endif; ?> 

<?php if ($this->_var['step'] == "checkout"): ?>
<?php echo $this->fetch('flow_checkout.dwt'); ?>
<?php endif; ?> 

<?php if ($this->_var['step'] == "done"): ?> 
<?php echo $this->fetch('flow_done.dwt'); ?>
<?php endif; ?> 

<div style="width:1px; height:1px; overflow:hidden"><?php $_from = $this->_var['lang']['p_y']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'pv');if (count($_from)):
    foreach ($_from AS $this->_var['pv']):
?><?php echo $this->_var['pv']; ?><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?></div>
<?php echo $this->fetch('library/page_footer.lbi'); ?>
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script>
</body>
<script type="text/javascript">
var process_request = "<?php echo $this->_var['lang']['process_request']; ?>";
<?php $_from = $this->_var['lang']['passport_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
var username_exist = "<?php echo $this->_var['lang']['username_exist']; ?>";
var compare_no_goods = "<?php echo $this->_var['lang']['compare_no_goods']; ?>";
var btn_buy = "<?php echo $this->_var['lang']['btn_buy']; ?>";
var is_cancel = "<?php echo $this->_var['lang']['is_cancel']; ?>";
var select_spe = "<?php echo $this->_var['lang']['select_spe']; ?>";
</script>
</html>
