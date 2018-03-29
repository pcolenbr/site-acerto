'use strict';

var config      = require('../../config');
var newer       = require('gulp-newer');
var gulp        = require('gulp');
var livereload  = require('gulp-livereload');

gulp.task('copy:php', function () {
  gulp.src(config.phpPath)
    .pipe(newer(config.phpPath))
    .pipe(gulp.dest(config.wordpressPath))
    .pipe(livereload());;
});
