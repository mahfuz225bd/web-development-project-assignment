import { animatedTypingH2 } from './animatedTypingH2.js';
import './navigateTestimonialSlider.js';

document.addEventListener('DOMContentLoaded', () => {
	// Animated typing
	animatedTypingH2('<Full Stack Developer>', 100);

	// Toggle Nav Bar (Responsive)
	const toggleMainNav = document.getElementById('toggleMainNav');

	toggleMainNav.addEventListener('click', () => {
		const mainNav = document.getElementById('mainNav');

		if (mainNav.className === '') {
			mainNav.className = 'res-show';
			toggleMainNav.innerHTML = '<i class="fas fa-times"></i>';
		} else {
			mainNav.className = '';
			toggleMainNav.innerHTML = '<i class="fas fa-bars"></i>';
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

	// disableInputs
	const disableInputs = () => {
		document.querySelectorAll('input, textarea').forEach((el) => {
			el.readOnly = true;
			el.style.cursor = 'not-allowed';
		});
		const btnSubmit = document.querySelector('input[type=submit]');
		btnSubmit.value = 'Sending...';
		btnSubmit.disabled = true;
		btnSubmit.style.backgroundColor = 'grey';
		btnSubmit.style.cursor = 'not-allowed';
	};

	// Send Order via Email
	const orderForm = document.forms.orderForm;
	if (orderForm) {
		orderForm.addEventListener('submit', (e) => {
			e.preventDefault();

			// While sending mail
			disableInputs();

			const data = new URLSearchParams();

			new FormData(e.target).forEach((value, key) => {
				data.append(key, value);
			});

			fetch('../../api/controllers/sendOrder.php', {
				method: 'POST',
				body: data,
			})
				.then((resopnse) => resopnse.text())
				.then((text) => (e.target.innerHTML = text))
				.catch((error) => (e.target.innerHTML = error));
		});
	}

	// Send Email via Contact Form
	const contactForm = document.forms.contactForm;
	if (contactForm) {
		contactForm.addEventListener('submit', (e) => {
			e.preventDefault();

			// While sending mail
			disableInputs();

			const data = new URLSearchParams();

			new FormData(e.target).forEach((value, key) => {
				data.append(key, value);
			});

			fetch('../../api/controllers/sendContact.php', {
				method: 'POST',
				body: data,
			})
				.then((response) => {
					document.querySelector(
						'section.contact article.container'
					).style.backgroundColor = '#fff';

					return response.text();
				})
				.then((text) => (e.target.innerHTML = text))
				.catch((error) => (e.target.innerHTML = error));
		});
	}

	// onSubmit: Create a chatbot user
	const chat = document.forms.chat;

	if (chat) {
		chat.addEventListener('submit', (e) => {
			e.preventDefault();

			// While $_POST is being processed

			const data = new URLSearchParams();

			new FormData(e.target).forEach((value, key) => {
				data.append(key, value);
			});

			fetch('../../api/models/userLogin.php', {
				method: 'POST',
				body: data,
			})
				.then((response) => {
					document.querySelector('#chat').style.backgroundColor = '#fff';
					return response.text();
				})
				.then((text) => (e.target.innerHTML = text))
				.catch((error) => (e.target.innerHTML = error));
		});
	}

	// // window: onResize
	// window.addEventListener('resize', () => {
	// 	// @media screen and (max-width: 600px)
	// 	if (window.matchMedia('(max-width: 600px)').matches) {
	// 		document.querySelectorAll('.timeline .container').forEach((each) => {
	// 			console.log(Array(each.classList).includes('left'));
	// 			each.classList.remove('left');
	// 			each.classList.add('right');
	// 		});
	// 	}
	// });
});
