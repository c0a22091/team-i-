<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <link rel="stylesheet" href="..\templates_c\styles.css">
</head>
<body>
    <header>
        <h1>新規登録</h1>
        <nav>
            <ul>
                <li><a href="home.php">ホーム</a></li>
                <li><a href="login.php">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <form action="register_process.php" method="POST">
            <label for="user_name">名前:</label>
            <input type="text" id="user_name" name="user_name" required>

            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required>

            <label for="pasport">パスポート記載のお名前:</label>
            <input type="pasport" id="pasport" name="pasport" required>

            <label for="password">住所:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">登録</button>
        </form>
    </main>
    <footer>
        <p>&copy; 2024 飛行機予約システム</p>
    </footer>
</body>
</html>