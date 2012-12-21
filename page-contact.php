<?php
/*
Template Name: Contact
 */
?>

<?php get_header(); ?>

<div class="inner">
    <div class="hero-title">
       <h1> <?php the_title(); ?></h1>
       <p class="hero-subtext">
           <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
       </p>
    </div>
</div>

<!-- begin services loop -->

<div class="inner">
    <?php the_content(); ?>
    <div class="contact-form">
        <?php echo do_shortcode('[contact-form-7 id="84" title="Contact form 1"]'); ?>
    </div>
</div>

<?php get_footer(); ?>