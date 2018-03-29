'use strict';

var config = require('../../config');
var newer  = require('gulp-newer');
var gulp   = require('gulp');

gulp.task('copy:deploy', function () {
  gulp.src([config.functionsPath,
            config.phpPath,
            config.stylePath])
    .pipe(gulp.dest(config.deployPath));
});
