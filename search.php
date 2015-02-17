<?php
/**
 * The template for displaying post archives
 *
 * @package Layers
 * @since Layers 1.0
 */

get_header(); ?>
<?php get_template_part( 'partials/header' , 'page-title' ); ?>
<section <?php post_class( 'content-main archive clearfix' ); ?>>
	<?php get_sidebar( 'left' ); ?>

	<?php if( have_posts() ) : ?>
		<div <?php layers_center_column_class(); ?>>
			<?php while( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'partials/content' , 'list' ); ?>
			<?php endwhile; // while has_post(); ?>

			<?php the_posts_pagination(); ?>
		</div>
	<?php endif; // if has_post() ?>

	<?php get_sidebar( 'right' ); ?>
</section>
<?php get_footer();