/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                primary: '#060606',
                "primary-text": '#ccc',
            },
            fontFamily: {
                'noto-sans': 'Noto Sans'
            }
        },
    },
    plugins: [
        require('daisyui'),
        require('@tailwindcss/typography'),
        require('@tailwindcss/forms'),
    ],
};

