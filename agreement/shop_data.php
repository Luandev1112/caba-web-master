<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>お店情報入力｜格安ホームページ作成の「きゃばウェブ」</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ作成・制作「きゃばウェブ」のお店情報入力ページです。きゃばウェブはキャバクラ・ガールズバー・スナック・ラウンジなどナイトビジネスに対応したホームページを格安で作成します。">
<meta name="keywords" content="ホームページ,作成,制作,格安,キャバクラ,ガールズバー,お店情報入力">

<link rel="shortcut icon" href="../img/favicon.ico">
<link rel="apple-touch-icon" href="../img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="../css/reset.css">
<link rel="stylesheet" href="../css/base.css">
<link rel="stylesheet" href="../css/jquery.bxslider.css" />
<link rel="stylesheet" href="../css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

<link rel="canonical" href="https://www.caba-web.com/contact.php">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!-- parallax scroll本体 -->
<script src="../js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>

<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
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

<!--アニメーション　プラグイン-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 50){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
<!--アニメーション　プラグイン-->

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

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127337530-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127337530-1');
</script>

</head>

<body>

  <div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>店舗情報入力</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">
    <!--h3>LINEからお問合せ</h3>
    <!--div class="service_in">    
    <div class="sign_button"><a href="" class="btn_line">LINEでお問合せ</a></div> 
    </div-->

    <h3>基本情報</h3>
    <form action="mail.php" method="post" id="form">
    <p>
    <label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗名" class="txtfiled" placeholder="例）club きゃば" required></label>
    </p>
    <p>
    <label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗住所" style="ime-mode:disabled;" class="txtfiled" placeholder="例）群馬県前橋市天川大島町43　CASAセフィーロ1C" required></label>
    </p>       
    <p>
    <label><span>店舗電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="店舗電話番号" style="ime-mode:disabled;" class="txtfiled" placeholder="例）027-289-5688" required></label>
    </p>
    <p>
    <label><span>営業時間（<font color="#FF0000">必須</font>）</span><input type="text" name="営業時間" style="ime-mode:disabled;" class="txtfiled" placeholder="例）19:00～LAST" required></label>
    </p>
    <p>
    <label><span>定休日（<font color="#FF0000">必須</font>）</span><input type="text" name="定休日" style="ime-mode:disabled;" class="txtfiled" placeholder="例）日曜日" required></label>
    </p>
    <p>
    <label><span>Googleアカウント（<font color="#FF0000">必須</font>）</span>
    <input type="text" name="Googleアカウント" style="ime-mode:disabled;" class="txtfiled" placeholder="例）IDを入力" required>
    <input type="text" name="Googleアカウント" style="ime-mode:disabled;" class="txtfiled" placeholder="例）パスワードを入力" required>
    </label>
    </p> 
    <p>
    <label><span>Instagramアカウント</span>
    <input type="text" name="Instagramアカウント" style="ime-mode:disabled;" class="txtfiled" placeholder="例）IDを入力">
    <input type="text" name="Instagramアカウント" style="ime-mode:disabled;" class="txtfiled" placeholder="例）パスワードを入力">
    </label>
    </p>
    <p>
    <label><span>Twitterアカウント</span>
    <input type="text" name="Twitterアカウント" style="ime-mode:disabled;" class="txtfiled" placeholder="例）IDを入力">
    <input type="text" name="Twitterアカウント" style="ime-mode:disabled;" class="txtfiled" placeholder="例）パスワードを入力">
    </label>
    </p>
    <p>
    <label><span>FacebookページURL</span>
    <input type="text" name="FacebookページURL" style="ime-mode:disabled;" class="txtfiled" placeholder="例）https://www.facebook.com/">
    </label>
    </p>                            
    
  <div class="shop_data_area">
    <h3>料金システム 1</h3>
    <table>
      <tr>
        <td class="t_td_system_1" colspan="2">
          <p>
          <label><input type="text" name="システム1" class="txtfiled" placeholder="例）基本システム　1time 60min"></label>
          </p>
        </td>
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目1" class="txtfiled" placeholder="例）20:00～21:00"></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目2" class="txtfiled" placeholder="例）￥5,000"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目3" class="txtfiled" placeholder="例）21:00～LAST"></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目4" class="txtfiled" placeholder="例）￥6,000"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目5" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目6" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目7" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目8" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目9" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目10" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目11" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目12" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目13" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目14" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目15" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目16" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目17" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目18" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム1項目19" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム1項目20" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>                                                            
    </table>   
  </div><!--castnew_category_area-->
    
  <div class="shop_data_area">
    <h3>料金システム 2</h3>
    <table>
      <tr>
        <td class="t_td_system_1" colspan="2">
          <p>
          <label><input type="text" name="システム2" class="txtfiled" placeholder="例）その他の料金"></label>
          </p>
        </td>
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目1" class="txtfiled" placeholder="例）キャストドリンク"></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目2" class="txtfiled" placeholder="例）￥1,000～"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目3" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目4" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目5" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目6" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目7" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目8" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目9" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目10" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目11" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目12" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目13" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目14" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目15" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目16" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目17" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目18" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム2項目19" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム2項目20" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>                                                            
    </table>   
  </div><!--castnew_category_area-->

  <div class="shop_data_area">
    <h3>料金システム 3</h3>
    <table>
      <tr>
        <td class="t_td_system_1" colspan="2">
          <p>
          <label><input type="text" name="システム3" class="txtfiled" placeholder=""></label>
          </p>
        </td>
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目1" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目2" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目3" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目4" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目5" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目6" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目7" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目8" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目9" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目10" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目11" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目12" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目13" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目14" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目15" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目16" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目17" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目18" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_2">
          <p>
          <label><input type="text" name="システム3項目19" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_3">
          <p>
          <label><input type="text" name="システム3項目20" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>                                                            
    </table>   
  </div><!--castnew_category_area-->    

  <div class="shop_data_area">   
    <h3>料金システム 詳細</h3>   
    <p>
    <label><span>システム詳細情報</span><textarea name="システム詳細情報" class="txtfiled" rows="5" placeholder="例）※消費税は別途掛かります。&#13;&#10;フリードリンク：ビール、焼酎"></textarea></label>
    </p>
    <p>
    <label>
    <span>利用可能なクレジットカード</span>
    <input type="checkbox" name="AMERICAN EXPRESS" placeholder=""><font style="font-size: 80%">AMERICAN EXPRESS</font>
    </label>
    <label><input type="checkbox" name="JCB" placeholder=""><font style="font-size: 80%">JCB</font></label>
    <label><input type="checkbox" name="VISA" placeholder=""><font style="font-size: 80%">VISA</font></label>
    <label><input type="checkbox" name="MASTER CARD" placeholder=""><font style="font-size: 80%">MASTER CARD</font></label>            
    <label><input type="checkbox" name="DC CARD" placeholder=""><font style="font-size: 80%">DC CARD</font></label>
    <label><input type="checkbox" name="NICOS" placeholder=""><font style="font-size: 80%">NICOS</font></label>
    <label><input type="checkbox" name="UC CARD" placeholder=""><font style="font-size: 80%">UC CARD</font></label>
    </p>
  </div><!--castnew_category_area--> 

  <div class="shop_data_area">  
    <h3>キャスト求人情報</h3>    
    <p>
    <label><span>給与</span><input type="text" name="キャスト求人給与" class="txtfiled" placeholder="例）体験時給"></label>
    <label><input type="text" name="キャスト求人給与" class="txtfiled" placeholder="例）3,500円～"></label>
    <label><textarea name="キャスト求人給与" class="txtfiled" rows="5" placeholder="例）入店保証時給 2,000円以上 / ノルマなし・ドリンクバックあり"></textarea></label>
    </p>
    <p>
    <label><span>メッセージ（掲載したい事など）</span><textarea name="キャスト求人メッセージ" class="txtfiled" rows="5" placeholder="例）求人強化中！当店で働いてみよう！"></textarea></label>
    <label><textarea name="キャスト求人メッセージ" class="txtfiled" rows="5" placeholder="例）当店なら未経験大歓迎！お子さまのいるママさんも大歓迎です！"></textarea></label>
    <label><textarea name="キャスト求人メッセージ" class="txtfiled" rows="5" placeholder="例）未経験でも安心！当店独自のサポート体制あり"></textarea></label>
    <label><textarea name="キャスト求人メッセージ" class="txtfiled" rows="5" placeholder="例）経験者の方、特典あり！"></textarea></label>
    </p>
    <p>
    <label><span>待遇</span><textarea name="キャスト求人待遇" class="txtfiled" rows="5" placeholder="例）・ドレス無料レンタル・寮完備・自由出勤・送迎無料"></textarea></label>
    </p>
    <p>
    <span>募集要項</span>
    </p>
    <table>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項1" class="txtfiled" placeholder="勤務地"></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項2" class="txtfiled" placeholder="群馬県前橋市"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項3" class="txtfiled" placeholder="勤務時間"></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項4" class="txtfiled" placeholder="20:00～LAST"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項5" class="txtfiled" placeholder="資格"></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項6" class="txtfiled" placeholder="18歳以上（高校生不可）"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項7" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項8" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項9" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項10" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項11" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項12" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項13" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項14" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項15" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項16" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項17" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項18" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="キャスト求人募集要項19" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="キャスト求人募集要項20" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>                                                            
    </table>       
  </div>  

  <div class="shop_data_area">   
    <h3>スタッフ求人情報</h3>
    <p>
    <label><span>給与</span><input type="text" name="スタッフ求人給与" class="txtfiled" placeholder="例）初任給"></label>
    <label><input type="text" name="スタッフ求人給与" class="txtfiled" placeholder="例）250,000円"></label>
    <label><textarea name="スタッフ求人給与" class="txtfiled" rows="5" placeholder="例）+歩合+各種手当　アルバイトは時給1,000円"></textarea></label>
    </p>
    <p>
    <label><span>メッセージ</span><textarea name="スタッフ求人メッセージ" class="txtfiled" rows="5" placeholder="例）今の給与より稼ぎませんか？"></textarea></label>
    <label><textarea name="スタッフ求人メッセージ" class="txtfiled" rows="5" placeholder="例）夜の業界は凄く稼げるんです！"></textarea></label>
    <label><textarea name="スタッフ求人メッセージ" class="txtfiled" rows="5" placeholder="例）アルバイトでも特典が多数あり！"></textarea></label>
    <label><textarea name="スタッフ求人メッセージ" class="txtfiled" rows="5" placeholder="例）幹部になれば年収1000万も夢じゃない！"></textarea></label>    
    </p>
    <p>
    <label><span>待遇</span><textarea name="スタッフ求人待遇" class="txtfiled" rows="5" placeholder="例）・交通費支給・食事補助あり"></textarea></label>
    </p>
    <p>
    <span>募集要項</span>
    </p>
    <table>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項1" class="txtfiled" placeholder="例）勤務地"></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項2" class="txtfiled" placeholder="例）群馬県前橋市"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項3" class="txtfiled" placeholder="例）勤務時間"></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項4" class="txtfiled" placeholder="例）20:00～LAST"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項5" class="txtfiled" placeholder="例）資格"></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項6" class="txtfiled" placeholder="例）18歳以上（高校生不可）"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項7" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項8" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項9" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項10" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項11" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項12" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項13" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項14" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td height="352" class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項15" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項16" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項17" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項18" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <p>
          <label><input type="text" name="スタッフ求人募集要項19" class="txtfiled" placeholder=""></label>
          </p>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="スタッフ求人募集要項20" class="txtfiled" placeholder=""></label>
          </p>
        </td>        
      </tr>                                                            
    </table> 
      
  </div>  

  <div class="shop_data_area">
    <h3>求人お問合せ先</h3>
    <table>
      <tr>
        <td class="t_td_system_4">
          <div class="castnew_td_txt">求人用 電話番号</div>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="number" name="求人用 電話番号" class="txtfiled" placeholder="例）0120-000-0000"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <div class="castnew_td_txt">求人用 メールアドレス</div>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="email" name="求人用 メールアドレス" class="txtfiled" placeholder="例）info@aaaa.aa"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <div class="castnew_td_txt">求人用 LINE ID</div>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="text" name="求人用 LINE ID" class="txtfiled" placeholder="例）aaaaa"></label>
          </p>
        </td>        
      </tr>
      <tr>
        <td class="t_td_system_4">
          <div class="castnew_td_txt">求人用 LINE URL</div>
        </td>
        <td class="t_td_system_5">
          <p>
          <label><input type="url" name="求人用 LINE URL" class="txtfiled" placeholder="例）http://www.～"></label>
          </p>
        </td>        
      </tr>                                                                       
    </table>   
  </div><!--castnew_category_area-->          
    

    <div class="input_area">
      <p>
      <button type="submit" class="formbtn">送信</button>
      <button type="reset" class="formbtn">リセット</button>
      </p>
    </div>
    </form>    
  
  </div>
</div>

</main>

</body>

</html>