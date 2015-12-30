<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

<div class="page-content">

			<?php while ( have_posts() ) : the_post(); ?>
            
      
            
          
        
          <div class="entry-content item w3">  
           <h1>
					<?php  the_title(); ?>
            </h1>  
			<?php the_content(); ?>
            
            
            
			</div><!-- #content -->
            
     
            
            
            
            
            
            <?php if(get_field('gallery_repeater')) :  ?>
                
					<?php while(has_sub_field('gallery_repeater')) :  ?>
                    
                    <?php 
					   $image = get_sub_field('images');
					   $url = $image['url'];
					   $title = $image['title'];
					   $alt = $image['alt'];
					   $caption = $image['caption'];
						 
					   // thumbnail
					   $size = 'onefifty'; // custom size from add_image_size
					   $thumb = $image['sizes'][ $size ];
					   $width = $image['sizes'][ $size . '-width' ];
					   $height = $image['sizes'][ $size . '-height' ];
					?>
                   
                    	<div class="item thumbstyle">
							<a class="cboxElement"  href="<?php echo $url; ?>">
                            <img src="<?php echo $thumb; ?>"  class="colorbox-<?php echo get_the_ID(); ?> "/>
                          </a>
                      </div><!-- gallery images -->
                     
                  <?php endwhile; ?>
                  
                 
           
           <?php endif; ?>
            
            
            <div class="item w3">  
				   <?php comments_template( '', true ); ?>
             </div>
            
            

			<?php endwhile; // end of the loop. ?>
            
            
           

</div><!-- #content -->


<?php //get_sidebar(); ?>
<?php get_footer(); ?>