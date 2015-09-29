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

    var factory = function ($http) {

        var Transformer = function () {
        };


        Transformer.prototype.getResponseTransformers = function () {

            return this.appendTransform($http.defaults.transformResponse, function (film) {

                film.years = _.map(film.years, function(year) {
                    return { text: year }
                });

                return film;
            });
        };

        Transformer.prototype.getRequestTransformers = function () {

            return [function (film) {

                film.countries   = _.pluck(film.countries, 'id');
                film.years       = _.pluck(film.years, 'text');

                var formData = new FormData();

                angular.forEach(film, function (value, key) {

                    if (angular.isArray(value)) {
                        angular.forEach(value, function (entry) {
                            formData.append(key +'[]', entry);
                        });

                        return;
                    }

                    if (!angular.isObject(value)) {
                        formData.append(key,value);

                        return;
                    }

                    var isFile = angular.isDefined(value.name) &&
                        angular.isDefined(value.type) &&
                        angular.isDefined(value.size);

                    if (!isFile) {
                        return;
                    }

                    formData.append(key,value);
                });

                return formData;
            }];
        };

        Transformer.prototype.appendTransform = function (defaults, transform) {

            // We can't guarantee that the default transformation is an array
            defaults = angular.isArray(defaults) ? defaults : [defaults];

            // Append the new transformation to the defaults
            return defaults.concat(transform);
        };

        Transformer.prototype.prependTransform = function (defaults, transform) {

            defaults = angular.isArray(defaults) ? defaults : [defaults];

            return [transform].concat(defaults);
        };

        return new Transformer();
    };

    factory.$inject = [
        '$http'
    ];

    return factory;
});