<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php bloginfo('name');?></title>
		<?php wp_head();?>
	</head>
<body <?php body_class();?>>
	<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
		<div class="container-fluid">
		  <a class="navbar-brand" href="#"><img width="30px" height="30px" src="img/estsb.png"> <?php bloginfo('name');?></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon" ></span>
 		 </button>
		  <div class="collapse navbar-collapse" id="navbarNav">
			
		  		
   			<?php  boostrab_nav_menu() ;?>

 
		</div>
		
</nav>
   