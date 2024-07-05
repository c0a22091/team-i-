<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>GALAXY AIRLINES</title>
  
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&display=swap');
    
    body {
      font-family: 'Amatic SC', cursive;
      margin: 0;
      padding: 0;
      background: url('https://www.publicdomainpictures.net/pictures/320000/velka/background-image.png') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      flex-direction: column;
      align-items: center;
      animation: fadeIn 2s ease-in-out;
    }

    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }

    h1 {
      text-align: center;
      margin-top: 20px;
      color: white;
      font-size: 80px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: auto;
      padding: 50px;
      gap: 20px;
    }

    .card {
      position: relative;
      overflow: hidden;
      border-radius: 50px;
      margin: 20px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: black;
      transition: transform 0.8s ease;
      width: 300px;
      height: 200px;
      animation: fadeIn 2s ease-in-out;
    }

    .card img {
      width: 100%;
      height: 100%;
      transition: transform 0.8s ease;
    }

    .card:hover img {
      transform: scale(1.2);
    }

    .card-content {
      position: absolute;
      bottom: 40px;
      left: 20px;
      background-color: rgba(0, 0, 0, 0.6);
      padding: 10px 20px;
      border-radius: 5px;
    }

    .card-content a {
      color: white;
      text-decoration: none;
      font-size: 24px;
    }

    .btn, .btn1 {
      padding: 10px 20px;
      background-color: blueviolet;
      color: white;
      text-decoration: none;
      border-radius: 25px;
      font-size: 18px;
      transition: background-color 0.3s ease;
      position: absolute;
      right: 20px;
      animation: fadeIn 2s ease-in-out;
    }

    .btn1 {
      top: 20px;
    }

    .btn {
      top: 75px;
    }

    .btn1:hover, .btn:hover {
      background-color: #6a0dad;
    }

    .username {
      position: absolute;
      top: 15%;
      color: white;
      background: rgba(0, 0, 0, 0.5);
      padding: 10px;
      border-radius: 10px;
      animation: fadeIn 2s ease-in-out;
    }
  </style>
</head>
<body>
  <h1>GALAXY AIRLINES</h1>
  
  <div class="container">
    <div class="card">
      <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg" alt="国内線">
      <div class="card-content">
        <a href="complete.php">国内線</a>
      </div>
    </div>

    <div class="card">
      <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg" alt="国際線">
      <div class="card-content">
        <a href="https://www.jal.co.jp/jp/ja/">国際線</a>
      </div>
    </div>

    <!-- 追加のカード -->
    <div class="card">
      <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg" alt="特別サービス">
      <div class="card-content">
        <a href="templates/service.html">特別サービス</a>
      </div>
    </div>

    <div class="card">
      <img src="https://bluegreen.jp/wp-content/uploads/2019/07/IMGP0184--1024x768.jpg" alt="会員ランク">
      <div class="card-content">
        <a href="templates/prime.html">会員ランク</a>
      </div>
    </div>
  </div>

  <?php if (isset($_SESSION['user_name'])): ?>
    <a href="logout.php" class="btn1">ログアウト</a>
    <span class="username">ようこそ、<?php echo htmlspecialchars($_SESSION['user_name']); ?>さん！こちらは会員特別ページです！</span>
  <?php else: ?>
    <a href="/2024i/login.php" class="btn1">ログイン</a>
    <a href="/2024i/templates/register.html" class="btn">会員登録</a>
  <?php endif; ?>

</body>
</html>
