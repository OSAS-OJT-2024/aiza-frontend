module.exports = {
  darkMode: 'class', // Enable class-based dark mode
  content: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Quicksand', 'sans-serif'], // Set Quicksand as the default sans-serif font
      },
    },
  },
  plugins: [],
}
