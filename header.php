<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<title>Top Page - Hamburger｜Raise Tech</title>-->
    <?php wp_head(); ?>
</head>
<body>
    <div id="overlay" class="overlay"></div>
    <div id="c-grid">
        <header class="l-header c-grid">
            <button id="c-btn" class="c-btn__menu u-mg--menu">Menu</button>
            <h1 class="c-ttl">Hamburger</h1>
            <div class="p-searchform">
                <div class="p-searchform__box">
                    <input type="search" name="search" class="p-searchform__box">
                </div>
                <input type="submit" value="検索" class="p-searchform__submit">
            </div>
        </header>