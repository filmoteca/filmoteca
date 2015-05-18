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
		define(['angular', 'lodash', 'ui.bootstrap'], factory);
	}else{
		factory(angular);
	}
})(function(angular, _)
{
	'use strict';

	angular.module('admin.exhibition.controllers.IconographicController', ['ui.bootstrap'])

	.controller('IconographicController', ['$scope','$modal','IconographicService','ExhibitionService', 'ExhibitionMessages',
	function($scope, $modal, Icon, Exhibition, ExhibitionMessages)
	{
		$scope.iconsAvailable = Icon.all();

		$scope.exhibition = Exhibition.get();

        $scope.editing = false;

		$scope.create = function()
		{
			$modal.open({
				templateUrl: '/admin/api/iconographic/create',
				scope : $scope.$new(),
				controller : 'iconographic.modalController'
			})
			.result.then(function(icon)
			{
                if( angular.isUndefined(icon) ) return;

				$scope.iconsAvailable.unshift(icon);

				$scope.exhibition.type = Exhibition.icon(icon);
			});
		};

		$scope.update = function(icon)
		{
			Exhibition.icon(icon);
			Exhibition.update();
		};

        $scope.destroy = function(id)
        {
            Icon.destroy(id).then(
                function(){
                    $scope.$emit('alert', ExhibitionMessages['icon.deleted']);

                    var iconIndex = _.findIndex($scope.iconsAvailable, function(iconAvailable){

                        return iconAvailable.id == id;
                    });

                    $scope.iconsAvailable.splice(iconIndex, 1);
                },
                function(){

                    $scope.$emit('alert', ExhibitionMessages['icon.not-deleteable']);
                });
        };

        $scope.edit = function(icon)
        {
            var $s = $scope.$new();

            $s.oldIcon = angular.copy(icon);

            $modal.open({
                templateUrl: '/admin/api/iconographic/create',
                scope : $s,
                controller : 'iconographic.modalController'
            })
            .result.then(function(icon)
            {
                if( angular.isUndefined(icon) ) return;

                var iconIndex = _.findIndex($scope.iconsAvailable, function(iconAvailable){

                    return iconAvailable.id == icon.id;
                });

                $scope.iconsAvailable[iconIndex] = icon;
            });
        };

        $scope.deleteExhibitionIcon = function(){

            Exhibition.icon(null);
            Exhibition.update();
        };

		$scope.$on('exhibitionLoaded', function(){

			if( $scope.exhibition.type === null) return;

			$scope.exhibition.type = _.find($scope.iconsAvailable, function(icon){
				return icon.id === Exhibition.icon().id;
			});
		});
	}])

    .controller('iconographic.modalController', ['$scope', '$modalInstance', 'IconographicService',
    function($scope, $modalInstance, Icon)
    {
        $scope.icon = {};

        $scope.message = '';

        $scope.action = 'create';

        if(angular.isDefined($scope.oldIcon)){

            $scope.icon = $scope.oldIcon;

            $scope.action = 'update';
        }

        var closeModal = function(response)
        {
            $modalInstance.close(response.data);
        };


        $scope.save = function()
        {
            if($scope.action == 'create'){
                $scope.store();
                return;
            }

            $scope.update();
        }


        $scope.store = function()
        {
            Icon.store($scope.icon).then(closeModal);
        };

        $scope.update = function()
        {
            Icon.update($scope.icon).then(closeModal);
        }
    }]);
});