module.exports = {
  purge: [
    './resources/views/**/*.blade.php',
    './resources/css/**/*.css',
  ],
  theme: {
    extend: {
        colors: {
            'black-doc': 'rgba(0, 0, 0, 0.7)',
            'yellow-doc':'rgba(234, 213, 131, 1)',
            'red-doc':'rgba(146, 25, 20, 1)',
        },
        fontFamily: {
            'lobster': ['"Lobster"'],
            'BlackOps':['"Black Ops One"'],
            'serif': ['"Source Serif Pro"']
        }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
  ]
}
