<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
    <?php wp_title('|',true, 'right'); ?>  <?php bloginfo('name')?>
   
      
    </title>





    <?php wp_head(); ?>



  </head>

  <body <?php body_class();?>>


  <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container col-md-8">
    <div class="navbar-header">
      <button class="navbar-toggle" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="<?php bloginfo('url');?>"><?php bloginfo('name');?></a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">

<div id="navbar" class="navbar-collapse collapse">

    

          <?php

          $args = array(

            'menu' => 'primary',
            'menu_class' => 'nav navbar-nav',
            'container' => 'false',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
            'theme_location' => 'primary', 


          );
          wp_nav_menu($args);
          ?>

         <!-- social media icons -->


 <?php

          $argumentos_right = array(

            'menu' => 'secondary',
            'menu_class' => 'nav navbar-nav navbar-right',
            'container' => 'false',
            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
            'walker'            => new wp_bootstrap_navwalker(),
            'theme_location' => 'secondary', 


          );
          wp_nav_menu($argumentos_right);

          ?>


        </div><!--/.navbar-collapse -->


  </div>
                    <div class="social col-md-4">
    <ul>
        <li><a href="#"><i class="fa fa-lg fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-lg fa-twitter"></i></a></li>

      
        <li><a href="#"><i class="fa fa-lg fa-pinterest"></i></a></li>
        
     
        <li><a href="#"><i class="fa fa-lg fa-instagram"></i></a></li>
        
        <li><a href="#"><i class="fa fa-lg fa-youtube"></i></a></li>


    </ul>
</div>
</nav>
</header>

