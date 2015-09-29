/**
 | Author: Victor Aguilar
 */

/* global define */

(function (factory) {

	'use strict';

	define(['angular', 'json!/api/iconographic/all'], factory);

})(function (angular, icons) {

	'use strict';

    var service = function ($http) {

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

        var prepareFormData = function (data) {

            var fd = new FormData();

            angular.forEach(data, function(value, key)
            {
                fd.append(key,value);
            });

            return fd;
        };

        this.all = function () {
            return icons;
        };

        this.find = function (id) {

            return _.find(icons, function (icon) {
                return icon.id === id
            });
        };

        this.getDefault = function () {

            return icons[0];
        };

        this.store = function (film) {

            var url = '/admin/api/iconographic/store';
            var formData = prepareFormData(film);

            return $http.post(url, formData, CONFIG_HTTP);
        };

        this.destroy = function(id) {

            var url = '/admin/api/iconographic/';

            return $http.delete(url + id);
        };

        this.update = function (icon) {

            var url = '/admin/api/iconographic/' + icon.id;
            var formData = prepareFormData(icon);

            /**
             * I have to use POST verb because the server does not see the
             * data when I use PUT verb.
             */
            return $http.post(url, formData, CONFIG_HTTP);
        };
    };

	service.$inject = ['$http'];

    return service;
});