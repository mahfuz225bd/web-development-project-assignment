import { includeHTML } from './includeHTML.js';
import { animatedTypingH2 } from './animatedTypingH2.js';

// Enable `include-html` attribute for including html file
includeHTML();

document.addEventListener('DOMContentLoaded', () => {
	// Animated typing
	animatedTypingH2('<Full Stack Developer>', 100);
});
