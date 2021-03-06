(function () {
    'use strict';

    angular
        .module('app.data')
        .factory('authentication', authentication);

    authentication.$inject = ['dataservice'];

    /* @ngInject */
    function authentication(dataservice) {
        return {
            logout: logout,
            login: login
        };

        ////////////////

        function logout() {
            return dataservice.get().then(function(data) {
               return data;
            });
        }

        function login(email, password) {
            var requestBody = {
                email: email,
                password: password
            };
            return dataservice.post('/api/v1/login', requestBody);
        }
    }
})();