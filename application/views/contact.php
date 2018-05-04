    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading/Breadcrumbs -->
      <h1 class="mt-4 mb-3">Contact Us </h1>

      <!-- Content Row -->
      <div class="row">

          <div class="col-lg-8 mb-4">
            <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Name:</label>
                  <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Surname:</label>
                  <input type="text" class="form-control" id="surname" required data-validation-required-message="Please enter your surname.">
                  <p class="help-block"></p>
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Title:</label>
                  <input type="text" class="form-control" id="title" required data-validation-required-message="Please enter a title.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Email Address:</label>
                  <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                </div>
              </div>
              <div class="control-group form-group">
                <div class="controls">
                  <label>Message:</label>
                  <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                </div>
              </div>
              <div id="success"></div>
              <!-- For success/fail messages -->
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
            </form>
          </div>

        <!-- Contact Details Column -->
        <div class="col-lg-8 mb-4">
            <p>
              Email:
              <a href="mailto:name@example.com">name@example.com
              </a>
            </p>
            <p>
              Phone: (+356) 23 987 753
            </p>
            <p>
              Misrah Ghonoq Targa Gap ,
            <br>Mosta Malta MST 1735
            <br>
            </p>
        </div>
      </div>
      <!-- /.row -->

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">

        <!-- Map Column -->
        <div class="col-lg-8 mb-4">
          <!-- Embedded Google Map -->
          <iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25850.998515881696!2d14.398687876359089!3d35.913324628992264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x130e4fd3892dd7b9%3A0xc7e94747c3647e86!2sMosta!5e0!3m2!1sen!2smt!4v1525442149525"></iframe>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
