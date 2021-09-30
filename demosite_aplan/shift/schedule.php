<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>当日出勤設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　当日出勤設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/iziModal.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

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
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('#global'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.drawer-hamburger'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
</script>

<script>
$(function() {
  var $win = $(window),
      $header = $('.header_space'),
      headerHeight = $header.outerHeight(),
      startPos = 0;

  $win.on('load scroll', function() {
    var value = $(this).scrollTop();
    if ( value > startPos && value > headerHeight ) {
      $header.css('top', '-' + headerHeight + 'px');
    } else {
      $header.css('top', '0');
    }
    startPos = value;
  });
});
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
<!--サイド　プラグイン-->

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

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>当日出勤設定</h2>
  
<div class="page_base_in"> 

  <div class="page_base_box_top">
  <h3>10月10日(月)の出勤設定</h3>
  </div> 
  
  <div class="page_base_box">
  <h3>体験人数の設定</h3>
    <div class="todayscast_button"><a href="taiken.php" class="btn_2">体験人数を設定する</a></div> 
  </div>
  
  <div class="page_base_box_2">
  <h3>出勤を設定</h3>
  
  <div class="todayscast_attention">
  ※出勤を選択後、最後に必ず「送信」ボタンを押して下さい。<br />
  「送信」ボタンを押さないと反映されません。<br />
  <br />
  ※当日出勤は朝5:00にリセットされます。
  </div>
  
  <form action="" method="post">
  <div class="wrapper">
    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today1" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today1" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji_no">非表示</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today2" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today2" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/nao-1.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today3" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today3" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->
 
    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today4" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today4" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today5" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today5" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today6" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today6" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today7" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today7" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today8" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today8" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today9" value="お休み" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today9" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>

        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end--> 

    <div class="element_cast">
      <div class="top_cast_box">
        <div class="top_cast_box_wrap">
          <img src="img/test_3.jpg">
        </div>

      <div class="top_cast_box_button">
        <div class="todayscast_hyouji">表示中</div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_1">
            <p>
            <label><input type="radio" name="today10" value="2" checked="checked" /><span class="todayscast_box_font">お休み</span></label>
            </p>
          </div>
        </div>
        <div class="top_cast_box_button_a">
          <div class="todayscast_box_2">
            <p>
            <label><input type="radio" name="today10" value="出勤" /><span class="todayscast_box_font">出勤</span></label>
            </p>
          </div>
        </div>
        <div class="clear"></div>
      </div>      
      <div class="top_cast_box_name">なお</div>
      </div>
    </div><!--element_1 end-->                                    
  </div><!--wrapper-->
  
      <div class="todayscast_button_2">
      <button type="submit" class="formbtn_2">出勤を送信</button>
      </div>  
  </form>
  

    
  </div><!--page_base_box-->

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>