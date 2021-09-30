<?php
	
	//設定ファイル読み込み
	require_once 'conf.php';

$master_id = $_POST['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}
//フォームからの生データ
$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = htmlspecialchars($_POST['name2'] , ENT_QUOTES);
$age = $_POST['age'];
$height = $_POST['height'];
$weight = $_POST['weight'];
$bust = $_POST['bust'];
$cup = $_POST['cup'];
$waist = $_POST['waist'];
$hip = $_POST['hip'];
$comment = htmlspecialchars($_POST['comment'] , ENT_QUOTES);
$comment2 =  $_POST['comment2'];
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
$profinfo11 = htmlspecialchars($_POST['profinfo11'] , ENT_QUOTES);
$profinfo12 = htmlspecialchars($_POST['profinfo12'] , ENT_QUOTES);
$profinfo13 = htmlspecialchars($_POST['profinfo13'] , ENT_QUOTES);
$profinfo14 = htmlspecialchars($_POST['profinfo14'] , ENT_QUOTES);
$option1 = htmlspecialchars($_POST['option1'] , ENT_QUOTES);
$option2 = htmlspecialchars($_POST['option2'] , ENT_QUOTES);
$option3 = htmlspecialchars($_POST['option3'] , ENT_QUOTES);
$option4 = htmlspecialchars($_POST['option4'] , ENT_QUOTES);
$option5 = htmlspecialchars($_POST['option5'] , ENT_QUOTES);
$option6 = htmlspecialchars($_POST['option6'] , ENT_QUOTES);
$option7 = htmlspecialchars($_POST['option7'] , ENT_QUOTES);
$option8 = htmlspecialchars($_POST['option8'] , ENT_QUOTES);
$option9 = htmlspecialchars($_POST['option9'] , ENT_QUOTES);
$option10 = htmlspecialchars($_POST['option10'] , ENT_QUOTES);
$option11 = htmlspecialchars($_POST['option11'] , ENT_QUOTES);
$option12 = htmlspecialchars($_POST['option12'] , ENT_QUOTES);
$option13 = htmlspecialchars($_POST['option13'] , ENT_QUOTES);
$option14 = htmlspecialchars($_POST['option14'] , ENT_QUOTES);
$option15 = htmlspecialchars($_POST['option15'] , ENT_QUOTES);
$option16 = htmlspecialchars($_POST['option16'] , ENT_QUOTES);
$option17 = htmlspecialchars($_POST['option17'] , ENT_QUOTES);
$option18 = htmlspecialchars($_POST['option18'] , ENT_QUOTES);
$option19 = htmlspecialchars($_POST['option19'] , ENT_QUOTES);
$option20 = htmlspecialchars($_POST['option20'] , ENT_QUOTES);
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

//文字コード変換
$name = mb_convert_encoding($name,'UTF-8','AUTO');
$name2 = mb_convert_encoding($name2,'UTF-8','AUTO');
$comment = mb_convert_encoding($comment,'UTF-8','AUTO');
$profinfo1 = mb_convert_encoding($profinfo1,'UTF-8','AUTO');
$profinfo2 = mb_convert_encoding($profinfo2,'UTF-8','AUTO');
$profinfo3 = mb_convert_encoding($profinfo3,'UTF-8','AUTO');
$profinfo4 = mb_convert_encoding($profinfo4,'UTF-8','AUTO');
$profinfo5 = mb_convert_encoding($profinfo5,'UTF-8','AUTO');
$profinfo6 = mb_convert_encoding($profinfo6,'UTF-8','AUTO');
$profinfo7 = mb_convert_encoding($profinfo7,'UTF-8','AUTO');
$profinfo8 = mb_convert_encoding($profinfo8,'UTF-8','AUTO');
$profinfo9 = mb_convert_encoding($profinfo9,'UTF-8','AUTO');
$profinfo10 = mb_convert_encoding($profinfo10,'UTF-8','AUTO');
$profinfo11 = mb_convert_encoding($profinfo11,'UTF-8','AUTO');
$profinfo12 = mb_convert_encoding($profinfo12,'UTF-8','AUTO');
$profinfo13 = mb_convert_encoding($profinfo13,'UTF-8','AUTO');
$profinfo14 = mb_convert_encoding($profinfo14,'UTF-8','AUTO');
$yobi1 = mb_convert_encoding($yobi1,'UTF-8','AUTO');
$yobi2 = mb_convert_encoding($yobi2,'UTF-8','AUTO');
$yobi3 = mb_convert_encoding($yobi3,'UTF-8','AUTO');
#$yobi4 = mb_convert_encoding($yobi4,'UTF-8','AUTO');
#$yobi5 = mb_convert_encoding($yobi5,'UTF-8','AUTO');
#$yobi6 = mb_convert_encoding($yobi6,'UTF-8','AUTO');
$yobi7 = mb_convert_encoding($yobi7,'UTF-8','AUTO');
$yobi8 = mb_convert_encoding($yobi8,'UTF-8','AUTO');

//半角小文字に変換
$name2 = mb_convert_kana($name2,'a','utf-8');
$name2 = strtolower($name2);

//テキストを整形
$comment = mb_convert_kana($comment,'KaV','utf-8');
$profinfo1 = mb_convert_kana($profinfo1,'KaV','utf-8');
$profinfo2 = mb_convert_kana($profinfo2,'KaV','utf-8');
$profinfo3 = mb_convert_kana($profinfo3,'KaV','utf-8');
$profinfo4 = mb_convert_kana($profinfo4,'KaV','utf-8');
$profinfo5 = mb_convert_kana($profinfo5,'KaV','utf-8');
$profinfo6 = mb_convert_kana($profinfo6,'KaV','utf-8');
$profinfo7 = mb_convert_kana($profinfo7,'KaV','utf-8');
$profinfo8 = mb_convert_kana($profinfo8,'KaV','utf-8');
$profinfo9 = mb_convert_kana($profinfo9,'KaV','utf-8');
$profinfo10 = mb_convert_kana($profinfo10,'Ka','utf-8');
$profinfo11 = mb_convert_kana($profinfo11,'Ka','utf-8');
$profinfo12 = mb_convert_kana($profinfo12,'Ka','utf-8');
$profinfo13 = mb_convert_kana($profinfo13,'Ka','utf-8');
$profinfo14 = mb_convert_kana($profinfo14,'Ka','utf-8');
$yobi1 = mb_convert_kana($yobi1,'KaV','utf-8');
$yobi2 = mb_convert_kana($yobi2,'KaV','utf-8');
$yobi3 = mb_convert_kana($yobi3,'KaV','utf-8');
$yobi4 = mb_convert_kana($yobi4,'KaV','utf-8');
$yobi5 = mb_convert_kana($yobi5,'KaV','utf-8');
$yobi6 = mb_convert_kana($yobi6,'KaV','utf-8');
$yobi7 = mb_convert_kana($yobi7,'KaV','utf-8');
$yobi8 = mb_convert_kana($yobi8,'KaV','utf-8');
$yobi9 = mb_convert_kana($yobi9,'KaV','utf-8');
$yobi10 = mb_convert_kana($yobi10,'KaV','utf-8');
$comment = nl2br($comment); //改行コードの前に改行タグを入れる
$comment = str_replace("\r\n" , "" , $comment); //改行コードを削除
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
$name2 = str_replace(',' , '' , $name2);
$comment = str_replace(',' , '' , $comment);


$yobi1 = str_replace(',' , '' , $yobi1);
$yobi2 = str_replace(',' , '' , $yobi2);
$yobi3 = str_replace(',' , '' , $yobi3);

//スペースを除去
$name2 = str_replace(' ' , '' , $name2);
$name2 = str_replace('　' , '' , $name2);

//[']を除去  SQL用追加
$name = str_replace('\'' , '' , $name);
$name2 = str_replace('\'' , '' , $name2);
$comment = str_replace('\'' , '' , $comment);
$profinfo1 = str_replace('\'' , '' , $profinfo1);
$profinfo2 = str_replace('\'' , '' , $profinfo2);
$profinfo3 = str_replace('\'' , '' , $profinfo3);
$profinfo4 = str_replace('\'' , '' , $profinfo4);
$profinfo5 = str_replace('\'' , '' , $profinfo5);
$profinfo6 = str_replace('\'' , '' , $profinfo6);
$profinfo7 = str_replace('\'' , '' , $profinfo7);
$profinfo8 = str_replace('\'' , '' , $profinfo8);
$profinfo9 = str_replace('\'' , '' , $profinfo9);
$profinfo10 = str_replace('\'' , '' , $profinfo10);
$profinfo11 = str_replace('\'' , '' , $profinfo11);
$profinfo12 = str_replace('\'' , '' , $profinfo12);
$profinfo13 = str_replace('\'' , '' , $profinfo13);
$profinfo14 = str_replace('\'' , '' , $profinfo14);
$yobi1 = str_replace('\'' , '' , $yobi1);
$yobi2 = str_replace('\'' , '' , $yobi2);
$yobi3 = str_replace('\'' , '' , $yobi3);

$login_id = $yobi1;

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト確認">

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
				<h2>キャスト確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="cast_write.php" method="post" id="form">
							<p>
								<label>
									<span>■お名前</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $name; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■年齢</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $age; ?>歳</span>
								</label>
							</p>
							<p>
								<label>
									<span>■お誕生日</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo1; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■血液型</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo2; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■出身地</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo3; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■趣味・特技</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo4; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■好みのタイプ</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo5; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■好きな食べ物</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo6; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■好きなブランド</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo7; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■チャームポイント</span>
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo8; ?></span>
								</label>
							</p>
							<div class="cast_touroku_area">
								<h3>SNS</h3>
								<p>
									<label><span>Instagram URL</span><span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo9; ?></span>
								</label>
								</p>
								<p>
									<label><span>Instagram RSS</span><span style="font-size: 80%; color: #4D4D4D;"><?php echo $option2; ?></span>
								</label>
								</p>
								<p>
									<label><span>You Tube URL</span><span style="font-size: 80%; color: #4D4D4D;"><?php echo $option3; ?></span>
								</label>
								</p>
								<p>
									<label><span>You Tube RSS</span><span style="font-size: 80%; color: #4D4D4D;"><?php echo $option4; ?></span>
								</label>
								</p>
								<p>
									<label><span>Twitter URL</span><span style="font-size: 80%; color: #4D4D4D;"><?php echo $profinfo10; ?></span></label>
								</p>
								<p>
									<label><span>Tik Tok URL</span><span style="font-size: 80%; color: #4D4D4D;"><?php echo $option5; ?></span></label>
								</p>																
							</div>
							<input type="hidden" name="id" value="<?php echo $name2; ?>" />
<input type="hidden" name="name" value="<?php echo $name; ?>" />
<input type="hidden" name="name2" value="<?php echo $name2; ?>" />
<input type="hidden" name="age" value="<?php echo $age; ?>" />
<input type="hidden" name="height" value="<?php echo $height; ?>" />
<input type="hidden" name="weight" value="<?php echo $weight; ?>" />
<input type="hidden" name="bust" value="<?php echo $bust; ?>" />
<input type="hidden" name="cup" value="<?php echo $cup; ?>" />
<input type="hidden" name="waist" value="<?php echo $waist; ?>" />
<input type="hidden" name="hip" value="<?php echo $hip; ?>" />
<input type="hidden" name="comment" value="<?php echo $comment; ?>" />
<input type="hidden" name="comment2" value="<?php echo $comment2; ?>" />
<input type="hidden" name="profinfo1" value="<?php echo $profinfo1; ?>" />
<input type="hidden" name="profinfo2" value="<?php echo $profinfo2; ?>" />
<input type="hidden" name="profinfo3" value="<?php echo $profinfo3; ?>" />
<input type="hidden" name="profinfo4" value="<?php echo $profinfo4; ?>" />
<input type="hidden" name="profinfo5" value="<?php echo $profinfo5; ?>" />
<input type="hidden" name="profinfo6" value="<?php echo $profinfo6; ?>" />
<input type="hidden" name="profinfo7" value="<?php echo $profinfo7; ?>" />
<input type="hidden" name="profinfo8" value="<?php echo $profinfo8; ?>" />
<input type="hidden" name="profinfo9" value="<?php echo $profinfo9; ?>" />
<input type="hidden" name="profinfo10" value="<?php echo $profinfo10; ?>" />
<input type="hidden" name="profinfo11" value="<?php echo $profinfo11; ?>" />
<input type="hidden" name="profinfo12" value="<?php echo $profinfo12; ?>" />
<input type="hidden" name="profinfo13" value="<?php echo $profinfo13; ?>" />
<input type="hidden" name="profinfo14" value="<?php echo $profinfo14; ?>" />
<input type="hidden" name="option1" value="1" />
<input type="hidden" name="option2" value="<?php echo $option2; ?>" />
<input type="hidden" name="option3" value="<?php echo $option3; ?>" />
<input type="hidden" name="option4" value="<?php echo $option4; ?>" />
<input type="hidden" name="option5" value="<?php echo $option5; ?>" />
<input type="hidden" name="option6" value="<?php echo $option6; ?>" />
<input type="hidden" name="option7" value="<?php echo $option7; ?>" />
<input type="hidden" name="option8" value="<?php echo $option8; ?>" />
<input type="hidden" name="option9" value="<?php echo $option9; ?>" />
<input type="hidden" name="option10" value="<?php echo $option10; ?>" />
<input type="hidden" name="option11" value="<?php echo $option11; ?>" />
<input type="hidden" name="option12" value="<?php echo $option12; ?>" />
<input type="hidden" name="option13" value="<?php echo $option13; ?>" />
<input type="hidden" name="option14" value="<?php echo $option14; ?>" />
<input type="hidden" name="option15" value="<?php echo $option15; ?>" />
<input type="hidden" name="option16" value="<?php echo $option16; ?>" />
<input type="hidden" name="option17" value="<?php echo $option17; ?>" />
<input type="hidden" name="option18" value="<?php echo $option18; ?>" />
<input type="hidden" name="option19" value="<?php echo $option19; ?>" />
<input type="hidden" name="option20" value="<?php echo $option20; ?>" />
<input type="hidden" name="option21" value="<?php echo $option21; ?>" />
<input type="hidden" name="option22" value="<?php echo $option22; ?>" />
<input type="hidden" name="option23" value="<?php echo $option23; ?>" />
<input type="hidden" name="option24" value="<?php echo $option24; ?>" />
<input type="hidden" name="option25" value="<?php echo $option25; ?>" />
<input type="hidden" name="option26" value="<?php echo $option26; ?>" />
<input type="hidden" name="option27" value="<?php echo $option27; ?>" />
<input type="hidden" name="option28" value="<?php echo $option28; ?>" />
<input type="hidden" name="option29" value="<?php echo $option29; ?>" />
<input type="hidden" name="option30" value="<?php echo $option30; ?>" />
<input type="hidden" name="option31" value="<?php echo $option31; ?>" />
<input type="hidden" name="option32" value="<?php echo $option32; ?>" />
<input type="hidden" name="option33" value="<?php echo $option33; ?>" />
<input type="hidden" name="option34" value="<?php echo $option34; ?>" />
<input type="hidden" name="option35" value="<?php echo $option35; ?>" />
<input type="hidden" name="option36" value="<?php echo $option36; ?>" />
<input type="hidden" name="option37" value="<?php echo $option37; ?>" />
<input type="hidden" name="option38" value="<?php echo $option38; ?>" />
<input type="hidden" name="option39" value="<?php echo $option39; ?>" />
<input type="hidden" name="option40" value="1" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="hidden" name="photo2" value="<?php echo $photo2; ?>" />
<input type="hidden" name="photo3" value="<?php echo $photo3; ?>" />
<input type="hidden" name="photo4" value="<?php echo $photo4; ?>" />
<input type="hidden" name="photo5" value="<?php echo $photo5; ?>" />
<input type="hidden" name="photo6" value="<?php echo $photo6; ?>" />
<input type="hidden" name="photo7" value="<?php echo $photo7; ?>" />
<input type="hidden" name="photo8" value="<?php echo $photo8; ?>" />
<input type="hidden" name="photo9" value="<?php echo $photo9; ?>" />
<input type="hidden" name="photo10" value="<?php echo $photo10; ?>" />
<input type="hidden" name="yotei1" value="<?php echo $yotei1; ?>" />
<input type="hidden" name="start1" value="<?php echo $start1; ?>" />
<input type="hidden" name="end1" value="<?php echo $end1; ?>" />
<input type="hidden" name="yotei2" value="<?php echo $yotei2; ?>" />
<input type="hidden" name="start2" value="<?php echo $start2; ?>" />
<input type="hidden" name="end2" value="<?php echo $end2; ?>" />
<input type="hidden" name="yotei3" value="<?php echo $yotei3; ?>" />
<input type="hidden" name="start3" value="<?php echo $start3; ?>" />
<input type="hidden" name="end3" value="<?php echo $end3; ?>" />
<input type="hidden" name="yotei4" value="<?php echo $yotei4; ?>" />
<input type="hidden" name="start4" value="<?php echo $start4; ?>" />
<input type="hidden" name="end4" value="<?php echo $end4; ?>" />
<input type="hidden" name="yotei5" value="<?php echo $yotei5; ?>" />
<input type="hidden" name="start5" value="<?php echo $start5; ?>" />
<input type="hidden" name="end5" value="<?php echo $end5; ?>" />
<input type="hidden" name="yotei6" value="<?php echo $yotei6; ?>" />
<input type="hidden" name="start6" value="<?php echo $start6; ?>" />
<input type="hidden" name="end6" value="<?php echo $end6; ?>" />
<input type="hidden" name="yobi1" value="<?php echo $yobi1; ?>" />
<input type="hidden" name="yobi2" value="<?php echo $yobi2; ?>" />
<input type="hidden" name="yobi3" value="<?php echo $yobi3; ?>" />
<input type="hidden" name="yobi4" value="<?php echo $yobi4; ?>" />
<input type="hidden" name="yobi5" value="<?php echo $yobi5; ?>" />
<input type="hidden" name="yobi6" value="<?php echo $yobi6; ?>" />
<input type="hidden" name="yobi7" value="<?php echo $yobi7; ?>" />
<input type="hidden" name="yobi8" value="<?php echo $yobi8; ?>" />
<input type="hidden" name="yobi9" value="<?php echo $yobi9; ?>" />
<input type="hidden" name="yobi10" value="<?php echo $yobi10; ?>" />
<input type="hidden" name="edittime" value="<?php echo date('md' , time() + $jisa*3600); ?>" />
							<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />

							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>		
			<?php include ('php/footer.php'); ?>
		</div>
	</div><!--drawer drawer--left-->

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
</body>

</html>