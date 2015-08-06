/* globals require */

(function (factory) {

    'use strict';

    define([], factory);
})(function () {

    'use strict';

    var controller = function($scope, Exhibition){

        $scope.pagination = {
            per_page : 0,
            total: 0,
            current_page: 1,
            last_page: 0,
            from : 0,
            to: 0,
            maxSize : 10
        };

        $scope.pageChanged = function () {

            Exhibition.paginate($scope.query, $scope.pagination.current_page).then(function (response) {

                angular.extend($scope.pagination, response.data);

                $scope.exhibitions  = response.data.data;

                $scope.pagination.data.data = null; //we do not save redundant data.
            });
        };

        $scope.destroy = function ($index) {

            Exhibition.destroy($scope.exhibitions[$index].id).then(function () {

                $scope.exhibitions.splice($index, 1);
            });
        };

        $scope.pageChanged();

        $scope.$on('exhibitionsSearched', function (event, pagination) {

            angular.extend($scope.pagination, pagination);

            $scope.exhibitions  = pagination.data;

            $scope.pagination.data.data = null; //we do not save redundant data.
        });
    };

    controller.$inject = ['$scope', 'ExhibitionService'];

    return controller;
});