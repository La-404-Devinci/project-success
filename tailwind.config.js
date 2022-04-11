module.exports = {
  content: [
    'templates/**/*.html.twig',
    'assets/js/**/*.js',
  ],
  theme: {
    extend: {
      colors: {
        "success-white": "#F3F3F3",
        "success-black": "#595959",
        "success-orange": "#FF6400",
      },
      fontSize: {
        "10xl": ["10rem", { lineHeight: '1', }]
      }
    },
  },
  plugins: [],
}
