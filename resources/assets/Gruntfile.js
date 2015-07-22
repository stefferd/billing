module.exports = function(grunt) {

    require('load-grunt-tasks')(grunt);
    require('time-grunt')(grunt);

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            options: {
                banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
            },
            build: {
                src: 'src/<%= pkg.name %>.js',
                dest: 'build/<%= pkg.name %>.min.js'
            }
        },
        jshint: {
            options: {
                jshintrc: '.jshintrc',
                reporter: require('jshint-stylish')
            },
            gruntfile: {
                src: 'Gruntfile.js'
            },
            src: {
                src: ['src/**/*.js', '!src/**/*.spec.js']
            },
            test: {
                src: ['src/**/*.spec.js']
            }
        },
        karma: {
            unit: {
                configFile: 'karma.conf.js'
            }
        },
        clean: {
            options: {
                force: true
            },
            src: ['../../public/assets/*']
        },
        copy: {
            main: {
                files: [
                    // makes all src relative to cwd
                    {expand: true, cwd: 'src/', src: ['**'], dest: '../../public/assets/'}
                ]
            }
        }
    });

    // Default task(s).
    grunt.registerTask('default', ['uglify', 'jshint', 'test']);
    grunt.registerTask('test', ['unit:server', 'clean', 'copy']);
    grunt.registerTask('unit:server', ['jshint', 'karma:unit']);
    grunt.registerTask('serve', ['jshint', 'clean', 'copy']);
};