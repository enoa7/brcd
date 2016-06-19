var gulp = require('gulp');
var plumber = require('gulp-plumber');
var sass = require('gulp-sass');
var rename = require('gulp-rename');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var concat = require('gulp-concat');
var browserSync = require('browser-sync');
var uglify = require('gulp-uglify');
var reload = browserSync.reload;
// var livereload = require('gulp-livereload');

/* path to wp custom theme */
var theme_path = 'backend/wp-content/themes/brcd-film';

/* ========================================================
 * Tasks with Browser Sync
 * ======================================================== */
gulp.task('browserSync', function() {

    var files = [
        '*.css',
        '*.php',
        './inc/*.php',
        './js/*.js',
        './layouts/*.css',
        './sass/*.scss',
        './sass/**/*.scss',
        './template-parts/*.php',
    ];

    browserSync.init(files, {
        proxy: "http://localhost/brcd/backend",
        notify: 'false'
    });
});

gulp.task('sass', function() {
    return gulp.src('./sass/style.scss')
        .pipe(plumber({
            errorHandler: function (err) {
                console.log(err);
                this.emit('end');
            }
        }))
        .pipe(sourcemaps.init())
        .pipe(sass({ outputStyle: 'compressed' }))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./')) //output the file at root (app/)
        .pipe(reload({ stream: true }));
});

gulp.task('js', function() {
    return gulp.src([
            './node_modules/jquery/dist/jquery.js',
            './node_modules/fastclick/lib/*.js',
            './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            './node_modules/slick-carousel/slick/slick.js',
            './node_modules/jquery/dist/jquery.matchHeight.js',
            './js/module/*.js',
            './js/main.js'
        ])
        .pipe(concat('main.js'))
        .pipe(gulp.dest('./'))
        .pipe(uglify())
        .pipe(concat('main.min.js'))
        .pipe(gulp.dest('./'))
        .pipe(reload({ stream: true }));
});

gulp.task('kodein', function(){
    return gulp.src('./lib/kodein-sass/kodein/**/*')
        .pipe(gulp.dest('./sass'))
});


gulp.task('default', ['sass', 'js', 'browserSync'], function() {
    gulp.watch('*.scss', {cwd: 'sass/'}, ['sass']);
    gulp.watch('**/*.scss', {cwd: 'sass/'}, ['sass']);
    gulp.watch('*.js', {cwd: 'js/'}, ['js']);
    gulp.watch('**/*.js', {cwd: 'js/'}, ['js']);
});
