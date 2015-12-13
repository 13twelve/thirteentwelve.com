module.exports = function(grunt) {

  // measures the time each task takes
  require('time-grunt')(grunt);

  var head_js = ['grunt/js/head.js'];
  var js = [
    'grunt/js/vendor/*.js',
    'grunt/js/application.js',
    'grunt/js/helpers/*.js',
    'grunt/js/behaviors/*.js'
  ];
  var gruntfiles_js = ['grunt/*.js'];
  var all_js = gruntfiles_js.concat(head_js,js);

  // individual configs are in grunt/*.js files
  require('load-grunt-config')(grunt, {
    data: {
      gruntfiles_js: gruntfiles_js,
      head_js: head_js,
      js: js,
      all_js: all_js
    }
  });
};
