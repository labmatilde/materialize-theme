<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package materialize_css
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header" role="banner">

	<?php if( have_rows('dados', 'option') ):
    while( have_rows('dados', 'option') ) : the_row(); ?>
	<pre>
		<?php print_r(get_sub_field('chaves')); ?>
	</pre>

		<!-- TOP MENU -->
		<div id="topbar" class="menu-top-bar hide-on-med-and-down">
			<div class="container">
				<div class="nav-wrapper">
					<ul class="topbar">
						<li class="list-top"><i class="material-icons">account_balance</i><span class="content-top">CHAVE
								PIX: 40.416.297/0001-95</span></li>
						<li class="list-top"><i class="material-icons">call</i><a class="link-top" href="#"><span
									class="content-top">(11) 93719-0613</span></a></li>
						<li class="list-top"><i class="material-icons">call</i><a class="link-top" href="#"><span
									class="content-top">(11) 2053-0090</span></a></li>
						<li class="list-top"><i class="material-icons">email</i><a class="link-top"
								href="mailto:contato@larassistencialmatilde.com.br"><span
									class="content-top">contato@larassistencialmatilde.com.br</span></a></li>
					</ul> <!-- .topbar -->
				</div> <!-- .nav-wrapper -->
			</div> <!-- .container -->
		</div> <!-- #topbar -->
	
	<?php endwhile; endif; ?>

		<nav class="nav-extended">
			<div class="nav-wrapper">		        	
				<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo center">
					<?php
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						if($custom_logo_id)
						{
							$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
							echo '<img src="'.$image[0].'">';
						}
						else
						{
							echo '<p class="blog-title">'.bloginfo('name').'</p>';
						}					
					?>	        	
				</a>

				<ul id="nav-mobile" class="right hide-on-med-and-down side-nav">
					<?php wp_nav_menu( array('theme_location' => 'secondary')); ?>
				</ul>
	
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

				<div class="side-nav" id="mobile-demo">
						<h5 class="center mobile-title"><?php bloginfo('name'); ?></h5>
						<?php wp_nav_menu( array('theme_location' => 'secondary')); ?>
						<?php wp_nav_menu( array( 'theme_location' => 'primary')); ?>	
				</div>
			</div>
			<div class="nav-content hide-on-med-and-down">
			<ul>
				<?php wp_nav_menu( array('theme_location' => 'primary')); ?>
			</ul>
			</div>
		</nav>
	</header><!-- #masthead -->
	<div id="content" class="row">
