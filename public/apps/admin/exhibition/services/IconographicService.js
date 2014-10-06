/**
 | Author: Victor Aguilar
 */

/* global define */

(function(factory)
{
	'use strict';

	define(['angular', 'json!/api/iconographic/all'], factory);

})(function(angular, icons)
{
	'use strict';

	angular.module('admin.exhibition.services.IconographicService',[])

	.service('IconographicService', ['$http',function($http)
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

		this.store = function(film)
		{
			var fd = new FormData();
			var url = '/admin/api/iconographic/store';

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