$(document).ready(function(){

	$('.visit-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1
	});

	$('.main-carousel').slick();

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
		
	// $('#billboard').miniBillboard({
	// 	fancybox: {
	// 		type: 'ajax',
	// 		maxWidth: 1024,
	// 		minWidth: 240
	// 	},
	// 	direction: 'y'
	// });
});