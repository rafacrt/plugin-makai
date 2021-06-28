$('#productList').on('click', function () {
  $('#productView').attr('class', 'product-list');
});

$('#productGrid').on('click', function () {
  $('#productView').attr('class', 'product-grid');
});

$(document).ready(function(){
  $('.owl-carouseld').owlCarousel({
     margin: 5,
     loop: true,
     items: 3,
     stagePadding: 60
  });
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
     margin: 2,
     loop: true,
     items: 1,
     stagePadding: 0
  });
});