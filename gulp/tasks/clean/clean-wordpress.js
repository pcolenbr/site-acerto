'use strict';

var config = require('../../config');
var gulp   = require('gulp');
var del    = require('del');

gulp.task('clean:wordpress', function () {
  return del([config.wordpressPath + '*.php',
              config.wordpressPath + 'style.css',
              config.wordpressPath + 'images',
              config.wordpressPath + 'styles',
              config.wordpressPath + 'scripts']);
});