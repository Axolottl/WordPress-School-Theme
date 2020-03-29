
<?php get_header();?>
    <div class="landing">
        <div class="home-wrap">
            <div class="home-inner">
            </div>
        </div>
    </div>
    <div class="caption center-block text-center">
        <section class="welcome">
            <div class="inners">
                <div class="content">
                            <h1 class="text-center"> <?php the_title();?> </h1>
                            <a class="btn btn-outline-light" href="#dut">Welcome</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            
                </div>
            </div>
        </section>
    </div>

</div>


	<div class="jumbotron jumbotron-fluid ">
	  <div class="container text-center">
	    <h1 class="display-4"><?php the_title();?></h1>
	    <?php if(have_posts()) : while (have_posts()): the_post() ;?>
					<?php the_content();?>
			<?php endwhile; endif;?>
	  </div>
	</div>
    <div class="container">
        <div class="row">
       
     <?php
    $args = array(
        'post_type' => 'post',
        'orderby' => 'ID',
        'post_status' => 'publish',
        'order' => 'DESC',
        'posts_per_page' => -1 
    );
    $result = new WP_Query($args);
    if ($result->have_posts()) : ?>
    <?php while ($result->have_posts()) :
    $result->the_post(); ?>


    
        <div class="col-sm-6">
            <div class="main-post">
                <h3 class="post-title">
                    
                    <?php the_title(); ?>
                
                </h3>
                <span class="post-author">
                   Written by <?php echo get_the_author() ?> 

                </span>
                <span class="post-date">
                    at <?php echo get_the_date('Y-m-d'); ?> , <?php the_time('H:i:s'); ?>
                </span>
                <span class="post-comments">
                    <p>Comments:<?php echo get_comments_number(); ?></p>
                </span>

            <?php if (has_post_thumbnail($post->ID)): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
            <img class="img-fluid  img-thumbnail" src="<?php echo $image[0]; ?>" alt=""  width="600px" height="200px">
        <?php endif; ?>
            <p class="post-content">
                <?php the_excerpt(); ?>
            </p>
            <hr>
            <p class="categories"> <?php $postcat = get_the_category($post->ID); ?>
                <?php if (!empty($postcat)) {
                echo esc_html($postcat[0]->name);
            } ?>
            </p>
        
        </div>
    </div>

<?php endwhile; ?>
<?php endif;
wp_reset_postdata(); ?>
</div>
</div>



   


<?php get_footer();?>
