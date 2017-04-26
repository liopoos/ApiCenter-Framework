;(function () {
	
	'use strict';



	// iPad and iPod detection	
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("<i></i>Phone") != -1) || 
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	
	

	// Click outside of offcanvass
	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#manga-offcanvas, .js-manga-close-offcanvas");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('#manga-offcanvas').hasClass('animated fadeInLeft') ) {

    			$('#manga-offcanvas').addClass('animated fadeOutLeft');
				setTimeout(function(){
					$('#manga-offcanvas').css('display', 'none');	
					$('#manga-offcanvas').removeClass('animated fadeOutLeft fadeInLeft');
				}, 1000);
				$('.js-manga-nav-toggle').removeClass('active');
				
	    	}
	    
	    	
	    }
		});

		$('body').on('click', '.js-manga-close-offcanvas', function(event){
		

	  		$('#manga-offcanvas').addClass('animated fadeOutLeft');
			setTimeout(function(){
				$('#manga-offcanvas').css('display', 'none');	
				$('#manga-offcanvas').removeClass('animated fadeOutLeft fadeInLeft');
			}, 1000);
			$('.js-manga-nav-toggle').removeClass('active');

	    	event.preventDefault();

		});

	};

	

	

	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-manga-nav-toggle', function(event){

			var $this = $(this);

			$('#manga-offcanvas').css('display', 'block');
			setTimeout(function(){
				$('#manga-offcanvas').addClass('animated fadeInLeft');
			}, 100);
			
			// $('body').toggleClass('manga-overflow offcanvas-visible');
			$this.toggleClass('active');
			event.preventDefault();

		});

	};

	var scrolledWindow = function() {

		$(window).scroll(function(){

			var header = $('#manga-header'),
				scrlTop = $(this).scrollTop();


		   $('#manga-home .flexslider .manga-overlay').css({
				'opacity' : (.5)+(scrlTop/2000)
		   });

		   if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-manga-nav-toggle').removeClass('active');
		   }
		 
		});

		$(window).resize(function() {
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-manga-nav-toggle').removeClass('active');
		   }
		});
		
	};


	

	// Page Nav
	var clickMenu = function() {
		var topVal = ( $(window).width() < 769 ) ? 0 : 58;

		$(window).resize(function(){
			topVal = ( $(window).width() < 769 ) ? 0 : 58;		
		});

		if ( $(this).attr('href') != "#") {
			$('#manga-main-nav a:not([class="external"]), #manga-offcanvas a:not([class="external"])').click(function(event){
				var section = $(this).data('nav-section');


				if ( $('div[data-section="' + section + '"]').length ) {

					$('html, body').animate({
			        	scrollTop: $('div[data-section="' + section + '"]').offset().top - topVal
			    	}, 500);	
			    	
			   }
			   event.preventDefault();

			});
		}

		


	};


	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){
					
					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							el.addClass('fadeInUp animated');
							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '85%' } );


	};


	// Document on load.
	$(function(){

		mobileMenuOutsideClick();
		burgerMenu();
		scrolledWindow();
		
		// Animations
		contentWayPoint();
		
		

	});


}());