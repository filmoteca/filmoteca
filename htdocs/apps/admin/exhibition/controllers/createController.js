/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var controller = function ($scope, exhibitionFactory, iconographicService) {

        $scope.exhibition = exhibitionFactory.make();

        $scope.icons = iconographicService.all();

        $scope.film = null;

        $scope.searching = false;

        $scope.search = function () {

        	$scope.searching = true;
        };

        $scope.filmSelected = function (selection) {

            $scope.searching = false;

        	if ( typeof selection === 'undefined') {
                return;
        	}

            $scope.exhibition.exhibition_film.film  = selection.originalObject;
            $scope.film                             = selection.originalObject;
        };
    };

    controller.$inject = ['$scope', 'exhibitionFactory', 'iconographicService'];

    return controller;
});