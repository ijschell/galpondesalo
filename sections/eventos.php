<?php
$eventos = getPageEventos();
?>
<div id="eventos">
  <div class="left-side">
    <div class="centere-v">
      <h2><?php echo $eventos['title']?></h2>
      <div class="content">
        <?php echo $eventos['description']?>
      </div>
    </div>
  </div>
  <div class="right-side" style="background-image: url('<?php echo $eventos['image']?>')">

  </div>


</div>
