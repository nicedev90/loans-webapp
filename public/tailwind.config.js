/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['../app/**/*'],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px'
    },
    extend: {
      colors: {
        neutralLight: 'hsl(212,100%,97.6%)',
        neutral: 'hsl(212,100%,91.6%)',
        neutralDark: 'hsl(212,100%,79.6%)',
        primaryLight: 'hsl(199,88.1%,61.7%)',
        primary: 'hsl(199,88.1%,53.7%)',
        primaryDark: 'hsl(199,88.1%,41.7%)',
        ctaLight: 'hsl(244,56.6%,59.2%)',
        cta: 'hsl(244,56.6%,51.2%)',
        ctaDark: 'hsl(244,56.6%,39.2%)',
        dark: 'hsl(219,67.7%,19.4%)'
      }
    },
  },
  plugins: [],
}
