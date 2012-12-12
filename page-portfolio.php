<?php
/*
Template Name: Portfolio
 */
?>

<?php get_header(); ?>

<div class="inner">
    <div class="content">
        <div class="hero-title">
           <h1><?php the_title(); ?></h1>
           <p class="hero-subtext">
                <?php echo get_post_meta($post->ID, 'hero_sub', true); ?>
           </p>
        </div>
        <nav class="port-select">
            <ul id="filters">
              <li><a href="#" class="port-active" data-filter="*">All</a></li>
              <?php  
              
              $terms = get_terms("port");
              $count = count($terms);
              if ( $count > 0 ){
                  foreach ( $terms as $term ) {
                    echo "<li>"."<a href='#' data-filter='.$term->name' > " . $term->name ."</a>" . "</li>";
                     
                  }
              }
              
              
              ?>
            </ul> 
        </nav>
        <div class="portfolio">
            <ul id="container"  class="portfolio-thumbs">
                <?php
                $portfolioloop = new WP_Query( array( 'post_type' => 'portfolio_entry') );
                 ?>
                 <?php while ( $portfolioloop->have_posts() ) : $portfolioloop->the_post(); ?>
                 
                <li class="
                portfolio-thumb 
                
                <?php
                $terms = get_the_terms( $post->ID, 'port' );			
                if ( $terms && ! is_wp_error( $terms ) ) : 
                	$port_terms = array();
                	foreach ( $terms as $term ) {
                	echo	$port_terms[] = $term->name.' ';
                	}; ?>
                <?php endif; ?>
                
                ">
                    <div class="port-thumb-descript">
                      <div class="port-thumb-descript-inner">
                        <h1><?php the_title(); ?></h1>
                        <ul class="tags">
                          <?php 
                            $product_terms = wp_get_object_terms($post->ID, 'skill');
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
                    </div>
                    <a class="port-thumb" href="<?php the_permalink(); ?>">
                        <img src="<?php
                        $imgsrc2 = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "Full");
                        echo $imgsrc2[0];
                        ?>" href="<?php
                        echo $imgsrc2[0];
                        ?>" title="<?php the_title(); ?>">
                    </a>
                </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>
</div>

<?php get_footer(); ?>