# Cali Wordpress theme

Cali is a starter theme for WordPress. 

It focuses on UI component development using the [Atomic design methodology](https://atomicdesign.bradfrost.com/chapter-2/).

Tech used:
- [Handlebars view engine](https://handlebarsjs.com/)
- [TailwindCSS](https://tailwindcss.com/)
- [Rollup](https://rollupjs.org/guide/en/) 
- [Fractal Live components styleguide](https://fractal.build/)
- [Javascript ES6](http://es6-features.org/#Constants)
- [Linters](https://sourcelevel.io/blog/what-is-a-linter-and-why-your-team-should-use-it)

## Installation
Clone the repo in the themes folder.

then execute:

    composer install && cd frontend && yarn

## Development
    cd frontend && yarn start
    
This will watch for changes in any file and rebuild the assets. 

It also starts a server for the Styleguide with BrowserSync.    
    
## Linting
    cd frontend && yarn lint
    
Checks your JS and CSS.    
    
## Build
    cd frontend && yarn build    

Production ready assets.
