var gulp = require('gulp'),
watch = require('gulp-watch'),
browserSync = require('browser-sync').create();

gulp.task('watch', function() {

  browserSync.init({
    notify: false,
    server: {
      baseDir: "./"
    }
  });

  // watch('./app/index.html', function() {
  //   browserSync.reload();
  // });

  watch('./styles/**/*.css', function() {
    gulp.start('cssInject');
  });

  // watch('./app/scripts/**/*.js', function() {
  //   gulp.start('scriptsRefresh');
  // })

});

gulp.task('cssInject', ['styles'], function() {
  return gulp.src('./style.css')
    .pipe(browserSync.stream());
});

// gulp.task('scriptsRefresh', ['scripts'], function() {
//   browserSync.reload();
// });