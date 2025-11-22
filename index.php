<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<title><?php wp_title( '|', true, 'right' ); bloginfo( 'name' ); ?></title>
		
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" />

		<?php
			wp_head();
		?>
	</head>

	<body <?php body_class(); ?>>
		<?php
			wp_body_open();
		?>

		<header>
			<a href="<?php bloginfo( 'url' ); ?>">
				<?php bloginfo( 'name' ); ?>
			</a>

			<?php wp_page_menu(); ?>
		</header>

		<main>
			<h1><?php the_title() ?></h1>

			<?php the_content(); ?>
		</main>

		<footer>
			<?php bloginfo( 'description' ); ?>
		</footer>

		<?php
			wp_footer();
		?>
	</body>
</html>
