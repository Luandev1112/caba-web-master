<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once '../conf.php';

//ファンクションファイル読み込み
require_once '../parts/function.php';


$no = $_GET['no'];

$result=mysqli_query($sql, "SELECT * From `shop_tb` WHERE `no` = '$no'");
while($row=mysqli_fetch_assoc($result)){
include('../parts/basic_hensu.php');
	
include('../parts/area_link_job.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>ナイトグラム説明書｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　ナイトグラム説明書">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>
	<div class="drawer drawer--left">
		<?php include ('php/header.php'); ?>
		
		<div id="page_base">
			<h2>ナイトグラム説明書</h2>
			
			<div class="page_base_in">
				<div class="page_base_box_2">
					<div class="portal_page_base">
						<div class="wrapper" style="padding-bottom: 20px;">
							<div class="element_portal">
								<a href="#portal_1" class="btn_portal">Instagramについて</a>
							</div>
							<div class="element_portal">
								<a href="#portal_2" class="btn_portal">YouTubeについて</a>
							</div>
							<div class="element_portal">
								<a href="#portal_3" class="btn_portal">管理画面ご利用方法</a>
							</div>
							<div class="element_portal">
								<a href="#portal_4" class="btn_portal">システムや求人情報の更新について</a>
							</div>
							<div class="element_portal">
								<a href="#portal_5" class="btn_portal">ランキングについて</a>
							</div>
							<div class="element_portal">
								<a href="#portal_6" class="btn_portal">サイト障害について</a>
							</div>							
						</div>
						
						<span id="portal_1" class="link"></span>
						<div class="portal_title">Instagramについて</div>
						<div class="portal_box">
							<div class="portal_box_subtitle">
								<ul>
									<li>
										登録するにはキャスト名とID（ユーザー名）を運営までお知らせください。
									</li>
									<li>
										非公開、投稿のないアカウントは連携できません。
									</li>
								</ul>
								■登録するにはキャスト名とID（ユーザー名）を運営までお知らせください。<br />
								■非公開、投稿のないアカウントは連携できません。<br />
								■アカウントはお店、キャストそれぞれ1アカウント登録できます。<br />
								■登録後にユーザー名を変更すると連携が解除されます。<br />
								■登録後に投稿をリセット（全て削除）すると連携が解除されます。<br />
								■連携が解除されても改めて登録出来ますのでその際は改めて運営までお知らせください。
							</div>
							<div class="portal_box_title">投稿するにあたり</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>
										基本的にはInstagramの規約に沿ってご活用下さい。但し同業間やお客様など個人を特定できるような投稿は即時削除する場合がございます。
									</li>
									<li>
										お客様やキャスト間であっても他人が写っている場合は本人に投稿の可否を必ずご確認下さい。
									</li>
									<li>
										投稿でトラブルが生じた場合ナイトグラムでは一切責任を負いかねます。
									</li>
									<li>
										過度なトラブルやユーザーからの見過ごせないクレームを受けた場合は確認なくアカウントを連携解除させていただきます。
									</li>
								</ul>
							</div>
							<div class="portal_box_title">投稿の時間差について</div>
							<div class="portal_box_naiyou">
								Instagramで投稿した記事はナイトグラムに反映するまで最大30分前後の時間差が生じます。
							</div>
							<div class="portal_box_title">Instagramの投稿がナイトグラム反映されない主な原因</div>
							<div class="portal_box_naiyou">
								<div class="wrapper">
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>1</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										アカウントを非公開
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>2</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										ID（ユーザー名）を変更
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>3</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										今までの投稿を全て削除し新しく投稿
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>4</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										Instagramのバグ・エラーや仕様変更
									</div>									
								</div>
							</div>							
						</div>
	
						<span id="portal_2" class="link"></span>
						<div class="portal_title">YouTubeについて</div>
						<div class="portal_box">
							<div class="portal_box_subtitle">
								■登録するにはYouTubeチャンネル名やURLを運営までお知らせください。<br />
								■非公開、投稿のないチャンネルは連携できません。<br />
								■アカウントはお店、キャストそれぞれ1アカウント登録できます。<br />
								■登録後にチャンネル名を変更すると連携が解除されます。<br />
								■登録後に投稿をリセット（全て削除）すると連携が解除されます。<br />
								■連携が解除されても改めて登録出来ますのでその際は改めて運営までお知らせください。
							</div>
							<div class="portal_box_title">投稿するにあたり</div>
							<div class="portal_box_naiyou">
								①基本的にはYouTubeの規約に沿ってご活用下さい。但し同業間やお客様など個人を特定できるような投稿は即時削除する場合がございます。<br />
								②お客様やキャスト間であっても他人が写っている場合は本人に投稿の可否を必ずご確認下さい。<br />
								③投稿でトラブルが生じた場合ナイトグラムでは一切責任を負いかねます。<br />
								④過度なトラブルやユーザーからの見過ごせないクレームを受けた場合は確認なく連携解除させていただきます。
							</div>
							<div class="portal_box_title">投稿の時間差について</div>
							<div class="portal_box_naiyou">
								YouTubeで投稿した動画はナイトグラムに反映するまで最大30分前後の時間差が生じます。
							</div>							
						</div>
						
						<span id="" class="link"></span>
						<div class="portal_title">店舗ページ管理画面で出来ること</div>
						<div class="portal_box">
							<div class="portal_box_subtitle">
								■キャストの追加削除<br />
								■キャストの写真更新<br />
								■キャストリストの並び替え<br />
								■出勤情報設定<br />
								■NEWSの設定<br />
								■クーポンの設定
							</div>						
						</div>
						
						<span id="portal_3" class="link"></span>
						<div class="portal_title">管理画面ご利用方法</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								<span style="color: #000000">■キャスト写真はナイトグラムの規定に則りアップしてください。</span><br />
								①本人であること<br />
								②著作権が許可された写真であること<br />
								<br />
								<span style="color: #FF0000">
									※キャスト写真は必ず著作権が無いもの、又は著作権者に使用許可が取れたものを使用して下さい。<br />
									例えばきゃばきゃば・ナイツネットなどの他媒体で撮影した写真は担当者に必ず使用許可を取って下さい。<br />
									また、アニメキャラクターなど本人と全く関係のないものやプロフィールとしてふさわしくないと運営が判断した写真は確認することなく削除いたします。
								</span>
							</div>
							
							<div class="portal_box_title">写真をアップする方法</div>
							<div class="portal_box_naiyou">
								<img src="img/demo1.GIF" width="70%"><br />
								<div class="wrapper">
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>1</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										管理画面の左上のメニューをタップ
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>2</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										キャスト設定をタップ
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>3</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										各キャストの「写真設定」をタップ
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>4</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										「写真選択」をタップして、サムネイルにしたい写真を選択
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>5</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										青枠のトリミングエリアを調整して「登録する」をタップして完了
									</div>									
								</div>
							</div>							
							
							<div class="portal_box_title">出勤情報について</div>
							<div class="portal_box_naiyou">
								①当日の出勤情報を一覧で入力又は一週間分の出勤情報をキャスト個別に入力出来ます。併用してご活用ください。<br />
								②出勤情報の日付の切り替わりは朝5:00です。
							</div>
							<div class="portal_box_title">NEWSの設定</div>
							<div class="portal_box_naiyou">
								①イベント情報・求人情報・休業日などナイトグラムユーザーに投稿できます。<br />
								②最大10項目まで投稿可能です。<br />
								③最新のNEWSはナイトグラムエリアトップに表示されます。<br />
								④投稿したNEWSは編集削除出来ます。<br />
								⑤削除日を予め指定することも出来ます。指定した場合は掲載終了日の0:00に削除されます。
							</div>
							<div class="portal_box_title">クーポンについて</div>
							<div class="portal_box_naiyou">
								①割引クーポンやドリンクサービスなどナイトグラムユーザーに投稿できます。<br />
								②投稿数は無制限です。<br />
								③投稿したクーポンは編集削除出来ます。<br />
								④削除日を予め指定することも出来ます。指定した場合は掲載終了日の0:00に削除されます。
							</div>							
						</div>
						
						<span id="portal_4" class="link"></span>
						<div class="portal_title">システムや求人情報の更新について</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								①お店の基本情報、求人情報など変更する際には運営までご連絡ください。<br />
								②ショップロゴや求人画像はデータをご提供いただくことも可能です。<br />
								画像サイズ：1000px × 1000px<br />
								データ形式：JPG
							</div>							
						</div>
						
						<span id="portal_5" class="link"></span>
						<div class="portal_title">ランキングについて</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								ランキングの計測方法はユーザー数で計測されます。<br />
								週間ランキング：先週の月曜日朝5時～翌月曜日4時59分までの結果が表示されます。<br />
								月間ランキング：先月の結果が表示されます。
							</div>							
						</div>
						
						<span id="portal_6" class="link"></span>
						<div class="portal_title">サイト障害について</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								①サーバ障害やアクセス障害などは起こる可能性がございます。<br />
								②ナイトグラムはInstagramとYouTubeを使用して運営していますのでInstagramやYou Tubeに障害が起こった場合はナイトグラムも障害が起こる可能性がございます。<br />
								また、InstagramやYouTubeの仕様が変更になった場合も障害が起こる可能性がございます。<br />
								③障害が2週間以上発生した場合のみ障害発生期間分の掲載期間の延長を致します。<br />
								④サーバー障害・システム障害・アクセス障害・Instagram障害・YouTube障害において掲載期間延長以外の責任は一切負いません。
							</div>							
						</div>						
					
					</div>
				</div><!--page_base_box_2-->
			</div><!--page_base_in-->
		
		</div>

  <?php include ('php/footer.php'); ?>

</main>

</div><!--drawer drawer--left-->

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
</body>

</html>