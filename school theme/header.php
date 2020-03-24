<!DOCTYPE html>
<html <?php language_attributes();?>>
	<head>
		<meta charset="<?php bloginfo('charset');?>">
		<title><?php bloginfo('name');?></title>
		<?php wp_head();?>
	</head>
<body <?php body_class();?>>
	<nav class=" navbar navbar_expand_md  navbar-dark fixed-top bg-dark  ">
	
		<a class="navbar-brand" href="#" ><img width="30px" height="30px" src="img/estsb.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon" ></span>
		
 		 </button>
  		<div class="collapse navbar-collapse" id="navbarResponsive">
   			<?php  boostrab_nav_menu() ;?>

 
		</div>
</nav>
   