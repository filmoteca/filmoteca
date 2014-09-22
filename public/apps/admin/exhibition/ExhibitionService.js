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

	angular.module('ExhibitionService',[])

	.service('ExhibitionService', [function()
	{
		this.make = function()
		{
			return {
				exhibition_film : {
					film : {}
				},
				schedules : [
					//{ 
					//	auditorium: Object ,
					//	entry : '9999-99-99 99:99:99' 
					//}
				], 
				exhibition_types : []
			};
		};
	}]);
});