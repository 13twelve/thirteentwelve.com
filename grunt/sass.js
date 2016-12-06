module.exports = {
  dev: {
    options: {
      sourceMap: false,
      outputStyle: "nested"
    },
    files: {
      'stylesheets/application.css' : 'grunt/scss/application.scss'
    }
  },
  dist: {
    options: {
      sourceMap: false,
      outputStyle: "compressed"
    },
    files: {
      'stylesheets/application.css' : 'grunt/scss/application.scss'
    }
  },
};
