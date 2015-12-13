module.exports = {
  dev: {
    options: {
      sourceMap: false,
      outputStyle: "nested"
    },
    files: {
      'stylesheets/application.css' : 'grunt/scss/application.scss',
      'stylesheets/icons.css' : 'grunt/scss/icons.scss'
    }
  },
  dist: {
    options: {
      sourceMap: false,
      outputStyle: "compressed"
    },
    files: {
      'stylesheets/application.css' : 'grunt/scss/application.scss',
      'stylesheets/icons.css' : 'grunt/scss/icons.scss'
    }
  },
};
