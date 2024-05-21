<?php  include "header.php"; ?>


	<!-- Start Page Title Section -->
	<div class="page-title-area">
		<div class="d-table">
			<div class="d-table-cell">
				<div class="container">
					<div class="page-title-content">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li>Contact Us</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Title Section -->
	<!-- Start Contact Section -->
	<div class="contact-section contact-page-1-section section-padding">
		<div class="container">
			<div class="section-title">
				<h6>LET’S GET TO WORK</h6>
				<h2>Contact Us</h2>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<!-- Start Contact Box Section -->
					<div class="contact-box">
						<div class="row">
							<div class="col-lg-12 col-md-12">
								<div class="single-contact-box"> <img src="assets/img/contact.jpg" alt="" />
									<p>We provide estimates by phone, email, or at your home. The estimate is completely free! Fill out the form, call us <span class="color-text">+707 555-321</span> or <span class="color-text">random@example.com</span>, and leave your telephone number and home address.</p>
									<p>We look forward to hearing from you!</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Contact Box Section -->
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="contact-form">
						<p class="form-message"></p>
						<form id="contact-form" class="form" action="mail.php" method="POST">
							<div class="row">
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<input type="text" name="name" id="name" class="form-control" required placeholder="Your Name"> </div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<input type="email" name="email" id="email" class="form-control" required placeholder="Your Email"> </div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<input type="text" name="phone" id="phone" required class="form-control" placeholder="Your Phone"> </div>
								</div>
								<div class="col-lg-12 col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="message" cols="30" rows="6" required placeholder="Your Message"></textarea>
									</div>
								</div>
								<div class="col-lg-12 col-md-12">
									<button type="submit" class="btn btn-primary">Send Message</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact Section -->
	
    <!-- Start Map Section -->
    <div class="map-section">
        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1322583.408894594!2d-102.14199186434853!3d39.651402412422705!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x877496a0a13c3aa3%3A0xde429e634a338207!2sSt%20Francis%2C%20KS%2067756%2C%20USA!5e0!3m2!1sen!2sbd!4v1705036980615!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
    <!-- End Map Section -->
	
	<?php  include "footer.php"; ?>