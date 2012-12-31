<?php
/*
Template Name: Services
 */
?>

<?php get_header(); ?>

<div class="inner">
    <div class="hero-title" style="text-align:center; border-bottom:none; margin-bottom:0px;">
       <h1> Our services</h1>
       <p class="hero-subtext">
           <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
       </p>
    </div>
</div>
<?php
$servicesloop = new WP_Query( array( 'post_type' => 'home_eservice') );
 ?>
<div class="clearfix"></div>
<div class="services-contiainer">
    <div class="sticky-menu" id="sticky-menu">
        <div class="inner">
            <ul>
                 <?php while ( $servicesloop->have_posts() ) : $servicesloop->the_post(); ?>
                <li>
                    <a href="#<?php echo $post->post_name;?>">
                        <?php the_title(); ?>
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
    <div class="clearfix"></div>
    <!-- begin services loop -->


     <?php while ( $servicesloop->have_posts() ) : $servicesloop->the_post(); ?>

        <div class="service" id="<?php echo $post->post_name;?>">
            <div class="inner">
                <div class="service-descrip">
                    <h4 class="uppercase"><?php the_title(); ?></h4>
                    <p>
                        <?php the_content(); ?>
                    </p>
                    <a href="index.php?pagename=portfolio" class="margin-bottom margin-top blue-square-button">
                        View Portfolio
                    </a>
                    <div class="clearfix"></div>
                    <h3><?php the_title(); ?> Services</h3>
                    <ul>
                        <?php 
                            $product_terms = wp_get_object_terms($post->ID, 'service');
                            if(!empty($product_terms)){
                                if(!is_wp_error( $product_terms )){
                                    foreach($product_terms as $term){
                                    echo '<li>'.$term->name.'</li>'; 
                                    }
                                }
                            }
                        ?>
                    </ul>
                </div>
                <div class="serviceimg">
                    <?php echo get_the_post_thumbnail( ); ?> 
                </div>
            </div>
        </div>
    <!-- end services loop -->
    <?php endwhile; ?>
</div>

<?php get_footer(); ?>