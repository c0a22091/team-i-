<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>飛行機予約システム</title>
    <link rel="stylesheet" href="..\templates_c\styles.css">
</head>
<body>
    <header>
        <h1>飛行機予約システム</h1>
        <nav>
            <ul>
                <li><a href="register.php">新規登録</a></li>
                <li><a href="login.php">ログイン</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>フライト検索</h2>
            <form action="search.php" method="GET">
                <label for="departure_city">出発地:</label>
                <input type="text" id="departure_city" name="departure_city" required>

                <label for="arrival_city">到着地:</label>
                <input type="text" id="arrival_city" name="arrival_city" required>

                <label for="departure_date">出発日:</label>
                <input type="date" id="departure_date" name="departure_date" required>

                <button type="submit">検索</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 飛行機予約システム</p>
    </footer>
</body>
</html>