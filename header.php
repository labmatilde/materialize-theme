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

	<?php 
	if( have_rows('dados', 'option') ):
    	while( have_rows('dados', 'option') ) : 
			the_row(); 
			$keys = get_sub_field('chaves'); 
			$phone = get_sub_field('telefone');
			$email = get_sub_field('email');
	
	?>
	<pre>
		<?php print_r(get_sub_field('email')); ?>
	</pre>

		<!-- TOP MENU -->
		<div id="topbar" class="menu-top-bar hide-on-med-and-down">
			<div class="container">
				<div class="nav-wrapper">
					<ul class="topbar">
						<?php 

						$view = $keys['mostrar'];
						foreach ($view as $key => $value):
							if ($value == 'header'): 
								if ($keys['chave']): ?>

								<li class="list-top">
									<i class="material-icons">account_balance</i>
									<span class="content-top">
										<?php _e('CHAVE PIX: ' . $keys['chave']); ?>
									</span>
								</li>

						<?php 
								endif; 
							endif;
						endforeach;
						
						$view = $phone['mostrar'];
						foreach ($view as $key_v => $value_v):
							if ($value_v == 'header'): 
								if ($phone['numeros']): 
									$phones = $phone['numeros'];
									foreach ($phones as $key => $value): ?>

									<li class="list-top">
										<i class="material-icons">call</i>
										<a class="link-top" href="tel:<?php _e($value['ddi'] . $value['ddd'] . $value['numero']); ?>">
											<span class="content-top">
												<?php _e('(' . $value['ddd'] . ') ' . $value['numero']); ?>
											</span>
										</a>
									</li>

						<?php 		
									endforeach; 
								endif; 
							endif; 
						endforeach; 

						$view = $email['mostrar'];
						foreach ($view as $key_v => $value_v):
							if ($value_v == 'header'): 
								if ($email['email']): ?>

								<li class="list-top">
									<i class="material-icons">email</i>
									<a class="link-top" href="mailto:<?php _e($email['email']); ?>">
										<span class="content-top"><?php _e($email['email']); ?></span>
									</a>
								</li>
						<?php
								endif;
							endif;
						endforeach;
						?>

					</ul> <!-- .topbar -->
				</div> <!-- .nav-wrapper -->
			</div> <!-- .container -->
		</div> <!-- #topbar -->
	
	<?php 
		endwhile; 
	endif; 
	?>

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
