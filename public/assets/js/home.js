
$(document).ready(function(){
	$('#billboard').miniBillboard({
		fancybox: {
			type: 'ajax',
			maxWidth: 1024,
			minWidth: 240
		},
		direction: 'y'
	});

	/**
	 * Manipula el carrucel.
	 * Aquí se especifica el color del scroll de los controlles del carrusel.
	 */
	$('#presentation').presentation()
		.find('.controls').niceScroll({cursorcolor:"purple"});

	$('#presentation .controls a').click(function() {
		var $a = $(this).addClass('selected');
		$a.siblings('.selected').removeClass('selected')
		$('#presentation').presentation('goto', [$a.data('index')]);
	});

	$('#datepicker').datepicker({
		dateFormat: 'dd-mm-yy',
		onSelect: function(date){
			$('#billboard').miniBillboard('update',date);
			$(this).find('.ui-state-highlight').removeClass('ui-state-highlight');
			$('#calendar-button').click();
		}
	}).find('.ui-datepicker-today') //No resaltamos la fecha actual	
			.removeClass("ui-datepicker-today ui-datepicker-days-cell-over ui-datepicker-current-day")
			.children('a')
			.removeClass("ui-state-highlight ui-state-active ui-state-hover");
	$('#calendar-button').on('click', function() {
		$('#datepicker').toggle('blind');
	}).click();


	$('#social-networks-tabs').tabs();

	$('#friends-sites-button').on('click', function(){
		$('#friends-sites-pane').toggle('blind');
	});
});