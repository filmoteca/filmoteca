/* global jQuery */

(function($){
	'use strict';
	$(document).ready(function(){

		$('.input-group.date').datepicker({
			format: 'yyyy-mm-dd',
			language: 'es',
			autoclose: true
		}).children('input').prop('readonly', true);
	});
})(jQuery);