const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: ['./resources/**/*.blade.php', './resources/**/*.js', './resources/**/*.vue'],
  theme: {
    extend: {
      colors: {
        'srvn-orange': '#ff460d',
        'srvn-gray': '#f3f3f3',
      },
      fontFamily: {
        sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
        smooch: ['Smooch', ...defaultTheme.fontFamily.sans]
      },
      spacing: {
        '13': '3.25rem',
        '15': '3.75rem',
        '17': '4.25rem',
        '18': '4.50rem',
        '19': '4.75rem',
        '21': '5.25rem',
        '22': '5.50rem',
        '23': '5.75rem',
        '25': '6.25rem',
      }
    }
  },
  plugins: [require('@tailwindcss/forms')]
}
