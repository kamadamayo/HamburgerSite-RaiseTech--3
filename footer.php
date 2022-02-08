        <footer class="l-footer c-grid">
            <div class="p-shop">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'footer-menu',
                            'container_class' => 'p-shop__link',
                            'menu_class' => 'p-shop__link__nav',
                        ));
                    ?>
                <p>Copyright: RaiseTech</p>
            </div>
        </footer>
    </div>
    <?php wp_footer(); ?>
</body>
</html>