import gulp from "gulp";
import sass from "gulp-sass";
import browserSync from "browser-sync";
import autoprefixer from "gulp-autoprefixer";
import sourcemaps from "gulp-sourcemaps";
import uglify from 'gulp-uglify';

const BrowserSync = done => {
  browserSync.init({
    proxy: "localhost",
    notify: false,
    open: false
  });

  gulp.watch("./**/*.php").on("change", () => {
    browserSync.reload();
  });
  done();
};

const sassTask = () => {
  return gulp
    .src("./sass/**/*.scss")
    // .pipe(sourcemaps.init())
    .pipe( sass({outputStyle: 'compressed'}).on("error", sass.logError))
    .pipe(autoprefixer({browsers:['last 10 versions'],cascade: false}))
    // .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest("./css"))
    .pipe(browserSync.stream());
};

const jsMinify = () => {
  return gulp
    .src("./dev-js/**/*.js")
    // .pipe(sourcemaps.init())
    .pipe(uglify())
    .pipe(gulp.dest("./js"))
};

const watchSass = done => {
  gulp.watch("./sass/**/*.scss", sassTask);
  done();
};

const defaultTasks = gulp.series(watchSass, BrowserSync);

export { watchSass, BrowserSync,jsMinify };

export default defaultTasks;
