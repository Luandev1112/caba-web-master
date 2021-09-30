<?php
	//セッションの生成
	session_start();
	
	
	require_once ('conf.php');
	
	//ユーザー名/パスワード
	$user = htmlspecialchars($_POST['user'], ENT_QUOTES);
	$pass = htmlspecialchars($_POST['pass'], ENT_QUOTES);
	
	$result=mysqli_query($sql, "SELECT * From `shop` WHERE login_id='$user' ORDER by master_id");
while($row=mysqli_fetch_assoc($result)){
include('../cabaweb_master_admin/parts/basic_hensu.php');

}
	
	
	
	if (($user == $login_id) && ($pass == $login_pass)) {
		$login = 'OK';
	} else {
		$login = 'Error';
	}
	
	$_SESSION['login'] = $login;
	
	if ($login == 'OK') {
		header("Location: login_top.php?master_id=$master_id");
	} else {
		header('Location: error_login.php');
	}
?>