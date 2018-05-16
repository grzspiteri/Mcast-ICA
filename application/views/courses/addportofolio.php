<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">
    Student's Portfolios - Add Portofolio
  </h1>




  <!-- Project One -->
  <div class="row">
    <div class="col-md-7">
      <form name="sentMessage" id="contactForm" novalidate>
              <div class="control-group form-group">
          <div class="controls">
            <label>Title:</label>
            <input type="text" class="form-control" id="title" required data-validation-required-message="Please enter a Title.">
            <p class="help-block"></p>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Description:</label>
            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Link:</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
          </div>
        </div>

        <div id="success"></div>
        <!-- For success/fail messages -->
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        <hr>
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
      </form>
    </div>
  </div>
  <!-- /.row -->


  <hr>


</div>


</div>
<!-- /.container -->
