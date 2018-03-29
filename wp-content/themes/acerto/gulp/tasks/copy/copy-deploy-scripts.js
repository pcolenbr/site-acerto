'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:deploy:scripts', function () {
  gulp.src(config.scriptsPath)
    .pipe(gulp.dest(config.deployPath + '/scripts'));
});
