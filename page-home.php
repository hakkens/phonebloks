<?php

	/*
		Template Name: Home
	*/

	get_header();

?>

<section class="hero">

	<div class="inner full">
		<h1>Hi, we are Phonebloks!</h1>
		<p>... and we are trying to change the way how electronics are made, creating less waste.</p>
		<small>*Oh, and we love to make videos.</small>
	</div>

	<iframe style="display: none" src="//www.youtube.com/embed/oDAw7vW7H0c?enablejsapi=1">
	</iframe>

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
		<h2>Community</h2>
		<p>We believe in the power of the crowd. Bringing people together and start a movement to bring this idea to life.</p>
		<a href="#">Join us</a>
	</div>

</section>

<section class="news">
	
	<div class="inner">
		<h1>Latest news</h1>
	</div>
	
	<div class="inner">
		
		<figure>
			
			<img src="assets/img/sample-1.png">
			
			<figcaption>
				<h1>Title of the news item</h1>
				<p>A short story about the item and what it’s about here that you can read here mostly it’s just useless words b...</p>
				<a href="#">Read full story</a>
			</figcaption>
			
		</figure>
		
		<figure>
			
			<img src="assets/img/sample-2.png">
			
			<figcaption>
				<h1>Title of the news item</h1>
				<p>A short story about the item and what it’s about here that you can read here mostly it’s just useless words b...</p>
				<a href="#">Read full story</a>
			</figcaption>
			
		</figure>
		
		<figure>
			
			<img src="assets/img/sample-3.png">
			
			<figcaption>
				<h1>Title of the news item</h1>
				<p>A short story about the item and what it’s about here that you can read here mostly it’s just useless words b...</p>
				<a href="#">Read full story</a>
			</figcaption>
			
		</figure>
		
		<figure>
			
			<img src="assets/img/sample-4.png">
			
			<figcaption>
				<h1>Title of the news item</h1>
				<p>A short story about the item and what it’s about here that you can read here mostly it’s just useless words b...</p>
				<a href="#">Read full story</a>
			</figcaption>
			
		</figure>
		
	</div>
	
</section>

<?php get_footer(); ?>