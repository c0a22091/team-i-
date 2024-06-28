<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <title>galトップページ</title>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../templates_c/styles.css">
  <style>
    body {
      font-family: inherit;
      font-size: 20px;
      margin: 0;
      padding: 0;
      background-size: cover;
    }
    .example {
      position: static;
    }
    .example a {
      position: absolute;
      top: 60%;
      left: 30%;
      transform: translate(-50%, -50%);
      margin: 0;
      font-size: 60px;
      border: solid white 6px;
      padding: 21px;
      color: white;
      text-decoration: none;
    }
    .example a:hover {
      background: rgba(255, 255, 255, 0.3);
    }
    .example img {
      width: 100%;
    }
    .example1 {
      position: static;
    }
    .example1 a {
      position: absolute;
      top: 60%;
      left: 65%;
      transform: translate(-50%, -50%);
      margin: 0;
      font-size: 60px;
      border: solid white 6px;
      padding: 21px;
      color: white;
      text-decoration: none;
    }
    .example1 a:hover {
      background: rgba(255, 255, 255, 0.3);
    }
    .example1 img {
      width: 100%;
    }
    .btn {
      position: absolute;
      top: 8%;
      left: 80%;
      border-radius: 5px;
      background-color: blueviolet;
      padding: 10px;
      text-decoration: none;
      color: white;
    }
    .btn1 {
      position: absolute;
      top: 8%;
      left: 60%;
      border-radius: 5px;
      background-color: blueviolet;
      padding: 10px;
      text-decoration: none;
      color: white;
    }
    .username {
      position: absolute;
      top: 8%;
      left: 40%;
      color: blueviolet;
    }
  </style>
</head>
<body>
  <h1>GALAXY AIRLINES</h1>
  <a href="logout.php">ログアウト</a>
  
  <?php if (isset($_SESSION['user_name'])): ?>
    <span class="username">ようこそ、<?php echo htmlspecialchars($_SESSION['user_name']); ?>さん</span>
  <?php else: ?>
    
    <a href="/2024i/login.php" class="btn">ログイン</a>
    <a href="/2024i/templates/register.html" class="btn1">会員登録</a>
  <?php endif; ?>
  
  <div class="example">
    <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg"/>
    <a href="https://www.jal.co.jp/jp/ja/"> 国内線</a>
  </div>
  <div class="example1">
    <a href="https://www.jal.co.jp/jp/ja/"> 国際線</a>
  </div>

</body>
</html>


