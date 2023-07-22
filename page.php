<?php

/**
 * Template Name: thankyou-Page
 * Template Post Type: post, page
 */

get_header();
?>
<div class="testbox">
<main id="primary" class="site-main">

	<?php
	while (have_posts()) :
		the_post(); ?>


		<!-- <h1><?php //echo get_the_title(); ?></h1> -->

		<div class="form-content">

			<?php the_content(); ?>
		</div>
	<?php


	endwhile; // End of the loop.
	?>

</main><!-- #main -->
</div>
<?php

get_footer();
