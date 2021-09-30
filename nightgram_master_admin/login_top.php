<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

$search1=$_GET[search1];
$search2=$_GET[search2];
$search3=$_GET[search3];

if($search1!=""){
	$search1_sql=" AND area = ".$search1."";
}else{
	$search1_sql="";
}
if($search2!=""){
	$search2_sql=" AND area2 = ".$search2."";
}else{
	$search2_sql="";
}

if($search3!=""){
	$search3_sql=" AND concat(s_name2) LIKE '%".$search3."%'";
	//$search_sql=" AND concat(shop_name,shop_name2,add,daihyo,shop_tell) LIKE '%".$search."%'";
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜ナイトグラム マスター管理ツール</title>
<meta name="description" content="ナイトグラム 　マスター管理ツール　トップ">

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
						<li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php" title="店舗一覧">店舗一覧</a></li>
						<li><a class="drawer-brand" href="area.php" title="エリア登録">エリア登録</a></li>
						<li><a class="drawer-brand" href="information.php" title="運営からの更新情報設定">運営からの更新情報設定</a></li>
						<li><a class="drawer-brand" href="information_2.php" title="店舗更新情報設定">店舗更新情報設定</a></li>
						<li><a class="drawer-brand" href="osirase.php" title="クライアント向けお知らせ登録">クライアント向けお知らせ登録</a></li>						
						<li><a class="drawer-brand" href="instaad.php" title="インスタ用広告設定">インスタ用広告設定</a></li>
						<li><a class="drawer-brand" href="youtubead.php" title="You Tube用広告設定">You Tube用広告設定</a></li>						
						<li><a class="drawer-brand" href="portal.php" title="注意事項">ナイトグラム説明書</a></li>						
						<li><a class="drawer-brand" href="https://www.nightgram.com/" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
						<li><a class="drawer-brand" href="insta_photo.php?search1=1" title="インスタ画像登録">インスタ画像登録</a></li>
						<li><a class="drawer-brand" href="insta_photo2.php?search1=1" title="店舗インスタ画像登録">店舗インスタ画像登録</a></li>
						<li><a class="drawer-brand" href="insta_photo3.php" title="インスタ画像登録">デモサイトインスタ画像登録</a></li>
						<li><a class="drawer-brand" href="koshin.php" title="インスタ更新">インスタ更新</a></li>
						<li><a class="drawer-brand" href="cast_buckup.php" title="削除済みキャスト一覧">削除済みキャスト一覧</a></li>
						<li><a class="drawer-brand" href="logout.php" title="ログアウト">ログアウト</a></li>
					</ul>
				</nav>
			</header>
			<div class="header_space_sp"></div>
			
			<div id="page_base">
				<h2>店舗一覧</h2>
				<div class="page_base_in">
					<div class="page_base_box">
						<h3>新規店舗を登録</h3>
						<div class="button_area_2"><a href="shop_new.php" class="btn_main">新規店舗を登録</a></div>
					</div>
					<div class="page_base_box_2">				
						<h3>店舗一覧</h3>
						<div class="cast_people">現在の店舗登録数<br />「<?php

$result=mysqli_query($sql, "SELECT * From `shop_tb` ORDER by s_id");
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
											<label><span>都道府県で選択</span>
												<?php
												if ($search1 == '') {
	$area_check0 = 'selected="selected"';
}
if ($search1 == '1') {
	$area_check1 = 'selected="selected"';
}

if ($search1 == '2') {
	$area_check2 = 'selected="selected"';
}
if ($search1 == '3') {
	$area_check3 = 'selected="selected"';
}
if ($search1 == '4') {
	$area_check4 = 'selected="selected"';
}
if ($search1 == '5') {
	$area_check5 = 'selected="selected"';
}
if ($search1 == '6') {
	$area_check6 = 'selected="selected"';
}
if ($search1 == '7') {
	$area_check7 = 'selected="selected"';
}
if ($search1 == '8') {
	$area_check8 = 'selected="selected"';
}
if ($search1 == '9') {
	$area_check9 = 'selected="selected"';
}
		if ($search1 == '10') {
	$area_check10 = 'selected="selected"';
}
		if ($search1 == '11') {
	$area_check11 = 'selected="selected"';
}
		if ($search1 == '12') {
	$area_check12 = 'selected="selected"';
}
		if ($search1 == '13') {
	$area_check13 = 'selected="selected"';
}
												if ($search1 == '14') {
	$area_check14 = 'selected="selected"';
}
?>
												<select name="search1" id="lv1" class="group1">
													<option value="" <?php echo $area_check0; ?>>--</option>
    <option value="1" <?php echo $area_check1; ?>>群馬エリア</option>
    <option value="2" <?php echo $area_check2; ?>>栃木エリア</option>       
    <option value="3" <?php echo $area_check3; ?>>埼玉エリア</option>
    <option value="4" <?php echo $area_check4; ?>>長野エリア</option>
		<option value="5" <?php echo $area_check5; ?>>富山エリア</option>
		<option value="6" <?php echo $area_check6; ?>>新潟エリア</option>
		<option value="7" <?php echo $area_check7; ?>>石川エリア</option>
		<option value="8" <?php echo $area_check8; ?>>東京エリア</option>
		<option value="9" <?php echo $area_check9; ?>>山梨エリア</option>
		<option value="10" <?php echo $area_check10; ?>>神奈川エリア</option>
		<option value="11" <?php echo $area_check11; ?>>熊本エリア</option>
		<option value="12" <?php echo $area_check12; ?>>千葉エリア</option>
		<option value="13" <?php echo $area_check13; ?>>愛知エリア</option>
		<option value="14" <?php echo $area_check14; ?>>兵庫エリア</option>	
												</select>
											</label>
										</p>
									</div>
									<div class="element_search">
										<p>
											<label><span>街名で選択</span>
												<select name="search2" id="lv2" class="group1" disabled="disabled">
													<option value="">--</option>
													<?php
$result=mysqli_query($sql, "SELECT * From `toshi_tb` ");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから
	if ($search2 == $toshi_id) {
		echo "<option value=\"".$toshi_id."\" class=\"p".$toshi_area."\" selected=\"selected\" />".$toshi_name."</option>\n";
echo "".$toshi_name."　\n";
}else{
//▽表示内容ここから
echo "<option value=\"".$toshi_id."\" class=\"p".$toshi_area."\">".$toshi_name."</option>\n";
}

}
?>
												</select>
											</label>
										</p>
									</div>							
								</div>
								<p>
									<label><span>店舗フリガナで検索</span><input pattern="^[ァ-ン]+$" title="全角カタカナでご入力ください。" type="text" name="search3" class="txtfiled" placeholder="全角カタカナ入力"></label>
								</p>						
								<div class="under_button_area_2">
									<button type="submit" class="formbtn_2">検索する</button>
								</div>
							</form>
						</div>
						<div class="client_search_line"></div>
						<div class="wrapper">
							<?php
	
$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE s_id!='' ".$search1_sql." ".$search2_sql." ".$search3_sql."");
$cnt=mysqli_num_rows($result);
							
$j=1000;
$k=2000;	
	  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/basic_hensu.php');
include('parts/area_link_job.php');
//▽表示内容ここから

echo "<div class=\"element_client\">
								<div class=\"top_news_box\">\n";


	//写真を表示
				
	if($sphoto1 == $empty){
	echo "<div class=\"photo_thumbs\"><img src=\"\" data-src=\"img/nophoto_1.jpg\" class=\"lozad\"></div>\n";
}else{
	echo "<div class=\"photo_thumbs\"><img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$sphoto1.".jpg\" class=\"lozad\"></div>\n";
}

	
if($hyouji=='on'){
	echo '<div class="client_area_hyouji">公開中</div>';
}elseif($hyouji=='off'){
	echo '<div class="client_area_hyouji_no">非公開</div>';
}else{
	echo '<div class="client_area_hyouji">公開中</div>';
}
		
//写真登録・編集削除画面へ
echo <<<GOLGO
<div class="client_area">$area_hyouki3$area_hyouki4</div>
<div class="client_shop">$s_name</div>
<div class="client_shop_2">$s_name2</div>
<div class="wrapper">
<div class="element_news_a"><a href="shop_admin/?no=$no" class="btn_sub">店舗編集</a></div>
										<div class="element_news_b"><a href="https://www.nightgram.com/$blank5/$area_link/$blank3" class="btn_sub" target="_blank">ページ確認</a></div>
										<div class="element_news_a-2"><a data-target="modal_display_$no" class="btn_sub modal_open">公開設定</a></div>
										<div class="element_news_b-2"><a data-target="modal_delete_$no" class="btn_sub modal_open">削除</a></div>																	
									</div>
									<div id="modal_display_$no" class="modal_box">
										<p>
										<div class="modal_box_title">$s_nameの公開設定</div>
										<div class="cast_sakujyo"></div>
										<form action="rewrite.php" method="post">
											<input type="hidden" name="no" value="$no" />
				<input type="hidden" name="data5" value="$data5" />
				<input type="hidden" name="shop" value="$shop" />
<input type="hidden" name="operation" value="edit" />
											<table>
												<tr>
													<td class="t_hyouji-1"><input type="radio" name="hyouji" value="off" class="radio-input" id="radio-$j" checked=""><label for="radio-$j">非公開</label></td>
													<td class="t_hyouji-2"><input type="radio" name="hyouji" value="on" class="radio-input" id="radio-$k" checked="checked"><label for="radio-$k">公開</label></td>
												</tr>
											</table>
											<div class="under_button_area_2">
												<button type="submit" class="formbtn_2">送信</button>
											</div>
										</form>
										</p>
									<p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
								</div>
									<div id="modal_delete_$no" class="modal_box">
										<p>
										<div class="modal_box_title">$s_nameを削除</div>
										<div class="cast_sakujyo">本当に削除しますか？</div>
										<div class="under_button_area_2"><a href="rewrite2.php?no=$no" class="formbtn_2">削除する</a></div>
										</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>										
									</div>
								</div>
							</div>
GOLGO;
//△表示内容ここまで
$j++;
$k++;
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
					<p>© 2020 nightgram.</p>
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
		
		<script type="text/javascript">
 
  $(document).ready(function(){
      $(this).tgHierSelectV2({
          group: 'group1',
          maxLevel: '5',
          defaultSelect: '----- 選択してください -----',
      });
  });
 
  (function($){
    $.fn.tgHierSelectV2 = function(options){
 
        var opts = $.extend({}, $.fn.tgHierSelectV2.defaults, options);
        var cnt;
        var arr = [];
 
        $('html').find('select.'+opts.group).each( function(){
 
            // nameのレベル番号取得
            var lvTxt = parseInt($(this).attr('id').replace(/lv/, ""));
 
            // プルダウンのoption内容をコピー
            arr[lvTxt] = $('#lv'+lvTxt+' option').clone();
 
            // プルダウン選択時処理
            $('#'+this.id).change( function(){
 
                // プルダウン選択値
                var pdVal = $(this).val();
 
                // レベル文字を取得し数値化
                var currentLvNum = parseInt($(this).attr('id').replace(/lv/, ""));
                var nextLevelNum = currentLvNum+1;
 
          // プルダウン操作
          $('#lv'+nextLevelNum).removeAttr("disabled");              // 子プルダウンの"disabled"解除
          $('#lv'+nextLevelNum+" option").remove();                 // 一旦、子プルダウンのoptionを削除
          $(arr[currentLvNum+1]).appendTo('#lv'+nextLevelNum); // (コピーしていた)元の子プルダウンを表示
          $('#lv'+nextLevelNum+" option[class != p"+pdVal+"]").remove();  // 選択値以外のクラスのoptionを削除
 
                // デフォルトのoptionを先頭に表示
                for(cnt=nextLevelNum; cnt<=opts.maxLevel; cnt++){
                 $('#lv'+cnt).prepend('<option value="" selected="selected">'+opts.defaultSelect+'</option>');
                }
                // 変更したプルダウン以下の子プルダウンを全てdisabledに
                if((nextLevelNum+1) <= opts.maxLevel){
                    for(i=nextLevelNum+1; i<=opts.maxLevel; i++){
                        $('#lv'+i).attr("disabled", "disabled");
                    }
                }
            });
        });
    }
})(jQuery);
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