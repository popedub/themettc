module.exports = {
  purge: {
    content: [
      './app/**/*.php',
      './resources/**/*.php',
      './resources/**/*.vue',
      './resources/**/*.js',
    ],
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {},
      inset: {
        '1/12': '8.333333%',
        '2/12': '16.666667%',
        '3/12': '24.999999%',
      },
      // eslint-disable-next-line no-unused-vars
      backgroundImage: theme => ({

        'pattern': "url('../images/flores-sidebar.jpg')",
      }),
    },
  },
  variants: {
    extend: {},
  },
  plugins: [require('@tailwindcss/typography')],
};
