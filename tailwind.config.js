/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.*{php, js, html}"],
  theme: {
    extend: {
      backgroundImage:{
        // "hero": "url('/assets/logo.jpg')",
        "intro": "url('../assets/hero.jpg')",
      }
    },
  },
  plugins: [],
}

