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

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>マイページ｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　マイページ">

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

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>マイページ</h2>
  
<div class="page_base_in">  
  
  <div class="page_base_box_2">
  <div class="mypage_page_base">
    <h3>注意事項</h3>
    <div class="todayscast_attention">
    ※登録情報に変更があった場合は速やかにお問合せ下さい。<br />
    </div>
    
    <div class="mypage_attention">
		<?php 
		  if($data2 == '1'){
			  echo "";
		  }elseif($data2 == '2'){
			  echo "入金確認が取れていません。<br />
    お支払いの確認が出来ない場合はホームページが閲覧出来なくなります。<br />";
		  }
		  ?>
    </div>
    
  </div>
  <div class="mypage_page_base_2">
    <h3>登録情報</h3>
    
    <div class="mypage_box_title">店舗情報</div>
    <div class="mypage_box">
    <div class="mypage_title">■ 店舗 ID</div>
    <div class="mypage_naiyou">
    <?php echo $shop_id; ?><br />
    <span style="font-size: 80%; color: #F00; line-height:1.5em;">
    ※パスワードがセキュリティの関係で表示しておりません。<br />
    ※パスワードを忘れた場合はお問合せフォームにてご連絡下さい。<br />
    </span>
    </div>

    <div class="mypage_title">■ 店舗名</div>
    <div class="mypage_naiyou">
    <?php echo $shop_name; ?><br />
    </div>    

    <div class="mypage_title">■ 代表者名</div>
    <div class="mypage_naiyou">
    <?php echo $daihyo; ?><br />
    </div>
    
    <div class="mypage_title">■ 店舗住所</div>
    <div class="mypage_naiyou">
   <?php echo $add; ?><br />
    </div>

    <div class="mypage_title">■ 電話番号</div>
    <div class="mypage_naiyou">
    <?php echo $tell; ?><br />
    </div>

    <div class="mypage_title">■ メールアドレス</div>
    <div class="mypage_naiyou">
    <?php echo $mail; ?><br />
    </div>
    
    </div>


    <div class="mypage_box_title">契約情報</div>
    <div class="mypage_box">
    <div class="mypage_title">■ 次回契約日</div>
    <div class="mypage_naiyou">
    <?php echo $time1; ?><br />
    </div>

    <div class="mypage_title">■ 入金確認</div>
    <div class="mypage_naiyou">
		<?php 
		if($data1 == '1'){
	echo "<span style=\"color: #00F\">入金済</span><br />";
	}elseif($data1 == '2'){
	echo "<span style=\"color: #F00\">未入金</span><br />";
	}elseif($data1 == '3'){
	echo "<span style=\"color: #C60\">請求済み</span><br />";
	}
		?>
    </div>                    

    <div class="mypage_title">■ 契約プラン</div>
    <div class="mypage_naiyou">
		<?php 
		if($data7 == '0'){
	echo "お手軽プラン<br />";
	}elseif($data7 == '1'){
	echo "機能充実プラン<br />";
	}elseif($data7 == '2'){
	echo "機能充実プラン Group<br />";
	}elseif($data7 == '3'){
	echo "機能充実プラン プラス<br />";
	}elseif($data7 == '4'){
	echo "機能充実プラン プラス Group<br /> ";
	}
		?>  
    </div>

    <div class="mypage_title">■ お支払いプラン</div>
    <div class="mypage_naiyou">
		<?php 
		if($data3 == '1'){
	echo "初回 1年契約<br />";
	}elseif($data3 == '2'){
	echo "1ヶ月契約<br />";
	}elseif($data3 == '3'){
	echo "1年契約<br />";
	}
		?>  
    </div>

    <div class="mypage_title">■ お支払い方法</div>
    <div class="mypage_naiyou">
		<?php 
		if($data4 == '1'){
	echo "銀行振込<br />";
	}elseif($data4 == '2'){
	echo "クレジット決済<br />";
	}
		?>
    </div>

    <div class="mypage_title">■ Web最終更新日</div>
    <div class="mypage_naiyou">
    <?php echo $time2; ?><br />
    </div>

    <div class="mypage_title">■ 今月のトップ画像更新</div>
    <div class="mypage_naiyou">
		<?php 
		if($data5 == '1'){
	echo "<span style=\"color: #F93\">更新 残りあと1枚</span><br />";
	}elseif($data5 == '2'){
	echo "<span style=\"color: #F93\">更新 残りあと2枚</span><br />";
	}elseif($data5 == '3'){
	echo "<span style=\"color: #F00\">更新済</span><br />";
	}elseif($data5 == '4'){
	echo "<span style=\"color: #00F\">未更新</span><br />";
	}
		?>  
    </div>

    <div class="mypage_title">■ 今月の求人画像更新</div>
    <div class="mypage_naiyou">
		<?php 
		if($data6 == '1'){
	echo "<span style=\"color: #F93\">更新 残りあと1枚</span><br />";
	}elseif($data6 == '2'){
	echo "<span style=\"color: #F00\">更新済</span><br />";
	}elseif($data6 == '3'){
	echo "<span style=\"color: #00F\">未更新</span><br />";
	}
		?>   
    </div>            

    <div class="mypage_title">■ Google広告の契約</div>
    <div class="mypage_naiyou">
		<?php 
		if($data8 == '1'){
	echo "<span style=\"color: #00F\">未契約</span><br />";
	}elseif($data8 == '2'){
	echo "<span style=\"color: #F00\">契約中</span><br />";
	}
		?>   
    </div>
    
    </div>
        

    <div class="todayscast_button"><a href="agreement.php" class="btn_2">契約内容</a></div> 

  </div>
 
  </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>