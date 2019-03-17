<?php // Template Name: Contato ?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container contato">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-16">
		<a href="<?php the_field('link_do_mapa') ?>" target="_blank"><img src="<?php the_field('imagem_do_mapa') ?>" alt="Localização do Rest"></a>
	</div>

	<div class="grid-1-3 contato-item">
		<h2><?php the_field('titulo_contato'); ?></h2>
		<p><?php the_field('telefone', 14) ?></p>
		<p><?php the_field('email'); ?></p>
		<p><?php the_field('facebook'); ?></p>
	</div>
	<div class="grid-1-3 contato-item">
		<h2><?php the_field('titulo_horarios'); ?></h2>
		<p><?php the_field('horario1'); ?></p>
		<p><?php the_field('horario2'); ?></p>
		<p><?php the_field('horario3'); ?></p>
	</div>
	<div class="grid-1-3 contato-item">
		<h2><?php the_field('titulo_endereco'); ?></h2>
		<p><?php the_field('rua') ?>, <?php the_field('numero') ?> </p>
		<p><?php the_field('bairro') ?> - <?php the_field('cidade') ?> </p>
		<p><?php the_field('estado') ?> - <?php the_field('pais') ?> </p>
	</div>
</section>


<!-- 
<div class="grid-1-3 contato-item">
		<h2><?php the_field('horarios'); ?></h2>
		<p>Segunda à Sexta: 10 às 23</p>
		<p>Sábado: 14 às 23</p>
		<p>Domingo: 14 às 22</p>
	</div>
	<div class="grid-1-3 contato-item">
		<h2>Endereço</h2>
		<p>Rua Marechal, 29</p>
		<p>Copacabana - Rio de Janeiro</p>
		<p>Brasil - Terra - Via Láctea</p>
	</div> -->

<?php endwhile; else: endif; ?>
<?php get_footer(); ?>