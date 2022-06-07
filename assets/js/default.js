import { includeHTML } from './includeHTML.js';
import { animatedTypingH2 } from './animatedTypingH2.js';

document.addEventListener('DOMContentLoaded', () => {
	// Enable `include-html` attribute for including html file
	includeHTML();

	// Animated typing
	animatedTypingH2('<Full Stack Developer>', 100);

	// // Toggle Social Bar
	// const toggleSocialBar = document.getElementById('toggleSocialBar');
	// toggleSocialBar.addEventListener('click', () => {
	// 	if (socialBar.className === 'social-icon-bar') {
	// 		socialBar.className = 'social-icon-bar res-show';
	// 		toggleSocialBar.innerHTML = 'X';
	// 	} else {
	// 		socialBar.className = 'social-icon-bar';
	// 		toggleSocialBar.innerHTML = 'Follow me';
	// 	}
	// });
});
