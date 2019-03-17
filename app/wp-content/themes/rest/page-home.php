<?php // Template Name: Menu da semana ?>

<?php get_header(); ?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>

<section class="container">
	<h2 class="subtitulo"><?php the_title(); ?></h2>
	
	<?php for($i=1; $i<=2; $i++){?>
	<div class="menu-prato grid-8">
		<h2><?php the_field("titulo_bloco${i}"); ?></h2>
		<ul>
			<?php for($j=1; $j<=3; $j++){
				$prato = get_field("prato_${i}.${j}");
			?>
			<li>
				<span>
					<sup>R$</sup><?=$prato["prato_${i}.${j}_preco"]?>
				</span>
				<div>
					<h3><?=$prato["prato_${i}.${j}_nome"]?></h3>
					<p><?=$prato["prato_${i}.${j}_descricao"]?></p>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
	

</section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>