/**
 | Author: Victor Aguilar
 |
 | RESUMEN:
 |
 */

/* global define, angular */

(function(factory)
{
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		define(['angular'], factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	angular.module('admin.exhibition.services.IconographicService',[])

	.service('IconographicService', [function()
	{
		var icons = null;

		this.all = function()
		{
			icons = [
			{
				id : 1,
				name : 'Funcion especial',
				icon : '/assets/imgs/no-photo.jpg'
			},
			{
				id : 2,
				name : 'F extra',
				icon : '/assets/imgs/no-photo.jpg'
			},
			{
				id : 3,
				name : 'R20',
				icon : '/assets/imgs/no-photo.jpg'
			}
			];

			return icons;
		};

		/**
		 * Regresa una exhibición (en realidad un horario) con valores por 
		 * default.
		 * @return {Object} Un horario.
		 */
		this.default = function()
		{
			if( icons === null )
			{
				this.all();
			}
			
			return icons[0];
		};
	}]);
});