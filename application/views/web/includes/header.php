<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="andaman">
  <title>ANDAMAN_HOLIDAYS</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/fav.png" type="image/x-icon" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/fav.jpg" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.min.css" />
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css" />
  <link rel="icon" href="<?php echo base_url(); ?>assets/images/favicon.png" type="image/x-icon" />
  <link href="https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700&display=swap" rel="stylesheet">
  <!-- Remix Icon -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />

  <!-- gallery -->



  <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
</head>
<script type="text/javascript">
  setTimeout(function() {
    $('.message').fadeOut('fast');
  }, 2000);
</script>

<body>
  <header class="container-flui">
    <div class="header-top">
      <div class="container">
        <div class="row">
          <div class="col-md-4 d-none d-md-block mail-detail">
            <ul style="color: black">
              <li>Call US : +12 878 777 76765</li>
              <li>Email : info@andamanholidays.com</li>
            </ul>
          </div>
          <div class="col-md-4 logo">
            <a href="<?php echo base_url() ?>web"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" /></a>
            <a data-toggle="collapse" data-target="#menu-jk" href="#menu-jk"><i class="fas d-block d-sm-block d-md-none small-menu fa-bars"></i></a>
          </div>
          <div class="col-md-4 d-none d-md-block social-link">
            <ul>
              <li>
                <i class="fab fa-facebook-square" style="color: black"></i>
              </li>
              <li>
                <i class="fab fa-instagram" style="color: black"></i>
              </li>
			  <li>
                <i class="fab fa-twitter-square" style="color: black"></i>
              </li>
            </ul>
          </div>
          <?php if ($this->session->flashdata('message')) : ?>
            <div class="alert fade show message p-3 mt-3" style="z-index: 11111;position: absolute;right: 30px; background-color:#34d361 ">
              <?php echo $this->session->flashdata('message'); ?>

            </div>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div id="menu-jk" class="header-nav d-none d-md-block" style="width: 100%">
      <div class="container">
        <div class="row nav-row">
          <ul>
            <li><a href="<?php echo base_url() ?>web">Home</a></li>
            <li><a href="<?php echo base_url() ?>web/about_us">About Us</a></li>
            <li class="dropdown"><a href="<?php echo base_url() ?>web/destinations">Packages</a>
              <ul class="drop_list">

                <li><a href="<?php echo base_url() ?>web/adventure_package">Advanchere Special</a></li>
                <li><a href="<?php echo base_url() ?>web/romance_package">Romance Special</a></li>
                <li><a href="<?php echo base_url() ?>web/holiday_package">Holiday Special</a></li>

                <li><a href="<?php echo base_url() ?>web/family_package">Family Special</a></li>
                <!-- <li><a href="<?php echo base_url() ?>web/water_rides">Water Rides</a></li> --->


              </ul>
            </li>
            <li><a href="<?php echo base_url() ?>web/blog">Blog</a></li>
            <li><a href="<?php echo base_url() ?>web/gallery">Gallery</a></li>
            <li><a href="<?php echo base_url() ?>web/contact_us">Contact Us</a></li>
            <!-- Button trigger modal -->
            <div style="display: flex; justify-content: center; ">
              <button type="button" class="btn enquire show-modal" data-toggle="modal" data-target="#myModal">
                Enquire Form
              </button>
            </div>

          </ul>
        </div>
      </div>
    </div>







    <div class="container mb-5">
      <div class="row">
        <div class="col-md-12">
          <div class="modal-box">

            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div style="width: 800px;" class="modal-dialog" role="document">
                <div class="modal-content clearfix">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <div class="modal-body">
                    <h3 class="title">Enquiry Form</h3>
                    <p class="description"> Andaman Yatra Holidays - Get Best Deals on Andaman Packages</p>
                    <form id="enquiryForm" method="POST" action="<?php echo base_url() ?>web/enquiry_save">
                      <div class="form-group">
                        <span class="input-icon"><i class="fa fa-user" style="color: #454545;"></i></span>
                        <input type="text" name="fullname" class="form-control" placeholder="Name">
                      </div>
                      <div class="form-group">
                        <span class="input-icon"><i class="fa fa-mobile" style="color: #454545;"></i></span>
                        <input type="number" name="mobile_no" class="form-control" placeholder="Mobile Number">
                      </div>
                      <div class="form-group">
                        <span class="input-icon"><i class="fa-solid fa-envelope" style="color: #454545;"></i></span>
                        <input type="email" name="email" class="form-control" placeholder="Enter email">
                      </div>
                      <div class="form-group">
                        <span class="input-icon"><i class="fa-solid fa-location-dot" style="color: #454545;"></i></span>
                        <input type="text" name="location" class="form-control" placeholder="Location">
                      </div>


                      <button type="submit" class="btn">Enquire</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>




  </header>