<?php

	/*
		Template Name: Home
	*/

	get_header();

?>

<section class="hero">

	<img src="<?php the_field( 'background_small' ) ?>">

	<video loop muted>
		<source src="<?= get_field( 'background' )['url'] ?>" type="video/mp4">
	</video>

	<div class="wrap">
		<div class="inner full">
			<h1><?php the_field( 'title' ) ?></h1>
			<p><?php the_field( 'subtitle' ) ?></p>
			<small><?php the_field( 'info' ) ?></small>
		</div>
	</div>

</section>

<section class="teasers">

	<?php

	$i = 0;

	while ( have_rows( 'teasers' ) ) : the_row();

	$counter = $i++;

	$sixty = $counter % 2 == 0 ? 'right' : 'left';
	$fourty = $counter % 2 == 0 ? 'left' : 'right';

	?>
	
	<div class="inner">
		<div class="sixty drag-<?= $sixty ?>">
			<img src="<?php the_sub_field( 'image' ); ?>">
		</div>
		<div class="fourty drag-<?= $fourty ?>">
			<?php the_sub_field( 'description' ); ?>
		</div>
	</div>

	<?php endwhile; ?>

</section>

<section class="elevator">
	<div class="inner">

		<h2><?php the_field( 'elevator_heading' ) ?></h2>
		<p><?php the_field( 'elevator_description' ) ?></p>

		<a href="<?php the_field( 'elevator_url' ) ?>" target="_blank">
			<?php the_field( 'elevator_label' ) ?>
		</a>

	</div>
</section>

<section class="news">

	<div class="inner">
		<h1>Latest news</h1>
	</div>

	<div class="inner">

		<?php

		include_once( ABSPATH . WPINC . '/feed.php' );
		$feed = fetch_feed( 'https://davehakkens.nl/tag/phonebloks/feed/' );

		if ( ! is_wp_error( $feed ) ) {
			$max = $feed->get_item_quantity( 4 );
			$items = $feed->get_items( 0, $max );
		}

		?>

		<?php foreach( $items as $item ) : ?>

		<figure>

			<span>
				<img src="<?= get_between( $item->get_content(), 'src="', '"' ) ?>">
			</span>

			<figcaption>
				<h1><?= esc_html( $item->get_title() ) ?></h1>
				<p><?= wp_strip_all_tags( $item->get_content() ) ?></p>
				<a href="<?= esc_url( $item->get_permalink() ) ?>">Read full story</a>
			</figcaption>

		</figure>

		<?php endforeach; ?>

	</div>

</section>

<?php get_footer(); ?>