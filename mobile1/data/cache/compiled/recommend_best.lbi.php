<?php if ($this->_var['best_goods']): ?>
<?php if ($this->_var['cat_rec_sign'] != 1): ?>
<div class="item_show_box2 box1 region" style="overflow:hidden">
	<div class="ProListTit"><?php echo $this->_var['lang']['best_goods']; ?></div>
    <div id="picScrol3" class="picScroll">
        <div class="hd">
            <ul></ul>
        </div>
        <div class="bd IndexProList">
        	<?php $_from = $this->_var['best_goods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'bestgoods');$this->_foreach['bestgoods'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['bestgoods']['total'] > 0):
    foreach ($_from AS $this->_var['bestgoods']):
        $this->_foreach['bestgoods']['iteration']++;
?>
            <?php if (($this->_foreach['bestgoods']['iteration'] - 1) < 3): ?>
        	<?php if (($this->_foreach['bestgoods']['iteration'] - 1) % 3 == 0): ?>
        	<ul>
            <?php endif; ?>
            	<?php if (($this->_foreach['bestgoods']['iteration'] - 1) % 3 == 0): ?>
            	<li>
                	<div class="ProList ProListTop">
                    	<dl>
                        	<dt class="f_r"><a href="<?php echo $this->_var['bestgoods']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['bestgoods']['thumb']; ?>"></a></dt>
                            <dd class="IndexProName"><a href="<?php echo $this->_var['bestgoods']['url']; ?>"><?php echo $this->_var['bestgoods']['short_name']; ?></a></dd>
                            <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                            <dd class="IndexProPrice"><?php echo $this->_var['bestgoods']['promote_price']; ?></dd>
                            <?php else: ?>
                            <dd class="IndexProPrice"><?php echo $this->_var['bestgoods']['shop_price']; ?></dd>
                            <?php endif; ?>
                        </dl>
                    </div>
             <?php endif; ?>
             <?php if (($this->_foreach['bestgoods']['iteration'] - 1) % 3 == 1): ?>
                    <div class="ProList">
                    	<dl>
                        	<dt class="f_l"><a href="<?php echo $this->_var['bestgoods']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['bestgoods']['thumb']; ?>"></a></dt>
                            <dd class="IndexProName"><a href="<?php echo $this->_var['bestgoods']['url']; ?>"><?php echo $this->_var['bestgoods']['short_name']; ?></a></dd>
                            <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                            <dd class="IndexProPrice"><?php echo $this->_var['bestgoods']['promote_price']; ?></dd>
                            <?php else: ?>
                            <dd class="IndexProPrice"><?php echo $this->_var['bestgoods']['shop_price']; ?></dd>
                            <?php endif; ?>
                        </dl>
                    </div>
                </li>
                 <?php endif; ?>
                 <?php if (($this->_foreach['bestgoods']['iteration'] - 1) % 3 == 2): ?>
                <li>
                	<div class="ProList ProListRight">
                    	<dl>
                            <dd class="IndexProName"><a href="<?php echo $this->_var['bestgoods']['url']; ?>"><?php echo $this->_var['bestgoods']['short_name']; ?></a></dd>
                            <?php if ($this->_var['goods']['promote_price'] != ""): ?> 
                            <dd class="IndexProPrice"><?php echo $this->_var['bestgoods']['promote_price']; ?></dd>
                            <?php else: ?>
                            <dd class="IndexProPrice"><?php echo $this->_var['bestgoods']['shop_price']; ?></dd>
                            <?php endif; ?>
                            <dt><a href="<?php echo $this->_var['bestgoods']['url']; ?>"><img src="<?php echo $this->_var['site_url']; ?><?php echo $this->_var['bestgoods']['thumb']; ?>"></a></dt>
                        </dl>
                    </div>
                </li>
                <?php endif; ?>
            <?php if (($this->_foreach['bestgoods']['iteration'] - 1) % 3 == 2): ?>    
            </ul>
            <?php endif; ?>
            <?php endif; ?>
           <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
        </div> 
    </div>
</div>
<?php endif; ?>
<?php endif; ?>