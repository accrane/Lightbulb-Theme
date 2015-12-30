<?php
/**
 * The main template file.
 */

get_header(); ?>


            
            
            <div class="page-content">
            	
				
				
                
                
       
            
            
         
          <div class="entry-content item w2">  
           <h2>Welcome to my little corner of the interwebs.</h2>  
			Here you can find some work I've done including websites, videos, logos, other designs, photography, hobbies and ramblings. Just a little collection of all things me. 
			</div><!-- #content -->
            
<?php 
$args = array(
	'post_type' => 'post',
	'category_name' => 'front-page'
);
$the_query = new WP_Query( $args ); ?>
<?php if ( $the_query->have_posts() ) : ?>

<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>            
            
          
<div class="item thumbstyle">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
 <a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('onefifty'); ?></a>
<?php } else { ?>
<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
<?php } ?>
<div class="thumbnail-info"><h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3></div>
</div> <!-- thumbnail -->
          
      <?php endwhile; ?>



		<?php endif; // end have_posts() check ?>    
          
          
          
                
       
            
            </div><!-- page-content -->
            
            
			
        
        

		


<?php get_footer(); ?>