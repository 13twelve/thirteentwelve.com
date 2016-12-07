module.exports = {
  imagemin: {
    options: {
      optimizationLevel: 5,
      progressive: false
    },
    files: [{
       expand: true,
       cwd: 'grunt/img',
       src: ['**/*.{png,jpg,gif}'],
       dest: 'images/'
    }]
  }
};
