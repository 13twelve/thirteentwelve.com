module.exports = {
  htmlmin: {
    options: {
      removeComments: true,
      collapseWhitespace: true
    },
    files: {
      'html/index.html': 'html/index.html'
    }
  }
};
