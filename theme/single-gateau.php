<?php get_header(); ?>

<section class="hero">
    <div class="hero_media">
        <?php the_post_thumbnail('full'); ?>
    </div>
    <div class="hero_content">
        <div class="wrapper contenu">
        <h1><?php the_title(); ?></h1>
        </div>
    </div>
</section>


<section class="infromation">
    <div class="wrapper">
        <div class="information-grid">
            <div class="info-text">
                <strong>
                    <?php the_content(); ?>
                </strong>
            </div>
            
            <div class="sidebar">

                <?php $chef = get_field('pw_chef'); ?>

                <?php if ($chef) : ?>
                    <h3> chef</h3>

                    <?php foreach($chef as $chef) : ?>
                        <p><?php echo get_the_title($chef->ID); ?></p>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if (get_field('pw_release_date')) : ?>
                    <h3>date de sortie</h3>
                    <p><?php the_field('pw_release_date'); ?></p>
                <?php endif; ?>
    
                <?php if (get_field('pw_preparation')) : ?>
                    <h3>Préparation</h3>
                    <p><?php the_field('pw_preparation'); ?> </p>
                <?php endif ?>

                <?php if (get_field('pw_cuisson')) : ?>
                    <h3>cuisson</h3>
                    <p><?php the_field('pw_cuisson'); ?> </p>
                <?php endif ?>

                <?php if (get_field('pw_rating')) : ?>
                    <h3>Classement</h3>
                    <p><?php the_field('pw_rating'); ?>⭐️ </p>
                <?php endif ?>
                <div>
                    <?php if ( have_rows('pw_ingredient') ): ?>
                        <div>
                             <h3>ingrédient</h3>
                            <ul>

                            <?php while(have_rows('pw_ingredient')) : the_row(); ?>
                                        <p>  <strong> <?php the_sub_field('nom_de_lingredent') ?> </strong> <?php the_sub_field('poid') ?> </p>
                            <?php endwhile ?>
                        
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="galery">
    <div class="swiper" data-component="Carousel" data-slides="3" data-loop>
        <div class="swiper-wrapper">
            
            <?php while(have_rows('pw_gallerie')) : the_row(); ?>

            <a class="swiper-slide" href="<?php the_sub_field('lien'); ?>">
               
                    <?php
                        $image = get_sub_field('photo');
                        if(!empty( $image ) ):
                    ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?> 
            </a>

            <?php endwhile ?>
        </div>
        <!-- N'oubliez pas votre pagination -->
        <div class="swiper-pagination"></div>
    </div>
</section>

<?php get_footer(); ?>