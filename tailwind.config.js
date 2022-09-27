module.exports = {

    mode:'jit',
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    fontFamily: {
        'lobster': ['"Lobster"'],
        'BlackOps':['"Black Ops One"'],
        'serif': ['"Source Serif Pro"']
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
