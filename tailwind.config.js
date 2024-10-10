/** @type {import('tailwindcss').Config} */
const defaultTheme = require("tailwindcss/defaultTheme");
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    extend: {
      fontFamily:{
        sans:["Inter var", ...defaultTheme.fontFamily.sans],
      }
    },
  },
  plugins: [],
  safelist:['bg-red-100','bg-green-100','bg-blue-100','bg-yellow-100'],
}