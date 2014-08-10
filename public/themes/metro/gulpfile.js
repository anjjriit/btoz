// including plugins
var gulp = require('gulp')
    reload = require('gulp-livereload'),
    server = require('tiny-lr')(),
    less = require("gulp-less");

gulp.task('listen', function(done) {
  server.listen(123, function() {
    done();
  });
});

// task
gulp.task('less', function () {
    gulp.src('assets/less/style.less')
    .pipe(less())
    .pipe(gulp.dest('assets/css'))
    .pipe(reload(server));
});

gulp.task('watch', function() {
    gulp.watch(['assets/less/metro/*', 'assets/less/*'], ['less']);
});

gulp.task('default', ['watch'], function(){

});