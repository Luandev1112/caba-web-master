<?php
//セッションの復元
session_start();

//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once 'conf.php';

//フォームからデータ受け取り
$info_id = $_POST['info_id'];
$info_time = $_POST['info_time'];
$info_title = $_POST['info_title'];
$info_machi = $_POST['info_machi'];
$info_shop = $_POST['info_shop'];
$info_naiyou = $_POST['info_naiyou'];
$info_text = htmlspecialchars($_POST['info_text'],ENT_QUOTES);
$info_select = $_POST['info_select'];
$info_blank = $_POST['info_blank'];
//データを整形
$info_text = mb_convert_kana($info_text,'KaV','utf-8');

//追加
$info_text = str_replace('\\' , '' , $info_text);
//改行コードの前に改行タグを入れる
$info_text = nl2br($info_text);
//改行コードを削除
$info_text = str_replace("\r\n" , "" , $info_text);

$info_time = date("Y-m-d,H:i:s");


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗更新情報確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　店舗更新情報確認">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

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
				<h2>店舗更新情報確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="information_2_write.php" method="post" id="form" enctype="multipart/form-data">
							<p>
								<label>
									<span>■掲載エリア</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php 
	if ($info_naiyou == '1') {
	echo "群馬エリア";
}
	if ($info_naiyou == '2') {
	echo "栃木エリア";
}
		if ($info_naiyou == '3') {
	echo "埼玉エリア";
}
		if ($info_naiyou == '4') {
	echo "長野エリア";
}
		if ($info_naiyou == '5') {
	echo "富山エリア";
}
		if ($info_naiyou == '6') {
	echo "新潟エリア";
}
		if ($info_naiyou == '7') {
	echo "石川エリア";
}
		if ($info_naiyou == '8') {
	echo "東京エリア";
}
		if ($info_naiyou == '9') {
	echo "山梨エリア";
}
		if ($info_naiyou == '10') {
	echo "神奈川エリア";
}
		if ($info_naiyou == '11') {
	echo "熊本エリア";
}
		if ($info_naiyou == '12') {
	echo "千葉エリア";
}
		if ($info_naiyou == '13') {
	echo "愛知エリア";
}
 ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■街名</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php
$result=mysqli_query($sql, "SELECT * From `toshi_tb` ORDER by toshi_id");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

if ($info_machi == $toshi_id) {
		echo $toshi_name;
}else{
echo "";
}
}
?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■店舗名</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php
$result=mysqli_query($sql, "SELECT * From `shop_tb` ORDER by s_id");
$cnt=mysqli_num_rows($result);	  
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');

//▽表示内容ここから
if ($info_shop == $no) {
		echo $s_name;
}else{
echo "";
}
}

?></span>
								</label>
							</p>
							<p>
    <label><span>更新内容（<font color="#CC0000">必須</font>）</span>
		
		<?php 
	if ($info_select == '2') {
	echo "新規掲載店";
}
	if ($info_select == '3') {
	echo "写真追加";
}
		if ($info_select == '4') {
	echo "インスタ追加";
}
		if ($info_select == '5') {
	echo "You Tube追加";
}
 ?>
    </label>
    </p>
							<p>
								<label>
									<span>■内容</span><br />
									<span style="font-size: 80%; color: #4D4D4D;">
										<?php echo $info_text; ?></span>
								</label>
							</p>							
							<input type="hidden" name="info_id" value="<?php echo $info_id; ?>" />
<input type="hidden" name="info_time" value="<?php echo $info_time; ?>" />
<input type="hidden" name="info_title" value="<?php echo $info_title; ?>" />
<input type="hidden" name="info_machi" value="<?php echo $info_machi; ?>" />
<input type="hidden" name="info_shop" value="<?php echo $info_shop; ?>" />
<input type="hidden" name="info_naiyou" value="<?php echo $info_naiyou; ?>" />
<input type="hidden" name="info_text" value="<?php echo $info_text; ?>" />
<input type="hidden" name="info_select" value="<?php echo $info_select; ?>" />
<input type="hidden" name="info_blank" value="<?php echo $info_blank; ?>" />
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
function () {
    var today = new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0"+(today.getMonth()+1)).slice(-2);
    var dd = ("0"+today.getDate()).slice(-2);
    document.getElementById("today").value=yyyy+'-'+mm+'-'+dd;
}
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