<div id="sliderPrincipal">
  <video loop autoplay>
    <source src="<?php echo get_template_directory_uri()?>/images/video.mp4" type="video/mp4">
  </video>
  <div class="slider">
    <?php
    $slider = getSliderPrincipal();
    foreach ($slider as $key => $value) {
      ?>
      <div>
        <h3><?php echo $value['title'] ?></h3>
        <p><?php echo $value['description'] ?></p>
      </div>
      <?php
    }
    ?>
  </div>
</div>
