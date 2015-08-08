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
            this.type = []; // icon
            this.notes = '';
        };

        var ExhibitionFilm = function (film) {

            this.film = film;
        };

        return {
            make : function (rawExhibition) {

                var exhibition =  new Exhibition(
                    new ExhibitionFilm(null)
                );

                if (angular.isUndefined(rawExhibition)) {
                    return exhibition;
                }

                return angular.extend(exhibition, rawExhibition);
            }
        };
    };

    factory.$inject = [];

    return factory;
});