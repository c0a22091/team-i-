<!-- templates/search.tpl -->
<!DOCTYPE html>
<html>
<head>
    <title>検索機能</title>
</head>
<body>
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
                    <li><strong>{$article.title|escape}</strong>: {$article.content|escape}</li>
                {/foreach}
            </ul>
        {else}
            <p>一致する結果が見つかりませんでした。</p>
        {/if}
    {/if}
</body>
</html>
