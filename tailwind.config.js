import colors from "tailwindcss/colors.js";
import defaultTheme from 'tailwindcss/defaultTheme';

export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                black: '#060606',
            },
            fontFamily: {
                hanken: ["Hanken Grotesk", "sans-serif"]
            },
            fontSize: {
                '2xs': ".625rem",
            }
        },
    },
    plugins: [],
};
