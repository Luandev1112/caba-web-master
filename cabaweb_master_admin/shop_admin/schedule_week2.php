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
$result=mysqli_query($sql3, "SELECT * From `data` WHERE yobi1='$login_id' ORDER by id");
$cnt=mysqli_num_rows($result);
						
$ii=1;
$j=100;
$k=200;			
$l=300;	
$m=400;	
$n=500;	
$o=600;	
$p=700;	
$q=800;	
$r=900;	
$s=1000;	
$t=1100;	
$u=1200;	
$v=1300;							
						
				
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
                <form action=\"schedule_rewrite2.php\" method=\"post\">
				<input type=\"hidden\" name=\"id\" value=\"".$id."\" />
<input type=\"hidden\" name=\"name2\" value=\"".$name2."\" />
<input type=\"hidden\" name=\"yobi1\" value=\"".$yobi1."\" />
<input type=\"hidden\" name=\"master_id\" value=\"".$master_id."\" />
<input type=\"hidden\" name=\"edittime\" value=\"".$edi."\" />
                <table>
                  <tr>
                    <td class=\"t_weeklist-1\" rowspan=\"2\">".$day1."(".$week1.")</td>
                    <td class=\"t_weeklist-2\">";

	
$getdays=getDays($tdy_8dig,$yobi7);

if($getdays<1){
	if($yobi9==$edi){
		if ($yotei1 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" checked="checked" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3"  checked="checked" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
			
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1" checked="checked" ><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" checked="checked" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}
	}else{
		
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" checked="checked" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
	}
}else{
if ($yotei1 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" checked="checked" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei1 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2"  /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" checked="checked" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei1 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2"  /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$ii" value="2" checked="checked" /><label for="radio-$ii">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j" value="3" /><label for="radio-$j">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei1" class="radio-input_2" id="radio-$j-2" value="1"><label for="radio-$j-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}
}

echo "<select name=\"start1\">\n";
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
	echo "</select>～<select name=\"end1\">";
	
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
	
	echo "</select></p></td></tr>\n";
echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1"  rowspan="2">$day2($week2)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<2){
echo <<<GOLGO
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$k" value="2" checked="checked" /><label for="radio-$k">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l" value="3" /><label for="radio-$l">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l-2" value="1"><label for="radio-$l-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">


GOLGO;
}else{
if ($yotei2 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$k" value="2" checked="checked" /><label for="radio-$k">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l" value="3" /><label for="radio-$l">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l-2" value="1"><label for="radio-$l-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei2 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$k" value="2" /><label for="radio-$k">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l" value="3" checked="checked" /><label for="radio-$l">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l-2" value="1"><label for="radio-$l-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei2 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$k" value="2" /><label for="radio-$k">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l" value="3" /><label for="radio-$l">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l-2" value="1" checked="checked" ><label for="radio-$l-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$k" value="2" checked="checked" /><label for="radio-$k">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l" value="3" /><label for="radio-$l">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei2" class="radio-input_2" id="radio-$l-2" value="1"><label for="radio-$l-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">

GOLGO;
}
}
	echo "<select name=\"start2\">\n";
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $start2) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"end2\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $end2) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></td></tr>\n";

echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1"  rowspan="2">$day3($week3)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<3){
echo <<<GOLGO
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$m" value="2" checked="checked" /><label for="radio-$m">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n" value="3" /><label for="radio-$n">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n-2" value="1"><label for="radio-$n-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}else{
if ($yotei3 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$m" value="2" checked="checked" /><label for="radio-$m">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n" value="3" /><label for="radio-$n">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n-2" value="1"><label for="radio-$n-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei3 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$m" value="2"/><label for="radio-$m">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n" value="3" checked="checked" /><label for="radio-$n">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n-2" value="1"><label for="radio-$n-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei3 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$m" value="2"/><label for="radio-$m">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n" value="3" /><label for="radio-$n">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n-2" value="1" checked="checked" ><label for="radio-$n-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$m" value="2" checked="checked" /><label for="radio-$m">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n" value="3" /><label for="radio-$n">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei3" class="radio-input_2" id="radio-$n-2" value="1"><label for="radio-$n-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">

GOLGO;
	
}
}
	
	echo "<select name=\"start3\">\n";
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $start3) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"end3\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $end3) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></td></tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1" rowspan="2">$day4($week4)</td>
                    <td class="t_weeklist-2">
GOLGO;
	
if($getdays<4){
echo <<<GOLGO
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$o" value="2" checked="checked" /><label for="radio-$o">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p" value="3" /><label for="radio-$p">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p-2" value="1"><label for="radio-$p-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}else{
if ($yotei4 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$o" value="2" checked="checked" /><label for="radio-$o">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p" value="3" /><label for="radio-$p">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p-2" value="1"><label for="radio-$p-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei4 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$o" value="2" /><label for="radio-$o">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p" value="3" checked="checked" /><label for="radio-$p">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p-2" value="1"><label for="radio-$p-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei4 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$o" value="2" /><label for="radio-$o">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p" value="3" /><label for="radio-$p">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p-2" value="1" checked="checked" ><label for="radio-$p-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$o" value="2" checked="checked" /><label for="radio-$o">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p" value="3" /><label for="radio-$p">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei4" class="radio-input_2" id="radio-$p-2" value="1"><label for="radio-$p-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">

GOLGO;
	
}
}
	echo "<select name=\"start4\">\n";
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $start4) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"end4\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $end4) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></td></tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1" rowspan="2">$day5($week5)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<5){
echo <<<GOLGO
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$q" value="2" checked="checked" /><label for="radio-$q">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r" value="3" /><label for="radio-$r">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r-2" value="1"><label for="radio-$r-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}else{
if ($yotei5 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$q" value="2" checked="checked" /><label for="radio-$q">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r" value="3" /><label for="radio-$r">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r-2" value="1"><label for="radio-$r-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei5 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$q" value="2" /><label for="radio-$q">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r" value="3" checked="checked" /><label for="radio-$r">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r-2" value="1"><label for="radio-$r-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei5 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$q" value="2" /><label for="radio-$q">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r" value="3" /><label for="radio-$r">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r-2" value="1" checked="checked" ><label for="radio-$r-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$q" value="2" checked="checked" /><label for="radio-$q">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r" value="3" /><label for="radio-$r">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei5" class="radio-input_2" id="radio-$r-2" value="1"><label for="radio-$r-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">

GOLGO;
	
}
}
	echo "<select name=\"start5\">\n";
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $start5) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"end5\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $end5) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></td></tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1" rowspan="2">$day6($week6)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<6){
echo <<<GOLGO
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$s" value="2" checked="checked" /><label for="radio-$s">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t" value="3" /><label for="radio-$t">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t-2" value="1"><label for="radio-$t-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}else{
if ($yotei6 == '2') {
echo <<<GOLGO
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$s" value="2" checked="checked" /><label for="radio-$s">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t" value="3" /><label for="radio-$t">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t-2" value="1"><label for="radio-$t-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yotei6 == '3') {
echo <<<GOLGO
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$s" value="2" /><label for="radio-$s">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t" value="3" checked="checked" /><label for="radio-$t">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t-2" value="1"><label for="radio-$t-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yotei6 == '1') {
echo <<<GOLGO
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$s" value="2" /><label for="radio-$s">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t" value="3" /><label for="radio-$t">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t-2" value="1" checked="checked" ><label for="radio-$t-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$s" value="2" checked="checked" /><label for="radio-$s">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t" value="3" /><label for="radio-$t">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yotei6" class="radio-input_2" id="radio-$t-2" value="1"><label for="radio-$t-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">

GOLGO;
	
}
}
	echo "<select name=\"start6\">\n";
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $start6) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"end6\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $end6) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></td></tr>\n";
	echo <<<GOLGO
 <tr>
                    <td class="t_weeklist-1" rowspan="2">$day7($week7)</td>
                    <td class="t_weeklist-2">
GOLGO;
if($getdays<7){
echo <<<GOLGO
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$u" value="2" checked="checked" /><label for="radio-$u">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v" value="3" /><label for="radio-$v">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v-2" value="1"><label for="radio-$v-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}else{
if ($yobi4== '2') {
echo <<<GOLGO
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$u" value="2" checked="checked" /><label for="radio-$u">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v" value="3" /><label for="radio-$v">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v-2" value="1"><label for="radio-$v-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} elseif ($yobi4 == '3') {
echo <<<GOLGO
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$u" value="2" /><label for="radio-$u">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v" value="3" checked="checked" /><label for="radio-$v">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v-2" value="1"><label for="radio-$v-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
}elseif ($yobi4 == '1') {
echo <<<GOLGO
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$u" value="2" /><label for="radio-$u">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v" value="3" /><label for="radio-$v">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v-2" value="1" checked="checked" ><label for="radio-$v-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
GOLGO;
} else {
echo <<<GOLGO
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$u" value="2" checked="checked" /><label for="radio-$u">お休み</label>
            </td>
                    <td class="t_weeklist-3">
<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v" value="3" /><label for="radio-$v">出勤</label></td>
</tr><tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="yobi4" class="radio-input_2" id="radio-$v-2" value="1"><label for="radio-$v-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">

GOLGO;
	
}
}
		echo "<select name=\"yobi5\">\n";
	$data = file('../parts/start.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $yobi5) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	echo "</select>～<select name=\"yobi6\">";
	
	$data = file('../parts/end.csv');
for($i=0; $i<sizeof($data); $i++) {
$line = explode(',' , $data[$i]);
$line = $line[0];
//改行コードを削除
$line = str_replace("\r\n" , "" , $line);
if ($line == $yobi6) {
echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
}else{
echo "<option value=\"$line\">$line</option>\n";
}
}
	
	echo "</select></p></td></tr>\n";
	echo "</table>\n";
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
$ii++;
$j++;
$k++;
$l++;	
$m++;
$n++;
$o++;
$p++;
$q++;
$r++;
$s++;
$t++;
$u++;
$v++;

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