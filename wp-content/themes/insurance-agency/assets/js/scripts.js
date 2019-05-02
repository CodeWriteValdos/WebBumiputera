(function($) {

    //media queries and changing navigation
  $(function (){
    $smallscreen();
    $(window).resize(function () {
    $smallscreen()
    });
  });
  $smallscreen = function (){
    "use strict";
      var menu = $('.menuswitch-js');
      var menu1 = $('.top1');
      var y = $(this).scrollTop();
      var z = $('.menuswitch-point').offset().top;
      if ( $(window).width() >= 992 ) { 
        //change class for scrolling changing navigation
          $(window).scroll(function() {
          var menu = $('.menuswitch-js');
          var menu1 = $('.top1');
          var y = $(this).scrollTop();
          var z = $('.menuswitch-point').offset().top;
          if (y > z) {
            menu.removeClass('navbar-height1').addClass('navbar-height2') &&
            menu1.addClass('top-disappear');
          } else  {
            menu.removeClass('navbar-height2').addClass('navbar-height1') &&
            menu1.removeClass('top-disappear');
          }
        });
      } 		
      else if( $(window).width() < 991 ){
         menu.removeClass('navbar-height2').addClass('navbar-height1');
    }
  } 

$( document ).ready( function() {
  
  // navigation toggle icon
  $('#toggle-icon').click(function(){
		$(this).toggleClass('open');
	});
  
  // init Isotope
  "use strict";	
  var $container = $('#isotopecontainer').isotope({
    itemSelector: '.element-isotope',
    layoutMode: 'masonry',
    getSortData: {
      name: '.name',
      symbol: '.symbol',
      number: '.number parseInt',
      category: '[data-category]',
      weight: function( itemElem ) {
        var weight = $( itemElem ).find('.weight').text();
        return parseFloat( weight.replace( /[\(\)]/g, '') );
      }
    }
  });
  $container.imagesLoaded( function() {
    $container.isotope('layout');
  });
  // filter functions
  var filterFns = {
    // show if number is greater than 50
    numberGreaterThan50: function() {
      var number = $(this).find('.number').text();
      return parseInt( number, 10 ) > 50;
    },
    // show if name ends with -ium
    ium: function() {
      var name = $(this).find('.name').text();
      return name.match( /ium$/ );
    }
  };
  // bind filter button click
  $('#filters').on( 'click', 'button', function() {
    var filterValue = $( this ).attr('data-filter');
    // use filterFn if matches value
    filterValue = filterFns[ filterValue ] || filterValue;
    $container.isotope({ filter: filterValue });
  }); 
  // change is-checked class on buttons
  $('.button-group').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'button', function() {
      $buttonGroup.find('.is-checked').removeClass('is-checked');
      $( this ).addClass('is-checked');
    });
  }); 
});
// init Isotope end
  
  //counter
  $('.timerwrapper').waypoint(function(){
    $('.timer').countTo();     
  },{offset: 420, triggerOnce: true});

  
  //menu
  "use strict";
  var menu = $('.navbar');
  $('.navbar a[href^="#"]').on('click', function(e) {
  e.preventDefault();
  var target = this.hash,
  $target = $(target);
  $('html, body').stop().animate({
    'scrollTop': $target.offset().top
  }, 500, 'swing', function() {
    window.location.hash = target;
  });
  });
  
  
  // masonry for blog page template 2 columns
  $('.masonry-grid1').masonry({
    itemSelector: '.masonry-grid-item'
  });
  
    // masonry for blog page template 3 columns
  $('.masonry-grid2').masonry({
    itemSelector: '.masonry-grid-item'
  });

})(jQuery);
  
  //scroll to top function
  function scrollToTop($) {
  jQuery('html, body').animate({
      scrollTop: 0
  }, 'slow');
}