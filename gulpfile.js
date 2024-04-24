const gulp          = require('gulp');
const pump          = require('pump');
const sass          = require('gulp-sass');
const autoprefixer  = require('gulp-autoprefixer');
const sourcemaps    = require('gulp-sourcemaps');

const sassConfig = {
	options: {
    includePaths: [
      'node_modules/foundation-sites/scss',
      'theme/scss'
    ],
		outputStyle: 'compressed'
	}
};

gulp.task('sass', (cb) => {
  pump([
      gulp.src('./theme/*.scss'),
      sourcemaps.init(),
      sass(sassConfig.options),
      autoprefixer({
        grid: true,
        overrideBrowserslist: ['>1%']
      }),
      sourcemaps.write('.'),
      gulp.dest('./theme')
    ], cb);
});

gulp.task('watch', () => {
  gulp.watch(['theme/*.scss','theme/scss/*'], ['sass']);
});

gulp.task('default', ['watch','sass']);
gulp.task('build', ['sass']);
