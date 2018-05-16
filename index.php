<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php echo esc_attr( get_bloginfo( 'charset' ) ); ?>">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); /* required */ ?>
	</head>
	<body <?php body_class(); ?>>

		<?php
		// main post loop
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				the_title('<h2>','</h2>');
				the_content();
			endwhile;
		endif;
		?>

		<?php echo vip_powered_wpcom(); /* required */ ?>
		<?php wp_footer(); /* required */ ?>
	</body>
</html>
