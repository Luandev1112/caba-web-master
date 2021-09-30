<?php

//「''」内を変更。IDとパスワード設定
$shop_id = 'demo_caba';	//ログインID

//「''」内を変更
$sql_server = 'mysql132.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database = 'LAA0219176-cabaweb';	/* SQLデータベース名 */
$sql_table = 'data';	/* SQLテーブル名 */
$sql_user = 'LAA0219176';	/* SQLログインID */
$sql_pass = 'icdesign';	/* SQLログインパス */

/*////////// 変更はここまで //////////*/
if(! $sql=mysqli_connect("$sql_server", "$sql_user", "$sql_pass", "$sql_database")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql, 'utf8mb4');  // procedural style

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/maste_hensu.php');
}

//「''」内を変更。出勤情報日付切り替えの時間差設定　※-2で2時間遅れで日付切り替え
$jisa = '-5';



/*////////// 以下変更不可　 //////////*/


//出勤日切り替え用日付
$tdy = date('md' , time() + $jisa*3600);
$ytd = date('md' , time() + (-24+$jisa)*3600);
$dby = date('md' , time() + (-48+$jisa)*3600);
$twdby = date('md' , time() + (-72+$jisa)*3600);
$thdby = date('md' , time() + (-96+$jisa)*3600);
$fodby = date('md' , time() + (-120+$jisa)*3600);
$fidby = date('mb' , time() + (-144+$jisa)*3600);

//表示期限日比較用
$tdy_8dig = date('Ymd' , time() + $jisa*3600);

//プロフィール登録日用
$yobi8 = date('YmdHis');

//曜日の日本語表記用
$week = array('日','月','火','水','木','金','土');

//日付（本日から6日間分）
$day1 = date('n.j' , time() + $jisa*3600);
$day2 = date('n.j' , time() + (24+$jisa)*3600);
$day3 = date('n.j' , time() + (48+$jisa)*3600);
$day4 = date('n.j' , time() + (72+$jisa)*3600);
$day5 = date('n.j' , time() + (96+$jisa)*3600);
$day6 = date('n.j' , time() + (120+$jisa)*3600);
$day7 = date('n.j' , time() + (144+$jisa)*3600);
$week1 = $week[date('w' , time() + $jisa*3600)];
$week2 = $week[date('w' , time() + (24+$jisa)*3600)];
$week3 = $week[date('w' , time() + (48+$jisa)*3600)];
$week4 = $week[date('w' , time() + (72+$jisa)*3600)];
$week5 = $week[date('w' , time() + (96+$jisa)*3600)];
$week6 = $week[date('w' , time() + (120+$jisa)*3600)];
$week7 = $week[date('w' , time() + (144+$jisa)*3600)];
//空データ

$empty = '';

$edi = date('md' , time() + $jisa*3600);
$edi2 = date('Y/m/d' , time() + $jisa*3600);

$news_today = date('Ymd');
$koshin = date("YmdHis");

//h1
$h1 = "";
//title
$title = "";
//description
$description = "";
//description
$keywords = "";
//seo
$seo = "";
//page
$page = "";

?>