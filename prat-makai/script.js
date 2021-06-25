$('#productList').on('click', function () {
  $('#productView').attr('class', 'product-list');
});

$('#productGrid').on('click', function () {
  $('#productView').attr('class', 'product-grid');
});

$(document).ready(function(){
  $('.owl-carouseld').owlCarousel({
     margin: 20,
     loop: true,
     items: 3,
     stagePadding: 65
  });
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
     margin: 20,
     loop: true,
     items: 1,
     stagePadding: 70
  });
});