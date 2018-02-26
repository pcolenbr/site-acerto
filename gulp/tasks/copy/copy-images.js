'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:images', function () {
  gulp.src(config.imagePath)
    .pipe(newer(config.imagePath))
    .pipe(gulp.dest(config.wordpressPath + 'images'));
});
