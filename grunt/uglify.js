module.exports = {
  head: {
    options: {
      mangle: false,
      beautify: false,
      compress: true,
      preserveComments: false
    },
    files: {
      'includes/_headjs.php' : ['grunt/js/head.js']
    }
  },
  dev: {
    options: {
      mangle: false,
      beautify: true,
      compress: false,
      preserveComments: true
    },
    files: {
      'javascripts/application.js' : [
          'grunt/js/vendor/*.js',
          'grunt/js/application.js',
          'grunt/js/helpers/*.js',
          'grunt/js/behaviors/*.js'
    ]}
  },
  dist: {
    options: {
      mangle: false,
      beautify: false,
      compress: true,
      preserveComments: false
    },
    files: {
      'javascripts/application.js' : [
          'grunt/js/vendor/*.js',
          'grunt/js/application.js',
          'grunt/js/helpers/*.js',
          'grunt/js/behaviors/*.js'
    ]}
  },
};
