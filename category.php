<?php
/**
 * The template for displaying Category pages.
 *
 * Used to display archive-type pages for posts in a category.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


		<div id="page-content">

		<?php if ( have_posts() ) : ?>
		
			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>

<div class="item thumbstyle">
<?php 
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it. ?>
 <a href="<?php the_permalink(); ?>"><?php  the_post_thumbnail('onefifty'); ?></a>
<?php } else { ?>
<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php } ?>
<div class="thumbnail-info"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
</div> <!-- thumbnail -->
				

			<?php endwhile;?>

			

		
		<?php endif; ?>

		</div><!-- #content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>