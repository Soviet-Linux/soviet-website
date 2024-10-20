/** @type {import('tailwindcss').Config} */
export default {
  content: ["./src/**/*.{astro,html,js,jsx,md,mdx,svelte,ts,tsx,vue}"],
  theme: {
    extend: {
      typography: {
        DEFAULT: {
          css: {
            color: "#ffffff",
            a: {
              color: "#ffffff",
              "&:hover": {
                color: "#e5e5e5",
              },
            },
            strong: {
              color: "white",
            },
            h1: {
              color: "white",
            },
            h2: {
              color: "white",
            },
            h3: {
              color: "white",
            },
            h4: {
              color: "white",
            },
            blockquote: {
              color: "white",
              borderLeftColor: "white",
            },
            code: {
              color: "white",
              borderLeftColor: "white",
              backgroundColor: "#24292e",
            },
          },
        },
      },
    },
  },
  plugins: [require("@tailwindcss/typography")],
};
