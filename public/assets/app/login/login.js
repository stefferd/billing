(function () {
    'use strict';

    angular
        .module('app.login')
        .controller('loginController', loginController);

    loginController.$inject = ['authentication', '$state', 'logger'];

    /* @ngInject */
    function loginController(authentication, $state, logger) {
        /* jshint validthis: true */
        var vm = this;

        vm.title = 'login';
        vm.login = login;
        vm.user = {
            email: '',
            password: ''
        };

        ////////////////

        function login() {
            logger.info('login', 'In the login function');
            authentication.login(vm.user.email, vm.user.password).then(
                function(data) {
                    vm.user = data.user;
                    $state.go('dashboard');
                }
            );

        }

        function logout() {
            authentication.login(vm.user.email, vm.user.password).then(
                function(data) {
                    vm.user = undefined;
                    $state.go('');
                }
            );
        }
    }
})();