(function () {
    'use strict';

    angular
        .module('app.dashboard')
        .controller('DashboardController', DashboardController);

    DashboardController.$inject = ['$q', 'dataservice', 'logger', '$mdSidenav'];
    /* @ngInject */
    function DashboardController($q, dataservice, logger, $mdSidenav) {
        var vm = this;
        vm.news = {
            title: 'hottowel',
            description: 'Hot Towel Angular is a SPA template for Angular developers.'
        };
        vm.messageCount = 0;
        vm.companies = [];
        vm.title = 'Dashboard';
        vm.toggleSettings = toggleSettings;

        function toggleSettings() {
            $mdSidenav('settings').toggle()
                .then(function () {
                    logger.info('Toggle settings is called', $mdSidenav('settings'));
                });
        }

        activate();

        function activate() {
            var promises = [getMessageCount(), getCompanies()];
            return $q.all(promises).then(function() {
                logger.info('Activated Dashboard View');
            });
        }

        function getMessageCount() {
            return dataservice.getMessageCount().then(function (data) {
                vm.messageCount = data;
                return vm.messageCount;
            });
        }

        function getCompanies() {
            return dataservice.getCompanies().then(function (data) {
                vm.companies = data;
                return vm.companies;
            });
        }
    }
})();
