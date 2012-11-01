<?php
/*
Template Name: Home
 */
?>

<?php get_header(); ?>
        <div class="inner">
            <div class="content">
                <div class="hero-title">
                    <h1>
                   <?php the_title(); ?>  
                   </h1>
                </div>
                <!--start the loop-->
                <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?> 
                    <div class="hero-descrip">
                          <?php the_content(); ?>    
                    </div>
                <!--end the loop-->
                <?php endwhile; ?>
                <?php endif; ?>
                <h1> How Can We Help You? </h1>
                <div class="home-services">
                    <?php
                    $servicesloop = new WP_Query( array( 'post_type' => 'home_eservice') );
                     ?>
                     <?php while ( $servicesloop->have_posts() ) : $servicesloop->the_post(); ?>
                        <div class="home-service">
                            <h3><?php the_title(); ?>  </h3>
                            <p>
                                <?php echo get_post_meta($post->ID, 'service_preview', true); ?> 
                            </p>
                            <a href="index.php?pagename=services">
                            <div class="home-service-featred-img">
<!--                                 <?php echo get_the_post_thumbnail(); ?>  -->
                                  <img src="<?php echo get_post_meta($post->ID, 'upload_image', true); ?>" width="436" height="177"/>
                            </div>
                            </a>
                            <div class="home-service-bottom-links">
                                <a class="bar" href="index.php?pagename=portfolio">Portfolio</a>
                                <a href="index.php?pagename=services">Services</a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                  </div>
            </div>
        </div>



<?php get_footer(); ?>