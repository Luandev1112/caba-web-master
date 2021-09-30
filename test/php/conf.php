<?php

//「''」内を変更。IDとパスワード設定
$login_id = 'tenpo';	//ログインID

//「''」内を変更
$sql_server = 'mysql145.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database = 'LAA0219176-cabaweb2020';	/* SQLデータベース名 */
$sql_table = 'data';	/* SQLテーブル名 */
$sql_user = 'LAA0219176';	/* SQLログインID */
$sql_pass = 'icdesign';	/* SQLログインパス */

$sql_server2 = 'mysql140.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database2 = 'LAA0219176-nightgram';	/* SQLデータベース名 */

$sql_server3 = 'mysql132.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database3 = 'LAA0219176-cabaweb';	/* SQLデータベース名 */

/*////////// 変更はここまで //////////*/
if(! $sql=mysqli_connect("$sql_server", "$sql_user", "$sql_pass", "$sql_database")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql, 'utf8mb4');  // procedural style

if(! $sql2=mysqli_connect("$sql_server2", "$sql_user", "$sql_pass", "$sql_database2")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql2, 'utf8mb4');  // procedural style

if(! $sql3=mysqli_connect("$sql_server3", "$sql_user", "$sql_pass", "$sql_database3")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql3, 'utf8mb4');  // procedural style

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `login_id` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/maste_hensu.php');
}

$result=mysqli_query($sql2, "SELECT * From `shop_tb` WHERE `data5` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/nightgram_shop_hensu.php');
}
//「''」内を変更。出勤情報日付切り替えの時間差設定　※-2で2時間遅れで日付切り替え
$jisa = '-5';


//$no = '1570013986';

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
$week = array('sun','mon','tue','wed','thu','fri','sat');

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
$slider_today = date('Y-m-d');
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

$shop_seo = "高崎 キャバクラ「アネックス」";

?>