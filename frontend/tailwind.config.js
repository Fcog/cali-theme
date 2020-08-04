module.exports = {
  purge: [
    './src/components/**/*.hbs',
    './src/components/**/**/*.hbs',
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: '2rem',
      }
    }
  },
  variants: {},
  plugins: []
};
