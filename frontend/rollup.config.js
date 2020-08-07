import {terser} from 'rollup-plugin-terser';
import resolve from '@rollup/plugin-node-resolve';
import babel from '@rollup/plugin-babel';
import postcss from "rollup-plugin-postcss";
import { eslint } from 'rollup-plugin-eslint';
import filesize from 'rollup-plugin-filesize';

const isProduction = process.env.NODE_ENV === "production";

export default {
  input: 'main.js',
  output: [
    {
      file: "dist/bundle.js",
      format: 'iife',
      sourcemap: true
    }
  ],
  plugins: [
    resolve(), // Needed for importing npm packages in our JS
    eslint({
      exclude: [
        'styles.css',
      ]
    }),
    babel({ babelHelpers: 'bundled' }), // ES6 support
    isProduction && terser(), // Minify our JS
    postcss({
      config: {
        path: "./postcss.config.js",
      },
      extensions: [".css"],
      extract: true,
      minimize: isProduction,
    }), // CSS
    filesize()
  ]
};
