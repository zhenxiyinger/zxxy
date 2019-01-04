let mix = require('laravel-mix');

const path = require('path');

mix.webpackConfig({
  resolve: {
    extensions: ['.js', '.vue', '.json'],
    alias: {
      'vue$': 'vue/dist/vue.esm.js',
      '@': path.join(__dirname, 'resources', 'assets', 'admin')
    }
  },
  output: {
    chunkFilename: 'js/[name].[chunkhash].js',
  },
});

mix.js('resources/assets/admin/main.js', 'public/js');
