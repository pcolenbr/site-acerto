'use strict';

var runSequence = require('run-sequence');
var config      = require('../../config');
var livereload  = require('gulp-livereload');
var gulp        = require('gulp');

gulp.task('watch', function () {
  livereload.listen();

  gulp.watch(config.sassPath, function () {
    runSequence('sass:dev');
  });
  
  gulp.watch(config.phpPath, function () {
    runSequence('copy:php');
  });

  gulp.watch(config.functionsPath, function () {
    runSequence('copy:functions');
  });

  gulp.watch(config.stylePath, function () {
    runSequence('copy:style');
  });

  gulp.watch(config.scriptsPath, function () {
    runSequence('copy:scripts');
  });
});
