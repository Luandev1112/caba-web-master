<?php
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
$master_id = $_POST['master_id'];


//include("order_write.php"); ここより上をほぼ削除

$order_data='';
//order取得 女の子IDをセット
$order = explode(",",$_REQUEST['order']);
//CSV列を$linesに$name2で連想配列セット
//$fp=fopen("csv/data.csv", "r");
//$i2=1;
//while ($line3 = fgets($fp)) {
//	$ln=split(",", $line3);
//	$lines[$ln[2]]=$line3; $i2++;
//}
//fclose($fp);

$i2=count($order);

for($i=0; $i<$i2; $i++) {
//	$data2=$data2 . $lines[$order[$i]];

//	$line4=$lines[$order[$i]];		//追加
//	$line5=split(',',$line4);		//追加
//	if($line5[0] != '') {			//追加
//	array_splice($line5,0,1,"$i");	//追加
//	$line4=join(',',$line5);		//追加
//	$data2=$data2 . $line4;			//追加
//	}								//追加
$cnt=$i+1;	//なぜか$i++;では$i=0の時に$cnt=0になるので+1
mysqli_query($sql3, "UPDATE `news` SET sort_order='$cnt' WHERE news_id LIKE '$order[$i]'");
}

//CSVファイルへ書き込み
//$filename = 'csv/data.csv';
//$handle = fopen($filename , 'w');
//flock($handle , LOCK_EX);
//fwrite($handle , $data2);
//fclose($handle);

?>

<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="0;URL=hotnews_sort.php?master_id=<?php echo $master_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>