/* global define, angular */

(function(factory)
{
    'use strict';

    define([], factory);

})(function () {
    'use strict';

    return {
        'exhibition.updated': {
            type: 'success',
            msg: 'Exhibition actualizada.'
        },
        'exhibition.stored': {
            type: 'success',
            msg: 'Exhibición almacenada.'
        },
        'exhibition.deleted': {
            type: 'success',
            msg: 'Exhibición borrada.'
        },
        'schedule.saved': {
            type: 'success',
            msg: 'Horario salvado.'
        },
        'schedule.updated': {
            type: 'success',
            msg: 'Horario actualizado.'
        },
        'schedule.deleted': {
            type: 'success',
            msg: 'Horario borrado.'
        },
        'icon.not-deleteable': {
            type: 'danger',
            msg: 'No se puede borrar el icono. Posiblemente alguna exhibición está asociado con el.'
        },
        'icon.deleted': {
            type: 'success',
            msg: 'Icono borrado.'
        },
        'icon.updated': {
            type: 'success',
            msg: 'Icono actualizado.'
        }
    };
});