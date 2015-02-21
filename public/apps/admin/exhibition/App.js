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

    .controller('admin.exhibition.controllers.exhibition',['$scope','$timeout','ExhibitionService', function($scope, $timeout, Exhibition){

        var SECOND = 1000;
        var TIMEOUT_MESSAGE = 3*SECOND;

        $scope.$on('alert', function(event, message){
            $scope.message = message;

            $timeout(function(){
                $scope.message = '';
            }, TIMEOUT_MESSAGE);
        });

        $scope.wasFilmSelected = function()
        {
            return angular.isDefined( Exhibition.film().id );
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
            // maxSize : 10,
        };

        $scope.pageChanged = function(){

            Exhibition.paginate($scope.pagination.current_page).then(function(response){

                angular.extend($scope.pagination, response.data);
                
                $scope.exhibitions  = response.data.data;

                $scope.pagination.data.data = null; //we do not save redundate data.

                console.log($scope.pagination);
            });
        };

        $scope.destroy = function($index)
        {
            Exhibition.destroy( $scope.exhibitions[$index].id ).then(function(){

                $scope.exhibitions.splice($index, 1);
            });
        };

        $scope.pageChanged();
    }])

    .controller('admin.exhibition.controllers.create',['$scope', '$timeout', 'ExhibitionService', function($scope, $timeout, Exhibition){
        
        $scope.exhibitionLoaded = false;

        Exhibition.restart();

        $scope.$watch($scope.wasFilmSelected, function(newValue){

            if( newValue ){

                Exhibition.store().then(function(){
                    $scope.$emit('alert', 'Exhibición guardada.');
                });
            }
        });
    }])

    .controller('admin.exhibition.controllers.edit',['$scope','ExhibitionService','$routeParams', function($scope, Exhibition, $routeParams){

        $scope.exhibitionLoaded = true;

        Exhibition.load($routeParams.id).then(function(exhibition){

            $scope.exhibition = exhibition;

            $scope.$broadcast('exhibitionLoaded', exhibition);
        });

        $scope.update = function()
        {
            Exhibition.update().then(function(){
                
                console.log('I updated a exhibition');
            });
        };
    }])

    .config(['$routeProvider','$httpProvider',function($routeProvider, $httpProvider) {
            
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

                    console.log('Filmoteca error:', rejection.statusText);
                    
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