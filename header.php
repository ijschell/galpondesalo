<!DOCTYPE html>
<html>
  <head>
    <?php
    wp_head();
    ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon.ico'?>" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/fonts/fonts.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/fonts/dashicons.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/vendor/slick/slick.css'?>">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/style.css'?>">
    <script src="<?php echo get_template_directory_uri() . '/vendor/jquery/jquery-3.2.1.min.js'?>" charset="utf-8"></script>
    <title><?php echo get_bloginfo()?></title>
  </head>
  <body id="inicio">
    <header>
      <div class="container-fluid">
        <div class="row">
          <h1>El Galpón de Salo</h1>
          <div class="hidden-sm hidden-xs">
            <?php
            getMenuPrincipal();
            ?>
          </div>
          <div class="hidden-lg hidden-md main-nav-mobile close">
            <?php
            getMenuPrincipal();
            ?>
            <a href="#" class="dashicons dashicons-no-alt close"></a>
          </div>
          <a href="#" class="hidden-lg hidden-md burguer-menu dashicons dashicons-menu"></a>
        </div>
      </div>
    </header>
