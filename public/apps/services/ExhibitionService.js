(function(factory)
{
	'use strict';

	if( typeof define == 'function' && define.amd )
	{
		requirejs([
			'angular'
			],
			factory);
	}else{
		factory();
	}
})(function()
{
	'use strict';

	var app = angular.module('ExhibitionService',[]);

	app.factory('Exhibition',[function()
	{
		return {};
	}])
});