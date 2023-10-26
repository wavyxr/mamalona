/** @type {import('tailwindcss').Config} */
export default {
	content: ['./src/**/*.{html,php}'],
	theme: {
		extend: {},
	},
	plugins: [
		require('tailwindcss-animated')
	  ],
}
