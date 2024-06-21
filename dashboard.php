<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>ダッシュボード</title>
    
</head>
<body>
    <h1>ようこそ、<?php echo htmlspecialchars($_SESSION['user_name']); ?>さん</h1>
    <p>ログインに成功しました。</p>
    <a href="../2024i/templates/home.html">ホームに戻る</a>
    <a href="logout.php">ログアウト</a>
</body>
</html>
