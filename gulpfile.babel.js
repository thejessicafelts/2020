import {src, dest, watch, series, parallel} from 'gulp';
import yargs from 'yargs';
import sass from 'gulp-sass';
import cleanCss from 'gulp-clean-css';
import gulpif from 'gulp-if';
// import browserSync from "browser-sync";
const PRODUCTION = yargs.argv.prod;

/*
 * Go from this SCR Folder to a DIST folder within the WordPress directory...
 * src = C:\Development\2020\
 * dist = C:\Users\Jessica\Local Sites\2020\app\public\wp-content\themes\2020
 * 
*/

// Copy PHP Files to Build Themes Folders
export const copyPHP = () => {
  return src('app/**/*.php')

    // Copy PHP Files to Build Folder
    .pipe(dest('build'))

    // Copy PHP Files to Theme Folder
    .pipe(dest('../../Users/Jessica/Local Sites/2020/app/public/wp-content/themes/2020'))
}

// Copy Global Stylesheet to Build and Themes Folders
export const copyStyleCSS = () => {
  return (src('app/style.css'))

    // Copy style.css to Build Folder
    .pipe(dest('build'))
  
    // Copy style.css to Theme Folder
    .pipe(dest('../../Users/Jessica/Local Sites/2020/app/public/wp-content/themes/2020'))
}

// Copy Theme Screenshot to Build and Themes Folders
export const copyScreenshot = () => {
  return(src('app/screenshot.jpg'))

    // Copy screenshot.jpg to Build Folder
    .pipe(dest('build'))

    // Copy screenshot.jpg to Themes Folder
    .pipe(dest('../../Users/Jessica/Local Sites/2020/app/public/wp-content/themes/2020'))
}

// Copy Styles to Build and Themes Folders
export const styles = () => {
  return src('app/scss/main.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulpif(PRODUCTION, cleanCss({compatibility:'ie8'})))
    
    // Copy File to Build Folder
    .pipe(dest('build/css'))

    // Copy File to Theme Folder
    .pipe(dest('../../Users/Jessica/Local Sites/2020/app/public/wp-content/themes/2020/css'))
}

// Watching for Changes
export const watchForChanges = () => {
  watch('app/**/*.php', copyPHP);
  watch('app/scss/**/*.scss', styles);
  // watch('app/images/**/*.{jpg,jpeg,png,svg,gif}'); // Need to add task for this
  // watch('app/js/**/*.js'); // Need to add task for this
  watch('app/style.css', copyStyleCSS);
  watch('app/screenshot.jpg', copyScreenshot);
}