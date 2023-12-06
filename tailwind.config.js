/** @type {import('tailwindcss').Config} */
export default {
	mode: 'jit',
	content: ['./src/**/*.{html,php}'],
	theme: {
		extend: {},
	},
	plugins: [
		require('tailwindcss-animated')
	  ],
}
