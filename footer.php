		<footer id="footer">
			<div class="inner">

				<nav>

					<?php

					$args = [
						'theme_location' => 'footer',
						'container' => false
					];

					wp_nav_menu( $args );

					?>

				</nav>

				<form>
					<input type="email" placeholder="<?php the_field( 'newsletter', 'option' ) ?>">
				</form>

				<div class="social">

					<?php

					$links = get_field( 'social', 'option' );

					foreach( $links as $link ) {

						$path = get_template_directory() . '/images/social/' . $link[ 'icon' ] . '.svg';

						?>

						<a href="<?= $link[ 'link' ] ?>" target="_blank">
							<?= file_get_contents( $path ) ?>
						</a>

						<?php

					}

					?>

				</div>

				<figure>
					<img src="<?= get_stylesheet_directory_uri() ?>/images/by.svg">
				</figure>

			</div>
		</footer>

		<?php wp_footer() ?>

	</body>

</html>