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

	angular.module('admin.exhibition.services.FilmService',[])

	.service('FilmService', ['$http',function($http)
	{
		this.store = function(film)
		{
			var fd = new FormData();
			var url = '/api/films/store';

			angular.forEach(film, function(value,key)
			{
				fd.append(key,value);
			});

			return $http.post(url, fd, {
				/**
				 * This way, angular does not serialize our FormData.
				 */
				transformRequest: angular.identity,

				/**
				 * The browser use multipart/form-data by default.
				 * Manually setting multipart/form-data will fail.
				 */
				headers: {'Content-Type': undefined}
			});
		};
	}]);
});