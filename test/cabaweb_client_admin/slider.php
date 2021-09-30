<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店舗スライダー設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　スライダー設定">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">
<link rel="stylesheet" href="css/animate.min.css">
	
<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_base">
				<h2>店舗スライダー設定</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
						</div>
						<div class="slider_caution">
							<font color="#FF0000">― 画像サイズ ―</font><br />
							<span class="slider_caution_sub">【横：1000px　縦：1000px】</span><br />
							<span class="slider_caution_sub_2">必ず推奨サイズでアップして下さい。</span>
						</div>
						<div class="slider_caution">
							<font color="#FF0000">― リンク設定 ―</font><br />
							<span class="slider_caution_sub_2">
								【リンク設定欄】にURLを入力して下さい。<br />
								入力がない場合はリンク設定されません。
							</span>
						</div> 	
						<form action="" method="post" id="form">
							<table>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">1枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div> 										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">2枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">3枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">4枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">5枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">6枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">7枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">8枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">9枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>
								<tr>
									<td class="t_castgallery">
										<div class="castphoto_number">10枚目</div>
										<img src="" data-src="img/nophoto_1.jpg" class="lozad castphoto_contain"><br />
										<div class="sakujyo_check">
											<label><input type="checkbox" name="checkbox[]" class="checkbox-input" value="delete"><span class="checkbox-parts">削除する</span></label>
										</div>
									</td>
									<td class="t_castgallery-2">
										<label class="file-btn">
											<div class="file-btn2">アップロード</div>
											<div class="view_box">
												<input type="file" class="file" />
											</div>											
										</label>
										<div class="slider_link_area">
											<p style="padding: 0; margin: 0;"><label><span>リンクURL</span><input type="text" name="リンク設定" class="txtfiled" placeholder="例）http://www.monochrome-ds.com/"></label></p>
										</div>
										<div class="slider_link_area_2">
											<p style="padding: 0; margin: 0;">
												<label><span>掲載終了日設定</span>
													<input type="date" name="today" id="today" min="2020-04-20"><br />
													<span style="font-size:60%; color:#FF0000; text-align: left;">
														※設定した日付を過ぎると自動的に削除されます。<br />
														※日付を設定しない場合は永久に掲載されます。
													</span>
												</label>                 
											</p>
										</div>										
									</td>
								</tr>								
							</table>
							<div class="castphoto_button">
								<button type="submit" class="formbtn_2">登録する</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<?php include ('php/footer.php'); ?>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
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
$(document).ready(function () {
  $(".file").on('change', function(){
     var fileprop = $(this).prop('files')[0],
         find_img = $(this).parent().find('img'),
         filereader = new FileReader(),
         view_box = $(this).parent('.view_box');
    
    if(find_img.length){
       find_img.nextAll().remove();
       find_img.remove();
    }
    
    var img = '<div class="img_view"><img alt="" class="img contain"><p><a href="#" class="img_del">画像を削除</a></p></div>';
    
    view_box.append(img);
    
    filereader.onload = function() {
      view_box.find('img').attr('src', filereader.result);
      img_del(view_box);
    }
    filereader.readAsDataURL(fileprop);
  });
  
  function img_del(target){
    target.find("a.img_del").on('click',function(){
      var self = $(this),
          parentBox = self.parent().parent().parent();
      if(window.confirm('画像を削除します。\nよろしいですか？')){
        setTimeout(function(){
          parentBox.find('input[type=file]').val('');
          parentBox.find('.img_view').remove();
        } , 0);            
      }
      return false;
    });
  }  
    
});
</script>	
</body>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<script>
const observer = lozad('.lozad', {
    rootMargin: '50%',
});
observer.observe();
</script>
</html>