/* globals define */

(function (factory) {

    'use strict';

    define(['angular'], factory);

})(function (angular) {

    'use strict';

    var factory = function (auditoriumService) {

        var Schedule = function (auditorium) {

            this.auditorium = auditorium;
            this.entry = new Date();
            this.date = new Date();
            this.time = new Date();
        };

        return {
            make : function (rawSchedule) {

                var schedule = new Schedule(auditoriumService.getOne());

                if (angular.isUndefined(rawSchedule)) {
                    return schedule;
                }

                // TODO: implement the schedule creation when data are given.

                return schedule;
            }
        };
    };

    factory.$inject = ['auditoriumService'];

    return factory;
});