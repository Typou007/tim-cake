<footer class="footer">
        <div class="wrapper">
            <div class="footer-gage">
                <div class="footer-logo">
                    <a href="<?php bloginfo('url'); ?>" class="logo">
                        <h3><?php bloginfo('name'); ?></h3> 
                    </a>
                </div>
                <div>
                        <?php if (have_rows('pw_social', 'options')) : ?>         
                    <nav class="nav-social">
                        <ul>
                        <?php while(have_rows('pw_social', 'options')) : the_row(); ?>

                            <li>
                                <a href="<?php the_sub_field('link', 'options') ?>" class="nav__link <?php the_sub_field('name', 'options') ?>">
                                    <svg class="icon icon--md">
                                        <use xlink:href="#icon-<?php the_sub_field('name', 'options') ?>"></use>
                                    </svg>
                                </a>
                            </li>

                        <?php endwhile ?> 
                        </ul>
                    </nav>
                    <?php endif ?>
                        <p class="copyright">Tous droits réservés © <?php echo Date('Y'); ?> <?php bloginfo('name'); ?>
                    </p>

            </div>
                </div>

            </div>

        </div>

    </footer>
    <?php wp_footer(); ?>
</body>

</html>