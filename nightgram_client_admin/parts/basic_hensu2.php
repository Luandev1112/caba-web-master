<?php
//$id = $row['id'];
$name = $row['name'];
$name2 = $row['name2'];
$age = $row['age'];
$height = $row['height'];
$weight = $row['weight'];
$bust = $row['bust'];
$cup = $row['cup'];
$waist = $row['waist'];
$hip = $row['hip'];
$comment = $row['comment'];

$profinfo1 = $row['profinfo1'];
$profinfo2 = $row['profinfo2'];
$profinfo3 = $row['profinfo3'];
$profinfo4 = $row['profinfo4'];
$profinfo5 = $row['profinfo5'];
$profinfo6 = $row['profinfo6'];
$profinfo7 = $row['profinfo7'];
$profinfo8 = $row['profinfo8'];
$profinfo9 = $row['profinfo9'];
$profinfo10 = $row['profinfo10'];
$profinfo11 = $row['profinfo11'];
$profinfo12 = $row['profinfo12'];
$profinfo13 = $row['profinfo13'];
$profinfo14 = $row['profinfo14'];
$option1 = $row['option1'];
$option2 = $row['option2'];
$option3 = $row['option3'];
$option4 = $row['option4'];
$option5 = $row['option5'];
$option6 = $row['option6'];
$option7 = $row['option7'];
$option8 = $row['option8'];
$option9 = $row['option9'];
$option10 = $row['option10'];
$option11 = $row['option11'];
$option12 = $row['option12'];
$option13 = $row['option13'];
$option14 = $row['option14'];
$option15 = $row['option15'];
$option16 = $row['option16'];
$option17 = $row['option17'];
$option18 = $row['option18'];
$option19 = $row['option19'];
$option20 = $row['option20']; //以下option40までパラメータで使用
$option21 = $row['option21'];
$option22 = $row['option22'];
$option23 = $row['option23'];
$option24 = $row['option24'];
$option25 = $row['option25'];
$option26 = $row['option26'];
$option27 = $row['option27'];
$option28 = $row['option28'];
$option29 = $row['option29'];
$option30 = $row['option30'];
$option31 = $row['option31'];
$option32 = $row['option32'];
$option33 = $row['option33'];
$option34 = $row['option34'];
$option35 = $row['option35'];
$option36 = $row['option36'];
$option37 = $row['option37'];
$option38 = $row['option38'];
$option39 = $row['option39'];
$option40 = $row['option40']; //ここまでパラメーターで使用
$photo1 = $row['photo1'];
$photo2 = $row['photo2'];
$photo3 = $row['photo3'];
$photo4 = $row['photo4'];
$photo5 = $row['photo5'];
$photo6 = $row['photo6'];
$photo7 = $row['photo7'];
$photo8 = $row['photo8'];
$photo9 = $row['photo9'];
$photo10 = $row['photo10'];
//曜日で入れ替え
if($week1 == '月'){
	$yotei1 = $row['yotei1'];
	$yotei2 = $row['yotei2'];
	$yotei3 = $row['yotei3'];
	$yotei4 = $row['yotei4'];
	$yotei5 = $row['yotei5'];
	$yotei6 = $row['yotei6'];
	$yobi4 = $row['yobi4'];
	
	$start1 = $row['start1'];
	$start2 = $row['start2'];
	$start3 = $row['start3'];
	$start4 = $row['start4'];
	$start5 = $row['start5'];
	$start6 = $row['start6'];
	$yobi5 = $row['yobi5'];
	
	$end1 = $row['end1'];
	$end2 = $row['end2'];
	$end3 = $row['end3'];
	$end4 = $row['end4'];
	$end5 = $row['end5'];
	$end6 = $row['end6'];
	$yobi6 = $row['yobi6'];
	
}elseif($week1 == '火'){
	$yotei1 = $row['yotei2'];
	$yotei2 = $row['yotei3'];
	$yotei3 = $row['yotei4'];
	$yotei4 = $row['yotei5'];
	$yotei5 = $row['yotei6'];
	$yotei6 = $row['yobi4'];
	$yobi4 = $row['yotei1'];
	
	$start1 = $row['start2'];
	$start2 = $row['start3'];
	$start3 = $row['start4'];
	$start4 = $row['start5'];
	$start5 = $row['start6'];
	$start6 = $row['yobi5'];
	$yobi5 = $row['start1'];
	
	$end1 = $row['end2'];
	$end2 = $row['end3'];
	$end3 = $row['end4'];
	$end4 = $row['end5'];
	$end5 = $row['end6'];
	$end6 = $row['yobi6'];
	$yobi6 = $row['end1'];

}elseif($week1 == '水'){
	$yotei1 = $row['yotei3'];
	$yotei2 = $row['yotei4'];
	$yotei3 = $row['yotei5'];
	$yotei4 = $row['yotei6'];
	$yotei5 = $row['yobi4'];
	$yotei6 = $row['yotei1'];
	$yobi4 = $row['yotei2'];
	
	$start1 = $row['start3'];
	$start2 = $row['start4'];
	$start3 = $row['start5'];
	$start4 = $row['start6'];
	$start5 = $row['yobi5'];
	$start6 = $row['start1'];
	$yobi5 = $row['start2'];
	
	$end1 = $row['end3'];
	$end2 = $row['end4'];
	$end3 = $row['end5'];
	$end4 = $row['end6'];
	$end5 = $row['yobi6'];
	$end6 = $row['end1'];
	$yobi6 = $row['end2'];

}elseif($week1 == '木'){
	$yotei1 = $row['yotei4'];
	$yotei2 = $row['yotei5'];
	$yotei3 = $row['yotei6'];
	$yotei4 = $row['yobi4'];
	$yotei5 = $row['yotei1'];
	$yotei6 = $row['yotei2'];
	$yobi4 = $row['yotei3'];
	
	$start1 = $row['start4'];
	$start2 = $row['start5'];
	$start3 = $row['start6'];
	$start4 = $row['yobi5'];
	$start5 = $row['start1'];
	$start6 = $row['start2'];
	$yobi5 = $row['start3'];
	
	$end1 = $row['end4'];
	$end2 = $row['end5'];
	$end3 = $row['end6'];
	$end4 = $row['yobi6'];
	$end5 = $row['end1'];
	$end6 = $row['end2'];
	$yobi6 = $row['end3'];

}elseif($week1 == '金'){
	$yotei1 = $row['yotei5'];
	$yotei2 = $row['yotei6'];
	$yotei3 = $row['yobi4'];
	$yotei4 = $row['yotei1'];
	$yotei5 = $row['yotei2'];
	$yotei6 = $row['yotei3'];
	$yobi4 = $row['yotei4'];
	
	$start1 = $row['start5'];
	$start2 = $row['start6'];
	$start3 = $row['yobi5'];
	$start4 = $row['start1'];
	$start5 = $row['start2'];
	$start6 = $row['start3'];
	$yobi5 = $row['start4'];
	
	$end1 = $row['end5'];
	$end2 = $row['end6'];
	$end3 = $row['yobi6'];
	$end4 = $row['end1'];
	$end5 = $row['end2'];
	$end6 = $row['end3'];
	$yobi6 = $row['end4'];

}elseif($week1 == '土'){
	$yotei1 = $row['yotei6'];
	$yotei2 = $row['yobi4'];
	$yotei3 = $row['yotei1'];
	$yotei4 = $row['yotei2'];
	$yotei5 = $row['yotei3'];
	$yotei6 = $row['yotei4'];
	$yobi4 = $row['yotei5'];
	
	$start1 = $row['start6'];
	$start2 = $row['yobi5'];
	$start3 = $row['start1'];
	$start4 = $row['start2'];
	$start5 = $row['start3'];
	$start6 = $row['start4'];
	$yobi5 = $row['start5'];
	
	$end1 = $row['end6'];
	$end2 = $row['yobi6'];
	$end3 = $row['end1'];
	$end4 = $row['end2'];
	$end5 = $row['end3'];
	$end6 = $row['end4'];
	$yobi6 = $row['end5'];
	
}elseif($week1 == '日'){
	$yotei1 = $row['yobi4'];
	$yotei2 = $row['yotei1'];
	$yotei3 = $row['yotei2'];
	$yotei4 = $row['yotei3'];
	$yotei5 = $row['yotei4'];
	$yotei6 = $row['yotei5'];
	$yobi4 = $row['yotei6'];
	
	$start1 = $row['yobi5'];
	$start2 = $row['start1'];
	$start3 = $row['start2'];
	$start4 = $row['start3'];
	$start5 = $row['start4'];
	$start6 = $row['start5'];
	$yobi5 = $row['start6'];
	
	$end1 = $row['yobi6'];
	$end2 = $row['end1'];
	$end3 = $row['end2'];
	$end4 = $row['end3'];
	$end5 = $row['end4'];
	$end6 = $row['end5'];
	$yobi6 = $row['end6'];
}
	
#$yotei1 = $row[72];
#$start1 = $row[73];
#$end1 = $row[74];
#$yotei2 = $row[75];
#$start2 = $row[76];
#$end2 = $row[77];
#$yotei3 = $row[78];
#$start3 = $row[79];
#$end3 = $row[80];
#$yotei4 = $row[81];
#$start4 = $row[82];
#$end4 = $row[83];
#$yotei5 = $row[84];
#$start5 = $row[85];
#$end5 = $row[86];
#$yotei6 = $row[87];
#$start6 = $row[88];
#$end6 = $row[89];
$yobi1 = $row['yobi1'];
$yobi2 = $row['yobi2'];
$yobi3 = $row['yobi3'];
#$yobi4 = $row['yobi4'];	//yotei7
#$yobi5 = $row['yobi5'];	//start7
#$yobi6 = $row['yobi6'];	//end7
$yobi7 = $row['yobi7'];	//表示期限日
$yobi8 = $row['yobi8']; //登録日
$yobi9 = $row['yobi9']; //新人・ピックアップ・体験入店
$yobi10 = $row['yobi10'];
$edittime = $row['edittime'];

$edittime = str_replace("\r\n" , "" , $edittime); //改行コードを削除
?>