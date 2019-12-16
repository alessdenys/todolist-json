const { watch, src, dest } = require("gulp");
const tailwindConfig = "tailwind.config.js"; /* Path to Tailwind config */
const mainCSS = "src/style.css"; /* Path to main stylesheet */
const mainPHP = "index.php";

/**
 * Custom PurgeCSS Extractor
 * https://github.com/FullHuman/purgecss
 */

class TailwindExtractor {
  static extract(content) {
    return content.match(/[A-z0-9-:\/]+/g);
  }
}

const css = () => {
  const atimport = require("postcss-import");
  const postcss = require("gulp-postcss");
  const tailwindcss = require("tailwindcss");
  const purgecss = require("gulp-purgecss");

  return src(mainCSS)
    .pipe(postcss([atimport(), tailwindcss(tailwindConfig)]))
    .pipe(
      purgecss({
        content: ["**/*.php"],
        extractors: [
          {
            extractor: TailwindExtractor,
            extensions: ["css"]
          }
        ]
      })
    )
    .pipe(dest("dist/"));
};

exports.css = css;
exports.default = () => {
  watch(mainPHP, css);
};
