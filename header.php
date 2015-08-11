<!DOCTYPE html>
<html lang="en">

	<head>

		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-48209086-1', 'auto');
			ga('send', 'pageview');
		</script>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

		<?php wp_head() ?>

	</head>

	<?php

	$numb = strpos( get_bloginfo( 'url' ), 'localhost' ) !== false ? 2 : 3;

	$template = get_page_template();
	$handle = explode( '.', explode( '-', $template )[$numb] )[0];

	switch( $handle ) {

		case 'home':
		$class = 'front';
		break;

		case 'about':
		$class = 'middle';
		break;

		case 'development':
		case 'timeline':
		$class = 'dark';
		break;

		default:
		$class = false;

	}

	?>

	<?php if( $class ): ?>
		<body class="<?= $class ?>">
	<?php else: ?>
		<body>
	<?php endif; ?>

		<header id="header">
			<div class="inner">
				
				<a href="<?= home_url() ?>" class="logo"><?php bloginfo( 'name' ) ?></a>
				
				<div>
					<span>
						<b></b>
						<b></b>
						<b></b>
					</span>
				</div>
				
			</div>
			
			<div class="inner">
				
				<nav>

					<?php

					$args = [
						'theme_location' => 'header',
						'container' => false,
						'echo' => false
					];

					$to_replace = [
						'Journey', 'Help us', 'Development'
					];

					$menu = wp_nav_menu( $args );

					foreach( $to_replace as $item ) {

						$filename = get_template_directory() . '/images/' . str_replace( ' ', '-', strtolower( $item ) ) . '.svg';
						$svg = file_get_contents( $filename );

						$menu = str_replace( $item, $svg, $menu );

					}

					echo $menu;

					?>

				</nav>
				
			</div>
		</header>
