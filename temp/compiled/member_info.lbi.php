<div id="append_parent"></div>
<?php if ($this->_var['user_info']): ?>
<font style="position:relative; top:10px;color:#CFCFCF;">
<strong>亲爱的</strong><font class="f4_b"><?php echo $this->_var['user_info']['username']; ?></font>, <strong><?php echo $this->_var['lang']['welcome_return']; ?>^0^</strong>&nbsp;
<a style="color:#FFF;" href="user.php"><?php echo $this->_var['lang']['user_center']; ?></a>&nbsp;
 <a href="user.php?act=logout"><?php echo $this->_var['lang']['user_logout']; ?></a>
</font>
<?php else: ?>
<ul>
 <li style="margin-top: 10px;"><a href="user.php"><strong>LOG IN</strong></a></li>
 <li style="margin-top: 10px;"><a href="user.php?act=register"><strong><b>NEW USER</b></strong></a></li>
 </ul>
<?php endif; ?>