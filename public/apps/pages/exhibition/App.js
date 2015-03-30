/**
 * @author : Victor Aguilar
 *
 */

/* globals require, define, angular, domready */
(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		require([
			'angular',
			'domready',
            'lodash',
			'angucomplete-alt',
			'pages.exhibition.directives/ExhibitionsDatepicker',
            'pages.exhibition.services/ExhibitionService',
            'ui.bootstrap',
			'angular-locale-mx',
            'ngRoute',
            'ngSanitize'
			],
			factory);
	}else{
		factory(angular,domready);
	}
})(function(angular, domready, _)
{
	'use strict';
	angular.module('App',[
		'pages.exhibition.directives.ExhibitionsDatepicker',
        'pages.exhibition.services.ExhibitionService',

        'ui.bootstrap',
		'ngLocale',
		'angucomplete-alt',
        'ngRoute',
        'ngSanitize'
		])

        .config(['$routeProvider', function($routeProvider){

            $routeProvider
                .when('/', {
                    templateUrl : '/apps/pages/exhibition/templates/index.html',
                    controller : 'pages.exhibition.list-controller'
                })
                .when('/exhibition/:id/show', {
                    templateUrl : '/apps/pages/exhibition/templates/show.html',
                    controller : 'pages.exhibition.show-controller'
                })
                .otherwise({
                    redirectTo : '/'
                })
        }])

        .controller('pages.exhibition.controllers.exhibitions-controller', [
            '$scope', '$location', 'CONFIG',
            function($scope, $location, CONFIG ){

                $scope.filteredExhibitions = [];

                $scope.filter = CONFIG.defaultFilter;

                $scope.updateFilter = function(name, data, title){

                    $scope.filter.name = name;
                    $scope.filter.data = data;
                    $scope.filter.title = title;

                    $location.url('/');

                    $scope.$root.$broadcast('filterUpdated', $scope.filter);
                };

                $scope.$on('dateSelected', function(event, data)
                {
                    console.log(data);
                	if( data.name === 'byWeek')
                	{
                		var date = moment(data.value, moment.ISO_8601);

                		$scope.startDate = date.subtract(date.weekday(), 'days' ).valueOf();

                		$scope.endDate = date.add(6, 'days').valueOf();
                	}

                	if( data.name === 'byDay' )
                	{
                		$scope.selectedDay = data.value;
                	}

                    $scope.updateFilter(data.name, data.value, 'Fecha');

                	//$scope.usedFilter = ( _.contains(['0',''], data.value) )? 'No one' : data.name;
                });
        }])

        /**
         * Scope inherits filter object from its parent (exhibitions-controller)
         */
        .controller('pages.exhibition.list-controller', [
            '$scope',
            'CONFIG',
            'pages.exhibition.services.ExhibitionService',
            function($scope, CONFIG, Exhibition){

                var filters      = Exhibition.filters();

                $scope.exhibitions  = Exhibition.all();

                $scope.exhibitionFilter = function(exhibition){

                    if($scope.filter.name == CONFIG.none){

                        return $scope.exhibitions;
                    }

                    return (filters[$scope.filter.name])(exhibition, $scope.filter.data);
                }

        }])

        .controller('pages.exhibition.show-controller', [
            '$scope',
            '$routeParams',
            '$location',
            '$log',
            '$sce',
            'pages.exhibition.services.ExhibitionService',
            function($scope, $routeParams, $location, $log, $sce, Exhibition) {

                var exhibitionData = Exhibition.find($routeParams.id);

                if(angular.isUndefined(exhibitionData)) {

                    $log.error('Any exhibition with id:', $routeParams.id);

                    $location.url('/');

                    return;
                }

                $scope.exhibition = Exhibition.make(exhibitionData);

                $scope.technicalCard = $scope.exhibition.getTechnicalCard();

                $scope.trailer = $sce.trustAsHtml($scope.exhibition.exhibition_film.film.trailer);

                $scope.isDefined = function(field){

                    // Anything that is not empty is accepted.
                    return field.value;
                };
        }])

        .filter("as", ['$parse', function($parse) {
            return function(collection, expresion) {
                return $parse(expresion).assign(this, collection);
            };
        }])

        .constant('CONFIG',{
            defaultFilter : {
                name : 'byMonth',
                title : 'Mes',
                data : new Date()
            },
            none: 'none'
        })

        .run(['datepickerConfig', 'moment',
            function(datepickerConfig, moment) {
                angular.extend(datepickerConfig, {
                	minDate : moment().subtract( moment().date() - 1, 'days').toDate(),
                	maxDate : moment( moment().year() + '-' + (moment().month() + 1) + '-' + moment()
                		.daysInMonth(),'YYYY-MM-DD').toDate(),
                	minMode : 'day',
                	maxMode : 'day',
                	showWeek : 'true',
                    startingDay: 1
                });
            }
        ])

	domready( function()
	{
        document
            .getElementsByTagName('body')[0]
            .setAttribute(
            'data-ng-controller',
            'pages.exhibition.controllers.exhibitions-controller'
        );
		angular.bootstrap(document, ['App']);
	});

});