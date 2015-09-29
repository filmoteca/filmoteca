/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var factory =  function ($q, $rootScope) {
        return {
            responseError: function (rejection) {

                $rootScope.$broadcast('alert', {
                    msg: rejection.data.message,
                    type: 'danger'
                });

                return $q.reject(rejection);
            }
        };
    };

    factory.$inject = [
        '$q',
        '$rootScope'
    ];

    return factory;
});