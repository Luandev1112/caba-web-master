<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

//ファンクションファイル読み込み
require_once '../parts/function.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}
$result=mysqli_query($sql, "SELECT * From `data2` WHERE `name2` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu5.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗スライダー設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　スライダー設定">

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
				<h2>店舗スライダー設定</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
						</div>
						<div class="slider_caution">
							<font color="#FF0000">― 画像サイズ ―</font><br />
							<span class="slider_caution_sub">【横：1000px　縦：1000px】</span><br />
							<span class="slider_caution_sub_2">必ず推奨サイズでアップして下さい。</span>
						</div>
						<div class="slider_caution">
							<font color="#FF0000">― リンク設定 ―</font><br />
							<span class="slider_caution_sub_2">
								【リンク設定欄】にURLを入力して下さい。<br />
								入力がない場合はリンク設定されません。
							</span>
						</div> 	
						<form action="slider_check.php" method="post" id="form" enctype="multipart/form-data">
							<table>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">1枚目</div>
										<?php
if ($photo1 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo1 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo1" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link1" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link1; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end1" id="today" min="2020-04-20" value="<?php echo $end1; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div> 										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">2枚目</div>
										<?php
if ($photo2 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo2 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo2" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link2" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link2; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end2" id="today" min="2020-04-20" value="<?php echo $end2; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">3枚目</div>
										<?php
if ($photo3 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo3 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo3" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link3" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link3; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end3" id="today" min="2020-04-20" value="<?php echo $end3; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">4枚目</div>
										<?php
if ($photo4 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo4 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo4" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link4" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link4; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end4" id="today" min="2020-04-20" value="<?php echo $end4; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">5枚目</div>
										<?php
if ($photo5 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo5 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo5" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link5" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link5; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end5" id="today" min="2020-04-20" value="<?php echo $end5; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">6枚目</div>
										<?php
if ($photo6 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo6 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo6" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link6" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link6; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end6" id="today" min="2020-04-20" value="<?php echo $end6; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">7枚目</div>
									<?php
if ($photo7 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo7 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
											<?php
if($photo7!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete7\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo7" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link7" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link7; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end7" id="today" min="2020-04-20" value="<?php echo $end7; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">8枚目</div>
									<?php
if ($photo8 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo8 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
											<?php
if($photo8!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete8\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo8" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link8" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link8; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end8" id="today" min="2020-04-20" value="<?php echo $end8; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">9枚目</div>
										<?php
if ($photo9 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo9 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
											<?php
if($photo9!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete9\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo9" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link9" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link9; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end9" id="today" min="2020-04-20" value="<?php echo $end9; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">10枚目</div>
										<?php
if ($photo10 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />';
} else {
	echo '<img src="" data-src="https://www.caba-web.com/client_admin/' . $photo10 . '.jpg?' . $koshin . '" class="lozad castphoto_contain"><br />';
}
?>
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
											<div class="file-btn2">画像選択</div>
											<div class="view_box">
												<input type="file" name="photo10" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="link10" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"  value="<?php echo $link10; ?>"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="end10" id="today" min="2020-04-20" value="<?php echo $end10; ?>"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>								
							</table>
							<div class="castphoto_button"><input type="hidden" name="id" value="<?php echo $id; ?>" /><input type="hidden" name="name" value="<?php echo $name; ?>" /><input type="hidden" name="name2" value="<?php echo $name2; ?>" /><input type="hidden" name="operation" value="edit" /><input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
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