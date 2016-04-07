var gulp = require('gulp');
var sass = require('gulp-sass');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync');
var php2html = require("gulp-php2html");

gulp.task('connect-sync', function() {
    connect.server({
        port:8000,
        base:'styleguide'
    }, function (){
        browserSync({
            proxy: 'localhost:8000'
        });
    });
});

gulp.task('reload', function(){
    browserSync.reload();
});

gulp.task("default",['init','sass','connect-sync'], function() {
    gulp.watch("sass/**/*.scss",["sass","cp_assets","php2html"]);
    gulp.watch("js/**/*.js",["cp_assets","php2html"]);
    gulp.watch("styleguide/**/*.php",["reload","cp_assets","php2html"]);
});

gulp.task('sass', function () {
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            style : 'expanded'
        }))
        .pipe(gulp.dest('css/'));
});

gulp.task('cp_assets', function () {
    gulp.src('js/**/*.js').pipe(gulp.dest('styleguide/js/'));
    gulp.src('css/**/*.css').pipe(gulp.dest('styleguide/css/'));
    gulp.src('fonts/**/*.*').pipe(gulp.dest('styleguide/fonts/'));
    gulp.src('images/**/*.*').pipe(gulp.dest('styleguide/images/'));
});

gulp.task('php2html',function(){
    gulp.src("styleguide/index.php")
        .pipe(php2html())
        .pipe(gulp.dest("./"));
});

gulp.task('init', function() {
    gulp.src('bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js')
        .pipe(gulp.dest('styleguide/js'));
} );