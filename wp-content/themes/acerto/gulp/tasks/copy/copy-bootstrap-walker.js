'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:bootstrap-walker', function () {
  gulp.src(config.bootstrapWalkerPath)
    .pipe(gulp.dest(config.wordpressPath));
});
