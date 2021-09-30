<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース並び替え｜Admin Tool</title>
<meta name="description" content="管理画面ツール　ホットニュース並び替え">

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
<!--ソータブル-->
<link href="sortable/css/style.css" rel="stylesheet" type="text/css" media="all" />

<script type="text/javascript" src="sortable/js/jquery-1.7.2.min.js"></script>

<script type="text/javascript" src="sortable/js/jquery-ui-1.8.21.custom.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.touch-punch.js"></script>
<style type="text/css">

#order_list {
	cursor: move;
}

.hover {
	background: #808080;
}
</style>
	<!--ソータブル-->
</head>

<body>
	<div id="top_fade">	
	<div class="drawer drawer--left">
		<?php include ('php/header.php'); ?>
		
		<div id="page_base">
			<h2>ニュース並び替え</h2>
			<div class="page_base_in">
				<div class="page_base_box_2">
					<div class="attention_2">
						※移動させたいニュースをドラッグ＆ドロップをして、確定ボタンを必ず押して下さい。<br />
						<br />
						【やり方】<br />
						①移動させたいニュースをタップし続ける。<br />
						↓<br />
						②タップしたまま移動させたい場所まで動かす。<br />
						↓<br />
						③移動させたい場所で離す。<br />
						↓<br />
						④最後に確定ボタンを押す。
					</div>
					<script type="text/javascript">
jQuery.noConflict();

jQuery(function($) {
	$("#order_list").sortable({ 
		items: "li" ,
		hoverClass: "hover" ,
		stop : function(){
			var data=[];
			$("li","#order_list").each(function(i,v){
				data.push(v.id);
			});
			$('#order').val(data.toString());
		},
		update : function(){
			$('#submit').removeAttr('disabled');
		}
	});
});
</script>
				  <ul id="order_list">
						<?php
$result=mysqli_query($sql3, "SELECT * From `news` WHERE (sort>='$news_today' or sort='') AND blank='$login_id' AND link='1' ORDER by sort_order");
$cnt=mysqli_num_rows($result);
						
while($row=mysqli_fetch_assoc($result)){

include('../parts/basic_hensu2.php');

//▽表示内容ここから

echo '<li id="' ."$news_id".'">';
			
	echo '<div class="top_news_box"><div class="photo_thumbs">';			
			
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"../photo/nophoto_1.jpg\" class=\"lozad\" alt=\"\">\n";
}else{
		if($photo_box == '1'){
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}elseif($photo_box == '3'){
	echo "<img src=\"\" data-src=\"https://www.nightgram.com/master_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}elseif($photo_box == ''){
echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}
		
}
	echo "</div>\n";

echo "<div class=\"top_news_box_time\">登録日：";
	
	echo date("Y.m.d",$news_no);

	echo "</div><div class=\"top_news_box_time_2\">掲載終了日：";
	
	if($start == ''){
	echo "なし\n";
}else{
		echo $start;
	}
	
	echo "</div>";
	echo "<div class=\"top_news_box_title\">".$newstitle."</div>";

//△表示内容ここまで
echo "</li>\n";

}
?>
					</ul>
				</div>
				
				<form action="news_sort.php" method="post">
					<input type="hidden" name="order" id="order" size=10 readonly>
					<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
					<div class="under_button_area_2">
						<button name="submit" type="submit"	disabled="disabled" class="formbtn_2" id="submit" >順番を確定</button>
					</div>
				</form>
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
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>