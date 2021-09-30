<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗情報｜Admin Tool</title>
<meta name="description" content="管理画面ツール　店舗情報">

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
				<h2>店舗情報設定</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="shop_rewrite.php" method="post" id="form" >
							<input type="hidden" name="s_id" value="<?php echo $s_id; ?>">
    <input type="hidden" name="no" value="<?php echo $no; ?>">
							<input type="hidden" name="hyouji" value="<?php echo $hyouji; ?>">
							<input type="hidden" name="blank1" value="<?php echo $blank1; ?>">
							<input type="hidden" name="blank2" value="<?php echo $blank2; ?>">
							<input type="hidden" name="blank3" value="<?php echo $blank3; ?>">
							<input type="hidden" name="blank4" value="<?php echo $blank4; ?>">
							<input type="hidden" name="blank5" value="<?php echo $blank5; ?>">
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
		<input type="hidden" name="shop" value="<?php echo $shop; ?>">
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="s_name" class="txtfiled" placeholder="例）Club ABCD" value="<?php echo $s_name; ?>" required></label>
							</p>
							<p>
								<label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><input type="text" name="s_name2" class="txtfiled" placeholder="例）例）クラブエービーシーディー" value="<?php echo $s_name2; ?>" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
								<label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><input type="text" pattern="^[0-9a-z._%+-]+$" title="半角の小文字のローマ字・数字のみで入力して下さい。" name="shop_id" class="txtfiled" placeholder="例）clubabcd" value="<?php echo $shop_id; ?>" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><input type="text" pattern="^[0-9a-z._%+-]+$" title="半角の小文字のローマ字・数字のみで入力して下さい。" name="shop_pass" class="txtfiled" placeholder="例）clubabcd1234" value="<?php echo $shop_pass; ?>" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>オフィシャルサイト連携用 ID（<font color="#FF0000">必須</font>）</span><input type="text" name="data5" class="txtfiled" placeholder="店舗ID入力" value="<?php echo $data5; ?>" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみで入力して下さい。こちらに入力するとオフィシャルサイトからキャストデータを取得します。<br />
									※オフィシャルサイトが無い店舗は上記で設定した「店舗 ID」を入れて下さい。<br />
								</span>									
							</p>							
							<p>
								<label><span>店舗表示設定（<font color="#FF0000">必須</font>）</span>
									<select name="hyouji" required>
										<option value="on">表示</option>
										<option value="off">非表示</option>
									</select>
								</label>
							</p>
							<p><?php
if ($area == '1') {
	$area_check1 = 'selected="selected"';
}

if ($area == '2') {
	$area_check2 = 'selected="selected"';
}
if ($area == '3') {
	$area_check3 = 'selected="selected"';
}
if ($area == '4') {
	$area_check4 = 'selected="selected"';
}
if ($area == '5') {
	$area_check5 = 'selected="selected"';
}
if ($area == '6') {
	$area_check6 = 'selected="selected"';
}
if ($area == '7') {
	$area_check7 = 'selected="selected"';
}
if ($area == '8') {
	$area_check8 = 'selected="selected"';
}
if ($area == '9') {
	$area_check9 = 'selected="selected"';
}
		if ($area == '10') {
	$area_check10 = 'selected="selected"';
}
		if ($area == '11') {
	$area_check11 = 'selected="selected"';
}
		if ($area == '12') {
	$area_check12 = 'selected="selected"';
}
		if ($area == '13') {
	$area_check13 = 'selected="selected"';
}
?>
								<label><span>掲載エリア（<font color="#FF0000">必須</font>）</span>
									<select class="parent" name="area" required>
										<option value="" class="msg">選択してください</option>
										 
		<option value="6" <?php echo $area_check6; ?>>新潟エリア</option>

									</select>
								</label>
							</p>							
							<p>
								<label><span>街名（<font color="#FF0000">必須</font>）</span>
									<select class="children" name="area2" required>
<?php
$result=mysqli_query($sql, "SELECT * From `toshi_tb` WHERE toshi_area='6' ORDER by toshi_id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu4.php');

if ($area2 == $toshi_id) {
		echo "<option value=\"".$toshi_id."\" selected=\"selected\" />".$toshi_name."</option>\n";
echo "".$toshi_name."　\n";
}else{
//▽表示内容ここから
echo "<option value=\"".$toshi_id."\" />".$toshi_name."</option>\n";
}
}
?>
									</select>
								</label>
							</p>
							<p><?php
if ($gyoushu == '1') {
	$gyoushu_check1 = 'selected="selected"';
}

if ($gyoushu == '2') {
	$gyoushu_check2 = 'selected="selected"';
}
if ($gyoushu == '3') {
	$gyoushu_check3 = 'selected="selected"';
}
if ($gyoushu == '4') {
	$gyoushu_check4 = 'selected="selected"';
}

?>
								<label><span>業種（<font color="#FF0000">必須</font>）</span>
									<select name="gyoushu" required>
    <option value="1" <?php echo $gyoushu_check1; ?>>キャバクラ</option>
    <option value="2" <?php echo $gyoushu_check2; ?>>ガールズバー</option>       
    <option value="3" <?php echo $gyoushu_check3; ?>>ラウンジ・スナック</option>  
									</select>
								</label>
							</p>						
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="address" class="txtfiled" placeholder="例）富山県富山市" value="<?php echo $address; ?>" required></label>
							</p>							
							<p>
								<label><span>電話番号（<font color="#FF0000">必須</font>）</span><input type="text" name="tel" class="txtfiled" placeholder="例）000-000-0000" value="<?php echo $tel; ?>" required></label>
							</p>
							<p>
								<label><span>営業時間（<font color="#FF0000">必須</font>）</span><input type="text" name="data1" class="txtfiled" placeholder="例）21:00～LAST" value="<?php echo $data1; ?>" required></label>
							</p>
							<p>
								<label><span>定休日</span><input type="text" name="data2" class="txtfiled" placeholder="例）日曜日" value="<?php echo $data2; ?>"></label>
							</p>
							<p>
								<label><span>公式ホームページ URL</span><input type="url" name="url" class="txtfiled" placeholder="例）https://www.～" value="<?php echo $url; ?>"></label>
							</p>
							<p>
								<label><span>LINE公式アカウント URL</span><input type="url" name="data3" class="txtfiled" placeholder="例）https://www.～" value="<?php echo $data3; ?>"></label>
							</p>
							<p>
								<label><span>店舗Instagram URL</span><input type="url" name="data4" class="txtfiled" placeholder="例）https://www.～" value="<?php echo $data4; ?>"></label>
							</p>
							<p>
								<label><span>店舗Instagram RSS URL</span><input type="text" name="indoorurl" class="txtfiled" placeholder="例）" value="<?php echo $indoorurl; ?>"></label>
							</p>
							<p>
								<label><span>店舗You Tubeチャンネル URL</span><input type="url" name="fburl" class="txtfiled" placeholder="例）https://www.～" value="<?php echo $fburl; ?>"></label>
							</p>
							<p>
								<label><span>店舗You Tubeチャンネル RSS URL</span><input type="text" name="yturl" class="txtfiled" placeholder="例）" value="<?php echo $yturl; ?>"></label>
							</p>
							<p>
								<label><span>Tik Tok URL</span><input type="url" name="blank2" class="txtfiled" placeholder="Tik Tok RSS URL" value="<?php echo $blank2; ?>"></label>
							</p>
							<div class="page_base_box_3">
								<h3>料金システム ①</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"><label><?php $system1 = str_replace("<br />" , "\r\n" , $system1); ?><textarea name="system1" class="txtfiled" rows="5" placeholder=""><?php echo $system1; ?></textarea></label></label></p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1a" class="txtfiled" placeholder="例）20:00～21:00"  value="<?php echo $system1a; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1b" class="txtfiled" placeholder="例）￥5,000"  value="<?php echo $system1b; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1c" class="txtfiled" placeholder="例）20:00～21:00"  value="<?php echo $system1c; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1d" class="txtfiled" placeholder="例）￥5,000"  value="<?php echo $system1d; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1e" class="txtfiled" placeholder=""  value="<?php echo $system1e; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1f" class="txtfiled" placeholder=""  value="<?php echo $system1f; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1g" class="txtfiled" placeholder=""  value="<?php echo $system1g; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1h" class="txtfiled" placeholder=""  value="<?php echo $system1h; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1i" class="txtfiled" placeholder=""  value="<?php echo $system1i; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1j" class="txtfiled" placeholder=""  value="<?php echo $system1j; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1k" class="txtfiled" placeholder=""  value="<?php echo $system1k; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1l" class="txtfiled" placeholder=""  value="<?php echo $system1l; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1m" class="txtfiled" placeholder=""  value="<?php echo $system1m; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1n" class="txtfiled" placeholder=""  value="<?php echo $system1n; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1o" class="txtfiled" placeholder=""  value="<?php echo $system1o; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1p" class="txtfiled" placeholder=""  value="<?php echo $system1p; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1q" class="txtfiled" placeholder=""  value="<?php echo $system1q; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1r" class="txtfiled" placeholder=""  value="<?php echo $system1r; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1s" class="txtfiled" placeholder=""  value="<?php echo $system1s; ?>"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1t" class="txtfiled" placeholder=""  value="<?php echo $system1t; ?>"></label>
											</p>
										</td>
									</tr>									
								</table>
							</div>
							<div class="page_base_box_3">
								<h3>料金システム ②</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"> <label><?php $system2 = str_replace("<br />" , "\r\n" , $system2); ?><textarea name="system2" class="txtfiled" rows="5" placeholder=""><?php echo $system2; ?></textarea></label></p>
										</td>
									</tr>
									<tr>
        <td class="t_system_1">
          <p>
          <label><input type="text" name="system2a" class="txtfiled" placeholder="例）キャストドリンク" value="<?php echo $system2a; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2b" class="txtfiled" placeholder="例）￥1,000～" value="<?php echo $system2b; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2c" class="txtfiled" placeholder="" value="<?php echo $system2c; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2d" class="txtfiled" placeholder="" value="<?php echo $system2d; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2e" class="txtfiled" placeholder="" value="<?php echo $system2e; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2f" class="txtfiled" placeholder="" value="<?php echo $system2f; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2g" class="txtfiled" placeholder="" value="<?php echo $system2g; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2h" class="txtfiled" placeholder="" value="<?php echo $system2h; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2i" class="txtfiled" placeholder="" value="<?php echo $system2i; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2j" class="txtfiled" placeholder="" value="<?php echo $system2j; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2k" class="txtfiled" placeholder="" value="<?php echo $system2k; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2l" class="txtfiled" placeholder="" value="<?php echo $system2l; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2m" class="txtfiled" placeholder="" value="<?php echo $system2m; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2n" class="txtfiled" placeholder="" value="<?php echo $system2n; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2o" class="txtfiled" placeholder="" value="<?php echo $system2o; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2p" class="txtfiled" placeholder="" value="<?php echo $system2p; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2q" class="txtfiled" placeholder="" value="<?php echo $system2q; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2r" class="txtfiled" placeholder="" value="<?php echo $system2r; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2s" class="txtfiled" placeholder="" value="<?php echo $system2s; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system2t" class="txtfiled" placeholder="" value="<?php echo $system2t; ?>"></label>
          </p>
        </td>        
      </tr>									
								</table>
							</div>
							<div class="page_base_box_3">
								<h3>料金システム ③</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"> <label><?php $system3 = str_replace("<br />" , "\r\n" , $system3); ?><textarea name="system3" class="txtfiled" rows="5" placeholder=""><?php echo $system3; ?></textarea></label></p>
										</td>
									</tr>
									<tr>
        <td width="50%" class="t_system_1">
          <p>
          <label><input type="text" name="system3a" class="txtfiled" placeholder="例）キャストドリンク" value="<?php echo $system3a; ?>"></label>
          </p>
        </td>
        <td width="50%" class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3b" class="txtfiled" placeholder="例）￥1,000～" value="<?php echo $system3b; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3c" class="txtfiled" placeholder="" value="<?php echo $system3c; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3d" class="txtfiled" placeholder="" value="<?php echo $system3d; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3e" class="txtfiled" placeholder="" value="<?php echo $system3e; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3f" class="txtfiled" placeholder="" value="<?php echo $system3f; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3g" class="txtfiled" placeholder="" value="<?php echo $system3g; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3h" class="txtfiled" placeholder="" value="<?php echo $system3h; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3i" class="txtfiled" placeholder="" value="<?php echo $system3i; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3j" class="txtfiled" placeholder="" value="<?php echo $system3j; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3k" class="txtfiled" placeholder="" value="<?php echo $system3k; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3l" class="txtfiled" placeholder="" value="<?php echo $system3l; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3m" class="txtfiled" placeholder="" value="<?php echo $system3m; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3n" class="txtfiled" placeholder="" value="<?php echo $system3n; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3o" class="txtfiled" placeholder="" value="<?php echo $system3o; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3p" class="txtfiled" placeholder="" value="<?php echo $system3p; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3q" class="txtfiled" placeholder="" value="<?php echo $system3q; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3r" class="txtfiled" placeholder="" value="<?php echo $system3r; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3s" class="txtfiled" placeholder="" value="<?php echo $system3s; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system3t" class="txtfiled" placeholder="" value="<?php echo $system3t; ?>"></label>
          </p>
        </td>        
      </tr>									
								</table>
							</div>
							<div class="page_base_box_3">
								<h3>料金システム ④</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"> <label><?php $system4 = str_replace("<br />" , "\r\n" , $system4); ?><textarea name="system4" class="txtfiled" rows="5" placeholder=""><?php echo $system4; ?></textarea></label></p>
										</td>
									</tr>
									<tr>
        <td width="50%" class="t_system_1">
          <p>
          <label><input type="text" name="system4a" class="txtfiled" placeholder="例）キャストドリンク" value="<?php echo $system4a; ?>"></label>
          </p>
        </td>
        <td width="50%" class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4b" class="txtfiled" placeholder="例）￥1,000～" value="<?php echo $system4b; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4c" class="txtfiled" placeholder="" value="<?php echo $system4c; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4d" class="txtfiled" placeholder="" value="<?php echo $system4d; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4e" class="txtfiled" placeholder="" value="<?php echo $system4e; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4f" class="txtfiled" placeholder="" value="<?php echo $system4f; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4g" class="txtfiled" placeholder="" value="<?php echo $system4g; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4h" class="txtfiled" placeholder="" value="<?php echo $system4h; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4i" class="txtfiled" placeholder="" value="<?php echo $system4i; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4j" class="txtfiled" placeholder="" value="<?php echo $system4j; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4k" class="txtfiled" placeholder="" value="<?php echo $system4k; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4l" class="txtfiled" placeholder="" value="<?php echo $system4l; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4m" class="txtfiled" placeholder="" value="<?php echo $system4m; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4n" class="txtfiled" placeholder="" value="<?php echo $system4n; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4o" class="txtfiled" placeholder="" value="<?php echo $system4o; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4p" class="txtfiled" placeholder="" value="<?php echo $system4p; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4q" class="txtfiled" placeholder="" value="<?php echo $system4q; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4r" class="txtfiled" placeholder="" value="<?php echo $system4r; ?>"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_system_1"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4s" class="txtfiled" placeholder="" value="<?php echo $system4s; ?>"></label>
          </p>
        </td>
        <td class="t_system_2"><p style="margin-bottom: 0;">
          <label><input type="text" name="system4t" class="txtfiled" placeholder="" value="<?php echo $system4t; ?>"></label>
          </p>
        </td>        
      </tr>									
								</table>
							</div>
							<div class="page_base_box_3">
								<p>
									<label><span>システム詳細情報</span><?php $comment2 = str_replace("<br />" , "\r\n" , $comment2); ?><textarea name="comment2" class="txtfiled" rows="5" placeholder="例）※消費税は別途掛かります。"><?php echo $comment2; ?></textarea></label>
								</p><?php
if ($card1 == 'on') {
	$card_check1 = 'checked="checked"';
}

if ($card2 == 'on') {
	$card_check2 = 'checked="checked"';
}
if ($card3 == 'on') {
	$card_check3 = 'checked="checked"';
}

if ($card4 == 'on') {
	$card_check4 = 'checked="checked"';
}
if ($card5 == 'on') {
	$card_check5 = 'checked="checked"';
}
if ($card6 == 'on') {
	$card_check6 = 'checked="checked"';
}
if ($card7 == 'on') {
	$card_check7 = 'checked="checked"';
}
if ($card8 == 'on') {
	$card_check8 = 'checked="checked"';
}
if ($card9 == 'on') {
	$card_check9 = 'checked="checked"';
}
if ($card10 == 'on') {
	$card_check10 = 'checked="checked"';
}
?>
								<p><span>利用可能なクレジットカード</span>
									<label style="vertical-align: middle"><input type="checkbox" name="card1" class="checkbox-input" value="on" <?php echo $card_check1; ?>><span class="checkbox-parts">AMERICAN EXPRESS</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card2" class="checkbox-input" value="on" <?php echo $card_check2; ?>><span class="checkbox-parts">JCB</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card3" class="checkbox-input" value="on" <?php echo $card_check3; ?>><span class="checkbox-parts">VISA</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card4" class="checkbox-input" value="on" <?php echo $card_check4; ?>><span class="checkbox-parts">MASTER CARD</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card5" class="checkbox-input" value="on" <?php echo $card_check5; ?>><span class="checkbox-parts">DC CARD</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card6" class="checkbox-input" value="on" <?php echo $card_check6; ?>><span class="checkbox-parts">NICOS</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card7" class="checkbox-input" value="on" <?php echo $card_check7; ?>><span class="checkbox-parts">UC CARD</span></label>
									</p>
							</div>
							
							<input type="hidden" name="no" value="<?php echo $no; ?>" /><input type="hidden" name="operation" value="edit">
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