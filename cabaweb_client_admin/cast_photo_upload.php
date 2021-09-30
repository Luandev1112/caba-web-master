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

$name2 = $_POST['name2'];
$option13 = $_POST['option13'];

$result=mysqli_query($sql3, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu3.php');
include('../cabaweb_master_admin/parts/schetime.php');
}

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `login_id` = '$yobi1'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト写真確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト写真確認">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">
<meta http-equiv="refresh" content="0;URL=cast.php?master_id=<?php echo $master_id; ?>">
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
				<h2>キャスト写真確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
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
if($photo_type1=='image/jpeg'||$photo_type1=='image/pjpeg'){
	$jpeg = '.jpg';
}elseif($photo_type1=='image/gif'){
	$jpeg = '.gif';
}elseif($photo_type1=='image/png'){
	$jpeg = '.png';
}
								
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
	
	echo '<tr><td>写真の登録はありません。</td></tr>';
}
	
/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
							
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg') || ($photo_type1 == 'image/gif') || ($photo_type1 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<tr><td class=\"t_castphoto\"><div class=\"castphoto_number\">サムネイル</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name1. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if($width>$height){

echo <<<GOLGO
  
  <aside>
  
  <div class="error_txt">
  ※ERROR 1<br />
  アップロード画像サイズの縦横比が違います。
  もう一度やり直してください。
  </div><p><a href="#" onclick="history.back(); return false;">直前のページに戻る</a></p>
		</aside>

</section>
  

  


<footer id="footer">
copyright©2018 Monochrome Design Studio.
</footer>
</body>
</html>



GOLGO;
		exit();
	}
		if($width=$height){
			
		

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
			if(file_exists('../photo/'.$name2.'_1_m.jpg')){
			unlink('../photo/'.$name2.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '<p>サムネイル画像保存</p>';
			} else {
				echo '<p>サムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>サムネイル画像作成失敗</p>';
		}
			
		
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		}
		
	echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name1 == $empty) {
	echo '';
} else {
	echo '<tr><td>■JPEG形式の画像をアップロードしてください。</td></tr>';
}

								
/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（ナイトグラムサムネイル）//
/////////////////////////////////////////////
if (($photo_type10 == 'image/jpeg') || ($photo_type10 == 'image/pjpeg') || ($photo_type10 == 'image/gif') || ($photo_type10 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name10 , $upload_name10);
	
	if ($result) {
		echo "<tr><td class=\"t_portal\"><div class=\"castphoto_number\">サムネイル</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name10. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name10);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真10]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name10);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$name2.'_10_m.jpg')){
			unlink('./photo/'.$name2.'_10_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name10_m , $quality)) {
				echo '<p>ナイトグラムサムネイル画像保存</p>';
			} else {
				echo '<p>ナイトグラムサムネイル画像保存失敗</p>';
			}
		} else {
			echo '<p>ナイトグラムサムネイル画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name10 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}								

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type2 == 'image/jpeg') || ($photo_type2 == 'image/pjpeg') || ($photo_type2 == 'image/gif') || ($photo_type2 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name2 , $upload_name2);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">1枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name2. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name2);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真1]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name2);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_2_m.jpg')){
			unlink('../photo/'.$name2.'_2_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name2_m , $quality)) {
				echo '<p>1枚目画像保存</p>';
			} else {
				echo '<p>1枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>1枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name2 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}		

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（2枚目）//
/////////////////////////////////////////////
								
if (($photo_type3 == 'image/jpeg') || ($photo_type3 == 'image/pjpeg') || ($photo_type3 == 'image/gif') || ($photo_type3 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name3 , $upload_name3);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">2枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name3. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name3);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真2]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name3);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_3_m.jpg')){
			unlink('../photo/'.$name2.'_3_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name3_m , $quality)) {
				echo '<p>2枚目画像保存</p>';
			} else {
				echo '<p>2枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>2枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name3 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}		


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（3枚目）//
/////////////////////////////////////////////
								
if (($photo_type4 == 'image/jpeg') || ($photo_type4 == 'image/pjpeg') || ($photo_type4 == 'image/gif') || ($photo_type4 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name4 , $upload_name4);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">3枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name4. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name4);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真3]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name4);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_4_m.jpg')){
			unlink('../photo/'.$name2.'_4_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name4_m , $quality)) {
				echo '<p>3枚目画像保存</p>';
			} else {
				echo '<p>3枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>3枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name4 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}		



/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（4枚目）//
/////////////////////////////////////////////
if (($photo_type5 == 'image/jpeg') || ($photo_type5 == 'image/pjpeg') || ($photo_type5 == 'image/gif') || ($photo_type5 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name5 , $upload_name5);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">4枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name5. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name5);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真4]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name5);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_5_m.jpg')){
			unlink('../photo/'.$name2.'_5_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name5_m , $quality)) {
				echo '<p>4枚目画像保存</p>';
			} else {
				echo '<p>4枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>4枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name5 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}		



/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（5枚目）//
/////////////////////////////////////////////
if (($photo_type6 == 'image/jpeg') || ($photo_type6 == 'image/pjpeg') || ($photo_type6 == 'image/gif') || ($photo_type6 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name6 , $upload_name6);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">5枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name6. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name6);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真5]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name6);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_6_m.jpg')){
			unlink('../photo/'.$name2.'_6_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name6_m , $quality)) {
				echo '<p>5枚目画像保存</p>';
			} else {
				echo '<p>5枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>5枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name6 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}		


/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（6枚目）//
/////////////////////////////////////////////
if (($photo_type7 == 'image/jpeg') || ($photo_type7 == 'image/pjpeg') || ($photo_type7 == 'image/gif') || ($photo_type7 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name7 , $upload_name7);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">6枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name7. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name7);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真6]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name7);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_7_m.jpg')){
			unlink('../photo/'.$name2.'_7_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name7_m , $quality)) {
				echo '<p>6枚目画像保存</p>';
			} else {
				echo '<p>6枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>6枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name7 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（7枚目）//
/////////////////////////////////////////////
if (($photo_type8 == 'image/jpeg') || ($photo_type8 == 'image/pjpeg') || ($photo_type8 == 'image/gif') || ($photo_type8 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name8 , $upload_name8);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">7枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name8. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name8);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真7]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name8);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_8_m.jpg')){
			unlink('../photo/'.$name2.'_8_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name8_m , $quality)) {
				echo '<p>7枚目画像保存</p>';
			} else {
				echo '<p>7枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>7枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		

	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name8 == $empty) {
	echo '';
} else {
	echo '<p>■JPEG形式の画像をアップロードしてください。</p>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（8枚目）//
/////////////////////////////////////////////
if (($photo_type9 == 'image/jpeg') || ($photo_type9 == 'image/pjpeg') || ($photo_type9 == 'image/gif') || ($photo_type9 == 'image/png')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name9 , $upload_name9);
	
	if ($result) {
		echo "<tr><td class=\"t_castgallery\"><div class=\"castphoto_number\">8枚目</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name9. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name9);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '600') {
			echo '<p>[写真8]は横幅600px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
		//サムネイル画像の幅と高さを決める
		


			// _mの幅と高さ
			$width_m = $photo_m;
			$height_m = round($width_m*$height/$width);

		//アップロードされた画像を取り出す
		$image = imagecreatefromjpeg($upload_name9);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_9_m.jpg')){
			unlink('../photo/'.$name2.'_9_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name9_m , $quality)) {
				echo '<p>8枚目画像保存</p>';
			} else {
				echo '<p>8枚目画像保存失敗</p>';
			}
		} else {
			echo '<p>8枚目画像作成失敗</p>';
		}
				
		
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
echo '</td></tr>';
		
	} else {
		echo '<tr><td>アップロード失敗</td></tr>';
	}
} elseif ($photo_name9 == $empty) {
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
$data = mysqli_query($sql3, "SELECT * FROM `data` WHERE name2 LIKE '$name2'");
while($row=mysqli_fetch_assoc($data)) {
	include('../cabaweb_master_admin/parts/basic_hensu3.php');
}


if ($photo_name1 != $empty) {$photo1 = $dir . $name2 . '_1';}
if ($photo_name2 != $empty) {$photo2 = $dir . $name2 . '_2';}
if ($photo_name3 != $empty) {$photo3 = $dir . $name2 . '_3';}
if ($photo_name4 != $empty) {$photo4 = $dir . $name2 . '_4';}
if ($photo_name5 != $empty) {$photo5 = $dir . $name2 . '_5';}
if ($photo_name6 != $empty) {$photo6 = $dir . $name2 . '_6';}
if ($photo_name7 != $empty) {$photo7 = $dir . $name2 . '_7';}
if ($photo_name8 != $empty) {$photo8 = $dir . $name2 . '_8';}
if ($photo_name9 != $empty) {$photo9 = $dir . $name2 . '_9';}
if ($photo_name10 != $empty) {$photo10 = $dir . $name2 . '_10';}


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
mysqli_query($sql3, "UPDATE `data` SET `option13`='$option13',`photo1`='$photo1', `photo2`='$photo2', `photo3`='$photo3', `photo4`='$photo4', `photo5`='$photo5', `photo6`='$photo6', `photo7`='$photo7', `photo8`='$photo8', `photo9`='$photo9', `photo10`='$photo10' WHERE `name2` LIKE '$name2' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_1.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_1_m.jpg');
	
	echo "<p>".$name."写真1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_2.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_2_m.jpg');
		
	echo "<p>".$name."写真2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_3.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_3_m.jpg');
		
	echo "<p>".$name."写真3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_4.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_4_m.jpg');
		
	echo "<p>".$name."写真4枚目を削除しました。</p>\n";
}
if($delete5=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_5.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_5_m.jpg');
		
	echo "<p>".$name."写真5枚目を削除しました。</p>\n";
}
if($delete6=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_6.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_6_m.jpg');

	echo "<p>".$name."写真6枚目を削除しました。</p>\n";
}
if($delete7=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_7.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_7_m.jpg');

	echo "<p>".$name."写真7枚目を削除しました。</p>\n";
}
if($delete8=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_8.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_8_m.jpg');

	echo "<p>".$name."写真8枚目を削除しました。</p>\n";
}
if($delete9=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_9.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_9_m.jpg');

	echo "<p>".$name."写真9枚目を削除しました。</p>\n";
}
if($delete10=='delete'){
	unlink('../cabaweb_master_admin/photo/'.$name2.'_10.jpg');
	unlink('../cabaweb_master_admin/photo/'.$name2.'_10_m.jpg');

	echo "<p>".$name."写真10枚目を削除しました。</p>\n";
}
?>
 
  
				</div>
			</div>
		</div>		
		<?php include ('php/footer.php'); ?>
	</div>
	</div><!--drawer drawer--left-->

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