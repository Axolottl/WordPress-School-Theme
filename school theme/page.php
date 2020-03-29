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
	    <?php if(have_posts()) : while (have_posts()): the_post() ;?>
					<?php the_content();?>
			<?php endwhile; endif;?>
	  </div>
	</div>
	<hr class="my-4">
	

<?php get_footer();?>
