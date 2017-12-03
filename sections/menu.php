<div id="elMenu">

  <?php

  $menues = getMenues();

  $platoDelDia = array();

  $menuArray = array();

  $menuLeft = array();

  // guardo posts en arrays
  foreach ($menues as $key => $value) {

    if($value['title'] == 'Plato del día'){

      array_push($platoDelDia, ['title' => $value['title'], 'description' => $value['description']]);

    }elseif ($value['title'] == 'Guarnición' || $value['title'] == 'Parrilla') {
      # code...
      array_push($menuLeft, ['title' => $value['title'], 'description' => $value['description']]);

    }else {

      array_push($menuArray, ['title' => $value['title'], 'description' => $value['description']]);

    }

  }

  ?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2>
          <span class="side left-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/menu-title-side-left.png');"></span>
          el<br /> MENÚ
          <span class="side right-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/menu-title-side-right.png');"></span>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <!-- plato de dia here -->
        <?php
        foreach ($platoDelDia as $key => $value) {

          ?>
          <div class="plato-dia-icon"></div>
          <div class="plato-dia-content">
            <div class="border-top"></div>
            <div class="border-bottom"></div>
            <div class="border-left"></div>
            <div class="border-right"></div>
            <h3>
              <span class="side left-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/plato_del_dia_title_side_left.png');"></span>
              <?php echo $value['title'] ?>
              <span class="side right-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/plato_del_dia_title_side_right.png');"></span>
            </h3>
            <div class="plato-dia-description">
              <?php
              echo $value['description'];
              ?>
            </div>
          </div>
          <?php

        }

        // menu left
        foreach ($menuLeft as $key => $value) {

          $class = '';

          switch ($key) {
            case 0:
              $class = 'style_1';
              break;
            case 1:
              $class = 'style_2';
              break;
            case 2:
              $class = 'style_3';
              break;
          }

          ?>
          <div class="card-menu">
            <h3 class="<?php echo $class ?>"><span><?php echo $value['title'] ?></span></h3>
            <div class="content-menu">
              <?php echo $value['description'] ?>
            </div>
          </div>
          <?php

        }

        ?>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12" style="padding-top: 40px;">
        <!-- print parte de menu here -->
        <?php
        foreach ($menuArray as $key => $value) {

          $class = '';

          switch ($key) {
            case 0:
              $class = 'style_1';
              break;
            case 1:
              $class = 'style_2';
              break;
            case 2:
              $class = 'style_3';
              break;
          }

          ?>
          <div class="card-menu">
            <h3 class="<?php echo $class ?>"><span><?php echo $value['title'] ?></span></h3>
            <div class="content-menu">
              <?php echo $value['description'] ?>
            </div>
          </div>
          <?php
        }
        ?>
      </div>
    </div>
  </div>
</div>
