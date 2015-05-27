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

	.service('IconographicService', ['$http', function($http)
	{
		this.all = function()
		{
			return icons;
		};

        var CONFIG_HTTP = {
            /**
             * This way, angular does not serialize our FormData.
             */
            transformRequest: angular.identity,

            /**
             * The browser use multipart/form-data by default.
             * Manually setting multipart/form-data will fail.
             */
            headers: {'Content-Type': undefined}
        };

        var prepareFormData = function(data)
        {
            var fd = new FormData();

            angular.forEach(data, function(value,key)
            {
                fd.append(key,value);
            });

            return fd;
        }

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
            var url = '/admin/api/iconographic/store';
			var formData = prepareFormData(film);

			return $http.post(url, formData, CONFIG_HTTP);
		};

        this.destroy = function(id)
        {
            var url = '/admin/api/iconographic/';

            return $http.delete(url + id);
        };

        this.update = function(icon)
        {
            var url = '/admin/api/iconographic/' + icon.id;
            var formData = prepareFormData(icon);

            /**
             * I have to use POST verb because the server does not see the
             * data when I use PUT verb.
             */
            return $http.post(url, formData, CONFIG_HTTP);
        }
	}]);
});