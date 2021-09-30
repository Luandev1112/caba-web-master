
<?php

// // DB接続情報-----

//テスト環境
// $dbHost = 'mysql141.phy.lolipop.lan';
// $dbUser = 'LAA0219176';
// $dbPass = 'icdesign';
// $dbName = 'LAA0219176-cabawebtest';


// 本番環境
$dbHost = 'mysql144.phy.lolipop.lan';
$dbUser = 'LAA0219176';
$dbPass = 'icdesign';
$dbName = 'LAA0219176-demosite';
//-----

// // DB接続
$db = mysqli_connect("{$dbHost}", "{$dbUser}", "{$dbPass}", "{$dbName}");
if(!$db) exit("Could not connect!");
mysqli_set_charset($db, 'utf8mb4');  // procedural style

// RSSURLが設定されているキャスト情報を取得する。
$selectsql = "SELECT `option5` , `name` , `name2`,
          `option20` , `option23` , `option24`
        FROM `data`
        WHERE `option5` != ''";
$result = $db->query($selectsql);

// DB取得が成功した場合のみ、DELETEする
if($result){
  $selectsql = "DELETE FROM `rss_information2` WHERE 1";
  $delete_result = $db->query($selectsql);
  if(!$delete_result){ exit("Could not delete!"); 
  }else{
    echo "success delete"; 
    $alter_sql = "ALTER TABLE `rss_information2` auto_increment = 1";
    $alter_result = $db->query($alter_sql);

  }
}

foreach($result as $row) {
  
  // DBから取得した値を変数に格納する
  $name = $row['name'];
  $name2 = $row['name2'];
  $option20 = $row['option20'];
  $option23 = $row['option23'];
  $option24 = $row['option24'];
  
  // RSSを取得する
  $rss = simplexml_load_file($row['option5']);
  //追加
	
	$no = 0;
$img_urls = $rss->xpath("//media:content[@medium='image']/@url");

// 取得したRSSのレコード数分、登録処理を行う
foreach($rss->channel->item as $item){

// 画像のURLを抽出する

$img_url = $img_urls[$no]; $no++;	
	
	
$description = $item -> description;
preg_match('|iframe src=\"(.*?)\".*?>|', $description, $match2);
$movie_url = $match2[1];
$discription = $item -> title;
	$discription = strip_tags( $discription, '<h1><br>');
	$pub_date = $item -> pubDate;
	  
	  $rssDate = $pub_date;
$myDate = date("Y-m-d H:i:s", strtotime($rssDate));
 
$pub = $myDate;

    $inssql = "INSERT INTO `rss_information2` (`img_url`,`movie_url`, `discription`, `pub`, `name`, `name2`, `option20`, `option23`, `option24`)
                VALUES ('$img_url', '$movie_url','$discription', '$pub','$name', 
                  '$name2', '$option20', '$option23', '$option24')";

    // レコード登録処理を実施する。
    $r = $db->query($inssql);
	  
	  
  }

} 

 ?>