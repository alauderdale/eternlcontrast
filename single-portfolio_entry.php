<?php get_header(); ?>

<div class="slider">
    <div class="sliderContainer visibleNearby fullWidth clearfix">
      <div id="gallery-1" class="royalSlider rsDefault">
        <div class="rsContent">
        <a class="rsImg" data-rsdelay="1000" href="http://placekitten.com/900/700">Still Life: Vase with Twelve Sunflowers<span>Vincent van Gogh</span></a>
        </div><!--end rs content-->
        <div class="rsContent">
        <a class="rsImg" data-rsdelay="1000" href="http://placekitten.com/900/700">Still Life: Vase with Twelve Sunflowers<span>Vincent van Gogh</span></a>
        </div><!--end rs content-->
        <div class="rsContent">
        <a class="rsImg" data-rsdelay="1000" href="http://placekitten.com/900/700">Still Life: Vase with Twelve Sunflowers<span>Vincent van Gogh</span></a>
        </div><!--end rs content-->
      </div><!--end gal 1-->
    </div><!--end slider container-->
</div><!--end slider-->
<div class="inner">
    <div class="content port-content">
        <h1 class="port-title"><?php the_title(); ?></h1>
        <ul class="port-tags clearfix">
             <?php the_terms( $post->ID, 'skill', '<li>', ' ,', '</li>' ); ?>
        </ul>
        
        <div class="port-copy">
            <!--start the loop-->
            <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                    <div class="top-text">
                        <?php the_content(); ?>
                    </div>  
                    <img class="display-img" src="<?php echo get_post_meta($post->ID, 'upload_image', true); ?>"/> 
                    <p class="blockquote">
                        <?php echo get_post_meta($post->ID, 'quote', true); ?>
                    </p>
                    <p>
                    <?php echo get_post_meta($post->ID, 'sub_text', true); ?>
                    </p>
                    
                      
            <!--end the loop-->
            <?php endwhile; ?>
            <?php endif; ?>
  <!--          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id ornare est. Curabitur luctus, ante quis rutrum interdum, nulla nunc semper diam, et tristique felis odio a lacus. Donec congue sem ac diam facilisis at dictum sapien interdum. Integer nulla lectus, cursus in pulvinar sed, feugiat et tortor. Aliquam erat volutpat. Aenean in mauris eget lacus posuere mollis. Vivamus fermentum, enim et gravida sodales, magna orci hendrerit nisi, iaculis lobortis eros tortor a quam. Donec sagittis consequat dui, vel rutrum mauris semper eget. Fusce volutpat lorem facilisis velit interdum vel pretium dui porttitor. Suspendisse potenti. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Morbi diam elit, dictum sed vehicula ut, consequat vitae purus. Aliquam a imperdiet tellus. Nunc eros sem, vehicula vitae sodales id, adipiscing at ligula.
            
            Nullam eget tempor lacus. Donec faucibus, sem quis porta dapibus, mi justo adipiscing enim, quis mollis ante nisl eget eros. Aliquam ut tortor ut leo porttitor auctor. Proin vel metus vel risus pulvinar lobortis eget ac nulla. Etiam viverra, nunc nec gravida porta, justo urna ultricies risus, ac condimentum orci massa ultricies metus. Quisque diam lacus, adipiscing nec vehicula at, interdum id 
            </p>
            <img class="display-img" src="http://placekitten.com/970/300"/>
            <p class="blockquote">
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
            </p>
            <p>
                 Nullam eget tempor lacus. Donec faucibus, sem quis porta dapibus, mi justo adipiscing enim, quis mollis ante nisl eget eros. Aliquam ut tortor ut leo porttitor auctor. Proin vel metus vel risus pulvinar lobortis eget ac nulla. Etiam viverra, nunc nec gravida porta, justo urna ultricies risus, ac condimentum orci massa ultricies metus. Quisque diam lacus, adipiscing nec vehicula at, interdum id
                 </p>
                 <p>
                 Nullam eget tempor lacus. Donec faucibus, sem quis porta dapibus, mi justo adipiscing enim, quis mollis ante nisl eget eros. Aliquam ut tortor ut leo porttitor auctor. Proin vel metus vel risus pulvinar lobortis eget ac nulla. Etiam viverra, nunc nec gravida porta, justo urna ultricies risus, ac condimentum orci massa ultricies metus. Quisque diam lacus, adipiscing nec vehicula at, interdum id
                 </p>
                 <p>
                 Nullam eget tempor lacus. Donec faucibus, sem quis porta dapibus, mi justo adipiscing enim, quis mollis ante nisl eget eros. Aliquam ut tortor ut leo porttitor auctor. Proin vel metus vel risus pulvinar lobortis eget ac nulla. Etiam viverra, nunc nec gravida porta, justo urna ultricies risus, ac condimentum orci massa ultricies metus. Quisque diam lacus, adipiscing nec vehicula at, interdum id
                 </p>
                 <p>
                 Nullam eget tempor lacus. Donec faucibus, sem quis porta dapibus, mi justo adipiscing enim, quis mollis ante nisl eget eros. Aliquam ut tortor ut leo porttitor auctor. Proin vel metus vel risus pulvinar lobortis eget ac nulla. Etiam viverra, nunc nec gravida porta, justo urna ultricies risus, ac condimentum orci massa ultricies metus. Quisque diam lacus, adipiscing nec vehicula at, interdum id
             </p>-->
         </div>
    </div>
</div>
<div class="clearfix"></div>


<?php get_footer(); ?>