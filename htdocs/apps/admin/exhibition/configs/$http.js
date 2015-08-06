/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var config = function($httpProvider) {

        $httpProvider.interceptors.push( function ($q){
            return {
                'responseError' : function (rejection) {

                    if (angular.isDefined(window.console)) {

                        window.console.info('Filmoteca error:', rejection.statusText);
                    }

                    return $q.reject(rejection);
                }
            };
        });
    };

    config.$inject = ['$httpProvider'];

    return config;
});