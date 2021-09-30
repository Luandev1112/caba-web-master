<?php

$sql_server2 = 'mysql132.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database2 = 'LAA0219176-fuga201810';	/* SQLデータベース名 */

$sql_table = 'data';	/* SQLテーブル名 */
$sql_user = 'LAA0219176';	/* SQLログインID */
$sql_pass = 'icdesign';	/* SQLログインパス */

if(! $sql2=mysqli_connect("$sql_server2", "$sql_user", "$sql_pass", "$sql_database2")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql2, 'utf8mb4');  // procedural style

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
mysqli_query($sql2, "UPDATE `access` SET access_id='$cnt' WHERE access_id LIKE '$order[$i]'");
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
<meta http-equiv="refresh" content="0;URL=cast_sort.php?shop_id=<?php echo $shop_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>