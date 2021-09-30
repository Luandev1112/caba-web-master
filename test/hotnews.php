<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

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

<link rel="canonical" href="hotnews.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--right">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>NEWS<br /><span style="font-size: 50%;">ニュース</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="news_page_base">
						<?php
$result=mysqli_query($sql3, "SELECT * From `news` WHERE (sort>='$news_today' or sort='') AND link='1' AND blank='$login_id' ORDER BY sort_order ASC");
$cnt=mysqli_num_rows($result);
						
						function link_it($input){
    $pattern = '/((?:https?|ftp):\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+)/u';
    $replacement = '<a href="\1">\1</a>';
    $input= preg_replace($pattern,$replacement,$input);
    return $input;
}
						
						
						
//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu2.php');

	
	echo "<span id=\"".$news_id."\" class=\"link\"></span>\n";
	
	echo "<div class=\"news_page_box\">\n";
	if($photo1 == $empty){
	echo "<a href=\"img/nophoto.jpg\" data-fancybox=\"\" data-caption=\"\"><div class=\"photo_thumbs\"><img data-src=\"img/nophoto.jpg\" class=\"lozad\" /></div>";
}else{
		
		if($photo_box == '1'){
	echo "<a href=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" data-fancybox=\"\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" class=\"lozad\" /></div>\n";
}elseif($photo_box == '3'){
	echo "<a href=\"https://www.nightgram.com/master_admin/".$photo1.".jpg?".$koshin."\" data-fancybox=\"\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.nightgram.com/master_admin/".$photo1.".jpg?".$koshin."\" class=\"lozad\" /></div>\n";
}elseif($photo_box == ''){
	echo "<a href=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" data-fancybox=\"\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" class=\"lozad\" /></div>\n";
}
		
}
	
	echo "</a>\n";
	
	$input= preg_replace("/([a-zA-Z0-9_\.-]+\@)([a-zA-Z0-9_\.-]+)([a-zA-Z]+)/isu", "<a href=\"mailto:\${1}\${2}\${3}\">\${1}\${2}\${3}</a>", $input);
 
	// パターン
$pattern = '/((?:https?|ftp):\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+)/u';

// 置換後の文字列
$replacement = '<a href="\1">\1</a>';

// 置換
$input= preg_replace($pattern,$replacement,$input);
	
	echo "<div class=\"news_page_box_title\">".$newstitle."</div>
            <div class=\"news_page_box_naiyou\">".$input."</div>\n";

	if($n_link == $empty){
	echo "";
}else{
		echo "<div class=\"top_button_area\"><a href=\"".$n_link."\" class=\"btn_under\" title=\"詳細を見る\">詳細を見る</a></div>";
	}
	
	echo "</div>\n";
}
	
?>
						
						
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>	
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
var topBtn = $('#page_top');	
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
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>