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
                sans: ['Outfit', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#059669', // Green-600
                secondary: '#0891B2', // Cyan-600
                accent: '#F97316', // Orange-500
                'bg-clean': '#F0FDF4', // Green-50
                'text-heading': '#064E3B', // Green-900
                'text-body': '#6B7280', // Gray-500
                success: '#10B981',
                error: '#EF4444',
                warning: '#F59E0B',
            },
        },
    },

    plugins: [forms],
};
