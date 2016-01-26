<div id="slide" style="width:100%; height:410px;">

	
  <ul class="slide-items slide-items-w">
    
    <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_78520700_1453791689');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_78520700_1453791689']):
?>
    

    
    <li> <a href="<?php echo $this->_var['index_ad_0_78520700_1453791689']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['index_ad_0_78520700_1453791689']['src']; ?>" width="100%" height="410px"></a> </li>

    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
  
  <ul class="slide-items slide-items-s">
    
    <?php $_from = $this->_var['index_ad_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_78536200_1453791689');if (count($_from)):
    foreach ($_from AS $this->_var['index_ad_0_78536200_1453791689']):
?>
    
   
    <li> <a href="<?php echo $this->_var['index_ad_0_78536200_1453791689']['url']; ?>" target="_blank"><img src="<?php echo $this->_var['index_ad_0_78536200_1453791689']['src']; ?>" width="100%" height="410px"></a> </li>
 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    
  </ul>
   <div class="slide-controls slide-controls-w">  <?php $_from = $this->_var['index_ad_w']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_78548700_1453791689');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_78548700_1453791689']):
        $this->_foreach['foo']['iteration']++;
?><span <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
   
  <div class="slide-controls slide-controls-s">  <?php $_from = $this->_var['index_ad_s']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'index_ad_0_78568300_1453791689');$this->_foreach['foo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['foo']['total'] > 0):
    foreach ($_from AS $this->_var['index_ad_0_78568300_1453791689']):
        $this->_foreach['foo']['iteration']++;
?><span <?php if (($this->_foreach['foo']['iteration'] <= 1)): ?>class="curr"<?php endif; ?>><?php echo $this->_foreach['foo']['iteration']; ?></span><?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> </div>
</div>
