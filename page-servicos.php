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

<section id="servicos">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left fadeInUp wow">
				<h1>Serviços</h1>
				<div class="separadorc"></div>
				<p>Somos uma empresa especializada em distribuição e logística, com experiências de sucesso de mais de 30 anos na área. Oferecemos um portfólio completo de  
serviços com segurança, agilidade, tecnologia, rastreabilidade, inteligência e inovação em todo território nacional.</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos1.jpg"; ?>" /><br>
				<h2>Distribuição</h2>
				<p>A Interlog possui uma frota própria de caminhões, 
				veículos utilitários e motos, além de contar com 
				centros de armazenamento, que garantem o correto
				manuseio e entrega aos destinos em perfeitas 
				condições.
				</p>
			</div>
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos2.jpg"; ?>" /><br>
				<h2>Manuseio e montagem de kits</h2>
				<p>Captura de dados dos destinatários, manuseio, 
				envelopamento dos produtos, fechamento, lacre, 
				separação de objetos, embalagem, dobra, encarte, 
				etiquetagem e montagem de kits diversos.
				</p>
			</div>
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos3.jpg"; ?>" /><br>
				<h2>Armazenagem</h2>
				<p>Oferecemos gestão completa da armazenagem, 
				que engloba desde o  recebimento, estocagem,
				movimentação e separação das mercadorias com 
				qualidade, segurança e total cuidado da carga.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos4.jpg"; ?>" /><br>
				<h2>Fulfillment</h2>
				<p>As nossas soluções flexíveis e eficientes ajudam 
				nossos clientes a terem uma garantia total de 
				controle e movimentação dos produtos.
				</p>
			</div>
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos5.jpg"; ?>" /><br>
				<h2>Transporte de cargas</h2>
				<p>Oferecemos os serviços de transporte de cargas e
				encomendas com atendimento dedicado porta a 
				porta em todo o território nacional. Atuamos com 
				atendimento <strong>B2B</strong> e <strong>B2C</strong>.
				</p>
			</div>
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos8.jpg"; ?>" /><br>
				<h2>Tecnologia da informação</h2>
				<p>Administramos e disponibilizamos com a máxima 
				segurança todas as informações das nossas 
				atividades, com rastreabilidade total através dos 
				nossos sistemas de monitoramento via <strong>web</strong> e <strong>mobile</strong>.
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos7.jpg"; ?>" /><br>
				<h2>Digitalização de documentos</h2>
				<p>A digitalização de documentos consiste em 
				transformar o documento físico em digital 
				otimizando custos e controles além do acesso
				à informação de forma mais ágil.
				</p>
			</div>
			<div class="col-md-4 text-center fadeInUp wow">
				<img src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/servicos6.jpg"; ?>" /><br>
				<h2>Serviços customizados</h2>
				<p>Customizamos as soluções dentro das necessidades 
				de cada serviço ou cliente, com total qualidade e 
				segurança.
				</p>
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
