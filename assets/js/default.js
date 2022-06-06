import { includeHTML } from './includeHTML.js';
import { animatedTypingH2 } from './animatedTypingH2.js';

// Enable include-html="" for including html file
includeHTML();

document.addEventListener('DOMContentLoaded', () => {
	// Animated typing
	animatedTypingH2('<Full Stack Developer and Freelancer>', 100);
});
