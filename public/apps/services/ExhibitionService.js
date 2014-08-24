/**
 * This file use the array.prototype's reduce function that only is supported
 * by browser with ECMAScript 5. Internet explorer 7 and 8 not support this
 * function.
 */

/* globals angular, define, _ */

(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		define([
			'angular',
			'angular-moment',
			'underscore'
			],
			factory);
	}else{
		factory(angular,_);
	}
})(function(angular,_)
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
				return item.type_id === value || 
					parseInt(value) === 0;
			},
			'day': function(item, value)
			{
				var foundIt =_.find( item.schedules, function(schedule)
				{
					var selectedDate = moment(value);

					var filmDate = moment(schedule.entry);

					return selectedDate.date() === filmDate.date();
				});

				return angular.isDefined( foundIt );
			},
			'week' : function(item, value)
			{				
				var foundIt =_.find( item.schedules, function(schedule)
				{
					var selectedDate = moment(value);

					var filmDate = moment(schedule.entry);

					return selectedDate.week() === filmDate.week();
				});

				return angular.isDefined(foundIt);
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