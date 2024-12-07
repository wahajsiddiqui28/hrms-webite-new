<div class="contact-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
    <h3>Get In Touch</h3>
    <p>Have any questions or need assistance? We’re here to help! Fill out the form below, and our team will
        respond as soon as possible. Your inquiries are important to us, and we look forward to assisting you.</p>
    <form id="contactForm" class="loading-form" action="contact_form_submit.php" method="post"
        class="php-email-form aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="row gy-4">
            <div class="col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Your Name"
                    value="<?php echo $_POST['name'] ?? ''; ?>" required>
            </div>
            <div class="col-md-6">
                <input type="email" class="form-control" name="email" placeholder="Your Email"
                    value="<?php echo $_POST['email'] ?? ''; ?>" required>
            </div>
            <div class="col-12">
                <input type="text" class="form-control" name="subject" placeholder="Subject"
                    value="<?php echo $_POST['subject'] ?? ''; ?>" required>
            </div>
            <div class="col-12">
                <textarea class="form-control" name="message" rows="6" placeholder="Message"
                    required><?php echo $_POST['message'] ?? ''; ?></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-success">Send Message</button>
            </div>
        </div>
    </form>
</div>