<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ご契約｜格安ホームページ作成の「きゃばウェブ」｜初期費用0円。月額10,000円～</title>
<meta name="description" content="キャバクラ・ガールズバーのホームページ作成・制作「きゃばウェブ」のご契約ページです。きゃばウェブはキャバクラ・ガールズバー・スナック・ラウンジなどナイトビジネスに対応したホームページを格安で作成します。">
<meta name="keywords" content="ホームページ,作成,制作,格安,キャバクラ,ガールズバー,ご契約">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

<meta name="robots" content="noindex,nofollow">

<script type="text/javascript" src="_shared/js/smoothScroll.js"></script>

<script src="https://maps.google.com/maps/api/js?sensor=true"></script>

<!--ヘッダー-->
<link rel="stylesheet" href="css/drawer.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdn.rawgit.com/ungki/bootstrap.dropdown/3.3.5/dropdown.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!--ヘッダー-->

<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
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

<div class="drawer drawer--right">

    <?php include ('php/header.php'); ?>

  <div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>ご契約</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">
    <h3><span class="top_base_underline">契約について</span></h3>
    <div class="service_in">
    <div class="contact_page_top">
    ご依頼は下記の同意をしたとみなします。<br />
    必ず各同意をご覧の上ご依頼をお願いします。<br />
    </div>
    <div class="service_button">
      <a href="agreement.php" class="btn_sign">契約事項</a>
    </div>    
    
    </div>

    <h3><span class="top_base_underline">店舗情報入力</span></h3>
    
    <div class="contact_page_area_t1">店舗情報を入力して下さい。</div>
    <div class="contact_page_area_t2">
    店舗情報はなるべく細かく詳細情報の入力をお願いします。<br />
    書き方や入力する内容などはデモサイトを参照して頂ければと思います。
    </div>
    <div class="contact_page_area_t3">【<a href="">デモサイトはこちら</a>】</div>
    
    <form action="mail2.php" method="post" id="form">
    <p>
    <label><span>店舗名（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗名" class="txtfiled" placeholder="例）club MONO" required></label>
    </p>
    <p>
    <label><span>店舗住所（<font color="#FF0000">必須</font>）</span><input type="text" name="店舗住所" class="txtfiled" placeholder="例）店舗住所入力" required></label>
    </p>   
    <p>
    <label><span>店舗電話番号（<font color="#FF0000">必須</font>）</span><input type="tel" name="店舗電話番号" style="ime-mode:disabled;" class="txtfiled" placeholder="例）店舗電話番号入力" required></label>
    </p>
    <p>
    <label><span>営業時間（<font color="#FF0000">必須</font>）</span><input type="text" name="営業時間" class="txtfiled" placeholder="例）19:00～Last" required></label>
    </p> 
    <p>
    <label><span>定休日（<font color="#FF0000">必須</font>）</span><input type="text" name="定休日" class="txtfiled" placeholder="例）日・月" required></label>
    </p>
    <p>
    <label><span>Googleアカウント ID・PASS（<font color="#FF0000">必須</font>）</span><input type="text" name="Googleアカウント ID" class="txtfiled" placeholder="ID入力" required><input type="text" name="Googleアカウント PASS" class="txtfiled" placeholder="パスワード入力" required></label>
    </p>
    <p>
    <label><span>ホームページURL</span><input type="text" name="ホームページURL" class="txtfiled" placeholder="例）http://www."></label>
    </p>
    <p>
    <label><span>FacebookページURL</span><input type="text" name="FacebookページURL" class="txtfiled" placeholder="例）http://www."></label>
    </p>
    <p>
    <label><span>Instagram ID・PASS</span><input type="text" name="Instagram ID" class="txtfiled" placeholder="ID入力"><input type="text" name="Instagram PASS" class="txtfiled" placeholder="パスワード入力"></label>
    </p>
    <p>
    <label><span>Twitter ID・PASS</span><input type="text" name="Twitter ID" class="txtfiled" placeholder="ID入力"><input type="text" name="Twitter PASS" class="txtfiled" placeholder="パスワード入力"></label>
    </p>
    
    <div class="contact_page_area_title">店舗情報</div>
    <p>
    <label><span>トップ画像に掲載したい内容（<font color="#FF6666">必須</font>）</span><textarea name="トップ画像に掲載したい内容" class="txtfiled" rows="5" placeholder="例）求人強化キャンペーン中!! 体験時給4,000円　全額日払い+各種バック" required></textarea></label>
    </p>
    <p>
    <label><span>料金システム（<font color="#FF6666">必須</font>）</span><textarea name="料金システム" class="txtfiled" rows="5" placeholder="例）1time 50min、20:00～21:00　4000円、21:00～LAST 5000円、指名料1000円、場内指名1000円、VIP+1000円" required></textarea></label>
    </p>
    <p>
    <label><span>システム詳細（<font color="#FF6666">必須</font>）</span><textarea name="システム詳細" class="txtfiled" rows="5" placeholder="例）クレジットカードご利用可、フリードリンク（ビール・焼酎・ウィスキー）、消費税は別途、" required></textarea></label>
    </p>    

    <div class="contact_page_area_title">求人情報</div>
    <p>
    <label><span>給与（<font color="#FF6666">必須</font>）</span><textarea name="給与" class="txtfiled" rows="5" placeholder="例）体験時給 4000円、完全日払い、各種バックあり" required></textarea></label>
    </p>
    <p>
    <label><span>メッセージ（<font color="#FF6666">必須</font>）</span><textarea name="メッセージ" class="txtfiled" rows="5" placeholder="例）未経験者・経験者大募集只今、求人強化キャンペーン実施中!!　未経験の方は当店で働いてみませんか？" required></textarea></label>
    </p>
    <p>
    <label><span>待遇（<font color="#FF6666">必須</font>）</span><textarea name="待遇" class="txtfiled" rows="5" placeholder="例）送迎無料・寮完備・衣装レンタルあり・ヘアメイクあり・託児所完備" required></textarea></label>
    </p>    

    <p>
    <label><span>職種（<font color="#FF0000">必須</font>）</span><input type="text" name="職種" class="txtfiled" placeholder="例）キャバクラ、ガールズバー" required></label>
    </p>
    <p>
    <label><span>資格（<font color="#FF0000">必須</font>）</span><input type="text" name="資格" class="txtfiled" placeholder="例）18歳以上（高校生不可）" required></label>
    </p>
    <p>
    <label><span>勤務時間（<font color="#FF0000">必須</font>）</span><input type="text" name="勤務時間" class="txtfiled" placeholder="例）19:00～LAST" required></label>
    </p> 
    <p>
    <label><span>定休日（<font color="#FF0000">必須</font>）</span><input type="text" name="定休日" class="txtfiled" placeholder="例）日曜日" required></label>
    </p>            
    
    <div class="contact_page_area_title">求人情報お問合せ</div>
    <p>
    <label><span>求人用 電話番号（<font color="#FF6666">必須</font>）</span><input type="tel" name="求人用電話番号" class="txtfiled" placeholder="010-456-789-123" required></label>
    </p>
    <p>
    <label><span>求人用 メールアドレス</span><input type="txtfiled" name="求人用メールアドレス" class="txtfiled" placeholder="m"></label>
    </p>
    <p>
    <label><span>求人用 LINE ID</span><input type="txtfiled" name="求人用 LINE ID" class="txtfiled" placeholder="aabbccdd123"></label>
    </p>
    <p>
    <label><span>求人用 LINE URL</span><input type="txtfiled" name="求人用 LINE URL" class="txtfiled" placeholder="line url"></label>
    </p>
   
    <div class="input_area">
      <p>
      <button type="submit" class="formbtn">送信</button>
      <button type="reset" class="formbtn">リセット</button>
      </p>
    </div>
    </form>    
  
  </div>
</div>

<div id="footer">
  <div class="page-side">  
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>

  <div class="footer_in">
    <div class="footer_company">
    <a href="privacy.php" title="キャバクラ ホームページ作成・制作「きゃばウェブ」プライバシーポリシー">プライバシーポリシー</a> ｜ <a href="company.php" title="キャバクラ ホームページ作成・制作「きゃばウェブ」会社概要">会社概要</a><br />
    </div>
    <p>© 2018 caba web.</p>       
  </div>  
</div><!--footer-->

</main>

</div><!--drawer drawer--right-->

</body>

</html>