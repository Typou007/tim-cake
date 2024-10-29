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
<div  class="wrapper">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
<?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>