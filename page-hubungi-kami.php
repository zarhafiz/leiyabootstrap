<?php get_header();?>


<section class="hubungi-kami" style="padding-top: 50px;">

    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="container text-center">
                    <h1 class="tajuk-hubungi-kami">Klinik Famili Leiya</h1>
                    <h4 class="contact-us-h">
                        Klinik Famili Leiya, No 11 Jalan Gemilang 1 Pusat Perdagangan Gemilang 43900 Sepang, Selangor Malaysia    
                    </h3>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-envelope-square d-flex align-self-start"></i>
                            <p class="d-flex ms-3">leiyamedic@yahoo.com<br>
                            klinikfamilileiya@gmail.com</p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-home"></i>
                        <p class="d-flex ms-3">Monday - Sunday : 9am - 11pm
                        </p>
                    </div>
                    <div class="d-flex justify-content-center">
                        <i class="fas fa-phone-volume"></i>
                        <p class="d-flex ms-3">+603 - 8705 3401<br>
                            +60 17-606 7483
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex justify-content-center"
            style="background-color: #F7F7F9;
  padding-top: 40px;
  padding-bottom: 10px;">
                <img src="<?php echo get_template_directory_uri(); ?>/image/LEIYA (1).jpeg">
            </div>

        </div>
    </div>

</section>

<section class="map pt-2">
  <div class="container">
    <div class="text-title text-center my-5">
      <h1>HUBUNGI KAMI</h1>
      <hr />
    </div>
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 ">
        <div id="map-container-google-2" class="z-depth-1-half map-container d-flex justify-content-center" style="height: 500px">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.028143598658!2d101.69433331421084!3d2.8078913559400362!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cdb8b9604d88eb%3A0xafe8ed514459c586!2sKlinik%20Famili%20LEIYA!5e0!3m2!1sen!2smy!4v1635960990978!5m2!1sen!2smy" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

      </div>
      <div class="col-12 col-md-6">
        <!-- Wrapper container -->
<div class="container py-4">

  <!-- Bootstrap 5 starter form -->
  <form id="contactForm">

    <!-- Name input -->
    <div class="mb-3">
      <label class="form-label" for="name">Name</label>
      <input class="form-control" id="name" type="text" placeholder="Name" data-sb-validations="required" />
      <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
    </div>

    <!-- Email address input -->
    <div class="mb-3">
      <label class="form-label" for="emailAddress">Email Address</label>
      <input class="form-control" id="emailAddress" type="email" placeholder="Email Address" data-sb-validations="required, email" />
      <div class="invalid-feedback" data-sb-feedback="emailAddress:required">Email Address is required.</div>
      <div class="invalid-feedback" data-sb-feedback="emailAddress:email">Email Address Email is not valid.</div>
    </div>

    <!-- Message input -->
    <div class="mb-3">
      <label class="form-label" for="message">Message</label>
      <textarea class="form-control" id="message" type="text" placeholder="Message" style="height: 10rem;" data-sb-validations="required"></textarea>
      <div class="invalid-feedback" data-sb-feedback="message:required">Message is required.</div>
    </div>

    <!-- Form submissions success message -->
    <div class="d-none" id="submitSuccessMessage">
      <div class="text-center mb-3">Form submission successful!</div>
    </div>

    <!-- Form submissions error message -->
    <div class="d-none" id="submitErrorMessage">
      <div class="text-center text-danger mb-3">Error sending message!</div>
    </div>

    <!-- Form submit button -->
    <div class="d-grid">
      <button class="btn btn-danger btn-lg" type="submit">Submit</button>
    </div>

  </form>

</div>
      </div>
    </div>
    
  </div>
  
</section>




















<?php get_footer();?>