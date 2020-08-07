module.exports = {
  plugins: [
    require("postcss-preset-env"),
    require("postcss-import")({
      plugins: [
        require("stylelint")
      ]
    }),
    require("tailwindcss"),
    require("autoprefixer"),
    require("postcss-nested"),
    require("postcss-reporter")({ clearReportedMessages: true })
  ],
};
