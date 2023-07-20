                
<!-- <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<UTF-8">
    <title><?php the_title(); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('style.css'); ?>" type="text/css">
    <?php wp_head(); //porte d'entrée des fichiers css et js  ?>
  </head>
<body <?php body_class(); ?>>
    <div class="wrapper">
      <header>
		  <div class="FlexContainer">
			  
		 
		  
      	<a href="<?php echo home_url(); ?>" class="logo-img"> //echo= affiche--moi
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_abaco.svg" alt="Logo"> //src=un chemin vers un image, echo==ecrit-moi theme active
			
        </a>
			  
			  <nav>
				  <div class="hamburger">
					  
				  </div>
		  <?php
	wp_nav_menu(
	array(
	"menu" => "menu_principal",
		
		"menu_class" => "flexContainer",
		"container"=> "nav"
		
	)
	);?>
			  </nav>
		  </div>
		  
		  
		  
        <h1><a><?php bloginfo('name'); ?></a></h1> //name dans la balise=titre
        <h2><?php bloginfo('description'); ?></h2>
      </header> -->
<!-- <!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<UTF-8">
    <title><?php the_title(); ?> </title>
    <link rel="stylesheet" href="<?php bloginfo('style.css'); ?>" type="text/css">
    <?php wp_head(); //porte d'entrée des fichiers css et js  ?>
  </head>
<body <?php body_class(); ?>>
    <div class="wrapper">
      <header>
		  <div class="FlexContainer">
			     
		 
		  
      	<a href="<?php echo home_url(); ?>" class="logo-img"> //echo= affiche--moi
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo_abaco.svg" alt="Logo"> //src=un chemin vers un image, echo==ecrit-moi theme active
			
        </a>
			  
			  <nav>
				  <div class="hamburger">
					  
				  </div>
		  <?php
	wp_nav_menu(
	array(
	"menu" => "menu_principal",
		
		"menu_class" => "flexContainer",
		"container"=> "nav"
		
	)
	);?>
			  </nav>
		  </div>
		  
		  
		  
        <h1><a><?php bloginfo('name'); ?></a></h1> //name dans la balise=titre
        <h2><?php bloginfo('description'); ?></h2>
      </header> --