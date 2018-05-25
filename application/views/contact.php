
    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact Us
      </h1>

      <p class="success"><?php echo $flash; ?></p>

      <!-- Content Row -->
      <div class="row">

          <!-- Contact Form -->
          <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
          <div class="row">
            <div class="col-lg-8 mb-4">
              <form action="<?php echo base_url('index.php/contact');?>" method="post" name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Name:</label>
                    <input type="text" name="first_name" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Surname:</label>
                    <input type="text" name="last_name" class="form-control" id="surname" required data-validation-required-message="Please enter your surname.">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Title:</label>
                    <input type="text" class="form-control" id="title" required data-validation-required-message="Please enter a Title.">
                    <p class="help-block"></p>
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                  </div>
                </div>
                <div class="control-group form-group">
                  <div class="controls">
                    <label>Message:</label>
                    <textarea name="message" rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                  </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" name="submit" value="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
              </form>

              <hr>

              <!-- Contact Details Column -->
                  <p>
                    Email:
                    <a href="mailto:adi@mcast.edu.mt">adi@mcast.edu.mt
                    </a>
                  </p>
                  <p>
                    Phone: +356 23987753
                  </p>
                  <p>
                      Misraħ Għonoq, Tarġa Gap
                      <br>Mosta, MST 1735
                      <br>
                  </p>

            </div>

      </div>
      <!-- /.row -->



        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5148.947731881395!2d14.416882272913297!3d35.918404419656156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e4e3219788d81%3A0xf4bc34b158eb728e!2sMCAST+Mosta!5e0!3m2!1sen!2smt!4v1525776005017" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
