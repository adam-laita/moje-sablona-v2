<!DOCTYPE html>

<html lang="cs">
	<head>
		<meta charset="UTF-8">

		<title><?php bloginfo( 'name' ); ?></title>

		<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" />
	</head>

	<body>
		<header>
			<a href="<?php bloginfo( 'url' ); ?>"><?php bloginfo( 'name' ); ?></a>

			<?php wp_page_menu(); ?>
		</header>

		<main>
			<h1><?php the_title() ?></h1>

			<?php the_content(); ?>
		</main>

		<footer>
			<?php bloginfo( 'description' ); ?>
		</footer>
	</body>
</html>