<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
//ファンクションファイル読み込み
require_once '../parts/function.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜サイト管理ツール</title>
<meta name="description" content="サイト管理ツール　トップ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--left">
			
			<div class="header_space">
				<div class="wrapper">
					<div class="element_sp_1"></div>
					<div class="element_sp_2 header_space_img">
						<h1><a href="index.php?master_id=<?php echo $master_id; ?>" title=""><img src="img/logo.svg" alt=""></a></h1>
					</div>
					<div class="element_sp_3">
						<div class="header_space_img_2">
							<a href="<?php echo $s_url; ?>" target="_blank" title=""><img src="img/homepage.svg"><br />HP確認</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<header role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only"></span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">
					<ul class="drawer-menu">
						<li class="drawer-brand_first"><a class="drawer-brand" href="../login_top.php" title="顧客一覧に戻る">顧客一覧に戻る</a></li>						
						<li><a class="drawer-brand" href="index.php?master_id=<?php echo $master_id; ?>" title="ショップトップ">ショップトップ</a></li>
						<li><a class="drawer-brand" href="hotnews.php?master_id=<?php echo $master_id; ?>" title="ニュース設定">ニュース設定</a></li>
						<li><a class="drawer-brand" href="hotnews_sort.php?master_id=<?php echo $master_id; ?>" title="ニュース並び替え">ニュース並び替え</a></li>
						<?php 
		  if($sdata7 == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"schedule_time.php?master_id=".$master_id."\" title=\"当日出勤設定\">当日出勤設定</a></li><li><a class=\"drawer-brand\" href=\"schedule_week2.php?master_id=".$master_id."\" title=\"１週間出勤設定\">１週間出勤設定</a></li>";
		  }elseif($sdata7 == '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"schedule.php?master_id=".$master_id."\" title=\"当日出勤設定\">当日出勤設定</a></li><li><a class=\"drawer-brand\" href=\"schedule_week.php?master_id=".$master_id."\" title=\"１週間出勤設定\">１週間出勤設定</a></li>";
		  }
		  ?>
						

						<li><a class="drawer-brand" href="cast.php?master_id=<?php echo $master_id; ?>" title="キャスト設定">キャスト設定</a></li>
						<li><a class="drawer-brand" href="cast_sort.php?master_id=<?php echo $master_id; ?>" title="キャスト並び替え">キャスト並び替え</a></li>
						<li><a class="drawer-brand" href="event.php?master_id=<?php echo $master_id; ?>" title="カレンダー設定">カレンダー設定</a></li>
						<li><a class="drawer-brand" href="shopphoto_top.php?master_id=<?php echo $master_id; ?>" title="HPトップ店内写真設定">HPトップ店内写真設定</a></li>
						<li><a class="drawer-brand" href="shopphoto.php?master_id=<?php echo $master_id; ?>" title="店内写真設定">店内写真設定</a></li>
						<?php 
		  if($sdata3 == '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"coupon.php?master_id=".$master_id."\" title=\"クーポン設定\">クーポン設定</a></li>";
		  }
		  ?>	
						<?php 
		  if($sdata4 == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider.php?master_id=".$master_id."\" title=\"店舗スライダー設定\">店舗トップ スライダー設定</a></li>";
		  }elseif($sdata4 == '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"back_bg.php?master_id=".$master_id."\" title=\"店舗トップ モーション画像設定\">店舗トップ モーション画像設定</a></li>";
		  }elseif($sdata4 == '3'){
			  echo "<li><a class=\"drawer-brand\" href=\"back_photo.php?master_id=".$master_id."\" title=\"店舗トップ 静止画像設定\">店舗トップ 静止画像設定</a></li>";
		  }
		  ?>	
			<?php 
		  if($sdata6 == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_group.php?master_id=".$master_id."\" title=\"グループトップ スライダー設定\">グループトップ スライダー設定</a></li>
			  <li><a class=\"drawer-brand\" href=\"slider_rec.php.php?master_id=".$master_id."\" title=\"キャスト求人スライダー設定\">キャスト求人スライダー設定</a></li>
			  <li><a class=\"drawer-brand\" href=\"slider_staff.php?master_id=".$master_id."\" title=\"スタッフ求人 スライダー設定\">スタッフ求人 スライダー設定</a></li>";
		  }
		  ?>
	<?php 
		  if($portal == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"nightgram_rec.php?master_id=".$master_id."\" title=\"ナイトグラム求人画像設定\">ナイトグラム求人画像設定</a></li>";
		  }
		  ?>	
						<li><a class="drawer-brand" href="<?php echo $s_url; ?>" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
					</ul>
				</nav>
			</header>
			<div class="header_space_sp"></div>
			
			<div id="page_base">
				<h2><?php echo $shop_name; ?><br /><span style="font-size: 70%;">管理トップ</span></h2>
				
				<div class="page_base_in">			
					
					<div class="page_base_box">
						<h3>運営からのお知らせ</h3>
						<div class="osirase_base">
							<?php
  $result=mysqli_query($sql, "SELECT * From `master_news` ORDER by time DESC");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu9.php');

//▽表示内容ここから

echo "<div class=\"osirase_box\">\n";
	
	echo "<div class=\"osirase_box_ymd_1\">\n";
	
	echo date( "Y年m月d日" , $time ) ;

echo "<br /></div><a href=\"news_2.php?id=".$id."&master_id=".$master_id."\"><div class=\"osirase_box_title\">".$newstitle."</div></a>\n";

echo "</div>\n";

}

	
?>

						</div>
					</div>
					
					<div class="page_base_box">
						<div class="button_area_2"><a href="hotnews_new.php?master_id=<?php echo $master_id; ?>" class="btn_main">新規ニュースを登録</a></div>						
						<h3>トップ表示中ニュース</h3>
						<div class="attention_1">※トップページには最新のニュースが4件まで表示<br /></div>		
						<div class="wrapper">
						  <?php
							 $result=mysqli_query($sql3, "SELECT * From `news` WHERE (sort>='$news_today' or sort='') AND blank='$login_id' AND link='1' ORDER by sort_order LIMIT 4");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('../parts/basic_hensu2.php');


//▽表示内容ここから

echo "<div class=\"element_news\"><div class=\"top_news_box\"><div class=\"photo_thumbs\">\n";


	//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"../photo/nophoto_1.jpg\" class=\"lozad\" alt=\"\">\n";
}else{
	if($photo_box == '1'){
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}elseif($photo_box == '3'){
	echo "<img src=\"\" data-src=\"https://www.nightgram.com/master_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}elseif($photo_box == ''){
echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1."".$jpeg."\" class=\"lozad\" alt=\"\">\n";
}
}
echo "</div><div class=\"top_news_box_time\">登録日：";
	
	echo date("Y.m.d",$news_id);

	echo "</div><div class=\"top_news_box_time_2\">掲載終了日：";
	
	if($start == ''){
	echo "なし\n";
}else{
		echo $start;
	}
	
	echo "</div>";
	echo "<div class=\"top_news_box_title\">".$newstitle."</div>";

//写真登録・編集削除画面へ
echo <<<GOLGO

<div class="wrapper">
									<div class="element_news_a"><a href="hotnews_photo.php?news_id=$news_id" class="btn_sub">画像設定</a></div>
									<div class="element_news_b"><a href="hotnews_edit.php?news_id=$news_id" class="btn_sub">内容編集</a></div>
									<div class="element_news_c"><a data-target="modal_delete_$news_id" class="btn_sub modal_open">削除</a></div>
								</div>
								<div id="modal_delete_$news_id" class="modal_box">
									<p>
									<div class="modal_box_title">ニュースを削除</div>
									<div class="cast_sakujyo">本当に削除しますか？</div>
									<div class="under_button_area_2"><a href="hotnews_rewrite2.php?news_id=$news_id" class="formbtn_2">削除する</a></div>
									</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
							</div>
						</div>
					</div>

GOLGO;
	
	
	
//△表示内容ここまで

}
?>
		</div><!--wrapper-->
	</div><!--page_base_box-->
	
	<div class="page_base_box_2">
      <div class="button_area_2">
		  <?php 
		  if($sdata7 == '1'){
			  echo "<a href=\"schedule_time.php?master_id=".$master_id."\" class=\"btn_main\" title=\"当日出勤設定\">当日出勤設定</a>";
		  }elseif($sdata7 == '2'){
			  echo "<a href=\"schedule.php?master_id=".$master_id."\" class=\"btn_main\" title=\"当日出勤設定\">当日出勤設定</a>";
		  }
		  ?>
		</div>		
      <h3><?php echo $day1; ?>(<?php echo $week1; ?>) 出勤一覧</h3>
      <div class="attention_1">
      ※出勤は朝5:00にリセットされます。<br />
      </div>		
		<div class="wrapper">
			<?php
	  
$result=mysqli_query($sql3, "SELECT * From `data` WHERE `yobi1` = '$login_id' ORDER by id");
$cnt=mysqli_num_rows($result);


while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu3.php');

	//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);
	//▽表示内容ここから
	if($getdays<1){
		if($yobi9==$edi){
			
			if ($yotei1 == '3' || $yotei1 == '1') {
			
		//▽表示内容ここから

echo "<div class=\"element_cast\"><div class=\"top_cast_box\"><div class=\"top_cast_box_in\"><div class=\"photo_thumbs\">\n";

	

	//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"../photo/nophoto_1.jpg\" class=\"lozad\" alt=\"".$name."\">\n";
}else{
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1."".$option13."\" alt=\"".$name."\"/>\n";
}
echo "</div>";
	
	if($option2==''){
	echo '';
}else{
	echo '<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>';
}
	if($option4==''){
	echo '';
}else{
	echo '<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>';
}
	
  echo '<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>';
	
echo "<p>".$name."</p></div><div class=\"top_cast_box_button\">";
		
if($option1=='1'){
	echo '<div class="top_cast_hyouji">公開中</div>';
}elseif($option1=='2'){
	echo '<div class="top_cast_hyouji_no">非公開</div>';
}else{
	echo '<div class="top_cast_hyouji">公開中</div>';
}
	

//写真登録・編集削除画面へ
echo <<<GOLGO
									<div class="top_cast_box_button_b"><a href="$s_url/prof.php?name2=$name2" class="btn_sub" target="_blank">プロフィール確認</a></div>
									<div class="top_cast_box_button_a"><a href="cast_edit.php?name2=$name2" class="btn_sub">編集</a></div>
									<div class="top_cast_box_button_a"><a href="cast_photo.php?name2=$name2" class="btn_sub">写真設定</a></div>

									<div class="clear"></div>									
						</div>
					</div>
				</div>


GOLGO;
		
		}
	}
	//△表示内容ここまで

}else{
		if ($yotei1 == '3' || $yotei1 == '1') {
			
		//▽表示内容ここから

echo "<div class=\"element_cast\"><div class=\"top_cast_box\"><div class=\"top_cast_box_in\"><div class=\"photo_thumbs\">\n";

	

	//写真を表示
				
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"../photo/nophoto_1.jpg\" class=\"lozad\" alt=\"".$name."\">\n";
}else{
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1."".$option13."\" alt=\"".$name."\"/>\n";
}
echo "</div>";
	
	if($option2==''){
	echo '';
}else{
	echo '<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>';
}
	if($option4==''){
	echo '';
}else{
	echo '<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>';
}
	
  echo '<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>';
	
echo "<p>".$name."</p></div><div class=\"top_cast_box_button\">";
		
if($option1=='1'){
	echo '<div class="top_cast_hyouji">公開中</div>';
}elseif($option1=='2'){
	echo '<div class="top_cast_hyouji_no">非公開</div>';
}else{
	echo '<div class="top_cast_hyouji">公開中</div>';
}
	

//写真登録・編集削除画面へ
echo <<<GOLGO
									<div class="top_cast_box_button_b"><a href="$s_url/prof.php?name2=$name2" class="btn_sub" target="_blank">プロフィール確認</a></div>
									<div class="top_cast_box_button_a"><a href="cast_edit.php?name2=$name2" class="btn_sub">編集</a></div>
									<div class="top_cast_box_button_a"><a href="cast_photo.php?name2=$name2" class="btn_sub">写真設定</a></div>

									<div class="clear"></div>									
						</div>
					</div>
				</div>


GOLGO;
		
		}
	}
}
		//体験キャストの人数
$result=mysqli_query($sql, "SELECT * From `taiken` WHERE `shop_no` = '$login_id' AND `taiken_limit` = '$tdy'");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu7.php');
}
		$count = 0;
		$tcol = 1;

while ($count < $taiken_num){
				
	//写真
		echo "<div class=\"element_cast\"><div class=\"top_cast_box\"><div class=\"top_cast_box_in\"><div class=\"photo_thumbs\"><img src=\"img/nophoto_1.jpg\" alt=\"体験".$tcol."\" /></div>
		<div class=\"fa_schedule\"><img src=\"\" data-src=\"img/cast_schedule.svg\" class=\"lozad\"></div><p>体験入店 ".$tcol."</p></div>
		<div class=\"top_cast_box_button\">
        <div class=\top_cast_box_button_b\">
          <a href=\"taiken.php?master_id=".$master_id."\" class=\"btn_sub\">体験設定</a>
        </div>
        <div class=\"clear\"></div>
      </div>      
      
      </div>
    </div>\n";
			$count++;
  $tcol++;
}
?><!--element_1 end-->			
		</div>		
	</div>
	
</div><!--base-->
	</div>
<div id="footer">
  <div class="page-side">
    <p id="page-top"><a href="#top"><span class="arrow"></span></a></p>
  </div>
  
  <div class="footer_in">
    <p>© 2020 cabaweb.</p>
  </div> 
</div>

</div><!--drawer drawer--left-->
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
</script>
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
<!--モーダル　プラグイン-->
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
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>