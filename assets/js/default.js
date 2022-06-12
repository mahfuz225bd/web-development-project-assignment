import { animatedTypingH2 } from './animatedTypingH2.js';

document.addEventListener('DOMContentLoaded', () => {
	// Animated typing
	animatedTypingH2('<Full Stack Developer>', 100);

	// Toggle Nav Bar (Responsive)
	const toggleMainNav = document.getElementById('toggleMainNav');

	toggleMainNav.addEventListener('click', () => {
		const mainNav = document.getElementById('mainNav');

		if (mainNav.className === '') {
			mainNav.className = 'res-show';
		} else {
			mainNav.className = '';
		}
	});

	// Toggle Social Bar (Responsive)
	const toggleSocialBar = document.getElementById('toggleSocialBar');

	if (toggleSocialBar) {
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
	}

	// Send Email via Contact Form
	const contactForm = document.forms.contactForm;
	if (contactForm) {
		contactForm.addEventListener('submit', (e) => {
			e.preventDefault();

			const data = new URLSearchParams();

			for (const p of new FormData(e.target)) {
				data.append(p[0], p[1]);
			}

			fetch('../../api/contact_form.php', {
				method: 'POST',
				body: data,
			})
				.then((response) => {
					document.querySelector(
						'.contact-section .container'
					).style.backgroundColor = '#fff';
					return response.text();
				})
				.then((text) => (e.target.innerHTML = text))
				.catch((error) => (e.target.innerHTML = error));
		});
	}
});
