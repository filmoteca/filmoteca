$(document).ready(function(){

	$('.visit-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1
	});

	$('.main-carousel').slick();

	$('.programming .carrousel-widget').slick({
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1
	});

	$('#friend-sites-toggle-button').click(function(){

		$(this).siblings('div').slideToggle('slow')
		.toggleClass(function(){
			if($(this).hasClass('in')){
				return 'out';
			}else{
				return 'in';
			}
		});
	});
});