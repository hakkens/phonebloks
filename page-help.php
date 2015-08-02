<?php

	/*
		Template Name: Help us
	*/

	get_header();

?>

<section class="title">

	<div class="inner">
		<h1><?php the_field( 'subtitle' ) ?></h1>
	</div>

</section>

<section class="teasers help">

	<?php while ( have_rows( 'teasers' ) ) : the_row(); ?>

	<div class="inner">
		<div class="twenty">
			<img src="<?php the_sub_field( 'icon' ) ?>">
		</div>
		<div class="eighty">
			<h2><?php the_sub_field( 'heading' ) ?></h2>
			<?php the_sub_field( 'description' ) ?>
		</div>
	</div>

<?php endwhile; ?>

</section>

<?php get_footer(); ?>