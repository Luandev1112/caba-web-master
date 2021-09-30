<?php
//設定ファイル読み込み
require_once('conf.php');

$s_id=$_POST['s_id'];

//受け取りデータを変数に代入
require_once "shop_admin/var.php";

$s_id_rec = $s_id;
$s_id_staff = $s_id;

$result=mysqli_query($sql, "SELECT * From `shop_tb`");

mysqli_query($sql, "INSERT INTO `shop_tb` VALUES ('$s_id','$s_name','$s_name2','$no','$shop_id','$shop_pass','$sort','$area','$area2','$gyoushu','$address','$map','$tel','$tel2','$tel3','$tel4','$email','$data1','$data2','$data3','$data4','$data5','$url','$fburl','$twurl','$yturl','$googleurl','$indoorurl','$comment','$system1','$system1a','$system1b','$system1c','$system1d','$system1e','$system1f','$system1g','$system1h','$system1i','$system1j','$system1k','$system1l','$system1m','$system1n','$system1o','$system1p','$system1q','$system1r','$system1s','$system1t','$system2','$system2a','$system2b','$system2c','$system2d','$system2e','$system2f','$system2g','$system2h','$system2i','$system2j','$system2k','$system2l','$system2m','$system2n','$system2o','$system2p','$system2q','$system2r','$system2s','$system2t','$system3','$system3a','$system3b','$system3c','$system3d','$system3e','$system3f','$system3g','$system3h','$system3i','$system3j','$system3k','$system3l','$system3m','$system3n','$system3o','$system3p','$system3q','$system3r','$system3s','$system3t','$system4','$system4a','$system4b','$system4c','$system4d','$system4e','$system4f','$system4g','$system4h','$system4i','$system4j','$system4k','$system4l','$system4m','$system4n','$system4o','$system4p','$system4q','$system4r','$system4s','$system4t','$comment2','$card1','$card2','$card3','$card4','$card5','$card6','$card7','$card8','$card9','$card10','$blank1','$blank2','$blank3','$blank4','$blank5','$sphoto1','$sphoto2','$sphoto3','$sphoto4','$sphoto5','$sphoto6','$sphoto7','$sphoto8','$sphoto9','$sphoto10','$sphoto11','$sphoto12','$touroku','$edittime','$hyouji','$shop')");

mysqli_query($sql, "INSERT INTO `shop_tb2` VALUES ('$s_id_rec','$rec1','$rec1b','$rec2','$rec2a','$rec2b','$rec2c','$rec2d','$rec2e','$rec2f','$rec2g','$rec2h','$rec2i','$rec2j','$rec2k','$rec2l','$rec2m','$rec2n','$rec2o','$rec3','$rec3a','$rec3b','$rec3c','$rec3d','$rec3e','$rec4','$rec4a','$rec4b','$rec4c','$rec4d','$rec4e','$rec4f','$rec4g','$rec4h','$rec4i','$rec4j','$rec4k','$rec4l','$rec4m','$rec4n','$rec4o','$rec4p','$rec4q','$rec5','$rec5a','$rec5b','$rec5c','$rec5d','$rec5e','$rec5f','$rec5g','$rec5h','$rec5i','$rec5j','$rec5k','$rec5l','$rec5m','$rec5n','$rec5o','$rec5p','$rec5q','$rec5r','$rec5s','$contact1','$contact1a','$contact1b','$contact1c','$contact1d','$contact2')");

mysqli_query($sql, "INSERT INTO `shop_tb3` VALUES ('$s_id_staff','$staff','$staffb','$staff1','$staff1a','$staff1b','$staff1c','$staff1d','$staff1e','$staff2','$staff2a','$staff2b','$staff2c','$staff2d','$staff2e','$staff2f','$staff2g','$staff2h','$staff2i','$staff2j','$staff2k','$staff2l','$staff2m','$staff2n','$staff2o','$staff3','$staff3a','$staff3b','$staff3c','$staff3d','$staff3e','$staff3f','$staff3g','$staff3h','$staff3i','$staff3j','$staff3k','$staff3l','$staff3m','$staff3n','$staff3o','$staff3p','$staff3q','$staff3r','$staff3s','$staff4','$blog')");

mysqli_query($sql2, "UPDATE `data` SET `option23`='$area',`option24`='$area2'   WHERE `yobi1` LIKE '$data5'");

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="0;URL=login_top.php">
<title></title>
</head>

<body>
</body>
</html>