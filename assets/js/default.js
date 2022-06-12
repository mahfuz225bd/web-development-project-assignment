import { animatedTypingH2 } from './animatedTypingH2.js';

document.addEventListener('DOMContentLoaded', () => {
	// Animated typing
	animatedTypingH2('<Full Stack Developer>', 100);
});

const toggleSocialBar = document.getElementById('toggleSocialBar');
console.log(toggleSocialBar);
toggleSocialBar.addEventListener('click', () => {
	const socialBar = document.getElementById('socialBar');
	if (socialBar.className === 'social-icon-bar') {
		socialBar.className = 'social-icon-bar res-show';
		toggleSocialBar.innerHTML = 'X';
	} else {
		socialBar.className = 'social-icon-bar';
		toggleSocialBar.innerHTML = 'Follow me';
	}
});
