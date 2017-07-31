/**
 * Created by Артём on 30.07.2017.
 */
var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('sass',function () {
    gulp.src('./resources/assets/sass/app.scss')
        .pipe(sass().on('error',sass.logError))
        .pipe(gulp.dest('./public/css'));
});

gulp.task('sass',function () {
    gulp.watch('./resources/assets/sass/my_styles/**/*.scss',['sass']);

});