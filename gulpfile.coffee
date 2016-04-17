# -------------------------------------------------------------
# Load plugins
# -------------------------------------------------------------
gulp = require 'gulp'
browserSync = require 'browser-sync'
sass = require 'gulp-sass'

# -------------------------------------------------------------
# Task: BrowserSync
# -------------------------------------------------------------
gulp.task 'browserSync', ->
  browserSync {
    proxy: 'localhost/events'
    snippetOptions:
      rule:
        match: /$/
  }

# -------------------------------------------------------------
# Task: Sass
# -------------------------------------------------------------
gulp.task 'sass', ->
  gulp.src './assets/layout/*.sass'
  .pipe sass({indentedSyntax: true})
  .pipe gulp.dest './assets/layout/'


gulp.task 'sass:watch', ->
  gulp.watch './assets/layout/*.sass', ['sass']
# -------------------------------------------------------------
# Task: Default / Watch
# -------------------------------------------------------------
gulp.task 'default', ['browserSync'], ->
  gulp.watch './**/*.php', browserSync.reload
  gulp.watch './layout/**/*.css, !node_modules', browserSync.reload
  gulp.watch './code/**/*.js', browserSync.reload
