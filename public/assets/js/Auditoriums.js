$(document).ready(function() {

	$('#filters-menu').filtersMenu();

	$('#items').find('a').fancybox({
		type: 'ajax',
		maxWidth: 900,
		minWidth: 250
	});
});

