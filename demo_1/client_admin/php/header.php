<header role="banner">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only"></span>
      <span class="drawer-hamburger-icon"></span>
    </button>
    <nav class="drawer-nav" role="navigation">
      <ul class="drawer-menu">
        <li class="drawer-brand_first"><a class="drawer-brand" href="login_top.php?shop_id=<?php echo $shop_id; ?>" title="ホーム">ホーム</a></li>
        <li><a class="drawer-brand" href="hotnews.php?shop_id=<?php echo $shop_id; ?>" title="ホットニュース設定">ホットニュース設定</a></li>
        <li><a class="drawer-brand" href="schedule.php?shop_id=<?php echo $shop_id; ?>" title="当日出勤設定">当日出勤設定</a></li>            <?php 
		  if($data7 != '0'){
			  echo "<li><a class=\"drawer-brand\" href=\"schedule_week.php?shop_id=".$shop_id."\" title=\"1週間出勤設定\">1週間出勤設定</a></li>";
		  }
		  ?>     
        <li><a class="drawer-brand" href="cast.php?shop_id=<?php echo $shop_id; ?>" title="キャスト設定">キャスト設定</a></li>
        <li><a class="drawer-brand" href="cast_sort.php?shop_id=<?php echo $shop_id; ?>" title="キャスト並び替え">キャスト並び替え</a></li>
        <li><a class="drawer-brand" href="event.php?shop_id=<?php echo $shop_id; ?>" title="カレンダー設定">カレンダー設定</a></li>
		   <?php 
		  if($data7 == '3' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"coupon.php?shop_id=".$shop_id."\" title=\"クーポン設定\">クーポン設定</a></li>";
		  }
		  ?>                 
        <li><a class="drawer-brand" href="shopphoto.php?shop_id=<?php echo $shop_id; ?>" title="店内写真設定">店内写真設定</a></li>
		  <?php 
		  if($data7 == '0'){
			  echo "<li><a class=\"drawer-brand\" href=\"topbanner.php?shop_id=".$shop_id."\" title=\"トップバナー設定\">トップバナー設定</a></li>";
		  }
		  ?>
		  <?php 
		  if($data7 == '1' ||$data7 == '2' || $data7 == '3' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider.php?shop_id=".$shop_id."\" title=\"店舗 スライダー設定\">店舗 スライダー設定</a></li>";
		  }
		  ?>  
        <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_group.php?shop_id=".$shop_id."\" title=\"グループ スライダー設定\">グループ スライダー設定</a></li>";
		  }
		  ?>
		  <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_rec.php?shop_id=".$shop_id."\" title=\"求人 スライダー設定\">求人 スライダー</a></li>";
		  }
		  ?>          
		  <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_staff.php?shop_id=".$shop_id."\" title=\"スタッフ求人 スライダー設定\">スタッフ求人 スライダー</a></li>";
		  }
		  ?>  
        <?php 
		  if($data10 != '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"contact.php?shop_id=".$shop_id."\" title=\"お問合せ\">お問合せ</a></li><li><a class=\"drawer-brand\" href=\"mypage.php?shop_id=".$shop_id."\" title=\"マイページ\">マイページ</a></li>";
		  }
		  ?>
        <li><a class="drawer-brand" href="<?php echo $url; ?>" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
		  <li><a class="drawer-brand" href="logout.php" title="ログアウト">ログアウト</a></li>
      </ul>
    </nav>
  </header>
  
<main role="main">

<div id="global">
<ul class="menu">
  <h1><a href="login_top.php?shop_id=<?php echo $shop_id; ?>" title="<?php echo $seo; ?>"><img src="img/logo.svg" alt="<?php echo $seo; ?>"></a></h1>
    <li class="menu__single">
      <a href="hotnews.php?shop_id=<?php echo $shop_id; ?>" title="ホットニュース設定">ホットニュース設定</a>
    </li>     
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャスト出勤設定">キャスト出勤設定</a>
        <ul class="menu__second-level">
            <li><a href="schedule.php?shop_id=<?php echo $shop_id; ?>" title="当日出勤設定">当日出勤設定</a></li>
			<?php 
		  if($data7 != '0'){
			  echo "<li><a href=\"schedule_week.php?shop_id=".$shop_id."\" title=\"1週間出勤設定\">1週間出勤設定</a></li>";
		  }
		  ?>            
        </ul>
    </li>
    <li class="menu__single">
        <a href="#" class="init-bottom" title="キャスト設定">キャスト設定</a>
        <ul class="menu__second-level">
            <li><a href="cast.php?shop_id=<?php echo $shop_id; ?>" title="プロフィール設定">プロフィール設定</a></li>
            <li><a href="cast_sort.php?shop_id=<?php echo $shop_id; ?>" title="キャスト並び替え">キャスト並び替え</a></li>
        </ul>
    </li>
    <li class="menu__single">
      <a href="event.php?shop_id=<?php echo $shop_id; ?>" title="カレンダー設定">カレンダー設定</a>
    </li>
	<?php 
		  if($data7 == '3' || $data7 == '4'){
			  echo "<li class=\"menu__single\"><a href=\"coupon.php?shop_id=".$shop_id."\" title=\"クーポン設定\">クーポン設定</a></li>";
		  }
		  ?>  
  
    <li class="menu__single">
      <a href="shopphoto.php?shop_id=<?php echo $shop_id; ?>" title="店内写真設定">店内写真設定</a>
    </li>                 
    <li class="menu__single">
        <a href="#" class="init-bottom" title="各画像設定">各画像設定</a>
        <ul class="menu__second-level">
			<?php 
		  if($data7 == '0'){
			  echo "<li><a href=\"topbanner.php?shop_id=".$shop_id."\" title=\"トップバナー設定\">トップバナー設定</a></li>";
		  }
		  ?>
			<?php 
		  if($data7 == '1' ||$data7 == '2' || $data7 == '3' || $data7 == '4'){
			  echo "<li><a href=\"slider.php?shop_id=".$shop_id."\" title=\"店舗 スライダー設定\">店舗 スライダー設定</a></li>";
		  }
		  ?>
<?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a href=\"slider_group.php?shop_id=".$shop_id."\" title=\"グループ スライダー設定\">グループスライダー</a></li>";
		  }
		  ?> 
		  <?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a href=\"slider_rec.php?shop_id=".$shop_id."\" title=\"求人 スライダー設定\">求人スライダー</a></li>";
		  }
		  ?>
			<?php 
		  if($data7 == '2' || $data7 == '4'){
			  echo "<li><a href=\"slider_staff.php?shop_id=".$shop_id."\" title=\"スタッフ求人 スライダー設定\">スタッフ求人スライダー</a></li>";
		  }
		  ?>                     
        </ul>
    </li>
    <li class="menu__single">
        <a href="#" class="init-bottom" title="お客様情報">設定・確認</a>
        <ul class="menu__second-level">
            <?php 
		  if($data10 != '2'){
			  echo "<li><a href=\"contact.php?shop_id=".$shop_id."\" title=\"お問合せ\">お問合せ</a></li><li><a href=\"mypage.php?shop_id=".$shop_id."\" title=\"マイページ\">マイページ</a></li>";
		  }
		  ?>                        
            <li><a href="<?php echo $url; ?>" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
			<li><a href="logout.php" title="ログアウト">ログアウト</a></li>
        </ul>
    </li>                    
</ul>
</div>

<div class="header_space">
  <div class="wrapper">
    <div class="element_sp_1"></div>
    <div class="element_sp_2 header_space_img"><h1><a href="login_top.php?shop_id=<?php echo $shop_id; ?>" title=""><img src="img/logo.svg" alt=""></a></h1></div>
    <div class="element_sp_3"><div class="header_space_img_2"><a href="<?php echo $url; ?>" target="_blank" title=""><img src="img/homepage.svg"><br />HP確認</a></div></div>
  </div>
  <div class="clear"></div>
</div>

<div class="header_space_sp"></div>