const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const autoPrefixer = require('autoprefixer');
const devConfig = require('./dev.config');
const CopyWebpackPlugin = require('copy-webpack-plugin');
const ImageminPlugin = require('imagemin-webpack-plugin').default;
const imageminMozjpeg = require('imagemin-mozjpeg');

const devMode = process.env.NODE_ENV !== 'production';

module.exports = {
	mode: 'development',
	entry: ['./src/js/index.js', './src/scss/main.scss'],
	output: {
		path: path.resolve(__dirname, 'dist'),
		filename: 'bundle.js'
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /(node_modules|bower_components)/,
				use: {
					loader: 'babel-loader',
					options: {
						presets: ['@babel/preset-env', '@babel/preset-react'],
						plugins: ['@babel/plugin-proposal-class-properties']
					}
				}
			},
			{
				test: /\.scss$/,
				use: [
					devMode ? 'style-loader' : MiniCssExtractPlugin.loader,
					'css-loader',
					{
						loader: 'postcss-loader',
						options: {
							plugins: [autoPrefixer({ browsers: ['> 1%', 'last 2 versions'] })]
						}
					},
					'sass-loader'
				]
			},
			{
				test: /\.(woff(2)?|ttf|eot|svg)(\?v=\d+\.\d+\.\d+)?$/,
				use: [
					{
						loader: 'file-loader',
						options: {
							name: '[name].[ext]',
							outputPath: 'fonts/',
							publicPath: `wp-content/themes/${devConfig.theme_slug}/dist/fonts`
						}
					}
				]
			}
		]
	},
	plugins: [
		new BrowserSyncPlugin({
			port: devConfig.port,
			proxy: devConfig.url,
			files: ['**/*.php'],
			reloadDelay: 0
		}),
		new MiniCssExtractPlugin({
			filename: '[name].css',
			chunkFilename: '[id].css'
		}),
		new CopyWebpackPlugin([
			{
				from: 'src/images/',
				to: 'images'
			},
			{
				from: 'src/videos/',
				to: 'videos'
			}
		]),
		new ImageminPlugin({
			test: /\.(jpe?g|png|gif|svg)$/i,
			options: {},
			plugins: [
				imageminMozjpeg({
					quality: 80,
					progressive: true
				})
			]
		})
	]
};
