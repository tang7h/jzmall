<div id="append_parent"></div>
<a href="<?php echo url('user/index');?>"><?php if ($this->_var['user_info']): ?></a>
<a href="<?php echo url('user/index');?>"><?php echo $this->_var['user_info']['username']; ?></a>
<span class="lg-bar">|</span>
<a href="<?php echo url('user/logout');?>"><?php echo $this->_var['lang']['user_logout']; ?></a>
</font>
<?php else: ?>
<a href="<?php echo url('user/login');?>">登录</a>
<span class="lg-bar">|</span>
<a href="<?php echo url('user/register');?>">注册</a>
<?php endif; ?>