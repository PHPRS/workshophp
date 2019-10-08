var gulp = require('gulp')

var concat = require('gulp-concat')
var uglify = require('gulp-uglify')
var gulpCleanCss = require('gulp-clean-css')

gulp.task('scripts', function() {
    return gulp.src([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'resources/js/*.js'
    ])
    .pipe(concat('app.js'))
    .pipe(uglify())
    .pipe(gulp.dest('web/js'))
})

gulp.task('css', function() {
    return gulp.src([
        'node_modules/bootstrap/dist/css/bootstrap.css',
        'resources/css/*.css'
    ])
    .pipe(concat('style.css'))
    .pipe(gulpCleanCss())
    .pipe(gulp.dest('web/css'))
})

gulp.task('default', gulp.series('scripts', 'css'))
