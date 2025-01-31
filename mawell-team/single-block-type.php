<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MaxxWell
 */

get_header();
?>

	<main id="primary" class="site-main pt-20">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'general' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_footer('2');
