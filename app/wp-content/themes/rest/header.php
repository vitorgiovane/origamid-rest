<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <title><?php bloginfo('name') ?> <?php wp_title() ?> <?php the_field('title_seo') ?></title>
  <meta name="description" content="<?php bloginfo('name'); wp_title(); the_field('description_seo'); ?> ">

  <link href='https://fonts.googleapis.com/css?family=Alegreya+SC' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?= get_stylesheet_uri(); ?>">
</head>

<body>
  
  <header>
    <nav>
      <?php
        $args = array('menu' => 'principal', 'container' => false);
        wp_nav_menu($args);
      ?>
    </nav>

    <h1><img src="<?= get_template_directory_uri(); ?>/img/rest.png" alt="Rest"></h1>

    <p><?php the_field('rua', 14) ?>, <?php the_field('numero', 14) ?> - <?php the_field('bairro', 14) ?> - <?php the_field('estado', 14) ?></p>
    <p class="telefone"><?php the_field('telefone', 14) ?></p>
    <?php wp_head(); ?>
  </header>