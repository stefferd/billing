(function () {
    'use strict';

    angular
        .module('app.core')
        .factory('dataservice', dataservice);

    dataservice.$inject = ['$http', '$q', 'logger'];
    /* @ngInject */
    function dataservice($http, $q, logger) {
        var service = {
            get: get,
            post: post,
            remove: remove
        };

        return service;

        function get(method) {
            return $http.get(method).then(success).catch(fail);
        }

        function post(method, requestBody) {
            return $http.post(method, requestBody).then(success).catch(fail);
        }

        function remove(method, requestBody) {
            return $http.delete(method, requestBody).then(success).catch(fail);
        }

        function success(response) {
            return response.data;
        }

        function fail(error) {
            var msg = 'query for companies failed. ' + error.data.description;
            logger.error(msg);
            return $q.reject(msg);
        }
    }
})();
