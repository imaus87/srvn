const defaultTheme = require('tailwindcss/defaultTheme')
const colors = require('tailwindcss/colors')

/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    './vendor/anillusion/wired/**/*.blade.php',
    './storage/framework/views/*.php',
    './resources/views/**/*.blade.php',
    './resources/views/**/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue'],
  theme: {
    extend: {
      colors: {
        'srvn-orange': '#ff460d',
        'srvn-gray': '#f3f3f3',
      },
      fontFamily: {
        sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
        smooch: ['Smooch', ...defaultTheme.fontFamily.sans],
        oxanium: ['Oxanium', ...defaultTheme.fontFamily.sans],
        titilliumweb: ['Titillium Web', ...defaultTheme.fontFamily.sans]
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
        '88': '22rem'
      },
      maxWidth: {
        '8xl': '88rem',
        '9xl': '96rem',
        '10xl': '104rem',
        '2560': '2560px'
      }
    }
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/line-clamp'),
    require('@tailwindcss/aspect-ratio'),
    require("tailwindcss-hyphens"),
    require('tailwind-scrollbar-hide')
  ]
}
