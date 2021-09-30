<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once '../login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}
$result=mysqli_query($sql, "SELECT * From `shop_tb3` WHERE `s_id_staff` = '$s_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu_c.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>スタッフ求人設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　スタッフ求人設定">

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
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">スタッフ求人設定</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="shop_staff_rewrite.php" method="post" id="form" >
							<input type="hidden" name="s_id_staff" value="<?php echo $s_id_staff; ?>">
							<p>
								<label><span>注目ポイント　タイトル</span><?php $staff = str_replace("<br />" , "\r\n" , $staff); ?><textarea name="staff" class="txtfiled" rows="5" placeholder="例）正社員・アルバイト大募集！"><?php echo $staff; ?></textarea></label>
							</p>
							<p>
								<label><span>注目ポイント　本文</span><?php $staffb = str_replace("<br />" , "\r\n" , $staffb); ?><textarea name="staffb" class="txtfiled" rows="10" placeholder="例）本文"><?php echo $staffb; ?></textarea></label>
							</p>											
							<p>
								<label><span>給与 ①</span><input type="text" name="staff2" class="txtfiled" placeholder="例）初任給" value="<?php echo $staff2; ?>"></label>
								<label><input type="text" name="staff2a" class="txtfiled" placeholder="例）250,000円" value="<?php echo $staff2a; ?>"></label>
								<label><?php $staff2b = str_replace("<br />" , "\r\n" , $staff2b); ?><textarea name="staff2b" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"><?php echo $staff2b; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ②</span><input type="text" name="staff2c" class="txtfiled" placeholder="例）初任給" value="<?php echo $staff2c; ?>"></label>
								<label><input type="text" name="staff2d" class="txtfiled" placeholder="例）250,000円" value="<?php echo $staff2d; ?>"></label>
								<label><?php $staff2e = str_replace("<br />" , "\r\n" , $staff2e); ?><textarea name="staff2e" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"><?php echo $staff2e; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ③</span><input type="text" name="staff2f" class="txtfiled" placeholder="例）初任給" value="<?php echo $staff2f; ?>"></label>
								<label><input type="text" name="staff2g" class="txtfiled" placeholder="例）250,000円" value="<?php echo $staff2g; ?>"></label>
								<label><?php $staff2h = str_replace("<br />" , "\r\n" , $staff2h); ?><textarea name="staff2h" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"><?php echo $staff2h; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ④</span><input type="text" name="staff2i" class="txtfiled" placeholder="例）初任給" value="<?php echo $staff2i; ?>"></label>
								<label><input type="text" name="staff2j" class="txtfiled" placeholder="例）250,000円" value="<?php echo $staff2j; ?>"></label>
								<label><?php $staff2k = str_replace("<br />" , "\r\n" , $staff2k); ?><textarea name="staff2k" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"><?php echo $staff2k; ?></textarea></label>
							</p>
							<p>
								<label><span>給与 ⑤</span><input type="text" name="staff2l" class="txtfiled" placeholder="例）初任給" value="<?php echo $staff2l; ?>"></label>
								<label><input type="text" name="staff2m" class="txtfiled" placeholder="例）250,000円" value="<?php echo $staff2m; ?>"></label>
								<label><?php $staff2n = str_replace("<br />" , "\r\n" , $staff2n); ?><textarea name="staff2n" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"><?php echo $staff2n; ?></textarea></label>
							</p>							
							<p>
								<label><span>給与 その他・詳細など</span><?php $staff2o = str_replace("<br />" , "\r\n" , $staff2o); ?><textarea name="staff2o" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"><?php echo $staff2o; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ①　タイトル</span><?php $staff1 = str_replace("<br />" , "\r\n" , $staff1); ?><textarea name="staff1" class="txtfiled" rows="5" placeholder="例）今の給与より稼ぎませんか？"><?php echo $staff1; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ①　本文</span><?php $staff1a = str_replace("<br />" , "\r\n" , $staff1a); ?><textarea name="staff1a" class="txtfiled" rows="10" placeholder="例）夜の業界は凄く稼げるんです！"><?php echo $staff1a; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ②　タイトル</span><?php $staff1b = str_replace("<br />" , "\r\n" , $staff1b); ?><textarea name="staff1b" class="txtfiled" rows="5" placeholder="例）今の給与より稼ぎませんか？"><?php echo $staff1b; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ②　本文</span><?php $staff1c = str_replace("<br />" , "\r\n" , $staff1c); ?><textarea name="staff1c" class="txtfiled" rows="10" placeholder="例）夜の業界は凄く稼げるんです！"><?php echo $staff1c; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ③　タイトル</span><?php $staff1d = str_replace("<br />" , "\r\n" , $staff1d); ?><textarea name="staff1d" class="txtfiled" rows="5" placeholder="例）今の給与より稼ぎませんか？"><?php echo $staff1d; ?></textarea></label>
							</p>
							<p>
								<label><span>メッセージ ③　本文</span><?php $rec3c = str_replace("<br />" , "\r\n" , $rec3c); ?><textarea name="rec3c" class="txtfiled" rows="10" placeholder="例）当店なら未経験大歓迎！お子さまのいるママさんも大歓迎です！"><?php echo $rec3c; ?></textarea></label>
							</p>
							<p>
								<label><span>待遇</span><?php $staff4 = str_replace("<br />" , "\r\n" , $staff4); ?><textarea name="staff4" class="txtfiled" rows="10" placeholder="例）・交通費支給・食事補助あり"><?php echo $staff4; ?></textarea></label>
							</p>
							<p style="margin-bottom: 0;"><span>募集要項</span></p>
								<table>
									<tr>
										<td width="35%" class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3" class="txtfiled" placeholder="例）資格" value="<?php echo $staff3; ?>"></label>
											</p>
										</td>
										<td width="65%" class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3a" class="txtfiled" placeholder="例）18歳以上（高校生不可）" value="<?php echo $staff3a; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3b" class="txtfiled" placeholder="例）勤務地" value="<?php echo $staff3b; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3c" class="txtfiled" placeholder="例）群馬県前橋市" value="<?php echo $staff3c; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3d" class="txtfiled" placeholder="例）勤務時間" value="<?php echo $staff3d; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3e" class="txtfiled" placeholder="例）20:00～LAST" value="<?php echo $staff3e; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3f" class="txtfiled" placeholder="" value="<?php echo $staff3f; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3g" class="txtfiled" placeholder="" value="<?php echo $staff3g; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3h" class="txtfiled" placeholder="" value="<?php echo $staff3h; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3i" class="txtfiled" placeholder="" value="<?php echo $staff3i; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3j" class="txtfiled" placeholder="" value="<?php echo $staff3j; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3k" class="txtfiled" placeholder="" value="<?php echo $staff3k; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3l" class="txtfiled" placeholder="" value="<?php echo $staff3l; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3m" class="txtfiled" placeholder="" value="<?php echo $staff3m; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3n" class="txtfiled" placeholder="" value="<?php echo $staff3n; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3o" class="txtfiled" placeholder="" value="<?php echo $staff3o; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3p" class="txtfiled" placeholder="" value="<?php echo $staff3p; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3q" class="txtfiled" placeholder="" value="<?php echo $staff3q; ?>"></label>
											</p>
										</td>
									</tr>
									<tr>
										<td class="t_recruit_1">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3r" class="txtfiled" placeholder="" value="<?php echo $staff3r; ?>"></label>
											</p>
										</td>
										<td class="t_recruit_2">
											<p style="margin-bottom: 0;">
												<label><input type="text" name="staff3s" class="txtfiled" placeholder="" value="<?php echo $staff3s; ?>"></label>
											</p>
										</td>
									</tr>									
								</table>						
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