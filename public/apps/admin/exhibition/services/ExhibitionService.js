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
				type : {}
			};
		};

		this.get = function()
		{
			return exhibition;
		}

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

		this.icon = function( icon ){
			if( angular.isDefined(icon))
			{
				exhibition.type = icon;
				return icon;
			}else{
				return exhibition.exhibition_film.icon;
			}
		}

		this.schedules = function()
		{
			return exhibition.schedules;
		};

		this.destroySchedule = function($index)
		{
			exhibition.schedules.splice($index,1);

			return this;
		};

		this.store = function()
		{
			$http.post('/admin/api/exhibition/store', exhibition)
				.success(function()
				{
					$rootScope.$broadcast('notificationRequested',{
						type: 'success',
						message: 'Exhibiciones guardada.'
					});
				})
				.error(function(event, data)
				{
					$rootScope.$broadcast('notificationRequested',{
						type: 'danger',
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