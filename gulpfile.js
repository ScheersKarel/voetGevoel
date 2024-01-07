const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const imagemin = require ('gulp-imagemin');
var uglify = require('gulp-uglify');
var cleaner = require('gulp-clean');
const browserSync = require('browser-sync').create();

//SCSS naar CSS
function buildStyles() {
    return gulp.src('./src/scss/*.scss')
      .pipe(sass().on('error', sass.logError))
      .pipe(gulp.dest('./public/resources/css/'))
      .pipe(browserSync.stream());
  };
  
  //optimize images 
  function images(){
    return gulp.src('./src/images/*')
    .pipe(imagemin())
    .pipe(gulp.dest('./public/resources/images/'))
    .pipe(browserSync.stream());
  }

  function compress(){
    return gulp.src('./src/js/*.js')
      .pipe(uglify())
      .pipe(gulp.dest('./public/resources/js/'))
      .pipe(browserSync.stream());
  }

  function clean(){
    return gulp.src('./public/resources/*', {read: false})
    .pipe(cleaner());
}

 
  exports.clean = clean;
  exports.dev = browserSyncTask;
  exports.build = gulp.series(clean, buildStyles, images, compress);