<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>国内検索</title>
    <!-- <link rel="stylesheet" href="..\templates_c\styles.css">//cssと繋げる -->
</head>
<body>
    <header>
        <h1>国内検索</h1>
    </header>
    <main>
        <section>
            <form action="../search.php" method="post">
                <label for="touchaku_name">航空機名:</label>
                <input type="text" id="touchaku_name" name="touchaku_name"><br><br>
                
                <label for="location">場所:</label>
                <input type="text" id="location" name="location"><br><br>
                
                <label for="type">国際or国内:</label>
                <input type="text" id="type" name="type"><br><br>
                
                <input type="submit" value="検索">
        </section>
    </main>
</body>
</html>