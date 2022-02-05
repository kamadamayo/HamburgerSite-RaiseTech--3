<aside id="p-slidemenu" class="l-sidebar c-grid p-slidemenu u-pd12">
    <button class="c-btn__menu c-btn__heading">Menu</button>
    <button id="c-btn__active" class="c-btn__menu c-btn__close">
        <span></span>
        <span></span>
    </button>
    <?php
        $args = array(
            'theme_location' => 'side-menu',
            'container' => 'false',
            'menu_class' => 'p-sidebar__menu',
        );
        wp_nav_menu($args);
    ?>
</aside>