/**
 | Author: Victor Aguilar
 */

/* global define */

(function(factory)
{
	'use strict';

	define(['angular', 'json!/api/auditorium/all'], factory);

})(function(angular, auditoriums)
{
	'use strict';

	angular.module('admin.exhibition.services.AuditoriumService',[])

	.service('AuditoriumService', [function()
	{

		this.all = function()
		{
			return auditoriums;
		};

		this.default = function()
		{
			return auditoriums[0];
		};
	}]);
});