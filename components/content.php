<figure class="p-post">
    <?php the_post_thumbnail('full'); ?>
    <figcaption>
        <div class="p-post__wrapper">
            <h2><?php the_title(); ?></h2>
            <?php the_content('詳しく見る'); ?>
    </figcaption>
</figure>