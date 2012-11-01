<?php get_header(); ?>
            <div class="inner">
                <h3>
                    Posts in:
                    <span class="blue">
                    <?php
                    $category = get_the_category(); 
                    echo $category[0]->cat_name;
                    ?>
                    </span>
                </h3>
                <div class="content blog-container">
                    <div class="blog">
                        <!--start the loop-->
                        <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="post">
                                <h1><a href="<?php the_permalink(); ?> "><?php the_title(); ?></a></h1>
                                    <?php if ( has_post_thumbnail() ) { ?>
                                <div class="blog-featured-img">
                                    <?php echo get_the_post_thumbnail(); ?> 
                                </div>
                                    <?php }   ?> 
                                    <?php the_content(); ?>  
                            </div>
                        <!--end the loop-->
                        <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php get_sidebar(); ?>
                </div>
            </div>
        
        
<?php get_footer(); ?>