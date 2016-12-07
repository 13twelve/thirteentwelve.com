module.exports = {
  compress: {
    options: {
      mode: 'gzip'
    },
    files: {
      'html/index.html.gz': 'html/index.html'
    }
  }
};
