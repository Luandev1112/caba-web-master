<?php
//設定ファイル読み込み
require_once('conf.php');

$id = $_POST['id'];
//フォームからの生データ
$url = $_POST['url'];
$shop_id = htmlspecialchars($_POST['shop_id'] , ENT_QUOTES);
$shop_pass = htmlspecialchars($_POST['shop_pass'] , ENT_QUOTES);
$shop_name = htmlspecialchars($_POST['shop_name'] , ENT_QUOTES);
$daihyo = htmlspecialchars($_POST['daihyo'] , ENT_QUOTES);
$add = htmlspecialchars($_POST['add'] , ENT_QUOTES);
$tell = $_POST['tell'];
$mail = $_POST['mail'];
$time1 = $_POST['time1'];
$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];
$data4 = $_POST['data4'];
$data5 = $_POST['data5'];
$data6 = $_POST['data6'];
$data7 = $_POST['data7'];
$data8 = $_POST['data8'];
$data9 = $_POST['data9'];
$data10 = $_POST['data10'];
$time2 = $_POST['time2'];
$time3 = $_POST['time3'];
$time4 = $_POST['time4'];
$group_id = htmlspecialchars($_POST['group_id'] , ENT_QUOTES);

//文字コード変換
$url = mb_convert_encoding($url,'UTF-8','AUTO');
$shop_id = mb_convert_encoding($shop_id,'UTF-8','AUTO');
$shop_pass = mb_convert_encoding($shop_pass,'UTF-8','AUTO');
$shop_name = mb_convert_encoding($shop_name,'UTF-8','AUTO');
$daihyo = mb_convert_encoding($daihyo,'UTF-8','AUTO');
$add = mb_convert_encoding($add,'UTF-8','AUTO');
$tell = mb_convert_encoding($tell,'UTF-8','AUTO');
$mail = mb_convert_encoding($mail,'UTF-8','AUTO');
$time1 = mb_convert_encoding($time1,'UTF-8','AUTO');
$data1= mb_convert_encoding($data1,'UTF-8','AUTO');
$data2 = mb_convert_encoding($data2,'UTF-8','AUTO');
$data3 = mb_convert_encoding($data3,'UTF-8','AUTO');
$data4 = mb_convert_encoding($data4,'UTF-8','AUTO');
$data5 = mb_convert_encoding($data5,'UTF-8','AUTO');
$data6 = mb_convert_encoding($data6,'UTF-8','AUTO');
$data7 = mb_convert_encoding($data7,'UTF-8','AUTO');
$data8 = mb_convert_encoding($data8,'UTF-8','AUTO');
$data9 = mb_convert_encoding($data9,'UTF-8','AUTO');
$data10 = mb_convert_encoding($data10,'UTF-8','AUTO');

//半角小文字に変換
$shop_id = mb_convert_kana($shop_id,'a','utf-8');
$shop_id = strtolower($shop_id);

$shop_pass = mb_convert_kana($shop_pass,'a','utf-8');
$shop_pass = strtolower($shop_pass);

$group_id = mb_convert_kana($group_id,'a','utf-8');
$group_id = strtolower($group_id);

//テキストを整形
$shop_name = mb_convert_kana($shop_name,'KaV','utf-8');
$daihyo = mb_convert_kana($daihyo,'KaV','utf-8');
$add = mb_convert_kana($add,'KaV','utf-8');
$tell = mb_convert_kana($tell,'KaV','utf-8');
$mail = mb_convert_kana($mail,'KaV','utf-8');
$data1 = mb_convert_kana($data1,'KaV','utf-8');
$data2 = mb_convert_kana($data2,'KaV','utf-8');
$data3 = mb_convert_kana($data3,'KaV','utf-8');
$data4 = mb_convert_kana($data4,'KaV','utf-8');
$data5 = mb_convert_kana($data5,'KaV','utf-8');
$data6 = mb_convert_kana($data6,'KaV','utf-8');
$data7 = mb_convert_kana($data7,'KaV','utf-8');
$data8 = mb_convert_kana($data8,'KaV','utf-8');
$data9 = mb_convert_kana($data9,'KaV','utf-8');
$data10 = mb_convert_kana($data10,'KaV','utf-8');

//[']を除去  SQL用追加
$shop_name = str_replace('\'' , '' , $shop_name);
$daihyo = str_replace('\'' , '' , $daihyo);
$add = str_replace('\'' , '' , $add);
$tell = str_replace('\'' , '' , $tell);
$mail = str_replace('\'' , '' , $mail);
$data1 = str_replace('\'' , '' , $data1);
$data2 = str_replace('\'' , '' , $data2);
$data3 = str_replace('\'' , '' , $data3);
$data4 = str_replace('\'' , '' , $data4);
$data5 = str_replace('\'' , '' , $data5);
$data6 = str_replace('\'' , '' , $data6);
$data7 = str_replace('\'' , '' , $data7);
$data8 = str_replace('\'' , '' , $data8);
$data9 = str_replace('\'' , '' , $data9);
$data10 = str_replace('\'' , '' , $data10);

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規顧客登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　新規顧客登録">

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
  <h2>新規顧客登録</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="write.php" method="post" id="form">
    <p>
    <label><span>店舗 URL（<font color="#CC0000">必須</font>）</span><?php echo $url; ?></label>
    </p>
    <p>
    <label><span>店舗 ID（<font color="#CC0000">必須</font>）</span><?php echo $shop_id; ?></label>
    </p>
    <p>
    <label><span>店舗 PASS（<font color="#CC0000">必須</font>）</span><?php echo $shop_pass; ?></label>
    </p>    
    <p>
    <label><span>店舗名（<font color="#CC0000">必須</font>）</span><?php echo $shop_name; ?></label>
    </p>
    <p>
    <label><span>代表者名（<font color="#CC0000">必須</font>）</span><?php echo $daihyo; ?></label>
    </p>
    <p>
    <label><span>店舗住所（<font color="#CC0000">必須</font>）</span><?php echo $add; ?></label>
    </p>    
    <p>
    <label><span>電話番号（<font color="#CC0000">必須</font>）</span><?php echo $tell; ?></label>
    </p>
    <p>
    <label><span>メールアドレス（<font color="#CC0000">必須</font>）</span><?php echo $mail; ?></label>
    </p>
    <p>
    <label><span>次回契約日（<font color="#CC0000">必須</font>）</span><?php echo $time1; ?><br />
    </label>
    </p>
		<p>
    <label><span>ナイトグラム掲載エリア（<font color="#CC0000">必須</font>）</span>
    <?php 
			if ($time3 == '1') {
	echo "群馬エリア";
}
	if ($time3 == '2') {
	echo "栃木エリア";
}
		if ($time3 == '3') {
	echo "埼玉エリア";
}
		if ($time3 == '4') {
	echo "長野エリア";
}
		if ($time3 == '5') {
	echo "富山エリア";
}
		if ($time3 == '6') {
	echo "新潟エリア";
}
		if ($time3 == '7') {
	echo "石川エリア";
}
		if ($time3 == '8') {
	echo "東京エリア";
}
		if ($time3 == '9') {
	echo "山梨エリア";
}
		?>
    </label>
    </p>
    <p>
    <label><span>入金確認（<font color="#CC0000">必須</font>）</span>
    <?php 
		if ($data1 == '0') {
	echo "--";
}
	if ($data1 == '1') {
	echo "入金済";
}
		if ($data1 == '2') {
	echo "未入金";
}
		if ($data1 == '3') {
	echo "請求済み";
}
		?>
    </label>
    </p>
		<p>
    <label><span>入金案内表示（<font color="#CC0000">必須</font>）</span>
    <?php 
		if ($data2 == '0') {
	echo "--";
}
		if ($data2 == '1') {
	echo "非表示";
}
		if ($data2 == '2') {
	echo "表示";
}
		?>
    </label>
    </p>
		<p>
    <label><span>契約プラン（<font color="#CC0000">必須</font>）</span>
   <?php 
		if ($data7 == '0') {
	echo "お手軽プラン";
}
		if ($data7 == '1') {
	echo "機能充実プラン";
}
		if ($data7 == '2') {
	echo "機能充実プラン Group";
}
		if ($data7 == '3') {
	echo "機能充実プラン プラス";
}
		if ($data7 == '4') {
	echo "機能充実プラン プラス Group";
}
		?>
    </label>
    </p>
    <p>
    <label><span>お支払いプラン（<font color="#CC0000">必須</font>）</span>
   <?php 
		if ($data3 == '0') {
	echo "--";
}
		if ($data3 == '1') {
	echo "初回 1年契約";
}
		if ($data3 == '2') {
	echo "1ヶ月契約";
}
		if ($data3 == '3') {
	echo "1年契約";
}
		?>
    </label>
    </p>
    <p>
    <label><span>お支払い方法（<font color="#CC0000">必須</font>）</span>
   <?php 
		if ($data4 == '0') {
	echo "--";
}
		if ($data4 == '1') {
	echo "銀行振込";
}
		if ($data4 == '2') {
	echo "クレジット決済";
}
		?>
    </label>
    </p> 
        <p>
    <label><span>Web最終更新日（<font color="#CC0000">必須</font>）</span><?php echo $time2; ?><br />
    </label>
    </p>
    <p>
    <label><span>今月のトップ画像更新（<font color="#CC0000">必須</font>）</span>
    <?php 
		if ($data5 == '1') {
	echo "更新 残りあと1枚";
}
		if ($data5 == '2') {
	echo "更新 残りあと2枚";
}
		if ($data5 == '3') {
	echo "更新済";
}
		if ($data5 == '4') {
	echo "未更新";
}
		?>
    </label>
    </p>
    <p>
    <label><span>今月の求人画像更新（<font color="#CC0000">必須</font>）</span>
    <?php 
		if ($data6 == '1') {
	echo "更新 残りあと1枚";
}
		if ($data6 == '2') {
	echo "更新済";
}
		if ($data6 == '3') {
	echo "未更新";
}
		?>
    </label>
    </p> 
		<p>
    <label><span>Google広告の契約（<font color="#CC0000">必須</font>）</span>
    <?php 
		if ($data8 == '1') {
	echo "未契約";
}
		if ($data8 == '2') {
	echo "契約中";
}
		?>
    </label>
    </p> 
		<p>
    <label><span>Google広告の契約（<font color="#CC0000">必須</font>）</span>
    <?php 
		if ($portal == '1') {
	echo "連携なし";
}
		if ($portal == '2') {
	echo "CABA LAB";
}
		?>
    </label>
    </p>
    <div class="todayscast_button_2">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input type="hidden" name="url" value="<?php echo $url; ?>" />
		<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>" />
		<input type="hidden" name="shop_pass" value="<?php echo $shop_pass; ?>" />
		<input type="hidden" name="shop_name" value="<?php echo $shop_name; ?>" />
		<input type="hidden" name="daihyo" value="<?php echo $daihyo; ?>" />
		<input type="hidden" name="add" value="<?php echo $add; ?>" />
		<input type="hidden" name="tell" value="<?php echo $tell; ?>" />
		<input type="hidden" name="mail" value="<?php echo $mail; ?>" />
		<input type="hidden" name="time1" value="<?php echo $time1; ?>" />
		<input type="hidden" name="data1" value="<?php echo $data1; ?>" />
		<input type="hidden" name="data2" value="<?php echo $data2; ?>" />
		<input type="hidden" name="data3" value="<?php echo $data3; ?>" />
		<input type="hidden" name="data4" value="<?php echo $data4; ?>" />
		<input type="hidden" name="data5" value="<?php echo $data5; ?>" />
		<input type="hidden" name="data6" value="<?php echo $data6; ?>" />
		<input type="hidden" name="data7" value="<?php echo $data7; ?>" />
		<input type="hidden" name="data8" value="<?php echo $data8; ?>" />
		<input type="hidden" name="data9" value="<?php echo $data9; ?>" />
		<input type="hidden" name="data10" value="<?php echo $data10; ?>" />
		<input type="hidden" name="time2" value="<?php echo $time2; ?>" />
		<input type="hidden" name="time3" value="<?php echo $time3; ?>" />
		<input type="hidden" name="time4" value="<?php echo $time4; ?>" />
		<input type="hidden" name="group_id" value="<?php echo $group_id; ?>" />
		<input type="hidden" name="portal" value="<?php echo $portal; ?>" />
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