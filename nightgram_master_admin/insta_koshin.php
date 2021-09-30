<?php
$koshin_area=$_GET["koshin_area"];
// // DB接続情報-----

// local環境
// $dbHost = 'localhost:3306/';
// $dbUser = 'root';
// $dbPass = 'secret';
// $dbName = 'auth_management';

//テスト環境
// $dbHost = 'mysql141.phy.lolipop.lan';
// $dbUser = 'LAA0219176';
// $dbPass = 'icdesign';
// $dbName = 'LAA0219176-cabawebtest';

// 本番環境
$dbHost = 'mysql132.phy.lolipop.lan';
$dbUser = 'LAA0219176';
$dbPass = 'icdesign';
$dbName = 'LAA0219176-cabaweb';
//-----

// // DB接続
$db = mysqli_connect("{$dbHost}", "{$dbUser}", "{$dbPass}", "{$dbName}");
if(!$db) exit("Could not connect!");
mysqli_set_charset($db, 'utf8mb4');  // procedural style



	// RSSURLが設定されているキャスト情報を取得する。
$selectsql = "SELECT `option2` , `name` , `name2`,`option20` , `option23` , `option24`
              FROM `data`
              WHERE `option2` != '' AND option23='$koshin_area'";


$result = $db->query($selectsql);

// キャスト毎のループ処理
foreach($result as $row) {
  
  // DBから取得した値を変数に格納する
  $name = $row['name'];
  $name2 = $row['name2']; //キャストを一意に認識するカラム
  $option20 = $row['option20'];
  $option23 = $row['option23'];
  $option24 = $row['option24'];

  /*
  キャストのRSSをDBから検索する
  現在のDB最新データの日付より後のデータのみINSERTする
  */

  // RSSURLが設定されているキャスト情報を取得する。
  $existing_data = false;
  $cast_rss_selectsql = "SELECT `pub`
                          FROM `rss_information` 
                          WHERE `name2`='$name2' 
                          ORDER BY `pub` DESC LIMIT 1";
  $cast_rss_result = $db->query($cast_rss_selectsql);

  // 既にRSSが登録されている場合は、最新データの日付けを取得する
  if($cast_rss_result -> num_rows > 0){
    $existing_data = true;
    foreach($cast_rss_result as $cast_rss_result_row) {
    $recent_pubdate=$cast_rss_result_row['pub'];
    }
  }

  // RSSを取得する
  $rss = simplexml_load_file($row['option2']);
  
  // 取得したRSSのレコード数分、登録処理を行う
  foreach($rss->channel->item as $item){

    // 画像のURLを抽出する
	  
	 	  //追加
	  $discription = $item -> description;

	  $discription = htmlspecialchars($discription, ENT_QUOTES|ENT_HTML5);
	  htmlspecialchars($discription, ENT_QUOTES|ENT_HTML5);
	  
    $description = $item -> description;
	  
    preg_match('|src=\"(.*?)\".*?>|', $description, $match);
	  
    $img_url = $match[1];
	  
    $discription = $item -> description;
	  $description = $item -> description;
    preg_match('|src=\"(.*?)\".*?>|', $description, $match);
    $img_url = $match[1];
	  
	  $discription = strip_tags( $discription, '<h1><br>');
	  	$discription = preg_replace( "/<img(.+?)>/", "", $discription ); 
	$discription = preg_replace( "<div>", "", $discription ); 
	 $discription = preg_replace( "</div>", "", $discription );  
	  	  $discription = str_replace("'", "", $discription);
	  $pub_date = $item -> pubDate;
    $rssDate = $pub_date;
    $myDate = date("Y-m-d H:i:s", strtotime($rssDate));
    $pub = $myDate;
	  


    // DB上の最新投稿よりも古い場合は、登録しない。
    if($existing_data && $pub <= $recent_pubdate){
      continue;
    }

    $inssql = "INSERT INTO `rss_information` (`img_url`, `discription`, `pub`, `name`, `name2`, `option20`, `option23`, `option24`)
                VALUES ('$img_url', '$discription', '$pub','$name', 
                  '$name2', '$option20', '$option23', '$option24')";
    
    // レコード登録処理を実施する。
    $r = $db->query($inssql); 
  }
} 

 ?>

