<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once 'parts/function.php';

$id = $_GET['id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `id` = '$id'");
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>顧客情報変更｜Admin Tool</title>
<meta name="description" content="管理画面ツール　顧客情報変更">

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
  <h2>顧客情報変更</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="rewrite.php" method="post" id="form">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
    <p>
    <label><span>店舗 URL（<font color="#CC0000">必須</font>）</span><input type="text" name="url" class="txtfiled" placeholder="店舗ID入力" value="<?php echo $url; ?>" required></label>
    </p>
    <p>
    <label><span>店舗 ID（<font color="#CC0000">必須</font>）</span><?php echo $shop_id; ?></label>
    </p>
    <p>
    <label><span>店舗 PASS（<font color="#CC0000">必須</font>）</span><input type="text" name="shop_pass" class="txtfiled" placeholder="店舗PASS入力" value="<?php echo $shop_pass; ?>" required></label>
    </p>    
    <p>
    <label><span>店舗名（<font color="#CC0000">必須</font>）</span><input type="text" name="shop_name" class="txtfiled" placeholder="店舗名入力" value="<?php echo $shop_name; ?>" required></label>
    </p>
    <p>
    <label><span>代表者名（<font color="#CC0000">必須</font>）</span><input type="text" name="daihyo" class="txtfiled" placeholder="代表者名入力" value="<?php echo $daihyo; ?>" required></label>
    </p>
    <p>
    <label><span>店舗住所（<font color="#CC0000">必須</font>）</span><input type="text" name="add" class="txtfiled" placeholder="店舗住所入力" value="<?php echo $add; ?>" required></label>
    </p>    
    <p>
    <label><span>電話番号（<font color="#CC0000">必須</font>）</span><input type="text" name="tell" class="txtfiled" placeholder="電話番号入力" value="<?php echo $tell; ?>" required></label>
    </p>
    <p>
    <label><span>メールアドレス（<font color="#CC0000">必須</font>）</span><input type="text" name="mail" class="txtfiled" placeholder="メールアドレス入力" value="<?php echo $mail; ?>" required></label>
    </p>
    <p>
    <label><span>次回契約日（<font color="#CC0000">必須</font>）</span><input type="date" name="time1" id="today" value="<?php echo $time1; ?>" required><br />
    </label>
    </p>    
				<p>
    <label><span>ナイトグラム掲載エリア（<font color="#CC0000">必須</font>）</span>
				<?php
if ($time3 == '1') {
	$time3_check1 = 'selected="selected"';
}

if ($time3 == '2') {
	$time3_check2 = 'selected="selected"';
}
if ($time3 == '3') {
	$time3_check3 = 'selected="selected"';
}
if ($time3 == '4') {
	$time3_check4 = 'selected="selected"';
}
if ($time3 == '5') {
	$time3_check5 = 'selected="selected"';
}
if ($time3 == '6') {
	$time3_check6 = 'selected="selected"';
}
if ($time3 == '7') {
	$time3_check7 = 'selected="selected"';
}
if ($time3 == '8') {
	$time3_check8 = 'selected="selected"';
}
if ($time3 == '9') {
	$time3_check9 = 'selected="selected"';
}
		if ($time3 == '10') {
	$time3_check10 = 'selected="selected"';
}
		if ($time3 == '') {
	$time3_check_no = 'selected="selected"';
}
?>
    <select name="time3">
		<option value="" <?php echo $time3_check_no; ?>>--</option>
    <option value="1" <?php echo $time3_check1; ?>>群馬エリア</option>
    <option value="2" <?php echo $time3_check2; ?>>栃木エリア</option>       
    <option value="3" <?php echo $time3_check3; ?>>埼玉エリア</option>
    <option value="4" <?php echo $time3_check4; ?>>長野エリア</option>
		<option value="5" <?php echo $time3_check5; ?>>富山エリア</option>
		<option value="6" <?php echo $time3_check6; ?>>新潟エリア</option>
		<option value="7" <?php echo $time3_check7; ?>>石川エリア</option>
		<option value="8" <?php echo $time3_check8; ?>>東京エリア</option>
		<option value="9" <?php echo $time3_check9; ?>>山梨エリア</option>
		<option value="10" <?php echo $time3_check10; ?>>神奈川エリア</option>
    </select>
    </label>
    </p>
    <p>
    <label><span>入金確認（<font color="#CC0000">必須</font>）</span>
		<?php
if($data1=='0'){$data1_0=' selected="selected"';}
if($data1=='1'){$data1_1=' selected="selected"';}
if($data1=='2'){$data1_2=' selected="selected"';}
if($data1=='3'){$data1_3=' selected="selected"';}
?>
    <select name="data1" required>
    <option value="0"<?php echo $data1_0; ?>>--</option>
    <option value="1"<?php echo $data1_1; ?>>入金済</option>
    <option value="2"<?php echo $data1_2; ?>>未入金</option>       
    <option value="3"<?php echo $data1_3; ?>>請求済み</option>       
    </select>
    </label>
    </p>
		<p>
    <label><span>入金案内表示（<font color="#CC0000">必須</font>）</span>
		<?php
if($data2=='0'){$data2_0=' selected="selected"';}
if($data2=='1'){$data2_1=' selected="selected"';}
if($data2=='2'){$data2_2=' selected="selected"';}

?>
    <select name="data2" required>
    <option value="0"<?php echo $data2_0; ?>>--</option>
    <option value="1"<?php echo $data2_1; ?>>非表示</option>
    <option value="2"<?php echo $data2_2; ?>>表示</option>       
    </select>
    </label>
    </p>
		<p>
    <label><span>契約プラン（<font color="#CC0000">必須</font>）</span>
		<?php
if($data7=='0'){$data7_0=' selected="selected"';}
if($data7=='1'){$data7_1=' selected="selected"';}
if($data7=='2'){$data7_2=' selected="selected"';}
if($data7=='3'){$data7_3=' selected="selected"';}
if($data7=='4'){$data7_4=' selected="selected"';}

?>
    <select name="data7" required>
    <option value="0"<?php echo $data7_0; ?>>お手軽プラン</option>
    <option value="1"<?php echo $data7_1; ?>>機能充実プラン</option>
    <option value="2"<?php echo $data7_2; ?>>機能充実プラン Group</option> 
	<option value="3"<?php echo $data7_3; ?>>機能充実プラン プラス</option>  
	<option value="4"<?php echo $data7_4; ?>>機能充実プラン プラス Group</option>  
    </select>
    </label>
    </p>
    <p>
    <label><span>お支払いプラン（<font color="#CC0000">必須</font>）</span>
		<?php
if($data3=='0'){$data3_0=' selected="selected"';}
if($data3=='1'){$data3_1=' selected="selected"';}
if($data3=='2'){$data3_2=' selected="selected"';}
if($data3=='3'){$data3_3=' selected="selected"';}
?>
    <select name="data3" required>
    <option value="0"<?php echo $data3_0; ?>>--</option>
    <option value="1"<?php echo $data3_1; ?>>初回 1年契約</option>
    <option value="2"<?php echo $data3_2; ?>>1ヶ月契約</option>       
    <option value="3"<?php echo $data3_3; ?>>1年契約</option>
    </select>
    </label>
    </p>
    <p>
    <label><span>お支払い方法（<font color="#CC0000">必須</font>）</span>
		<?php
if($data4=='0'){$data4_0=' selected="selected"';}
if($data4=='1'){$data4_1=' selected="selected"';}
if($data4=='2'){$data4_2=' selected="selected"';}

?>
    <select name="data4" required>
    <option value="0"<?php echo $data4_0; ?>>--</option>
    <option value="1"<?php echo $data4_1; ?>>銀行振込</option>
    <option value="2"<?php echo $data4_2; ?>>クレジット決済</option>       
    </select>
    </label>
    </p> 
          <p>
    <label><span>Web最終更新日（<font color="#CC0000">必須</font>）</span><input type="date" name="time2" id="today" value="<?php echo $time2; ?>" required><br />
    </label>
    </p>

    <p>
    <label><span>今月のトップ画像更新（<font color="#CC0000">必須</font>）</span>
		<?php
if($data5=='1'){$data5_1=' selected="selected"';}
if($data5=='2'){$data5_2=' selected="selected"';}
if($data5=='3'){$data5_3=' selected="selected"';}
if($data5=='4'){$data5_4=' selected="selected"';}
?>
    <select name="data5" required>
    <option value="1"<?php echo $data5_1; ?>>更新 残りあと1枚</option>
    <option value="2"<?php echo $data5_2; ?>>更新 残りあと2枚</option>
    <option value="3"<?php echo $data5_3; ?>>未更新</option> 
    <option value="4"<?php echo $data5_4; ?>>更新済</option> 
    </select>
    </label>
    </p>
    <p>
    <label><span>今月の求人画像更新（<font color="#CC0000">必須</font>）</span>
		<?php
if($data6=='1'){$data6_1=' selected="selected"';}
if($data6=='2'){$data6_2=' selected="selected"';}
if($data6=='3'){$data6_3=' selected="selected"';}

?>
    <select name="data6" required>
    <option value="1"<?php echo $data6_1; ?>>更新 残りあと1枚</option>
    <option value="2"<?php echo $data6_2; ?>>更新済</option>  
	<option value="3"<?php echo $data6_3; ?>>未更新</option> 
    </select>
    </label>
    </p>
	 <p>
    <label><span>Google広告の契約（<font color="#CC0000">必須</font>）</span>
		<?php
if($data8=='1'){$data8_1=' selected="selected"';}
if($data8=='2'){$data8_2=' selected="selected"';}

?>
    <select name="data8" required>
    <option value="1"<?php echo $data8_1; ?>>未契約</option>
    <option value="2"<?php echo $data8_2; ?>>契約中</option>  
    </select>
    </label>
    </p>
		<p>
    <label><span>スライダー推奨サイズ（<font color="#CC0000">必須</font>）</span>
		<?php
if($data9=='1'){$data9_1=' selected="selected"';}
if($data9=='2'){$data9_2=' selected="selected"';}
if($data9=='3'){$data9_3=' selected="selected"';}
?>
    <select name="data9">
    <option value="1"<?php echo $data9_1; ?>>横：1500px  縦：1500px</option>
	<option value="2"<?php echo $data9_2; ?>>横：1500px  縦：1900px</option>
	<option value="3"<?php echo $data9_3; ?>>横：1500px  縦：1100px</option>
    </select>
    </label>
    </p>
		<p>
    <label><span>マイページ・お問合せ表示（<font color="#CC0000">必須</font>）</span>
		<?php
if($data10=='1'){$data10_1=' selected="selected"';}
if($data10=='2'){$data10_2=' selected="selected"';}

?>
      <select name="data10" required>
    <option value="1"<?php echo $data10_1; ?>>表示する</option>
	<option value="2"<?php echo $data10_2; ?>>表示しない</option>
    </select>
    </label>
    </p> 
		<p>
    <label><span>グループID（<font color="#CC0000">groupコースの場合必須</font>）</span>
      <input type="text" name="group_id" pattern="^[0-9A-Za-z]+$" class="txtfiled" placeholder="グループID" value="<?php echo $group_id; ?>"></label>
    </p>
		<p>
    <label><span>ポータル連携（<font color="#CC0000">必須</font>）</span>
		<?php
if($portal=='1'){$portal_1=' selected="selected"';}
if($portal=='2'){$portal_2=' selected="selected"';}	
?>
      <select name="portal" required>
    <option value="1"<?php echo $portal_1; ?>>連携なし</option>
	<option value="2"<?php echo $portal_2; ?>>CABA LAB・Nightgram</option>
    </select>
    </label>
    </p>
		<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>" />
<input type="hidden" name="operation" value="edit" />
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