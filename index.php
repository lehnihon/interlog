<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package site
 */

get_header(); ?>

<section id="banner">
	<div class="container-fluid">
		<div class="row">
			<?php
			echo do_shortcode("[metaslider id=28]"); 
			?>
		</div>
	</div>
</section>


<section id="home-solucoes">
	<div class="container">
		<div class="row">
			<div class="col-md-3 col-md-offset-1 fadeInLeft wow">
				<a href="<?php echo home_url( '/' ); ?>">
					<img  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre1.jpg"; ?>" />
				</a>
				<h3>
					Eficiência
				</h3>
				<p>Contamos com uma frota própria, com caminhões, carros, vans, veículos leves, motos e veículos blindados.</p>
			</div>
			<div class="col-md-3 fadeInUp wow">
				<a href="<?php echo home_url( '/' ); ?>">
					<img  src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre2.jpg"; ?>" />
				</a>
				<h3>
					Estrutura
				</h3>
				<p>Todas as nossas instalações são dotadas de segurança armada, guaritas blindadas e acesso através de senha eletrônica.</p>
			</div>
			<div class="col-md-3 fadeInRight wow">
				<a href="<?php echo home_url( '/' ); ?>">
					<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/sobre3.jpg"; ?>" />
				</a>
				<h3>
					Abrangência
				</h3>
				<p>Com uma equipe distribuida por todo o Brasil, há uma boa chance da Interlog fazer parte da sua vida. </p>
			</div>
		</div><br>
	</div>
</section>

<section id="home-atuacoes">
	<div class="container">
		<div class="row fadeInUp wow">
			<div class="col-md-12">
				<h1>Interlog Distribuição</h1>
				<p>A Iterlog disponibiliza soluções customizadas para todos os setores, que envolve os serviços de armazenagem, picking, 
transporte de encomendas expressas, movimentação de objetos de valor, carga fracionada e manuseio de documentos. </p>
			</div>
		</div><br/><br/>
		<div class="row">
			<div class="col-md-4 fadeInLeft wow text-left">
				<a href="<?php echo home_url( '/' ); ?>">
					<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto1.jpg"; ?>" />
				</a>
				<h3>
					A Interlog
				</h3>
				<a class="amarelo" href="">Saiba mais ></a>
			</div>
			<div class="col-md-4 fadeInUp wow text-left">
				<a href="<?php echo home_url( '/' ); ?>">
					<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto2.jpg"; ?>" />
				</a>
				<h3>
					Estrutura
				</h3>
				<a class="amarelo" href="">Saiba mais ></a>
			</div>
			<div class="col-md-4 fadeInRight wow text-left">
				<a href="<?php echo home_url( '/' ); ?>">
					<img class="e-cinza img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/foto3.jpg"; ?>" />
				</a>
				<h3>
					Serviços
				</h3>
				<a class="amarelo" href="">Saiba mais ></a>
			</div>
		</div><br><br>
		<div class="row fadeInUp wow">
			<div class="col-md-12">
				<a href="<?php echo home_url( '/' )."orcamento"; ?>" class="btn btn-amarelo">quero um orcamento</a>
			</div>
		</div>
	</div>
</section>

<section id="home-mobidata">
	<div class="container">
		<div class="row fadeInUp wow">
			<h1 class="titulo-linha">Aplicativo Mobidata</h1>
			<div class="separador"></div>
		</div>
		<div class="row fadeInUp wow">
			<div class="col-md-8 col-md-offset-2">
				<p>
					<strong>Mobidata é um aplicativo de monitoramento de encomendas em tempo real. <br>
						Com rastreamento geolocalizador, é possível saber onde está a encomenda.</strong>					
				</p><br/><br/>
			</div>
		</div>
		<div class="row">
			<div class="col-md-7 text-left fadeInUp wow">
				<h2 class="">Mobidata</h2>
				<p>
					O aplicativo mostra os pontos exatos de latitude e longitude. Assim, não existe risco de perda ou de entregas em locais errados. <br>
					As encomendas rastreadas com o nosso sistema têm a garantia de uma entrega segura e rápida.	
				</p>					
				<div class="separadorb"></div>
				<ul class="mobi-vantagens">
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Baixa em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Digitalização em tempo real</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Prova incontestável da visita através de foto do domicílio</div></li>
					<li class="clearfix"><img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/checkmark.jpg"; ?>" /><div class="check-desc">Rastreamento do entregador</div></li>
				</ul>
				<h2>Baixe o aplicativo</h2><br>
				<a class="pull-left" style="margin-right:20px;" href="https://play.google.com/store/apps/details?id=br.com.fastcourier" target="_blank"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-playstore.png"; ?>" /></a>
				<a href="#" data-toggle="modal" data-target="#myModala"><img class="e-cinza" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/btn-saiba-mais.png"; ?>" /></a>
			</div>
			<div class="col-md-5 fadeInRight wow" data-wow-delay="0.5s">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/mobi-cel.png"; ?>" />
			</div>
		</div>
	</div>		
</section>
<div class="modal fade" id="myModala" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body text-left">
				<iframe width="560" height="315" src="https://www.youtube.com/embed/WU3pjU0QdjA?rel=0" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>
