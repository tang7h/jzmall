<?php echo $this->fetch('library/page_header.lbi'); ?> 
<div id="page" style="right: 0px; left: 0px; display: block;">
  <header id="header">
    <div class="header_l header_return"> <a href="javascript:history.go(-1);"><span>返回</span></a></div>
    <h1>店铺街</h1>
    <div class="header_r header_search"> <a class="new-a-jd" onClick="showSearch()"><span>京东键</span></a></div>
    <div id="search_box"> <?php echo $this->fetch('library/page_menu.lbi'); ?> </div>
  </header>
  <div class="brand_list"> 
    <ul id="J_ItemList">
   	    <li class="single_item"></li>
        <a href="javascript:;" class="get_more"></a>
    <ul>
    </div>
<?php echo $this->fetch('library/page_footer.lbi'); ?> </div>
<script type="text/javascript">
get_asynclist("<?php echo url('sellerstore/asynclist', array('page'=>$this->_var['page'], 'sort'=>$this->_var['sort'], 'order'=>$this->_var['order']));?>" , '__TPL__/images/loader.gif');
</script>
</body></html>