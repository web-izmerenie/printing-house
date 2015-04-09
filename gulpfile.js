'use strict'
var gulp = require('gulp');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-minify-css');
var rename = require("gulp-rename");
var less = require("gulp-less");
var autoprefixer = require('gulp-autoprefixer');

gulp.task('default', function () {
	gulp.src('bitrix/templates/main/styles/src/**/*.less')
		.pipe(less())
		.pipe(concat('common.css'))
		.pipe(autoprefixer('last 5 versions', '> 1%', 'ie 9'))
		.pipe(minifyCSS())
		.pipe(rename('build.css'))
		.pipe(gulp.dest('bitrix/templates/main/styles/build/'));
});

gulp.task('watch', function(){
	gulp.watch('bitrix/templates/main/styles/src/**', ['default'])
});
