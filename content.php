<section>
  <div class="sub-section">
    <h1>Título H1</h1>
    <p>Párrafo con <a href="#">link</a></p>
    <p class="big-text">Párrafo big text</p>
    <p class="small-text">Párrafo small text</p>
  </div>
  <div class="sub-section">
    <h2>Título H2</h2>
  </div>
  <div class="sub-section">
    <h3>Título H3</h3>
  </div>
  <div class="sub-section">
    <h4>Título H4</h4>
  </div>
  <div class="sub-section">
    <h5>Título H5</h5>
  </div>
</section>

<?php
// get eventos page
$eventosPage = getPageEventos();
?>
<div id="pageEventos">
  <h3><?php echo $eventosPage['title']?></h3>
  <p><?php echo $eventosPage['description']?></p>
  <img src="<?php echo $eventosPage['image']?>" alt="<?php echo $eventosPage['title']?>">
</div>


<?php
// get slider bottom
$slidersBottom = getSliderBottom();
?>
<div id="sliderBottom">
  <?php
  foreach ($slidersBottom as $key => $value) {
    ?>
    <div class="item-slider" style="background-image: url('<?php echo $value['image']?>')">
      <img src="<?php echo $value['icon']?>" alt="<?php echo $value['title']?>">
      <h3><?php echo $value['title']?></h3>
      <p><?php echo $value['description']?></p>
    </div>
    <?php
  }
  ?>
</div>

<?php
// get galería pagina "el lugar"
$gallery = getGalleryPage();

foreach ($gallery as $key => $value) {
  ?>
  <img src="<?php echo $value?>" alt="">
  <?php
}
?>

<?php
// print mapa
do_shortcode('[wpgmza id="1"]');
?>
