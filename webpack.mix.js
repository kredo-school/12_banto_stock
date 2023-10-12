const mix = require('laravel-mix');
const { VueLoaderPlugin } = require('vue-loader');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .version();

mix.webpackConfig({
   module: {
       rules: [
           {
               test: /\.vue$/,
               loader: 'vue-loader'
           },
           // 他のルールもここに追加できます
       ]
   },
   plugins: [
       new VueLoaderPlugin()
   ]
});
