<?php // Template Name: Sobre ?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container sobre">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-8">
		<img src="<?php the_field('foto_restaurante'); ?>" alt="<?php the_field('descricao_foto_restaurante'); ?>">
	</div>

	<div class="grid-8">
		<h2><?php the_field('titulo_da_historia'); ?></h2>
		<?php the_field('texto_da_historia'); ?>

		<?php the_content(); ?>
	</div>
</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>