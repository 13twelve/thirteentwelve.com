module.exports = {
  default: {
    options: {
      processLinks: true,
      htmlhint: {
        'tagname-lowercase': true,
        'attr-lowercase': true,
        'attr-value-double-quotes': true,
        'doctype-first': false,
        'tag-pair': true,
        'spec-char-escape': true,
        'id-unique': true,
        'src-not-empty': true
      }
    },
    files: [
      {
        expand: true,
        cwd: "",
        src: ["*.php","!deploy.php"],
        dest: 'html',
        ext: '.html',
        process: function(response, callback) {
            callback(response.replace(/\.php"/g, '.html"'));
        }
      }
    ]
  }
};
