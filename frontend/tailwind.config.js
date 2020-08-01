module.exports = {
  purge: [
    './components/**/*.hbs',
    './components/**/**/*.hbs',
  ],
  theme: {
    extend: {
      container: {
        center: true,
        padding: '2rem',
      },
    }
  },
  variants: {},
  plugins: []
};
