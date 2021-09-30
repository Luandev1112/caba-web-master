<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

$no=$_POST["no"];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>各画像確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　各画像確認">

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
				<h2>各画像確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<?php
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
?>
					  <div class="attention_1">
						
						</div>
						<form action="" method="post" id="form">
							<?php
//ファイル名の取り出し
$photo_name1 = $_FILES['sphoto1']['name'];
$photo_name2 = $_FILES['sphoto2']['name'];
$photo_name3 = $_FILES['sphoto3']['name'];
$photo_name4 = $_FILES['sphoto4']['name'];
$photo_name5 = $_FILES['sphoto5']['name'];
$photo_name6 = $_FILES['sphoto6']['name'];
$photo_name7 = $_FILES['sphoto7']['name'];
$photo_name8 = $_FILES['sphoto8']['name'];
$photo_name9 = $_FILES['sphoto9']['name'];
$photo_name10 = $_FILES['sphoto10']['name'];
$photo_name11 = $_FILES['sphoto11']['name'];
$photo_name12 = $_FILES['sphoto12']['name'];
//ファイルタイプの取り出し
$photo_type1 = $_FILES['sphoto1']['type'];
$photo_type2 = $_FILES['sphoto2']['type'];
$photo_type3 = $_FILES['sphoto3']['type'];
$photo_type4 = $_FILES['sphoto4']['type'];
$photo_type5 = $_FILES['sphoto5']['type'];
$photo_type6 = $_FILES['sphoto6']['type'];
$photo_type7 = $_FILES['sphoto7']['type'];
$photo_type8 = $_FILES['sphoto8']['type'];
$photo_type9 = $_FILES['sphoto9']['type'];
$photo_type10 = $_FILES['sphoto10']['type'];
$photo_type11 = $_FILES['sphoto11']['type'];
$photo_type12 = $_FILES['sphoto12']['type'];
//一時ファイル名の取り出し
$temp_name1 = $_FILES['sphoto1']['tmp_name'];
$temp_name2 = $_FILES['sphoto2']['tmp_name'];
$temp_name3 = $_FILES['sphoto3']['tmp_name'];
$temp_name4 = $_FILES['sphoto4']['tmp_name'];
$temp_name5 = $_FILES['sphoto5']['tmp_name'];
$temp_name6 = $_FILES['sphoto6']['tmp_name'];
$temp_name7 = $_FILES['sphoto7']['tmp_name'];
$temp_name8 = $_FILES['sphoto8']['tmp_name'];
$temp_name9 = $_FILES['sphoto9']['tmp_name'];
$temp_name10 = $_FILES['sphoto10']['tmp_name'];
$temp_name11 = $_FILES['sphoto11']['tmp_name'];
$temp_name12 = $_FILES['sphoto12']['tmp_name'];

//保存先のディレクトリ
$dir = '../../client_admin/photo/';
							
$dir2 = 'photo/';
						
//拡張子
$jpeg = '.jpg';
//保存先のファイル名
	$upload_name1 = $dir . $no . '_1' . $jpeg;
	$upload_name2 = $dir . $no . '_2' . $jpeg;
	$upload_name3 = $dir . $no . '_3' . $jpeg;
	$upload_name4 = $dir . $no . '_4' . $jpeg;
	$upload_name5 = $dir . $no . '_5' . $jpeg;
	$upload_name6 = $dir . $no . '_6' . $jpeg;
	$upload_name7 = $dir . $no . '_7' . $jpeg;
	$upload_name8 = $dir . $no . '_8' . $jpeg;
	$upload_name9 = $dir . $no . '_9' . $jpeg;
	$upload_name10 = $dir . $no . '_10' . $jpeg;
	$upload_name11 = $dir . $no . '_11' . $jpeg;
	$upload_name12 = $dir . $no . '_12' . $jpeg;
	// m
	$upload_name1_m = $dir . $no . '_1_m' . $jpeg;
	$upload_name2_m = $dir . $no . '_2_m' . $jpeg;
	$upload_name3_m = $dir . $no . '_3_m' . $jpeg;
	$upload_name4_m = $dir . $no . '_4_m' . $jpeg;
	$upload_name5_m = $dir . $no . '_5_m' . $jpeg;
	$upload_name6_m = $dir . $no . '_6_m' . $jpeg;
	$upload_name7_m = $dir . $no . '_7_m' . $jpeg;
	$upload_name8_m = $dir . $no . '_8_m' . $jpeg;
	$upload_name9_m = $dir . $no . '_9_m' . $jpeg;
	$upload_name10_m = $dir . $no . '_10_m' . $jpeg;
	$upload_name11_m = $dir . $no . '_11_m' . $jpeg;
	$upload_name12_m = $dir . $no . '_12_m' . $jpeg;

//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $photo_name11 == $empty && $photo_name12 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty && $delete11 == $empty && $delete12 == $empty) {
	echo '<p>写真の登録はありません</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<div class=\"shopphoto_page_box\">
								<p style=\"margin-bottom: 0;\">
									<label>
										<span>■サムネイル画像</span>
									</label>
								</p>
								<table>
									<tr>
										<td class=\"t_castgallery\">\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name1. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真1]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		if($width<$height){
			echo "<p>一枚目は横写真のみアップロード可能です。</p>\n";
		}else{

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
			if(file_exists('./photo/'.$no.'_1_m.jpg')){
			unlink('./photo/'.$no.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		
		
		echo "</td>\n";
		echo "</tr>	</table></div>\n";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		}
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name1 == $empty) {
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
		echo "<div class=\"shopphoto_page_box_2\">
				<p style=\"margin-bottom: 0;\">
									<label>
										<span>■No Photo画像</span>
									</label>
								</p>
								<table>
									<tr>
										<td class=\"t_castgallery\">\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name10. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name10);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真10]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('./photo/'.$no.'_10_m.jpg')){
			unlink('./photo/'.$no.'_10_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name10_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$no.'_10_m.jpg';
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
		echo "</tr>									
								</table>
							</div>\n";
	
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
//JPEG形式の画像をアップロードする（6枚目）//
/////////////////////////////////////////////
if (($photo_type6 == 'image/jpeg') || ($photo_type6 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name6 , $upload_name6);
	
	if ($result) {
		echo " <div class=\"shopphoto_page_box_2\">
				<p style=\"margin-bottom: 0;\">
									<label>
										<span></span>
									</label>
								</p>
								<table>
									<tr>
										<td class=\"t_castgallery\">\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name6. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name6);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真2]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('./photo/'.$no.'_6_m.jpg')){
			unlink('./photo/'.$no.'_6_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name6_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$no.'_6_m.jpg';
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
		echo "</tr>									
								</table>
							</div>\n";
	
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
//JPEG形式の画像をアップロードする（2枚目）//
/////////////////////////////////////////////
							
							
echo "<div class=\"shopphoto_page_box_2\">
				<p style=\"margin-bottom: 0;\">
									<label>
										<span></span>
									</label>
								</p>
								<table>\n";	
							
if (($photo_type2 == 'image/jpeg') || ($photo_type2 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name2 , $upload_name2);
	
	if ($result) {
		echo "<tr>
										<td class=\"t_castgallery\">
											<div class=\"castphoto_number\">1枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name2. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name2);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真3]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('./photo/'.$no.'_2_m.jpg')){
			unlink('./photo/'.$no.'_2_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name2_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$no.'_2_m.jpg';
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
		echo "<tr>
										<td class=\"t_castgallery\">
											<div class=\"castphoto_number\">2枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name3. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name3);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真3]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('./photo/'.$no.'_3_m.jpg')){
			unlink('./photo/'.$no.'_3_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name3_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$no.'_3_m.jpg';
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
		echo "<tr>
										<td class=\"t_castgallery\">
											<div class=\"castphoto_number\">3枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name4. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name4);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真4]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('./photo/'.$no.'_4_m.jpg')){
			unlink('./photo/'.$no.'_4_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name4_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$no.'_4_m.jpg';
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
		echo "<tr>
										<td class=\"t_castgallery\">
											<div class=\"castphoto_number\">4枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name5. '?' . $koshin . '" class="lozad castphoto_contain_check">';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name5);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真5]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
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
			if(file_exists('./photo/'.$no.'_5_m.jpg')){
			unlink('./photo/'.$no.'_5_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name5_m , $quality)) {
				echo '<p>->サムネイル画像保存(_m)</p>';
			} else {
				echo '<p>->サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>->サムネイル画像作成失敗</p>';
		}
		
		//横写真の時は携帯表示用に画像を90度回転
		$img_name = './photo/'.$no.'_5_m.jpg';
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

echo "</table></div>\n";


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
$data = mysqli_query($sql, "SELECT * FROM `shop_tb` WHERE no LIKE '$no'");
while($row=mysqli_fetch_assoc($data)) {
	include('../parts/basic_hensu.php');
}


if ($photo_name1 != $empty) {$sphoto1 = $dir2 . $no . '_1';}
if ($photo_name2 != $empty) {$sphoto2 = $dir2 . $no . '_2';}
if ($photo_name3 != $empty) {$sphoto3 = $dir2 . $no . '_3';}
if ($photo_name4 != $empty) {$sphoto4 = $dir2 . $no . '_4';}
if ($photo_name5 != $empty) {$sphoto5 = $dir2 . $no . '_5';}
if ($photo_name6 != $empty) {$sphoto6 = $dir2 . $no . '_6';}
if ($photo_name7 != $empty) {$sphoto7 = $dir2 . $no . '_7';}
if ($photo_name8 != $empty) {$sphoto8 = $dir2 . $no . '_8';}
if ($photo_name9 != $empty) {$sphoto9 = $dir2 . $no . '_9';}
if ($photo_name10 != $empty) {$sphoto10 = $dir2 . $no . '_10';}
if ($photo_name11 != $empty) {$sphoto11 = $dir . $no . '_11';}
if ($photo_name12 != $empty) {$sphoto12 = $dir . $no . '_12';}


//削除写真のデータを空に
if($delete1=='delete'){$sphoto1='';}
if($delete2=='delete'){$sphoto2='';}
if($delete3=='delete'){$sphoto3='';}
if($delete4=='delete'){$sphoto4='';}
if($delete5=='delete'){$sphoto5='';}
if($delete6=='delete'){$sphoto6='';}
if($delete7=='delete'){$sphoto7='';}
if($delete8=='delete'){$sphoto8='';}
if($delete9=='delete'){$sphoto9='';}
if($delete10=='delete'){$sphoto10='';}
if($delete11=='delete'){$sphoto11='';}
if($delete12=='delete'){$sphoto12='';}

mysqli_query($sql, "UPDATE `shop_tb` SET `sphoto1`='$sphoto1', `sphoto2`='$sphoto2', `sphoto3`='$sphoto3', `sphoto4`='$sphoto4', `sphoto5`='$sphoto5', `sphoto6`='$sphoto6', `sphoto7`='$sphoto7', `sphoto8`='$sphoto8', `sphoto9`='$sphoto9', `sphoto10`='$sphoto10' , `sphoto11`='$sphoto11', `sphoto12`='$sphoto12' WHERE `no` LIKE '$no' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$no.'_1.jpg');
	unlink('./photo/'.$no.'_1_m.jpg');

	echo "<p>".$s_name."写真1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('./photo/'.$no.'_2.jpg');
	unlink('./photo/'.$no.'_2_m.jpg');
	
	echo "<p>".$s_name."写真2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('./photo/'.$no.'_3.jpg');
	unlink('./photo/'.$no.'_3_m.jpg');
	echo "<p>".$s_name."写真3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('./photo/'.$no.'_4.jpg');
	unlink('./photo/'.$no.'_4_m.jpg');
	echo "<p>".$s_name."写真4枚目を削除しました。</p>\n";
}
if($delete5=='delete'){
	unlink('./photo/'.$no.'_5.jpg');
	unlink('./photo/'.$no.'_5_m.jpg');
	echo "<p>".$s_name."写真5枚目を削除しました。</p>\n";
}
if($delete6=='delete'){
	unlink('./photo/'.$no.'_6.jpg');
	unlink('./photo/'.$no.'_6_m.jpg');

	echo "<p>".$s_name."写真6枚目を削除しました。</p>\n";
}
if($delete7=='delete'){
	unlink('./photo/'.$no.'_7.jpg');
	unlink('./photo/'.$no.'_7_m.jpg');

	echo "<p>".$s_name."写真7枚目を削除しました。</p>\n";
}
if($delete8=='delete'){
	unlink('./photo/'.$no.'_8.jpg');
	unlink('./photo/'.$no.'_8_m.jpg');

	echo "<p>".$s_name."写真8枚目を削除しました。</p>\n";
}
if($delete9=='delete'){
	unlink('./photo/'.$no.'_9.jpg');
	unlink('./photo/'.$no.'_9_m.jpg');

	echo "<p>".$s_name."写真9枚目を削除しました。</p>\n";
}
if($delete10=='delete'){
	unlink('./photo/'.$no.'_10.jpg');
	unlink('./photo/'.$no.'_10_m.jpg');

	echo "<p>".$s_name."写真10枚目を削除しました。</p>\n";
}
if($delete11=='delete'){
	unlink('./photo/'.$no.'_11.jpg');
	unlink('./photo/'.$no.'_11_m.jpg');

	echo "<p>".$s_name."写真11枚目を削除しました。</p>\n";
}
if($delete12=='delete'){
	unlink('./photo/'.$no.'_12.jpg');
	unlink('./photo/'.$no.'_12_m.jpg');

	echo "<p>".$s_name."写真12枚目を削除しました。</p>\n";
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