<?php get_header(); ?>
        <main class="l-main c-grid">
            <div class="c-mainvisual c-mainvisual--archive">
                <div class="c-mainvisual__headline c-mainvisual__headline--archive">
                    <h2>Search:</h2>
                    <h4>見出しが入ります</h4>
                </div>
                <!--<img src="https://github.com/kamadamayo/HamburgerSite-RaiseTech--2/blob/main/images/mainvisual/archive--sp.png?raw=true" alt="" class="c-mainvisual__sp">-->
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
            <?php
            $args = array(
                'category' => '52',
                'post_type' => 'post',
                'post_per_page' => 3,
            );
            $myposts = new WP_query($args);
            if( $myposts -> have_posts()):
                while( $myposts -> have_posts()):
                    $myposts -> the_post();
                    ?>
                    <?php get_template_part('content'); ?>
                <?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
            <div class="p-pagination">
                <div class="u-visibility__tab">
                    <p>page</p>
                    <p>1</p>
                    <p>10</p>
                </div>
                <div class="p-pagination__prev">
                    <a class="" href=""><<</a>
                    <a class="u-visibility__sp" href="">前へ</a>
                </div>
                <a href="" class="p-pagination__number u-visibility__tab">1</a>
                <a href="" class="p-pagination__number u-visibility__tab">2</a>
                <a href="" class="p-pagination__number u-visibility__tab">3</a>
                <a href="" class="p-pagination__number u-visibility__tab">4</a>
                <a href="" class="p-pagination__number u-visibility__tab">5</a>
                <a href="" class="p-pagination__number u-visibility__tab">6</a>
                <a href="" class="p-pagination__number u-visibility__tab">7</a>
                <a href="" class="p-pagination__number u-visibility__tab">8</a>
                <a href="" class="p-pagination__number u-visibility__tab">9</a>
                <div class="p-pagination__next">
                    <a class="u-visibility__sp" href="">次へ</a>
                    <a class="" href="">>></a>
                </div>
            </div>
        </main>
        <?php get_sidebar(); ?>
        <?php get_footer(); ?>