<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規登録</title>
    <!-- <link rel="stylesheet" href="..\templates_c\styles.css"> -->
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
        <form action="home.php" method="POST">
            <p><label for="user_name">ユーザーネーム:</label>
            <input type="text" id="user_name" name="user_name" required></p>

            <p><label for="mail">メールアドレス:</label>
            <input type="mail" id="mail" name="mail" required></p>

            <p><label for="password">パスワード:</label>
            <input type="password" id="password" name="password" required></p>

            <p><label for="pasport">パスポート記載のお名前:</label>
            <input type="pasport" id="pasport" name="pasport" required></p>

            <p><label for="adress">住所:</label>
            <input type="adress" id="password" name="password" required></p>

            <p><label for="phone">電話番号:</label>
                <input type="phone" id="password" name="password" required></p>

            <p><label for="jen">性・名:</label>
                <input type="jen" id="jen" name="password" required></p>

            <button type="submit">登録</button>
        </form>
    </main>
</body>
</html>