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
            'red-doc':'rgba(206, 14, 45, 1)',
            'red-doc-dark':'rgba(114, 5, 0, 1)',
            'purple-doc':'rgba(128, 57, 142, 0.6)',
            'black-doc':'rgba(0, 0, 0, 0.45)',
        },
        fontFamily: {

            'poppins': ['"poppins"']
        },
        width: {
            'full-page':'5759px',
            'section-1': '1919px',
            'section-2': '1981px',
            'section-3': '1859px',
         }
    }
  },
  variants: {},
  plugins: [
    require('@tailwindcss/ui'),
    require('tailwindcss-writing-mode')({
        variants: ['responsive', 'hover']
    })
  ]
}
