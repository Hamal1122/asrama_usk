/** @type {import('tailwindcss').Config} */
export default {
  content: ["./resources/**/*.blade.php",
  "./resources/**/*.js",
  "./resources/**/*.vue",],
  theme: {colors: {
    'blue': '#0C8CE9',
    'purple': '#7e5bef',
    'pink': '#E95793',
    'orange': '#ff7849',
    'green': '#13ce66',
    'yellow': '#ffc82c',
    'gray-dark': '#273444',
    'gray': '#8492a6',
    transparent: 'transparent',
      current: 'currentColor',
      'white': '#ffffff',
      'purple': '#3f3cbb',
      'midnight': '#121063',
      'metal': '#565584',
      'tahiti': '#3ab7bf',
      'silver': '#ecebff',
      'bubble-gum': '#ff77e9',
      'bermuda': '#EEF6FC',
      'bluehover': '#094D7E',
      'gray-soft': '#F0F0F0',
      'red' : '#EF5656',
      
  },
    extend: {
      fontFamily: {
        'poppins': ['Poppins', 'sans-serif'],  
        'Inter': ['Inter', 'sans-serif'],
      }

    },
  },
  plugins: [],
}

