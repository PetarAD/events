# -------------------------------------------------------------
# Load plugins
# -------------------------------------------------------------
gulp = require 'gulp'
browserSync = require 'browser-sync'

# -------------------------------------------------------------
# Task: BrowserSync
# -------------------------------------------------------------
gulp.task 'browserSync', ->
  browserSync {
    proxy: 'localhost/share'
    snippetOptions:
      rule:
        match: /$/
  }

# -------------------------------------------------------------
# Task: Default / Watch
# -------------------------------------------------------------
gulp.task 'default', ['browserSync'], ->
  gulp.watch './**/*.php', browserSync.reload
  gulp.watch './layout/**/*.css', browserSync.reload
  gulp.watch './code/**/*.js', browserSync.reload
