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
        'sans': ['Nunito', 'sans-serif', ... defaultTheme.fontFamily.sans],
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
}
