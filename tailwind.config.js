/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/**/**.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
        fontFamily : {
            primary: 'PlayFair',
            secondary: 'Montserrat'
        },
        backgroundImage : {
            background1 : "url('/public/images/background1.jpg')"
        },
        colors : {
            primary : '#d05291',
            text : {
                1 : '#000905',
                2 : '#754b25'
            }
        },
        backgroundColor : {
            yellow : '#fff6e9'
        }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}

