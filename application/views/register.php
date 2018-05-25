<div class="container">
<hr>
  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">
    Student's Portfolios - Register
  </h1>
  <div class="row">

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <form action="<?php echo base_url('index.php/home');?>" method="post" name="regoster" id="register" novalidate>
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
                <label>Course:</label>
                <input type="text" class="form-control" name="course" id="course" required data-validation-required-message="Please enter a Title.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email:</label>
                <input type="text" name="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
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

</div>
