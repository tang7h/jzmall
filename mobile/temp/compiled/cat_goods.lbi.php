<div class="block">
  <div class="indexTitle">
    <h3 class="title"><?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?></h3>
    <div class="dots"> <i></i> <i></i> <i></i> <i></i> </div>
  </div>
  <div class="listProduct">
    <ul>
      <?php $_from = $this->_var['cat_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'goods_0_42890200_1435025232');$this->_foreach['cat_goods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_goods']['total'] > 0):
    foreach ($_from AS $this->_var['goods_0_42890200_1435025232']):
        $this->_foreach['cat_goods']['iteration']++;
?>
      <li> <a href="<?php echo $this->_var['goods_0_42890200_1435025232']['url']; ?>">
        <div style="background-image:url('<?php echo $this->_var['goods_0_42890200_1435025232']['thumb']; ?>');" class="pic_box"><img draggable="false" src="themes/default/images/blank_10_10.png"></div>
        <div class="title_box"><?php echo $this->_var['goods_0_42890200_1435025232']['short_name']; ?></div>
        <div class="price_box"> <span>
          <?php if ($this->_var['goods_0_42890200_1435025232']['promote_price'] != ""): ?>
          <?php echo $this->_var['goods_0_42890200_1435025232']['promote_price']; ?>
          <?php else: ?>
          <?php echo $this->_var['goods_0_42890200_1435025232']['shop_price']; ?>
          <?php endif; ?>
          </span><del><?php echo $this->_var['goods_0_42890200_1435025232']['market_price']; ?></del> </div>
        </a> </li>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
  <div class="global_btn_box"><a href="<?php echo $this->_var['goods_cat']['url']; ?>">更多<?php echo htmlspecialchars($this->_var['goods_cat']['name']); ?>&gt;&gt;</a></div>
</div>
