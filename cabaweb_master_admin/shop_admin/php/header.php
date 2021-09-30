<div class="header_space">
				<div class="wrapper">
					<div class="element_sp_1"></div>
					<div class="element_sp_2 header_space_img">
						<h1><a href="index.php?master_id=<?php echo $master_id; ?>" title=""><img src="img/logo.svg" alt=""></a></h1>
					</div>
					<div class="element_sp_3">
						<div class="header_space_img_2">
							<a href="<?php echo $s_url; ?>" target="_blank" title=""><img src="img/homepage.svg"><br />HP確認</a>
						</div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<header role="banner">
				<button type="button" class="drawer-toggle drawer-hamburger">
					<span class="sr-only"></span>
					<span class="drawer-hamburger-icon"></span>
				</button>
				<nav class="drawer-nav" role="navigation">
					<ul class="drawer-menu">
						<li class="drawer-brand_first"><a class="drawer-brand" href="../login_top.php" title="顧客一覧に戻る">顧客一覧に戻る</a></li>						
						<li><a class="drawer-brand" href="index.php?master_id=<?php echo $master_id; ?>" title="ショップトップ">ショップトップ</a></li>
						<li><a class="drawer-brand" href="hotnews.php?master_id=<?php echo $master_id; ?>" title="ニュース設定">ニュース設定</a></li>
						<li><a class="drawer-brand" href="hotnews_sort.php?master_id=<?php echo $master_id; ?>" title="ニュース並び替え">ニュース並び替え</a></li>
						<?php 
		  if($sdata7 == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"schedule_time.php?master_id=".$master_id."\" title=\"当日出勤設定\">当日出勤設定</a></li><li><a class=\"drawer-brand\" href=\"schedule_week2.php?master_id=".$master_id."\" title=\"１週間出勤設定\">１週間出勤設定</a></li>";
		  }elseif($sdata7 == '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"schedule.php?master_id=".$master_id."\" title=\"当日出勤設定\">当日出勤設定</a></li><li><a class=\"drawer-brand\" href=\"schedule_week.php?master_id=".$master_id."\" title=\"１週間出勤設定\">１週間出勤設定</a></li>";
		  }
		  ?>
						<li><a class="drawer-brand" href="cast.php?master_id=<?php echo $master_id; ?>" title="キャスト設定">キャスト設定</a></li>
						<li><a class="drawer-brand" href="cast_sort.php?master_id=<?php echo $master_id; ?>" title="キャスト並び替え">キャスト並び替え</a></li>
						<li><a class="drawer-brand" href="event.php?master_id=<?php echo $master_id; ?>" title="カレンダー設定">カレンダー設定</a></li>
						<li><a class="drawer-brand" href="shopphoto_top.php?master_id=<?php echo $master_id; ?>" title="HPトップ店内写真設定">HPトップ店内写真設定</a></li>
						<li><a class="drawer-brand" href="shopphoto.php?master_id=<?php echo $master_id; ?>" title="店内写真設定">店内写真設定</a></li>
						<?php 
		  if($sdata3 == '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"coupon.php?master_id=".$master_id."\" title=\"クーポン設定\">クーポン設定</a></li>";
		  }
		  ?>	
						<?php 
		  if($sdata4 == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider.php?master_id=".$master_id."\" title=\"店舗スライダー設定\">店舗トップ スライダー設定</a></li>";
		  }elseif($sdata4 == '2'){
			  echo "<li><a class=\"drawer-brand\" href=\"back_bg.php?master_id=".$master_id."\" title=\"店舗トップ 背景画像設定\">店舗トップ 背景画像設定</a></li>";
		  }elseif($sdata4 == '3'){
			 echo "<li><a class=\"drawer-brand\" href=\"back_photo.php?master_id=".$master_id."\" title=\"店舗トップ 静止画像設定\">店舗トップ 静止画像設定</a></li>";
		  }
		  ?>	
			<?php 
		  if($sdata6 == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"slider_group.php?master_id=".$master_id."\" title=\"グループトップ スライダー設定\">グループトップ スライダー設定</a></li>
			  <li><a class=\"drawer-brand\" href=\"slider_rec.php.php?master_id=".$master_id."\" title=\"キャスト求人スライダー設定\">キャスト求人スライダー設定</a></li>
			  <li><a class=\"drawer-brand\" href=\"slider_staff.php?master_id=".$master_id."\" title=\"スタッフ求人 スライダー設定\">スタッフ求人 スライダー設定</a></li>";
		  }
		  ?>
	<?php 
		  if($portal == '1'){
			  echo "<li><a class=\"drawer-brand\" href=\"nightgram_rec.php?master_id=".$master_id."\" title=\"ナイトグラム求人画像設定\">ナイトグラム求人画像設定</a></li>";
		  }
		  ?>	
						<li><a class="drawer-brand" href="<?php echo $s_url; ?>" target="_blank" title="ホームページ確認">ホームページ確認</a></li>
					</ul>
				</nav>
			</header>
			<div class="header_space_sp"></div>