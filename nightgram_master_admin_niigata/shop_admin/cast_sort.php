<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

//ファンクションファイル読み込み
require_once '../parts/function.php';

$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト並び替え｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト並び替え">

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
<link href="sortable/css/style2.css" rel="stylesheet" type="text/css" media="all" />

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
			<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">キャスト並び替え</span></h2>
			<div class="page_base_in">
				<div class="page_base_box_2">				
					<div class="attention_2">
						※移動させたいキャストをドラッグ＆ドロップをして、確定ボタンを必ず押して下さい。<br />
						<br />
						【やり方】<br />
						①移動させたいキャストをタップし続ける。<br />
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
$result=mysqli_query($sql2, "SELECT * From `data` WHERE yobi1='$data5' ORDER by id");
$cnt=mysqli_num_rows($result);
						
while($row=mysqli_fetch_assoc($result)){
	
//include('parts/basic_hensu.php');
	
include('../parts/basic_hensu2.php');
include('../parts/starttime_conversion2.php');	/* 出勤開始時間を変換 */
include('../parts/schetime.php');

//▽表示内容ここから

echo '<li id="' ."$name2".'">';
			
	echo '<div class="top_news_box"><div class="top_cast_box_in"><div class="photo_thumbs">';			
			
	if($sphoto10 == $empty){
	//写真を表示
if($photo10 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto_1.jpg\" class=\"lozad\" alt=\"".$name."\">\n";
}else{
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg\" alt=\"".$name."\"/>\n";
}
}else{
	echo "<img src=\"https://www.caba-web.com/client_admin/".$sphoto1.".jpg\" alt=\"".$name."\"/>\n";
}
	

	echo "</div>\n";

echo "<p>".$name."</p>";

	echo "</div><div class=\"top_cast_box_button\">";
	
	if($option1=='1'){
	echo '<div class="top_cast_hyouji">公開中</div>';
}elseif($option1=='2'){
	echo '<div class="top_cast_hyouji_no">非公開</div>';
}else{
	echo '<div class="top_cast_hyouji">公開中</div>';
}
	//△表示内容ここまで
	echo "</div></div></li>";


}
?>						
					</ul>
					

				</div>
				<form action="sort.php" method="post">
					<input type="hidden" name="order" id="order" size=10 readonly>
					<input type="hidden" name="no" value="<?php echo $no; ?>" />
					<div class="under_button_area_2">
						<button name="submit" type="submit"	disabled="disabled" class="formbtn_2" id="submit" >順番を確定</button>
					</div>
				</form>
				
			</div>
		</div>
		<?php include ('php/footer.php'); ?>
	
	</div><!--drawer drawer--left-->
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