$(document).ready(function() {
	$(".owl-home").owlCarousel({
          	items: 1, 
          	autoplay: true,
          	nav: true,
          	loop: true,

          });


	$(".owl-nuestro-blog").owlCarousel({
          	items: 3, 
          	autoplay: true,
          	nav: true,

            responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 1
                },
                // breakpoint from 480 up
                480 : {
                    items: 2
                   
                },
                // breakpoint from 768 up
                768 : {
                    items: 3
                    
                }
            }
          });

	$(".owl-single-blog").owlCarousel({
          	items: 2, 
          	autoplay: true,
          	nav: true,

             responsive : {
                // breakpoint from 0 up
                0 : {
                    items: 1
                },
                // breakpoint from 480 up
                480 : {
                    items: 2
                   
                },
                // breakpoint from 768 up
                768 : {
                    items: 2
                    
                }
            }

     });


	//NAV TABS

	$('.nav-tabs .nav-item').click(function(e) {
		e.preventDefault();

		var service = $(this).attr('data-service');

		$('.nav-tabs .nav-item').removeClass('tab_active');
		$(this).addClass('tab_active');


		$('.card.card_services').slideUp();
		$('.card.card_services[id="'+service+'"]').slideDown();
	});

	//Smoothscroll
     $('html').smoothScroll();


    //Menu

    $('.header .nav-link').click(function() {
    	$('.nav-link').removeClass('link_active');
    	$(this).addClass('link_active');
    });

    $('.header .btn_toggle').click(function() {
      $('.header .nav').slideToggle();
    });


    $('.link_dropdown .item_dropdown .div_img').click(function() {
      $('.content_dropdown').slideToggle();
    });

    //TABS

    $('.accordion .card button.btn').click(function() {
        $('.accordion .card button.btn').removeClass('tab_active');
        $(this).addClass('tab_active');
    });


    $(window).on('scroll', function(){
     // aca se pregunta si el scroll se movio de pa bajo.
        if ($(this).scrollTop() > 600) {
          // esta parte cambia el atributo "src" de la etiqueta "img" 
          $('.float-buttons').addClass('show');
          $('.back-to-top').addClass('show_flex');
         
        } else {
          $('.float-buttons').removeClass('show');
          $('.back-to-top').removeClass('show_flex');
        }
  });
});