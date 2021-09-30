<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
//設定ファイル読み込み
require_once "conf.php";

$ken = $_GET['ken'];

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>エリア一覧｜Admin Tool</title>
<meta name="description" content="管理画面ツール　エリア一覧">

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
				<h2>エリア一覧</h2>
				<div class="page_base_in">
					<div class="page_base_box">
						<h3>新規エリアを登録</h3>
						<div class="button_area_2"><a href="area_new.php" class="btn_main">新規エリアを登録</a></div>
					</div>
					<div class="page_base_box_2">				
						<h3>エリア一覧</h3>
						<div class="client_search">
							<form action="" method="post" id="form">
								<div class="wrapper_2">
									<div class="element_search">
										<p>
											<label><span style="text-align: center;">県で選択</span>
												<select onChange="location.href=value;">
													<option value="--">--</option>
													<option value="area.php?ken=1">北海道</option>
										<option value="area.php?ken=2">青森県</option>
										<option value="area.php?ken=3">岩手県</option>
										<option value="area.php?ken=4">宮城県</option>
										<option value="area.php?ken=5">秋田県</option>
										<option value="area.php?ken=6">山形県</option>
										<option value="area.php?ken=7">福島県</option>
										<option value="area.php?ken=8">茨城県</option>
										<option value="area.php?ken=9">栃木県</option>
										<option value="area.php?ken=10">群馬県</option>
										<option value="area.php?ken=11">埼玉県</option>
										<option value="area.php?ken=12">千葉県</option>
										<option value="area.php?ken=13">東京都</option>
										<option value="area.php?ken=14">神奈川県</option>
										<option value="area.php?ken=15">新潟県</option>
										<option value="area.php?ken=16">富山県</option>
										<option value="area.php?ken=17">石川県</option>
										<option value="area.php?ken=18">福井県</option>
										<option value="area.php?ken=19">山梨県</option>
										<option value="area.php?ken=20">長野県</option>
										<option value="area.php?ken=21">岐阜県</option>
										<option value="area.php?ken=22">静岡県</option>
										<option value="area.php?ken=23">愛知県</option>
										<option value="area.php?ken=24">三重県</option>
										<option value="area.php?ken=25">滋賀県</option>
										<option value="area.php?ken=26">京都府</option>
										<option value="area.php?ken=27">大阪府</option>
										<option value="area.php?ken=28">兵庫県</option>
										<option value="area.php?ken=29">奈良県</option>
										<option value="area.php?ken=30">和歌山県</option>
										<option value="area.php?ken=31">鳥取県</option>
										<option value="area.php?ken=32">島根県</option>
										<option value="area.php?ken=33">岡山県</option>
										<option value="area.php?ken=34">広島県</option>
										<option value="area.php?ken=35">山口県</option>
										<option value="area.php?ken=36">徳島県</option>
										<option value="area.php?ken=37">香川県</option>
										<option value="area.php?ken=38">愛媛県</option>
										<option value="area.php?ken=39">高知県</option>
										<option value="area.php?ken=40">福岡県</option>
										<option value="area.php?ken=41">佐賀県</option>
										<option value="area.php?ken=42">長崎県</option>
										<option value="area.php?ken=43">熊本県</option>
										<option value="area.php?ken=44">大分県</option>
										<option value="area.php?ken=45">宮崎県</option>
										<option value="area.php?ken=46">鹿児島県</option>
										<option value="area.php?ken=47">沖縄県</option>
												</select>
											</label>
										</p>
									</div>								
								</div>						
								<div class="under_button_area_2">
									<button type="submit" class="formbtn_2">検索する</button>
								</div>
							</form>
						</div>
						<div class="client_search_line"></div>
						
						<div class="wrapper">
							<?php
							if ($ken == '') {
$result=mysqli_query($sql, "SELECT * From `off_toshi_tb` ORDER by off_toshi_id");
							}else{
								$result=mysqli_query($sql, "SELECT * From `off_toshi_tb` WHERE off_toshi_area='$ken' ORDER by off_toshi_id");
							}
$cnt=mysqli_num_rows($result);							
while($row=mysqli_fetch_assoc($result)){
include('parts/basic_hensu4.php');

//▽表示内容ここから

echo "<div class=\"element_arealist\">
      <div class=\"top_news_box\"><div class=\"client_area\">\n";
if ($off_toshi_area == '1') {
	$kenhyouki = '北海道';
}elseif ($off_toshi_area == '2') {
	$kenhyouki = '青森';
}elseif ($off_toshi_area == '3') {
	$kenhyouki = '岩手';
}elseif ($off_toshi_area == '4') {
	$kenhyouki = '宮城県';
}elseif ($off_toshi_area == '5') {
	$kenhyouki = '秋田県';
}elseif ($off_toshi_area == '6') {
	$kenhyouki = '山形県';
}elseif ($off_toshi_area == '7') {
	$kenhyouki = '福島県';
}elseif ($off_toshi_area == '8') {
	$kenhyouki = '茨城県';
}elseif ($off_toshi_area == '9') {
	$kenhyouki = '栃木県';
}elseif ($off_toshi_area == '10') {
	$kenhyouki = '群馬県';
}elseif ($off_toshi_area == '11') {
	$kenhyouki = '埼玉県';
}elseif ($off_toshi_area == '12') {
	$kenhyouki = '千葉県';
}elseif ($off_toshi_area == '13') {
	$kenhyouki = '東京都';
}elseif ($off_toshi_area == '14') {
	$kenhyouki = '神奈川県';
}elseif ($off_toshi_area == '15') {
	$kenhyouki = '新潟県';
}elseif ($off_toshi_area == '16') {
	$kenhyouki = '富山県';
}elseif ($off_toshi_area == '17') {
	$kenhyouki = '石川県';
}elseif ($off_toshi_area == '18') {
	$kenhyouki = '福井県';
}elseif ($off_toshi_area == '19') {
	$kenhyouki = '山梨県';
}elseif ($off_toshi_area == '20') {
	$kenhyouki = '長野県';
}elseif ($off_toshi_area == '21') {
	$kenhyouki = '岐阜県';
}elseif ($off_toshi_area == '22') {
	$kenhyouki = '静岡県';
}elseif ($off_toshi_area == '23') {
	$kenhyouki = '愛知県';
}elseif ($off_toshi_area == '24') {
	$kenhyouki = '三重県';
}elseif ($off_toshi_area == '25') {
	$kenhyouki = '滋賀県';
}elseif ($off_toshi_area == '26') {
	$kenhyouki = '京都府';
}elseif ($off_toshi_area == '27') {
	$kenhyouki = '大阪府';
}elseif ($off_toshi_area == '28') {
	$kenhyouki = '兵庫県';
}elseif ($off_toshi_area == '29') {
	$kenhyouki = '奈良県';
}elseif ($off_toshi_area == '30') {
	$kenhyouki = '和歌山県';
}elseif ($off_toshi_area == '31') {
	$kenhyouki = '鳥取県';
}elseif ($off_toshi_area == '32') {
	$kenhyouki = '島根県';
}elseif ($off_toshi_area == '33') {
	$kenhyouki = '岡山県';
}elseif ($off_toshi_area == '34') {
	$kenhyouki = '広島県';
}elseif ($off_toshi_area == '35') {
	$kenhyouki = '山口県';
}elseif ($off_toshi_area == '36') {
	$kenhyouki = '徳島県';
}elseif ($off_toshi_area == '37') {
	$kenhyouki = '香川県';
}elseif ($off_toshi_area == '38') {
	$kenhyouki = '愛媛県';
}elseif ($off_toshi_area == '39') {
	$kenhyouki = '高知県';
}elseif ($off_toshi_area == '40') {
	$kenhyouki = '福岡県';
}elseif ($off_toshi_area == '41') {
	$kenhyouki = '佐賀県';
}elseif ($off_toshi_area == '42') {
	$kenhyouki = '長崎県';
}elseif ($off_toshi_area == '43') {
	$kenhyouki = '熊本県';
}elseif ($off_toshi_area == '44') {
	$kenhyouki = '大分県';
}elseif ($off_toshi_area == '45') {
	$kenhyouki = '宮崎県';
}elseif ($off_toshi_area == '46') {
	$kenhyouki = '鹿児島県';
}elseif ($off_toshi_area == '47') {
	$kenhyouki = '沖縄県';
}
echo "".$kenhyouki."</div><div class=\"client_shop\">".$off_toshi_name."</div>\n";

//写真登録・編集削除画面へ
echo <<<GOLGO
									<div class="wrapper">
										<div class="element_news_a"><a href="area_edit.php?off_toshi_id=$off_toshi_id" class="btn_sub">編集</a></div>
										<div class="element_news_b"><a data-target="modal_delete_$off_toshi_id" class="btn_sub modal_open">削除</a></div>																	
									</div>
									<div id="modal_delete_$off_toshi_id" class="modal_box">
										<p>
										<div class="modal_box_title">$off_toshi_name を削除</div>
										<div class="cast_sakujyo">本当に削除しますか？</div>
										<div class="under_button_area_2"><a href="area_rewrite.php?off_toshi_id=$off_toshi_id" class="formbtn_2">削除する</a></div>
										</p><p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>										
									</div>
								</div>
							</div>
							
GOLGO;
//△表示内容ここまで


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