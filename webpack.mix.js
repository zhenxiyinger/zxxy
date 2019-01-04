const mix = require('laravel-mix');
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
    filename: '[name].js',
    chunkFilename: 'js/[id].[chunkhash].js',
    publicPath: '/'
  },
});

mix.js('resources/assets/admin/main.js', 'public/js');

//如果是生产环境，加上版本号
if (mix.inProduction()) {
  mix.version();
}
