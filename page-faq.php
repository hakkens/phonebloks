<?php

	/*
		Template Name: FAQ
	*/

	get_header();

?>

<section class="title">

	<div class="inner">
		<img src="<?php the_field( 'icon' ) ?>">
		<h1><?php the_field( 'subtitle' ) ?></h1>
	</div>

</section>

<section class="teasers faq">

	<div class="inner">

		<?php while ( have_rows( 'questions' ) ) : the_row(); ?>

		<div class="fifty">
			<h2><?php the_sub_field( 'question' ) ?></h2>
			<?php the_sub_field( 'answer' ) ?>
		</div>

		<?php endwhile; ?>

	</div>

</section>

<?php get_footer(); ?>