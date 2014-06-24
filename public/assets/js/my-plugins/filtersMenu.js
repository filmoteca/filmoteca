/*
 * Oculta y mustra los submenus de un menu.
 * Dependencies: 
 *	jQuery 1.9.1
 */

(function($) {
	'use strict';

	var methods = {
		init: function(settings) {

			return $(this).each(function() {

				var $this = $(this);
				var self = this;
				var ops = $.extend({}, $.fn.filtersMenu.defaults, settings);

				$this.data('ops', ops);

				$this.on('click', ops.filtersSelector + ' a', function(event) {
					event.preventDefault();

					var clicked = $(this);
					var selecteds = $this.find('.selected');

					/**
					 * Deseleccionamos aquellos elementos que pudieran estar
					 * seleccionados.
					 */
					selecteds.removeClass('selected');

					clicked.toggleClass('selected', !clicked.hasClass('selected'));

					methods.applyFilters.apply(self);

				});
			});
		},
		applyFilters: function() {

			var $this = $(this);
			var ops = $this.data('ops');
			var strFilters = '';
			var $selectedFilters = $this.find('a.selected');
			var $selectedItems = null;
			var result = 0;
			var findedItems = 0;

			$selectedFilters.each(function() {
				strFilters += "." + $(this).data('filter');
			});

			
			if (strFilters !== '' && strFilters !== '.') 
			{
				$selectedItems = $(ops.items + strFilters, ops.containerItems);

				$selectedItems.show();

				findedItems = $selectedItems.length;

				$(ops.items, ops.containerItems).not(strFilters).hide();

			} else {

				findedItems = $(ops.items, ops.containerItems).show().length;
			}
			
			$(this).trigger('filtersApplied',{
				findedItems : findedItems,
				appliedFilters : strFilters
			});

			return this;

		},
		removeFilter: function(filter) {
			return methods.addOrRemoveFilter.apply(this, ['remove', filter]);
		},
		removeAll: function() {
			$(this).find('li.selected').removeClass('selected');
			return methods.applyFilters.apply(this);
		},
		addFilter: function(filter) {
			return methods.addOrRemoveFilter.apply(this, ['add', filter]);
		},
		addOrRemoveFilter: function(action, filter) {
			var a = this.find("a[data-filter='" + filter + "']");
			if (action === 'add') {
				a.addClass('selected');
			} else {
				a.removeClass('selected');
			}

			return methods.applyFilters.apply(this);
		}
	};



	$.fn.filtersMenu = function() {

		var method = arguments[0];

		var params = arguments;

		if (methods[method]) {
			method = methods[method];
			params = Array.prototype.slice.call(arguments, 1);
		} else if (typeof (method) == 'object' || !method) {
			method = methods.init;
		} else {
			$.error('Method ' + method + ' does not exist on jQuery.filtersMenu');
			return this;
		}

		return method.apply(this, params);

	};

	$.fn.filtersMenu.defaults = {
		containerItems: '#items',
		items: 'li.item', // Relativo a containerItems
		filtersSelector: '> ul > li > ul > li', //Selector que elementos serviran de filtros.
	};

})(jQuery);



