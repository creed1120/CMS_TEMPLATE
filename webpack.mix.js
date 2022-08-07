let mix = require('laravel-mix');

mix.js('src/js/app.js', 'js')
   .sass('src/css/app.scss', 'css')
   .setPublicPath('dist');
   
mix.browserSync({
   proxy:'cms_template.test',
   files: [
      '**/*.css',
      '**/*.scss',
      '**/*.js',
	  '**/*.php',
	],
});