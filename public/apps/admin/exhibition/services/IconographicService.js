/**
 | Author: Victor Aguilar
 */

/* global define, angular */

(function(factory)
{
	'use strict';

	define(['angular', 'json!/api/iconographic/all'], factory);
})(function(angular, icons)
{
	'use strict';

	angular.module('admin.exhibition.services.IconographicService',[])

	.service('IconographicService', [function()
	{
		this.all = function()
		{
			return icons;
		};

		/**
		 * Regresa una exhibición (en realidad un horario) con valores por 
		 * default.
		 * @return {Object} Un horario.
		 */
		this.default = function()
		{	
			return icons[0];
		};
	}]);
});