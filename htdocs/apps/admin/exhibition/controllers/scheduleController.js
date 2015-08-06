/* global define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

	'use strict';

    var controller = function ($scope, Auditorium, Exhibition, Messages) {
        var FIRST_ITEM 	= 0;
        var NO_ITEM 	= -1;

        $scope.editing = false;

        $scope.auditoriums = Auditorium.all();

        $scope.schedules = Exhibition.schedules();

        $scope.editedIndex = NO_ITEM;

        $scope.add = function()
        {
            if($scope.editing){
                return $scope.saveAndAdd();
            }

            return $scope.onlyAdd();
        };

        $scope.destroy = function(index)
        {
            $scope.schedules = Exhibition.destroySchedule(index).schedules();
        };

        $scope.edit = function(index)
        {
            $scope.editing = true;

            $scope.editedIndex = index;
        };

        $scope.ready = function()
        {
            $scope.editing = false;

            var schedule = $scope.schedules[$scope.editedIndex];

            var entry = schedule.date + schedule.time;

            var tmpEditedIndex = $scope.editedIndex;

            $scope.editedIndex = NO_ITEM;

            schedule.entry = entry;

            return Exhibition.updateSchedule(tmpEditedIndex).then(function() {
                $scope.$emit('alert', Messages['schedule.updated']);
            });
        };

        /**
         * It saves the schedule that is currently edited and
         * adds a new schedule entry.
         */
        $scope.saveAndAdd = function()
        {
            $scope.ready().then(function(){
                $scope.onlyAdd();
            });
        };

        /**
         * It only adds a new schedule entry.
         */
        $scope.onlyAdd = function()
        {
            $scope.schedules = Exhibition.addSchedule().schedules();

            $scope.edit(FIRST_ITEM);
        };

        $scope.$on('exhibitionLoaded', function(){

            $scope.schedules = Exhibition.schedules();
        });
    };

    controller.$inject = [
        '$scope',
        'AuditoriumService',
        'ExhibitionService',
        'ExhibitionMessages'
    ];

	return controller;
});