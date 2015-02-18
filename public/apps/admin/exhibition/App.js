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

    .controller('admin.exhibition.controllers.exhibition',['$scope','ExhibitionService', function($scope, Exhibition){

        $scope.$on('alert', function(event, message){
            $scope.message = message;
        });

        $scope.wasFilmSelected = function()
        {
            return angular.isDefined( Exhibition.film().id );
        };
    }])

    .controller('admin.exhibition.controllers.index',['$scope','ExhibitionService', function($scope, Exhibition){

        Exhibition.paginate().then(function(pagination){

            $scope.exhibitions = pagination.data.data;
        });

        $scope.destroy = function($index)
        {
            Exhibition.destroy( $scope.exhibitions[$index].id ).then(function(){

                $scope.exhibitions.splice($index, 1);
            });
        };
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