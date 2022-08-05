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
					</ul>
				</div>
			</div>
		</div>

		<!-- NAV MENU -->
		<nav>
			<div class="container">
				<div class="nav-wrapper">
					<a href="<?= get_home_url(); ?>" class="brand-logo"><img class="logo-img"
							src="<?= get_template_directory_uri(); ?>/assets/images/logo_lam_claro.png" alt=""></a>
					<a href="#" data-activates="mobile-lam" class="button-collapse"><i class="material-icons">menu</i></a>
					<ul class="right hide-on-med-and-down">
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#projetos">Projetos</a></li>
						<li><a href="#voluntarios">Seja um Voluntario</a></li>
						<li><a href="#eventos">Eventos</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="#contato">Contato</a></li>
						<li><a href="#doe" class="waves-effect waves-light btn">Faça uma doação</a></li>
					</ul>

					<ul class="side-nav" id="mobile-lam">
						<li><img class="logo-mobile" src="<?= get_template_directory_uri(); ?>/assets/images/logo_lam_claro.png" alt=""></li>
						<li><a href="#sobre">Sobre</a></li>
						<li><a href="#projetos">Projetos</a></li>
						<li><a href="#voluntarios">Seja um Voluntario</a></li>
						<li><a href="#eventos">Eventos</a></li>
						<li><a href="#contato">Contato</a></li>
						<li><a href="#doe">Faça uma doação</a></li>
						<li><span class="pix-mobile">CHAVEPIX: 40.416.297/0001-95</span></li>
						<li><a href="tel:+5511937190613">(11) 93719-0613</a>
						</li>
						<li><a href="tel:+551120530090">(11) 2053-0090</a>
						</li>
						<li><a href="mailto:contato@larassistencialmatilde.com.br">contato@larassistencialmatilde.com.br</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>



	</header><!-- #masthead -->
	<div id="content" class="row">
