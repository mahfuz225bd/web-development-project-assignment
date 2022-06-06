export const animatedTypingH2 = (text, speed) => {
	let char_index = 0;

	setInterval(() => {
		const h2 = document.querySelector('hgroup h2');

		h2.innerHTML += text.charAt(char_index);

		if (char_index == text.length) {
			h2.innerHTML = '';
			char_index = 0;
		} else {
			char_index++;
		}
	}, speed);
};
