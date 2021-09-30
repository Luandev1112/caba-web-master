
<?php
$koshin_area=$_GET["koshin_area"];
// // DB接続情報-----
// local環境(読み込み)
// $dbHost = 'localhost:3306/';
// $dbUser = 'root';
// $dbPass = 'secret';
// $dbName = 'nightgram';

// // local環境(書き込み)
// $dbHost2 = 'localhost:3306/';
// $dbUser2 = 'root';
// $dbPass2 = 'secret';
// $dbName2 = 'auth_management';
// //-----

//テスト環境
// $dbHost = 'mysql141.phy.lolipop.lan';
// $dbUser = 'LAA0219176';
// $dbPass = 'icdesign';
// $dbName = 'LAA0219176-cabawebtest';


// 本番環境(読み込み)
$dbHost = 'mysql140.phy.lolipop.lan';
$dbUser = 'LAA0219176';
$dbPass = 'icdesign';
$dbName = 'LAA0219176-nightgram';
//-----

// 本番環境(書き込み)
$dbHost2 = 'mysql132.phy.lolipop.lan';
$dbUser2 = 'LAA0219176';
$dbPass2 = 'icdesign';
$dbName2 = 'LAA0219176-cabaweb';
//-----

// 読み込みDB接続
$db = mysqli_connect("{$dbHost}", "{$dbUser}", "{$dbPass}", "{$dbName}");
if(!$db) exit("Could not connect!");
mysqli_set_charset($db, 'utf8mb4');  // procedural style

// 書き込みDB接続
$db2 = mysqli_connect("{$dbHost2}", "{$dbUser2}", "{$dbPass2}", "{$dbName2}");
if(!$db2) exit("Could not connect!");
mysqli_set_charset($db2, 'utf8mb4');  // procedural style


// RSSURLが設定されている店舗情報を取得する。
$selectsql = "SELECT `indoorurl` , `s_name` , `no`,
          `area` , `area2`
        FROM `shop_tb`
        WHERE `indoorurl` != '' AND option23='$koshin_area'";
$result = $db->query($selectsql);

foreach($result as $row) {
  
  // DBから取得した値を変数に格納する
  $name = 'お店インスタ';
  $name2 = $row['no'];
  $option20 = $row['no'];
  $option23 = $row['area'];
  $option24 = $row['area2'];

  /*
  キャストのRSSをDBから検索する
  現在のDB最新データの日付より後のデータのみINSERTする
  */

  // RSSURLが設定されているキャスト情報を取得する。
  $existing_data = false;
  $cast_rss_selectsql = "SELECT `pub`
                          FROM `rss_information3` 
                          WHERE `name2`='$name2' 
                          ORDER BY `pub` DESC LIMIT 1";
  $cast_rss_result = $db2->query($cast_rss_selectsql);

  // 既にRSSが登録されている場合は、最新データの日付けを取得する
  if($cast_rss_result -> num_rows > 0){
    $existing_data = true;
    foreach($cast_rss_result as $cast_rss_result_row) {
    $recent_pubdate=$cast_rss_result_row['pub'];
    }
  }
  
  // RSSを取得する
  $rss = simplexml_load_file($row['indoorurl']);
  
  // 取得したRSSのレコード数分、登録処理を行う
  foreach($rss->channel->item as $item){

    // 画像のURLを抽出する
    $description = $item -> description;
    preg_match('|src=\"(.*?)\".*?>|', $description, $match);
    $img_url = $match[1];
    $discription = $item -> description;
	  $discription = strip_tags( $discription, '<h1><br>');
	  $pub_date = $item -> pubDate;
	  
	  $rssDate = $pub_date;
    $myDate = date("Y-m-d H:i:s", strtotime($rssDate));
    $pub = $myDate;

    // DB上の最新投稿よりも古い場合は、登録しない。
    if($existing_data && $pub <= $recent_pubdate){
      continue;
    }

    $inssql = "INSERT INTO `rss_information3` (`img_url`, `discription`, `pub`, `name`, `name2`, `option20`, `option23`, `option24`)
                VALUES ('$img_url', '$discription', '$pub','$name', 
                  '$name2', '$option20', '$option23', '$option24')";

    // レコード登録処理を実施する。
    $r = $db2->query($inssql);
	  
	  
  }

} 

 ?>