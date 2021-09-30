<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	$shop_id = $_GET['shop_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu.php');
}

$result=mysqli_query($sql2, "SELECT * From `shop_tb` WHERE `data5` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu4.php');
}

//新規IDを取得
$news_id=time('U');

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規ホットニュース登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規ホットニュース登録">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>
<!--ヘッダー　プラグイン-->

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
<!--サイド　プラグイン-->

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

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>新規ホットニュース登録</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <!--div class="castsort_attention">
    ※ホットニュースは1時間以上経過しないと次の新規投稿が出来ません。<br />
    <br />
    ※ホットニュースは投稿から24時間後に削除されます。
    </div-->
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="hotnews_check.php" method="post" id="form" enctype="multipart/form-data">

  <div class="hotnews_photo_area">
    <h3>画像登録</h3>    
    <!--div class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</div-->
    <table>
      <tr>
        <td class="t_hot">ホットニュース画像</td>
        <td class="t_hot-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" name="photo1" class="file" />
          </div>
          </label>                    
        </td>
      </tr>                                                          
    </table> 
  </div>

    <p>
    <label><span>タイトル（<font color="#CC0000">必須</font>）</span><input type="text" name="newstitle" class="txtfiled" placeholder="例）あいちゃんバースデーイベント開催！" required><br />
    <span style="font-size:60%; color:#FF6666;">※絵文字を使用した場合、絵文字が削除されてしまう場合がございます。</span></label>
    </p>   
    <p>
    <label><span>掲載終了日（<font color="#CC0000">必須</font>）</span><input type="date" name="start" id="today" required><br />
    <span style="font-size:60%; color:#FF6666;">設定した日付を過ぎると自動的に削除されます。</span>
    </label>
    </p>
    <p>
    <label><span>内容（<font color="#CC0000">必須</font>）</span><textarea name="input" class="txtfiled" rows="5" placeholder="例）7月4日にあいちゃんのバースデーイベントを開催します！" required></textarea><br />
    <span style="font-size:60%; color:#FF6666;">※絵文字を使用した場合、絵文字が削除されてしまう場合がございます。</span></label>
    </p>
<input type="hidden" name="news_id" value="<?php echo strtotime("now"); ?>" /><input type="hidden" name="blank" value="<?php echo $shop_id; ?>" />
		<input type="hidden" name="hotnews" value="<?php echo $portal; ?>" />
		<input name="n_area" type="hidden" class="w_per50" value="<?php echo $area; ?>" />
		<input name="n_area2" type="hidden" class="w_per50" value="<?php echo $area2; ?>" />
		<input name="n_gyoushu" type="hidden" class="w_per50" value="<?php echo $gyoushu; ?>" />
		<input name="end" type="hidden" class="w_per50" value="<?php echo $hyouji; ?>" />
		<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>" />
		<input type="hidden" name="news_no" value="<?php echo strtotime("now"); ?>" />
      <div class="todayscast_button_2">
      <button type="submit" class="formbtn_2">登録する</button>
      </div>
    </form>

  

  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>