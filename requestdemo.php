<?php  include "header.php"; ?>


    <!-- Start Page Title Section -->
    <div class="page-title-area">
      <div class="d-table">
        <div class="d-table-cell">
          <div class="container">
            <div class="page-title-content">
              <ul>
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End Page Title Section -->
    <!-- Start Contact Box Section -->
   <section class="contact-info-wrapper pt-70">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="contact-office-address-box">
              <h5>Headquarter</h5>
              <p>
                Plot no. 3B, Kapeesh Vihar Colony Uattardhona, Lucknow, Uttar
                Pradesh,India, 226028
              </p>
              <a href="tel:0802235678">+91 9918443373</a>
              <a href="mailto:demo@example.com">support@predulivelabs.in</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="contact-office-address-box">
              <h5>New Delhi Office</h5>
              <p>
                Indraprastha Institute of Information Technology Delhi (IIITD), 4th Floor, Old Academic Building, Okhla Industrial Estate, Phase III, New Delhi-110020
              </p>
              <a href="tel:0802235678">+91 8756263784</a>
              <a href="mailto:demo@example.com">support@predulivelabs.in</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="contact-office-address-box">
              <h5>Karnataka Office</h5>
              <p>
                Cyber Park, Electronic City, Hosur Road, Bengaluru - 560100 Karnataka
              </p>
              <a href="tel:0802235678">+91 9918443373</a>
              <a href="mailto:demo@example.com">support@predulivelabs.in</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Box Section -->
    <!-- Start Contact Section -->
    <div class="contact-section section-padding">
      <div class="container">
        <div class="section-title">
          <h6>Get in touch with us</h6>
          <h2>Touch with Us</h2>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-12">
            <!-- Start Contact Box Section -->
            <div class="contact-box">
              <div class="row">
                <div class="col-lg-12 col-md-12">
                  <div class="single-contact-box-2">
                    <h3>
                      Have questions about our products, solutions, demos, partnership opportunities, or more?
                    </h3>
                    <p>
                      Submit your information and a representative will reach out to you soon.
                      <br>
                      Or email us directly at
                      <br>
                      <span class="color-text">random@example.com</span>
                     
                    </p>
                    <ul class="social-icon-box">
                      <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                      </li>
                      <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Contact Box Section -->
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="contact-form contact-form-2">
              <p class="form-message"></p>
              <form
                id="contact-form"
                class="form"
                action="mail.php"
                method="POST"
              >
                <div class="row">
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        name="name"
                        id="name"
                        class="form-control"
                        required
                        placeholder="Your Name"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="email"
                        name="email"
                        id="email"
                        class="form-control"
                        required
                        placeholder="Your Email"
                      />
                    </div>
                  </div>



                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="number"
                        name="phone"
                        id="phone"
                        class="form-control"
                        required
                        placeholder="Phone Number"
                      />
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        name="company"
                        id="company"
                        class="form-control"
                        required
                        placeholder="Company"
                      />
                    </div>
                  </div>



                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <input
                        type="text"
                        name="subject"
                        id="subject"
                        required
                        class="form-control"
                        placeholder="Subject"
                      />
                    </div>
                  </div>


                


                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <textarea
                        name="message"
                        class="form-control"
                        id="message"
                        cols="30"
                        rows="6"
                        required
                        placeholder="Description"
                      ></textarea>
                    </div>
                  </div>



                  <div class="col-lg-12 col-md-12">
                    <div class="form-group">
                      <label for="cars" ></label>
                      <select  class="form-control" id="cars" name="cars">
                        <option value="volvo">Contact Reason</option>
                        <option value="saab">Book a Demo</option>
                        <option value="fiat">Product Question</option>
                        <option value="audi">Experiencing Issue</option>
                        <option value="audi">General Enquiry</option>
                      </select>
                   
           </div>
                  </div>

                  <div class="col-lg-12 col-md-12">
                    <button type="submit" class="btn btn-primary">
                      Send Message
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- End Contact Section -->

   

    <?php  include "footer.php"; ?>
