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
      poppins:['Poppins'],
      dancing:['Dancing Script'],
      yellowMagician:['Yellow Magician'],
      saint:['Mrs Saint Delafield'],
      righteous:['Righteous'],
      playfair:['PlayfairDisplay'],
    },
    colors:{
      primarylux:['#425953'],
      primaryHydra:['#557187'],
      secondaryHydra:['#87A1AA'],
      pearl:['#F3EADD'],
      beach:['#ADA292'],
      inkwell:['#35353F'],
      primaryluxx : ['#1C2F36'],
      textluxx : ['#DFEEF3'],
      primarymini1 : ['#8C806E'],
      secondarymini1 : ['#B7B1A4'],
    },
    animation:{
      blink : 'blink 1.5s infinite',
    },
    keyframes:{
      blink:{
        '0%,100%' : {opacity: '0'},
        '50%' :{opacity: '1'}
      },
    }
  },
  },
  plugins: [],
}

