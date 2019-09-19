// Defining requirements
var gulp = require('gulp');
var del = require('del');
var plumber = require('gulp-plumber');
var sourcemaps = require('gulp-sourcemaps');
var sass = require('gulp-sass');
var postcss = require('gulp-postcss');

var autoprefixer = require('autoprefixer');


// Configuration file to keep your code DRY
var cfg = require('./gulpconfig.json');
var paths = cfg.paths;


// Run: gulp copy-assets
// copy all needed dependency assets files from bower_component assets
// to themes /js, /scss and /fonts folder. 
// this task runs after npm install finished
gulp.task('copy-assets', (done) => {
	// copy Bootstrap 4 JS files
	gulp
		.src(`${paths.node}bootstrap/dist/js/**/*.js`)
		.pipe(gulp.dest(`${paths.dev}/js/bootstrap4`));

	// copy Bootstrap 4 SCSS files
	gulp
		.src(`${paths.node}bootstrap/scss/**/*.scss`)
		.pipe(gulp.dest(`${paths.dev}/sass/bootstrap4`));

	// copy all Font Awesome Fonts
	gulp
		.src(`${paths.node}font-awesome/fonts/**/*.{ttf,woff,woff2,eot,svg}`)
		.pipe(gulp.dest(`${paths.dev}/fonts`));

	// copy all Font Awesome SCSS files
	gulp
		.src(`${paths.node}font-awesome/scss/*.scss`)
		.pipe(gulp.dest(`${paths.dev}/sass/fontawesome`));

	// finish
	done();
});

// Run: gulp clean-src
// delete /src directory (with source JS /SCSS files)
gulp.task('clean-src', () => {
	return del(`${paths.dev}`);
});

// Run: gulp sass
// Compiles SCSS files in CSS
gulp.task('compile-sass', () => {
	var stream = gulp
		.src(paths.sass + '/*.scss')
		.pipe(
			plumber({
				errorHandler: function(err) {
					console.log(err);
					this.emit('end');
				}
			})
		)
		.pipe(sourcemaps.init({ loadMaps: true }))
		.pipe(sass({ errLogToConsole: true }))
		.pipe(postcss([autoprefixer()]))
		.pipe(sourcemaps.write(undefined, { sourceRoot: null }))
		.pipe(gulp.dest(paths.css));
	return stream;
});

// Delete /dist folder
gulp.task('clean-dist-destination', () => {
	return del('dist');
});

// Delete /docker/html/wp-content/themes/unstrapped folder
gulp.task('clean-dev-destination', () => {
	return del('docker/html/wp-content/themes/unstrapped');
});

// Package all required files for distribution as Wordpress theme
gulp.task('package-dist-files', () => {	
	return gulp.src(paths.dist_items,{ buffer: true })
		.pipe(gulp.dest(paths.dist));
});

// Package all required files for distribution to dev Wordpress location
gulp.task('package-dev-dist-files', () => {	
	return gulp.src(paths.dist_items,{ buffer: true })
		.pipe(gulp.dest(paths.dev_dist));
});

// Run: gulp dist
// re-package all required files for distribution as Wordpress theme
gulp.task('dist', gulp.series('clean-dist-destination','package-dist-files'));

// Run: gulp dist-dev
// re-package all required files for distribution as Wordpress theme
gulp.task('dist-dev', gulp.series('clean-dev-destination','package-dev-dist-files'));

// Default task
gulp.task('default', gulp.series('clean-src','copy-assets'));