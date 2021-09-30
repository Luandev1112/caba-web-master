<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>Aプランのホームページデモサイト</title>
<meta name="description" content="Aプランのホームページデモサイト">
<meta name="keywords" content="Aプラン">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">

<link href='instagram-feed/css/sb-instagram-standalone-2.7.3.css' rel='stylesheet' id='sb_instagram_standalone_styles-css' type='text/css' media='all' />
<link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css?ver=4.6.3' rel='stylesheet' id='sbi-font-awesome-css' type='text/css' media='all' />

<!-- フォント読み込み -->
<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Playfair+Display" rel="stylesheet">

<link rel="canonical" href="">

<meta name="format-detection" content="telephone=no"> 

</head>

<body>

<div class="clear"></div>

<div id="page_top_bg">
  <div class="page_title_area">
    <h2>Instagram</h2>
  </div>
</div>

<div class="page_base_area">
  <div class="page_base">
  
<script>
    var feed1 = {
        "accesstoken": "c21hMTUxNzEzNzc4MzYuM2E4MWE5Zi5jYWU5ZDg4NTdjNWE0ZGVjOTAzODlkNTA3NzA1ZGE2Ng==.Nzc3MTc0MzY5NDk5NA==.c2hid3d3LmNhYmEtd2ViLmNvbQ==,c21hODU4MzQ5MDU0Ni4zYTgxYTlmLjQ5NTEwZDEzNWFjYTQ0NTlhM2Y5ZDZlODgyZTNhMWVi.Nzc3MTc0MzY5NDk5NA==.c2hid3d3Lm5pZ2h0Z3JhbS5jb20=",
        "type": "user", //Type of feed
        "num" : "10", //Number of posts to display
		"cols" : 5,
		"showheader" : "false",
		"imagepadding" : "1",		
		"imagepaddingunit" : "px",		
		"disablemobile" : "false",
		"showcaption" : "true",
		"showlikes" : "false",
		"res" : "auto",
		"hovercolor" : "#b6906c",
		"hovertextcolor" : "#ffffff",
		"hoverdisplay" : "date,username,likes,instagram",
		"showbutton" : "true",
		"buttoncolor" : "#ffffff",
		"buttontextcolor" : "#000000",
		"buttontext" : "MORE",
		"showfollow" : "false",
    };
 window.sbi_custom_js = function() {
    if ($(window).width() < 720) {
        if (!$('#sb_instagram').hasClass('sbShowAll')) {
            $('#sb_instagram').addClass('sbShowAll');
            $('#sb_instagram .sbi_item').slice(4).hide();
            setTimeout(function(){
                jQuery('.sbi').each(function() {
                    jQuery(this).find('.sbi_photo').css('height', jQuery(this).find('.sbi_photo').eq(0).innerWidth() );
                });
            }, 501);
            $('#sb_instagram .sbi_load_btn').click(function () {
                $('#sb_instagram .sbi_item').css('display','inline-block');
                setTimeout(function(){
                    jQuery('.sbi').each(function() {
                        jQuery(this).find('.sbi_photo').css('height', jQuery(this).find('.sbi_photo').eq(0).innerWidth() );
                    });
                }, 501);
            });
        }
    }
}; 	
</script>

<div id="sb_instagram" class="sbi" data-settings="feed1"></div>

  

  </div><!--page_base-->  
</div><!--page_base_area-->

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
<script src='instagram-feed/js/sb-instagram-standalone-2.7.3.min.js' id='sb_instagram_standalone_scripts-js' type='text/javascript'></script>

</body>

</html>