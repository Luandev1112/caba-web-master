<?php
	//セッションの復元
	session_start();
	
	//ログインチェック
	require_once 'login_check.php';
	
	//設定ファイル読み込み
	require_once 'conf.php';

//ファンクションファイル読み込み
require_once '../cabaweb_master_admin/parts/function.php';

$master_id = $_GET['master_id'];

$result=mysqli_query($sql, "SELECT * From `shop` WHERE `master_id` = '$master_id'");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');
}

?><!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>きゃばWEB説明書｜CLIENT Admin Tool</title>
<meta name="description" content="管理画面ツール　きゃばWEB説明書">

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
			<h2>きゃばWEB説明書</h2>
  
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
								<a href="#portal_4" class="btn_portal">アップデートについて</a>
							</div>
							<div class="element_portal">
								<a href="#portal_5" class="btn_portal">サイト障害について</a>
							</div>
							<div class="element_portal">
								<a href="#portal_6" class="btn_portal">NIGHTGRAMについて</a>
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
									<li>
										アカウントはお店、キャストそれぞれ1アカウント登録できます。
									</li>
									<li>
										登録後にユーザー名を変更すると連携が解除されます。
									</li>
									<li>
										登録後に投稿をリセット（全て削除）すると連携が解除されます。
									</li>
									<li>
										連携が解除されても改めて登録出来ますのでその際は改めて運営までお知らせください。
									</li>
								</ul>
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
										投稿でトラブルが生じた場合きゃばWEBでは一切責任を負いかねます。
									</li>
									<li>
										過度なトラブルやユーザーからの見過ごせないクレームを受けた場合は確認なくアカウントを連携解除させていただきます。
									</li>
								</ul>
							</div>
							<div class="portal_box_title">投稿の時間差について</div>
							<div class="portal_box_naiyou">
								Instagramで投稿した記事はナイトグラムに反映するまで最大30分前後の時間差が生じます。<br />
								<span style="color: #FF0004">
								※現在、Instagramのアップデートの影響で更新回数を1日2回に制限しております。<br />アップデートに対応次第、更新回数を増やさせていただきます。
								</span>
							</div>
							<div class="portal_box_title">Instagramの投稿がホームページ反映されない主な原因</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>アカウントを非公開</li>
									<li>ID（ユーザー名）を変更</li>
									<li>今までの投稿を全て削除し新しく投稿</li>
									<li>Instagramのバグ・エラーや仕様変更</li>
								</ul>
							</div>							
						</div>
	
						<span id="portal_2" class="link"></span>
						<div class="portal_title">YouTubeについて</div>
						<div class="portal_box">
							<div class="portal_box_subtitle">
								<ul>
									<li>
										登録するにはYouTubeチャンネル名やURLを運営までお知らせください。
									</li>
									<li>
										非公開、投稿のないチャンネルは連携できません。
									</li>
									<li>
										アカウントはお店、キャストそれぞれ1アカウント登録できます。
									</li>
									<li>
										登録後にチャンネル名を変更すると連携が解除されます。
									</li>
									<li>
										登録後に投稿をリセット（全て削除）すると連携が解除されます。
									</li>
									<li>
										連携が解除されても改めて登録出来ますのでその際は改めて運営までお知らせください。
									</li>
								</ul>
							</div>
							<div class="portal_box_title">投稿するにあたり</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>
										基本的にはYouTubeの規約に沿ってご活用下さい。但し同業間やお客様など個人を特定できるような投稿は即時削除する場合がございます。
									</li>
									<li>
										お客様やキャスト間であっても他人が写っている場合は本人に投稿の可否を必ずご確認下さい。
									</li>
									<li>
										投稿でトラブルが生じた場合きゃばWEBでは一切責任を負いかねます。
									</li>
									<li>
										過度なトラブルやユーザーからの見過ごせないクレームを受けた場合は確認なく連携解除させていただきます。
									</li>
								</ul>
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
								<ul>
									<li>キャストの追加削除</li>
									<li>キャストの写真更新</li>
									<li>キャストリストの並び替え</li>
									<li>出勤情報設定</li>
									<li>NEWSの設定</li>
									<li>クーポンの設定</li>
									<li>カレンダー設定</li>
								</ul>
							</div>						
						</div>
						
						<span id="portal_3" class="link"></span>
						<div class="portal_title">管理画面ご利用方法</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								<span style="color: #000000">キャスト写真はきゃばWEBの規定に則りアップしてください。</span><br />
								<br />
								<ul>
									<li>本人であること</li>
									<li>著作権が許可された写真であること</li>
								</ul>
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
								<br />
								<div class="wrapper">
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>1</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										管理画面の左上のメニューをタップ
									</div>
									<div class="element_portal_no_3">
										<div class="triangle"></div>
									</div>
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>2</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										キャスト設定をタップ
									</div>
									<div class="element_portal_no_3">
										<div class="triangle"></div>
									</div>									
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>3</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										各キャストの「写真設定」をタップ
									</div>
									<div class="element_portal_no_3">
										<div class="triangle"></div>
									</div>									
									<div class="element_portal_no_1">
										<div class="maru_no">
											<span>4</span>
										</div>
									</div>
									<div class="element_portal_no_2">
										「写真選択」をタップして、サムネイルにしたい写真を選択
									</div>
									<div class="element_portal_no_3">
										<div class="triangle"></div>
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
								<ul>
									<li>
										当日の出勤情報を一覧で入力又は一週間分の出勤情報をキャスト個別に入力出来ます。併用してご活用ください。
									</li>
									<li>
										出勤情報の日付の切り替わりは朝5:00です。
									</li>
								</ul>
							</div>
							<div class="portal_box_title">NEWSの設定</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>
										イベント情報・求人情報・休業日など投稿できます。
									</li>
									<li>
										最大10項目まで投稿可能です。
									</li>
									<li>
										投稿したNEWSは編集削除出来ます。
									</li>
									<li>
										削除日を予め指定することも出来ます。指定した場合は掲載終了日の0:00に削除されます。
									</li>
								</ul>
							</div>
							<div class="portal_box_title">クーポンについて</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>
										割引クーポンやドリンクサービスなどを投稿できます。
									</li>
									<li>
										投稿数は無制限です。
									</li>
									<li>
										投稿したクーポンは編集削除出来ます。
									</li>
									<li>
										削除日を予め指定することも出来ます。指定した場合は掲載終了日の0:00に削除されます。
									</li>
								</ul>
							</div>
							<div class="portal_box_title">カレンダーについて</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>
										カレンダー機能により長期的なイベントや休業日の投稿ができます。
									</li>
									<li>
										投稿した予定は編集削除出来ます。
									</li>
									<li>
										投稿した予定は設定日を過ぎると自動的に削除されます。
									</li>									
								</ul>
							</div>
							<div class="portal_box_title">店内写真設定</div>
							<div class="portal_box_naiyou">
								<ul>
									<li>
										店内写真をカテゴリごとにそれぞれ最大4枚登録できます。
									</li>
									<li>
										カテゴリはトップページ表示分を含め最大５カテゴリです。
									</li>
								</ul>
							</div>							
						</div>
						
						<span id="portal_4" class="link"></span>
						<div class="portal_title">アップデートについて</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								<ul>
									<li>
										アップデートは全て無料です。
									</li>
									<li>
										色やコンテンツを変更したい場合は運営までご連絡ください。
									</li>
								</ul>
							</div>							
						</div>
						
						<span id="portal_5" class="link"></span>
						<div class="portal_title">サイト障害について</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								<ul>
									<li>
										サーバ障害やアクセス障害などは起こる可能性がございます。
									</li>
									<li>
										きゃばWEBはInstagramとYouTubeを使用して運営していますのでInstagramやYouTubeに障害が起こった場合はナイトグラムも障害が起こる可能性がございます。<br />
										また、InstagramやYouTubeの仕様が変更になった場合も障害が起こる可能性がございます。
									</li>
									<li>
										障害が2週間以上発生した場合のみ障害発生期間分の掲載期間の延長を致します。
									</li>
									<li>
										サーバー障害・システム障害・アクセス障害・Instagram障害・YouTube障害において掲載期間延長以外の責任は一切負いません。
									</li>
								</ul>
							</div>							
						</div>
						
						<span id="portal_6" class="link"></span>
						<div class="portal_title">NIGHTGRAMについて</div>
						<div class="portal_box">
							<div class="portal_box_naiyou">
								<ul>
									<li>
										きゃばWEBご契約中は無料で掲載いたします。
									</li>
									<li>
										キャストリスト、出勤情報、NEWS、クーポンはきゃばWEBと同じ情報が同時に更新されます。
									</li>
									<li>
										Instagram、YouTubeもホームページ同様に連動します。
									</li>
									<li>
										求人情報やシステムなどはホームページの合わせて運営側で更新いたします。
									</li>
									<li>
										キャストサムネイル写真のみ、キャスト設定→写真設定→上から2番めのナイトグラム用にて設定お願いします。<br />
										ホームページと同じで宜しければ同じ写真を設定してください。
									</li>									
								</ul>
								<br />
								NIGHTGRAMのサイトは【<a href="https://www.nightgram.com/" target="_blank">コチラ</a>】
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