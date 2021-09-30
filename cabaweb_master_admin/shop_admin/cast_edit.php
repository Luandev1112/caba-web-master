<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';
	
	//ファンクションファイル読み込み
require_once '../parts/function.php';

$name2 = $_GET['name2'];

$result=mysqli_query($sql3, "SELECT * From `data` WHERE `name2` = '$name2'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu3.php');
include('../parts/schetime.php');
}

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `login_id` = '$yobi1'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
}

$result=mysqli_query($sql2, "SELECT * From `shop_tb` WHERE `data5` = '$login_id'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu8.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>キャスト編集｜Admin Tool</title>
<meta name="description" content="管理画面ツール　キャスト編集">

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
				<h2>キャスト編集</h2>
				<div class="page_base_in">
					<div class="page_base_box_2">
						<div class="attention_1">
							最後に必ず「登録」ボタンを押して下さい。<br />
							「登録」ボタンを押さないと反映されません。
						</div>
						<form action="cast_rewrite.php" method="post" id="form">
							<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input name="name2" type="hidden" class="w_per50" value="<?php echo $name2; ?>" />
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
<input type="hidden" name="photo17" value="<?php echo $photo17; ?>" />
<input type="hidden" name="photo18" value="<?php echo $photo18; ?>" />
<input type="hidden" name="option1" value="<?php echo $option1; ?>" />
<input type="hidden" name="option6" value="<?php echo $option6; ?>" />
<input type="hidden" name="option7" value="<?php echo $option7; ?>" />
<input type="hidden" name="option8" value="<?php echo $option8; ?>" />
<input type="hidden" name="option9" value="<?php echo $option9; ?>" />
<input type="hidden" name="option10" value="<?php echo $option10; ?>" />							
<input type="hidden" name="option12" value="<?php echo $option12; ?>" />
<input type="hidden" name="option13" value="<?php echo $option13; ?>" />
<input type="hidden" name="yobi1" value="<?php echo $yobi1; ?>" />
							<input type="hidden" name="option20" value="<?php echo $no; ?>" />
							<input type="hidden" name="option23" value="<?php echo $area; ?>" />
							<input type="hidden" name="option24" value="<?php echo $option24; ?>" />
							<input type="hidden" name="option25" value="<?php echo $option25; ?>" />
							
							<p>
								<label><span>お名前（<font color="#FF0000">必須</font>）</span><input type="text" name="name" class="txtfiled" placeholder="例）ゆうこ" value="<?php echo $name; ?>" required></label>
							</p>
							<p>
								<label><span>年齢</span>
									<select name="age">
       <?php
$data = file('parts/age.csv');
for($i=0; $i<sizeof($data); $i++) {
	$line = explode(',' , $data[$i]);
	$line = $line[0];
	//改行コードを削除
	$line = str_replace("\r\n" , "" , $line);
	
	if ($line == $age) {
		echo "<option value=\"$line\" selected=\"selected\">$line</option>\n";
	}else{
		echo "<option value=\"$line\">$line</option>\n";
	}
}
?>
        </select>
								</label>
							</p>
							<p>
								<label><span>お誕生日</span><input type="text" name="profinfo1" class="txtfiled" placeholder="例）1990年4月4日" value="<?php echo $profinfo1; ?>" ></label>
							</p>
							<p><?php
if($profinfo2=='--'){$b_type0=' selected="selected"';}
if($profinfo2=='A型'){$b_type1=' selected="selected"';}
if($profinfo2=='O型'){$b_type2=' selected="selected"';}
if($profinfo2=='B型'){$b_type3=' selected="selected"';}
if($profinfo2=='AB型'){$b_type4=' selected="selected"';}
?>
								<label><span>血液型</span>
									<select name="profinfo2">
      <option value="--"<?php echo $b_type0; ?>>--</option>
      <option value="A型"<?php echo $b_type1; ?>>A型</option>
      <option value="O型"<?php echo $b_type2; ?>>O型</option>
      <option value="B型"<?php echo $b_type3; ?>>B型</option>
      <option value="AB型"<?php echo $b_type4; ?>>AB型</option>   
									</select>
								</label>
							</p>
							<p>
								<label><span>出身地</span><input type="text" name="profinfo3" class="txtfiled" placeholder="例）東京" value="<?php echo $profinfo3; ?>"></label>
							</p>
							<p>
								<label><span>趣味・特技</span><input type="text" name="profinfo4" class="txtfiled" placeholder="例）料理" value="<?php echo $profinfo4; ?>"></label>
							</p>
							<p>
								<label><span>好みのタイプ</span><input type="text" name="profinfo5" class="txtfiled" placeholder="例）優しい人" value="<?php echo $profinfo5; ?>"></label>
							</p>
							<p>
								<label><span>好きな食べ物</span><input type="text" name="profinfo6" class="txtfiled" placeholder="例）お寿司・焼き肉" value="<?php echo $profinfo6; ?>"></label>
							</p>
							<p>
								<label><span>好きなブランド</span><input type="text" name="profinfo7" class="txtfiled" placeholder="例）グッチ" value="<?php echo $profinfo7; ?>"></label>
							</p>
							<p>
								<label><span>チャームポイント</span><input type="text" name="profinfo8" class="txtfiled" placeholder="例）目" value="<?php echo $profinfo8; ?>"></label>
							</p>
							
							<div class="cast_touroku_area">
								<h3>SNS</h3>
								<p>
									<label><span>Instagram URL</span><input type="url" name="profinfo9" class="txtfiled" placeholder="例）Instagram URL" value="<?php echo $profinfo9; ?>"></label>
								</p>
								<p>
									<label><span>Instagram RSS</span><input type="url" name="option2" class="txtfiled" placeholder="例）Instagram RSS" value="<?php echo $option2; ?>"></label>
								</p>
								<p>
									<label><span>You Tube URL</span><input type="url" name="option3" class="txtfiled" placeholder="例）You Tube URL" value="<?php echo $option3; ?>"></label>
								</p>
								<p>
									<label><span>You Tube RSS</span><input type="url" name="option4" class="txtfiled" placeholder="例）You Tube RSS" value="<?php echo $option4; ?>"></label>
								</p>
								<p>
									<label><span>Twitter URL</span><input type="url" name="profinfo10" class="txtfiled" placeholder="例）Twitter URL" value="<?php echo $profinfo10; ?>"></label>
								</p>
								<p>
									<label><span>Tik Tok URL</span><input type="url" name="option5" class="txtfiled" placeholder="例）Tik Tok URL" value="<?php echo $option5; ?>"></label>
								</p>																
							</div>
<input type="hidden" name="operation" value="edit" />
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
</body>

</html>