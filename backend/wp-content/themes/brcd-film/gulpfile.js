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
var merge = require('gulp-rename');
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
        notify: 'true'
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
            // './node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
            './node_modules/slick-carousel/slick/slick.js',
            './node_modules/jquery/dist/jquery.matchHeight.js',
            './node_modules/jquery-modal/jquery.modal.js',
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


// Create a list utility task and merge them
gulp.task('utility', function(){

    // // move slick fonts to the fonts under custom themes folder
    // var slick_fonts = gulp.src('node_modules/slick-carousel/slick/fonts/*')
    //     .pipe(gulp.dest( path + '/fonts'));

    // // move ajax loader to custom themes folder
    // var ajax_loader = gulp.src('node_modules/slick-carousel/slick/ajax-loader.gif')
    //     .pipe(gulp.dest(path));

    // // move kode-in submodules to the sass folder under custom themes folder
    var kodeinSass = gulp.src('lib/kodein-sass/kodein/**/*')
        .pipe(gulp.dest('./sass/'));

    // // move font_awesome fonts to themes root folder
    // var font_awesome = gulp.src('node_modules/font-awesome/fonts/**/*')
    //     .pipe(gulp.dest('sneaky/wp-content/themes/fonts/'))

    var jqueryModalCSS = gulp.src('./node_modules/jquery-modal/jquery.modal.css')
        .pipe(rename('_jquery.modal.scss'))
        .pipe(gulp.dest('./sass/'))
        
    return merge(jqueryModalCSS, kodeinSass);
    // return merge(slick_fonts, ajax_loader, kodein_sass, font_awesome);
})

gulp.task('default', ['sass', 'js', 'browserSync'], function() {
    gulp.watch('*.scss', {cwd: 'sass/'}, ['sass']);
    gulp.watch('**/*.scss', {cwd: 'sass/'}, ['sass']);
    gulp.watch('*.js', {cwd: 'js/'}, ['js']);
    gulp.watch('**/*.js', {cwd: 'js/'}, ['js']);
});
