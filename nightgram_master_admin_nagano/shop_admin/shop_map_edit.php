<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗MAP情報｜Admin Tool</title>
<meta name="description" content="管理画面ツール　店舗MAP情報">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
	
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
				<h2>店舗MAP設定</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="shop_map_rewrite.php" method="post" id="form" >
							<p>
								<label><span>Google Map URL（<font color="#FF0000">必須</font>）</span><input type="url" name="map" class="txtfiled" placeholder="例）https:～" value="<?php echo $map; ?>" required></label>
							</p>
							<p>
								<label><span>Google Map 埋め込みHTML（<font color="#FF0000">必須</font>）</span><textarea name="googleurl" class="txtfiled" rows="5" placeholder="" required><?php echo $googleurl; ?></textarea></label>
								<span style="font-size:80%; color:#FF0000;">
									※必ず「width="100%"」に設定する<br />
									<br />
									<span style="font-size:105%; color:#000000;">
										【設定方法】<br />
										①ブラウザでGoogleマップを開きます。<br />
										▼<br />
										②左上の検索窓に「お店の名前」又は「店舗住所」を入力してください。<br />
										<span style="color:#FF0000;">
											※お店の名前の場合はマイビジネスに登録されている店舗のみ反映されます。<br />
											※稀に住所を入力してもマップ上にピンが立たない場合があります。その場合はマップを直接クリックしてピンを立てて下さい。</span><br />
										▼<br />
										③入力するとマップ上に赤いピンが立ちます。<br />
										▼<br />
										④ピンが立つと左側に詳細情報が表示されます。<br />
										▼<br />
										⑤詳細情報内の「共有」ボタンをタップすると共有画面が表示されます。<br />
										▼<br />
										⑥表示された「共有リンク」をコピーしてナイトグラムの【Google Map URL】に貼り付けます。<br />
										次に「地図を埋め込む」を選択しHTMLをコピーしてナイトグラムの【Google Map 埋め込みHTML】に貼り付けます。<br />
										<span style="color:#FF0000;">
											その際にタグ内の「width="650"」を【width="100%"】に設定します。</span><br />
										▼<br />
										⑦【登録】ボタンをタップして完了
									</span>
									
								</span>								
							</p>
							
							<input type="hidden" name="no" value="<?php echo $no; ?>" /><input type="hidden" name="operation" value="edit">
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>		
			<?php include ('php/footer.php'); ?>
		</div>
	</div><!--drawer drawer--left-->

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
<!--選択　プラグイン-->
<script>
$(function() {
  var $children = $('.children');
  var original = $children.html();

  $('.parent').change(function() {
    var val1 = $(this).val();

    $children.html(original).find('option').each(function() {
      var val2 = $(this).data('val');
      if (val1 != val2) {
        $(this).not('optgroup,.msg').remove();
      }
    });

    if ($(this).val() === '') {
      $children.attr('disabled', 'disabled');
    } else {
      $children.removeAttr('disabled');
    }

  });
});
</script>	
</body>

</html>