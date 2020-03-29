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


	<div class="jumbotron jumbotron-fluid">
	  <div class="container text-center">
	    <h1 class="display-4"><?php the_title();?></h1>
	  </div>
	</div>
	<hr class="my-4">
	<div class="container">
        <div class="row">
        	
        	 <div class="page-content col-sm-6">
	  <?php if(have_posts()) : while (have_posts()): the_post() ;?>
					<?php the_content();?>
			<?php endwhile; endif;?> 
			</div>
			<div class="page-image col-sm-6">
				<?php if (has_post_thumbnail($post->ID)): ?>
            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
            <img class="img-fluid  img-thumbnail" src="<?php echo $image[0]; ?>" alt=""  >
        <?php endif; ?>
			</div>
		
		</div>
	</div>
<?php get_footer();?>
