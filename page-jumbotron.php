<?php
/*
  Template Name: Sweet Pets Home
*/

?>
<?php get_header(); ?>

<?php

$argumentos = array(
	
	'post_type' => 'post',
	'category_name' => 'Featured',
);

$the_query = new WP_Query( $argumentos);

?>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            
            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>"></li>
            
            <?php endwhile; endif; ?>
          </ol>

          <?php rewind_posts(); ?>

          <!-- Wrapper for slides -->
          <div class="carousel-inner">

            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="item <?php if( $the_query->current_post == 0 ):?>active<?php endif; ?>">

              <?php
                $thumbnail_id = get_post_thumbnail_id(); 
                $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true );
                $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);                
              ?>
              <a href="<?php the_permalink(); ?>"><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"></a>
              <div class="carousel-caption"><?php the_title(); ?><span class = "texto-slider"><?php the_excerpt();?></span></div>
            </div>
            
            <?php endwhile; endif; ?>

          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>


    <!-- Main jumbotron for a primary marketing message or call to action -->
    
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

        <div class = "col-md-12 text-center" id = "boutique_boxes">
      

          <H2>BOUTIQUE</H2>



    </div>

        <div class="jumbotran text-center">

 
   <img class = "img-responsive" src="<?php bloginfo('template_url'); ?>/images/slider_image_11.jpg" /> 
    
    </div>

 <!--  <div class="container">   
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

    </div> -->

<?php get_footer(); ?>
