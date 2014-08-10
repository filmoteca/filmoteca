/**
 * This file use the array.prototype's reduce function that only is supported
 * by browser with ECMAScript 5. Internet explorer 7 and 8 not support this
 * function.
 */

(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		requirejs([
			'angular',
			'angular-moment'
			],
			factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	var app = angular.module('ExhibitionService',['angularMoment']);

	app.factory('Exhibition',['$window', 'moment', function($window, moment)
	{	
		var filters = {

			'auditorium': function(item,value)
			{	
				return item.schedules.reduce(function(accumulator, schedule)
					{
						return (accumulator || schedule.auditorium.id == value);
					}, parseInt(value) === 0);
			},
			'icon' : function(item,value)
			{
				return item.type_id == value;
			},
			'day': function(item, value)
			{
				return item.schedules.reduce(function(accumulator, schedule)
					{
						var filmDate = moment(schedule.entry);

						var selectedDate = moment(value, moment.ISO_8601);

						var sameDay = filmDate.date() === selectedDate.date();

						return (accumulator || sameDay);
					}, false);
			},
			'week' : function(item, value)
			{
				return item.schedules.reduce(function(accumulator, schedule)
					{
						var selectedDate = moment(value);

						var filmDate = moment(schedule.entry);
						//como romper el ciclo? con una excepción.
						return (accumulator ||
							selectedDate.week() == filmDate.week() );
					}, false);
			},
			'month' : function()
			{
				return true;
			}
		};

		var exhibitions = 
		{
			all : function()
			{
				return  $window.exhibitions;
			},
			filters : function()
			{
				return filters;
			}
		};
		return exhibitions;
	}]);
});