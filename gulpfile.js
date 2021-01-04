const gulp = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');
var sourcemaps = require('gulp-source')
const browserSync = require('browser-sync').reload;

function style() {
  return gulp
    .src('./assets/sass/**/*.scss')
    .pipe(sass())
    .pipe(sourcemaps.init())
    .pipe(concat('styles.css'))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./assets/css/'))
    .pipe(browserSync.stream());
}

function php() {
  return gulp
  .src('./**/*.php')
  .pipe(browserSync.stream());
}

function watch() {
  browserSync.init({
    proxy: 'http://thesocialedition.local/',
    notify: true
  });
  gulp.watch('./sass/**/*.scss', style);
  gulp.watch('/**/*.php', php);
}

exports.style = style;
exports.watch = watch;
