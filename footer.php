    <div class="clearfix"></div>
    <div class="sub-footer">
        <div class="inner">
            <div class="footer-col">
                <h1>Latest From The Blog</h1>
                <?php
                $footerloop = new WP_Query( array( 'post_type' => 'post', 'posts_per_page' => 3) );
                 ?>
                 <?php while ( $footerloop->have_posts() ) : $footerloop->the_post(); ?>
                <div class="footer-post">
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <?php the_excerpt(); ?>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="footer-col">
                <h1>Twitter</h1>
                <div class="footer-post">
                    <p>Nulla condimentum erat nec risus pulvinar imperdiet ullamcorper dolor tempus...</p>
                </div>
                <div class="footer-post">
                    <p>Nulla condimentum erat nec risus pulvinar imperdiet ullamcorper dolor tempus...</p>
                </div>
                <div class="footer-post">
                    <p>Nulla condimentum erat nec risus pulvinar imperdiet ullamcorper dolor tempus...</p>
                </div>
            </div>
            <div class="footer-col">
                <h1>Contact</h1>
                <div class="footer-post">
                    <h2><a href="mailto:alauderdale@mac.com">Email</a></h2>
                    <p>alauderdale@mac.com</p>
                </div>
                <div class="footer-post">
                    <h2>Phone</h2>
                    <p>970.396.3943</p>
                </div>
                <a class="square-button" href="#">Request Our Services</a>
            </div>
        </div>
    </div>
    <footer>
        <div class="inner">
            <div class="footer-copyright">
                &copy; 2012 Eternal Contrast Designs Denver, CO
            </div>
            <div class="footer-icons">
                <ul class="footer-social">
                    <li ><a class="rss" href="#"></a></li>
                    <li ><a target="_blank" class="dribbble" href="http://dribbble.com/Alauderdale10"></a></li>
                    <li ><a target="_blank" class="twitter" href="https://twitter.com/Alauderdale10"></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>