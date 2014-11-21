/* global define */

(function(factory)
{
	'use strict';

	define(['angular'], factory);

})(function(angular)
{
	'use strict';

	angular.module('Notificator', ['ui.bootstrap'])

	.service('Notificator',['$modal','$rootScope', function($modal, $rootScope){

		var DEFAULTS = {
			style : 'success',
			type : 'alert',
			message : ''
		};

		var TEMPLATES = {
			alert : ''+
			'<div class="modal-header"><span ng-class="style" class="label">Alerta</span><span class="glyphicon glyphicon-remove btn pull-right" ng-click="$close()"></span></div></div>'+
			'<div class="modal-body">{{message}}</div>'
		};

		this.notify = function(config){

			var s = $rootScope.$new();

			angular.extend(s, DEFAULTS, config);

			s.style = 'label-' + s.style

			$modal.open({
				template: TEMPLATES[s.type],
				scope : s,
				size : 'sm'
			});
		};
	}]);
});