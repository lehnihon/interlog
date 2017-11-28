<?php
get_header(); ?>

<?php get_template_part( 'template-parts/breadcrumbs' ); ?>

<section id="sobre">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-left fadeInUp wow">
				<h1>Fale com a Interlog</h1>
				<div class="separadorc"></div>
				<p>Preencha o formulário. Vamos colocá-lo em contato com a pessoa ideal para atender sua necessidade.</p>
			</div>
		</div><br><br>
		<div class="row">
			<div class="col-md-8 text-left">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // End of the loop. ?>
			</div>
			<div class="col-md-3 col-md-offset-1 contato-desc text-left">
				<h2>Matriz Belo Horizonte</h2>
				<p>Rua Major Lage, 370 - Ouro Preto<br>
				Belo Horizonte - MG</p>
				<p class="tel">31 3048-9088</p><br>

				<h2>Interlog São Paulo</h2>
				<p>Rua Dom João V, 170 - Lapa<br>
				São Paulo - SP</p>
				<p class="tel">11 5524-7494</p><br>

				<h2>Interlog Rio de Janeiro</h2>
				<p>Rua da Proclamação, 611 - Bonsucesso<br>
				Rio de Janeiro - RJ</p>
				<p class="tel">21 3976-5653</p><br>

				<h2>Interlog Miami</h2>
				<p>7225. NW 68 Street Unit 12
				Miami - Estados Unidos</p>
				<p class="tel">+1 305-885777</p><br>
			</div>
		</div>
	</div>
</section> 

<?php get_footer(); ?>
