'use strict';

var gulp = require('gulp');
var stylus = require('gulp-stylus');
var concat = require('gulp-concat');
var watch = require('gulp-watch');

gulp.task('compress', function () {
	gulp.src('./css/main.styl')
		.pipe(stylus({
			compress: true
		}))
		.pipe(gulp.dest('./css/'));
});

gulp.task('concat', function() {
	return gulp.src('./css/*.css')
		.pipe(concat('style.css'))
		.pipe(gulp.dest('./'));
});

gulp.task('scripts', function() {
	return gulp.src('./js/*.js')
		.pipe(concat('all.js'))
		.pipe(gulp.dest('./'));
});

gulp.task('watch', function() {
	gulp.watch(['./css/main.styl', './js/z-custom.js'], ['compress', 'concat', 'scripts']);
});

// Default gulp task to run
gulp.task('default', ['compress', 'concat', 'scripts', 'watch']);
