var styleguide = require('handlebars-component-styleguide');

styleguide({
  components: './components',
  staticLocalDir: './dist',
  staticPath: '/dist',
  stylesheets: ['bundle.css'],
  scripts: ['bundle.js'],
});
