/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var factory = function () {

        var Film = function () {

            this.title      = '';
            this.director   = '';
            this.years      = [];
            this.countries  = [];
            this.image      = {};
        };

        return {
            make: function () {
                return new Film();
            }
        }
    };

    factory.$inject = [];

    return factory;
});