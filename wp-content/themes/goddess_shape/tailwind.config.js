/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./components/*.php",
    "./components/**/*.php",
    "./assets/js/main.js",
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
        secondary: "#fceceb",
        tertiary: "#ffecec",
        orange: {
          soft: "#fbf6f4",
        },
        gray: {
          card: "#b1b2b5",
        },
        red: {
          semi: "#d1a19d",
          soft: "#aa8181",
        },
        black: {
          gs: "#231b1b",
          gsSoft: "rgba(35,27,27,0.6)",
        },
        white: {
          DEFAULT: "#fdfcfc",
          gs: "#fceceb",
          true: "#ffffff",
          notWhite: "#fdf8f8",
        },
        textColor: {
          primary: "#0C0C0C",
          secondary: "#ffffff",
          orange: "#f49c64",
        },
      },
      fontSize: {
        28: "28px",
      },
      fontFamily: {
        champagne_limousines: ["champagne_limousines", "sans-serif"],
        baby_aletha: ["Baby_aletha", "sans serif"],
      },
      borderRadius: {
        "4xl": "2rem",
      },
      boxShadow: {
        gs: "4px 4px 4px 0px rgba(0, 0, 0, 0.1)",
      },
      height: {
        120: "30rem",
        100: "25rem",
      },
    },
  },
  plugins: [],
};
