<?php

	/*
		Template Name: Development
	*/

	get_header();

?>

<section class="title big">

	<div class="inner">
		<p>We’re trying to get the industry working on this idea. The more companies on this page the better we do our job.</p>
		<h1>Current modular phone development</h1>
	</div>

</section>

<section class="concepts">
	<div class="inner">

		<div class="item">
			<img src="assets/img/concept/project-ara.png">
			<span>Project Ara</span>
		</div>

		<div class="item">
			<img src="assets/img/concept/zte-ecomobius.png">
			<span>ZTE Ecomobius</span>
		</div>

		<div class="item">
			<img src="assets/img/concept/magic-cube.png">
			<span>Magic Cube</span>
		</div>

		<div class="item">
			<img src="assets/img/concept/puzzlephone.png">
			<span>PuzzlePhone</span>
		</div>

		<div class="item">
			<img src="assets/img/concept/vsenn.png">
			<span>VSenn</span>
		</div>

		<div class="item">
			<img src="assets/img/concept/fonkraft.png">
			<span>Fonkraft</span>
		</div>

	</div>
</section>

<section class="friends">

	<div class="inner">
		<h1>Our Friends</h1>
		<h2>Close connected and fully support what we are doing</h2>
	</div>

	<div class="inner">

		{% for i in (1..18) %}

			<div class="item">
				<a href="#">
					<img src="assets/img/logos/google.png">
					<p>Google started out as a search engine but we have grown into so much more. We build products that we hope will make the web better, and therefore your experience on the web better.<br><br>With products like Chrome and Android, we want to make it simpler and faster for people to do what they want to online. Above all, It means making our products work better so that people can spend time on the stuff they are good at, like enjoying time with family, camping in the wilderness, painting a picture or throwing a party. We are not there yet, but we are working on it.</p>
				</a>
			</div>

		{% endfor %}

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