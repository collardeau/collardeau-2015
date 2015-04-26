var gulp = require('gulp');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var paths = {
    js: ['./js/**/*.js']
};

gulp.task('scripts', function() {

  gulp.src( [
          //'js/custom.modernizr.js',
          'node_modules/jquery/dist/jquery.min.js',
          'js/foundation.min.js',
          'js/superscrollorama/greensock/TweenMax.min.js',
          'js/superscrollorama/jquery.lettering-0.6.1.min.js',
          'js/superscrollorama/jquery.superscrollorama.js',
          'js/mixitup/jquery.mixitup.js',
          'js/bloxhover.jquery.min.js',
          'js/app.js'
    ]
  )
    .pipe(concat('main.min.js'))
      .pipe(uglify())
    .pipe(gulp.dest('js'));

});

gulp.task('watch', function() {
    gulp.watch(paths.js, ['scripts']);
});

gulp.task('default', ['scripts']);
