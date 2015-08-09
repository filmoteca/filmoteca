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

        //var appendTransform = function(defaults, transform) {
        //
        //    // We can't guarantee that the default transformation is an array
        //    defaults = angular.isArray(defaults) ? defaults : [defaults];
        //
        //    // Append the new transformation to the defaults
        //    return defaults.concat(transform);
        //};
        //
        //var transformResponseDates = function(exhibition) {
        //
        //    angular.forEach(exhibition.schedules, function(schedule){
        //
        //        var entry = moment(schedule.entry, 'YYYY-MM-DD HH:mm:ss');
        //
        //        schedule.date = entry.toDate();
        //        schedule.time = entry.toDate();
        //    });
        //
        //    return exhibition;
        //};
        //
        //var transformRequest = function(exhibition) {
        //
        //    angular.forEach(exhibition.schedules, function(schedule)
        //    {
        //        var date = moment(schedule.date).format('YYYY-MM-DD');
        //        var time = moment(schedule.time).format('HH:mm:ss');
        //
        //        schedule.entry = date + ' ' + time;
        //    });
        //
        //    exhibition.type_id 				= (exhibition.type === null)? 0: exhibition.type.id;
        //    exhibition.exhibition_film_id 	= exhibition.exhibition_film.id;
        //
        //    return exhibition;
        //};
        //
        //var HTTP_CONFIG = {
        //    transformResponse 	: appendTransform($http.defaults.transformResponse, transformResponseDates),
        //    transformRequest 	: [transformRequest].concat($http.defaults.transformRequest)
        //};

        this.paginate = function ($query, page) {

            var config = {
                params: {
                    'query': $query,
                    'page': page
                }
            };

            return $http.get('/admin/api/exhibition', config);
        };

        //this.load = function(id) {
        //
        //    var config = {
        //        transformResponse : appendTransform($http.defaults.transformResponse, transformResponseDates)
        //    };
        //
        //    return $http.get('/api/exhibition/' + id, config).then(function(response){
        //
        //        angular.extend(exhibition, response.data);
        //
        //        return response.data;
        //    });
        //};

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

        //this.destroy = function(id)
        //{
        //    return $http.delete('/admin/api/exhibition/' + id).then(function(response){
        //
        //        $rootScope.$broadcast('alert', Messages['exhibition.deleted']);
        //
        //        return response;
        //    });
        //};
        //
        //this.update = function()
        //{
        //    return $http.put('/admin/api/exhibition/' + exhibition.id, exhibition, HTTP_CONFIG).then(function(response){
        //
        //        $rootScope.$broadcast('alert', Messages['exhibition.updated']);
        //        return response;
        //    });
        //};
        //
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