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
	$size = intval( get_field( 'size' ) );

	$position = $i++ % 2 == 0 ? 'right' : 'left';

	if( $size == 1 ) {
		$position = 'large';
	}

	?>

		<article class="<?= $position ?>">

			<time><?php the_time( 'F Y' ) ?></time>

			<?php if( $format == false ): ?>

				<?php the_content() ?>

			<?php elseif( $format == 'image' ): ?>

				<?php if( $size == 1 ): ?>

					<figure>
						<img src="<?php the_field( 'thumbnail' ) ?>">
					</figure>

					<h1><?php the_title() ?></h1>
					<?php the_content() ?>

				<?php else: ?>

					<?php the_content() ?>

					<figure>
						<img src="<?php the_field( 'thumbnail' ) ?>">
					</figure>

				<?php endif; ?>
			
			<?php

			elseif( $format == 'video' ):
			$i++;

			$id = explode( '=', get_field( 'thumbnail' ) )[1];

			?>

				<figure>
					<iframe src="//www.youtube.com/embed/<?= $id ?>?modestbranding=0&showinfo=0" frameborder="0" allowfullscreen></iframe>
				</figure>

				<?php if( $size == 1 ): ?>
					<h1><?php the_title() ?></h1>
				<?php endif; ?>
				
				<?php the_content() ?>

			<?php endif; ?>

		</article>

	<?php endforeach; ?>

	</div>
</section>

<?php get_footer(); ?>