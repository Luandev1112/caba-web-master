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
<title>各画像設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　各画像設定">

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
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">各画像設定</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
						</div>
						<form action="shop_photo_check.php" method="post" id="form" enctype="multipart/form-data">
							<div class="shopphoto_page_box">
								<h3>サムネイル画像<br /><span class="attention_1">※推奨サイズ横600px 縦600px</span></h3>
								<table>
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">サムネイル</div>
											<?php
if ($sphoto1 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto1 . '.jpg" class="lozad castphoto_contain">';
}
?>
											<br />
											<?php
if($photo1!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete1\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
								
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto1"  />
												</div>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="shopphoto_page_box_2">
								<h3>No Photo画像<br /><span class="attention_1">※推奨サイズ横600px 縦600px</span></h3>
								<table>
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">No Photo画像</div>
											<?php
if ($sphoto10 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto10 . '.jpg" class="lozad castphoto_contain">';
}
?><br />
											<?php
if($photo10!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete10\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto10"  />
												</div>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="shopphoto_page_box_2">
								<h3>求人画像<br /><span class="attention_1">※推奨サイズ横1200px 縦500px</span></h3>
								<table>
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">求人画像</div>
											<?php
if ($sphoto6 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto6 . '.jpg" class="lozad castphoto_contain">';
}
?><br />
											<?php
if($photo6!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete6\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto6"  />
												</div>
											</label>
										</td>
									</tr>
								</table>
							</div>
							<div class="shopphoto_page_box_2">
								<h3>店内写真<br /><span class="attention_1">※推奨サイズ横900px 縦600px</span></h3>
								<table>
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">1枚目</div>
											<?php
if ($sphoto2 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto2 . '.jpg" class="lozad castphoto_contain">';
}
?><br />
											<?php
if($photo2!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete2\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto2"  />
												</div>
											</label>
										</td>
									</tr>
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">2枚目</div>
											<?php
if ($sphoto3 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto3 . '.jpg" class="lozad castphoto_contain">';
}
?><br />
											<?php
if($photo3!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete3\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
										
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto3"  />
												</div>
											</label>
										</td>
									</tr>									
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">3枚目</div>
											<?php
if ($sphoto4 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto4 . '.jpg" class="lozad castphoto_contain">';
}
?><br />
											<?php
if($photo4!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete4\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
										
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto4"  />
												</div>
											</label>
										</td>
									</tr>
									<tr>
										<td class="t_castgallery">
											<div class="castphoto_number">4枚目</div>
											<?php
if ($sphoto5 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $sphoto5 . '.jpg" class="lozad castphoto_contain">';
}
?><br />
											<?php
if($photo5!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete5\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
										
										</td>
										<td class="t_castgallery-2">
											<label class="file-btn">
												<div class="file-btn2">アップロード</div>
												<div class="view_box">
													<input type="file" class="file" name="sphoto5"  />
												</div>
											</label>
										</td>
									</tr>
								</table>
							</div><input type="hidden" name="no" value="<?php echo $no; ?>" />
							<div class="castphoto_button">
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