<?php
/*
  Template Name: Nivo Home
*/

?>
<?php get_header(); ?>




 



    
       <div class = "col-md-12 text-center" id = "productos_boxes">
    	

       
        	<H2>PRODUCTOS</H2>



    </div>


    <div class="jumbotran text-center">

   		<img class = "img-responsive" src="<?php bloginfo('template_url'); ?>/images/productos_banner.jpg" />	
    
    </div>

        <div class = "col-md-12 text-center" id = "spa_boxes">
    	

       
        	<H2>SPA PARA MASCOTAS</H2>



    </div>


    <div class="jumbotran text-center">

 
   <img class = "img-responsive" src="<?php bloginfo('template_url'); ?>/images/spa_banner.jpg" />	
    
    </div>


    <div class = "col-md-12 text-center" id = "veterinaria_boxes">
    	

        	<H2>VETERINARIA</H2>



    </div>

        <div class="jumbotran text-center">

 
   <img class = "img-responsive" src="<?php bloginfo('template_url'); ?>/images/slider_image_11.jpg" />	
    
    </div>

  <div class="container">   
    <div class="row">

      <div class="col-md-12">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="page-header">
           
          </div>

          

        <?php endwhile; else: ?>
          
          <div class="page-header">
            <h1>Oh no!</h1>
          </div>

          <p>No content is appearing for this page!</p>

        <?php endif; ?>


      </div>      

    </div>
<?php get_footer(); ?>