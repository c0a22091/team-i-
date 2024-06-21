<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>会員登録ページ</title>
    <!-- <link rel="stylesheet" href="..\templates_c\styles.css"> -->
</head>
<body>
    <header>
        <h1>ログイン</h1>
        <nav>
            <ul>
                <li><a href="home.php">ホーム</a></li>
                <li><a href="sinki.php">新規登録</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="..\\login_process.php" method="POST">
            <p><label for="email">ユーザーID:</label></p>
            <p><input type="email" id="email" name="email" required></p>
            <p><label for="password">パスワード:</label></p>
            <p><input type="password" id="password" name="password" required></p>
            <p><button type="submit">ログイン</button></p>
        </form>
    </main>
</body>
</html>