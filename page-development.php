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
			<div class="centring">

				<img src="<?php the_sub_field( 'icon' ) ?>">
				<span><?php the_sub_field( 'name' ) ?></span>

				<div>
					<img src="<?= get_sub_field( 'cover' )['sizes']['cover'] ?>">
					<p><?php the_sub_field( 'description' ) ?></p>
				</div>

			</div>
		</div>

		<?php endwhile; ?>

	</div>
</section>

<section class="friends">

	<div class="inner">
		<h1><?php the_field( 'friends_heading' ) ?></h1>
		<h2><?php the_field( 'friends_description' ) ?></h2>
	</div>

	<div class="inner">

		<?php while ( have_rows( 'friends_logos' ) ) : the_row(); ?>

		<div class="item">
			<div class="centring">

				<img src="<?= get_sub_field( 'icon' )['sizes']['logo'] ?>">

				<div>
					<img src="<?= get_sub_field( 'cover' )['sizes']['cover'] ?>">
					<p><?php the_sub_field( 'description' ) ?></p>
				</div>

			</div>
		</div>

		<?php endwhile; ?>

	</div>

</section>

<section class="elevator skyline">

	<div class="inner">
		<h1><?php the_field( 'companies_title' ) ?></h1>
		<h2><?php the_field( 'companies_subtitle' ) ?></h2>
	</div>

	<div class="inner companies">
		<?php while (  have_rows( 'companies' ) ) : the_row(); ?>

			<div class="company">
				<div class="centring">

					<img src="<?= get_sub_field( 'logo' )['sizes']['logo'] ?>">

					<div>
						<img src="<?= get_sub_field( 'cover' )['sizes']['cover'] ?>">
						<p><?php the_sub_field( 'description' ) ?></p>
					</div>

				</div>
			</div>

		<?php endwhile; ?>
	</div>

	<div class="inner">
		<div class="blogtitle">
			<h1>Latest Development Updates From Our Blog.</h1>
		</div>
	</div>

	<div class="inner stories">

	<?php

		include_once( ABSPATH . WPINC . '/feed.php' );
		$feed = fetch_feed( 'http://blog.phonebloks.com/rss' );

		if ( ! is_wp_error( $feed ) ) {
			$max = $feed->get_item_quantity( 8 );
			$items = $feed->get_items( 0, $max );
		}

	?>

		<div class="articles">

			<?php foreach( $items as $item ) : ?>

			<?php

			$content = trim_content( $item->get_content() );

			if( $content == '' ) {
				continue;
			}

			?>

			<article>
				<a href="<?= esc_url( $item->get_permalink() ) ?>" target="_blank">

				<?php

				$title = esc_html( $item->get_title() );
				$key = strpos( $title, 'by' ) !== false ? 'by' : 'By';

				echo explode( $key, $title, 2 )[0];

				?>

				</a>
				<p><?= $content ?></p>
			</article>

			<?php endforeach; ?>

		</div>

	</div>

</section>

<aside class="overlay">

	<div class="inner">
		<a href="#" class="close">close</a>
	</div>

</aside>

<?php get_footer(); ?>
