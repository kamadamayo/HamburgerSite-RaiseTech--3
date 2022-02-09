<?php 
/**
 * Template Name: archive-menu
 * Template Post Type: post,
 */
get_header(); ?>
        <main class="l-main c-grid">
            <div class="c-mainvisual c-mainvisual--archive">
                <div class="c-mainvisual__headline c-mainvisual__headline--archive">
                    <h2>Menu:</h2>
                    <h4>チーズバーガー</h4>
                </div>
                <img src="https://github.com/kamadamayo/HamburgerSite-RaiseTech--2/blob/main/images/mainvisual/archive---tab.jpeg?raw=true" alt="" class="c-mainvisual__sp">
                <img src="https://github.com/kamadamayo/HamburgerSite-RaiseTech--2/blob/main/images/mainvisual/archive---tab.jpeg?raw=true" alt="" class="c-mainvisual__tab">
                <img src="https://github.com/kamadamayo/HamburgerSite-RaiseTech--2/blob/main/images/mainvisual/archive--pc.png?raw=true" alt="" class="c-mainvisual__pc">
            </div>
            <section class="p-article u-width--89 u-mg--lr-auto">
                <h1>小見出しが入ります</h1>
                <p class="u-mg--tb30">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                </p>
            </section>
            <?php get_template_part("components/archive"); ?>
            <?php get_template_part("components/pagination"); ?>
        </main>
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>