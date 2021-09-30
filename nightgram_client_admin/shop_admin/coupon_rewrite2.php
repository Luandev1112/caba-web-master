<?php
//設定ファイル読み込み
require_once('../conf.php');

$no = $_GET['no'];

//フォームからデータ受け取り
$coupon_id = $_GET['coupon_id'];
$coupon1 = htmlspecialchars($_POST['coupon1'],ENT_QUOTES);
$coupon2 = htmlspecialchars($_POST['coupon2'],ENT_QUOTES);
$coupon3 = htmlspecialchars($_POST['coupon3'],ENT_QUOTES);
$coupon_shop = $_POST['coupon_shop'];
//データを整形
$coupon3 = mb_convert_kana($coupon3,'KaV','utf-8');

//追加
$coupon3 = str_replace('\\' , '' , $coupon3);
//改行コードの前に改行タグを入れる
$coupon3 = nl2br($coupon3);
//改行コードを削除
$coupon3 = str_replace("\r\n" , "" , $coupon3);

$operation = "delete";

$result=mysqli_query($sql3, "SELECT * From `coupon` WHERE `coupon_id` = '$coupon_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu14.php');
}

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql3, "UPDATE `coupon` SET `coupon_id`='$coupon_id',`coupon1`='$coupon1',`coupon2`='$coupon2',`coupon3`='$coupon3',`coupon_shop`='$coupon_shop' WHERE `coupon_id` LIKE '$coupon_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql3, "DELETE FROM `coupon` WHERE coupon_id LIKE '$coupon_id' LIMIT 1");
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=coupon.php?no=<?php echo $no; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>