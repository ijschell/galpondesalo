<?php
//bootstrap
// include_once(get_template_directory() . '/backend/functions/config.php');

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

// get el menu pages
function getMenues(){
  $menues = array();

  $args = array(
    'orderby'          => 'date',
    // 'order'            => 'DESC',
    // 'orderby'          => 'menu_order',
    'post_type'        => 'menus',
    'post_status'      => 'publish',
    'posts_per_page'   => -1
  );

  $result = get_posts($args);

  foreach ($result as $key => $value) {

    $title = $value->post_title;
    $description = wpautop($value->post_content);

    array_push($menues, ['title' => $title, 'description' => $description]);

  }
  
  return $menues;
}

//get Eventos page
function getPageEventos(){

  $data = get_post(22);
  $title = $data->post_title;
  $description = wpautop($data->post_content);
  $image = get_the_post_thumbnail_url($data->ID, 'large');

  $result = array(
    'title' => $title,
    'description' => $description,
    'image' => $image
  );

  return $result;

}

//get slider bottom
function getSliderBottom(){

  $sliders = array();

  $args = array(
  	'orderby'          => 'date',
  	'order'            => 'DESC',
  	'post_type'        => 'slider_bottom',
  	'post_status'      => 'publish'
  );

  $result = get_posts($args);

  foreach ($result as $key => $value) {

    $title = $value->post_title;
    $description = wpautop($value->post_content);
    $image = get_the_post_thumbnail_url($value->ID, 'large');
    $icon = get_field('icono', $value->ID)['url'];

    array_push($sliders, ['title' => $title, 'description' => $description, 'image' => $image, 'icon' => $icon]);

  }

  return $sliders;

}

// get gallery page
function getGalleryPage(){

  $galleryImages = array();
  $data = get_post(38);
  $gallery = get_field('galeria', $data->ID);
  $images = array_map('intval', explode(",", $gallery));

  foreach ($images as $key => $value) {
    array_push($galleryImages, wp_get_attachment_image_src($value)[0]);
  }

  return $galleryImages;

}

// get slider principal
function getSliderPrincipal(){

  $sliders = array();

  $args = array(
    'orderby'          => 'date',
    'order'            => 'DESC',
    'post_type'        => 'slider_principal',
    'post_status'      => 'publish'
  );

  $result = get_posts($args);

  foreach ($result as $key => $value) {

    $title = $value->post_title;
    $description = wpautop($value->post_content);

    array_push($sliders, ['title' => $title, 'description' => $description]);

  }

  return $sliders;

}
?>
