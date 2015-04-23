var gulp = require('gulp');
var concat = require('gulp-concat');

gulp.task('scripts', function() {

  gulp.src( [
          'js/superscrollorama/greensock/TweenMax.min.js',
          'js/superscrollorama/jquery.lettering-0.6.1.min.js',
          'js/superscrollorama/jquery.superscrollorama.js',
          'js/mixitup/jquery.mixitup.js',
          'js/foundation.min.js'
    ]
  )
    .pipe(concat('main.js'))
    .pipe(gulp.dest('js'));

});

gulp.task('default', ['scripts']);
