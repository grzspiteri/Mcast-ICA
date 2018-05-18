<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "db_users");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_title = mysqli_real_escape_string($db, $_POST['image_title']);

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image, image_title) VALUES ('$image', '$image_title')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");
?>

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
            <input  class="form-control" id="text" cols="40" 	rows="4"name="image_title" >
          </div>
        </div>

        <div id="success"></div>
        <!-- For success/fail messages -->
        <input type="file" class="form-control-file" id="exampleFormControlFile1">
        <hr>
        <button type="submit" name="upload" class="btn btn-primary" id="image">Send</button>
      </form>
    </div>
  </div>
  <!-- /.row -->


  <hr>


</div>


</div>
<!-- /.container -->
