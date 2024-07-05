<?php
/* Smarty version 3.1.39, created on 2024-07-05 07:40:38
  from 'C:\xampp\htdocs\2024i\templates\search4.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_66878756940b56_21470063',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '046ecc88ccd493e153bddf57cc4c3d04a8efb985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\2024i\\templates\\search4.html',
      1 => 1720158023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66878756940b56_21470063 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>国際検索</title>
    <!-- <link rel="stylesheet" href="..\templates_c\styles.css">//cssと繋げる -->
</head>
<body>
    <header>
        <h1>国際検索</h1>
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
            <h2>フライト検索</h2>
            <p>行きたい場所を入力してください</p>
            <form method="post" action="">
            <!-- <label for="search">到着地:</label> -->
                <input type="text" name="search" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                <input type="submit" value="検索">
                <!-- <form method="post" action="">
                    <input type="text" name="search" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['search']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                    <input type="submit" value="検索"> -->
            </form>
            <?php if ($_smarty_tpl->tpl_vars['search']->value) {?>
                <h2>検索結果</h2>
                <?php if (count($_smarty_tpl->tpl_vars['results']->value) > 0) {?>
                    <ul>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['results']->value, 'article');
$_smarty_tpl->tpl_vars['article']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['article']->value) {
$_smarty_tpl->tpl_vars['article']->do_else = false;
?>
                            <li><strong><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value[1], ENT_QUOTES, 'UTF-8', true);?>
</strong>: <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['article']->value[2], ENT_QUOTES, 'UTF-8', true);?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                <?php } else { ?>
                    <p>一致する結果が見つかりませんでした。</p>
                <?php }?>
            <?php }?>
        </section>
    </main>
</body>
</html>
<?php }
}
