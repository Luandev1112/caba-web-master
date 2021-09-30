<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

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
						<form action="shop_check.php" method="post" id="form">
							<p>
								<label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="s_name" class="txtfiled" placeholder="店舗名" required></label><input type="hidden" name="no" value="<?php echo time(); ?>"></label>
							</p>
							<p>
								<label><span>店舗名フリガナ（<font color="#FF0000">必須</font>）</span><input title="全角カタカナでご入力ください。" type="text" name="s_name2" class="txtfiled" placeholder="店舗名フリガナ" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※全角カタカナ<br />
								</span>								
							</p>							
							<p>
								<label><span>店舗 ID（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="shop_id" class="txtfiled" placeholder="店舗 ID" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>店舗 PASS（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="shop_pass" class="txtfiled" placeholder="店舗 PASS" required></label>
								<span style="font-size:60%; color:#FF0000;">
									※半角の小文字のローマ字・数字のみ<br />
								</span>								
							</p>
							<p>
								<label><span>オフィシャルサイト連携用 ID（<font color="#FF0000">必須</font>）</span><input pattern="^[a-z0-9!-/:_-¥[-`{-~]*$" type="text" name="data5" class="txtfiled" placeholder="オフィシャルサイト連携用 ID" required></label>
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
							<p>
								<label><span>掲載エリア（<font color="#FF0000">必須</font>）</span>
									<select class="parent" name="area" required>
										<option value="" class="msg">選択してください</option>
										
	<option value="6">新潟エリア</option>

									</select>
								</label>
							</p>							
							<p>
								<label><span>街名（<font color="#FF0000">必須</font>）</span>
									<select class="children" name="area2" required>
										<option value="" class="msg">選択してください</option>
										<?php
$result=mysqli_query($sql, "SELECT * From `toshi_tb` WHERE toshi_area='6' ORDER by toshi_id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから

echo "<option value=\"".$toshi_id."\" data-val=\"".$toshi_area."\" />\n";
echo "".$toshi_name."</option>\n";

}
?>

									</select>
								</label>
							</p>
							<p>
								<label><span>業種（<font color="#FF0000">必須</font>）</span>
									<select name="gyoushu" required>
										<option value="1">キャバクラ</option>
										<option value="2">ガールズバー</option>
										<option value="3">スナック・ラウンジ</option>
									</select>
								</label>
							</p>						
							<p>
								<label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="address" class="txtfiled" placeholder="店舗住所" required></label>
							</p>							
							<p>
								<label><span>電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="tel" class="txtfiled" placeholder="電話番号" required></label>
							</p>
							<p>
								<label><span>営業時間（<font color="#FF0000">必須</font>）</span><input type="text" name="data1" class="txtfiled" placeholder="営業時間" required></label>
							</p>
							<p>
								<label><span>定休日</span><input type="text" name="data2" class="txtfiled" placeholder="定休日"></label>
							</p>
							<p>
								<label><span>公式ホームページ URL</span><input type="url" name="url" class="txtfiled" placeholder="公式ホームページ URL"></label>
							</p>
							<p>
								<label><span>LINE公式アカウント URL</span><input type="url" name="data3" class="txtfiled" placeholder="LINE公式アカウント URL"></label>
							</p>
							<p>
								<label><span>店舗Instagram URL</span><input type="url" name="data4" class="txtfiled" placeholder="店舗Instagram URL"></label>
							</p>
							<p>
								<label><span>店舗Instagram RSS URL</span><input type="url" name="indoorurl" class="txtfiled" placeholder="店舗Instagram RSS URL"></label>
							</p>
							<p>
								<label><span>店舗You Tubeチャンネル URL</span><input type="url" name="fburl" class="txtfiled" placeholder="店舗You Tubeチャンネル URL"></label>
							</p>
							<p>
								<label><span>店舗You Tubeチャンネル RSS URL</span><input type="url" name="yturl" class="txtfiled" placeholder="店舗You Tubeチャンネル RSS URL"></label>
							</p>
					<p>
								<label><span>Tik Tok URL</span><input type="url" name="blank2" class="txtfiled" placeholder="Tik Tok RSS URL"></label>
							</p>
							<div class="page_base_box_3">
								<h3>料金システム ①</h3>
								<table>
									<tr>
										<td class="t_system_top" colspan="2">
											<p style="margin-bottom: 0;"><label><textarea name="system1" class="txtfiled" rows="5" ></textarea></label></p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1a" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1b" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1c" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1d" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1e" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1f" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1g" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1h" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1i" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1j" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1k" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1l" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1m" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1n" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1o" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1p" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1q" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1r" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1s" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system1t" class="txtfiled" placeholder=""></label>
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
											<p style="margin-bottom: 0;"><label><textarea name="system2" class="txtfiled" rows="5" ></textarea></label></p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2a" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2b" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2c" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2d" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2e" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2f" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2g" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2h" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2i" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2j" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2k" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2l" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2m" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2n" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2o" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2p" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2q" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2r" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2s" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system2t" class="txtfiled" placeholder=""></label>
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
											<p style="margin-bottom: 0;"><label><textarea name="system3" class="txtfiled" rows="5" ></textarea></label></p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3a" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3b" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3c" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3d" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3e" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3f" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3g" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3h" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3i" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3j" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3k" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3l" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3m" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3n" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3o" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3p" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3q" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3r" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3s" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system3t" class="txtfiled" placeholder=""></label>
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
											<p style="margin-bottom: 0;"><label><textarea name="system4" class="txtfiled" rows="5" ></textarea></label></p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4a" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4b" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4c" class="txtfiled" placeholder="例）20:00～21:00"></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4d" class="txtfiled" placeholder="例）￥5,000"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4e" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4f" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4g" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4h" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4i" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4j" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4k" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4l" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4m" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4n" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4o" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4p" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4q" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4r" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_system_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4s" class="txtfiled" placeholder=""></label>
											</p>
										</td>
										<td class="t_system_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="system4t" class="txtfiled" placeholder=""></label>
											</p>
										</td>
									</tr>									
								</table>
							</div>
							<div class="page_base_box_3">
								<p>
									<label><span>システム詳細情報</span><textarea name="comment2" class="txtfiled" rows="5" placeholder="例）※消費税は別途掛かります。"></textarea></label>
								</p>
								<p><span>利用可能なクレジットカード</span>
									<label style="vertical-align: middle"><input type="checkbox" name="card1" class="checkbox-input" value="on"><span class="checkbox-parts">AMERICAN EXPRESS</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card2" class="checkbox-input" value="on"><span class="checkbox-parts">JCB</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card3" class="checkbox-input" value="on"><span class="checkbox-parts">VISA</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card4" class="checkbox-input" value="on"><span class="checkbox-parts">MASTER CARD</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card5" class="checkbox-input" value="on"><span class="checkbox-parts">DC CARD</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card6" class="checkbox-input" value="on"><span class="checkbox-parts">NICOS</span></label>
									<label style="vertical-align: middle"><input type="checkbox" name="card7" class="checkbox-input" value="on"><span class="checkbox-parts">UC CARD</span></label>
									</p>
							</div>
							
							
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