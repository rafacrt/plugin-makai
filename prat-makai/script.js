$('#productList').on('click', function () {
  $('#productView').attr('class', 'product-list');
});

$('#productGrid').on('click', function () {
  $('#productView').attr('class', 'product-grid');
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
     margin: 10,
     loop: true,
     items: 2,
     stagePadding: 50
  });
});