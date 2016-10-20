const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');
require('laravel-elixir-replace');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application as well as publishing vendor resources.
 |
 */

/*
elixir(mix => {

  var replacements = [
      ['themes/default/assets/fonts/', 'fonts/']
  ];
  var semanticPath = 'node_modules/semantic-ui-less';

  mix.copy(semanticPath + '/_site', 'resources/assets/semantic/_site')
    .copy(semanticPath + '/definitions', 'resources/assets/semantic/definitions')
    .copy(semanticPath + '/themes', 'resources/assets/semantic/themes')
    .copy(semanticPath + '/themes/default/assets/fonts', 'public/fonts')
    .less('../semantic/app.less') // For Semantic UI
    .replace('public/css/app.css', replacements) // This alters the font paths in generated CSS to fix problems caused by Semantic UI LESS
    .webpack('app.js')
    .scripts([
        'resources/assets/semantic/definitions/modules/transition.js',
        'resources/assets/semantic/definitions/modules/dropdown.js',
    ], 'public/js/semantic.js', './');
});
*/

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});
