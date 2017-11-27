<!DOCTYPE html>
<html>
  <head>
    <?php
    wp_head();
    ?>
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon.ico'?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/fonts/fonts.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/fonts/dashicons.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/vendor/slick/slick.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/vendor/jquery/jquery-3.2.1.min.js'?>" charset="utf-8"></script>
    <title><?php echo get_bloginfo()?></title>
  </head>
  <body>
    <header>
      <h1>El Galpón de Salo</h1>
      <?php
      // wp_nav_menu('Principal');
      ?>
    </header>
