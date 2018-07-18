<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Isna Nur Azis">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salam Pramuka</title>
 
    <!-- start: Css -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/simple-line-icons.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/animate.min.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/plugins/fullcalendar.min.css"/>
  <link href="<?php echo base_url()?>asset/css/style.css" rel="stylesheet">
  <!-- end: Css -->

                <?php
        foreach($grafik as $data){
            $nama_lengkap[] = $data->nama_lengkap;
            $jk[] =  $data->jk;
        }
    ?>

  <link rel="shortcut icon" href="<?php echo base_url()?>asset/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
</head>
  </head>

 <body id="mimin" class="dashboard">
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
              </div>
                <a href="" class="navbar-brand">
                 <b>Salam Pramuka</b>
                </a>

              <ul class="nav navbar-nav search-nav">
                <li>
                   <div class="search">
                    <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                    <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>Pramuka Uye</span></li>
                  <li class="dropdown avatar-dropdown">
                   <img src="<?php echo base_url()?>asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"/>
                   <ul class="dropdown-menu user-dropdown">
                     <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
                     <li><a href="#"><span class="fa fa-calendar"></span> My Calendar</a></li>
                     <li role="separator" class="divider"></li>
                     <li class="more">
                      <ul>
                        <li><a href=""><span class="fa fa-cogs"></span></a></li>
                        <li><a href=""><span class="fa fa-lock"></span></a></li>
                        <li><a href=""><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li> -->
              </ul>
            </div>
          </div>
        </nav>
      <!-- end: Header -->

      <div class="container-fluid mimin-wrapper">
  
          <!-- start:Left Menu -->
               <div id="left-menu">
      <div class="sub-left-menu scroll">
        <ul class="nav nav-list">
            <li><div class="left-bg"></div></li>
            <li class="time">
              <h1 class="animated fadeInLeft">21:00</h1>
              <p class="animated fadeInRight">Sat,October 1st 2029</p>
            </li>

            <li><a href="<?php echo base_url()?>admin/index"><span class="fa-home fa"></span>Dashboard</a></li>

            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-database fa"></span> Data
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="<?php echo base_url()?>admin/data_anggota"><span class="fa-user fa margin= 5px"></span>Data Anggota</a></li>
                <li><a href="<?php echo base_url()?>admin/data_sekolah"><span class="fa-building fa"></span>Data Sekolah</a></li>
              </ul>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-print fa"></span> Report
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="<?php echo base_url()?>admin/laporan_pdf"><span class="fa-file-pdf-o fa"></span>Export to PDF</a></li>
                <li><a href="<?php echo base_url()?>admin/laporan_excel"><span class="fa-file-excel-o fa"></span>Export to Excel</a></li>
                <li><a href="<?php echo base_url()?>admin/report_upload"><span class=" icon-cloud-upload"></span>Data Upload</a></li>
              </ul>
            </li>
            <li class="ripple">
              <a class="tree-toggle nav-header">
                <span class="fa-rocket fa"></span> Posting
                <span class="fa-angle-right fa right-arrow text-right"></span>
              </a>
              <ul class="nav nav-list tree">
                <li><a href="<?php echo base_url()?>admin/kegiatan">Posting Kegiatan</a></li>
                <li><a href="<?php echo base_url()?>admin/penghargaan">Posting Penghargaan</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url()?>loginn/logout"><span class="fa-sign-out fa"></span>Logout</a></li>
            <!-- <li><a href="#"><span class="fa-home fa"></span>Dashboard</a></li> -->
          </ul>
        </div>
    </div>
          <!-- end: Left Menu -->

      
          <!-- start: content -->
            <div id="content">
                <div class="panel">
                  <div class="panel-body">
                      <div class="col-md-6 col-sm-12">
                        <h3 class="animated fadeInLeft">Customer Service</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Batavia,Indonesia</p>

                        <ul class="nav navbar-nav">
                            <li><a href="" >Impedit</a></li>
                            <li><a href="" class="active">Virtute</a></li>
                            <li><a href="">Euismod</a></li>
                            <li><a href="">Explicar</a></li>
                            <li><a href="">Rebum</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span> Banyumas</h3>
                          <h1 style="margin-top: -10px;color: #ddd;">30<sup>o</sup></h1>
                        </div>
                        <div class="col-md-6 col-sm-6">
                           <div class="wheather">
                            <div class="stormy rainy animated pulse infinite">
                              <div class="shadow">
                                
                              </div>
                            </div>
                            <div class="sub-wheather">
                              <div class="thunder">
                                
                              </div>
                              <div class="rain">
                                  <div class="droplet droplet1"></div>
                                  <div class="droplet droplet2"></div>
                                  <div class="droplet droplet3"></div>
                                  <div class="droplet droplet4"></div>
                                  <div class="droplet droplet5"></div>
                                  <div class="droplet droplet6"></div>
                                </div>
                            </div>
                          </div>
                        </div>                   
                    </div>
                  </div>                    
                </div>
<form class="form-group">

  <canvas id="canvas" width="500" height="160"></canvas>
  <canvas id="canvas2" width="500" height="160"></canvas>
  <br> <canvas id="canvas3" width="500" height="160"></canvas>
</form>
          <!-- end: content -->
      <button id="mimin-mobile-menu-opener" class="animated rubberBand btn btn-circle btn-danger">
        <span class="fa fa-bars"></span>
      </button>
       <!-- end: Mobile -->

    <!-- start: Javascript -->
    <script src="<?php echo base_url()?>asset/js/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/jquery.ui.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
    <script src="<?php echo base_url()?>asset/js/plugins/moment.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/fullcalendar.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/jquery.vmap.min.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="<?php echo base_url()?>asset/js/plugins/chart.min.js"></script>


    <!-- custom -->
     <script src="<?php echo base_url()?>asset/js/main.js"></script>
     <script type="text/javascript" src="<?php echo base_url().'asset/chartjs/chart.min.js'?>"></script>
     <script type="text/javascript">
    var lineChartData = {
                labels : <?php echo json_encode($nama_lengkap);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jk);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

         var lineChartData = {
                labels : <?php echo json_encode($nama_lengkap);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jk);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Line(lineChartData);

            var lineChartData = {
                labels : <?php echo json_encode($nama_lengkap);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jk);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Line(lineChartData);
     </script>
  <!-- end: Javascript -->
  </body>
</html>