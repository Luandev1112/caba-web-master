<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

$sche = $_GET['sche'];

?>
<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ガールズバー　デモサイト「club CABAWEB キャバウェブ」</title>
<meta name="description" content="ガールズバーデモサイトです。">
<meta name="keywords" content="ガールズバー,デモサイト">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">
<meta name="robots" content="noindex,nofollow">

</head>

<body>

<div id="top_fade">

<div class="drawer drawer--top">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>SCHEDULE</h2>
  </div>
</div>

<div class="page_base_area_2">
  <div class="page_base">
  
    <div class="accbox">
      <label for="label1">出勤日を選択</label>
      <input type="checkbox" id="label1" class="cssacc" />
      <div class="accshow">
      <div class="wrapper_2">
        <div class="element_schedule">
          <a href="schedule.php?sche=0" class="btn_schedule">本日の出勤</a>
        </div>
        <?php 
  echo "<div class=\"element_schedule\">";
  echo "<a href=\"schedule.php?sche=1\" class=\"btn_schedule\" >";
		 echo $day2;		 
		 if($week2 == '月'){
		echo ".mon"; 
		}elseif($week2 == '火'){
		echo ".tue"; 
		}elseif($week2 == '水'){
		echo ".wed"; 
		}elseif($week2 == '木'){
		echo ".thu"; 
		}elseif($week2 == '金'){
		echo ".fri"; 
		}elseif($week2 == '土'){
		echo ".sat"; 
		}elseif($week2 == '日'){
		echo ".sun"; 
		}
		
		echo "</a></div>";

		 ?>
				  <?php 
  echo "<div class=\"element_schedule\">";
  echo "<a href=\"schedule.php?sche=2\" class=\"btn_schedule\" >";
		 echo $day3;		 
		 if($week3 == '月'){
		echo ".mon"; 
		}elseif($week3 == '火'){
		echo ".tue"; 
		}elseif($week3 == '水'){
		echo ".wed"; 
		}elseif($week3 == '木'){
		echo ".thu"; 
		}elseif($week3 == '金'){
		echo ".fri"; 
		}elseif($week3 == '土'){
		echo ".sat"; 
		}elseif($week3 == '日'){
		echo ".sun"; 
		}
		
		echo "</a></div>";

		 ?>
				  <?php 
  echo "<div class=\"element_schedule\">";
  echo "<a href=\"schedule.php?sche=3\" class=\"btn_schedule\" >";
		 echo $day4;		 
		 if($week4 == '月'){
		echo ".mon"; 
		}elseif($week4 == '火'){
		echo ".tue"; 
		}elseif($week4 == '水'){
		echo ".wed"; 
		}elseif($week4 == '木'){
		echo ".thu"; 
		}elseif($week4 == '金'){
		echo ".fri"; 
		}elseif($week4 == '土'){
		echo ".sat"; 
		}elseif($week4 == '日'){
		echo ".sun"; 
		}
		
		echo "</a></div>";

		 ?><?php 
  echo "<div class=\"element_schedule\">";
  echo "<a href=\"schedule.php?sche=4\" class=\"btn_schedule\" >";
		 echo $day5;		 
		 if($week5 == '月'){
		echo ".mon"; 
		}elseif($week5 == '火'){
		echo ".tue"; 
		}elseif($week5 == '水'){
		echo ".wed"; 
		}elseif($week5 == '木'){
		echo ".thu"; 
		}elseif($week5 == '金'){
		echo ".fri"; 
		}elseif($week5 == '土'){
		echo ".sat"; 
		}elseif($week5 == '日'){
		echo ".sun"; 
		}
		
		echo "</a></div>";

		 ?>
				  <?php 
  echo "<div class=\"element_schedule\">";
  echo "<a href=\"schedule.php?sche=5\" class=\"btn_schedule\" >";
		 echo $day6;		 
		 if($week6 == '月'){
		echo ".mon"; 
		}elseif($week6 == '火'){
		echo ".tue"; 
		}elseif($week6 == '水'){
		echo ".wed"; 
		}elseif($week6 == '木'){
		echo ".thu"; 
		}elseif($week6 == '金'){
		echo ".fri"; 
		}elseif($week6 == '土'){
		echo ".sat"; 
		}elseif($week6 == '日'){
		echo ".sun"; 
		}
		
		echo "</a></div>";

		 ?>
               <?php 
  echo "<div class=\"element_schedule\">";
  echo "<a href=\"schedule.php?sche=6\" class=\"btn_schedule\" >";
		 echo $day7;		 
		 if($week7 == '月'){
		echo ".mon"; 
		}elseif($week7 == '火'){
		echo ".tue"; 
		}elseif($week7 == '水'){
		echo ".wed"; 
		}elseif($week7 == '木'){
		echo ".thu"; 
		}elseif($week7 == '金'){
		echo ".fri"; 
		}elseif($week7 == '土'){
		echo ".sat"; 
		}elseif($week7 == '日'){
		echo ".sun"; 
		}
		
		echo "</a></div>";

		 ?>                                                                              
      </div>
      </div>
    </div>
    
    <div class="castschedule_page_today"><span class="castschedule_page_today_2"><?php 
if($sche=='0'){
echo $day1; 
}elseif($sche=='1'){
echo $day2; 
}elseif($sche=='2'){
echo $day3; 
}elseif($sche=='3'){
echo $day4; 
}elseif($sche=='4'){
echo $day5; 
}elseif($sche=='5'){
echo $day6; 
}elseif($sche=='6'){
echo $day7; 
}else{
echo $day1; 
}
?>.</span><?php 
	if($sche=='0' || $sche == ''){
	if($week1 == '月'){
		echo "mon"; 
		}elseif($week1 == '火'){
		echo "tue"; 
		}elseif($week1 == '水'){
		echo "wed"; 
		}elseif($week1 == '木'){
		echo "thu"; 
		}elseif($week1 == '金'){
		echo "fri"; 
		}elseif($week1 == '土'){
		echo "sat"; 
		}elseif($week1 == '日'){
		echo "sun"; 
		}
	}elseif($sche=='1'){
	if($week2 == '月'){
		echo "mon"; 
		}elseif($week2 == '火'){
		echo "tue"; 
		}elseif($week2 == '水'){
		echo "wed"; 
		}elseif($week2 == '木'){
		echo "thu"; 
		}elseif($week2 == '金'){
		echo "fri"; 
		}elseif($week2 == '土'){
		echo "sat"; 
		}elseif($week2 == '日'){
		echo "sun"; 
		}
	}if($sche=='2'){
	if($week3 == '月'){
		echo "mon"; 
		}elseif($week3 == '火'){
		echo "tue"; 
		}elseif($week3 == '水'){
		echo "wed"; 
		}elseif($week3 == '木'){
		echo "thu"; 
		}elseif($week3 == '金'){
		echo "fri"; 
		}elseif($week3 == '土'){
		echo "sat"; 
		}elseif($week3 == '日'){
		echo "sun"; 
		}
	}if($sche=='3'){
	if($week4 == '月'){
		echo "mon"; 
		}elseif($week4 == '火'){
		echo "tue"; 
		}elseif($week4 == '水'){
		echo "wed"; 
		}elseif($week4 == '木'){
		echo "thu"; 
		}elseif($week4 == '金'){
		echo "fri"; 
		}elseif($week4 == '土'){
		echo "sat"; 
		}elseif($week4 == '日'){
		echo "sun"; 
		}
	}if($sche=='4'){
	if($week5 == '月'){
		echo "mon"; 
		}elseif($week5 == '火'){
		echo "tue"; 
		}elseif($week5 == '水'){
		echo "wed"; 
		}elseif($week5 == '木'){
		echo "thu"; 
		}elseif($week5 == '金'){
		echo "fri"; 
		}elseif($week5 == '土'){
		echo "sat"; 
		}elseif($week5 == '日'){
		echo "sun"; 
		}
	}if($sche=='5'){
	if($week6 == '月'){
		echo "mon"; 
		}elseif($week6 == '火'){
		echo "tue"; 
		}elseif($week6 == '水'){
		echo "wed"; 
		}elseif($week6 == '木'){
		echo "thu"; 
		}elseif($week6 == '金'){
		echo "fri"; 
		}elseif($week6 == '土'){
		echo "sat"; 
		}elseif($week6 == '日'){
		echo "sun"; 
		}
	}if($sche=='6'){
	if($week7 == '月'){
		echo "mon"; 
		}elseif($week7 == '火'){
		echo "tue"; 
		}elseif($week7 == '水'){
		echo "wed"; 
		}elseif($week7 == '木'){
		echo "thu"; 
		}elseif($week7 == '金'){
		echo "fri"; 
		}elseif($week7 == '土'){
		echo "sat"; 
		}elseif($week7 == '日'){
		echo "sun"; 
		}
	}else{
		echo ""; 
		}
?></div>
  
  <div class="top_schedule_space">
    <div class="wrapper">
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485053" title="">
          <div class="top_cast_box_wrap">
          <img src="img/ai.jpg" class="" alt="">
          <p>あい</p>
          </div>
          </a>
        </div>
      </div><!--element_2-->
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485159" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nana.jpg" class="" alt="">
          <p>なな</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485258" title="">
          <div class="top_cast_box_wrap">
          <img src="img/miki.jpg" class="" alt="">
          <p>もえ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485374" title="">
          <div class="top_cast_box_wrap">
          <img src="img/test_2.jpg" class="" alt="">
          <p>みか</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485414" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>ゆうみ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485428" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>ゆうこ</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485441" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>かな</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <a href="prof.php?name2=1569485454" title="">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="">
          <p>さおり</p>
          </div>
          </a>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="体験入店">
          <p>体験入店 1</p>
          </div>
        </div>
      </div>
      <div class="element_2">
        <div class="top_schedule_box">
          <div class="top_cast_box_wrap">
          <img src="img/nophoto.jpg" class="" alt="体験入店">
          <p>体験入店 2</p>
          </div>
        </div>
      </div>                                                                                                
    </div>
    

  </div><!--page_base-->  
</div><!--page_base_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->
<!-- parallax scroll本体 -->
<script src="js/jquery.parallax-scroll.min.js"></script>
<script>
$(function() {
    $(".bg-holder").parallaxScroll({
        friction: 0.6
    });
});
</script>
<!--画像調整-->
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap").css('height',imgheight);
});
</script>
<!--画像調整-->
<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
</script>
<!--ヘッダー　プラグイン-->
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
$(function() {
var topBtn = $('#page-top-2');	
topBtn.hide();
//スクロールが100に達したらボタン表示
$(window).scroll(function () {
　if ($(this).scrollTop() > 100) {
　　topBtn.fadeIn();}
 　　　else { topBtn.fadeOut();
	}
	});
});
</script>
<!--サイド　プラグイン-->
</body>

</html>