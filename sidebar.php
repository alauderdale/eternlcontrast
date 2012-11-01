<sidebar>
    <div class="sidebar-widget">
    <h1>Categories</h1>
    <div class="categories">
        <ul>
            <?php $args = array(
            	'title_li'           => __( '' ),
            ); ?>
            <?php wp_list_categories($args); ?> 
        </ul>
    </div>
    </div>
    <div class="sidebar-widget">
    <h1>Contact</h1>
        <p>Email <br> 
        <a href="mailto:alauderdale@mac.com">alauderdale@mac.com</a></p>
        <p>Phone <br> 970.396.3943</p>
    </div>
</sidebar>