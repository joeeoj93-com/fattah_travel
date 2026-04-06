/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        primary: '#FFC107', // Warna kuning emas (navbar, tombol)
        dark: '#1A1D20',    // Warna background gelap (footer, card tengah)
        light: '#F8F9FA',   // Warna background section terang
      },
      fontFamily: {
        // Desainnya terlihat modern, kita pakai sans-serif bawaan dulu
        sans: ['Figtree', 'Inter', 'sans-serif'], 
      }
    },
  },
  plugins: [],
}