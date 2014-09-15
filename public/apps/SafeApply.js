/**
 * Author:
 *
 * Dependencies:
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

	angular.module('SafeApply',[])

	.run(['$rootScope', function($rootScope)
	{
		$rootScope.safeApply = function(fn)
		{
			var phase = this.$$phase;

			if( phase === '$digest' || phase === '$apply')
			{
				if(typeof fn === 'function')
				{
					fn();
				}
			}else{
				this.$apply(fn);
			}
		};
	}]);
});