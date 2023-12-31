const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/*.js',
        './app/Enums/*.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                theme: {
                    'main': "#F7E7CE",
                    'sub': "#654321",
                    'third': "#FFFFF0",
                },
            },
            fontSize: {
                '10px': "10px",
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
