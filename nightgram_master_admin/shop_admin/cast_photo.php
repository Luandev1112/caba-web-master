<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	//ファンクションファイル読み込み
require_once '../parts/function.php';

$name2 = $_GET['name2'];

$result=mysqli_query($sql2, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu2.php');
include('../parts/schetime.php');
}

$result=mysqli_query($sql3, "SELECT * From `shop` WHERE `login_id` = '$yobi1'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu_shop.php');
}

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `data5` = '$yobi1'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト写真設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト写真設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropper/1.0.0/cropper.min.css" rel="stylesheet" type="text/css" media="all"/>		
	
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
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">キャスト写真設定</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="cast_photo_check.php" method="post" id="form"  enctype="multipart/form-data">
							<table>
								<tr>
									<td class="t_castphoto">
										<div class="castphoto_number">サムネイル</div>
										<?php
if ($photo10 == $empty) {
	echo '<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain">';
} else {
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg\" class=\"lozad castphoto_contain\">";
}
?>
										<br />
										<?php
if($photo10!=$empty){
	echo "<div class=\"sakujyo_check\">
          <label><input type=\"checkbox\" name=\"delete10\" class=\"checkbox-input\" value=\"delete\" /><span class=\"checkbox-parts\">削除する</span></label>
          </div>";
}
?>
									</td>
									<td class="t_castphoto-2">
										<label class="file-btn">
											<div class="file-btn2">写真選択</div>
											<input type="file" name="photo10" id="photo10" class="file" />
											<!--div class="view_box">
										
											</div-->
										</label>
										<!-- 切り抜き範囲をhiddenで保持する -->
          <input type="hidden" id="upload-image-x2" name="profileImageX_2" value="0"/>
          <input type="hidden" id="upload-image-y2" name="profileImageY_2" value="0"/>
          <input type="hidden" id="upload-image-w2" name="profileImageW_2" value="0"/>
          <input type="hidden" id="upload-image-h2" name="profileImageH_2" value="0"/>
										 <br/>
          <br/>
          <img id="select-image2" class="img contain" style="max-width:500px;">
									</td>
								</tr>
							</table><input type="hidden" name="name2" value="<?php echo $name2; ?>" />
						<input type="hidden" name="no" value="<?php echo $no; ?>" />
						<div class="castphoto_button">
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
<!--Cropperの読み込み -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropper/1.0.0/cropper.min.js"></script>
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
<script>
   $(function(){
        // 初期設定
	var options =
	{
	 	aspectRatio: 1 / 1,
	 	viewMode:1,
		crop: function(e) {
		    	cropData = $('#select-image').cropper("getData");
		    	$("#upload-image-x").val(Math.floor(cropData.x));
		    	$("#upload-image-y").val(Math.floor(cropData.y));
		    	$("#upload-image-w").val(Math.floor(cropData.width));
		    	$("#upload-image-h").val(Math.floor(cropData.height));
		},
		zoomable:false,
		minCropBoxWidth:100,
		minCropBoxHeight:100,
		autoCropArea: 1.0
	}

        // 初期設定をセットする
	$('#select-image').cropper(options);

	$("#photo1").change(function(){
                // ファイル選択変更時に、選択した画像をCropperに設定する
		$('#select-image').cropper('replace', URL.createObjectURL(this.files[0]));
	});
});

</script>
<script>
   $(function(){
        // 初期設定
	var options =
	{
	 	aspectRatio: 1 / 1,
	 	viewMode:1,
		crop: function(e) {
		    	cropData = $('#select-image2').cropper("getData");
		    	$("#upload-image-x2").val(Math.floor(cropData.x));
		    	$("#upload-image-y2").val(Math.floor(cropData.y));
		    	$("#upload-image-w2").val(Math.floor(cropData.width));
		    	$("#upload-image-h2").val(Math.floor(cropData.height));
		},
		zoomable:false,
		minCropBoxWidth:100,
		minCropBoxHeight:100,
		autoCropArea: 1.0
	}

        // 初期設定をセットする
	$('#select-image2').cropper(options);

	$("#photo10").change(function(){
                // ファイル選択変更時に、選択した画像をCropperに設定する
		$('#select-image2').cropper('replace', URL.createObjectURL(this.files[0]));
	});
});

</script>
</html>