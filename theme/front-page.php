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
<section class="explication">
    <div class="wrapper">
        <?php the_content(); ?>
        <?php
                // affiche les gateaux de la catégorie favorie
                $arg = array(
                    'post_type' => 'gateau',
                    'post_status' => 'publish',
                    'posts_per_page' => '2',
                    'category_name' => 'favorie',
                );   
                $query = new WP_Query($arg);
            ?>

        <div class="cards">

    <?php if ($query->have_posts()) : ?>
    <?php $counter = 0; // Initialiser un compteur ?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>
        <?php 
            // Alterner entre 'card-left' et 'card-right'
            $card_class = ($counter % 2 == 0) ? 'card-left' : 'card-right'; 
        ?>
        <a class="card <?php echo $card_class; ?>" href="<?php the_permalink() ?>">
            <div class="card__media">
                <?php
                    $image = get_field('pw_photo');
                    if (!empty($image)) : ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
                    <?php endif; ?>
            </div>
            <div class="card__content">
                <h2 class="card__title"><?php the_title(); ?></h2>
                <?php 
                // Vérifier si le champ ACF pw_favorite est activé
                if (get_field('pw_favorite')) : ?>
                    <div class="favorie">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/heart-svgrepo-com.png'); ?>" alt="" />
                    </div>
                <?php endif; ?>
            </div>
        </a>
        <?php $counter++; // Incrémenter le compteur ?>
    <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>

        </div>
    </div>
</section>

<?php get_footer(); ?>