<?php
//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';


$news_id = $_GET['news_id'];

$result=mysqli_query($sql3, "SELECT * From `news` WHERE `news_id` = '$news_id'");
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu2.php');
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

<link rel="canonical" href="event_info.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--right">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>EVENT<br /><span style="font-size: 50%;">イベント詳細</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="event_page_base">
						<?php 
	 if($link=='2'){
	echo "<div class=\"eventinfo_page_icon\" style=\"color: #6ED5E5;\">イベント</div>\n";
}elseif($link=='3'){
	echo "<div class=\"eventinfo_page_icon\" style=\"color: #FF0000;\">店休日</div>\n";
}elseif($link=='4'){
	echo "<div class=\"eventinfo_page_icon\" style=\"color: #F355D9;\">誕生日</div>\n";
}else{
	echo "";
}
?>
						<div class="eventinfo_page_ymd"><?php 
		  echo date('Y.m.d',strtotime($sort));
		  ?></div>
						<div class="eventinfo_page_title"><?php echo $newstitle; ?></div>
						<div class="eventinfo_page_naiyou">
							<?php 
function link_it($input){
    $pattern = '/((?:https?|ftp):\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+)/u';
    $replacement = '<a href="\1">\1</a>';
    $input= preg_replace($pattern,$replacement,$input);
    return $input;
}
$input= preg_replace("/([a-zA-Z0-9_\.-]+\@)([a-zA-Z0-9_\.-]+)([a-zA-Z]+)/isu", "<a href=\"mailto:\${1}\${2}\${3}\">\${1}\${2}\${3}</a>", $input);
 
	// パターン
$pattern = '/((?:https?|ftp):\/\/[-_.!~*\'()a-zA-Z0-9;\/?:@&=+$,%#]+)/u';

// 置換後の文字列
$replacement = '<a href="\1">\1</a>';

// 置換
$input= preg_replace($pattern,$replacement,$input);

// 出力
echo $input;
 ?></div>
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
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>