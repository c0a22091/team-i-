<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>国外検索</title>
    <!-- <link rel="stylesheet" href="..\templates_c\styles.css">//cssと繋げる -->
</head>
<body>
    <header>
        <h1>国外検索</h1>
    </header>
    <main>
        <section>
            <!-- <h2>フライト検索</h2>
            <form action="hit.php" method="GET">
                <label for="arrival_city">到着地:</label>
                <input type="text" id="arrival_city" name="arrival_city" required>

                <label for="departure_date">出発日:</label>
                <input type="date" id="departure_date" name="departure_date" required>

                <label for="departure_date">クラス(ランク):</label>
                <input type="date" id="departure_date" name="departure_date" required>
                <button type="submit">検索</button>
            </form> -->
                    <h1>記事検索</h1>
            <form method="post" action="">
                <input type="text" name="search" value="{$search|escape}">
                <input type="submit" value="検索">
            </form>
            {if $search}
                <h2>検索結果</h2>
                {if $results|@count > 0}
                    <ul>
                        {foreach from=$results item=article}
                            <li><strong>{$article[1]|escape}</strong>: {$article[2]|escape}</li>
                        {/foreach}
                    </ul>
                {else}
                    <p>一致する結果が見つかりませんでした。</p>
                {/if}
            {/if}
        </section>
    </main>
</body>
</html>
