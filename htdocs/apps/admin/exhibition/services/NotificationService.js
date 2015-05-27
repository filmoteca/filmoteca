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

	angular.module('admin.exhibition.services.NotificationService',[])

	.service('NotificationService', [ '$rootScope',
		function($rootScope)
	{
		this.notify = function(message, type)
		{
			if(angular.isUndefined(type)) type = 'warning';

			$rootScope.$broadcast('notificationRequested', {
				message : message,
				type : type
			});
		};
	}]);
});