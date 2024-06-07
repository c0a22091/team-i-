<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$pasport = "";
$dbname = "flight_booking";

// データベース接続の作成
$conn = new mysqli($servername, $username, $password, $pasport, $dbname);

// 接続チェック
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// フォームからのデータ取得
$email = $_POST['email'];
$password = $_POST['password'];


// SQLクエリの準備と実行
$sql = "SELECT user_id, password FROM user_table WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($user_id, $hashed_password);
$stmt->fetch();

if ($stmt->num_rows > 0 && password_verify($password, $hashed_password)) {
    $_SESSION['user_id'] = $user_id;
    header("Location: index.php");
} else {
    echo "ログイン失敗: メールまたはパスワードが正しくありません。";
}

$stmt->close();
$conn->close();
?>