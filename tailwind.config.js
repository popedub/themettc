const defaultTheme = require('tailwindcss/defaultTheme')
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
      colors: {
        'rojo': {
          DEFAULT: '#f53d5c',
        },
      },
      fontFamily: {
        sans: ['Nunito Sans', ...defaultTheme.fontFamily.sans],
      },
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
      backgroundImage: theme => ({
        'pattern': "url('../images/ventana.svg')",
        'marco': "url('../images/ventana-parallax.svg')",
      }),

    },
  },
  variants: {
    extend: {},
    filter: ['responsive', 'hover', 'focus'], // defaults to ['responsive']
    backdropFilter: ['responsive'], // defaults to ['responsive']
    backgroundColor: ['even', 'odd'],
  },
  plugins: [
    require('@tailwindcss/typography'),
    require('tailwindcss-filters'),
    require('tailwindcss-pseudo-elements'),
  ],
};
