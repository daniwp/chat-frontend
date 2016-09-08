var gulp = require('gulp'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify'),
    autoprefixer = require('gulp-autoprefixer'),
    imagemin = require('gulp-imagemin'),
    cache = require('gulp-cache'),
    rename = require('gulp-rename'),
    notify = require('gulp-notify'),
    livereload = require('gulp-livereload'),
    concat = require('gulp-concat');
babel = require('gulp-babel');


gulp.task('styles', function () {
    return gulp.src('assets/sass/**/*.scss')
        .pipe(sass({outputStyle: 'compressed'}).on('error', function (err) {
            return notify().write(err);
        }))
        .pipe(autoprefixer('last 2 version'))
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dist/css'))
});

gulp.task('scripts', function () {
    return gulp.src([
        'assets/components/jquery/dist/jquery.min.js',
        'assets/components/bootstrap-sass/assets/javascripts/bootstrap.min.js',
        'assets/js/**/*.js'
    ])
        .pipe(babel({presets: ['es2015']}))
        .pipe(concat('main.js'))
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('dist/js'))
});

gulp.task('images', function () {
    return gulp.src('assets/img/**/*')
        .pipe(cache(imagemin({optimizationLevel: 5, progressive: true, interlaced: true})))
        .pipe(gulp.dest('dist/img'))
});


gulp.task('default', function () {
    gulp.start(
        'styles',
        'scripts',
        'images',
        'watch'
    );
});

gulp.task('watch', function () {
    livereload.listen();
    gulp.watch('assets/sass/**/*.scss', ['styles']);
    gulp.watch('assets/js/**/*.js', ['scripts']);
    gulp.watch('dist/js/**/*.js', livereload.reload);
    gulp.watch('dist/css/**/*.css', livereload.reload);
    gulp.watch('**/*.html', livereload.reload);
});