<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>Aプランのホームページデモサイト</title>
<meta name="description" content="Aプランのホームページデモサイト">
<meta name="keywords" content="Aプラン">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/insta.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/drawer.min.css">

<link href='instagram-feed_7/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
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

</head>

<body>

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>Instagram</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">
<?php
	$access_token = "2254216378.f0a8f0c.e04dd0312117463f9b4c0a6e0c17eb49";
//	$test = "@";   // 新規リクエストかどうか確認する為
	// キャッシュしておいたファイルが指定時間以内に更新されていたらキャッシュしたファイルのデータを使用する
	// 指定時間以上経過していたら新たに Instagaram API へリクエストする
	$cache_lifetime = 3600;   // キャッシュの最短更新間隔 [sec]
	$cache_lastmodified = @filemtime(dirname(__FILE__)."/cache/instagram_usrinfo.dat");
	// 更新日時の比較
	if(!$cache_lastmodified){
		$usrinfo_json = @file_get_contents("https://api.instagram.com/v1/users/self/?access_token=". $access_token);
		$posts_json   = @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=". $access_token. "&count=9");
		file_put_contents(dirname(__FILE__)."/cache/instagram_usrinfo.dat", $usrinfo_json, LOCK_EX);
		file_put_contents(dirname(__FILE__)."/cache/instagram_posts.dat",   $posts_json,   LOCK_EX);
	} else{
		if(time() - $cache_lastmodified > $cache_lifetime){
			$usrinfo_json = @file_get_contents("https://api.instagram.com/v1/users/self/?access_token=". $access_token);
			$posts_json   = @file_get_contents("https://api.instagram.com/v1/users/self/media/recent/?access_token=". $access_token. "&count=9");
			file_put_contents(dirname(__FILE__)."/cache/instagram_usrinfo.dat", $usrinfo_json, LOCK_EX);
			file_put_contents(dirname(__FILE__)."/cache/instagram_posts.dat",   $posts_json,   LOCK_EX);
		} else{
			$usrinfo_json = @file_get_contents(dirname(__FILE__)."/cache/instagram_usrinfo.dat");
			$posts_json   = @file_get_contents(dirname(__FILE__)."/cache/instagram_posts.dat");
//	$test = "";   // キャッシュから読み込んだら@を表示しない
		}
	}
	// 取得したJSON形式データを配列に展開する
	if($usrinfo_json){
		$usrinfo_data = json_decode($usrinfo_json);
		if($usrinfo_data->meta->code != 200){
			$usrinfo_data = null;
		}
	}
	if(isset($posts_json)){
		$posts_data = json_decode($posts_json);
		if($posts_data->meta->code != 200){
			$posts_data = null;
		}
	}
?>
<!-- <article> -->
          <header>
            <section>
              <h1>
                <a href="https://www.instagram.com/" target="new" rel="noopener">Instagram</a>
              </h1>
              <h2>
                <div>
                  <img src="<?php echo $usrinfo_data->data->profile_picture; ?>" alt="profile_picture">
                </div>
                <div>
                  <a href="https://www.instagram.com/<?php if(isset($usrinfo_data)){ echo $usrinfo_data->data->username; } ?>/" target="new" rel="noopener">
                    <?php if(isset($usrinfo_data)){ echo $usrinfo_data->data->full_name."\n"; } ?>
                    (<?php // echo $test; ?>@<?php if(isset($usrinfo_data)){ echo $usrinfo_data->data->username; } ?>)
                  </a>
                </div>
              </h2>
              <p>
                投稿数：<?php if(isset($usrinfo_data)){ echo $usrinfo_data->data->counts->media."\n"; } ?>
                フォロワ：<?php if(isset($usrinfo_data)){ echo $usrinfo_data->data->counts->followed_by."\n"; } ?>
              </p>
            </section>
            <nav id="instagram_layout_toggle">
              <div id="instagram_layout_list">LIST</div>
              <div id="instagram_layout_grid">GRID</div>
            </nav>
          </header>
          <main id="posts_list">
<?php
if(isset($posts_data)){
	foreach($posts_data->data as $data){
		$caption = $data->caption->text;
		$caption = mb_convert_encoding($caption, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
		$caption = preg_replace("/\n/", "<BR>", $caption);
		$caption = preg_replace("/#(.+?)(\s|\n|#|@)/", "<a href=\"https://www.instagram.com/explore/tags/$1/\" target=\"new\" rel=\"noopener\">#$1</a>$2", $caption);
		$caption = preg_replace("/@(.+?)(\s|\n|#|@)/", "<a href=\"https://www.instagram.com/$1/\" target=\"new\" rel=\"noopener\">@$1</a>$2", $caption);
?>
            <div>
              <a href="<?php echo $data->link; ?>" class="instagram" target="new" rel="noopener" title="likes:<?php echo $data->likes->count; ?>">
                <div style="background-image: url('<?php echo $data->images->standard_resolution->url; ?>');">
                  <img src="<?php echo $data->images->standard_resolution->url; ?>" alt="likes:<?php echo $data->likes->count; ?>">
                </div>
              </a>
              <p>
                <?php echo $caption; ?>
              </p>
            </div>
<?php }} else{ ?>
            <p>
              投稿を読み込めませんでした。再度読み込んで下さい。
            </p>
<?php } ?>
          </main>
<!-- </article> -->

  </div><!--page_base-->  
</div><!--page_base_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

<script>
var instagramLayout = function(){
	var _main = _instagramTimeline.getElementsByTagName("main")[0];
	var _nav  = document.getElementById("instagram_layout_toggle");
	var _list = document.getElementById("instagram_layout_list");
	var _grid = document.getElementById("instagram_layout_grid");
	if(_nav && _list && _grid){
		_list.addEventListener("click", function(){
			_main.id = "posts_list";
		}, false);
		_grid.addEventListener("click", function(){
			_main.id = "posts_grid";
		}, false);
		_nav.style.display = "block";
	}
};
</script>

</body>

</html>