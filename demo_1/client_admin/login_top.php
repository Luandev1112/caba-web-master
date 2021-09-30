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
include('parts/function.php');
?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜きゃばWeb 店舗管理</title>
<meta name="description" content="きゃばWeb 店舗管理トップ">

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

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

  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php?shop_id=<?php echo $shop_id; ?>" title="ホーム">ホーム</a></li>
        <li><a class="drawer-brand" href="hotnews.php?shop_id=<?php echo $shop_id; ?>" title="ホットニュース設定">ホットニュース設定</a></li>
        <li><a class="drawer-brand" href="schedule.php?shop_id=<?php echo $shop_id; ?>" title="当日出勤設定">当日出勤設定</a></li>            <?php 
		  if($data7 != '0'){
			  echo "<li><a class=\"drawer-brand\" href=\"schedule_week.php?shop_id=".$shop_id."\" title=\"1週間出勤設定\">1週間出勤設定</a></li>";
		  }
		  ?>     
        <li><a class="drawer-brand" href="cast.php?shop_id=<?php echo $shop_id; ?>" title="キャスト設定">キャスト設定</a></li>
        <li><a class="drawer-brand" href="cast_sort.php?shop_id=<?php echo $shop_id; ?>" title="キャスト並び替え">キャスト並び替え</a></li>
        <li><a class="drawer-brand" href="event.php?shop_id=<?php echo $shop_id; ?>" title="カレンダー設定">カレンダー設定</a></li>
		   <?php 
		  if($data7 == '3' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"coupon.php?shop_id=".$shop_id."\" title=\"クーポン設定\">クーポン設定</a></li>";
		  }
		  ?>                 
        <li><a class="drawer-brand" href="shopphoto.php?shop_id=<?php echo $shop_id; ?>" title="店内写真設定">店内写真設定</a></li>
		  <?php 
		  if($data7 == '0'){
			  echo "<li><a class=\"drawer-brand\" href=\"topbanner.php?shop_id=".$shop_id."\" title=\"トップバナー設定\">トップバナー設定</a></li>";
		  }
		  ?>
		  <?php 
		  if($data7 == '1' ||$data7 == '2' || $data7 == '3' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider.php?shop_id=".$shop_id."\" title=\"店舗 スライダー設定\">店舗 スライダー設定</a></li>";
		  }
		  ?>  
        <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_group.php?shop_id=".$shop_id."\" title=\"グループ スライダー設定\">グループ スライダー設定</a></li>";
		  }
		  ?>
		  <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_rec.php?shop_id=".$shop_id."\" title=\"求人 スライダー設定\">求人 スライダー</a></li>";
		  }
		  ?>          
		  <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_staff.php?shop_id=".$shop_id."\" title=\"スタッフ求人 スライダー設定\">スタッフ求人 スライダー</a></li>";
		  }
		  ?>  
        <?php 
		  if($data10 != '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"contact.php?shop_id=".$shop_id."\" title=\"お問合せ\">お問合せ</a></li><li><a class=\"drawer-brand\" href=\"mypage.php?shop_id=".$shop_id."\" title=\"マイページ\">マイページ</a></li>";
		  }
		  ?>
        <li><a class="drawer-brand" href="<?php echo $url; ?>" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
		  <li><a class="drawer-brand" href="logout.php" title="ログアウト">ログアウト</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="login_top.php?shop_id=<?php echo $shop_id; ?>" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1>
    <li class="menu__single">
      <a href="hotnews.php?shop_id=<?php echo $shop_id; ?>" title="ホットニュース設定">ホットニュース設定</a>
    </li>     
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャスト出勤設定">キャスト出勤設定</a>
        <ul class="menu__second-level">
            <li><a href="schedule.php?shop_id=<?php echo $shop_id; ?>" title="当日出勤設定">当日出勤設定</a></li>
			<?php 
		  if($data7 != '0'){
			  echo "<li><a href=\"schedule_week.php?shop_id=".$shop_id."\" title=\"1週間出勤設定\">1週間出勤設定</a></li>";
		  }
		  ?>            
        </ul>
    </li>
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャスト設定">キャスト設定</a>
        <ul class="menu__second-level">
            <li><a href="cast.php?shop_id=<?php echo $shop_id; ?>" title="プロフィール設定">プロフィール設定</a></li>
            <li><a href="cast_sort.php?shop_id=<?php echo $shop_id; ?>" title="キャスト並び替え">キャスト並び替え</a></li>
        </ul>
    </li>
    <li class="menu__single">
      <a href="event.php?shop_id=<?php echo $shop_id; ?>" title="カレンダー設定">カレンダー設定</a>
    </li>
	<?php 
		  if($data7 == '3' || $data7 == '4'){
			  echo "<li class=\"menu__single\"><a href=\"coupon.php?shop_id=".$shop_id."\" title=\"クーポン設定\">クーポン設定</a></li>";
		  }
		  ?>  
  
    <li class="menu__single">
      <a href="shopphoto.php?shop_id=<?php echo $shop_id; ?>" title="店内写真設定">店内写真設定</a>
    </li>                 
    <li class="menu__single">
        <a href="#" class="init-bottom" title="各画像設定">各画像設定</a>
        <ul class="menu__second-level">
			<?php 
		  if($data7 == '0'){
			  echo "<li><a href=\"topbanner.php?shop_id=".$shop_id."\" title=\"トップバナー設定\">トップバナー設定</a></li>";
		  }
		  ?>
			<?php 
		  if($data7 == '1' ||$data7 == '2' || $data7 == '3' || $data7 == '4'){
			  echo "<li><a href=\"slider.php?shop_id=".$shop_id."\" title=\"店舗 スライダー設定\">店舗 スライダー設定</a></li>";
		  }
		  ?>
<?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a href=\"slider_group.php?shop_id=".$shop_id."\" title=\"グループ スライダー設定\">グループスライダー</a></li>";
		  }
		  ?> 
		  <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a href=\"slider_rec.php?shop_id=".$shop_id."\" title=\"求人 スライダー設定\">求人スライダー</a></li>";
		  }
		  ?>
			<?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a href=\"slider_staff.php?shop_id=".$shop_id."\" title=\"スタッフ求人 スライダー設定\">スタッフ求人スライダー</a></li>";
		  }
		  ?>                     
        </ul>
    </li>
    <li class="menu__single">
        <a href="#" class="init-bottom" title="お客様情報">設定・確認</a>
        <ul class="menu__second-level">
            <?php 
		  if($data10 != '2'){
			  echo "<li><a href=\"contact.php?shop_id=".$shop_id."\" title=\"お問合せ\">お問合せ</a></li><li><a href=\"mypage.php?shop_id=".$shop_id."\" title=\"マイページ\">マイページ</a></li>";
		  }
		  ?>                        
            <li><a href="<?php echo $url; ?>" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
			<li><a href="logout.php" title="ログアウト">ログアウト</a></li>
        </ul>
    </li>                    
</ul>
</div>

<div class="header_space">
  <div class="wrapper">
    <div class="element_sp_1"></div>
    <div class="element_sp_2 header_space_img"><h1><a href="login_top.php?shop_id=<?php echo $shop_id; ?>" title=""><img src="img/logo.svg" alt=""></a></h1></div>
    <div class="element_sp_3"><div class="header_space_img_2"><a href="<?php echo $url; ?>" target="_blank" title=""><img src="img/homepage.svg"><br />HP確認</a></div></div>
  </div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>

<div id="page_base">
  <h2><?php echo $shop_name; ?><br /><span style="font-size: 80%;">管理トップ</span></h2>
  
<div class="page_base_in">

	
	<?php
	if($portal == '2'){
	echo "<div class=\"top_portal_box\">
    <div class=\"todayscast_button_2\">
      <a href=\"portal.php?shop_id=".$shop_id."\" class=\"btn_portal\">ナイトグラム<br />注意事項</a><br />
      <div class=\"top_portal_box_1\">
      ※必ずお読み下さい。
      </div>
    </div>
  </div>\n";
}else{
		echo "<!--div class=\"top_portal_box\">
    <div class=\"todayscast_button_2\">
      <a href=\"portal.php\" class=\"btn_portal\">ナイトグラム<br />注意事項</a><br />
      <div class=\"top_portal_box_1\">
      ※必ずお読み下さい。
      </div>
    </div>
  </div-->\n";
	}
	?>

  <div class="page_base_box">
  <h3>運営からのお知らせ</h3> 
  <div class="news_base"> 
	  <?php
  $result=mysqli_query($sql, "SELECT * From `master_news` ORDER by id DESC LIMIT 2");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu2.php');

//▽表示内容ここから

echo "<div class=\"news_box\">\n";
	
	
	echo "<div class=\"news_box_ymd_1\">\n";
	echo date("Y年m月d日",strtotime("$time"));
echo "<br /></div>\n";
echo "<a href=\"news_2.php?id=".$id."&shop_id=".$shop_id."\">
    <div class=\"news_box_title\">".$newstitle."</div>
    </a>               
  </div><!--news_box-->";
}	
?>  

  </div><!--news_base-->
  
  </div><!--page_base_box-->

  <div class="page_base_box">
  <h3>トップ表示中ホットニュース</h3>
  
  <div class="castsort_attention">
  ※トップページには最新のホットニュースが2件まで表示されます。<br />
  </div>
  
  <div class="wrapper">
	  <?php
  $result=mysqli_query($sql, "SELECT * From `news` WHERE sort>='$news_today' AND blank='$shop_id' AND link='1' ORDER by time DESC LIMIT 2");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu2.php');

//▽表示内容ここから

echo "<div class=\"element_2\">
        <div class=\"hotnews_page_box_a\">
          <div class=\"hotnews_page_box_b\">
            <div class=\"trimming\">\n";
	
	if($photo1 == $empty){
	echo "<img src=\"img/nophoto_1.jpg\">";
}else{
		if($photo_box == '1'){
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" alt=\"".$name."\" />\n";
}elseif($photo_box == '2'){
	echo "<img src=\"https://www.caba-lab.com/master_admin/".$photo1.".jpg\" alt=\"".$name."\" />\n";
}elseif($photo_box == ''){
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" alt=\"".$name."\" />\n";
}
}
	
	echo "</div>
          </div><!--hotnews_page_box_b-->
          <div class=\"hotnews_page_box_c\">
            <div class=\"top_hotnews_ymd\">".$time."\n";

echo "</div><div class=\"top_hotnews_title\">".$newstitle."</div>
<div class=\"top_cast_box_button_a\">
                <a href=\"hotnews_photo.php?news_id=".$news_id."\" class=\"btn_1\">画像編集</a>
              </div><!--top_cast_box_button_a-->
 <div class=\"top_cast_box_button_a\">
                <a href=\"hotnews_edit.php?news_id=".$news_id."\" class=\"btn_1\">内容編集</a>
              </div><!--top_cast_box_button_a-->
			  <div class=\"clear\"></div>
              <div class=\"top_cast_box_button_c\">
                <a data-target=\"modal_delete_".$news_id."\" class=\"btn_1-2 modal_open\">削除</a>
              </div><!--top_cast_box_button_a-->
              <div class=\"clear\"></div>
              <!-- 削除モーダル1 -->\n";

echo "<div id=\"modal_delete_".$news_id."\" class=\"modal_box\">          
                <p>
                  <div class=\"castschedule_modal_box_title\">ホットニュースを削除</div>
                  <div class=\"cast_sakujyo\">本当に削除しますか？</div>
                  <div class=\"todayscast_button\"><a href=\"hotnews_rewrite2.php?news_id=".$news_id."\" class=\"btn_2\">削除する</a></div>
                </p>
                <p><a class=\"modal_close\"><i class=\"zmdi zmdi-close\">✕<br></i></a></p>
              </div>
              <!--モーダル1--> 

          </div><!--hotnews_page_box_c-->          
          <div class=\"clear\"></div>
        </div><!--hotnews_page_box_a-->
    </div><!--element_2-->\n";

}


?><!--element_2--><!--element_2-->
                                            
  </div><!--wrapper-->

  <div class="todayscast_button_2"><a href="hotnews_new.php?shop_id=<?php echo $shop_id; ?>" class="btn_2">ホットニュースを登録</a></div>
    
  </div><!--page_base_box-->

  <div class="page_base_box_2">
  <h3><?php echo $day1; ?>(<?php echo $week1; ?>) 出勤一覧</h3>
  <div class="wrapper">
	  <?php
	  
$result=mysqli_query($sql, "SELECT * From `data` WHERE `yobi1` = '$shop_id' ORDER by id");
$cnt=mysqli_num_rows($result);


while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu.php');

	//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
	//▽表示内容ここから
	if($getdays<1){
		if($yobi9==$edi){
			
			if ($yotei1 == '3' || $yotei1 == '1') {
			
		echo "<div class=\"element_1\"><div class=\"top_cast_box\"><div class=\"top_cast_box_wrap\">\n";

	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"photo/nophoto_1.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}

	//写真を表示
				
echo "</div><div class=\"top_cast_box_button\"><div class=\"top_cast_box_button_b\">
          <a href=\"cast_edit.php?name2=".$name2."\" class=\"btn_1\">キャスト編集</a>
        </div>
        <div class=\"clear\"></div>
      </div>\n";            
	
	echo "<div class=\"top_cast_box_name\">".$name."</div>
      </div></div>\n";
			}
			}
	}else{
		if ($yotei1 == '3' || $yotei1 == '1') {
			
		echo "<div class=\"element_1\">
      <div class=\"top_cast_box\"><div class=\"top_cast_box_wrap\">\n";

	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"photo/nophoto_1.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"".$photo1.".jpg\" alt=\"".$name."\"/>\n";
}

	//写真を表示
				
echo " </div><div class=\"top_cast_box_button\">
        <div class=\"top_cast_box_button_b\">
          <a href=\"cast_edit.php?name2=".$name2."\" class=\"btn_1\">キャスト編集</a>
        </div>
        <div class=\"clear\"></div>
      </div>\n";            
	
	echo "<div class=\"top_cast_box_name\">".$name."</div>
      </div>
    </div>\n";
		
		}
	}
	//△表示内容ここまで

}
	  
//体験キャストの人数
$result=mysqli_query($sql, "SELECT * From `taiken` WHERE `shop_no` = '$shop_id' AND `taiken_limit` = '$tdy'");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu5.php');
}
		$count = 0;
		$tcol = 1;

while ($count < $taiken_num){
				
	//写真
		echo "<div class=\"element_1\"><div class=\"top_cast_box\"><div class=\"top_cast_box_wrap\"><img src=\"img/nophoto_1.jpg\" alt=\"体験".$tcol."\" /></div><div class=\"top_cast_box_button\">
        <div class=\top_cast_box_button_b\">
          <a href=\"taiken.php?shop_id=".$shop_id."\" class=\"btn_1\">体験設定</a>
        </div>
        <div class=\"clear\"></div>
      </div>      
      <div class=\"top_cast_box_name\">体験入店 ".$tcol."</div>
      </div>
    </div>\n";
			$count++;
  $tcol++;
}
	  
	
	
?>
                          
    
    
  </div><!--wrapper-->
    <div class="todayscast_button_2"><a href="schedule.php?shop_id=<?php echo $shop_id; ?>" class="btn_2">本日の出勤設定</a></div>
  </div>

</div><!--base-->

</div>

<div id="footer">
  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>
  
  <div class="footer_in">
    <p>© 2019 caba web.</p>
  </div> 
</div>


</main>

</div><!--drawer drawer--left-->

</body>

</html>