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

//フォームからデータ受け取り

$news_id = $_POST['news_id'];
$news_no = $_POST['news_no'];
$start = htmlspecialchars($_POST['start'],ENT_QUOTES);
$end = htmlspecialchars($_POST['end'],ENT_QUOTES);
$sort = $_POST['start'];
$sort2 = $_POST['end'];
$time = $_POST['start'];
$newstitle = htmlspecialchars($_POST['newstitle'],ENT_QUOTES);
$input = htmlspecialchars($_POST['input'],ENT_QUOTES);
$photo1 = htmlspecialchars($_POST['photo1'],ENT_QUOTES);
$jpeg = htmlspecialchars($_POST['jpeg'],ENT_QUOTES);
$link = htmlspecialchars($_POST['link'],ENT_QUOTES);
$blank = $_POST['blank'];
$hotnews = $_POST['hotnews'];
$sort_order = $_POST['sort_order'];
$n_area = $_POST['n_area'];
$n_area2 = $_POST['n_area2'];
$n_gyoushu = $_POST['n_gyoushu'];
$n_link = $_POST['n_link'];
$sort_order = $_POST['sort_order'];

//データを整形
$input = mb_convert_kana($input,'KaV','utf-8');

//追加
$input = str_replace('\\' , '' , $input);
//改行コードの前に改行タグを入れる
$input = nl2br($input);
//改行コードを削除
$input = str_replace("\r\n" , "" , $input);


$sort = str_replace('/' , '' , $sort);
$sort = str_replace('(' , '' , $sort);
$sort = str_replace(')' , '' , $sort);
$hankaku1 = preg_replace('/[^0-9a-zA-Z]/', '', $sort);
$sort2 = str_replace('/' , '' , $sort2);
$sort2 = str_replace('(' , '' , $sort2);
$sort2 = str_replace(')' , '' , $sort2);
$hankaku2 = preg_replace('/[^0-9a-zA-Z]/', '', $sort2);

$y = substr($hankaku1,0,4);
$m = substr($hankaku1,4,2);
$d = substr($hankaku1,-2);

$m = (int)$m;
$d = (int)$d;
$sort2 = $y.$m.$d;

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}

$result=mysqli_query($sql3, "SELECT * From `news` WHERE (sort>='$news_today' or sort='') AND blank='$login_id' AND link='1' ORDER by sort_order LIMIT 1");
$cnt=mysqli_num_rows($result);
while($row=mysqli_fetch_assoc($result)){
//include('parts/basic_hensu.php');

	$sort_order = $row['sort_order'];
	
	$sort_box = $sort_order-1;
}


?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ニュース確認｜Admin Tool</title>
<meta name="description" content="管理画面ツール　ニュース確認">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="css/drawer.min.css">

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
				<h2>ニュース確認</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="hotnews_write.php" method="post" id="form" enctype="multipart/form-data">
							<div class="hotnews_photo_area">
								<?php
//ファイル名の取り出し
$photo_name1 = $_FILES['photo1']['name'];

//ファイルタイプの取り出し
$photo_type1 = $_FILES['photo1']['type'];

//一時ファイル名の取り出し
$temp_name1 = $_FILES['photo1']['tmp_name'];


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
	$upload_name1 = $dir . $news_id . '_1' . $jpeg;
	// m
	$upload_name1_m = $dir . $news_id . '_1_m' . $jpeg;

//データが全部空の時
if ($photo_name1 == $empty && $photo_name2 == $empty && $photo_name3 == $empty && $photo_name4 == $empty && $photo_name5 == $empty && $photo_name6 == $empty && $photo_name7 == $empty && $photo_name8 == $empty && $photo_name9 == $empty && $photo_name10 == $empty && $delete1 == $empty && $delete2 == $empty && $delete3 == $empty && $delete4 == $empty && $delete5 == $empty && $delete6 == $empty && $delete7 == $empty && $delete8 == $empty && $delete9 == $empty && $delete10 == $empty) {
	echo '<h3>■画像登録なし</h3>';
}

/////////////////////////////////////////////
//JPEG形式の画像をアップロードする（1枚目）//
/////////////////////////////////////////////
if (($photo_type1 == 'image/jpeg') || ($photo_type1 == 'image/pjpeg')) {
	//アップロード（移動）
	$result = move_uploaded_file($temp_name1 , $upload_name1);
	
	if ($result) {
		echo "<h3>■画像</h3>\n";
		
		//アップロードの成功
		echo '<img src="" data-src="' . $upload_name1 . '" class="castphoto_contain_check lozad" />';
		
		//アップロードされた画像情報を取り出す
		$image_size = getimagesize($upload_name1);
		//アップロードされた画像の幅と高さを取り出す
		$width = $image_size[0];
		$height = $image_size[1];
		
		if ($width < '400') {
			echo '<p>[写真1]は横幅400px未満です。サイズ確認後最アップロードしてください！</p>';
		}
		
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
		
		
		echo "";
		
		if ($result_m) {
			//古い画像を削除
			if(file_exists('./photo/'.$news_no.'_1_m.jpg')){
			unlink('./photo/'.$news_no.'_1_m.jpg');
			}
			//サムネイル画像の保存 _m
			if (imagejpeg($image_m , $upload_name1_m , $quality)) {
				echo '';
			} else {
				echo '';
			}
		} else {
			echo '';
		}
		
		
		
		echo "";
	
		//画像の破棄
		imagedestroy($image);
		imagedestroy($image_m);
		
		
	
	} else {
		echo '<p>->アップロード失敗</p>';
	}
} elseif ($photo_name1 == $empty) {
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
$data = mysqli_query($sql3, "SELECT * FROM `news` WHERE news_id LIKE '$news_id'");
while($row=mysqli_fetch_assoc($data)) {
	include('../parts/basic_hensu2.php');
}


if ($photo_name1 != $empty) {$photo1 = $dir2 . $news_no. '_1';}



//削除写真のデータを空に
if($delete1=='delete'){$photo1='';}


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
mysqli_query($sql3, "UPDATE `news` SET `photo1`='$photo1' WHERE `news_id` LIKE '$news_id' LIMIT 1");


//写真を削除
if($delete1=='delete'){
	unlink('./photo/'.$news_id.'_1'.$jpeg.'');
	unlink('./photo/'.$news_id.'_1_m'.$jpeg.'');

	echo "<p>".$name."写真1枚目を削除しました。</p>\n";
}

?>
   
  
							</div>
							<p>
								<label>
									<span>■タイトル</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $newstitle; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■掲載終了日</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $start; ?></span>
								</label>
							</p>
							<p>
								<label>
									<span>■内容</span><br />
									<span style="font-size: 80%; color: #4D4D4D;">
										<?php echo $input; ?>
									</span>
								</label>
							</p>
							<p>
								<label>
									<span>■リンクURL</span><br />
									<span style="font-size: 80%; color: #4D4D4D;"><?php echo $n_link; ?></span>
								</label>
							</p>							
							<input type="hidden" name="news_id" value="<?php echo $news_id; ?>" />
							<input type="hidden" name="news_no" value="<?php echo $news_no; ?>" />
<input type="hidden" name="start" value="<?php echo $start; ?>" />
<input type="hidden" name="end" value="<?php echo $end; ?>" />
<input type="hidden" name="sort" value="<?php echo $hankaku1; ?>" />
<input type="hidden" name="sort2" value="<?php echo $sort2; ?>" />
<input type="hidden" name="time" value="<?php
if($wdate == $empty){
	echo date('Y.m.d / G:i');
}else{
	echo $wdate;
}
?>" />
							<input type="hidden" name="newstitle" value="<?php echo $newstitle; ?>" />
<input type="hidden" name="input" value="<?php echo $input; ?>" />
<input type="hidden" name="photo1" value="<?php echo $photo1; ?>" />
<input type="hidden" name="jpeg" value="<?php echo $jpeg; ?>" />
<input type="hidden" name="link" value="<?php echo $link; ?>" />
<input type="hidden" name="blank" value="<?php echo $blank; ?>" />
<input type="hidden" name="hotnews" value="<?php echo $hotnews; ?>" />
		<input type="hidden" name="sort_order" value="<?php echo $sort_order; ?>" />
		<input type="hidden" name="n_area" value="<?php echo $n_area; ?>" />
		<input type="hidden" name="n_area2" value="<?php echo $n_area2; ?>" />
		<input type="hidden" name="n_gyoushu" value="<?php echo $n_gyoushu; ?>" />
							<input type="hidden" name="n_link" value="<?php echo $n_link; ?>" />
							<input type="hidden" name="sort_order" value="<?php echo $sort_box; ?>" />
							<input type="hidden" name="master_id" value="<?php echo $master_id; ?>" />
							<div class="under_button_area_2">
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
function () {
    var today = new Date();
    today.setDate(today.getDate());
    var yyyy = today.getFullYear();
    var mm = ("0"+(today.getMonth()+1)).slice(-2);
    var dd = ("0"+today.getDate()).slice(-2);
    document.getElementById("today").value=yyyy+'-'+mm+'-'+dd;
}
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