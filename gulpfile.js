
// Load plugins
var gulp            = require('gulp'),
    concat          = require('gulp-concat');

gulp.task('parts_scripts', function() {
    return gulp.src([
        './js/parts/topbar-default.js'
        ])
        .pipe(concat('harbour-parts.js'))
        .pipe(gulp.dest('./js'));
});

// Watch Task
gulp.task('default', ['parts_scripts'], function () {
    gulp.watch("./js/parts/*.js", ['parts_scripts']);
});