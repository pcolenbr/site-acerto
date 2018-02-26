'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:functions', function () {
  gulp.src(config.functionsPath)
    .pipe(gulp.dest(config.wordpressPath));
});
