<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="..\templates_c\styles.css">
</head>
<body>
    <header>
        <h1>ログイン</h1>
        <nav>
            <ul>
                <li><a href="home.php">ホーム</a></li>
                <li><a href="register.php">新規登録</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="login_process.php" method="POST">
            <label for="email">メール:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">ログイン</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 飛行機予約システム</p>
    </footer>
</body>
</html>