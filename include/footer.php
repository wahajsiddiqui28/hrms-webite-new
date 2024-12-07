<!-- Footer start  -->
<footer id="footer" class="footer pt-5">
  <div class="container footer-top">
    <div class="row gy-4 align-items-center">
      <div class="col-lg-4 col-md-6 footer-about">
        <a href="index.html" class="logo d-flex align-items-center">
          <span class="sitename">Fasterpsystems</span>
        </a>
        <div class="footer-contact pt-3">
          <p>Qasimabad Street</p>
          <p>Pakistan, 5443922</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+92 3327 656 93</span></p>
          <p><strong>Email:</strong> <span>info@example.com</span></p>
        </div>
        <!-- <div class="social-links d-flex mt-4">
        <a href=""><i class="bi bi-twitter-x"></i></a>
        <a href=""><i class="bi bi-facebook"></i></a>
        <a href=""><i class="bi bi-instagram"></i></a>
        <a href=""><i class="bi bi-linkedin"></i></a>
      </div> -->
      </div>
      <div class="col-lg-4 col-md-6 footer-about">
          <form class="loading-form" id="subscribeForm" method="post" action="subscribe.php">
              <div class="subscribe-form">
                  <label for="emailInput" class="form-label">Subscribe now</label>
                  <div class="input-group mb-3">
                      <input type="email" class="form-control" name="email" id="emailInput" placeholder="Subscribe" required>
                      <button type="submit" class="btn text-white" style="background-color: var(--yellow-text);">
                          Subscribe
                      </button>
                  </div>
              </div>
          </form>
      </div>

      <!-- <div class="col-lg-2 col-md-3 footer-links">
      <h4>Useful Links</h4>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">About us</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Terms of service</a></li>
        <li><a href="#">Privacy policy</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Our Services</h4>
      <ul>
        <li><a href="#">Web Design</a></li>
        <li><a href="#">Web Development</a></li>
        <li><a href="#">Product Management</a></li>
        <li><a href="#">Marketing</a></li>
        <li><a href="#">Graphic Design</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Hic solutasetp</h4>
      <ul>
        <li><a href="#">Molestiae accusamus iure</a></li>
        <li><a href="#">Excepturi dignissimos</a></li>
        <li><a href="#">Suscipit distinctio</a></li>
        <li><a href="#">Dilecta</a></li>
        <li><a href="#">Sit quas consectetur</a></li>
      </ul>
    </div>
    <div class="col-lg-2 col-md-3 footer-links">
      <h4>Nobis illum</h4>
      <ul>
        <li><a href="#">Ipsam</a></li>
        <li><a href="#">Laudantium dolorum</a></li>
        <li><a href="#">Dinera</a></li>
        <li><a href="#">Trodelas</a></li>
        <li><a href="#">Flexo</a></li>
      </ul>
    </div> -->
    </div>
  </div>
  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">Fasterpsystems</strong> <span>All Rights Reserved</span>
    </p>
    <div class="credits">
      Designed by <a href="#"> Fasterpsystems </a>
    </div>
  </div>
</footer>
<!-- Footer end -->
<!-- Modal start  -->

<div class="loading-overlay" id="formOverlay" style="display: none;">
    <div class="loader" id="formLoader"></div>
</div>
<!-- Modal -->
<section class="modal-sec">
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <section id="contact" class="contact section light-background">
            <!-- Section Title -->
            <div class="container section-title aos-init aos-animate" data-aos="fade-up">
              <h2>Request a Demo</h2>
              <p>Experience Fasterpsystems firsthand! Request a demo today and see how our platform can streamline
                your HR processes. Our team will guide you through the features and help you understand how we can
                meet your business needs. Fill out the form, and we’ll get in touch with you shortly.</p>
            </div>
            <div class="container">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="contact-form">
                    <form id="ReqForm" class="loading-form" action="demo_requests_form_submit.php" method="post" class="php-email-form aos-init" data-aos="fade-up"
                      data-aos-delay="200">
                      <div class="row gy-4">
                        <div class="col-lg-6 col-mb-6 col-sm-6 col-12">
                          <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                        </div>
                        <div class="col-lg-6 col-mb-6 col-sm-6 col-12 ">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
                        <div class="col-lg-6 col-mb-6 col-sm-6 col-12">
                          <input type="number" class="form-control" name="number" placeholder="Enter Your Number"
                            required="">
                        </div>
                        <div class="col-lg-6 col-mb-6 col-sm-6 col-12">
                          <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                        </div>
                        <div class="col-12">
                          <textarea class="form-control" name="message" rows="6" placeholder="Message"
                            required=""></textarea>
                        </div>
                        <div class="col-12 text-center">
                          <button type="submit" class="btn">Send Message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Modal end -->
<!-- Sign up Modal -->
<!-- <section class="modal-sec signup">
  <div class="modal fade" id="signUpmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <section id="contact" class="contact section light-background">
            <div class="container section-title aos-init aos-animate p-0" data-aos="fade-up">
              <h2>Sign Up</h2>
            </div>
            <div class="container">
              <div class="row g-4">
                <div class="col-lg-12">
                  <div class="contact-form">
                    <form action="forms/contact.php" method="post" class="php-email-form aos-init" data-aos="fade-up"
                      data-aos-delay="200">
                      <div class="row gy-4">
                        <div class="col-lg-12 col-mb-12 col-sm-12 col-12">
                          <input type="text" name="name" class="form-control" placeholder="Your Fisrt Name" required="">
                        </div>
                        <div class="col-lg-12 col-mb-12 col-sm-12 col-12">
                          <input type="text" name="name" class="form-control" placeholder="Your Last Name" required="">
                        </div>
                        <div class="col-lg-12 col-mb-12 col-sm-12 col-12 ">
                          <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                        </div>
                        <div class="col-lg-12 col-mb-12 col-sm-12 col-12">
                          <input type="number" class="form-control" name="number" placeholder="Enter Your Number"
                            required="">
                        </div>
                        <div class="col-lg-12 col-mb-12 col-sm-12 col-12">
                          <textarea class="form-control" name="message" rows="6" placeholder="Message"
                            required=""></textarea>
                        </div>
                        <div class="col-12 text-center">
                          <button type="submit" class="btn">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</section> -->
<!-- Sign up Modal end -->
<!-- Slick Slider JS -->
<script src="assets/js/main.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/js/fontawesome.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  AOS.init();
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
  $(document).ready(function () {
    // Initialize Slick Slider
    $('.portfolio-filters').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 460,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        }
      ]
    });
    // Handle tab click inside slider
    $('.portfolio-filters button').on('click', function () {
      $('.portfolio-filters button').removeClass('active');
      $(this).addClass('active');
    });
  });
</script>
<script>
  // Reusable loader function
  document.querySelectorAll('.loading-form').forEach((form) => {
      form.addEventListener('submit', function (e) {
          const overlay = document.getElementById('formOverlay');
          const loader = document.getElementById('formLoader');
          
          overlay.style.display = 'flex'; // Show overlay
          loader.style.display = 'block'; // Show loader
      });
  });

  // Toast auto-dismiss logic
  setTimeout(() => {
      const toast = document.querySelector('.toast');
      if (toast) {
          toast.classList.remove('show');
      }
  }, 5000);
</script>
</body>
</html>