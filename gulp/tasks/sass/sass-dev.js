'use strict';

var sass        = require('gulp-sass');
var newer       = require('gulp-newer');
var livereload  = require('gulp-livereload');
var config      = require('../../config');
var gulp        = require('gulp');

gulp.task('sass:dev', function () {
  gulp.src(config.sassPath)
    .pipe(newer(config.sassPath))
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest(config.wordpressPath + 'styles'))
    .pipe(livereload());
});
