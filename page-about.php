<?php

	/*
		Template Name: About
	*/

	get_header();
	while ( have_posts() ) : the_post();

?>

<section>
	<div class="inner-fluid">

		<?php
			$id = explode( '=', get_field( 'video' ) )[1];
		?>

		<iframe src="//www.youtube.com/embed/<?= $id ?>?modestbranding=0&showinfo=0" frameborder="0" allowfullscreen></iframe>

	</div>
</section>

<section class="about">

	<div class="inner">
		<?php the_content() ?>
	</div>

	<div class="inner-fluid">
		<img src="<?php the_field( 'cover' ) ?>">
	</div>

</section>

<section class="team">

	<div class="inner">
		<h1><?php the_field( 'heading' ) ?></h1>
	</div>

	<div class="inner">

		<?php

		while ( have_rows( 'members' ) ) : the_row();
		$twitter = get_sub_field( 'twitter' );

		?>

		<figure>

			<img src="<?php the_sub_field( 'avatar' ) ?>">

			<figcaption>
				<h2><?= get_sub_field( 'name' ) . ' - ' . get_sub_field( 'country' ) ?></h2>
				<p><?php the_sub_field( 'job' ) ?></p>
				<a href="https://twitter.com/<?= $twitter ?>" class="twitter"><?= $twitter ?></a>
			</figcaption>

		</figure>

		<?php endwhile; ?>

	</div>
</section>

<?php endwhile; get_footer(); ?>