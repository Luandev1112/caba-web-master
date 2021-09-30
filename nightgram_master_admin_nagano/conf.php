<?php

//「''」内を変更。IDとパスワード設定
$log_id = 'nightgram_nagano';	//ログインID
$log_pass = 'gram80245';	//ログインパスワード


//「''」内を変更。出勤情報日付切り替えの時間差設定　※-2で2時間遅れで日付切り替え
$jisa = '-3';

//写真サイズ※固定サイズは「変更不可」のところにｱﾘ

$photo_m = 240;	//携帯ページ用メイン
//掲示板用写真サイズ
$photo_bbs = 200;
$photo_bbss = 100;


//「''」内を変更
$sql_server = 'mysql140.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database = 'LAA0219176-nightgram';	/* SQLデータベース名 */
$sql_table = 'data';	/* SQLテーブル名 */
$sql_user = 'LAA0219176';	/* SQLログインID */
$sql_pass = 'icdesign';	/* SQLログインパス */


//「''」内を変更
$sql_server2 = 'mysql132.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database2 = 'LAA0219176-cabaweb';	/* SQLデータベース名 */

//「''」内を変更
$sql_server3 = 'mysql145.phy.lolipop.lan';	/* SQLサーバアドレス */
$sql_database3 = 'LAA0219176-cabaweb2020';	/* SQLデータベース名 */


//写真クオリティー
$quality = 70;

//【携帯ページ】キャストリスト表示件数（1ページの最大表示件数）
$page_lmt = '20';

//【pcページ】トップニュース
$page_lmt2 = '5';

//【携帯ページ】掲示板表示件数（1ページの最大表示件数）
$page_lmt_bbs = '3';

//管理者用コピーライト
$copyright = 'Copyright &copy; Monochrome Design Studio';
$copyright_url = 'http://monochrome-ds.com/';

/*////////// 変更はここまで //////////*/
if(! $sql=mysqli_connect("$sql_server", "$sql_user", "$sql_pass", "$sql_database")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql, 'utf8mb4');  // procedural style

if(! $sql2=mysqli_connect("$sql_server2", "$sql_user", "$sql_pass", "$sql_database2")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql2, 'utf8mb4');  // procedural style


if(! $sql3=mysqli_connect("$sql_server3", "$sql_user", "$sql_pass", "$sql_database3")) {print ("MySQL Connection Failed.\n"); exit;}

mysqli_set_charset($sql3, 'utf8mb4');  // procedural style

/*////////// 以下変更不可　 //////////*/

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

$news_today = date('Ymd');

$kirikae_time = date('i');

if ($kirikae_time >= '00' && $kirikae_time <= '09'){
	$db_select = '1';
}elseif ($kirikae_time >= '10' && $kirikae_time <= '19'){
	$db_select = '2';
}elseif ($kirikae_time >= '20' && $kirikae_time <= '29'){
	$db_select = '3';
}elseif ($kirikae_time >= '30' && $kirikae_time <= '39'){
	$db_select = '4';
}elseif ($kirikae_time >= '40' && $kirikae_time <= '49'){
	$db_select = '5';
}elseif ($kirikae_time >= '50' && $kirikae_time <= '59'){
	$db_select = '6';
}

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