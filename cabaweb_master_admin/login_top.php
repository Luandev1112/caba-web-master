<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

$search=$_GET[search];
$search1=$_GET[search1];
$search2=$_GET[search2];
$search3=$_GET[search3];

if($search1!=""){
	$search1_sql=" AND s_area = ".$search1."";
}else{
	$search1_sql="";
}
if($search2!=""){
	$search2_sql=" AND group_id = ".$search2."";
}else{
	$search2_sql="";
}
if($search3="1"){
	$search3_sql=" ORDER by time1 ASC";
}else{
	$search3_sql=" ORDER by master_id";
}


if($search!=""){
	$search_sql=" AND concat(shop_name2) LIKE '%".$search."%'";
	//$search_sql=" AND concat(shop_name,shop_name2,add,daihyo,shop_tell) LIKE '%".$search."%'";
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜マスター管理ツール</title>
<meta name="description" content="マスター管理ツール　トップ">

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
						<h1><a href="login_top.php" title=""><img src="img/logo.svg" alt=""></a></h1>
					</div>
					<div class="element_sp_3">
						<div class="header_space_img_2">
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
						<li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php" title="顧客一覧">顧客一覧</a></li>
						<li><a class="drawer-brand" href="group.php" title="グループ登録">グループ登録</a></li>
						<li><a class="drawer-brand" href="area.php" title="エリア登録">エリア登録</a></li>
						<li><a class="drawer-brand" href="osirase.php" title="お知らせ登録">お知らせ登録</a></li>
						<li><a class="drawer-brand" href="portal_nightgram.php" title="きゃばWEB説明書">きゃばWEB説明書</a></li>
						<li><a class="drawer-brand" href="logout.php" title="ログアウト">ログアウト</a></li>
					</ul>
				</nav>
			</header>
			<div class="header_space_sp"></div>
			
			<div id="page_base">
				<h2>顧客一覧</h2>
				<div class="page_base_in">
					<div class="page_base_box">
						<h3>新規顧客を登録</h3>
						<div class="button_area_2"><a href="client_new.php" class="btn_main">新規顧客を登録</a></div>
					</div>
					<div class="page_base_box_2">				
						<h3>顧客一覧</h3>
						<div class="cast_people">現在の顧客登録数<br />
							「<?php
							$result=mysqli_query($sql, "SELECT * From `shop` WHERE master_id!='' ".$search1_sql." ".$search2_sql." ".$search_sql." ".$search3_sql."");
$cnt=mysqli_num_rows($result);
							
							echo $cnt;

if ($cnt == '0') {
	echo '0';
}
							?>店舗」</div>
						<div class="client_search">
							<form action="login_top.php" method="get" id="form">
								<div class="wrapper">
									<div class="element_search">
										<p>
											<label><span>エリアで選択</span>
												<select name="search1">
													<option value="">--</option>
													<?php
$result=mysqli_query($sql2, "SELECT * From `toshi_tb` ");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから
	
	echo "<option value=\"".$toshi_id."\">".$toshi_name."</option>\n";

}
?>
												</select>
											</label>
										</p>
									</div>
									<div class="element_search">
										<p>
											<label><span>グループで選択</span>
												<select name="search2">
													<option value="">--</option>
													<?php
$result=mysqli_query($sql, "SELECT * From `data5` ");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu5.php');

//▽表示内容ここから
	
	echo "<option value=\"".$name2."\">".$name."</option>\n";

}
?>

												</select>
											</label>
										</p>
									</div>
									<div class="element_search">
										<p>
											<label><span>次回契約日で選択</span>
												<select name="search3">
													<option value="">--</option>
													<option value="1">契約日が近い</option>
												</select>
											</label>
										</p>
									</div>								
								</div>
								<p>
									<label><span>店舗フリガナで検索</span><input pattern="^[ァ-ン]+$" title="全角カタカナでご入力ください。" type="text" name="search" class="txtfiled" placeholder="全角カタカナ入力"></label>
								</p>						
								<div class="under_button_area_2">
									<button type="submit" class="formbtn_2">検索する</button>
								</div>
							</form>
						</div>
						<div class="client_search_line"></div>
						<div class="wrapper">
							<?php
							$result=mysqli_query($sql, "SELECT * From `shop` WHERE master_id!='' ".$search1_sql." ".$search2_sql." ".$search_sql." ".$search3_sql."");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/basic_hensu.php');

//▽表示内容ここから

echo "<div class=\"element_client\">
      <div class=\"top_news_box\">
      <div class=\"client_area\">";
	$result2=mysqli_query($sql, "SELECT * From `off_toshi_tb` WHERE off_toshi_id='$s_area'");
while($row=mysqli_fetch_assoc($result2)){
include('parts/basic_hensu4.php');

//▽表示内容ここから
	
	echo $off_toshi_name;

}
	echo "</div><div class=\"client_shop\">".$shop_name."</div>
		<div class=\"client_shop_2\">".$shop_name2."</div><div class=\"client_shop_3\">次回契約日：".$time1."</div><div class=\"client_shop_3\">契約形態：";
	
	if($sdata1=='1'){
	echo '初回 1年契約';
}elseif($sdata1=='2'){
	echo '2年目以降 1年契約';
}elseif($sdata1=='3'){
	echo '2年目以降 1ヶ月契約';
}else{
	echo '--';
}
	
echo "</div><div class=\"client_shop_3\">ナイトグラム連携：";
	
	if($portal=='1'){
	echo 'あり';
}elseif($portal=='2'){
	echo 'なし';
}else{
	echo '--';
}
	echo "</div>";
	
	
//写真登録・編集削除画面へ
echo <<<GOLGO
<div class="wrapper">
										<div class="element_news_a"><a href="client_info.php?master_id=$master_id" class="btn_sub">店舗情報</a></div>
										<div class="element_news_b"><a href="shop_admin/?master_id=$master_id" class="btn_sub">ページ編集</a></div>
										<div class="element_news_a-2"><a href="$s_url" class="btn_sub" target="_blank">ページ確認</a></div>
										<div class="element_news_b-2"><a href="client_rss.php?master_id=$master_id" class="btn_sub">店舗RSS設定</a></div>
										<div class="element_news_b-2"><a data-target="modal_delete_$master_id" class="btn_sub modal_open">削除</a></div>																	
									</div>
									<div id="modal_delete_$master_id" class="modal_box">
										<p>
										<div class="modal_box_title">店舗を削除</div>
										<div class="cast_sakujyo">本当に削除しますか？</div>
										<div class="under_button_area_2"><a href="client_rewrite2.php?master_id=$master_id" class="formbtn_2">削除する</a></div>
										</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>										
									</div>
								</div>
							</div>
GOLGO;

}
?>
						</div>
					</div>
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