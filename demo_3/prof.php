<?php
//設定ファイル読み込み
require_once 'php/conf.php';
//ファンクションファイル読み込み
require_once 'php/parts/function.php';

$name2 = $_GET['name2'];

$result=mysqli_query($sql, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>名前｜キャバクラ「きゃばWEB」</title>
<meta name="description" content="キャバクラ「きゃばWEB」の公式ホームページです。">
<meta name="keywords" content="キャバクラ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">	
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@700&display=swap" rel="stylesheet">

<link rel="canonical" href="hotnews.php">

<meta name="format-detection" content="telephone=no">

</head>

<body>
	<div id="page_fade">
		<div class="drawer drawer--top">
			<?php include ('php/header.php'); ?>
			<div id="page_top_bg">
				<div class="page_title_area">
					<h2>PROFILE<br /><span class="h_sub">プロフィール</span></h2>
				</div>
			</div>
			
			<div class="page_base_area">
				<div class="top_contents_in">
					<div class="wrapper_prof_top">
						<div class="element_prof">
							<div class="photo_thumbs"><?php
//プロフィールメイン写真
//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"\">\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"\">\n";
}

?></div>
<?php
//プロフィールメイン写真
//写真を表示
	if($photo2 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo2.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\" class=\"btn_prof_photo\" >他 8枚の写真を見る</a>\n";
}
	if($photo3 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo3.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}							
	if($photo4 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo4.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}
	if($photo5 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo5.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}
	if($photo6 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo6.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}
	if($photo7 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo7.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}
	if($photo8 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo8.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}
	if($photo9 == $empty){
	echo "";
}else{
	echo "<a href=\"https://www.caba-web.com/demo_1/client_admin/".$photo9.".jpg\" data-fancybox=\"profgroup\" data-caption=\"\"></a>\n";
}							
?>

						</div>
						<div class="element_prof">
							<div class="wrapper_prof">
								<div class="element_prof_name_1">
									<div class="prof_page_name"><?php echo $name; ?></div>
								</div>
								<div class="element_prof_name_2">
									<div class="wrapper">
										<div class="element_prof_sns"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="" data-src="img/instagram_2.svg" class="lozad" alt="Instagram" /></a></div>
										<div class="element_prof_sns"><a href="https://www.youtube.com/" target="_blank" title="You Tube"><img src="img/youtube_2.svg" alt="You Tube" /></a></div>
										<div class="element_prof_sns"><a href="https://twitter.com/" target="_blank" title="Twitter"><img src="img/twitter_2.svg" alt="Twitter" /></a></div>
										<div class="element_prof_sns"><a href="" target="_blank" title="Tik Tok"><img src="img/tiktok_2.svg" alt="Tik Tok" /></a></div>
									</div>
								</div>
							</div>
							<div class="wrapper_prof">
								<div class="element_prof_ymd_1">
									<div class="prof_page_type">年齢：<?php echo $age; ?>歳</div>
									<div class="prof_page_type">血液型：<?php echo $profinfo2; ?></div>
								</div>
								<div class="element_prof_ymd_2">
									<div class="prof_page_type">誕生日：<?php echo $profinfo1; ?></div>
									<div class="prof_page_type">出身地：<?php echo $profinfo3; ?></div>
								</div>								
							</div>
							<div class="qanda">
								<dl>
									<dt>趣味・特技は？</dt>
									<dd><?php echo $profinfo4; ?></dd>
									<dt>好みのタイプは？</dt>
									<dd><?php echo $profinfo5; ?></dd>
									<dt>好きな食べ物は？</dt>
									<dd><?php echo $profinfo6; ?></dd>
									<dt>好きなブランドは？</dt>
									<dd><?php echo $profinfo7; ?></dd>
									<dt>チャームポイントは？</dt>
									<dd><?php echo $profinfo8; ?></dd>									
								</dl>
							</div>	
						</div>						
					</div>
					<div class="prof_instagram_base">
						<h2>INSTAGRAM<br /><span style="font-size: 50%;">インスタグラム</span></h2>
						<div id="list">
							<?php

$result=mysqli_query($sql, "SELECT * From `rss_information` WHERE name2='".$name2."' ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
	  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('php/parts/rss_info.php');

//▽表示内容ここから

echo "<div class=\"li\" style=\"margin-bottom: 0; vertical-align: bottom;\">
						<a href=\"javascript:void(0);\" onclick=\"modalopen(this)\" id=\"".$id."\"   title=\"".$area_hyouki." ".$gyoushu_hyouki."「".$s_name."」".$name."\">
							<div class=\"top_instagram_list_box\">
								<div class=\"top_instagram_list_box_in\">";

					echo "<div class=\"photo_thumbs\">";  
				
	
	if(strpos($img_url, 'mp4') !== false){
					echo "<video autoplay loop muted src=\"".$img_url."\" playsinline ></div><div class=\"fa\"><img src=\"\" data-src=\"img/play.svg\" class=\"lozad\" ></div>";
				}else{
					
					echo "<img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" ></div>";
				}
	
	echo	"</div></div>
						</a>
					</div>";
	
	
}
				
?>

						</div>
						<div class="top_instagram_powered"><a href="https://www.nightgram.com/gunma/maebashi/" target="_blank" title="前橋 キャバクラ情報サイト「ナイトグラム」">powered by NIGHTGRAM</a></div>
					</div>
					
					<div class="prof_youtube_base">
						<h2>You Tube<br /><span style="font-size: 50%;">ユーチューブ</span></h2>
						<div id="list_2">
							<?php

$result=mysqli_query($sql, "SELECT * From `rss_information2` WHERE name2='".$name2."' ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
		  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('php/parts/rss_info_yt.php');
	
//▽表示内容ここから

echo "<div class=\"li\" style=\"margin-bottom: 0; vertical-align: bottom;\">
						<a href=\"javascript:void(0);\" onclick=\"modalopenyoutube(this)\" id=\"y".$id."\"   title=\"".$area_hyouki." ".$gyoushu_hyouki."「".$s_name."」".$name."\">
							<div class=\"top_youtube_list_box\">
								<div class=\"top_youtube_list_box_in\">";

					echo "<div class=\"youtube_thumbs\"><img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" alt=\"".$name."のYou Tube\"  ></div>";  
				
					echo "<div class=\"fa_2\"><img src=\"\" data-src=\"img/play_2.svg\" class=\"lozad\"></div>";
				
	
	echo	"</div></div>
						</a>
					</div>";

	
}
				
?>
						</div>
						<div class="top_instagram_powered"><a href="https://www.nightgram.com/gunma/maebashi/" target="_blank" title="前橋 キャバクラ情報サイト「ナイトグラム」">powered by NIGHTGRAM</a></div>
					</div>

				</div>
			</div>
			<?php include ('php/footer.php'); ?>
		</div>
	</div>
	<!-- ここからモーダルウィンドウの表示内容 -->
<div id="modal-content">
<div id="modal-wrap">
<?php

  $result=mysqli_query($sql, "SELECT * From `rss_information` WHERE name2='".$name2."' ORDER by pub DESC LIMIT 50");
        
    $cnt=mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){
      //include('parts/basic_hensu.php');
      include('php/parts/rss_info.php');

    echo "<div class=\"instagrambase_topspace\" id=\"m".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"prof.php?name2=".$name2."\">
				<div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
      if ($photo1 == '') {
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";
    }else{
          echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\">";
    }
            echo "</div>
              </div>
            <div class=\"instagrambase_box_b\">";
      
        echo "<div class=\"instagrambase_name\">".$name."</div> 
            </div><div class=\"clear\"></div>	
				</a>
			</div>"; 
      echo "<div class=\"element_instagram_2\">
				<div class=\"instagrambase_box_c\">";
      
          //出勤データの有効・無効
    $getdays=getDays($tdy_8dig,$yobi7);
    //本日の出勤
      //▽表示内容ここから
      if($getdays<1){
        if($yobi9==$edi){
        if ($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }else{
        if($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }
      echo "<img src=\"\" data-src=\"".$sche1."\" class=\"lozad\" alt=\"出勤アイコン\">";
      
      if ($option2 == '') {
          echo "<img src=\"\" data-src=\"img/cast_instagram_off.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\">";
        }else{
        echo "<a href=\"".$option2."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_instagram_on.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\"></a>";
      }
      
          echo "</div>
				<div class=\"clear\"></div>				
			</div>
		</div>";

    echo "<div class=\"instagrambase_naiyou\">";  
      if(strpos($img_url, 'mp4') !== false){
              echo "<video src=\"\" data-src=\"".$img_url."\" class=\"lozad\" width=\"100%\" loop muted playsinline autoplay controls></video>";
            }else{
              echo "<img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" width=\"100%\">";
            }
    echo	"<div class=\"cp_box\">
            <input id=\"cp".$id." \" type=\"checkbox\">
            <label for=\"cp".$id." \"></label>
            <div class=\"cp_container\">";  
        echo	"<p>".$discription."</p>";
      echo	"</div>
            </div>                    
          </div></div>";   
	 
      
    }
?>
	<div class="insta-last"></div>
	<a id="modal-btn-close">
		<div class="modal-btn-close"><p>× 閉じる</p></div>
	</a>	
</div>
</div>
<!-- ここまでモーダルウィンドウの表示内容 -->
	
	<!-- ここまでモーダルウィンドウの表示内容 -->
<div id="modal-content-youtube">
<div id="modal-wrap-youtube">
<?php

$result=mysqli_query($sql, "SELECT * From `rss_information2` WHERE name2='".$name2."' ORDER by pub DESC LIMIT 50");
        
    $cnt=mysqli_num_rows($result);
    while($row=mysqli_fetch_assoc($result)){
      //include('parts/basic_hensu.php');
      include('php/parts/rss_info_yt.php');

    echo "<div class=\"instagrambase_topspace\" id=\"yy".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"prof.php?name2=".$name2."\">
                <div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
      if ($photo1 == '') {
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";
    }else{
          echo "<img src=\"\" data-src=\"https://www.caba-web.com/demo_1/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\">";
    }
            echo "</div>
              </div>
            <div class=\"instagrambase_box_b\">";
      
        echo "<div class=\"instagrambase_name\">".$name."</div> 
            </div><div class=\"clear\"></div>	
				</a>
			</div>"; 
      echo "<div class=\"element_instagram_2\">
				<div class=\"instagrambase_box_c\">";
      
          //出勤データの有効・無効
    $getdays=getDays($tdy_8dig,$yobi7);
    //本日の出勤
      //▽表示内容ここから
      if($getdays<1){
        if($yobi9==$edi){
        if ($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }else{
        if($yotei1 == '3' || $yotei1 == '1') {
          $sche1 = "img/today_icon.svg";
        }else{
          $sche1 = "img/today_icon_off.svg";
        }
      }
      echo "<img src=\"\" data-src=\"".$sche1."\" class=\"lozad\" alt=\"出勤アイコン\">";
      
      if ($option4 == '') {
          echo "<img src=\"\" data-src=\"img/cast_youtube_off.svg\" class=\"lozad\" alt=\"You Tubeアイコン\">";
        }else{
        echo "<a href=\"".$option4."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_youtube_on.svg\" class=\"lozad\" alt=\"You Tubeアイコン\"></a>";
      }
      
          echo "</div>
				<div class=\"clear\"></div>				
			</div>
		</div>";
		

     echo "<div class=\"instagrambase_naiyou\">";  
              echo " <div><div><div style=\"left: 0; width: 100%; height: 0; position: relative; padding-bottom: 56.25%;\"><iframe src=\"\" data-src=\"".$movie_url."\" class=\"lozad\" style=\"border: 0; top: 0; left: 0; width: 100%; height: 100%; position: absolute;\" allowfullscreen scrolling=\"no\" allow=\"encrypted-media; accelerometer; gyroscope; picture-in-picture\"></iframe></div></div></div>";
    
    echo	"<div class=\"youtubebase_title\">".$discription."</div>
			  </div>
		  </div>";  
  
    }
?>
	<div class="insta-last"></div>
	<a id="modal-btn-close-youtube">
		<div class="modal-btn-close"><p>× 閉じる</p></div>
	</a>
</div>
</div>
<!-- ここまでモーダルウィンドウの表示内容 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!-- 読み込み -->
<script src="js/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
	$('[data-fancybox]').fancybox({
		loop : true,
		infobar : true,		
		toolbar : true,
		smallBtn : true,
		iframe : {
			preload : false
		}
	});
});
</script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });	
</script>
<script>
if (window.matchMedia('(max-width: 767px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 9;
	
	//要素の数を数える
	var divlength = $('#list .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list .li').eq(division*i-1)
                .after('<span class="morelink link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list .li,.morelink').hide();
	for(j=0;j<division;j++){
		$('#list .li').eq(j).show();
	}
	$('.morelink.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink').hide();
		//次のmorelink(index+1)を表示
		$('.morelink').eq(index+1).show();
	
	});
	
});
   } else if (window.matchMedia('(min-width:768px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 10;
	
	//要素の数を数える
	var divlength = $('#list .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list .li').eq(division*i-1)
                .after('<span class="morelink link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list .li,.morelink').hide();
	for(j=0;j<division;j++){
		$('#list .li').eq(j).show();
	}
	$('.morelink.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink').hide();
		//次のmorelink(index+1)を表示
		$('.morelink').eq(index+1).show();
	
	});
	
});
   }
if (window.matchMedia('(max-width: 767px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 2;
	
	//要素の数を数える
	var divlength = $('#list_2 .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list_2 .li').eq(division*i-1)
                .after('<span class="morelink_2 link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list_2 .li,.morelink_2').hide();
	for(j=0;j<division;j++){
		$('#list_2 .li').eq(j).show();
	}
	$('.morelink_2.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink_2').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink_2');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list_2 .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink_2').hide();
		//次のmorelink(index+1)を表示
		$('.morelink_2').eq(index+1).show();
	
	});
	
});
   } else if (window.matchMedia('(min-width:768px)').matches) {
$(function(){
	
	//分割したい個数を入力
	var division = 4;
	
	//要素の数を数える
	var divlength = $('#list_2 .li').length;
	//分割数で割る
	dlsizePerResult = divlength / division;
	//分割数 刻みで後ろにmorelinkを追加する
	for(i=1;i<=dlsizePerResult;i++){
		$('#list_2 .li').eq(division*i-1)
                .after('<span class="morelink_2 link'+i+'">more</span>');
	}
	//最初のli（分割数）と、morelinkを残して他を非表示
	$('#list_2 .li,.morelink_2').hide();
	for(j=0;j<division;j++){
		$('#list_2 .li').eq(j).show();
	}
	$('.morelink_2.link1').show();
	
	//morelinkにクリック時の動作
	$('.morelink_2').click(function(){
		//何個目のmorelinkがクリックされたかをカウント
		index = $(this).index('.morelink_2');
		//(クリックされたindex +2) * 分割数 = 表示数
		for(k=0;k<(index+2)*division;k++){
			$('#list_2 .li').eq(k).fadeIn();
		}
		
		//一旦全てのmorelink削除
		$('.morelink_2').hide();
		//次のmorelink(index+1)を表示
		$('.morelink_2').eq(index+1).show();
	
	});
	
});
   }	
window.onload = switchByWidth;
window.onresize = switchByWidth;
</script>	
<!--サイド　プラグイン-->
<script>
$(function() {
var topBtn = $('#page_top');	
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
//グローバル変数
var sX_syncerModal = 0 ;
var sY_syncerModal = 0 ;

//センタリングを実行する関数
function centeringModalSyncer(){
  //画面(ウィンドウ)の幅、高さを取得
  var w = $(window).width();
  var h = $(window).height();
  //コンテンツ(#modal-content)の幅、高さを取得
  var cw = $("#modal-content").outerWidth();
  var ch = $("#modal-content").outerHeight();
  //センタリングを実行する
  $("#modal-content").css({"left": ((w - cw)/2) + "px","top": ((h - ch)/2) + "px"})
}

//モーダルウィンドウを出現させるクリックイベント
var modalopen = function (value) {
	//キーボード操作などにより、オーバーレイが多重起動するのを防止する
	$( this ).blur() ;	//ボタンからフォーカスを外す
	if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
	//オーバーレイを出現させる
  posi = $(window).scrollTop();
  $("#page_fade").addClass('modal-body').css({top: -posi});
	$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
	$( "#modal-overlay" ).fadeIn( "slow" ) ;
	//コンテンツをセンタリングする
	centeringModalSyncer() ;
	//コンテンツをフェードインする
	$( "#modal-content" ).fadeIn( "slow" ) ;
	//[#modal-overlay]、または[#modal-close]をクリックしたら…
	$( "#modal-overlay,#modal-close" ).unbind().click( function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$( "#modal-content,#modal-overlay" ).fadeOut( "slow" , function(){
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove() ;
		} ) ;
    $("#page_fade").removeClass("modal-body");
    $(window).scrollTop(posi);
  }) ;
  $.when(
  $(`#modal-wrap`).scrollTop(0))
  .then($("#modal-wrap").scrollTop($(`#m${value.id}`).offset().top)
  );
}

//グローバル変数
var nowModalSyncer = null ;		//現在開かれているモーダルコンテンツ
var modalClassSyncer = "modal-syncer" ;		//モーダルを開くリンクに付けるクラス名
//モーダルのリンクを取得する
var modals = document.getElementsByClassName( modalClassSyncer ) ;
//モーダルウィンドウを出現させるクリックイベント
for(var i=0,l=modals.length; l>i; i++){
	//全てのリンクにタッチイベントを設定する
	modals[i].onclick = function(){
		//ターゲットとなるコンテンツを確認
		var target = this.getAttribute( "modal-content" ) ;
		//ターゲットが存在しなければ終了
		if( typeof( target )=="undefined" || !target || target==null ){
			return false ;
		}
		//コンテンツとなる要素を取得
		nowModalSyncer = document.getElementById( target ) ;
		//ターゲットが存在しなければ終了
		if( nowModalSyncer == null ){return false ;}
		//キーボード操作などにより、オーバーレイが多重起動するのを防止する
		if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない
		//オーバーレイを出現させる
		$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
		$( "#modal-overlay" ).fadeIn( "fast" ) ;
		//コンテンツをセンタリングする
		centeringModalSyncer() ;
		//コンテンツをフェードインする
		$( nowModalSyncer ).fadeIn( "slow" ) ;
		//[#modal-overlay]、または[#modal-close]をクリックしたら…
		$( "#modal-overlay,#modal-close" ).unbind().click( function() {
			//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
			$( "#" + target + ",#modal-overlay" ).fadeOut( "fast" , function() {
				//[#modal-overlay]を削除する
				$( '#modal-overlay' ).remove() ;
			} ) ;
			//現在のコンテンツ情報を削除
			nowModalSyncer = null ;
		} ) ;
	}
}
$("#modal-btn-close").click(function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$("#modal-content,#modal-overlay").fadeOut("slow",function(){
      $("#page_fade").removeClass("modal-body");
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove();
      $(window).scrollTop(posi);
  });
});
//---------youtubeのモーダルイベント---------START
var modalopenyoutube = function (value) {
	//キーボード操作などにより、オーバーレイが多重起動するのを防止する
	$( this ).blur() ;	//ボタンからフォーカスを外す
	if( $( "#modal-overlay" )[0] ) return false ;		//新しくモーダルウィンドウを起動しない (防止策1)
	//オーバーレイを出現させる
  posi = $(window).scrollTop();
  $("#page_fade").addClass('modal-body').css({top: -posi});
	$( "body" ).append( '<div id="modal-overlay"></div>' ) ;
	$( "#modal-overlay" ).fadeIn( "slow" ) ;
	//コンテンツをセンタリングする
	centeringModalSyncer_youtube();
	//コンテンツをフェードインする
	$( "#modal-content-youtube" ).fadeIn( "slow" ) ;
	//[#modal-overlay]、または[#modal-close]をクリックしたら…
	$( "#modal-overlay,#modal-btn-close-youtube" ).unbind().click( function(){
		//[#modal-content-youtube]と[#modal-overlay]をフェードアウトした後に…
		$( "#modal-content-youtube,#modal-overlay" ).fadeOut( "slow" , function(){
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove() ;
		} ) ;
    $("#page_fade").removeClass("modal-body");
    $(window).scrollTop(posi);
  }) ;
  $.when(
  $(`#modal-wrap-youtube`).scrollTop(0))
  .then($("#modal-wrap-youtube").scrollTop($(`#y${value.id}`).offset().top)
  );
}

//センタリングを実行する関数
function centeringModalSyncer_youtube(){
  //画面(ウィンドウ)の幅、高さを取得
  var w_youtube = $(window).width();
  var h_youtube = $(window).height();
  //コンテンツ(#modal-content)の幅、高さを取得
  var cw_youtube = $("#modal-content-youtube").outerWidth();
  var ch_youtube = $("#modal-content-youtube").outerHeight();
  //センタリングを実行する
  $("#modal-content-youtube").css({"left": ((w_youtube - cw_youtube)/2) + "px","top": ((h_youtube - ch_youtube)/2) + "px"})
}

$("#modal-btn-close-youtube").click(function(){
		//[#modal-content]と[#modal-overlay]をフェードアウトした後に…
		$("#modal-content-youtube,#modal-overlay").fadeOut("slow",function(){
      $("#page_fade").removeClass("modal-body");
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove();
      $(window).scrollTop(posi);
  });
});
//---------youtubeのモーダルイベント---------END
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