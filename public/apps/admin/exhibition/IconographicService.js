/**
 | Author: Victor Aguilar
 |
 | RESUMEN:
 |
 */

/* global define, agular */

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

	angular.module('IconographicService',[])

	.service('IconographicService', [function()
	{
		
	}])
});