module.exports = function (config) {
    'use strict';
    config.set({

        // base path that will be used to resolve all patterns (eg. files, exclude)
        basePath: './',

        // frameworks to use
        // some available frameworks: https://npmjs.org/browse/keyword/karma-adapter
        frameworks: ['mocha', 'chai', 'sinon', 'chai-sinon'],

        // list of files / patterns to load in the browser
        files: [
            'src/lib/angular/angular.js',
            'src/lib/angular-mocks/angular-mocks.js',
            'src/lib/bardjs/dist/bard.js',
            'src/lib/angular-animate/angular-animate.js',
            'src/lib/angular-aria/angular-aria.js',
            'src/lib/angular-material/angular-material.js',
            'src/lib/angular-sanitize/angular-sanitize.js',
            'src/lib/angular-ui-router/release/angular-ui-router.js',
            'src/test-helpers/*.js',
            'src/lib/moment/moment.js',
            'src/app/**/*.module.js',
            'src/app/**/*.js'
        ],

        // list of files to exclude
        exclude: [
        ],

        // test results reporter to use
        reporters: ['progress'],

        // web server port
        port: 9876,

        // enable / disable colors in the output (reporters and logs)
        colors: true,

        // level of logging
        logLevel: config.LOG_INFO,

        // enable / disable watching file and executing tests whenever any file changes
        autoWatch: true,

        // Start these browsers
        browsers: ['PhantomJS'],

        // If browser does not capture in given timeout [ms], kill it
        captureTimeout: 60000,

        // Continuous Integration mode
        // if true, it capture browsers, run tests and exit
        singleRun: false

    });
};