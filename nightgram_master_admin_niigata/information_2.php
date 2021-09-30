<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

$search1=$_GET[search1];
$search2=$_GET[search2];
$search3=$_GET[search3];

if($search1!=""){
	$search1_sql=" AND info_naiyou = ".$search1."";
}else{
	$search1_sql="";
}
if($search2!=""){
	$search2_sql=" AND info_machi = ".$search2."";
}else{
	$search2_sql="";
}

if($search3!=""){
	$search3_sql=" AND concat(info_blank) LIKE '%".$search3."%'";
	//$search_sql=" AND concat(shop_name,shop_name2,add,daihyo,shop_tell) LIKE '%".$search."%'";
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗更新情報設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　店舗更新情報設定">

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
			<?php include ('php/header.php'); ?>
			<div id="page_base">
				<h2>店舗更新情報設定</h2>
				<div class="page_base_in">
					<div class="page_base_box">
						<h3>店舗更新情報を登録</h3>
						<div class="button_area_2"><a href="information_2_new.php" class="btn_main">店舗更新情報を登録</a></div>
					</div>
					<div class="page_base_box_2">				
						<h3>更新情報一覧</h3>
						<div class="client_search">
							<form action="information_2.php" method="get" id="form">
								<div class="wrapper">
									<div class="element_search">
										<p>
											<label><span>都道府県で選択</span>
												<select name="search1">
													<option value="" selected>--</option>
    <option value="6">新潟エリア</option>

												</select>
											</label>
										</p>
									</div>
									<div class="element_search">
										<p>
											<label><span>街名で選択</span>
												<select name="search2">
													<option value="">--</option>
													<?php
$result=mysqli_query($sql, "SELECT * From `toshi_tb` WHERE  toshi_area='6' ");
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
								</div>
								<p>
									<label><span>店舗フリガナで検索</span>
									  <input pattern="^[ァ-ン]+$" title="全角カタカナでご入力ください。" type="text" name="search3" class="txtfiled" placeholder="全角カタカナ入力">
									</label>
								</p>						
								<div class="under_button_area_2">
								  <button type="submit" class="formbtn_2">検索する</button>
								</div>
							</form>
						</div>
						<div class="client_search_line"></div>
						
						<div class="wrapper">
							<?php
$result=mysqli_query($sql, "SELECT * From `information` WHERE info_select!='1' AND info_naiyou='6' ".$search2_sql." ".$search3_sql." ORDER by info_id DESC");
$cnt=mysqli_num_rows($result);
	  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/basic_hensu12.php');
	
	$result2=mysqli_query($sql, "SELECT * From `shop_tb` WHERE no='$info_shop' ORDER by s_id");	  
while($row=mysqli_fetch_assoc($result2)){
include('parts/basic_hensu.php');
include('parts/area_link_job.php');

//▽表示内容ここから

echo "<div class=\"element_news\">
        <div class=\"top_news_box\">
            <div class=\"photo_thumbs\">\n";
	

	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$sphoto1.".jpg\" class=\"lozad\" alt=\"\">\n";
	
	echo "</div>\n";
	
	if ($info_select == '2') {
	echo "<div class=\"information_shinki\">新規掲載店</div>\n";
}elseif ($info_select == '3') {
	echo "<div class=\"information_photo\">写真追加</div>\n";
}elseif ($info_select == '4') {
	echo "<div class=\"information_instagram\">インスタ追加</div>\n";
}elseif ($info_select == '5') {
	echo "<div class=\"information_youtube\">You Tube追加</div>\n";
}
	
	$info_timedata = substr($info_time,0,10);

echo "<div class=\"top_news_box_time\">登録日：".$info_timedata."</div><div class=\"information_area\">".$area_hyouki." / ".$gyoushu_hyouki."</div>";
	
//写真登録・編集削除画面へ
echo <<<GOLGO
<div class="wrapper">
                <div class="element_news_a"><a href="information_2_edit.php?info_id=$info_id" class="btn_sub">内容編集</a>
              </div>
              <div class="element_news_b">
                <a data-target="modal_delete_$info_id" class="btn_sub modal_open">削除</a>
              </div>
			  
              <!-- 削除モーダル1 -->
              <div id="modal_delete_$info_id" class="modal_box">          
                <p>
                  <div class="modal_box_title">運営からのお知らせを削除</div>
										<div class="cast_sakujyo">本当に削除しますか？</div>
                  <div class="under_button_area_2"><a href="information_rewrite4.php?info_id=$info_id" class="formbtn_2">削除する</a></div>
                </p>
                <p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
              </div>
              <!--モーダル1-->
          </div>    
        </div>
      </div>
GOLGO;
//△表示内容ここまで
	}
}
?>
						</div>
					</div>
				</div>
				<?php include ('php/footer.php'); ?>
			</div>
		</div>
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