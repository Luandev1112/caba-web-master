<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>お問合せ・更新依頼｜Admin Tool</title>
<meta name="description" content="管理画面ツール　お問合せ・更新依頼">

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
				<h2>お問合せ・更新依頼</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_3">
							※店舗ページの更新依頼・ご質問などは以下のフォームからお願いします。<br />
							<br />
							※確認後、担当部署からご返答させて頂きます。<br />
							休業日・夏季休業・冬季休業の場合は返答までにお時間が掛かりますのでご理解下さい。
						</div>
						<form action="mail.php" method="post" id="form">
									<input type="hidden" name="お問合せ店舗名" value="<?php echo $shop_name; ?>" />
		<input type="hidden" name="お問合せ店舗URL" value="<?php echo $s_url; ?>" />
							<p>
								<label><span>ご担当者名（<font color="#FF0000">必須</font>）</span><input type="text" name="ご担当者名" class="txtfiled" placeholder="山田 一郎" required></label>
							</p>
							<p>
								<label><span>メールアドレス（<font color="#FF0000">必須</font>）</span><input type="email" name="Email" style="ime-mode:disabled;" class="txtfiled" placeholder="info@caba-web.com" required></label>
							</p>
							<p>
								<label><span>お問合せ内容</span>
									<select name="お問合せ内容">
										<option value=""></option>
										<option value="更新のご依頼">更新のご依頼</option>
										<option value="契約について">契約について</option>
										<option value="エラー・バグ関連">エラー・バグ関連</option>
										<option value="その他">その他</option>
									</select>
								</label>
							</p>
							<p>
								<label><span>内容</span><textarea name="内容" class="txtfiled" rows="5"></textarea></label>
							</p><input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
							<div class="input_area">
								<p>
									<button type="submit" class="formbtn">送信</button>
									<button type="reset" class="formbtn">リセット</button>
								</p>
							</div>
						</form>
						
					</div>
				</div>
			</div>
			<?php include ('php/footer.php'); ?>
		</div>
	</div>

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
<script>
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>	
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>