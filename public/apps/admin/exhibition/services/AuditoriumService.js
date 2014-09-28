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

	angular.module('admin.exhibition.services.AuditoriumService',[])

	.service('AuditoriumService', [function()
	{
		var auditoriums = null;

		this.all = function()
		{
			auditoriums =[{
				id : 1,
				name : 'Auditorio 1'
			},{
				id : 2,
				name : 'Sala'
			},{
				id: 3,
				name : 'Auditorium'
			}];

			return auditoriums;
		};

		this.default = function()
		{
			if( auditoriums === null)
			{
				this.all();
			}

			return auditoriums[0];
		};
	}]);
});