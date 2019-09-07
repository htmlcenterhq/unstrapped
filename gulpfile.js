// Defining requirements
var gulp = require('gulp');
var del = require('del');

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

// Delete /dist folder
gulp.task('clean-dist-destination', () => {
	return del(`${paths.dist}`);
});

// Package all required files for distribution as Wordpress theme
gulp.task('copy-dist-files', (done) => {	
	gulp.src([
		'*',
		`!${paths.vendor}`,
		`!${paths.node}`,
		`!${paths.dev}`,
		`!${paths.sass}`,
		'!readme.md',
		'!package.json',
		'!package-lock.json',
		'!gulpfile.js',
		'!gulpconfig.json',
		'!composer.json',
		'!composer.lock',
		'!test.sh',
		'!.travis.yml',
		'!jshintignore',
		'!phpcs.xml'
	],{ buffer: true })
	.pipe(gulp.dest(paths.dist));
	
	// done
	done();
});

// Run: gulp dist
// re-package all required files for distribution as Wordpress theme
gulp.task('dist', gulp.series('clean-dist-destination','copy-dist-files'));

// Default task
gulp.task('default', gulp.series('clean-src','copy-assets'));