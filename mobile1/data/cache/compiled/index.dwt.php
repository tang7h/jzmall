<?php echo $this->fetch('library/page_header.lbi'); ?>
<p id="demo"></p>

<div id="focus" class="focus region">
  <div class="hd">
    <ul>
    </ul>
  </div>
  <div class="bd">
      <?php 
$k = array (
  'name' => 'ads',
  'id' => '1',
  'num' => '3',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
  </div>
</div>
 

<div class="Logo"><img src="__TPL__/images/logo.png"/></div>
 


<div id=content class="wrap"> 
  
  <header class="region">
    <div class="content">
      <div id="fake-search">
        <div class="fakeInput">
          <form action="<?php echo url('category/index');?>" method="post" id="searchForm" name="searchForm">
            <div class="SearchBox">
              <div class="SearchInput ml10">
                <input class="text" type="search" name="keywords" id="keywordBox" />
              </div>
              <button class="SearchBut" type="submit" value="<?php echo $this->_var['lang']['search']; ?>" onclick="return check('keywordBox')"><span>search</span></button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </header>
  
  <div class="region row row_category">
    <ul class="flex flex-f-row">
      <?php $_from = $this->_var['navigator']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'nav');$this->_foreach['nav_middle_list'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['nav_middle_list']['total'] > 0):
    foreach ($_from AS $this->_var['nav']):
        $this->_foreach['nav_middle_list']['iteration']++;
?> 
      <li class="flex_in route<?php echo $this->_foreach['nav_middle_list']['iteration']; ?> route"> 
      	<a href="<?php echo $this->_var['nav']['url']; ?>"<?php if ($this->_var['nav']['opennew'] == 1): ?> target="_blank"<?php endif; ?> title="<?php echo $this->_var['nav']['name']; ?>" title="<?php echo $this->_var['nav']['name']; ?>" class="menu<?php echo $this->_foreach['nav_middle_list']['iteration']; ?> on"> 											          <!--<span class="menu<?php echo $this->_foreach['nav_middle_list']['iteration']; ?>-icon">
            <span></span></span>-->
            <span class="menu1-icon"><img src="<?php echo $this->_var['nav']['pic']; ?>" ></span>
           <span class="cate-name"><?php echo $this->_var['nav']['name']; ?></span></a> </li>
           <?php if ($this->_foreach['nav_middle_list']['iteration'] % 5 == 0): ?> 
           </ul><ul class="flex flex-f-row">
           <?php endif; ?>
      <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
    </ul>
  </div>
   
  
  
  <div class="keyword"> 
    <?php $_from = $this->_var['cat_rec']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'cat');$this->_foreach['cat_rec'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['cat_rec']['total'] > 0):
    foreach ($_from AS $this->_var['cat']):
        $this->_foreach['cat_rec']['iteration']++;
?> 
    <a href="<?php echo $this->_var['cat']['url']; ?>" class="btn-text on"><?php echo $this->_var['cat']['cat_name']; ?></a> 
    <?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?> 
  </div>
  
  <div class="region" style="overflow:hidden">
    <div class="ad2-big-img">
    <?php 
$k = array (
  'name' => 'ads',
  'id' => '2',
  'num' => '1',
);
echo $this->_echash . $k['name'] . '|' . serialize($k) . $this->_echash;
?>
    </div>
  </div>   
 </div>
<?php echo $this->fetch('library/recommend_best.lbi'); ?>
 
<?php echo $this->fetch('library/recommend_new.lbi'); ?>

<?php echo $this->fetch('library/recommend_hot.lbi'); ?>
 
<?php echo $this->fetch('library/page_footer.lbi'); ?>

<div id="main-search" class="main-search">
  <div class="hd"> <span class="ico_08 close"> 关闭 </span> </div>
  <div class="bd">
    <div class="search_box">
      <form action="<?php echo url('category/index');?>" method="post" id="searchForm" name="searchForm">
        <div class="content">
          <input class="text" type="search" name="keywords" id="keywordBox" />
          <button class="ico_07" type="submit" value="<?php echo $this->_var['lang']['search']; ?>" onclick="return check('keywordBox')"></button>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>