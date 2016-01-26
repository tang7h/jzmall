<?php
    require 'php/config.php';
    if(!$enable) die('没有编辑器使用权限'); //权限验证
    $lang = $_CFG['lang'] == 'en_us' ? 'en':'zh_CN';
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ecEditor - Powered by Ecmoban.com</title>
<link rel="stylesheet" href="./themes/default/default.css" />
<script charset="utf-8" src="./kindeditor-all-min.js"></script>
<script charset="utf-8" src="./lang/<?php echo $lang;?>.js"></script>
<script charset="utf-8" src="./plugins/code/prettify.js"></script>
<script charset="utf-8" src="../ueditor/third-party/jquery-1.10.2.min.js"></script>
<style type="text/css">
body {margin:0px; padding:0px;}
</style>
</head>

<body>
<textarea name="content" id="container" style="width:99%;height:480px;visibility:hidden;"></textarea>
<script type="text/javascript">
<?php $item = htmlspecialchars($_GET['item']);?>
var cBox = $('#<?php echo $item;?>', parent.document);
KindEditor.ready(function(K) {
  var editor = K.create('textarea[name="content"]', {
    cssPath : './plugins/code/prettify.css',
    uploadJson : './php/upload_json.php',
    fileManagerJson : './php/file_manager_json.php',
    allowFileManager : false,
    filterMode: false,//是否开启过滤模式
    afterCreate : function() {
      var self = this;
      //同步内容到编辑器
      var content = cBox.val();
      self.html(content);
      //同步到textarea
      self.sync();
    },
    afterChange : function() {
      var self = this;
      self.sync();
    }
  });
  prettyPrint();
  $('#detail-table', parent.document).hide();
});
$(function(){
  window.setInterval("setSync()",1000);//自动同步
})
function setSync(){
  var content = $('#container').val();
  cBox.val(content);
}
</script>
</body>
</html>