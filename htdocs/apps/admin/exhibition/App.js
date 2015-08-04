/**
 | namespace 
 * Author:
 *
 * Dependencies:
 */

/* global require */

(function(factory)
{
    'use strict';
        require([
            'angular',
            'domready',
            'angucomplete-alt',
            'ngRoute',
            'ngAnimate',
            'ui.bootstrap',

            'admin.exhibition.controllers/FilmController',
            'admin.exhibition.controllers/ScheduleController',
            'admin.exhibition.controllers/IconographicController',

            'admin.exhibition.services/FilmService',
            'admin.exhibition.services/ExhibitionService',
            'admin.exhibition.services/AuditoriumService',
            'admin.exhibition.services/IconographicService',
            'admin.exhibition.services/NotificationService',

            'file-model',

            'syntara'
            ], 
            factory);
})(function(angular, domready)
{
    'use strict';

    angular.module('App',[

        'angucomplete-alt',
        'ngRoute',
        'ngAnimate',

        'admin.exhibition.controllers.FilmController', 
        'admin.exhibition.controllers.ScheduleController',
        'admin.exhibition.controllers.IconographicController',

        'admin.exhibition.services.FilmService',
        'admin.exhibition.services.ExhibitionService',
        'admin.exhibition.services.AuditoriumService',
        'admin.exhibition.services.IconographicService',
        'admin.exhibition.services.NotificationService',

        'FileModel'
        ]
    )

    .controller('admin.exhibition.controllers.exhibition',['$scope','$timeout','ExhibitionService', 'ExhibitionMessages',
    function($scope, $timeout, Exhibition, Messages){

		var MAX_ALERTS = 5;
        var TIMEOUT_TO_DISMISS_ALERT = 3000;
        var timer = null;

        var removeOldestAlert = function() {

            timer = $timeout(function(){
                $scope.closeAlert($scope.alerts.length -1);
            }, TIMEOUT_TO_DISMISS_ALERT);
        };

        $scope.alerts = [];

        $scope.exhibition = Exhibition.get();

		$scope.$on('alert', function(event, message){

            $scope.alerts.unshift(message);

			while( $scope.alerts.length > MAX_ALERTS){
				//Delete the first element. At the bottom of the stack.

                $scope.closeAlert($scope.alerts.length -1);
			}

            removeOldestAlert();
		});

		$scope.closeAlert = function(index){

			$scope.alerts.splice(index, 1);

            if( $scope.alerts.length > 0){

                removeOldestAlert();
            }
		};

		$scope.$on('dismissAlerts', function(){
			$scope.alerts.splice(0, $scope.alerts.length);
		});

		$scope.$on('$viewContentLoaded', function(){
			$scope.alerts.splice(0, $scope.alerts.length);
		});

        $scope.wasFilmSelected = function()
        {
            return angular.isDefined( Exhibition.film().id );
        };

        $scope.update = function()
        {
            Exhibition.update().then(function(){

                $scope.$emit('alert', Messages['exhibition.updated']);
            });
        };
    }])

    .controller('admin.exhibition.controllers.index',['$scope','ExhibitionService', function($scope, Exhibition){

        $scope.pagination = {
            per_page : 0,
            total: 0,
            current_page: 1,
            last_page: 0,
            from : 0,
            to: 0,
            maxSize : 10
        };

        $scope.pageChanged = function(){

            Exhibition.paginate($scope.query, $scope.pagination.current_page).then(function(response){

                angular.extend($scope.pagination, response.data);
                
                $scope.exhibitions  = response.data.data;

                $scope.pagination.data.data = null; //we do not save redundant data.
            });
        };

        $scope.destroy = function($index)
        {
            Exhibition.destroy( $scope.exhibitions[$index].id ).then(function(){

                $scope.exhibitions.splice($index, 1);
            });
        };

        $scope.filter = function () {

            var FIRST_PAGE = 0;

            Exhibition.paginate($scope.query, FIRST_PAGE).then(function(response){

                angular.extend($scope.pagination, response.data);

                $scope.exhibitions  = response.data.data;

                $scope.pagination.data.data = null; //we do not save redundant data.
            });
        };

        $scope.pageChanged();
    }])

    .controller('admin.exhibition.controllers.create',['$scope', '$timeout', 'ExhibitionService', 'ExhibitionMessages', function($scope, $timeout, Exhibition, Messages){
        
        $scope.exhibitionLoaded = false;

        Exhibition.restart();

        $scope.$watch($scope.wasFilmSelected, function(newValue){

            if( newValue ){

                Exhibition.store().then(function(){
                    $scope.$emit('alert', Messages['exhibition.stored']);
                });
            }
        });
    }])

    .controller('admin.exhibition.controllers.edit',['$scope','ExhibitionService', 'ExhibitionMessages', '$routeParams',
			function($scope, Exhibition, Messages, $routeParams){

        $scope.exhibitionLoaded = true;

        Exhibition.load($routeParams.id).then(function(exhibition){

            $scope.exhibition = exhibition;

            $scope.$broadcast('exhibitionLoaded', exhibition);
        });
    }])

    .config(['$routeProvider','$httpProvider', function($routeProvider, $httpProvider) {
            
        $routeProvider
            .when('/index', {
                templateUrl : '/apps/admin/exhibition/templates/index.html',
                controller: 'admin.exhibition.controllers.index'
            })
            .when('/create',{
                templateUrl : '/apps/admin/exhibition/templates/create.html',
                controller: 'admin.exhibition.controllers.create'
            })
            .when('/edit/:id',{
                templateUrl : '/apps/admin/exhibition/templates/create.html',
                controller: 'admin.exhibition.controllers.edit'
            })
            .otherwise('/index');

        $httpProvider.interceptors.push(function($q){
            return {
                'responseError' : function(rejection) {

                    if( angular.isDefined(window.console)){

                        window.console.info('Filmoteca error:', rejection.statusText);
                    }

                    return $q.reject(rejection);
                }
            };
        });
    }]);

    domready( function()
    {
        document.getElementsByTagName('body')[0].setAttribute('data-ng-controller','admin.exhibition.controllers.exhibition');
        angular.bootstrap(document,['App']);
    });

});