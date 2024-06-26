<?php include "./js/section/header.php" ?>

  <!-- contact section -->
  <section class="contact_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Get In Touch
        </h2>
      </div>
      <div class="row">
        <div class="col-md-7">
          <div class="form_container">
          <form action="./Get-in-touch.php"
              method = "POST" >
              <div>
                <input name="fullname" type="text" placeholder="Full Name" required />
              </div>
              <div>
                <input name="email" type="email" placeholder="Email" required />
              </div>
              <div>
                <input name="phonenumber" type="number" placeholder="Phone Number" required />
              </div>
              <div>
                <input name="message" type="text" class="message-box" placeholder="Message" required />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-5">
          <div class="img-box">
            <img src="images/contact-img.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <?php include "./js/section/footer.php"; ?>
