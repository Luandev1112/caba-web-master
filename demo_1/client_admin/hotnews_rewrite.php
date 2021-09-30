<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからデータ受け取り
$news_id = $_POST['news_id'];
$start = htmlspecialchars($_POST['start'],ENT_QUOTES);
$end = htmlspecialchars($_POST['end'],ENT_QUOTES);
$sort = $_POST['start'];
$sort2 = $_POST['start'];
$time = $_POST['time'];
$newstitle = htmlspecialchars($_POST['newstitle'],ENT_QUOTES);
$input = htmlspecialchars($_POST['input'],ENT_QUOTES);
$photo1 = htmlspecialchars($_POST['photo1'],ENT_QUOTES);
$jpeg = htmlspecialchars($_POST['jpeg'],ENT_QUOTES);
$link = htmlspecialchars($_POST['link'],ENT_QUOTES);
$blank = $_POST['blank'];
$hotnews = $_POST['hotnews'];
$photo_box = $_POST['photo_box'];
$n_area = $_POST['n_area'];
$n_area2 = $_POST['n_area2'];
$n_gyoushu = $_POST['n_gyoushu'];


//データを整形
$input = mb_convert_kana($input,'KaV','utf-8');

//追加
$input = str_replace('\\' , '' , $input);
//改行コードの前に改行タグを入れる
$input = nl2br($input);
//改行コードを削除
$input = str_replace("\r\n" , "" , $input);


$sort = str_replace('/' , '' , $sort);
$sort = str_replace('(' , '' , $sort);
$sort = str_replace(')' , '' , $sort);
$hankaku1 = preg_replace('/[^0-9a-zA-Z]/', '', $sort);
$sort2 = str_replace('/' , '' , $sort2);
$sort2 = str_replace('(' , '' , $sort2);
$sort2 = str_replace(')' , '' , $sort2);
$hankaku2 = preg_replace('/[^0-9a-zA-Z]/', '', $sort2);
$sort = $hankaku1;
$sort2 = $hankaku2;
//編集・削除キー
$operation = $_POST['operation'];



//配列入れ替え

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `news` SET `news_id`='$news_id',`start`='$start',`sort`='$sort',`end`='$end',`sort2`='$sort2',`time`='$time',`newstitle`='$newstitle',`input`='$input',`photo1`='$photo1',`jpeg`='$jpeg',`link`='$link',`blank`='$blank',`hotnews`='$hotnews',`photo_box`='$photo_box',`n_area`='$n_area',`n_area2`='$n_area2',`n_gyoushu`='$n_gyoushu' WHERE `news_id` LIKE '$news_id' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `news` WHERE news_id LIKE '$news_id' LIMIT 1");
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);


//写真を削除
if($operation=='delete'){
	if(file_exists('./photo/'.$news_id.'_1.jpg')){
		unlink('./photo/'.$news_id.'_1.jpg');
	}
}
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>キャスト登録</title>

<link href="css/style.css" rel="stylesheet" type="text/css">
<meta http-equiv="refresh" content="0;URL=hotnews.php?shop_id=<?php echo $blank; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html>