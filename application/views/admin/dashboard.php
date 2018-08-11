<!DOCTYPE html>
<html lang="en">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Miminium Admin Template v.1">
  <meta name="author" content="Ali budi purnomo">
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
            $jk[] = $data->jk;
            $jml_jk[] = (float) $data->jml_jk;
             }
    ?> 
         <?php
        foreach($grafika as $data){
            $agama[] = $data->agama;
            $jml_agama[] = $data->jml_agama;
        }
    ?> 
          <?php
        foreach($grafi as $data){
            $tkt_pendidikan[] = $data->tkt_pendidikan;
            $jml_sekolah[] = $data->jml_sekolah;
        }
    ?> 

      <?php
        foreach($gol as $data){
            $gol_pramuka[] = $data->gol_pramuka;
            $jml_gol[] = $data->jml_gol;
        }
    ?> 
  <link rel="shortcut icon" href="<?php echo base_url()?>images/pra.png">
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
                <li class="user-name"><span>Admin</span></li>
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
                        <h3 class="animated fadeInLeft">Dashboard</h3>
                        <p class="animated fadeInDown"><span class="fa  fa-map-marker"></span> Yogyakarta,Indonesia</p> 
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="col-md-6 col-sm-6 text-right" style="padding-left:10px;">
                          <h3 style="color:#DDDDDE;"><span class="fa  fa-map-marker"></span>Yogyakarta</h3>
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
  <div class="col-md-6">
                <div class="panel">
                       <div class="panel-heading-white panel-heading">
                          <h4>Jenis Kelamin</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                             <canvas  id="canvas"></canvas>
                            </div>
                        </div>
                  </div>
            </div>
 <div class="col-md-6">
                <div class="panel">
                       <div class="panel-heading-white panel-heading">
                          <h4>Agama</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                             <canvas  id="canvas2"></canvas>
                            </div>
                        </div>
                  </div>
            </div>

 <div class="col-md-6">
                <div class="panel">
                       <div class="panel-heading-white panel-heading">
                          <h4>Sekolah</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                             <canvas  id="canvas3"></canvas>
                            </div>
                        </div>
                  </div>
            </div>

 <div class="col-md-6">
                <div class="panel">
                       <div class="panel-heading-white panel-heading">
                          <h4>Golongan</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                             <canvas  id="canvas4"></canvas>
                            </div>
                        </div>
                  </div>
            </div>

<!-- 
  <div class="col-md-12">
                <div class="panel">
                       <div class="panel-heading-white panel-heading">
                          <h4>Bar Chart</h4>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-12">
                             <canvas  id="barData"></canvas>
                            </div>
                        </div>
                  </div>
            </div> -->
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
     //   (function(jQuery){
    var lineChartData = {
                labels : <?php echo json_encode($jk);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jml_jk);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas").getContext("2d")).Line(lineChartData);

         var line = {
                labels : <?php echo json_encode($agama);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jml_agama);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas2").getContext("2d")).Line(line);

  var line = {
                labels : <?php echo json_encode($tkt_pendidikan);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jml_sekolah);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas3").getContext("2d")).Line(line);
     
     var line = {
                labels : <?php echo json_encode($gol_pramuka);?>,
                datasets : [
                    
                    {
                        fillColor: "rgba(60,141,188,0.9)",
                        strokeColor: "rgba(60,141,188,0.8)",
                        pointColor: "#3b8bba",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(152,235,239,1)",
                        data : <?php echo json_encode($jml_gol);?>
                    }

                ]
                
            }

        var myLine = new Chart(document.getElementById("canvas4").getContext("2d")).Line(line);
     

     </script>


  <!-- end: Javascript -->
  </body>
</html>