$(document).ready(function(){

  // init principal slider
  $('#sliderPrincipal .slider').slick({
    autoplay : true,
    nextArrow : '<span class="dashicons dashicons-arrow-right-alt2"></span>',
    prevArrow : '<span class="dashicons dashicons-arrow-left-alt2"></span>'
  });

  // initi bottom slider
  $('#sliderBottom').slick({
    autoplay : true,
    arrows : false,
    dots : true,
    fade : true
  });

});

$('a[href^="#"]').on('click',function (e) {
    e.preventDefault();

    var target = this.hash;
    var $target = $(target);

    $('html, body').stop().animate({
        'scrollTop': $target.offset().top
    }, 900, 'swing', function () {
        window.location.hash = target;
    });
});

function initMap() {
  // Create the map with no initial style specified.
  // It therefore has default styling.
  map = new google.maps.Map(document.getElementById('map'), {
    center: {lat: -41.1357258, lng: -71.2884812},
    zoom: 17,
    mapTypeControl: false
  });

  // infor window
  var info = '<div><b>El Galpón de Salo</b><br /> Mitre 1530, esquina 9 de Julio<br />Tel. (0054) 294 452 8073<br />Mail: info@elgalpondesalo.com.ar</div>';
  var infowindow = new google.maps.InfoWindow({
    content: info
  });
  // add style
  map.setOptions({styles : styles});

  var marker = new google.maps.Marker({
    position: {lat: -41.1357258, lng: -71.2884812},
    map: map,
    title: 'El Galpón de Salo'
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });

}

var styles = [
          {
            elementType: 'geometry',
            stylers: [{color: '#f5f5f5'}]
          },
          {
            elementType: 'labels.icon',
            stylers: [{visibility: 'off'}]
          },
          {
            elementType: 'labels.text.fill',
            stylers: [{color: '#616161'}]
          },
          {
            elementType: 'labels.text.stroke',
            stylers: [{color: '#f5f5f5'}]
          },
          {
            featureType: 'administrative.land_parcel',
            elementType: 'labels.text.fill',
            stylers: [{color: '#bdbdbd'}]
          },
          {
            featureType: 'poi',
            elementType: 'geometry',
            stylers: [{color: '#eeeeee'}]
          },
          {
            featureType: 'poi',
            elementType: 'labels.text.fill',
            stylers: [{color: '#757575'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'geometry',
            stylers: [{color: '#e5e5e5'}]
          },
          {
            featureType: 'poi.park',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9e9e9e'}]
          },
          {
            featureType: 'road',
            elementType: 'geometry',
            stylers: [{color: '#ffffff'}]
          },
          {
            featureType: 'road.arterial',
            elementType: 'labels.text.fill',
            stylers: [{color: '#757575'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'geometry',
            stylers: [{color: '#dadada'}]
          },
          {
            featureType: 'road.highway',
            elementType: 'labels.text.fill',
            stylers: [{color: '#616161'}]
          },
          {
            featureType: 'road.local',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9e9e9e'}]
          },
          {
            featureType: 'transit.line',
            elementType: 'geometry',
            stylers: [{color: '#e5e5e5'}]
          },
          {
            featureType: 'transit.station',
            elementType: 'geometry',
            stylers: [{color: '#eeeeee'}]
          },
          {
            featureType: 'water',
            elementType: 'geometry',
            stylers: [{color: '#c9c9c9'}]
          },
          {
            featureType: 'water',
            elementType: 'labels.text.fill',
            stylers: [{color: '#9e9e9e'}]
          }
        ];

$(document).on('click','header .main-nav-mobile .close',function(e){
  e.preventDefault();
  $('.main-nav-mobile').addClass('close');
  $('body').css('overflow-y', 'auto');
})

$(document).on('click','header .burguer-menu',function(e){
  e.preventDefault();
  $('.main-nav-mobile').removeClass('close');
  $('body').css('overflow-y', 'hidden');
})

$(document).on('click','header .main-nav-mobile .menu-principal-container .menu li a',function(e){
  // e.preventDefault();
  $('.main-nav-mobile').addClass('close');
  $('body').css('overflow-y', 'auto');
})
