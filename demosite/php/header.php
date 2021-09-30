<?php
echo <<<GOLGO
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li>
          <div class="wrapper_sidemenu">
            <div class="element_sidemenu"><a href="tel:" class="btn_sidemenu">TEL</a></div>
            <div class="element_sidemenu"><a href="https://goo.gl/maps/Z5Zf5Cp9W5q" class="btn_sidemenu">MAP</a></div>
          </div>
        </li>
        <li><a class="drawer-brand" href="index.php" title="">HOME</a></li>
        <li><a class="drawer-brand" href="hotnews.php" title="">HOT NEWS</a></li>        
        <li><a class="drawer-brand" href="cast.php" title="">CAST LIST</a></li>
        <li><a class="drawer-brand" href="system.php" title="">SYSTEM</a></li>
        <li><a class="drawer-brand" href="shopphoto.php" title="">SHOP PHOTO</a></li>		
        <li><a class="drawer-brand" href="recruit.php" title="">RECRUIT</a></li>    
        <li>
          <div class="wrapper_side">
            <div class="element_sns"><a href="https://www.facebook.com/" target="_blank" title="<?php echo $seo; ?>Facebook"><img src="img/facebook_2.svg" alt="<?php echo $seo; ?>Facebook" /></a></div>          
            <div class="element_sns"><a href="https://www.instagram.com/" target="_blank" title="<?php echo $seo; ?>Instagram"><img src="img/instagram_2.svg" alt="<?php echo $seo; ?>Instagram" /></a></div>          
            <div class="element_sns"><a href="https://twitter.com/" target="_blank" title="<?php echo $seo; ?>Twitter"><img src="img/twitter_2.svg" alt="<?php echo $seo; ?>Twitter" /></a></div>                                  
          </div>
        </li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1>
    <li class="menu__single">
      <a href="index.php">HOME</a>
    </li>
    <li class="menu__single">
      <a href="hotnews.php">HOT NEWS</a>
    </li>  
    <li class="menu__single">
      <a href="cast.php">CAST LIST</a>
    </li>        
    <li class="menu__single">
      <a href="system.php">SYSTEM</a>
    </li>
    <li class="menu__single">
      <a href="shopphoto.php">SHOP PHOTO</a>
    </li>	            
    <li class="menu__single">
      <a href="recruit.php">RECRUIT</a>
    </li>       
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>
GOLGO;
?>