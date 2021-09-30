<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	//ファンクションファイル読み込み
require_once '../parts/function.php';

$no = $_POST['no'];

$name2 = $_POST['name2'];


$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト写真確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト写真確認">

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

<body><?php
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
	<div id="top_fade">
		<div class="drawer drawer--left">
			<?php include ('php/header.php'); ?>
			<div id="page_base">
				<h2><?php echo $s_name; ?><br /><span style="font-size: 70%;">キャスト写真確認</span></h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1"></div>
						<form action="cast_photo_upload.php" method="post" id="form" >
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
$dir = '../../client_admin/photo/';
							
$dir2 = 'photo/';
							
//拡張子
if($photo_type1=='image/jpeg'||$photo_type1=='image/pjpeg'){
	$jpeg = '.jpg';
}elseif($photo_type1=='image/gif'){
	$jpeg = '.gif';
}elseif($photo_type1=='image/png'){
	$jpeg = '.png';
}else{
	$jpeg = '.jpg';
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
								
  $profileImageX_1 = $_POST['profileImageX_1'];
  $profileImageY_1 = $_POST['profileImageY_1'];
  $profileImageW_1 = $_POST['profileImageW_1'];
  $profileImageH_1 = $_POST['profileImageH_1'];
							  
$profileImageX_2 = $_POST['profileImageX_2'];
  $profileImageY_2 = $_POST['profileImageY_2'];
  $profileImageW_2 = $_POST['profileImageW_2'];
  $profileImageH_2 = $_POST['profileImageH_2'];

//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty) {
	
	echo '<tr><td>写真の登録はありません。</td></tr>';
}
	
/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
							
if (($photo_type10 == 'image/jpeg') || ($photo_type10 == 'image/pjpeg') || ($photo_type10 == 'image/gif') || ($photo_type10 == 'image/png')) {
	
	// アップロードする前に画像を理サイジングする。
  $image = imagecreatefromjpeg($temp_name10);

  $image_size = getimagesize($temp_name10);
  //アップロードされた画像の幅と高さを取り出す
  $width = $image_size[0];
  $height = $image_size[1];

  //サムネイルの大きさの画像を新規作成
  $image_m = imagecreatetruecolor(600 , 600);

  //アップロードされた画像からサムネイル画像を作成
  $result_m = imagecopyresampled($image_m , $image , 0,0, $profileImageX_2,$profileImageY_2, 600 , 600 , $profileImageW_2, $profileImageH_2);

  imagejpeg($image_m , $temp_name10 , $quality);
	
	//アップロード（移動）
	$result = move_uploaded_file($temp_name10 , $upload_name10);
	
	if ($result) {
		echo "<tr><td class=\"t_castphoto\"><div class=\"castphoto_number\">サムネイル</div>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name10. '?' . $koshin . '" class="lozad castphoto_contain_check"><br />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name10);
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
		$image = imagecreatefromjpeg($upload_name10);

		//サムネイルの大きさの画像を新規作成
		$image_m = imagecreatetruecolor($width_m , $height_m);
		
		//アップロードされた画像からサムネイル画像を作成
		$result_m = imagecopyresampled($image_m , $image , 0,0, 0,0, $width_m , $height_m , $width , $height);
		
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('../photo/'.$name2.'_10_m.jpg')){
			unlink('../photo/'.$name2.'_10_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name10_m , $quality)) {
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
} elseif ($photo_name10 == $empty) {
	echo '';
} else {
	echo '<tr><td>■JPEG形式の画像をアップロードしてください。</td></tr>';
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
$data = mysqli_query($sql2, "SELECT * FROM `data` WHERE name2 LIKE '$name2'");
while($row=mysqli_fetch_assoc($data)) {
	include('../parts/basic_hensu2.php');
}


if ($photo_name1 != $empty) {$photo1 = $dir2 . $name2 . '_1';}
if ($photo_name2 != $empty) {$photo2 = $dir2 . $name2 . '_2';}
if ($photo_name3 != $empty) {$photo3 = $dir2 . $name2 . '_3';}
if ($photo_name4 != $empty) {$photo4 = $dir2 . $name2 . '_4';}
if ($photo_name5 != $empty) {$photo5 = $dir2 . $name2 . '_5';}
if ($photo_name6 != $empty) {$photo6 = $dir2 . $name2 . '_6';}
if ($photo_name7 != $empty) {$photo7 = $dir2 . $name2 . '_7';}
if ($photo_name8 != $empty) {$photo8 = $dir2 . $name2 . '_8';}
if ($photo_name9 != $empty) {$photo9 = $dir2 . $name2 . '_9';}
if ($photo_name10 != $empty) {$photo10 = $dir2 . $name2 . '_10';}


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
$option13=$jpeg;
//CSVファイルへ書き込み
//$handle = fopen('csv/data.csv' , 'w');
//flock($handle , LOCK_EX);
//foreach($data as $item)fputs($handle , $item);
//fclose($handle);
mysqli_query($sql2, "UPDATE `data` SET `option13`='$option13',`photo1`='$photo1', `photo2`='$photo2', `photo3`='$photo3', `photo4`='$photo4', `photo5`='$photo5', `photo6`='$photo6', `photo7`='$photo7', `photo8`='$photo8', `photo9`='$photo9', `photo10`='$photo10' WHERE `name2` LIKE '$name2' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('../photo/'.$name2.'_1.jpg');
	unlink('../photo/'.$name2.'_1_m.jpg');
	
	echo "<p>".$name."写真1枚目を削除しました。</p>\n";
}
if($delete2=='delete'){
	unlink('../photo/'.$name2.'_2.jpg');
	unlink('../photo/'.$name2.'_2_m.jpg');
		
	echo "<p>".$name."写真2枚目を削除しました。</p>\n";
}
if($delete3=='delete'){
	unlink('../photo/'.$name2.'_3.jpg');
	unlink('../photo/'.$name2.'_3_m.jpg');
		
	echo "<p>".$name."写真3枚目を削除しました。</p>\n";
}
if($delete4=='delete'){
	unlink('../photo/'.$name2.'_4.jpg');
	unlink('../photo/'.$name2.'_4_m.jpg');
		
	echo "<p>".$name."写真4枚目を削除しました。</p>\n";
}
if($delete5=='delete'){
	unlink('../photo/'.$name2.'_5.jpg');
	unlink('../photo/'.$name2.'_5_m.jpg');
		
	echo "<p>".$name."写真5枚目を削除しました。</p>\n";
}
if($delete6=='delete'){
	unlink('../photo/'.$name2.'_6.jpg');
	unlink('../photo/'.$name2.'_6_m.jpg');

	echo "<p>".$name."写真6枚目を削除しました。</p>\n";
}
if($delete7=='delete'){
	unlink('../photo/'.$name2.'_7.jpg');
	unlink('../photo/'.$name2.'_7_m.jpg');

	echo "<p>".$name."写真7枚目を削除しました。</p>\n";
}
if($delete8=='delete'){
	unlink('../photo/'.$name2.'_8.jpg');
	unlink('../photo/'.$name2.'_8_m.jpg');

	echo "<p>".$name."写真8枚目を削除しました。</p>\n";
}
if($delete9=='delete'){
	unlink('../photo/'.$name2.'_9.jpg');
	unlink('../photo/'.$name2.'_9_m.jpg');

	echo "<p>".$name."写真9枚目を削除しました。</p>\n";
}
if($delete10=='delete'){
	unlink('../photo/'.$name2.'_10.jpg');
	unlink('../photo/'.$name2.'_10_m.jpg');

	echo "<p>".$name."サムネイル画像を削除しました。</p>\n";
}
?>
						  </table>
							<p>
							  
							  
							  <!--<input type="hidden" name="name2" value="<?php echo $name2; ?>" />
								<input type="hidden" name="option13" value="<?php echo $option13; ?>" />
							  <input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
						  </p>
						  <div class="castphoto_button">
							<button type="submit" class="formbtn_2">登録する</button>
						</div>-->
						</form>
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