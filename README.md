# Cali Wordpress theme

Cali is a starter theme for WordPress. 

It focuses on UI component development using the [Atomic design methodology](https://atomicdesign.bradfrost.com/chapter-2/).

Tech used:
- [Handlebars](https://handlebarsjs.com/) 
- [TailwindCSS](https://tailwindcss.com/)
- [Rollup](https://rollupjs.org/guide/en/) 
- [PostCSS](https://postcss.org/) 
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
    
## Build
    cd frontend && yarn build    

Production ready assets.

## Advantages over a normal theme approach

### 1. Better UI component building and management

The Atomic methodology can help on classifying the components.

Components are built using a templating syntax from a view engine library called [Handlebars](https://handlebarsjs.com/), which uses a mix of HTML and placeholders for showing data and having control structures like _if_ conditionals or _for_ loops.

Placeholders will make your component's much cleaner than the usual PHP/HTML mix.

A view engine will also allow for keeping [DRY](https://en.wikipedia.org/wiki/Don%27t_repeat_yourself) components, like having a unique wrapper component using [partial blocks](https://handlebarsjs.com/guide/partials.html#partial-blocks) and reuse it in several sub components.

### 2. Faster frontend development

This theme includes a component's styleguide where you can isolate your component's and use it as a development server that refreshes automatically when a change is detected in the HTML, CSS and JS files.

The same Handlebars files are parsed in PHP and used directly by WordPress.

Having a templating engine like Handlebars means that the components can be used in PHP and JS.

Javascript can be written in ES6 and transpile to ES5 with Babel for IE11 support. 

Use nesting and imports in the CSS. It's similar like using SASS. Althought, custom CSS will barely be created because the design is created using [Tailwind's functional CSS](https://rangle.io/blog/styling-with-functional-css/).

### 3. Cleaner Code

A view engine will force developers to separate business logic from Views as PHP is not allowed in the components templates.

Stylelint and ESLint are triggered on every file change and will show any warnings or errors while coding. 
