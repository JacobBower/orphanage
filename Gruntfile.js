module.exports = function(grunt) {
  //load our plugins that were installed via NPM
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-contrib-watch");
  // grunt.loadNpmTasks('grunt-spritesmith');

  //Set Options
  grunt.initConfig({
    less: {
      dev: {
        // developer tasks
        files: {
          // compile from style.less to style.css
          "style.css": "style.less"
        },
        options: {
          cleancss: false
        }
      },
      dist: {
        // distribution tasks
        files: {
          // compile from style.less to style.min.css
          "style.min.css": "style.less"
        },
        options: {
          cleancss: true
        }
      }
    },
    // sprite:{
    //   all: {
    //     src: 'path/to/your/sprites/*.png',
    //     destImg: 'destination/of/spritesheet.png',
    //     destCSS: 'destination/of/sprites.css'
    //   }
    // },
    watch: {
      options: {
        livereload: true
      },
      //when .less files change, run the LESS task and livereload
      less: {
        files: ["**/*.less"],
        tasks: ["less:dev"]
      }
    }

  });
  //default task: compile LESS, Minimize , and watch
  grunt.registerTask("default", ["less:dist"]);
}
