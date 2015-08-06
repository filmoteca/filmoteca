/* globals define */

(function (factory) {

    'use strict';

    define([], factory);

})(function () {

    'use strict';

    var factory = function () {
        return {
            exhibition_film : {
                film : null
            },
            schedules : [], //El horario es la verdadera exhibición.
            type : null,
            notes: '',
            hasFilm : function () {
                return this.exhibition_film.film !== null;
            }
        }
    };

    factory.$inject = [];

    return factory;
});