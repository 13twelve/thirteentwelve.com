module.exports = {
  dev: {
    options: {
      sourceMap: false,
      outputStyle: "nested"
    },
    files: {
      'stylesheets/application.css' : 'grunt/scss/application.scss',
      'includes/_homecss.php' : 'grunt/scss/home.scss'
    }
  },
  dist: {
    options: {
      sourceMap: false,
      outputStyle: "compressed"
    },
    files: {
      'stylesheets/application.css' : 'grunt/scss/application.scss',
      'includes/_homecss.php' : 'grunt/scss/home.scss'
    }
  },
};
