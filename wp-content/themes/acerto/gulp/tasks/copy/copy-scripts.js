'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:scripts', function () {
  gulp.src(config.scriptsPath)
    .pipe(newer(config.scriptsPath))
    .pipe(gulp.dest(config.wordpressPath + 'scripts'));
});
