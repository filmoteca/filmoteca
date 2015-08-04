/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var controller = function ($scope, Exhibition) {

        var FIRST_PAGE = 0;

        $scope.query = '';

        $scope.search = function () {

            Exhibition
                .paginate($scope.query, FIRST_PAGE)
                .then(function (response) {

                    $scope.$emit('exhibitionsSearched', response.data);
                });
        };

        $scope.clear = function () {
            $scope.query = '';
        };
    };

    controller.$inject = ['$scope', 'ExhibitionService'];

    return controller;
});