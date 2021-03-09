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
      filter: { // defaults to {}
        'none': 'none',
        'grayscale': 'grayscale(1)',
        'invert': 'invert(1)',
        'sepia': 'sepia(1)',
      },
      backdropFilter: { // defaults to {}
        'none': 'none',
        'blur': 'blur(20px)',
      },
      // eslint-disable-next-line no-unused-vars
      backgroundImage: theme => ({

        'pattern': "url('../images/flores-sidebar.jpg')",
      }),
    },
  },
  variants: {
    extend: {},
    filter: ['responsive', 'hover', 'focus'], // defaults to ['responsive']
    backdropFilter: ['responsive'], // defaults to ['responsive']
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-filters'),
  ],
};
