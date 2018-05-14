var runSequence = require('run-sequence');
var requireDir  = require('require-dir');
var gulp = require('gulp');

requireDir( './gulp/tasks', { recurse: true } );

gulp.task('build-develop', function (callback) {
  runSequence( ['clean:wordpress'],
               ['copy:functions',
                'copy:screenshot',
                'copy:bootstrap-walker',
                'copy:style',
                'copy:images',
                'copy:fonts',
                'copy:php',
                'copy:scripts',
                'sass:dev'], callback);
});

gulp.task('build-deploy', function (callback) {
  runSequence( ['clean:wordpress',
                'clean:deploy'],
               ['copy:deploy',
                'copy:deploy:scripts',
                'copy:deploy:images',
                'copy:deploy:fonts',
                'sass:deploy'], callback);
});

gulp.task('serve', function (callback) {
  runSequence('build-develop', 'watch', callback);
});

gulp.task('deploy', function (callback) {
  runSequence('build-deploy', callback);
});