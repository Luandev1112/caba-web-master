<?php
	//設定ファイル読み込み
	require_once '../conf.php';

//ファンクションファイル読み込み
require_once '../parts/function.php';

$master_id = $_POST['master_id'];

//フォームからデータ受け取り
$coupon_id = $_POST['coupon_id'];
$coupon1 = $_POST['coupon1'];
$coupon2 = $_POST['coupon2'];
$coupon3 = $_POST['coupon3'];
$coupon_shop = $_POST['coupon_shop'];

$result=mysqli_query($sql, "SELECT * From `coupon`");
mysqli_query($sql, "INSERT INTO `coupon` VALUES ('$coupon_id','$coupon1','$coupon2','$coupon3','$coupon_shop')");

?><html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=coupon.php?master_id=<?php echo $master_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>