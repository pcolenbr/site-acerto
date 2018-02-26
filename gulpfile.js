var runSequence = require('run-sequence');
var requireDir  = require('require-dir');
var gulp = require('gulp');

requireDir( './gulp/tasks', { recurse: true } );

gulp.task('build-develop', function (callback) {
  runSequence( ['clean:style'],
               ['sass:dev'], callback);
});

gulp.task('build-deploy', function (callback) {
  runSequence( ['clean:wordpress',
                'clean:deploy'],
               ['copy:deploy',
                'copy:deploy:scripts',
                'copy:deploy:images',
                'sass:deploy'], callback);
});

gulp.task('serve', function (callback) {
  runSequence('build-develop', 'watch', callback);
});

gulp.task('deploy', function (callback) {
  runSequence('build-deploy', callback);
});