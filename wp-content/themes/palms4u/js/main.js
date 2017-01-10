$(document).ready(function(){

	$('#primary-menu li a').data('scroll', 'smooth');

	$.fn.moveIt = function(){
	    var $window = $(window);
	    var instances = [];
	    
	    $(this).each(function(){
	      instances.push(new moveItItem($(this)));
	    });
	    
	    window.onscroll = function(){
	      var scrollTop = $window.scrollTop();
	      instances.forEach(function(inst){
	        inst.update(scrollTop);
	      });
	    }
	  }

	  var moveItItem = function(el){
	    this.el = $(el);
	    this.speed = parseInt(this.el.attr('data-scroll-speed'));
	  };

	  moveItItem.prototype.update = function(scrollTop){
	    var pos = scrollTop / this.speed;
	    this.el.css('transform', 'translateY(' + -pos + 'px)');
	  };

	  $(function(){
	    $('[data-scroll-speed]').moveIt();
	  });

	  var $myCarousel = $('#carousel-example-generic');

	// Initialize carousel
	$myCarousel.carousel();

	  function doAnimations(elems) {
	  var animEndEv = 'webkitAnimationEnd animationend';
	  
	  elems.each(function () {
	    var $this = $(this),
	        $animationType = $this.data('animation');

	    // Add animate.css classes to
	    // the elements to be animated 
	    // Remove animate.css classes
	    // once the animation event has ended
	    $this.addClass($animationType).one(animEndEv, function () {
	      $this.removeClass($animationType);
	    });
	  });
	}

	// Select the elements to be animated
	// in the first slide on page load
	var $firstAnimatingElems = $myCarousel.find('.item:first')
	                           .find('[data-animation ^= "animated"]');

	// Apply the animation using our function
	doAnimations($firstAnimatingElems);

	// Pause the carousel 
	$myCarousel.carousel('pause');

	// Attach our doAnimations() function to the
	// carousel's slide.bs.carousel event 
	$myCarousel.on('slide.bs.carousel', function (e) { 
	  // Select the elements to be animated inside the active slide 
	  var $animatingElems = $(e.relatedTarget)
	                        .find("[data-animation ^= 'animated']");
	  doAnimations($animatingElems);
	});

	$('#form-wrap').waypoint(function() {
	    $('#form-wrap').addClass('fadeInUp');
	}, { offset: '100%'});

	$(function() {
	  	$('a[data-scroll="smooth"]').click(function() {
	    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      		var target = $(this.hash);
	      		target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      		if (target.length) {
	        		$('html, body').animate({
	          		scrollTop: target.offset().top - 32
	        	}, 2000);
	        		return false;
	      		}
	    	}
	  	});
	});

});


$(window).scroll(function (event) {
  	var scroll = $(window).scrollTop();

  	if(scroll > 250){
    	$('.navbar').css('background', 'rgba(255,255,255,0.8');
    	$('img.logo').addClass('min');
  	}
  	if(scroll < 250){
    	$('.navbar').css('background', 'transparent');
    	$('img.logo').removeClass('min');
  	}

});