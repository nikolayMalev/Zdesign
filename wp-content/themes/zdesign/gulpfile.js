import gulp from 'gulp';
import * as sass from 'sass';
import gulpSass from 'gulp-sass';

// Configure gulp-sass to use the new `sass` import
const sassCompiler = gulpSass(sass);

gulp.task('sass', function () {
  return gulp.src('./resources/styles.scss')  // Update path as needed
    .pipe(sassCompiler().on('error', sassCompiler.logError))
    .pipe(gulp.dest('./dist/css'));  // Update path as needed
});

gulp.task('default', gulp.series('sass'));
