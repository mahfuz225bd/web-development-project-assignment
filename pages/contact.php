<header>
	<?php
	require_once './pages/layout/header.php'
	?>
</header>
<main>
	<section class="first-section">
		<h3>Contact with Me</h3>
	</section>
	<section class="contact-section col-2" id="contact">
		<article class="container">
			<form action="#" class="contact-form" id="contactForm">
				<label for="fullname" class="required">Full Name</label>
				<input type="text" id="fullname" name="fullname" placeholder="Your Full Name" required value="e@e" />

				<label for="email" class="required">Email Address</label>
				<input type="email" id="email" name="email" placeholder="Your Email Address" required value="e@e" />

				<label for="phone_number">Phone Number</label>
				<input type="text" id="phone_number" name="phone_number" placeholder="Your Phone Number" value="e@e" />

				<label for="subject" class="required">Subject</label>
				<input type="text" id="subject" name="subject" placeholder="Subject" required value="e@e" />

				<label for="msg" class="required">Message</label>
				<textarea id="msg" name="message" placeholder="Write something.." style="height: 170px" required>Text</textarea>
				<input type="submit" value="Submit" />
			</form>
		</article>
		<article>
			<!-- <img src="https://via.placeholder.com/575?text=MAP+NOT+AVAILABLE" alt="Map Placeholder" style="width: 100%; max-height: 640px;" /> -->
			<iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.0547030561147!2d90.3658509291727!3d23.816653742777152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c12c01aea7ed%3A0xbe11eb37061620e1!2sAl%20Modina%20Jewellers!5e0!3m2!1sen!2sbd!4v1655036673037!5m2!1sen!2sbd" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</article>
	</section>
</main>
<footer>
	<?php
	require_once './pages/layout/footer.php'
	?>
</footer>