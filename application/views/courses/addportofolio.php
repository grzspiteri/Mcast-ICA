
<!-- Page Content -->
<div class="container">

  <!-- Page Heading/Breadcrumbs -->
  <h1 class="mt-4 mb-3">
    Student's Portfolios - Add Portofolio
  </h1>




  <!-- Project One -->
  <div class="row">
    <div class="col-md-7">
      <?php echo form_open_multipart('upload/do_upload');?>

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
            <input  class="form-control" id="text" cols="40" 	rows="4"name="image_title" >
          </div>
        </div>

        <div id="success"></div>
        <!-- For success/fail messages -->
        <input type="file" name="user-file" size="20" class="form-control-file" id="exampleFormControlFile1">
        <hr>
        <button type="submit" value="upload" name="upload" class="btn btn-primary" id="image">Send</button>
      </form>
    </div>
  </div>
  <!-- /.row -->


  <hr>


</div>


</div>
<!-- /.container -->
