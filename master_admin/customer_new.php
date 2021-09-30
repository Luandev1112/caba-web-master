<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';


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
    
    <form action="check.php" method="post" id="form">
    <p>
    <label><span>店舗 URL（<font color="#CC0000">必須</font>）</span><input type="text" name="url" class="txtfiled" placeholder="店舗ID入力" required></label>
    </p>
    <p>
    <label><span>店舗 ID（<font color="#CC0000">必須</font>）</span><input type="text" name="shop_id" class="txtfiled" placeholder="店舗ID入力" required></label>
    </p>
    <p>
    <label><span>店舗 PASS（<font color="#CC0000">必須</font>）</span><input type="text" name="shop_pass" class="txtfiled" placeholder="店舗PASS入力" required></label>
    </p>    
    <p>
    <label><span>店舗名（<font color="#CC0000">必須</font>）</span><input type="text" name="shop_name" class="txtfiled" placeholder="店舗名入力" required></label>
    </p>
    <p>
    <label><span>代表者名（<font color="#CC0000">必須</font>）</span><input type="text" name="daihyo" class="txtfiled" placeholder="代表者名入力" required></label>
    </p>
    <p>
    <label><span>店舗住所（<font color="#CC0000">必須</font>）</span><input type="text" name="add" class="txtfiled" placeholder="店舗住所入力" required></label>
    </p>    
    <p>
    <label><span>電話番号（<font color="#CC0000">必須</font>）</span><input type="text" name="tell" class="txtfiled" placeholder="電話番号入力" required></label>
    </p>
    <p>
    <label><span>メールアドレス（<font color="#CC0000">必須</font>）</span><input type="text" name="mail" class="txtfiled" placeholder="メールアドレス入力" required></label>
    </p>
    <p>
    <label><span>次回契約日（<font color="#CC0000">必須</font>）</span><input type="date" name="time1" id="today" required><br />
    </label>
    </p>    
		<p>
    <label><span>ナイトグラム掲載エリア（<font color="#CC0000">必須</font>）</span>
    <select name="time3" required>
		<option value="" selected>--</option>
         <option value="1">群馬エリア</option>
    <option value="2">栃木エリア</option>       
    <option value="3">埼玉エリア</option>
    <option value="4">長野エリア</option>
	<option value="5">富山エリア</option>
	<option value="6">新潟エリア</option>
		<option value="7">石川エリア</option>
		<option value="8">東京エリア</option>
		<option value="9">山梨エリア</option>
		<option value="10">神奈川エリア</option>
    </select>
    </label>
    </p>
    <p>
    <label><span>入金確認（<font color="#CC0000">必須</font>）</span>
    <select name="data1" required>
    <option value="0">--</option>
    <option value="1">入金済</option>
    <option value="2">未入金</option>       
    <option value="3">請求済み</option>       
    </select>
    </label>
    </p>
		<p>
    <label><span>入金案内表示（<font color="#CC0000">必須</font>）</span>
    <select name="data2" required>
    <option value="0">--</option>
    <option value="1">非表示</option>
    <option value="2">表示</option>       
    </select>
    </label>
    </p>
    <p>
	<label><span>契約プラン（<font color="#CC0000">必須</font>）</span>
    <select name="data7" required>
	<option value="0">お手軽プラン</option>
    <option value="1">機能充実プラン</option>
    <option value="2">機能充実プラン Group</option>       
    <option value="3">機能充実プラン プラス</option>
	<option value="4">機能充実プラン プラス Group</option>
	</select>
    </label>
    </p>	
	<p>
    <label><span>お支払いプラン（<font color="#CC0000">必須</font>）</span>
    <select name="data3" required>
    <option value="0">--</option>
    <option value="1">初回 1年契約</option>
    <option value="2">1ヶ月契約</option>       
    <option value="3">1年契約</option>
    </select>
    </label>
    </p>
    <p>
    <label><span>お支払い方法（<font color="#CC0000">必須</font>）</span>
    <select name="data4" required>
    <option value="0">--</option>
    <option value="1">銀行振込</option>
    <option value="2">クレジット決済</option>       
    </select>
    </label>
    </p> 
          <p>
    <label><span>Web最終更新日（<font color="#CC0000">必須</font>）</span><input type="date" name="time2" id="today" required><br />
    </label>
    </p>
    <p>
    <label><span>今月のトップ画像更新（<font color="#CC0000">必須</font>）</span>
    <select name="data5" required>
    <option value="1">更新 残りあと1枚</option>
    <option value="2">更新 残りあと2枚</option>
	<option value="3">更新済</option>
    <option value="4">未更新</option>        
    </select>
    </label>
    </p>
    <p>
    <label><span>今月の求人画像更新（<font color="#CC0000">必須</font>）</span>
    <select name="data6" required>
    <option value="1">更新 残りあと1枚</option>
	<option value="2">更新済</option>
    <option value="3">未更新</option> 
    </select>
    </label>
    </p>
	<p>
    <label><span>Google広告の契約（<font color="#CC0000">必須</font>）</span>
    <select name="data8" required>
    <option value="1">未契約</option>
	<option value="2">契約中</option>
    </select>
    </label>
    </p> 
	<p>
    <label><span>スライダー推奨サイズ（<font color="#CC0000">必須</font>）</span>
    <select name="data9">
    <option value="1">横：1500px  縦：1500px</option>
	<option value="2">横：1500px  縦：1900px</option>
	<option value="3">横：1500px  縦：1100px</option>
    </select>
    </label>
    </p>
		<p>
    <label><span>マイページ・お問合せ表示（<font color="#CC0000">必須</font>）</span>
      <select name="data10" required>
    <option value="1">表示する</option>
	<option value="2">表示しない</option>
    </select>
    </label>
    </p> 
		<p>
    <label><span>グループID（<font color="#CC0000">groupコースの場合必須</font>）</span>
      <input type="text" name="group_id" pattern="^[0-9A-Za-z]+$" class="txtfiled" placeholder="グループID"></label>
    </p>
		<p>
    <label><span>ポータル連携（<font color="#CC0000">必須</font>）</span>
      <select name="portal" required>
    <option value="1">連携無し</option>
	<option value="2">CABA LAB・Nightgram</option>

    </select>
    </label>
    </p> <input type="hidden" name="id" value="<?php echo strtotime("now"); ?>" />
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