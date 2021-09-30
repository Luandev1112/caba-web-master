<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店内写真設定｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　店内写真設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

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

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>店内写真設定</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="" method="post" id="form">  
  <div class="castnew_category_area_2">
    <h3>写真登録</h3>
    
    <div class="shopphoto_page_1">
    <p>
    <label><span>ROOM名（<font color="#CC0000">必須</font>）</span><input type="text" name="ROOM名" class="txtfiled" placeholder="例）Main Room" required></label>
    </p>
    </div>    
    <table>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">1枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />          
          <img src="img/nao-2.jpg" class="castphoto_contain"><br />        
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>                    
          <div class="sakujyo_check">
          <label>
            <input type="checkbox" name="delete9" value="delete" />削除する
          </label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">2枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />
          <img src="img/nophoto_2.jpg" class="castphoto_contain"><br />         
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
          <div class="sakujyo_check">
          <label>
            <input type="checkbox" name="delete9" value="delete" />削除する
          </label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">3枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />
          <img src="img/nophoto_2.jpg" class="castphoto_contain"><br />   
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
        4枚目<br />
        <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span>        
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
        </td>
      </tr>                                                                  
    </table>
    
    <div class="shopphoto_page_area">
    <div class="shopphoto_page_2">
    <p>
    <label><span>ROOM名（<font color="#CC0000">必須</font>）</span><input type="text" name="ROOM名" class="txtfiled" placeholder="例）VIP Room" required></label>
    </p>
    </div>    
    <table>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">1枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />          
          <img src="img/nao-2.jpg" class="castphoto_contain"><br />        
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>                    
          <div class="sakujyo_check">
          <label>
            <input type="checkbox" name="delete9" value="delete" />削除する
          </label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">2枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />
          <img src="img/nao-2.jpg" class="castphoto_contain"><br />         
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
          <div class="sakujyo_check">
          <label>
            <input type="checkbox" name="delete9" value="delete" />削除する
          </label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
        3枚目<br />
        <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span>
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
        4枚目<br />
        <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span>        
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
        </td>
      </tr>                                                                  
    </table>
    </div>
    
    <div class="shopphoto_page_area">
    <div class="shopphoto_page_2">
    <p>
    <label><span>ROOM名（<font color="#CC0000">必須</font>）</span><input type="text" name="ROOM名" class="txtfiled" placeholder="例）Excellent Room" required></label>
    </p>
    </div>    
    <table>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">1枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />          
          <img src="img/nao-2.jpg" class="castphoto_contain"><br />        
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>                    
          <div class="sakujyo_check">
          <label>
            <input type="checkbox" name="delete9" value="delete" />削除する
          </label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
          <div class="castphoto_number">2枚目</div>
          <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span><br />
          <img src="img/nao-2.jpg" class="castphoto_contain"><br />         
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
          <div class="sakujyo_check">
          <label>
            <input type="checkbox" name="delete9" value="delete" />削除する
          </label>
          </div>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
        3枚目<br />
        <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span>
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
        </td>
      </tr>
      <tr>
        <td class="t_td10">
        4枚目<br />
        <span class="castnew_td_txt_2">※推奨サイズ横900px 縦600px</span>        
        </td>
        <td class="t_td10-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>
        </td>
      </tr>                                                                  
    </table>
    </div>        
  </div>

  <div class="castphoto_button">
  <button type="submit" class="formbtn_2">登録する</button>
  </div>
  </form>

  

  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>