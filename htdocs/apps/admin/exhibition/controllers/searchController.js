/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var controller = function ($scope, Exhibition) {

        var FIRST_PAGE = 0;

        $scope.query = '';
        $scope.searching = false;

        $scope.search = function () {

            $scope.searching = true;
            
            Exhibition
                .paginate($scope.query, FIRST_PAGE)
                .then(function (response) {
                    
                    $scope.searching = false;
                    $scope.$emit('exhibitionsSearched', response.data);
                });
        };

        $scope.clear = function () {
            $scope.query = '';
        };
    };

    controller.$inject = ['$scope', 'exhibitionService'];

    return controller;
});