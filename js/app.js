$(document).ready(function() {
	$(".owl-home").owlCarousel({
          	items: 1, 
          	autoplay: true,
          	nav: true,
          	loop: true,

          });


	$(".owl-nuestro-blog").owlCarousel({
          	items: 1, 
          	autoplay: true,
          	nav: true,
          	loop: true,

          });

	//NAV TABS

	$('.nav-tabs .nav-item').click(function(e) {
		e.preventDefault();

		var service = $(this).attr('data-service');

		$('.nav-tabs .nav-item').removeClass('tab_active');
		$(this).addClass('tab_active');


		$('.card.card_services').slideUp();
		$('.card.card_services[id="'+service+'"]').slideDown();
	})
});