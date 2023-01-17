/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php","./components/*.php", "./assets/js/custom.js", "./woocommerce/**/*.php"],
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
          terciary: "#d4a49c",
        }),
        textColor: {
          primary: "#000000",
          secondary: "#ffffff",
          terciary: "#f79d65",
        },
        fontFamily: {
          champagne_limousines: ["Champagne_Limousines", "sans-serif"],
        },
      },
      borderRadius: {
        "4xl": "2rem",
      },
    },
  },
  plugins: [],
};
