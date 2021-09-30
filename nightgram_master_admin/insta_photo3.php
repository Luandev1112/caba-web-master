<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';



//if($search3!=""){
//	$search3_sql=" AND concat(s_name2) LIKE '%".$search3."%'";
	//$search_sql=" AND concat(shop_name,shop_name2,add,daihyo,shop_tell) LIKE '%".$search."%'";
//}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>トップ｜ナイトグラム マスター管理ツール</title>
<meta name="description" content="ナイトグラム 　マスター管理ツール　インスタ画像">

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
				<h2>インスタ一覧</h2>
				<div class="page_base_in">

					<div class="page_base_box_2">				
						<h3>インスタ一覧</h3>
						<div class="cast_people">現在のインスタ登録数<br />
						「<?php

$result=mysqli_query($sql4, "SELECT * From `rss_information` ORDER by pub");
$cnt=mysqli_num_rows($result);


echo $cnt;

if ($cnt == '0') {
	echo '0';
}
?>」</div>
						<div class="wrapper">
							<?php
	
$result=mysqli_query($sql4, "SELECT * From `rss_information` ORDER by pub DESC");
$cnt=mysqli_num_rows($result);
	  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('parts/rss_info.php');
	

//▽表示内容ここから

echo "<a id=\"".$id."\"></a><div class=\"element_client\">
								<div class=\"top_news_box\">\n";


	//写真を表示
				

	if(strpos($img_url, 'mp4') !== false){
					echo "<div class=\"photo_thumbs\"><video autoplay loop muted src=\"\" data-src=\"".$img_url."\" class=\"lozad\" playsinline ></div><div class=\"fa\"><img src=\"\" data-src=\"../img/play.svg\" class=\"lozad\"></div>";
				}else{
					
					echo "<div class=\"photo_thumbs\"><img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" alt=\"".$area_hyouki." ".$gyoushu_hyouki."「".$s_name."」".$name."の投稿\" ></div>";
				}
	

//写真登録・編集削除画面へ
echo <<<GOLGO
<div class="client_area">$area_hyouki3$area_hyouki4</div>
<div class="client_shop">$s_name</div>
<div class="client_shop_2">$name</div>
<div class="wrapper">
<div class="element_news_a"><a href="$img_url" target="_blank"  class="btn_sub">画像取得</a></div>
										<div class="element_news_b"><a data-target="modal_display_c$id" class="btn_sub modal_open">画像登録</a></div>
										<div class="element_news_b-2"><a data-target="modal_delete_c$id" class="btn_sub modal_open">削除</a></div>	
									</div>
									<div id="modal_display_c$id" class="modal_box">
										<p>
										<div class="modal_box_title"></div>
										<div class="cast_sakujyo"></div>
										<form action="insta_upload3.php" method="post"  enctype="multipart/form-data">
											<input type="hidden" name="id" value="$id" />
<input type="hidden" name="operation" value="edit" />
											<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" name="photo1" />
											</div>
										</label>
											<div class="under_button_area_2">
												<button type="submit" class="formbtn_2">送信</button>
											</div>
										</form>
										</p>
									<p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
								</div>
									<div id="modal_delete_c$id" class="modal_box">
										<p>
										<div class="modal_box_title">$s_nameを削除</div>
										<div class="cast_sakujyo">本当に削除しますか？</div>
										<div class="under_button_area_2"><a href="insta_rewrite3.php?id=$id" class="formbtn_2">削除する</a></div>
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
</html>