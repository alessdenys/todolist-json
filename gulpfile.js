const gulp = require("gulp");

class tailwindExtractor {
  static extract(content) {
    return content.match(/[\w-/:]+(?<!:)/g);
  }
}

gulp.task("css", () => {
  const postcss = require("gulp-postcss");
  const purgecss = require("gulp-purgecss");
  return gulp
    .src("Assets/css/src/style.css")
    .pipe(postcss([require("tailwindcss"), require("autoprefixer")]))
    .pipe(
      purgecss({
        content: ["index.php"],
        extractors: [
          {
            extractor: tailwindExtractor,
            extensions: ["php"]
          }
        ]
      })
    )
    .pipe(gulp.dest("Assets/css/dist/"));
});
