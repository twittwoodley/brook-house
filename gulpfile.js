var gulp 		 = require('gulp');
var autoprefixer = require('gulp-autoprefixer');
//var browser-sync = require('browser-sync').create();

//previous
gulp.task('styles', function() {
	gulp.src('css/main.css')
	.pipe(autoprefixer({
            browsers: ['last 3 versions'],
            cascade: false
        }))
	.pipe(gulp.dest('build'))
});

gulp.task('watch', function(){
	gulp.watch('*', ['styles']);
});

//new

