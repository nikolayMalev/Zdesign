const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

// Compile SCSS into CSS and Minify
gulp.task('sass', function () {
  return gulp.src('resources/components/styles.scss')  // SCSS entry point
    .pipe(sass().on('error', sass.logError))            // Compile SCSS to CSS
    .pipe(cleanCSS())                                   // Minify CSS
    .pipe(rename({ suffix: '.min' }))                   // Rename to styles.min.css
    .pipe(gulp.dest('dist/css'));                       // Output to dist/css/
});

// Watch SCSS files for changes
gulp.task('watch', function () {
  gulp.watch('resources/components/**/*.scss', gulp.series('sass'));
});

// Default Task
gulp.task('default', gulp.series('sass', 'watch'));