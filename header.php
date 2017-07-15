<?php
/**
 * The header.
 *
 * @package Bootswatch
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

	<header class="header">

		<nav class=" navbar navbar-default <?php echo bootswatch_has( 'fixed_navbar' ) ? 'navbar-fixed-top' : 'navbar-static-top'; ?> ">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand site-title" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="collapse navbar-collapse">
					<?php get_template_part( 'template-parts/snippets/header', 'menu' ); ?>
					<?php get_template_part( 'template-parts/snippets/header', 'search-form' ); ?>
				</div>
			</div>
		</nav>

		<?php do_action( 'bootswatch_after_nav' ); ?>
	</header>

	<?php get_template_part( 'template-parts/snippets/header', 'custom-header' ); ?>
