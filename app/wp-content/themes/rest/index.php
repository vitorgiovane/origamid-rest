<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container sobre">
	<h2 class="subtitulo"><?php the_title(); ?></h2>

	<div class="grid-8">
  <?php the_content(); ?>	
<?php endwhile; else: ?>
  <p><?php _e('Nenhum post encontrado!'); ?></p>
<?php endif; ?>	
	</div>
</section>


<?php get_footer(); ?>