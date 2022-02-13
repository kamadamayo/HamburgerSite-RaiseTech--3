<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="<?php bloginfo('description'); ?>" content="RaiseTechの最終課題です">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>><!--各ページの種類によって自動で class を割り当ててくれる-->
    <div id="overlay" class="overlay"></div>
    <div id="c-grid">
        <header class="l-header c-grid">
        <button id="c-btn" class="c-btn__menu u-mg--menu">Menu</button>
            <h1 class="c-ttl"><?php bloginfo('name'); ?></h1>
            <?php get_search_form(); ?>
        </header>