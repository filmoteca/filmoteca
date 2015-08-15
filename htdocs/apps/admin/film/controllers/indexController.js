/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var controller = function ($scope, filmService) {

        $scope.pagination = {
            per_page : 0,
            total: 0,
            current_page: 1,
            last_page: 0,
            from : 0,
            to: 0,
            maxSize : 10
        };

        $scope.films = [];

        $scope.pageChanged = function () {

            filmService
                .paginate($scope.query, $scope.pagination.current_page)
                .then(function (response) {

                    angular.extend($scope.pagination, response.data);

                    $scope.films  = response.data.data;

                    $scope.pagination.data.data = null; //we do not save redundant data.
                });
        };

        $scope.pageChanged();
    };

    controller.$inject = [
        '$scope',
        'filmService'
    ];

    return controller;
});