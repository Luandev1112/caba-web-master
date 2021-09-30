<?php

//設定ファイル読み込み
require_once 'php/conf.php';

require_once 'php/parts/function.php';

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャバクラ　デモサイト「club CABAWEB キャバウェブ」</title>
<meta name="description" content="キャバクラデモサイトです。">
<meta name="keywords" content="キャバクラ,デモサイト">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">

<link rel="canonical" href="">
<meta name="robots" content="noindex,nofollow">

</head>

<body>

<div id="top_fade">

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>RECRUIT</h2>
  </div>
</div>

<div class="rec_page_area">
  <div class="page_base">
    <div class="rec_page_box">
      <div class="rec_page_box_img"><img src="img/recruit_1.jpg" alt="キャスト求人・体験入店"></div>
      <div class="rec_page_title">給与</div>      
      <div class="rec_page_pay_1"><span class="rec_page_pay_2">体験時給</span> 3,500<span class="rec_page_pay_2">円～</span></div>
      <div class="rec_page_pay_1-2"><span class="rec_page_pay_2-2">本入店時給</span> 3,000<span class="rec_page_pay_2-2">円～</span></div>
      <div class="rec_page_pay_3">
      全額日払い<br />
      各種バックあり<br />
      指名バック・ドリンクバック 100%
      </div>                   
    </div><!--rec_page_box-->
  </div><!--page_base-->
</div><!--rec_page_area-->    

<div class="rec_page_message_area">
  <div class="page_base">
    <div class="rec_page_box">
      <div class="rec_page_title">メッセージ</div>
      <div class="rec_page_message_1">
      未経験者・経験者大募集<br />
      只今、求人強化キャンペーン実施中!!<br />
      </div> 
      <div class="rec_page_message_2">
      未経験の方は当店で働いてみませんか？<br />
      未経験でも安心してください！スタッフが1からサポート致します。<br />
      <br />
      もしろん経験者の方も大歓迎です!!<br />
      他店から移籍する場合は以前のお店より良い待遇をご用意してます。
      </div>
      
      <div class="wrapper">
        <div class="element_rec">
          <div class="rec_page_message_box">
          <div class="rec_page_message_box_img"><img src="img/rec_1.jpg" alt="キャスト求人・体験入店"></div>
          <div class="rec_page_message_box_title">未経験者の方へ</div>
          <div class="rec_page_message_box_naiyou">
          未経験の方でも安心して働けるように当店ではサポート体制を強化しています。<br />
          <br />
          未経験でも稼げるように報酬・待遇面が他店より強化しています。<br />
          さらに担当マネージャー制なので疑問や悩みはすぐに相談できる体制になっています。<br />
          <br />
          だから未経験もで安心して働けるのです。
          </div>
          </div>
        </div>
        <div class="element_rec">
          <div class="rec_page_message_box">
          <div class="rec_page_message_box_img"><img src="img/rec_2.jpg" alt="キャスト求人・体験入店"></div>
          <div class="rec_page_message_box_title">経験者の方へ</div>
          <div class="rec_page_message_box_naiyou">
          当店では経験者の方・移籍したい方の採用を強化しています。<br />
          <br />
          移籍したい方は現在の給与明細をお持ちいただくと今以上のお給与をお約束します。<br />
          <br />
          今以上に輝けるようにサポート致しますのでご安心下さい。
          </div>
          </div>
        </div>
      </div>
                       
    </div><!--rec_page_box-->
  </div><!--page_base-->    
</div><!--rec_page_message_area--> 

<div class="rec_page_taiguu_area">
  <div class="page_base">
    <div class="rec_page_box">
      <div class="rec_page_title">待遇</div>
      <div class="wrapper_2">
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-4.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">送迎無料</div>
          <div class="rec_taiguu_box_naiyou">
          送迎無料だからお酒を飲んでも大丈夫です。
          </div>
          </div>
        </div><!--element_service-->      
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-1.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">全額日払いOK</div>
          <div class="rec_taiguu_box_naiyou">
          その日が給料日です。
          </div>
          </div>
        </div><!--element_service-->
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-2.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">ヘアメイクあり</div>
          <div class="rec_taiguu_box_naiyou">
          プロのスタイリストさんを完備しています。
          </div>
          </div>
        </div><!--element_service-->        
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-3.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">ドレス無料貸出</div>
          <div class="rec_taiguu_box_naiyou">
          無料でドレスをレンタルします。
          </div>
          </div>
        </div><!--element_service-->
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-5.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">未経験者大歓迎</div>
          <div class="rec_taiguu_box_naiyou">
          未経験でもスタッフが丁寧にサポートします。
          </div>
          </div>
        </div><!--element_service-->                
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-6.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">経験者さん優遇</div>
          <div class="rec_taiguu_box_naiyou">
          経験者の方は優遇してお出迎えします。
          </div>
          </div>
        </div><!--element_service-->        
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-7.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">ピアス・ネイル自由</div>
          <div class="rec_taiguu_box_naiyou">
          オシャレにお仕事できます。
          </div>
          </div>
        </div><!--element_service-->                                        
        <div class="element_taigu">
          <div class="rec_taiguu_box">
          <img src="img/taiguu-8.svg" alt="キャスト求人・体験入店">
          <div class="rec_taiguu_box_txt">ノルマ・罰金無し</div>
          <div class="rec_taiguu_box_naiyou">
          ノルマや罰金は一切ありません。
          </div>
          </div>
        </div><!--element_service-->                
        
      </div><!--wrapper_2-->                
    </div><!--rec_page_box-->
  </div><!--page_base-->        
</div><!--page_base_area--> 

<div class="rec_page_area">
  <div class="page_base">
    <div class="rec_page_box">
      <div class="rec_page_title">募集要項</div>
      <div class="rec_page_table_base">
        <table>
          <tr>
            <td class="t_td_rec1">
            職種
            </td>
            <td class="t_td_rec2">
            キャバクラ
            </td>
          </tr>
          <tr>
            <td class="t_td_rec1">
            資格
            </td>
            <td class="t_td_rec2">
            18歳以上（高校生不可）<br />
            経験者・未経験者大歓迎
            </td>
          </tr>
          <tr>
            <td class="t_td_rec1">
            勤務時間
            </td>
            <td class="t_td_rec2">
            21:00～LAST
            </td>
          </tr>
          <tr>
            <td class="t_td_rec1">
            定休日
            </td>
            <td class="t_td_rec2">
            日曜日
            </td>
          </tr>                                                                     
        </table>
    </div>
    </div>  

    
    <div class="rec_page_contact_box">
    <a href="contact.php" class="btn_contact">ご応募はこちら</a>
    </div>    

  </div><!--page_base-->  
</div><!--rec_page_area-->


<div class="rec_page_staff_area" id="staff">
  <div class="page_base">  
    <div class="rec_page_box">
      <div class="rec_page_box_img"><img src="img/recruit_2.jpg" alt="正社員・スタッフ求人"></div>    
      <div class="rec_page_title">男子スタッフ大募集</div>

      <div class="rec_page_staff_pay_1"><span class="rec_page_staff_pay_2">初任給</span> 300,000<span class="rec_page_staff_pay_2">円</span></div>     
      <div class="rec_page_staff_pay_1-2"><span class="rec_page_staff_pay_2-2">アルバイト 時給</span> 1,300<span class="rec_page_staff_pay_2-2">円</span></div>                  
      <div class="rec_page_pay_3">
      各種手当てあり
      </div>
      
      <div class="rec_page_staff_comment">
      キャバクラ運営スタッフ大募集中です!!<br />
      キャバクラの店舗運営スタッフとして働いてみませんか？<br />
      ナイトビジネスでは珍しい社会保障が完備しています。<br />
      お気軽にお問合せ下さい。
      </div>

      <div class="rec_page_table_base">
        <table>
          <tr>
            <td class="t_td_rec1">
            資格
            </td>
            <td class="t_td_rec2">
            18歳以上（高校生不可）<br />
            ※要普通免許<br />
            男女問いません!経験者・未経験者大歓迎!
            </td>
          </tr>
          <tr>
            <td class="t_td_rec1">
            仕事内容
            </td>
            <td class="t_td_rec2">
            接客・キッチン・店舗運営
            </td>
          </tr>
          <tr>
            <td class="t_td_rec1">
            待遇
            </td>
            <td class="t_td_rec2">
            交通費支給・寮完備・社会保障完備・社員旅行あり
            </td>
          </tr>
          <tr>
            <td class="t_td_rec1">
            勤務時間
            </td>
            <td class="t_td_rec2">
            19:00～LAST
            </td>
          </tr>           
          <tr>
            <td class="t_td_rec1">
            定休日
            </td>
            <td class="t_td_rec2">
            日曜日+3日
            </td>
          </tr>                                                                     
        </table>
    </div>
    </div>  

    
    <div class="rec_page_contact_box">
    <a href="contact.php" class="btn_contact">ご応募はこちら</a>
    </div>    

  </div><!--page_base-->  
</div><!--rec_page_area-->


  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</div>

<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. 
		 It's a separate element as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides. 
			PhotoSwipe keeps only 3 of them in the DOM to save memory.
			Don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" title="Close (Esc)"></button>

				<button class="pswp__button pswp__button--share" title="Share"></button>

				<button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

				<button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

				<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
					  <div class="pswp__preloader__cut">
						<div class="pswp__preloader__donut"></div>
					  </div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div> 
			</div>

			<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
			</button>

			<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
			</button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>

		</div>

	</div>

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
<!--ヘッダー　プラグイン-->
<script>
$(document).ready(function() {
$('.drawer').drawer();
});
userFeed.run();
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
<!-- JavaScriptの読み込み -->
<script src="photoswaipe/dist/photoswipe.min.js"></script>
<script src="photoswaipe/dist/photoswipe-ui-default.min.js"></script>
<script>
var initPhotoSwipeFromDOM = function(gallerySelector) {

	// parse slide data (url, title, size ...) from DOM elements 
	// (children of gallerySelector)
	var parseThumbnailElements = function(el) {
		var thumbElements = el.childNodes,
			numNodes = thumbElements.length,
			items = [],
			figureEl,
			linkEl,
			size,
			item;

		for(var i = 0; i < numNodes; i++) {

			figureEl = thumbElements[i]; // <figure> element

			// include only element nodes 
			if(figureEl.nodeType !== 1) {
				continue;
			}

			linkEl = figureEl.children[0]; // <a> element

			size = linkEl.getAttribute('data-size').split('x');

			// create slide object
			item = {
				src: linkEl.getAttribute('href'),
				w: parseInt(size[0], 10),
				h: parseInt(size[1], 10)
			};



			if(figureEl.children.length > 1) {
				// <figcaption> content
				item.title = figureEl.children[1].innerHTML; 
			}

			if(linkEl.children.length > 0) {
				// <img> thumbnail element, retrieving thumbnail url
				item.msrc = linkEl.children[0].getAttribute('src');
			} 

			item.el = figureEl; // save link to element for getThumbBoundsFn
			items.push(item);
		}

		return items;
	};

	// find nearest parent element
	var closest = function closest(el, fn) {
		return el && ( fn(el) ? el : closest(el.parentNode, fn) );
	};

	// triggers when user clicks on thumbnail
	var onThumbnailsClick = function(e) {
		e = e || window.event;
		e.preventDefault ? e.preventDefault() : e.returnValue = false;

		var eTarget = e.target || e.srcElement;

		// find root element of slide
		var clickedListItem = closest(eTarget, function(el) {
			return (el.tagName && el.tagName.toUpperCase() === 'FIGURE');
		});

		if(!clickedListItem) {
			return;
		}

		// find index of clicked item by looping through all child nodes
		// alternatively, you may define index via data- attribute
		var clickedGallery = clickedListItem.parentNode,
			childNodes = clickedListItem.parentNode.childNodes,
			numChildNodes = childNodes.length,
			nodeIndex = 0,
			index;

		for (var i = 0; i < numChildNodes; i++) {
			if(childNodes[i].nodeType !== 1) { 
				continue; 
			}

			if(childNodes[i] === clickedListItem) {
				index = nodeIndex;
				break;
			}
			nodeIndex++;
		}



		if(index >= 0) {
			// open PhotoSwipe if valid index found
			openPhotoSwipe( index, clickedGallery );
		}
		return false;
	};

	// parse picture index and gallery index from URL (#&pid=1&gid=2)
	var photoswipeParseHash = function() {
		var hash = window.location.hash.substring(1),
		params = {};

		if(hash.length < 5) {
			return params;
		}

		var vars = hash.split('&');
		for (var i = 0; i < vars.length; i++) {
			if(!vars[i]) {
				continue;
			}
			var pair = vars[i].split('=');  
			if(pair.length < 2) {
				continue;
			}		   
			params[pair[0]] = pair[1];
		}

		if(params.gid) {
			params.gid = parseInt(params.gid, 10);
		}

		if(!params.hasOwnProperty('pid')) {
			return params;
		}
		params.pid = parseInt(params.pid, 10);
		return params;
	};

	var openPhotoSwipe = function(index, galleryElement, disableAnimation) {
		var pswpElement = document.querySelectorAll('.pswp')[0],
			gallery,
			options,
			items;

		items = parseThumbnailElements(galleryElement);

		// define options (if needed)
		options = {
			index: index,

			// define gallery index (for URL)
			galleryUID: galleryElement.getAttribute('data-pswp-uid'),

			getThumbBoundsFn: function(index) {
				// See Options -> getThumbBoundsFn section of documentation for more info
				var thumbnail = items[index].el.getElementsByTagName('img')[0], // find thumbnail
					pageYScroll = window.pageYOffset || document.documentElement.scrollTop,
					rect = thumbnail.getBoundingClientRect(); 

				return {x:rect.left, y:rect.top + pageYScroll, w:rect.width};
			}

		};

		if(disableAnimation) {
			options.showAnimationDuration = 0;
		}

		// Pass data to PhotoSwipe and initialize it
		gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
		gallery.init();
	};

	// loop through all gallery elements and bind events
	var galleryElements = document.querySelectorAll( gallerySelector );

	for(var i = 0, l = galleryElements.length; i < l; i++) {
		galleryElements[i].setAttribute('data-pswp-uid', i+1);
		galleryElements[i].onclick = onThumbnailsClick;
	}

	// Parse URL and open gallery if it contains #&pid=3&gid=1
	var hashData = photoswipeParseHash();
	if(hashData.pid > 0 && hashData.gid > 0) {
		openPhotoSwipe( hashData.pid - 1 ,  galleryElements[ hashData.gid - 1 ], true );
	}
};
</script>
<script>
window.onload = function(){
	initPhotoSwipeFromDOM(".my-gallery");
}
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