<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>テスト</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/jquery.fancybox.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">	
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
	
<link rel="canonical" href="">
<meta name="format-detection" content="telephone=no">

</head>

<body>	
	<div id="top_fade">
		<div class="drawer drawer--right">
			<div class="header_space">
				<div class="header_space_img"><h1><a href="https://www.caba-web.com/test/" title="前橋のキャバクラ「摩天楼」"><img src="img/logo.svg" alt="前橋のキャバクラ「摩天楼」"></a></h1></div>
			</div>	
			<header role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only"></span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">
					<ul class="drawer-menu">
						<li class="drawer-dropdown_top">
							<div class="wrapper_side_top">
								<div class="element_side_1">
									<a class="drawer-brand_2 drawer-brand_shop" href="tel:027-226-1206" title="電話"><img src="img/tel_side.svg" alt="前橋のキャバクラ「摩天楼」電話" /></a>
								</div>
								<div class="element_side_1">
									<a class="drawer-brand_2 drawer-brand_shop" href="https://goo.gl/maps/yDRqSsDZHvc2V5Ch8" target="_blank" title="アクセス"><img src="img/map_side.svg" alt="前橋のキャバクラ「摩天楼」アクセス" /></a>
								</div>
								<div class="clear"></div>
							</div>
						</li>						
						<li>
							<a class="drawer-brand" href="https://www.caba-web.com/test/" title="トップ">トップ</a>
							<div class="drawer-brand_line"></div>
						</li>
						<li>
							<a class="drawer-brand" href="hotnews.php" title="ニュース">最新ニュース</a>
							<div class="drawer-brand_line"></div>
						</li>
						<li>
							<a class="drawer-brand" href="cast.php" title="キャスト">キャスト＆出勤情報</a>
							<div class="drawer-brand_line"></div>
						</li>						
						<li>
							<a class="drawer-brand" href="coupon.php" title="クーポン">クーポン</a>
							<div class="drawer-brand_line"></div>
						</li>
						<li>
							<a class="drawer-brand" href="system.php" title="料金システム">料金システム</a>
							<div class="drawer-brand_line"></div>
						</li>					
						<li>
							<a class="drawer-brand" href="event.php" title="イベントカレンダー">カレンダー</a>
							<div class="drawer-brand_line"></div>
						</li>						
						<li>
							<a class="drawer-brand" href="shopphoto.php" title="店内写真">フロア写真</a>
							<div class="drawer-brand_line"></div>
						</li>						
						<li>
							<a class="drawer-brand" href="recruit.php" title="キャスト求人情報">キャスト求人・体入情報</a>
							<div class="drawer-brand_line"></div>
						</li>
						<li>
							<a class="drawer-brand" href="recruit.php#staff" title="スタッフ求人情報">スタッフ求人情報</a>
							<div class="drawer-brand_line"></div>
						</li>						
						<li>
							<div class="wrapper_side_sns">
								<div class="element_sns"><a href="" target="_blank" title="Facebook"><img src="img/facebook_2.svg" alt="前橋のキャバクラ「摩天楼」Facebook" /></a></div>
								<div class="element_sns"><a href="https://www.instagram.com/matenrou.maebashi/" target="_blank" title="Instagram"><img src="img/instagram_2.svg" alt="前橋のキャバクラ「摩天楼」Instagram" /></a></div>
								<div class="element_sns"><a href="" target="_blank" title="Twitter"><img src="img/twitter_2.svg" alt="前橋のキャバクラ「摩天楼」Twitter" /></a></div>
								<div class="element_sns"><a href="" target="_blank" title="You Tube"><img src="img/youtube_2.svg" alt="前橋のキャバクラ「摩天楼」You Tube" /></a></div>
							</div>
						</li>
					</ul>
				</nav>
			</header>			
			<div class="header_space_sp"></div>
			
			<div class="top_img_area">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php 

$result=mysqli_query($sql, "SELECT * From `data2` WHERE `name2` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu3.php');
	
	if($end1 >= $slider_today || $end1 == ''){
	if($photo1 == $empty){
	echo "";
}else{
		if($link1 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link1."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	}
	if($end2 >= $slider_today || $end2 == ''){
	if($photo2 == $empty){
	echo "";
}else{
		if($link2 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link2."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end3 >= $slider_today || $end3 == ''){
	if($photo3 == $empty){
	echo "";
}else{
		if($link3 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link3."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end4 >= $slider_today || $end4 == ''){
	if($photo4 == $empty){
	echo "";
}else{
		if($link4 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link4."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end5 >= $slider_today || $end5 == ''){
	if($photo5 == $empty){
	echo "";
}else{
		if($link5 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link5."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end6 >= $slider_today || $end6 == ''){
	if($photo6 == $empty){
	echo "";
}else{
		if($link6 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link6."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end7 >= $slider_today || $end7 == ''){
	if($photo7 == $empty){
	echo "";
}else{
		if($link7 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link7."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end8 >= $slider_today || $end8 == ''){
	if($photo8 == $empty){
	echo "";
}else{
		if($link8 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link8."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end9 >= $slider_today || $end9 == ''){
	if($photo9 == $empty){
	echo "";
}else{
		if($link9 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link9."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
}
	if($end10 >= $slider_today || $end10 == ''){
	if($photo10 == $empty){
	echo "";
}else{
		if($link10 == $empty){
	echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></div>";
}else{
		echo "<div class=\"swiper-slide\"><div class=\"s-three-wrap\"><img src=\"https://www.caba-web.com/client_admin/".$photo10.".jpg?".$koshin."\" alt=\"".$seo."\" /><a href=\"".$link10."\" class=\"s-three-button fade_3\" title=\"".$seo."求人情報\">詳細はこちら</a></div></div>";
	}
	}
	}
}
	  
	?>
						
						
					</div>
					<div class="swiper-pagination"></div>
				</div>
			</div>
				
			<div class="top_news_bg">
				<div class="top_contents_in">
					<h2>NEWS<br /><span style="font-size: 50%;">最新ニュース</span></h2>
			<?php echo $slider_today; ?>
					<div class="slide-wrap slide-scroll"> 
						<?php 
$result=mysqli_query($sql3, "SELECT * From `news` WHERE (sort>='$news_today' or sort='') AND link='1' AND blank='$login_id' ORDER BY sort_order ASC LIMIT 4");
$cnt=mysqli_num_rows($result);

//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu2.php');

	
	echo "<div class=\"slide-box\"><a href=\"hotnews.php?news_id=".$news_id."#".$news_id."\"><div class=\"photo_thumbs\">\n";
	if($photo1 == $empty){
	echo "<img src=\"img/nophoto.jpg\" alt=\"".$seo."\" />";
}else{
	if($photo_box == '1'){
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」ニュース\" />\n";
}elseif($photo_box == '3'){
	echo "<img src=\"https://www.nightgram.com/master_admin/".$photo1.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」ニュース\" />\n";
}elseif($photo_box == ''){
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」ニュース\" />\n";
}
}
	
	echo "</div>\n";
	
	echo "<h3>".$newstitle."</h3>\n";

	echo "</a>        
      </div>\n";
	
}

?>
						
					</div>					
					<div class="top_button_area"><a href="hotnews.php" class="btn_under" title="ニュース一覧">more</a></div>
				</div>
			</div>
			<div style="text-align: center">
			</div>

			<div class="top_schedule_bg">
				<div class="top_contents_in">
					<h2>TODAYs CAST<br /><span style="font-size: 50%;">本日のキャスト出勤情報</span></h2>
					<div class="wrapper">
						<?php
$result=mysqli_query($sql3, "SELECT * From `data` WHERE `yobi1` = '$login_id' AND `option1` = '1' ORDER by id");
$cnt=mysqli_num_rows($result);


while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu.php');


//出勤データの有効・無効
$getdays=getDays($tdy_8dig,$yobi7);

//本日の出勤
	//▽表示内容ここから
	if($getdays<1){
		if($yobi9==$edi){
			
			if ($yotei1 == '3' || $yotei1 == '1') {
			
	
			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"伊勢崎市のキャバクラ「プートリー」".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"伊勢崎市のキャバクラ「プートリー」".$name."\" />\n";
}

echo "</div>";
		
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\" /></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\" /></div>";			
			}	
			
			echo "<p>".$name."</p>";

			echo "</div></a></div></div>\n";
			}
			}
	}else{
		if ($yotei1 == '3' || $yotei1 == '1') {
			//列の加算
			$col++;
			
			//先頭ならばTRタグ開始
			if($col==1){echo "";}
			
			echo "<div class=\"element_castlist\"><div class=\"top_schedule_box\">
        <a href=\"prof.php?name2=".$name2."\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\">";
			
			
			//写真を表示
			
	//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"伊勢崎市のキャバクラ「プートリー」".$name."\" />\n";
}else{
	echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"伊勢崎市のキャバクラ「プートリー」".$name."\" />\n";
}

echo "</div>";
		
			if($profinfo9 == ''){
	echo "";
}else{
	echo "<div class=\"fa_insta\"><img src=\"\" data-src=\"img/cast_instagram.svg\" class=\"lozad\" /></div>";			
			}
		if($option4 == ''){
	echo "";
}else{
	echo "<div class=\"fa_youtube\"><img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tube\" /></div>";			
			}	
			
			echo "<p>".$name."</p>";

			echo "</div></a></div></div>\n";
			//4列目ならTRタグ終了　列位置を0に戻す
			if($col==7){
				echo "";
				$col=0;
			}
		}
	}
	//△表示内容ここまで

}

$result=mysqli_query($sql, "SELECT * From `taiken` WHERE `shop_no` = '$login_id' AND `taiken_limit` = '$tdy'");
$cnt=mysqli_num_rows($result);

while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu5.php');
}
		$count = 0;
		$tcol = 1;

while ($count < $taiken_num){
  echo "<div class=\"element_castlist\">
        <div class=\"top_schedule_box\"><div class=\"top_schedule_box_in\"><div class=\"photo_thumbs\"><img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$shop_seo."体験".$tcol."\" /></div>\n";
		echo "<p>体験入店".$tcol."</p></div></div></div>\n";
	$count++;
  $tcol++;
}

?>
				
					</div>		
					<div class="top_button_area"><a href="cast.php" class="btn_under" title="キャスト一覧">cast list</a></div>
				</div>
			</div>			
	
			<div class="top_instagram_bg">
				<div class="top_contents_in">
				<h2>INSTAGRAM<br /><span style="font-size: 50%;">インスタグラム</span></h2>
					<div id="list">
						<?php
	
$result=mysqli_query($sql3, "SELECT * From `rss_information` WHERE option20='".$no."' UNION SELECT * From `rss_information3` WHERE option20='".$no."' ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
	  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('php/parts/rss_info.php');


//▽表示内容ここから

echo "<div class=\"li\">
						<a href=\"javascript:void(0);\" onclick=\"modalopen(this)\" id=\"".$id."\"   title=\"".$name."\">
							<div class=\"top_instagram_list_box\">
								<div class=\"top_instagram_list_box_in\">";

					echo "<div class=\"photo_thumbs\">";  
				
	
	if(strpos($img_url, 'mp4') !== false){
					echo "<video autoplay loop muted src=\"".$img_url."\" playsinline class=\"lozad\" ><div class=\"fa\"><img src=\"\" data-src=\"img/play.svg\" class=\"lozad\" ></div>";
				}else{
					
					echo "<img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" alt=\"伊勢崎市のキャバクラ「プートリー」インスタ投稿\" />";
				}
	
	echo	"</div><div class=\"top_instagram_list_box_name\">".$name."</div></div></div></a></div>";
	
     
}
				
?>
									
					</div>
					<div class="top_instagram_powered"><a href="https://www.nightgram.com/gunma/isesaki/" target="_blank" title="伊勢崎市のキャバクラ情報サイト「ナイトグラム」">powered by NIGHTGRAM</a></div>
				</div>
			</div>

			<!--div class="top_youtube_bg">
				<div class="top_contents_in">
					<h2>You Tube<br /><span style="font-size: 50%;">ユーチューブ</span></h2>
					<div id="list_2">
						<?php

$result=mysqli_query($sql3, "SELECT * From `rss_information2` WHERE option20='".$no."' UNION SELECT * From `rss_information4` WHERE option20='".$no."' ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
		  
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');
include('php/parts/rss_info_yt.php');
	
//▽表示内容ここから

echo "<div class=\"li\">
						<a href=\"javascript:void(0);\" onclick=\"modalopenyoutube(this)\" id=\"y".$id."\"   title=\"".$area_hyouki." ".$gyoushu_hyouki."「".$s_name."」".$name."\">
							<div class=\"top_youtube_list_box\">
								<div class=\"top_youtube_list_box_in\">";

					echo "<div class=\"youtube_thumbs\"><img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" alt=\"".$name."のYou Tube\"  ></div>";  
				
					echo "<div class=\"fa_2\"><img src=\"\" data-src=\"img/play_2.svg\" class=\"lozad\"></div>";
				
	
	echo	"</div><div class=\"top_youtube_list_box_name\">".$name."</div></div>
						</a>
					</div>";

	
}
				
?>
						
													
					</div>
					<div class="top_instagram_powered"><a href="https://www.nightgram.com/gunma/maebashi" target="_blank" title="前橋市のキャバクラ情報サイト「ナイトグラム」">powered by NIGHTGRAM</a></div>
				</div>
			</div-->				

					<?php
$result=mysqli_query($sql, "SELECT * From `coupon` WHERE coupon_shop='$login_id'  AND `coupon2` >=$news_today ORDER by coupon_id DESC LIMIT 1");
$cnt=mysqli_num_rows($result);
					
					if ($cnt != '0') {
								 echo '<div class="top_shopphoto_bg">
				<div class="top_contents_in">
					<h2>COUPON<br /><span style="font-size: 50%;">クーポン</span></h2>';
}

//while(list($key,$line)=each($datacsv)){
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu4.php');
	
	$coupon_day = date("Y年m月d日",strtotime("$coupon2"));
	
	echo "<div class=\"coupon_page_ticket_box_base\">
      <div class=\"coupon_page_ticket_box\">
        <div class=\"coupon_page_ticket_box_1\">".$coupon1."</div>
        <div class=\"coupon_page_ticket_box_2\">有効期限：".$coupon_day."まで</div>
        <div class=\"coupon_page_ticket_box_3\">
        ".$coupon3."
        </div>
      </div><!--coupon_page_ticket_box-->
    </div>\n";

		}
if ($cnt != '0') {
	echo '<div class="top_button_area"><a href="coupon.php" class="btn_under" title="クーポン一覧">more</a></div>
				</div>
			</div>';
}
?>
			
			<div class="top_shopphoto_bg">
				<div class="top_contents_in">
					<h2>SHOP PHOTO<br /><span style="font-size: 50%;">店内写真</span></h2>
					<div class="wrapper">
						<?php
						
						$result=mysqli_query($sql, "SELECT * From `data3` WHERE `name2` = '$login_id'");
	
while($row=mysqli_fetch_assoc($result)){
include('php/parts/basic_hensu3.php');


						
						if($photo1 == $empty){
	echo "";
}else{
		echo "<div class=\"element_topphoto\"><a href=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" data-fancybox=\"top_group\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」店内写真\" /></div></a></div>";
	}
						
						if($photo2 == $empty){
	echo "";
}else{
		echo "<div class=\"element_topphoto\"><a href=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" data-fancybox=\"top_group\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」店内写真\" /></div></a></div>";
	}
					
						if($photo3 == $empty){
	echo "";
}else{
		echo "<div class=\"element_topphoto\"><a href=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" data-fancybox=\"top_group\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」店内写真\" /></div></a></div>";
	}
					
						if($photo4 == $empty){
	echo "";
}else{
		echo "<div class=\"element_topphoto\"><a href=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" data-fancybox=\"top_group\" data-caption=\"\"><div class=\"photo_thumbs\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"伊勢崎市のキャバクラ「プートリー」店内写真\" /></div></a></div>";
	}
	}
						?>
									
					</div>
					<div class="top_button_area"><a href="shopphoto.php" class="btn_under" title="店内写真一覧">more</a></div>
				</div>
			</div>				
			
			<div id="footer">
				<div id="page_top"><a href="#"></a></div>
				
				<div class="top_access_box">
					<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12846.969667076102!2d139.0714261!3d36.3912292!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f02d067fb4c5734!2z5pGp5aSp5qW8!5e0!3m2!1sja!2sjp!4v1608208938153!5m2!1sja!2sjp" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</div>
				<div class="top_contents_in">					
					<div class="wrapper">
						<div class="element_footer">
							<div class="footer_info_box">
								<div class="footer_info_box_main">
									<div class="footer_info_box_a"><img src="" data-src="img/tel_footer.svg" class="lozad" title="前橋のキャバクラ「摩天楼」電話番号"></div>
									<div class="footer_info_box_b"><div class="footer_info_box_b_title">CALL US</div><a href="tel:027-226-1206" style="font-size: 120%;">027-226-1206</a></div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="element_footer">
							<div class="footer_info_box">
								<div class="footer_info_box_main">
									<div class="footer_info_box_a"><img src="" data-src="img/map_footer.svg" class="lozad" title="前橋のキャバクラ「摩天楼」住所"></div>
									<div class="footer_info_box_b"><div class="footer_info_box_b_title">ADDRESS</div>群馬県前橋市千代田町4-4-9</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>
						<div class="element_footer">
							<div class="footer_info_box">
								<div class="footer_info_box_main">
									<div class="footer_info_box_a"><img src="" data-src="img/info_footer.svg" class="lozad" title="前橋のキャバクラ「摩天楼」ショップ情報"></div>
									<div class="footer_info_box_b"><div class="footer_info_box_b_title">SHOP INFO</div>OPEN. 20:00-LAST / CLOSED. 月曜日</div>
									<div class="clear"></div>
								</div>
							</div>
						</div>					
					</div>
				</div>				
				<div class="top_contents_in">					
					<ul class="inline-block footer_img_1">
						<li><a href="" target="_blank" title="Facebook"><img src="" data-src="img/facebook_2.svg" class="lozad" alt="前橋のキャバクラ「摩天楼」Facebook" /></a></li>
						<li><a href="https://www.instagram.com/matenrou.maebashi/" target="_blank" title="Instagram"><img src="" data-src="img/instagram_2.svg" class="lozad" alt="前橋のキャバクラ「摩天楼」Instagram" /></a></li>
						<li><a href="" target="_blank" title="Twitter"><img src="" data-src="img/twitter_2.svg" class="lozad" alt="前橋のキャバクラ「摩天楼」Twitter" /></a></li> 
						<li><a href="" target="_blank" title="You Tube"><img src="" data-src="img/youtube_2.svg" class="lozad" alt="前橋のキャバクラ「摩天楼」You Tube" /></a></li>
					</ul>					
				</div>
				
				<p>© 2020 MATENROU.</p>
			</div>
			
		</div>
	</div>	
	<!-- ここからモーダルウィンドウの表示内容 -->
<div id="modal-content">
<div id="modal-wrap">
	<?php
$result=mysqli_query($sql3, "SELECT * From `rss_information` WHERE option20='".$no."' UNION SELECT * From `rss_information3` WHERE option20='".$no."' ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
	
    while($row=mysqli_fetch_assoc($result)){
      //include('parts/basic_hensu.php');
      include('php/parts/rss_info.php');
		
		
		if ($name != 'お店インスタ') {
		
		$result2=mysqli_query($sql3, "SELECT * From `data`  WHERE name2='".$name2."' ORDER by name2");
		
		while($row=mysqli_fetch_assoc($result2)){
      //include('parts/basic_hensu.php');
      include('php/parts/basic_hensu.php');

						

			
    echo "<div class=\"instagrambase_topspace\" id=\"m".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"".$shop_url."/prof.php?name2=".$name2."\">
				<div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
      if ($photo1 == '') {
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";
    }else{
          echo "<img src=\"\" data-src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" class=\"lozad\" alt=\"".$name."\">";
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
      
      if ($profinfo9 == '') {
          echo "<img src=\"\" data-src=\"img/cast_instagram_off.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\">";
        }else{
        echo "<a href=\"".$profinfo9."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_instagram_on.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\"></a>";
      }
      
          echo "</div>
				<div class=\"clear\"></div>				
			</div>
		</div>";

    echo "<div class=\"instagrambase_naiyou\">";  
      if(strpos($img_url, 'mp4') !== false){
              echo "<video src=\"\" data-src=\"".$img_url."\" class=\"lozad\" width=\"100%\" loop muted playsinline autoplay controls></video>";
            }else{
              echo "<img src=\"\" data-src=\"".$img_url."\" class=\"lozad\" width=\"100%\" alt=\"前橋のキャバクラ「摩天楼」インスタ投稿\">";
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
		}else{
			$result2=mysqli_query($sql2, "SELECT * From `shop_tb`  WHERE no='".$name2."' ORDER by no");
		
		while($row=mysqli_fetch_assoc($result2)){
      //include('parts/basic_hensu.php');
      include('php/parts/nightgram_shop_hensu.php');
			
				

    echo "<div class=\"instagrambase_topspace\" id=\"m".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"".$shop_url."\">
				<div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
  
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";

            echo "</div>
              </div>
            <div class=\"instagrambase_box_b\">";
      
        echo "<div class=\"instagrambase_name\">".$name."</div> 
            </div><div class=\"clear\"></div>	
				</a>
			</div>"; 
      echo "<div class=\"element_instagram_2\">
				<div class=\"instagrambase_box_c\">";
            
      
      if ($data4 == '') {
          echo "<img src=\"\" data-src=\"img/cast_instagram_off.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\">";
        }else{
        echo "<a href=\"".$data4."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_instagram_on.svg\" class=\"lozad\" alt=\"INSTAGRAMアイコン\"></a>";
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
		}
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

$result=mysqli_query($sql3, "SELECT * From `rss_information2` WHERE option20='".$no."' UNION SELECT * From `rss_information4` WHERE option20='".$no."' ORDER by pub DESC LIMIT 50");

$cnt=mysqli_num_rows($result);
	
    while($row=mysqli_fetch_assoc($result)){
      //include('parts/basic_hensu.php');
      include('php/parts/rss_info_yt.php');
		
		if ($name != 'お店YouTube') {
		
		$result2=mysqli_query($sql3, "SELECT * From `data`  WHERE name2='".$name2."' ORDER by name2");
		
		while($row=mysqli_fetch_assoc($result2)){
      //include('parts/basic_hensu.php');
      include('php/parts/basic_hensu.php');

    echo "<div class=\"instagrambase_topspace\" id=\"yy".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"prof.php?name2=".$name2."\">
                <div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";

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
		}else{
		$result2=mysqli_query($sql2, "SELECT * From `shop_tb`  WHERE no='".$name2."' ORDER by no");
		
		while($row=mysqli_fetch_assoc($result2)){
      //include('parts/basic_hensu.php');
      include('php/parts/nightgram_shop_hensu.php');

    echo "<div class=\"instagrambase_topspace\" id=\"yy".$id."\"></div>
          <div class=\"instagrambase_boxin\">
            <div class=\"wrapper\">
              <div class=\"element_instagram_1\">
                <a href=\"prof.php?name2=".$name2."\">
                <div class=\"instagrambase_box_a\">
                <div class=\"image_maru\">";
      
  
      echo "<img src=\"\" data-src=\"img/nophoto.jpg\" class=\"lozad\" alt=\"".$name."\">";

            echo "</div>
              </div>
            <div class=\"instagrambase_box_b\">";
      
        echo "<div class=\"instagrambase_name\">".$s_name."</div> 
            </div><div class=\"clear\"></div>	
				</a>
			</div>"; 
      echo "<div class=\"element_instagram_2\">
				<div class=\"instagrambase_box_c\">";
      
      
      
      if ($fburl == '') {
          echo "<img src=\"\" data-src=\"img/cast_youtube.svg\" class=\"lozad\" alt=\"You Tubeアイコン\">";
        }else{
        echo "<a href=\"".$fburl."\" target=\"_blank\"><img src=\"\" data-src=\"img/cast_youtube_on.svg\" class=\"lozad\" alt=\"You Tubeアイコン\"></a>";
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
		}
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
<script src="js/vegas.min.js"></script>		
<!-- 読み込み -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>	
<script src="js/jquery.fancybox.min.js"></script>
<script>
$(document).ready(function() {
	$('[data-fancybox]').fancybox({
		loop : true,
		toolbar  : false,
		smallBtn : true,
		iframe : {
			preload : false
		}
	});
});
</script>
<!--スライドショー　プラグイン-->
<script src="js/swiper.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    effect: "coverflow", //"slide", "fade", "cube", "coverflow" or "flip"
	loop: true,
	loopAdditionalSlides: 1,
    speed: 500,
    autoHeight: true,
	slidesPerView: 2.6,
	spaceBetween: 40,
	followFinger: false,
	centeredSlides: true,
	grabCursor: true,
	breakpoints: {
		767: {
			slidesPerView: 1,
			spaceBetween: 0
		},
	},			
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
	}, 
    pagination: {
      el: '.swiper-pagination',
	  type: 'bullets',
      clickable: true,
	},
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
	},   
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
  $("#top_fade").addClass('modal-body').css({top: -posi});
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
    $("#top_fade").removeClass("modal-body");
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
      $("#top_fade").removeClass("modal-body");
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
  $("#top_fade").addClass('modal-body').css({top: -posi});
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
    $("#top_fade").removeClass("modal-body");
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
      $("#top_fade").removeClass("modal-body");
			//[#modal-overlay]を削除する
			$('#modal-overlay').remove();
      $(window).scrollTop(posi);
  });
});
//---------youtubeのモーダルイベント---------END
</script>
</body>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>