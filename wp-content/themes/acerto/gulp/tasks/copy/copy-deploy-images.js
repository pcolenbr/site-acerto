'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:deploy:images', function () {
  gulp.src(config.imagePath)
    .pipe(gulp.dest(config.deployPath + '/images'));
});
