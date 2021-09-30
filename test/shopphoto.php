<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

$result=mysqli_query($sql, "SELECT * From `data3` WHERE `name2` = '$login_id'");
	
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu3.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>テスト</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">	
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">

<link rel="canonical" href="shopphoto.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--right">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>SHOP PHOTO<br /><span style="font-size: 50%;">店内写真</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="shopphoto_page_base" style="padding-top: 20px;">
						<?php 
	  if($link1 == $empty){
		  echo "";
}else{
		  echo "<h3>".$link1."</h3>	";
	  }
	  ?>
						<div class="wrapper">
							<?php 
			if($photo1 == $empty){
	echo "";
}else{
	
		echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo2 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo3 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo4 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			?>
							
						</div>
					</div>
					
					<div class="shopphoto_page_base">
						<?php 
	  if($link2 == $empty){
		  echo "";
}else{
		  echo "<h3>".$link2."</h3>	";
	  }
	  ?>
						<div class="wrapper">
							<?php 
			if($photo5 == $empty){
	echo "";
}else{
	
		echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo6 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo7 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo8 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			?>
							
						</div>
					</div>
					
					<div class="shopphoto_page_base">
						<?php 
	  if($link3 == $empty){
		  echo "";
}else{
		  echo "<h3>".$link3."</h3>	";
	  }
	  ?>
						<div class="wrapper">
							<?php 
			if($photo9 == $empty){
	echo "";
}else{
	
		echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo10 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo10.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo11 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo11.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo11.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo12 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo12.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo12.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			?>
							
						</div>
					</div>
					
					<div class="shopphoto_page_base">
						<?php 
	  if($link4 == $empty){
		  echo "";
}else{
		  echo "<h3>".$link4."</h3>	";
	  }
	  ?>
						<div class="wrapper">
							<?php 
			if($photo13 == $empty){
	echo "";
}else{
	
		echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo13.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo13.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo14 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo14.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo14.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo15 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo15.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo15.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			if($photo16 == $empty){
	echo "";
}else{
	echo "<div class=\"element_shopphoto\">
								<a href=\"https://www.caba-web.com/client_admin/".$photo16.".jpg?".$koshin."\" data-fancybox=\"shopphoto_group\" data-caption=\"\">
									<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo16.".jpg?".$koshin."\" class=\"lozad\" alt=\"\" ></div>
								</a></div>";
	}
			?>
							
						</div>
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
<!-- 読み込み -->
<script src="js/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
	$('[data-fancybox]').fancybox({
		loop : true,
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false
		}
	});
});
</script>	
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
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>