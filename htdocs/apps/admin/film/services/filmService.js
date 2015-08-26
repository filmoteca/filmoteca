/* globals define */

(function (factory) {

    'use strict';

    define([
            'angular',
            'lodash'
        ],
        factory);

})(function (angular, _) {

    'use strict';

    var service = function ($http, $q, $rootScope, filmTransformer, filmFactory) {

        this.MIN_YEAR = 1890;
        this.MAX_YEAR = (new Date()).getFullYear() + 1;

        var httpSuccessHandler = function (response, successMessage) {

            if (angular.isDefined(successMessage)) {
                $rootScope.$broadcast('alert', {
                    type: 'success',
                    msg: successMessage
                });
            }

            return response.data;
        };

        this.paginate = function (query, page) {

            var config = {
                params: {
                    query: query,
                    page: page
                }
            };

            return $http.get('/admin/api/films', config);
        };

        this.store = function (film) {

            var config = {
                method: 'post',
                url: '/admin/api/films',
                data: _.cloneDeep(film),
                /**
                 * The browser use multipart/form-data by default.
                 * Manually setting multipart/form-data will fail.
                 */
                headers: {'Content-Type': undefined},
                transformRequest: filmTransformer.getRequestTransformers()
            };

            return $http(config)
                .then(function (response) {

                    var successMessage = 'Película guardada.';

                    return httpSuccessHandler(response, successMessage);
                });
        };

        this.destroy = function (id) {

            var config = {
                method: 'delete',
                url: '/admin/api/films/' + id
            };

            return $http(config).then(httpSuccessHandler);
        };

        this.update = function (film) {

            var config = {
                method: 'post',
                url: '/admin/api/films/' + film.id,
                data: film,
                headers: {'Content-Type': undefined},
                transformRequest: filmTransformer.getRequestTransformers().concat(function (form) {
                    // php not accept put method with content-type multipart.
                    form.append('_method', 'put');
                    return form;
                }),
                transformResponse: filmTransformer.getResponseTransformers()
            };

            return $http(config).then(function (response) {

                var successMessage = 'Película actualizada.';

                return httpSuccessHandler(response, successMessage);
            });
        };

        this.load = function (id) {

            var config = {
                method: 'get',
                url: '/admin/api/films/' + id,
                transformResponse: filmTransformer.getResponseTransformers()
            };

            return $http(config).then(function (response) {

                var rawFilm     = httpSuccessHandler(response);
                var film        = filmFactory.make();

                angular.extend(film, rawFilm);

                return film;

            });
        }
    };

    service.$inject = [
        '$http',
        '$q',
        '$rootScope',
        'filmTransformer',
        'filmFactory'
    ];

    return service;
});