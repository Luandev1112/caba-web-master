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
        <li><a class="drawer-brand" href="hotnews.php" title="ホットニュース設定">ホットニュース設定</a></li>
        <li><a class="drawer-brand" href="schedule.php" title="当日出勤設定">当日出勤設定</a></li>                
        <li><a class="drawer-brand" href="schedule_week.php" title="1週間出勤設定">1週間出勤設定</a></li> 
        <li><a class="drawer-brand" href="cast.php" title="キャスト設定">キャスト設定</a></li>
        <li><a class="drawer-brand" href="cast_sort.php" title="キャスト並び替え">キャスト並び替え</a></li>
        <li><a class="drawer-brand" href="event.php" title="カレンダー設定">カレンダー設定</a></li>
        <li><a class="drawer-brand" href="coupon.php" title="クーポン設定">クーポン設定</a></li>                
        <li><a class="drawer-brand" href="shopphoto.php" title="店内写真設定">店内写真設定</a></li>        
        <li><a class="drawer-brand" href="topbanner.php" title="トップバナー設定">トップバナー設定</a></li>
        <li><a class="drawer-brand" href="slider.php" title="店舗 スライダー設定">店舗 スライダー設定</a></li>
        <li><a class="drawer-brand" href="slider_group.php" title="グループ スライダー設定">グループ スライダー設定</a></li>
        <li><a class="drawer-brand" href="slider_rec.php" title="求人 スライダー設定">求人 スライダー設定</a></li>
        <li><a class="drawer-brand" href="contact.php" title="お問合せ">お問合せ</a></li>     
        <li><a class="drawer-brand" href="mypage.php" title="マイページ">マイページ</a></li>
        <li><a class="drawer-brand" href="" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="login_top.php" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1>
    <li class="menu__single">
      <a href="hotnews.php" title="ホットニュース設定">ホットニュース設定</a>
    </li>     
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャスト出勤設定">キャスト出勤設定</a>
        <ul class="menu__second-level">
            <li><a href="schedule.php" title="当日出勤設定">当日出勤設定</a></li>
            <li><a href="schedule_week.php" title="1週間出勤設定">1週間出勤設定</a></li>            
        </ul>
    </li>
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャスト設定">キャスト設定</a>
        <ul class="menu__second-level">
            <li><a href="cast.php" title="プロフィール設定">プロフィール設定</a></li>
            <li><a href="cast_sort.php" title="キャスト並び替え">キャスト並び替え</a></li>
        </ul>
    </li>
    <li class="menu__single">
      <a href="event.php" title="カレンダー設定">カレンダー設定</a>
    </li>
    <li class="menu__single">
      <a href="coupon.php" title="クーポン設定">クーポン設定</a>
    </li>    
    <li class="menu__single">
      <a href="shopphoto.php" title="店内写真設定">店内写真設定</a>
    </li>                 
    <li class="menu__single">
        <a href="#" class="init-bottom" title="各画像設定">各画像設定</a>
        <ul class="menu__second-level">
            <li><a href="topbanner.php" title="トップバナー設定">トップバナー設定</a></li>
            <li><a href="slider.php" title="スライダー設定">店舗スライダー設定</a></li>
            <li><a href="slider_group.php" title="グループスライダー設定">グループスライダー設定</a></li>
            <li><a href="slider_rec.php" title="求人スライダー設定">求人スライダー設定</a></li>            
        </ul>
    </li>
    <li class="menu__single">
        <a href="#" class="init-bottom" title="お客様情報">設定・確認</a>
        <ul class="menu__second-level">
            <li><a href="mypage.php" title="マイページ">マイページ</a></li>
            <li><a href="contact.php" title="お問合せ">お問合せ</a></li>                       
            <li><a href="" title="ホームページ確認">ホームページ確認</a></li>
        </ul>
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