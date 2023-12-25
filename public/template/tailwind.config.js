/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: 'class',
  content: [
    "./src/**/*.{html,js}",
    "./../../resources/views/**/*.blade.php",
  ],
  theme: {
    extend: {
      dropShadow: {
        'small-light': '2px 2px 10px #f1f1f1',
        'small-dark': '2px 2px 4px #1b1b1b4b',
      }
    },
    fontFamily: {
      'body': ['Inter', 'sans-serif'],
    }
  },
  plugins: [],
}

