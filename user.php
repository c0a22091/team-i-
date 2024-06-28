<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>galトップページ</title>
  
  <style>
    body {
      font-family: 'Amatic SC', cursive;
      margin: 0;
      padding: 0;
      background: linear-gradient(140deg, #9fa7c7ee 0%, #3a38d1 100%);
    }

    h1 {
      text-align: center;
      margin-top: 20px;
      color: white;
    }

    .container {
      display: flex;
      justify-content: space-around;
      align-items: center;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: auto;
      padding: 50px;
    }

    .card {
      position: relative;
      overflow: hidden;
      border-radius: 50px;
      margin: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: black;
      transition: transform 0.8s ease;
    }

    .card img {
      width: 100%;
      height: auto;
      transition: transform 0.8s ease;
    }

    .card:hover img {
      transform: scale(1.2);
    }

    .card-content {
      position: absolute;
      bottom: 20px;
      left: 20px;
      background-color: rgba(0, 0, 0, 0.3);
      padding: 30px 20px;
      border-radius: 5px;
    }

    .card-content a {
      color: white;
      text-decoration: none;
      font-size: 24px;
    }

    .btn {
      position: absolute;
      top: 75px;
      right: 20px;
      padding: 10px 20px;
      background-color: blueviolet;
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-size: 18px;
    }

    .btn1 {
      position: absolute;
      top: 20px;
      right: 20px;
      padding: 10px 20px;
      background-color: blueviolet;
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-size: 18px;
    }

    .btn:hover {
      background-color: #6a0dad;
    }
  </style>
</head>
<body>
  <h1>GALAXY AIRLINES</h1>
  
  <div class="container">
    <div class="card">
      <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg" alt="国内線">
      <div class="card-content">
        <a href="https://www.jal.co.jp/jp/ja/">国内線</a>
      </div>
    </div>

    <div class="card">
      <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg" alt="国際線">
      <div class="card-content">
        <a href="https://www.jal.co.jp/jp/ja/">国際線</a>
      </div>
    </div>
  </div>

  <?php if (isset($_SESSION['user_name'])): ?>
    <a href="logout.php" class="btn1">ログアウト</a>
    <span class="username" style="position: absolute; top: 8%; left: 40%; color: blueviolet;">ようこそ、<?php echo htmlspecialchars($_SESSION['user_name']); ?>さん</span>
  <?php else: ?>
    <a href="/2024i/login.php" class="btn1">ログイン</a>
    <a href="/2024i/templates/register.html" class="btn">会員登録</a>
  <?php endif; ?>

</body>
</html>
