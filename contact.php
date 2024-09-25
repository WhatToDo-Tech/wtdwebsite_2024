<?php include 'includes/header.php'; ?>

<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init({
        publicKey: "zFMqLr0EjfJPWe9VT",
      });
   })();
</script>
<script type="text/javascript">
        window.onload = function() {
            document.getElementById('contactForm').addEventListener('submit', function(event) {
                event.preventDefault();
                // these IDs from the previous steps
                emailjs.sendForm('service_k03ejyi', 'template_dsho8cy', this)
                    .then(() => {
                        alert("Thank you for your email. We will get back to you shortly.")
                    }, (error) => {
                        console.log('FAILED...', error);
                    });
                    document.getElementById('contactForm').reset();
            });
        }
    </script>
<section class="ftco-section" id="scroll">
<div class="container-fluid">
<div class="row justify-content-center">
<div class="col-md-11 heading-section mb-5" data-aos="fade-up" data-aos-duration="1000">
<h2 class="mb-4">Contact us</h2>
<p><span class="subheading mr-2"><a href="index">Home</a></span> <span class="subheading">Contact</span></p>
</div>
</div>
<div class="row no-gutters justify-content-center">
<div class="col-md-12">
<div class="wrapper">
<div class="row g-0">
<div class="col-lg-6" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="100">
<div class="contact-wrap w-100 p-md-5 p-4">
<h3>Contact us</h3>
<p class="mb-4">We're open for any suggestion or just to have a chat</p>
<div class="row mb-4">
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Address:</span> Bingu Stadium, Area 49, Malawi</p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Email:</span> <a target="_blank" href="mailto:whattodomw@gmail.com"><span class="icon fa fa-paper-plane pr-4"></span><span class="text"><span
                        class="__cf_email__"
                        data-cfemail="365f585059764f59434452595b575f581855595b">[email&#160;protected]</span></span></a></p>
</div>
</div>
</div>
<div class="col-md-4">
<div class="dbox w-100 d-flex align-items-start">
<div class="text">
<p><span>Phone:</span> <a href="tel://265995908058">+265 995 908 058 <br/> +265 881 39 48 68</a></p>
</div>
</div>
</div>
</div>
<form id="contactForm" name="contactForm" class="contactForm">
<div class="row">
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="name" id="name" placeholder="Name">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="email" class="form-control" name="email" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Create a message here"></textarea>
</div>
</div>
<div class="col-md-12">
<div class="form-group">
<input type="submit" value="Send Message" class="btn btn-white">
<div class="submitting"></div>
</div>
</div>
</div>
</form>
<div class="w-100 social-media mt-5">
<h3>Follow us here</h3>
<p>
<a href="https://web.facebook.com/WhattodoTechnologies/?_rdc=1&_rdr" target="_blank">Facebook</a>
<a href="https://www.linkedin.com/company/whattodo-technologies/" target="_blank">LinkedIn</a>
<a href="https://github.com/whattodo-ltd" target="_blank">GitHub</a>
</p>
</div>
</div>
</div>
<div class="col-lg-6 d-flex align-items-stretch" data-aos="zoom-in-down" data-aos-duration="1000" data-aos-delay="200">
<div class="img w-100" style="background-image: url(images/work-2.jpg);"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<hr>
<?php include 'includes/footer.php'; ?>