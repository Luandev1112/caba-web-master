<?php
//設定ファイル読み込み
require_once('conf.php');

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

$shop_id = $yobi1;

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規キャスト登録｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　新規キャスト登録">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

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
<!--サイド　プラグイン-->

<script>
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>新規キャスト登録</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="write.php" method="post" id="form">
    <p>
    <label><span>お名前（<font color="#CC0000">必須</font>）</span><?php echo $name; ?></label><input name="name2" type="hidden" class="w_per50" value="<?php echo time(); ?>" />
    </p>
    <p>
    <label><span>年齢</span>
    <?php echo $age; ?>歳
    </label>
    </p>
    <p>
    <label><span>お誕生日</span><?php echo $profinfo1; ?></label>
    </p>
    <p>
    <label><span>血液型</span>
    <?php echo $profinfo2; ?>
    </label>
    </p>
    <p>
    <label><span>出身地</span><?php echo $profinfo3; ?></label>
    </p>
    <p>
    <label><span>趣味・特技</span><?php echo $profinfo; ?></label>
    </p>    
    <p>
    <label><span>好みのタイプ</span><?php echo $profinfo5; ?></label>
    </p>
    <p>
    <label><span>好きな食べ物</span><?php echo $profinfo6; ?></label>
    </p>
    <p>
    <label><span>好きなブランド</span><?php echo $profinfo7; ?></label>
    </p>
    <p>
    <label><span>チャームポイント</span><?php echo $profinfo8; ?></label>
    </p>    
    <p>
    <label><span>ひとこと</span><?php echo $comment; ?></label>
    </p> 
 
  <div class="castnew_blog_area">
    <h3>SNS登録</h3>
    <p>
    <label><span>Instagram URL</span><?php echo $profinfo9; ?></label>
    </p>
    <p>
    <label><span>Twitter URL</span><?php echo $profinfo10; ?></label>
    </p>
    <p>
    <label><span>Amebloなどのブログ URL</span><?php echo $profinfo11; ?></label>
    </p>        
  </div>

  <div class="castnew_blog_area">
    <h3>Instagram 詳細</h3>
    <p>
    <label><span>Instagram Key</span><?php echo $profinfo12; ?></label>
    </p>
	  <p>
    <label><span>Instagram Tag</span><?php echo $comment2; ?></label>
    </p>
    <p>
    <label><span>Instagram ID</span><?php echo $profinfo13; ?></label>
    </p>
    <p>
    <label><span>Instagram PASS</span><?php echo $profinfo14; ?></label>
    </p>        
  </div>                      
  
  <div class="castnew_photo_area">
    <h3>写真登録</h3>
	  <?php

//ファイル名の取り出し
$photo_name1 = $_FILES['photo1']['name'];
$photo_name2 = $_FILES['photo2']['name'];
$photo_name3 = $_FILES['photo3']['name'];
$photo_name4 = $_FILES['photo4']['name'];
$photo_name5 = $_FILES['photo5']['name'];
$photo_name6 = $_FILES['photo6']['name'];
$photo_name7 = $_FILES['photo7']['name'];
$photo_name8 = $_FILES['photo8']['name'];
$photo_name9 = $_FILES['photo9']['name'];
$photo_name10 = $_FILES['photo10']['name'];
//ファイルタイプの取り出し
$photo_type1 = $_FILES['photo1']['type'];
$photo_type2 = $_FILES['photo2']['type'];
$photo_type3 = $_FILES['photo3']['type'];
$photo_type4 = $_FILES['photo4']['type'];
$photo_type5 = $_FILES['photo5']['type'];
$photo_type6 = $_FILES['photo6']['type'];
$photo_type7 = $_FILES['photo7']['type'];
$photo_type8 = $_FILES['photo8']['type'];
$photo_type9 = $_FILES['photo9']['type'];
$photo_type10 = $_FILES['photo10']['type'];
//一時ファイル名の取り出し
$temp_name1 = $_FILES['photo1']['tmp_name'];
$temp_name2 = $_FILES['photo2']['tmp_name'];
$temp_name3 = $_FILES['photo3']['tmp_name'];
$temp_name4 = $_FILES['photo4']['tmp_name'];
$temp_name5 = $_FILES['photo5']['tmp_name'];
$temp_name6 = $_FILES['photo6']['tmp_name'];
$temp_name7 = $_FILES['photo7']['tmp_name'];
$temp_name8 = $_FILES['photo8']['tmp_name'];
$temp_name9 = $_FILES['photo9']['tmp_name'];
$temp_name10 = $_FILES['photo10']['tmp_name'];

//保存先のディレクトリ
$dir = 'photo/';
//拡張子
$jpeg = '.jpg';
//保存先のファイル名
	$upload_name1 = $dir . $name2 . '_1' . $jpeg;
	$upload_name2 = $dir . $name2 . '_2' . $jpeg;
	$upload_name3 = $dir . $name2 . '_3' . $jpeg;
	$upload_name4 = $dir . $name2 . '_4' . $jpeg;
	$upload_name5 = $dir . $name2 . '_5' . $jpeg;
	$upload_name6 = $dir . $name2 . '_6' . $jpeg;
	$upload_name7 = $dir . $name2 . '_7' . $jpeg;
	$upload_name8 = $dir . $name2 . '_8' . $jpeg;
	$upload_name9 = $dir . $name2 . '_9' . $jpeg;
	$upload_name10 = $dir . $name2 . '_10' . $jpeg;
	// m
	$upload_name1_m = $dir . $name2 . '_1_m' . $jpeg;
	$upload_name2_m = $dir . $name2 . '_2_m' . $jpeg;
	$upload_name3_m = $dir . $name2 . '_3_m' . $jpeg;
	$upload_name4_m = $dir . $name2 . '_4_m' . $jpeg;
	$upload_name5_m = $dir . $name2 . '_5_m' . $jpeg;
	$upload_name6_m = $dir . $name2 . '_6_m' . $jpeg;
	$upload_name7_m = $dir . $name2 . '_7_m' . $jpeg;
	$upload_name8_m = $dir . $name2 . '_8_m' . $jpeg;
	$upload_name9_m = $dir . $name2 . '_9_m' . $jpeg;
	$upload_name10_m = $dir . $name2 . '_10_m' . $jpeg;

//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty) {
	
	echo '<p>写真の登録はありません。</p>';
}
	
/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		//アップロードの成功
		echo '<a class="media-left media-top" href="' . $upload_name1 . '" target="_blank"><img src="' . $upload_name1. '" alt="photo1"  width="20%" /></a><div class="media-body"><h4 class="media-heading">サムネイル(写真1枚目)</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if($width>$height){

echo <<<GOLGO
  
  <aside>
  
  <div class="error_txt">
  ※ERROR 1<br />
  アップロード画像サイズの縦横比が違います。
  もう一度やり直してください。
  </div><p><a href="#" onclick="history.back(); return false;">直前のページに戻る</a></p>
		</aside>

</section>
  

  


<footer id="footer">
copyright©2018 Monochrome Design Studio.
</footer>
</body>
</html>



GOLGO;
		exit();
	}
		if($width=$height){
			
		

		//サムネイル画像の幅と高さを決める
		
			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);





		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name1);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_1_m.jpg')){
			unlink('./photo/'.$name2.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>サムネイル画像保存</p>';
			} else {
				echo '<p>サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>サムネイル画像作成失敗</p>';
		}
		
		
		
		echo "</div></div>\n";

	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		}
	
	} else {
		echo '<p>アップロード失敗</p>';
	}
} elseif ($photo_name1 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（2枚目）//
/////////////////////////////////////////////
if (($photo_type2 == 'image/jpeg') || ($photo_type2 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name2 , $upload_name2);
	
	if ($result) {
	
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name2 . '" target="_blank"><img src="' . $upload_name2. '" alt="photo2"  width="20%" /></a><div class="media-body"><h4 class="media-heading">写真2枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name2);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真2]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name2);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_2_m.jpg')){
			unlink('./photo/'.$name2.'_2_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name2_m , $quality)) {
				echo '<p>2枚目画像保存</p>';
			} else {
				echo '<p>2枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>2枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_2_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	

	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name2 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（3枚目）//
/////////////////////////////////////////////
if (($photo_type3 == 'image/jpeg') || ($photo_type3 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name3 , $upload_name3);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name3 . '" target="_blank"><img src="' . $upload_name3. '" alt="photo3" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真3枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name3);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真3]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name3);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_3_m.jpg')){
			unlink('./photo/'.$name2.'_3_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name3_m , $quality)) {
				echo '<p>3枚目画像保存</p>';
			} else {
				echo '<p>3枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>3枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_3_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name3 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（4枚目）//
/////////////////////////////////////////////
if (($photo_type4 == 'image/jpeg') || ($photo_type4 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name4 , $upload_name4);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name4 . '" target="_blank"><img src="' . $upload_name4. '" alt="photo4" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真4枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name4);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真4]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name4);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_4_m.jpg')){
			unlink('./photo/'.$name2.'_4_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name4_m , $quality)) {
				echo '<p>4枚目画像保存</p>';
			} else {
				echo '<p>4枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>4枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_4_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name4 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（5枚目）//
/////////////////////////////////////////////
if (($photo_type5 == 'image/jpeg') || ($photo_type5 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name5 , $upload_name5);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name5 . '" target="_blank"><img src="' . $upload_name5. '" alt="photo5" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真5枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name5);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真5]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name5);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_5_m.jpg')){
			unlink('./photo/'.$name2.'_5_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name5_m , $quality)) {
				echo '<p>5枚目画像保存</p>';
			} else {
				echo '<p>5枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>5枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_5_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name5 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}



/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（6枚目）//
/////////////////////////////////////////////
if (($photo_type6 == 'image/jpeg') || ($photo_type6 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name6 , $upload_name6);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name6 . '" target="_blank"><img src="' . $upload_name6. '" alt="photo6" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真6枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name6);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真6]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name6);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_6_m.jpg')){
			unlink('./photo/'.$name2.'_6_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name6_m , $quality)) {
				echo '<p>6枚目画像保存(_m)</p>';
			} else {
				echo '<p>6枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>6枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_6_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name6 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（7枚目）//
/////////////////////////////////////////////
if (($photo_type7 == 'image/jpeg') || ($photo_type7 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name7 , $upload_name7);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name7 . '" target="_blank"><img src="' . $upload_name7. '" alt="photo7" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真7枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name7);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真7]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name7);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_7_m.jpg')){
			unlink('./photo/'.$name2.'_7_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name7_m , $quality)) {
				echo '<p>7枚目画像保存</p>';
			} else {
				echo '<p>7枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>7枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_7_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name7 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（8枚目）//
/////////////////////////////////////////////
if (($photo_type8 == 'image/jpeg') || ($photo_type8 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name8 , $upload_name8);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name8 . '" target="_blank"><img src="' . $upload_name8. '" alt="photo8" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真8枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name8);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真8]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name8);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_8_m.jpg')){
			unlink('./photo/'.$name2.'_8_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name8_m , $quality)) {
				echo '<p>8枚目画像保存</p>';
			} else {
				echo '<p>8枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>8枚目作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_8_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
	echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name8 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（9枚目）//
/////////////////////////////////////////////
if (($photo_type9 == 'image/jpeg') || ($photo_type9 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name9 , $upload_name9);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name9 . '" target="_blank"><img src="' . $upload_name9. '" alt="photo4" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真9枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name9);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真9]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name9);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_9_m.jpg')){
			unlink('./photo/'.$name2.'_9_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name9_m , $quality)) {
				echo '<p>9枚目画像保存</p>';
			} else {
				echo '<p>9枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>9枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_9_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name9 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（10枚目）//
/////////////////////////////////////////////
if (($photo_type10 == 'image/jpeg') || ($photo_type10 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name10 , $upload_name10);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name10 . '" target="_blank"><img src="' . $upload_name10. '" alt="photo10" width="20%" /></a><div class="media-body"><h4 class="media-heading">写真10枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name10);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真10]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name10);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_10_m.jpg')){
			unlink('./photo/'.$name2.'_10_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name10_m , $quality)) {
				echo '<p>10枚目画像保存</p>';
			} else {
				echo '<p>10枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>10枚目画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_10_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name10 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


?>
    
  <?php
//CSVから該当データを取り出して変数に代入
//$data = file('csv/data.csv');
//for($i=0; $i<sizeof($data); $i++) {
//	$line = explode(',' , $data[$i]);
//	
//	if($line[2] == $name2) {
//		include('parts/basic_hensu_straight.php');
//	}
//}
$data = mysqli_query($sql, "SELECT * FROM `data` WHERE name2 LIKE '$name2'");
while($row=mysqli_fetch_assoc($data)) {
	include('parts/basic_hensu.php');
}


if ($photo_name1 != $empty) {$photo1 = $dir . $name2 . '_1';}
if ($photo_name2 != $empty) {$photo2 = $dir . $name2 . '_2';}
if ($photo_name3 != $empty) {$photo3 = $dir . $name2 . '_3';}
if ($photo_name4 != $empty) {$photo4 = $dir . $name2 . '_4';}
if ($photo_name5 != $empty) {$photo5 = $dir . $name2 . '_5';}
if ($photo_name6 != $empty) {$photo6 = $dir . $name2 . '_6';}
if ($photo_name7 != $empty) {$photo7 = $dir . $name2 . '_7';}
if ($photo_name8 != $empty) {$photo8 = $dir . $name2 . '_8';}
if ($photo_name9 != $empty) {$photo9 = $dir . $name2 . '_9';}
if ($photo_name10 != $empty) {$photo10 = $dir . $name2 . '_10';}


//削除写真のデータを空に
if($delete1=='delete'){$photo1='';}
if($delete2=='delete'){$photo2='';}
if($delete3=='delete'){$photo3='';}
if($delete4=='delete'){$photo4='';}
if($delete5=='delete'){$photo5='';}
if($delete6=='delete'){$photo6='';}
if($delete7=='delete'){$photo7='';}
if($delete8=='delete'){$photo8='';}
if($delete9=='delete'){$photo9='';}
if($delete10=='delete'){$photo10='';}

//書込みデータを結合
//$line = array($id,$name,$name2,$age,$height,$weight,$bust,$cup,$waist,$hip,$comment,$comment2,$profinfo1,$profinfo2,$profinfo3,$profinfo4,$profinfo5,$profinfo6,$profinfo7,$profinfo8,$profinfo9,$profinfo10,$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8,$option9,$option10,$option11,$option12,$option13,$option14,$option15,$option16,$option17,$option18,$option19,$option20,$option21,$option22,$option23,$option24,$option25,$option26,$option27,$option28,$option29,$option30,$option31,$option32,$option33,$option34,$option35,$option36,$option37,$option38,$option39,$option40,$photo1,$photo2,$photo3,$photo4,$photo5,$photo6,$photo7,$photo8,$photo9,$photo10,$yotei1,$start1,$end1,$yotei2,$start2,$end2,$yotei3,$start3,$end3,$yotei4,$start4,$end4,$yotei5,$start5,$end5,$yotei6,$start6,$end6,$yobi1,$yobi2,$yobi3,$yobi4,$yobi5,$yobi6,$yobi7,$yobi8,$yobi9,$yobi10,$edittime);
//$line = implode(',' , $line);

//CSVファイルから直接読み込んだデータなので、再書込みの時に行末に[\n]は不要
#	$line = $line . "\n";

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
//	array_splice($data , $i , 1 , $line);
//	}
//}
if ($photo_name10 != $empty) {$option11 = "1";}
//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);
mysqli_query($sql, "UPDATE `data` SET `photo1`='$photo1', `photo2`='$photo2', `photo3`='$photo3', `photo4`='$photo4', `photo5`='$photo5', `photo6`='$photo6', `photo7`='$photo7', `photo8`='$photo8', `photo9`='$photo9', `photo10`='$photo10' WHERE `name2` LIKE '$name2' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$name2.'_1.jpg');
	unlink('./photo/'.$name2.'_1_m.jpg');

	echo "<p>".$name."写真1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('./photo/'.$name2.'_2.jpg');
	unlink('./photo/'.$name2.'_2_m.jpg');
	
	echo "<p>".$name."写真2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('./photo/'.$name2.'_3.jpg');
	unlink('./photo/'.$name2.'_3_m.jpg');
	echo "<p>".$name."写真3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('./photo/'.$name2.'_4.jpg');
	unlink('./photo/'.$name2.'_4_m.jpg');
	echo "<p>".$name."写真4枚目を削除しました。</p>\n";
}
if($delete5=='delete'){
	unlink('./photo/'.$name2.'_5.jpg');
	unlink('./photo/'.$name2.'_5_m.jpg');
	echo "<p>".$name."写真5枚目を削除しました。</p>\n";
}
if($delete6=='delete'){
	unlink('./photo/'.$name2.'_6.jpg');
	unlink('./photo/'.$name2.'_6_m.jpg');

	echo "<p>".$name."写真6枚目を削除しました。</p>\n";
}
if($delete7=='delete'){
	unlink('./photo/'.$name2.'_7.jpg');
	unlink('./photo/'.$name2.'_7_m.jpg');

	echo "<p>".$name."写真7枚目を削除しました。</p>\n";
}
if($delete8=='delete'){
	unlink('./photo/'.$name2.'_8.jpg');
	unlink('./photo/'.$name2.'_8_m.jpg');

	echo "<p>".$name."写真8枚目を削除しました。</p>\n";
}
if($delete9=='delete'){
	unlink('./photo/'.$name2.'_9.jpg');
	unlink('./photo/'.$name2.'_9_m.jpg');

	echo "<p>".$name."写真9枚目を削除しました。</p>\n";
}
if($delete10=='delete'){
	unlink('./photo/'.$name2.'_10.jpg');
	unlink('./photo/'.$name2.'_10_m.jpg');

	echo "<p>".$name."写真10枚目を削除しました。</p>\n";
}
?>
    
  
  
    
  
  
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
<input type="hidden" name="option34" value="<?php echo $option34; ?>" />
      <div class="todayscast_button_2">
      <button type="submit" class="formbtn_2">登録する</button>
      </div>
    </form>

  

  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>