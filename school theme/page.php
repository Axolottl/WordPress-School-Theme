<?php get_header();?>
	

	<div class="jumbotron jumbotron-fluid">
	  <div class="container text-center">
	    <h1 class="display-4"><?php the_title();?></h1>
	    <?php if(have_posts()) : while (have_posts()): the_post() ;?>
					<?php the_content();?>
			<?php endwhile; endif;?>
	  </div>
	</div>
	<hr class="my-4">
	

<?php get_footer();?>
