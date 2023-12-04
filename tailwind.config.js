import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms, require('daisyui')],

    daisyui: {
        themes: [
            {
                dark: {
                    ...require('daisyui/src/theming/themes')['dark'],
                    'primary': '#4F46E5',
                    'base-100': '#1f2937',
                },
            },
        ],
    },
};
