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
        production : {
          files : [
            {
              src : ['**/*.scss', '!**/_*.scss'],
              cwd : 'assets/scss',
              dest : 'assets/css',
              ext : '.css',
              expand : true
            }
          ],
          options : {
            style : 'compressed'
          }
        },
        dev: {
            files : [
              {
                src : ['**/*.scss', '!**/_*.scss'],
                cwd : 'assets/scss',
                dest : 'assets/css',
                ext : '.css',
                expand : true
              }
            ],
            options: {
                style: 'expanded'
            }
        }
    },
    autoprefixer: {
      options: {
        browsers: ['last 2 versions']
      },
      dist: {
        files: [{
          expand: true,
          cwd: 'assets/css',
          src: '**/*.css',
          dest: 'assets/css'
        }]
      }
    },
});

    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');


    grunt.registerTask('default', ['watch']);
    grunt.registerTask('build', ['sass:production', 'autoprefixer']);
};