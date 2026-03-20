import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',

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
            colors: {
                'page': 'var(--page)',
                'brand-bg': 'var(--bg)',
                'brand-border': 'var(--border)',
                'brand-text': 'var(--text)',
                'brand-muted': 'var(--muted)',
                'primary': 'var(--primary)',
                'footer-main': 'var(--footer-main)',
                'footer-sub': 'var(--footer-sub)',
            },
        },
    },

    plugins: [forms],
};