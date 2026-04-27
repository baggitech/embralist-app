import config from './config.js'
import browserSyncPackage from 'browser-sync'
const browserSync = browserSyncPackage.create()
import { spawn } from 'child_process'



// Watch for changes in SCSS files
browserSync.watch(`${config.path.scss}/**/*.scss`).on('change', () => {
  // Spawn a child process to run the 'styles:minified' npm script
  const stylesProcess = spawn('npm', ['run', 'styles'], {
    shell: true,
    stdio: 'inherit', // Inherit stdio to log npm script output in the same console
  })

  // When the npm script completes, reload CSS files in the browser
  stylesProcess.on('close', () => {
    browserSync.reload('*.css') // Only reload CSS files to prevent full page refresh
  })
})

// Watch for changes in JavaScript files
browserSync.watch(`${config.path.src_js}/**/*.js`).on('change', () => {
  // Spawn a child process to run the 'scripts:minified' npm script
  const scriptsProcess = spawn('npm', ['run', 'scripts'], {
    shell: true,
    stdio: 'inherit', // Inherit stdio to log npm script output in the same console
  })

  // When the npm script completes, reload the browser
  scriptsProcess.on('close', () => {
    browserSync.reload() // Reload the page in the browser
  })
})
