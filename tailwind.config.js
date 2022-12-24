const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    
    content: [
        './src/**/*.{html,js}", "./public/*.html',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
        },
        fill: ({ theme }) => ({
            gray: theme('colors.gray')
          }),
          gridTemplateColumns: {
            // Simple 16 column grid
            '16': 'repeat(16, minmax(0, 1fr))',
    
            // Complex site-specific column configuration
            'footer': '200px minmax(900px, 1fr) 100px',
          },
    },

    variants: {
        opacity: ['responsive','hover','focus','disabled'],
    },

    corePlugins:{

        container: false,
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
    

};
