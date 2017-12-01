<div id="contacto">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <h2>
          <span class="side left-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/contacto-title-side-left.png');"></span>
          RESERVAS
          <span class="side right-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/contacto-title-side-right.png');"></span>
        </h2>
        <p>Tomamos reservas para el almuerzo y la cena. Para hacer una reserva, por favor llámenos<br />
          al (0294) 452 8073 ó al 15 4506795 entre las 10 am a 6 pm, de lunes a sábados.</p>

          <!-- form -->
          <?php
          echo do_shortcode('[contact-form-7 id="35" title="Formulario de contacto 1"]');
          ?>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <img src="<?php echo get_template_directory_uri()?>/images/cartel-open.png" class="cartel-open" alt="">
        <h3>HORARIOS</h3>
        <div class="post">
          <?php
          $post = get_post(31);
          echo wpautop($post->post_content);
          ?>
        </div>
        <img src="<?php echo get_template_directory_uri()?>/images/forma.png" class="forma" alt="">
        <h3>Modos de<br />PAGO</h3>
        <p class="pago">Efectivo / debito ó tarjetas</p>
        <img src="<?php echo get_template_directory_uri()?>/images/tarjetas.png" class="tarjetas" alt="">
      </div>
    </div>
  </div>
</div>
