<?php
echo <<<GOLGO
  <header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php" title="ホーム">ホーム</a></li>
        <li><a class="drawer-brand" href="customer.php" title="顧客管理">顧客管理</a></li> 
        <li><a class="drawer-brand" href="" title="設定">―</a></li> 
        <li><a class="drawer-brand" href="" title="設定">―</a></li> 
        <li><a class="drawer-brand" href="" title="設定">―</a></li>                
        <li><a class="drawer-brand" href="" title="設定">―</a></li>     
        <li><a class="drawer-brand" href="" title="設定">―</a></li>
        <li><a class="drawer-brand" href="" title="設定">―</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="login_top.php" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1>
    <li class="menu__single">
      <a href="login_top.php" title="ホーム">ホーム</a>
    </li>                  
    <li class="menu__single">
      <a href="customer.php" title="顧客管理">顧客管理</a>
    </li>
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>             
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li> 
    <li class="menu__single">
      <a href="" title="設定">―</a>
    </li>            
</ul>
</div>

<div class="header_space">
  <div class="header_space_img"><h1><a href="login_top.php" title=""><img src="img/logo.svg" alt=""></a></h1></div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>
GOLGO;
?>