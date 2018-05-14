'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:fonts', function () {
  gulp.src(config.fontsPath)
    .pipe(newer(config.fontsPath))
    .pipe(gulp.dest(config.wordpressPath + 'fonts'));
});
