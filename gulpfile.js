var gulp = require('gulp');
var sass = require('gulp-sass');
var connect = require('gulp-connect-php');
var browserSync = require('browser-sync');

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
    gulp.watch("sass/**/*.scss",["sass"]);
    gulp.watch("styleguide/**/*.php",["reload"]);
});

gulp.task('sass', function () {
    gulp.src('sass/**/*.scss')
        .pipe(sass({
            style : 'expanded'
        }))
        .pipe(gulp.dest('css/'))
        .pipe(gulp.dest('styleguide/css/'));
});

gulp.task('init', function() {
    gulp.src('bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js')
        .pipe(gulp.dest('styleguide/js'));
} );