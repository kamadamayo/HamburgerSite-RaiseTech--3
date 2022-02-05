<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <div id="overlay" class="overlay"></div>
    <div id="c-grid">
        <header class="l-header c-grid">
            <button id="c-btn" class="c-btn__menu u-mg--menu">Menu</button>
            <h1 class="c-ttl">Hamburger</h1>
            <?php get_search_form(); ?>
        </header>