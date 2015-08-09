/* global define, angular */

(function (factory) {
	'use strict';

	if( typeof define === 'function' && define.amd )
	{
		define(['angular'], factory);
	}else{
		factory(angular);
	}
})(function (angular) {

    'use strict';

    var service = function ($rootScope, $http, $q, moment, Messages, exhibition) {

        this.paginate = function ($query, page) {

            var config = {
                params: {
                    'query': $query,
                    'page': page
                }
            };

            return $http.get('/admin/api/exhibition', config);
        };

        this.load = function(id) {

            return $http
                .get('/api/exhibition/' + id)
                .then(function (response) {
                    angular.forEach(response.data.schedules, function(schedule){

                        var entry = moment(schedule.entry, 'YYYY-MM-DD HH:mm:ss');

                        schedule.date = entry.toDate();
                        schedule.time = entry.toDate();
                    });

                    return response.data;
                });
        };

        this.store = function(exhibition) {

            angular.forEach(exhibition.schedules, function (schedule) {

                var date = moment(schedule.date).format('YYYY-MM-DD');
                var time = moment(schedule.time).format('HH:mm:ss');

                schedule.entry = date + ' ' + time;
            });

            return $http
                .post('/admin/api/exhibition', exhibition)
                .then(function(response){

                    return response;
                }, function() {

                    return $q.reject('');
                }
            );
        };

        this.destroy = function (id) {

            return $http
                .delete('/admin/api/exhibition/' + id)
                .then(function (response) {
                    return response;
                }, function (response) {

                    $rootScope.$broadcast('alert', {
                        type: 'danger',
                        msg: 'Error: La exhibición no pudó ser borrada.'
                    });

                    return $q.reject(response);
                });
        };
    };

    service.$inject = [
        '$rootScope',
        '$http',
        '$q',
        'moment',
        'messages',
        'exhibitionFactory'
    ];

    return service;
});