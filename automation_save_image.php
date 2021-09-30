<?php

date_default_timezone_set('Asia/Tokyo');

$image_path = "https://www.python.org/static/img/python-logo.png";
//保存するファイル名設定
$now = new DateTime();
$file_name = 'https://www.caba-web.com/nightgram_master_admin/'.$now->format('YmdHis').'.jpg';
$image = file_get_contents($image_path);
$save_path = $file_name;
file_put_contents($save_path, $image);
?>