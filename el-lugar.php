<div id="el-lugar">
  <h2>
    <span class="side left-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/lugar-title-side-left.png');"></span>
    el<br /> LUGAR
    <span class="side right-side" style="background-image: url('<?php echo get_template_directory_uri()?>/images/lugar-title-side-right.png');"></span>
  </h2>
  <div class="content-images">
    <?php
    $images = getGalleryPage();
    foreach ($images as $key => $value) {
      ?>
      <div class="image" style="background-image: url('<?php echo $value?>')"></div>
      <?php
    }
    ?>
  </div>
</div>
