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
$info_text = $_POST['info_text'];
$info_select = $_POST['info_select'];
$info_photo = $_POST['info_photo'];
$info_blank = $_POST['info_blank'];


$result=mysqli_query($sql, "SELECT * From `information`");
mysqli_query($sql, "INSERT INTO `information` VALUES ('$info_id','$info_time','$info_title','$info_machi','$info_shop','$info_naiyou','$info_text','$info_select','$info_photo','$info_blank')");

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>運営からの情報を登録｜マスター管理</title>
	
<meta http-equiv="refresh" content="0;URL=information.php">


<meta name="robots" content="noindex,nofollow">

</head>

<body class="drawer drawer--left">

</main>

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
<!--選択　プラグイン-->
<script>
$(function() {
  var $children = $('.children');
  var original = $children.html();

  $('.parent').change(function() {
    var val1 = $(this).val();

    $children.html(original).find('option').each(function() {
      var val2 = $(this).data('val');
      if (val1 != val2) {
        $(this).not('optgroup,.msg').remove();
      }
    });

    if ($(this).val() === '') {
      $children.attr('disabled', 'disabled');
    } else {
      $children.removeAttr('disabled');
    }

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