<?php

	/*
		Template Name: Journey
	*/

	get_header();

?>

<section class="title big timeline">
	<div class="inner">
		<p><?= the_field( 'subtitle' ) ?></p>
		<h1><?= the_field( 'info' ) ?></h1>
	</div>
</section>

<?php

$args = [
	'order' => 'ASC',
	'posts_per_page' => -1,
	'orderby' => 'date'
];

$posts = get_posts( $args );

?>

<section class="posts">
	<div class="inner">

	<?php

	$i = 0;

	foreach( $posts as $post ) : the_post();

	$format = get_post_format();
	$position = $i++ % 2 == 0 ? 'right' : 'left';

	?>

		<?php if( $format == false ): ?>

			<article class="<?= $position ?>">

				<time><?php the_time( 'F Y' ) ?></time>
				<?php the_content() ?>

			</article>

		<?php elseif( $format == 'image' ): ?>

			<article class="<?= $position ?>">

				<time><?php the_time( 'F Y' ) ?></time>
				<?php the_content() ?>

				<figure>
					<img src="<?php the_field( 'thumbnail' ) ?>">
				</figure>

			</article>

		<?php

		elseif( $format == 'video' ):
		$i++;

		$id = explode( '=', get_field( 'thumbnail' ) )[1];

		?>

			<article class="large">

				<time><?php the_time( 'F Y' ) ?></time>

				<figure>
					<iframe src="//www.youtube.com/embed/<?= $id ?>?modestbranding=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				</figure>

				<h1><?php the_title() ?></h1>
				<?php the_content() ?>

			</article>

		<?php endif; ?>

	<?php endforeach; ?>

	</div>
</section>

<?php get_footer(); ?>