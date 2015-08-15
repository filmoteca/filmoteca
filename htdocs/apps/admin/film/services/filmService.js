/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var service = function ($http) {

        this.paginate = function (query, page) {

            var config = {
                params: {
                    query: query,
                    page: page
                }
            };

            return $http.get('/admin/api/films', config);
        };
    };

    service.$inject = [
        '$http'
    ];

    return service;
});