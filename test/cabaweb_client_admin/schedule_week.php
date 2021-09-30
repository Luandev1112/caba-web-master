<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>1週間出勤設定｜Admin Tool</title>
<meta name="description" content="管理画面ツール　1週間出勤設定">

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
			<h2>1週間出勤設定</h2>
			<div class="page_base_in">
				<div class="page_base_box_2">				
					<h3>各キャストの出勤設定</h3>
					<div class="wrapper">
						<div class="element_cast">
							<div class="top_cast_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>
									<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>
									<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>
									<div class="top_cast_box_button_b"><a data-target="modal_delete_1" class="btn_sub modal_open">1週間出勤設定</a></div>
									<div class="clear"></div>
									<table>
										<tr>
											<td class="t_week-1">10月11日(水)</td>
											<td class="t_week-2">出勤</td>
										</tr>
										<tr>
											<td class="t_week-1">10月12日(水)</td>
											<td class="t_week-2">出勤</td>
										</tr>
										<tr>
											<td class="t_week-1">10月13日(水)</td>
											<td class="t_week-3">お休み</td>
										</tr>
									</table> 
								</div>
								<!-- モーダル1 -->
								<div id="modal_delete_1" class="modal_box">
									<p>
									<div class="modal_box_title">ななの出勤設定</div>
									<form action="" method="post">
										<table>
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月11日(水)</td>
												<td class="t_weeklist-2"><input type="radio" name="week1" class="radio-input_2" id="radio-01" value="お休み" checked="checked"><label for="radio-01">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week1" class="radio-input_2" id="radio-02" value="出勤"><label for="radio-02">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week1" class="radio-input_2" id="radio-02-2" value="出勤"><label for="radio-02-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>											
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月12日(木)</td>
												<td class="t_weeklist-2"><input type="radio" name="week2" class="radio-input_2" id="radio-03" value="お休み" checked="checked"><label for="radio-03">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week2" class="radio-input_2" id="radio-04" value="出勤"><label for="radio-04">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week2" class="radio-input_2" id="radio-04-2" value="出勤"><label for="radio-04-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月13日(金)</td>
												<td class="t_weeklist-2"><input type="radio" name="week3" class="radio-input_2" id="radio-05" value="お休み" checked="checked"><label for="radio-05">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week3" class="radio-input_2" id="radio-06" value="出勤"><label for="radio-06">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week3" class="radio-input_2" id="radio-06-2" value="出勤"><label for="radio-06-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月14日(土)</td>
												<td class="t_weeklist-2"><input type="radio" name="week4" class="radio-input_2" id="radio-07" value="お休み" checked="checked"><label for="radio-07">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week4" class="radio-input_2" id="radio-08" value="出勤"><label for="radio-08">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week4" class="radio-input_2" id="radio-08-2" value="出勤"><label for="radio-08-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月15日(日)</td>
												<td class="t_weeklist-2"><input type="radio" name="week5" class="radio-input_2" id="radio-09" value="お休み" checked="checked"><label for="radio-09">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week5" class="radio-input_2" id="radio-10" value="出勤"><label for="radio-10">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week5" class="radio-input_2" id="radio-10-2" value="出勤"><label for="radio-10-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月16日(月)</td>
												<td class="t_weeklist-2"><input type="radio" name="week6" class="radio-input_2" id="radio-11" value="お休み" checked="checked"><label for="radio-11">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week6" class="radio-input_2" id="radio-12" value="出勤"><label for="radio-12">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week6" class="radio-input_2" id="radio-12-2" value="出勤"><label for="radio-12-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月17日(火)</td>
												<td class="t_weeklist-2"><input type="radio" name="week7" class="radio-input_2" id="radio-13" value="お休み" checked="checked"><label for="radio-13">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week7" class="radio-input_2" id="radio-14" value="出勤"><label for="radio-14">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week7" class="radio-input_2" id="radio-14-2" value="出勤"><label for="radio-14-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>											
										</table>
										<div class="under_button_area_2">
											<button type="submit" class="formbtn_2">出勤を送信</button>
										</div>
									</form>
									</p>
								<p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
							</div>
						</div>
					</div>

						<div class="element_cast">
							<div class="top_cast_box">
								<div class="top_cast_box_in">
									<div class="photo_thumbs"><img src="" data-src="img/test-1.jpg" class="lozad" alt=""></div>
									<div class="fa_insta"><img src="" data-src="img/cast_instagram.svg" class="lozad"></div>
									<div class="fa_youtube"><img src="" data-src="img/cast_youtube.svg" class="lozad"></div>
									<div class="fa_schedule"><img src="" data-src="img/cast_schedule.svg" class="lozad"></div>
									<p>なな</p>
								</div>
								<div class="top_cast_box_button">
									<div class="top_cast_hyouji">公開中</div>
									<div class="top_cast_box_button_b"><a data-target="modal_delete_2" class="btn_sub modal_open">1週間出勤設定</a></div>
									<div class="clear"></div>
									<table>
										<tr>
											<td class="t_week-1">10月11日(水)</td>
											<td class="t_week-2">出勤</td>
										</tr>
										<tr>
											<td class="t_week-1">10月12日(水)</td>
											<td class="t_week-2">出勤</td>
										</tr>
										<tr>
											<td class="t_week-1">10月13日(水)</td>
											<td class="t_week-3">お休み</td>
										</tr>
									</table> 
								</div>
								<!-- モーダル-->
								<div id="modal_delete_2" class="modal_box">
									<p>
									<div class="modal_box_title">ななの出勤設定</div>
									<form action="" method="post">
										<table>
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月11日(水)</td>
												<td class="t_weeklist-2"><input type="radio" name="week8" class="radio-input_2" id="radio-15" value="お休み" checked="checked"><label for="radio-15">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week8" class="radio-input_2" id="radio-16" value="出勤"><label for="radio-16">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week8" class="radio-input_2" id="radio-16-2" value="出勤"><label for="radio-16-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>											
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月12日(木)</td>
												<td class="t_weeklist-2"><input type="radio" name="week9" class="radio-input_2" id="radio-17" value="お休み" checked="checked"><label for="radio-17">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week9" class="radio-input_2" id="radio-18" value="出勤"><label for="radio-18">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week9" class="radio-input_2" id="radio-18-2" value="出勤"><label for="radio-18-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月13日(金)</td>
												<td class="t_weeklist-2"><input type="radio" name="week10" class="radio-input_2" id="radio-19" value="お休み" checked="checked"><label for="radio-19">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week10" class="radio-input_2" id="radio-20" value="出勤"><label for="radio-20">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week10" class="radio-input_2" id="radio-20-2" value="出勤"><label for="radio-20-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月14日(土)</td>
												<td class="t_weeklist-2"><input type="radio" name="week11" class="radio-input_2" id="radio-21" value="お休み" checked="checked"><label for="radio-21">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week11" class="radio-input_2" id="radio-22" value="出勤"><label for="radio-22">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week11" class="radio-input_2" id="radio-22-2" value="出勤"><label for="radio-22-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月15日(日)</td>
												<td class="t_weeklist-2"><input type="radio" name="week12" class="radio-input_2" id="radio-23" value="お休み" checked="checked"><label for="radio-23">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week12" class="radio-input_2" id="radio-24" value="出勤"><label for="radio-24">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week12" class="radio-input_2" id="radio-24-2" value="出勤"><label for="radio-24-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月16日(月)</td>
												<td class="t_weeklist-2"><input type="radio" name="week13" class="radio-input_2" id="radio-25" value="お休み" checked="checked"><label for="radio-25">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week13" class="radio-input_2" id="radio-26" value="出勤"><label for="radio-26">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week13" class="radio-input_2" id="radio-26-2" value="出勤"><label for="radio-26-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>
											
											<tr>
												<td class="t_weeklist-1" rowspan="2">10月17日(火)</td>
												<td class="t_weeklist-2"><input type="radio" name="week14" class="radio-input_2" id="radio-27" value="お休み" checked="checked"><label for="radio-27">お休み</label></td>
												<td class="t_weeklist-3"><input type="radio" name="week14" class="radio-input_2" id="radio-28" value="出勤"><label for="radio-28">出勤</label></td>
											</tr>
											<tr>
												<td class="t_weeklist-4" colspan="2">
													<input type="radio" name="week14" class="radio-input_2" id="radio-28-2" value="出勤"><label for="radio-28-2">出勤（時間付き）</label>
													<p style="padding-top: 5px;">
														<select name="開始時間">
															<option value="18:00">18:00</option>
															<option value="18:30">18:30</option>
															<option value="19:00">19:00</option>
															<option value="19:30">19:30</option>
															<option value="20:00">20:00</option>
															<option value="20:30">20:30</option>
															<option value="21:00">21:00</option>
															<option value="21:30">21:30</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
														</select>
														～
														<select name="終了時間">
															<option value="LAST">LAST</option>
															<option value="22:00">22:00</option>
															<option value="22:30">22:30</option>
															<option value="23:00">23:00</option>
															<option value="23:30">23:30</option>
															<option value="00:00">00:00</option>
															<option value="00:30">00:30</option>
															<option value="01:00">01:00</option>
															<option value="01:30">01:30</option>
															<option value="02:00">02:00</option>
															<option value="02:30">02:30</option>
															<option value="03:00">03:00</option>
															<option value="03:30">03:30</option>
															<option value="04:00">04:00</option>
															<option value="04:30">04:30</option>
															<option value="05:00">05:00</option>
														</select>													
													</p>												
												</td>
											</tr>											
										</table>
										<div class="under_button_area_2">
											<button type="submit" class="formbtn_2">出勤を送信</button>
										</div>
									</form>
									</p>
								<p><a class="modal_close"><i class="zmdi zmdi-close">✕<br></i></a></p>
							</div>
						</div>
					</div>					

					</div>		
				</div>
			</div>
		</div>
		<?php include ('php/footer.php'); ?>
	
	</div><!--drawer drawer--left-->
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
<!--モーダル　プラグイン-->
<script>
$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  $('.modal_open').click(function(){
 
    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  });
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