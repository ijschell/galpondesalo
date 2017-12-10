<script src="<?php echo get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.min.js'?>" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri() . '/vendor/slick/slick.min.js'?>" charset="utf-8"></script>
<script src="<?php echo get_template_directory_uri() . '/js/script.js'?>" charset="utf-8"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIjBkdIFbF0nRUxyF1Jozz5BZkb9VhiLs&callback=initMap" async defer></script>


<!-- AIzaSyAIjBkdIFbF0nRUxyF1Jozz5BZkb9VhiLs -->
<?php
wp_footer();
?>
<footer>
  <div class="container-fluid">
    <div class="row">
      <div class="column hidden-md hidden-sm hidden-xs">
        <img src="<?php echo get_template_directory_uri()?>/images/image-footer.png" alt="">
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri()?>/images/footer-top-line.png" class="line" alt="">
        <h3>HORARIOS</h3>
        <?php
        $post = get_post(31);
        echo wpautop($post->post_content);
        ?>
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri()?>/images/footer-top-line.png" class="line" alt="">
        <p>Mitre 1530, esquina 9 de Julio<br />
          Bariloche<br />
          Tel. <a href="tel:00542944528073">(0054) 294 452 8073</a><br />
          <a href="mailto:info@elgalpondesalo.com.ar">info@elgalpondesalo.com.ar</a></p>
        <img src="<?php echo get_template_directory_uri()?>/images/footer-top-line.png" class="line" alt="">
        <h4>Modos de pago <img src="<?php echo get_template_directory_uri()?>/images/tarjetas-footer.png" class="tarjetas" alt=""></h4>
      </div>
      <div class="column">
        <img src="<?php echo get_template_directory_uri()?>/images/footer-top-line.png" class="line" alt="">
        <h4>Seguinos!<br />
          <img src="<?php echo get_template_directory_uri()?>/images/footer-icon-facebook.png" alt="">
          /ElGalpondeSalo
        </h4>
      </div>
    </div>
  </div>
</footer>

</body>
</html>
