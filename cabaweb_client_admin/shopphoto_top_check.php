<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';
	
	//ファンクションファイル読み込み
require_once '../cabaweb_master_admin/parts/function.php';

$master_id = $_POST['master_id'];

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

//編集・削除キー
$operation = $_POST['operation'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}
//写真削除チェック
$delete1=$_POST['delete1'];
$delete2=$_POST['delete2'];
$delete3=$_POST['delete3'];
$delete4=$_POST['delete4'];

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>HPトップ店内写真設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　HPトップ店内写真設定">

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
				<h2>HPトップ店内写真設定</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
							<br />
							ホームページトップの店内写真を設定します。
						</div>
						<form action="shopphoto_write.php" method="post" id="form">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="hidden" name="name" value="<?php echo $name; ?>" />
<input type="hidden" name="name2" value="<?php echo $name2; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="hidden" name="photo2" value="<?php echo $photo2; ?>" />
<input type="hidden" name="photo3" value="<?php echo $photo3; ?>" />
<input type="hidden" name="photo4" value="<?php echo $photo4; ?>" />
<input type="hidden" name="photo5" value="<?php echo $photo5; ?>" />
<input type="hidden" name="photo6" value="<?php echo $photo6; ?>" />
<input type="hidden" name="photo7" value="<?php echo $photo7; ?>" />
<input type="hidden" name="photo8" value="<?php echo $photo8; ?>" />
<input type="hidden" name="photo9" value="<?php echo $photo9; ?>" />
<input type="hidden" name="photo10" value="<?php echo $photo10; ?>" />
<input type="hidden" name="photo11" value="<?php echo $photo11; ?>" />
<input type="hidden" name="photo12" value="<?php echo $photo12; ?>" />
<input type="hidden" name="photo13" value="<?php echo $photo13; ?>" />
<input type="hidden" name="photo14" value="<?php echo $photo14; ?>" />
<input type="hidden" name="photo15" value="<?php echo $photo15; ?>" />
<input type="hidden" name="photo16" value="<?php echo $photo16; ?>" />
<input type="hidden" name="link1" value="<?php echo $link1; ?>" />
<input type="hidden" name="link2" value="<?php echo $link2; ?>" />
<input type="hidden" name="link3" value="<?php echo $link3; ?>" />
<input type="hidden" name="link4" value="<?php echo $link4; ?>" />
<input type="hidden" name="link5" value="<?php echo $link5; ?>" />
<input type="hidden" name="link6" value="<?php echo $link6; ?>" />
<input type="hidden" name="link7" value="<?php echo $link7; ?>" />
<input type="hidden" name="link8" value="<?php echo $link8; ?>" />
<input type="hidden" name="link9" value="<?php echo $link9; ?>" />
<input type="hidden" name="link10" value="<?php echo $link10; ?>" />
							<div class="shopphoto_page_box">
								<table>
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
$dir = '../client_admin/photo/';
							
$dir2 = 'photo/';
//拡張子
$jpeg = 'top.jpg';
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
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty  && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty) {
	
	echo '';
}
	
/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		
		
										
											

		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">1枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name1. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />									
										';
		
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
		
		
		
echo "</td></tr>\n";

	
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
	
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">2枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name2. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />									
										';
		
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
		
		
echo "</td></tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">3枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name3. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />									
										';
		
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
		
		
		echo "</td></tr>\n";
	
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">4枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name4. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />									
										';
		
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
		
		echo "</td></tr>\n";
	
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



?>
					
								</table>
							</div>
							<?php

if ($photo_name1 != $empty) {$photo1 = $dir2 . $name2 . '_1top';}
if ($photo_name2 != $empty) {$photo2 = $dir2 . $name2 . '_2top';}
if ($photo_name3 != $empty) {$photo3 = $dir2 . $name2 . '_3top';}
if ($photo_name4 != $empty) {$photo4 = $dir2 . $name2 . '_4top';}



//削除写真のデータを空に
if($delete1=='delete'){$photo1='';}
if($delete2=='delete'){$photo2='';}
if($delete3=='delete'){$photo3='';}
if($delete4=='delete'){$photo4='';}


mysqli_query($sql, "UPDATE `data_top` SET `photo1`='$photo1', `photo2`='$photo2', `photo3`='$photo3', `photo4`='$photo4' WHERE `name2` LIKE '$name2' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$name2.'_1top.jpg');
	unlink('./photo/'.$name2.'_1_mtop.jpg');
	
	echo "<p>".$name."スライダー画像1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('./photo/'.$name2.'_2top.jpg');
	unlink('./photo/'.$name2.'_2_mtop.jpg');
		
	echo "<p>".$name."スライダー画像2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('./photo/'.$name2.'_3top.jpg');
	unlink('./photo/'.$name2.'_3_mtop.jpg');
		
	echo "<p>".$name."スライダー画像3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('./photo/'.$name2.'_4top.jpg');
	unlink('./photo/'.$name2.'_4_mtop.jpg');
		
	echo "<p>".$name."スライダー画像4枚目を削除しました。</p>\n";
}

?>
						
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