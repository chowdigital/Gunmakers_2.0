<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Wordpress-bootstrap-starter-theme
 */

get_header();
?>


<div class="page-img-header page-img-header-sp d-flex z-depth-3" style="background-image: url(<?php the_post_thumbnail_url(); ?>); background-repeat: no-repeat; background-position: center; background-size: cover;">

<div class="mask gradient-custom" style="width: 100%; height: 100%;">

  </div>
</div>
		<main id="primary" class="site-main container  pt-5 pb-5">
		<div class="z-depth-3">
		<div class="menu-content-box overlap-cover overlap-cover-sp">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );

			

			

		endwhile; // End of the loop.
		?>
		<a href="book"><button type="button" class="btn btn-outline-primary mt-3" data-mdb-ripple-color="dark">
 Book a Table
</button></a>
</div>

	</div>

	</main><!-- #main -->

<?php

get_footer();
