<!--メインループで記述-->
<?php
    if (have_posts()):
        while (have_posts()):
            the_post();
            get_template_part('components/content');
        endwhile;
    endif;
?>