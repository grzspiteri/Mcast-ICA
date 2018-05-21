<!DOCTYPE html>
<html lang="en">

  <head>
    <link rel="icon" href="https://yt3.ggpht.com/a-/AJLlDp1DUo3zo87KCY-wYfZJ_nvKDPrETHSq0QGNcg=s900-mo-c-c0xffffffff-rj-k-no">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>MCAST - Institute for the Creative Arts</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url('vendor/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('vendor/bootstrap/css/styles.css')?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </head>

  <body>
<!--about us Student portfolio Student links Contact Us
    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="<?=site_url('home')?>"><img src="<?=base_url('images/mcast.png')?>" alt="MCAST" height="40px" width="180px"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="MCAST">
         Institute for the Creative Arts
        </div>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url('home')?>">Home</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                About Us
              </a>
              <div class="dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?=site_url('News')?>">News and Events</a>
                  <a class="dropdown-item" href="<?=site_url('Regulations')?>">Regulations</a>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url('Course')?>">Portfolios</a>
            </li>
            <li class="nav-item">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Student Links
              </a>
              <div class="dropdown">
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <a class="dropdown-item" href="<?=site_url('Notices')?>">Cancelled Lectures and Notices</a>
                  <a class="dropdown-item" href="http://mcast.edu.mt:8223/rfm/source/Documents/handbooks/MCAST%20Handbook%202017%20-%20TECHNICAL_ONLINE.pdf">Handbook</a>
                  <a class="dropdown-item" href="http://www.mcast.edu.mt:8223/MainMenu/Library.aspx">Library</a>
                  <a class="dropdown-item" href="https://www.schoology.com/">Schoology</a>
                  <a class="dropdown-item" href="<?=site_url('Timetable')?>">Timetable</a>
                  <a class="dropdown-item" href="http://attendance.mcast.edu.mt/">Attendance</a>
                  <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Useful Documents
                  </button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">SOI Form</a>
                    <a class="dropdown-item" href="#">Extension Form</a>
                    <a class="dropdown-item" href="#">Excused Form</a>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?=site_url('contact')?>">Contact Us</a>
            </li>
            <li class="nav-item">
              <div class="dropdown">
              <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>
              <?=form_open('login/submit', array('class' => 'dropdown-menu p-4'));?>
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="email@email.com">
                  </div>
                  <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" type="password" class="form-control" id="password" placeholder="Password">
                  </div>
                  <button type="submit" class="btn btn-primary">Sign in</button>
              <?=form_close();?>


</div>
          </div>
      </div>
              </div>

            </li>


          </ul>
        </div>
      </div>
    </nav>
