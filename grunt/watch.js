module.exports = {
  options: {
    livereload: true,
  },
  sass: {
    options: {
      livereload: false
    },
    files: ['grunt/scss/*.scss','grunt/scss/**/*.scss','grunt/scss/**/**/*.scss'],
    tasks: ['sass:dev','notify:sass']
  },
  css: {
    files: ['stylesheets/application.css','includes/_homecss.php']
  },
  images: {
    files: ['grunt/img/*.*','grunt/img/**/*.*'],
    tasks: ['newer:imagemin','notify:img']
  },
  headjs: {
    files: ['grunt/js/head.js'],
    tasks: ['newer:jshint:head_js','notify:js']
  },
  scripts: {
    files: ['grunt/js/application.js','grunt/js/behaviors/*.js','grunt/js/helpers/*.js','grunt/js/vendor/*.js'],
    tasks: ['newer:jshint:js','newer:uglify:dev','notify:js']
  }
};
