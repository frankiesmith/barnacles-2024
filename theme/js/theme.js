jQuery(document).ready(function($) {

    //Parallax

		$window = $(window);
		
	    $('*[data-type="parallax"]').each(function(){

        var $bgobj = $(this);

        $(window).scroll(function() {

            var yPos = -($window.scrollTop() / $bgobj.data('speed'));

    var coords = '50% '+ yPos + 'px';

            $bgobj.css({ backgroundPosition: coords });

        });
    });

//Mobile Menu

$( ".menu_toggle" ).click(function() {
  $( ".main-navigation" ).toggleClass( "show" );
});

$( ".menu-item-has-children > a").after().click(function() {
  $( ".sub-menu" ).toggleClass( "show" );
});

$( ".menu-item-has-children > a").after().click(function() {
  $( ".menu-item-has-children > a" ).toggleClass( "up" );
});

$('.menu li').each(function(){
    if($(this).hasClass('current-menu-parent')) {
        $(this).children('.sub-menu').addClass("show");
    }
});

$('.sub-menu').each(function(){
    if($(this).hasClass('show')) {
        $(this).siblings('.menu-item-has-children > a').addClass("up");
    }
});


function toggleTopBar() {
  if ($(this).scrollTop() > 550) {
    $(".main-header.fixed").fadeIn();
  } else {
   $(".main-header.fixed").fadeOut();
  }
}

$(window).scroll( toggleTopBar );

$(toggleTopBar);

//Smooth Scroll

$.fn.autoscroll = function(selector) {
        $('html, body').animate({
            scrollTop: jQuery(this).offset().top -120
        }, 900);
    }

    $('.scroll-down').on('click', function() {
        $('#rfi').autoscroll();
    });


//Accordion

$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
  }

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.accordion-content').not($next).slideUp().parent().removeClass('open');
    };
  } 

  var accordion = new Accordion($('.accordion-section'), false);
});


$(".content a[href^='#']").on('click', function(e) {
   // prevent default anchor click behavior
   e.preventDefault();

   // animate
   $('html, body').animate({
       scrollTop: $(this.hash).offset().top -120
     }, 900, function(){
     });
});


});


