<?php
/**
 * Created by PhpStorm.
 * User: chenqiang
 * Date: 8/13/2015
 * Time: 23:19
 */
require_once(EC_PATH . '/includes/init.php');
require_once(EC_PATH . '/includes/lib_goods.php');

$goods_id = isset($_REQUEST['goods_id'])  ? intval($_REQUEST['goods_id']) : 0;
if(empty($goods_id)){
    exit;
}

$goods = get_goods_info($goods_id);

if(empty($goods)){
    exit;
}
?>

<!DOCTYPE html><html>
<head>
    <title><?php echo $data['goods_name'] ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
    <style>
        img {width: auto\9;height: auto;vertical-align: middle;border: 0;-ms-interpolation-mode: bicubic;max-width: 100%;}
        html { font-size:100%; }
    </style>
</head>
<body>
<?php echo $goods['goods_desc']?>
</body>
</html>
