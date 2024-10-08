/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          fontFamily: {
            sans: ['Inter', 'sans-serif'],
          },
          colors: {
            'primary' : '#FFFBEB',
            'secondary' : '#FFD700',
            'accent' : '#FF8C42',
            'tertiary' : '#3E3E3E',
            'additional' : '#8FBC8F'
          }
        },
    },
    plugins: [],
};
