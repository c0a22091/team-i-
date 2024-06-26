<?php
// データベースの接続情報
$servername = "localhost";
$username = "root"; // データベースのユーザー名
$password = ""; // データベースのパスワード
$dbname = "2024i";

// フォームからのデータを受け取る
$user = $_POST['user_name'];
$mail = $_POST['mail_address'];
$passport = $_POST['passport_name'];
$pass = $_POST['password'];


try {
    // データベースに接続
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // エラーモードを例外に設定
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // SQL文を準備
    $sql = "INSERT INTO user_table (user_name, mail_address, passport_name, password) VALUES (:user_name, :mail_address, :passport_name, :password)";
    
    // SQL文を実行
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':user_name', $user);
    $stmt->bindParam(':mail_address', $mail);
    $stmt->bindParam(':passport_name', $passport);
    $stmt->bindParam(':password', $pass);
    $stmt->execute();

    echo "新規会員登録が完了しました。";
} catch(PDOException $e) {
    echo "エラーが発生しました: " . $e->getMessage();
}

// 接続を閉じる
$conn = null;
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録</title>
    <link rel="stylesheet" href="..\templates_c\styles2.css">
</head>
<body>
    <header>
        
        <nav>
        <ul>
        <li><a href="/2024i/templates/home.html">ホーム</a></li>
        <li><a href="/2024i/login.php">ログイン</a></li>
        </ul>
    </nav>    
        </nav>
    </header>




