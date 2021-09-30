<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>新規キャスト登録｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　新規キャスト登録">

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
  <h2>新規キャスト登録</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
    
    <div class="castnew_top">
    最後に必ず「登録」ボタンを押して下さい。<br />
    「登録」ボタンを押さないと反映されません。
    </div>
    
    <form action="" method="post" id="form">
    <p>
    <label><span>お名前（<font color="#CC0000">必須</font>）</span><input type="text" name="お名前" class="txtfiled" placeholder="例）ゆうこ" required></label>
    </p>
    <p>
    <label><span>年齢</span>
    <select name="年齢">
    <option value="--">--</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>        
    </select>
    </label>
    </p>
    <p>
    <label><span>お誕生日</span><input type="text" name="お誕生日" class="txtfiled" placeholder="例）1990年4月4日"></label>
    </p>
    <p>
    <label><span>血液型</span>
    <select name="血液型">
    <option value="--">--</option>
    <option value="A型">A型</option>
    <option value="B型">B型</option>
    <option value="O型">O型</option>
    <option value="AB型">AB型</option>        
    </select>
    </label>
    </p>
    <p>
    <label><span>出身地</span><input type="text" name="出身地" class="txtfiled" placeholder="例）東京"></label>
    </p>
    <p>
    <label><span>趣味・特技</span><input type="text" name="趣味・特技" class="txtfiled" placeholder="例）料理"></label>
    </p>    
    <p>
    <label><span>好みのタイプ</span><input type="text" name="好みのタイプ" class="txtfiled" placeholder="例）優しい人"></label>
    </p>
    <p>
    <label><span>好きな食べ物</span><input type="text" name="好きな食べ物" class="txtfiled" placeholder="例）お寿司・焼き肉"></label>
    </p>
    <p>
    <label><span>好きなブランド</span><input type="text" name="好きなブランド" class="txtfiled" placeholder="例）グッチ"></label>
    </p>
    <p>
    <label><span>チャームポイント</span><input type="text" name="チャームポイント" class="txtfiled" placeholder="例）目"></label>
    </p>    
    <p>
    <label><span>ひとこと</span><textarea name="ひとこと" class="txtfiled" placeholder="例）一緒に楽しもう★" rows="5"></textarea></label>
    </p> 
 
  <div class="castnew_blog_area">
    <h3>SNS登録</h3>
    <p>
    <label><span>Instagram URL</span><input type="url" name="Instagram URL" class="txtfiled" placeholder="例）https://www.instagram.com/"></label>
    </p>
    <p>
    <label><span>Twitter URL</span><input type="url" name="Twitter URL" class="txtfiled" placeholder="例）https://twitter.com/"></label>
    </p>
    <p>
    <label><span>Amebloなどのブログ URL</span><input type="url" name="blog URL" class="txtfiled" placeholder="例）https://ameblo.jp/"></label>
    </p>        
  </div>

  <div class="castnew_blog_area">
    <h3>Instagram 詳細</h3>
    <p>
    <label><span>Instagram Key</span><input type="url" name="Instagram Key" class="txtfiled" placeholder="管理者専用になります。"></label>
    </p>
    <p>
    <label><span>Instagram ID</span><input type="url" name="Twitter URL" class="txtfiled" placeholder="IDが入ります。"></label>
    </p>
    <p>
    <label><span>Instagram PASS</span><input type="url" name="blog URL" class="txtfiled" placeholder="PASSが入ります。"></label>
    </p>        
  </div>                      
  
  <div class="castnew_photo_area">
    <h3>写真登録</h3>
    
    <table>
      <tr>
        <td class="t_td9">サムネイル<br /><span class="castnew_td_txt_2">※推奨サイズ横600px 縦600px</span></td>
        <td class="t_td9-2">
          <label class="file-btn">
          <div class="file-btn2">アップロード</div>
          <div class="view_box">
          <input type="file" class="file" />
          </div>
          </label>                    
        </td>
      </tr>
      <tr>
        <td class="t_td10">1枚目</td>
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
        <td class="t_td10">2枚目</td>
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
        <td class="t_td10">3枚目</td>
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
        <td class="t_td10">4枚目</td>
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
        <td class="t_td10">5枚目</td>
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
        <td class="t_td10">6枚目</td>
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
        <td class="t_td10">7枚目</td>
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
        <td class="t_td10">8枚目</td>
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

      <div class="todayscast_button_2">
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