<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャバクラのホームページデモサイト</title>
<meta name="description" content="キャバクラのホームページデモサイト">
<meta name="keywords" content="キャバクラ">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/jquery.bxslider.css" />
<link rel="stylesheet" href="css/drawer.min.css">

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no">

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

<!-- CSSの読み込み -->
<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>

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

<!--アニメーション　プラグイン-->
<script>
$(function(){
    $(window).scroll(function (){
        $('.fadein').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight + 50){
                $(this).addClass('scrollin');
            }
        });
    });
});
</script>
<!--アニメーション　プラグイン-->

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

</head>

<body>

<div class="drawer drawer--right">

  <?php include ('php/header.php'); ?>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>PROFILE</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">

    <div class="prof_page_title">PHOTO</div>
  
        <div class="prof_page_gallery">
          <div class="wrapper_prof my-gallery">
            <figure class="element_prof_1">
              <a href="img/ai-1.jpg" data-size="600x900">
              <img src="img/ai-1.jpg" class="img_shadow" alt="なお" />
              </a>
            </figure>
            <figure class="element_prof_1">
              <a href="img/ai-1.jpg" data-size="600x900">
              <img src="img/ai-1.jpg" class="img_shadow" alt="なお" />
              </a>
            </figure>
            <figure class="element_prof_1">
              <a href="img/ai-1.jpg" data-size="600x900">
              <img src="img/ai-1.jpg" class="img_shadow" alt="なお" />
              </a>
            </figure>
            <figure class="element_prof_1">
              <a href="img/ai-1.jpg" data-size="600x900">
              <img src="img/ai-1.jpg" class="img_shadow" alt="なお" />
              </a>
            </figure>                                                                        
          </div>
          <div class="clear"></div>
        </div>
    
    <div class="castprof_box">
      <div class="prof_page_title">PROFILE</div>
        <table>
          <tr>
            <td class="t_td3">名前</td>
            <td class="t_td4"><div class="prof_page_name">あい</div></td>
          </tr>
          <tr>
            <td class="t_td3">誕生日</td>
            <td class="t_td4">1990年11月11日</td>
          </tr> 
          <tr>
            <td class="t_td3">血液型</td>
            <td class="t_td4">A型</td>
          </tr>
          <tr>
            <td class="t_td3">出身地</td>
            <td class="t_td4">東京</td>
          </tr>
          <tr>
            <td class="t_td3">資格・特技</td>
            <td class="t_td4">料理</td>
          </tr>
          <tr>
            <td class="t_td3">好みのタイプ</td>
            <td class="t_td4">優しい人</td>
          </tr>
          <tr>
            <td class="t_td3">好きな食べ物</td>
            <td class="t_td4">焼肉・お寿司</td>
          </tr>
          <tr>
            <td class="t_td3">好きなお酒</td>
            <td class="t_td4">ワイン</td>
          </tr>
          <tr>
            <td class="t_td3">好きなブランド</td>
            <td class="t_td4">グッチ</td>
          </tr>
          <tr>
            <td class="t_td3">チャームポイント</td>
            <td class="t_td4">エクボ</td>
          </tr>
          <tr>
            <td class="t_td3">ひとこと</td>
            <td class="t_td4">一緒に飲みましょう♪</td>
          </tr>                                                                                                    
        </table>
    </div>


  </div><!--page_base-->  
</div><!--page_base_area-->

  <?php include ('php/footer.php'); ?>

</main>

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

</body>

</html>