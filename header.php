<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package site
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" type="image/png" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/Data Certa Logistica Icone.png"; ?>" />
<?php wp_head(); ?>
<script>
new WOW().init();
</script>
</head>

<body <?php body_class(); ?>>
<div id="page">
	<section id="header">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-md-offset-8">
						<span>Redes sociais </span>	
						<ul class="redes_sociais_header clearfix">
			              <li class="youtube"><a target="_blank" href="#"></a></li>
			              <li class="instagram"><a target="_blank" href="#"></a></li>
			              <li class="twitter"><a target="_blank" href="#"></a></li>
			              <li class="facebook"><a target="_blank" href="#"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-3 text-left">
						<a href="<?php echo home_url( '/' ); ?>"><img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo.jpg"; ?>" /></a>
					</div>
					<div class="col-md-9">
						<div class="menu-responsivo">
							<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="glyphicon glyphicon-align-justify" aria-hidden="true"></span>
							</button>
							<ul class="dropdown-menu">
								<li><a href="<?php echo home_url( '/' ); ?>">Início</a></li
								><li><a href="<?php echo home_url( '/' ); ?>">A Interlog</a></li
								><li><a href="<?php echo home_url( '/' ); ?>">Serviços</a></li
								><li><a href="<?php echo home_url( '/' ); ?>">Estrutura</a></li
								><li><a href="<?php echo home_url( '/' ); ?>">Fale Conosco</a></li
								><li><a href="<?php echo home_url( '/' ); ?>">Faça um Orçamento</a></li>
							</ul>								
						</div>						
						<div class="menu-header clearfix">
							<div class="menu-op"><a class="orcamento" href="<?php echo home_url( '/' )."quero-ser-cliente"; ?>">Faça um Orçamento</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Fale Conosco</a></div>	
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Estrutura</a></div>							
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Serviços</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">A Interlog</a></div>
							<div class="menu-op"><a href="<?php echo home_url( '/' ); ?>">Início</a></div>
						</div>
					</div>					
				</div>
			</div>
		</nav>
	</section>
