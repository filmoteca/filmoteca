/* global define */

(function(factory)
{
	'use strict';

	define(['json!/api/auditorium/all'], factory);

})(function (auditoriums) {

	'use strict';

    var service = function () {

        if (!auditoriums && auditoriums.length === 0) {

            var message = 'The auditoriums list is empty. The application need at least one.';
            throw new Error(message);
        }

        this.all = function () {

            return auditoriums;
        };

        this.getOne = function() {

            return auditoriums[0];
        };
    };

    service.$inject = [];

    return service;
});