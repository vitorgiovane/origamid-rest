<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title>Rest</title>

  <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
</head>

<body>
  
  <header>
    <nav>
      <ul>
        <li class="current_page_item"><a href="/">Menu</a></li>
        <li><a href="<?php get_site_url(); ?>/sobre">Sobre</a></li>
        <li><a href="<?php get_site_url(); ?>/contato">Contato</a></li>
      </ul>
    </nav>

    <h1><img src="<?= get_template_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

    <p><?php the_field('rua', 14) ?>, <?php the_field('numero', 14) ?> - <?php the_field('bairro', 14) ?> - <?php the_field('estado', 14) ?></p>
    <p class="telefone"><?php the_field('telefone', 14) ?></p>
    <?php wp_head(); ?>
  </header>