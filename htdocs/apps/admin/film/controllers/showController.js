/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var controller = function ($scope, film) {

        $scope.film = film;
    };

    controller.$inject = [
        '$scope',
        'film'
    ];

    return controller;
});