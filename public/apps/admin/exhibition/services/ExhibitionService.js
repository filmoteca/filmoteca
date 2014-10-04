/**
 | Author: Victor Aguilar
 |
 | RESUMEN:
 |
 */

/* global define, angular */

(function(factory)
{
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		define(['angular'], factory);
	}else{
		factory(angular);
	}
})(function(angular)
{
	'use strict';

	angular.module('admin.exhibition.services.ExhibitionService',[])

	.service('ExhibitionService', [ '$rootScope', '$http',
		'AuditoriumService','IconographicService',
		function($rootScope, $http,Auditorium, Icon)
	{
		var exhibition = null;

		this.make = function()
		{
			return {
				exhibition_film : {
					film : {}
				},
				schedules : [], //El horario es la verdadera exhibición. 
				exhibition_types : [] //Iconografia.
			};
		};

		this.addSchedule = function( schedule )
		{
			if(angular.isDefined(schedule))
			{
				exhibition.schedules.unshift(schedule);
			}else{
				exhibition.schedules.unshift( this.defaultSchedule() );
			}

			return this;
		};

		this.addIcon = function( icon)
		{
			if( angular.isDefined(icon) )
			{
				exhibition.exhibition_types.unshift(icon);
			}else{
				exhibition.exhibition_types.unshift( Icon.default());
			}

			return this;
		};

		this.film = function( film )
		{
			if( angular.isDefined(film))
			{
				exhibition.exhibition_film.film = film;
				return film;
			}else{
				return exhibition.exhibition_film.film;
			}
		};

		this.schedules = function()
		{
			return exhibition.schedules;
		};

		this.icons = function()
		{
			return exhibition.exhibition_types;
		};

		this.destroySchedule = function($index)
		{
			exhibition.schedules.splice($index,1);

			return this;
		};

		this.destroyIcon = function($index)
		{
			exhibition.exhibition_types.splice($index,1);

			return this;
		};

		this.store = function()
		{
			$http.post('/admin/api/exhibition/store', exhibition)
				.success(function()
				{
					$rootScope.$broadcast('callbackFinished',{
						type: 'success',
						message: 'Exhibiciones guardada.'
					});
				})
				.error(function(event, data)
				{
					$rootScope.$broadcast('notificationRequested',{
						type: 'error',
						message: 'Error al guardar las exhibiciones.'
					});

					console.log('Error al guardar la exhibición.', data);
				});
		};

		/**
		 * Regresa una exhibición (en realidad un horario) con valores por 
		 * default.
		 * @return {Object} Un horario.
		 */
		this.defaultSchedule = function()
		{
			return {
				auditorium : Auditorium.default() ,
				entry : new Date(),
				date: new Date(),
				time: new Date()
			};
		};

		exhibition = this.make();
	}]);
});