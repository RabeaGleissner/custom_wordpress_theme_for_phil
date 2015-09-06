module.exports = function(grunt) {

grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
        sass: {
            files: ['assets/scss/**/*.scss'],
            tasks: ['sass:dev'],
            options : {
              livereload : 35729
            }
        },
        js : {
            files : ['js/**/*.js'],
            options : {
              livereload : 35729
            }
      },
      php : {
        files : ['**/*.php'],
            options : {
              livereload : 35729
            }
      }
    },
    sass: {
        dev: {
            files: {
                'assets/css/styles.css': 'assets/scss/styles.scss'
            },
            options: {
                style: 'expanded'
            }
        }
    }
});

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['watch']);
};