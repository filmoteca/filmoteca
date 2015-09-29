/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var config = function($httpProvider) {

        $httpProvider.interceptors.push('interceptorFactory');
    };

    config.$inject = ['$httpProvider'];

    return config;
});