/* global jQuery */

(function($){
	'use strict';
	$(document).ready(function(){

		$('#trailermedia').tinymce({
			selector: '#trailermedia',
			height: 500,
			menubar: false,
			plugins: [
				'media code'
			],
			toolbar: 'media code',
			media_live_embeds: true,
			media_poster: false,
			media_alt_source: false,
			content_css: [
				'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
				'//www.tinymce.com/css/codepen.min.css']
		});
		
		$('.input-group.date').datepicker({
			format: 'yyyy-mm-dd',
			language: 'es',
			autoclose: true
		}).children('input').prop('readonly', true);

		/**********************************************
		 * We validate all the form in the admin zone.
		 */
		$('form').parsley();

		/***********************************************
		 * CKEditors
		 */
		$('.ckeditor-basic').ckeditor({
			language: 'es',
			toolbar: [
				{
					name: 'basic',
					items: [ 'Bold', 'Italic', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord', '-', 'Undo', 'Redo' ]
				}
			]
		});

		$('.ckeditor-full').ckeditor({
			language: 'es',
			extraPlugins : 'youtube'
		});

		$('.ckeditor-only-youtube').ckeditor({
			language: 'es',
			extraPlugins : 'youtube',
			toolbar: [{
				name : 'only-youtube',
				items: ['Youtube']
			}]
		});
	});
})(jQuery);
