/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var factory = function () {

        var Exhibition = function (exhibitionFilm) {

            this.exhibition_film = exhibitionFilm;
            this.schedules = [];
            this.type = null; // icon
            this.notes = '';
        };

        var ExhibitionFilm = function (film) {

            this.film = film;
        };

        return {
            make : function () {

                return new Exhibition(
                    new ExhibitionFilm(null)
                );
            }
        };
    };

    factory.$inject = [];

    return factory;
});