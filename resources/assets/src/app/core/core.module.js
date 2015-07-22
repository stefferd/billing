(function () {
    'use strict';

    angular
        .module('app.core', [
            'ngAnimate', 'ngSanitize', 'ngMaterial',
            'blocks.exception', 'blocks.logger', 'blocks.router',
            'app.data',
            'ui.router'
        ]);
})();