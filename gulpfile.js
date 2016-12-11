// require all the dependencies
var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var notifier = require('gulp-notify');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');

// path definitions
var paths = {
	sass: {
		src: './resources/sass/app.scss',
		watch: ['./resources/sass/*.scss', './resources/sass/*/*.scss'],
		dest: './public/css/'
	},
	js: {
		src: ['./public/components/jquery/dist/jquery.js', './public/components/materialize/dist/js/materialize.js', './resources/js/*.js', './resources/js/*/*.js'],
		dest: './public/js/'
	},
	materialize: {
		sass: {
			src: './public/components/materialize/sass/materialize.scss',
			dest: './public/css/'
		},
		js: {
			src: './public/components/materialize/dist/js/materialize.min.js',
			dest: './public/js/'
		},
		fonts: {
			src: './public/components/materialize/dist/fonts/roboto/*',
			dest: './public/fonts/roboto/'
		}
	}
};

var notify = function(error) {
	console.log(error);
	notifier().write(error);
};

// task definitions
var tasks = {
	// converts sass to css
	sass: function() {
		gulp.src(paths.sass.src)
			.pipe(concat('app.min.css'))
			.pipe(sass({
				outputStyle: 'compressed'
			})).on('error', notify)
			.pipe(gulp.dest(paths.sass.dest));
		gulp.src(paths.materialize.sass.src)
			.pipe(concat('materialize.min.css'))
			.pipe(sass({
				outputStyle: 'compressed'
			}))
			.pipe(gulp.dest(paths.materialize.sass.dest));
	},
	// and concat javascripts
	js: function() {
		gulp.src(paths.js.src)
			.pipe(concat('app.min.js'))
			.pipe(uglify()).on('error', notify)
			.pipe(gulp.dest(paths.js.dest));
	},
	// move fonts to public folder
	fonts: function() {
		gulp.src(paths.materialize.fonts.src)
			.pipe(gulp.dest(paths.materialize.fonts.dest));
	}
};

// gulp tasks definitions
gulp.task('sass', tasks.sass());
gulp.task('js', tasks.js());
gulp.task('fonts', tasks.fonts());

// development watch task
gulp.task('watch', function() {
	watch(paths.sass.watch, function() {
		tasks.sass();
	});
	watch(paths.js.src, function() {
		tasks.js();
	});
});

// main build task
gulp.task('build', ['sass', 'js', 'fonts']);
