<?php


//設定ファイル読み込み
require_once('conf.php');

//フォームからの生データ
$master_id = $_POST['master_id'];
$data4=htmlspecialchars($_POST["data4"],ENT_QUOTES);
$data5=htmlspecialchars($_POST["data5"],ENT_QUOTES);
$fburl=$_POST["fburl"];
$yturl=$_POST["yturl"];
$indoorurl=$_POST["indoorurl"];


//編集・削除キー
$operation = $_POST['operation'];


	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql2, "UPDATE `shop_tb` SET `data4`='$data4',`fburl`='$fburl',`yturl`='$yturl',`indoorurl`='$indoorurl' WHERE `data5` LIKE '$data5' LIMIT 1");
		
		
	}

?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>shop登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=client_rss.php?master_id=<?php echo $master_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>