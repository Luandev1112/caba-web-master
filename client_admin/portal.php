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
<title>ポータルサイト注意事項｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　ポータルサイト注意事項">

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

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>ナイトグラム注意事項</h2>
  
<div class="page_base_in">  
  
  <div class="page_base_box_2">
    <div class="portal_page_base">
    
      <div class="portal_title">1.キャスト写真について</div>
      <div class="portal_box">
        <div class="portal_box_title">■写真の規定</div>
        <div class="portal_box_naiyou">
        ナイトグラムの規約に則り写真アップをお願いします。<br />
        <span style="color: #000; font-size: 110%;">①本人の顔のアップ</span><br />
        <br />
        <span style="color: #000; font-size: 110%;">②本人の横顔のアップ</span><br />
        <br />
        <span style="color: #000; font-size: 110%;">③著作権が許可された写真</span><br />
        キャスト写真は必ず著作権が無いもの、又は著作権者に使用許可が取れたものを使用して下さい。<br />
        例えばきゃばきゃば・ナイツネットなどの他媒体で撮影した写真は担当者に必ず使用許可を取って下さい。<br />
        <img src="img/portal_1.jpg"><br />
        店舗ごとに統一されたアングルやレイアウトで揃えていただくと綺麗になります。<br />
        <br />
        <span style="color:#F33">
        ※ナイトグラムのクオリティを上げるためにご協力をお願いします。<br />
        ※写真のアップは強制ではありませんので、意図にそぐわない写真は即刻削除いたします。</span><br />
        </div>      
      </div>
      
      <div class="portal_box">
        <div class="portal_box_title">■アプリを使って写真撮ろう</div>
        <div class="portal_box_naiyou">
        <span style="color: #000; font-size: 110%;">①例：写真アプリ「SODA」を使った場合</span><br />
        iPhone版「<a href="https://apps.apple.com/jp/app/soda-%E3%82%BD%E3%83%BC%E3%83%80-natural-beauty-camera/id1437880869" style="color:#F36">SODA</a>」<br />
        Android版「<a href="https://play.google.com/store/apps/details?id=com.snowcorp.soda.android&hl=ja" style="color:#F36">SODA</a>」<br />
        <br />
        <span style="color: #000; font-size: 110%;">②1：1に設定して撮影</span><br />
        <img src="img/portal_2.jpg" width="60%"><br />
        <br />
        <span style="color: #000; font-size: 110%;">③その写真をお店の管理画面を持っているスタッフに送信</span><br />
        <br />
        <span style="color: #000; font-size: 110%;">④担当スタッフが写真をアップ</span><br />
        先にキャストの登録をしておくとスムーズにアップできます。<br />
        <br />
        <span style="color:#F33">
        ※写真の推奨掲載方法<br />
        店舗ごとにお気に入りのカメラアプリを使用して統一された背景で顔を中心に撮影して頂き、正方形（1：1）に設定した写真をアップすると凄く綺麗にまとまります。<br />
        </span>
        </div>
      </div>

      <div class="portal_box">
        <div class="portal_box_title">■この管理画面から写真をアップする方法</div>
        <div class="portal_box_naiyou">
        <span style="color: #000; font-size: 110%;">①管理画面の左上のメニューをタップ</span><br />
        <br />
        <span style="color: #000; font-size: 110%;">②キャスト設定をタップ</span><br />
        <img src="img/portal_3.jpg" width="100%"><br />
        <br />
        <span style="color: #000; font-size: 110%;">③キャスト写真設定の「ナイトグラム用サムネイル」項目のアップロードをタップ</span><br />
        <br />
        <span style="color: #000; font-size: 110%;">④アプリで撮影した写真を選択して完了</span><br />
        </div>
      </div>      
      
      <div class="portal_title">2.Instagramについて</div>
      <div class="portal_box">
        <div class="portal_box_title">■連動するにあたり</div>
        <div class="portal_box_naiyou">
        Instagramの登録にはID（ユーザー名）が必要になります。<br />
        個人情報の取り扱いには細心の注意を払いますのでご安心下さい。<br />
        </div>
      </div>

      <div class="portal_box">
        <div class="portal_box_title">■お店のご担当者様へ</div>
        <div class="portal_box_naiyou">    
        Instagramを登録するキャストさんに必ず確認してください。<br />
        <br />
        <span style="color: #000; font-size: 110%;">①ID（ユーザー名）の確認</span><br />
        IDはアプリのプロフィールで確認出来ます。<br />
        <br />
        <span style="color: #000; font-size: 110%;">②非公開設定の解除</span><br />
        必ず非公開設定を解除して下さい。<br />
        Instagramアプリのプライバシー設定から解除できます。<br />
        非公開設定の場合はサイトと連動いたしません。<br />
        <br />
        <span style="color: #000; font-size: 110%;">③投稿の確認</span><br />
        必ず投稿がされていないと連携が出来ません。<br />
        <br />
        以上、3点をクリアしないと連携できません。<br />
        <br />
        <span style="color:#F33">
        ※InstagramアカウントのID（ユーザー名）を変更すると連携が解除される場合がありますので、必ず変更時に新しいID（ユーザー名）を担当者にご連絡下さい。</span><br />
        </div>
      </div>
      
      <div class="portal_box">
        <div class="portal_box_title">■掲載後のアカウント（ID・PASS）・設定の変更に関して</div>
        <div class="portal_box_naiyou">    
        このような場合は速やかに担当までご連絡下さい。<br />
        <br />
        <span style="color: #000; font-size: 110%;">①アカウントを非公開にした場合</span><br />
        Instagramを非公開設定にした場合は投稿が反映されない可能性があります。<br />
        <br />
        <span style="color: #000; font-size: 110%;">②ID（ユーザー名）を変更した場合</span><br />
        ID（ユーザー名）を変更すると投稿が反映されない可能性があります。<br />
        ID（ユーザー名）を変更した場合は必ず担当までご連絡下さい。<br />
        <br />
        <span style="color:#F33">
        ※InstagramアカウントのID（ユーザー名）を変更すると連携が解除される場合がありますので、必ず変更時に新しいID（ユーザー名）を担当者にご連絡下さい。</span><br />
        </div>
      </div>           

      <div class="portal_title">3.キャストのInstagram投稿について</div>
      <div class="portal_box">
        <div class="portal_box_title">■投稿するにあたり</div>
        <div class="portal_box_naiyou">
        ①基本的にはInstagramの規約に沿ってご活用下さい。<br />
        但し同業間やお客様など個人を特定できるような投稿は即時削除する場合がございます。<br />
        <br />
        ②お客様やキャスト間であっても他人が写っている場合は本人に投稿の可否を必ずご確認下さい。<br />
        <br />
        ③投稿でトラブルが生じた場合ナイトグラムでは一切責任を負いかねます。<br />
        <br />
        ④過度なトラブルやユーザーからの見過ごせないクレームを受けた場合は確認なくアカウントを連携解除させていただきます。<br />
        </div>       
      </div>
      <div class="portal_box">
        <div class="portal_box_title">■投稿の時間差について</div>
        <div class="portal_box_naiyou">
        Instagramで投稿した記事はナイトグラムに反映するまで最大30分前後の時間差が生じます。<br />
        </div>       
      </div>      

      <div class="portal_title">4.店舗ページを更新したい場合</div>
      <div class="portal_box">
        <div class="portal_box_title">■内容が変更になったら</div>
        <div class="portal_box_naiyou">
        店舗情報や求人内容、画像を変更したい場合は担当者にご連絡下さい。<br />
        </div>
      </div>

      <div class="portal_title">5.キャストの出勤情報</div>
      <div class="portal_box">
        <div class="portal_box_title">■出勤設定について</div>
        <div class="portal_box_naiyou">
        キャストの出勤情報はナイトグラムのメインコンテンツとなりますので必ず毎日出勤設定をお願いします。<br />
        もし出勤設定をしない場合はユーザーがお休みと勘違いする場合がございますのでご注意下さい。<br />
        出勤情報の差異により仮に損害が生じた場合でも一切責任を負いかねます。<br />
        <br />
        ※出勤時間は5:00にリセットされます。
        </div>
      </div>

      <div class="portal_title">6.ショップニュース</div>
      <div class="portal_box">
        <div class="portal_box_title">■ナイトグラムとの連動</div>
        <div class="portal_box_naiyou">
        ナイトグラムのショップニュースは当ホームページのホットニュースと連動し、イベント情報・求人情報・店休日などをお店がダイレクトにお客様に配信できるコンテンツです。<br />
        ナイトグラム上には更新時にトップページ表示される仕様になっていますので、活用しない手はないです。<br />
        ご注意頂きたいのは連続で投稿した場合、ナイトグラムトップページでは最後に更新した投稿のみ表示される仕組みです。<br />
        店舗ページには全て表示される仕組みとなっています。<br />
        <br />
        ※ショップニュースは掲載終了日の0:00にリセットされます。
        </div>
      </div>

      <div class="portal_title">7.ランキングについて</div>
      <div class="portal_box">
        <div class="portal_box_title">■計測方法について</div>
        <div class="portal_box_naiyou">
        ランキングの計測方法はユーザー数で計測されますので、同じユーザーが同じキャストや店舗にたくさんアクセスしても１しか計測されません。<br />
        ユーザー数のカウントは１日毎に計測されますので翌日に同じキャストや店舗にアクセスした場合はアクセス数は１となります。<br />
        <br />
        週間ランキング：先週の月曜日朝5時～翌月曜日4時59分までの結果が表示されます。<br />
        月間ランキング：先月の結果が表示されます。<br />
        </div>
      </div>            

      <div class="portal_title">8.サイト障害について</div>
      <div class="portal_box">
        <div class="portal_box_title">■各障害について</div>
        <div class="portal_box_naiyou">
        ①サーバ障害やアクセス障害などは起こる可能性がございます。<br />
        <br />
        ②ナイトグラムはInstagramを使用して運営していますのでInstagramに障害が起こった場合はナイトグラムも障害が起こる可能性がございます。<br />
        また、Instagramの仕様が変更になった場合も障害が起こる可能性がございます。<br />
        <br />
        ③障害が2週間以上発生した場合のみ障害発生期間分の掲載期間の延長を致します。<br />
        <br />
        ④サーバー障害・システム障害・アクセス障害・Instagram障害において掲載期間延長以外の責任は一切負いません。
        </div>
      </div>
      
    </div>
  </div><!--page_base_box_2-->
</div><!--page_base_in-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

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
</body>

</html>