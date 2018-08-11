let gulp = require('gulp'),
    browserSync = require('browser-sync').create(),
    sass = require('gulp-sass'),
    gutil = require('gulp-util'),
    ftp = require('vinyl-ftp'),
    concatCss = require('gulp-concat-css'),
    prefixer = require('gulp-autoprefixer');

gulp.task('serve', ['sass'], () => {

    browserSync.init({
        server: "./src"
    });

    gulp.watch("src/sass/**/*.sass", ['sass']);
    gulp.watch("src/*.html,src/*.js").on('change', browserSync.reload);

});

gulp.task('sass', () => {
    return gulp.src("src/sass/**/*.sass")
        .pipe(sass())
        .pipe(prefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(concatCss('style.css'))
        .pipe(gulp.dest("src/css"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['serve']);


gulp.task('ftp', () => {

    let conn = ftp.create({
        host: '***',
        user: '***',
        password: '***',
        log: gutil.log
    });

    let globs = [
        'src/**',
    ];

    // using base = '.' will transfer everything to /public_html correctly
    // turn off buffering in gulp.src for best performance

    return gulp.src(globs, { base: '.', buffer: false })
        .pipe(conn.newer('/www/maksleskin.ru/vr_study/gulp')) // only upload newer files
        .pipe(conn.dest('/www/maksleskin.ru/vr_study/gulp'));

});