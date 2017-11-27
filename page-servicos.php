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
				<h1>Estrutura</h1>
				<div class="separadorc"></div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 text-left fadeInUp wow">
				<p>Todas as nossas instalações são dotadas de segurança armada, guaritas 
				blindadas, monitoramento nas áreas internas e externas, sensores de 
				presença, alarmes monitorados externamente e interligados com a  polícia 
				militar, cercas elétricas, áreas restritas de documentos bancários e acesso 
				controlado através de senha eletrônica criptografada, garantindo um dos 
				melhores sistemas de segurança de carga do mercado.</p><br><br>
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/cel.jpg"; ?>" /><br><br>
				<h2>Tecnologia da informação</h2>
				<p>Administramos e disponibilizamos com a máxima segurança todas as
				informações das nossas atividades, com rastreabilidade total através 
				dos nossos sistemas de monitoramento via web e mobile.</p>
			</div>
			<div class="col-md-6 fadeInRight wow" data-wow-delay="0.5s">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>" />
				<div class="slider1">			
					<div class="slide">
						<a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>">
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>">
						</a>
					</div>
					<div class="slide">
						<a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>">
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>">
						</a>
					</div>
					<div class="slide">
						<a data-lightbox="prod" href="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>">
							<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/video.jpg"; ?>">
						</a>
					</div>
				</div>
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
<script>
$('.slider1').bxSlider({
    slideWidth: 300,
    minSlides: 2,
    maxSlides: 3,
    slideMargin: 10,
    controls:false,
	onSliderLoad: function(){
	    $(".bx-clone").children().removeAttr("data-lightbox");
	}
});

</script>
