'use strict';

const componentFolder = '/src/components';

/* Create a new Fractal instance and export it for use elsewhere if required */
const fractal = module.exports = require('@frctl/fractal').create();

/* Set the title of the project */
fractal.set('project.title', 'Styleguide');

/* Tell Fractal where the components will live */
fractal.components.set('path', __dirname + componentFolder);

/* Tell Fractal where the documentation pages will live */
fractal.docs.set('path', __dirname + '/src/docs');

/* Specify a directory of static assets */
fractal.web.set('static.path', __dirname + '/src/assets');

/* Set the static HTML build destination */
fractal.web.set('builder.dest', __dirname + '/dist/styleguide');

/* Default HTML document wrapper */
fractal.components.set('default.preview', '@preview');

/* Global component context data */
fractal.components.set('default.context', {
  'title': 'Lorem Ipsum',
  'url': 'https://franciscogiraldo.com'
});

/* Create the components mapping file for use in WP */
const path = require('path');
const fs = require('fs');

function exportPaths() {
  const map = {};
  for (let item of fractal.components.flatten()) {
    map[`@${item.handle}`] = path.relative(process.cwd() + componentFolder, item.viewPath);
  }
  fs.writeFileSync(
    __dirname + '/src/components-map.json',
    JSON.stringify(map, null, 2), 'utf8'
  );
}

fractal.components.on('updated', function(eventData) {
  if ( Object.keys(eventData).length !== 0 ) {
    exportPaths();
  }
});

fractal.cli.command('pathmap', function(opts, done) {
  exportPaths();
  done();
});

