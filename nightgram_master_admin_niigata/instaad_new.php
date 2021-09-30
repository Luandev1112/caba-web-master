<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>インスタ用広告登録｜Admin Tool</title>
<meta name="description" content="管理画面ツール　インスタ用広告登録">

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
				<h2>インスタ用広告登録</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="hotnews_check.php" method="post" id="form" enctype="multipart/form-data">
							<div class="hotnews_photo_area">
								<h3>広告画像登録<br /><span style="font-size: 60%; color: #FF0000">※サイズ横600px 縦600px</span></h3>
								<label class="file-btn">
									<div class="file-btn2">アップロード</div>
									<div class="view_box">
										<input type="file" name="photo1" class="file" />
									</div>
								</label>
							</div>							
							<p>
								<label><span>出稿エリアを選択（<font color="#FF0000">必須</font>）</span>
									<select name="都道府県で選択" required>
										<option value="--">--</option>
										<option value="栃木">栃木</option>
										<option value="栃木">栃木</option>
										<option value="埼玉">埼玉</option>
										<option value="長野">長野</option>
									</select>
								</label>
							</p>							
							<p>
								<label>
									<span>店舗・グループ名（<font color="#FF0000">必須</font>）</span>
									<input type="text" name="newstitle" class="txtfiled" placeholder="例）店舗・グループ名" required><br />
								</label>
							</p>
							<p>
								<label>
									<span>リンクURL（<font color="#FF0000">必須</font>）</span>
									<input type="text" name="newstitle" class="txtfiled" placeholder="例）リンクURL" required><br />
								</label>
							</p>							
							<input type="hidden" name="news_id" value="<?php echo strtotime("now"); ?>" />
							<input type="hidden" name="blank" value="<?php echo $shop_id; ?>" />
							<input type="hidden" name="hotnews" value="<?php echo $portal; ?>" />
							<input name="n_area" type="hidden" class="w_per50" value="<?php echo $area; ?>" />
							<input name="n_area2" type="hidden" class="w_per50" value="<?php echo $area2; ?>" />
							<input name="n_gyoushu" type="hidden" class="w_per50" value="<?php echo $gyoushu; ?>" />
							<input name="end" type="hidden" class="w_per50" value="<?php echo $hyouji; ?>" />
							<input type="hidden" name="shop_id" value="<?php echo $shop_id; ?>" />
							<div class="under_button_area_2">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			<?php include ('php/footer.php'); ?>
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
<script>	
function () {
    var today = new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0"+(today.getMonth()+1)).slice(-2);
    var dd = ("0"+today.getDate()).slice(-2);
    document.getElementById("today").value=yyyy+'-'+mm+'-'+dd;
}
</script>
<script type="text/javascript">
$(document).ready(function(){
 
    // プルダウンのoption内容をコピー
    var pd2 = $("#lv2Pulldown option").clone();
    var pd3 = $("#lv3Pulldown option").clone();
 
    // 1→2連動
    $("#lv1Pulldown").change(function () {
        // lv1のvalue取得
        var lv1Val = $("#lv1Pulldown").val();
 
        // lv2Pulldownのdisabled解除
        $("#lv2Pulldown").removeAttr("disabled");
 
        // 一旦、lv2Pulldownのoptionを削除
        $("#lv2Pulldown option").remove();
 
        // (コピーしていた)元のlv2Pulldownを表示
        $(pd2).appendTo("#lv2Pulldown");
 
        // 選択値以外のクラスのoptionを削除
        $("#lv2Pulldown option[class != p"+lv1Val+"]").remove();
 
        // 「▼選択」optionを先頭に表示
        $("#lv2Pulldown").prepend('<option value="0" selected="selected">▼選択</option>');
 
        // lv3Pulldown disabled処理
        $("#lv3Pulldown").attr("disabled", "disabled");
        $("#lv3Pulldown option").remove();
        $("#lv3Pulldown").prepend('<option value="0" selected="selected">▼選択</option>');
    });
 
    // 2→3連動
    $("#lv2Pulldown").change(function () {
        // lv2のvalue取得
        var lv2Val = $("#lv2Pulldown").val();
 
        // lv3Pulldownのdisabled解除
        $("#lv3Pulldown").removeAttr("disabled");
 
        // 一旦、lv3Pulldownのoptionを削除
        $("#lv3Pulldown option").remove();
 
        // (コピーしていた)元のlv3Pulldownを表示
        $(pd3).appendTo("#lv3Pulldown");
 
        // 選択値以外のクラスのoptionを削除
        $("#lv3Pulldown option[class != p"+lv2Val+"]").remove();
 
        // 「▼選択」optionを先頭に表示
        $("#lv3Pulldown").prepend('<option value="0" selected="selected">▼選択</option>');
    });
});
</script>	
<script>
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>	
</body>

</html>