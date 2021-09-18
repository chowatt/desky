const path = require('path');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
var webpack = require('webpack');

module.exports = {
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/bundle.css'
    }),
  ],
  entry: './src/index.js',
  output: {
    filename: 'js/bundle.js',
    path: path.resolve(__dirname, 'webroot'),
  },
  resolve: {
      alias: {
        jquery: "jquery/src/jquery"
      }
  },
  module: {
    rules: [
      {
        test: /\.css$/i,
        use: [MiniCssExtractPlugin.loader, 'css-loader']
      },
    ],
  },
};