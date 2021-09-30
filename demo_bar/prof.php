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
<title>ガールズバー　デモサイト「club CABAWEB キャバウェブ」</title>
<meta name="description" content="ガールズバーデモサイトです。">
<meta name="keywords" content="ガールズバー,デモサイト">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link rel="stylesheet" href="photoswaipe/dist/photoswipe.css"/>
<link rel="stylesheet" href="photoswaipe/default-skin/default-skin.css"/>

<link href='instagram-feed/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

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
    <h2>PROFILE</h2>
  </div>
</div>

<div class="page_base_area_2">
  <div class="page_base">

    <!--div class="prof_page_title">PHOTO</div-->
  
    <div class="wrapper">
      <div class="element_prof_2">
        <div class="prof_page_a">
        <div class="top_cast_box_wrap">
			<?php
//プロフィールメイン写真
//写真を表示
	if($photo1 == $empty){
	echo "<img src=\"img/nophoto.jpg\" alt=\"".$name."\" />\n";
}else{
	echo "<img src=\"https://www.caba-web.com/client_admin/".$photo1.".jpg\" alt=\"".$name."\" />\n";
}

?>
        </div>

        <div class="prof_page_gallery_2">
          <div class="wrapper my-gallery">
			  <?php 
			  if($photo2 == $empty){
	echo "";
}else{
$url2 = "https://www.caba-web.com/client_admin/".$photo2.".jpg";
list($width,$height) = getimagesize($url2);
				  if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo2.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo3 == $empty){
	echo "";
}else{
$url3 = "https://www.caba-web.com/client_admin/".$photo3.".jpg";
list($width,$height) = getimagesize($url3);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo3.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo4 == $empty){
	echo "";
}else{
$url4 = "https://www.caba-web.com/client_admin/".$photo4.".jpg";
list($width,$height) = getimagesize($url4);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo4.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo5 == $empty){
	echo "";
}else{
$url5 = "https://www.caba-web.com/client_admin/".$photo5.".jpg";
list($width,$height) = getimagesize($url5);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo5.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo6 == $empty){
	echo "";
}else{
$url6 = "https://www.caba-web.com/client_admin/".$photo6.".jpg";
list($width,$height) = getimagesize($url6);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo6.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo7 == $empty){
	echo "";
}else{
$url7 = "https://www.caba-web.com/client_admin/".$photo7.".jpg";
list($width,$height) = getimagesize($url7);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo7.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo8 == $empty){
	echo "";
}else{
$url8 = "https://www.caba-web.com/client_admin/".$photo8.".jpg";
list($width,$height) = getimagesize($url8);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo8.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  if($photo9 == $empty){
	echo "";
}else{
$url9 = "https://www.caba-web.com/client_admin/".$photo9.".jpg";
list($width,$height) = getimagesize($url9);				
		if($width<$height){
		echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_tate\"><img src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";
				  }else{
					  echo "<figure class=\"element_prof_3\"><a href=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" data-size=\"".$width."x".$height."\" \"><div class=\"top_cast_box_wrap_yoko\"><img src=\"https://www.caba-web.com/client_admin/".$photo9.".jpg?".$koshin."\" alt=\"".$seo."\" /></div></a></figure>";			  
				  }
	}
			  ?>                                                                      
          </div>
          <div class="clear"></div>
        </div>        
        </div><!--prof_page_a-->
      </div><!--element_prof_2-->
              
      <div class="element_prof_2">       
        <div class="castprof_box_3">
        <table>
          <tr>
            <td class="t_td3">名前</td>
            <td class="t_td4"><div class="prof_page_name"><?php echo $name; ?><span style="font-size:60%;font-weight: 300; padding-left:10px;">（<?php echo $age; ?>）</span> </div></td>
          </tr> 
          <tr>
            <td class="t_td3">誕生日</td>
            <td class="t_td4"><?php echo $profinfo1; ?></td>
          </tr> 
          <tr>
            <td class="t_td3">血液型</td>
            <td class="t_td4"><?php echo $profinfo2; ?></td>
          </tr>
          <tr>
            <td class="t_td3">出身地</td>
            <td class="t_td4"><?php echo $profinfo3; ?></td>
          </tr>
          <tr>
            <td class="t_td3">資格・特技</td>
            <td class="t_td4"><?php echo $profinfo4; ?></td>
          </tr>
          <tr>
            <td class="t_td3">好みのタイプ</td>
            <td class="t_td4"><?php echo $profinfo5; ?></td>
          </tr>
          <tr>
            <td class="t_td3">好きな食べ物</td>
            <td class="t_td4"><?php echo $profinfo6; ?></td>
          </tr>
          <tr>
            <td class="t_td3">好きなブランド</td>
            <td class="t_td4"><?php echo $profinfo7; ?></td>
          </tr>
          <tr>
            <td class="t_td3">チャームポイント</td>
            <td class="t_td4"><?php echo $profinfo8; ?></td>
          </tr>          
          <tr>
            <td class="t_td3">ひとこと</td>
            <td class="t_td4"><?php echo $comment; ?></td>
          </tr>                                                                                                    
        </table>
        </div><!--castprof_box-->

        <div class="prof_page_sns">
          <div class="wrapper_2">
			  <?php 
		if ($profinfo9 == $empty && $profinfo10 == $empty && $profinfo11 == $empty) {
			echo "";
		}else{
			if ($profinfo9 == $empty) {
			echo "";
		}else{
			echo "<div class=\"element_cast_sns\">
            <a href=\"".$profinfo9."\" target=\"_blank\" title=\"Instagram\"><img src=\"img/cast_instagram.svg\" alt=\"Instagram\"></a></div>";
			}
			if ($profinfo10 == $empty) {
			echo "";
		}else{
			echo "<div class=\"element_cast_sns\">
            <a href=\"".$profinfo10."\" target=\"_blank\" title=\"Twitter\"><img src=\"img/cast_twitter.svg\" alt=\"Twitter\"></a></div>";
			}
			if ($profinfo11 == $empty) {
			echo "";
		}else{
			echo "<div class=\"element_cast_sns\">
            <a href=\"".$profinfo11."\" target=\"_blank\" title=\"ブログ\"><img src=\"img/cast_blog.svg\" alt=\"ブログ\"></a></div>";
			}
		}
		?>                     
          </div>
        </div>
        
      </div><!--element_prof_2-->
    </div><!--wrapper-->

    <div class="castprof_box_blog">
		
		<?php 
		if ($comment2 == $empty) {
			echo "";
		}else{
			echo "<div class=\"prof_page_title\">INSTAGRAM</div>
      <script src=\"https://apps.elfsight.com/p/platform.js\" defer></script>".$comment2."";
			}
			?>
          
    </div>

  </div><!--page_base-->  
</div><!--page_base_area-->

  <?php include ('php/footer.php'); ?>

</main>

</div>

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
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap_2").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap_2").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap_2").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap_2").css('height',imgheight);
});
</script>
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap_yoko").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap_yoko").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap_yoko").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap_yoko").css('height',imgheight);
});
</script>
<script>
$(document).ready(function () {
    var imgWidth = $(".top_cast_box_wrap_tate").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap_tate").css('height',imgheight);
});
$(window).resize(function () {  
    var imgWidth = $(".top_cast_box_wrap_tate").width();
    var imgheight = (imgWidth*1.0);
    $(".top_cast_box_wrap_tate").css('height',imgheight);
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