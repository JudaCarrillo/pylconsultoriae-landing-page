const gulp = require("gulp");
const cachebust = require("gulp-cache-bust");

gulp.task("cache", (callback) => {
  gulp
    .src("./public/**/*.php")
    .pipe(
      cachebust({
        type: "timestamp",
      })
    )
    .pipe(gulp.dest("./public"))
    .on("end", callback);
});
