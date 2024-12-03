/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
          fontFamily: {
            'sans': ['Inter', 'ui-sans-serif', 'system-ui'],
          },
          colors: {
            'primary' : '#FFFBEB',
            'secondary' : '#FFD700',
            'accent' : '#FF8C42',
            'tertiary' : '#3E3E3E',
            'additional' : '#8FBC8F',
            'brand-accent': '#3B82F6',
            'brand-text': '#1F2937',
            'brand-muted': '#6B7280',
            'brand-blue': '#1DA1F2',
            'brand-background': '#F7F9FA'
          }
        },
    },
    plugins: [],
};
