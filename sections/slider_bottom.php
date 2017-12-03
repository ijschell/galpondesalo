<?php
$sliders = getSliderBottom();
?>
<div id="sliderBottom">
  <?php
  foreach ($sliders as $key => $value) {
    ?>
    <div style="background-image: url('<?php echo $value['image']?>')">

      <div class="overlay">

        <div class="center-v">

          <?php
          // tiene icono?
          if($value['icon'] != NULL){
            ?>
            <img class="icon" src="<?php echo $value['icon'];?>" alt="<?php echo $value['title']?>">
            <?php
          }
          ?>

          <!-- titulo -->
          <h3><?php echo $value['title'] ?></h3>

          <!-- descripcion -->
          <div class="content">
            <?php echo $value['description'] ?>
          </div>

        </div>

      </div>

    </div>
    <?php
  }
  ?>
</div>
