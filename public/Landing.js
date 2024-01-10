$(document).ready(function() {
  var currentIndex = 0;
  var items = $('.firstSection_carouselItems');
  var totalItems = items.length;
  var itemWidth = 247; 
  var gap = 18; 

  $('#rightButton').on('click', function() {
    currentIndex = (currentIndex + 1) % totalItems;
    updateCarousel();
  });

  $('#leftButton').on('click', function() {
    currentIndex = (currentIndex - 1 + totalItems) % totalItems;
    updateCarousel();
  });

  function updateCarousel() {
    var remainingItems = totalItems - currentIndex;
    var newTransformValue = -currentIndex * (itemWidth + gap) + Math.min(remainingItems - 1, 0) * (itemWidth + gap) + 'px';
    $('#firstSection_carousel').css('transform', 'translateX(' + newTransformValue + ')');
  }


  });