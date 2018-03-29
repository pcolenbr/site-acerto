'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:screenshot', function () {
  gulp.src(config.screenshotPath)
    .pipe(gulp.dest(config.wordpressPath));
});
