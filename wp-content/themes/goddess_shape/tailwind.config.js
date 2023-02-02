/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./components/*.php",
    "./assets/js/custom.js",
    "./woocommerce/**/*.php",
  ],
  theme: {
    screens: {
      sm: "640px",

      md: "768px",

      lg: "1024px",

      xl: "1280px",

      "2xl": "1536px",
    },
    extend: {
      colors: {
        principal: "#CC2D4A",
        secondary: "#8FA206",
        tertiary: "#61AEC9",
        backgroundColor: (theme) => ({
          ...theme("colors"),
          primary: "#fdf8f8",
          secondary: "#fceceb",
          tertiary: "#d4a49c",
        }),
        black: {
          gs: "#231b1b",
          gsSoft: "rgba(35,27,27,0.6)",
        },
        white: {
          DEFAULT: "#ffffff",
          notWhite: "#fdf8f8",
        },
        textColor: {
          primary: "#000000",
          secondary: "#ffffff",
          orange: "#f49c64",

        },
      },
      fontFamily: {
        champagne_limousines: ["champagne_limousines", "sans-serif"],
      },
      borderRadius: {
        "4xl": "2rem",
      },
      height: {
        '120': '30rem',
        '100': '25rem',
      },
    },
  },
  plugins: [],
};
