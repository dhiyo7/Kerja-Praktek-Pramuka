<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Ali Budi Purnomo">
  <meta name="keyword" content="">
  <link rel="shorcut icon" href="<?php echo base_url('images/roline24x24.png');?>" types="images/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <!-- start: Css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.min.css">
  <!-- plugins -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/simple-line-icons.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/animate.min.css"/>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/icheck/skins/flat/aero.css"/>
  <link href="<?php echo base_url()?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->
  <link rel="shortcut icon" href="<?php echo base_url()?>images/pra.png">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body id="mimin" class="dashboard form-signin-wrapper">
      <div class="container">
            <form class="form-signin" action="<?php echo base_url('login/proseslogin');?>" method="post">
    <!--     <form class="form-signin" action="<?php echo base_url('login/ceklogin');?>" method="post"> -->
          <div class="panel periodic-login">
              <span class="atomic-number">Login</span>
              <div class="panel-body text-center">
                  <h1 class="atomic-symbol"></h1>
                  <p class="atomic-mass">Salam Pramuka</p>
                  <p class="element-name">Indonesia</p>
                  <i class="icons icon-arrow-down"></i>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="text" class="form-text" name="username" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
                  <div class="form-group form-animate-text" style="margin-top:40px !important;">
                    <input type="password" class="form-text" name="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div>
                  <label class="pull-left">
                  <input type="checkbox" class="icheck pull-left" name="checkbox1"/> Remember me
                  </label>
                  <input type="submit" class="btn col-md-12" name="login" value="Login"/>
              </div>
                <div class="text-center" style="padding:5px;">
                    
                   <p>Belum Punya akun daftar <a href="<?php echo base_url()?>register"> <strong> disini</strong></a> </p>
                </div>
          </div>
        </form>
      </div>
      <!-- end: Content -->
      <!-- start: Javascript -->
      <script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
      <script src="<?php echo base_url()?>asset/js/jquery.ui.min.js"></script>
      <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
      <script src="<?php echo base_url()?>asset/js/plugins/moment.min.js"></script>
      <script src="<?php echo base_url()?>asset/js/plugins/icheck.min.js"></script>
      <!-- custom -->
      <script src="asset/js/main.js"></script>
      <script type="text/javascript">
       $(document).ready(function(){
         $('input').iCheck({
          checkboxClass: 'icheckbox_flat-aero',
          radioClass: 'iradio_flat-aero'
        });
       });
     </script>
     <!-- end: Javascript -->
   </body>
   </html>