<?php
//設定ファイル読み込み
require_once('../conf.php');

$master_id = $_POST['master_id'];

#フォームからの生データ
$id = $_POST['id'];
$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = $_POST['name2'];
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bust = $_POST['bust'];
$cup = $_POST['cup'];
$waist = $_POST['waist'];
$hip = $_POST['hip'];
$comment = htmlspecialchars($_POST['comment'] , ENT_QUOTES);
$comment2 = $_POST['comment2'];
$profinfo1 = htmlspecialchars($_POST['profinfo1'] , ENT_QUOTES);
$profinfo2 = htmlspecialchars($_POST['profinfo2'] , ENT_QUOTES);
$profinfo3 = htmlspecialchars($_POST['profinfo3'] , ENT_QUOTES);
$profinfo4 = htmlspecialchars($_POST['profinfo4'] , ENT_QUOTES);
$profinfo5 = htmlspecialchars($_POST['profinfo5'] , ENT_QUOTES);
$profinfo6 = htmlspecialchars($_POST['profinfo6'] , ENT_QUOTES);
$profinfo7 = htmlspecialchars($_POST['profinfo7'] , ENT_QUOTES);
$profinfo8 = htmlspecialchars($_POST['profinfo8'] , ENT_QUOTES);
$profinfo9 = htmlspecialchars($_POST['profinfo9'] , ENT_QUOTES);
$profinfo10 = htmlspecialchars($_POST['profinfo10'] , ENT_QUOTES);
$option1 = $_POST['option1'];
$option2 = $_POST['option2'];
$option3 = $_POST['option3'];
$option4 = $_POST['option4'];
$option5 = $_POST['option5'];
$option6 = $_POST['option6'];
$option7 = $_POST['option7'];
$option8 = $_POST['option8'];
$option9 = $_POST['option9'];
$option10 = $_POST['option10'];
$option11 = $_POST['option11'];
$option12 = $_POST['option12'];
$option13 = $_POST['option13'];
$option14 = $_POST['option14'];
$option15 = $_POST['option15'];
$option16 = $_POST['option16'];
$option17 = $_POST['option17'];
$option18 = $_POST['option18'];
$option19 = $_POST['option19'];
$option20 = $_POST['option20'];
$option21 = $_POST['option21'];
$option22 = $_POST['option22'];
$option23 = $_POST['option23'];
$option24 = $_POST['option24'];
$option25 = $_POST['option25'];
$option26 = $_POST['option26'];
$option27 = $_POST['option27'];
$option28 = $_POST['option28'];
$option29 = $_POST['option29'];
$option30 = $_POST['option30'];
$option31 = $_POST['option31'];
$option32 = $_POST['option32'];
$option33 = $_POST['option33'];
$option34 = $_POST['option34'];
$option35 = $_POST['option35'];
$option36 = $_POST['option36'];
$option37 = $_POST['option37'];
$option38 = $_POST['option38'];
$option39 = $_POST['option39'];
$option40 = $_POST['option40'];
$photo1 = $_POST['photo1'];
$photo2 = $_POST['photo2'];
$photo3 = $_POST['photo3'];
$photo4 = $_POST['photo4'];
$photo5 = $_POST['photo5'];
$photo6 = $_POST['photo6'];
$photo7 = $_POST['photo7'];
$photo8 = $_POST['photo8'];
$photo9 = $_POST['photo9'];
$photo10 = $_POST['photo10'];

//曜日で入れ替え
if($week1 == '月'){
	$yotei1 = $_POST['yotei1'];
	$yotei2 = $_POST['yotei2'];
	$yotei3 = $_POST['yotei3'];
	$yotei4 = $_POST['yotei4'];
	$yotei5 = $_POST['yotei5'];
	$yotei6 = $_POST['yotei6'];
	$yobi4 = $_POST['yobi4'];
	
	$start1 = $_POST['start1'];
	$start2 = $_POST['start2'];
	$start3 = $_POST['start3'];
	$start4 = $_POST['start4'];
	$start5 = $_POST['start5'];
	$start6 = $_POST['start6'];
	$yobi5 = $_POST['yobi5'];
	
	$end1 = $_POST['end1'];
	$end2 = $_POST['end2'];
	$end3 = $_POST['end3'];
	$end4 = $_POST['end4'];
	$end5 = $_POST['end5'];
	$end6 = $_POST['end6'];
	$yobi6 = $_POST['yobi6'];
	
}elseif($week1 == '火'){
	$yotei1 = $_POST['yobi4'];
	$yotei2 = $_POST['yotei1'];
	$yotei3 = $_POST['yotei2'];
	$yotei4 = $_POST['yotei3'];
	$yotei5 = $_POST['yotei4'];
	$yotei6 = $_POST['yotei5'];
	$yobi4 = $_POST['yotei6'];
	
	$start1 = $_POST['yobi5'];
	$start2 = $_POST['start1'];
	$start3 = $_POST['start2'];
	$start4 = $_POST['start3'];
	$start5 = $_POST['start4'];
	$start6 = $_POST['start5'];
	$yobi5 = $_POST['start6'];
	
	$end1 = $_POST['yobi6'];
	$end2 = $_POST['end1'];
	$end3 = $_POST['end2'];
	$end4 = $_POST['end3'];
	$end5 = $_POST['end4'];
	$end6 = $_POST['end5'];
	$yobi6 = $_POST['end6'];
	
}elseif($week1 == '水'){
	$yotei1 = $_POST['yotei6'];
	$yotei2 = $_POST['yobi4'];
	$yotei3 = $_POST['yotei1'];
	$yotei4 = $_POST['yotei2'];
	$yotei5 = $_POST['yotei3'];
	$yotei6 = $_POST['yotei4'];
	$yobi4 = $_POST['yotei5'];
	
	$start1 = $_POST['start6'];
	$start2 = $_POST['yobi5'];
	$start3 = $_POST['start1'];
	$start4 = $_POST['start2'];
	$start5 = $_POST['start3'];
	$start6 = $_POST['start4'];
	$yobi5 = $_POST['start5'];
	
	$end1 = $_POST['end6'];
	$end2 = $_POST['yobi6'];
	$end3 = $_POST['end1'];
	$end4 = $_POST['end2'];
	$end5 = $_POST['end3'];
	$end6 = $_POST['end4'];
	$yobi6 = $_POST['end5'];
	
}elseif($week1 == '木'){
	$yotei1 = $_POST['yotei5'];
	$yotei2 = $_POST['yotei6'];
	$yotei3 = $_POST['yobi4'];
	$yotei4 = $_POST['yotei1'];
	$yotei5 = $_POST['yotei2'];
	$yotei6 = $_POST['yotei3'];
	$yobi4 = $_POST['yotei4'];
	
	$start1 = $_POST['start5'];
	$start2 = $_POST['start6'];
	$start3 = $_POST['yobi5'];
	$start4 = $_POST['start1'];
	$start5 = $_POST['start2'];
	$start6 = $_POST['start3'];
	$yobi5 = $_POST['start4'];
	
	$end1 = $_POST['end5'];
	$end2 = $_POST['end6'];
	$end3 = $_POST['yobi6'];
	$end4 = $_POST['end1'];
	$end5 = $_POST['end2'];
	$end6 = $_POST['end3'];
	$yobi6 = $_POST['end4'];
	
}elseif($week1 == '金'){
	$yotei1 = $_POST['yotei4'];
	$yotei2 = $_POST['yotei5'];
	$yotei3 = $_POST['yotei6'];
	$yotei4 = $_POST['yobi4'];
	$yotei5 = $_POST['yotei1'];
	$yotei6 = $_POST['yotei2'];
	$yobi4 = $_POST['yotei3'];
	
	$start1 = $_POST['start4'];
	$start2 = $_POST['start5'];
	$start3 = $_POST['start6'];
	$start4 = $_POST['yobi5'];
	$start5 = $_POST['start1'];
	$start6 = $_POST['start2'];
	$yobi5 = $_POST['start3'];
	
	$end1 = $_POST['end4'];
	$end2 = $_POST['end5'];
	$end3 = $_POST['end6'];
	$end4 = $_POST['yobi6'];
	$end5 = $_POST['end1'];
	$end6 = $_POST['end2'];
	$yobi6 = $_POST['end3'];
	
}elseif($week1 == '土'){
	$yotei1 = $_POST['yotei3'];
	$yotei2 = $_POST['yotei4'];
	$yotei3 = $_POST['yotei5'];
	$yotei4 = $_POST['yotei6'];
	$yotei5 = $_POST['yobi4'];
	$yotei6 = $_POST['yotei1'];
	$yobi4 = $_POST['yotei2'];
	
	$start1 = $_POST['start3'];
	$start2 = $_POST['start4'];
	$start3 = $_POST['start5'];
	$start4 = $_POST['start6'];
	$start5 = $_POST['yobi5'];
	$start6 = $_POST['start1'];
	$yobi5 = $_POST['start2'];
	
	$end1 = $_POST['end3'];
	$end2 = $_POST['end4'];
	$end3 = $_POST['end5'];
	$end4 = $_POST['end6'];
	$end5 = $_POST['yobi6'];
	$end6 = $_POST['end1'];
	$yobi6 = $_POST['end2'];
	
}elseif($week1 == '日'){
	$yotei1 = $_POST['yotei2'];
	$yotei2 = $_POST['yotei3'];
	$yotei3 = $_POST['yotei4'];
	$yotei4 = $_POST['yotei5'];
	$yotei5 = $_POST['yotei6'];
	$yotei6 = $_POST['yobi4'];
	$yobi4 = $_POST['yotei1'];
	
	$start1 = $_POST['start2'];
	$start2 = $_POST['start3'];
	$start3 = $_POST['start4'];
	$start4 = $_POST['start5'];
	$start5 = $_POST['start6'];
	$start6 = $_POST['yobi5'];
	$yobi5 = $_POST['start1'];
	
	$end1 = $_POST['end2'];
	$end2 = $_POST['end3'];
	$end3 = $_POST['end4'];
	$end4 = $_POST['end5'];
	$end5 = $_POST['end6'];
	$end6 = $_POST['yobi6'];
	$yobi6 = $_POST['end1'];
}

#$yotei1 = $_POST['yotei1'];
#$start1 = $_POST['start1'];
#$end1 = $_POST['end1'];
#$yotei2 = $_POST['yotei2'];
#$start2 = $_POST['start2'];
#$end2 = $_POST['end2'];
#$yotei3 = $_POST['yotei3'];
#$start3 = $_POST['start3'];
#$end3 = $_POST['end3'];
#$yotei4 = $_POST['yotei4'];
#$start4 = $_POST['start4'];
#$end4 = $_POST['end4'];
#$yotei5 = $_POST['yotei5'];
#$start5 = $_POST['start5'];
#$end5 = $_POST['end5'];
#$yotei6 = $_POST['yotei6'];
#$start6 = $_POST['start6'];
#$end6 = $_POST['end6'];
$yobi1 = htmlspecialchars($_POST['yobi1'] , ENT_QUOTES);
$yobi2 = htmlspecialchars($_POST['yobi2'] , ENT_QUOTES);
$yobi3 = htmlspecialchars($_POST['yobi3'] , ENT_QUOTES);
#$yobi4 = $_POST['yobi4'];	//yotei7
#$yobi5 = $_POST['yobi5'];	//start7
#$yobi6 = $_POST['yobi6'];	//end7
$yobi7 = $_POST['yobi7'];	//表示期限日
$yobi8 = $_POST['yobi8'];	//登録日
$yobi9 = $_POST['yobi9'];	//新人チェック
$yobi10 = $_POST['yobi10'];	//オススメチェック
$edittime = $_POST['edittime'];

//テキストを整形
$name = mb_convert_kana($name,'KaV','utf-8');
$comment = mb_convert_kana($comment,'KaV','utf-8');
$comment2 = mb_convert_kana($comment2,'KaV','utf-8');
$profinfo1 = mb_convert_kana($profinfo1,'KaV','utf-8');
$profinfo2 = mb_convert_kana($profinfo2,'KaV','utf-8');
$profinfo3 = mb_convert_kana($profinfo3,'KaV','utf-8');
$profinfo4 = mb_convert_kana($profinfo4,'KaV','utf-8');
$profinfo5 = mb_convert_kana($profinfo5,'KaV','utf-8');
$profinfo6 = mb_convert_kana($profinfo6,'KaV','utf-8');
$profinfo7 = mb_convert_kana($profinfo7,'KaV','utf-8');
$profinfo8 = mb_convert_kana($profinfo8,'KaV','utf-8');
$profinfo9 = mb_convert_kana($profinfo9,'KaV','utf-8');
$profinfo10 = mb_convert_kana($profinfo10,'KaV','utf-8');
$yobi1 = mb_convert_kana($yobi1,'KaV','utf-8');
$yobi2 = mb_convert_kana($yobi2,'KaV','utf-8');
$yobi3 = mb_convert_kana($yobi3,'KaV','utf-8');
$yobi4 = mb_convert_kana($yobi4,'KaV','utf-8');
$yobi5 = mb_convert_kana($yobi5,'KaV','utf-8');
#$yobi6 = mb_convert_kana($yobi6,'KaV','utf-8');
$yobi7 = mb_convert_kana($yobi7,'KaV','utf-8');
$yobi8 = mb_convert_kana($yobi8,'KaV','utf-8');
#$yobi9 = mb_convert_kana($yobi9,'KaV','utf-8');
#$yobi10 = mb_convert_kana($yobi10,'KaV','utf-8');
$comment = nl2br($comment); //改行コードの前に改行タグを入れる
$comment2 = nl2br($comment2); //改行コードの前に改行タグを入れる
$comment = str_replace("\r\n" , "" , $comment); //改行コードを削除
$comment2 = str_replace("\r\n" , "" , $comment2); //改行コードを削除
$age = str_replace("\r\n" , "" , $age); //改行コードを削除
$height = str_replace("\r\n" , "" , $height); //改行コードを削除
$weight = str_replace("\r\n" , "" , $weight); //改行コードを削除
$bust = str_replace("\r\n" , "" , $bust); //改行コードを削除
$cup = str_replace("\r\n" , "" , $cup); //改行コードを削除
$waist = str_replace("\r\n" , "" , $waist); //改行コードを削除
$hip = str_replace("\r\n" , "" , $hip); //改行コードを削除
$option1 = str_replace("\r\n" , "" , $option1); //改行コードを削除
$option2 = str_replace("\r\n" , "" , $option2); //改行コードを削除
$option3 = str_replace("\r\n" , "" , $option3); //改行コードを削除
$option4 = str_replace("\r\n" , "" , $option4); //改行コードを削除
$option5 = str_replace("\r\n" , "" , $option5); //改行コードを削除
$option6 = str_replace("\r\n" , "" , $option6); //改行コードを削除
$option7 = str_replace("\r\n" , "" , $option7); //改行コードを削除
$option8 = str_replace("\r\n" , "" , $option8); //改行コードを削除
$option9 = str_replace("\r\n" , "" , $option9); //改行コードを削除
$option10 = str_replace("\r\n" , "" , $option10); //改行コードを削除
$option11 = str_replace("\r\n" , "" , $option11); //改行コードを削除
$option12 = str_replace("\r\n" , "" , $option12); //改行コードを削除
$option13 = str_replace("\r\n" , "" , $option13); //改行コードを削除
$option14 = str_replace("\r\n" , "" , $option14); //改行コードを削除
$option15 = str_replace("\r\n" , "" , $option15); //改行コードを削除
$option16 = str_replace("\r\n" , "" , $option16); //改行コードを削除
$option17 = str_replace("\r\n" , "" , $option17); //改行コードを削除
$option18 = str_replace("\r\n" , "" , $option18); //改行コードを削除
$option19 = str_replace("\r\n" , "" , $option19); //改行コードを削除
$option20 = str_replace("\r\n" , "" , $option20); //改行コードを削除
$option21 = str_replace("\r\n" , "" , $option21); //改行コードを削除
$option22 = str_replace("\r\n" , "" , $option22); //改行コードを削除
$option23 = str_replace("\r\n" , "" , $option23); //改行コードを削除
$option24 = str_replace("\r\n" , "" , $option24); //改行コードを削除
$option25 = str_replace("\r\n" , "" , $option25); //改行コードを削除
$option26 = str_replace("\r\n" , "" , $option26); //改行コードを削除
$option27 = str_replace("\r\n" , "" , $option27); //改行コードを削除
$option28 = str_replace("\r\n" , "" , $option28); //改行コードを削除
$option29 = str_replace("\r\n" , "" , $option29); //改行コードを削除
$option30 = str_replace("\r\n" , "" , $option30); //改行コードを削除
$option31 = str_replace("\r\n" , "" , $option31); //改行コードを削除
$option32 = str_replace("\r\n" , "" , $option32); //改行コードを削除
$option33 = str_replace("\r\n" , "" , $option33); //改行コードを削除
$option34 = str_replace("\r\n" , "" , $option34); //改行コードを削除
$option35 = str_replace("\r\n" , "" , $option35); //改行コードを削除
$option36 = str_replace("\r\n" , "" , $option36); //改行コードを削除
$option37 = str_replace("\r\n" , "" , $option37); //改行コードを削除
$option38 = str_replace("\r\n" , "" , $option38); //改行コードを削除
$option39 = str_replace("\r\n" , "" , $option39); //改行コードを削除
$option40 = str_replace("\r\n" , "" , $option40); //改行コードを削除
$start1 = str_replace("\r\n" , "" , $start1); //改行コードを削除
$end1 = str_replace("\r\n" , "" , $end1); //改行コードを削除
$start2 = str_replace("\r\n" , "" , $start2); //改行コードを削除
$end2 = str_replace("\r\n" , "" , $end2); //改行コードを削除
$start3 = str_replace("\r\n" , "" , $start3); //改行コードを削除
$end3 = str_replace("\r\n" , "" , $end3); //改行コードを削除
$start4 = str_replace("\r\n" , "" , $start4); //改行コードを削除
$end4 = str_replace("\r\n" , "" , $end4); //改行コードを削除
$start5 = str_replace("\r\n" , "" , $start5); //改行コードを削除
$end5 = str_replace("\r\n" , "" , $end5); //改行コードを削除
$start6 = str_replace("\r\n" , "" , $start6); //改行コードを削除
$end6 = str_replace("\r\n" , "" , $end6); //改行コードを削除
$yobi5 = str_replace("\r\n" , "" , $yobi5); //改行コードを削除
$yobi6 = str_replace("\r\n" , "" , $yobi6); //改行コードを削除

$start1 = str_replace("\n" , "" , $start1); //改行コードを削除
$end1 = str_replace("\n" , "" , $end1); //改行コードを削除
$start2 = str_replace("\n" , "" , $start2); //改行コードを削除
$end2 = str_replace("\n" , "" , $end2); //改行コードを削除
$start3 = str_replace("\n" , "" , $start3); //改行コードを削除
$end3 = str_replace("\n" , "" , $end3); //改行コードを削除
$start4 = str_replace("\n" , "" , $start4); //改行コードを削除
$end4 = str_replace("\n" , "" , $end4); //改行コードを削除
$start5 = str_replace("\n" , "" , $start5); //改行コードを削除
$end5 = str_replace("\n" , "" , $end5); //改行コードを削除
$start6 = str_replace("\n" , "" , $start6); //改行コードを削除
$end6 = str_replace("\n" , "" , $end6); //改行コードを削除
$yobi5 = str_replace("\n" , "" , $yobi5); //改行コードを削除
$yobi6 = str_replace("\n" , "" , $yobi6); //改行コードを削除
$age = str_replace("\n" , "" , $age); //改行コードを削除
$height = str_replace("\n" , "" , $height); //改行コードを削除
$weight = str_replace("\n" , "" , $weight); //改行コードを削除
$bust = str_replace("\n" , "" , $bust); //改行コードを削除
$cup = str_replace("\n" , "" , $cup); //改行コードを削除
$waist = str_replace("\n" , "" , $waist); //改行コードを削除
$hip = str_replace("\n" , "" , $hip); //改行コードを削除

//[,]を除去
$name = str_replace(',' , '' , $name);
$comment = str_replace(',' , '' , $comment);
$comment2 = str_replace(',' , '' , $comment2);
$profinfo1 = str_replace(',' , '' , $profinfo1);
$profinfo2 = str_replace(',' , '' , $profinfo2);
$profinfo3 = str_replace(',' , '' , $profinfo3);
$profinfo4 = str_replace(',' , '' , $profinfo4);
$profinfo5 = str_replace(',' , '' , $profinfo5);
$profinfo6 = str_replace(',' , '' , $profinfo6);
$profinfo7 = str_replace(',' , '' , $profinfo7);
$profinfo8 = str_replace(',' , '' , $profinfo8);
$profinfo9 = str_replace(',' , '' , $profinfo9);
$profinfo10 = str_replace(',' , '' , $profinfo10);
$yobi1 = str_replace(',' , '' , $yobi1);
$yobi2 = str_replace(',' , '' , $yobi2);
$yobi3 = str_replace(',' , '' , $yobi3);

//追加
$comment2 = str_replace('\\' , '' , $comment2);
$comment2 = str_replace('<p>' , '' , $comment2);
$comment2 = str_replace('</p>' , '' , $comment2);

//時間をソート用に変換　0:30-4:30
include("../parts/starttime_conversion.php");

//書込みデータを結合
//$line = array($id,$name,$name2,$age,$height,$weight,$bust,$cup,$waist,$hip,$comment,$comment2,$profinfo1,$profinfo2,$profinfo3,$profinfo4,$profinfo5,$profinfo6,$profinfo7,$profinfo8,$profinfo9,$profinfo10,$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8,$option9,$option10,$option11,$option12,$option13,$option14,$option15,$option16,$option17,$option18,$option19,$option20,$option21,$option22,$option23,$option24,$option25,$option26,$option27,$option28,$option29,$option30,$option31,$option32,$option33,$option34,$option35,$option36,$option37,$option38,$option39,$option40,$photo1,$photo2,$photo3,$photo4,$photo5,$photo6,$photo7,$photo8,$photo9,$photo10,$yotei1,$start1,$end1,$yotei2,$start2,$end2,$yotei3,$start3,$end3,$yotei4,$start4,$end4,$yotei5,$start5,$end5,$yotei6,$start6,$end6,$yobi1,$yobi2,$yobi3,$yobi4,$yobi5,$yobi6,$yobi7,$yobi8,$yobi9,$yobi10,$edittime);
//$line = implode(',' , $line);
//$line = $line . "\n";

//編集・削除キー
$operation = $_POST['operation'];

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql3, "UPDATE `data` SET `yotei1`='$yotei1',`start1`='$start1',`end1`='$end1',`yotei2`='$yotei2',`start2`='$start2',`end2`='$end2',`yotei3`='$yotei3',`start3`='$start3',`end3`='$end3',`yotei4`='$yotei4',`start4`='$start4',`end4`='$end4',`yotei5`='$yotei5',`start5`='$start5',`end5`='$end5',`yotei6`='$yotei6',`start6`='$start6',`end6`='$end6',`yobi1`='$yobi1',`yobi2`='$yobi2',`yobi3`='$yobi3',`yobi4`='$yobi4',`yobi5`='$yobi5',`yobi6`='$yobi6',`yobi7`='$yobi7',`yobi9`='$yobi9',`edittime`='$edittime' WHERE `name2` LIKE '$name2' LIMIT 1");
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);


?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="refresh" content="0;URL=schedule_week2.php?master_id=<?php echo $master_id; ?>">
<title>出勤管理</title>
</head>

<body>
</body>
</html><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>1週間出勤設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　1週間出勤設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	<div id="top_fade">	
	<div class="drawer drawer--left">
		<?php include ('php/header.php'); ?>
		
		<div id="page_base">
			<h2>1週間出勤設定</h2>
			<div class="page_base_in">
				<div class="page_base_box_2">				
					<h3>各キャストの出勤設定</h3>
					<div class="wrapper">
						
						<?php
$result=mysqli_query($sql, "SELECT * From `data` WHERE yobi1='$login_id' ORDER by option12");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){

include('../parts/basic_hensu3.php');
include('../parts/starttime_conversion2.php');	/* 出勤開始時間を変換 */
include('../parts/schetime.php');

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

echo "<div class=\"element_cast\">
      <div class=\"top_cast_box\"><div class=\"top_cast_box_in\"><div class=\"photo_thumbs\">\n";

//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"../photo/nophoto_1.jpg\" class=\"lozad\" alt=\"".$name."\">\n";
}else{
	echo "<img src=\"https://www.caba-web.com/cabaweb_master_admin/".$photo1."".$option13."\" alt=\"".$name."\"/>\n";
}
echo "</div>";
	
if($option2==''){
	echo '';
}else{
	echo '<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>';
}
	if($option4==''){
	echo '';
}else{
	echo '<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>';
}
	//出勤データの有効・無効
    $getdays=getDays($tdy_8dig,$yobi7);
    //本日の出勤
      //▽表示内容ここから
      if($getdays<1){
        if($yobi9==$edi){
        if ($yotei1 == '3' || $yotei1 == '1') {
          echo '<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>';
        }else{
          echo '';
        }
        }else{
          echo '';
        }
      }else{
        if($yotei1 == '3' || $yotei1 == '1') {
          echo '<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>';
        }else{
          echo '';
        }
      }
	
echo "<p>".$name."</p></div><div class=\"top_cast_box_button\">";
		
if($option1=='1'){
	echo '<div class="top_cast_hyouji">公開中</div>';
}elseif($option1=='2'){
	echo '<div class="top_cast_hyouji_no">非公開</div>';
}else{
	echo '<div class="top_cast_hyouji">公開中</div>';
}
	
	
	//写真を表示
	
	echo "<div class=\"top_cast_box_button_b\"><a data-target=\"modal_delete_".$name2."\" class=\"btn_sub modal_open\">1週間出勤設定</a></div>
									<div class=\"clear\"></div>\n";
				
echo <<<GOLGO
<table><tr><td class="t_week-1">
            $day1($week1)</td>
GOLGO;
	
	$getdays=getDays($tdy_8dig,$yobi7);


if($getdays<1){
	if($yobi9==$edi){
		if ($yotei1 == '2') {
echo "<td class=\"t_week-3\">お休み</td>";
} elseif ($yotei1 == '3') {
echo "<td class=\"t_week-2\">出勤</td>";
}elseif ($yotei1 == '1') {
echo "<td class=\"t_week-2\">出勤</td>";
} else {
echo "<td class=\"t_week-3\">お休み</td>";
}
	}else{
echo "<td class=\"t_week-3\">お休み</td>";
	}
}else{
if ($yotei1 == '2') {
echo "<td class=\"t_week-3\">お休み</td>";
} elseif ($yotei1 == '3') {
echo "<td class=\"t_week-2\">出勤</td>";
}elseif ($yotei1 == '1') {
echo "<td class=\"t_week-2\">出勤</td>";
} else {
echo "<td class=\"t_week-3\">お休み</td>";
}
}
echo "</tr>\n";
	
	echo <<<GOLGO
<tr><td class="t_week-1">
            $day2($week2)</td>
GOLGO;
	

if($getdays<2){
echo "<td class=\"t_week-3\">お休み</td>";
}else{
if ($yotei2 == '2') {
echo "<td class=\"t_week-3\">お休み</td>";
} elseif ($yotei2 == '3') {
echo "<td class=\"t_week-2\">出勤</td>";
}elseif ($yotei2 == '1') {
echo "<td class=\"t_week-2\">出勤</td>";
} else {
echo "<td class=\"t_week-3\">お休み</td>";
}
}
echo "</tr>\n";
	echo <<<GOLGO
<tr><td class="t_week-1">
            $day3($week3)</td>
GOLGO;
	

if($getdays<3){
echo "<td class=\"t_week-3\">お休み</td>";
}else{
if ($yotei3 == '2') {
echo "<td class=\"t_week-3\">お休み</td>";
} elseif ($yotei3 == '3') {
echo "<td class=\"t_week-2\">出勤</td>";
}elseif ($yotei3 == '1') {
echo "<td class=\"t_week-2\">出勤</td>";
} else {
echo "<td class=\"t_week-3\">お休み</td>";
}
}
echo "</tr></table></div><!-- モーダル1 -->\n";
	


echo "<div id=\"modal_delete_".$name2."\" class=\"modal_box\">          
              <p>
                <div class=\"modal_box_title\">".$name."の出勤設定</div>
                <form action=\"schedule_rewrite.php\" method=\"post\">
				<input type=\"hidden\" name=\"id\" value=\"".$id."\" />
<input type=\"hidden\" name=\"name2\" value=\"".$name2."\" />
<input type=\"hidden\" name=\"yobi1\" value=\"".$yobi1."\" />
<input type=\"hidden\" name=\"edittime\" value=\"".$edi."\" />
                <table>
                  <tr>
                    <td class=\"t_weeklist-1\">".$day1."(".$week1.")</td>
                    <td class=\"t_weeklist-2\">";

	
$getdays=getDays($tdy_8dig,$yobi7);

if($getdays<1){
	if($yobi9==$edi){
		if ($yotei1 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
			
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}
	}else{
		
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
	}
}else{
if ($yotei1 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei1" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei1" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}
}
	


echo "</tr>\n";
echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1">$day2($week2)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<2){
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei2" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei2 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei2" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei2 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei2" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei2 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei2" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei2" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei2" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
}
}
echo "</tr>\n";
echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1">$day3($week3)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<3){
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei3" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei3 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei3" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei3 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei3" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei3 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei3" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei3" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei3" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1">$day4($week4)</td>
                    <td class="t_weeklist-2">
GOLGO;
	
if($getdays<4){
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei4 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei4 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei4 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1">$day5($week5)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<5){
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei5" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei5 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei5" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei5 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei5" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei5 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei5" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei5" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei5" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1">$day6($week6)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<6){
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei6" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yotei6 == '2') {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei6" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yotei6 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei6" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yotei6 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei6" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yotei6" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yotei6" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1">$day7($week7)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<7){
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yobi4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}else{
if ($yobi4== '2') {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yobi4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} elseif ($yobi4 == '3') {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yobi4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
}elseif ($yobi4 == '1') {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yobi4" value="3" checked="checked" /><span class="castschedule_modal_box_font">出勤</span></label></td>
GOLGO;
} else {
echo <<<GOLGO
<label><input type="radio" name="yobi4" value="2" checked="checked" /><span class="castschedule_modal_box_font">お休み</span></label>
            </td>
                    <td class="t_weeklist-3">
<label><input type="radio" name="yobi4" value="3" /><span class="castschedule_modal_box_font">出勤</span></label></td>

GOLGO;
	
}
}
	echo "</tr></table>\n";
	$time1 = date('Ymd' , time() + (144+$jisa)*3600);
	$time2 = date('md' , time() + $jisa*3600);
	echo " <div class=\"under_button_area_2\"><input type=\"hidden\" name=\"operation\" value=\"edit\" />
	<input type=\"hidden\" name=\"yobi7\" value=\"".$time1."\" />
      <input type=\"hidden\" name=\"yobi9\" value=\"".$time2."\" />
                  <button type=\"submit\" class=\"formbtn_2\">出勤を送信</button>
                </div>
              </form>
            </p>
            <p><a class=\"modal_close\"><i class=\zmdi zmdi-close\">✕<br></i></a></p>
          </div></div></div>\n";

}
//ソート関数の定義(登録日）
//function cmp($a,$b){
//return strcmp($a[0],$b[0]);
//}
?>
					</div>		
				</div>
			</div>
		</div>
		<?php include ('php/footer.php'); ?>
	
	</div><!--drawer drawer--left-->
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page-top');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
//スクロールしてトップ
    topBtn.click(function () {
	$('body,html').animate({
	scrollTop: 0}, 500);
		return false;
    });
});
</script>
<!--モーダル　プラグイン-->
<script>
$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  $('.modal_open').click(function(){
 
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  });
});
</script>	
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>