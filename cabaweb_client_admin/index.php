<!doctype html>
<html lang="ja"><head>
<meta charset="utf-8">
<title>サイト管理ログイン</title>
<meta name="description" content="サイト管理ログイン">

<link rel="shortcut icon" href="img/favicon.ico">
<link rel="apple-touch-icon" href="img/iphone.jpg">

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/drawer.min.css">

<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

<link rel="canonical" href="">

<meta name="robots" content="noindex,nofollow">

</head>

<body>

  <div id="content">
    <div class="top_base_in">
      <div class="top_base_in_title">LOGIN</div>
      <form action="check_login.php" method="post" id="form">
      <p>
      <label><input type="text" name="user" class="txtfiled" placeholder="ID" required></label>
      </p>
      <p>
      <label><input type="password" name="pass" class="txtfiled" placeholder="Pass" required></label>
      </p>         
      <div class="input_area">
      <p>
      <button type="submit" class="formbtn">ログイン</button>
      </p>
      </div>
      </form>
    </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!--ヘッダー-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
<!--ヘッダー-->
</body>

</html>