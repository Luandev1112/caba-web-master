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
$result=mysqli_query($sql, "SELECT * From `shop_tb2` WHERE `s_id_rec` = '$s_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu_b.php');
}
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト求人設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト求人設定">

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
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">キャスト求人設定</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="shop_rec_rewrite.php" method="post" id="form">
							<input type="hidden" name="s_id_rec" value="<?php echo $s_id_rec; ?>">
							<p>
								<label><span>注目ポイント　タイトル</span><?php $rec1 = str_replace("<br />" , "\r\n" , $rec1); ?><textarea name="rec1" class="txtfiled" rows="5" placeholder="例）期間限定！体験時給がアップ中！！"><?php echo $rec1; ?></textarea></label>
							</p>
							<p>
								<label><span>注目ポイント　本文</span><?php $rec1b = str_replace("<br />" , "\r\n" , $rec1b); ?><textarea name="rec1b" class="txtfiled" rows="10" placeholder="例）期間限定！体験時給がアップ中！！"><?php echo $rec1b; ?></textarea></label>
							</p>											
							<p>
								<label><span>給与 ①</span><input type="text" name="rec2a" class="txtfiled" placeholder="例）体験時給" value="<?php echo $rec2a; ?>"></label>
								<label><input type="text" name="rec2b" class="txtfiled" placeholder="例）5,000円～" value="<?php echo $rec2b; ?>"></label>
								<label><?php $rec2c = str_replace("<br />" , "\r\n" , $rec2c); ?><textarea name="rec2c" class="txtfiled" rows="5" placeholder="例）入店保証時給 3,000円以上 / ノルマなし・ドリンクバックあり"><?php echo $rec2c; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ②</span><input type="text" name="rec2d" class="txtfiled" placeholder="例）体験時給" value="<?php echo $rec2d; ?>"></label>
								<label><input type="text" name="rec2e" class="txtfiled" placeholder="例）5,000円～" value="<?php echo $rec2e; ?>"></label>
								<label><?php $rec2f = str_replace("<br />" , "\r\n" , $rec2f); ?><textarea name="rec2f" class="txtfiled" rows="5" placeholder="例）入店保証時給 3,000円以上 / ノルマなし・ドリンクバックあり"><?php echo $rec2f; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ③</span><input type="text" name="rec2g" class="txtfiled" placeholder="例）体験時給" value="<?php echo $rec2g; ?>"></label>
								<label><input type="text" name="rec2h" class="txtfiled" placeholder="例）5,000円～" value="<?php echo $rec2h; ?>"></label>
								<label><?php $rec2i = str_replace("<br />" , "\r\n" , $rec2i); ?><textarea name="rec2i" class="txtfiled" rows="5" placeholder="例）入店保証時給 3,000円以上 / ノルマなし・ドリンクバックあり"><?php echo $rec2i; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ④</span><input type="text" name="rec2j" class="txtfiled" placeholder="例）体験時給" value="<?php echo $rec2j; ?>"></label>
								<label><input type="text" name="rec2k" class="txtfiled" placeholder="例）5,000円～" value="<?php echo $rec2k; ?>"></label>
								<label><?php $rec2l = str_replace("<br />" , "\r\n" , $rec2l); ?><textarea name="rec2l" class="txtfiled" rows="5" placeholder="例）入店保証時給 3,000円以上 / ノルマなし・ドリンクバックあり"><?php echo $rec2l; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ⑤</span><input type="text" name="rec2m" class="txtfiled" placeholder="例）体験時給" value="<?php echo $rec2m; ?>"></label>
								<label><input type="text" name="rec2n" class="txtfiled" placeholder="例）5,000円～" value="<?php echo $rec2n; ?>"></label>
								<label><?php $rec2o = str_replace("<br />" , "\r\n" , $rec2o); ?><textarea name="rec2o" class="txtfiled" rows="5" placeholder="例）入店保証時給 3,000円以上 / ノルマなし・ドリンクバックあり"><?php echo $rec2o; ?></textarea></label>
							</p>							
							<p>
								<label><span>給与 その他・詳細など</span><?php $rec2 = str_replace("<br />" , "\r\n" , $rec2); ?><textarea name="rec2" class="txtfiled" rows="5" placeholder="例）入店保証時給 3,000円以上 / ノルマなし・ドリンクバックあり"><?php echo $rec2; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ①　タイトル</span><?php $rec3 = str_replace("<br />" , "\r\n" , $rec3); ?><textarea name="rec3" class="txtfiled" rows="5" placeholder="例）求人強化中！当店で働いてみよう！"><?php echo $rec3; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ①　本文</span><?php $rec3a = str_replace("<br />" , "\r\n" , $rec3a); ?><textarea name="rec3a" class="txtfiled" rows="10" placeholder="例）当店なら未経験大歓迎！お子さまのいるママさんも大歓迎です！"><?php echo $rec3a; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ②　タイトル</span><?php $rec3b = str_replace("<br />" , "\r\n" , $rec3b); ?><textarea name="rec3b" class="txtfiled" rows="5" placeholder="例）求人強化中！当店で働いてみよう！"><?php echo $rec3b; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ②　本文</span><?php $rec3c = str_replace("<br />" , "\r\n" , $rec3c); ?><textarea name="rec3c" class="txtfiled" rows="10" placeholder="例）当店なら未経験大歓迎！お子さまのいるママさんも大歓迎です！"><?php echo $rec3c; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ③　タイトル</span><?php $rec3d = str_replace("<br />" , "\r\n" , $rec3d); ?><textarea name="rec3d" class="txtfiled" rows="5" placeholder="例）求人強化中！当店で働いてみよう！"><?php echo $rec3d; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ③　本文</span><?php $rec3e = str_replace("<br />" , "\r\n" , $rec3e); ?><textarea name="rec3e" class="txtfiled" rows="10" placeholder="例）当店なら未経験大歓迎！お子さまのいるママさんも大歓迎です！"><?php echo $rec3e; ?></textarea></label>
							</p>
							<?php
if ($rec4 == 'on') {
	$rec4_check1 = 'checked="checked"';
}

if ($rec4a == 'on') {
	$rec4_check2 = 'checked="checked"';
}
if ($rec4b == 'on') {
	$rec4_check3 = 'checked="checked"';
}

if ($rec4c == 'on') {
	$rec4_check4 = 'checked="checked"';
}
if ($rec4d == 'on') {
	$rec4_check5 = 'checked="checked"';
}
if ($rec4e == 'on') {
	$rec4_check6 = 'checked="checked"';
}
if ($rec4f == 'on') {
	$rec4_check7 = 'checked="checked"';
}
if ($rec4g == 'on') {
	$rec4_check8 = 'checked="checked"';
}
if ($rec4h == 'on') {
	$rec4_check9 = 'checked="checked"';
}
if ($rec4i == 'on') {
	$rec4_check10 = 'checked="checked"';
}
		if ($rec4j == 'on') {
	$rec4_check11 = 'checked="checked"';
}
		if ($rec4k == 'on') {
	$rec4_check12 = 'checked="checked"';
}
							if ($rec4l == 'on') {
	$rec4_check13 = 'checked="checked"';
}
							if ($rec4m == 'on') {
	$rec4_check14 = 'checked="checked"';
}
							if ($rec4n == 'on') {
	$rec4_check15 = 'checked="checked"';
}
							if ($rec4o == 'on') {
	$rec4_check16 = 'checked="checked"';
}
							if ($rec4p == 'on') {
	$rec4_check17 = 'checked="checked"';
}
							if ($rec4q == 'on') {
	$rec4_check18 = 'checked="checked"';
}
?>
							<p><span>待遇</span>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4" class="checkbox-input" value="on" <?php echo $rec4_check1; ?>><span class="checkbox-parts">日払いOK</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4a" class="checkbox-input" value="on" <?php echo $rec4_check2; ?>><span class="checkbox-parts">未経験者大歓迎</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4b" class="checkbox-input" value="on" <?php echo $rec4_check3; ?>><span class="checkbox-parts">自由出勤</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4c" class="checkbox-input" value="on" <?php echo $rec4_check4; ?>><span class="checkbox-parts">レンタル衣装あり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4d" class="checkbox-input" value="on" <?php echo $rec4_check5; ?>><span class="checkbox-parts">送りあり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4e" class="checkbox-input" value="on" <?php echo $rec4_check6; ?>><span class="checkbox-parts">迎えあり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4f" class="checkbox-input" value="on" <?php echo $rec4_check7; ?>><span class="checkbox-parts">交通費支給</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4g" class="checkbox-input" value="on" <?php echo $rec4_check8; ?>><span class="checkbox-parts">駐車場あり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4h" class="checkbox-input" value="on" <?php echo $rec4_check9; ?>><span class="checkbox-parts">終電あがりOK</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4i" class="checkbox-input" value="on" <?php echo $rec4_check10; ?>><span class="checkbox-parts">ヘアメイクあり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4j" class="checkbox-input" value="on" <?php echo $rec4_check11; ?>><span class="checkbox-parts">託児あり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4k" class="checkbox-input" value="on" <?php echo $rec4_check12; ?>><span class="checkbox-parts">寮あり</span></label>
								<label style="vertical-align: middle"><input type="checkbox" name="rec4l" class="checkbox-input" value="on" <?php echo $rec4_check13; ?>><span class="checkbox-parts">WワークOK</span></label>	
								<label style="vertical-align: middle"><input type="checkbox" name="rec4m" class="checkbox-input" value="on" <?php echo $rec4_check14; ?>><span class="checkbox-parts">ノルマなし</span></label>	
								<label style="vertical-align: middle"><input type="checkbox" name="rec4n" class="checkbox-input" value="on" <?php echo $rec4_check15; ?>><span class="checkbox-parts">ペナルティなし</span></label>	
								<label style="vertical-align: middle"><input type="checkbox" name="rec4o" class="checkbox-input" value="on" <?php echo $rec4_check16; ?>><span class="checkbox-parts">個人ロッカーあり</span></label>	
								<label style="vertical-align: middle"><input type="checkbox" name="rec4p" class="checkbox-input" value="on" <?php echo $rec4_check17; ?>><span class="checkbox-parts">お酒飲めなくてもOK</span></label>	
								<label style="vertical-align: middle"><input type="checkbox" name="rec4q" class="checkbox-input" value="on" <?php echo $rec4_check18; ?>><span class="checkbox-parts">保証期間あり</span></label>	
							</p>
							<p style="margin-bottom: 0;"><span>募集要項</span></p>
								<table>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5" class="txtfiled" placeholder="例）資格" value="<?php echo $rec5; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5a" class="txtfiled" placeholder="例）18歳以上（高校生不可）" value="<?php echo $rec5a; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5b" class="txtfiled" placeholder="例）勤務地" value="<?php echo $rec5b; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5c" class="txtfiled" placeholder="例）群馬県前橋市" value="<?php echo $rec5c; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5d" class="txtfiled" placeholder="例）勤務時間" value="<?php echo $rec5d; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5e" class="txtfiled" placeholder="例）20:00～LAST" value="<?php echo $rec5e; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5f" class="txtfiled" placeholder="" value="<?php echo $rec5f; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5g" class="txtfiled" placeholder="" value="<?php echo $rec5g; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5h" class="txtfiled" placeholder="" value="<?php echo $rec5h; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5i" class="txtfiled" placeholder="" value="<?php echo $rec5i; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5j" class="txtfiled" placeholder="" value="<?php echo $rec5j; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5k" class="txtfiled" placeholder="" value="<?php echo $rec5k; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5l" class="txtfiled" placeholder="" value="<?php echo $rec5l; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5m" class="txtfiled" placeholder="" value="<?php echo $rec5m; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5n" class="txtfiled" placeholder="" value="<?php echo $rec5n; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5o" class="txtfiled" placeholder="" value="<?php echo $rec5o; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5p" class="txtfiled" placeholder="" value="<?php echo $rec5p; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5q" class="txtfiled" placeholder="" value="<?php echo $rec5q; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5r" class="txtfiled" placeholder="" value="<?php echo $rec5r; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="rec5s" class="txtfiled" placeholder="" value="<?php echo $rec5s; ?>"></label>
											</p>
										</td>
									</tr>									
								</table>						
							
							<p style="padding-top: 30px;">
								<label><span>求人用 電話番号</span><input type="text" name="contact1" class="txtfiled" placeholder="電話番号" value="<?php echo $contact1; ?>"></label>
							</p>
							<p>
								<label><span>求人用 メールアドレス</span><input type="email" name="contact1a" class="txtfiled" placeholder="メールアドレス" value="<?php echo $contact1a; ?>"></label>
							</p>
							<p>
								<label><span>求人用 LINE ID</span><input type="text" name="contact1b" class="txtfiled" placeholder="LINE ID" value="<?php echo $contact1b; ?>"></label>
							</p>
							<p>
								<label><span>求人用 LINE URL</span><input type="url" name="contact1c" class="txtfiled" placeholder="求人用 LINE URL" value="<?php echo $contact1c; ?>"></label>
							</p>
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