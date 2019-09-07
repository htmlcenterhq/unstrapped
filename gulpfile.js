// Defining requirements
var gulp = require('gulp');
var del = require('del');

// Configuration file to keep your code DRY
var cfg = require('./gulpconfig.json');
var paths = cfg.paths;


// Deleting any file inside the /src folder
gulp.task('clean-source', function() {
	return del(['src/**/*']);
});


// Run: gulp copy-assets
// copy all needed dependency assets files from bower_component assets
// to themes /js, /scss and /fonts folder. 
// this task runs after npm install finished

gulp.task('copy-assets', function(done) {
	// copy all Bootstrap 4 JS files
	var stream = gulp
		.src(`${paths.node}bootstrap/dist/js/**/*.js`)
		.pipe(gulp.dest(`${paths.dev}/js/bootstrap4`));

	// copy all Bootstrap 4 SCSS files
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

// Run: gulp clean-vendor-assets
// delete directory with source JS /SCSS files
gulp.task('clean-vendor-assets', function() {
	return del(`${paths.dev}`);
});

// Delete /dist folder
gulp.task('clean-dist', function() {
	return del(`${paths.dist}`);
});

// Default task
gulp.task('default', gulp.series('clean-vendor-assets','copy-assets'));