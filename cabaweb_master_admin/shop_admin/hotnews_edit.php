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
$result=mysqli_query($sql2, "SELECT * From `shop_tb` WHERE `data5` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu8.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース編集｜Admin Tool</title>
<meta name="description" content="管理画面ツール　ホットニュース編集">

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
				<h2>ニュース編集</h2>
				
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						
						<form action="hotnews_edit_check.php" method="post" id="form" enctype="multipart/form-data">
							<input type="hidden" name="news_id" value="<?php echo $news_id; ?>" />
							<input type="hidden" name="news_no" value="<?php echo $news_no; ?>" />
<input type="hidden" name="sort" value="<?php echo $sort; ?>" />
<input type="hidden" name="sort2" value="<?php echo $sort2; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
							<input name="jpeg" type="hidden" value="<?php echo $jpeg; ?>" />
							<input type="hidden" name="link" value="<?php echo $link; ?>" />
<input type="hidden" name="blank" value="<?php echo $blank; ?>" />
<input type="hidden" name="end" value="<?php echo $end; ?>" />
		<input type="hidden" name="time" value="<?php echo $time; ?>" />
		<input type="hidden" name="hotnews" value="<?php echo $hotnews; ?>" />
							<input type="hidden" name="photo_box" value="<?php echo $photo_box; ?>" />
							<input type="hidden" name="n_select" value="<?php echo $n_select; ?>" />
		<input type="hidden" name="sort_order" value="<?php echo $sort_order; ?>" />
		<input type="hidden" name="n_area" value="<?php echo $area; ?>" />
		<input type="hidden" name="n_area2" value="<?php echo $area2; ?>" />
		<input type="hidden" name="n_gyoushu" value="<?php echo $n_gyoushu; ?>" />
							<p>
								<label>
									<span>タイトル（<font color="#FF0000">必須</font>）</span>
									<input type="text" name="newstitle" class="txtfiled" placeholder="例）あいちゃんバースデーイベント開催！" value="<?php echo $newstitle; ?>" required><br />
								</label>
							</p>
							<p>
								<label>
									<span>掲載終了日</span><input type="date" name="start" id="today" min="2020-04-20" value="<?php echo $start; ?>"><br />
									<span style="font-size:60%; color:#FF0000;">
										※設定した日付を過ぎると自動的に削除されます。<br />
										※日付を設定しない場合は永久に掲載されます。
									</span>
								</label>
							</p>
							<p>
								<label>
									<span>内容（<font color="#FF0000">必須</font>）</span><?php $input = str_replace("<br />" , "\r\n" , $input); ?><textarea name="input" class="txtfiled" rows="10" placeholder="例）7月4日にあいちゃんのバースデーイベントを開催します！" required><?php echo $input; ?></textarea><br />
									<span style="font-size:60%; color:#FF0000;">※絵文字を使用した場合、絵文字が反映されない場合があります。</span>
								</label>
							</p>
							<p>
								<label>
									<span>リンクURL設定</span>
									<input type="url" name="n_link" class="txtfiled" placeholder="例）https://www.monochrome-ds.com/"  value="<?php echo $n_link; ?>"><br />
									<span style="font-size:60%; color:#FF0000;">※求人情報なら求人ページのURL、誕生日ならキャストページURLなど</span>
								</label>
							</p>
							<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" /><input type="hidden" name="operation" value="edit" />
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