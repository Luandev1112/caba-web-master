<?php header("Content-Type:text/html;charset=utf-8"); ?>
<?php

$shop_id = $_POST['shop_id'];
//-----------------以下基本設定　必ず設定してください。--------------------------

//サイトのトップページのURL　※送信完了後に「トップページへ戻る」ボタンが表示されますので
$site_top = "https://www.caba-web.com/client_admin/contact.php?shop_id=$shop_id";

// このPHPファイルの名前 ※ファイル名を変更した場合は必ずここも変更してください。
$file_name ="mail.php";

// メールを受け取るメールアドレス(複数指定する場合は「,」で区切ってください)info@caba-web.com
$to = "info@caba-web.com";

// 送信完了後に自動的に指定のページに移動する(する=1, しない=0)
// 0にすると、送信終了画面が表示されます。
$jpage = 0;

// 送信完了後に表示するページ（上記で1を設定した場合のみ）
$next = "";

//--------- 以下は必要に応じて設定してください --------------

// 送信されるメールのタイトル（件名）
$sbj = "CABAWEB管理画面からのお問合せ";

// 送信確認画面の表示(する=1, しない=0)
$chmail = 1;

// 差出人は、送信者のメールアドレスにする(する=1, しない=0)
// する場合は、メール入力欄のname属性の値を「Email」にしてください。
$from_add = 1;

// 差出人に送信内容確認メールを送る(送る=1, 送らない=0)
// 送る場合は、メール入力欄のname属性の値を「Email」にしてください。
//また差出人に送るメール本文の文頭に「○○様」と表示させるには名前入力欄のname属性を name="名前" としてください
$remail = 0;

// 差出人に送信確認メールを送る場合のメールのタイトル（上記で1を設定した場合のみ）
$resbj = "送信ありがとうございました";


// 必須入力項目を設定する(する=1, しない=0)
$esse = 1;

/* 必須入力項目(入力フォームで指定したname属性の値を指定してください。（上記で1を設定した場合のみ）
日本語はシングルクォーテーションで囲んで下さい。複数指定する場合は「,」で区切ってください)*/
$eles = array('Email');


//--------------------- 基本設定ここまで -----------------------------------

// 以下の変更は知識のある方のみ自己責任でお願いします。

$sendmail = 0;
foreach($_POST as $key=>$val) {
  if($val == "submit") $sendmail = 1;
}

// 文字の置き換え
$string_from = "＼";
$string_to = "ー";

// 未入力項目のチェック
if($esse == 1) {
  $flag = 0;
  $length = count($eles) - 1;
  foreach($_POST as $key=>$val) {
    $key = strtr($key, $string_from, $string_to);
    if($val == "submit") ;
    else {
      for($i=0; $i<=$length; $i++) {
        if($key == $eles[$i] && empty($val)) {
          $errm .= "<FONT color=#ff0000>「".$key."」は必須入力項目です。</FONT><br>\n";
          $flag = 1;
        }
      }
    }
  }
  foreach($_POST as $key=>$val) {
    $key = strtr($key, $string_from, $string_to);
    for($i=0; $i<=$length; $i++) {
      if($key == $eles[$i]) {
        $eles[$i] = "check_ok";
      }
    }
  }
  for($i=0; $i<=$length; $i++) {
    if($eles[$i] != "check_ok") {
      $errm .= "<FONT color=#ff0000>「".$eles[$i]."」が未選択です。</FONT><br>\n";
      $eles[$i] = "check_ok";
      $flag = 1;
    }
  }
  if($flag == 1){
    htmlHeader();
?>
<!--- 未入力があった時の画面 --- 開始 --------------------->
<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>お問合せ</h2>
  
<div class="page_base_in">  
  
  <div class="page_base_box_2">
  <div class="contact_page_base">
    <h3>お問合せ・ご依頼など</h3>
    <div class="todayscast_attention">
    ※店舗ページの更新依頼・ご質問などは以下のフォームからお願いします。<br />
    <br />
    ※確認後、担当部署からご返答させて頂きます。<br />
    休業日・夏季休業・冬季休業の場合は返答までにお時間が掛かりますのでご理解下さい。
    </div>
  </div>
入力エラー<br><br>
<?php echo $errm; ?>
<br><br>
<input type="button" value="前画面に戻る" onClick="history.back()">
 </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->
<!--- 終了 --->

<?php 
    htmlFooter();
    exit(0);
  }
}
// 届くメールのレイアウトの編集

$body="「".$sbj."」からメールが届きました\n\n";
$body.="■□■□■□■□■□■□■□■□■□■□■□■□■□\n\n";
foreach($_POST as $key=>$val) {
  $key = strtr($key, $string_from, $string_to);
  
  //※numata追記　チェックボックス（配列）の場合は以下の処理で複数の値を取得するように変更した。　HTML側のname属性の値に[と]を追加する。
  $out = '';
  if(is_array($val)){
  foreach($val as $item){ 
  $out .= $item . ','; 
  }
  if(substr($out,strlen($out) - 1,1) == ',') { 
  $out = substr($out, 0 ,strlen($out) - 1); 
  }
 }
    else {
        $out = $val;
}
  //チェックボックス（配列）追記ここまで
  if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
  if($out == "submit") ;
  else $body.="【 ".$key." 】 ".$out."\n";
}
$body.="\n■□■□■□■□■□■□■□■□■□■□■□■□■□\n";
$body.="送信された日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$body.="送信者のIPアドレス：".$_SERVER["REMOTE_ADDR"]."\n";
$body.="送信者のホスト名：".getHostByAddr(getenv('REMOTE_ADDR'))."\n";
//--- 終了 --->


if($remail == 1) {
//--- 差出人への送信確認メールのレイアウト

if(isset($_POST['名前'])){ $rebody = "{$_POST['名前']} 様\n\n";}
$rebody.="お問い合わせありがとうございました。\n";
$rebody.="早急にご返信致しますので今しばらくお待ちください。\n\n";
$rebody.="送信内容は以下になります。\n\n";
$rebody.="■□■□■□■□■□■□■□■□■□■□■□■□■□\n\n";
foreach($_POST as $key=>$val) {
  $key = strtr($key, $string_from, $string_to);
  
  
  //※numata追記　チェックボックス（配列）の場合は以下の処理で複数の値を取得するように変更　HTML側のname属性の値に[と]を追加する。
  $out = '';
  if(is_array($val)){
  foreach($val as $item){ 
  $out .= $item . ','; 
  }
  if(substr($out,strlen($out) - 1,1) == ',') { 
  $out = substr($out, 0 ,strlen($out) - 1); 
  }
 }
    else {
        $out = $val;
}
  //チェックボックス（配列）追記ここまで
  if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
  if($out == "submit") ;
  
  else $rebody.="【 ".$key." 】 ".$out."\n";
}
$rebody.="\n■□■□■□■□■□■□■□■□■□■□■□■□■□\n\n";
$rebody.="送信日時：".date( "Y/m/d (D) H:i:s", time() )."\n";
$reto = $_POST['Email'];
$rebody=mb_convert_encoding($rebody,"JIS","utf-8");
$resbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($resbj,"JIS","utf-8"))."?=";
$reheader="From: $to\nReply-To: ".$to."\nContent-Type: text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();

}

$body=mb_convert_encoding($body,"JIS","utf-8");
$sbj="=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($sbj,"JIS","utf-8"))."?=";
if($from_add == 1) {
  $from = $_POST['Email'];
  $header="From: $from\nReply-To: ".$_POST['Email']."\nContent-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
} else {
  $header="Reply-To: ".$to."\nContent-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/".phpversion();
}
if($chmail == 0 || $sendmail == 1) {
  mail($to,$sbj,$body,$header);
  if($remail == 1) { mail($reto,$resbj,$rebody,$reheader); }

}
else { htmlHeader();
?>

<!-- 送信確認画面のレイアウト　-->
<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>お問合せ</h2>
  
<div class="page_base_in">  
  
  <div class="page_base_box_2">
  <div class="contact_page_base">
    <h3>お問合せ・ご依頼など</h3>
    <div class="todayscast_attention">
    ※店舗ページの更新依頼・ご質問などは以下のフォームからお願いします。<br />
    <br />
    ※確認後、担当部署からご返答させて頂きます。<br />
    休業日・夏季休業・冬季休業の場合は返答までにお時間が掛かりますのでご理解下さい。
    </div>
  </div>
以下の内容で間違いがなければ、「送信する」ボタンを押してください。<br><br>
<form action="<?php echo $file_name; ?>" method="POST">
<?php echo $err_message; ?>
<table>
<?php
foreach($_POST as $key=>$val) {
  $key = strtr($key, $string_from, $string_to);
  
  //※numata追記　チェックボックス（配列）の場合は以下の処理で複数の値を取得するように変更　HTML側のname属性の値にも[と]を追加する。
  $out = '';
  if(is_array($val)){
  foreach($val as $item){ 
  $out .= $item . ','; 
  }
  if(substr($out,strlen($out) - 1,1) == ',') { 
  $out = substr($out, 0 ,strlen($out) - 1); 
  }
 }
    else {
        $out = $val;
}
  //チェックボックス（配列）追記ここまで
  
  if(get_magic_quotes_gpc()) { $out = stripslashes($out); }
  $out = htmlspecialchars($out);
  $key = htmlspecialchars($key);
  print("<tr bgcolor=#ffffff><td class=\"l_Cel\">".$key."</td><td>".$out);
?>
<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $out; ?>">
<?php
  print("</td></tr>\n");
}
?>
</table>
<br>
<input type="hidden" name="mail_set" value="submit">
<input type="submit" value="送信する">
<input type="button" value="前画面に戻る" onClick="history.back()">
</form>
 </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

<?php htmlFooter(); } if(($jpage == 0 && $sendmail == 1) || ($jpage == 0 && ($chmail == 0 && $sendmail == 0))) { htmlHeader(); ?>


<!-- 送信終了画面のレイアウト-->
<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>お問合せ</h2>
  
<div class="page_base_in">  
  
  <div class="page_base_box_2">
  <div class="contact_page_base">
    <h3>お問合せ・ご依頼など</h3>
    <div class="todayscast_attention">
    ※店舗ページの更新依頼・ご質問などは以下のフォームからお願いします。<br />
    <br />
    ※確認後、担当部署からご返答させて頂きます。<br />
    休業日・夏季休業・冬季休業の場合は返答までにお時間が掛かりますのでご理解下さい。
    </div>
  </div>
    <center>
送信ありがとうございました。<br>
送信は正常に完了しました。<br><br>

<a href="<?php echo $site_top ;?>">トップページへ戻る⇒</a>

</center> </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->
<?php htmlFooter(); } else if(($jpage == 1 && $sendmail == 1) || $chmail == 0) { header("Location: ".$next); } function htmlHeader() { ?>
<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>お問合せ｜Admin Tool</title>
<meta name="description" content="管理画面ツール　お問合せ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/iziModal.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
</script>
<!--画像調整-->

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
$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  $('.modal_open').click(function(){
 
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  });
});
</script>
<body>
<div id="wrapper">
<?php } function htmlFooter() { ?>
</div>
</body>
</html>

<?php } ?>