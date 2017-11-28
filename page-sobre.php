<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package site
 */

get_header(); ?>

<section id="sobre">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left fadeInUp wow">
				<h1>A Interlog</h1>
				<div class="separadorc"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left fadeInUp wow">
				<p>
					Inicialmente atuávamos em Belo Horizonte, mas como a demanda de 
					nossos clientes se expandia, passamos a atuar nas principais cidades 
					do interior do estado de Minas Gerais e a nível nacional. 	
				</p>					
				<p>Os profissionais da Interlog atendem a pequenas empresas e a grandes
					instituições, transportando em todo o país cargas e encomendas 
					expressas. </p>
				<p>Realizamos projetos de acordo com a necessidade de nossos clientes 
					atendendo a vários nichos de mercado. </p>
				<p>Com o processo totalmente informatizado, administramos e conduzimos 
					com segurança as mais diversas demandas, oferecendo aos clientes 
					sistema de monitoramento via Web.</p><br>
				<ul class="mobi-vantagens">
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Capilaridade</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Prazos reduzidos</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Agilidade e versatilidade</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Segurança da carga</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Moderna estrutura dinâmica e equalizada</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Atendimento personalizado</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Equipe altamente qualificada</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">TI (baixa online, etc)</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Frota própria</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Empresa sustentável (certificação Ouro)</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Rastreamento total da carga</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Excelente relação custo/benefício</div></li>
				</ul>
			</div>
			<div class="col-md-6 fadeInRight wow videoWrapper" data-wow-delay="0.5s">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/PvITQarOX8Q" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>		
</section>

<section id="sobre-info">
	<div class="container">
		<div class="row">
			<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/chat.png"; ?>" /><br><br>
			<h2>Solicite um orçamento</h2>
			<p>É rápido e fácil, solicite uma proposta e, em caso de dúvidas, conte com um dos nossos especialistas.</p>
		</div><br>		
		<div class="row">
			<div class="col-md-12">
				<a href="<?php echo home_url( '/' )."orcamento"; ?>" class="btn btn-amarelo">quero um orcamento</a>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>
