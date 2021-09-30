<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

//ファンクションファイル読み込み
require_once '../parts/function.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>当日出勤設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　当日出勤設定">

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
<?php
$mode=$_POST['mode'];
if($mode=='write') {
//書き込み処理開始
$cnt=$_POST['cnt'];
$cnt--;
$cnttest=$cnt;
 
$test=array();
for ($i=0; $i <= $cnt; $i++){
$name2 = $_POST['name2_'.$i];
 
$test[$i]=$name2;
 
//曜日で入れ替え
if($week1 == '月'){
$yotei1 = $_POST["yotei1_".$i];
$yotei2 = $_POST["yotei2_".$i];
$yotei3 = $_POST["yotei3_".$i];
$yotei4 = $_POST["yotei4_".$i];
$yotei5 = $_POST["yotei5_".$i];
$yotei6 = $_POST["yotei6_".$i];
$yobi4 = $_POST["yobi4_".$i];
$start1 = $_POST["start1_".$i];
$start2 = $_POST["start2_".$i];
$start3 = $_POST["start3_".$i];
$start4 = $_POST["start4_".$i];
$start5 = $_POST["start5_".$i];
$start6 = $_POST["start6_".$i];
$yobi5 = $_POST["yobi5_".$i];
$end1 = $_POST["end1_".$i];
$end2 = $_POST["end2_".$i];
$end3 = $_POST["end3_".$i];
$end4 = $_POST["end4_".$i];
$end5 = $_POST["end5_".$i];
$end6 = $_POST["end6_".$i];
$yobi6 = $_POST["yobi6_".$i];
}elseif($week1 == '火'){
$yotei1 = $_POST["yobi4_".$i];
$yotei2 = $_POST["yotei1_".$i];
$yotei3 = $_POST["yotei2_".$i];
$yotei4 = $_POST["yotei3_".$i];
$yotei5 = $_POST["yotei4_".$i];
$yotei6 = $_POST["yotei5_".$i];
$yobi4 = $_POST["yotei6_".$i];
$start1 = $_POST["yobi5_".$i];
$start2 = $_POST["start1_".$i];
$start3 = $_POST["start2_".$i];
$start4 = $_POST["start3_".$i];
$start5 = $_POST["start4_".$i];
$start6 = $_POST["start5_".$i];
$yobi5 = $_POST["start6_".$i];
$end1 = $_POST["yobi6_".$i];
$end2 = $_POST["end1_".$i];
$end3 = $_POST["end2_".$i];
$end4 = $_POST["end3_".$i];
$end5 = $_POST["end4_".$i];
$end6 = $_POST["end5_".$i];
$yobi6 = $_POST["end6_".$i];
}elseif($week1 == '水'){
$yotei1 = $_POST["yotei6_".$i];
$yotei2 = $_POST["yobi4_".$i];
$yotei3 = $_POST["yotei1_".$i];
$yotei4 = $_POST["yotei2_".$i];
$yotei5 = $_POST["yotei3_".$i];
$yotei6 = $_POST["yotei4_".$i];
$yobi4 = $_POST["yotei5_".$i];
$start1 = $_POST["start6_".$i];
$start2 = $_POST["yobi5_".$i];
$start3 = $_POST["start1_".$i];
$start4 = $_POST["start2_".$i];
$start5 = $_POST["start3_".$i];
$start6 = $_POST["start4_".$i];
$yobi5 = $_POST["start5_".$i];
$end1 = $_POST["end6_".$i];
$end2 = $_POST["yobi6_".$i];
$end3 = $_POST["end1_".$i];
$end4 = $_POST["end2_".$i];
$end5 = $_POST["end3_".$i];
$end6 = $_POST["end4_".$i];
$yobi6 = $_POST["end5_".$i];
}elseif($week1 == '木'){
$yotei1 = $_POST["yotei5_".$i];
$yotei2 = $_POST["yotei6_".$i];
$yotei3 = $_POST["yobi4_".$i];
$yotei4 = $_POST["yotei1_".$i];
$yotei5 = $_POST["yotei2_".$i];
$yotei6 = $_POST["yotei3_".$i];
$yobi4 = $_POST["yotei4_".$i];
$start1 = $_POST["start5_".$i];
$start2 = $_POST["start6_".$i];
$start3 = $_POST["yobi5_".$i];
$start4 = $_POST["start1_".$i];
$start5 = $_POST["start2_".$i];
$start6 = $_POST["start3_".$i];
$yobi5 = $_POST["start4_".$i];
$end1 = $_POST["end5_".$i];
$end2 = $_POST["end6_".$i];
$end3 = $_POST["yobi6_".$i];
$end4 = $_POST["end1_".$i];
$end5 = $_POST["end2_".$i];
$end6 = $_POST["end3_".$i];
$yobi6 = $_POST["end4_".$i];
}elseif($week1 == '金'){
$yotei1 = $_POST["yotei4_".$i];
$yotei2 = $_POST["yotei5_".$i];
$yotei3 = $_POST["yotei6_".$i];
$yotei4 = $_POST["yobi4_".$i];
$yotei5 = $_POST["yotei1_".$i];
$yotei6 = $_POST["yotei2_".$i];
$yobi4 = $_POST["yotei3_".$i];
$start1 = $_POST["start4_".$i];
$start2 = $_POST["start5_".$i];
$start3 = $_POST["start6_".$i];
$start4 = $_POST["yobi5_".$i];
$start5 = $_POST["start1_".$i];
$start6 = $_POST["start2_".$i];
$yobi5 = $_POST["start3_".$i];
$end1 = $_POST["end4_".$i];
$end2 = $_POST["end5_".$i];
$end3 = $_POST["end6_".$i];
$end4 = $_POST["yobi6_".$i];
$end5 = $_POST["end1_".$i];
$end6 = $_POST["end2_".$i];
$yobi6 = $_POST["end3_".$i];
}elseif($week1 == '土'){
$yotei1 = $_POST["yotei3_".$i];
$yotei2 = $_POST["yotei4_".$i];
$yotei3 = $_POST["yotei5_".$i];
$yotei4 = $_POST["yotei6_".$i];
$yotei5 = $_POST["yobi4_".$i];
$yotei6 = $_POST["yotei1_".$i];
$yobi4 = $_POST["yotei2_".$i];
$start1 = $_POST["start3_".$i];
$start2 = $_POST["start4_".$i];
$start3 = $_POST["start5_".$i];
$start4 = $_POST["start6_".$i];
$start5 = $_POST["yobi5_".$i];
$start6 = $_POST["start1_".$i];
$yobi5 = $_POST["start2_".$i];
$end1 = $_POST["end3_".$i];
$end2 = $_POST["end4_".$i];
$end3 = $_POST["end5_".$i];
$end4 = $_POST["end6_".$i];
$end5 = $_POST["yobi6_".$i];
$end6 = $_POST["end1_".$i];
$yobi6 = $_POST["end2_".$i];
}elseif($week1 == '日'){
$yotei1 = $_POST["yotei2_".$i];
$yotei2 = $_POST["yotei3_".$i];
$yotei3 = $_POST["yotei4_".$i];
$yotei4 = $_POST["yotei5_".$i];
$yotei5 = $_POST["yotei6_".$i];
$yotei6 = $_POST["yobi4_".$i];
$yobi4 = $_POST["yotei1_".$i];
$start1 = $_POST["start2_".$i];
$start2 = $_POST["start3_".$i];
$start3 = $_POST["start4_".$i];
$start4 = $_POST["start5_".$i];
$start5 = $_POST["start6_".$i];
$start6 = $_POST["yobi5_".$i];
$yobi5 = $_POST["start1_".$i];
$end1 = $_POST["end2_".$i];
$end2 = $_POST["end3_".$i];
$end3 = $_POST["end4_".$i];
$end4 = $_POST["end5_".$i];
$end5 = $_POST["end6_".$i];
$end6 = $_POST["yobi6_".$i];
$yobi6 = $_POST["end1_".$i];
}
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
$yobi9 = $_POST["yobi9_".$i];


//出勤開始時間を変換
include("parts/starttime_conversion.php");
 
 
mysqli_query($sql, "UPDATE `data` SET `yotei1`='$yotei1',`start1`='$start1',`end1`='$end1',`yotei2`='$yotei2',`start2`='$start2',`end2`='$end2',`yotei3`='$yotei3',`start3`='$start3',`end3`='$end3',`yotei4`='$yotei4',`start4`='$start4',`end4`='$end4',`yotei5`='$yotei5',`start5`='$start5',`end5`='$end5',`yotei6`='$yotei6',`start6`='$start6',`end6`='$end6',`yobi4`='$yobi4',`yobi5`='$yobi5',`yobi6`='$yobi6',`yobi7`='$yobi7',`yobi9`='$yobi9',`edittime`='$edittime' WHERE `name2` LIKE '$name2' LIMIT 1");
 
//echo "<div>$name2==>$yotei1=$start1=$end1=$yotei2=$start2=$end2=$yotei3=$start3=$end3=$yotei4=$start4=$end4=$yotei5=$start5=$end5=$yotei6=$start6=$end6=$yobi4=$yobi5=$yobi6</div>";
 
 
 
}//for end
//書き込み処理終了
}
$kigen = date('Ymd' , time() + (144+$jisa)*3600);
$edi = date('md' , time() + $jisa*3600);
?>
<body>
	<div id="top_fade">	
	<div class="drawer drawer--left">
		<?php include ('php/header.php'); ?>
		
		<div id="page_base">
			<h2>当日出勤設定</h2>
			<div class="page_base_in">
				<div class="page_base_box">
					<h3>体験入店者数の設定</h3>
					<div class="button_area_2"><a href="taiken.php?master_id=<?php echo $master_id; ?>" class="btn_main">体験人数を設定する</a></div>
				</div>
				<div class="page_base_box_2">				
					<h3><?php echo $day1; ?>(<?php echo $week1; ?>)の出勤を設定</h3>
					<div class="attention_1">
						最後に必ず「登録」ボタンを押して下さい。<br />
						「登録」ボタンを押さないと反映されません。<br />
						<br />
						※出勤は朝5:00にリセットされます。
					</div>
					
					<form action="schedule_time.php?master_id=<?php echo $master_id; ?>" method="post"><input type="hidden" name="mode" value="write">
						<div class="wrapper">
							<?php
  $result=mysqli_query($sql3, "SELECT * From `data` WHERE yobi1='$login_id' ORDER by id");
$cnt=mysqli_num_rows($result);
$ii=0;
$j=1;
$k=101;
$l=1001;					

while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu3.php');
//include('parts/schetime.php');
include('../parts/starttime_conversion2.php');
//▽表示内容ここから

echo "<div class=\"element_cast\"><div class=\"top_cast_box\"><div class=\"top_cast_box_in\"><div class=\"photo_thumbs\">\n";

	//写真を表示
if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"../photo/nophoto_1.jpg\" class=\"lozad\" alt=\"".$name."\">\n";
}else{
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1."".$option13."\" alt=\"".$name."\"/>\n";
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

	
echo "<input type=\"hidden\" name=\"name2_$ii\" value=\"$name2\">";

//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
echo <<<GOLGO
<input type="hidden" name="yotei2_$ii" value="$yotei2" />
<input type="hidden" name="yotei3_$ii" value="$yotei3" />
<input type="hidden" name="yotei4_$ii" value="$yotei4" />
<input type="hidden" name="yotei5_$ii" value="$yotei5" />
<input type="hidden" name="yotei6_$ii" value="$yotei6" />
<input type="hidden" name="yobi4_$ii" value="$yobi4" />
<input type="hidden" name="yobi7_$ii" value="$kigen" />
<input type="hidden" name="yobi9_$ii" value="$edi" />
<input type="hidden" name="edittime_$ii" value="$edi" />
GOLGO;
	
	
if($getdays<1){
	if($yobi9==$edi){
if ($yotei1 == '2') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2" checked="checked"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3" checked="checked"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1" checked="checked"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2" checked="checked"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
}
	}else{
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2" checked="checked"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
	}
}else{
if ($yotei1 == '2') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2" checked="checked"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3" ><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3" checked="checked"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"  checked="checked"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3"><label for="radio-$k">出勤</label></p></div>
</div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"  checked="checked"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<div class="top_cast_box_button_a"><div class="todayscast_box_1"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$j" value="2" checked="checked"><label for="radio-$j">お休み</label></p></div></div>
<div class="top_cast_box_button_a"><div class="todayscast_box_2"><p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k" value="3"><label for="radio-$k">出勤</label></p></div></div><div class="clear"></div><div class="top_cast_box_button_b">
											<div class="todayscast_box_2">
												<p><input type="radio" name="yotei1_$ii" class="radio-input_2" id="radio-$k-2" value="1"><label for="radio-$k-2">出勤（時間付き）</label></p>
												<p style="padding-top: 5px;">
GOLGO;
}
	}
	
	
		echo "<select name=\"start1_".$ii."\">";
	
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $start1) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"end1_".$ii."\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $end1) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></div></div></div></div></div>";
	
$ii++;
$j++;
$k++;
$l++;
}

?>
						</div>
						<div class="under_button_area_2"><input type="hidden" name="cnt" value="<?=$cnt?>" />
							<button type="submit" class="formbtn_2">出勤を送信</button>
						</div>
					</form>
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
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>