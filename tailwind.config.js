/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      backgroundImage:{
        'buttonImg': "url('/public/assets/img/button.png')"
      },
    },
    fontFamily:{
      'oswald': ['"Oswald", sans-serif']
    },
  },
  plugins: [],
}

