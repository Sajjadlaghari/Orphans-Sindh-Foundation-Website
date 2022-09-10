<section id="contact" class="contact" data-aos="fade-up" data-aos-duration="1700">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up" data-aos-duration="1700">Contact</h2>
          <!-- <p data-aos="fade-up" data-aos-duration="1700">Online Location of our Center</p>-->
        </div>

        <!-- <div data-aos="fade-up" data-aos-duration="1700">
          <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
        </div> -->

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1700">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Civil Hospital Road Sindh Colony Naushahro Feroze</p>
              </div>

              <div class="email" data-aos="fade-up" data-aos-duration="1700">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>orphansindnf@gmail.com</p>
              </div>

              <div class="phone" data-aos="fade-up" data-aos-duration="1700">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+92 300 3929 585</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-up" data-aos-duration="1700">

          <form class="user" name="register" method="post"">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" id="FirstName" name="name" placeholder="Name"  required="true">
                  </div>
                  <div class="col-sm-6">
                    <input type="email" class="form-control form-control-user" id="LastName" name="email" placeholder="Email"  required="true">
                  </div>
                </div>
                 <div class="form-group">
                  <input type="text" class="form-control form-control-user" id="subject" name="subject" placeholder="Subject" required="true">
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                  <div class="validate"></div>
                </div>


              <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-user btn-block">
                <?php
                  echo $msg;
                ?>
                
                </form>
                <hr>
              </div>

          </div>

        </div>

      </div>
    </section>