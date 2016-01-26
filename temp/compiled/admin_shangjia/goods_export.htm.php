<!-- $Id: goods_export.htm 17107 2010-04-15 03:29:13Z liuhui $ -->
<?php echo $this->fetch('pageheader.htm'); ?>
<table width="100%">
<tr>
  <td>
  <div class="main-div" style="background-color: white;">
  <?php echo $this->_var['lang']['user_guide']; ?>
  <h3><center><?php echo $this->_var['lang']['export_condition']; ?></center></h3>
  <div>
    <form action="goods_export.php" method="post" name="searchForm" onsubmit="return queryGoods(this)">
      <strong><?php echo $this->_var['lang']['custom_goods_search']; ?></strong>
      <!-- 分类 -->
      <select name="cat_id"><option value="0"><?php echo $this->_var['lang']['custom_goods_cat']; ?></option><?php echo $this->_var['cat_list']; ?></select>
      <!-- 品牌 -->
      <select name="brand_id"><option value="0"><?php echo $this->_var['lang']['custom_goods_brand']; ?></option><?php echo $this->html_options(array('options'=>$this->_var['brand_list'])); ?></select>
      <!-- 关键字 -->
      <?php echo $this->_var['lang']['custom_keyword']; ?><input type="text" name="keyword"/>
      <!-- 搜索 -->
      <input type="submit" name="search_submit" id="search_submit" value="<?php echo $this->_var['lang']['export_condition_search']; ?>" class="button" />
    </form>
  </div>
  <table>
  <tr>
    <td width="46%"><select name="src_goods_lists" id="src_goods_lists" size="14" style="width:100%" multiple="true">
              </select></td>
    <td rowspan="2" width="8%" style="text-align:center;">
      <p><input type="button" value=">>" id="addAllGoods" class="button" /></p>
      <p><input type="button" value=">" id="addGoods" class="button" /></p>
      <p><input type="button" value="<" id="delGoods" class="button" /></p>
      <p><input type="button" value="<<" id="delAllGoods" class="button" /></p>
    </td>
    <td width="46%"><select name="dst_goods_lists" id="dst_goods_lists" size="14" style="width:100%" multiple="true">
              </select></td>
  </tr>
  </table>
  <div>
      <strong><?php echo $this->_var['lang']['export_format']; ?></strong>
      <!-- 导出的数据格式 -->
      <select name="data_format" id="data_format"><?php echo $this->html_options(array('options'=>$this->_var['data_format'])); ?></select>
      <div id="export_format">
      </div>
  </div>
  </div>
  </td>
</tr>
</table>
<div id="ecshop_form" style="display:none">
    <form action="goods_export.php" method="post" name="theForm" onsubmit="return formValidate0()">
    <table width="100%" >
      <tr>
        <td class="label"><?php echo $this->_var['lang']['select_charset']; ?></td>
        <td>
            <select name="charset" >
              <option value="UTF8">UTF8</option>
              <option value="GB2312">GB2312</option>
              <option value="GBK">GBK</option>
            </select>
        </td>
      </tr>
      <tr>
        <td>
            <input name="cat_id" type="hidden" value="" />
            <input name="brand_id" type="hidden" value="" />
            <input name="keyword" type="hidden" value="" />
            <input name="goods_ids" type="hidden" value="" />
            <input type="hidden" name="act" value="act_export_ecshop">
        </td>
        <td>
        <input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
        </td>
      </tr>
    </table>
    </form>
</div>
<div id="taobao_form" style="display:none">
<form action="goods_export.php" method="post" name="theForm1" onsubmit="return formValidate1()">
    <table width="100%" >
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGoodsClass');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['goods_class']; ?></td>
        <td><input type="text" name="goods_class" value="0" /><br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeGoodsClass"><?php echo $this->_var['lang']['notice_goods_class']; ?></span></tr>
      <tr>
      <tr>
        <td ></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['post_express']; ?></td>
        <td><input type="text" name="post_express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['express']; ?></td>
        <td><input type="text" name="express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['ems']; ?></td>
        <td><input type="text" name="ems" value="0" /></tr>
      <tr>
      <tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="" />
    <input name="brand_id" type="hidden" value="" />
    <input name="keyword" type="hidden" value="" />
    <input name="goods_ids" type="hidden" value="" /><input type="hidden" name="act" value="act_export_taobao"></td>
        <td><input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></td>
      </tr>
    </table>
    </form>
</div>
<div id="taobao V4.3_form" style="display:none">
<form action="goods_export.php" method="post" name="theForm3" onsubmit="return formValidate3()">
    <table width="100%" >
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGoodsClass');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['goods_class']; ?></td>
        <td><input type="text" name="goods_class" value="0" /><br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeGoodsClass"><?php echo $this->_var['lang']['notice_goods_class']; ?></span></tr>
      <tr>
      <tr>
        <td ></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['post_express']; ?></td>
        <td><input type="text" name="post_express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['express']; ?></td>
        <td><input type="text" name="express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['ems']; ?></td>
        <td><input type="text" name="ems" value="0" /></tr>
      <tr>
      <tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="" />
    <input name="brand_id" type="hidden" value="" />
    <input name="keyword" type="hidden" value="" />
    <input name="goods_ids" type="hidden" value="" /><input type="hidden" name="act" value="act_export_taobao V4.3"></td>
        <td><input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></td>
      </tr>
    </table>
    </form>
</div>
<div id="taobao V4.6_form" style="display:none">
<form action="goods_export.php" method="post" name="theForm6" onsubmit="return formValidate6()">
    <table width="100%" >
      <tr>
        <td class="label"><a href="javascript:showNotice('noticeGoodsClass');" title="<?php echo $this->_var['lang']['form_notice']; ?>"><img src="images/notice.gif" width="16" height="16" border="0" alt="<?php echo $this->_var['lang']['form_notice']; ?>"></a><?php echo $this->_var['lang']['goods_class']; ?></td>
        <td><input type="text" name="goods_class" value="0" /><br />
          <span class="notice-span" <?php if ($this->_var['help_open']): ?>style="display:block" <?php else: ?> style="display:none" <?php endif; ?> id="noticeGoodsClass"><?php echo $this->_var['lang']['notice_goods_class']; ?></span></tr>
      <tr>
      <tr>
        <td ></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['post_express']; ?></td>
        <td><input type="text" name="post_express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['express']; ?></td>
        <td><input type="text" name="express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['ems']; ?></td>
        <td><input type="text" name="ems" value="0" /></tr>
      <tr>
      <tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="" />
    <input name="brand_id" type="hidden" value="" />
    <input name="keyword" type="hidden" value="" />
    <input name="goods_ids" type="hidden" value="" /><input type="hidden" name="act" value="act_export_taobao V4.6"></td>
        <td><input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></td>
      </tr>
    </table>
    </form>
</div>
<div id="paipai_form" style="display:none">
    <form action="goods_export.php" method="post"  name="theForm2" onsubmit="return formValidate2()">
    <table width="100%" >
      <tr>
        <td ></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['post_express']; ?></td>
        <td><input type="text" name="post_express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['express']; ?></td>
        <td><input type="text" name="express" value="0" /></tr>
      <tr>
      <tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="" />
    <input name="brand_id" type="hidden" value="" />
    <input name="keyword" type="hidden" value="" />
    <input name="goods_ids" type="hidden" value="" /><input type="hidden" name="act" value="act_export_paipai"></td>
        <td><input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></td>
      </tr>
    </table>
    </form>
</div>
<div id="paipai4_form" style="display:none">
    <form action="goods_export.php" method="post"  name="theForm5" onsubmit="return formValidate5()">
    <table width="100%" >
      <tr>
        <td ></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['post_express']; ?></td>
        <td><input type="text" name="post_express" value="0" /></tr>
      <tr>
      <tr>
        <td class="label"><?php echo $this->_var['lang']['express']; ?></td>
        <td><input type="text" name="express" value="0" /></tr>
      <tr>
      <tr>
        <td>&nbsp;    <input name="cat_id" type="hidden" value="" />
    <input name="brand_id" type="hidden" value="" />
    <input name="keyword" type="hidden" value="" />
    <input name="goods_ids" type="hidden" value="" /><input type="hidden" name="act" value="act_export_paipai4"></td>
        <td><input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" /></td>
      </tr>
    </table>
    </form>
</div>
<div id="custom_form" style="display:none">
<form action="goods_export.php" method="post"  name="theForm4" onsubmit="return formValidate4()">
<table width="100%">
<tr>
  <td>
  <div class="main-div" style="background-color: white;">
  <table>
  <tr>
    <td width="45%"><strong><?php echo $this->_var['lang']['custom_goods_list']; ?></strong><span style="margin-left:20px;"><select name="goods_type" id="goods_type"><option value="0"><?php echo $this->_var['lang']['custom_goods_type']; ?></option><?php echo $this->_var['goods_type_list']; ?></select></span></td>
    <td rowspan="2" width="5%" style="text-align:center;"><p><input type="button" value=">>" id="addAllItem" class="button" /></p>
              <p><input type="button" value=">" id="addItem" class="button" /></p>
              <p><input type="button" value="<" id="delItem" class="button" /></p>
              <p><input type="button" value="<<" id="delAllItem" class="button" /></p></td>
    <td width="45%"><strong><?php echo $this->_var['lang']['custom_export_list']; ?></strong></td>
    <td rowspan="2" width="5%" style="text-align:center;"><p><input type="button" value="<?php echo $this->_var['lang']['custom_up']; ?>" id="mvUp" class="button" /></p><p><input type="button" value="<?php echo $this->_var['lang']['custom_down']; ?>" id="mvDown" class="button" /></p></td>
  </tr>
  <tr>
    <td><select name="src_goods_fields" id="src_goods_fields" size="14" style="width:100%" multiple="true"><?php echo $this->html_options(array('options'=>$this->_var['goods_fields'])); ?>
              </select></td>
    <td><select name="dst_goods_fields" id="dst_goods_fields" size="14" style="width:100%" multiple="true">
              </select></td>
  </tr>
  <tr><td class="label"><?php echo $this->_var['lang']['select_charset']; ?></td>
        <td>
            <select name="charset_custom" >
              <option value="UTF8">UTF8</option>
              <option value="GB2312">GB2312</option>
              <option value="GBK">GBK</option>
            </select>
        </td></tr>
  <tr>
    <td></td>
    <td></td>
    <td>
    <input name="cat_id" type="hidden" value="" />
    <input name="brand_id" type="hidden" value="" />
    <input name="keyword" type="hidden" value="" />
    <input name="goods_ids" type="hidden" value="" />
    <input type="hidden" name="act" value="act_export_custom">
    <input type="hidden" name="custom_goods_export" value="">
    <input name="submit" type="submit" id="submit" value="<?php echo $this->_var['lang']['button_submit']; ?>" class="button" />
    </td>
    <td></td>
  </tr>
  </table>
  </div>
  </td>
</tr>
</table>
</form>
</div>
<?php echo $this->smarty_insert_scripts(array('files'=>'../js/utils.js,validator.js')); ?>
<script language="JavaScript">
var post_express_not_null = "<?php echo $this->_var['lang']['post_express_not_null']; ?>";
var express_not_null = "<?php echo $this->_var['lang']['express_not_null']; ?>";
var ems_not_null = "<?php echo $this->_var['lang']['ems_not_null']; ?>";
var custom_goods_field_not_null = "<?php echo $this->_var['lang']['custom_goods_field_not_null']; ?>";



    var elements;
    onload = function()
    {
        // 开始检查订单
        startCheckOrder();
    }

    function formValidate0()
    {
        var src_obj = document.forms['searchForm'];
        var dst_obj = document.forms['theForm'];
        copy_search_result(src_obj, dst_obj);
        return true;
    }
    /**
     * 检查输入是否完整
     */
    function formValidate2()
    {
        var elements = document.forms['theForm2'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm2'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    /**
     * 检查输入是否完整
     */
    function formValidate1()
    {
        var elements = document.forms['theForm1'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (parseFloat(elements['ems'].value) <= 0)
        {
            msg += ems_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm1'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }
    /**
     * 检查输入是否完整
     */
    function formValidate3()
    {
        var elements = document.forms['theForm3'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (parseFloat(elements['ems'].value) <= 0)
        {
            msg += ems_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm3'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }
   /**
     * 检查输入是否完整
     */
    function formValidate6()
    {
        var elements = document.forms['theForm6'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (parseFloat(elements['ems'].value) <= 0)
        {
            msg += ems_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm6'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    /* 检查输入是否完整 */
    function formValidate4 ()
    {
        var elements = document.forms['theForm4'].elements;
        var msg = '';
        if (elements['dst_goods_fields'].options.length <= 0)
        {
            msg += custom_goods_field_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            elements['custom_goods_export'].value = '';
            for (var i=0,l=elements['dst_goods_fields'].options.length; i<l; i++)
            {
                var separator = (i==0)?'':',';
                elements['custom_goods_export'].value += separator + elements['dst_goods_fields'].options[i].value;
            }
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm4'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    /**
     * 检查输入是否完整
     */
    function formValidate5()
    {
        var elements = document.forms['theForm5'].elements;
        var msg = '';

        if (parseFloat(elements['post_express'].value) <= 0)
        {
            msg += post_express_not_null + '\n';
        }
        if (parseFloat(elements['express'].value) <= 0)
        {
            msg += express_not_null + '\n';
        }
        if (msg.length > 0)
        {
            alert(msg);
            return false;
        }
        else
        {
            var src_obj = document.forms['searchForm'];
            var dst_obj = document.forms['theForm5'];
            copy_search_result(src_obj, dst_obj);
            return true;
        }
    }

    function copy_search_result(src_obj, dst_obj)
    {
        dst_obj.cat_id.value = src_obj.cat_id.value;
        dst_obj.brand_id.value = src_obj.brand_id.value;
        dst_obj.keyword.value = src_obj.keyword.value;
        var goods_lists = Utils.$('dst_goods_lists');
        for (var i=0,l=goods_lists.options.length; i<l; i++)
        {
            var separator = (i==0)?'':',';
            dst_obj.goods_ids.value += separator + goods_lists.options[i].value;
        }
    }

    /**
     * 绑定商品类型控件事件
     */
    if(Utils.$('goods_type'))
    {
        Utils.$('goods_type').onchange = function ()
        {
            Ajax.call('goods_export.php?is_ajax=1&act=get_goods_fields&cat_id='+this.value, '' , goodsFieldsResponse , 'POST', 'JSON');
        }
    }

    function goodsFieldsResponse (result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            return;
        }
        Utils.$('src_goods_fields').innerHTML = '';
        for (var key in result.content)
        {
            if (typeof (result.content[key]) == 'string')
            {
                var new_opt = document.createElement('OPTION');
                new_opt.value = key;
                new_opt.innerHTML = result.content[key];
                Utils.$('src_goods_fields').appendChild(new_opt);
            }
        }
    }
    /* 搜索商品列表 */
    function queryGoods(obj)
    {
        var filters = new Object;
        filters.cat_id = obj.cat_id.value;
        filters.brand_id = obj.brand_id.value;
        filters.keyword = obj.keyword.value;

        Ajax.call('goods_export.php?is_ajax=1&act=get_goods_list', filters, queryGoodsResponse , 'POST', 'JSON');
        return false;
    }

    function queryGoodsResponse (result)
    {
        if (result.error > 0)
        {
            alert(result.message);
            return;
        }
        Utils.$('src_goods_lists').innerHTML = '';
        for (var i=0,l=result.content.length;i<l;++i)
        {
            var new_opt = document.createElement('OPTION');
            new_opt.value = result.content[i].goods_id;
            new_opt.innerHTML = result.content[i].goods_name;
            Utils.$('src_goods_lists').appendChild(new_opt);
        }
    }

    /* 操作自定义导出商品的Select Box */
    var MySelectBox;
    var MySelectBox2;
    if (!MySelectBox)
    {
        var global = $import("../js/global.js","js");
        global.onload = global.onreadystatechange= function()
        {
            if(this.readyState && this.readyState=="loading")return;
            var selectbox = $import("js/selectbox.js","js");
            selectbox.onload = selectbox.onreadystatechange = function()
            {
                if(this.readyState && this.readyState=="loading")return;
                MySelectBox = new SelectBox('src_goods_fields', 'dst_goods_fields');
                MySelectBox2 = new SelectBox('src_goods_lists', 'dst_goods_lists', true);
            }
        }
    }
    if (Utils.$('addItem'))
    {
        Utils.$('addItem').onclick = function ()
        {
            MySelectBox.addItem();
        }
    }
    if (Utils.$('delItem'))
    {
        Utils.$('delItem').onclick = function ()
        {
            MySelectBox.delItem();
        }
    }
    if (Utils.$('addAllItem'))
    {
        Utils.$('addAllItem').onclick = function ()
        {
            MySelectBox.addItem(true);
        }
    }
    if (Utils.$('delAllItem'))
    {
        Utils.$('delAllItem').onclick = function ()
        {
            MySelectBox.delItem(true);
        }
    }
    if (Utils.$('src_goods_fields'))
    {
        Utils.$('src_goods_fields').ondblclick = function ()
        {
            MySelectBox.addItem();
        }
    }
    if (Utils.$('dst_goods_fields'))
    {
        Utils.$('dst_goods_fields').ondblclick = function ()
        {
            MySelectBox.delItem();
        }
    }
    if (Utils.$('mvUp'))
    {
        Utils.$('mvUp').onclick = function ()
        {
            MySelectBox.moveItem('up');
        }
    }
    if (Utils.$('mvDown'))
    {
        Utils.$('mvDown').onclick = function ()
        {
            MySelectBox.moveItem('down');
        }
    }

    if (Utils.$('addGoods'))
    {
        Utils.$('addGoods').onclick = function ()
        {
            MySelectBox2.addItem();
        }
    }
    if (Utils.$('delGoods'))
    {
        Utils.$('delGoods').onclick = function ()
        {
            MySelectBox2.delItem();
        }
    }
    if (Utils.$('addAllGoods'))
    {
        Utils.$('addAllGoods').onclick = function ()
        {
            MySelectBox2.addItem(true);
        }
    }
    if (Utils.$('delAllGoods'))
    {
        Utils.$('delAllGoods').onclick = function ()
        {
            MySelectBox2.delItem(true);
        }
    }
    if (Utils.$('src_goods_lists'))
    {
        Utils.$('src_goods_lists').ondblclick = function ()
        {
            MySelectBox2.addItem();
        }
    }
    if (Utils.$('dst_goods_lists'))
    {
        Utils.$('dst_goods_lists').ondblclick = function ()
        {
            MySelectBox2.delItem();
        }
    }

    /**
     * 上一次操作的对象
     */
    window.last_form = new Object;
    /**
     * 初始化导出格式
     */
    function init_data_format ()
    {
        var _format = Utils.$('data_format');
        show_data_format(_format.value);
        _format.onchange = function ()
        {
            show_data_format(this.value);
        }
    }

    /**
     * 显示要导出的格式页面
     *
     * @param page string 页面
     *
     * @return void
     */
    function show_data_format (page)
    {
        try
        {
            window.last_form.style.display = 'none';
        }
        catch (e)
        {
        }
        var _page = Utils.$(page+'_form');
        _page.style.display = '';
        Utils.$('export_format').appendChild(_page);
        window.last_form = _page;
    }

    if (Browser.isIE)
    {
        window.attachEvent("onload", init_data_format);
    }
    else
    {
        window.addEventListener("load", init_data_format, false);
    }
</script>

<?php echo $this->fetch('pagefooter.htm'); ?>
