<?php
//セッションの復元
session_start();

//設定ファイル読み込み
require_once 'conf.php';

//ログインチェック
require_once 'login_check.php';

//受け取りデータを変数に代入
require_once "shop_admin/var2.php";

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規店舗登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規顧客登録">

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
				<h2>新規店舗登録</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="shop_write.php" method="post" id="form">
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><?php echo $s_name; ?></label>
							</p>
							<p>
							  <label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><?php echo $s_name2; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
							  <label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><?php echo $shop_id; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみ<br />
								</span>								
							</p>
							<p>
							  <label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><?php echo $shop_pass; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみ<br />
								</span>								
							</p>
							<p>
							  <label><span>オフィシャルサイト連携用 ID（<font color="#FF0000">必須</font>）</span><?php echo $data5; ?></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみで入力して下さい。こちらに入力するとオフィシャルサイトからキャストデータを取得します。<br />
									※オフィシャルサイトが無い店舗は上記で設定した「店舗 ID」を入れて下さい。<br />
								</span>									
							</p>							
							<p>
								<label><span>店舗表示設定（<font color="#FF0000">必須</font>）</span>
									<?php 
	if ($hyouji == 'on') {
	echo "表示する";
}
	if ($hyouji == 'off') {
	echo "表示しない";
}
 ?>
								</label>
							</p>
							<p>
								<label><span>掲載エリア（<font color="#FF0000">必須</font>）</span>
									<?php 
	if ($area == '1') {
	echo "群馬エリア";
}
	if ($area == '2') {
	echo "栃木エリア";
}
		if ($area == '3') {
	echo "埼玉エリア";
}
		if ($area == '4') {
	echo "長野エリア";
}
		if ($area == '5') {
	echo "富山エリア";
}
		if ($area == '6') {
	echo "新潟エリア";
}
		if ($area == '7') {
	echo "石川エリア";
}
		if ($area == '8') {
	echo "東京エリア";
}
		if ($area == '9') {
	echo "山梨エリア";
}
		if ($area == '10') {
	echo "神奈川エリア";
}
		if ($area == '11') {
	echo "熊本エリア";
}
		if ($area == '12') {
	echo "千葉エリア";
}
		if ($area == '13') {
	echo "愛知エリア";
}
 ?>
								</label>
							</p>							
							<p>
								<label><span>街名（<font color="#FF0000">必須</font>）</span>
									<?php
$result=mysqli_query($sql, "SELECT * From `toshi_tb` ORDER by toshi_id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

if ($area2 == $toshi_id) {
		echo $toshi_name;
}else{
echo "";
}
}
?>
								</label>
							</p>
							<p>
								<label><span>業種（<font color="#FF0000">必須</font>）</span>
									<?php 
	if ($gyoushu == '1') {
	echo "キャバクラ";
}
	if ($gyoushu == '2') {
	echo "ガールズバー";
}
		if ($gyoushu == '3') {
	echo "ラウンジ・スナック";
}
	
 ?>
								</label>
							</p>						
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><?php echo $address; ?></label>
							</p>
							<p>
								<label><span>Google Map URL（<font color="#FF0000">必須</font>）</span><?php echo $map; ?></label>
							</p>							
							<p>
							  <label><span>電話番号（<font color="#FF0000">必須</font>）</span><?php echo $tel; ?></label>
							</p>
							<p>
							  <label><span>営業時間（<font color="#FF0000">必須</font>）</span><?php echo $data1; ?></label>
							</p>
							<p>
							  <label><span>定休日</span><?php echo $data2; ?></label>
							</p>
							<p>
								<label><span>公式ホームページ URL</span><?php echo $url; ?></label>
							</p>
							<p>
							  <label><span>LINE公式アカウント URL</span><?php echo $data3; ?></label>
							</p>
							<p>
							  <label><span>店舗Instagram URL</span><?php echo $data4; ?></label>
							</p>
							<p>
							  <label><span>店舗Instagram RSS URL</span><?php echo $indoorurl; ?></label>
							</p>
							<p>
							  <label><span>店舗You Tubeチャンネル URL</span><?php echo $fburl; ?></label>
							</p>
							<p>
							  <label><span>Tik Tok URL</span><?php echo $yturl; ?></label>
							</p>
							<div class="page_base_box_3">
							  <h3>料金システム ①</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"><?php echo $system1; ?></p>
										</td>
									</tr>
									<?php 
	  if($system1a==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p>".$system1a."</p></td><td class=\"t_system_2\"><p>".$system1b."</p></td></tr>";
			  }
?>
     <?php 
	  if($system1c==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1c."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1d."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1e==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1e."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1f."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1g==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1g."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1h."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1i==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1i."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1j."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1k==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1k."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1l."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1m==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1m."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1n."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1o==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1o."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1p."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1q==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1q."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1r."</p></td></tr>";
			  }
?>
		<?php 
	  if($system1s==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system1s."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system1t."</p></td></tr>";
			  }
?>									
								</table>
							</div>
							<div class="page_base_box_3">
								<h3>料金システム ②</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"><label><?php echo $system2; ?></label></p>
										</td>
									</tr>
									<?php 
	  if($system2a==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p>".$system2a."</p></td><td class=\"t_system_2\"><p>".$system2b."</p></td></tr>";
			  }
?>
     <?php 
	  if($system2c==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2c."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2d."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2e==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2e."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2f."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2g==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2g."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2h."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2i==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2i."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2j."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2k==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2k."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2l."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2m==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2m."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2n."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2o==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2o."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2p."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2q==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2q."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2r."</p></td></tr>";
			  }
?>
		<?php 
	  if($system2s==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system2s."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system2t."</p></td></tr>";
			  }
?>																		
								</table>
							</div>
							<div class="page_base_box_3">
								<h3>料金システム ③</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"><?php echo $system3; ?></p>
										</td>
									</tr>
									<?php 
	  if($system3a==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p>".$system3a."</p></td><td class=\"t_system_2\"><p>".$system3b."</p></td></tr>";
			  }
?>
     <?php 
	  if($system3c==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3c."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3d."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3e==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3e."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3f."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3g==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3g."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3h."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3i==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3i."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3j."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3k==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3k."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3l."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3m==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3m."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3n."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3o==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3o."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3p."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3q==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3q."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3r."</p></td></tr>";
			  }
?>
		<?php 
	  if($system3s==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system3s."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system3t."</p></td></tr>";
			  }
?>																		
								</table>
							</div>
							<div class="page_base_box_3">
								<h3>料金システム ④</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"><?php echo $system4; ?></p>
										</td>
									</tr>
									<?php 
	  if($system4a==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p>".$system4a."</p></td><td class=\"t_system_2\"><p>".$system4b."</p></td></tr>";
			  }
?>
     <?php 
	  if($system4c==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4c."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4d."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4e==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4e."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4f."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4g==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4g."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4h."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4i==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4i."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4j."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4k==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4k."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4l."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4m==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4m."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4n."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4o==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4o."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4p."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4q==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4q."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4r."</p></td></tr>";
			  }
?>
		<?php 
	  if($system4s==''){
		  echo "";
		  }else{
			  echo "<tr><td class=\"t_system_1\"><p style=\"margin-bottom: 0;\">".$system4s."</p></td><td class=\"t_system_2\"><p style=\"margin-bottom: 0;\">".$system4t."</p></td></tr>";
			  }
?>																		
								</table>
							</div>
							<div class="page_base_box_3">
								<p>
									<label><span>システム詳細情報</span><?php echo $comment2; ?></label>
								</p>
								<p><span>利用可能なクレジットカード</span>
									<?php
  if($card1=='on'){
				echo "<font style=\"font-size: 80%\">・AMERICAN EXPRESS</font>";
			}else{
				echo "";
			}
			?>
    </label>
    <label><?php
  if($card2=='on'){
				echo "<font style=\"font-size: 80%\">・JCB</font>";
			}else{
				echo "";
			}
			?></label>
    <label><?php
  if($card3=='on'){
				echo "<font style=\"font-size: 80%\">・VISA</font>";
			}else{
				echo "";
			}
			?></label>
    <label><?php
  if($card4=='on'){
				echo "<font style=\"font-size: 80%\">・MASTER CARD</font>";
			}else{
				echo "";
			}
			?></label>            
    <label><?php
  if($card5=='on'){
				echo "<font style=\"font-size: 80%\">・DC CARD</font>";
			}else{
				echo "";
			}
			?></label>
    <label><?php
  if($card6=='on'){
				echo "<font style=\"font-size: 80%\">・NICOS</font>";
			}else{
				echo "";
			}
			?></label>
    <label><?php
  if($card7=='on'){
				echo "<font style=\"font-size: 80%\">・UC CARD</font>";
			}else{
				echo "";
			}
			?></label>
    
									</p>
							</div>
<input type="hidden" name="s_id" value="<?php echo $no; ?>">
<input type="hidden" name="s_name" value="<?php echo $s_name; ?>">
<input type="hidden" name="s_name2" value="<?php echo $s_name2; ?>">
  <input type="hidden" name="no" value="<?php echo $no; ?>">
  <input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>">
  <input type="hidden" name="shop_pass" value="<?php echo $shop_pass; ?>">
  <input type="hidden" name="sort" value="<?php echo $sort; ?>">
  <input type="hidden" name="area" value="<?php echo $area; ?>">
  <input type="hidden" name="area2" value="<?php echo $area2; ?>">
  <input type="hidden" name="gyoushu" value="<?php echo $gyoushu; ?>">
    <input type="hidden" name="address" value="<?php echo $address; ?>">
  <input type="hidden" name="map" value="<?php echo $map; ?>">
  <input type="hidden" name="tel" value="<?php echo $tel; ?>">
  <input type="hidden" name="tel2" value="<?php echo $tel2; ?>">
  <input type="hidden" name="tel3" value="<?php echo $tel3; ?>">
  <input type="hidden" name="tel4" value="<?php echo $tel4; ?>">
  <input type="hidden" name="email" value="<?php echo $email; ?>">
  <input type="hidden" name="data1" value="<?php echo $data1; ?>">
  <input type="hidden" name="data2" value="<?php echo $data2; ?>">
  <input type="hidden" name="data3" value="<?php echo $data3; ?>">
  <input type="hidden" name="data4" value="<?php echo $data4; ?>">
  <input type="hidden" name="data5" value="<?php echo $data5; ?>">
  <input type="hidden" name="url" value="<?php echo $url; ?>">
  <input type="hidden" name="fburl" value="<?php echo $fburl; ?>">
  <input type="hidden" name="twurl" value="<?php echo $twurl; ?>">
  <input type="hidden" name="yturl" value="<?php echo $yturl; ?>">
  <input type="hidden" name="googleurl" value="<?php echo $googleurl; ?>">
  <input type="hidden" name="indoorurl" value="<?php echo $indoorurl; ?>">
  <input type="hidden" name="comment" value="<?php echo $comment; ?>">
  <input type="hidden" name="system1" value="<?php echo $system1; ?>">
  <input type="hidden" name="system1a" value="<?php echo $system1a; ?>">
  <input type="hidden" name="system1b" value="<?php echo $system1b; ?>">
  <input type="hidden" name="system1c" value="<?php echo $system1c; ?>">
  <input type="hidden" name="system1d" value="<?php echo $system1d; ?>">
  <input type="hidden" name="system1e" value="<?php echo $system1e; ?>">
  <input type="hidden" name="system1f" value="<?php echo $system1f; ?>">
  <input type="hidden" name="system1g" value="<?php echo $system1g; ?>">
  <input type="hidden" name="system1h" value="<?php echo $system1h; ?>">
  <input type="hidden" name="system1i" value="<?php echo $system1i; ?>">
  <input type="hidden" name="system1j" value="<?php echo $system1j; ?>">
  <input type="hidden" name="system1k" value="<?php echo $system1k; ?>">
  <input type="hidden" name="system1l" value="<?php echo $system1l; ?>">
  <input type="hidden" name="system1m" value="<?php echo $system1m; ?>">
  <input type="hidden" name="system1n" value="<?php echo $system1n; ?>">
  <input type="hidden" name="system1o" value="<?php echo $system1o; ?>">
  <input type="hidden" name="system1p" value="<?php echo $system1p; ?>">
  <input type="hidden" name="system1q" value="<?php echo $system1q; ?>">
  <input type="hidden" name="system1r" value="<?php echo $system1r; ?>">
  <input type="hidden" name="system1s" value="<?php echo $system1s; ?>">
  <input type="hidden" name="system1t" value="<?php echo $system1t; ?>">
  <input type="hidden" name="system2" value="<?php echo $system2; ?>">
  <input type="hidden" name="system2a" value="<?php echo $system2a; ?>">
  <input type="hidden" name="system2b" value="<?php echo $system2b; ?>">
  <input type="hidden" name="system2c" value="<?php echo $system2c; ?>">
  <input type="hidden" name="system2d" value="<?php echo $system2d; ?>">
  <input type="hidden" name="system2e" value="<?php echo $system2e; ?>">
  <input type="hidden" name="system2f" value="<?php echo $system2f; ?>">
  <input type="hidden" name="system2g" value="<?php echo $system2g; ?>">
  <input type="hidden" name="system2h" value="<?php echo $system2h; ?>">
  <input type="hidden" name="system2i" value="<?php echo $system2i; ?>">
  <input type="hidden" name="system2j" value="<?php echo $system2j; ?>">
  <input type="hidden" name="system2k" value="<?php echo $system2k; ?>">
  <input type="hidden" name="system2l" value="<?php echo $system2l; ?>">
  <input type="hidden" name="system2m" value="<?php echo $system2m; ?>">
  <input type="hidden" name="system2n" value="<?php echo $system2n; ?>">
  <input type="hidden" name="system2o" value="<?php echo $system2o; ?>">
  <input type="hidden" name="system2p" value="<?php echo $system2p; ?>">
  <input type="hidden" name="system2q" value="<?php echo $system2q; ?>">
  <input type="hidden" name="system2r" value="<?php echo $system2r; ?>">
  <input type="hidden" name="system2s" value="<?php echo $system2s; ?>">
  <input type="hidden" name="system2t" value="<?php echo $system2t; ?>">
  <input type="hidden" name="system3" value="<?php echo $system3; ?>">
  <input type="hidden" name="system3a" value="<?php echo $system3a; ?>">
  <input type="hidden" name="system3b" value="<?php echo $system3b; ?>">
  <input type="hidden" name="system3c" value="<?php echo $system3c; ?>">
  <input type="hidden" name="system3d" value="<?php echo $system3d; ?>">
  <input type="hidden" name="system3e" value="<?php echo $system3e; ?>">
  <input type="hidden" name="system3f" value="<?php echo $system3f; ?>">
  <input type="hidden" name="system3g" value="<?php echo $system3g; ?>">
  <input type="hidden" name="system3h" value="<?php echo $system3h; ?>">
  <input type="hidden" name="system3i" value="<?php echo $system3i; ?>">
  <input type="hidden" name="system3j" value="<?php echo $system3j; ?>">
  <input type="hidden" name="system3k" value="<?php echo $system3k; ?>">
  <input type="hidden" name="system3l" value="<?php echo $system3l; ?>">
  <input type="hidden" name="system3m" value="<?php echo $system3m; ?>">
  <input type="hidden" name="system3n" value="<?php echo $system3n; ?>">
  <input type="hidden" name="system3o" value="<?php echo $system3o; ?>">
  <input type="hidden" name="system3p" value="<?php echo $system3p; ?>">
  <input type="hidden" name="system3q" value="<?php echo $system3q; ?>">
  <input type="hidden" name="system3r" value="<?php echo $system3r; ?>">
  <input type="hidden" name="system3s" value="<?php echo $system3s; ?>">
  <input type="hidden" name="system3t" value="<?php echo $system3t; ?>">
  <input type="hidden" name="system4" value="<?php echo $system4; ?>">
  <input type="hidden" name="system4a" value="<?php echo $system4a; ?>">
  <input type="hidden" name="system4b" value="<?php echo $system4b; ?>">
  <input type="hidden" name="system4c" value="<?php echo $system4c; ?>">
  <input type="hidden" name="system4d" value="<?php echo $system4d; ?>">
  <input type="hidden" name="system4e" value="<?php echo $system4e; ?>">
  <input type="hidden" name="system4f" value="<?php echo $system4f; ?>">
  <input type="hidden" name="system4g" value="<?php echo $system4g; ?>">
  <input type="hidden" name="system4h" value="<?php echo $system4h; ?>">
  <input type="hidden" name="system4i" value="<?php echo $system4i; ?>">
  <input type="hidden" name="system4j" value="<?php echo $system4j; ?>">
  <input type="hidden" name="system4k" value="<?php echo $system4k; ?>">
  <input type="hidden" name="system4l" value="<?php echo $system4l; ?>">
  <input type="hidden" name="system4m" value="<?php echo $system4m; ?>">
  <input type="hidden" name="system4n" value="<?php echo $system4n; ?>">
  <input type="hidden" name="system4o" value="<?php echo $system4o; ?>">
  <input type="hidden" name="system4p" value="<?php echo $system4p; ?>">
  <input type="hidden" name="system4q" value="<?php echo $system4q; ?>">
  <input type="hidden" name="system4r" value="<?php echo $system4r; ?>">
  <input type="hidden" name="system4s" value="<?php echo $system4s; ?>">
  <input type="hidden" name="system4t" value="<?php echo $system4t; ?>">
  <input type="hidden" name="comment2" value="<?php echo $comment2; ?>">
  <input type="hidden" name="card1" value="<?php echo $card1; ?>">
  <input type="hidden" name="card2" value="<?php echo $card2; ?>">
  <input type="hidden" name="card3" value="<?php echo $card3; ?>">
  <input type="hidden" name="card4" value="<?php echo $card4; ?>">
  <input type="hidden" name="card5" value="<?php echo $card5; ?>">
  <input type="hidden" name="card6" value="<?php echo $card6; ?>">
  <input type="hidden" name="card7" value="<?php echo $card7; ?>">
  <input type="hidden" name="card8" value="<?php echo $card8; ?>">
  <input type="hidden" name="card9" value="<?php echo $card9; ?>">
  <input type="hidden" name="card10" value="<?php echo $card10; ?>">
  <input type="hidden" name="rec1" value="<?php echo $rec1; ?>">
  <input type="hidden" name="rec1b" value="<?php echo $rec1b; ?>">
  <input type="hidden" name="rec2" value="<?php echo $rec2; ?>">
  <input type="hidden" name="rec2a" value="<?php echo $rec2a; ?>">
  <input type="hidden" name="rec2b" value="<?php echo $rec2b; ?>">
  <input type="hidden" name="rec2c" value="<?php echo $rec2c; ?>">
  <input type="hidden" name="rec2d" value="<?php echo $rec2d; ?>">
  <input type="hidden" name="rec2e" value="<?php echo $rec2e; ?>">
  <input type="hidden" name="rec2f" value="<?php echo $rec2f; ?>">
  <input type="hidden" name="rec2g" value="<?php echo $rec2g; ?>">
  <input type="hidden" name="rec2h" value="<?php echo $rec2h; ?>">
  <input type="hidden" name="rec2i" value="<?php echo $rec2i; ?>">
  <input type="hidden" name="rec2j" value="<?php echo $rec2j; ?>">
  <input type="hidden" name="rec2k" value="<?php echo $rec2k; ?>">
  <input type="hidden" name="rec2l" value="<?php echo $rec2l; ?>">
  <input type="hidden" name="rec2m" value="<?php echo $rec2m; ?>">
  <input type="hidden" name="rec2n" value="<?php echo $rec2n; ?>">
  <input type="hidden" name="rec2o" value="<?php echo $rec2o; ?>">
  <input type="hidden" name="rec3" value="<?php echo $rec3; ?>">
  <input type="hidden" name="rec3a" value="<?php echo $rec3a; ?>">
 <input type="hidden" name="rec3b" value="<?php echo $rec3b; ?>">
 <input type="hidden" name="rec3c" value="<?php echo $rec3c; ?>">
 <input type="hidden" name="rec3d" value="<?php echo $rec3d; ?>">
 <input type="hidden" name="rec3e" value="<?php echo $rec3e; ?>">
  <input type="hidden" name="rec4" value="<?php echo $rec4; ?>">
  <input type="hidden" name="rec4a" value="<?php echo $rec4a; ?>">
  <input type="hidden" name="rec4b" value="<?php echo $rec4b; ?>">
  <input type="hidden" name="rec4c" value="<?php echo $rec4c; ?>">
  <input type="hidden" name="rec4d" value="<?php echo $rec4d; ?>">
  <input type="hidden" name="rec4e" value="<?php echo $rec4e; ?>">
  <input type="hidden" name="rec4f" value="<?php echo $rec4f; ?>">
  <input type="hidden" name="rec4g" value="<?php echo $rec4g; ?>">
  <input type="hidden" name="rec4h" value="<?php echo $rec4h; ?>">
  <input type="hidden" name="rec4i" value="<?php echo $rec4i; ?>">
  <input type="hidden" name="rec4j" value="<?php echo $rec4j; ?>">
  <input type="hidden" name="rec4k" value="<?php echo $rec4k; ?>">
  <input type="hidden" name="rec5" value="<?php echo $rec5; ?>">
  <input type="hidden" name="rec5a" value="<?php echo $rec5a; ?>">
  <input type="hidden" name="rec5b" value="<?php echo $rec5b; ?>">
  <input type="hidden" name="rec5c" value="<?php echo $rec5c; ?>">
  <input type="hidden" name="rec5d" value="<?php echo $rec5d; ?>">
  <input type="hidden" name="rec5e" value="<?php echo $rec5e; ?>">
  <input type="hidden" name="rec5f" value="<?php echo $rec5f; ?>">
  <input type="hidden" name="rec5g" value="<?php echo $rec5g; ?>">
  <input type="hidden" name="rec5h" value="<?php echo $rec5h; ?>">
  <input type="hidden" name="rec5i" value="<?php echo $rec5i; ?>">
  <input type="hidden" name="rec5j" value="<?php echo $rec5j; ?>">
  <input type="hidden" name="rec5k" value="<?php echo $rec5k; ?>">
	 <input type="hidden" name="rec5l" value="<?php echo $rec5l; ?>">
	 <input type="hidden" name="rec5m" value="<?php echo $rec5m; ?>">
	 <input type="hidden" name="rec5n" value="<?php echo $rec5n; ?>">
	 <input type="hidden" name="rec5o" value="<?php echo $rec5o; ?>">
	 <input type="hidden" name="rec5p" value="<?php echo $rec5p; ?>">
	 <input type="hidden" name="rec5q" value="<?php echo $rec5q; ?>">
	 <input type="hidden" name="rec5r" value="<?php echo $rec5r; ?>">
	 <input type="hidden" name="rec5s" value="<?php echo $rec5s; ?>">
 <input type="hidden" name="staff" value="<?php echo $staff; ?>">
 <input type="hidden" name="staffb" value="<?php echo $staffb; ?>">
  <input type="hidden" name="staff1" value="<?php echo $staff1; ?>">
  <input type="hidden" name="staff1a" value="<?php echo $staff1a; ?>">
  <input type="hidden" name="staff1b" value="<?php echo $staff1b; ?>">
  <input type="hidden" name="staff1c" value="<?php echo $staff1c; ?>">
  <input type="hidden" name="staff1d" value="<?php echo $staff1d; ?>">
  <input type="hidden" name="staff1e" value="<?php echo $staff1e; ?>">
  <input type="hidden" name="staff2" value="<?php echo $staff2; ?>">
  <input type="hidden" name="staff2a" value="<?php echo $staff2a; ?>">
  <input type="hidden" name="staff2b" value="<?php echo $staff2b; ?>">
  <input type="hidden" name="staff2c" value="<?php echo $staff2c; ?>">
  <input type="hidden" name="staff2d" value="<?php echo $staff2d; ?>">
  <input type="hidden" name="staff2e" value="<?php echo $staff2e; ?>">
  <input type="hidden" name="staff2f" value="<?php echo $staff2f; ?>">
  <input type="hidden" name="staff2g" value="<?php echo $staff2g; ?>">
  <input type="hidden" name="staff2h" value="<?php echo $staff2h; ?>">
  <input type="hidden" name="staff2i" value="<?php echo $staff2i; ?>">
  <input type="hidden" name="staff2j" value="<?php echo $staff2j; ?>">
  <input type="hidden" name="staff2k" value="<?php echo $staff2k; ?>">
  <input type="hidden" name="staff2l" value="<?php echo $staff2l; ?>">
  <input type="hidden" name="staff2m" value="<?php echo $staff2m; ?>">
  <input type="hidden" name="staff2n" value="<?php echo $staff2n; ?>">
 <input type="hidden" name="staff2o" value="<?php echo $staff2o; ?>">
  <input type="hidden" name="staff3" value="<?php echo $staff3; ?>">
  <input type="hidden" name="staff3a" value="<?php echo $staff3a; ?>">
  <input type="hidden" name="staff3b" value="<?php echo $staff3b; ?>">
  <input type="hidden" name="staff3c" value="<?php echo $staff3c; ?>">
  <input type="hidden" name="staff3d" value="<?php echo $staff3d; ?>">
  <input type="hidden" name="staff3e" value="<?php echo $staff3e; ?>">
  <input type="hidden" name="staff3f" value="<?php echo $staff3f; ?>">
  <input type="hidden" name="staff3g" value="<?php echo $staff3g; ?>">
  <input type="hidden" name="staff3h" value="<?php echo $staff3h; ?>">
  <input type="hidden" name="staff3i" value="<?php echo $staff3i; ?>">
  <input type="hidden" name="staff3j" value="<?php echo $staff3j; ?>">
  <input type="hidden" name="staff3k" value="<?php echo $staff3k; ?>">
	 <input type="hidden" name="staff3l" value="<?php echo $staff3l; ?>">
	 <input type="hidden" name="staff3m" value="<?php echo $staff3m; ?>">
	 <input type="hidden" name="staff3n" value="<?php echo $staff3n; ?>">
	 <input type="hidden" name="staff3o" value="<?php echo $staff3o; ?>">
	 <input type="hidden" name="staff3p" value="<?php echo $staff3p; ?>">
	 <input type="hidden" name="staff3q" value="<?php echo $staff3q; ?>">
	 <input type="hidden" name="staff3r" value="<?php echo $staff3r; ?>">
	 <input type="hidden" name="staff3s" value="<?php echo $staff3s; ?>">
	 <input type="hidden" name="staff4" value="<?php echo $staff4; ?>">
  <input type="hidden" name="contact1" value="<?php echo $contact1; ?>">
  <input type="hidden" name="contact1a" value="<?php echo $contact1a; ?>"> 
  <input type="hidden" name="contact1b" value="<?php echo $contact1b; ?>"> 
  <input type="hidden" name="contact1c" value="<?php echo $contact1c; ?>"> 
  <input type="hidden" name="contact1d" value="<?php echo $contact1d; ?>"> 
  <input type="hidden" name="contact2" value="<?php echo $contact2; ?>">
  <input type="hidden" name="blog" value="<?php echo $blog; ?>">
  <input type="hidden" name="sphoto1" value="<?php echo $sphoto1; ?>" />
  <input type="hidden" name="sphoto2" value="<?php echo $sphoto2; ?>" />
  <input type="hidden" name="sphoto3" value="<?php echo $sphoto3; ?>" />
  <input type="hidden" name="sphoto4" value="<?php echo $sphoto4; ?>" />
  <input type="hidden" name="sphoto5" value="<?php echo $sphoto5; ?>" />
  <input type="hidden" name="sphoto6" value="<?php echo $sphoto6; ?>" />
  <input type="hidden" name="sphoto7" value="<?php echo $sphoto7; ?>" />
  <input type="hidden" name="sphoto8" value="<?php echo $sphoto8; ?>" />
  <input type="hidden" name="sphoto9" value="<?php echo $sphoto9; ?>" />
  <input type="hidden" name="sphoto10" value="<?php echo $sphoto10; ?>" />
  <input type="hidden" name="sphoto11" value="<?php echo $sphoto11; ?>" />
  <input type="hidden" name="sphoto12" value="<?php echo $sphoto12; ?>" />
  <input type="hidden" name="blank1" value="<?php echo $blank1; ?>" />
  <input type="hidden" name="blank2" value="<?php echo $blank2; ?>" />

<?php 
include('parts/area_link_job.php');
	?>
<input type="hidden" name="blank3" value="shop/index.php?shop=<?php echo $shop_id; ?>" /> 
  <input type="hidden" name="blank4" value="<?php echo $area_link; ?>" /> 
<input type="hidden" name="blank5" value="<?php echo $area_link2; ?>" />
<input type="hidden" name="touroku" value="<?php echo $touroku; ?>" />
<input type="hidden" name="edittime" value="<?php echo $edittime; ?>" />
<input type="hidden" name="hyouji" value="<?php echo $hyouji; ?>" />
<input type="hidden" name="shop" value="<?php echo $shop_id; ?>" />
							
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>		
			<?php include ('php/footer.php'); ?>
		</div>
	</div><!--drawer drawer--left-->

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
<!--選択　プラグイン-->
<script>
$(function() {
  var $children = $('.children');
  var original = $children.html();

  $('.parent').change(function() {
    var val1 = $(this).val();

    $children.html(original).find('option').each(function() {
      var val2 = $(this).data('val');
      if (val1 != val2) {
        $(this).not('optgroup,.msg').remove();
      }
    });

    if ($(this).val() === '') {
      $children.attr('disabled', 'disabled');
    } else {
      $children.removeAttr('disabled');
    }

  });
});
</script>	
</body>

</html>