<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	$news_id = $_GET['news_id'];

$result=mysqli_query($sql3, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu2.php');
}

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `login_id` = '$blank'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース画像編集｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　ニュース画像編集">

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
				<h2>ニュース画像編集</h2>
				
				<div class="page_base_in"> 
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="hotnews_photo_check.php" method="post" id="form" enctype="multipart/form-data">
							<h3>画像登録</h3>
							<table>
								<tr>
									<td class="t_hot">
										<div class="castphoto_number">現在の画像</div>
										<?php
if ($photo1 == $empty) {
	echo '<img src="../photo/nophoto_2.jpg" class="castphoto_contain" />';
} else {
	
			if($photo_box == '1'){
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" alt=\"".$name."\" class=\"castphoto_contain\" />\n";
}elseif($photo_box == '3'){
	echo "<img src=\"https://www.nightgram.com/master_admin/".$photo1."".$jpeg."\" alt=\"".$name."\" class=\"castphoto_contain\" />\n";
}elseif($photo_box == ''){
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" alt=\"".$name."\" class=\"castphoto_contain\" />\n";
}
}

?>

										<div class="sakujyo_check">
											<label><input type="checkbox" name="delete1" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>									
									</td>
									<td class="t_hot-2">
										<label class="file-btn">
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" class="file" name="photo1" />
											</div>
										</label>
									</td>
								</tr>
							</table>
							<input type="hidden" name="news_id" value="<?php echo $news_id; ?>" />
							<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
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
<!--ヘッダー-->
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
<!--ヘッダー　プラグイン-->
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
<!--サイド　プラグイン-->
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

</html>