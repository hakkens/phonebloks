<?php

	/*
		Template Name: Contact
	*/

	get_header();

?>

<section class="contact">

	<div class="inner">
		<?php while( have_posts() ): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; ?>
	</div>

</section>

<?php get_footer(); ?>