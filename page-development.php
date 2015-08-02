<?php

	/*
		Template Name: Development
	*/

	get_header();

?>

<section class="title big">

	<div class="inner">
		<p><?php the_field( 'subtitle' ) ?></p>
		<h1><?php the_field( 'info' ) ?></h1>
	</div>

</section>

<section class="concepts">
	<div class="inner">

		<?php while ( have_rows( 'phones' ) ) : the_row(); ?>
		
		<div class="item">
			<img src="<?php the_sub_field( 'icon' ) ?>">
			<span><?php the_sub_field( 'name' ) ?></span>
		</div>

		<?php endwhile; ?>

	</div>
</section>

<section class="friends">

	<div class="inner">
		<h1>Our Friends</h1>
		<h2>Close connected and fully support what we are doing</h2>
	</div>

	<div class="inner">

		<?php while ( have_rows( 'friends_logos' ) ) : the_row(); ?>

		<div class="item">
			<a href="#">
				<img src="<?php the_sub_field( 'icon' ) ?>">
				<p><?php the_sub_field( 'description' ) ?></p>
			</a>
		</div>

		<?php endwhile; ?>

	</div>

</section>

<section class="elevator skyline">

	<div class="inner">
		<h1>Other companies that are contributing</h1>
		<h2>All companies that contribute to a modular phone in some way</h2>
	</div>

	<div class="inner">
		<img src="/assets/img/logo-list.png">
	</div>

</section>

<aside class="overlay">

	<div class="inner">
		<a href="#" class="close">close</a>
	</div>

</aside>

<?php get_footer(); ?>