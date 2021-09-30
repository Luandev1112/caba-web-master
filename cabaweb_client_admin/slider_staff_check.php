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
$end1 = $_POST['end1'];
$end2 = $_POST['end2'];
$end3 = $_POST['end3'];
$end4 = $_POST['end4'];
$end5 = $_POST['end5'];
$end6 = $_POST['end6'];
$end7 = $_POST['end7'];
$end8 = $_POST['end8'];
$end9 = $_POST['end9'];
$end10 = $_POST['end10'];
$edittime = $_POST['edittime'];

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

if($delete1=='delete'){$link1='';}
if($delete2=='delete'){$link2='';}
if($delete3=='delete'){$link3='';}
if($delete4=='delete'){$link4='';}
if($delete5=='delete'){$link5='';}
if($delete6=='delete'){$link6='';}
if($delete7=='delete'){$link7='';}
if($delete8=='delete'){$link8='';}
if($delete9=='delete'){$link9='';}
if($delete10=='delete'){$link10='';}

if($delete1=='delete'){$end1='';}
if($delete2=='delete'){$end2='';}
if($delete3=='delete'){$end3='';}
if($delete4=='delete'){$end4='';}
if($delete5=='delete'){$end5='';}
if($delete6=='delete'){$end6='';}
if($delete7=='delete'){$end7='';}
if($delete8=='delete'){$end8='';}
if($delete9=='delete'){$end9='';}
if($delete10=='delete'){$end10='';}


//編集・削除キー
$operation = $_POST['operation'];

	if ($operation == 'edit') {
//		array_splice($data , $i , 1 , $line);
		mysqli_query($sql, "UPDATE `data7` SET `id`='$id',`name`='$name',`name2`='$name2',`link1`='$link1',`link2`='$link2',`link3`='$link3',`link4`='$link4',`link5`='$link5',`link6`='$link6',`link7`='$link7',`link8`='$link8',`link9`='$link9',`link10`='$link10',`end1`='$end1',`end2`='$end2',`end3`='$end3',`end4`='$end4',`end5`='$end5',`end6`='$end6',`end7`='$end7',`end8`='$end8',`end9`='$end9',`end10`='$end10',`edittime`='$edittime' WHERE `name2` LIKE '$name2' LIMIT 1");
	} elseif ($operation == 'delete') {
//		array_splice($data , $i , 1);
		mysqli_query($sql, "DELETE FROM `data7` WHERE name2 LIKE '$name2' LIMIT 1");
	}

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/master_admin/parts/basic_hensu.php');
}


//写真を削除
if($operation=='delete'){
	if(file_exists('../client_admin/photo/'.$name2.'_1.jpg')){
		unlink('../client_admin/photo/'.$name2.'_1_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_1.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'2.jpg')){
		unlink('../client_admin/photo/'.$name2.'_2_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_2.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'3.jpg')){
		unlink('../client_admin/photo/'.$name2.'_3_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_3.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'4.jpg')){
		unlink('../client_admin/photo/'.$name2.'_4_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_4.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'5.jpg')){
		unlink('../client_admin/photo/'.$name2.'_5_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_5.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'6.jpg')){
		unlink('../client_admin/photo/'.$name2.'_6_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_6.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'7.jpg')){
		unlink('../client_admin/photo/'.$name2.'_7_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_7.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'8.jpg')){
		unlink('../client_admin/photo/'.$name2.'_8_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_8.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'9.jpg')){
		unlink('../client_admin/photo/'.$name2.'_9_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_9.jpg');
	}
	if(file_exists('../client_admin/photo/'.$name2.'10.jpg')){
		unlink('../client_admin/photo/'.$name2.'_10_m.jpg');
		unlink('../client_admin/photo/'.$name2.'_10.jpg');
	}
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>スライダー確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　スライダー確認">

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
				<h2>スタッフ求人スライダー登録完了</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。<br />
						</div> 	
						
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


//保存先のディレクトリ
$dir = '../client_admin/photo/';
							
$dir2 = 'photo/';
//拡張子
$jpeg = 'j.jpg';
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


//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty) {
	
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
		echo '<img src="" data-src="' . $upload_name1. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
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
			if(file_exists('../client_admin/photo/'.$name2.'_1_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>スライダー画像保存</p>';
			} else {
				echo '<p>スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>スライダー画像作成失敗</p>';
		}
		
		
		
echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link1."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end1."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo '<img src="" data-src="' . $upload_name2. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name2);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー2]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('../client_admin/photo/'.$name2.'_2_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_2_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name2_m , $quality)) {
				echo '<p>2枚目スライダー画像保存</p>';
			} else {
				echo '<p>2枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>2枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_2_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link2."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end2."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo '<img src="" data-src="' . $upload_name3. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name3);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー3]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('../client_admin/photo/'.$name2.'_3_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_3_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name3_m , $quality)) {
				echo '<p>3枚目スライダー画像保存</p>';
			} else {
				echo '<p>3枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>3枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_3_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link3."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end3."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
	
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
		echo '<img src="" data-src="' . $upload_name4. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name4);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー4]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('../client_admin/photo/'.$name2.'_4_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_4_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name4_m , $quality)) {
				echo '<p>4枚目スライダー画像保存</p>';
			} else {
				echo '<p>4枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>4枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_4_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link4."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end5."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">5枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name5. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name5);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー5]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
		

		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../client_admin/photo/'.$name2.'_5_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_5_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name5_m , $quality)) {
				echo '<p>5枚目スライダー画像保存</p>';
			} else {
				echo '<p>5枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>5枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_5_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link5."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end5."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">6枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name6. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name6);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー6]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
		

		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../client_admin/photo/'.$name2.'_6_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_6_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name6_m , $quality)) {
				echo '<p>6枚目スライダー画像保存</p>';
			} else {
				echo '<p>6枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>6枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_6_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link6."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end6."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">7枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name7. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name7);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー7]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
		

		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../client_admin/photo/'.$name2.'_7_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_7_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name7_m , $quality)) {
				echo '<p>7枚目スライダー画像保存</p>';
			} else {
				echo '<p>7枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>7枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_7_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link7."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end7."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">8枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name8. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name8);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー8]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
		

		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../client_admin/photo/'.$name2.'_8_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_8_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name8_m , $quality)) {
				echo '<p>8枚目スライダー画像保存</p>';
			} else {
				echo '<p>8枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>8枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_8_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link8."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end8."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">9枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name9. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name9);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー9]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
		

		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../client_admin/photo/'.$name2.'_9_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_9_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name9_m , $quality)) {
				echo '<p>9枚目スライダー画像保存</p>';
			} else {
				echo '<p>9枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>9枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_9_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link9."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end9."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">10枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name10. '?' . $koshin . '" class="lozad castphoto_contain"><br />									
										';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name10);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[スライダー10]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
		

		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../client_admin/photo/'.$name2.'_10_m.jpg')){
			unlink('../client_admin/photo/'.$name2.'_10_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name10_m , $quality)) {
				echo '<p>10枚目スライダー画像保存</p>';
			} else {
				echo '<p>10枚目スライダー画像保存失敗</p>';
			}
		} else {
			echo '<p>10枚目スライダー画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = '../client_admin/photo/'.$name2.'_10_m.jpg';
		$rotate_img=getimagesize($img_name);
		$rotate_img_w=$rotate_img[0];
		$rotate_img_h=$rotate_img[1];
		
		if($rotate_img_w>$rotate_img_h){
			$source = imagecreatefromjpeg($img_name);
			$degrees = 90;
			$rotate = imagerotate($source,$degrees, 0);
			imagejpeg($rotate,$img_name,$quality);
		}
		
		echo "</td>\n";
		
		echo "<td class=\"t_castgallery-2\">
										<div class=\"slider_link_area\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■リンクURL</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$link10."</span>
												</label></p>
										</div>\n";
		echo "<div class=\"slider_link_area_2\" style=\"text-align: left;\">
											<p style=\"padding: 0; margin: 0;\">
												<label>
													<span>■掲載終了日</span>
													<span style=\"font-size: 80%; color: #4D4D4D;\">".$end10."</span>
												</label>                 
											</p>
										</div> 										
									</td>\n";
		
		echo "</tr>\n";
	
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

	
?><?php

$data = mysqli_query($sql, "SELECT * FROM `data7` WHERE name2 LIKE '$name2'");
while($row=mysqli_fetch_assoc($data)) {
	include('../cabaweb_master_admin/parts/basic_hensu5.php');
}


if ($photo_name1 != $empty) {$photo1 = $dir . $name2 . '_1r';}
if ($photo_name2 != $empty) {$photo2 = $dir . $name2 . '_2r';}
if ($photo_name3 != $empty) {$photo3 = $dir . $name2 . '_3r';}
if ($photo_name4 != $empty) {$photo4 = $dir . $name2 . '_4r';}
if ($photo_name5 != $empty) {$photo5 = $dir . $name2 . '_5r';}
if ($photo_name6 != $empty) {$photo6 = $dir . $name2 . '_6r';}
if ($photo_name7 != $empty) {$photo7 = $dir . $name2 . '_7r';}
if ($photo_name8 != $empty) {$photo8 = $dir . $name2 . '_8r';}
if ($photo_name9 != $empty) {$photo9 = $dir . $name2 . '_9r';}
if ($photo_name10 != $empty) {$photo10 = $dir . $name2 . '_10r';}


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
								
if($delete1=='delete'){$link1='';}
if($delete2=='delete'){$link2='';}
if($delete3=='delete'){$link3='';}
if($delete4=='delete'){$link4='';}
if($delete5=='delete'){$link5='';}
if($delete6=='delete'){$link6='';}
if($delete7=='delete'){$link7='';}
if($delete8=='delete'){$link8='';}
if($delete9=='delete'){$link9='';}
if($delete10=='delete'){$link10='';}

if($delete1=='delete'){$end1='';}
if($delete2=='delete'){$end2='';}
if($delete3=='delete'){$end3='';}
if($delete4=='delete'){$end4='';}
if($delete5=='delete'){$end5='';}
if($delete6=='delete'){$end6='';}
if($delete7=='delete'){$end7='';}
if($delete8=='delete'){$end8='';}
if($delete9=='delete'){$end9='';}
if($delete10=='delete'){$end10='';}

mysqli_query($sql, "UPDATE `data7` SET `photo1`='$photo1', `photo2`='$photo2', `photo3`='$photo3', `photo4`='$photo4', `photo5`='$photo5', `photo6`='$photo6', `photo7`='$photo7', `photo8`='$photo8', `photo9`='$photo9', `photo10`='$photo10' WHERE `name2` LIKE '$name2' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('../client_admin/photo/'.$name2.'_1j.jpg');
	unlink('../client_admin/photo/'.$name2.'_1_mj.jpg');
	
	echo "<p>".$name."スライダー画像1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('../client_admin/photo/'.$name2.'_2j.jpg');
	unlink('../client_admin/photo/'.$name2.'_2_mj.jpg');
		
	echo "<p>".$name."スライダー画像2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('../client_admin/photo/'.$name2.'_3j.jpg');
	unlink('../client_admin/photo/'.$name2.'_3_mj.jpg');
		
	echo "<p>".$name."スライダー画像3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('../client_admin/photo/'.$name2.'_4j.jpg');
	unlink('../client_admin/photo/'.$name2.'_4_mj.jpg');
		
	echo "<p>".$name."スライダー画像4枚目を削除しました。</p>\n";
}
if($delete5=='delete'){
	unlink('../client_admin/photo/'.$name2.'_5j.jpg');
	unlink('../client_admin/photo/'.$name2.'_5_mj.jpg');
		
	echo "<p>".$name."スライダー画像5枚目を削除しました。</p>\n";
}
if($delete6=='delete'){
	unlink('../client_admin/photo/'.$name2.'_6j.jpg');
	unlink('../client_admin/photo/'.$name2.'_6_mj.jpg');

	echo "<p>".$name."スライダー画像6枚目を削除しました。</p>\n";
}
if($delete7=='delete'){
	unlink('../client_admin/photo/'.$name2.'_7j.jpg');
	unlink('../client_admin/photo/'.$name2.'_7_mj.jpg');

	echo "<p>".$name."スライダー画像7枚目を削除しました。</p>\n";
}
if($delete8=='delete'){
	unlink('../client_admin/photo/'.$name2.'_8j.jpg');
	unlink('../client_admin/photo/'.$name2.'_8_mj.jpg');

	echo "<p>".$name."スライダー画像8枚目を削除しました。</p>\n";
}
if($delete9=='delete'){
	unlink('../client_admin/photo/'.$name2.'_9j.jpg');
	unlink('../client_admin/photo/'.$name2.'_9_mj.jpg');

	echo "<p>".$name."スライダー画像9枚目を削除しました。</p>\n";
}
if($delete10=='delete'){
	unlink('../client_admin/photo/'.$name2.'_10j.jpg');
	unlink('../client_admin/photo/'.$name2.'_10_mj.jpg');

	echo "<p>".$name."スライダー画像10枚目を削除しました。</p>\n";
}
?>
												
							</table>
						
						
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