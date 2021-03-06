jQuery( document ).ready(function( $ ) {
  // Inside of this function, $() will work as an alias for jQuery()
  // and other libraries also using $ will not be accessible under this shortcut
  // https://codex.wordpress.org/Function_Reference/wp_enqueue_script#jQuery_noConflict_Wrappers

  // Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
	if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	}

  // Browser detection via Bowser (https://github.com/lancedikson/bowser) - add detection as needed
  if( bowser.msie && bower.version === 11 ) {
    $('body').addClass('ie-11');
  } else if ( bowser.safari ) {
    $('body').addClass('safari');
  }

  // Nifty Nav
  $('#nifty-nav-toggle').niftyNav();

  // Slick Slider
  // Testimonial Slider
  if( $('.home-hero').length > 0 ) {
    $('.home-slider').slick({
      autoplay: true,
      autoplaySpeed: 6000,
      slidesToShow: 1,
      adaptiveHeight: true,
      dots: false,
      responsive: [
        {
          breakpoint: 767,
          settings: {
            arrows: false,
          },
        },
      ],
    });
  }

  // Form Buttons
  $('input[type=submit]').addClass('button button--dark');


  // Shop page
  $('.store-page .col').first().addClass('store-col');

  $('#signs').hide();
  $('#photography').hide();

  $('#Calligraphy').click(function(){
    $('#signs').hide();
    $('.store-page .col:nth-child(2)').removeClass('store-col');
    $('#photography').hide();
    $('.store-page .col:nth-child(3)').removeClass('store-col');
    $('#calligraphy').show();
    $('.store-page .col').first().addClass('store-col');

		// Anchor scrolling
		var t= $(this.hash);
    var t=t.length&&t||$('[name='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset=t.offset().top;
        $('html,body').animate({scrollTop:tOffset-20},'slow');
        e.preventDefault();
    }
  })

  $('#Signs').click(function(){
    $('#signs').show();
    $('.store-page .col:nth-child(2)').addClass('store-col');
    $('#photography').hide();
    $('.store-page .col:nth-child(3)').removeClass('store-col');
    $('#calligraphy').hide();
    $('.store-page .col').first().removeClass('store-col');

		// Anchor scrolling
		var t= $(this.hash);
    var t=t.length&&t||$('[name='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset=t.offset().top;
        $('html,body').animate({scrollTop:tOffset-20},'slow');
        e.preventDefault();
    }
  })

  $('#Photography').click(function(){
    $('#signs').hide();
    $('.store-page .col:nth-child(2)').removeClass('store-col');
    $('#photography').show();
    $('.store-page .col:nth-child(3)').addClass('store-col');
    $('#calligraphy').hide();
    $('.store-page .col').first().removeClass('store-col');

		// Anchor scrolling
		var t= $(this.hash);
    var t=t.length&&t||$('[name='+this.hash.slice(1)+']');
    if(t.length){
        var tOffset=t.offset().top;
        $('html,body').animate({scrollTop:tOffset-20},'slow');
        e.preventDefault();
    }
  })

});
