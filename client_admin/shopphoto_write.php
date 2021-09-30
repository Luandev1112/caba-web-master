<?php
//設定ファイル読み込み
require_once('conf.php');

//フォームからの生データ
$id = $_POST['id'];
$name = htmlspecialchars($_POST['name'] , ENT_QUOTES);
$name2 = htmlspecialchars($_POST['name2'] , ENT_QUOTES);
$photo1 = $_POST['photo1'];
$photo2 = $_POST['photo2'];
$photo3 = $_POST['photo3'];
$photo4 = $_POST['photo4'];
$photo5 = $_POST['photo5'];
$photo6 = $_POST['photo6'];
$photo7 = $_POST['photo7'];
$photo8 = $_POST['photo8'];
$photo9 = $_POST['photo9'];
$photo10 = $_POST['photo10'];
$photo11 = $_POST['photo11'];
$photo12 = $_POST['photo12'];
$photo13 = $_POST['photo13'];
$photo14 = $_POST['photo14'];
$photo15 = $_POST['photo15'];
$photo16 = $_POST['photo16'];
$link1 = $_POST['link1'];
$link2 = $_POST['link2'];
$link3 = $_POST['link3'];
$link4 = $_POST['link4'];
$link5 = $_POST['link5'];
$link6 = $_POST['link6'];
$link7 = $_POST['link7'];
$link8 = $_POST['link8'];
$link9 = $_POST['link9'];
$link10 = $_POST['link10'];
$edittime = $_POST['edittime'];

$shop_id = $name2;

//編集・削除キー
$operation = $_POST['operation'];

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `data3` SET `id`='$id',`name`='$name',`name2`='$name2',`link1`='$link1',`link2`='$link2',`link3`='$link3',`link4`='$link4',`link5`='$link5',`link6`='$link6',`link7`='$link7',`link8`='$link8',`link9`='$link9',`link10`='$link10',`edittime`='$edittime' WHERE `name2` LIKE '$name2' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `data3` WHERE name2 LIKE '$name2' LIMIT 1");
	}
//}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);



//写真削除チェック
$delete1=$_POST['delete1'];
$delete2=$_POST['delete2'];
$delete3=$_POST['delete3'];
$delete4=$_POST['delete4'];
$delete5=$_POST['delete5'];
$delete6=$_POST['delete6'];
$delete7=$_POST['delete7'];
$delete8=$_POST['delete8'];
$delete9=$_POST['delete9'];
$delete10=$_POST['delete10'];
$delete11=$_POST['delete11'];
$delete12=$_POST['delete12'];
$delete13=$_POST['delete13'];
$delete14=$_POST['delete14'];
$delete15=$_POST['delete15'];
$delete16=$_POST['delete16'];

$shop_id = $name2;

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `shop_id` = '$shop_id'");
while($row=mysqli_fetch_assoc($result)){
include('../master_admin/parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>店内写真設定完了｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　店内写真設定完了">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/earlyaccess/sawarabigothic.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->

<!--ヘッダー　プラグイン-->
<script>
 $(document).ready(function() {
   $('.drawer').drawer();
 });
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

</head>

<body>

<div class="drawer drawer--left">

  <?php include ('php/header.php'); ?>

<div id="page_base">
  <h2>店内写真設定完了</h2>
  
<div class="page_base_in">
  
  <div class="page_base_box_2">
  
      <div class="castnew_category_area_2">
    <h3><?php echo $photo9; ?>店内写真登録完了</h3>
      </div>
	  <?php

//ファイル名の取り出し
$photo_name1 = $_FILES['photo1']['name'];
$photo_name2 = $_FILES['photo2']['name'];
$photo_name3 = $_FILES['photo3']['name'];
$photo_name4 = $_FILES['photo4']['name'];
$photo_name5 = $_FILES['photo5']['name'];
$photo_name6 = $_FILES['photo6']['name'];
$photo_name7 = $_FILES['photo7']['name'];
$photo_name8 = $_FILES['photo8']['name'];
$photo_name9 = $_FILES['photo9']['name'];
$photo_name10 = $_FILES['photo10']['name'];
$photo_name11 = $_FILES['photo11']['name'];
$photo_name12 = $_FILES['photo12']['name'];
$photo_name13 = $_FILES['photo13']['name'];
$photo_name14 = $_FILES['photo14']['name'];
$photo_name15 = $_FILES['photo15']['name'];
$photo_name16 = $_FILES['photo16']['name'];
//ファイルタイプの取り出し
$photo_type1 = $_FILES['photo1']['type'];
$photo_type2 = $_FILES['photo2']['type'];
$photo_type3 = $_FILES['photo3']['type'];
$photo_type4 = $_FILES['photo4']['type'];
$photo_type5 = $_FILES['photo5']['type'];
$photo_type6 = $_FILES['photo6']['type'];
$photo_type7 = $_FILES['photo7']['type'];
$photo_type8 = $_FILES['photo8']['type'];
$photo_type9 = $_FILES['photo9']['type'];
$photo_type10 = $_FILES['photo10']['type'];
$photo_type11 = $_FILES['photo11']['type'];
$photo_type12 = $_FILES['photo12']['type'];
$photo_type13 = $_FILES['photo13']['type'];
$photo_type14 = $_FILES['photo14']['type'];
$photo_type15 = $_FILES['photo15']['type'];
$photo_type16 = $_FILES['photo16']['type'];
//一時ファイル名の取り出し
$temp_name1 = $_FILES['photo1']['tmp_name'];
$temp_name2 = $_FILES['photo2']['tmp_name'];
$temp_name3 = $_FILES['photo3']['tmp_name'];
$temp_name4 = $_FILES['photo4']['tmp_name'];
$temp_name5 = $_FILES['photo5']['tmp_name'];
$temp_name6 = $_FILES['photo6']['tmp_name'];
$temp_name7 = $_FILES['photo7']['tmp_name'];
$temp_name8 = $_FILES['photo8']['tmp_name'];
$temp_name9 = $_FILES['photo9']['tmp_name'];
$temp_name10 = $_FILES['photo10']['tmp_name'];
$temp_name11 = $_FILES['photo11']['tmp_name'];
$temp_name12 = $_FILES['photo12']['tmp_name'];
$temp_name13 = $_FILES['photo13']['tmp_name'];
$temp_name14 = $_FILES['photo14']['tmp_name'];
$temp_name15 = $_FILES['photo15']['tmp_name'];
$temp_name16 = $_FILES['photo16']['tmp_name'];

//保存先のディレクトリ
$dir = 'photo/';
//拡張子
$jpeg = 'p.jpg';
//保存先のファイル名
	$upload_name1 = $dir . $name2 . '_1' . $jpeg;
	$upload_name2 = $dir . $name2 . '_2' . $jpeg;
	$upload_name3 = $dir . $name2 . '_3' . $jpeg;
	$upload_name4 = $dir . $name2 . '_4' . $jpeg;
	$upload_name5 = $dir . $name2 . '_5' . $jpeg;
	$upload_name6 = $dir . $name2 . '_6' . $jpeg;
	$upload_name7 = $dir . $name2 . '_7' . $jpeg;
	$upload_name8 = $dir . $name2 . '_8' . $jpeg;
	$upload_name9 = $dir . $name2 . '_9' . $jpeg;
	$upload_name10 = $dir . $name2 . '_10' . $jpeg;
	  $upload_name11 = $dir . $name2 . '_11' . $jpeg;
	  $upload_name12 = $dir . $name2 . '_12' . $jpeg;
	  $upload_name13 = $dir . $name2 . '_13' . $jpeg;
	  $upload_name14 = $dir . $name2 . '_14' . $jpeg;
	  $upload_name15 = $dir . $name2 . '_15' . $jpeg;
	  $upload_name16 = $dir . $name2 . '_16' . $jpeg;
	// m
	$upload_name1_m = $dir . $name2 . '_1_m' . $jpeg;
	$upload_name2_m = $dir . $name2 . '_2_m' . $jpeg;
	$upload_name3_m = $dir . $name2 . '_3_m' . $jpeg;
	$upload_name4_m = $dir . $name2 . '_4_m' . $jpeg;
	$upload_name5_m = $dir . $name2 . '_5_m' . $jpeg;
	$upload_name6_m = $dir . $name2 . '_6_m' . $jpeg;
	$upload_name7_m = $dir . $name2 . '_7_m' . $jpeg;
	$upload_name8_m = $dir . $name2 . '_8_m' . $jpeg;
	$upload_name9_m = $dir . $name2 . '_9_m' . $jpeg;
	$upload_name10_m = $dir . $name2 . '_10_m' . $jpeg;
	  $upload_name11_m = $dir . $name2 . '_11_m' . $jpeg;
	  $upload_name12_m = $dir . $name2 . '_12_m' . $jpeg;
	  $upload_name13_m = $dir . $name2 . '_13_m' . $jpeg;
	  $upload_name14_m = $dir . $name2 . '_14_m' . $jpeg;
	  $upload_name15_m = $dir . $name2 . '_15_m' . $jpeg;
	  $upload_name16_m = $dir . $name2 . '_16_m' . $jpeg;

//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $photo_name11 == $empty && $photo_name12 == $empty && $photo_name13 == $empty && $photo_name14 == $empty && $photo_name15 == $empty && $photo_name16 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty && $delete11 == $empty && $delete12 == $empty && $delete13 == $empty && $delete14 == $empty && $delete15 == $empty && $delete16 == $empty) {
	
	echo '<p>店内写真の登録はありません。</p>';
}
	
/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		//アップロードの成功
		echo '<a class="media-left media-top" href="' . $upload_name1 . '" target="_blank"><img src="' . $upload_name1. '?' . $koshin . '" alt="photo1"  width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像1枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		
		

		//サムネイル画像の幅と高さを決める
		
			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);





		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name1);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_1_m.jpg')){
			unlink('./photo/'.$name2.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>店内写真画像保存</p>';
			} else {
				echo '<p>店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>店内写真画像作成失敗</p>';
		}
		
		
		
		echo "</div></div>\n";

	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		
	
	} else {
		echo '<p>アップロード失敗</p>';
	}
} elseif ($photo_name1 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（2枚目）//
/////////////////////////////////////////////
if (($photo_type2 == 'image/jpeg') || ($photo_type2 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name2 , $upload_name2);
	
	if ($result) {
	
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name2 . '" target="_blank"><img src="' . $upload_name2. '?' . $koshin . '" alt="photo2"  width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像2枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name2);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[店内写真2]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name2);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_2_m.jpg')){
			unlink('./photo/'.$name2.'_2_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name2_m , $quality)) {
				echo '<p>2枚目店内写真画像保存</p>';
			} else {
				echo '<p>2枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>2枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_2_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	

	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name2 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（3枚目）//
/////////////////////////////////////////////
if (($photo_type3 == 'image/jpeg') || ($photo_type3 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name3 , $upload_name3);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name3 . '" target="_blank"><img src="' . $upload_name3. '?' . $koshin . '" alt="photo3" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像3枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name3);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[店内写真3]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			

		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name3);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_3_m.jpg')){
			unlink('./photo/'.$name2.'_3_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name3_m , $quality)) {
				echo '<p>3枚目店内写真画像保存</p>';
			} else {
				echo '<p>3枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>3枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_3_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name3 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（4枚目）//
/////////////////////////////////////////////
if (($photo_type4 == 'image/jpeg') || ($photo_type4 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name4 , $upload_name4);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name4 . '" target="_blank"><img src="' . $upload_name4. '?' . $koshin . '" alt="photo4" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像4枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name4);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[店内写真4]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name4);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_4_m.jpg')){
			unlink('./photo/'.$name2.'_4_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name4_m , $quality)) {
				echo '<p>4枚目店内写真画像保存</p>';
			} else {
				echo '<p>4枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>4枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_4_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name4 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（5枚目）//
/////////////////////////////////////////////
if (($photo_type5 == 'image/jpeg') || ($photo_type5 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name5 , $upload_name5);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name5 . '" target="_blank"><img src="' . $upload_name5. '?' . $koshin . '" alt="photo5" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像5枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name5);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[店内写真5]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name5);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_5_m.jpg')){
			unlink('./photo/'.$name2.'_5_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name5_m , $quality)) {
				echo '<p>5枚目店内写真画像保存</p>';
			} else {
				echo '<p>5枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>5枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_5_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name5 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}



/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（6枚目）//
/////////////////////////////////////////////
if (($photo_type6 == 'image/jpeg') || ($photo_type6 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name6 , $upload_name6);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name6 . '" target="_blank"><img src="' . $upload_name6. '?' . $koshin . '" alt="photo6" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像6枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name6);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真6]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name6);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_6_m.jpg')){
			unlink('./photo/'.$name2.'_6_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name6_m , $quality)) {
				echo '<p>6枚目店内写真画像保存(_m)</p>';
			} else {
				echo '<p>6枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>6枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_6_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name6 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（7枚目）//
/////////////////////////////////////////////
if (($photo_type7 == 'image/jpeg') || ($photo_type7 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name7 , $upload_name7);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name7 . '" target="_blank"><img src="' . $upload_name7. '?' . $koshin . '" alt="photo7" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像7枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name7);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真7]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name7);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_7_m.jpg')){
			unlink('./photo/'.$name2.'_7_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name7_m , $quality)) {
				echo '<p>7枚目店内写真画像保存</p>';
			} else {
				echo '<p>7枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>7枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_7_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name7 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（8枚目）//
/////////////////////////////////////////////
if (($photo_type8 == 'image/jpeg') || ($photo_type8 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name8 , $upload_name8);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name8 . '" target="_blank"><img src="' . $upload_name8. '?' . $koshin . '" alt="photo8" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像8枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name8);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真画像8]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name8);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_8_m.jpg')){
			unlink('./photo/'.$name2.'_8_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name8_m , $quality)) {
				echo '<p>8枚目店内写真画像保存</p>';
			} else {
				echo '<p>8枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>8枚目店内写真画像作成失敗</p>';
		}

		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_8_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
	echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name8 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（9枚目）//
/////////////////////////////////////////////
if (($photo_type9 == 'image/jpeg') || ($photo_type9 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name9 , $upload_name9);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name9 . '" target="_blank"><img src="' . $upload_name9. '?' . $koshin . '" alt="photo4" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像9枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name9);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真9]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

			
		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name9);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		

		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_9_m.jpg')){
			unlink('./photo/'.$name2.'_9_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name9_m , $quality)) {
				echo '<p>9枚目店内写真画像保存</p>';
			} else {
				echo '<p>9枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>9枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_9_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name9 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（10枚目）//
/////////////////////////////////////////////
if (($photo_type10 == 'image/jpeg') || ($photo_type10 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name10 , $upload_name10);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name10 . '" target="_blank"><img src="' . $upload_name10. '?' . $koshin . '" alt="photo10" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像10枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name10);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真10]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name10);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_10_m.jpg')){
			unlink('./photo/'.$name2.'_10_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name10_m , $quality)) {
				echo '<p>10枚目店内写真画像保存</p>';
			} else {
				echo '<p>10枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>10枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_10_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name10 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（11枚目）//
/////////////////////////////////////////////
if (($photo_type11 == 'image/jpeg') || ($photo_type11 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name11 , $upload_name11);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name11 . '" target="_blank"><img src="' . $upload_name11. '?' . $koshin . '" alt="photo11" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像11枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name11);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真11]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name11);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_11_m.jpg')){
			unlink('./photo/'.$name2.'_11_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name11_m , $quality)) {
				echo '<p>11枚目店内写真画像保存</p>';
			} else {
				echo '<p>11枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>11枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_11_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name11 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

	  /////////////////////////////////////////////
//JPEG形式の画像をアップロードする（12枚目）//
/////////////////////////////////////////////
if (($photo_type12 == 'image/jpeg') || ($photo_type12 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name12 , $upload_name12);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name12 . '" target="_blank"><img src="' . $upload_name12. '?' . $koshin . '" alt="photo12" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像12枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name12);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真12]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name12);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_12_m.jpg')){
			unlink('./photo/'.$name2.'_12_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name12_m , $quality)) {
				echo '<p>12枚目店内写真画像保存</p>';
			} else {
				echo '<p>12枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>12枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_12_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name12 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

	  /////////////////////////////////////////////
//JPEG形式の画像をアップロードする（13枚目）//
/////////////////////////////////////////////
if (($photo_type13 == 'image/jpeg') || ($photo_type13 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name13 , $upload_name13);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name13 . '" target="_blank"><img src="' . $upload_name13. '?' . $koshin . '" alt="photo13" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像13枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name13);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真13]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name13);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_13_m.jpg')){
			unlink('./photo/'.$name2.'_13_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name13_m , $quality)) {
				echo '<p>13枚目店内写真画像保存</p>';
			} else {
				echo '<p>13枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>13枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_13_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name13 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

	  /////////////////////////////////////////////
//JPEG形式の画像をアップロードする（14枚目）//
/////////////////////////////////////////////
if (($photo_type14 == 'image/jpeg') || ($photo_type14 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name14 , $upload_name14);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name14 . '" target="_blank"><img src="' . $upload_name14. '?' . $koshin . '" alt="photo14" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像14枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name14);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真14]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name14);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_14_m.jpg')){
			unlink('./photo/'.$name2.'_14_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name14_m , $quality)) {
				echo '<p>14枚目店内写真画像保存</p>';
			} else {
				echo '<p>14枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>14枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_14_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name14 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

	  /////////////////////////////////////////////
//JPEG形式の画像をアップロードする（15枚目）//
/////////////////////////////////////////////
if (($photo_type15 == 'image/jpeg') || ($photo_type15 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name15 , $upload_name15);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name15 . '" target="_blank"><img src="' . $upload_name15. '?' . $koshin . '" alt="photo15" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像15枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name15);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真15]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name15);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_15_m.jpg')){
			unlink('./photo/'.$name2.'_15_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name15_m , $quality)) {
				echo '<p>15枚目店内写真画像保存</p>';
			} else {
				echo '<p>15枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>15枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_15_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name15 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

	  /////////////////////////////////////////////
//JPEG形式の画像をアップロードする（16枚目）//
/////////////////////////////////////////////
if (($photo_type16 == 'image/jpeg') || ($photo_type16 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name16 , $upload_name16);
	
	if ($result) {
		echo "<div class=\"media\">\n";
		
		echo '<a class="media-left media-top" href="' . $upload_name16 . '" target="_blank"><img src="' . $upload_name16. '?' . $koshin . '" alt="photo16" width="20%" /></a><div class="media-body"><h4 class="media-heading">店内写真画像16枚目</h4>';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name16);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[店内写真16]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		
		if($width>$height){
		
			// _mの幅と高さ
			$height_m = $photo_m;
			$width_m = round($height_m*$width/$height);
			
			
			
		}elseif($width<=$height){

			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		}

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name16);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		echo "<td>\n";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_16_m.jpg')){
			unlink('./photo/'.$name2.'_16_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name16_m , $quality)) {
				echo '<p>16枚目店内写真画像保存</p>';
			} else {
				echo '<p>16枚目店内写真画像保存失敗</p>';
			}
		} else {
			echo '<p>16枚目店内写真画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$name2.'_16_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		
		echo "</div></div>\n";
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name16 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

?>

<?php
//CSVから該当データを取り出して変数に代入
//$data = file('csv/data.csv');
//for($i=0; $i<sizeof($data); $i++) {
//	$line = explode(',' , $data[$i]);
//	
//	if($line[2] == $name2) {
//		include('parts/basic_hensu_straight.php');
//	}
//}
$data = mysqli_query($sql, "SELECT * FROM `data3` WHERE name2 LIKE '$name2'");
while($row=mysqli_fetch_assoc($data)) {
	include('parts/basic_hensu3.php');
}


if ($photo_name1 != $empty) {$photo1 = $dir . $name2 . '_1p';}
if ($photo_name2 != $empty) {$photo2 = $dir . $name2 . '_2p';}
if ($photo_name3 != $empty) {$photo3 = $dir . $name2 . '_3p';}
if ($photo_name4 != $empty) {$photo4 = $dir . $name2 . '_4p';}
if ($photo_name5 != $empty) {$photo5 = $dir . $name2 . '_5p';}
if ($photo_name6 != $empty) {$photo6 = $dir . $name2 . '_6p';}
if ($photo_name7 != $empty) {$photo7 = $dir . $name2 . '_7p';}
if ($photo_name8 != $empty) {$photo8 = $dir . $name2 . '_8p';}
if ($photo_name9 != $empty) {$photo9 = $dir . $name2 . '_9p';}
if ($photo_name10 != $empty) {$photo10 = $dir . $name2 . '_10p';}
if ($photo_name11 != $empty) {$photo11 = $dir . $name2 . '_11p';}
if ($photo_name12 != $empty) {$photo12 = $dir . $name2 . '_12p';}
if ($photo_name13 != $empty) {$photo13 = $dir . $name2 . '_13p';}
if ($photo_name14 != $empty) {$photo14 = $dir . $name2 . '_14p';}
if ($photo_name15 != $empty) {$photo15 = $dir . $name2 . '_15p';}
if ($photo_name16 != $empty) {$photo16 = $dir . $name2 . '_16p';}


//削除写真のデータを空に
if($delete1=='delete'){$photo1='';}
if($delete2=='delete'){$photo2='';}
if($delete3=='delete'){$photo3='';}
if($delete4=='delete'){$photo4='';}
if($delete5=='delete'){$photo5='';}
if($delete6=='delete'){$photo6='';}
if($delete7=='delete'){$photo7='';}
if($delete8=='delete'){$photo8='';}
if($delete9=='delete'){$photo9='';}
if($delete10=='delete'){$photo10='';}
if($delete11=='delete'){$photo11='';}
if($delete12=='delete'){$photo12='';}
if($delete13=='delete'){$photo13='';}
if($delete14=='delete'){$photo14='';}
if($delete15=='delete'){$photo15='';}
if($delete16=='delete'){$photo16='';}

//書込みデータを結合
//$line = array($id,$name,$name2,$age,$height,$weight,$bust,$cup,$waist,$hip,$comment,$comment2,$profinfo1,$profinfo2,$profinfo3,$profinfo4,$profinfo5,$profinfo6,$profinfo7,$profinfo8,$profinfo9,$profinfo10,$option1,$option2,$option3,$option4,$option5,$option6,$option7,$option8,$option9,$option10,$option11,$option12,$option13,$option14,$option15,$option16,$option17,$option18,$option19,$option20,$option21,$option22,$option23,$option24,$option25,$option26,$option27,$option28,$option29,$option30,$option31,$option32,$option33,$option34,$option35,$option36,$option37,$option38,$option39,$option40,$photo1,$photo2,$photo3,$photo4,$photo5,$photo6,$photo7,$photo8,$photo9,$photo10,$yotei1,$start1,$end1,$yotei2,$start2,$end2,$yotei3,$start3,$end3,$yotei4,$start4,$end4,$yotei5,$start5,$end5,$yotei6,$start6,$end6,$yobi1,$yobi2,$yobi3,$yobi4,$yobi5,$yobi6,$yobi7,$yobi8,$yobi9,$yobi10,$edittime);
//$line = implode(',' , $line);

//CSVファイルから直接読み込んだデータなので、再書込みの時に行末に[\n]は不要
#	$line = $line . "\n";

//配列入れ替え
//$data = file('csv/data.csv');
//for($i=0;$i<sizeof($data);$i++) {
//$lines = explode(',' , $data[$i]);
//if ($lines[2] == $name2) {
//	array_splice($data , $i , 1 , $line);
//	}
//}

//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);
mysqli_query($sql, "UPDATE `data3` SET `photo1`='$photo1', `photo2`='$photo2', `photo3`='$photo3', `photo4`='$photo4', `photo5`='$photo5', `photo6`='$photo6', `photo7`='$photo7', `photo8`='$photo8', `photo9`='$photo9', `photo10`='$photo10', `photo11`='$photo11', `photo12`='$photo12', `photo13`='$photo13', `photo14`='$photo14', `photo15`='$photo15', `photo16`='$photo16' WHERE `name2` LIKE '$name2' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$name2.'_1p.jpg');
	unlink('./photo/'.$name2.'_1_mp.jpg');
	
	echo "<p>".$name."スライダー画像1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('./photo/'.$name2.'_2p.jpg');
	unlink('./photo/'.$name2.'_2_mp.jpg');
		
	echo "<p>".$name."スライダー画像2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('./photo/'.$name2.'_3p.jpg');
	unlink('./photo/'.$name2.'_3_mp.jpg');
		
	echo "<p>".$name."スライダー画像3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('./photo/'.$name2.'_4p.jpg');
	unlink('./photo/'.$name2.'_4_mp.jpg');
		
	echo "<p>".$name."スライダー画像4枚目を削除しました。</p>\n";
}
if($delete5=='delete'){
	unlink('./photo/'.$name2.'_5p.jpg');
	unlink('./photo/'.$name2.'_5_mp.jpg');
		
	echo "<p>".$name."スライダー画像5枚目を削除しました。</p>\n";
}
if($delete6=='delete'){
	unlink('./photo/'.$name2.'_6p.jpg');
	unlink('./photo/'.$name2.'_6_mp.jpg');

	echo "<p>".$name."スライダー画像6枚目を削除しました。</p>\n";
}
if($delete7=='delete'){
	unlink('./photo/'.$name2.'_7p.jpg');
	unlink('./photo/'.$name2.'_7_mp.jpg');

	echo "<p>".$name."スライダー画像7枚目を削除しました。</p>\n";
}
if($delete8=='delete'){
	unlink('./photo/'.$name2.'_8p.jpg');
	unlink('./photo/'.$name2.'_8_mp.jpg');

	echo "<p>".$name."スライダー画像8枚目を削除しました。</p>\n";
}
if($delete9=='delete'){
	unlink('./photo/'.$name2.'_9p.jpg');
	unlink('./photo/'.$name2.'_9_mp.jpg');

	echo "<p>".$name."スライダー画像9枚目を削除しました。</p>\n";
}
if($delete10=='delete'){
	unlink('./photo/'.$name2.'_10p.jpg');
	unlink('./photo/'.$name2.'_10_mp.jpg');

	echo "<p>".$name."スライダー画像10枚目を削除しました。</p>\n";
}
	  if($delete11=='delete'){
	unlink('./photo/'.$name2.'_11p.jpg');
	unlink('./photo/'.$name2.'_11_mp.jpg');

	echo "<p>".$name."スライダー画像11枚目を削除しました。</p>\n";
}
	  if($delete12=='delete'){
	unlink('./photo/'.$name2.'_12p.jpg');
	unlink('./photo/'.$name2.'_12_mp.jpg');

	echo "<p>".$name."スライダー画像12枚目を削除しました。</p>\n";
}
	  if($delete13=='delete'){
	unlink('./photo/'.$name2.'_13p.jpg');
	unlink('./photo/'.$name2.'_13_mp.jpg');

	echo "<p>".$name."スライダー画像13枚目を削除しました。</p>\n";
}
	  if($delete14=='delete'){
	unlink('./photo/'.$name2.'_14p.jpg');
	unlink('./photo/'.$name2.'_14_mp.jpg');

	echo "<p>".$name."スライダー画像14枚目を削除しました。</p>\n";
}
	  if($delete15=='delete'){
	unlink('./photo/'.$name2.'_15p.jpg');
	unlink('./photo/'.$name2.'_15_mp.jpg');

	echo "<p>".$name."スライダー画像15枚目を削除しました。</p>\n";
}
	  if($delete16=='delete'){
	unlink('./photo/'.$name2.'_16p.jpg');
	unlink('./photo/'.$name2.'_16_mp.jpg');

	echo "<p>".$name."スライダー画像16枚目を削除しました。</p>\n";
}
?>
  </div>

</div><!--base-->

</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

</body>

</html>