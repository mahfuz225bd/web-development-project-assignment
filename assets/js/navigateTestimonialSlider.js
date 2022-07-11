// Init index
let index = 0;

// Get elements
const testimonials = document.querySelectorAll('.testimonial .container');
const next = document.querySelector('.testimonial a.next');
const prev = document.querySelector('.testimonial a.prev');
const testimonialSlideNo = document.getElementById('testimonialSlideNo');

// Active testimonials[index]
testimonials[index].classList.add('active');

// Function: activeTestimonialSlide
const activeTestimonialSlide = (index) => {
	// Remove .active
	testimonials.forEach(
		(each) =>
			each.className === 'container active' && each.classList.remove('active')
	);

	// Add .active to testimonials[index]
	testimonials[index].classList.add('active');
};

console.log(testimonials);

next.addEventListener('click', () => {
	if (index < 2) {
		index++;
	} else {
		index = 0;
	}

	activeTestimonialSlide(index);
	testimonialSlideNo.innerText = index + 1;
});

prev.addEventListener('click', () => {
	if (index > 0) {
		index--;
	} else {
		index = 2;
	}

	activeTestimonialSlide(index);
	testimonialSlideNo.innerText = index + 1;
});
