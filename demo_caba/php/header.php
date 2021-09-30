<?php
echo <<<GOLGO
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">       
        <li class="drawer-first">
          <a class="drawer-brand" href="hotnews.php" title="ホットニュース">HOT NEWS</a>
        </li>
        <li>
          <a class="drawer-brand" href="schedule.php" title="出勤情報">SCHEDULE</a>
        </li>                
        <li>
          <a class="drawer-brand" href="cast.php" title="キャスト">CAST LIST</a>
        </li>
        <li>
          <a class="drawer-brand" href="event.php" title="イベントカレンダー">CALENDAR</a>
        </li>
        <li>
          <a class="drawer-brand" href="system.php" title="料金システム">SYSTEM</a>
        </li>
        <li>
          <a class="drawer-brand" href="shopphoto.php" title="店内写真">FLOOR</a>
        </li>
        <li>
          <a class="drawer-brand" href="recruit.php" title="キャスト求人情報">CAST RECRUIT</a>          
        </li>
        <li>
          <a class="drawer-brand" href="recruit.php#staff" title="スタッフ求人情報">STAFF RECRUIT</a>
        </li>
        <li>
          <div class="wrapper_sidemenu">
            <div class="element_sidemenu_1"><a href="tel:" class="btn_sidemenu"><img src="img/tel_side.svg"></a></div>
            <div class="element_sidemenu_1"><a href="https://goo.gl/maps/29ujZihpH5n" class="btn_sidemenu"><img src="img/map_side.svg"></a></div>
          </div>
        </li>                           
        <li>
          <div class="wrapper_side">
            <div class="element_sns"><a href="https://www.facebook.com/" target="_blank" title="Facebook"><img src="img/facebook_2.svg" alt="Facebook" /></a></div>          
            <div class="element_sns"><a href="https://www.instagram.com/" target="_blank" title="Instagram"><img src="img/instagram_2.svg" alt="Instagram" /></a></div>          
            <div class="element_sns"><a href="https://twitter.com/" target="_blank" title="Twitter"><img src="img/twitter_2.svg" alt="Twitter" /></a></div> 
            <div class="element_sns"><a href="https://ameblo.jp/" target="_blank" title="ブログ"><img src="img/blog_2.svg" alt="ブログ" /></a></div>                                              
          </div>
        </li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="index.php" title="キャバクラ"><img src="img/logo.svg" alt="キャバクラ"></a></h1>
    <li class="menu__single">
      <a href="hotnews.php" title="ホットニュース">HOT NEWS</a>
    </li>
    <li class="menu__single">
      <a href="schedule.php" title="出勤情報">SCHEDULE</a>
    </li>      
    <li class="menu__single">
      <a href="cast.php" title="キャスト">CAST LIST</a>
    </li>        
    <li class="menu__single">
      <a href="event.php" title="イベントカレンダー">CALENDAR</a>
    </li>
    <li class="menu__single">
      <a href="system.php" title="料金システム">SYSTEM</a>
    </li>
    <li class="menu__single">
      <a href="shopphoto.php" title="店内写真">FLOOR</a>
    </li>                
    <li class="menu__single">
        <a href="#" class="init-bottom" title="求人情報">RECRUIT</a>
        <ul class="menu__second-level">
            <li><a href="recruit.php" title="キャスト求人">キャスト求人</a></li>
            <li><a href="recruit.php#staff" title="スタッフ求人">スタッフ求人</a></li>                       
        </ul>
    </li>               
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="index.php" title="キャバクラ"><img src="img/logo.svg" alt="キャバクラ"></a></h1></div>
  <div class="clear"></div>
</div>
GOLGO;
?>