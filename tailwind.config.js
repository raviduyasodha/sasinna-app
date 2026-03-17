/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      screens: {
        'nav': '800px',
      },
      colors: {
        navy: "#0A122A",
        navyLight: "#111A33",
        brandBlue: "#2563EB",
        neonBlue: "#38BDF8",
      },
      fontFamily: {
        sans: ['Instrument Sans', 'ui-sans-serif', 'system-ui', 'sans-serif'],
      },
    },
  },
  plugins: [],
}