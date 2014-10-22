module.exports = function(grunt) {
  //load our plugins that were installed via NPM
  grunt.loadNpmTasks("grunt-contrib-less");
  grunt.loadNpmTasks("grunt-contrib-watch");
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-spritesmith');

  //Set Options
  grunt.initConfig({
    less: {
      dev: {
        //compile from style.less to style.compile.css
        src: "src/style.less",
        dest: "dist/style.compile.css"
      }
    },
    cssmin: {

      dist: {
        files: {
          //minifi to style.css
          'dist/style.css': ['dist/style.compile.css']
        }
      }
    },
    sprite:{
      all: {
        src: 'path/to/your/sprites/*.png',
        destImg: 'destination/of/spritesheet.png',
        destCSS: 'destination/of/sprites.css'
      }
    },
    watch: {
      options: {
        livereload: true
      },
      //when .less files change, run the LESS task and livereload
      less: {
        files: ["**/*.less"],
        tasks: ["less"]
      }
    }

  });

  //default task: compile LESS, Minimize , and watch
  grunt.registerTask("default", ["less", "cssmin", "watch"]);

}
