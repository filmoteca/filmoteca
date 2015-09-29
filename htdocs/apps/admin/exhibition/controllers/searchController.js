/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var controller = function ($scope, $http) {

        var FIRST_PAGE = 0;

        $scope.query = '';
        $scope.searching = false;

        $scope.search = function () {

            $scope.searching = true;

            var config = {
                params: {
                    'query': $scope.query,
                    'page': FIRST_PAGE
                }
            };

            $http.get($scope.url, config)
                .then(function (response) {

                    $scope.searching = false;
                    $scope.$emit('searchFinished', response.data);
                });
        };

        $scope.clear = function () {
            $scope.query = '';
        };
    };

    controller.$inject = ['$scope', '$http'];

    return controller;
});