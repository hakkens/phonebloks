<?php

	/*
		Template Name: Contact
	*/

	get_header();
	

?>

<section class="contact">

	<div class="inner">
    <?php if (have_posts()) : while (have_posts()) : the_post();?>
<?php the_content(); ?>
<?php endwhile; endif; ?>
	</div>
		
</section>



<?php get_footer(); ?>